<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\club;
use App\Models\klasmen;


class ClubController extends Controller
{
    public function index()
    {
        return view('dashboard/region.index', [
            'clubs' =>  club::get()
        ]);
        // return view('pages.backend.club.index', [
        //     'clubs' =>  club::get()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/region.create');
        // return view('pages.backend.club.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $club = $request->validate([
            'nama' => 'required|min:3|unique:clubs',
            'kota' => 'required|min:3',
        ]);

        club::create($club);

        $lastclub = club::latest()->first();


        $klasmendata = [
            'club_id' => $lastclub->id
        ];

        klasmen::create($klasmendata);

        return redirect(route('club.index'))->with('success', 'club berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard/region.edit', [
            'club' => club::find($id)
        ]);
        return view('pages.backend.club.edit', [
            'club' => club::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $club = $request->validate([
            'nama' => 'required|min:3',
            'kota' => 'required|min:3',
        ]);

        // return $validateData;
        club::find($id)->update($club);
        return redirect(route('club.index'))->with('success', 'club berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(club $club)
    {
        $club->delete();
        return redirect(route('club.index'))->with('success', 'club berhasil Dihapus');
    }
}
