<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pmb extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_page');
    $this->load->model('m_tahun_ajaran');
    $this->load->model('m_pmb');
    $this->load->library(array('form_validation', 'Recaptcha','akper/auth_akper'));

    if (!$this->auth_akper->is_login('udahlogin')) 
    {
      return redirect('signin/pmb');      
    }
$this->load->library('akper/auth_akper');
    // Jika manajemen buka fitu ini maka redirect ke backend/dashboard
    
    $this->load->library('akper/auth_akper',[
      
      'password' => 'password'
    ]);
    
    $this->auth_akper->setSessionData([
      'id_pmb'    => 'id_pmb',
      'is_active'     => 'is_active',
      'manajemen' => true,
      'status' => 'login'
    ]);
    
  }
  

  public function index(){
  // ssl://smtp.googlemail.com
    if ($this->session->level == 'pmb_baru' ) {
   
       $id       = $this->session->userdata('id_pmb');
    $data['tampil'] = $this->m_page->m_get_id($id);
    $data['ta']   = $this->m_tahun_ajaran->find($data['tampil']->id_tahun_ajaran);
    $this->load->view('pmb/v_pmb',$data); 
    }else{
      redirect('pmb/detail');
    }
  }
  public function pmb_view(){
  $id = $this->session->userdata('id_pmb');
  $data['tampil'] = $this->m_page->m_pmb_view($id);
  $this->load->view('pmb/v_view_pmb');
}
public function detail(){
  $this->load->model('pengumuman/m_pengumuman');
  $id = $this->session->userdata('id_pmb');
  $data['info'] = $this->m_pengumuman->m_data_info($id);
  $data['tampil'] = $this->m_page->m_pmb_view($id);
  $data['isi_pmb'] = 'pmb/content/dashboard';
  $this->load->view('pmb/template/layout',$data);
}
public function pengumuman(){
  $this->load->model('pengumuman/m_pengumuman');
  $id = $this->session->userdata('id_pmb');
  $data['info'] = $this->m_pengumuman->m_all_data_info($id);
  $data['isi_pmb'] = 'pmb/content/v_pengumuman';
  $this->load->view('pmb/template/layout',$data);
}
public function view_pengumuman($info){

  $this->load->model('pengumuman/m_pengumuman');
  $id = $this->session->userdata('id_pmb');
  $read = "1";
  $array = array('read'=>$read);


  $array = $this->m_pengumuman->m_read($info,$array);
  //$id = $this->session->userdata('id_pmb');
  $data['info'] = $this->m_pengumuman->m_view_info($info);
  $data['isi_pmb'] = 'pmb/content/v_view_pengumuman';
  $this->load->view('pmb/template/layout',$data);
}

  public function form(){
    $this->load->view('frontend/pmb/v_pmb');
  }

  
  public function c_proses_pmb()
  {
    $id   = $this->session->userdata('id_pmb'); 
    $data   = $this->getFormData();
    $foto_ijaza = $_FILES['foto_ijaza']['name'];
    $foto_kesehatan = $_FILES['foto_kesehatan']['name'];
    $foto = $_FILES['foto']['name'];
    $foto_bukti_pembayaran = $_FILES['foto_bukti_pembayaran']['name'];
    if (empty($foto_bukti_pembayaran) || empty($foto) || empty($foto_ijaza) || empty($foto_kesehatan)) {
      
      $this->session->set_flashdata('foto','<div class="alert alert-danger">Mohon Diisi semua foto</div>');
      

      $data = date_create($this->input->post('tgl_lahir'));
    $tanggal = date_format($data,'Y-m-d');

      $array = array('nama_lengkap'      => $this->input->post('nama_lengkap'),
      'kewarganegaraan'     => $this->input->post('kewarganegaraan'),
      'jk'          => $this->input->post('jk'),
      'tinggi_badan'      => $this->input->post('tinggi_badan'),
      'berat_badan'       => $this->input->post('berat_badan'),
      'tmpt_lahir'      => $this->input->post('tmpt_lahir'),
      'tgl_lahir'       => $tanggal,
      'alamat'        => $this->input->post('alamat'),
      'level'       => 'pmb_lamah',
      'kode_pos'        => $this->input->post('kode_pos'),
      'nama_ayah'       => $this->input->post('nama_ayah'),
      'nama_ibu'        => $this->input->post('nama_ibu'),
      'no_hp1'        => $this->input->post('no_hp1'),
      'no_hp2'        => $this->input->post('no_hp2'),
      'info_dari'       => $this->input->post('info_dari'),
      'nama_asal_sekolah'   => $this->input->post('nama_asal_sekolah'),
      'alamat_asal_sekolah' => $this->input->post('alamat_asal_sekolah'));


      
      $daftar = $this->m_page->m_proses_pmb($id,$array);
      if ($daftar > 0) {
        $this->session->set_flashdata('sukses','<div class="alert alert-success">Berhasil Upload Data !</div>');
        redirect('pmb');
      }else{
        echo "salah";
      }
      
    }else{
      $config['upload_path'] = './uploads'; 
      $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
      $this->upload->initialize($config);
      $foto_ijaza = $this->upload->do_upload('foto_ijaza');
      $foto_kesehatan = $this->upload->do_upload('foto_kesehatan');
      $foto = $this->upload->do_upload('foto');
      $foto_bukti_pembayaran = $this->upload->do_upload('foto_bukti_pembayaran');
      
      if ($foto_kesehatan) {
        $kesehatan = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/'.$kesehatan['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '50%';
        $config['new_image'] = 'uploads/'.$kesehatan['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $skesehatan = $kesehatan['file_name'];
        
      }
      if ($foto_ijaza) {
        $ijaza = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/'.$ijaza['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '50%';
        $config['new_image'] = 'uploads/'.$ijaza['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $sijaza = $ijaza['file_name'];
      }
      if($foto) {
        $gambar = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/'.$gambar['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '50%';
        $config['new_image'] = 'uploads/'.$gambar['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $sgambar= $gambar['file_name'];


      }
      if($foto_bukti_pembayaran) {
        $foto_bukti_pembayaran = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/'.$foto_bukti_pembayaran['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '50%';
        $config['new_image'] = 'uploads/'.$foto_bukti_pembayaran['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $sfoto_bukti_pembayaran= $foto_bukti_pembayaran['file_name'];


      }




      
      







      if (!empty($_FILES['foto_ijaza']['name'])) {
        $ijaza1 = strtolower($_FILES['foto_ijaza']['name']);
      }else{
        $ijaza1 =  $this->input->post('foto_ijaza2');
      }
      if (!empty($_FILES['foto_kesehatan']['name'])) {
        $kesehatan2 = strtolower($_FILES['foto_kesehatan']['name']);  
      }else{
        $kesehatan2 = $this->input->post('foto_kesehatan2');
      }
      if (!empty($_FILES['foto']['name'])) {
        $foto3 = strtolower($_FILES['foto']['name']); 
      }else{
        $foto3 = $this->input->post('foto2'); 
      }
      if (!empty($_FILES['foto_bukti_pembayaran']['name'])) {
        $foto_bukti_pembayaran4 = strtolower($_FILES['foto_bukti_pembayaran']['name']); 
      }else{
        $foto_bukti_pembayaran4 = $this->input->post('foto_bukti_pembayaran');  
      }
      $cek_foto_ijaza = strrchr($ijaza1,".php");
      $cek_foto_kesehatan = strrchr($kesehatan2,".php");
      $cek_foto_foto = strrchr($foto3,".php");
      $cek_foto_bukti_pembayaran = strrchr($foto_bukti_pembayaran4,".php");
      if ($cek_foto_ijaza AND $cek_foto_bukti_pembayaran AND $cek_foto_kesehatan AND $cek_foto_foto  == ".php") {
        $this->session->set_flashdata('file_gagal','<div class="alert alert-danger">Foto Gagal Upload !</div>');
        redirect('pmb');
        
      }else{
        


        $data           = $this->getFormData();
        $data['foto_diri']    = $foto3;
        $data['foto_kesehatan'] = $kesehatan2;
        $data['foto_ijazah']  = $ijaza1;
        $data['foto_bukti_pembayaran']  = $foto_bukti_pembayaran4;
        // $array = array('nama_lengkap'=>$nama_lengkap,'kewarganegaraan'=>$kewarganegaraan,'jk'=>$jk,'tinggi_badan'=>$tinggi_badan,'berat_badan'=>$berat_badan,'tmpt_lahir'=>$tmpt_lahir,'tgl_lahir'=>$tgl_lahir,'alamat'=>$alamat,'kode_pos'=>$kode_pos,'nama_ayah'=>$nama_ayah,'nama_ibu'=>$nama_ibu,'no_hp1'=>$no_hp1,'no_hp2'=>$no_hp2,'info_dari'=>$info_dari,'nama_asal_sekolah'=>$nama_asal_sekolah,'alamat_asal_sekolah'=>$alamat_asal_sekolah,'foto_ijaza'=>$ijaza1,'foto_kesehatan'=>$kesehatan2,'foto'=>$foto3);        
        $daftar = $this->m_page->m_proses_pmb($id,$data);
        


        # code...
        
        if ($daftar > 0) {
          $this->session->set_flashdata('sukses','<div class="alert alert-success">Berhasil Upload Data !</div>');
          redirect('pmb/detail');
        }else{
          echo "salah";
        }       
      }

    }


  }

  private function getFormData()
  {
    $data = date_create($this->input->post('tgl_lahir'));
    $tanggal = date_format($data,'Y-m-d');
    return [
      'nama_lengkap'      => $this->input->post('nama_lengkap'),
      'kewarganegaraan'     => $this->input->post('kewarganegaraan'),
      'jk'          => $this->input->post('jk'),
      'tinggi_badan'      => $this->input->post('tinggi_badan'),
      'berat_badan'       => $this->input->post('berat_badan'),
      'tmpt_lahir'      => $this->input->post('tmpt_lahir'),
      'tgl_lahir'       => $tanggal,
      'alamat'        => $this->input->post('alamat'),
      'level'       => 'pmb_lamah',
      'kode_pos'        => $this->input->post('kode_pos'),
      'nama_ayah'       => $this->input->post('nama_ayah'),
      'nama_ibu'        => $this->input->post('nama_ibu'),
      'no_hp1'        => $this->input->post('no_hp1'),
      'no_hp2'        => $this->input->post('no_hp2'),
      'info_dari'       => $this->input->post('info_dari'),
      'nama_asal_sekolah'   => $this->input->post('nama_asal_sekolah'),
      'alamat_asal_sekolah' => $this->input->post('alamat_asal_sekolah'),
    ];
  } 

  public function get_pw($raw_password)
  {
    $this->config->load('setting');
    $prefix = $this->config->item('password_prefix','security');
    $new_pass = sprintf("%s%s",$prefix,$raw_password);
    $hash = password_hash($new_pass,PASSWORD_DEFAULT);
    return print($hash);
  }
  private function getPasswordWithPrefix($raw_password)
  {
    $this->config->load('setting');
    $prefix = $this->config->item('password_prefix','security');
    $new_pass = sprintf("%s%s",$prefix,$raw_password);
    return $new_pass;
  }
  public function setting_password(){
    $data['isi_pmb']  = 'pmb/content/v_ganti_password';
    $this->load->view('pmb/template/layout',$data);
  }
  public function proses_setting_password(){
   $id = $this->session->userdata('id_pmb');
    $password = $this->hash_password($this->input->post('password_lamah'));

    $array = array('password'=>$password);
    $edit = $this->m_pmb->m_setting_password($id,$array);

    if($edit > 0){
      redirect('pmb/detail');
    }else{
      redirect('pmb/detail');
    }
    
            
    
    
    
    
  }

  private function hash_password($raw_password)
  {
    $this->config->load('setting');
    $prefix = $this->config->item('password_prefix','security');
    $new_pass = sprintf("%s%s",$prefix,$raw_password);
    $hash = password_hash($new_pass,PASSWORD_DEFAULT);
    return $hash;
  }
}

