<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $members = Member::latest()->get();

        // dd($members);
        return view('members.index', [
            'members' => $members,
        ]);


    }

    public function add()
    {
        $countries = DB::table('refcitymun')->pluck("citymunDesc","citymunCode");
        // return view('dropdown',compact('countries'));
        return view('members.add', compact('countries'));
    }

    public function getStates($id)
    {
        $states = DB::table("refbrgy")->where("citymunCode", $id)->pluck("brgyDesc","id");
        return json_encode($states);
    }
}
