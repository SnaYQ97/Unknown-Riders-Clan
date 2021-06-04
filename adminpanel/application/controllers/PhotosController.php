<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class PhotosController extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Photo_model');
            function SanitizeString($var) {
                $var = strip_tags($var);
                $var = htmlentities($var);
                $var = trim($var, " ");
                return stripslashes($var);
            }
            function SanitizeText($var) {
                $var = strip_tags($var);
                $var = htmlentities($var);
                return stripslashes($var);
            }
        }

        public function createAjax() {
            $return = array();
            $return = $this->Photo_model->display();
            $data['data'] = $return;
            echo json_encode($data);
        }

        public function addPhoto() {
            $link = SanitizeString($_POST["link"]);
            $author = SanitizeString($_POST["author"]);
            $addby = SanitizeString($_POST["addby"]);
            $adddate = date("Y-m-d G:i:s");

            if (strlen($link) != 0) {
                $this->Photo_model->insertPhoto($link, $author, $addby, $adddate);
            }
        }

        public function deletePhoto() {
            $id = SanitizeString($_POST["id"]);
            $this->Photo_model->deletePhoto($id);
        } 

        public function updatePhoto() {
            $id = SanitizeString($_POST["id"]);
            $link = SanitizeString($_POST["link"]);
            $author = SanitizeString($_POST["author"]);
            $adddate = SanitizeString($_POST["adddate"]);
            $addby = SanitizeString($_POST["addby"]);

            $this->Photo_model->updatePhoto($id, $link, $author, $adddate, $addby);
        } 
    }