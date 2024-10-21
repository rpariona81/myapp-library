<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use Illuminate\Support\Facades\Request;
use Db\Test as CareerEloquent;
use Illuminate\Support\Facades\Validator;

//https://notes.enovision.net/codeigniter/eloquent-in-codeigniter/how-to-use-the-models

class Career_model extends CI_Model
{
    private $count = 0;
    private $total = 0;
    private $results = null;

    public function __construct()
    {
        parent::__construct();

        // You can also use CodeIgniter models itself
        //$this->load->model('whatever/Model', 'WhateverModel'); 

    }

    public function get_all()
    {
        $lista = CareerEloquent::all();
        return $lista;
        //return json_encode($listCareers);
    }

    public function get_select($id)
    {
        $select = CareerEloquent::findOrFail($id)->first();
        return $select;
        //return json_encode($listCareers);
    }

    /*
    Store the record in the database
    */
    public function store($request)
    {
        $data = array(
            'region_id' => $request->region_id,
            'codentidad' => $request->codentidad,
            'entidad' => $request->entidad,
            'titulo_entidad' => $request->titulo_entidad,
            'codtipoentidad' => $request->codtipoentidad,
            'codgestionentidad' => $request->codgestionentidad,
            'estado' => $request->estado,
            'flag_visible' => $request->flag_visible,
            'flag_formulario' => $request->flag_formulario
        );

        $model = new CareerEloquent();
        $model->fill($data);
        $model->save($data);
    }

}