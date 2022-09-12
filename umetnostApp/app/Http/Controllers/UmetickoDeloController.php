<?php

namespace App\Http\Controllers;

use App\Http\Resources\UmetnickoDeloResource;
use App\Models\UmetnickoDelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UmetickoDeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UmetnickoDeloResource::collection(UmetnickoDelo::all());
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:50',
            'godina' => 'required|integer',
            'cena' => 'required|integer', 
            'autor_id' => 'required',
            'vrsta_id' => 'required', 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = UmetnickoDelo::create([
            'naziv' => $request->naziv, 
            'godina' => $request->godina, 
            'cena' => $request->cena,
            'autor_id' => $request->autor_id, 
            'vrsta_id' => $request->vrsta_id, 


        ]);
        $d->save();
        return response()->json(['Objekat je  kreiran', new UmetnickoDeloResource($d)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UmetnickoDelo  $umetnickoDelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new UmetnickoDeloResource(UmetnickoDelo::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UmetnickoDelo  $umetnickoDelo
     * @return \Illuminate\Http\Response
     */
    public function edit(UmetnickoDelo $umetnickoDelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UmetnickoDelo  $umetnickoDelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'string|max:50',
            'godina' => 'integer',
            'cena' => 'integer', 
            'autor_id' => '',
            'vrsta_id' => '', 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = UmetnickoDelo::find($id);
        if($d){
            $d->naziv=$request->naziv;
            $d->godina=$request->godina;
            $d->cena=$request->cena;
            $d->autor_id=$request->autor_id;
            $d->vrsta_id=$request->vrsta_id;

            $d->save();
            return response()->json( ["Uspesno izmenjeno!",new UmetnickoDeloResource($d)]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UmetnickoDelo  $umetnickoDelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = UmetnickoDelo::find($id);
        if($d){
            $d->delete();
            return response()->json("Objekat uspesno obrisan");
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }
}
