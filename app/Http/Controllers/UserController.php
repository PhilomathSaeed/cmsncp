<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Menu;
use DB;
use App\Country;
use App\Categorie;
use App\Content;

class UserController extends Controller
{
    
    public function __construct()
    {
       //$this->middleware('auth:member');
    }

    public function index()
    {
        $todayOffers  = DB::table('offers')->orderBy('id', 'ASC')->limit(5)->get();
        $blogs   = DB::table('blogs')->orderBy('id', 'DESC')->limit(5)->get();
        $topOffers  = DB::table('offers')->orderBy('title', 'ASC')->limit(5)->get();
        $highestOffers  = DB::table('offers')->orderBy('points', 'DESC')->limit(5)->get();

        return view('frontend.user.dashboard', compact('todayOffers', 'blogs', 'topOffers', 'highestOffers'));
    }

    public function browse()
    {
        $countries = Country::all(['country_id', 'name']);
        $categories = Categorie::all(['id', 'cat_name']);
        $topOffers  = DB::table('offers')->get();
        //dd($topOffers);
        return view('frontend.user.browse_offer', compact('countries', 'categories', 'topOffers'));
    }

    public function offer_filtering(Request $req)
    {
        $country  = $req['country'];
        $category = $req['category'];
        $date = $req['date'];

        $topOffers  = DB::table('offers')->where('allowed_country', $country)->get();
               
        return view('frontend.user.offer_filtering_data', compact('topOffers'));
    }

    public function allOffers()
    {
       
        $all_offer  = DB::table('offers')
                            ->where('published', 1)
                            ->orderBy('date', 'desc')->get();
    
        //dd($topOffers);
        return view('frontend.user.all_offer', compact('all_offer'));
    }


    public function allOffer_filtering(Request $req)
    {
        $fdate = $req['fdate'];
        $tdate = $req['tdate'];
        //echo $fdate;
        //echo $tdate;
        $allOffers  = DB::table('offers')->whereBetween('date', [$fdate,$tdate])->get();
               
        return view('frontend.user.all_offer_filtering_data', compact('allOffers'));
    }

    public function todayOffers()
    {
       
        $today_offer  = DB::table('offers')
                            ->where('date', date('Y-m-d'))
                            ->orderBy('date', 'desc')->get();

        //dd($topOffers);
        return view('frontend.user.today_offer', compact('today_offer'));
    }

    ////////////////////////// Reports ////////////////////////////////

    public function report(Request $req)
    {
        $fdate = $req['fdate'];
        $tdate = $req['tdate'];
        //echo $fdate;
        //echo $tdate;
        $allData  = DB::table('offers')->whereBetween('date', [$fdate,$tdate])->get();
               
         return view('frontend.user.report', compact('allData'));
    }

    ////////////////////////// counter shop ////////////////////////////////

    public function countershop(Request $req)
    {
        //$fdate = $req['fdate'];
        //$tdate = $req['tdate'];
        //echo $fdate;
        //echo $tdate;
        //$allData  = DB::table('offers')->whereBetween('date', [$fdate,$tdate])->get();
               
        return view('frontend.user.countershop');
    }

    ////////////////////////// counter shop ////////////////////////////////

    public function profile(Request $req)
    {
        //$fdate = $req['fdate'];
        //$tdate = $req['tdate'];
        //echo $fdate;
        //echo $tdate;
        //$allData  = DB::table('offers')->whereBetween('date', [$fdate,$tdate])->get();
               
        return view('frontend.user.profile');
    }

    public function paymentinfo(Request $req)
    {
        //$fdate = $req['fdate'];
        //$tdate = $req['tdate'];
        //echo $fdate;
        //echo $tdate;
        //$allData  = DB::table('offers')->whereBetween('date', [$fdate,$tdate])->get();
               
        return view('frontend.user.paymentinfo');
    }

    public function proaccount(Request $req)
    {
        //$fdate = $req['fdate'];
        //$tdate = $req['tdate'];
        //echo $fdate;
        //echo $tdate;
        //$allData  = DB::table('offers')->whereBetween('date', [$fdate,$tdate])->get();
               
        return view('frontend.user.proaccount');
    }

    ////////////////////////// counter shop ////////////////////////////////

    public function referral(Request $req)
    {
        //$fdate = $req['fdate'];
        //$tdate = $req['tdate'];
        //echo $fdate;
        //echo $tdate;
        //$allData  = DB::table('offers')->whereBetween('date', [$fdate,$tdate])->get();
               
        return view('frontend.user.referral');
    }
    

    ////////////////////////// Login ////////////////////////////////
    public function showLoginForm()
    {
        $menus = Menu::all();
         $aboutcont = Content::where(['menu_id' => '5'])->first();
        return view('frontend.user.login', compact('menus', 'aboutcont'));
    }
    public function login(Request $request)
    {
        // validate the form data
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        // Attemp to log user in-
        if (Auth::guard('member')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {
            return redirect(route('user.dashboard'));
            //return "Successfully login";
        }
       // return "Failed to login";
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function logout(Request $request)
    {
        //$this->guard()->logout();

        $request->session()->invalidate();
        return redirect('/user');
    }
}
