<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fibonacci extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
    function __construct() {
      parent::__construct();
      $this->load->helper('url');
      
    }

     
    public function index() {
        $data['judul'] = "Fibonacci";
        $this->load->view('v_header',$data);
       
        if(isset($_GET['page']))
        {
           $page = $_GET['page'];           
        }  


        $jumlah = $page * 10; // Per page di x 10 untuk tampil di page = 10 data
             //simpan string angka awal
        $hasil = array();
        $hasil[0] = 0;//data ke index 0
        $hasil[1] = 1;// data ke index 1
        for ($i=2; $i<$jumlah; $i++) //mulai dari index ke 2
        {
          $hasil[$i] = $hasil[$i-1] + $hasil[$i-2]; //jika hasil = 1,maka di dapat dari array (2), (2-1) + (2-2)
        } 

         $data['hasil'] = $hasil;       
         $this->load->view('v_index',$data);
         $this->load->view('v_footer',$data); 
    }
    
}
