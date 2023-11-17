function insertarProducto() {
    const nombre = document.getElementById('nombre').value;
    const descripcion = document.getElementById('descripcion').value;
    const unidades = document.getElementById('unidades').value;
    const valor = document.getElementById('valor').value;
    const categoria = document.getElementById('categoria').value;
  
    // Realizar la petición AJAX para insertar el producto en la base de datos
    // Aquí deberías usar una biblioteca como fetch o jQuery.ajax para la comunicación con el servidor
  
    // Ejemplo de cómo podrías enviar los datos al servidor usando fetch
    fetch('/insertar_producto.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        nombre,
        descripcion,
        unidades,
        valor,
        categoria,
      }),
    })
    .then(response => response.json())
    .then(data => {
      // Aquí puedes manejar la respuesta del servidor
      console.log(data);
      alert('Producto insertado con éxito');
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Hubo un error al insertar el producto');
    });
  }
  