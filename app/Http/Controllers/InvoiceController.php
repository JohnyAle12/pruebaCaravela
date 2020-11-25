<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class InvoiceController extends Controller
{
    public function index(){
    	$invoices = Invoice::join('users', 'invoices.fiscal_id', '=', 'users.fiscal_id')
    		->select('invoices.*', 'users.name')
    		->paginate(10);

    	return view('invoices.index', compact('invoices'));
    }

    public function create(){
    	return view('invoices.create');
    }

    public function store(Request $request){

    	$invoice = new Invoice;
    	$invoice->fiscal_id = Auth::user()->fiscal_id;
		$invoice->value = $request->value;
		$invoice->currency = $request->currency;
		$invoice->state = 'Cancelada';
		$invoice->country = $request->country;
		$invoice->save();

		return redirect()->route('home')->with('status', 'Factura creada con exito');
    }

    public function show(Invoice $invoice){

    	$invoices = Invoice::where('fiscal_id', Auth::user()->fiscal_id)->paginate(10);

    	return view('invoices.show', compact('invoices'));

    }
}
