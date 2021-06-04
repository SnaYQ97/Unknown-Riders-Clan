<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->config->load('viewdata');
        }

        // Index
	public function index() {
                $this->load->model('Player_model');
                $this->load->model('Photo_model');
                $data = array();
                //$this->generateView(__CLASS__,__FUNCTION__);

                $session_data = $this->session->userdata('logged_in');

                if(isset($session_data)){
                        $data = $this->config->item(__CLASS__)[__FUNCTION__];  
                        //STATYSTYKI
                        $data['NumberOfPlayers'] = $this->Player_model->statisticsCountAllId();
                        $data['RecruitedToday'] = $this->Player_model->statisticsCountAllIdToday();
                        $data['NumberOfPhotos'] = $this->Photo_model->statisticsCountAllId();
                        $data['AddedPhotosToday'] = $this->Photo_model->statisticsCountAllIdToday();
                        //
                        $data['header'] = $data['active-map']['header'];
                        $data['item'] = $data['active-map']['item'];
                        $this->load->view("Template/header", $data['header-data']);   
                        $this->load->view($data['viewPath'], $data);
                }else {
                        redirect('users/login', 'refresh'); 
                }
        }
        //Components
        public function buttons() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        public function cards() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        //Utilities
        public function utilitiescolor() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        public function utilitiesborder() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        public function utilitiesanimation() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        public function utilitiesother() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        //Pages
        public function error404() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        public function blank() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        //Charts
        public function charts() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        //Tables
        public function users() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        public function players() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        public function films() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }
        public function photos() {
                $this->generateView(__CLASS__,__FUNCTION__);
        }

        /* public function test() {
                $username = 'SnaYQ97';
                $password = '[Chill]|97|';
                $url = 'http://example.com';
                $cookie="cookie.txt";
                $postdata = "username=$username&userpass=$password&autologin=1&userlogin=Login";

                $ch = curl_init();
                curl_setopt ($ch, CURLOPT_URL, $url);
                curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
                curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
                curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
                curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie);
                curl_setopt ($ch, CURLOPT_REFERER, $url);

                curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata);
                curl_setopt ($ch, CURLOPT_POST, 1);
                $result = curl_exec ($ch);

                curl_close($ch);


                $this->load->view("Template/header", $config['header-data']); 
                $this->load->view('test');
        } */ //R* api module

        private function generateView($className, $methodName) {
            $session_data = $this->session->userdata('logged_in');
            if(isset($session_data)){
                $config = $this->config->item($className)[$methodName];   
                $this->load->view("Template/header", $config['header-data']);     
                $this->load->view($config['viewPath'], $config['active-map']);
            }else {
                redirect('users/login', 'refresh'); 
            }
        }     
}