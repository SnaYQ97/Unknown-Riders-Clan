<?php
    class Role_model extends CI_Model {
        public function display() {
            $query = $this->db->query('SELECT `role_permission`.`id`, `role`.`role`, `permission`.`permission` as `permission` FROM `role_permission` JOIN `role` ON `role_permission`.`ref_role` = `role`.`id` JOIN `permission` ON `role_permission`.`ref_permission` = `permission`.`id`');
            return $query->result_array();
        }
    }

    //SELECT `role_permission`.`id`, `role`.`role`, GROUP_CONCAT(`permission`.`permission`) as `permissions` FROM `role_permission` JOIN `role` ON `role_permission`.`ref_role` = `role`.`id` JOIN `permission` ON `role_permission`.`ref_permission` = `permission`.`id` GROUP BY `role`.`role`