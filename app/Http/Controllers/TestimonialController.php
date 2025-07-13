<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
public function index()
{
    $testimonials = Testimonial::latest()->get();
    $teamMembers =TeamMember::latest()->get();
    $services =Service::latest()->get();
    return view('home', compact('testimonials','teamMembers', 'services'));
}
}
