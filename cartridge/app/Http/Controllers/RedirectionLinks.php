<?php

	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;

	class RedirectionLinks extends Controller{
	
		protected $guard = 'web';
		
		public function pleaseRedirect(){
			return redirect()->to('developer/developer-profile');
		}
	};
?>