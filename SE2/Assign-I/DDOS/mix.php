<?php

	
	//Hey Dare to make me angry , I will nullify u within a second
	
	class DDOS {

		private $target;
		private $URI;
		private $attackSeverity;
		private $attackInterval;
		private $format;

		public function __construct($attackTarget , $attackSource ){

		}

		public function attackSeverityImage($attackNo){

			$num = new Array($attackNo);
			for($i = 0; i < $attackNo; $i++) {
				$num[i] = new Image();
			}

			return $num;
		}

		public function attackSeverityAudio($attackNo){

			$numAudio = new Array($attackNo);
			for($i = 0; i < $attackNo; $i++) {
				$numAudio[i] = new Audio();
			}

			return $numAudio;
		}




	// }

	//$url = 'http://localhost/Project/SE2/Assign-I/Architectural-Patterns/MVC/login';
	// $base = 'https://localhost/Project/SE2/';

	// //Pull in the external html contents
	// $contents = file_get_contents($url);

	// //Use Regular Expression to match all <img src="???"/>
	
	// //preg_match_all('/<img[^>]*src=[\"|\'](.*)[\"|\']/Ui', $contents, $out , PREG_PATTERN_ORDER);
	// preg_match_all('/<a[^>]* href=[\"|\'](.*)[\"|\']/Ui', $contents, $out , PREG_PATTERN_ORDER);
	// foreach ($out[1] as $key => $value) {
	// 	# code...
		
	// 	if( strpos($value, 'http://') !== true) $value = $base . $value;
	// 	echo $value;
	// 	echo '<br/>';
	// }
	
	return json_encode($_GET['name']);
?>