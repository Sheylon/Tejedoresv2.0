<?php

require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/CategoriaProducto.php");

class CategoriaProductoDAO {

    public function buscarCategoriaPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM categoria_producto WHERE idCategoriaProducto = :id", array(':id' => $id));
        
        $categoria = null;
        if (count($data_table) == 1) {
            $categoria = new CategoriaProducto(
                $data_table[0]["idCategoriaProducto"],
                $data_table[0]["nombre"],
                $data_table[0]["descripcion"]
            );
            return $categoria;
        } else {
            return null;
        }
    }

    public function leerCategorias() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM categoria_producto");
        $categorias = array();
        foreach ($data_table as $row) {
            $categoria = new CategoriaProducto(
                $row["idCategoriaProducto"],
                $row["nombre"],
                $row["descripcion"]
            );
            array_push($categorias, $categoria);
        }
        return $categorias;
    }

    public function insertarCategoria(CategoriaProducto $categoria) {
        $data_source = new DataSource();
        $sql = "INSERT INTO categoria_producto VALUES (:idCategoriaProducto, :nombre, :descripcion)";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idCategoriaProducto' => $categoria->getIdCategoriaProducto(),
            ':nombre' => $categoria->getNombre(),
            ':descripcion' => $categoria->getDescripcion()
        ));
        return $resultado;
    }

    public function modificarCategoria(CategoriaProducto $categoria) {
        $data_source = new DataSource();

        $sql = "UPDATE categoria_producto SET nombre = :nombre, descripcion = :descripcion WHERE idCategoriaProducto = :idCategoriaProducto";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre' => $categoria->getNombre(),
            ':descripcion' => $categoria->getDescripcion(),
            ':idCategoriaProducto' => $categoria->getIdCategoriaProducto()
        ));

        return $resultado;
    }

    public function borrarCategoria($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM categoria_producto WHERE idCategoriaProducto = :id", array(':id' => $id));
        
        return $resultado;
    }
}

?>
