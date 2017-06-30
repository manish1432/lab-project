<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OldMain extends CI_Controller {

public function index()
{
	echo "<h1>This is index function</h1>";
	echo "<br />";
	$this->test1();
	echo "<br /><hr/>";
	$this->load->model("main_model");
	$data["title"] =  "Controller text";
	$data["title1"] = "Controller text 2";
	$this->load->view("main_view", $data);
	echo $this->main_model->test_main();
}

public function test1()
{
	echo "<h1>This is test1 function</h1>";
}
}
