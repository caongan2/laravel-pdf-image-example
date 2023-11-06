<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use PDF;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;


class DownloadFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $param;

    public function __construct($param)
    {
        $this->param = $param;
    }

    public function handle()
    {
        $data = $this->getData($this->param);
        $pdf = PDF::loadView('welcome', ['data' => $data]);
        $pdf->save('sample-with-image.pdf');
    }

    private function getData($data)
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
