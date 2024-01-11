<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ['comic','fantasy','mistery','novel','fiction','romance','horror'];

        foreach($data as $value){
            Category::insert([
                'name' => $value
            ]);
        }
    }
}
