function switchTheme(theme) {
    switch (theme) {
        case "system":
            const isOsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            switchTheme(isOsDark ? "dark" : "light");
            break;
        case "light":
            $("#blahaj").attr("src", `img/logo-light.png`);
            document.querySelector('html').dataset.theme = `theme-light`;
            document.cookie = `theme=light`;
            break;
        case "dark":
            $("#blahaj").attr("src", `img/logo-dark.png`);
            document.querySelector('html').dataset.theme = `theme-dark`;
            document.cookie = `theme=dark`;
            break;
        default:
            break;
    }
    $(".menu#m1").hide();
    return true;
}

switch (document.cookie) {
    case "theme=light":
        switchTheme("light");
        break;
    default:
        switchTheme("dark");
        break;
}
