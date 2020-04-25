<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create/admin/profile/create');
    }
    
    public function create()
    {
        \Log::debug(__LINE__.' '.__FILE__);
        return view('admin.profile.create');
    }
    
    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
