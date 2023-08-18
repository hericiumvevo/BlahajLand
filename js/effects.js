function showText() {
    $(this).find("p").show();
    return true;
}

function hideText() {
    $(this).find("p").hide();
    return true;
}

function hideShowText(id) {
    $("#" + id).hover(showText, hideText);
}

hideShowText("discord");
hideShowText("open");
hideShowText("theme");