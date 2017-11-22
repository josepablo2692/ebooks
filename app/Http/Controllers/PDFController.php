<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use PDF;

class PDFController extends Controller
{
    public function pdf(Request $request){
    	$products=Product::all();
    	view()->share('products', $products);
    	if ($request->has('descargar')) {
    		$pdf = PDF::loadView('cart.index', $products);
    		return $pdf->download('cotizacion');
    	}
    	return view('cart.index');
    }
}
