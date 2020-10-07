<?php
class Transaction extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_pos');
    }
    public function transaction_select($id){
        $data['title'] = "Transaction";
        $data['get_data_user'] = $this->model_pos->get_data_user($id);
        $data['get_data_order'] = $this->model_pos->get_data_order($id);
        $this->load->view('cashier/templates/header',$data);
        $this->load->view('cashier/templates/sidebar',$data);
        $this->load->view('cashier/templates/topbar',$data);
        $this->load->view('transaction/add_transaction',$data);
        $this->load->view('cashier/templates/footer');
    }
    public function transaction_save(){
        $this->model_pos->save_transaction();
    }
    public function transaction_preview($id){
        $data['g_transaction'] = $this->model_pos->get_transaction();
        $data['c_transaction'] = $this->model_pos->count_transaction();
        $data['get_data_transaction'] = $this->model_pos->get_data_transaction($id);
        $data['title'] = "Transaction Preview";
        $this->load->view('cashier/templates/header' , $data);
        $this->load->view('transaction/preview_transaction' ,$data);
    }
    public function transaction_pdf($id){
        ob_start();
        $data['g_transaction'] = $this->model_pos->get_transaction();
        $data['c_transaction'] = $this->model_pos->count_transaction();
        $data['get_data_transaction'] = $this->model_pos->get_data_transaction($id);
        $this->load->view('transaction/preview_transaction',$data);

        $html = ob_get_contents();
        ob_end_clean();
        
        //assets
        require'./assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4'.'en');
        $pdf->WriteHTML($html);

        // File
        $pdf->Output('Report_'.date('d-M-Y').'.pdf','D');

    }
}
?>