<?php

namespace App\Http\Controllers\front;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Intro;
use App\Article;
use App\About;
use App\Skill;
use App\Work;
use App\Fact;
use App\MenuItem;
use App\SliderSkill;
class FrontController extends Controller
{   
    
    // Main Page =======================
    public function getMain()
    {   
        $intro = Intro::all();
        $fact = Fact::all();
        $article = Article::all();
        $about = About::all();
        $skill = Skill::all();
        $work = Work::all();
        $menuItem = MenuItem::orderBy('id', 'asc')->get();
        $sliderSkill = SliderSkill::all();

        //set Counter to zero
        // at front forEach Skill increment counter
        // template specific bruh...
        $counter = 0;
        
        return view('front.main', [
            'intros' => $intro,
            'facts' => $fact,
            'articles' => $article,
            'abouts' => $about,
            'skills' => $skill,
            'works' => $work,
            'counter' => $counter,
            'menuItems' => $menuItem,
            'SS' => $sliderSkill
             

        ]);
    }

    public function convertToPDF()
    {
      

        $pdf = PDF::loadView('front.dudu');
        return $pdf->download('dudu.pdf');
    }
}
