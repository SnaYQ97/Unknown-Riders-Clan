<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->config->load('viewdata');
        $this->load->model('UsersManagement_model');
        // Load session library
        $this->load->library('session');
        function SanitizeString($var) {
            $var = strip_tags($var);
            $var = htmlentities($var);
            $var = trim($var, " ");
            return stripslashes($var);
        }
    }

	public function login() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        if (isset($_POST['nick'])) {
            $nick = SanitizeString($_POST['nick']);
            $password = SanitizeString($_POST['password']);

            //$return = array();
            //$return = $this->UsersManagement_model->login($nick);
        }
            $this->form_validation->set_rules(
                'nick', 'Nick',
                array(
                    'trim',
                    'required',
                    array(
                        'check_callable',
                        function($nick)
                        {   
                            $return = array();
                            $return = $this->UsersManagement_model->login($nick);
                            if(count($return) > 0) {
                                return true;
                                //$this->form_validation->set_message('email_callable', 'error');
                            } else {
                                return false;
                            }
                        }
                    )
                )
            );
            $this->form_validation->set_rules(
                'password', 'Password',
                array(
                    'trim',
                    'required',
                    array(
                        'check_callable',
                        function()
                        {
                            $nick = SanitizeString($_POST['nick']);
                            $password = SanitizeString($_POST['password']);
                            $return = array();
                            $return = $this->UsersManagement_model->login($nick);
                            if(count($return) > 0) {
                                if($return[0]['password'] == $password) {
                                    return true;
                                }else {
                                    return false;
                                }
                            } else {
                                return false;
                            }
                        }
                    )
                )
            );
            $this->form_validation->set_message('check_callable', 'Entered nick or password is incorrect');
            if ($this->form_validation->run() == FALSE) {
                $this->generateView(__CLASS__,__FUNCTION__);
                
            } else {
                //set session nickname and role
                $nick = SanitizeString($_POST['nick']);
                $return = $this->UsersManagement_model->login($nick);
                $sess_data = array(
                    'nick' => $nick,
                    'role' => $return[0]['role'],
                );

                $this->session->set_userdata('logged_in', $sess_data);
                $this->generateView('Admin','index');
                redirect('admin/index', 'refresh'); 
            } 
        
    }

    public function logout() {
        // Destroy session data
        $this->session->sess_destroy();
        
        $this->login();
        redirect('users/login', 'refresh');
    }

    private function generateView($className, $methodName) {
        $config = $this->config->item($className)[$methodName];
        $this->load->view("Template/header", $config['header-data']);     
        $this->load->view($config['viewPath']);
    }
}


