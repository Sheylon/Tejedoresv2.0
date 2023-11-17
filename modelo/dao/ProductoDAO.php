<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Producto.php");

class ProductoDAO {

    public function buscarProductoPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM producto WHERE idProducto = :id", 
                                                    array(':id' => $id));
        $producto = null;
        if (count($data_table) == 1) {
            $producto = new Producto(
                $data_table[0]["idProducto"],
                $data_table[0]["nombre"],
                $data_table[0]["descripcion"],
                $data_table[0]["unidadesDisponibles"],
                $data_table[0]["valorUnidad"],
                $data_table[0]["idCategoriaProducto"]
            );
            return $producto;
        } else {
            return null;
        }
    }    
    
    public function leerProductos() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM producto");
        $productos = array();
        foreach ($data_table as $row) {
            $producto = new Producto(
                $row["idProducto"],
                $row["nombre"],
                $row["descripcion"],
                $row["unidadesDisponibles"],
                $row["valorUnidad"],
                $row["idCategoriaProducto"]
            );
            array_push($productos, $producto);
        }
        return $productos;   
    }
    
    public function insertarProducto(Producto $producto) {
        $data_source = new DataSource();
        $sql = "INSERT INTO producto VALUES (:idProducto, :nombre, :descripcion, :unidadesDisponibles, :valorUnidad, :idCategoriaProducto)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idProducto' => $producto->getIdProducto(),
            ':nombre' => $producto->getNombre(),
            ':descripcion' => $producto->getDescripcion(),
            ':unidadesDisponibles' => $producto->getUnidadesDisponibles(),
            ':valorUnidad' => $producto->getValorUnidad(),
            ':idCategoriaProducto' => $producto->getIdCategoriaProducto()
        ));
        return $resultado;
    }
    
    public function modificarProducto(Producto $producto) {
        $data_source = new DataSource();

        $sql = "UPDATE producto SET nombre = :nombre, descripcion = :descripcion, 
                unidadesDisponibles = :unidadesDisponibles, valorUnidad = :valorUnidad,
                idCategoriaProducto = :idCategoriaProducto WHERE idProducto = :idProducto";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre' => $producto->getNombre(),
            ':descripcion' => $producto->getDescripcion(),
            ':unidadesDisponibles' => $producto->getUnidadesDisponibles(),
            ':valorUnidad' => $producto->getValorUnidad(),
            ':idCategoriaProducto' => $producto->getIdCategoriaProducto(),
            ':idProducto' => $producto->getIdProducto()
        ));
        
        return $resultado;
    }
    
    public function borrarProducto($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM producto WHERE idProducto = :id", array(':id' => $id));
        
        return $resultado;
    }
}

?>
