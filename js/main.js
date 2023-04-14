function validarFormularioAlmacen() {
  const producto = document.getElementById("producto").value;
  const cantidad = document.getElementById("cantidad").value;
  const costo = document.getElementById("costo").value;
  const moneda = document.getElementById("moneda").value;
  const ubicacion = document.getElementById("ubicacion").value;
  const fecha_de_ingreso = document.getElementById("fecha_de_ingreso").value;

  if (producto == "" || cantidad == "" || costo == "" || moneda == "" || ubicacion == "" || fecha_de_ingreso == "") {
      swal("Error", "Completa todos los campos", "warning");
      return false;
  }
}



function FormularioRegistrarUsuarios() {
  const nombre = document.getElementById("nombre").value;
  const apellido = document.getElementById("apellido").value;
  const usuario = document.getElementById("usuario").value;
  const password = document.getElementById("password").value;

  if (nombre == "" || apellido == "" || usuario == "" || password == "") {
      swal("Error", "Completa todos los campos", "warning");
      return false;
  }
}
