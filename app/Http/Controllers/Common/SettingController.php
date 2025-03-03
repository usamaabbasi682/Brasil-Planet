<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() 
    {
        return view('common.settings.index');
    }

    public function updatePassword() 
    {
        return view('common.settings.update-password');
    }

    public function staffMembers() 
    {
        return view('common.settings.staff-member');
    }
}
