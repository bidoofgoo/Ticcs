<?php

use Illuminate\Database\Seeder;

class VragenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->insertIntoDB([
          'id' => 1,
          'vraag' => 'Bent u afgelopen jaar door een teek gebeten?',
          'info_link' => 'https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/25/1498065944-black-legged-tick.jpg',
          'afbeelding_link' => 'https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/25/1498065944-black-legged-tick.jpg'
        ]);
        $this->insertIntoDB([
          'id' => 2,
          'vraag' => 'Heeft u deze kring op uw huid gevonden?',
          'info_link' => 'https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/25/1498065944-black-legged-tick.jpg',
          'afbeelding_link' => 'http://www.gezondheidenco.nl/wp-content/uploads/2013/07/tekenbeet.jpg'
        ]);
        $this->insertIntoDB([
          'id' => 3,
          'vraag' => 'Heeft u al eerder last gehad van lyme?',
          'info_link' => 'https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/25/1498065944-black-legged-tick.jpg',
          'afbeelding_link' => 'http://www.setyo.nl/wp-content/uploads/2015/08/42178401_l.jpg'
        ]);
    }

    public function insertIntoDB($data){
      DB::table('vragen')->insert($data);
    }
}
