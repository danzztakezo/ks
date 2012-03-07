<?php
  $b = $this->config->item("base_url") . "/";
  $this->load->view("kartikasari/header");

  if(isset($data_content)){
    switch($data_content){
      # HOME
      case 0:
        $this->load->view("kartikasari/welcome");
        break;
    
      # LOCATION
      case 1:
        $this->load->view("kartikasari/location");
        break;
    
      # ABOUT US
      case 2:
        $this->load->view("kartikasari/aboutus");
        break;
    
      # PRODUCTS
      case 3:
        $this->load->view("kartikasari/products");
        break;
    
      # SEPCIAL HAMPERS
      case 4:
        $this->load->view("kartikasari/specialhampers");
        break;
    
      # MADAME SARI
      case 5:
        $this->load->view("kartikasari/madamesari");
        break;
    
      # KEBON JUKUT
      case 6:
        $this->load->view("kartikasari/kebonjukut");
        break;
    }
  }

  $this->load->view("kartikasari/footer"); 
?>
