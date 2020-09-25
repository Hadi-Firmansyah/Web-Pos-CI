<?php
Class model_pos extends CI_Model{
    //User
    public function save_user(){
        $data = array (
            'id' => "",
            'username' => $this->input->post('username'),
            // 'password' => $this->input->post('password'),
            'password' => password_hash($this->input->post('password'),
            PASSWORD_DEFAULT),
            'name' => $this->input->post('name'),
            'id_level' => $this->input->post('id_level')

        );
        $this->db->insert('tb_user',$data);
        $this->session->set_flashdata('Message','Congratulation! Your account has been created. Please Login!');
        redirect('Auth/login');
    }
    //user get
    public function get_user(){
        $data = $this->db->get('tb_user');
        return $data->result();
    }
    public function count_user(){
        $data = $this->db->get('tb_user');
        return $data->num_rows();
    }
    //end
    public function get_level(){
    $data = $this->db->get('tb_level');
    return $data->result();
    }

    
    public function check_login($table,$where){
        return $this->db->get_where($table,$where);
    }
    public function update_login($log_stat,$usernames){
        $this->db->set('status_log',$log_stat);
        $this->db->where('username',$usernames);
        $this->db->update('tb_user');
    }
    public function delete_user($id){
        $this->db->delete('tb_user',array('id' => $id));
    }
    public function edit_user(){
        $id = $this->input->post('id');
        $data = array(
        'id' => $id,
        'name' => $this->input->post('name'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'id_level' => $this->input->post('id_level'),
    );

    $this->db->where('id' , $id);
    $this->db->update('tb_user' , $data);
    redirect('Admin/user');
    }
    public function get_data_user($id){
        $data = $this->db->query("SELECT * FROM tb_user WHERE id='$id'");
        return $data -> result();
    
    }

    //Foods
    public function save_foods(){
        $data = array (
            'id' => "",
            'name' => $this->input->post('name'),
            'category' => $this->input->post('category'),
            'price' => $this->input->post('price'),
            'stock' => $this->input->post('stock')

        );
        $this->db->insert('tb_food',$data);
        $this->session->set_flashdata('Message','Data has been added!');
        redirect('Admin/foods');
    }
    public function get_foods(){
        $data = $this->db->get('tb_food');
        return $data->result();
    }
    public function count_foods(){
        $data = $this->db->get('tb_food');
        return $data->num_rows();
    }
    public function delete_foods($id){
        $this->db->delete('tb_food',array('id' => $id));
    }
    public function edit_foods(){
        $id = $this->input->post('id');
        $data = array(
        'id' => $id,
        'name' => $this->input->post('name'),
        'category' => $this->input->post('category'),
        'price' => $this->input->post('price'),
        'stock' => $this->input->post('stock')
    );

    $this->db->where('id' , $id);
    $this->db->update('tb_food' , $data);
    redirect('Admin/foods');
    }
    public function get_data_foods($id){
        $data = $this->db->query("SELECT * FROM tb_food WHERE id='$id'");
        return $data -> result();
    
    }

    //Order
    public function save_order(){
        $data = array(
            'id' => "",
            'date' => $this->input->post('date'),
            'id_user' => '3',
            'id_food' => $this->input->post('id_food'),
            'food' => $this->input->post('food'),
            'price' => $this->input->post('price'),
            'category' => $this->input->post('category'),
            'quantity' => $this->input->post('quantity'),
            'pay' => 'No'
        );
        $this->db->insert('tb_order',$data);
        redirect('Waiter/order');
    }
    public function delete_order($id){
        $this->db->delete('tb_order',array('id' => $id));
    }
    public function get_order(){
        $data = $this->db->get('tb_order');
        return $data->result();
    }
    public function count_order(){
        $data = $this->db->get('tb_order');
        return $data->num_rows();
    }
    public function get_data_order($id){
        $data = $this->db->query("SELECT * FROM tb_order WHERE id='$id'");
        return $data -> result();
    
    }
    public function edit_order(){
        $id = $this->input->post('id');
        $data = array(
            'id' => $this->input->post('id'),
            'date' => $this->input->post('date'),
            'id_user' => '3',
            'id_food' => $this->input->post('id_food'),
            'food' => $this->input->post('food'),
            'price' => $this->input->post('price'),
            'category' => $this->input->post('category'),
            'quantity' => $this->input->post('quantity'),
            'pay' => 'No'
    );

    $this->db->where('id' , $id);
    $this->db->update('tb_order' , $data);
    redirect('Waiter/order');
    }

    //Transaction
    public function save_transaction(){
        $data = array(
            'id' => "",
            'date' => $this->input->post('date'),
            'id_user' => '3',
            'id_order' => $this->input->post('id_order'),
            'id_food' => $this->input->post('id_food'),
            'food' => $this->input->post('food'),
            'price' => $this->input->post('price'),
            'quantity' => $this->input->post('quantity'),
            'cost' => $this->input->post('cost'),
            'money' => $this->input->post('money'),
            'change' => $this->input->post('change'),

        );
        $this->db->insert('tb_transaction',$data);
        redirect('Cashier/transaction');

    }
    public function get_transaction(){
        $data = $this->db->get('tb_transaction');
        return $data->result();
    }
    public function count_transaction(){
        $data = $this->db->get('tb_transaction');
        return $data->num_rows();
    }
    public function get_data_transaction($id){
        $data = $this->db->query("SELECT * FROM tb_transaction WHERE id='$id'");
        return $data -> result();
    
    }

}

?>