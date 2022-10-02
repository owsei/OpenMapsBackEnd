<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OpenMaps;


class OpenMapsController extends Controller
{
    
    public function getLines(Request $request)
    {
        $model = new OpenMaps();
        $lineas = $model->getOpenMapsLines();
        
        
        return $lineas;
    }

    public function setOpenMapsPoints()
    {
        $latitude = $_GET['latitud'];
        $longitud = $_GET['longitud'];
        echo "latitude:".$latitude;
        echo "longitude:".$latitude;
        $model= new OpenMaps();
        return $model->setOpenMapsPoints();
    }

    public function getOpenMapsPoints()
    {
        return 'Hola, ya llego a getOpenMapsPoints';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Hola, ya llego';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
