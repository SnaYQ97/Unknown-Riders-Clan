<?php
    class Film_model extends CI_Model {
        public function display() {
            $this->db->select('films.*');
            $query = $this->db->get('films');
            return $query->result_array();
        }

        public function insertFilm($title, $link, $addby) {
            $this->db->trans_start();
            $set_array = array(
                'title' => $title,
                'link' => $link,
                'add_by' => $addby,
            );
            $this->db->set($set_array);
            $this->db->insert('films');

            $this->db->trans_complete();
        }

        public function deleteFilm($id) {
            $this->db->trans_start();

            $this->db->where('id', $id);
            $this->db->delete('films');
            
            $this->db->trans_complete();
        }   


        public function updateFilm($id, $title, $link, $addby) {
            $this->db->trans_start();

            $set_array = array(
                'title' => $title,
                'link' => $link,
                'add_by' => $addby,
            );
                
            $this->db->set($set_array);
            $this->db->where('id', $id);
            $this->db->update('films');

            $this->db->trans_complete();
        }

        public function visibleFilm($id) {
            $this->db->trans_start();



            $set_array = array(
                'visible' => 0,
            );
            $this->db->set($set_array);
            $this->db->where('visible', 1);
            $this->db->update('films');

            $set_array = array(
                'visible' => 1,
            );
            $this->db->set($set_array);
            $this->db->where('id', $id);
            $this->db->update('films');

            $this->db->trans_complete();
        }
    }
    