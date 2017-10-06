<?php
class Dashboard extends CI_Controller{

      /*
          echo using andro($str) biar aman dari xss

       */


          function __construct(){

            parent::__construct();
            $this->load->library('session');
            if (!$this->session->userdata('status_admin')){
              redirect('login/login_admin');
            }
            $this->load->model('dashboard_model');

          }

          function index(){
            $this->load->view('dashboard/template/head');
            $this->load->view('dashboard/template/topbar');
            $this->load->view('dashboard/template/sidebar');
            $this->load->view('dashboard/template/js');
            $this->load->view('dashboard/template/foot');
          }
          /*
          function grafik(){

            $data['get'] = $this->dashboard_model->read_vote(NULL)->result();
            $this->load->view('grafik/graph.php',$data);
          }
          */

          function main_page(){
            $data['get_stattrue']=$this->dashboard_model->get_totalakun('status_vote',1)->num_rows();
            $data['get_statfalse']=$this->dashboard_model->get_totalakun('status_vote',0)->num_rows();
            $data['get_stattotal']=$this->dashboard_model->get_totalakun(NULL,NULL)->num_rows();
            $data['get_percent']=$data['get_stattrue'] / $data['get_stattotal'] * 100;

            $data['get_vote']=$this->dashboard_model->get_totalvote()->result();
            $data['get_log']=$this->dashboard_model->get_log()->result();
            $this->load->view('dashboard/dashboard1',$data);
          }

          function advanced_page(){

            $data['get_distinct']=$this->dashboard_model->get_filterlog()->result();
            $this->load->view('dashboard/dashboard2',$data);
          }

          function grafik(){
            $this->load->view('grafik/graph.php');
          }
}
