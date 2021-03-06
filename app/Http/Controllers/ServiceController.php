<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
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
        return view('booking', [
            'categories' => Category::all()
        ]);
    }

    public function save(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $service = Service::where('user_id', $user->id)->first();
        $service= new Service();
        $service->user_id = $user->id;
        $service->name_stnk = $request->name_stnk;
        $service->number_plat = $request->number_plat;
        $service->nama_motor = $request->nama_motor;
        $service->jenis_motor = $request->jenis_motor;
        $service->service_date = $request->service_date;
        $service->complaint = $request->complaint;
        $service->save();
        alert()->success('Thank you for booking');
        return redirect('history');
    }
}
