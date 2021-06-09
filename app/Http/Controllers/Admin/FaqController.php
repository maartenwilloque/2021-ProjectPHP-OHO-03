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
        $faqs = FaqTabel::OrderBy('UserRol')->OrderBy('vraag')->get();
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq = new FaqTabel();
        $faq->userRol = $request->userRol;
        $faq->vraag = $request->vraag;
        $faq->antwoord = $request->antwoord;
        $faq->save();

        return redirect('admin/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\FaqTabel $faqTabel
     * @return \Illuminate\Http\Response
     */
    public function show(FaqTabel $faqTabel)
    {
        return redirect('admin/faq');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\FaqTabel $faqTabel
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqTabel $faq)
    {
//        $faqs = FaqTabel::findOrFail($id);
        $result = compact('faq');
        Json::dump($result);
        return view('admin/faq/edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\FaqTabel $faqTabel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaqTabel $faq)
    {
        $this->validate($request, [
            'vraag' => 'required'
        ]);
        $faq->userRol = $request->userRol;
        $faq->vraag = $request->vraag;
        $faq->antwoord = $request->antwoord;
        $faq->save();
        session()->flash('success', 'Q&A is geupdate');
        return redirect('admin/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\FaqTabel $faqTabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqTabel $faqs)
    {
        $faqs->delete();
        session()->flash('success', 'Faq verwijderd');
        return redirect('admin/faq');


    }
}
