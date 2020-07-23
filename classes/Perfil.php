<?php

class Perfil
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

    public function consulta($parametro1)
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
    public function consulta1($parametro)
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

}