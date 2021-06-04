<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class UsersManagement extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('UsersManagement_model');
            function SanitizeString($var) {
                $var = strip_tags($var);
                $var = htmlentities($var);
                $var = trim($var, " ");
                return stripslashes($var);
            }
        }

        public function createAjax() {
            $return = array();
            $return = $this->UsersManagement_model->display_users();
            $tmp_array = [];
            foreach ($return as $row) {
                array_push($tmp_array, [  
                    $row["id"],  
                    $row["nick"],
                    $row["role"],
                ]);
            }
            $data['data'] = $tmp_array;
            // $data['data'] = $this->UsersManagement_model->display_users();
            echo json_encode($data);

            /* echo "<br><hr><br><pre>";
            var_dump($return);
            echo "</pre>"; */
        }

        public function addUser() {
            $nick = SanitizeString($_POST["nick"]);
            $password = SanitizeString($_POST["password"]);
            $role = SanitizeString($_POST["role"]);

            if (strlen($nick) != 0 || strlen($password) != 0) {
                $this->UsersManagement_model->insetUser($nick, $password, $role);
            }
        }

        public function deleteUser() {
            $id = SanitizeString($_POST["id"]);
            $this->UsersManagement_model->deleteUser($id);
        }

        public function updateUser() {
            $id = SanitizeString($_POST["id"]);
            $nick = SanitizeString($_POST["nick"]);
            $role = SanitizeString($_POST["role"]);
            if (strlen($nick) > 0) {
                $this->UsersManagement_model->updateUser($id, $nick, $role);
            }
        }
    }