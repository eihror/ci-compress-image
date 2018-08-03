<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{

		$this->load->library('Compress');  // load the codeginiter library

		//File to block
		$file0 = base_url().'images/issue.jpg'; // file that you wanna compress
		$new_name_image0 = 'issue_resized'; // name of new file compressed
		$quality0 = 60; // Value that I chose
		$destination0 = base_url().'images/resized'; // This destination must be exist on your project

		//File to pass
		$file1 = base_url().'images/snake_river.jpg'; // file that you wanna compress
		$new_name_image1 = 'snake_river_resized'; // name of new file compressed
		$quality1 = 10; // Value that I chose
		$destination1 = base_url().'images/resized'; // This destination must be exist on your project

		//PNG File
		$file2 = base_url().'images/yoshi.png'; // file that you wanna compress
		$new_name_image2 = 'yoshi_resized'; // name of new file compressed
		$quality2 = 60; // Value that I chose
		$pngQuality2 = 9;
		$destination2 = base_url().'images/resized'; // This destination must be exist on your project
		
		$compress0 = new Compress();
		$compress1 = new Compress();
		$compress2 = new Compress();
		
		$compress0->file_url = $file0;
		$compress0->new_name_image = $new_name_image0;
		$compress0->quality = $quality0;
		$compress0->destination = $destination0;

		$compress1->file_url = $file1;
		$compress1->new_name_image = $new_name_image1;
		$compress1->quality = $quality1;
		$compress1->destination = $destination1;

		$compress2->file_url = $file2;
		$compress2->new_name_image = $new_name_image2;
		$compress2->quality = $quality2;
		$compress2->pngQuality = $pngQuality2;
		$compress2->destination = $destination2;

		$result0 = $compress0->compress_image();
		$result1 = $compress1->compress_image();
		$result2 = $compress2->compress_image();

		echo '<pre>';
		var_dump($result0);
		var_dump($result1);
		var_dump($result2);
		die;

	}
}
