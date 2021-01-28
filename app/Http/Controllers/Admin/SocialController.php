<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Social;

class SocialController extends Controller
{
    /**
     * Display a listing of the ressocialce.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Social::get();
        return view('pages.admin.social.index', compact('items'));
    }

    /**
     * Show the form for creating a new ressocialce.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.social.create');
    }

    /**
     * Store a newly created ressocialce in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Social::create($data);
        return redirect()->route('social.index');
    }

    /**
     * Display the specified ressocialce.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified ressocialce.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Social::findOrFail($id);
        return view('pages.admin.social.edit', compact('items'));
    }

    /**
     * Update the specified ressocialce in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Social::findOrFail($id);
        $item->update($data);

        return redirect()->route('social.index');
    }

    /**
     * Remove the specified ressocialce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Social::findOrFail($id);
        $item->delete();
        return redirect()->route('social.index');
    }
}
