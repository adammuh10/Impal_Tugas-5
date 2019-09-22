<?php

class collections extends CI_Controller{
    //awal Outdoor Equipments

    public function bottle(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('outdoor/bottle');
    $this->load->view('templates/footer');    
    }

    public function campkitchen(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('outdoor/camp-kitchen');
    $this->load->view('templates/footer');    
    }

    public function navigasi(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('outdoor/navigasi');
    $this->load->view('templates/footer');    
    }

    public function sleepingbag(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('outdoor/sleeping-bag');
    $this->load->view('templates/footer');    
    }

    public function survivalkit(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('outdoor/survival-kit');
    $this->load->view('templates/footer');    
    }    

    public function tendafurniture(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('outdoor/tenda-furniture');
    $this->load->view('templates/footer');    
    }    

    public function travellingaccesories(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('outdoor/travelling-accesories');
    $this->load->view('templates/footer');    
    }

    public function waterbladder(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('outdoor/water-bladder');
    $this->load->view('templates/footer');    
    }   
    
    //akhir Outdoor Equipments 
    
    //awal Bags & Packs
    
    public function carrier(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/carrier');
    $this->load->view('templates/footer');    
    }

    public function tassepeda(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/tas-sepeda');
    $this->load->view('templates/footer');    
    }

    public function daypack(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/daypack');
    $this->load->view('templates/footer');    
    }   
    
    public function drybag(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/dry-bag');
    $this->load->view('templates/footer');    
    }    

    public function legpacks(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/leg-packs');
    $this->load->view('templates/footer');    
    }    

    public function semicarrier(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/semi-carrier');
    $this->load->view('templates/footer');    
    }    

    public function travelbag(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/travel-bag');
    $this->load->view('templates/footer');    
    }   

    public function travelpouch(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/travel-pouch');
    $this->load->view('templates/footer');    
    }  
    
    public function waistbag(){
    $data['judul'] = 'Arei Outdoor Gear - Arei Outdoorgear';
    $this->load->view('templates/header', $data);
    $this->load->view('bags/waist-bag');
    $this->load->view('templates/footer');    
    }   
    //akhir Bags & Packs 
}