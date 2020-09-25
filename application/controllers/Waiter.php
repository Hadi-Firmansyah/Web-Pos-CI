<?php
class Waiter extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_pos');
    }
    public function index(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '2'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }

        $data['title'] = "Home Waiter";
        $data['c_foods'] = $this->model_pos->count_foods();
        $this->load->view('waiter/templates/header',$data);
        $this->load->view('waiter/templates/sidebar',$data);
        $this->load->view('waiter/templates/topbar',$data);
        $this->load->view('waiter/home_waiter',$data);
        $this->load->view('waiter/templates/footer');
    }
    public function foods(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '2'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }

        $data['title'] = "Order";
        $data['g_foods'] = $this->model_pos->get_foods();
        $data['c_foods'] = $this->model_pos->count_foods();
        $this->load->view('waiter/templates/header',$data);
        $this->load->view('waiter/templates/sidebar',$data);
        $this->load->view('waiter/templates/topbar',$data);
        $this->load->view('waiter/foods',$data);
        $this->load->view('waiter/templates/footer');

    }
    public function order(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '2'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }
        
        $data['title'] = "Order Foods";
        $data['g_foods'] = $this->model_pos->get_foods();
        $data['c_foods'] = $this->model_pos->count_foods();
        $data['g_order'] = $this->model_pos->get_order();
        $data['c_order'] = $this->model_pos->count_order();
        $this->load->view('waiter/templates/header',$data);
        $this->load->view('waiter/templates/sidebar',$data);
        $this->load->view('waiter/templates/topbar',$data);
        $this->load->view('order/order',$data);
        $this->load->view('waiter/templates/footer');

    }
    
}

?> 