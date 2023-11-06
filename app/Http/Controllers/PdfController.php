<?php

namespace App\Http\Controllers;

use ConvertApi\ConvertApi;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Jobs\DownloadFile;
use PDF;

class PdfController extends Controller
{

	public function view(Request $request)
    {
        $param = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
        $data = $this->getData($param);
        
        // $options = new Options();
        // $options->set('isHtml5ParserEnabled', true);
        // $dompdf = new Dompdf($options);
        return view('welcome', ['data' => $data]);
        // $html = view('welcome', ['data' => $data])->render();

        // $dompdf->loadHtml($html);

        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();

        // return $dompdf->stream('document.pdf');
    }

	public function downloadFile(Request $request)
	{
		$param = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];

		// Dispatch the job to the queue.
		DownloadFile::dispatch($param);

		// Return a response to the user, indicating that the file download has been initiated.
		return response()->json(['message' => 'File download has been initiated.']);
	}

    public function index() 
    {
		$param = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
        $data = $this->getData($param);
    	$pdf = PDF::loadView('welcome', ['data' => $data]);
    
        return $pdf->download('sample-with-image.pdf');
    }

	public function getData($data)
    {
        $token = $data['token'];
        $url = $data['url'];
        $callAPI = Http::withHeaders([
            'Authorization' => "Bearer $token"
        ])->get($url);
        $data = $callAPI->json();
        $title = $data['data']['data'];
        $count = 1;
        foreach ($title as $key => $item) {
            if (isset($item['title'])) {
                if ($count <= 6) {
                    $data['data']['data'][$key]['page'] = 2;
                }
                if ($count > 6 && $count <= 13) {
                    $data['data']['data'][$key]['page'] = 3;
                }
                if ($count > 13) {
                    $data['data']['data'][$key]['page'] = 4;
                }
            }
            $count++;
        }
        $data['data']['dateOfBirth'] = Carbon::create($data['data']['dateOfBirth'])->format('d/m/Y');
        return $data['data'];
    }
}
