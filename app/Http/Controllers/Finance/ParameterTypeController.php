<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Type;
use Facades\App\Helpers\Json;
use Illuminate\Http\Request;

class ParameterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Type $parameterType
     * @return \Illuminate\Http\Response
     */
    public function show(Type $parameterType)
    {
        return redirect('finance/parameter/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Type $parameterType
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $parameterType)
    {

        $result = compact('parameterType');
        Json::dump($result);
        return view('finance/parameter/editprm', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Type $parameterType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $parameterType)
    {
        $this->validate($request, [
            'name' => 'required|min:3,' . $parameterType->id
        ]);
        $parameterType->name = $request->name;
        $parameterType->save();
        session()->flash('success', 'Het type is geupdate');
        return redirect('finance/parameter/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Type $parameterType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $parameterType)
    {
        //
    }
}
