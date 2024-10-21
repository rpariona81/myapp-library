<?php

if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

// Validaciones para el modelo de usuarios (login, cambio clave, CRUD Usuario)
class UtilLib
{

    private $ci;
    public function __construct()
    {
        $this->ci = & get_instance(); // Esto para acceder a la instancia que carga la librería
    }

    public function cambiarPWD($actual, $nuevo) {
        if ($this->ci->session->userdata('user_login') == null) {
            return FALSE;
        } else {
            $id = $this->ci->session->userdata('user_id');
            $this->ci->load->model('Usereloquent');
            $usuario = UserEloquent::find($id);
            $password = $usuario['password'];
            if (password_verify($actual, $password)) {
                $newpassword = password_hash($nuevo, PASSWORD_BCRYPT);
                $usuario->password = $newpassword;
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    public function no_duplicado($registro) {
        //$this->ci->load->model('Usereloquent');
        $usuario = UserEloquent::getUserBy('username', $registro['username']);
        //$query = $this->ci->db->get('usuarios');
        if($usuario){
        //if ($query->num_rows() > 0 AND ( !isset($registro['id']) OR ( $registro['id'] != $query->row('id')))) {
            return FALSE;
        } else {
            $usuario = UserEloquent::getUserBy('email', $registro['email']);
            if($usuario){
                return FALSE;
            }else{
            return TRUE;
            }
        }
    }

}
