<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade as PDF;

class BillController extends Controller
{
    //
    public function view(){
        return view('bill.view');
    }
    
    public function getPDF()
    {
        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
        // $users = User::all();
        // $pdf = PDF::loadView('user.index', compact('users'));
        // return $pdf->download('user_list.pdf');
        // $pdf = \PDF::loadView('shop.pdf', ['products' => $cart->items,'totalPrice' => $cart->totalPrice]);
        $pdf = \PDF::loadView('bill.pdf')
        ->setOption('encoding', 'utf-8')
        // ->setOption('user-style-sheet', base_path() . '/public/css/bill.css');
        ->setOption('user-style-sheet', base_path() . 'http://localhost:8000/css/bill.css');
        // $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->inline('bill.pdf'); 
        // return $pdf->stream();        
        // return view('shop.shopping-cart', ['products' => $cart->items,'totalPrice' => $cart->totalPrice]);
    }

    public function postPDF()
    {
        $pdf = \PDF::loadView('bill.pdf')
        ->setOption('encoding', 'utf-8')
        ->setPaper('A4')
        ->setOption('margin-top', 10)
        ->setOption('margin-right', 10)    
        ->setOption('margin-left', 10) ;
        // ->setOption('user-style-sheet', base_path() . '/public/css/bill.css');
        // ->setOption('user-style-sheet', base_path() . 'http://localhost:8000/css/bill.css');
        // $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->inline('bill.pdf');   

        // return $pdf->inline('view.pdf'); 
        // return $pdf->download('bill.view.pdf');
    }

    public function viewCondition(){
        return view('bill.condition');
    }

    public function postPDFCondition()
    {
        $pdf = \PDF::loadView('bill.conditionPrint')
        ->setOption('encoding', 'utf-8')
        ->setPaper('A4')
        ->setOption('margin-top', 10)
        ->setOption('margin-right', 10)    
        ->setOption('margin-left', 10) ;
        return $pdf->inline('bill.conditionPrint');  
    }

    public function getPDFCondition()
    {
        $pdf = \PDF::loadView('bill.conditionPrint')
        ->setOption('encoding', 'utf-8')
        // ->setOption('user-style-sheet', base_path() . '/public/css/bill.css');
        ->setOption('user-style-sheet', base_path() . 'http://localhost:8000/css/bill.css');
        // $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->inline('bill.conditionPrint');   
    }
}
