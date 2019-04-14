<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('theme/home');
    }
     public function security()
    {
        return view('theme/security');
    }
	public function buy()
    {
        return view('theme/buy-sell');
    }
	public function swap()
    {
        return view('theme/swap');
    }
	public function send()
    {
        return view('theme/trnbtc');
    }
    public function steller()
    {
        return view('theme/steller');
    }
    public function eth()
    {
        return view('theme/trneth');
    }
    public function btc()
    {
        return view('theme/cash');
    }
	public function hardware()
    {
        return view('theme/hardware');
    }
	public function setting()
    {
        return view('theme/setting');
    }
}
