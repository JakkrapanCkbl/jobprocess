<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Invoice;

use DB;


class InvoiceController extends Controller
{
    public function index()
    {
        //return view('admin.index');
        //$invoices = Invoice::latest()->paginate(20);

        //$invoices = Invoice::all();
        $invoices = Invoice::paginate(20);      
        
        //$invoices = DB::table('invoice')->paginate(20);
        return view('invoice.index',compact('invoices'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        if ($search != '') {
             $invoices = DB::table('invoice')->where('id','=',$search)->orderBy('id', 'DESC')->paginate(20);           
             return view('invoice.index',['invoices' => $invoices]);
        } else {
            $invoices = Invoice::paginate(20); 
            return view('invoice.index',compact('invoices'));  
        }
       
    }

     public function create()
    {
         
        return view('invoice.create');

    }

    public function store(Request $request)
    {
       
        //dd($request);
        $this->validate($request,[
            'invoiceno'=>'required',
            'invoicedate'=>'required'   
        ]);      
            Invoice::create([
                'invoiceno'=>$request->get('invoiceno'),               
                'invoicedate'=>$request->get('invoicedate'),  
                'customer'=>$request->get('customer'),
                'address'=>$request->get('address'),
                'description'=>$request->get('description'),
                'qty'=>$request->get('qty'),
                'amountjob'=>$request->get('amountjob'),
                'remark'=>$request->get('remark')              
            ]);         
        return redirect('/invoice')->with('message','Post created successfully');  
    }



    public function edit($id){
                   
        $invoice = Invoice::find($id);       
        return view('invoice.edit',compact('invoice'));
    }

     public function update($id,Request $request){
        //dd($id);
        $this->validate($request,[
            'invoiceno'=>'required',            
            'invoicedate'=>'required'
        ]);
         //$date = Carbon::createFromFormat('d-m-Y', $request->invoicedate)->toDateString();    
            Invoice::where('id',$id)->update([
                'invoiceno'=>$request->get('invoiceno'),
                'invoicedate'=>$request->get('invoicedate'),
                'customer'=>$request->get('customer'),
                'address'=>$request->get('address'),
                'description'=>$request->get('description'),
                'qty'=>$request->get('qty'),
                'amountjob'=>$request->get('amountjob'),
                'remark'=>$request->get('remark'),
                'receiptno'=>$request->get('receiptno'),
                'receiptdate'=>$request->get('receiptdate')
            ]);        
        return redirect('/invoice')->with('message','Post created successfully');      
    }

   public function destroy(Request $request)
    {
        $id = $request->get('id');        
        $invoice = Invoice::find($id); 
        //dd($invoice);       
        $invoice->delete();
        return redirect()->back()->with('message','Post deleted successfully');
    }

}
