<?php 
	class Avatars_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		public function twitter($id){
			$url = "http://avatars.io/twitter/".$id;
//			$result = $this->curl->simple_get($url);
			return $url;
		}
	}

?>
