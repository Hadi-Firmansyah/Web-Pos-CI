<?php
class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_pos');
        // $this->load->libraries('form_validation');

    }
    public function index(){
        if($this->session->userdata('status_log') != 'Online'){
            header(base_url());
        }else if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') == '1') {
            header("Location:".base_url().'Admin/index/'.$this->session->userdata('username'));
        }else if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') == '2') {
            header("Location:".base_url().'Waiter/index/'.$this->session->userdata('username'));
        }else if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') == '3') {
            header("Location:".base_url().'Cashier/index/'.$this->session->userdata('username'));
        }else if($this->session->userdata('status_log') == 'Online' && $this->session->userdata('id_level') == '4') {
            header("Location:".base_url().'Owner/index/'.$this->session->userdata('username'));
        }

        $data['title'] = 'Home - Pos';
        $this->load->view('home',$data);
        
        }

    public function login(){
        // if($this->session->userdata('status_log') = 'Online' ){
        //     redirect("Auth");
        // }

        $data['title'] = 'Login';
        $this->load->view('auth/login',$data);
    }
    public function register(){
        if($this->session->userdata('status_log') == 'Online' ){
            redirect("Auth");
        }

        $data['title'] = 'Register';
        $data['take_level'] = $this->model_pos->get_level();
        $this->load->view('auth/register',$data);
    }
    public function user_register(){
        $this->model_pos->save_user();
    }
    public function action_login(){
        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');

        $where = array(
            'username' => $usernames,
            'password' => password_verify($passwords)
        );
        $check = $this->model_pos->check_login("tb_user",$where)->num_rows();

        if($check > 0){
            $log_stat = 'Online';
            $this->model_pos->update_login($log_stat,$usernames);
            $data= $this->model_pos->check_login("tb_user",$where)->result();

            foreach ($data as $dataz){
                $data_session = array(
                    'name' => $dataz->name,
                    'username' => $dataz->username,
                    'id_level' => $dataz->id_level,
                    'status_log' => $dataz->status_log,
                );
            }

            $this->session->set_userdata($data_session);
            if($this->session->userdata('status_log') == 'Online'){
                redirect('Auth');
            }else{
                echo 'Login Failed';
            }
        }else {
            // echo "<script>alert('Username or Password Wrong!');history.go(-1);</script>";
            $this->session->set_flashdata('Failed','Username / Password Wrong!');
            redirect(base_url('Auth/login'));
        }
        
    }
    public function logout(){
        $log_stat = 'Offline';
        $this->model_pos->update_login($log_stat,$this->session->userdata('username'));
        $this->session->sess_destroy();
        $this->session->set_flashdata('Success','Logout Success!');
        redirect(base_url('Auth/login'));
    }

}

?>