<?php

namespace App\Http\Controllers\front;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PDFconverter extends Controller
{

    public function convertToPDF()
    {
        $pdf = PDF::loadView('front.main');

        return $pdf->download('dudu.pdf');
    }
}
