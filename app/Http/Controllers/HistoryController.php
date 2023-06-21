<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history;
use App\Models\klasmen;
use App\Models\club;

class HistoryController extends Controller
{
    public function index()
    {
        $kls = klasmen::with('club')->get();
        // return $kls;
        return view('dashboard/areas.index', [
            'historys' =>  klasmen::with('club')->get()
        ]);

        // return view('pages.backend.history.index', [
        //     'historys' =>  history::get()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/areas.create', [
            "clubs" => club::get()
        ]);
        return view('pages.backend.history.create');
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
        $history = $request->validate([
            'score1' => 'required',
            'score2' => 'required',
            'club1' => 'required',
            'club2' => 'required',
        ]);

        history::create($history);

        $latest = history::latest()->first();
        $find_club1 = klasmen::find($request->club1);
        $find_club2 = klasmen::find($request->club2);

        // return $latest;
        $club = [];
        if($latest->score1 > $latest->score2 ){
            $club1 = "win";
        }elseif($latest->score1 == $latest->score2 ){
            $club1 = "seri";
        }else{
            $club1 = "lose";
        }

// club 1 win
if($club1 == "win"){
    
        $find_club1->club_id = $request->club1;
        $find_club1->point += 3;
        $find_club1->ma += 1;
        $find_club1->me += 1;
        $find_club1->s += 0;
        $find_club1->k += 0;
        $find_club1->gm += $request->score1;
        $find_club1->gk += $request->score2;
    

    
        $find_club2->club_id = $request->club2 ;
        $find_club2->point += 0;
        $find_club2->ma += 1;
        $find_club2->me += 0;
        $find_club2->s += 0;
        $find_club2->k += 1;
        $find_club2->gm += $request->score2;
        $find_club2->gk += $request->score1;
    
// club 1 seri
}elseif($club1 == "seri"){
    
        $find_club1->club_id = $request->club1 ;
        $find_club1->point += 1;
        $find_club1->ma += 1;
        $find_club1->me += 0;
        $find_club1->s += 1;
        $find_club1->k += 0;
        $find_club1->gm += 0;
        $find_club1->gk += 0;
    
        $find_club2->club_id = $request->club2 ;
        $find_club2->point += 1;
        $find_club2->ma += 1;
        $find_club2->me += 0;
        $find_club2->s += 1;
        $find_club2->k += 0;
        $find_club2->gm += 0;
        $find_club2->gk += 0;
    
// club 1 lose
}else{
    
        $find_club1->club_id = $request->club1 ;
        $find_club1->point += 0;
        $find_club1->ma += 1;
        $find_club1->me += 0;
        $find_club1->s += 0;
        $find_club1->k += 1;
        $find_club1->gm += $request->score1;
        $find_club1->gk += $request->score2;
    
        $find_club2->club_id = $request->club2 ;
        $find_club2->point += 3;
        $find_club2->ma += 1;
        $find_club2->me += 1;
        $find_club2->s += 0;
        $find_club2->k += 0;
        $find_club2->gm += $request->score2;
        $find_club2->gk += $request->score1;
    
}

        $find_club1->save();
        $find_club2->save();

        // // club 1 win
        // if($club1 == "win"){
        //     array_push($club, [
        //         "club" => $request->club1 ,
        //         "point" => 3,
        //         "ma" => 1,
        //         "me" => 1,
        //         "s" => 0,
        //         "k" => 0,
        //         "gm" => $request->score1,
        //         "gk" => $request->score2,
        //     ]);

        //     array_push($club, [
        //         "club" => $request->club2 ,
        //         "point" => 0,
        //         "ma" => 1,
        //         "me" => 0,
        //         "s" => 0,
        //         "k" => 1,
        //         "gm" => $request->score2,
        //         "gk" => $request->score1,
        //     ]);
        // // club 1 seri
        // }elseif($club1 == "seri"){
        //     array_push($club, [
        //         "club" => $request->club1 ,
        //         "point" => 1,
        //         "ma" => 1,
        //         "me" => 0,
        //         "s" => 1,
        //         "k" => 0,
        //         "gm" => 0,
        //         "gk" => 0,
        //     ]);

        //     array_push($club, [
        //         "club" => $request->club2 ,
        //         "point" => 1,
        //         "ma" => 1,
        //         "me" => 0,
        //         "s" => 1,
        //         "k" => 0,
        //         "gm" => 0,
        //         "gk" => 0,
        //     ]);
        // // club 1 lose
        // }else{
        //     array_push($club, [
        //         "club" => $request->club1 ,
        //         "point" => 0,
        //         "ma" => 1,
        //         "me" => 0,
        //         "s" => 0,
        //         "k" => 1,
        //         "gm" => $request->score1,
        //         "gk" => $request->score2,
        //     ]);

        //     array_push($club, [
        //         "club" => $request->club2 ,
        //         "point" => 3,
        //         "ma" => 1,
        //         "me" => 1,
        //         "s" => 0,
        //         "k" => 0,
        //         "gm" => $request->score2,
        //         "gk" => $request->score1,
        //     ]);
        // }

        return redirect(route('history.index'))->with('success', 'history berhasil ditambahkan');
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
        return view('dashboard/areas.index', [
            'history' => history::find($id)
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
        $history = $request->validate([
            'nama' => 'required|min:3',
            'kota' => 'required|min:3',
        ]);

        // return $validateData;
        history::find(\Crypt::decrypt($id))->update($history);
        return redirect(route('history.index'))->with('success', 'history berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(history $history)
    {
        $history->delete();
        return redirect(route('history.index'))->with('success', 'history berhasil Dihapus');
    }
}
