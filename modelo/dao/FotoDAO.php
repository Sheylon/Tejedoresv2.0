<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Foto.php");

class FotoDAO {


    public function insertarFoto(Foto $foto) {
        $data_source = new DataSource();
        $sql = "INSERT INTO foto (idFoto, urlFoto, idProducto) VALUES (:idFoto, :urlFoto, :idProducto)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idFoto' => $foto->getIdFoto(),
            ':urlFoto' => $foto->getUrlFoto(),
            ':idProducto' => $foto->getIdProducto()
        ));
        return $resultado;
    }

    public function leerFotosPorProducto($idProducto) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM foto WHERE idProducto = :idProducto", 
                                                    array(':idProducto' => $idProducto));
        $fotos = array();
        foreach ($data_table as $row) {
            $foto = new Foto(
                $row["idFoto"],
                $row["urlFoto"],
                $row["idProducto"]
            );
            array_push($fotos, $foto);
        }
        return $fotos;   
    }

    // Otros métodos para insertar, modificar y borrar fotos si es necesario
}
?>

