<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class PlayersController extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Player_model');
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
            $return = $this->Player_model->display();
            $data['data'] = $return;
            echo json_encode($data);
        }

        public function addPlayer() {
            $nick = SanitizeString($_POST["nick"]);
            $code = SanitizeString($_POST["code"]);
            $level = SanitizeString($_POST["lvl"]);
            $earned = SanitizeString($_POST["earned"]);
            $spent = SanitizeString($_POST["spent"]);
            $comment = SanitizeText($_POST["comment"]);
            $addby = SanitizeString($_POST["addby"]);

            $difference = $spent - $earned;
            $join = date("Y-m-d");

            if (strlen($nick) != 0) {
                $this->Player_model->insertPlayer($nick, $code, $level, $earned, $spent, $difference, $comment, $join, $addby);
            }
        }

        public function deletePlayer() {
            $id = SanitizeString($_POST["id"]);
            $this->Player_model->deletePlayer($id);
        }

        public function updatePlayer() {
           $id = SanitizeString($_POST["id"]);
            $nick = SanitizeString($_POST["nick"]);
            $code = SanitizeString($_POST["code"]);
            $level = SanitizeString($_POST["lvl"]);
            $earned = SanitizeString($_POST["earned"]);
            $spent = SanitizeString($_POST["spent"]);
            $difference = SanitizeString($_POST["difference"]);
            $join = SanitizeString($_POST["join"]);
            $comment = SanitizeText($_POST["comment"]);
            $addby = SanitizeString($_POST["addby"]);
            $this->Player_model->updatePlayer($id, $nick, $code, $level, $earned, $spent, $difference, $comment, $join, $addby);
        }
    }