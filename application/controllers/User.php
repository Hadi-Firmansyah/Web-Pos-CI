<?php
class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_pos');

    }
    public function user_delete($id){
       $this->model_pos->delete_user($id);
       redirect('Admin/user');
    }
    public function user_edit($id){
        $data['title'] = "Edit User";
        $this->load->view('templates/header',$data);
        $data['g_foods'] = $this->model_pos->get_foods();
        $data['c_foods'] = $this->model_pos->count_foods();
        $data['data_edit'] = $this->model_pos->get_data_user($id);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('admin/edit_user',$data);
        $this->load->view('admin/templates/footer');
    }
    public function action_edit(){
        $this->model_pos->edit_user();

    }
}

?>