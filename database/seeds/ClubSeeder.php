<?php

use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $url = 'https://fut.best/api/clubs?page=1&limit=5';
      
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      
        $response = curl_exec ($ch);
        
        curl_close ($ch);

        $clubs = json_decode($response, true)['data']['clubs'];
        
        foreach ($clubs as $club) {
            DB::table('clubs')->insert([
                'name' => $club['name'],
                'image_url' => $club['Image']['url']
            ]);
        }

    }
}
