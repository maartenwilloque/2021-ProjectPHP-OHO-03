<?php

namespace App\Http\Controllers\Admin;

use App\FaqTabel;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
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
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
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
     * @return Application|RedirectResponse|Redirector
     */
    public function show(FaqTabel $faqTabel)
    {
        return redirect('admin/faq');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\FaqTabel $faqTabel
     * @return Application|Factory|View
     */
    public function edit(FaqTabel $faq)
    {
//        $faqs = FaqTabel::findOrFail($id);
        $result = compact('faq');
        Json::dump($result);
        return view('admin.faq.edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\FaqTabel $faqTabel
     * @return Application|RedirectResponse|Redirector
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
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($id)
    {
        $faq=FaqTabel::findOrFail($id);
        $faq->delete();
        session()->flash('success', 'Faq verwijderd');
        return redirect('admin/faq');
    }
}
