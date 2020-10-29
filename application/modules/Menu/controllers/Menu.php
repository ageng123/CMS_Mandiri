<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model(['MenuModel']);
	}
	public function index()
	{
		$content = 'menu/list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Menu admin"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}
	// JSON
	public function getJSON(){
		$model = new MenuModel;
		$output = $model->all();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_menu;
			$row[] = '';
			$row[] = $this->getMenuNama($val->id_menu);
			$row[] = $this->getMenuNama($val->parent_menu);
			$row[] = '<i class="'.$val->icon_menu.'"></i>';
			$row[] = '<a href="'.base_url('menu/edit').'?session_id='.encode($val->id_menu).'" class="btn btn-success btn-sm">Edit</a><a href="'.base_url('menu/destroy').'?session_id='.encode($val->id_menu).'" class="btn btn-danger btn-sm">Hapus</a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	public function getMenuNama($params){
		$model = new MenuModel();
		$output = $model->find($params);
		return isset($output) ? $output->nama_menu : '';
	}
	// Form Url
	public function add()
	{
		$content = 'menu/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Menu",
			'form_url' => base_url('menu/add'),
			'menu_data' => $this->MenuModel->findBy(['parent_menu' => null]),
		];
		if(!empty($this->input->post())):
			$request = (object)$this->input->post();
			$model = new MenuModel();
			$model->parent_menu = $request->parent_id;
			$model->nama_menu = $request->nama_menu;
			$model->link_menu = $request->link_menu;
			$model->icon_menu = $request->icon_menu;
			$model->create_date = date('Y-m-d H:i:s');
			if($model->save()):
				return redirect(base_url('menu'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function edit(){
		$model = new MenuModel();
		$id = decode($_GET['session_id']);
		$content = 'menu/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Roles",
			'form_url' => base_url('menu/edit?session_id='.encode($id)),
			'form_data' => $model->find($id),
			'menu_data' => $this->MenuModel->findBy(['parent_menu' => null]),
		];
		if(!empty($this->input->post())):
			
			$request = (object)$this->input->post();
			$model->parent_menu = $request->parent_id;
			$model->nama_menu = $request->nama_menu;
			$model->link_menu = $request->link_menu;
			$model->icon_menu = $request->icon_menu;
			if($model->update($id)):
				return redirect(base_url('menu'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function destroy()
	{
		$id = decode($_GET['session_id']);
		$model = new MenuModel;
		$model->delete($id);
		return redirect(base_url('menu'));
	}
	// Export 

}
