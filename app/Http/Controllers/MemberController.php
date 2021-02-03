<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $members = Member::get();

        // dd($members);
        return view('members.index', [
            'members' => $members,
        ]);


    }

    public function add()
    {
        return view('members.add');
    }
}
