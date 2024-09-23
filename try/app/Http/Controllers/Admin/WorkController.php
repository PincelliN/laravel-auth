<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Functions\Helper;
use App\Http\Requests\WorkRequest;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works= Work::orderby('id')->get();
        return view('admin.work.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.work.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkRequest $request)
    {
        $data= $request->all();
        $new_work= new Work();
        $data['slug']= Helper::generateSlug($data['title'],Work::class);
        $new_work->fill($data);
        $new_work->save();

        return redirect()->route('admin.work.show',$new_work->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        $work=Work::find($work->id);

        return view('admin.work.show',compact('work'));
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