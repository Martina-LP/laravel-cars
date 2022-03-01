<?php

use Illuminate\Database\Seeder;
use App\Optional;
use Illuminate\Support\Str;

class OptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals = [
            'sedili riscaldabili',
            'vetri oscurati',
            'gomme antiproiettili',
            'tettuccio reclinabile',
            'sedile eiettabile',
            'modalità subacquea'
        ];

        foreach ($optionals as $optional) {
            $new_optional = new Optional();
            $new_optional->name = $optional;
            $new_optional->slug = Str::slug($optional);

            $new_optional->save();
        }
    }
}
