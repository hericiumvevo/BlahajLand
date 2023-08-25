function switchTheme(theme) {
    if (theme === "sys") {
        const isOsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        switchTheme(isOsDark ? "dark" : "light");
    } else {
        $("#blahaj").attr("src", `img/logo-${theme}.png`);
        document.querySelector('html').dataset.theme = `theme-${theme}`;
        document.cookie = `theme=${theme}`;
    }
    $(".menu#m1").hide();
}

function switchThemeAlt() {
    if (document.cookie === "theme=dark") {
        switchTheme("light");
    } else {
        switchTheme("dark");
    }
}

switch (document.cookie) {
    case "theme=dark":
        switchTheme("dark");
        break;
    case "theme=light":
        switchTheme("light");
        break;
    default:
        switchTheme("system");
        break;
}