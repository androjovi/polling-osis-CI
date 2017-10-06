<?php
class Vote extends CI_Controller{

          function __construct(){

            parent::__construct();

              $this->load->library(array('session'));
              $this->load->model('vote_model');
              $this->load->view('statis/header');

              // Cek sesi
              if (!$this->session->userdata('status_login')){
                redirect('login');
              }

          }

          function index(){
            $data['get_info']=$this->vote_model->get_akun()->result();
            $this->load->view('vote/vw_vote',$data);
          }

          function vote_now(){

            $ketua = $this->input->post('ketua');
            $wakil = $this->input->post('wakil');
            echo $ketua;
            echo $wakil;

            $cek_dataketua = $this->vote_model->read_vote($ketua)->result();
            foreach ($cek_dataketua as $k) {
              $value_ketua = $k->jumlah_vote;
            }

            $tambah_dataketua = ++$value_ketua;

            $update_dataketua = $this->vote_model->add_vote($tambah_dataketua,$ketua);

            ///////////////////////////////////////////////////////////////////////////

            $cek_datawakil = $this->vote_model->read_vote($wakil)->result();
            foreach ($cek_datawakil as $k) {
              $value_wakil = $k->jumlah_vote;
            }

            $tambah_datawakil = ++$value_wakil;

            $update_datawakil = $this->vote_model->add_vote($tambah_datawakil,$wakil);

            if ($update_datawakil !== FALSE):


              //////////////////////////////////////
              $this->load->model(array('vote_model','dashboard_model'));
              $z=$this->vote_model->get_akun()->result();
              foreach ($z as $value) {
                $nama=$value->nama_lengkap;
                $kelas=$value->kelas;
                $jurusan=$value->jurusan;
              };
              $log=array(
                'user' => $nama.",".$kelas.",".$jurusan,
                'tanggal_waktu' => date('r'),
                'add_log' => $ketua.",".$wakil
              );
              $this->dashboard_model->adding_log($log,'log_vote');
              ////////////////////////////////////////

              $this->vote_model->update_statusvote();
            else:
              echo "<script>alert('Gagal, kesalahan tidak diketahui');window.location.href='".base_url('login')."'</script>";
            endif;

          }
          function ex(){

            $this->load->view('vote/terimakasih');
          }
}

  /* End of file Vote.php
   * Location application/controllers/Vote.php
   */
