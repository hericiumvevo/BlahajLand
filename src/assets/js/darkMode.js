import nestedPath from '@/assets/json/nestedPath.json'

export function switchTheme(theme) {
    if (theme === "system") {
        const isOsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        switchTheme(isOsDark ? "night" : "day");
        return;
    }
    document.querySelector('html').dataset.theme = `theme-${theme}`;
    let icon = document.getElementById("blahaj");
    if (icon !== undefined) {
        icon.setAttribute("src", `${nestedPath.path}images/logo-${theme}.png`)
    }
    icon = document.getElementById("mblahaj");
    if (icon !== undefined) {
        icon.setAttribute("src", `${nestedPath.path}images/logo-${theme}.png`)
    }
    document.getElementById("theme").style.display = "none";
}