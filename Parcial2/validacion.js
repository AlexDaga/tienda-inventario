const formularioPedido = document.querySelector("#form-helados");
const avisoPedido = document.querySelector("#aviso-helados");

function revisarPedido(event) {

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "" || correo === "") {

        event.preventDefault();
        avisoPedido.textContent = "Falta tu nombre o tu correo-sen eso no podemos anotar el pedido";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else if (correo.includes("@") === false) {

        event.preventDefault();
        avisoPedido.textContent = "Ese correo no tiene arroba - revisalo por favor.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else {

        avisoPedido.textContent = "Pedido anotado-te atiende Alex Brayan Flores Daga";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");

    }
}

formularioPedido.addEventListener("submit", revisarPedido);