<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct() {
		parent::__construct();
    }

    public function index() {
		// mengarahkan ke function read
		$this->serviceComputer();
	}

	public function serviceComputer() {
		// mengirim data ke view
		$output = array(
						'theme_page' => 'service/serviceComputer',
					);

		// memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function instalSoftware() {
		// mengirim data ke view
		$output = array(
						'theme_page' => 'service/instalSoftware',
					);

		// memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function instalUlang() {
		// mengirim data ke view
		$output = array(
						'theme_page' => 'service/instalUlang',
					);

		// memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function pembuatanWebsite() {
		// mengirim data ke view
		$output = array(
						'theme_page' => 'service/pembuatanWebsite',
					);

		// memanggil file view
		$this->load->view('theme/index', $output);
	}

	
}