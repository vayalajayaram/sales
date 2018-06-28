<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->model( 'Settings_Model' );
    }
	
	public function index()
	{
		$this->load->view('index.php');
	}

    public function register()
    {
        $this->load->view('register.php');
    }

     public function emailsent()
    {
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('company', 'Company', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            echo 'hello';
          $this->load->view('index.php');
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('company');
            $message = $this->input->post('message');

//print_r($data);exit();
            //$body = 'Dear Admin,<br /><br />Please click on the below Contacted list<br /><br />'. $from_email . '<br /><br /><br />Thanks<br />Professionalbidders';
            //set to_email id to which you want to receive mails
            $to_email = 'jayaram.v@nexivo.co';
            //configure email settings
           $this->load->library('email');
           $this->email->set_newline( "\r\n" );
           $this->email->set_mailtype( "html" );
           $this->email->from($from_email, 'Next lead');
           $this->email->to($to_email);
           $this->email->subject('who are contacted');
           $this->email->message('Dear Admin,<br /><br /><h4 style="color:blue;">Please check the below Contacted list</h4><br /><br /><label style="color:red;">Name</label>:&nbsp;'. $name . '<br /><br /><label style="color:red;">Email</label>:&nbsp;'. $from_email . '<br /><br /><label style="color:red;">Company</label>:&nbsp;'. $subject . '<br /><br /><label style="color:red;">Message</label>:&nbsp;'. $message . '<br /><br /><br />Thanks<br />Next Lead');
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('welcome/index');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('welcome/index');
            }
         
        }
    }


}