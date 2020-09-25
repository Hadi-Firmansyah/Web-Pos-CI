<?php
class Owner extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_pos');
    }
    public function index(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '4'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }

        $data['title'] = "Home Owner";
        $this->load->view('owner/templates/header',$data);
        $this->load->view('owner/templates/sidebar',$data);
        $this->load->view('owner/templates/topbar',$data);
        $this->load->view('owner/home_owner',$data);
        $this->load->view('owner/templates/footer');
    }
    public function transaction(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '4'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }
        
        $data['title'] = "Transaction";
        $this->load->view('owner/templates/header',$data);
        $this->load->view('owner/templates/sidebar',$data);
        $this->load->view('owner/templates/topbar',$data);
        $this->load->view('owner/home_owner',$data);
        $this->load->view('owner/templates/footer');
 
    }
    
    
}

?> 