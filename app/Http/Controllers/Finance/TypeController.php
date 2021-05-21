<?php

namespace App\Http\Controllers\Finance;

use App\Costcentre;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $costcentres = Costcentre::with("user")
            ->get();

        $prmTypes = Type::orderBy('name')
            ->get();

        $result = compact('costcentres', 'prmTypes');
        Json::dump($result);

        return view('finance/parameter/index', $result);
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
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Type $type
     * @return Response
     */
    public function show(Type $type)
    {
        return redirect('finance/parameter');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Type $types
     * @return Response
     */
    public function edit(Type $types)
    {
        $result=compact('types');
        Json::dump('$result');
        return view('finance.parameter.edit',$result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Type $types
     * @return Response
     */
    public function update(Request $request, Type $types)
    {
        $this->validate($request,[
            'name' => 'required' ,
            'bedrag' => 'required',
        ]);
        $types->name = $request->name;
        $types->value = $request->bedrag;
        $types->save();
        session()->flash('success', 'The parameter has been updated');
        return redirect('finance/parameter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Type $type
     * @return Response
     */
    public function destroy(Type $type)
    {
        //
    }
}
