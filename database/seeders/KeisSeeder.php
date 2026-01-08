<?php

namespace Database\Seeders;

use App\Models\Keis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class KeisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = file_get_contents("https://deskplan.lv/muita/app.json");
        $muitaData = json_decode($data, true);
    

        $cases = $muitaData['cases'];
        
        foreach($cases as $case){

        Keis::create([
            'id' => $case['id'],
            'external_ref' =>  $case['external_ref'],
            'status' => $case['status'],
            'priority' => $case['priority'],
            'arrival_ts' => $case['arrival_ts'],
            'checkpoint_id' => $case['checkpoint_id'],
            'origin_country' => $case['origin_country'],
            'destination_country' => $case['destination_country'],
            'risk_flags' => json_encode($case['risk_flags'], true),
            'declarant_id' => $case['declarant_id'],
            'consignee_id' => $case['consignee_id'],
            'vehicle_id'=> $case['vehicle_id']
        ]);
    }
    }
}
