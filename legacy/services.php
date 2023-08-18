<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services - blahaj.land</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="icon" href="im/fav.png">
    <meta name="description" content="A small, free hosting service ran by a kitty">
    <meta property="og:title" content="blahaj.land">
    <meta property="og:description" content="A small, free hosting service ran by a kitty">
    <link rel="stylesheet/less" type="text/css" href="css/sites.less">
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <script defer src="js/darkmode.js"></script>
    <?php include_once "php/generateCard.php" ?>
</head>
<body>
<div id="navbar">
    <script>$("#navbar").load("parts/navbar.html")</script>
</div>
<div id="websites">
    <h1>Services</h1>
    <h2>The stuff we host >:3</h2>
    <div id="wl">
        <?php generateCard("cards/services"); ?>
    </div>
</div>
<footer>
    <script>$("footer").load("parts/footer.html")</script>
</footer>
</body>
</html>

<!-- 🇦 🇧 🇨 🇩 🇪 🇫 🇬 🇭 🇮 🇯 🇰 🇱 🇲 🇳 🇴 🇵 🇶 🇷 🇸 🇹 🇺 🇻 🇼 🇽 🇾 🇿 -->