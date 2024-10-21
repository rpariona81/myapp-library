<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Career_model');
    }

    public function index()
    {
        $data['query'] = $this->Career_model->get_all();
        $this->load->view('tabletest', $data);
        //$this->load->view('template-app', $data);
        //$this->load->view('testws', $data);
        //$this->load->view('testview', $data);
        //$this->load->view('testviewh', $data);
        //$this->load->view('index', $data);
        //$this->load->view('layout/template', $data);
        //$this->load->view('sendemail', $data);
    }

    public function index_test()
    {

        $this->load->view('sendemail');
    }


    public function send()
    {
        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');

        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();

        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'mail.ronaldpariona.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'powerbi@ronaldpariona.com';
        $mail->Password = 'JP@rion@2020';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('powerbi@ronaldpariona.com', 'PowerBi');
        $mail->addReplyTo('microsoft01@ronaldpariona.com', 'CodexWorld');

        /* Add a recipient */
        $mail->addAddress('rpariona@ymail.com', 'Joaquin');

        /* Add cc or bcc */
        $mail->addCC('rpariona81@gmail.com');
        $mail->addBCC('webmaster@ronaldpariona.com');

        /* Email subject */
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';

        /* Set email format to HTML */
        $mail->isHTML(true);

        /* Email body content */
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
        <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
        $mail->addAttachment('public/img/fileexample.pdf', 'fileexample.pdf');

        /* Send email */
        if (!$mail->send()) {
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Mail has been sent';
        }
    }
}
