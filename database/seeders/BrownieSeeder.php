<?php

namespace Database\Seeders;

use App\Models\Brownie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class BrownieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brownies = config('db.brownies');
        foreach ($brownies as $key => $brownie) {
            $newBrownie = new Brownie();
            $newBrownie->type = $brownie['type'];
            $newBrownie->description = $brownie['description'];
            $newBrownie->thumb = $brownie['thumb'];
            $newBrownie->ingredients = $brownie['ingredients'];
            $newBrownie->kcal = $brownie['kcal'];
            $newBrownie->fat = $brownie['fat'];
            $newBrownie->carb = $brownie['carb'];
            $newBrownie->save();
        }
    }
}
