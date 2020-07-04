<?php

namespace App\Http\Controllers\Api\v1;

use App\Api\Artist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = artist::all();

        $response = [
            'success'   =>  true,
            'user'      =>  $data,
            'message'   =>  'All artist list fetch successfully.',
        ];

        return response($response, 200);
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
        $data = $request->validate([
            'name'          => 'required|string',
            'email'         => 'required|unique:artists|email',
            'gender'        => 'required|in:male,female',
            'birthday'      => 'required|string',
            'profession'    => 'required|string',
        ]);

        $user = Artist::create($data);

        $response = [
            'success'   =>  true,
            'user'      =>  $user,
            'message'   =>  'Added Successfully',
        ];

        return response($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Api\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show($artist)
    {
        $data = artist::findOrFail($artist);

        $response = [
            'success'   =>  true,
            'user'      =>  $data,
            'message'   =>  'Artist fetch successfully.',
        ];

        return response($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Api\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Api\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Api\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        $data = $artist->toArray();

        $response = [
            'success'   =>  true,
            'data'      =>  $data,
            'message'   =>  'Artist deleted successfully.',
        ];

        return response($response, 200);
    }
}
