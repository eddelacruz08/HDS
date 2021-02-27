<?php namespace App\Controllers;
use CodeIgniter\Controller;
use \Mpdf\Mpdf;

class PdfController extends Controller
{

	public function index()
	 {
		 $mpdf = new \Mpdf\Mpdf();
		 $html = view('pdfreport');
		 $mpdf->WriteHTML($html);
		 $mpdf->Output()->setContentType('Content/Application');
		 exit;// opens in browser
		 //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
	 }

}
