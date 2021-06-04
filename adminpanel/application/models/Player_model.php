<?php
    class Player_model extends CI_Model {
        public function display() {
            $this->db->select('klanowicze.id, klanowicze.discord_code, klanowicze.game_nick, klanowicze.level, klanowicze.earned, klanowicze.spent, klanowicze.difference, klanowicze.comment, klanowicze.join_date, klanowicze.add_by');
            $query = $this->db->get('klanowicze');
            return $query->result_array();
        }

        public function insertPlayer($nick, $code, $level, $earned, $spent, $difference, $comment, $join, $addby) {
            $this->db->trans_start();
            $set_array = array(
                'discord_code' => $code,
                'game_nick' => $nick,
                'level' => $level,
                'earned' => $earned,
                'spent' => $spent,
                'difference' => $difference,
                'join_date' => $join,
                'comment' => $comment,
                'add_by' => $addby,
            );
            $this->db->set($set_array);
            $this->db->insert('klanowicze');

            $this->db->trans_complete();
        }
        public function deletePlayer($id) {
            $this->db->trans_start();

            $this->db->where('id', $id);
            $this->db->delete('klanowicze');
            
            $this->db->trans_complete();
        }  
        public function updatePlayer($id, $nick, $code, $level, $earned, $spent, $difference, $comment, $join, $addby) {
            $this->db->trans_start();

            $set_array = array(
                'discord_code' => $code,
                'game_nick' => $nick,
                'level' => $level,
                'earned' => $earned,
                'spent' => $spent,
                'difference' => $difference,
                'join_date' => $join,
                'comment' => $comment,
                'add_by' => $addby,
            );
                
            $this->db->set($set_array);
            $this->db->where('id', $id);
            $this->db->update('klanowicze');

            $this->db->trans_complete();
        }      

        public function statisticsCountAllId() {
            return $this->db->count_all('klanowicze');
        }

        public function statisticsCountAllIdToday() {
            /* $query = $this->db->query("SELECT count(id) from klanowicze where join_date = CURDATE()");
            return $query; */
            $today = date('Y-m-d');
            return $this->db->get_where('klanowicze', array('join_date' => $today))->num_rows();
            
            /*  $this->db->get_where('join_date', array('join_date =' => $today));
            $this->db->from('klanowicze');
            $this->db->count_all_results();
            return $this->db->count_all_results(); */
        }

        /* public function display() {
            $this->db->select('klanowicze.id, klanowicze.discord_code, klanowicze.game_nick, klanowicze.level, klanowicze.earned, klanowicze.spent, klanowicze.difference, klanowicze.comment, klanowicze.join_date, klanowicze.add_by');
            $query = $this->db->get('klanowicze');
            return $query->result_array();
        } */
    }

    