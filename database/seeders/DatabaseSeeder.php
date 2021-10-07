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
            'english' => 'it’s all in a day’s work',
            'irish' => 'cuid de mo ghnóthaí é sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all',
            'irish' => 'gach rud leis an rud eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all',
            'irish' => 'tríd an phíosa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in your imagination!',
            'irish' => 'ar do shúile atá sé uilig!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s your imagination!',
            'irish' => 'á fheiceáil duit atá sé!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s your imagination!',
            'irish' => 'ag samhlú atá tú!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in the same breadth',
            'irish' => 'in aon rabhán amháin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'we’re all in the same boat',
            'irish' => 'is é an dála céanna againn ar fad é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'we’re all in the same boat',
            'irish' => 'is ionann cás don iomlán againn',
        ]);
        DB::table('phrases')->insert([
            'english' => '... to all intents and purposes',
            'irish' => 'tá sé ionann is ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... to all intents and purposes',
            'irish' => '... , ionann’s',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all he’s interested in',
            'irish' => ' is é a fhor is a fhónamh é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all joking aside',
            'irish' => 'leis an ghreann a fhágáil inár ndiaidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all mod cons',
            'irish' => 'gach deis is nua',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the more reason why you should ...',
            'irish' => 'sin mar is córa duit ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the more reason ...',
            'irish' => 'is amhlaidh is córa ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all necessary arrangements',
            'irish' => 'gach socrú dá bhfuil riachtanach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all he needed was an excuse',
            'irish' => 'ní raibh uaidh ach an leathchéad',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all he needed was an excuse',
            'irish' => 'ní raibh uaidh ach an tsiocair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all damn nonsense',
            'irish' => 'tuar cait is féasóg air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all is not lost',
            'irish' => 'ní fíon ar lár é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all one',
            'irish' => 'is ionann é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all one',
            'irish' => 'sé an dá mhar a chéile é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all one',
            'irish' => 'is ionann sa chás é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all or none',
            'irish' => 'lán nó dada',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all or none',
            'irish' => 'lán nó loic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all or nothing',
            'irish' => 'beifear beirthe nó caillte leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all or nothing',
            'irish' => 'tá an t-iomlán i ngeall air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all out (in totality)',
            'irish' => 'faoi iomlán siúil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over again',
            'irish' => 'athuair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over again',
            'irish' => 'as an nua',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she’s all over him',
            'irish' => 'tá sí leáite anuas air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she’s all over him',
            'irish' => 'tá sí ina coda beaga timpeall air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the country',
            'irish' => 'ar fud na tíre uilig',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the place',
            'irish' => 'ar fud na bhfudanna',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the place',
            'irish' => 'ar fud an bhaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the world',
            'irish' => 'i gcríocha an domhain mhóir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the world',
            'irish' => 'ar fud an domhain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all his own way',
            'irish' => 'ar aghaidh boise aige',
        ]);
        DB::table('phrases')->insert([
            'english' => '... all in my power',
            'irish' => '... a bhfuil ar mo chumas',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the rage',
            'irish' => 'níl ann anois ach é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the rage',
            'irish' => 'tá an tóir shíoraí anois air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the rage',
            'irish' => 'tá an tóir ag an saol mhór air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the rage',
            'irish' => 'tá gáir mhór leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all right!',
            'irish' => 'tá ceart!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all right (a good fellow)',
            'irish' => 'tá an mianach ceart ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all right for you to ...',
            'irish' => 'is réidh agatsa bheith ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all right on paper',
            'irish' => 'is éasca a rá ná a dhéanamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all right on paper',
            'irish' => 'is fusa a rá ná á dhéanamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all is rosy in the garden',
            'irish' => 'tá mil ar chuiseogach ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the same ...',
            'irish' => 'san am chéanna ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the same to me',
            'irish' => 'is cuma domsa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the same to me',
            'irish' => 'is amhlaidh dom é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the same to me',
            'irish' => 'is ionann is an cás (dom) (é)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the same to you',
            'irish' => 'comhbhuíochas duit é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all at sea',
            'irish' => 'tá an scéal sa mhuileann air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all seems yellow to the jaundiced eye',
            'irish' => 'feiceann súil ghruama saol gruama',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all singing off the same score sheet',
            'irish' => 'uile ar aon scór amháin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all sorts and conditions of men',
            'irish' => 'an uile chineál fear',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all sorts and conditions of men',
            'irish' => 'an uile shaghas fear',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all sorts of excuses',
            'irish' => 'gach re leithscéal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all spruced up',
            'irish' => 'chomh deismir le bábóg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an saol (mór) agus a mháthair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'idir liath agus leanbh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an saol Gaelach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an t-iomlán léir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'uaisle agus anuaisle',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'an saol (mór) agus a mháthair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'idir liath agus leanbh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'an saol Gaelach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'an t-iomlán léir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'uaisle agus anuaisle',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => 'dhéanfadh sé gach uile rud ar a theanga',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => 'níl ann ach bolgán béice',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => 'níl ann ach gaotaire',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => ' níl ann ach scaothaire',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => 'níl ina chaint ach gaoth mhór',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => '(an) focal mór agus droch-chur leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => 'an focal mór agus gan cur leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => 'gothaí móra agus buillí beaga',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => 'is mó an torann ná an olann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => 'ní briathar a dhearbhaíos ach gníomh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'that’s all the thanks I get! ',
            'irish' => 'sin a bhfuil de bhuíochais orm!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'that’s all the thanks I get from you!',
            'irish' => 'sin a bhfuil de bhuíochas (agat)!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all there! (astute / quick-minded)',
            'irish' => 'níl aon néal air!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all (other) things being equal',
            'irish' => 'agus gach ní eile mar a chéile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things are possible',
            'irish' => 'tá dóigh ar gach aon rud',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things come to an end',
            'irish' => 'más fada an lá tig an oíche',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'i dtaca le holc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'le gach uile shórt a mheas ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'le gach uile shórt a mheá ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'gach rud leis an rud eile ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'idir achan sórt ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all those things',
            'irish' => 'na rudaí sin uilig go léir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to be all things to all men',
            'irish' => 'bheith tuilleamaíoch le gach duine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all thumbs',
            'irish' => 'tá méara sliopacha air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all told (all together)',
            'irish' => 'san iomlán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all of a tremble',
            'irish' => 'ar aon bharr amháin creatha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the way',
            'irish' => 'go deireadh an aistir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the way',
            'irish' => 'i rith an bhealaigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all was well',
            'irish' => 'bhí go maith is ní raibh go holc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all went well',
            'irish' => 'bhí go maith is ní raibh go holc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all very well for you!',
            'irish' => 'is réidh agatsa é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all very well for you to talk',
            'irish' => 'is réidh agat é a bheith ag caint',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the while',
            'irish' => 'i rith an ama',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the while',
            'irish' => 'ar feadh na faide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the world and his wife',
            'irish' => 'an domhan is a mháthair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the world and his wife',
            'irish' => 'an saol Gaelach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an domhan is a mháthair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an saol Gaelach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all his worldly goods',
            'irish' => 'a chuid de mhaoin an tsaoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the worse',
            'irish' => 'is amhlaidh is measa é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all (the) year round',
            'irish' => 'ó cheann ceann na bliana',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well',
            'irish' => 'tá gach rud mar is cóir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well',
            'irish' => 'tá gach uile shórt ceart',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well!',
            'irish' => 'gach ní i gcóir!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well!',
            'irish' => 'tá i gceart!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well that ends well',
            'irish' => 'an cluiche deireanach an imirt',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well that ends well',
            'irish' => 'mol a dheireadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'Alleluia!',
            'irish' => 'Aililiú!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to allow for all possibilities',
            'irish' => 'chuile rud sa mheá',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to allow for all possibilities',
            'irish' => 'gach uile shórt a chur san áireamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'almost always',
            'irish' => 'chóir a bheith i dtólamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'almost always',
            'irish' => 'i gcónaí beagnach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'almost always',
            'irish' => 'i gcónaí nach mór',
        ]);
        DB::table('phrases')->insert([
            'english' => 'along with that',
            'irish' => 'ina cheann sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the alternative is even worse',
            'irish' => 'más olc maoil is measa mullach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'always the easy way out!',
            'irish' => 'gach rogha le fána!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'always in our memories',
            'irish' => 'i gcónaí inár gcuimhne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'you were always on my side',
            'irish' => 'bhí tú riamh fabhrach dom',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s always on the go',
            'irish' => 'tá an diabhal ina chosa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he always turns up trumps',
            'irish' => 'bíonn an t-ádh ag rith leis i gcónaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s always up to something',
            'irish' => 'tá sé lán ealaíonach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'always with us',
            'irish' => 'linn i gcónaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'amiable qualities',
            'irish' => 'dea-thréithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it (all) amounts to the same thing',
            'irish' => 'is ionann an cás',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it (all) amounts to the same thing',
            'irish' => 'is ionann sa chás é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it (all) amounts to the same thing',
            'irish' => 'is é an rud céanna ar deireadh é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it (all) amounts to the same thing',
            'irish' => 'tá sé chomh fada is atá sé leathan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'ample opportunity',
            'irish' => 'faill fhairsing',
        ]);
        DB::table('phrases')->insert([
            'english' => 'ample opportunity',
            'irish' => 'fiche faill',
        ]);
        DB::table('phrases')->insert([
            'english' => '___ and all as they were ...',
            'irish' => '___ agus uile is mar a bhí siad ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and their beloved child ___',
            'irish' => 'agus a leanbh ionúin ___',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and his daughter ___ ',
            'irish' => 'agus a iníon ___ ',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and his daughter ___ ',
            'irish' => 'agus a nín ___',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and their other family members ___ , ___',
            'irish' => 'agus a gclann eile ___ , ___',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and that’s an end to the matter',
            'irish' => 'agus sin a bhfuil de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and there’s an end to it!',
            'irish' => 'sin é a dheireadh!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and that’s flat!',
            'irish' => 'agus ná bíodh aon amhras faoi sin!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and further, ... ',
            'irish' => 'agus thairis sin, ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and gladly',
            'irish' => '... fá chroí mhór mhaith',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and last but not least',
            'irish' => '... agus an ball is mó ar deireadh',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and moreover ...',
            'irish' => '... agus a dhálta sin ... ',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and moreover ...',
            'irish' => '... agus chomh maith céanna ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and moreover ...',
            'irish' => '... agus lena chois sin ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and no wonder!',
            'irish' => '... ní nach ionadh!',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and it’s no wonder',
            'irish' => '... agus a ábhar sin agat',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and you have every reason to be',
            'irish' => '... agus a ábhar sin agat',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and no half-measures',
            'irish' => 'agus ní ar leathchois sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and no mistake',
            'irish' => 'gan bhréag gan amhras',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and so on / forth',
            'irish' => '... agus dá réir sin',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and so on / forth',
            'irish' => '... agus eile',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and so on / forth',
            'irish' => '... agus mar sin de',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and so on / forth',
            'irish' => '... agus rud',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and something to spare',
            'irish' => '... agus fuíollach aige/aici',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and then some',
            'irish' => '... agus fuíollach aige/aici',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and such',
            'irish' => '... agus a leithéidí',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and such',
            'irish' => '... agus an sórt sin',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and such',
            'irish' => '... agus rud',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and that’s that!',
            'irish' => 'agus sin sin!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and to top it all ...',
            'irish' => 'agus mar bharr ar an iomlán ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and what not',
            'irish' => '... agus gach uile shórt',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and what not',
            'irish' => '... agus rudaí eile mar sin',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and what’s more ...',
            'irish' => '... agus rud (beag) eile de ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the angels of glory had a little cradle prepared for __',
            'irish' => 'ag aingle na glóire bhí cliabhán beag cóirithe do __',
        ]);
        DB::table('phrases')->insert([
            'english' => 'there’s another side to the story',
            'irish' => 'tá taobh eile ar an tseithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'any port in a storm!',
            'irish' => 'in anás béile, as portán féile!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'any Tom, Dick or Harry',
            'irish' => 'gach uile dhailtín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'anyone in his right senses',
            'irish' => 'duine ar bith agus a chiall is a chéadfaí aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'anymore than anyone else',
            'irish' => 'chomh maith le duine eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'anything but that',
            'irish' => 'gach uile rud ach sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'anything within reason',
            'irish' => 'rud cothrom ar bith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it appears to me',
            'irish' => 'feictear dom',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it appears to me',
            'irish' => 'samhlaítear dom',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it appears to be without foundation',
            'irish' => 'is cosúil go bhfuil sé gan bun gan barr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it appears to be without foundation',
            'irish' => 'is cosúil nach bhfuil bunús ar bith leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'appearances count',
            'irish' => 'dhá dtrian den damhsa an chosúlacht',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the apple of one’s eye',
            'irish' => 'meall na súile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the apple of one’s eye',
            'irish' => 'úillín óir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she is the apple of his eye',
            'irish' => 'is grá leis í ná an tsúil atá ina cheann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she is the apple of his eye',
            'irish' => 'is í an sú súilíneach leis í',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she is the apple of his eye',
            'irish' => 'is measa leis í ná an tsúil atá ina cheann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was the apple of his mother’s eye',
            'irish' => 'ba é súilín óir a mháthar é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'April Fool!',
            'irish' => 'Amadán Aibreáin!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'April Fool!',
            'irish' => 'Amadán earraigh!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an apt expression',
            'irish' => 'focal tráthúil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'are all the family well?',
            'irish' => 'an bhfuil an comhluadar ar fad go maith?',
        ]);
        DB::table('phrases')->insert([
            'english' => 'are all the family well?',
            'irish' => 'an bhfuil do chúram go maith?',
        ]);
        DB::table('phrases')->insert([
            'english' => 'I’m ___ . You are, I’m sure!',
            'irish' => 'Tá ___ orm. Tá, rud!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aren’t you a busybody!',
            'irish' => 'nach gnóthach an mhaise duit é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aren’t you great ... (in praise)',
            'irish' => 'nach mór a gheibhtear thú ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he would argue a black crow white',
            'irish' => 'chuirfeadh sé an dubh ina gheal ort',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he would argue with his own shadow',
            'irish' => 'chuirfeadh sé dhá cheann na coille ar a chéile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he would cause a row with anybody',
            'irish' => 'chuirfeadh sé dhá cheann na coille ar a chéile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an armchair critic',
            'irish' => 'iománaí ar an chlaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'armed to the teeth',
            'irish' => 'armáilte go dtí na cluasa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'armed to the teeth',
            'irish' => 'armáilte ó bhun go barr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'armed to the teeth',
            'irish' => 'faoi iomlán airm',
        ]);
        DB::table('phrases')->insert([
            'english' => 'around about ... (approximately)',
            'irish' => 'ag ballaíocht ar ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'around about ... (approximately)',
            'irish' => 'amach is isteach ar ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'around about ... (approximately)',
            'irish' => 'tuairim ar ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he arrived safely',
            'irish' => 'bhain sé cuan agus caladh amach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'art for art’s sake',
            'irish' => 'ealaín ar mhaithe leis an ealaín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the artful deceiver',
            'irish' => 'an cealgaire cleasach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the artful deceiver',
            'irish' => 'an cluanaí cleasach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the artful deceiver',
            'irish' => 'an mealltóir beartach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as an act of charity',
            'irish' => 'mar ghrá Dé',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as aggressive as a brooding hen',
            'irish' => 'chomh colgach le cearc ghoir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as aggressive as a cat',
            'irish' => 'chomh colgach le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as aggressive as a rooster',
            'irish' => 'chomh colgach le coileach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as agile as Caoilte',
            'irish' => 'chomh lúfar le Caoilte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as agile as a hound',
            'irish' => 'chomh lúfar le cú',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as agile as a sparrow',
            'irish' => 'chomh lúfar le gealbhan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as agile as a trout',
            'irish' => 'chomh lúfar le breac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as alike as two salmon',
            'irish' => 'chomh cosúil le dhá scadán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as similar as two salmon',
            'irish' => 'chomh cosúil le dhá scadán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as alike as two horses’ heads ',
            'irish' => 'chomh cosúil le dhá cheann capaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as alike as two mares',
            'irish' => 'chomh cosúil le dhá beithigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as alive as a bee',
            'irish' => 'chomh beo le beach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bad as all that',
            'irish' => 'chomh holc sin amach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bad as a widow’s curse and an orphan’s tear',
            'irish' => 'chomh holc le mallacht baintrí agus deor dílleachta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bald as a coot',
            'irish' => 'chomh maol leis an tuairnín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bald as a hornless cow',
            'irish' => 'chomh maol le bó gan adharc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bald as the striker of a flail',
            'irish' => 'chomh maol le buailteán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bare as the floor of the house',
            'irish' => 'chomh lom le hurlár an tí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bare as a naked bum',
            'irish' => 'chomh lom le tóin tharnocht',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bare as the palm of my hand',
            'irish' => 'chomh lom le croí mo bhoise',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bare as the palm of my hand',
            'irish' => 'chomh lom le mo bhos',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as beautiful as the clear day',
            'irish' => 'chomh hálainn leis an lá bán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as beautiful as ever was seen',
            'irish' => 'chomh hálainn is a d’iarrfadh do shúil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as big as Fionn Mac Cumhaill',
            'irish' => 'chomh mór le Fionn Mac Cumhaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as big as my boot (of potatoes, etc.)',
            'irish' => 'chomh fada le mo bhróg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as big as potatoes listening to the old man (of eyes)',
            'irish' => 'chomh mór le prátaí ag éisteacht leis an seanduine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as big as seed potatoes (of hailstones)',
            'irish' => 'chomh mór le póiríní prátaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bitter as bitter herb',
            'irish' => 'chomh searbh le searbhán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bitter as brine',
            'irish' => 'chomh goirt leis an tsáile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bitter as red berries',
            'irish' => 'chomh géar le caora dearga',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bitter as wild garlic',
            'irish' => 'chomh géar le creamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a beetle',
            'irish' => 'chomh dubh leis an daol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'jet-black',
            'irish' => 'chomh dubh leis an daol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a berry (in the autumn)',
            'irish' => 'chomh dubh le sméar (san fhómhar)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as your boot',
            'irish' => 'chomh dubh le sméar (san fhómhar)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the bottom of a pot',
            'irish' => 'chomh dubh le tóin corcáin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as charcoal',
            'irish' => 'chomh dubh le gualach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the chimney hole',
            'irish' => 'chomh dubh le cloich a’ bhaic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the chimney hole',
            'irish' => 'chomh dubh le poll an bhaic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as coal',
            'irish' => 'chomh dubh le gual',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a crow',
            'irish' => 'chomh dubh le préachán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the devil',
            'irish' => 'chomh dubh leis an diabhal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as ebony',
            'irish' => 'chomh dubh le héabann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as Erebus',
            'irish' => 'chomh dubh le Poll Tí Liabáin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the feather of a raven (of hair)',
            'irish' => 'chomh dubh le cleite an fhéich',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a hanging',
            'irish' => 'chomh dubh leis an chrochadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the hob',
            'irish' => 'chomh dubh leis an iarta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a hole',
            'irish' => 'chomh dorcha le poll',
        ]);
        DB::table('phrases')->insert([
            'english' => 'pitch black',
            'irish' => 'chomh dorcha le poll',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s not as black as he is painted',
            'irish' => 'níl sé chomh dona lena thuairisc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as pitch',
            'irish' => 'chomh dubh le pic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the Pooka’s bum',
            'irish' => 'chomh dubh le tóin an phúca',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a raven',
            'irish' => 'chomh dubh leis an fhiach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a sloe',
            'irish' => 'chomh dubh le hairne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a sloe',
            'irish' => 'chomh dubh leis an airne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as soot',
            'irish' => 'chomh dubh leis an mbac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as soot',
            'irish' => 'chomh dubh leis an tsúiche',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as soot',
            'irish' => 'chomh dubh le súiche',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he looked as black as thunder (bad tempered, displeased)',
            'irish' => 'tháinig néal crochadóra air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as blind as a bat',
            'irish' => 'comhsholas lá agus oíche dó',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as blind as a bat',
            'irish' => 'tá sé chomh caoch le smután',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as blind as a bat',
            'irish' => 'tá sé chomh caoch le creabhar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as blind as a bat',
            'irish' => 'tá sé chomh dall le creabhar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blind drunk as a rabbit',
            'irish' => 'chomh dall ar meisce le coinín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blind as the bottom of my foot',
            'irish' => 'chomh dall le bonn mo choise',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blind as the sole of my shoe',
            'irish' => 'chomh caoch le bonn mo bhróige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blue as the sky',
            'irish' => 'chomh gorm le smál',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blue as the sky',
            'irish' => 'chomh gorm leis an spéir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bold as brass',
            'irish' => 'chomh dána le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bold as the devil',
            'irish' => 'chomh dána leis an diabhal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bold as a cat',
            'irish' => 'chomh dalba le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as brave / valiant as Fionn Mac Cumhaill',
            'irish' => 'chomh calma le Fionn Mac Cumhaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bright as a button',
            'irish' => 'chomh geal le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bright as a button',
            'irish' => 'chomh geal le cúr sceite',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as broad as a currach (of man’s back)',
            'irish' => 'chomh leathan le currach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as broad as a door-leaf / shutter (of a person)',
            'irish' => 'chomh leathan le comhla',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as broad as it’s long',
            'irish' => 'aon rud amháin sa deireadh é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as broad as it’s long',
            'irish' => 'tá sé comhfhad comhleithead',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as brown as a berry',
            'irish' => 'chomh donn le sméar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as brown as a nut',
            'irish' => 'chomh donn le cnó',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as an ant',
            'irish' => 'chomh gnóthach le seangán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a bee',
            'irish' => 'chomh díbhirceach le beach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a bee',
            'irish' => 'chomh saothrach le beach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a carding woman between two spinners',
            'irish' => 'chomh gnóitheach le bean cardaí idir dhá abhras',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a pots woman at a fair',
            'irish' => 'chomh gnóitheach le bean potaí ar aonach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a man on a shilling an hour',
            'irish' => 'chomh gnóitheach le fear a mbeadh scilling san uair aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a nailer',
            'irish' => 'chomh gnóitheach le tairneoir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as calm as a cucumber',
            'irish' => 'chomh ciúin le linn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as calm as a cucumber',
            'irish' => 'ciúin mar linn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as calm as a pond',
            'irish' => 'chomh ciúin le linn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as calm as a pond',
            'irish' => 'ciúin mar linn',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as calm as a mill-pond',
            'irish' => '... ina clár',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as calm as a mill-pond',
            'irish' => '... ina léinseach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cantankerous as a cat',
            'irish' => 'chomh cantalach le dris',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cantankerous as a cat',
            'irish' => 'chomh feargach le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as the cuckoo',
            'irish' => 'chomh neamhbhuartha leis an chuach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as a youth',
            'irish' => 'chomh haigeanta le buachaill óg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as a starling',
            'irish' => 'chomh haerach le druid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as a sparrow',
            'irish' => 'homh haerach le gealbhan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as a sparrow',
            'irish' => 'chomh héasca le gealbhan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as chance may have it',
            'irish' => 'de réir mar a thitfidh amach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as chance would have it',
            'irish' => 'de thapa na huaire',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cheerful as a lark',
            'irish' => 'chomh croíúil le fuiseog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hearty as a lark',
            'irish' => 'chomh croíúil le fuiseog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cherished by him as the eye in his head',
            'irish' => 'chomh cúramach aige leis an tsúil a bhí istigh ina cheann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a new pin',
            'irish' => 'chomh glan le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a new pin',
            'irish' => 'chomh geal le hairgead',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a new pin',
            'irish' => 'chomh glan le pionna úr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a new pin',
            'irish' => 'chomh glan le sé pingine (úr)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a whistle',
            'irish' => 'chomh glan le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a whistle',
            'irish' => 'chomh geal le hairgead',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a whistle',
            'irish' => 'chomh glan le pionna úr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a whistle',
            'irish' => 'chomh glan le sé pingine (úr)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a pig that was to be slaughtered (of clean-shaven person)',
            'irish' => 'chomh scríobtha le muc a bheadh le marú',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as crystal',
            'irish' => 'chomh glan le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as crystal',
            'irish' => 'chomh soiléir le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as day',
            'irish' => 'chomh soiléir leis an lá geal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as ditch-water',
            'irish' => 'chomh doiléir lena bhfaca tú riamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as clear as mud',
            'irish' => 'ní thuigfeadh aon duine é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as clear as mud',
            'irish' => 'níl léamh ná tuiscint air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as clear as mud',
            'irish' => 'tá sé chomh doiléir le ceo tiubh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as the noonday sun',
            'irish' => 'chomh soiléir le grian an mheán lae',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as spring water',
            'irish' => 'chomh glan le fíoruisce',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as the summer sun',
            'irish' => 'chomh soiléir le grian an tsamhraidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as you can clearly see',
            'irish' => 'mar is follasach duit',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as a corpse',
            'irish' => 'chomh fuar le corp',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as frost',
            'irish' => 'chomh fuar le sioc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as ice',
            'irish' => 'chomh fuar le sioc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as death',
            'irish' => 'chomh fuar leis an éag',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as the grave',
            'irish' => 'chomh fuar leis an uaigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as an icicle',
            'irish' => 'chomh fuar le bior oighir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'they are as common as blackberries',
            'irish' => 'tá siad chomh tiubh le gaineamh na trá',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as common as domestic dogs',
            'irish' => 'chomh coitianta le madaidh baile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as common as muck',
            'irish' => 'tá sé chomh mímhúinte le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as conceited as the cuckoos',
            'irish' => 'chomh leitheadach leis na cuacha',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as cool as you please',
            'irish' => '... gan a dhath mairge',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as cool as a cucumber',
            'irish' => 'is é an fuarthé é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as cool as a cucumber',
            'irish' => 'ní féidir corraí a bhaint as',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as cool as a cucumber',
            'irish' => 'ní fhéadfaí corraí a bhaint as',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as cool as a cucumber',
            'irish' => 'níor thit eite as a sciatháin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as courageous as Cúchulainn',
            'irish' => 'chomh cróga le Cúchulainn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as courageous as Cúchulainn',
            'irish' => 'chomh móruchtúil le Cúchulainn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crafty as a cat',
            'irish' => 'chomh seanaimseartha le cat',
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
