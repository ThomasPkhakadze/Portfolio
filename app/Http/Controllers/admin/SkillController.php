<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use App\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view('admin.skill.skillIndex',['skills' => $skills]);
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
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'desc_ge' => 'required|string',
            'desc_en' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $skill = new Skill;

        $skill->title_ge = $request->title_ge;
        $skill->title_en = $request->title_en;
        $skill->desc_ge = $request->desc_ge;
        $skill->desc_en = $request->desc_en;

        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
        $path = $request->file('image')->move(public_path("images/"), $newfilename);
        $lastPath = "images/" . $newfilename;
        $request['image'] = $lastPath;
        $skill->image = $lastPath;

        $skill->save();

        return redirect()->route('skill.index');
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);

        return view('admin.skill.skillEdit', ['skill' => $skill]);
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
        $skill = Skill::find($id);

        $this->validate($request, [
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'desc_ge' => 'required|string',
            'desc_en' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        

        $skill->title_ge = $request->title_ge;
        $skill->title_en = $request->title_en;
        $skill->desc_ge = $request->desc_ge;
        $skill->desc_en = $request->desc_en;

        if(!empty($request->image))
        {
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $skill->image = $lastPath;
        }

        $skill->save();

        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);

        $skill->delete();

        return redirect()->route('skill.index');
    }
}
