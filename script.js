const body = document.body;
const botonModo = document.getElementById("btn-tema");

let esDeNoche = false;

function altenarModo() {
    body.classList.toggle("oscuro");

    console.log(body.className);

    esDeNoche = !esDeNoche;

    if (esDeNoche) {
        botonModo.textContent = "☀️ Modo Día";
    } else {
        botonModo.textContent = "🌙 Modo Noche";
    }
}

botonModo.addEventListener("click", altenarModo);