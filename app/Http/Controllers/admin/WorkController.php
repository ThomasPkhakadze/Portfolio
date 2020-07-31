<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use App\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();

        return view('admin.work.workIndex', ['works' => $works]);
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'work_ge' => 'required|string',
            'work_en' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_img' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $work = new Work;

        if(!empty($request->bg_img))
        {
            $Newfilename = time() . rand() . '.' . $request->file('bg_img')->extension();
            $path = $request->file('bg_img')->move(public_path("images/"), $Newfilename);
            $LastPath = "images/" . $Newfilename;
            $request['bg_img'] = $LastPath;
            $work->bg_img = $LastPath;
        }
        $work->work_ge = $request->work_ge;
        $work->work_en = $request->work_en;


        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
        $path = $request->file('image')->move(public_path("images/"), $newfilename);
        $lastPath = "images/" . $newfilename;
        $request['image'] = $lastPath;
        $work->image = $lastPath;

        

        $work->save();

        return redirect()->route('work.index');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Work::find($id);

        return view('admin.work.workEdit', ['work' => $work]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work = Work::find($id);


        $this->validate($request, [
            'work_ge' => 'required|string',
            'work_en' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_img' => 'image|mimes:jpeg,png,jpg,gif,svg'

        ]);


        $work->work_ge = $request->work_ge;
        $work->work_en = $request->work_en;


        if(!empty($request->image))
        {
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $work->image = $lastPath;
        }
        if(!empty($request->bg_img))
        {
            $Newfilename = time() . rand() . '.' . $request->file('bg_img')->extension();
            $path = $request->file('bg_img')->move(public_path("images/"), $Newfilename);
            $LastPath = "images/" . $Newfilename;
            $request['bg_img'] = $LastPath;
            $work->bg_img = $LastPath;
        }

        $work->save();

        return redirect()->route('work.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);

        $work->delete();

        return redirect()->route('work.index');
    }
}
