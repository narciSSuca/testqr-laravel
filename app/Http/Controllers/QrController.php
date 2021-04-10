<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QrController extends Controller
{
  public function QrCode(Request $req) {
    $qrText = $req->input('content');
    return view('qrcode', [
      'text' => $qrText ]);
    }
    // public function   QrCode()
    // {
    //   return response()->json('qwe');
    // }
}
//   {!! QrCode::encoding('UTF-8')->size(500)->generate('Иди сюда мать твою'); !!}
