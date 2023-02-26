<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chats extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('chats');
	}

	public function message(){
		
		$message = $this->input->post('message');
		$url = "https://wsapi.simsimi.com/190410/talk";
		$ch = curl_init();

		$options = array(
			CURLOPT_AUTOREFERER => 1,
						CURLOPT_RETURNTRANSFER => 1,
						CURLOPT_CONNECTTIMEOUT => 1,
						CURLOPT_URL => $url,
						CURLOPT_FOLLOWLOCATION => 1,
						CURLOPT_SSL_VERIFYPEER => 0,
						CURLOPT_HTTPHEADER => array(
							'Content-Type: application/json',
							"x-api-key: d9ZcWIDd4E8wun_6MKX6wy_KgH4QOWuno4Qz5l98",
							'{
								"utext":"hello",
								"lang": "en",

							}' 
						)
					);
		curl_setopt_array($ch, $options);


		$data = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
		print_r($data . 'in response with '.$message);

	}
}
