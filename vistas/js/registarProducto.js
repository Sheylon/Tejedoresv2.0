
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


$(document).ready(function () {
  // Cargar categorías y tallas al cargar la página
  cargarCategoriasTallas();

  function cargarCategoriasTallas() {
      $.ajax({
          url: 'obtener_categorias_tallas.php',
          type: 'GET',
          dataType: 'json',
          success: function (data) {
              // Llenar el select de categorías con las obtenidas
              var selectCategoria = $('#categoria');
              selectCategoria.empty();

              $.each(data.categorias, function (index, categoria) {
                  selectCategoria.append($('<option>', {
                      value: categoria.idCategoriaProducto,
                      text: categoria.nombre
                  }));
              });

              // Llenar el select de tallas con las obtenidas
              var selectTalla = $('#talla');
              selectTalla.empty();

              $.each(data.tallas, function (index, talla) {
                  selectTalla.append($('<option>', {
                      value: talla.idtalla,
                      text: talla.talla
                  }));
              });

              // Mostrar la primera categoría en el formulario (puedes ajustar según tus necesidades)
              mostrarTalla();
          },
          error: function (error) {
              console.error('Error al obtener categorías y tallas:', error);
          }
      });
  }

  // Función para mostrar la sección de talla según la categoría seleccionada
  function mostrarTalla() {
      var categoriaSeleccionada = $('#categoria').val();
      var tallaContainer = $('#tallaContainer');

      // Lógica para mostrar o ocultar la sección de talla según la categoría
      if (categoriaSeleccionada === 'ropa') {
          tallaContainer.show();
      } else {
          tallaContainer.hide();
      }
  }

  // Llamar a mostrarTalla cuando cambie la categoría seleccionada
  $('#categoria').on('change', mostrarTalla);
});
