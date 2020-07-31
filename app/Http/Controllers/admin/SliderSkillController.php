<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SliderSkill;

class SliderSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SliderSkills = SliderSkill::all();

        return view('admin.SliderSkill.SliderSkillIndex', ['SliderSkills' => $SliderSkills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'skills_str_ge' => 'required|string',
            'skills_str_en' => 'required|string',
            'skills_int' => 'required|integer'


        ]);

        $SliderSkill = new SliderSkill;

        $SliderSkill->skills_str_ge = $request->skills_str_ge;
        $SliderSkill->skills_str_en = $request->skills_str_en;
        $SliderSkill->skills_int = $request->skills_int;

        $SliderSkill->save();

        return redirect()->route('SliderSkill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $SliderSkill = SliderSkill::find($id);

        return view('admin.SliderSkill.SliderSkillEdit', ['SliderSkill' => $SliderSkill]);
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
        $SliderSkill = SliderSkill::find($id);

        $this->validate($request, [
            'skills_str_ge' => 'required|string',
            'skills_str_en' => 'required|string',
            'skills_int' => 'required|integer'
        ]);

        


        $SliderSkill->skills_str_ge = $request->skills_str_ge;
        $SliderSkill->skills_str_en = $request->skills_str_en;
        $SliderSkill->skills_int = $request->skills_int;

        $SliderSkill->save();

        return redirect()->route('SliderSkill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SliderSkill= SliderSkill::find($id);

        $SliderSkill->delete();

        return redirect()->route('SliderSkill.index');
    }
}
