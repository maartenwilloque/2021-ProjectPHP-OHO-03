<?php

namespace App\Http\Controllers\Finance;

use App\Costcentre;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\ParameterType;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $costcentres = Costcentre::with("user")
            ->get();

        $prmTypes = Type::orderBy('name')
            ->get();

        $parameters = ParameterType::orderBy('id')
            ->get();

        $result = compact('costcentres', 'parameters', 'prmTypes');


        Json::dump($result);
//
//        return view('finance.parameter.index', $result);
        return view('finance.parameter.index', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $prmTypes = Type::orderBy('name')->get();

        $parameter = new ParameterType();

        $result = compact('prmTypes', 'parameter');
        Json::dump($result);
        return view('finance/parameter/newprm', $result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ParameterType $parameters
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'parameter' => 'required',
            'value' => 'required',
            'fromdate' => 'required'

        ]);
        DB::table('parameter_Types')
            ->where('type_id', $request->parameter)
            ->where('to_date')
            ->update(['to_date' => $request->fromdate]);

        $parameter = new ParameterType();
        $parameter->type_id = $request->parameter;
        $parameter->value = $request->value;
        $parameter->from_date = $request->fromdate;
        if ($request->get('active')) {
            $parameter->active = 1;
        } else {
            $parameter->active = 0;
        }
        $parameter->save();
        session()->flash('success', "The parameter has been added");
        return redirect('finance/parameter/');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\ParameterType $parameter
     * @return \Illuminate\Http\Response
     */
    public function show(ParameterType $parameter)
    {
        return redirect('finance/parameter');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ParameterType $parameters
     * @return \Illuminate\Http\Response
     */
    public function edit(ParameterType $parameters)
    {
        $result = compact('parameters');
        Json::dump($result);
        return view('finance.parameter.editprm', $result);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ParameterType $parameter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParameterType $parameter)
    {
        $this->validate($request, [
            'id' => 'required,' . $parameter->id
        ]);
        if ($request->get('active')) {
            $parameter->active = 1;
            $parameter->to_date = null;
        } else {
            $parameter->active = 0;
            $parameter->to_date = now();
        }

        $parameter->save();
        session()->flash('success', 'The parameter has been updated');
        return redirect('finance/parameter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ParameterType $parameter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParameterType $parameter)
    {
        //
    }
}
