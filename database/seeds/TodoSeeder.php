<?php

use Illuminate\Database\Seeder;
use App\Models\Todo;


class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todos = [];
        for ($i = 0; $i < 10; $i++) {
            array_push($todos, [
                "title" => "Test todo " . ($i+1),
                "assignee_id" => ($i+1)
            ]);
        }

        Todo::insert($todos);

        echo "Seed todo success";
    }
}
