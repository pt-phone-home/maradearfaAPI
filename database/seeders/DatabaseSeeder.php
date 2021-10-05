<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phrases')->insert([
            'english' => 'an abject apology',
            'irish' => 'fiche leithscéal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an abject apology',
            'irish' => 'leithscéal táiríseal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'abject failure',
            'irish' => 'teip ghlan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and about time too',
            'irish' => 'agus is mithid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and about time too',
            'irish' => 'más am is mithid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s about time!',
            'irish' => 'más maith is mithid!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s about time!',
            'irish' => 'más mall is mithid!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'above all nights',
            'irish' => 'seachas oícheanta an domhain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'above all people',
            'irish' => 'thar aon duine amuigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'above all things',
            'irish' => 'os cionn gach uile ní',
        ]);
        DB::table('phrases')->insert([
            'english' => 'above all things',
            'irish' => 'thar gach uile ní',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute fool',
            'irish' => 'amadán críochnaithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute fool',
            'irish' => 'amadán déanta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute lack of concern with proceedings',
            'irish' => 'cuid an daimh den eadra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute nonsense',
            'irish' => 'amaidí chorpartha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute nonsense',
            'irish' => 'deargsheafóid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s an absolute torment!',
            'irish' => 'is mór an clipeadh é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s an absolute torment!',
            'irish' => 'is mór an crá croí é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the absolute truth',
            'irish' => 'lomchlár na fírinne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the absolute truth',
            'irish' => 'lomchnámh na fírinne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolutely certain',
            'irish' => 'lánchinnte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolutely certain',
            'irish' => 'lándearfa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he accepted like a shot',
            'irish' => 'ba é sin an guth a fuair a fhreagra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'accidents will (do) happen',
            'irish' => 'bíonn an tubaiste ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'accidents will (do) happen',
            'irish' => 'ní leithne an t-aer ná an timpiste',
        ]);
        DB::table('phrases')->insert([
            'english' => 'accidents will (do) happen',
            'irish' => 'nuair a thig an chiall tig an fhaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an accomplished fact',
            'irish' => 'beart i gcrích',
        ]);
        DB::table('phrases')->insert([
            'english' => 'according to custom',
            'irish' => 'de réir gnáis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'according to precedent',
            'irish' => 'de réir nóis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'according to plan',
            'irish' => 'de réir mar a bhí leagtha amach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'according to tradition',
            'irish' => 'de réir seanchais',
        ]);
        DB::table('phrases')->insert([
            'english' => '',
            'irish' => '',
        ]);
        DB::table('phrases')->insert([
            'english' => '',
            'irish' => '',
        ]);
        DB::table('phrases')->insert([
            'english' => '',
            'irish' => '',
        ]);
        DB::table('phrases')->insert([
            'english' => '',
            'irish' => '',
        ]);
        DB::table('phrases')->insert([
            'english' => '',
            'irish' => '',
        ]);
        
    }
}
