<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;
use App\Models\notifikasi;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    
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
        //return Command::SUCCESS;
        //notifikasi untuk mentee
        // $id = 1;
        // $id_user=2;
        // $pemberitahuan1 = (array)biodata_mentee::find($id)->pemberitahuan;
        // $informasi1 = "Jadwal mentoring hari ini/Mentoring dengan".(biodata_mentor::find($id_user)->username)."pada pukul 09.00 WIB"."/Date: ".date("d-m-Y")." Time: ".date("h:i a")."/false";
        // array_push($pemberitahuan1, $informasi1);
        // DB::table('biodata_mentee')->where('id', $id)->update(['pemberitahuan'=>$pemberitahuan1]);
        // //notifikasi untuk mentor
        // $pemberitahuan2 = (array)biodata_mentor::find($id)->pemberitahuan;
        // $informasi2 = "Jadwal mentoring hari ini/Mentoring dengan".(biodata_mentee::find($id_user)->username)."pada pukul 09.00 WIB"."/Date: ".date("d-m-Y")." Time: ".date("h:i a")."/false";
        // array_push($pemberitahuan2, $informasi2);
        // DB::table('biodata_mentor')->where('id', $id)->update(['pemberitahuan'=>$pemberitahuan2]);

        // \Log::info("Cron job Berhasil di jalankan " . date('Y-m-d H:i:s'));
        //dd("berhasil g");
    }
}
