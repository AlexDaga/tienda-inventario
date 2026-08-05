//Validaciones

const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");

function revisarPedido(event) {

    event.preventDefault();

    const nombre = document.querySelector("#nombre").value;
    const apellido = document.querySelector("#apellido").value;
    const ci = document.querySelector("#ci").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "") {

        avisoPedido.textContent = "Falta tu nombre, caserito.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else if (apellido === "") {

        avisoPedido.textContent = "Debe ingresar su apellido.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else if (ci === "") {

        avisoPedido.textContent = "Debe ingresar su CI.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else if (correo.includes("@") === false) {

        avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else {

        avisoPedido.textContent = "Pedido recibido, caserito. Te contactamos hoy.";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}

formularioPedido.addEventListener("submit", revisarPedido);