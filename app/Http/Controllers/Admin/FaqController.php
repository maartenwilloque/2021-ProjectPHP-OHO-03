<?php

namespace App\Http\Controllers\Admin;

use App\FaqTabel;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs=FaqTabel::OrderBy('UserRol')->OrderBy('vraag')->get();
        $result = compact('faqs');
        Json::dump($result);
        return view('admin.faq.index', $result);
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
     * @param  \App\FaqTabel  $faqTabel
     * @return \Illuminate\Http\Response
     */
    public function show(FaqTabel $faqTabel)
    {
        return redirect('admin.faq.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FaqTabel  $faqTabel
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqTabel $faqTabel)
    {
        $result=compact('faqTabel');
        Json::dump($result);

        return view('admin.faq.edit',$result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FaqTabel  $faqTabel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaqTabel $faqTabel)
    {
        $this->validate($request,[
            'name' => 'required|min:3|unique:genres,name,' . $genre->id
        ]);
        $genre->name = $request->name;
        $genre->save();
        session()->flash('success', 'The genre has been updated');
        return redirect('admin/genres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FaqTabel  $faqTabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqTabel $faqTabel)
    {
        //
    }
}
