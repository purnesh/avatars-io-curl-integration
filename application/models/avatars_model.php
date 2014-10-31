<?php 
	class Avatars_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$size="small";
		}

		public function twitter($id){
			$url = "http://avatars.io/twitter/".$id;
			return $url;
		}
		
		
		
		public function sized($service, $id, $size){
			$url = "http://avatars.io/".$service."/".$id."?size=".$size;
			return $url;
		}


	}

?>
