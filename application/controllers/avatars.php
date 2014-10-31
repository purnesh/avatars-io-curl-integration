<?php
	class Avatars extends CI_Controller{
		public function index(){
			$this->load->model('Avatars_model', 'avatars');
			$url =  $this->avatars->twitter('purneshtripathi');
			echo "<img src='$url' />";
		}
	}

?>
