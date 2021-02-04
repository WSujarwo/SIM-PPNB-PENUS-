<?php
class sishome extends CI_Controller{
    function __construct(){
        parent:: __construct();
    $this->load->model('m_log_in');

    if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('S_Home');
            redirect($url);
        };
    $this->load->model('m_pengunjung');
  }
  function log(){
    if($this->session->userdata('akses')=='1'){
      $x['visitor'] = $this->m_pengunjung->statistik_pengujung();
      $this->load->view('guru/s_home',$x);
    }else{
      redirect('S_Home');
    }
  }
  // function dashboard_info(){
  //   $kode=$this->uri->segment(3);
  //       $this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
  //   $x['data']=$this->m_pengumuman->get_pengumuman_by_kode($kode);
  //   $this->load->view('siswa/dashboard_info',$x);
  // }
}