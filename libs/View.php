<?php
 class View {
 	function View() {
 		//echo 'This is the view<br />';
 	}
 	
 	public function render($name, $noIncludes = false) {
 		
 		if($noIncludes == true) {
 			require 'views/' . $name . '.php';
 		} else {
 			require 'views/header.php';
 			require 'views/' . $name . '.php';
 			require 'views/footer.php';
 		}
 	}
 }