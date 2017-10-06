<?php
class Dashboard_model extends CI_Model{

          function read_vote(){

            return $this->db->get('vote');
          }

          function adding_log($data,$table){

            $this->db->set($data);
            return $this->db->insert($table);
          }

          function get_totalakun($coloumn,$where){
            if (isset($coloumn)){
              $this->db->where($coloumn,$where);
            }
            return $this->db->get('akun');
          }

          function get_totalvote(){
            return $this->db->get('vote');
          }

          function get_log(){
            return $this->db->get('log_vote');
          }

          function get_filterlog(){

            return $this->db->query('SELECT DISTINCT * FROM log_vote ');
          }

          function get_max($in){
            $this->db->where_in('calon',$in);
            return $this->db->get('vote');
          }


}
