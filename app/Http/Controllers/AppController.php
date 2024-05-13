<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Lookup;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $app = App::with(['getPosition'])->latest()->get();
        
        return view('pendaftaran.index', ['app' => $app]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lookup = Lookup::all(); // select * from tbl_lookup
        return view('pendaftaran.create', ['lookup' => $lookup]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $model = new App();
        
        $file_date =  Carbon::createFromFormat('d/m/Y H:i:s',  $request->input('file_date') . ' 00:00:00');
        $dob =  Carbon::createFromFormat('d/m/Y H:i:s',  $request->input('file_date') . ' 00:00:00');
        
        $model->name = $request->input('name'); 
        $model->new_file_no = $request->input('new_file_no'); 
        $model->other_file_no = $request->input('other_file_no'); 
        $model->nokp = $request->input('nokp'); 
        $model->old_kp = $request->input('old_kp');
        $model->position_category_id = $request->input('position_category_id'); 
        $model->file_date = $file_date;
        $model->location = $request->input('location');
        $model->dob = $dob;
        $model->status = 1; //'I'
        $model->reg_status = 1; //'M'
        $model->active = 1; // 'Aftif'
        
        $model->save();

        return redirect()->route('anggota-perkhidmatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
