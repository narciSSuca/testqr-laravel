<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QrController extends Controller
{
  // public function QrCode(Request $req) {
  //   $qrText = $req->input('content');
  //   return view('qrcode', [
  //     'text' => $qrText ]);
  //   }

    public function QrCodePng(Request $req) {
      $qrText = $req->input('content');
      $output_file = '/images/qr-code/img-' . time() . '.png';
      \QrCode::encoding('UTF-8')->
                     margin(3)->
                     size(500)->
                     format('png')->
                     generate($qrText,public_path($output_file));
      return view('qrcode', [
        'text' => $qrText,
        'output' => $output_file ]);
      }
}
