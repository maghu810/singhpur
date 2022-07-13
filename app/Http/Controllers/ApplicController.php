<?php

namespace App\Http\Controllers;

use App\Models\Applic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ApplicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $applic = Applic::orderBy('id', 'DESC')->paginate(10);
        return view('front.all-application', compact('applic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $applic = new Applic;
        $applic->slno = $request->letter_no;
        $applic->date = $request->date;
        $applic->praptesu = $request->praptesu;
        $applic->bisaya = $request->bisaya;
        $applic->whome = $request->mahasaya;
        $applic->sarangsa = $request->sarangsa;
        $applic->binita = $request->binita;
        $applic->save();
        return redirect()->route('allapp');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applic  $applic
     * @return \Illuminate\Http\Response
     */
    public function show($applic)
    {
        //
        //$users = DB::table('applics')->where('id', $applic)->first();
        $users = Applic::where('id', $applic)->get();
        //dd($users);
        return view('application-view', compact('users'));
        // $pdf = PDF::loadView('application-view', compact('users'));
    
        // return $pdf->download('application.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applic  $applic
     * @return \Illuminate\Http\Response
     */
    public function edit(Applic $applic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applic  $applic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applic $applic)
    {
        //
    }
    public function generatePDF($request)
    {
       $data = Applic::where('id', $request)->get();
       $users = [
            'slno' => $request->slno,
            'date' => $request->date,
            'praptesu' => $request->praptesu,
            'bisaya' => $request->bisaya,
            'whome' => $request->whome,
            'sarangsa' => $request->sarangsa,
            'binita' => $request->binita,
        ];
        //dd($data);
        //return view('application-view', compact('users'));
          
        $pdf = PDF::loadView('application-view', $users);
    
        return $pdf->download('application.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applic  $applic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applic $applic)
    {
        //
    }
}
