if (document.getElementById("btnModal")) {
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("btnModal");
    var span = document.getElementsByClassName("close")[0];
    var body = document.getElementsByTagName("body")[0];

    btn.onclick = function () {
        modal.style.visibility = "visible";
        modal.style.overflow = "scroll";
        body.style.position = "static";
        body.style.overflow = "hidden";
    }

    span.onclick = function () {
        modal.style.visibility = "hidden";

        body.style.position = "inherit";
        body.style.height = "auto";
        body.style.overflow = "visible";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.visibility = "hidden";

            body.style.position = "inherit";
            body.style.height = "auto";
            body.style.overflow = "visible";
        }
    }
}
