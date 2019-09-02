$(document).ready(function () {
    fixHeight();
})

function fixHeight() {
    var height = $("#canvasContent").height();
    $('.heightCanvas').css({ "height": height });
}