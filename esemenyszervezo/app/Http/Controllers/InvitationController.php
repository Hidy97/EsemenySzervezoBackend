<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    //

    public function index(){
        return Invitation::all();
    }

    public function show($id){
        return Invitation::find($id);
    }

    public function store(Request $request){
        $invitation = new Invitation();
        $invitation->appeared = $request->appeared;
    }
}
