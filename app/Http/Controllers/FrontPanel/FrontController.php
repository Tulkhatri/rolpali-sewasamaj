<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use App\Models\BackPanel\Donation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    // Donation fetch-start
    public function donation()
    {
        sleep(1);
        return Inertia::render('FrontPanel/Donation/Donation', ['donation' => Donation::get()]);
    }
    // Donation fetch -end
    public function detail($slug)
    {
        sleep(1);
        return Inertia::render('FrontPanel/Donation/DetailPage', ['donation' => Donation::where('slug',$slug)->get()->first()]);
    }
    // Donation fetch -end
}
