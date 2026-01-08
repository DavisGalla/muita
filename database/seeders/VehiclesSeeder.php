<?php

namespace Database\Seeders;

use App\Models\Vehicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = file_get_contents("https://deskplan.lv/muita/app.json");
        $muitaData = json_decode($data, true);

        $vehicles = $muitaData['vehicles'];
        foreach($vehicles as $vehicle){
            Vehicles::create([
                'id' => $vehicle['id'],
                'plate_no' => $vehicle['plate_no'],
                'country' => $vehicle['country'],
                'make' => $vehicle['make'],
                'model' => $vehicle['model'],
                'vin' => $vehicle['vin'],
            ]);
        }
    }
}
