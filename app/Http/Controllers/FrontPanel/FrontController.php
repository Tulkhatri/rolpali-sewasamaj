<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use App\Models\BackPanel\Aboutus;
use App\Models\BackPanel\Donation;
use App\Models\BackPanel\Event;
use App\Models\BackPanel\News;
use App\Models\BackPanel\OurTeam;
use App\Models\BackPanel\Slider;
use Inertia\Inertia;

class FrontController extends Controller
{
    // Homepage fetch-start
    public function index()
    {
    $data=[
        'aboutus' => Aboutus::get()->first(),
        'slider' => Slider::selectraw('title,image')->where('status','Y')->orderby('id','desc')->get()->all(),
        'event' => Event::selectraw('title,image,detail,address,event_date,slug')->where('status','Y')->orderby('id','desc')->limit(4)->get()->all(),
        'donation' => Donation::limit(3)->orderby('id','desc')->get()->all(),
    ];
        sleep(1);
        return Inertia::render('FrontPanel/Dashboard/Home',$data);
    }
    public function messageDetail()
    {
    $data=[
        'aboutus' => Aboutus::selectraw('chairman_message,chairman_image,aboutus_title,aboutus_detail,aboutus_image')->get()->first(),
    ];
        sleep(1);
        return Inertia::render('FrontPanel/Dashboard/DetailPage',$data);
    }
    // Homapage fetch -end

    // Donation fetch-start
    public function donation()
    {
        sleep(1);
        return Inertia::render('FrontPanel/Donation/Donation', ['donation' => Donation::orderby('id','desc')->get()]);
    }
    // Donation fetch -end
    public function detail($slug)
    {
        sleep(1);
        return Inertia::render('FrontPanel/Donation/DetailPage', ['donation' => Donation::where('slug',$slug)->get()->first()]);
    }
    // Donation fetch -end

    public function missionDetail()
    {
    $data=[
        'aboutus' => Aboutus::selectraw('mission1_title,mission2_title,mission3_title,mission1_detail,mission2_detail,mission3_detail,mission1_image,mission2_image,mission3_image')->get()->first(),
    ];
        sleep(1);
        return Inertia::render('FrontPanel/Mission/Detail',$data);
    }

    public function aboutUs()
    {
    $data=[
        'aboutus' => Aboutus::selectraw('vision_title,vision_detail,vision_image')->get()->first(),
        'ourteam' => OurTeam::selectRaw('name, designation, facebook, detail, image, branchid')
        ->with('branch') 
        ->orderBy('order', 'asc')
        ->get()
        ->groupBy('branch.branchname') // Group by branch name
        ];

        sleep(1);
        return Inertia::render('FrontPanel/About',$data);
    }


      // Event fetch-start
      public function event()
      {
          sleep(1);
          return Inertia::render('FrontPanel/Event/Event', ['event' => Event::orderby('id','desc')->get()]);
      }
      // Event fetch -end
      public function eventDetail($slug)
      {
          sleep(1);
          return Inertia::render('FrontPanel/Event/DetailPage', ['event' => Event::where('slug',$slug)->get()->first()]);
      }
      // Event fetch -end

      // News fetch-start
      public function news()
      {
          sleep(1);
          return Inertia::render('FrontPanel/News/News', ['news' => News::orderby('id','desc')->get()]);
      }
      // News fetch -end
      public function newsDetail($slug)
      {
          sleep(1);
          return Inertia::render('FrontPanel/News/DetailPage', ['news' => News::where('slug',$slug)->get()->first()]);
      }
      // News fetch -end


}
