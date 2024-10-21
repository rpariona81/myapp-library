<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LoginModel extends CI_Model
{

    protected $user;
    protected $role;
    protected $model;
    public $db;
    public $session;

    public $is_logged;

    public function __construct()
    {
        //$this->db = \Config\Database::connect();
        $this->session = session();
        $this->is_logged = [];
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
    }

    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}
