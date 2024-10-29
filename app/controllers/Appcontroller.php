<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AppController extends CI_Controller
{


    private $accessoPermitido;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'my_tag_helper'));
        $this->load->model('bookeloquent');
        $this->load->model('offerjobeloquent');
        $this->load->model('postulatejobeloquent');
        $this->load->model('usereloquent');
        $this->load->library('pagination');
        $this->form_validation->set_message('no_repetir_email', 'Existe otro registro con el mismo %s');
        /**
         * En caso se defina el campo mobile como único, validaremos si ya se registró anteriormente
         */
        $this->form_validation->set_message('no_repetir_mobile', 'Existe otro registro con el mismo %s');
    }

    public function index()
    {
        //print_r($this->session->userdata);
        //$accessoPermitido = $this->session->has_userdata('isLogged') ? $this->session->userdata('isLogged') : FALSE;
        if ($this->session->userdata('user_rol') != NULL) {
            $data = [];
            //$data['rol'] = $this->session->userdata('user_rol');
            //$data['content'] = 'app/listConvocatorias';
            $data['pagina_title'] = $this->uri->segment(3);
            $data['career'] = [['demo1' => 'test1'], ['demo2' => 'test2']];
            $data['selectValue'] = ['demo1' => 'test1'];
            $data['content'] = 'app/listCatalogosCards';
            if ($this->session->userdata('user_rol') == 'estudiante') {
                $data['recuento'] = Offerjobeloquent::getTotOffersjobsByVigency($this->session->userdata('user_carrera_id'));
                $data['queryVigentes'] = Offerjobeloquent::getOffersjobsVigentes($this->session->userdata('user_carrera_id'));
                $data['queryNoVigentes'] = Offerjobeloquent::getOffersjobsNoVigentes($this->session->userdata('user_carrera_id'));
            } else {
                $data['recuento'] = Offerjobeloquent::getTotOffersjobsByVigency();
                $data['queryVigentes'] = Offerjobeloquent::getOffersjobsVigentes();
                $data['queryNoVigentes'] = Offerjobeloquent::getOffersjobsNoVigentes();
            }
            $this->load->view('app/templateApp', $data);
        } else {
            $this->session->set_flashdata('error');
            redirect('/');
        }
    }

    public function view_cards($search = NULL)
    {
        $data = array();
        $config['base_url'] = base_url() . '/user/catalog/';
        $total_row = BookEloquent::getCantEbooks(); //total row
        $data['total_row'] = BookEloquent::getCantEbooks(); //total row
        $config['total_rows'] = $total_row;
        $data['pagina_title'] = $this->uri->segment(2);
        $config['per_page'] = 9;  //show record per halaman

        $config['uri_segment'] = 3;

        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = FALSE;
        $config['enable_query_strings'] = FALSE;

        $choice = $config["total_rows"] / $config["per_page"];
        //$config["num_links"] = floor($choice);
        $config["num_links"] = (fmod(floor($choice), 9) > 9) ? fmod(floor($choice), 9) : 9;

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = '<li class="page-item"><span class="page-link">Primero</span></li>';
        $config['last_link']        = '<li class="page-item"><span class="page-link">Último</span></li>';
        $config['next_link']        = 'Siguiente';
        $config['prev_link']        = 'Anterior';
        $config['full_tag_open']    = '<nav aria-label="..." class="ms-auto"><ul class="pagination pagination-light mb-0">';
        $config['full_tag_close']   = '</ul></nav>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link" aria-current="page">';
        $config['cur_tag_close']    = '</span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link" aria-hidden="true">';
        $config['next_tag_close']  = '</span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link border-0 font-weight-bold" href="javascript:;">';
        $config['first_tag_close'] = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0;

        $str_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;', $str_links);
        //$results = $this->db->get('t_users', $config['per_page'], $this->uri->segment(4))->result_array();
        //$results = User_Eloquent::skip($this->uri->segment(4))->take($config['per_page'])->get();
        //$this->data['records'] = User_Eloquent::skip($this->data['page'])->take($config['per_page'])->get();
        $data['records'] = BookEloquent::getEbooksPaginate($data['page'], $config['per_page']);

        //echo json_encode($data).'<br>';

        /*echo 'FOREACH <br>';
        foreach ($data['records'] as $row) {
    
                echo $row['id'] . ' - ';
                echo $row['title'] . ' - ';
                echo $row['type_offer'] . '\r\n<br>';
            }
    
            echo $this->pagination->create_links();
        */
        $data['pagination'] = $this->pagination->create_links();
        $data['content'] = 'app/listCatalogosCardsPage';
        $this->load->view('app/templateApp', $data);
    }

    public function viewConvocatoria($id = NULL)
    {
        if ($this->session->userdata('user_rol') != NULL) {
            //$data['convocatoria'] = Offerjobeloquent::findOrFail($id);
            $data['checkPostulation'] = PostulateJobEloquent::checkPostulationUser($this->session->userdata('user_id'), $id);
            $data['convocatoria'] = Offerjobeloquent::selectOffersjob($id);
            $data['content'] = 'app/viewConvocatoria';
            //echo json_encode($data);
            $this->load->view('app/templateApp', $data);
        } else {
            $this->session->set_flashdata('error', '');
            redirect('/login');
        }
    }

    public function viewPerfil()
    {
        if ($this->session->userdata('user_rol') != NULL) {
            $data['content'] = 'app/viewPerfil';
            $data['perfil'] = Usereloquent::findOrFail($this->session->userdata('user_id'));
            $data['document_type'] = Usereloquent::getListDocumentType();
            $data['career'] = Usereloquent::getListCareers();
            $this->load->view('app/templateApp', $data);
        } else {
            $this->session->set_flashdata('error', '');
            redirect('/login');
        }
    }

    public function viewPostulaciones()
    {
        if ($this->session->userdata('user_rol') != NULL) {
            $data['query'] = Postulatejobeloquent::getPostulations($this->session->userdata('user_id'));
            $data['content'] = 'app/listPostulaciones';
            //echo json_encode($data['query']);
            $this->load->view('app/templateApp', $data);
        } else {
            $this->session->set_flashdata('error', '');
            redirect('/login');
        }
    }

    public function no_repetir_email($registro)
    {
        $registro = $this->input->post();
        $usuario = UserEloquent::getUserBy('email', $registro['email']);
        if ($usuario and (!isset($registro['id']) or ($registro['id'] != $usuario->id))) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /**
     * En caso se defina el campo mobile como único, validaremos si ya se registró anteriormente
     */
    public function no_repetir_mobile($registro)
    {
        $registro = $this->input->post();
        $usuario = UserEloquent::getUserBy('mobile', $registro['mobile']);
        if ($usuario and (!isset($registro['id']) or ($registro['id'] != $usuario->id))) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function actualizaPerfil()
    {
        $registro = $this->input->post();
        $this->form_validation->set_rules('email', 'Email', 'valid_email|callback_no_repetir_email');
        $this->form_validation->set_rules('mobile', 'teléfono celular', 'required|callback_no_repetir_mobile');
        //si el proceso falla mostramos errores
        if ($this->form_validation->run() == FALSE) {
            $this->viewPerfil();
            //en otro caso procesamos los datos
        } else {

            date_default_timezone_set('America/Lima');
            if ($this->session->userdata('user_rol') != NULL) {
                $id = $this->session->userdata('user_id');
                $data = array(
                    'mobile' => $this->input->post('mobile', true),
                    'email' => $this->input->post('email', true),
                    'address' => $this->input->post('address', true)
                );
                $model = UserEloquent::findOrFail($id);
                $model->fill($data);
                $model->save($data);
                if ($this->session->userdata('user_email') != $data['email']) {
                    $this->session->set_userdata('user_email', $data['email']);
                }
                // Display success message
                $this->session->set_flashdata('flashSuccess', 'Actualización exitosa.');
                redirect('/user/perfil');
            } else {
                $this->viewPerfil();
            }
        }
    }

    public function _do_upload()
    {
        $config['upload_path']          = FCPATH . 'uploads/filescv/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 4096;
        $config['file_name']            = round(microtime(true) * 1000);
        $config['remove_spaces']        = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filecv')) {
            //$error = array('error' => $this->upload->display_errors());
            //print_r($error); die();
            $data['error_string'] = 'Error de carga de archivo: ' . $this->upload->display_errors('', '');
            $data['status'] = 0;
            //echo json_encode($data);
            //$this->session->set_flashdata('flashError', 'Error de carga de archivo: ' . $this->upload->display_errors('', ''));
            //redirect($_SERVER['REQUEST_URI'], 'refresh'); 
            //exit();
            //return $data;
            //return redirect()->to($_SERVER['HTTP_REFERER'], 'refresh');

        } else {
            $data = array('upload_data' => $this->upload->data());
            //print_r("Funciona!!");
            //$route_filecv = $data['full_path'];
            //print_r($data);
            //return $data;
            //$this->load->view('upload_success', $data);
        }
        return $data;
    }

    public function send($recipient, $subject, $message, $fileUpload)
    {
        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');
        //$status_sendemail = NULL;

        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();                          // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->CharSet = 'UTF-8';
            //$mail->SMTPDebug = 0;                                 // 2=Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = getenv('MAIL_HOST');             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = getenv('MAIL_USERNAME');        // SMTP username
            $mail->Password = getenv('MAIL_PASSWORD');          // SMTP password
            $mail->SMTPSecure = getenv('MAIL_ENCRYPTION');     // Enable TLS 
            $mail->Port = getenv('MAIL_PORT');            // TCP port to connect to

            //reply to before setfrom: https://stackoverflow.com/questions/10396264/phpmailer-reply-using-only-reply-to-address
            $mail->AddReplyTo($this->session->userdata('user_email'));
            $mail->setFrom(getenv('MAIL_USERNAME'), getenv('APP_NAME'));

            $mail->addAddress($recipient);     // Add a recipient
            $mail->addCC($this->session->userdata('user_email'));   // copy to user
            $mail->addCC(getenv('MAIL_EMPLEABILIDAD'));   // copy to empleabilidad

            //Content
            $mail->isHTML(true);               // Set email format to HTML
            $mail->Subject = $subject;
            $datosPostulante = "<strong>Datos de Postulante:</strong><br><p>Nombres:&nbsp;" . $this->session->userdata('user_name') . " " . $this->session->userdata('user_paterno') . "</p><p>Email:&nbsp;" . $this->session->userdata('user_email') . "</p><p>Programa de estudios:&nbsp;" . $this->session->userdata('user_carrera') . "</p>";
            $mail->Body    = $datosPostulante . "<br><p>" . $message . "</p>";
            $mail->AltBody = strip_tags($message);
            $mail->addAttachment($fileUpload);
            $mail->send();
            //$status_sendemail = TRUE;
            $this->session->set_flashdata('flashSuccess', 'Correo enviado correctamente.');
        } catch (Exception $e) {
            log_message('error', "MAIL ERROR: " . $mail->ErrorInfo);
            //$status_sendemail = FALSE;
            $this->session->set_flashdata('flashError', 'Error de envio de correo.');
        }
        //return $status_sendemail;
    }
    public function postular()
    {
        //print_r($_FILES);
        //$this->_do_upload();
        //$this->_validate();
        date_default_timezone_set('America/Lima');
        $subject = $this->input->post('offer_title', TRUE);
        $recipient = $this->input->post('offer_email', TRUE);
        $message = "<p>" . htmlentities($this->input->post('msg_postulant', TRUE)) . "</p>";
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'offer_id' => $this->input->post('offer_id', TRUE),
            'msg_postulant' => $this->input->post('msg_postulant', TRUE),
            'email_notification' => $this->session->userdata('user_email'),
            'date_postulation' => date("Y-m-d H:i:s"),
            'result' => 2
        );
        //echo json_encode($data);
        //print_r($_FILES);
        if (!empty($_FILES)) {
            $upload = $this->_do_upload();
            if ($upload) {
                $data['route_filecv'] = $upload['upload_data']['full_path'];
                $data['filecv'] = $upload['upload_data']['file_name'];
                /* Load PHPMailer library */
                $this->send($recipient, $subject, $message, 'uploads/filescv/' . $data['filecv']);
                $model = new Postulatejobeloquent();
                $model->fill($data);
                $model->save($data);
                $this->session->set_flashdata('flashSuccess', 'Postulación realizada correctamente.');
                //return true;
                redirect('/user/postulaciones');
            } else {
                $this->session->set_flashdata('flashError', 'Error de carga de archivo. Intente nuevamente.');
                //$this->viewConvocatoria($data['offer_id']);
                //redirect('users/convocatoria/' . $data['offer_id']);
                //redirect($_SERVER['REQUEST_URI'], 'refresh'); 
                exit();
                //return FALSE;
            }
        } else {
            //redirect($_SERVER['REQUEST_URI'], 'refresh'); 
            $this->session->set_flashdata('flashError', 'Error de carga de archivo.');
            redirect('/user/postulaciones');
        }

        /*$model = new Postulatejobeloquent();
        $model->fill($data);
        $model->save($data);
        //$this->postulatejobeloquent->save($data);
        //echo json_encode($data);
        redirect('/user/postulaciones');*/
    }

    public function viewCredenciales()
    {
        if ($this->session->userdata('user_rol') != NULL) {
            $data['content'] = 'app/viewCredencial';
            $this->load->view('app/templateApp', $data);
        } else {
            $this->session->set_flashdata('error', '');
            redirect('/login');
        }
    }

    public function cambiarClave()
    {
        $registro = $this->input->post();
        $this->form_validation->set_rules('clave_act', 'Clave Actual', 'required');
        $this->form_validation->set_rules('clave_new', 'Clave Nueva', 'required|matches[clave_rep]');
        $this->form_validation->set_rules('clave_rep', 'Repita Nueva', 'required');
        if ($this->form_validation->run() == FALSE) {
            //print_r($registro);
            //$this->session->set_flashdata('flashError', 'Verifique las claves ingresadas.');
            $this->viewCredenciales();
            //en otro caso procesamos los datos
        } else {
            if ($this->session->userdata('user_rol') !== NULL) {
                $id = $this->session->userdata('user_id');
                $actual = $this->input->post('clave_act');
                $nuevo = $this->input->post('clave_new');
                $usuario = UserEloquent::find($id);
                $password = $usuario['password'];
                if (password_verify($actual, $password)) {
                    $newpassword = password_hash($nuevo, PASSWORD_BCRYPT);
                    $usuario->password = $newpassword;
                    $usuario->remember_token = base64_encode($nuevo);
                    $usuario->save();
                    $this->session->set_flashdata('flashSuccess', 'Actualización exitosa.');
                    redirect('/user/credenciales', 'refresh');
                } else {
                    $this->session->set_flashdata('flashError', 'Verifique las claves ingresadas.');
                    redirect('/user/credenciales', 'refresh');
                }
            } else {
                $this->session->set_flashdata('error');
                redirect('/login');
            }
        }
    }

    public function descargacv()
    {
        redirect(base_url('/uploads/document/' . getenv('CV_NAME')), 'location', 301);
    }

    public function viewpdf($id = NULL)
    {
        if ($this->session->userdata('user_rol') != NULL) {
            //$data['convocatoria'] = Offerjobeloquent::findOrFail($id);
            $data['model'] = UserEloquent::findOrFail($id);
            $data['filepdf'] = BookEloquent::findOrFail($id);
            $data['content'] = 'app/ebook_pdf';
            $data['content'] = 'app/app';
            //echo json_encode($data);
            $this->load->view('app/templateApp', $data);
        } else {
            $this->session->set_flashdata('error', '');
            redirect('/login');
        }
    }

    public function addViewEbook() {}
}

/* End of file Controllername.php */