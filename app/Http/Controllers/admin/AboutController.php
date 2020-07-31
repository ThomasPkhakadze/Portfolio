<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();

        return view('admin.about.aboutIndex', ['abouts' => $abouts]);
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
        $this->validate($request ,[
            'title_ge' => 'required|string',
            'title_en' => 'required|string',

            'desc_ge' => 'required|string',
            'desc_en' => 'required|string',

            'name_ge' => 'required|string',
            'name_en' => 'required|string',

            'gender_ge' => 'required|string',
            'gender_en' => 'required|string',

            'birth_date_ge' => 'required|date',
            'birth_date_en' => 'required|date',

            'nationality_ge' => 'required|string',
            'nationality_en' => 'required|string',

            'email' => 'required|email',
            'phone_number' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $about = new About;

        $about->title_ge = $request->title_ge;
        $about->title_en = $request->title_en;

        $about->desc_ge = $request->desc_ge;
        $about->desc_en = $request->desc_en;

        $about->name_ge = $request->name_ge;
        $about->name_en = $request->name_en;

        $about->gender_ge = $request->gender_ge;
        $about->gender_en = $request->gender_en;

        $about->birth_date_ge = $request->birth_date_ge;
        $about->birth_date_en = $request->birth_date_en;

        $about->nationality_ge = $request->nationality_ge;
        $about->nationality_en = $request->nationality_en;
        
        $about->email = $request->email;

        $about->phone_number = $request->phone_number;
        
        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
        $path = $request->file('image')->move(public_path("images/"), $newfilename);
        $lastPath = "images/" . $newfilename;
        $request['image'] = $lastPath;
        $about->image = $lastPath;

        $about->save();

        return redirect()->route('about.index');

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
        $about = About::find($id);

        return view('admin.about.aboutEdit', ['about' => $about]);
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
        $about = About::find($id);

        $this->validate($request ,[
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'desc_ge' => 'required|string',
            'desc_en' => 'required|string',
            'name_ge' => 'required|string',
            'name_en' => 'required|string',
            'gender_ge' => 'required|string',
            'gender_en' => 'required|string',
            'birth_date_ge' => 'required|date',
            'birth_date_en' => 'required|date',
            'nationality_ge' => 'required|string',
            'nationality_en' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        
        $about->title_ge = $request->title_ge;
        $about->title_en = $request->title_en;

        $about->desc_ge = $request->desc_ge;
        $about->desc_en = $request->desc_en;

        $about->name_ge = $request->name_ge;
        $about->name_en = $request->name_en;

        $about->gender_ge = $request->gender_ge;
        $about->gender_en = $request->gender_en;

        $about->birth_date_ge = $request->birth_date_ge;
        $about->birth_date_en = $request->birth_date_en;

        $about->nationality_ge = $request->nationality_ge;
        $about->nationality_en = $request->nationality_en;
        $about->email = $request->email;

        $about->phone_number = $request->phone_number;
        
        if(!empty($request->image))
        {
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $about->image = $lastPath;
        }

        $about->save();

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);

        $about->delete();

        return redirect()->route('about.index');
    }
}
