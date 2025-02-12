<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('filename', 'desc')->get();
        return view('main', compact('banners'));
    }

    public function getSongQueue() 
    {
        $data = Http::withHeaders([
            'Authorization' => 'trbkXIgP0EYEPAmQAj1mAUymPHS2cJzmz4SPOKUVQ7bpguEueqioxylpPXleVLEp4uPwPxQev5iBQig73sFzriFukBTy76pzbXWGOKgb3I6dSdGSIF7IslFdvX2YPd26ltDSkZ0a6ytZFLGy9bJbhmtpZa6FUE9HmYYXFfyOHyMP7AdYOI53v8AbMKovdBP77BSwGPGhgbTjVF2phXTvtVealboB0iwpUl3oEOSIY9lMwbjqIHDkeg4gzeGYJ3Eqoyj0DVbfIZYf1dgd',
            'Accept' => 'application/json'
        ])->get(env('API_URL').'/get-song-queue');

        return response()->json($data->json());
    }

    public function updateSongQueue(Request $request) 
    {
        $data = Http::withHeaders([
            'Authorization' => 'trbkXIgP0EYEPAmQAj1mAUymPHS2cJzmz4SPOKUVQ7bpguEueqioxylpPXleVLEp4uPwPxQev5iBQig73sFzriFukBTy76pzbXWGOKgb3I6dSdGSIF7IslFdvX2YPd26ltDSkZ0a6ytZFLGy9bJbhmtpZa6FUE9HmYYXFfyOHyMP7AdYOI53v8AbMKovdBP77BSwGPGhgbTjVF2phXTvtVealboB0iwpUl3oEOSIY9lMwbjqIHDkeg4gzeGYJ3Eqoyj0DVbfIZYf1dgd',
            'Accept' => 'application/json'
        ])->post((env('API_URL').'/update-song-queue'), [
            "id" => $request->id
        ]);

        return response()->json($data->json());
    }
}
