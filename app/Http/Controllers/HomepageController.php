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

    public function ourmenu()
    {
        $specialdishsection = DB::table("sections")->where("_status", 1)->where("_menuid", 8)->where("_sort", 1)->first();
        $specialdishcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 8)->where("_sectionid", 4)->get();

        $appetizersection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 1)->get();
        $appetizercomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 7)->get();

        $dinnersection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 2)->get();
        $dinnercomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 12)->get();

        $bakerysection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 3)->get();
        $bakerycomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 13)->get();

        $dessertsection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 4)->get();
        $dessertcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 14)->get();

        $coffeesection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 5)->get();
        $coffeecomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 16)->get();

        $maincoursesection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 6)->get();
        $maincoursecomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 10)->get();

        $fishsection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 7)->get();
        $fishcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 17)->get();

        $grillsection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 8)->get();
        $grillcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 18)->get();

        $specialsection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 9)->get();
        $specialcomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 19)->get();

        $beveragesection = DB::table("sections")->where("_status", 1)->where("_menuid", 3)->where("_sort", 10)->get();
        $beveragecomponent = DB::table("components")->where("_status", 1)->where("_menuid", 3)->where("_sectionid", 11)->get();

        return view('components.ourmenu', compact(
            'specialdishsection',
            'specialdishcomponent',
            'appetizersection',
            'appetizercomponent',
            'dinnersection',
            'dinnercomponent',
            'bakerysection',
            'bakerycomponent',
            'dessertsection',
            'dessertcomponent',
            'coffeesection',
            'coffeecomponent',
            'maincoursesection',
            'maincoursecomponent',
            'fishsection',
            'fishcomponent',
            'grillsection',
            'grillcomponent',
            'specialsection',
            'specialcomponent',
            'beveragesection',
            'beveragecomponent'
        ));
    }

    public function itemdetails($id)
    {
        $itemdetails = DB::table("components")->where("_status", 1)->where("id", $id)->first();

        return view('components.itemdetails', compact('itemdetails'));
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

    public function cart()
    {
        return view('components.cart');
    }

    public function checkout()
    {
        return view('components.checkout');
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
