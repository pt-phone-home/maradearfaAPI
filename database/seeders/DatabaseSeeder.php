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
            'english' => 'he has an ace up his sleeve',
            'irish' => 'tá cárta cúil go fóill aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'Achilles’ heel',
            'irish' => 'an ball nimhneach atá ar dhroim na staile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'Achilles’ heel',
            'irish' => 'an laige chinniúnach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to have an aching void (of hunger)',
            'irish' => 'goin ocrais a bheith ort',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the acid test',
            'irish' => 'an bhuntriail',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the acid test',
            'irish' => 'báire na fola',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the acid test',
            'irish' => 'promhadh na haigéide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an act of charity',
            'irish' => 'grá dia',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s a great act of charity on your part (ironically)',
            'irish' => 'is mór an déirc duit é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it would be a great act of charity',
            'irish' => 'ba mhór an grá dia é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he acted in cold blood',
            'irish' => 'rinne sé go fuarchúiseach é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an act of God',
            'irish' => 'gníomh Dé',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an act of treachery',
            'irish' => 'feillbheart',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was acting in his own interests',
            'irish' => 'bhí sé ag tochras ar a cheirtlín féin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was acting in his own interests',
            'irish' => 'bhí sé ag tochas a ghearbóige féin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'déan mórán agus can beagán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'is fearr an cruthú an gort ná na seacht seisreacha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'ní briathar a dhearbhaíonn ach gníomh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'ní briathra a dhearbhaíos ach gníomh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'téann focal le gaoth ach téann buille le cnámh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'téid focail le gaoith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'acute agony (pain)',
            'irish' => 'pian ghártha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'ad infinitum',
            'irish' => 'go deo',
        ]);
        DB::table('phrases')->insert([
            'english' => 'ad libitum',
            'irish' => 'ar do thoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'adapt to circumstances',
            'irish' => 'damhsa de réir an cheoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add fuel to the fire',
            'irish' => 'ag cur geire ar an tine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add fuel to the fire',
            'irish' => 'ag fadú leis an achrann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add fuel to the fire',
            'irish' => 'an iaróg a chothú',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add fuel to the fire',
            'irish' => 'an iaróg a chur ina suí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add insult to (the) injury',
            'irish' => 'an tarcaisne a chur i gceann na héagóra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and to add insult to injury',
            'irish' => 'agus chun taircaisne a chur i gceann na héagóra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s advanced in years',
            'irish' => 'tá sé cnagaosta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the affair took a turn for the worse',
            'irish' => 'tháinig droch-chor sa scéal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'affairs of state',
            'irish' => 'gnóthaí stáit',
        ]);
        DB::table('phrases')->insert([
            'english' => 'I’m afraid it is (so)!',
            'irish' => 'is eagal liom!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'I’m afraid he’s not...',
            'irish' => 'is baolach nach bhfuil sé...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after all (in the end)',
            'irish' => 'i ndiaidh an iomláin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after all (is said and done)',
            'irish' => 'agus chuile rud ráite',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after all (is said and done)',
            'irish' => 'i ndiaidh gach ní',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after all (is said and done)',
            'irish' => 'tar éis an tsaoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after due consideration',
            'irish' => 'i ndiaidh leormhachnamh a dhéanamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after due consideration',
            'irish' => 'tar éis an scéal a mheá go maith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after due consideration',
            'irish' => ' tar éis an scéal a mheá go mion',
        ]);
        DB::table('phrases')->insert([
            'english' => 'on due consideration',
            'irish' => 'i ndiaidh leormhachnamh a dhéanamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'on due consideration',
            'irish' => 'tar éis an scéal a mheá go maith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'on due consideration',
            'irish' => ' tar éis an scéal a mheá go mion',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after due consideration of...',
            'irish' => 'i ndiaidh machnamh cothrom a dhéanamh ar...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after the event',
            'irish' => 'i ndiaidh an ama',
        ]);
        DB::table('phrases')->insert([
            'english' => '___ after my fancy',
            'irish' => ' ___ chun mo thola',
        ]);
        DB::table('phrases')->insert([
            'english' => 'again and again',
            'irish' => 'ar ais is ar ais',
        ]);
        DB::table('phrases')->insert([
            'english' => 'again and again',
            'irish' => 'arís agus arís eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against the grain',
            'irish' => 'in aghaidh an dola',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against the grain',
            'irish' => 'in aghaidh an fhionnaidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against the grain',
            'irish' => 'in aghaidh an stuif',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against great odds',
            'irish' => 'in éadan an tsrutha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against the stream',
            'irish' => 'in éadan an tsrutha',
        ]);
        DB::table('phrases')->insert([
            'english' => '... against all odds',
            'irish' => '... taradh a dtiocfaidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against my orders',
            'irish' => 'thar mo chrosadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against his will',
            'irish' => 'ar a neamhthoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against his will',
            'irish' => 'in éadan a thola',
        ]);
        DB::table('phrases')->insert([
            'english' => 'age before beauty',
            'irish' => 'aois roimh áilleacht',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the age of reason',
            'irish' => 'aois na tuisceana',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged 29 years',
            'irish' => 'in aois a 29 bliain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged 29 years',
            'irish' => 'in aois a 29 mbl',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged 86 years',
            'irish' => '86 bliain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged 86 years',
            'irish' => 'aois 86 bl',
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
