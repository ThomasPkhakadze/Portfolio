<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use File;
use App\Intro;

class IntroController extends Controller
{
    public function index()
    {
        $intros = Intro::all();
        return view('admin.intro.introIndex', [
            'intros' => $intros
        ]);
    }

    public function store(Request $request)
    {
        $this->Validate($request,[
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'desc_ge' => 'required|string',
            'desc_en' => 'required|string',
            'link_ge' => 'required|string',
            'link_en' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
            
            ]);

        $intro = new Intro;
        $intro->title_ge = $request->title_ge;
        $intro->title_en = $request->title_en;
        $intro->desc_ge = $request->desc_ge;
        $intro->desc_en = $request->desc_en;
        $intro->link_ge = $request->link_ge;
        $intro->link_en = $request->link_en;
        $intro->url = $request->url;


        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
        $path = $request->file('image')->move(public_path("images/"), $newfilename);
        $lastPath = "images/" . $newfilename;
        $request['image'] = $lastPath;
        $intro->image = $lastPath;


        $intro->save();

        return redirect()->route('intro.index');
            
    }  
    
    public function edit($id)
    {
        $intro = Intro::find($id);
        return view('admin.intro.introEdit',['intro'=> $intro]);
    }

    public function update(Request $request, $id)
    {
        $intro =  Intro::find($id);

        $this->Validate($request,[
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'desc_ge' => 'required|string',
            'desc_en' => 'required|string',
            'link_ge' => 'required|string',
            'link_en' => 'required|string',
            'url' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
           
            ]);

        
        $intro->title_ge = $request->title_ge;
        $intro->title_en = $request->title_en;
        $intro->desc_ge = $request->desc_ge;
        $intro->desc_en = $request->desc_en;
        $intro->link_ge = $request->link_ge;
        $intro->link_en = $request->link_en;
        $intro->url = $request->url;


        if(!empty($request->image)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $intro->image = $lastPath;
        }


        $intro->save();

        return redirect()->route('intro.index');
            
    }  

    public function destroy($id)
    {
        $intro = Intro::find($id);

        $intro->delete();

        return redirect()->route('intro.index');
    }
}
