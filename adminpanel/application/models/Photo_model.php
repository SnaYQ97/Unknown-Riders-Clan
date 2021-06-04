<?php
    class Photo_model extends CI_Model {
        public function display() {
            $query = $this->db->get('zdjecia');
            return $query->result_array();
        }


        public function insertPhoto($link, $author, $addby, $adddate) {
            $this->db->trans_start();
            $set_array = array(
                'link' => $link,
                'author' => $author,
                'add_by' => $addby,
                'add_date' => $adddate,
            );
            $this->db->set($set_array);
            $this->db->insert('zdjecia');

            $this->db->trans_complete();
        }

        public function deletePhoto($id) {
            $this->db->trans_start();

            $this->db->where('id', $id);
            $this->db->delete('zdjecia');
            
            $this->db->trans_complete();
        } 
    
        public function updatePhoto($id, $link, $author, $adddate, $addby) {
            $this->db->trans_start();

            $set_array = array(
                'link' => $link,
                'author' => $author,
                'add_by' => $addby,
                'add_date' => $adddate,
            );
                
            $this->db->set($set_array);
            $this->db->where('id', $id);
            $this->db->update('zdjecia');

            $this->db->trans_complete();
        }         

        // STYSTYKI DO STRONY GŁOWNEJ
        public function statisticsCountAllId() {
            return $this->db->count_all('zdjecia');
        }

        public function statisticsCountAllIdToday() {
            /* $query = $this->db->query("SELECT count(id) from klanowicze where join_date = CURDATE()");
            return $query; */
            $today = date('Y-m-d');
            $array = array('add_date' => $today);
            
            $this->db->like($array);
            $this->db->from('zdjecia');
            return $this->db->count_all_results();
            //return $this->db->$query->count_all_results();
            
            /*  $this->db->get_where('join_date', array('join_date =' => $today));
            $this->db->from('klanowicze');
            $this->db->count_all_results();
            return $this->db->; */
        }
    }
    