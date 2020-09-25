<?php
class Order extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_pos');
    }
    public function order_select($id){
        $data['title'] = "Order Foods";
        $data['g_foods'] = $this->model_pos->get_foods();
        $data['c_foods'] = $this->model_pos->count_foods();
        $data['get_data_food'] = $this->model_pos->get_data_foods($id); 
        $data['get_data_order'] = $this->model_pos->get_data_order($id); 
        $this->load->view('waiter/templates/header',$data);
        $this->load->view('waiter/templates/sidebar',$data);
        $this->load->view('waiter/templates/topbar',$data);
        $this->load->view('order/add_order',$data);
        $this->load->view('waiter/templates/footer');
    }
    public function order_save(){
        $this->model_pos->save_order();
    }
    public function order_delete($id){
        $this->model_pos->delete_order($id);
        redirect('Waiter/order');
    }
    public function order_edit($id){
        $data['title'] = "Edit Order";
        $this->load->view('waiter/templates/header',$data);
        $data['g_order'] = $this->model_pos->get_order();
        $data['c_order'] = $this->model_pos->count_order();
        $data['get_data'] = $this->model_pos->get_data_foods($id);
        $data['data_edit'] = $this->model_pos->get_data_order($id);
        $this->load->view('waiter//templates/sidebar',$data);
        $this->load->view('waiter/templates/topbar',$data);
        $this->load->view('order/edit_order',$data);
        $this->load->view('waiter/templates/footer');
    }
    public function action_edit(){
        $this->model_pos->edit_order();

    }
}

?>