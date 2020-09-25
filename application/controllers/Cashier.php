<?php
class Cashier extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_pos');
    }
    public function index(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '3'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }

        $data['title'] = "Home Cashier";
        $this->load->view('cashier/templates/header',$data);
        $this->load->view('cashier/templates/sidebar',$data);
        $this->load->view('cashier/templates/topbar',$data);
        $this->load->view('cashier/home_cashier',$data);
        $this->load->view('cashier/templates/footer');
    }
    public function order(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '3'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }
        
        $data['title'] = "Entry Order";
        $data['g_order'] = $this->model_pos->get_order();
        $data['c_order'] = $this->model_pos->count_order();
        $this->load->view('cashier/templates/header',$data);
        $this->load->view('cashier/templates/sidebar',$data);
        $this->load->view('cashier/templates/topbar',$data);
        $this->load->view('transaction/order',$data);
        $this->load->view('cashier/templates/footer');

    }
    public function transaction(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '3'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }
        
        $data['title'] = "Transaction";
        $data['g_order'] = $this->model_pos->get_order();
        $data['c_order'] = $this->model_pos->count_order();
        $data['g_transaction'] = $this->model_pos->get_transaction();
        $data['c_transaction'] = $this->model_pos->count_transaction();
        $this->load->view('cashier/templates/header',$data);
        $this->load->view('cashier/templates/sidebar',$data);
        $this->load->view('cashier/templates/topbar',$data);
        $this->load->view('transaction/transaction',$data);
        $this->load->view('cashier/templates/footer');

    }
     
    
}

?> 