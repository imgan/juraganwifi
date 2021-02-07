<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

class Tagihan_log extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('administrator/model_generate_tagihan_log');
	}

	function render_view($data)
	{
		$this->template->load('templateadmin', $data); //Display Page
	}

	public function index()
	{
		if ($this->session->userdata('email') != null && $this->session->userdata('name') != null) {
			$data = array(
				'page_content'      => '../pageadmin/tagihan_log/view',
				'ribbon'            => '<li class="active">Generate Tagihan</li>',
				'page_name'         => 'Generate Tagihan',
			);
			$this->render_view($data); //Memanggil function render_view
		} else {
			$this->load->view('pageadmin/login'); //Memanggil function render_view
		}
	}

	public function tampil()
	{
		if ($this->session->userdata('email') != null && $this->session->userdata('name') != null) {
			$my_data = $this->model_generate_tagihan_log->viewOrdering('tagihan_generate_log','id','desc')->result_array();
			echo json_encode($my_data);
		} else {
			$this->load->view('pageadmin/login'); //Memanggil function render_view
		}
	}

	public function generate()
	{
		$action = 0;
		$data = array(
			'bulan'  => $this->input->post('bulan'),
			'tahun'  => $this->input->post('tahun'),
			'createdAt' => date('Y-m-d H:i:s'),
		);
		$cek = $this->model_generate_tagihan_log->cek($this->input->post('bulan'), $this->input->post('tahun'))->num_rows();
		if($cek > 0){
			$generateInvoice = $this->generateInvoice();
			// $sendTagihan = $this->sendEmail($email, $pathInvoice);
			$action = $this->model_generate_tagihan_log->insert($data, 'tagihan_generate_log');
			echo json_encode($action);
		} else {
			echo json_encode($action);
		}
	}

	public function sendEmail($email, $invoice){
		$email = $this->input->post('email');
		$data = array(
			'type' => 'TAGIHAN'
		);
		$mail = new PHPMailer(true);
		//Server settings
		$configEmail = $this->model_generate_tagihan_log->viewWhereOrdering('email', $data, 'id', 'desc')->result_array();
		$configEmail = $configEmail[0];
		try {
		
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = $configEmail['host'];                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = $configEmail['email'];                     // SMTP username
			$mail->Password   = $configEmail['password'];                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = $configEmail['port'];                                     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom(EMAIL_TAGIHAN);
			// $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
			$mail->addAddress($email);               // Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('cc@example.com');
			$mail->addBCC($configEmail['bcc']);

			// // Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			echo 'Message has been sent';
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
	

	public function generateInvoice(){
		$data = array(
			"dataku" => array(
				"nama" => "Petani Kode",
				"url" => "http://petanikode.com"
			)
		);
	
		$this->load->library('Pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('pageadmin/laporan/invoice', $data);
	}

	public function tampil_byid()
	{
		$data = array(
			'idsaldo'  => $this->input->post('id'),
		);
		$my_data = $this->model_tunggakan->view_where('saldopembayaran_sekolah', $data)->result();
		echo json_encode($my_data);
	}
}
