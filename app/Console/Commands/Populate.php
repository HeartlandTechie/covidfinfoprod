<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DateTime; 
use DatePeriod; 

class Populate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nkcsd:populate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate times';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


      $schedule = [
            'start' => '2020-3-17 07:00:00',
            'end' => '2020-3-17 16:00:00',
        ];

        $start = Carbon::instance(new DateTime($schedule['start']));
        $end = Carbon::instance(new DateTime($schedule['end']));

        $events = [
            [
                'created_at' => '2020-03-17 09:00:00',
                'updated_at' => '2020-03-17 09:20:00',
            ],
            [
                'created_at' => '2020-03-17 12:00:00',
                'updated_at' => '2020-03-17 12:30:00',
            ],
            [
                'created_at' => '2020-03-17 14:00:00',
                'updated_at' => '2020-03-17 14:20:00',
            ],
        ];

        $minSlotHours = 0;
        $minSlotMinutes = 10;
        $minInterval = CarbonInterval::hour($minSlotHours)->minutes($minSlotMinutes);

        $reqSlotHours = 0;
        $reqSlotMinutes = 10;
        $reqInterval = CarbonInterval::hour($reqSlotHours)->minutes($reqSlotMinutes);

        function slotAvailable($from, $to, $events){
            foreach($events as $event){
                $eventStart = Carbon::instance(new DateTime($event['created_at']));
                $eventEnd = Carbon::instance(new DateTime($event['updated_at']));
                if($from->between($eventStart, $eventEnd) && $to->between($eventStart, $eventEnd)){
                    return false;
                }
            }
            return true;
        }

        foreach(new DatePeriod($start, $minInterval, $end) as $slot){
            $to = $slot->copy()->add($reqInterval);

            echo $slot->toDateTimeString() . ' to ' . $to->toDateTimeString();

            if(slotAvailable($slot, $to, $events)){
                echo ' is available';
            }

            $this->newLine();
        }
        
        return 0;
    }
}
