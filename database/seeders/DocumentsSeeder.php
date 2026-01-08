<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Documents;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = file_get_contents("https://deskplan.lv/muita/app.json");
        $muitaData = json_decode($data, true);

        $documents = $muitaData['documents'];

        foreach($documents as $document){

            Documents::create([
                'id' => $document['id'],
                'keis_id' => $document['case_id'],
                'filename' => $document['filename'],
                'mime_type' => $document['mime_type'],
                'category' => $document['category'],
                'pages' => $document['pages'],
                'uploaded_by' => $document['uploaded_by']
            ]);

        }
    }
}
