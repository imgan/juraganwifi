<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('administrator/model_wilayah');
	}

	function render_view($data)
	{
		$this->template->load('templateadmin', $data); //Display Page
	}

	public function index()
	{
		if ($this->session->userdata('email') != null && $this->session->userdata('name') != null) {
			$mykepemilikanlistrik = $this->model_wilayah->viewOrdering('jenis_kepemilikan_perangkat', 'id', 'desc')->result_array();
			$myjenispembayaranlistrik = $this->model_wilayah->viewOrdering('jenis_pembayaran', 'id', 'desc')->result_array();
			$data = array(
				'page_content'      => '../pageadmin/wilayah/view',
				'ribbon'            => '<li class="active">Daftar Wilayah</li>',
				'page_name'         => 'Daftar Wilayah',
				'mykepemilikanlistrik' => $mykepemilikanlistrik,
				'myjenispembayaranlistrik' => $myjenispembayaranlistrik
			);
			$this->render_view($data); //Memanggil function render_view
		} else {
			$this->load->view('pageadmin/login'); //Memanggil function render_view
		}
	}

	public function tampil()
	{
		if ($this->session->userdata('email') != null && $this->session->userdata('name') != null) {
			$my_data = $this->model_wilayah->viewOrdering('wilayah', 'id', 'desc')->result_array();
			echo json_encode($my_data);
		} else {
			$this->load->view('pageadmin/login'); //Memanggil function render_view
		}
	}

	public function update()
	{
		if ($this->session->userdata('email') != null && $this->session->userdata('name') != null) {
			$data_id = array(
				'id'  => $this->input->post('e_id')
			);
			$data = array(
				'nama'  => $this->input->post('e_nama'),
				'keterangan'  => $this->input->post('e_keterangan'),
				'updatedAt' => date('Y-m-d H:i:s'),
				'updatedBy' => $this->session->userdata('name'),
			);
			$action = $this->model_wilayah->update($data_id, $data, 'wilayah');
			echo json_encode($action);
		} else {
			$this->load->view('pageadmin/login'); //Memanggil function render_view
		}
	}

	public function tampil_byid()
	{
		if ($this->session->userdata('email') != null && $this->session->userdata('name') != null) {

			$data = array(
				'id'  => $this->input->post('id'),
			);
			$my_data = $this->model_wilayah->viewWhere('wilayah', $data)->result();
			echo json_encode($my_data);
		} else {
			$this->load->view('pageadmin/login'); //Memanggil function render_view
		}
	}

    public function delete()
    {
        if ($this->session->userdata('email') != null && $this->session->userdata('name') != null) {

            $data_id = array(
                'id'  => $this->input->post('id')
            );
            $action = $this->model_wilayah->delete($data_id, 'wilayah');
            echo json_encode($action);
        } else {
            $this->load->view('pageadmin/login'); //Memanggil function render_view
        }
    }


    public function simpan()
    {
        if ($this->session->userdata('email') != null && $this->session->userdata('name') != null) {

            $data = array(
                'nama'  => $this->input->post('nama'),
				'keterangan'  => $this->input->post('keterangan'),
				'createdAt' => date('Y-m-d H:i:s'),
				'createdBy'	=> $this->session->userdata('name')
            );
			$cek = $this->model_wilayah->checkDuplicate($data,'wilayah');
			if($cek > 0){
				echo json_encode(401);
			} else {
				$action = $this->model_wilayah->insert($data, 'wilayah');
				echo json_encode($action);
			}

        } else {
            $this->load->view('pageadmin/login'); //Memanggil function render_view
        }
    }
}
