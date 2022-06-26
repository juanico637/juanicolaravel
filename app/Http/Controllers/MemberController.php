<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class MemberController extends Controller 
{
    public function edit()
    {
        return view('edit');
    }

    public function editmember($mem_id){
        $data = User::findOrFail($mem_id);
        return view('edit', compact('data'));
    }
    
    public function add(){
        return view('add');
    }
}