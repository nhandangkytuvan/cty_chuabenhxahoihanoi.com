<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use BrowserDetect;
class ChuyendeController extends Controller{
	public function viemnhiemquydau(Request $request){
		return view('web.chuyende.mobile.viemnhiemquydau');
	}
}