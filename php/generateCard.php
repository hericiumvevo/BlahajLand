<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*<div onclick="window.location.href = ''" id="talisman">
            <img src="">
            <h2></h2>
            <p></p>
            <code></code>
        </div>*/

function generateCard($folder)
{
    $files = scandir($folder);
    if ($files === false) {
        return 1;
    }

    foreach ($files as $f) {
        if (preg_match("/([a-zA-Z0-9]*\.json)$/mi", $f) === 1) {
            $cnt = file_get_contents($folder . "/" . $f);
            if ($cnt === false) {
                return 1;
            }
            $obj = json_decode($cnt, true);
            if ($obj === null) {
                return 1;
            }
            if (isset($obj["exec"])) {
                echo '<div onclick=" ' . $obj["exec"] . ' "';
            } else if ($obj["link"] !== "") {
                $exec = "window.location.href = '" . $obj["link"] . "'";
                echo '<div onclick="' . $exec . '" ';
            } else {
                echo '<div ';
            }
            $link = "url('" . $obj["bg"] . "')";
            echo 'style="background: linear-gradient(' . $obj["alp"] . ',' . $obj["pop"] . '), ' . $link . ' center no-repeat; background-size: cover;">';
            echo '<img src="' . $obj["icon"] . '" />';
            echo '<h2>' . $obj["title"] . '</h2>';
            echo '<p>' . $obj["desc"] . '</p>';
            if ($obj["code"] !== "") {
                echo '<code style="background: var(--code-color)">' . $obj["code"] . '</code>';
            }
            echo '</div>';
        }
    }
    return 0;

}