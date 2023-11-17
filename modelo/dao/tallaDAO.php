<?php

require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Talla.php");

class TallaDAO {

    public function buscarTallaPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM talla WHERE idtalla = :id", array(':id' => $id));
        
        $talla = null;
        if (count($data_table) == 1) {
            $talla = new Talla(
                $data_table[0]["idtalla"],
                $data_table[0]["talla"]
            );
            return $talla;
        } else {
            return null;
        }
    }

    public function leerTallas() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM talla");
        $tallas = array();
        foreach ($data_table as $row) {
            $talla = new Talla(
                $row["idtalla"],
                $row["talla"]
            );
            array_push($tallas, $talla);
        }
        return $tallas;
    }

    public function insertarTalla(Talla $talla) {
        $data_source = new DataSource();
        $sql = "INSERT INTO talla VALUES (:idtalla, :talla)";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idtalla' => $talla->getIdTalla(),
            ':talla' => $talla->getTalla()
        ));
        return $resultado;
    }

    public function modificarTalla(Talla $talla) {
        $data_source = new DataSource();

        $sql = "UPDATE talla SET talla = :talla WHERE idtalla = :idtalla";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':talla' => $talla->getTalla(),
            ':idtalla' => $talla->getIdTalla()
        ));

        return $resultado;
    }

    public function borrarTalla($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM talla WHERE idtalla = :id", array(':id' => $id));
        
        return $resultado;
    }
}

?>
