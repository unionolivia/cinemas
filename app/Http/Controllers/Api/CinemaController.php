<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\CreateCinema;
use App\Services\ListCinema;
use App\Services\ShowCinema;
use App\Services\UpdateCinema;
use App\Services\DeleteCinema;
use App\Http\Controllers\Controller;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ListCinema $action)
    {
        return $action->execute();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CreateCinema $action)
    {
        return $action->execute(request(['name', 'address']));        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ShowCinema $action)
    {
        return $action->execute($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, UpdateCinema $action)
    {
        return $action->execute($id, request(['name', 'address'])); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, DeleteCinema $action)
    {
        return $action->execute($id);
    }
}
