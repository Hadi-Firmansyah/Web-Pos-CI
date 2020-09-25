<?php
class Foods extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_pos');

    }
    public function foods_save(){
        $this->model_pos->save_foods();
    }
    public function foods_delete($id){
       $this->model_pos->delete_foods($id);
       redirect('Admin/foods');
    }
    public function foods_edit($id){
        $data['title'] = "Edit Foods";
        $this->load->view('templates/header',$data);
        $data['g_foods'] = $this->model_pos->get_foods();
        $data['c_foods'] = $this->model_pos->count_foods();
        $data['data_edit'] = $this->model_pos->get_data_foods($id);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('foods/edit_foods',$data);
        $this->load->view('admin/templates/footer');
    }
    public function action_edit(){
        $this->model_pos->edit_foods();

    }
}

?>