<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class FilmsController extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Film_model');
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
            $return = $this->Film_model->display();
            $data['data'] = $return;
            echo json_encode($data);
        }

        public function addFilm() {
            $title = SanitizeString($_POST["title"]);
            $link = SanitizeString($_POST["link"]);
            $addby = SanitizeString($_POST["addby"]);

            if (strlen($title) != 0) {
                $this->Film_model->insertFilm($title, $link, $addby);
            }
        }

        public function deleteFilm() {
            $id = SanitizeString($_POST["id"]);
            $this->Film_model->deleteFilm($id);
        }
           
        public function updateFilm() {
            $id = SanitizeString($_POST["id"]);
            $title = SanitizeString($_POST["title"]);
            $link = SanitizeString($_POST["link"]);
            $addby = SanitizeString($_POST["addby"]);
            $this->Film_model->updateFilm($id, $title, $link, $addby);
        } 

        public function MakeVisible() {
            $id = SanitizeString($_POST["id"]);
            $this->Film_model->visibleFilm($id);
        }
    }