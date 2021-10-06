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
            'english' => 'aged sixty five years',
            'irish' => 'in aois a cúig bliana agus trí fichead',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged sixty five years',
            'irish' => 'i gcionn a 65 bliana d’aois',
        ]);
        DB::table('phrases')->insert([
            'english' => 'they agreed to differ',
            'irish' => 'rinne siad neamhshuim dá raibh eatarthu',
        ]);
        DB::table('phrases')->insert([
            'english' => 'al fresco',
            'irish' => 'amuigh faoin aer',
        ]);
        DB::table('phrases')->insert([
            'english' => 'al fresco',
            'irish' => 'faoin spéir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alarms and excursions',
            'irish' => 'callán agus gleo',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alarms and excursions',
            'irish' => 'fuadar agus foilsceadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alas and alack',
            'irish' => 'faraoir!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alas and alack',
            'irish' => 'mo léan!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alas and alack',
            'irish' => 'monuar!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alive and kicking',
            'irish' => 'beo beathaíoch',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alive and kicking',
            'irish' => 'beo beoga',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alive and kicking',
            'irish' => 'beo bríomhar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá saol agus sláinte aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá sé beo agus dea-bheo',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá sé fá shaol agus fá shláinte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá sé ina b(h)eatha agus ina s(h)láinte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá sé ina shaol is ina shláinte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'achan chineál leis an chineál eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'gach rud leis an rud eile ... ',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'i dtaca le holc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'idir an t-iomlán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'idir gach aon rud',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'idir lom is laimirne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all along',
            'irish' => 'ar feadh na faide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the best',
            'irish' => 'go n-éirí leat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the better',
            'irish' => 'is amhlaidh is fearr é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the better for you!',
            'irish' => 'níor mheasa duit ar bith é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all my bits and pieces',
            'irish' => 'mo chip is mo mheanaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all by himself!',
            'irish' => 'leis féin féin!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it will all come out (the whole story)',
            'irish' => 'beidh an súiche sa phota',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all confused',
            'irish' => 'níl tús ná deireadh air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all day ',
            'irish' => 'ar feadh an lae',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all day long',
            'irish' => 'i gcaitheamh an lae',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all day long',
            'irish' => 'le linn an lae (go léir)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all day long',
            'irish' => 'ó mhaidin go faoithin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in a day’s work',
            'irish' => 'nach cuid de mo ghnó é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all he ever does',
            'irish' => 'is é a fhor is a fhónamh é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all doom and gloom',
            'irish' => 'dhéanfadh sé geimhreadh den samhradh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it was all down hill (got worse) ',
            'irish' => 'chuaigh sé chun meatha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all ears',
            'irish' => 'chluinfeadh sé an féar ag fás',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all ears',
            'irish' => 'tá cluasa easóige aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was all ears',
            'irish' => 'bhí cluas le héisteacht aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he had all the excuses of the day',
            'irish' => 'bhí gach re leithscéal aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the fashion (now)',
            'irish' => 'is é an faisean anois é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the fashion (now)',
            'irish' => 'is é an faisean go cruinn é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'that’s all very fine but ...',
            'irish' => 'tá go breá ach ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all this fuss about nothing!',
            'irish' => 'a leithéid de rírá gan údar!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in the game',
            'irish' => 'caithfear teacht leis an saol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in the game',
            'irish' => 'sin é cor an tsaoil agat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all his geese are swans',
            'irish' => 'is geal leis an fhiach dhubh a ghearrcach féin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all go',
            'irish' => 'tá an-ghó faoi',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the go now (all the rage)',
            'irish' => 'is air atá tóir anois',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all to the good',
            'irish' => 'is amhlaidh is fearr é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all to the good',
            'irish' => '(is) maith sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all to the good',
            'irish' => 'is maith an scéal é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'that was all to the good',
            'irish' => 'ba mhaith mar a tharla',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all Greek to me',
            'irish' => 'ní thuigim focal de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all Greek to me',
            'irish' => 'níl ann ach gibiris',
        ]);
        DB::table('phrases')->insert([
            'english' => ' it’s all gibberish to me',
            'irish' => 'ní thuigim focal de',
        ]);
        DB::table('phrases')->insert([
            'english' => ' it’s all gibberish to me',
            'irish' => 'níl ann ach gibiris',
        ]);
        DB::table('phrases')->insert([
            'english' => '... all I have',
            'irish' => '... a bhfuil agam',
        ]);
        DB::table('phrases')->insert([
            'english' => '... all I have',
            'irish' => '... a bhfuil i mo sheilbh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was all honey',
            'irish' => 'bhí sé chomh milis leis an siúcra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all hell was let loose',
            'irish' => 'bhí ceann scaoilte le diabhail ifrinn',
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
