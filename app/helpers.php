<?php

use Illuminate\Support\Facades\DB;

if (! function_exists('companyprofile')) {
    function companyprofile()
    {
        $companyprofile = DB::table("companyprofiles")->first();

        return $companyprofile;
    }
}

if (! function_exists('sociallinkinfo')) {
    function sociallinkinfo()
    {
        $sociallinkinfo = DB::table("sociallinks")->get();

        return $sociallinkinfo;
    }
}

if (! function_exists('mainmenu')) {
    function mainmenu()
    {
        $mainmenu = DB::table("menus")->where("_parentmenuid", 0)->where("_status", 1)->orderBy("_sort", "ASC")->get();

        return $mainmenu;
    }
}
