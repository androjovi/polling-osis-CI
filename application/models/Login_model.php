<?php
class Login_model extends CI_Model{

          function cek_login($data){
            $this->db->where($data);
            return $this->db->get('akun');
          }
}
