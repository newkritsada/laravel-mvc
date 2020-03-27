<?php

use Illuminate\Database\Seeder;
use App\Models\Assignee;


class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person = [];
        for ($i = 0; $i < 10; $i++) {
            array_push($person, [
                "name" => "Person " . ($i + 1)
            ]);
        }

        Assignee::insert($person);

        echo "Seed person success";
    }
}
