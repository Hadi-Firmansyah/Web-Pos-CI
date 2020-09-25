<?php
class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_pos');
    }
    public function index(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '1'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }
        $data['title'] = "Dashboard Administrator";
        $data['c_foods'] = $this->model_pos->count_foods();
        $data['c_order'] = $this->model_pos->count_order();
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('admin/home',$data);
        $this->load->view('admin/templates/footer');
    }
    public function user(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '1'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }
        $data['title'] = "Data User";
        $data['g_user'] = $this->model_pos->get_user();
        $data['c_user'] = $this->model_pos->count_user();
        $data['c_foods'] = $this->model_pos->count_foods();
        $data['take_level'] = $this->model_pos->get_level();
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('admin/user',$data);
        $this->load->view('admin/templates/footer');
    }
    public function foods(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '1'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }

        $data['title'] = "Foods";
        $data['g_foods'] = $this->model_pos->get_foods();
        $data['c_foods'] = $this->model_pos->count_foods();
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('foods/foods',$data);
        $this->load->view('admin/templates/footer');

    }
    public function tables(){
        if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') != '1'){
            redirect('Auth');
        }else if($this->session->userdata('status_log') != 'Online'){
            redirect('Auth');
        }

        $data['title'] = "Entri Table";
        $data['g_foods'] = $this->model_pos->get_foods();
        $data['c_foods'] = $this->model_pos->count_foods();
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('table/table',$data);
        $this->load->view('admin/templates/footer');

    }
    
}

?> 