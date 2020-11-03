<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class API extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(['Content/BeritaModel', 'Content/ProdukModel', 'Kategori/KategoriModel', 'Simpanan/Simpanan_model', 'GambarSlider/GambarSliderModel', 'Request/Request_model']);
    }
    public function getMostPopularNews(){
        $model = new BeritaModel;
        $data = $model->top_3();
        $output = json_output(200, null, $data);
        echo json_encode($output, JSON_PRETTY_PRINT);
    }
    public function getMostPopularTags(){
        $model = new KategoriModel;
        $data = $model->top(10);
        $output = json_output(200, null, $data);
        echo json_encode($output, JSON_PRETTY_PRINT);

    }
    public function newestProduct(){
        $model = new ProdukModel;
        $data = $model->newest();
        $output = json_output(200, null, $data);
        echo json_encode($output, JSON_PRETTY_PRINT);

    }
    public function topProduct(){
        $model = new ProdukModel;
        $data = $model->top();
        $output = json_output(200, null, $data);
        echo json_encode($output, JSON_PRETTY_PRINT);

    }
    public function newestNews(){
        $model = new BeritaModel;
        $data = $model->newest();
        $output = json_output(200, null, $data);
        echo json_encode($output, JSON_PRETTY_PRINT);
    }
    public function get_historyPembayaran(){
        $model = new Simpanan_model;
        $data = $model->get_history();
        $output = json_output(200, null, $data);
        echo json_encode($output, JSON_PRETTY_PRINT);
    }
    public function get_slider(){
        $model = new GambarSliderModel;
        $data = $model->findBy(['tipe_attachment' => 3, 'status_slider' => 1]);
        $output = json_output(200, null, $data);
        echo json_encode($output, JSON_PRETTY_PRINT);
    }
    public function save_requestData()
	{
		// var_dump($this->input->post());
		foreach($this->input->post('data_request') as $key => $val){
			if(isset($val)):
				$model = new Request_model();
				$model->id_user = $this->session->userdata('user_id');
				$model->jenis_request = $this->input->post('jenis_req')[$key];
				$model->data_request = $val;
				$model->status_request = 1;
				$model->created_on = date('Y-m-d H:i:s');
				$model->save();
			endif;
		}
		return redirect(base_url('rekening'));		
	}
	
}