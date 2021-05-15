<?php

namespace App\Http\Controllers\Finance;

use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\Parameter_type;
use App\Type;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $prmTypes = Type::orderBy('name')
            ->get();
        $parametersTypes = Parameter_type::orderBy('id')
            ->get();
        $result = compact('parametersTypes', 'prmTypes');
        Json::dump($result);
        return view('finance.parameter.index', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Parameter_type $parameterstypes
     * @return \Illuminate\Http\Response
     */
    public function edit(Parameter_type $parametersTypes)
    {
        $prmTypes = Type::orderBy('name')
            ->get();
        $parametersTypes = Parameter_type::orderBy('id')
            ->get();
        $result = compact('parametersTypes', 'prmTypes');
        Json::dump($result);
        return view('finance.parameter.edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
