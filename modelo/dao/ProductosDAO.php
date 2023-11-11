<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Productos.php");
require_once(__DIR__ . "/../entidad/Foto.php");
require_once(__DIR__ . "/../entidad/Color.php");  
require_once(__DIR__ . "/../entidad/Talla.php");

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

    public function insertarColor(Color $color) {
        $data_source = new DataSource();
        $sql = "INSERT INTO color (color) VALUES (:color)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':color' => $color->getColor()
        ));
        return $resultado;
    }

    public function insertarTalla(Talla $talla) {
        $data_source = new DataSource();
        $sql = "INSERT INTO talla (talla) VALUES (:talla)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':talla' => $talla->getTalla()
        ));
        return $resultado;
    }

    public function insertarFoto(Foto $foto) {
        $data_source = new DataSource();
        $sql = "INSERT INTO fotos (urlFoto, idProducto) VALUES (:urlFoto, :idProducto)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':urlFoto' => $foto->getUrlFoto(),
            ':idProducto' => $foto->getIdProducto()
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

    public function modificarFoto(Foto $foto) {
        $data_source = new DataSource();
        $sql = "UPDATE fotos SET urlFoto = :urlFoto, idProducto = :idProducto WHERE idFoto = :idFoto";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':urlFoto' => $foto->getUrlFoto(),
            ':idProducto' => $foto->getIdProducto(),
            ':idFoto' => $foto->getIdFoto()
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
