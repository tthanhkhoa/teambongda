<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhSachCauThu;

class DanhSachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'HoTen' => 'required|max:255',
                'SoDienThoai' => 'required',
                'VoteTime' => 'required',
            ]);
            $add = new DanhSachCauThu();
            $add->HoTen = $request->HoTen;
            $add->SoDienThoai = $request->SoDienThoai;
            $add->VoteTime = $request->VoteTime;
            $add->save();
            return redirect()->route('home');
        }
        $danhsach = DanhSachCauThu::where('status', 1)->all();
        return view('welcome', compact('danhsach'));
    }

    public function indexDaboash()
    {
        $danhsach = DanhSachCauThu::paginate(3);;
        return view('daboash', compact('danhsach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
