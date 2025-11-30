<?php

namespace App\Http\Controllers;

use App\Models\GeneralQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomepageController extends Controller
{
    public function index()
    {
        $herosection = DB::table("hero_section")->where("_status", 1)->get();
        $specialdishsection = DB::table("sections")->where("_status", 1)->where("_menuid", 8)->where("_sort", 1)->first();
        $specialdishcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 8)->where("_sectionid", 4)->get();
        $allreviews = DB::table("reviews")->where("_status", 1)->get();
        $allfaqs = DB::table("faqs")->where("_status", 1)->get();
        $allgalleryimage = DB::table("images")->orderBy('created_at', 'desc')->get();
        $aboutsection = DB::table("sections")->where("_status", 1)->where("_menuid", 2)->where("_sort", 1)->first();
        $aboutcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 2)->where("_sectionid", 1)->get();
        $mainoffer = DB::table("sections")->where("_status", 1)->where("_menuid", 7)->where("_sort", 1)->first();
        $offers = DB::table("components")->where("_status", 1)->where("_menuid", 9)->where("_sectionid", 5)->get();
        $teamsection = DB::table("sections")->where("_status", 1)->where("_menuid", 12)->where("_sort", 1)->get();
        $teamcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 12)->where("_sectionid", 8)->get();

        return view('index', compact(
            'allreviews',
            'allfaqs',
            'allgalleryimage',
            'aboutsection',
            'aboutcomponent',
            'herosection',
            'specialdishsection',
            'specialdishcomponent',
            'mainoffer',
            'offers',
            'teamsection',
            'teamcomponent'
        ));
    }

    public function aboutus()
    {
        $allfaqs = DB::table("faqs")->where("_status", 1)->get();
        $allreviews = DB::table("reviews")->where("_status", 1)->get();
        $aboutsection = DB::table("sections")->where("_status", 1)->where("_menuid", 2)->where("_sort", 1)->first();
        $aboutcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 2)->where("_sectionid", 1)->get();
        $mainoffer = DB::table("sections")->where("_status", 1)->where("_menuid", 7)->where("_sort", 1)->first();
        $videocomponent = DB::table('components')->where("_status", 1)->where("_menuid", 10)->where("_sectionid", 6)->first();
        $chefsection = DB::table("sections")->where("_status", 1)->where("_menuid", 12)->where("_sort", 1)->get();
        $chefcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 12)->where("_sectionid", 8)->get();
        $managementsection = DB::table("sections")->where("_status", 1)->where("_menuid", 12)->where("_sort", 2)->get();
        $managementcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 12)->where("_sectionid", 9)->get();

        return view('components.aboutus', compact(
            'allfaqs',
            'allreviews',
            'aboutsection',
            'aboutcomponent',
            'mainoffer',
            'videocomponent',
            'chefsection',
            'chefcomponent',
            'managementsection',
            'managementcomponent'
        ));
    }

    public function faq()
    {
        $allfaqs = DB::table("faqs")->where("_status", 1)->get();

        return view('components.faq', compact('allfaqs'));
    }

    public function gallery()
    {
        $allgalleryimage = DB::table("images")->orderBy('created_at', 'desc')->get();

        return view('components.gallery', compact('allgalleryimage'));
    }

    public function login()
    {
        return view('components.login');
    }

    public function register()
    {
        return view('components.registration');
    }

    public function checkout()
    {
        return view('components.checkout');
    }

    public function contact()
    {
        return view('components.contact');
    }

    public function messagesubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'phone' => ['required', 'string', 'max:14'],
            'message' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => 'Please fill out all the necessary fields.']);
        }

        GeneralQuery::create([
            '_name' => $request->name,
            '_email' => $request->email,
            '_phone' => $request->phone,
            '_subject' => $request->subject,
            '_message' => $request->message,
        ]);

        return redirect()->back()->with(['success' => 'Query message submitted successfully. We will contact you soon.']);
    }
}
