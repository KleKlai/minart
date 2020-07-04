<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Api\Artist;

class ArtistController extends Controller
{
    //TOOD: Make sign up function
    public function signUp(Request $request) {

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

    //TODO: make show all signup users function
    public function artist() {
        $data = artist::all();

        $response = [
            'success'   =>  true,
            'user'      =>  $data,
            'message'   =>  'All artist list fetch successfully.',
        ];

        return response($response, 200);
    }

    //TODO: display specific user
    public function show($id) {

        $data = artist::findOrFail($id);

        $response = [
            'success'   =>  true,
            'user'      =>  $data,
            'message'   =>  'Artist fetch successfully.',
        ];

        return response($response, 200);
    }

    //TODO: delete user
    //NOT FUNCTIONAL YET
    public function destroy(Artist $artist) {

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
