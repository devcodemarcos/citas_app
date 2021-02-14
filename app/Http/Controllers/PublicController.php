<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Carbon\CarbonPeriod;
use Carbon\Carbon;

use App\Models\Sede;
use App\Models\User;
use App\Models\Cita;

class PublicController extends Controller
{
    public function home() 
    {
        return view('home');
    }

    public function registro()
    {
        $sedes = Sede::all();
        return view('registro', compact('sedes'));
    }

    public function registroCita(Request $request)
    {
        list($date, $start_hour, $end_hour) = explode(',', $request->date);
        try{
            $user = new User;
            $user->names = $request->names;
            $user->surnames = $request->surnames;
            $user->email = $request->email;
            $user->save();

            $cita = Cita::where('sede_id', $request->sede)
            ->where('date', $date)
            ->where('start_hour', $start_hour)
            ->where('end_hour', $end_hour)
            ->whereNull('available')
            ->first();

            $cita->available = 1;
            $cita->user_id = $user->id;
            $cita->save();

            return redirect()->route('registro')->with('success', [
                $request->names, 
                'Cita registrada correctamente.'
            ]);
        }
        catch (QueryException $e){
            return redirect()->route('registro')->with('error', 'El correo <b>'.$request->email.'</b> ya fue utilizado para agendar una cita.');
        }
    }

    public function consultaCitasDisponibles(Request $request)
    {
        $sede_id = $request->sede_id;
        $available_dates = Cita::select(DB::raw("sede_id, start_hour, end_hour, date, COUNT(*) as available_dates"))
        ->where('sede_id', $sede_id)
        ->whereNull('available')
        ->groupBy('date')
        ->groupBy('start_hour')
        ->groupBy('end_hour')
        ->groupBy('sede_id')
        ->get();
        
        if($available_dates) {
            return response()->json([
                'status' => true,
                'available_dates' => $available_dates
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No quedan citas disponibles'
        ]);
    }
}
