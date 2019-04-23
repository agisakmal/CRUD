<?php
/**
 * Created by PhpStorm.
 * User: faqih
 * Date: 06/07/18
 * Time: 3:57
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	public function index(){
		$this->load->view('User/index');
	}


}
