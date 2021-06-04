<?php
    class UsersManagement_model extends CI_Model {
        public function display_users() {
            $this->db->select('users.id, users.nick, user_role.ref_role as role');
            $this->db->join('user_role', 'users.id = user_role.ref_user');
            $query = $this->db->get('users');
            return $query->result_array();
        }
        public function insetUser($nick, $password, $role) {
            $this->db->trans_start();
            $set_array = array(
                'nick' => $nick,
                'password' => $password,
            );
            $this->db->set($set_array);
            $this->db->insert('users');

            $insertId = $this->db->insert_id();

            $set_array = array(
                'ref_user' => $insertId,
                'ref_role' => $role,
            );
            $this->db->set($set_array);
            $this->db->insert('user_role');
            $this->db->trans_complete();
        }
        public function deleteUser($id) {
            $this->db->trans_start();

            $this->db->where('ref_user', $id);
            $this->db->delete('user_role');

            $this->db->where('id', $id);
            $this->db->delete('users');
            
            $this->db->trans_complete();
            //$query = $this->db->query("DELETE FROM `users` WHERE `users`.`id` = '$id'");
        }  
        public function updateUser($id, $nick, $role) {
            $this->db->trans_start();
             
            $this->db->set('ref_role', $role);
            $this->db->where('ref_user', $id);
            $this->db->update('user_role');

            $set_array = array(
                'nick' => $nick,
            );
                
            $this->db->set($set_array);
            $this->db->where('id', $id);
            $this->db->update('users');

            $this->db->trans_complete();
            //$query = $this->db->query("UPDATE `users` SET `first_name` = '$first', `last_name` = '$last', `role` = $role WHERE `users`.`id` = '$id'");
        }  
        
        /* public function register($nick, $last, $email, $password) {
            $this->db->trans_start();
            $set_array = array(
                'first_name' => $first,
                'last_name' => $last,
                'email' => $email,
                'password' => $password,
            );
            $this->db->set($set_array);
            $this->db->insert('users');

            $insertId = $this->db->insert_id();

            $set_array = array(
                'ref_user' => $insertId,
                'ref_role' => 1,
            );
            $this->db->set($set_array);
            $this->db->insert('user_role');
            $this->db->trans_complete();
        } */

        public function login($nick) {
            $this->db->select('users.id, users.nick, users.password, user_to_role.ref_role as role');
            $this->db->join('user_to_role', 'users.id = user_to_role.ref_user');
            $this->db->where('users.nick', $nick);
            $query = $this->db->get('users');
            
            return $query->result_array();
        }

    }

    