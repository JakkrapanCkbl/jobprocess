<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use PDF;
use App\Job;
use App\User;
use PDFbarry;
use Carbon\Carbon;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $adminRole = Auth::user()->roles()->pluck('name');
        if($adminRole->contains('admin')){
            //return redirect('/admininput');
            //$jobs = Job::latest()->limit(10)->get();
            //$jobs = Job::with('showavatar')->latest()->limit(10)->get();
            //return view('welcome',compact('jobs'));
            //$jobs = DB::select('select * from vw_order order by id desc LIMIT 100');
            //return view('welcomedido',compact('jobs'));
            $jobs = DB::select('select * from vw_order order by id desc LIMIT 10');
            return view('welcome',compact('jobs'));
        }

        //$jobs = Job::all();
        //$jobs = Job::paginate(10);
        //$jobs = Job::latest()->limit(10)->get();
        //$jobs = Job::with('valuer')->get();
       
        $jobs = DB::select('select * from vw_order order by id desc LIMIT 10');
        return view('welcome',compact('jobs'));
    }


    
    public function show($id,Job $job){
        $job=Job::find($id);
        //dd($job->jobcode);
        //return view('jobs.show',compact('job'));
        //return view('home');
        return view('jobs.show3',compact('job'));

    }

    public function downloadPDF($id){      
        $job = job::find($id); 
        //dd($job);            
        $view = \View::make('test.pdf',compact('job'));              
        $html = $view->render();              
        $pdf = new PDF();              
        $pdf::SetTitle('Report');              
        $pdf::AddPage();              
        $pdf::SetFont('freeserif', '', 10);              
        $pdf::writeHTML($html, true, false, true, false, '');              
        $pdf::Output('report.pdf');            
    }



    public function allJobs(Request $request){
       
     //front search
        $search = $request->get('search');
        $replaced = str_replace(' ', '%', $search);
        if($search){

           //$jobs = Job::where('projectname','LIKE','%'.$replaced.'%')->orderBy('id', 'DESC')->paginate(10);
           //$jobs = DB::table('vw_order')->where('HideResult','LIKE','%'.$replaced.'%')->get();
           //$jobs = DB::table('vw_order')->get();
           //dd($jobs);

           $jobs = DB::table('vw_order')
           ->where('HideResult','LIKE','%'.$replaced.'%')
           ->orderBy('id', 'DESC')
           ->paginate(10);
        //    dd($jobs);

        //    $jobs = Job::where('projectname','LIKE','%'.$replaced.'%')
        //    ->orWhere('proplocation','LIKE','%'.$replaced.'%')
        //    ->orderBy('id', 'DESC')->paginate(10);

            // $jobs = DB::table('jobs')
            // ->leftJoin('users', 'users.id', '=', 'jobs.valuer')
            // ->select('jobs.id as id, jobs.projectname As jobname, 
            // jobs.proplocation As proplocation, users.avatar As ValuerAvatar')
            // ->where('jobs.projectname','LIKE','%'.$replaced.'%')
            // ->orWhere('jobs.proplocation','LIKE','%'.$replaced.'%')
            // ->orderBy('jobs.id', 'DESC')->get();
            // dd($jobs);

           return view('jobs.alljobs',compact('jobs'));

        }


       $keyword = $request->get('position');      
       $address = $request->get('address');
       if($keyword||$address){
        $jobs = Job::where('jobcode','LIKE','%'.$keyword.'%')               
                ->Where('projectname','LIKE','%'.$address.'%')
                ->paginate(20);
                return view('jobs.alljobs',compact('jobs'));
       }else{

            $jobs = Job::latest()->paginate(20);
            return view('jobs.alljobs',compact('jobs'));
        }


    }

    public function view_pdf($id)
    {
        $jobs = str_replace('*', '/', $id);
        // dd($jobs);
        // $pdf = PDFbarry::loadView('pdf_forms.viewpdf');    
        // return $pdf->stream();
         return view('pdf_forms.viewpdf')->with('fn',$jobs);
    }


    public function pdf_order($id)
    {
        
        $jobs = DB::select('select * from vw_order where id = :id', ['id' => $id]);
        //dd($jobs);
        $pdf = PDFbarry::loadView('pdf_forms.order', compact('jobs'));    
        return $pdf->stream();
    }

    public function pdf_invoice($id)
    {

        $invoices = DB::select('select * from invoice where id = :id', ['id' => $id]);
        $money = $invoices[0]->amountjob;
        $vat = $money * 0.07;
        $total = $money + $vat;
        $aa = $this->bahtText($total);
        $pdf = PDFbarry::loadView('invoice.pdf_invoice', compact('invoices','aa'));        
        return $pdf->stream();

    }

    public function pdf_receipt($id)
    {
        
        $receipts = DB::select('select * from invoice where id = :id', ['id' => $id]);
        $money = $receipts[0]->amountjob;
        $vat = $money * 0.07;
        $total = $money + $vat;
        $aa = $this->bahtText($total);
        $pdf = PDFbarry::loadView('invoice.pdf_receipt', compact('receipts','aa'));    
        return $pdf->stream();
    }

    public function ope()
    {
        $pdf = PDFbarry::loadView('pdf_forms.ope');
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('ope.pdf');
    }

    public function bahtText($amount)
    {
        [$integer, $fraction] = explode('.', number_format(abs($amount), 2, '.', ''));

        $baht = $this->convert($integer);
        $satang = $this->convert($fraction);

        $output = $amount < 0 ? 'ลบ' : '';
        $output .= $baht ? $baht.'บาท' : '';
        $output .= $satang ? $satang.'สตางค์' : 'ถ้วน';

        return $baht.$satang === '' ? 'ศูนย์บาทถ้วน' : $output;
    }

    
    public function convert($number): string
    {
        $values = ['', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า'];
        $places = ['', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน'];
        $exceptions = ['หนึ่งสิบ' => 'สิบ', 'สองสิบ' => 'ยี่สิบ', 'สิบหนึ่ง' => 'สิบเอ็ด'];

        $output = '';

        foreach (str_split(strrev($number)) as $place => $value) {
            if ($place % 6 === 0 && $place > 0) {
                $output = $places[6].$output;
            }

            if ($value !== '0') {
                $output = $values[$value].$places[$place % 6].$output;
            }
        }

        foreach ($exceptions as $search => $replace) {
            $output = str_replace($search, $replace, $output);
        }

        return $output;
    }


    public function pdf_dragdrop($id, Request $request)
    {
        // $this -> testdate($id);
        $folderType = str_replace('/', '_', $request->input('folderName'));
        if ($request->hasFile('file')) {
            // Upload path
            $jobcode = str_replace('/', '_', job::find($id)->jobcode);
            $destinationPath = '../storage/app/public/project_reports/' . $jobcode . '/' . $folderType;
            // Create directory if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            // Get file extension
            $extension = $request->file('file')->getClientOriginalExtension();
            // Valid extensions
            $validextensions = array("jpeg", "jpg", "png", "pdf");
            // Check extension
            if (in_array(strtolower($extension), $validextensions)) {
                // Rename file 
                $fileName = $request->file('file')->getClientOriginalName(); //. time() . '.' . $extension;
                // Uploading file to given path
                $request->file('file')->move($destinationPath, $fileName);
            }
            
            // if (file_exists(public_path($destinationPath . "/" . explode(".", $fileName)[0] . ".pdf"))) {
            //     //convert 1st page of PDF to .jpg using Spatie
            //     $this->pdf_to_jpg($destinationPath, $fileName);
            // }
        }
    }

    public function pdf_to_jpg($path, $fileName)
    {
        $pdf = new \Spatie\PdfToImage\Pdf($path . "/" . $fileName);
        $pdf->saveImage($path . "/preview_" . explode(".", $fileName)[0] . ".jpg");
    }

    public function show_allfiles()
    {
        
        // $path = public_path('storage/images/users');
        // $files = File::allFiles($path);
        // dd($files);
        // https://dev.to/skipperhoa/show-all-image-from-public-folder-using-laravel-5-8-3a02
        $path = public_path('storage/images/users');
        $files = \File::allFiles($path);
        // return View('pages.form')->with(array('images'=>$images));
        dd($files);
    }

    public function showjoblist(){
      
            $jobs = DB::select('select * from vw_order order by id desc LIMIT 100');  
            return view('welcomedido',compact('jobs'));
        }

    

}
