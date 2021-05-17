<?php

namespace App\Http\Controllers\Finance;

use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\Parameter;
use App\Parameter_type;
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
        $prmTypes = Type::orderBy('name')
            ->get();
        $parameters = Parameter_type::orderBy('id')
            ->get();
        $result = compact('parameters', 'prmTypes');
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

        $prmTypes = Type::orderBy('name')->get();

        $parameter = new Parameter_type();

        $result = compact('prmTypes', 'parameter');
        Json::dump($result);
        return view('finance/parameter/newprm', $result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Parameter_type $parameters
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'parameter' => 'required',
            'value' => 'required',
        ]);
//        $parameter = Parameter_type::all();
//        foreach ($parameter as $p) {
//            if ($p->type_id != 1) {
//
//            }
//            else{
//                $parameter->active = 0;
//                $parameter->to_date=now();
//                $parameter->();
//            }
        DB::table('parameter_types')
            ->where('type_id', $request->parameter)
            ->update(['active' => 0]);




        $parameter = new Parameter_type();
        $parameter->type_id = $request->parameter;
        $parameter->value = $request->value;
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
     * @param \App\Parameter $parameter
     * @return \Illuminate\Http\Response
     */
    public function show(Parameter $parameter)
    {
        return redirect('finance/parameter');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Parameter_type $parameters
     * @return \Illuminate\Http\Response
     */
    public function edit(Parameter_type $parameter)
    {
        $result = compact('parameter');
        Json::dump($result);
        return view('finance.parameter.editprm', $result);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Parameter $parameter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parameter_type $parameter)
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
     * @param \App\Parameter $parameter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parameter $parameter)
    {
        //
    }
}
