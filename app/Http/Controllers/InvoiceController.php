<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
    	$invoices = Invoice::paginate(10);

    	return view('invoices.index', compact('invoices'));
    }
}
