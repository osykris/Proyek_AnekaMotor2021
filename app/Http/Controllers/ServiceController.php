<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Alert;
use App\Models\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('booking');
    }

    public function save(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $booking = Service::where('user_id', $user->id)->first();

        $booking = new Service();
        $booking->user_id = $user->id;
        $booking->name_stnk = $request->name_stnk;
        $booking->number_plat = $request->number_plat;
        $booking->nama_motor = $request->nama_motor;
        $booking->jenis_motor = $request->jenis_motor;
        $booking->service_date = $request->service_date;
        $booking->complaint = $request->complaint;
        $booking->save();
        alert()->success('Thank you for booking');
        return redirect('history');
    }
}