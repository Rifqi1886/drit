<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct() {
		parent::__construct();
    }

    public function index() {
		// mengarahkan ke function read
		$this->read();
	}

	public function read() {
		// mengirim data ke view
		$output = array(
						'theme_page' => 'about',
					);

		// memanggil file view
		$this->load->view('theme/index', $output);
	}
}