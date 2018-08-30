<?php
/**
 * @author : Yash Karanke
 * @description : So, it seems like in laravel normal directory
 * 				  structure i.e. path/to/file.php is not the standard
 * 				  the standard is your rendering files must be in views folder
 * 				  then suppose you have a subfolder `developer` and a file in it
 * 				  `resume.blade.php`, so you can simply return view('subfoldername.filename');
 * 	
 */
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;

	class RedirectionLinks extends Controller{
	
		protected $guard = 'web';
		public function resume(){
			return view('developer.resume');
		}

		public function devProfile() {
			return view('developer.devstory');
		}
	}
?>