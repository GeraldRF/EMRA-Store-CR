function iniciarSesion() {

    window.location = "";

} //Fin function
function registrar() {
    window.location = "";
}

function subirArchivo() {

    window.location = "";

} //Fin function

function verificar() {
    var x = document.getElementById("user");
    var resul = "";

    if (x.value !== "") {

        if (isNaN(x.value)) {
            resul = "<p class='advertencia'>Entrada valida solo para numeros.</p>";
        } //Fin if

    } //Fin if vacio

    document.getElementById("resultado").innerHTML = resul;
} //Fin verificar