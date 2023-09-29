export function currentPage(route) {
    let path = route.path;
    if (path.endsWith("services")) {
        return "SERVICES";
    }
    if (path.endsWith("sites")) {
        return "SITES";
    }
    if (path.endsWith("donations")) {
        return "DONATIONS";
    }
    return "HOME";
}
