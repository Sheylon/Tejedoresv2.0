document.getElementById('formProducto').addEventListener('submit', function (event) {
  event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

  // Aquí puedes agregar código adicional para validar los campos si es necesario

  // Enviar el formulario usando AJAX
  var formData = new FormData(this);

  fetch('insertar_producto.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.text())
  .then(message => {
      alert(message); // Muestra el mensaje de respuesta del servidor
  })
  .catch(error => console.error('Error:', error));
});

