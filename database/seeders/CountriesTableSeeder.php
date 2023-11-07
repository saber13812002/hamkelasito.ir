<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => 'American Samoa',
                'value' => 'American Samoa',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/as.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'text' => 'Peru',
                'value' => 'Peru',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pe.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'text' => 'Tonga',
                'value' => 'Tonga',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/to.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'text' => 'Mayotte',
                'value' => 'Mayotte',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/yt.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'text' => 'Panama',
                'value' => 'Panama',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pa.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'text' => 'Madagascar',
                'value' => 'Madagascar',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'text' => 'Belgium',
                'value' => 'Belgium',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/be.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'text' => 'Central African Republic',
                'value' => 'Central African Republic',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cf.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'text' => 'Hungary',
                'value' => 'Hungary',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/hu.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'text' => 'Mongolia',
                'value' => 'Mongolia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'text' => 'Saudi Arabia',
                'value' => 'Saudi Arabia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sa.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'text' => 'Eswatini',
                'value' => 'Eswatini',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'text' => 'Uganda',
                'value' => 'Uganda',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ug.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'text' => 'Paraguay',
                'value' => 'Paraguay',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/py.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'text' => 'Cameroon',
                'value' => 'Cameroon',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'text' => 'France',
                'value' => 'France',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/fr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'text' => 'Togo',
                'value' => 'Togo',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'text' => 'Mauritius',
                'value' => 'Mauritius',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mu.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'text' => 'Cook Islands',
                'value' => 'Cook Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ck.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'text' => 'Palau',
                'value' => 'Palau',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'text' => 'Nepal',
                'value' => 'Nepal',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/np.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'text' => 'New Zealand',
                'value' => 'New Zealand',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/nz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'text' => 'Pitcairn Islands',
                'value' => 'Pitcairn Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'text' => 'Seychelles',
                'value' => 'Seychelles',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sc.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'text' => 'United Arab Emirates',
                'value' => 'United Arab Emirates',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ae.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'text' => 'Belarus',
                'value' => 'Belarus',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/by.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'text' => 'Dominican Republic',
                'value' => 'Dominican Republic',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/do.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'text' => 'Libya',
                'value' => 'Libya',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ly.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'text' => 'Tokelau',
                'value' => 'Tokelau',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'text' => 'Croatia',
                'value' => 'Croatia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/hr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'text' => 'Philippines',
                'value' => 'Philippines',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ph.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'text' => 'Albania',
                'value' => 'Albania',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/al.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'text' => 'Bouvet Island',
                'value' => 'Bouvet Island',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bv.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'text' => 'Indonesia',
                'value' => 'Indonesia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/id.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'text' => 'Thailand',
                'value' => 'Thailand',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/th.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'text' => 'Latvia',
                'value' => 'Latvia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/lv.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'text' => 'Ecuador',
                'value' => 'Ecuador',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ec.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'text' => 'Kenya',
                'value' => 'Kenya',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ke.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'text' => 'Liberia',
                'value' => 'Liberia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/lr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'text' => 'British Virgin Islands',
                'value' => 'British Virgin Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/vg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'text' => 'San Marino',
                'value' => 'San Marino',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'text' => 'India',
                'value' => 'India',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/in.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'text' => 'Bahrain',
                'value' => 'Bahrain',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bh.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'text' => 'Malawi',
                'value' => 'Malawi',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'text' => 'Iceland',
                'value' => 'Iceland',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/is.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'text' => 'Brunei',
                'value' => 'Brunei',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'text' => 'French Guiana',
                'value' => 'French Guiana',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gf.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'text' => 'Samoa',
                'value' => 'Samoa',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ws.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'text' => 'Georgia',
                'value' => 'Georgia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ge.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'text' => 'Caribbean Netherlands',
                'value' => 'Caribbean Netherlands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bq.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'text' => 'Heard Island and McDonald Islands',
                'value' => 'Heard Island and McDonald Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/hm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'text' => 'Papua New Guinea',
                'value' => 'Papua New Guinea',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'text' => 'Ghana',
                'value' => 'Ghana',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gh.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'text' => 'Afghanistan',
                'value' => 'Afghanistan',
                'color' => 'N',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/320px-Flag_of_the_Taliban.svg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'text' => 'Costa Rica',
                'value' => 'Costa Rica',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'text' => 'Fiji',
                'value' => 'Fiji',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/fj.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'text' => 'South Korea',
                'value' => 'South Korea',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/kr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'text' => 'Taiwan',
                'value' => 'Taiwan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'text' => 'Czechia',
                'value' => 'Czechia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'text' => 'Nicaragua',
                'value' => 'Nicaragua',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ni.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'text' => 'Portugal',
                'value' => 'Portugal',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pt.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'text' => 'Chile',
                'value' => 'Chile',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cl.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'text' => 'Gambia',
                'value' => 'Gambia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'text' => 'Belize',
                'value' => 'Belize',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'text' => 'Maldives',
                'value' => 'Maldives',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mv.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'text' => 'Vanuatu',
                'value' => 'Vanuatu',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/vu.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'text' => 'Malaysia',
                'value' => 'Malaysia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/my.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'text' => 'Antigua and Barbuda',
                'value' => 'Antigua and Barbuda',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ag.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'text' => 'Iran',
                'value' => 'Iran',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ir.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'text' => 'Russia',
                'value' => 'Russia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ru.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'text' => 'Kiribati',
                'value' => 'Kiribati',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ki.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'text' => 'Martinique',
                'value' => 'Martinique',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mq.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'text' => 'Bangladesh',
                'value' => 'Bangladesh',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bd.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'text' => 'Armenia',
                'value' => 'Armenia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/am.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'text' => 'Mexico',
                'value' => 'Mexico',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mx.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'text' => 'Estonia',
                'value' => 'Estonia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ee.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'text' => 'Oman',
                'value' => 'Oman',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/om.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'text' => 'United States',
                'value' => 'United States',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/us.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'text' => 'Liechtenstein',
                'value' => 'Liechtenstein',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/li.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'text' => 'Bahamas',
                'value' => 'Bahamas',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bs.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'text' => 'Benin',
                'value' => 'Benin',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bj.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'text' => 'Kosovo',
                'value' => 'Kosovo',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/xk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'text' => 'Tuvalu',
                'value' => 'Tuvalu',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tv.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'text' => 'Faroe Islands',
                'value' => 'Faroe Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/fo.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'text' => 'Cayman Islands',
                'value' => 'Cayman Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ky.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'text' => 'Egypt',
                'value' => 'Egypt',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/eg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'text' => 'Azerbaijan',
                'value' => 'Azerbaijan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/az.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'text' => 'Australia',
                'value' => 'Australia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/au.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'text' => 'Isle of Man',
                'value' => 'Isle of Man',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/im.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'text' => 'Ireland',
                'value' => 'Ireland',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ie.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'text' => 'Barbados',
                'value' => 'Barbados',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bb.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'text' => 'El Salvador',
                'value' => 'El Salvador',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sv.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'text' => 'Guatemala',
                'value' => 'Guatemala',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gt.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'text' => 'Japan',
                'value' => 'Japan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/jp.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'text' => 'Vietnam',
                'value' => 'Vietnam',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/vn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'text' => 'Northern Mariana Islands',
                'value' => 'Northern Mariana Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mp.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'text' => 'Lithuania',
                'value' => 'Lithuania',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/lt.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'text' => 'Saint Lucia',
                'value' => 'Saint Lucia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/lc.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'text' => 'Hong Kong',
                'value' => 'Hong Kong',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/hk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'text' => 'Angola',
                'value' => 'Angola',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ao.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'text' => 'Mozambique',
                'value' => 'Mozambique',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'text' => 'Botswana',
                'value' => 'Botswana',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'text' => 'Germany',
                'value' => 'Germany',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/de.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'text' => 'Syria',
                'value' => 'Syria',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sy.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'text' => 'Moldova',
                'value' => 'Moldova',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/md.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'text' => 'Saint Pierre and Miquelon',
                'value' => 'Saint Pierre and Miquelon',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'text' => 'Guernsey',
                'value' => 'Guernsey',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'text' => 'Wallis and Futuna',
                'value' => 'Wallis and Futuna',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/wf.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'text' => 'Poland',
                'value' => 'Poland',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pl.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'text' => 'Trinidad and Tobago',
                'value' => 'Trinidad and Tobago',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tt.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'text' => 'British Indian Ocean Territory',
                'value' => 'British Indian Ocean Territory',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/io.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'text' => 'Marshall Islands',
                'value' => 'Marshall Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mh.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'text' => 'Austria',
                'value' => 'Austria',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/at.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'text' => 'Kazakhstan',
                'value' => 'Kazakhstan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/kz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'text' => 'Aruba',
                'value' => 'Aruba',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/aw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'text' => 'South Africa',
                'value' => 'South Africa',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/za.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'text' => 'Denmark',
                'value' => 'Denmark',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/dk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'text' => 'Suriname',
                'value' => 'Suriname',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'text' => 'Bermuda',
                'value' => 'Bermuda',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'text' => 'Montserrat',
                'value' => 'Montserrat',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ms.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'text' => 'Ivory Coast',
                'value' => 'Ivory Coast',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ci.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'text' => 'Mauritania',
                'value' => 'Mauritania',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'text' => 'Sierra Leone',
                'value' => 'Sierra Leone',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sl.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'text' => 'Guinea',
                'value' => 'Guinea',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'text' => 'French Polynesia',
                'value' => 'French Polynesia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pf.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'text' => 'Pakistan',
                'value' => 'Pakistan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'text' => 'United States Minor Outlying Islands',
                'value' => 'United States Minor Outlying Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/um.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'text' => 'Lesotho',
                'value' => 'Lesotho',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ls.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'text' => 'Senegal',
                'value' => 'Senegal',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'text' => 'Tajikistan',
                'value' => 'Tajikistan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tj.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'text' => 'Switzerland',
                'value' => 'Switzerland',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ch.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'text' => 'Eritrea',
                'value' => 'Eritrea',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/er.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'text' => 'French Southern and Antarctic Lands',
                'value' => 'French Southern and Antarctic Lands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tf.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'text' => 'Jersey',
                'value' => 'Jersey',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/je.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'text' => 'Cambodia',
                'value' => 'Cambodia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/kh.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'text' => 'Saint Vincent and the Grenadines',
                'value' => 'Saint Vincent and the Grenadines',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/vc.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'text' => 'Sint Maarten',
                'value' => 'Sint Maarten',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sx.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'text' => 'Vatican City',
                'value' => 'Vatican City',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/va.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'text' => 'Uruguay',
                'value' => 'Uruguay',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/uy.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'text' => 'Western Sahara',
                'value' => 'Western Sahara',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/eh.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'text' => 'Cape Verde',
                'value' => 'Cape Verde',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cv.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'text' => 'Italy',
                'value' => 'Italy',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/it.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'text' => 'United Kingdom',
                'value' => 'United Kingdom',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gb.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'text' => 'Macau',
                'value' => 'Macau',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mo.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'text' => 'Guyana',
                'value' => 'Guyana',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gy.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'text' => 'Norway',
                'value' => 'Norway',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/no.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'text' => 'New Caledonia',
                'value' => 'New Caledonia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/nc.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'text' => 'South Sudan',
                'value' => 'South Sudan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ss.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'text' => 'Burkina Faso',
                'value' => 'Burkina Faso',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bf.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'text' => 'Guadeloupe',
                'value' => 'Guadeloupe',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gp.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'text' => 'Lebanon',
                'value' => 'Lebanon',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/lb.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'text' => 'Saint Kitts and Nevis',
                'value' => 'Saint Kitts and Nevis',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/kn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'text' => 'Kuwait',
                'value' => 'Kuwait',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/kw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'text' => 'South Georgia',
                'value' => 'South Georgia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gs.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'text' => 'Luxembourg',
                'value' => 'Luxembourg',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/lu.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'text' => 'Myanmar',
                'value' => 'Myanmar',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'text' => 'Israel',
                'value' => 'Israel',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/il.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'text' => 'Turkmenistan',
                'value' => 'Turkmenistan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'text' => 'Greece',
                'value' => 'Greece',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'text' => 'Monaco',
                'value' => 'Monaco',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mc.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'text' => 'Venezuela',
                'value' => 'Venezuela',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ve.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'text' => 'Republic of the Congo',
                'value' => 'Republic of the Congo',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'text' => 'Spain',
                'value' => 'Spain',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/es.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'text' => 'Norfolk Island',
                'value' => 'Norfolk Island',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/nf.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'text' => 'Dominica',
                'value' => 'Dominica',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/dm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'text' => 'Tunisia',
                'value' => 'Tunisia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'text' => 'Turkey',
                'value' => 'Turkey',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'text' => 'Colombia',
                'value' => 'Colombia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/co.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'text' => 'Comoros',
                'value' => 'Comoros',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/km.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'text' => 'Solomon Islands',
                'value' => 'Solomon Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sb.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'text' => 'Saint Barthélemy',
                'value' => 'Saint Barthélemy',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bl.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'text' => 'Uzbekistan',
                'value' => 'Uzbekistan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/uz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'text' => 'Palestine',
                'value' => 'Palestine',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ps.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'text' => 'Antarctica',
                'value' => 'Antarctica',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/aq.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'text' => 'Cuba',
                'value' => 'Cuba',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cu.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'text' => 'Gabon',
                'value' => 'Gabon',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ga.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'text' => 'Kyrgyzstan',
                'value' => 'Kyrgyzstan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/kg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'text' => 'Micronesia',
                'value' => 'Micronesia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/fm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'text' => 'Sweden',
                'value' => 'Sweden',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/se.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'text' => 'Saint Martin',
                'value' => 'Saint Martin',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mf.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'text' => 'Slovakia',
                'value' => 'Slovakia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'text' => 'DR Congo',
                'value' => 'DR Congo',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cd.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'text' => 'Montenegro',
                'value' => 'Montenegro',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/me.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'text' => 'Gibraltar',
                'value' => 'Gibraltar',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gi.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'text' => 'Somalia',
                'value' => 'Somalia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/so.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'text' => 'Sri Lanka',
                'value' => 'Sri Lanka',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/lk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'text' => 'Cyprus',
                'value' => 'Cyprus',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cy.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'text' => 'Laos',
                'value' => 'Laos',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/la.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'text' => 'Morocco',
                'value' => 'Morocco',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ma.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'text' => 'Timor-Leste',
                'value' => 'Timor-Leste',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tl.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'text' => 'Yemen',
                'value' => 'Yemen',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ye.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'text' => 'Falkland Islands',
                'value' => 'Falkland Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/fk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'text' => 'Equatorial Guinea',
                'value' => 'Equatorial Guinea',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gq.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'text' => 'Algeria',
                'value' => 'Algeria',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/dz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'text' => 'Zambia',
                'value' => 'Zambia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/zm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'text' => 'Serbia',
                'value' => 'Serbia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/rs.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'text' => 'Andorra',
                'value' => 'Andorra',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ad.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'text' => 'São Tomé and Príncipe',
                'value' => 'São Tomé and Príncipe',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/st.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'text' => 'Djibouti',
                'value' => 'Djibouti',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/dj.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'text' => 'Bulgaria',
                'value' => 'Bulgaria',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'text' => 'United States Virgin Islands',
                'value' => 'United States Virgin Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/vi.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'text' => 'Argentina',
                'value' => 'Argentina',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ar.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'text' => 'Nigeria',
                'value' => 'Nigeria',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ng.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'text' => 'Rwanda',
                'value' => 'Rwanda',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/rw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'text' => 'Saint Helena, Ascension and Tristan da Cunha',
                'value' => 'Saint Helena, Ascension and Tristan da Cunha',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sh.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'text' => 'Canada',
                'value' => 'Canada',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ca.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'text' => 'North Korea',
                'value' => 'North Korea',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/kp.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'text' => 'Åland Islands',
                'value' => 'Åland Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ax.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'text' => 'North Macedonia',
                'value' => 'North Macedonia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mk.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'text' => 'Netherlands',
                'value' => 'Netherlands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/nl.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'text' => 'Niger',
                'value' => 'Niger',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ne.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'text' => 'Singapore',
                'value' => 'Singapore',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sg.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'text' => 'Chad',
                'value' => 'Chad',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/td.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'text' => 'Curaçao',
                'value' => 'Curaçao',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'text' => 'Niue',
                'value' => 'Niue',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/nu.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'text' => 'Guinea-Bissau',
                'value' => 'Guinea-Bissau',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'text' => 'Nauru',
                'value' => 'Nauru',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/nr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'text' => 'Zimbabwe',
                'value' => 'Zimbabwe',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/zw.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'text' => 'China',
                'value' => 'China',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'text' => 'Christmas Island',
                'value' => 'Christmas Island',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cx.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'text' => 'Puerto Rico',
                'value' => 'Puerto Rico',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/pr.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'text' => 'Ethiopia',
                'value' => 'Ethiopia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/et.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'text' => 'Grenada',
                'value' => 'Grenada',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gd.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'text' => 'Finland',
                'value' => 'Finland',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/fi.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'text' => 'Turks and Caicos Islands',
                'value' => 'Turks and Caicos Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tc.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'text' => 'Burundi',
                'value' => 'Burundi',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bi.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'text' => 'Guam',
                'value' => 'Guam',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gu.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'text' => 'Jordan',
                'value' => 'Jordan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/jo.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'text' => 'Mali',
                'value' => 'Mali',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ml.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'text' => 'Ukraine',
                'value' => 'Ukraine',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ua.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'text' => 'Réunion',
                'value' => 'Réunion',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/re.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'text' => 'Svalbard and Jan Mayen',
                'value' => 'Svalbard and Jan Mayen',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sj.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
            'text' => 'Cocos (Keeling) Islands',
            'value' => 'Cocos (Keeling) Islands',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/cc.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'text' => 'Tanzania',
                'value' => 'Tanzania',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/tz.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'text' => 'Qatar',
                'value' => 'Qatar',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/qa.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'text' => 'Brazil',
                'value' => 'Brazil',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/br.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'text' => 'Sudan',
                'value' => 'Sudan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/sd.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'text' => 'Romania',
                'value' => 'Romania',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ro.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'text' => 'Anguilla',
                'value' => 'Anguilla',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ai.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'text' => 'Iraq',
                'value' => 'Iraq',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/iq.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'text' => 'Bhutan',
                'value' => 'Bhutan',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bt.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'text' => 'Honduras',
                'value' => 'Honduras',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/hn.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'text' => 'Namibia',
                'value' => 'Namibia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/na.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'text' => 'Slovenia',
                'value' => 'Slovenia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/si.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'text' => 'Haiti',
                'value' => 'Haiti',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ht.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'text' => 'Bosnia and Herzegovina',
                'value' => 'Bosnia and Herzegovina',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/ba.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'text' => 'Greenland',
                'value' => 'Greenland',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/gl.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'text' => 'Jamaica',
                'value' => 'Jamaica',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/jm.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'text' => 'Malta',
                'value' => 'Malta',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/mt.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'text' => 'Bolivia',
                'value' => 'Bolivia',
                'color' => 'N',
                'flag' => 'https://flagcdn.com/w320/bo.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}