<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Productos.php");

class ProductosDAO {

    public function insertarProducto(Producto $producto) {
        $data_source = new DataSource();
        $sql = "INSERT INTO productos (nombre_producto, descripcion, unidadesDisponibles, valorUnidad, idColor, idTalla, idFoto, idTipoProducto)
                VALUES (:nombre_producto, :descripcion, :unidadesDisponibles, :valorUnidad, :idColor, :idTalla, :idFoto, :idTipoProducto)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre_producto' => $producto->getNombreProducto(),
            ':descripcion' => $producto->getDescripcion(),
            ':unidadesDisponibles' => $producto->getUnidadesDisponibles(),
            ':valorUnidad' => $producto->getValorUnidad(),
            ':idColor' => $producto->getIdColor(),
            ':idTalla' => $producto->getIdTalla(),
            ':idFoto' => $producto->getIdFoto(),
            ':idTipoProducto' => $producto->getIdTipoProducto()
        ));
        return $resultado;
    }

    public function buscarProductoPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM productos WHERE idProducto = :id", array(':id' => $id));
        $producto = null;
        if (count($data_table) == 1) {
            $producto = new Producto(
                $data_table[0]["idProducto"],
                $data_table[0]["nombre_producto"],
                $data_table[0]["descripcion"],
                $data_table[0]["unidadesDisponibles"],
                $data_table[0]["valorUnidad"],
                $data_table[0]["idColor"],
                $data_table[0]["idTalla"],
                $data_table[0]["idFoto"],
                $data_table[0]["idTipoProducto"]
            );
            return $producto;
        } else {
            return null;
        }
    }

    public function leerProductos() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM productos");
        $productos = array();
        foreach ($data_table as $row) {
            $producto = new Producto(
                $row["idProducto"],
                $row["nombre_producto"],
                $row["descripcion"],
                $row["unidadesDisponibles"],
                $row["valorUnidad"],
                $row["idColor"],
                $row["idTalla"],
                $row["idFoto"],
                $row["idTipoProducto"]
            );
            array_push($productos, $producto);
        }
        return $productos;
    }

    public function modificarProducto(Producto $producto) {
        $data_source = new DataSource();

        $sql = "UPDATE productos SET nombre_producto = :nombre_producto, descripcion = :descripcion, 
                unidadesDisponibles = :unidadesDisponibles, valorUnidad = :valorUnidad, 
                idColor = :idColor, idTalla = :idTalla, idFoto = :idFoto, idTipoProducto = :idTipoProducto 
                WHERE idProducto = :idProducto";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre_producto' => $producto->getNombreProducto(),
            ':descripcion' => $producto->getDescripcion(),
            ':unidadesDisponibles' => $producto->getUnidadesDisponibles(),
            ':valorUnidad' => $producto->getValorUnidad(),
            ':idColor' => $producto->getIdColor(),
            ':idTalla' => $producto->getIdTalla(),
            ':idFoto' => $producto->getIdFoto(),
            ':idTipoProducto' => $producto->getIdTipoProducto(),
            ':idProducto' => $producto->getIdProducto()
        ));

        return $resultado;
    }

    public function borrarProducto($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM productos WHERE idProducto = :id", array(':id' => $id));
        
        return $resultado;
    }
}

?>
