<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function index()
{
    $teamMembers = TeamMember::all();
    return view('pages.team', compact('teamMembers'));
}

}
