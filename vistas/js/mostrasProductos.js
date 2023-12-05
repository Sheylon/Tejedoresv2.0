document.addEventListener("DOMContentLoaded", function () {
    var comprarForms = document.querySelectorAll(".comprarForm");

    comprarForms.forEach(function (comprarForm) {
        comprarForm.addEventListener("submit", function (event) {
            event.preventDefault();
            var idProducto = comprarForm.querySelector("input[name='idProducto']").value;
            window.location.href = "verProducto.php?idProducto=" + idProducto;
        });
    });
});
