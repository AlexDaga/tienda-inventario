const boton = document.querySelector("#btn-confirmar");

function confirmarPedido() {

    const mensaje = document.querySelector("#mensaje");

    mensaje.textContent = "Pedido recibido- te atiende: Alex Brayan Flores Daga";

    mensaje.classList.remove("oculto");
}

boton.addEventListener("click", confirmarPedido);