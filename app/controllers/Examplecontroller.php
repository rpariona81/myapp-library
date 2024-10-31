
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ExampleController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'my_tag_helper'));
        $this->load->model('bookeloquent');
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['title'] = "User";
        $data['content'] = 'app/apptest';
        /*$this->load->view('header', $data);
        $this->load->view('app/apptest', $data);
        $this->load->view('footer', $data);*/

        $this->load->view('app/templateApp', $data);
    }

    public function index_ajax($offset = null)
    {
        $search = array(
            'keyword' => trim($this->input->post('search_key',true)),
        );
        //$search = is_string($this->input->post('keyword', true)) ? strip_tags(trim(strip_tags($this->input->post('keyword', true)))) : '';
        $this->load->library('pagination');

        $limit = 5;
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $config['base_url'] = site_url('examplecontroller/index_ajax/');
        print_r($config['base_url']);
        $config['total_rows'] = $this->user_model->get_products($limit, $offset, $search, $count = true);
        //$config['total_rows'] = BookEloquent::getCantSearchEbooks($search);
        print_r($config['total_rows']);
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="" class="current_page">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data['users'] = $this->user_model->get_products($limit, $offset, $search, $count = false);
        //$data['records'] = BookEloquent::searchBooksPaginate($offset,$limit, $search);

        $data['pagelinks'] = $this->pagination->create_links();

        $this->load->view('app/app_ajax', $data);
        //$this->load->view('app/templateApp', $data);
    }
}
