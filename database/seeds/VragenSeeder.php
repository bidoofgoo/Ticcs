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
      // Hoofdvragen
      $this->makeVraag('Bent u afgelopen jaar door een teek gebeten?',
      'https://nl.wikipedia.org/wiki/Teken_(dieren)', 'teek.jpg');
      $this->makeVraag('Heeft u deze kring op uw huid gevonden?',
      'https://www.huidhuis.nl/huidaandoening/erythema-migrans',
      'beet.jpg');
      $this->makeVraag('Heeft u al eerder last gehad van lyme?',
      'https://nl.wikipedia.org/wiki/Lymeziekte',
      'lyme.jpg');

      // Vragenkaartjes
      $this->makeVraag('Haaruitval',
      'https://www.haarstichting.nl/haaruitval-door-haarziekten',
      'haar.png');
      $this->makeVraag('Koorts',
      'https://www.thuisarts.nl/koorts',
      'koorts.png');
      $this->makeVraag('Koude rillingen',
      'https://nl.wikipedia.org/wiki/Koude_rilling',
      'rilling.png');
      $this->makeVraag('Onverklaarbare transpiratie',
      'https://www.gezondheidsplein.nl/aandoeningen/overmatig-zweten/item32028',
      'zweet.png');
      $this->makeVraag('Oververmoeidheid',
      'https://www.gezondheidsplein.nl/aandoeningen/oververmoeidheid/item37788',
      'moe.png');
      $this->makeVraag('Klierzwelling',
      'https://nl.medipedia.be/lymfomen/symptomen/artikels_wat-symptomen',
      'klier.png');
      $this->makeVraag('Pijnlijke keel',
      'https://mens-en-gezondheid.infonu.nl/aandoeningen/186442-keelpijn-oorzaken-van-pijn-aan-keel-pijnlijke-keel.html',
      'keel.png');
      $this->makeVraag('Hoesten',
      'https://www.thuisarts.nl/hoesten',
      'hoest.png');
      $this->makeVraag('Hartkloppingen',
      'https://www.thuisarts.nl/hoesten',
      'hart.png');
      $this->makeVraag('Overgevoeligheid voor licht',
      'https://nl.wikipedia.org/wiki/Lichtovergevoeligheid',
      'oog.png');
      $this->makeVraag('Oorsuizen, zoemen of fluiten',
      'https://www.thuisarts.nl/oorsuizen/ik-heb-last-van-oorsuizen',
      'oor.png');
      $this->makeVraag('Somberheid of angstigheid',
      'https://www.testjeleefstijl.nl/angst-somberheid',
      'somber.png');
   }

   public function insertIntoDB($data){
      DB::table('vragen')->insert($data);
   }

   private $id = 1;

   public function makeVraag($vraag, $info, $afbeelding){
      $this->insertIntoDB([
         'id' => $this->id,
         'vraag' => $vraag,
         'info_link' => $info,
         'afbeelding_link' => $afbeelding
      ]);
      $this->id = $this->id + 1;
   }
}
