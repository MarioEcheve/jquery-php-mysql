<?php
    include_once  $_SERVER['DOCUMENT_ROOT'] . '/prueba/ffError.php';

class Usuario
{
    private $db;
    private $error;
    private $exito;


    /**
     * Inactivos constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    private function setExito()
    {
        $this->exito = 'Operacion realizada exitosamente';
    }

    public function getError()
    {
        return $this->error;
    }

    public function getExito()
    {
        return $this->exito;
    }

    private function limpiarErrorAndExito()
    {
        $this->error = '';
        $this->exito = '';
    }

    public function consulta_Usuario($parametro1)
    {
        $this->limpiarErrorAndExito();
//
        try {
            $sql = "
            
            ";
            $r = $this->db->prepare($sql);
            $r->execute();
            $aResultado = $r->fetch(PDO::FETCH_ASSOC);
            return $aResultado;

        } catch (Exception $ex) {
            trigger_error($ex);
            return '';
        }

    }
    public function consulta1_Usuario($parametro)
    {
        $this->limpiarErrorAndExito();

        try {
            $sql = "
            
            ";
            $r = $this->db->prepare($sql);
            $r->execute();
            $aResultado = $r->fetchall(PDO::FETCH_ASSOC);
            if (!empty($aResultado) && count($aResultado)>0){
                return $aResultado;
            }else{
                return '';
            }


        } catch (Exception $ex) {
            trigger_error($ex);
            return '';
        }

    }

    public function insert_usuario($rut,$nombre, $apellido, $email, $direccion, $perfil, $estado)
    {
        $valores = array($rut,$nombre, $apellido, $email, $direccion, $perfil, $estado);
        try {
            $sqlInsertUsuario = "
            insert into Usuario (rut, nombre, apellido, email, direccion, perfil, estado)
            VALUES (?,?,?,?,?,?,?)
            ";
            $r = $this->db->prepare($sqlInsertUsuario);
            $r->execute($valores);
            //$aResultado = $r->fetchall(PDO::FETCH_ASSOC);
            return 'ok';
        } catch (Exception $ex) {
            trigger_error((string)$valores);
            return 'error';


        }

    }
}