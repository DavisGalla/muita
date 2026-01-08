<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parties;

class PartiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = file_get_contents("https://deskplan.lv/muita/app.json");
        $muitaData = json_decode($data, true);
    

        $parties = $muitaData['parties'];
        
        foreach($parties as $party){

        Parties::create([
            'id' => $party['id'],
            'type' => $party['type'],
            'name' => $party['name'],
            'reg_code' => $party['reg_code'],
            'vat' => $party['vat'],
            'country' => $party['country'],
            'email' => $party['email'],
            'phone' => $party['phone'],
        ]);
    }
    }
}
