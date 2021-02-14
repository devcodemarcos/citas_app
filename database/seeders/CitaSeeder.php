<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\CarbonPeriod;
use Carbon\Carbon;

use App\Models\Sede;
use App\Models\Cita;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sedes = Sede::all();
        $period = CarbonPeriod::create('2021-03-01', '2021-03-14');
        $dates = array();
        $date_duration = 20; //minutos
        $citas = array();

        foreach ($period as $date) {
            $start  = new Carbon($date->format('Y-m-d') . ' 09:00:00');
            $end  = new Carbon($date->format('Y-m-d') . ' 17:00:00');
            $dates[$date->format('Y-m-d')] = $this->generateDateRange($start, $end, $date_duration);
        }
        
        foreach ($sedes as $sede) {
            foreach ($dates as $index => $date) {
                for ($employees=1; $employees <= 15; $employees++) {
                    $count = count($date);
                    for ($i=0, $j=1; $i < $count; $i++, $j++) {
                        $citas[] = [
                            'date' => $index,
                            'start_hour' => $date[$i],
                            'end_hour' => $date[$j],
                            'sede_id' => $sede->id,
                            'created_at' => Carbon::now()
                        ];
                        if(end($date) == $date[$j]) {
                            break;
                        }
                    }
                }
            }
        }

        foreach (array_chunk($citas, 1000) as $cita)  {
            Cita::insert($cita);
        }
    }

    private function generateDateRange(Carbon $start_date, Carbon $end_date, $slot_duration = 5)
    {
        $dates = array();
        $slots = $start_date->diffInMinutes($end_date) / $slot_duration;
        $dates[] = $start_date->toTimeString();

        for($i=1; $i<=$slots; $i++) {
            $dates[] = $start_date->addMinute($slot_duration)->toTimeString();
        }

        return $dates;
    }
}
