<?php

class Verificar
{

    private $campos;
    private $errors = array();

    public function __construct()
    {
        $this->campos = array(
            'nombre' => array('emptyInput'),
            'apellido' => array('emptyInput'),
            'edad' => array('emptyInput', 'number'),
            'ocupacion' => array('emptyInput'),
            'mail' => array('emptyInput','mail'),
            'celular' => array('emptyInput', 'number'),
            'imagen' => array('size','emptyImage','isImage')
        );
        $this->verificar();
    }
    private function verificar()
    {

        foreach ($this->campos as $key => $campos) {
            $errorArray = array();
            foreach ($campos as $function) {
                $error = call_user_func_array(array($this, $function), array($key));
                if ($error) {
                    $errorArray[] = $error;
                }
            }
            if(!empty($errorArray)){
                $this->errors[$key] = $errorArray;
            }
        }
    }
    private function size($value)
    {
        return ($_FILES[$value]['size'] < 2489 ? 'debe pesar menos de 2 mb' : false);
    }
    private function emptyImage($value)
    {
        return (empty($_FILES[$value]['name']) ? 'Esta Vacio' : false);
    }
    private function isImage($value)
    {
        if(empty($_FILES[$value]['name'])){
            return false;
        }
        return (!getimagesize($_FILES[$value]["tmp_name"]) ? 'No es un archivo permitido' : false);
    }
    private function emptyInput($value)
    {
        return (empty($_POST[$value]) ? 'Esta Vacio' : false);
    }
    private function number($value)
    {
        return (!is_numeric($_POST[$value]) ? 'Debe ser númerico' : false);
    }
    private function mail($value){
        return (!filter_var($_POST[$value] , FILTER_VALIDATE_EMAIL) ? 'no valido' : false);
    }
    public function  getErrors()
    {
         return $this->errors;
    }

}

