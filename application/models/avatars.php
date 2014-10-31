<?php 

	class Avatars extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		public function twitter($id) {
			$url = "http://avatars.io/twitter/".$id;
			return $url;
		}
	}

?>
