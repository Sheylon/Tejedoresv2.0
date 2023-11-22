<?php

require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Fotos.php");

class FotoDAO {

    public function insertarFoto(Foto $foto) {
        $data_source = new DataSource();
        $sql = "INSERT INTO fotos (urlFoto, idProducto) VALUES (:urlFoto, :idProducto)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':urlFoto' => $foto->getUrlFoto(),
            ':idProducto' => $foto->getIdProducto()
        ));
        return $resultado;
    }

    public function buscarFotoPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM fotos WHERE idFoto = :id", array(':id' => $id));
        $foto = null;
        if (count($data_table) == 1) {
            $foto = new Foto(
                $data_table[0]["idFoto"],
                $data_table[0]["urlFoto"],
                $data_table[0]["idProducto"]
            );
            return $foto;
        } else {
            return null;
        }
    }

    public function leerFotos() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM fotos");
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

}
?>
