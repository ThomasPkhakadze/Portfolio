<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fact;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts = Fact::all();

        return view('admin.fact.factIndex', ['facts' => $facts]);
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
            'education_ge' => 'required|string',
            'education_en' => 'required|string',
            'experience_ge' => 'required|string',
            'experience_en' => 'required|string'

        ]);

        $fact = new Fact;

        $fact->education_ge = $request->education_ge;
        $fact->education_en = $request->education_en;
        $fact->experience_ge = $request->experience_ge;
        $fact->experience_en = $request->experience_en;

        $fact->save();

        return redirect()->route('fact.index');
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
        $fact = Fact::find($id);

        return view('admin.fact.factEdit', ['fact' => $fact]);
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
        $fact = Fact::find($id);

        $this->validate($request, [
            'education_ge' => 'required|string',
            'education_en' => 'required|string',
            'experience_ge' => 'required|string',
            'experience_en' => 'required|string'



        ]);

        

        $fact->education_ge = $request->education_ge;
        $fact->education_en = $request->education_en;
        $fact->experience_ge = $request->experience_ge;
        $fact->experience_en = $request->experience_en;

        $fact->save();

        return redirect()->route('fact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fact= Fact::find($id);

        $fact->delete();

        return redirect()->route('fact.index');
    }
}
