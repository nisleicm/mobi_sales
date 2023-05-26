<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\c000008;

class c000008Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $func = c000008::paginate(100);

        return response()->json($func);
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
        $clientes = c000008::create($request->all());
        return response()->json($clientes);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $codigo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /* return c000008::all();*/
         return c000008::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $codigo
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
        $Cliente = c000008::findOrFail($id);
        $Cliente->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $func = c000008::find(intval($id));
       if ($func) {
          $func->delete();
          return response()->json(null, 204);
       }
    }
}
