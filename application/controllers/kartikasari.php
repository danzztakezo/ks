<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kartikasari extends CI_Controller {
  public function index(){
    $this->home();
  }
  
  public function home(){
    $this->display(0);
  }
  
  public function location(){
    $this->display(1);
  }
  
  public function aboutus(){
    $this->display(2);
  }
  
  public function products(){
    $this->display(3);
  }
  
  public function specialhampers(){
    $this->display(4);
  }
  
  public function madamesari(){
    $this->display(5);
  }
  
  public function kebonjukut(){
    $this->display(6);
  }
  
  public function display($data_content = 0){
    $data = array();
    $data["data_content"] = $data_content;
    $this->load->view('kartikasari/home', $data);
  }
}
