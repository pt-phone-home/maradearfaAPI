<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phrases')->insert([
            'english' => 'an abject apology',
            'irish' => 'fiche leithscéal',
        ],
    [
        'english' => 'an abject apology',
        'irish' => 'leithscéal táiríseal',
    ]);
    }
}
