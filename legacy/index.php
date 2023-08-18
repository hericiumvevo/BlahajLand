<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="icon" href="im/fav.png">
    <meta name="description" content="A small, free hosting service ran by a kitty">
    <meta property="og:title" content="blahaj.land">
    <meta property="og:description" content="A small, free hosting service ran by a kitty">
    <meta charset="UTF-8">
    <title>blahaj.land</title>
    <link rel="stylesheet/less" type="text/css" href="css/landing.less"/>
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <?php

    include_once "php/generateCard.php"

    ?>
</head>
<body>
<div id="navbar">
    <script>$("#navbar").load("parts/navbar.html")</script>
</div>
<div id="portal">
    <div id="catchphrase">
        <h1>Welcome back uwu 👋</h1>
        <p>
            Welcome to <code>blahaj.land</code>, the ultimate destination for secure and seamless online storage !
            Embrace the convenience of unlimited storage space and bid farewell to worries of data loss. Join us today
            and embark on a hassle-free journey into the realm of secure online storage at <code>blahaj.land</code> !
        </p>
    </div>
    <div id="buttons">
        <a href="https://discord.gg/23ScBhN7xx"
           rel="noopener noreferrer nofollow"
           target="_blank">
            <img src="im/icons/join.png">
            Join <code>blahaj.land</code>
        </a>
        <a href="https://blahaj.land/yunohost/sso"
           rel="noopener noreferrer nofollow"
           target="_blank">
            <img src="im/icons/log.png">
            Open <code>blahaj.land</code>
        </a>
    </div>
</div>

<div id="bp">
    <h1>Why ?</h1>
    <div id="bps">
        <?php generateCard("cards/bps")?>
    </div>
</div>
<footer>
    <script>$("footer").load("parts/footer.html")</script>
</footer>
<script>
    let easteregg = {"value": 6};
    $("#uwu").on("click", function () {
        if (easteregg.value === 0) {
            window.location.href = "im/bp/final.jpg";
        }
        easteregg.value -= 1;
    })
</script>
</body>
</html>