function switchTheme(theme) {
    $("#blahaj").attr("src", `im/logo-vert-${theme}.png`);
    document.querySelector('html').dataset.theme = `theme-${theme}`;
    document.cookie = `theme=${theme}`;
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
        const isOsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        switchTheme(isOsDark?"dark":"light");
        break;
}