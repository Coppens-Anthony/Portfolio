!(document.body && document.body.classList) ? document.addEventListener("DOMContentLoaded", function () {
    document.body.classList.remove("no-js");
    document.body.classList.add("js-enabled");
}) : (document.body.classList.remove("no-js"),
    document.body.classList.add("js-enabled"));