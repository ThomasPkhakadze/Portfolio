<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;

use App\MenuItem;

class MenuItemsController extends Controller
{

    public function index()
    {   $mi = MenuItem::all();
        return view('admin.menuItem.menuItemIndex',[ 'menuItems' => $mi ]);
    }

    public function edit($id)
    {   $mi = MenuItem::find($id);
        return view('admin.menuItem.menuItemEdit',[ 'menuItem' => $mi ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'label' => 'required|string',
            'label_ge' => 'required|string',
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'body_ge' => 'required|string',
            'body_en' => 'required|string',
            'bg_color' => 'nullable',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $mItem = new MenuItem;

        $mItem->label = $request->label;
        $mItem->label_ge = $request->label_ge;
        $mItem->title_ge = $request->title_ge;
        $mItem->title_en = $request->title_en;
        $mItem->body_ge = $request->body_ge;
        $mItem->body_en = $request->body_en;
        $mItem->bg_color = $request->bg_color;
        

        if(!empty($request->image)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $mItem->image = $lastPath;
        }

        $mItem->save();

        return redirect()->route('menuItem.index');
    }

    public function update(Request $request, $id)
    {
        $mItem = MenuItem::find($id);
        $this->validate($request,[
            'label' => 'required|string',
            'label_ge' => 'required|string',
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'body_ge' => 'required|string',
            'body_en' => 'required|string',
            'bg_color' => 'nullable',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

       

        $mItem->label = $request->label;
        $mItem->label_ge = $request->label_ge;
        $mItem->title_ge = $request->title_ge;
        $mItem->title_en = $request->title_en;
        $mItem->body_ge = $request->body_ge;
        $mItem->body_en = $request->body_en;
        $mItem->bg_color = $request->bg_color;
        

        if(!empty($request->image)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $mItem->image = $lastPath;
        }

        $mItem->save();

        return redirect()->route('menuItem.index');
    }


    public function destroy($id)
    {
        $mi = MenuItem::find($id);

        $mi->delete();

        return redirect()->route('menuItem.index');
    }
}
