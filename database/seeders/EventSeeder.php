<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  Schema::create('events', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('poster');
    //     $table->string('eventname');
    //     $table->string('description');
    //     $table->date('startdate');
    //     $table->date('enddate');
    //     $table->integer('singleprice');
    //     $table->integer('alldayprice');
    //     $table->timestamps();
    // });

    public function run()
    {
        //product 1
        event::create([
            'poster'=>'image/pestapora.jpg',
            'eventname'=>'Pestapora',
            'description'=>'Music Celebration at its Best! Coming Soon',
            'startdate'=>'2023-09-22',
            'enddate'=>'2023-09-24',
            'singleprice'=>'300000',
            'alldayprice'=>'900000'
        ]);

        //product 2
        event::create([
            'poster'=>'image/synchronize.jpg',
            'eventname'=>'Synchronize Festival',
            'description'=>'Bhineka Tunggal Musik',
            'startdate'=>'2023-09-01',
            'enddate'=>'2023-09-03',
            'singleprice'=>'225000',
            'alldayprice'=>'675000'
        ]);

        //product 3
        event::create([
            'poster'=>'image/parade.jpg',
            'eventname'=>'Parade Sihir',
            'description'=>' PARADE SIHIR: Tur Perdana Lomba Sihir!',
            'startdate'=>'2023-06-10',
            'enddate'=>'2023-06-10',
            'singleprice'=>'175000',
            'alldayprice'=>'175000'
        ]);

        //product 4
        event::create([
            'poster'=>'image/wtf.jpg',
            'eventname'=>'We The Fest',
            'description'=>'A summer festival of music, arts, fashion, and food',
            'startdate'=>'2023-07-21',
            'enddate'=>'2023-07-23',
            'singleprice'=>'450000',
            'alldayprice'=>'1350000'
        ]);
    }
}
