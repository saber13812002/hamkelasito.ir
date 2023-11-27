<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('languages')->delete();

        \DB::table('languages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'text' => 'Abkhaz',
                'value' => 'ab',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'text' => 'Afar',
                'value' => 'aa',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'text' => 'Afrikaans',
                'value' => 'af',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'text' => 'Akan',
                'value' => 'ak',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'text' => 'Albanian',
                'value' => 'sq',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'text' => 'Amharic',
                'value' => 'am',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'text' => 'Arabic',
                'value' => 'ar',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'text' => 'Aragonese',
                'value' => 'an',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'text' => 'Armenian',
                'value' => 'hy',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'text' => 'Assamese',
                'value' => 'as',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'text' => 'Avaric',
                'value' => 'av',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'text' => 'Avestan',
                'value' => 'ae',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'text' => 'Aymara',
                'value' => 'ay',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'text' => 'Azerbaijani',
                'value' => 'az',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'text' => 'Bambara',
                'value' => 'bm',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'text' => 'Bashkir',
                'value' => 'ba',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'text' => 'Basque',
                'value' => 'eu',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'text' => 'Belarusian',
                'value' => 'be',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'text' => 'Bengali',
                'value' => 'bn',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'text' => 'Bihari',
                'value' => 'bh',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'text' => 'Bislama',
                'value' => 'bi',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'text' => 'Bosnian',
                'value' => 'bs',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'text' => 'Breton',
                'value' => 'br',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'text' => 'Bulgarian',
                'value' => 'bg',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'text' => 'Burmese',
                'value' => 'my',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'text' => 'Catalan; Valencian',
                'value' => 'ca',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'text' => 'Chamorro',
                'value' => 'ch',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'text' => 'Chechen',
                'value' => 'ce',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'text' => 'Chichewa; Chewa; Nyanja',
                'value' => 'ny',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'text' => 'Chinese',
                'value' => 'zh',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'text' => 'Chuvash',
                'value' => 'cv',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'text' => 'Cornish',
                'value' => 'kw',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'text' => 'Corsican',
                'value' => 'co',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'text' => 'Cree',
                'value' => 'cr',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'text' => 'Croatian',
                'value' => 'hr',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'text' => 'Czech',
                'value' => 'cs',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'text' => 'Danish',
                'value' => 'da',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'text' => 'Divehi; Dhivehi; Maldivian;',
                'value' => 'dv',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'text' => 'Dutch',
                'value' => 'nl',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'text' => 'English',
                'value' => 'en',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'text' => 'Esperanto',
                'value' => 'eo',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'text' => 'Estonian',
                'value' => 'et',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'text' => 'Ewe',
                'value' => 'ee',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'text' => 'Faroese',
                'value' => 'fo',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'text' => 'Fijian',
                'value' => 'fj',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'text' => 'Finnish',
                'value' => 'fi',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'text' => 'French',
                'value' => 'fr',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'text' => 'Fula; Fulah; Pulaar; Pular',
                'value' => 'ff',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'text' => 'Galician',
                'value' => 'gl',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'text' => 'Georgian',
                'value' => 'ka',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'text' => 'German',
                'value' => 'de',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'text' => 'Greek, Modern',
                'value' => 'el',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'text' => 'Guaraní',
                'value' => 'gn',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'text' => 'Gujarati',
                'value' => 'gu',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'text' => 'Haitian; Haitian Creole',
                'value' => 'ht',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'text' => 'Hausa',
                'value' => 'ha',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
            'text' => 'Hebrew (modern)',
                'value' => 'he',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'text' => 'Herero',
                'value' => 'hz',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'text' => 'Hindi',
                'value' => 'hi',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'text' => 'Hiri Motu',
                'value' => 'ho',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'text' => 'Hungarian',
                'value' => 'hu',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 62,
                'text' => 'Interlingua',
                'value' => 'ia',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 63,
                'text' => 'Indonesian',
                'value' => 'id',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'text' => 'Interlingue',
                'value' => 'ie',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'text' => 'Irish',
                'value' => 'ga',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 66,
                'text' => 'Igbo',
                'value' => 'ig',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 67,
                'text' => 'Inupiaq',
                'value' => 'ik',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 68,
                'text' => 'Ido',
                'value' => 'io',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'text' => 'Icelandic',
                'value' => 'is',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'text' => 'Italian',
                'value' => 'it',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'text' => 'Inuktitut',
                'value' => 'iu',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array (
                'id' => 72,
                'text' => 'Japanese',
                'value' => 'ja',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'text' => 'Javanese',
                'value' => 'jv',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 74,
                'text' => 'Kalaallisut, Greenlandic',
                'value' => 'kl',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 75,
                'text' => 'Kannada',
                'value' => 'kn',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 76,
                'text' => 'Kanuri',
                'value' => 'kr',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 77,
                'text' => 'Kashmiri',
                'value' => 'ks',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 78,
                'text' => 'Kazakh',
                'value' => 'kk',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 79,
                'text' => 'Khmer',
                'value' => 'km',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 80,
                'text' => 'Kikuyu, Gikuyu',
                'value' => 'ki',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 81,
                'text' => 'Kinyarwanda',
                'value' => 'rw',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 82,
                'text' => 'Kirghiz, Kyrgyz',
                'value' => 'ky',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 83,
                'text' => 'Komi',
                'value' => 'kv',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 84,
                'text' => 'Kongo',
                'value' => 'kg',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 85,
                'text' => 'Korean',
                'value' => 'ko',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 86,
                'text' => 'Kurdish',
                'value' => 'ku',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 87,
                'text' => 'Kwanyama, Kuanyama',
                'value' => 'kj',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 88,
                'text' => 'Latin',
                'value' => 'la',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 89,
                'text' => 'Luxembourgish, Letzeburgesch',
                'value' => 'lb',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 90,
                'text' => 'Luganda',
                'value' => 'lg',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 91,
                'text' => 'Limburgish, Limburgan, Limburger',
                'value' => 'li',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 92,
                'text' => 'Lingala',
                'value' => 'ln',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 93,
                'text' => 'Lao',
                'value' => 'lo',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 94,
                'text' => 'Lithuanian',
                'value' => 'lt',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 95,
                'text' => 'Luba-Katanga',
                'value' => 'lu',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 96,
                'text' => 'Latvian',
                'value' => 'lv',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 97,
                'text' => 'Manx',
                'value' => 'gv',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 98,
                'text' => 'Macedonian',
                'value' => 'mk',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 99,
                'text' => 'Malagasy',
                'value' => 'mg',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 100,
                'text' => 'Malay',
                'value' => 'ms',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 101,
                'text' => 'Malayalam',
                'value' => 'ml',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 102,
                'text' => 'Maltese',
                'value' => 'mt',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 103,
                'text' => 'Māori',
                'value' => 'mi',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 104,
            'text' => 'Marathi (Marāṭhī)',
                'value' => 'mr',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 105,
                'text' => 'Marshallese',
                'value' => 'mh',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 106,
                'text' => 'Mongolian',
                'value' => 'mn',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 107,
                'text' => 'Nauru',
                'value' => 'na',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 108,
                'text' => 'Navajo, Navaho',
                'value' => 'nv',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 109,
                'text' => 'Norwegian Bokmål',
                'value' => 'nb',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'text' => 'North Ndebele',
                'value' => 'nd',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 111,
                'text' => 'Nepali',
                'value' => 'ne',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 112,
                'text' => 'Ndonga',
                'value' => 'ng',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 113,
                'text' => 'Norwegian Nynorsk',
                'value' => 'nn',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 114,
                'text' => 'Norwegian',
                'value' => 'no',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 115,
                'text' => 'Nuosu',
                'value' => 'ii',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 116,
                'text' => 'South Ndebele',
                'value' => 'nr',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 117,
                'text' => 'Occitan',
                'value' => 'oc',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 118,
                'text' => 'Ojibwe, Ojibwa',
                'value' => 'oj',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 119,
                'text' => 'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic',
                'value' => 'cu',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 120,
                'text' => 'Oromo',
                'value' => 'om',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 121,
                'text' => 'Oriya',
                'value' => 'or',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 122,
                'text' => 'Ossetian, Ossetic',
                'value' => 'os',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 123,
                'text' => 'Panjabi, Punjabi',
                'value' => 'pa',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 124,
                'text' => 'Pāli',
                'value' => 'pi',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 125,
                'text' => 'Persian',
                'value' => 'fa',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 126,
                'text' => 'Polish',
                'value' => 'pl',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 127,
                'text' => 'Pashto, Pushto',
                'value' => 'ps',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 128,
                'text' => 'Portuguese',
                'value' => 'pt',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 129,
                'text' => 'Quechua',
                'value' => 'qu',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 130,
                'text' => 'Romansh',
                'value' => 'rm',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 131,
                'text' => 'Kirundi',
                'value' => 'rn',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 132,
                'text' => 'Romanian, Moldavian, Moldovan',
                'value' => 'ro',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 133,
                'text' => 'Russian',
                'value' => 'ru',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 134,
            'text' => 'Sanskrit (Saṁskṛta)',
                'value' => 'sa',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 135,
                'text' => 'Sardinian',
                'value' => 'sc',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 136,
                'text' => 'Sindhi',
                'value' => 'sd',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 137,
                'text' => 'Northern Sami',
                'value' => 'se',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 138,
                'text' => 'Samoan',
                'value' => 'sm',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 139,
                'text' => 'Sango',
                'value' => 'sg',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 140,
                'text' => 'Serbian',
                'value' => 'sr',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 141,
                'text' => 'Scottish Gaelic; Gaelic',
                'value' => 'gd',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 142,
                'text' => 'Shona',
                'value' => 'sn',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 143,
                'text' => 'Sinhala, Sinhalese',
                'value' => 'si',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 144,
                'text' => 'Slovak',
                'value' => 'sk',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 145,
                'text' => 'Slovene',
                'value' => 'sl',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 146,
                'text' => 'Somali',
                'value' => 'so',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 147,
                'text' => 'Southern Sotho',
                'value' => 'st',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 148,
                'text' => 'Spanish; Castilian',
                'value' => 'es',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 149,
                'text' => 'Sundanese',
                'value' => 'su',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 150,
                'text' => 'Swahili',
                'value' => 'sw',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 151,
                'text' => 'Swati',
                'value' => 'ss',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 152,
                'text' => 'Swedish',
                'value' => 'sv',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 153,
                'text' => 'Tamil',
                'value' => 'ta',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 154,
                'text' => 'Telugu',
                'value' => 'te',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 155,
                'text' => 'Tajik',
                'value' => 'tg',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 156,
                'text' => 'Thai',
                'value' => 'th',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 157,
                'text' => 'Tigrinya',
                'value' => 'ti',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 158,
                'text' => 'Tibetan Standard, Tibetan, Central',
                'value' => 'bo',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 159,
                'text' => 'Turkmen',
                'value' => 'tk',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 160,
                'text' => 'Tagalog',
                'value' => 'tl',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 161,
                'text' => 'Tswana',
                'value' => 'tn',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 162,
            'text' => 'Tonga (Tonga Islands)',
                'value' => 'to',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 163,
                'text' => 'Turkish',
                'value' => 'tr',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 164,
                'text' => 'Tsonga',
                'value' => 'ts',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 165,
                'text' => 'Tatar',
                'value' => 'tt',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 166,
                'text' => 'Twi',
                'value' => 'tw',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 167,
                'text' => 'Tahitian',
                'value' => 'ty',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 168,
                'text' => 'Uighur, Uyghur',
                'value' => 'ug',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 169,
                'text' => 'Ukrainian',
                'value' => 'uk',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 170,
                'text' => 'Urdu',
                'value' => 'ur',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 171,
                'text' => 'Uzbek',
                'value' => 'uz',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 172,
                'text' => 'Venda',
                'value' => 've',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 173,
                'text' => 'Vietnamese',
                'value' => 'vi',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 174,
                'text' => 'Volapük',
                'value' => 'vo',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 175,
                'text' => 'Walloon',
                'value' => 'wa',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 176,
                'text' => 'Welsh',
                'value' => 'cy',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 177,
                'text' => 'Wolof',
                'value' => 'wo',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 178,
                'text' => 'Western Frisian',
                'value' => 'fy',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 179,
                'text' => 'Xhosa',
                'value' => 'xh',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 180,
                'text' => 'Yiddish',
                'value' => 'yi',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 181,
                'text' => 'Yoruba',
                'value' => 'yo',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 182,
                'text' => 'Zhuang, Chuang',
                'value' => 'za',
                'color' => '',
                'flag' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
