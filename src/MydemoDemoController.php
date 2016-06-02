<?php
namespace Mydemo\Demo;
use App\Http\Controllers\Controller;
class MydemoDemoController extends Controller {
	public function index() {
		// 1.0.25
		echo 'MydemoDemoController::index <br/>';
	}
	
	public function say($say = '') {
		echo $say, '<br/>';
	}
}