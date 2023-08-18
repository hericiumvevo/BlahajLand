<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="icon" href="im/fav.png">
    <meta name="description" content="A small, free hosting service ran by a kitty">
    <meta property="og:title" content="blahaj.land">
    <meta property="og:description" content="A small, free hosting service ran by a kitty">
    <meta charset="UTF-8">
    <title>Sites - blahaj.land</title>
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
    <h1>Sites</h1>
    <h2>Here you can view our user's sites :3</h2>
    <div id="wl">
        <?php generateCard("cards/sites")?>
    </div>
</div>
<footer>
    <script>$("footer").load("parts/footer.html")</script>
</footer>
</body>
</html>

<!-- 🇦 🇧 🇨 🇩 🇪 🇫 🇬 🇭 🇮 🇯 🇰 🇱 🇲 🇳 🇴 🇵 🇶 🇷 🇸 🇹 🇺 🇻 🇼 🇽 🇾 🇿 -->