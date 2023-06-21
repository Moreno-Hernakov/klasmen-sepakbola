<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        // return view('pages.backend.dashboard-overview-1');
        return view('pages.backend.dashboard');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function usersProfile()
    {
        $users = User::all();

        return view('pages.backend.profile.index', ['users' => $users]);
    }
}