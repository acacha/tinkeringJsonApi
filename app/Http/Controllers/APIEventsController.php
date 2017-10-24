<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

/**
 * Class APIEventsController.
 * 
 * @package App\Http\Controllers
 */
class APIEventsController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return Event::all();
    }
}
