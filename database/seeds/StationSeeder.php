<?php

use Illuminate\Database\Seeder;
use App\Station;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id: 1
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '1',
            'kanji' => '愛山',
            'kana' => 'あいざん',
            'romaji' => 'Aizan',
        ]);
        // id: 2
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '1',
            'kanji' => '愛別',
            'kana' => 'あいべつ',
            'romaji' => 'Aibetsu',
        ]);
        // id: 3
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '1',
            'kanji' => '安足間',
            'kana' => 'あんたろま',
            'romaji' => 'Antaroma',
        ]);
        // id: 4
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '1',
            'kanji' => '中愛別',
            'kana' => 'なかあいべつ',
            'romaji' => 'Naka-Aibetsu',
        ]);
        // id: 5
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '2',
            'kanji' => '赤平',
            'kana' => 'あかびら',
            'romaji' => 'Akabira',
        ]);
        // id: 6
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '2',
            'kanji' => '平岸',
            'kana' => 'ひらぎし',
            'romaji' => 'Hiragishi',
        ]);
        // id: 7
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '2',
            'kanji' => '茂尻',
            'kana' => 'もしり',
            'romaji' => 'Moshiri',
        ]);
        // id: 8
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '旭川',
            'kana' => 'あさひかわ',
            'romaji' => 'Asahikawa',
        ]);
        // id: 9
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '旭川四条',
            'kana' => 'あさひかわよじょう',
            'romaji' => 'Asahikawayojō',
        ]);
        // id: 10
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '伊納',
            'kana' => 'いのう',
            'romaji' => 'Inō',
        ]);
        // id: 11
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '神楽岡',
            'kana' => 'かぐらおか',
            'romaji' => 'Kaguraoka',
        ]);
        // id: 12
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '北永山',
            'kana' => 'きたながやま',
            'romaji' => 'Kita-Nagayama',
        ]);
        // id: 13
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '北日ノ出',
            'kana' => 'きたひので',
            'romaji' => 'Kita-Hinode',
        ]);
        // id: 14
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '桜岡',
            'kana' => 'さくらおか',
            'romaji' => 'Sakuraoka',
        ]);
        // id: 15
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '新旭川',
            'kana' => 'しんあさひかわ',
            'romaji' => 'Shin-Asahikawa',
        ]);
        // id: 16
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '近文',
            'kana' => 'ちかぶみ',
            'romaji' => 'Chikabumi',
        ]);
        // id: 17
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '千代ヶ岡',
            'kana' => 'ちよがおか',
            'romaji' => 'Chiyogaoka',
        ]);
        // id: 18
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '永山',
            'kana' => 'ながやま',
            'romaji' => 'Nagayama',
        ]);
        // id: 19
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '西神楽',
            'kana' => 'にしかぐら',
            'romaji' => 'Nishi-Kagura',
        ]);
        // id: 20
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '西御料',
            'kana' => 'にしごりょう',
            'romaji' => 'Nishi-Goryō',
        ]);
        // id: 21
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '西聖和',
            'kana' => 'にしせいわ',
            'romaji' => 'Nishi-Seiwa',
        ]);
        // id: 22
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '西瑞穂',
            'kana' => 'にしみずほ',
            'romaji' => 'Nishi-Mizuho',
        ]);
        // id: 23
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '東旭川',
            'kana' => 'ひがしあさひかわ',
            'romaji' => 'Higashi-Asahikawa',
        ]);
        // id: 24
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '緑が丘',
            'kana' => 'みどりがおか',
            'romaji' => 'Midorigaoka',
        ]);
        // id: 25
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '3',
            'kanji' => '南永山',
            'kana' => 'みなみながやま',
            'romaji' => 'Minami-Nagayama',
        ]);
        // id: 26
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '4',
            'kanji' => '芦別',
            'kana' => 'あしべつ',
            'romaji' => 'Ashibetsu',
        ]);
        // id: 27
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '4',
            'kanji' => '上芦別',
            'kana' => 'かみあしべつ',
            'romaji' => 'Kami-Ashibetsu',
        ]);
        // id: 28
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '4',
            'kanji' => '野花南',
            'kana' => 'のかなん',
            'romaji' => 'Nokanan',
        ]);
        // id: 29
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '5',
            'kanji' => '厚岸',
            'kana' => 'あっけし',
            'romaji' => 'Akkeshi',
        ]);
        // id: 30
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '5',
            'kanji' => '糸魚沢',
            'kana' => 'いといざわ',
            'romaji' => 'Itoizawa',
        ]);
        // id: 31
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '5',
            'kanji' => '尾幌',
            'kana' => 'おぼろ',
            'romaji' => 'Oboro',
        ]);
        // id: 32
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '5',
            'kanji' => '上尾幌',
            'kana' => 'かみおぼろ',
            'romaji' => 'Kami-Oboro',
        ]);
        // id: 33
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '5',
            'kanji' => '門静',
            'kana' => 'もんしず',
            'romaji' => 'Monshizu',
        ]);
        // id: 34
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '6',
            'kanji' => '浜厚真',
            'kana' => 'はまあつま',
            'romaji' => 'Hama-Atsuma',
        ]);
        // id: 35
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '7',
            'kanji' => '網走',
            'kana' => 'あばしり',
            'romaji' => 'Abashiri',
        ]);
        // id: 36
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '7',
            'kanji' => '桂台',
            'kana' => 'かつらだい',
            'romaji' => 'Katsuradai',
        ]);
        // id: 37
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '7',
            'kanji' => '北浜',
            'kana' => 'きたはま',
            'romaji' => 'Kitahama',
        ]);
        // id: 38
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '7',
            'kanji' => '鱒浦',
            'kana' => 'ますうら',
            'romaji' => 'Masuura',
        ]);
        // id: 39
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '7',
            'kanji' => '藻琴',
            'kana' => 'もこと',
            'romaji' => 'Mokoto',
        ]);
        // id: 40
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '7',
            'kanji' => '呼人',
            'kana' => 'よびと',
            'romaji' => 'Yobito',
        ]);
        // id: 41
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '8',
            'kanji' => '安平',
            'kana' => 'あびら',
            'romaji' => 'Abira',
        ]);
        // id: 42
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '8',
            'kanji' => '追分',
            'kana' => 'おいわけ',
            'romaji' => 'Oiwake',
        ]);
        // id: 43
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '8',
            'kanji' => '遠浅',
            'kana' => 'とあさ',
            'romaji' => 'Toasa',
        ]);
        // id: 44
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '8',
            'kanji' => '早来',
            'kana' => 'はやきた',
            'romaji' => 'Hayakita',
        ]);
        // id: 45
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '9',
            'kanji' => '池田',
            'kana' => 'いけだ',
            'romaji' => 'Ikeda',
        ]);
        // id: 46
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '9',
            'kanji' => '利別',
            'kana' => 'としべつ',
            'romaji' => 'Toshibetsu',
        ]);
        // id: 47
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '10',
            'kanji' => '岩見沢',
            'kana' => 'いわみざわ',
            'romaji' => 'Iwamizawa',
        ]);
        // id: 48
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '10',
            'kanji' => '上幌向',
            'kana' => 'かみほろむい',
            'romaji' => 'Kami-Horomui',
        ]);
        // id: 49
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '10',
            'kanji' => '栗丘',
            'kana' => 'くりおか',
            'romaji' => 'Kurioka',
        ]);
        // id: 50
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '10',
            'kanji' => '栗沢',
            'kana' => 'くりさわ',
            'romaji' => 'Kurisawa',
        ]);
        // id: 51
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '10',
            'kanji' => '志文',
            'kana' => 'しぶん',
            'romaji' => 'Shibun',
        ]);
        // id: 52
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '10',
            'kanji' => '幌向',
            'kana' => 'ほろむい',
            'romaji' => 'Horomui',
        ]);
        // id: 53
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '11',
            'kanji' => '浦河',
            'kana' => 'うらかわ',
            'romaji' => 'Urakawa',
        ]);
        // id: 54
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '11',
            'kanji' => '絵笛',
            'kana' => 'えふえ',
            'romaji' => 'Efue',
        ]);
        // id: 55
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '11',
            'kanji' => '荻伏',
            'kana' => 'おぎふし',
            'romaji' => 'Ogifushi',
        ]);
        // id: 56
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '11',
            'kanji' => '東町',
            'kana' => 'ひがしちょう',
            'romaji' => 'Higashichō',
        ]);
        // id: 57
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '11',
            'kanji' => '日高幌別',
            'kana' => 'ひだかほろべつ',
            'romaji' => 'Hidaka-Horobetsu',
        ]);
        // id: 58
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '12',
            'kanji' => '厚内',
            'kana' => 'あつない',
            'romaji' => 'Atsunai',
        ]);
        // id: 59
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '12',
            'kanji' => '浦幌',
            'kana' => 'うらほろ',
            'romaji' => 'Urahoro',
        ]);
        // id: 60
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '12',
            'kanji' => '新吉野',
            'kana' => 'しんよしの',
            'romaji' => 'Shin-Yoshino',
        ]);
        // id: 61
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '13',
            'kanji' => '恵庭',
            'kana' => 'えにわ',
            'romaji' => 'Eniwa',
        ]);
        // id: 62
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '13',
            'kanji' => 'サッポロビール庭園',
            'kana' => 'さっぽろびーるていえん',
            'romaji' => 'Sapporo-beer-Teien',
        ]);
        // id: 63
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '13',
            'kanji' => '島松',
            'kana' => 'しままつ',
            'romaji' => 'Shimamatsu',
        ]);
        // id: 64
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '13',
            'kanji' => '恵み野',
            'kana' => 'めぐみの',
            'romaji' => 'Megumino',
        ]);
        // id: 65
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '14',
            'kanji' => '江別',
            'kana' => 'えべつ',
            'romaji' => 'Ebetsu',
        ]);
        // id: 66
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '14',
            'kanji' => '大麻',
            'kana' => 'おおあさ',
            'romaji' => 'Ōasa',
        ]);
        // id: 67
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '14',
            'kanji' => '高砂',
            'kana' => 'たかさご',
            'romaji' => 'Takasago',
        ]);
        // id: 68
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '14',
            'kanji' => '豊幌',
            'kana' => 'とよほろ',
            'romaji' => 'Toyohoro',
        ]);
        // id: 69
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '14',
            'kanji' => '野幌',
            'kana' => 'のっぽろ',
            'romaji' => 'Nopporo',
        ]);
        // id: 70
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '15',
            'kanji' => '生田原',
            'kana' => 'いくたはら',
            'romaji' => 'Ikutahara',
        ]);
        // id: 71
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '15',
            'kanji' => '生野',
            'kana' => 'いくの',
            'romaji' => 'Ikuno',
        ]);
        // id: 72
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '15',
            'kanji' => '遠軽',
            'kana' => 'えんがる',
            'romaji' => 'Engaru',
        ]);
        // id: 73
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '15',
            'kanji' => '白滝',
            'kana' => 'しらたき',
            'romaji' => 'Shirataki',
        ]);
        // id: 74
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '15',
            'kanji' => '瀬戸瀬',
            'kana' => 'せとせ',
            'romaji' => 'Setose',
        ]);
        // id: 75
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '15',
            'kanji' => '丸瀬布',
            'kana' => 'まるせっぷ',
            'romaji' => 'Maruseppu',
        ]);
        // id: 76
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '15',
            'kanji' => '安国',
            'kana' => 'やすくに',
            'romaji' => 'Yasukuni',
        ]);
        // id: 77
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '16',
            'kanji' => '西女満別',
            'kana' => 'にしめまんべつ',
            'romaji' => 'Nishi-Memambetsu',
        ]);
        // id: 78
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '16',
            'kanji' => '女満別',
            'kana' => 'めまんべつ',
            'romaji' => 'Memambetsu',
        ]);
        // id: 79
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '17',
            'kanji' => '長万部',
            'kana' => 'おしゃまんべ',
            'romaji' => 'Oshamambe',
        ]);
        // id: 80
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '17',
            'kanji' => '国縫',
            'kana' => 'くんぬい',
            'romaji' => 'Kunnui',
        ]);
        // id: 81
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '17',
            'kanji' => '静狩',
            'kana' => 'しずかり',
            'romaji' => 'Shizukari',
        ]);
        // id: 82
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '17',
            'kanji' => '中ノ沢',
            'kana' => 'なかのさわ',
            'romaji' => 'Nakanosawa',
        ]);
        // id: 83
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '17',
            'kanji' => '二股',
            'kana' => 'ふたまた',
            'romaji' => 'Futamata',
        ]);
        // id: 84
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '18',
            'kanji' => '朝里',
            'kana' => 'あさり',
            'romaji' => 'Asari',
        ]);
        // id: 85
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '18',
            'kanji' => '小樽',
            'kana' => 'おたる',
            'romaji' => 'Otaru',
        ]);
        // id: 86
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '18',
            'kanji' => '小樽築港',
            'kana' => 'おたるちっこう',
            'romaji' => 'Otaruchikkō',
        ]);
        // id: 87
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '18',
            'kanji' => '塩谷',
            'kana' => 'しおや',
            'romaji' => 'Shioya',
        ]);
        // id: 88
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '18',
            'kanji' => '銭函',
            'kana' => 'ぜにばこ',
            'romaji' => 'Zenibako',
        ]);
        // id: 89
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '18',
            'kanji' => '南小樽',
            'kana' => 'みなみおたる',
            'romaji' => 'Minami-Otaru',
        ]);
        // id: 90
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '18',
            'kanji' => '蘭島',
            'kana' => 'らんしま',
            'romaji' => 'Ranshima',
        ]);
        // id: 91
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '19',
            'kanji' => '筬島',
            'kana' => 'おさしま',
            'romaji' => 'Osashima',
        ]);
        // id: 92
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '19',
            'kanji' => '音威子府',
            'kana' => 'おといねっぷ',
            'romaji' => 'Otoineppu',
        ]);
        // id: 93
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '19',
            'kanji' => '咲来',
            'kana' => 'さっくる',
            'romaji' => 'Sakkuru',
        ]);
        // id: 94
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '19',
            'kanji' => '天塩川温泉',
            'kana' => 'てしおがわおんせん',
            'romaji' => 'Teshiogawa-Onsen',
        ]);
        // id: 95
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '20',
            'kanji' => '帯広',
            'kana' => 'おびひろ',
            'romaji' => 'Obihiro',
        ]);
        // id: 96
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '20',
            'kanji' => '西帯広',
            'kana' => 'にしおびひろ',
            'romaji' => 'Nishi-Obihiro',
        ]);
        // id: 97
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '20',
            'kanji' => '柏林台',
            'kana' => 'はくりんだい',
            'romaji' => 'Hakurindai',
        ]);
        // id: 98
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '21',
            'kanji' => '上川',
            'kana' => 'かみかわ',
            'romaji' => 'Kamikawa',
        ]);
        // id: 99
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '21',
            'kanji' => '東雲',
            'kana' => 'とううん',
            'romaji' => 'Tōun',
        ]);
        // id: 100
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '22',
            'kanji' => '上富良野',
            'kana' => 'かみふらの',
            'romaji' => 'Kami-Furano',
        ]);
        // id: 101
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '23',
            'kanji' => '木古内',
            'kana' => 'きこない',
            'romaji' => 'Kikonai',
        ]);
        // id: 102
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '24',
            'kanji' => '北広島',
            'kana' => 'きたひろしま',
            'romaji' => 'Kita-Hiroshima',
        ]);
        // id: 103
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '相内',
            'kana' => 'あいのない',
            'romaji' => 'Ainonai',
        ]);
        // id: 104
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '愛し野',
            'kana' => 'いとしの',
            'romaji' => 'Itoshino',
        ]);
        // id: 105
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '北見',
            'kana' => 'きたみ',
            'romaji' => 'Kitami',
        ]);
        // id: 106
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '端野',
            'kana' => 'たんの',
            'romaji' => 'Tanno',
        ]);
        // id: 107
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '西北見',
            'kana' => 'にしきたみ',
            'romaji' => 'Nishi-Kitami',
        ]);
        // id: 108
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '西留辺蘂',
            'kana' => 'にしるべしべ',
            'romaji' => 'Nishi-Rubeshibe',
        ]);
        // id: 109
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '柏陽',
            'kana' => 'はくよう',
            'romaji' => 'Hakuyō',
        ]);
        // id: 110
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '緋牛内',
            'kana' => 'ひうしない',
            'romaji' => 'Hiushinai',
        ]);
        // id: 111
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '東相内',
            'kana' => 'ひがしあいのない',
            'romaji' => 'Higashi-Ainonai',
        ]);
        // id: 112
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '25',
            'kanji' => '留辺蘂',
            'kana' => 'るべしべ',
            'romaji' => 'Rubeshibe',
        ]);
        // id: 113
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '26',
            'kanji' => '小沢',
            'kana' => 'こざわ',
            'romaji' => 'Kozawa',
        ]);
        // id: 114
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '27',
            'kanji' => '清里町',
            'kana' => 'きよさとちょう',
            'romaji' => 'Kiyosatochō',
        ]);
        // id: 115
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '27',
            'kanji' => '札弦',
            'kana' => 'さっつる',
            'romaji' => 'Sattsuru',
        ]);
        // id: 116
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '27',
            'kanji' => '緑',
            'kana' => 'みどり',
            'romaji' => 'Midori',
        ]);
        // id: 117
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '28',
            'kanji' => '大楽毛',
            'kana' => 'おたのしけ',
            'romaji' => 'Otanoshike',
        ]);
        // id: 118
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '28',
            'kanji' => '音別',
            'kana' => 'おんべつ',
            'romaji' => 'Ombetsu',
        ]);
        // id: 119
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '28',
            'kanji' => '釧路',
            'kana' => 'くしろ',
            'romaji' => 'Kushiro',
        ]);
        // id: 120
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '28',
            'kanji' => '尺別',
            'kana' => 'しゃくべつ',
            'romaji' => 'Shakubetsu',
        ]);
        // id: 121
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '28',
            'kanji' => '新大楽毛',
            'kana' => 'しんおたのしけ',
            'romaji' => 'Shin-Otanoshike',
        ]);
        // id: 122
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '28',
            'kanji' => '新富士',
            'kana' => 'しんふじ',
            'romaji' => 'Shin-Fuji',
        ]);
        // id: 123
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '28',
            'kanji' => '東釧路',
            'kana' => 'ひがしくしろ',
            'romaji' => 'Higashi-Kushiro',
        ]);
        // id: 124
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '28',
            'kanji' => '武佐',
            'kana' => 'むさ',
            'romaji' => 'Musa',
        ]);
        // id: 125
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '29',
            'kanji' => '釧路湿原',
            'kana' => 'くしろしつげん',
            'romaji' => 'Kushiroshitsugen',
        ]);
        // id: 126
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '29',
            'kanji' => '遠矢',
            'kana' => 'とおや',
            'romaji' => 'Tōya',
        ]);
        // id: 127
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '29',
            'kanji' => '別保',
            'kana' => 'べっぽ',
            'romaji' => 'Beppo',
        ]);
        // id: 128
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '29',
            'kanji' => '細岡',
            'kana' => 'ほそおか',
            'romaji' => 'Hosooka',
        ]);
        // id: 129
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '30',
            'kanji' => '倶知安',
            'kana' => 'くっちゃん',
            'romaji' => 'Kutchan',
        ]);
        // id: 130
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '30',
            'kanji' => '比羅夫',
            'kana' => 'ひらふ',
            'romaji' => 'Hirafu',
        ]);
        // id: 131
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '31',
            'kanji' => '栗山',
            'kana' => 'くりやま',
            'romaji' => 'Kuriyama',
        ]);
        // id: 132
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '32',
            'kanji' => '黒松内',
            'kana' => 'くろまつない',
            'romaji' => 'Kuromatsunai',
        ]);
        // id: 133
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '32',
            'kanji' => '熱郛',
            'kana' => 'ねっぷ',
            'romaji' => 'Neppu',
        ]);
        // id: 134
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '33',
            'kanji' => '北剣淵',
            'kana' => 'きたけんぶち',
            'romaji' => 'Kita-Kembuchi',
        ]);
        // id: 135
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '33',
            'kanji' => '剣淵',
            'kana' => 'けんぶち',
            'romaji' => 'Kembuchi',
        ]);
        // id: 136
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '33',
            'kanji' => '東六線',
            'kana' => 'ひがしろくせん',
            'romaji' => 'Higashi-Rokusen',
        ]);
        // id: 137
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '34',
            'kanji' => '原生花園(臨)',
            'kana' => 'げんせいかえん',
            'romaji' => 'Genseikaen',
        ]);
        // id: 138
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '34',
            'kanji' => '浜小清水',
            'kana' => 'はまこしみず',
            'romaji' => 'Hama-Koshimizu',
        ]);
        // id: 139
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '34',
            'kanji' => '止別',
            'kana' => 'やむべつ',
            'romaji' => 'Yamubetsu',
        ]);
        // id: 140
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => 'あいの里教育大',
            'kana' => 'あいのさときょういくだい',
            'romaji' => 'Ainosato-Kyōikudai',
        ]);
        // id: 141
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => 'あいの里公園',
            'kana' => 'あいのさとこうえん',
            'romaji' => 'Ainosato-Kōen',
        ]);
        // id: 142
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '厚別',
            'kana' => 'あつべつ',
            'romaji' => 'Atsubetsu',
        ]);
        // id: 143
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '稲積公園',
            'kana' => 'いなづみこうえん',
            'romaji' => 'Inazumikōen',
        ]);
        // id: 144
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '稲穂',
            'kana' => 'いなほ',
            'romaji' => 'Inaho',
        ]);
        // id: 145
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '上野幌',
            'kana' => 'かみのっぽろ',
            'romaji' => 'Kami-Nopporo',
        ]);
        // id: 146
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '琴似',
            'kana' => 'ことに',
            'romaji' => 'Kotoni',
        ]);
        // id: 147
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '札幌',
            'kana' => 'さっぽろ',
            'romaji' => 'Sapporo',
        ]);
        // id: 148
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '篠路',
            'kana' => 'しのろ',
            'romaji' => 'Shinoro',
        ]);
        // id: 149
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '白石',
            'kana' => 'しろいし',
            'romaji' => 'Shiroishi',
        ]);
        // id: 150
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '新川',
            'kana' => 'しんかわ',
            'romaji' => 'Shinkawa',
        ]);
        // id: 151
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '新琴似',
            'kana' => 'しんことに',
            'romaji' => 'Shin-Kotoni',
        ]);
        // id: 152
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '新札幌',
            'kana' => 'しんさっぽろ',
            'romaji' => 'Shin-Sapporo',
        ]);
        // id: 153
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '森林公園',
            'kana' => 'しんりんこうえん',
            'romaji' => 'Shinrinkōen',
        ]);
        // id: 154
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '桑園',
            'kana' => 'そうえん',
            'romaji' => 'Sōen',
        ]);
        // id: 155
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '太平',
            'kana' => 'たいへい',
            'romaji' => 'Taihei',
        ]);
        // id: 156
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '拓北',
            'kana' => 'たくほく',
            'romaji' => 'Takuhoku',
        ]);
        // id: 157
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '手稲',
            'kana' => 'ていね',
            'romaji' => 'Teine',
        ]);
        // id: 158
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '苗穂',
            'kana' => 'なえぼ',
            'romaji' => 'Naebo',
        ]);
        // id: 159
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '八軒',
            'kana' => 'はちけん',
            'romaji' => 'Hachiken',
        ]);
        // id: 160
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '発寒',
            'kana' => 'はっさむ',
            'romaji' => 'Hassamu',
        ]);
        // id: 161
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '発寒中央',
            'kana' => 'はっさむちゅうおう',
            'romaji' => 'Hassamuchūō',
        ]);
        // id: 162
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '平和',
            'kana' => 'へいわ',
            'romaji' => 'Heiwa',
        ]);
        // id: 163
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '星置',
            'kana' => 'ほしおき',
            'romaji' => 'Hoshioki',
        ]);
        // id: 164
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => 'ほしみ',
            'kana' => 'ほしみ',
            'romaji' => 'Hoshimi',
        ]);
        // id: 165
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '35',
            'kanji' => '百合が原',
            'kana' => 'ゆりがはら',
            'romaji' => 'Yurigahara',
        ]);
        // id: 166
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '36',
            'kanji' => '鵜苫',
            'kana' => 'うとま',
            'romaji' => 'Utoma',
        ]);
        // id: 167
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '36',
            'kanji' => '様似',
            'kana' => 'さまに',
            'romaji' => 'Samani',
        ]);
        // id: 168
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '36',
            'kanji' => '西様似',
            'kana' => 'にしさまに',
            'romaji' => 'Nishi-Samani',
        ]);
        // id: 169
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '37',
            'kanji' => '鹿部',
            'kana' => 'しかべ',
            'romaji' => 'Shikabe',
        ]);
        // id: 170
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '38',
            'kanji' => '磯分内',
            'kana' => 'いそぶんない',
            'romaji' => 'Isobunnai',
        ]);
        // id: 171
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '38',
            'kanji' => '茅沼',
            'kana' => 'かやぬま',
            'romaji' => 'Kayanuma',
        ]);
        // id: 172
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '38',
            'kanji' => '標茶',
            'kana' => 'しべちゃ',
            'romaji' => 'Shibecha',
        ]);
        // id: 173
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '38',
            'kanji' => '塘路',
            'kana' => 'とうろ',
            'romaji' => 'Tōro',
        ]);
        // id: 174
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '39',
            'kanji' => '士別',
            'kana' => 'しべつ',
            'romaji' => 'Shibetsu',
        ]);
        // id: 175
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '39',
            'kanji' => '下士別',
            'kana' => 'しもしべつ',
            'romaji' => 'Shimo-Shibetsu',
        ]);
        // id: 176
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '39',
            'kanji' => '多寄',
            'kana' => 'たよろ',
            'romaji' => 'Tayoro',
        ]);
        // id: 177
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '39',
            'kanji' => '瑞穂',
            'kana' => 'みずほ',
            'romaji' => 'Mizuho',
        ]);
        // id: 178
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '40',
            'kanji' => '十勝清水',
            'kana' => 'とかちしみず',
            'romaji' => 'Tokachi-Shimizu',
        ]);
        // id: 179
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '40',
            'kanji' => '御影',
            'kana' => 'みかげ',
            'romaji' => 'Mikage',
        ]);
        // id: 180
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '41',
            'kanji' => '占冠',
            'kana' => 'しむかっぷ',
            'romaji' => 'Shimukappu',
        ]);
        // id: 181
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '41',
            'kanji' => 'トマム',
            'kana' => 'とまむ',
            'romaji' => 'Tomamu',
        ]);
        // id: 182
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '42',
            'kanji' => '知床斜里',
            'kana' => 'しれとこしゃり',
            'romaji' => 'Shiretoko-Shari',
        ]);
        // id: 183
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '42',
            'kanji' => '中斜里',
            'kana' => 'なかしゃり',
            'romaji' => 'Naka-Shari',
        ]);
        // id: 184
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '42',
            'kanji' => '南斜里',
            'kana' => 'みなみしゃり',
            'romaji' => 'Minami-Shari',
        ]);
        // id: 185
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '43',
            'kanji' => '北吉原',
            'kana' => 'きたよしはら',
            'romaji' => 'Kita-Yoshihara',
        ]);
        // id: 186
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '43',
            'kanji' => '虎杖浜',
            'kana' => 'こじょうはま',
            'romaji' => 'Kojōhama',
        ]);
        // id: 187
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '43',
            'kanji' => '社台',
            'kana' => 'しゃだい',
            'romaji' => 'Shadai',
        ]);
        // id: 188
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '43',
            'kanji' => '白老',
            'kana' => 'しらおい',
            'romaji' => 'Shiraoi',
        ]);
        // id: 189
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '43',
            'kanji' => '竹浦',
            'kana' => 'たけうら',
            'romaji' => 'Takeura',
        ]);
        // id: 190
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '43',
            'kanji' => '萩野',
            'kana' => 'はぎの',
            'romaji' => 'Hagino',
        ]);
        // id: 191
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '44',
            'kanji' => '庶路',
            'kana' => 'しょろ',
            'romaji' => 'Shoro',
        ]);
        // id: 192
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '44',
            'kanji' => '白糠',
            'kana' => 'しらぬか',
            'romaji' => 'Shiranuka',
        ]);
        // id: 193
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '44',
            'kanji' => '西庶路',
            'kana' => 'にししょろ',
            'romaji' => 'Nishi-Shoro',
        ]);
        // id: 194
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '45',
            'kanji' => '新得',
            'kana' => 'しんとく',
            'romaji' => 'Shintoku',
        ]);
        // id: 195
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '46',
            'kanji' => '静内',
            'kana' => 'しずない',
            'romaji' => 'Shizunai',
        ]);
        // id: 196
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '46',
            'kanji' => '春立',
            'kana' => 'はるたち',
            'romaji' => 'Harutachi',
        ]);
        // id: 197
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '46',
            'kanji' => '東静内',
            'kana' => 'ひがししずない',
            'romaji' => 'Higashi-Shizunai',
        ]);
        // id: 198
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '46',
            'kanji' => '日高東別',
            'kana' => 'ひだかとうべつ',
            'romaji' => 'Hidaka-Tōbetsu',
        ]);
        // id: 199
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '46',
            'kanji' => '日高三石',
            'kana' => 'ひだかみついし',
            'romaji' => 'Hidaka-Mitsuishi',
        ]);
        // id: 200
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '46',
            'kanji' => '蓬栄',
            'kana' => 'ほうえい',
            'romaji' => 'Hōei',
        ]);
        // id: 201
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '46',
            'kanji' => '本桐',
            'kana' => 'ほんきり',
            'romaji' => 'Honkiri',
        ]);
        // id: 202
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '47',
            'kanji' => '砂川',
            'kana' => 'すながわ',
            'romaji' => 'Sunagawa',
        ]);
        // id: 203
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '47',
            'kanji' => '豊沼',
            'kana' => 'とよぬま',
            'romaji' => 'Toyonuma',
        ]);
        // id: 204
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '48',
            'kanji' => '江部乙',
            'kana' => 'えべおつ',
            'romaji' => 'Ebeotsu',
        ]);
        // id: 205
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '48',
            'kanji' => '滝川',
            'kana' => 'たきかわ',
            'romaji' => 'Takikawa',
        ]);
        // id: 206
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '48',
            'kanji' => '東滝川',
            'kana' => 'ひがしたきかわ',
            'romaji' => 'Higashi-Takikawa',
        ]);
        // id: 207
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '49',
            'kanji' => '有珠',
            'kana' => 'うす',
            'romaji' => 'Usu',
        ]);
        // id: 208
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '49',
            'kanji' => '北舟岡',
            'kana' => 'きたふなおか',
            'romaji' => 'Kita-Funaoka',
        ]);
        // id: 209
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '49',
            'kanji' => '黄金',
            'kana' => 'こがね',
            'romaji' => 'Kogane',
        ]);
        // id: 210
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '49',
            'kanji' => '伊達紋別',
            'kana' => 'だてもんべつ',
            'romaji' => 'Datemombetsu',
        ]);
        // id: 211
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '49',
            'kanji' => '長和',
            'kana' => 'ながわ',
            'romaji' => 'Nagawa',
        ]);
        // id: 212
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '49',
            'kanji' => '稀府',
            'kana' => 'まれっぷ',
            'romaji' => 'Mareppu',
        ]);
        // id: 213
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '50',
            'kanji' => '北秩父別',
            'kana' => 'きたちっぷべつ',
            'romaji' => 'Kita-Chippubetsu',
        ]);
        // id: 214
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '50',
            'kanji' => '秩父別',
            'kana' => 'ちっぷべつ',
            'romaji' => 'Chippubetsu',
        ]);
        // id: 215
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '51',
            'kanji' => '長都',
            'kana' => 'おさつ',
            'romaji' => 'Osatsu',
        ]);
        // id: 216
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '51',
            'kanji' => '新千歳空港',
            'kana' => 'しんちとせくうこう',
            'romaji' => 'New Chitose Airport',
        ]);
        // id: 217
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '51',
            'kanji' => '千歳',
            'kana' => 'ちとせ',
            'romaji' => 'Chitose',
        ]);
        // id: 218
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '51',
            'kanji' => '南千歳',
            'kana' => 'みなみちとせ',
            'romaji' => 'Minami-Chitose',
        ]);
        // id: 219
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '52',
            'kanji' => '川湯温泉',
            'kana' => 'かわゆおんせん',
            'romaji' => 'Kawayu-Onsen',
        ]);
        // id: 220
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '52',
            'kanji' => '美留和',
            'kana' => 'びるわ',
            'romaji' => 'Biruwa',
        ]);
        // id: 221
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '52',
            'kanji' => '摩周',
            'kana' => 'ましゅう',
            'romaji' => 'Mashū',
        ]);
        // id: 222
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '53',
            'kanji' => '石狩当別',
            'kana' => 'いしかりとうべつ',
            'romaji' => 'Ishikari-Tōbetsu',
        ]);
        // id: 223
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '53',
            'kanji' => '石狩太美',
            'kana' => 'いしかりふとみ',
            'romaji' => 'Ishikari-Futomi',
        ]);
        // id: 224
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '53',
            'kanji' => '北海道医療大学',
            'kana' => 'ほっかいどういりょうだいがく',
            'romaji' => 'Hokkaidō-Iryōdaigaku',
        ]);
        // id: 225
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '54',
            'kanji' => '伊香牛',
            'kana' => 'いかうし',
            'romaji' => 'Ikaushi',
        ]);
        // id: 226
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '54',
            'kanji' => '将軍山',
            'kana' => 'しょうぐんざん',
            'romaji' => 'Shōgunzan',
        ]);
        // id: 227
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '54',
            'kanji' => '当麻',
            'kana' => 'とうま',
            'romaji' => 'Tōma',
        ]);
        // id: 228
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '55',
            'kanji' => '洞爺',
            'kana' => 'とうや',
            'romaji' => 'Tōya',
        ]);
        // id: 229
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '56',
            'kanji' => '青葉',
            'kana' => 'あおば',
            'romaji' => 'Aoba',
        ]);
        // id: 230
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '56',
            'kanji' => '糸井',
            'kana' => 'いとい',
            'romaji' => 'Itoi',
        ]);
        // id: 231
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '56',
            'kanji' => '植苗',
            'kana' => 'うえなえ',
            'romaji' => 'Uenai',
        ]);
        // id: 232
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '56',
            'kanji' => '苫小牧',
            'kana' => 'とまこまい',
            'romaji' => 'Tomakomai',
        ]);
        // id: 233
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '56',
            'kanji' => '錦岡',
            'kana' => 'にしきおか',
            'romaji' => 'Nishikioka',
        ]);
        // id: 234
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '56',
            'kanji' => '沼ノ端',
            'kana' => 'ぬまのはた',
            'romaji' => 'Numanohata',
        ]);
        // id: 235
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '56',
            'kanji' => '勇払',
            'kana' => 'ゆうふつ',
            'romaji' => 'Yūfutsu',
        ]);
        // id: 236
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '57',
            'kanji' => '大岸',
            'kana' => 'おおきし',
            'romaji' => 'Ōkishi',
        ]);
        // id: 237
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '57',
            'kanji' => '小幌',
            'kana' => 'こぼろ',
            'romaji' => 'Koboro',
        ]);
        // id: 238
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '57',
            'kanji' => '豊浦',
            'kana' => 'とようら',
            'romaji' => 'Toyoura',
        ]);
        // id: 239
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '57',
            'kanji' => '礼文',
            'kana' => 'れぶん',
            'romaji' => 'Rebun',
        ]);
        // id: 240
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '58',
            'kanji' => '十弗',
            'kana' => 'とおふつ',
            'romaji' => 'Tōfutsu',
        ]);
        // id: 241
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '58',
            'kanji' => '豊頃',
            'kana' => 'とよころ',
            'romaji' => 'Toyokoro',
        ]);
        // id: 242
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '59',
            'kanji' => '兜沼',
            'kana' => 'かぶとぬま',
            'romaji' => 'Kabutonuma',
        ]);
        // id: 243
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '59',
            'kanji' => '徳満',
            'kana' => 'とくみつ',
            'romaji' => 'Tokumitsu',
        ]);
        // id: 244
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '59',
            'kanji' => '豊富',
            'kana' => 'とよとみ',
            'romaji' => 'Toyotomi',
        ]);
        // id: 245
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '60',
            'kanji' => '奈井江',
            'kana' => 'ないえ',
            'romaji' => 'Naie',
        ]);
        // id: 246
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '61',
            'kanji' => '歌内',
            'kana' => 'うたない',
            'romaji' => 'Utanai',
        ]);
        // id: 247
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '61',
            'kanji' => '佐久',
            'kana' => 'さく',
            'romaji' => 'Saku',
        ]);
        // id: 248
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '61',
            'kanji' => '天塩中川',
            'kana' => 'てしおなかがわ',
            'romaji' => 'Teshio-Nakagawa',
        ]);
        // id: 249
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '62',
            'kanji' => '鹿討',
            'kana' => 'しかうち',
            'romaji' => 'Shikauchi',
        ]);
        // id: 250
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '62',
            'kanji' => '中富良野',
            'kana' => 'なかふらの',
            'romaji' => 'Naka-Furano',
        ]);
        // id: 251
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '62',
            'kanji' => '西中',
            'kana' => 'にしなか',
            'romaji' => 'Nishinaka',
        ]);
        // id: 252
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '62',
            'kanji' => 'ラベンダー畑(臨)',
            'kana' => 'らべんだーばたけ',
            'romaji' => 'Lavender-Farm',
        ]);
        // id: 253
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '63',
            'kanji' => '池田園',
            'kana' => 'いけだえん',
            'romaji' => 'Ikedaen',
        ]);
        // id: 254
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '63',
            'kanji' => '大中山',
            'kana' => 'おおなかやま',
            'romaji' => 'Ōnakayama',
        ]);
        // id: 255
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '63',
            'kanji' => '大沼',
            'kana' => 'おおぬま',
            'romaji' => 'Ōnuma',
        ]);
        // id: 256
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '63',
            'kanji' => '大沼公園',
            'kana' => 'おおぬまこうえん',
            'romaji' => 'Ōnumakōen',
        ]);
        // id: 257
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '63',
            'kanji' => '銚子口',
            'kana' => 'ちょうしぐち',
            'romaji' => 'Chōshiguchi',
        ]);
        // id: 258
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '63',
            'kanji' => '流山温泉',
            'kana' => 'ながれやまおんせん',
            'romaji' => 'Nagareyamaonsen',
        ]);
        // id: 259
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '63',
            'kanji' => '七飯',
            'kana' => 'ななえ',
            'romaji' => 'Nanae',
        ]);
        // id: 260
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '63',
            'kanji' => '仁山',
            'kana' => 'にやま',
            'romaji' => 'Niyama',
        ]);
        // id: 261
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '64',
            'kanji' => '智恵文',
            'kana' => 'ちえぶん',
            'romaji' => 'Chiebun',
        ]);
        // id: 262
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '64',
            'kanji' => '智北',
            'kana' => 'ちほく',
            'romaji' => 'Chihoku',
        ]);
        // id: 263
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '64',
            'kanji' => '名寄',
            'kana' => 'なよろ',
            'romaji' => 'Nayoro',
        ]);
        // id: 264
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '64',
            'kanji' => '日進',
            'kana' => 'にっしん',
            'romaji' => 'Nisshin',
        ]);
        // id: 265
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '64',
            'kanji' => '東風連',
            'kana' => 'ひがしふうれん',
            'romaji' => 'Higashi-Fūren',
        ]);
        // id: 266
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '64',
            'kanji' => '風連',
            'kana' => 'ふうれん',
            'romaji' => 'Fūren',
        ]);
        // id: 267
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '64',
            'kanji' => '北星',
            'kana' => 'ほくせい',
            'romaji' => 'Hokusei',
        ]);
        // id: 268
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '65',
            'kanji' => '大狩部',
            'kana' => 'おおかりべ',
            'romaji' => 'Ōkaribe',
        ]);
        // id: 269
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '65',
            'kanji' => '節婦',
            'kana' => 'せっぷ',
            'romaji' => 'Seppu',
        ]);
        // id: 270
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '65',
            'kanji' => '新冠',
            'kana' => 'にいかっぷ',
            'romaji' => 'Niikappu',
        ]);
        // id: 271
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '66',
            'kanji' => '銀山',
            'kana' => 'ぎんざん',
            'romaji' => 'Ginzan',
        ]);
        // id: 272
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '66',
            'kanji' => '然別',
            'kana' => 'しかりべつ',
            'romaji' => 'Shikaribetsu',
        ]);
        // id: 273
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '66',
            'kanji' => '仁木',
            'kana' => 'にき',
            'romaji' => 'Niki',
        ]);
        // id: 274
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '67',
            'kanji' => 'ニセコ',
            'kana' => 'にせこ',
            'romaji' => 'Niseko',
        ]);
        // id: 275
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '68',
            'kanji' => '石狩沼田',
            'kana' => 'いしかりぬまた',
            'romaji' => 'Ishikari-Numata',
        ]);
        // id: 276
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '68',
            'kanji' => '恵比島',
            'kana' => 'えびしま',
            'romaji' => 'Ebishima',
        ]);
        // id: 277
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '68',
            'kanji' => '真布',
            'kana' => 'まっぷ',
            'romaji' => 'Mappu',
        ]);
        // id: 278
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '69',
            'kanji' => '厚床',
            'kana' => 'あっとこ',
            'romaji' => 'Attoko',
        ]);
        // id: 279
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '69',
            'kanji' => '落石',
            'kana' => 'おちいし',
            'romaji' => 'Ochiishi',
        ]);
        // id: 280
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '69',
            'kanji' => '昆布盛',
            'kana' => 'こんぶもり',
            'romaji' => 'Kombumori',
        ]);
        // id: 281
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '69',
            'kanji' => '西和田',
            'kana' => 'にしわだ',
            'romaji' => 'Nishi-Wada',
        ]);
        // id: 282
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '69',
            'kanji' => '根室',
            'kana' => 'ねむろ',
            'romaji' => 'Nemuro',
        ]);
        // id: 283
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '69',
            'kanji' => '東根室',
            'kana' => 'ひがしねむろ',
            'romaji' => 'Higashi-Nemuro',
        ]);
        // id: 284
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '69',
            'kanji' => '別当賀',
            'kana' => 'べっとが',
            'romaji' => 'Bettoga',
        ]);
        // id: 285
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '70',
            'kanji' => '富浦',
            'kana' => 'とみうら',
            'romaji' => 'Tomiura',
        ]);
        // id: 286
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '70',
            'kanji' => '登別',
            'kana' => 'のぼりべつ',
            'romaji' => 'Noboribetsu',
        ]);
        // id: 287
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '70',
            'kanji' => '幌別',
            'kana' => 'ほろべつ',
            'romaji' => 'Horobetsu',
        ]);
        // id: 288
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '70',
            'kanji' => '鷲別',
            'kana' => 'わしべつ',
            'romaji' => 'Washibetsu',
        ]);
        // id: 289
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '71',
            'kanji' => '桔梗',
            'kana' => 'ききょう',
            'romaji' => 'Kikyō',
        ]);
        // id: 290
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '71',
            'kanji' => '五稜郭',
            'kana' => 'ごりょうかく',
            'romaji' => 'Goryōkaku',
        ]);
        // id: 291
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '71',
            'kanji' => '函館',
            'kana' => 'はこだて',
            'romaji' => 'Hakodate',
        ]);
        // id: 292
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '72',
            'kanji' => '姉別',
            'kana' => 'あねべつ',
            'romaji' => 'Anebetsu',
        ]);
        // id: 293
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '72',
            'kanji' => '茶内',
            'kana' => 'ちゃない',
            'romaji' => 'Chanai',
        ]);
        // id: 294
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '72',
            'kanji' => '浜中',
            'kana' => 'はまなか',
            'romaji' => 'Hamanaka',
        ]);
        // id: 295
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '73',
            'kanji' => '北美瑛',
            'kana' => 'きたびえい',
            'romaji' => 'Kita-Biei',
        ]);
        // id: 296
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '73',
            'kanji' => '美瑛',
            'kana' => 'びえい',
            'romaji' => 'Biei',
        ]);
        // id: 297
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '73',
            'kanji' => '美馬牛',
            'kana' => 'びばうし',
            'romaji' => 'Bibaushi',
        ]);
        // id: 298
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '74',
            'kanji' => '厚賀',
            'kana' => 'あつが',
            'romaji' => 'Atsuga',
        ]);
        // id: 299
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '74',
            'kanji' => '清畠',
            'kana' => 'きよはた',
            'romaji' => 'Kiyohata',
        ]);
        // id: 300
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '74',
            'kanji' => '富川',
            'kana' => 'とみかわ',
            'romaji' => 'Tomikawa',
        ]);
        // id: 301
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '74',
            'kanji' => '豊郷',
            'kana' => 'とよさと',
            'romaji' => 'Toyosato',
        ]);
        // id: 302
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '74',
            'kanji' => '日高門別',
            'kana' => 'ひだかもんべつ',
            'romaji' => 'Hidaka-Mombetsu',
        ]);
        // id: 303
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '75',
            'kanji' => '北比布',
            'kana' => 'きたぴっぷ',
            'romaji' => 'Kita-Pippu',
        ]);
        // id: 304
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '75',
            'kanji' => '比布',
            'kana' => 'ぴっぷ',
            'romaji' => 'Pippu',
        ]);
        // id: 305
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '75',
            'kanji' => '南比布',
            'kana' => 'みなみぴっぷ',
            'romaji' => 'Minami-Pippu',
        ]);
        // id: 306
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '75',
            'kanji' => '蘭留',
            'kana' => 'らんる',
            'romaji' => 'Ranru',
        ]);
        // id: 307
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '76',
            'kanji' => '光珠内',
            'kana' => 'こうしゅない',
            'romaji' => 'Kōshunai',
        ]);
        // id: 308
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '76',
            'kanji' => '茶志内',
            'kana' => 'ちゃしない',
            'romaji' => 'Chashinai',
        ]);
        // id: 309
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '76',
            'kanji' => '美唄',
            'kana' => 'びばい',
            'romaji' => 'Bibai',
        ]);
        // id: 310
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '76',
            'kanji' => '峰延',
            'kana' => 'みねのぶ',
            'romaji' => 'Minenobu',
        ]);
        // id: 311
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '77',
            'kanji' => '恩根内',
            'kana' => 'おんねない',
            'romaji' => 'Onnenai',
        ]);
        // id: 312
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '77',
            'kanji' => '豊清水',
            'kana' => 'とよしみず',
            'romaji' => 'Toyoshimizu',
        ]);
        // id: 313
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '77',
            'kanji' => '初野',
            'kana' => 'はつの',
            'romaji' => 'Hatsuno',
        ]);
        // id: 314
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '77',
            'kanji' => '美深',
            'kana' => 'びふか',
            'romaji' => 'Bifuka',
        ]);
        // id: 315
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '77',
            'kanji' => '南美深',
            'kana' => 'みなみびふか',
            'romaji' => 'Minami-Bifuka',
        ]);
        // id: 316
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '77',
            'kanji' => '紋穂内',
            'kana' => 'もんぽない',
            'romaji' => 'Momponai',
        ]);
        // id: 317
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '78',
            'kanji' => '美幌',
            'kana' => 'びほろ',
            'romaji' => 'Bihoro',
        ]);
        // id: 318
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '79',
            'kanji' => '納内',
            'kana' => 'おさむない',
            'romaji' => 'Osamunai',
        ]);
        // id: 319
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '79',
            'kanji' => '北一已',
            'kana' => 'きたいちやん',
            'romaji' => 'Kita-Ichiyan',
        ]);
        // id: 320
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '79',
            'kanji' => '深川',
            'kana' => 'ふかがわ',
            'romaji' => 'Fukagawa',
        ]);
        // id: 321
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '80',
            'kanji' => '学田',
            'kana' => 'がくでん',
            'romaji' => 'Gakuden',
        ]);
        // id: 322
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '80',
            'kanji' => '布部',
            'kana' => 'ぬのべ',
            'romaji' => 'Nunobe',
        ]);
        // id: 323
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '80',
            'kanji' => '富良野',
            'kana' => 'ふらの',
            'romaji' => 'Furano',
        ]);
        // id: 324
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '80',
            'kanji' => '山部',
            'kana' => 'やまべ',
            'romaji' => 'Yamabe',
        ]);
        // id: 325
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '81',
            'kanji' => '新函館北斗',
            'kana' => 'しんはこだてほくと',
            'romaji' => 'Shin-Hakodate-Hokuto',
        ]);
        // id: 326
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '82',
            'kanji' => '雄信内',
            'kana' => 'おのっぷない',
            'romaji' => 'Onoppunai',
        ]);
        // id: 327
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '82',
            'kanji' => '上幌延',
            'kana' => 'かみほろのべ',
            'romaji' => 'Kami-Horonobe',
        ]);
        // id: 328
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '82',
            'kanji' => '下沼',
            'kana' => 'しもぬま',
            'romaji' => 'Shimonuma',
        ]);
        // id: 329
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '82',
            'kanji' => '問寒別',
            'kana' => 'といかんべつ',
            'romaji' => 'Toikambetsu',
        ]);
        // id: 330
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '82',
            'kanji' => '糠南',
            'kana' => 'ぬかなん',
            'romaji' => 'Nukanan',
        ]);
        // id: 331
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '82',
            'kanji' => '幌延',
            'kana' => 'ほろのべ',
            'romaji' => 'Horonobe',
        ]);
        // id: 332
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '82',
            'kanji' => '南幌延',
            'kana' => 'みなみほろのべ',
            'romaji' => 'Minami-Horonobe',
        ]);
        // id: 333
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '82',
            'kanji' => '安牛',
            'kana' => 'やすうし',
            'romaji' => 'Yasuushi',
        ]);
        // id: 334
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '83',
            'kanji' => '札内',
            'kana' => 'さつない',
            'romaji' => 'Satsunai',
        ]);
        // id: 335
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '83',
            'kanji' => '幕別',
            'kana' => 'まくべつ',
            'romaji' => 'Makubetsu',
        ]);
        // id: 336
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '84',
            'kanji' => '幾寅',
            'kana' => 'いくとら',
            'romaji' => 'Ikutora',
        ]);
        // id: 337
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '84',
            'kanji' => '落合',
            'kana' => 'おちあい',
            'romaji' => 'Ochiai',
        ]);
        // id: 338
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '84',
            'kanji' => '金山',
            'kana' => 'かなやま',
            'romaji' => 'Kanayama',
        ]);
        // id: 339
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '84',
            'kanji' => '下金山',
            'kana' => 'しもかなやま',
            'romaji' => 'Shimo-Kanayama',
        ]);
        // id: 340
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '84',
            'kanji' => '東鹿越',
            'kana' => 'ひがししかごえ',
            'romaji' => 'Higashi-Shikagoe',
        ]);
        // id: 341
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '85',
            'kanji' => '汐見',
            'kana' => 'しおみ',
            'romaji' => 'Shiomi',
        ]);
        // id: 342
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '85',
            'kanji' => '浜田浦',
            'kana' => 'はまたうら',
            'romaji' => 'Hama-Taura',
        ]);
        // id: 343
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '85',
            'kanji' => '鵡川',
            'kana' => 'むかわ',
            'romaji' => 'Mukawa',
        ]);
        // id: 344
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '86',
            'kanji' => '崎守',
            'kana' => 'さきもり',
            'romaji' => 'Sakimori',
        ]);
        // id: 345
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '86',
            'kanji' => '東室蘭',
            'kana' => 'ひがしむろらん',
            'romaji' => 'Higashi-Muroran',
        ]);
        // id: 346
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '86',
            'kanji' => '母恋',
            'kana' => 'ぼこい',
            'romaji' => 'Bokoi',
        ]);
        // id: 347
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '86',
            'kanji' => '御崎',
            'kana' => 'みさき',
            'romaji' => 'Misaki',
        ]);
        // id: 348
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '86',
            'kanji' => '室蘭',
            'kana' => 'むろらん',
            'romaji' => 'Muroran',
        ]);
        // id: 349
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '86',
            'kanji' => '本輪西',
            'kana' => 'もとわにし',
            'romaji' => 'Moto-Wanishi',
        ]);
        // id: 350
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '86',
            'kanji' => '輪西',
            'kana' => 'わにし',
            'romaji' => 'Wanishi',
        ]);
        // id: 351
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '87',
            'kanji' => '大成',
            'kana' => 'たいせい',
            'romaji' => 'Taisei',
        ]);
        // id: 352
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '87',
            'kanji' => '芽室',
            'kana' => 'めむろ',
            'romaji' => 'Memuro',
        ]);
        // id: 353
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '88',
            'kanji' => '妹背牛',
            'kana' => 'もせうし',
            'romaji' => 'Moseushi',
        ]);
        // id: 354
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '赤井川',
            'kana' => 'あかいがわ',
            'romaji' => 'Akaigawa',
        ]);
        // id: 355
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '石倉',
            'kana' => 'いしくら',
            'romaji' => 'Ishikura',
        ]);
        // id: 356
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '石谷',
            'kana' => 'いしや',
            'romaji' => 'Ishiya',
        ]);
        // id: 357
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '渡島砂原',
            'kana' => 'おしまさわら',
            'romaji' => 'Oshima-Sawara',
        ]);
        // id: 358
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '渡島沼尻',
            'kana' => 'おしまぬまじり',
            'romaji' => 'Oshima-Numajiri',
        ]);
        // id: 359
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '尾白内',
            'kana' => 'おしろない',
            'romaji' => 'Oshironai',
        ]);
        // id: 360
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '掛澗',
            'kana' => 'かかりま',
            'romaji' => 'Kakarima',
        ]);
        // id: 361
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '駒ヶ岳',
            'kana' => 'こまがたけ',
            'romaji' => 'Komagatake',
        ]);
        // id: 362
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '東森',
            'kana' => 'ひがしもり',
            'romaji' => 'Higashi-Mori',
        ]);
        // id: 363
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '本石倉',
            'kana' => 'ほんいしくら',
            'romaji' => 'Hon-Ishikura',
        ]);
        // id: 364
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '89',
            'kanji' => '森',
            'kana' => 'もり',
            'romaji' => 'Mori',
        ]);
        // id: 365
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '90',
            'kanji' => '落部',
            'kana' => 'おとしべ',
            'romaji' => 'Otoshibe',
        ]);
        // id: 366
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '90',
            'kanji' => '黒岩',
            'kana' => 'くろいわ',
            'romaji' => 'Kuroiwa',
        ]);
        // id: 367
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '90',
            'kanji' => '野田生',
            'kana' => 'のだおい',
            'romaji' => 'Nodaoi',
        ]);
        // id: 368
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '90',
            'kanji' => '八雲',
            'kana' => 'やくも',
            'romaji' => 'Yakumo',
        ]);
        // id: 369
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '90',
            'kanji' => '山越',
            'kana' => 'やまこし',
            'romaji' => 'Yamakoshi',
        ]);
        // id: 370
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '90',
            'kanji' => '山崎',
            'kana' => 'やまさき',
            'romaji' => 'Yamasaki',
        ]);
        // id: 371
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '91',
            'kanji' => '新夕張',
            'kana' => 'しんゆうばり',
            'romaji' => 'Shin-Yūbari',
        ]);
        // id: 372
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '91',
            'kanji' => '滝ノ上',
            'kana' => 'たきのうえ',
            'romaji' => 'Takinoue',
        ]);
        // id: 373
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '92',
            'kanji' => '川端',
            'kana' => 'かわばた',
            'romaji' => 'Kawabata',
        ]);
        // id: 374
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '92',
            'kanji' => '古山',
            'kana' => 'ふるさん',
            'romaji' => 'Furusan',
        ]);
        // id: 375
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '92',
            'kanji' => '三川',
            'kana' => 'みかわ',
            'romaji' => 'Mikawa',
        ]);
        // id: 376
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '92',
            'kanji' => '由仁',
            'kana' => 'ゆに',
            'romaji' => 'Yuni',
        ]);
        // id: 377
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '93',
            'kanji' => '余市',
            'kana' => 'よいち',
            'romaji' => 'Yoichi',
        ]);
        // id: 378
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '94',
            'kanji' => '昆布',
            'kana' => 'こんぶ',
            'romaji' => 'Kombu',
        ]);
        // id: 379
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '94',
            'kanji' => '目名',
            'kana' => 'めな',
            'romaji' => 'Mena',
        ]);
        // id: 380
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '94',
            'kanji' => '蘭越',
            'kana' => 'らんこし',
            'romaji' => 'Rankoshi',
        ]);
        // id: 381
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '95',
            'kanji' => '大和田',
            'kana' => 'おおわだ',
            'romaji' => 'Ōwada',
        ]);
        // id: 382
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '95',
            'kanji' => '峠下',
            'kana' => 'とうげした',
            'romaji' => 'Tōgeshita',
        ]);
        // id: 383
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '95',
            'kanji' => '藤山',
            'kana' => 'ふじやま',
            'romaji' => 'Fujiyama',
        ]);
        // id: 384
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '95',
            'kanji' => '幌糠',
            'kana' => 'ほろぬか',
            'romaji' => 'Horonuka',
        ]);
        // id: 385
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '95',
            'kanji' => '留萌',
            'kana' => 'るもい',
            'romaji' => 'Rumoi',
        ]);
        // id: 386
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '96',
            'kanji' => '抜海',
            'kana' => 'ばっかい',
            'romaji' => 'Bakkai',
        ]);
        // id: 387
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '96',
            'kanji' => '南稚内',
            'kana' => 'みなみわっかない',
            'romaji' => 'Minami-Wakkanai',
        ]);
        // id: 388
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '96',
            'kanji' => '勇知',
            'kana' => 'ゆうち',
            'romaji' => 'Yūchi',
        ]);
        // id: 389
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '96',
            'kanji' => '稚内',
            'kana' => 'わっかない',
            'romaji' => 'Wakkanai',
        ]);
        // id: 390
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '97',
            'kanji' => '塩狩',
            'kana' => 'しおかり',
            'romaji' => 'Shiokari',
        ]);
        // id: 391
        Station::insert([
            'prefecture_id' => '1',
            'city_id' => '97',
            'kanji' => '和寒',
            'kana' => 'わっさむ',
            'romaji' => 'Wassamu',
        ]);
        // id: 392
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '青森',
            'kana' => 'あおもり',
            'romaji' => 'Aomori',
        ]);
        // id: 393
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '油川',
            'kana' => 'あぶらかわ',
            'romaji' => 'Aburakawa',
        ]);
        // id: 394
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '後潟',
            'kana' => 'うしろがた',
            'romaji' => 'Ushirogata',
        ]);
        // id: 395
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '奥内',
            'kana' => 'おくない',
            'romaji' => 'Okunai',
        ]);
        // id: 396
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '新青森',
            'kana' => 'しんあおもり',
            'romaji' => 'Shin-Aomori',
        ]);
        // id: 397
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '大釈迦',
            'kana' => 'だいしゃか',
            'romaji' => 'Daishaka',
        ]);
        // id: 398
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '津軽新城',
            'kana' => 'つがるしんじょう',
            'romaji' => 'Tsugaru-Shinjō',
        ]);
        // id: 399
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '津軽宮田',
            'kana' => 'つがるみやた',
            'romaji' => 'Tsugaru-Miyata',
        ]);
        // id: 400
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '鶴ケ坂',
            'kana' => 'つるがさか',
            'romaji' => 'Tsurugasaka',
        ]);
        // id: 401
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '中沢',
            'kana' => 'なかさわ',
            'romaji' => 'Nakasawa',
        ]);
        // id: 402
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '浪岡',
            'kana' => 'なみおか',
            'romaji' => 'Namioka',
        ]);
        // id: 403
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '98',
            'kanji' => '左堰',
            'kana' => 'ひだりせき',
            'romaji' => 'Hidariseki',
        ]);
        // id: 404
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '99',
            'kanji' => '鰺ケ沢',
            'kana' => 'あじがさわ',
            'romaji' => 'Ajigasawa',
        ]);
        // id: 405
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '100',
            'kanji' => '板柳',
            'kana' => 'いたやなぎ',
            'romaji' => 'Itayanagi',
        ]);
        // id: 406
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '101',
            'kanji' => '川部',
            'kana' => 'かわべ',
            'romaji' => 'Kawabe',
        ]);
        // id: 407
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '102',
            'kanji' => '今別',
            'kana' => 'いまべつ',
            'romaji' => 'Imabetsu',
        ]);
        // id: 408
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '102',
            'kanji' => '大川平',
            'kana' => 'おおかわだい',
            'romaji' => 'Ōkawadai',
        ]);
        // id: 409
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '102',
            'kanji' => '奥津軽いまべつ',
            'kana' => 'おくつがるいまべつ',
            'romaji' => 'Okutsugaru-Imabetsu',
        ]);
        // id: 410
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '102',
            'kanji' => '津軽浜名',
            'kana' => 'つがるはまな',
            'romaji' => 'Tsugaru-Hamana',
        ]);
        // id: 411
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '102',
            'kanji' => '津軽二股',
            'kana' => 'つがるふたまた',
            'romaji' => 'Tsugaru-Futamata',
        ]);
        // id: 412
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '103',
            'kanji' => '大鰐温泉',
            'kana' => 'おおわにおんせん',
            'romaji' => 'Ōwani-Onsen',
        ]);
        // id: 413
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '103',
            'kanji' => '長峰',
            'kana' => 'ながみね',
            'romaji' => 'Nagamine',
        ]);
        // id: 414
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '104',
            'kanji' => '五所川原',
            'kana' => 'ごしょがわら',
            'romaji' => 'Goshogawara',
        ]);
        // id: 415
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '105',
            'kanji' => '七戸十和田',
            'kana' => 'しちのへとわだ',
            'romaji' => 'Shichinohe-Towada',
        ]);
        // id: 416
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '106',
            'kanji' => '大平',
            'kana' => 'おおだい',
            'romaji' => 'Ōdai',
        ]);
        // id: 417
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '106',
            'kanji' => '蟹田',
            'kana' => 'かにた',
            'romaji' => 'kanita',
        ]);
        // id: 418
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '106',
            'kanji' => '中小国',
            'kana' => 'なかおぐに',
            'romaji' => 'Naka-Oguni',
        ]);
        // id: 419
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '106',
            'kanji' => '三厩',
            'kana' => 'みんまや',
            'romaji' => 'Mimmaya',
        ]);
        // id: 420
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '107',
            'kanji' => '木造',
            'kana' => 'きづくり',
            'romaji' => 'Kizukuri',
        ]);
        // id: 421
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '107',
            'kanji' => '越水',
            'kana' => 'こしみず',
            'romaji' => 'Koshimizu',
        ]);
        // id: 422
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '107',
            'kanji' => '中田',
            'kana' => 'なかた',
            'romaji' => 'Nakata',
        ]);
        // id: 423
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '107',
            'kanji' => '陸奥森田',
            'kana' => 'むつもりた',
            'romaji' => 'Mutsu-Morita',
        ]);
        // id: 424
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '108',
            'kanji' => '鶴泊',
            'kana' => 'つるどまり',
            'romaji' => 'Tsurudomari',
        ]);
        // id: 425
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '108',
            'kanji' => '陸奥鶴田',
            'kana' => 'むつつるだ',
            'romaji' => 'Mutsu-Tsuruda',
        ]);
        // id: 426
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '109',
            'kanji' => '有戸',
            'kana' => 'ありと',
            'romaji' => 'Arito',
        ]);
        // id: 427
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '109',
            'kanji' => '北野辺地',
            'kana' => 'きたのへじ',
            'romaji' => 'Kita-Noheji',
        ]);
        // id: 428
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '109',
            'kanji' => '野辺地',
            'kana' => 'のへじ',
            'romaji' => 'Noheji',
        ]);
        // id: 429
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '110',
            'kanji' => '大蛇',
            'kana' => 'おおじゃ',
            'romaji' => 'Ōja',
        ]);
        // id: 430
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '110',
            'kanji' => '階上',
            'kana' => 'はしかみ',
            'romaji' => 'Hashikami',
        ]);
        // id: 431
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '大久喜',
            'kana' => 'おおくき',
            'romaji' => 'Ōkuki',
        ]);
        // id: 432
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '金浜',
            'kana' => 'かねはま',
            'romaji' => 'Kanehama',
        ]);
        // id: 433
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '小中野',
            'kana' => 'こなかの',
            'romaji' => 'Konakano',
        ]);
        // id: 434
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '鮫',
            'kana' => 'さめ',
            'romaji' => 'Same',
        ]);
        // id: 435
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '白銀',
            'kana' => 'しろがね',
            'romaji' => 'Shirogane',
        ]);
        // id: 436
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '種差海岸',
            'kana' => 'たねさしかいがん',
            'romaji' => 'Tanesashikaigan',
        ]);
        // id: 437
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '長苗代',
            'kana' => 'ながなわしろ',
            'romaji' => 'Naganawashiro',
        ]);
        // id: 438
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '八戸',
            'kana' => 'はちのへ',
            'romaji' => 'Hachinohe',
        ]);
        // id: 439
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '本八戸',
            'kana' => 'ほんはちのへ',
            'romaji' => 'Hon-Hachinohe',
        ]);
        // id: 440
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '陸奥白浜',
            'kana' => 'むつしらはま',
            'romaji' => 'Mutsu-Shirahama',
        ]);
        // id: 441
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '111',
            'kanji' => '陸奥湊',
            'kana' => 'むつみなと',
            'romaji' => 'Mutsu-Minato',
        ]);
        // id: 442
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '112',
            'kanji' => '碇ケ関',
            'kana' => 'いかりがせき',
            'romaji' => 'Ikarigaseki',
        ]);
        // id: 443
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '112',
            'kanji' => '津軽湯の沢',
            'kana' => 'つがるゆのさわ',
            'romaji' => 'Tsugaru-Yunosawa',
        ]);
        // id: 444
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '113',
            'kanji' => '石川',
            'kana' => 'いしかわ',
            'romaji' => 'Ishikawa',
        ]);
        // id: 445
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '113',
            'kanji' => '撫牛子',
            'kana' => 'ないじょうし',
            'romaji' => 'Naijōshi',
        ]);
        // id: 446
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '113',
            'kanji' => '弘前',
            'kana' => 'ひろさき',
            'romaji' => 'Hirosaki',
        ]);
        // id: 447
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => 'ウェスパ椿山',
            'kana' => 'うぇすぱつばきやま',
            'romaji' => 'WeSPa Tsubakiyama',
        ]);
        // id: 448
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '追良瀬',
            'kana' => 'おいらせ',
            'romaji' => 'Oirase',
        ]);
        // id: 449
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '大戸瀬',
            'kana' => 'おおどせ',
            'romaji' => 'Ōdose',
        ]);
        // id: 450
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '大間越',
            'kana' => 'おおまごし',
            'romaji' => 'Ōmagoshi',
        ]);
        // id: 451
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '風合瀬',
            'kana' => 'かそせ',
            'romaji' => 'Kasose',
        ]);
        // id: 452
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '北金ケ沢',
            'kana' => 'きたかねがさわ',
            'romaji' => 'Kita-Kanegasawa',
        ]);
        // id: 453
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '十二湖',
            'kana' => 'じゅうにこ',
            'romaji' => 'Jūniko',
        ]);
        // id: 454
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '白神岳登山口',
            'kana' => 'しらかみだけとざんぐち',
            'romaji' => 'Shirakamidaketozanguchi',
        ]);
        // id: 455
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '千畳敷',
            'kana' => 'せんじょうじき',
            'romaji' => 'Senjōjiki',
        ]);
        // id: 456
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '驫木',
            'kana' => 'とどろき',
            'romaji' => 'Todoroki',
        ]);
        // id: 457
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '広戸',
            'kana' => 'ひろと',
            'romaji' => 'Hiroto',
        ]);
        // id: 458
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '深浦',
            'kana' => 'ふかうら',
            'romaji' => 'Fukaura',
        ]);
        // id: 459
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '艫作',
            'kana' => 'へなし',
            'romaji' => 'Henashi',
        ]);
        // id: 460
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '松神',
            'kana' => 'まつかみ',
            'romaji' => 'Matsukami',
        ]);
        // id: 461
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '陸奥岩崎',
            'kana' => 'むついわさき',
            'romaji' => 'Mutsu-Iwasaki',
        ]);
        // id: 462
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '陸奥沢辺',
            'kana' => 'むつさわべ',
            'romaji' => 'Mutsu-Sawabe',
        ]);
        // id: 463
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '陸奥柳田',
            'kana' => 'むつやなぎた',
            'romaji' => 'Mutsu-Yanagita',
        ]);
        // id: 464
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '114',
            'kanji' => '横磯',
            'kana' => 'よこいそ',
            'romaji' => 'Yokoiso',
        ]);
        // id: 465
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '115',
            'kanji' => '北常盤',
            'kana' => 'きたときわ',
            'romaji' => 'Kita-Tokiwa',
        ]);
        // id: 466
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '115',
            'kanji' => '林崎',
            'kana' => 'はやしざき',
            'romaji' => 'Hayashizaki',
        ]);
        // id: 467
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '115',
            'kanji' => '藤崎',
            'kana' => 'ふじさき',
            'romaji' => 'Fujisaki',
        ]);
        // id: 468
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '116',
            'kanji' => '赤川',
            'kana' => 'あかがわ',
            'romaji' => 'Akagawa',
        ]);
        // id: 469
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '116',
            'kanji' => '大湊',
            'kana' => 'おおみなと',
            'romaji' => 'Ōminato',
        ]);
        // id: 470
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '116',
            'kanji' => '金谷沢',
            'kana' => 'かなやさわ',
            'romaji' => 'Kanayasawa',
        ]);
        // id: 471
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '116',
            'kanji' => '下北',
            'kana' => 'しもきた',
            'romaji' => 'Shimokita',
        ]);
        // id: 472
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '116',
            'kanji' => '近川',
            'kana' => 'ちかがわ',
            'romaji' => 'Chikagawa',
        ]);
        // id: 473
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '117',
            'kanji' => '有畑',
            'kana' => 'ありはた',
            'romaji' => 'Arihata',
        ]);
        // id: 474
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '117',
            'kanji' => '吹越',
            'kana' => 'ふっこし',
            'romaji' => 'Fukkoshi',
        ]);
        // id: 475
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '117',
            'kanji' => '陸奥横浜',
            'kana' => 'むつよこはま',
            'romaji' => 'Mutsu-Yokohama',
        ]);
        // id: 476
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '118',
            'kanji' => '郷沢',
            'kana' => 'ごうさわ',
            'romaji' => 'Gōsawa',
        ]);
        // id: 477
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '118',
            'kanji' => '瀬辺地',
            'kana' => 'せへじ',
            'romaji' => 'Seheji',
        ]);
        // id: 478
        Station::insert([
            'prefecture_id' => '2',
            'city_id' => '118',
            'kanji' => '蓬田',
            'kana' => 'よもぎた',
            'romaji' => 'Yomogita',
        ]);
        // id: 479
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '一ノ関',
            'kana' => 'いちのせき',
            'romaji' => 'Ichinoseki',
        ]);
        // id: 480
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '岩ノ下',
            'kana' => 'いわのした',
            'romaji' => 'Iwanoshita',
        ]);
        // id: 481
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '折壁',
            'kana' => 'おりかべ',
            'romaji' => 'Orikabe',
        ]);
        // id: 482
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '猊鼻渓',
            'kana' => 'げいびけい',
            'romaji' => 'Geibikei',
        ]);
        // id: 483
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '小梨',
            'kana' => 'こなし',
            'romaji' => 'Konashi',
        ]);
        // id: 484
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '柴宿',
            'kana' => 'しばじゅく',
            'romaji' => 'Shibajuku',
        ]);
        // id: 485
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '清水原',
            'kana' => 'しみずはら',
            'romaji' => 'Shimizuhara',
        ]);
        // id: 486
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '摺沢',
            'kana' => 'すりさわ',
            'romaji' => 'Surisawa',
        ]);
        // id: 487
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '千厩',
            'kana' => 'せんまや',
            'romaji' => 'Semmaya',
        ]);
        // id: 488
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '新月',
            'kana' => 'にいつき',
            'romaji' => 'Niitsuki',
        ]);
        // id: 489
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '花泉',
            'kana' => 'はないずみ',
            'romaji' => 'Hanaizumi',
        ]);
        // id: 490
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '真滝',
            'kana' => 'またき',
            'romaji' => 'Mataki',
        ]);
        // id: 491
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '矢越',
            'kana' => 'やごし',
            'romaji' => 'Yagoshi',
        ]);
        // id: 492
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '山ノ目',
            'kana' => 'やまのめ',
            'romaji' => 'Yamanome',
        ]);
        // id: 493
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '油島',
            'kana' => 'ゆしま',
            'romaji' => 'Yushima',
        ]);
        // id: 494
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '陸中門崎',
            'kana' => 'りくちゅうかんざき',
            'romaji' => 'Rikuchū-Kanzaki',
        ]);
        // id: 495
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '119',
            'kanji' => '陸中松川',
            'kana' => 'りくちゅうまつかわ',
            'romaji' => 'Rikuchū-Matsukawa',
        ]);
        // id: 496
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '120',
            'kanji' => 'いわて沼宮内',
            'kana' => 'いわてぬまくない',
            'romaji' => 'Iwate-Numakunai',
        ]);
        // id: 497
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '121',
            'kanji' => '前沢',
            'kana' => 'まえさわ',
            'romaji' => 'Maesawa',
        ]);
        // id: 498
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '121',
            'kanji' => '水沢',
            'kana' => 'みずさわ',
            'romaji' => 'Mizusawa',
        ]);
        // id: 499
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '121',
            'kanji' => '水沢江刺',
            'kana' => 'みずさわえさし',
            'romaji' => 'Mizusawaesashi',
        ]);
        // id: 500
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '121',
            'kanji' => '陸中折居',
            'kana' => 'りくちゅうおりい',
            'romaji' => 'Rikuchū-Orii',
        ]);
        // id: 501
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '122',
            'kanji' => '金ケ崎',
            'kana' => 'かねがさき',
            'romaji' => 'Kanegasaki',
        ]);
        // id: 502
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '122',
            'kanji' => '六原',
            'kana' => 'ろくはら',
            'romaji' => 'Rokuhara',
        ]);
        // id: 503
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '123',
            'kanji' => '釜石',
            'kana' => 'かまいし',
            'romaji' => 'Kamaishi',
        ]);
        // id: 504
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '123',
            'kanji' => '小佐野',
            'kana' => 'こさの',
            'romaji' => 'Kosano',
        ]);
        // id: 505
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '123',
            'kanji' => '洞泉',
            'kana' => 'どうせん',
            'romaji' => 'Dōsen',
        ]);
        // id: 506
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '123',
            'kanji' => '松倉',
            'kana' => 'まつくら',
            'romaji' => 'Matsukura',
        ]);
        // id: 507
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '123',
            'kanji' => '陸中大橋',
            'kana' => 'りくちゅうおおはし',
            'romaji' => 'Rikuchū-Ōhashi',
        ]);
        // id: 508
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '岩沢',
            'kana' => 'いわさわ',
            'romaji' => 'Iwasawa',
        ]);
        // id: 509
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '江釣子',
            'kana' => 'えづりこ',
            'romaji' => 'Ezuriko',
        ]);
        // id: 510
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '北上',
            'kana' => 'きたかみ',
            'romaji' => 'Kitakami',
        ]);
        // id: 511
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '立川目',
            'kana' => 'たてかわめ',
            'romaji' => 'Tatekawame',
        ]);
        // id: 512
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '藤根',
            'kana' => 'ふじね',
            'romaji' => 'Fujine',
        ]);
        // id: 513
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '村崎野',
            'kana' => 'むらさきの',
            'romaji' => 'Murasakino',
        ]);
        // id: 514
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '柳原',
            'kana' => 'やなぎはら',
            'romaji' => 'Yanagihara',
        ]);
        // id: 515
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '横川目',
            'kana' => 'よこかわめ',
            'romaji' => 'Yokokawame',
        ]);
        // id: 516
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '124',
            'kanji' => '和賀仙人',
            'kana' => 'わかせんにん',
            'romaji' => 'Wakasennin',
        ]);
        // id: 517
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '125',
            'kanji' => '久慈',
            'kana' => 'くじ',
            'romaji' => 'Kuji',
        ]);
        // id: 518
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '125',
            'kanji' => '侍浜',
            'kana' => 'さむらいはま',
            'romaji' => 'Samuraihama',
        ]);
        // id: 519
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '125',
            'kanji' => '陸中夏井',
            'kana' => 'りくちゅうなつい',
            'romaji' => 'Rikuchū-Natsui',
        ]);
        // id: 520
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '126',
            'kanji' => '赤渕',
            'kana' => 'あかぶち',
            'romaji' => 'Akabuchi',
        ]);
        // id: 521
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '126',
            'kanji' => '雫石',
            'kana' => 'しずくいし',
            'romaji' => 'Shizukuishi',
        ]);
        // id: 522
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '126',
            'kanji' => '春木場',
            'kana' => 'はるきば',
            'romaji' => 'Harukiba',
        ]);
        // id: 523
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '127',
            'kanji' => '紫波中央',
            'kana' => 'しわちゅうおう',
            'romaji' => 'Shiwa-Chūō',
        ]);
        // id: 524
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '127',
            'kanji' => '日詰',
            'kana' => 'ひづめ',
            'romaji' => 'Hizume',
        ]);
        // id: 525
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '127',
            'kanji' => '古館',
            'kana' => 'ふるだて',
            'romaji' => 'Furudate',
        ]);
        // id: 526
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '128',
            'kanji' => '上有住',
            'kana' => 'かみありす',
            'romaji' => 'Kami-Arisu',
        ]);
        // id: 527
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '129',
            'kanji' => '大釜',
            'kana' => 'おおかま',
            'romaji' => 'Ōkama',
        ]);
        // id: 528
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '129',
            'kanji' => '小岩井',
            'kana' => 'こいわい',
            'romaji' => 'Koiwai',
        ]);
        // id: 529
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '青笹',
            'kana' => 'あおざさ',
            'romaji' => 'Aozasa',
        ]);
        // id: 530
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '足ケ瀬',
            'kana' => 'あしがせ',
            'romaji' => 'Ashigase',
        ]);
        // id: 531
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '綾織',
            'kana' => 'あやおり',
            'romaji' => 'Ayaori',
        ]);
        // id: 532
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '荒谷前',
            'kana' => 'あらやまえ',
            'romaji' => 'Arayamae',
        ]);
        // id: 533
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '岩手上郷',
            'kana' => 'いわてかみごう',
            'romaji' => 'Iwate-Kamigō',
        ]);
        // id: 534
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '岩手二日町',
            'kana' => 'いわてふつかまち',
            'romaji' => 'Iwate-Futsukamachi',
        ]);
        // id: 535
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '岩根橋',
            'kana' => 'いわねばし',
            'romaji' => 'Iwanebashi',
        ]);
        // id: 536
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '柏木平',
            'kana' => 'かしわぎだいら',
            'romaji' => 'Kashiwagidaira',
        ]);
        // id: 537
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '遠野',
            'kana' => 'とおの',
            'romaji' => 'Tōno',
        ]);
        // id: 538
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '平倉',
            'kana' => 'ひらくら',
            'romaji' => 'Hirakura',
        ]);
        // id: 539
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '鱒沢',
            'kana' => 'ますざわ',
            'romaji' => 'Masuzawa',
        ]);
        // id: 540
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '130',
            'kanji' => '宮守',
            'kana' => 'みやもり',
            'romaji' => 'Miyamori',
        ]);
        // id: 541
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '131',
            'kanji' => 'ほっとゆだ',
            'kana' => 'ほっとゆだ',
            'romaji' => 'Hotto-Yuda',
        ]);
        // id: 542
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '131',
            'kanji' => 'ゆだ錦秋湖',
            'kana' => 'ゆだきんしゅうこ',
            'romaji' => 'Yudakinshūko',
        ]);
        // id: 543
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '131',
            'kanji' => 'ゆだ高原',
            'kana' => 'ゆだこうげん',
            'romaji' => 'Yuda-Kōgen',
        ]);
        // id: 544
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '132',
            'kanji' => '二戸',
            'kana' => 'にのへ',
            'romaji' => 'Ninohe',
        ]);
        // id: 545
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '赤坂田',
            'kana' => 'あかさかた',
            'romaji' => 'Akasakata',
        ]);
        // id: 546
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '安比高原',
            'kana' => 'あっぴこうげん',
            'romaji' => 'Appi-Kōgen',
        ]);
        // id: 547
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '兄畑',
            'kana' => 'あにはた',
            'romaji' => 'Anihata',
        ]);
        // id: 548
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '荒屋新町',
            'kana' => 'あらやしんまち',
            'romaji' => 'Arayashimmachi',
        ]);
        // id: 549
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '大更',
            'kana' => 'おおぶけ',
            'romaji' => 'Ōbuke',
        ]);
        // id: 550
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '北森',
            'kana' => 'きたもり',
            'romaji' => 'Kitamori',
        ]);
        // id: 551
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '小屋の畑',
            'kana' => 'こやのはた',
            'romaji' => 'Koyanohata',
        ]);
        // id: 552
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '平館',
            'kana' => 'たいらだて',
            'romaji' => 'Tairadate',
        ]);
        // id: 553
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '田山',
            'kana' => 'たやま',
            'romaji' => 'Tayama',
        ]);
        // id: 554
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '東大更',
            'kana' => 'ひがしおおぶけ',
            'romaji' => 'Higashi-Ōbuke',
        ]);
        // id: 555
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '松尾八幡平',
            'kana' => 'まつおはちまんたい',
            'romaji' => 'Matsuohachimantai',
        ]);
        // id: 556
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '133',
            'kanji' => '横間',
            'kana' => 'よこま',
            'romaji' => 'Yokoma',
        ]);
        // id: 557
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '134',
            'kanji' => '石鳥谷',
            'kana' => 'いしどりや',
            'romaji' => 'Ishidoriya',
        ]);
        // id: 558
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '134',
            'kanji' => '小山田',
            'kana' => 'おやまだ',
            'romaji' => 'Oyamada',
        ]);
        // id: 559
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '134',
            'kanji' => '新花巻',
            'kana' => 'しんはなまき',
            'romaji' => 'Shin-Hanamaki',
        ]);
        // id: 560
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '134',
            'kanji' => '土沢',
            'kana' => 'つちざわ',
            'romaji' => 'Tsuchizawa',
        ]);
        // id: 561
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '134',
            'kanji' => '似内',
            'kana' => 'にたない',
            'romaji' => 'Nitanai',
        ]);
        // id: 562
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '134',
            'kanji' => '花巻',
            'kana' => 'はなまき',
            'romaji' => 'Hanamaki',
        ]);
        // id: 563
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '134',
            'kanji' => '花巻空港',
            'kana' => 'はなまきくうこう',
            'romaji' => 'Hanamaki-Kūkō',
        ]);
        // id: 564
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '134',
            'kanji' => '晴山',
            'kana' => 'はるやま',
            'romaji' => 'Haruyama',
        ]);
        // id: 565
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '135',
            'kanji' => '平泉',
            'kana' => 'ひらいずみ',
            'romaji' => 'Hiraizumi',
        ]);
        // id: 566
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '136',
            'kanji' => '有家',
            'kana' => 'うげ',
            'romaji' => 'Uge',
        ]);
        // id: 567
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '136',
            'kanji' => '角の浜',
            'kana' => 'かどのはま',
            'romaji' => 'Kadonohama',
        ]);
        // id: 568
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '136',
            'kanji' => '宿戸',
            'kana' => 'しゅくのへ',
            'romaji' => 'Shukunohe',
        ]);
        // id: 569
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '136',
            'kanji' => '種市',
            'kana' => 'たねいち',
            'romaji' => 'Taneichi',
        ]);
        // id: 570
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '136',
            'kanji' => '玉川',
            'kana' => 'たまがわ',
            'romaji' => 'Tamagawa',
        ]);
        // id: 571
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '136',
            'kanji' => '平内',
            'kana' => 'ひらない',
            'romaji' => 'Hiranai',
        ]);
        // id: 572
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '136',
            'kanji' => '陸中中野',
            'kana' => 'りくちゅうなかの',
            'romaji' => 'Rikuchū-Nakano',
        ]);
        // id: 573
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '136',
            'kanji' => '陸中八木',
            'kana' => 'りくちゅうやぎ',
            'romaji' => 'Rikuchū-Yagi',
        ]);
        // id: 574
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '川内',
            'kana' => 'かわうち',
            'romaji' => 'Kawauchi',
        ]);
        // id: 575
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '区界',
            'kana' => 'くざかい',
            'romaji' => 'Kuzakai',
        ]);
        // id: 576
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '花原市',
            'kana' => 'けばらいち',
            'romaji' => 'Kebaraichi',
        ]);
        // id: 577
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '千徳',
            'kana' => 'せんとく',
            'romaji' => 'Sentoku',
        ]);
        // id: 578
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '箱石',
            'kana' => 'はこいし',
            'romaji' => 'Hakoishi',
        ]);
        // id: 579
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '腹帯',
            'kana' => 'はらたい',
            'romaji' => 'Haratai',
        ]);
        // id: 580
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '蟇目',
            'kana' => 'ひきめ',
            'romaji' => 'Hikime',
        ]);
        // id: 581
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '平津戸',
            'kana' => 'ひらつと',
            'romaji' => 'Hiratsuto',
        ]);
        // id: 582
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '松草',
            'kana' => 'まつくさ',
            'romaji' => 'Matsukusa',
        ]);
        // id: 583
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '宮古',
            'kana' => 'みやこ',
            'romaji' => 'Miyako',
        ]);
        // id: 584
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '茂市',
            'kana' => 'もいち',
            'romaji' => 'Moichi',
        ]);
        // id: 585
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '137',
            'kanji' => '陸中川井',
            'kana' => 'りくちゅうかわい',
            'romaji' => 'Rikuchū-Kawai',
        ]);
        // id: 586
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '138',
            'kanji' => '岩手飯岡',
            'kana' => 'いわていいおか',
            'romaji' => 'Iwate-Iioka',
        ]);
        // id: 587
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '138',
            'kanji' => '上盛岡',
            'kana' => 'かみもりおか',
            'romaji' => 'Kami-Morioka',
        ]);
        // id: 588
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '138',
            'kanji' => '上米内',
            'kana' => 'かみよない',
            'romaji' => 'Kami-Yonai',
        ]);
        // id: 589
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '138',
            'kanji' => '好摩',
            'kana' => 'こうま',
            'romaji' => 'Kōma',
        ]);
        // id: 590
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '138',
            'kanji' => '仙北町',
            'kana' => 'せんぼくちょう',
            'romaji' => 'Sembokuchō',
        ]);
        // id: 591
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '138',
            'kanji' => '盛岡',
            'kana' => 'もりおか',
            'romaji' => 'Morioka',
        ]);
        // id: 592
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '138',
            'kanji' => '山岸',
            'kana' => 'やまぎし',
            'romaji' => 'Yamagishi',
        ]);
        // id: 593
        Station::insert([
            'prefecture_id' => '3',
            'city_id' => '139',
            'kanji' => '矢幅',
            'kana' => 'やはば',
            'romaji' => 'Yahaba',
        ]);
        // id: 594
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '石巻',
            'kana' => 'いしのまき',
            'romaji' => 'Ishinomaki',
        ]);
        // id: 595
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '石巻あゆみ野',
            'kana' => 'いしのまきあゆみの',
            'romaji' => 'Ishinomakiayumino',
        ]);
        // id: 596
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '佳景山',
            'kana' => 'かけやま',
            'romaji' => 'Kakeyama',
        ]);
        // id: 597
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '鹿又',
            'kana' => 'かのまた',
            'romaji' => 'Kanomata',
        ]);
        // id: 598
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '沢田',
            'kana' => 'さわだ',
            'romaji' => 'Sawada',
        ]);
        // id: 599
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '曽波神',
            'kana' => 'そばのかみ',
            'romaji' => 'Sobanokami',
        ]);
        // id: 600
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '蛇田',
            'kana' => 'へびた',
            'romaji' => 'Hebita',
        ]);
        // id: 601
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '前谷地',
            'kana' => 'まえやち',
            'romaji' => 'Maeyachi',
        ]);
        // id: 602
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '万石浦',
            'kana' => 'まんごくうら',
            'romaji' => 'Mangokuura',
        ]);
        // id: 603
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '陸前稲井',
            'kana' => 'りくぜんいない',
            'romaji' => 'Rikuzen-Inai',
        ]);
        // id: 604
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '陸前山下',
            'kana' => 'りくぜんやました',
            'romaji' => 'Rikuzen-Yamashita',
        ]);
        // id: 605
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '渡波',
            'kana' => 'わたのは',
            'romaji' => 'Watanoha',
        ]);
        // id: 606
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '140',
            'kanji' => '和渕',
            'kana' => 'わぶち',
            'romaji' => 'Wabuchi',
        ]);
        // id: 607
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '141',
            'kanji' => '岩沼',
            'kana' => 'いわぬま',
            'romaji' => 'Iwanuma',
        ]);
        // id: 608
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '142',
            'kanji' => '大河原',
            'kana' => 'おおがわら',
            'romaji' => 'Ōgawara',
        ]);
        // id: 609
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '池月',
            'kana' => 'いけづき',
            'romaji' => 'Ikezuki',
        ]);
        // id: 610
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '岩出山',
            'kana' => 'いわでやま',
            'romaji' => 'Iwadeyama',
        ]);
        // id: 611
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '鹿島台',
            'kana' => 'かしまだい',
            'romaji' => 'Kashimadai',
        ]);
        // id: 612
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '上野目',
            'kana' => 'かみのめ',
            'romaji' => 'Kaminome',
        ]);
        // id: 613
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '川渡温泉',
            'kana' => 'かわたびおんせん',
            'romaji' => 'Kawatabi-Onsen',
        ]);
        // id: 614
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '田尻',
            'kana' => 'たじり',
            'romaji' => 'Tajiri',
        ]);
        // id: 615
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '塚目',
            'kana' => 'つかのめ',
            'romaji' => 'Tsukanome',
        ]);
        // id: 616
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '中山平温泉',
            'kana' => 'なかやまだいらおんせん',
            'romaji' => 'Nakayamadaira-Onsen',
        ]);
        // id: 617
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '鳴子温泉',
            'kana' => 'なるこおんせん',
            'romaji' => 'Naruko-Onsen',
        ]);
        // id: 618
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '鳴子御殿湯',
            'kana' => 'なるこごてんゆ',
            'romaji' => 'Naruko-Goten-yu',
        ]);
        // id: 619
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '西大崎',
            'kana' => 'にしおおさき',
            'romaji' => 'Nishi-Ōsaki',
        ]);
        // id: 620
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '西古川',
            'kana' => 'にしふるかわ',
            'romaji' => 'Nishi-Furukawa',
        ]);
        // id: 621
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '東大崎',
            'kana' => 'ひがしおおさき',
            'romaji' => 'Higashi-Ōsaki',
        ]);
        // id: 622
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '古川',
            'kana' => 'ふるかわ',
            'romaji' => 'Furukawa',
        ]);
        // id: 623
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '松山町',
            'kana' => 'まつやままち',
            'romaji' => 'Matsuyamamachi',
        ]);
        // id: 624
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '143',
            'kanji' => '有備館',
            'kana' => 'ゆうびかん',
            'romaji' => 'Yūbikan',
        ]);
        // id: 625
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '144',
            'kanji' => '浦宿',
            'kana' => 'うらしゅく',
            'romaji' => 'Urashuku',
        ]);
        // id: 626
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '144',
            'kanji' => '女川',
            'kana' => 'おながわ',
            'romaji' => 'Onagawa',
        ]);
        // id: 627
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '145',
            'kanji' => '有壁',
            'kana' => 'ありかべ',
            'romaji' => 'Arikabe',
        ]);
        // id: 628
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '145',
            'kanji' => 'くりこま高原',
            'kana' => 'くりこまこうげん',
            'romaji' => 'Kurikoma-Kōgen',
        ]);
        // id: 629
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '145',
            'kanji' => '瀬峰',
            'kana' => 'せみね',
            'romaji' => 'Semine',
        ]);
        // id: 630
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '146',
            'kanji' => '気仙沼',
            'kana' => 'けせんぬま',
            'romaji' => 'Kesennuma',
        ]);
        // id: 631
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '147',
            'kanji' => '塩釜',
            'kana' => 'しおがま',
            'romaji' => 'Shiogama',
        ]);
        // id: 632
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '147',
            'kanji' => '西塩釜',
            'kana' => 'にししおがま',
            'romaji' => 'Nishi-Shiogama',
        ]);
        // id: 633
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '147',
            'kanji' => '東塩釜',
            'kana' => 'ひがししおがま',
            'romaji' => 'Higashi-Shiogama',
        ]);
        // id: 634
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '147',
            'kanji' => '本塩釜',
            'kana' => 'ほんしおがま',
            'romaji' => 'Hon-Shiogama',
        ]);
        // id: 635
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '148',
            'kanji' => '槻木',
            'kana' => 'つきのき',
            'romaji' => 'Tsukinoki',
        ]);
        // id: 636
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '148',
            'kanji' => '船岡',
            'kana' => 'ふなおか',
            'romaji' => 'Funaoka',
        ]);
        // id: 637
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '149',
            'kanji' => '北白川',
            'kana' => 'きたしらかわ',
            'romaji' => 'Kita-Shirakawa',
        ]);
        // id: 638
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '149',
            'kanji' => '越河',
            'kana' => 'こすごう',
            'romaji' => 'Kosugō',
        ]);
        // id: 639
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '149',
            'kanji' => '白石',
            'kana' => 'しろいし',
            'romaji' => 'Shiroishi',
        ]);
        // id: 640
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '149',
            'kanji' => '白石蔵王',
            'kana' => 'しろいしざおう',
            'romaji' => 'Shiroishi-Zaō',
        ]);
        // id: 641
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '149',
            'kanji' => '東白石',
            'kana' => 'ひがししろいし',
            'romaji' => 'Higashi-Shiroishi',
        ]);
        // id: 642
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => 'あおば通',
            'kana' => 'あおばどおり',
            'romaji' => 'Aobadōri',
        ]);
        // id: 643
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '愛子',
            'kana' => 'あやし',
            'romaji' => 'Ayashi',
        ]);
        // id: 644
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '岩切',
            'kana' => 'いわきり',
            'romaji' => 'Iwakiri',
        ]);
        // id: 645
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '奥新川',
            'kana' => 'おくにっかわ',
            'romaji' => 'Okunikkawa',
        ]);
        // id: 646
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '北仙台',
            'kana' => 'きたせんだい',
            'romaji' => 'Kita-Sendai',
        ]);
        // id: 647
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '北山',
            'kana' => 'きたやま',
            'romaji' => 'Kitayama',
        ]);
        // id: 648
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '葛岡',
            'kana' => 'くずおか',
            'romaji' => 'Kuzuoka',
        ]);
        // id: 649
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '国見',
            'kana' => 'くにみ',
            'romaji' => 'Kunimi',
        ]);
        // id: 650
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '熊ケ根',
            'kana' => 'くまがね',
            'romaji' => 'Kumagane',
        ]);
        // id: 651
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '小鶴新田',
            'kana' => 'こづるしんでん',
            'romaji' => 'Kozurushinden',
        ]);
        // id: 652
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '作並',
            'kana' => 'さくなみ',
            'romaji' => 'Sakunami',
        ]);
        // id: 653
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '仙台',
            'kana' => 'せんだい',
            'romaji' => 'Sendai',
        ]);
        // id: 654
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '太子堂',
            'kana' => 'たいしどう',
            'romaji' => 'Taishidō',
        ]);
        // id: 655
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '榴ケ岡',
            'kana' => 'つつじがおか',
            'romaji' => 'Tsutsujigaoka',
        ]);
        // id: 656
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '東照宮',
            'kana' => 'とうしょうぐう',
            'romaji' => 'Tōshōgū',
        ]);
        // id: 657
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '東北福祉大前',
            'kana' => 'とうほくふくしだいまえ',
            'romaji' => 'Tōhokufukushidaimae',
        ]);
        // id: 658
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '中野栄',
            'kana' => 'なかのさかえ',
            'romaji' => 'Nakanosakae',
        ]);
        // id: 659
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '長町',
            'kana' => 'ながまち',
            'romaji' => 'Nagamachi',
        ]);
        // id: 660
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '苦竹',
            'kana' => 'にがたけ',
            'romaji' => 'Nigatake',
        ]);
        // id: 661
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '東仙台',
            'kana' => 'ひがしせんだい',
            'romaji' => 'Higashi-Sendai',
        ]);
        // id: 662
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '福田町',
            'kana' => 'ふくだまち',
            'romaji' => 'Fukudamachi',
        ]);
        // id: 663
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '南仙台',
            'kana' => 'みなみせんだい',
            'romaji' => 'Minami-Sendai',
        ]);
        // id: 664
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '宮城野原',
            'kana' => 'みやぎのはら',
            'romaji' => 'Miyaginohara',
        ]);
        // id: 665
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '陸前落合',
            'kana' => 'りくぜんおちあい',
            'romaji' => 'Rikuzen-Ochiai',
        ]);
        // id: 666
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '陸前白沢',
            'kana' => 'りくぜんしらさわ',
            'romaji' => 'Rikuzen-Shirasawa',
        ]);
        // id: 667
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '陸前高砂',
            'kana' => 'りくぜんたかさご',
            'romaji' => 'Rikuzen-Takasago',
        ]);
        // id: 668
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '150',
            'kanji' => '陸前原ノ町',
            'kana' => 'りくぜんはらのまち',
            'romaji' => 'Rikuzen-Haranomachi',
        ]);
        // id: 669
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '151',
            'kanji' => '下馬',
            'kana' => 'げば',
            'romaji' => 'Geba',
        ]);
        // id: 670
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '151',
            'kanji' => '国府多賀城',
            'kana' => 'こくふたがじょう',
            'romaji' => 'Kokufu-Tagajō',
        ]);
        // id: 671
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '151',
            'kanji' => '多賀城',
            'kana' => 'たがじょう',
            'romaji' => 'Tagajō',
        ]);
        // id: 672
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '151',
            'kanji' => '陸前山王',
            'kana' => 'りくぜんさんのう',
            'romaji' => 'Rikuzen-Sannō',
        ]);
        // id: 673
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '152',
            'kanji' => '石越',
            'kana' => 'いしこし',
            'romaji' => 'Ishikoshi',
        ]);
        // id: 674
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '152',
            'kanji' => '梅ケ沢',
            'kana' => 'うめがさわ',
            'romaji' => 'Umegasawa',
        ]);
        // id: 675
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '152',
            'kanji' => '新田',
            'kana' => 'にった',
            'romaji' => 'Nitta',
        ]);
        // id: 676
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '152',
            'kanji' => '御岳堂',
            'kana' => 'みたけどう',
            'romaji' => 'Mitakedō',
        ]);
        // id: 677
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '152',
            'kanji' => '柳津',
            'kana' => 'やないづ',
            'romaji' => 'Yanaizu',
        ]);
        // id: 678
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '152',
            'kanji' => '陸前豊里',
            'kana' => 'りくぜんとよさと',
            'romaji' => 'Rikuzen-Toyosato',
        ]);
        // id: 679
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '153',
            'kanji' => '館腰',
            'kana' => 'たてこし',
            'romaji' => 'Tatekoshi',
        ]);
        // id: 680
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '153',
            'kanji' => '名取',
            'kana' => 'なとり',
            'romaji' => 'Natori',
        ]);
        // id: 681
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '154',
            'kanji' => '鹿妻',
            'kana' => 'かづま',
            'romaji' => 'Kazuma',
        ]);
        // id: 682
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '154',
            'kanji' => '東名',
            'kana' => 'とうな',
            'romaji' => 'Tōna',
        ]);
        // id: 683
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '154',
            'kanji' => '野蒜',
            'kana' => 'のびる',
            'romaji' => 'Nobiru',
        ]);
        // id: 684
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '154',
            'kanji' => '東矢本',
            'kana' => 'ひがしやもと',
            'romaji' => 'Higashi-Yamoto',
        ]);
        // id: 685
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '154',
            'kanji' => '矢本',
            'kana' => 'やもと',
            'romaji' => 'Yamoto',
        ]);
        // id: 686
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '154',
            'kanji' => '陸前赤井',
            'kana' => 'りくぜんあかい',
            'romaji' => 'Rikuzen-Akai',
        ]);
        // id: 687
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '154',
            'kanji' => '陸前大塚',
            'kana' => 'りくぜんおおつか',
            'romaji' => 'Rikuzen-Ōtsuka',
        ]);
        // id: 688
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '154',
            'kanji' => '陸前小野',
            'kana' => 'りくぜんおの',
            'romaji' => 'Rikuzen-Ono',
        ]);
        // id: 689
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '155',
            'kanji' => '愛宕',
            'kana' => 'あたご',
            'romaji' => 'Atago',
        ]);
        // id: 690
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '155',
            'kanji' => '品井沼',
            'kana' => 'しないぬま',
            'romaji' => 'Shinainuma',
        ]);
        // id: 691
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '155',
            'kanji' => '高城町',
            'kana' => 'たかぎまち',
            'romaji' => 'Takagimachi',
        ]);
        // id: 692
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '155',
            'kanji' => '手樽',
            'kana' => 'てたる',
            'romaji' => 'Tetaru',
        ]);
        // id: 693
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '155',
            'kanji' => '松島',
            'kana' => 'まつしま',
            'romaji' => 'Matsushima',
        ]);
        // id: 694
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '155',
            'kanji' => '松島海岸',
            'kana' => 'まつしまかいがん',
            'romaji' => 'Matsushimakaigan',
        ]);
        // id: 695
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '155',
            'kanji' => '陸前富山',
            'kana' => 'りくぜんとみやま',
            'romaji' => 'Rikuzen-Tomiyama',
        ]);
        // id: 696
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '156',
            'kanji' => '北浦',
            'kana' => 'きたうら',
            'romaji' => 'Kitaura',
        ]);
        // id: 697
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '156',
            'kanji' => '小牛田',
            'kana' => 'こごた',
            'romaji' => 'Kogota',
        ]);
        // id: 698
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '156',
            'kanji' => '陸前谷地',
            'kana' => 'りくぜんやち',
            'romaji' => 'Rikuzen-Yachi',
        ]);
        // id: 699
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '157',
            'kanji' => '坂元',
            'kana' => 'さかもと',
            'romaji' => 'Sakamoto',
        ]);
        // id: 700
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '157',
            'kanji' => '山下',
            'kana' => 'やました',
            'romaji' => 'Yamashita',
        ]);
        // id: 701
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '158',
            'kanji' => '新利府',
            'kana' => 'しんりふ',
            'romaji' => 'Shin-Rifu',
        ]);
        // id: 702
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '158',
            'kanji' => '陸前浜田',
            'kana' => 'りくぜんはまだ',
            'romaji' => 'Rikuzen-Hamada',
        ]);
        // id: 703
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '158',
            'kanji' => '利府',
            'kana' => 'りふ',
            'romaji' => 'Rifu',
        ]);
        // id: 704
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '159',
            'kanji' => '上涌谷',
            'kana' => 'かみわくや',
            'romaji' => 'Kami-Wakuya',
        ]);
        // id: 705
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '159',
            'kanji' => 'のの岳',
            'kana' => 'ののだけ',
            'romaji' => 'Nonodake',
        ]);
        // id: 706
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '159',
            'kanji' => '涌谷',
            'kana' => 'わくや',
            'romaji' => 'Wakuya',
        ]);
        // id: 707
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '160',
            'kanji' => '逢隈',
            'kana' => 'おおくま',
            'romaji' => 'Ōkuma',
        ]);
        // id: 708
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '160',
            'kanji' => '浜吉田',
            'kana' => 'はまよしだ',
            'romaji' => 'Hamayoshida',
        ]);
        // id: 709
        Station::insert([
            'prefecture_id' => '4',
            'city_id' => '160',
            'kanji' => '亘理',
            'kana' => 'わたり',
            'romaji' => 'Watari',
        ]);
        // id: 710
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '秋田',
            'kana' => 'あきた',
            'romaji' => 'Akita',
        ]);
        // id: 711
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '新屋',
            'kana' => 'あらや',
            'romaji' => 'Araya',
        ]);
        // id: 712
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '羽後牛島',
            'kana' => 'うごうしじま',
            'romaji' => 'Ugo-Ushijima',
        ]);
        // id: 713
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '追分',
            'kana' => 'おいわけ',
            'romaji' => 'Oiwake',
        ]);
        // id: 714
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '大張野',
            'kana' => 'おおばりの',
            'romaji' => 'Ōbarino',
        ]);
        // id: 715
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '桂根',
            'kana' => 'かつらね',
            'romaji' => 'Katsurane',
        ]);
        // id: 716
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '上飯島',
            'kana' => 'かみいいじま',
            'romaji' => 'Kami-Iijima',
        ]);
        // id: 717
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '下浜',
            'kana' => 'しもはま',
            'romaji' => 'Shimohama',
        ]);
        // id: 718
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '土崎',
            'kana' => 'つちざき',
            'romaji' => 'Tsuchizaki',
        ]);
        // id: 719
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '四ツ小屋',
            'kana' => 'よつごや',
            'romaji' => 'Yotsugoya',
        ]);
        // id: 720
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '161',
            'kanji' => '和田',
            'kana' => 'わだ',
            'romaji' => 'Wada',
        ]);
        // id: 721
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '162',
            'kanji' => '井川さくら',
            'kana' => 'いかわさくら',
            'romaji' => 'Ikawasakura',
        ]);
        // id: 722
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '扇田',
            'kana' => 'おうぎた',
            'romaji' => 'Ōgita',
        ]);
        // id: 723
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '大滝温泉',
            'kana' => 'おおたきおんせん',
            'romaji' => 'Ōtaki-Onsen',
        ]);
        // id: 724
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '大館',
            'kana' => 'おおだて',
            'romaji' => 'Ōdate',
        ]);
        // id: 725
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '沢尻',
            'kana' => 'さわじり',
            'romaji' => 'Sawajiri',
        ]);
        // id: 726
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '下川沿',
            'kana' => 'しもかわぞい',
            'romaji' => 'Shimo-Kawazoi',
        ]);
        // id: 727
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '十二所',
            'kana' => 'じゅうにしょ',
            'romaji' => 'Jūnisho',
        ]);
        // id: 728
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '白沢',
            'kana' => 'しらさわ',
            'romaji' => 'Shirasawa',
        ]);
        // id: 729
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '陣場',
            'kana' => 'じんば',
            'romaji' => 'Jimba',
        ]);
        // id: 730
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '早口',
            'kana' => 'はやぐち',
            'romaji' => 'Hayaguchi',
        ]);
        // id: 731
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '163',
            'kanji' => '東大館',
            'kana' => 'ひがしおおだて',
            'romaji' => 'Higashi-Ōdate',
        ]);
        // id: 732
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '164',
            'kanji' => '男鹿',
            'kana' => 'おが',
            'romaji' => 'Oga',
        ]);
        // id: 733
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '164',
            'kanji' => '羽立',
            'kana' => 'はだち',
            'romaji' => 'Hadachi',
        ]);
        // id: 734
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '164',
            'kanji' => '船越',
            'kana' => 'ふなこし',
            'romaji' => 'Funakoshi',
        ]);
        // id: 735
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '164',
            'kanji' => '脇本',
            'kana' => 'わきもと',
            'romaji' => 'Wakimoto',
        ]);
        // id: 736
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '165',
            'kanji' => '羽後飯塚',
            'kana' => 'うごいいづか',
            'romaji' => 'Ugo-Iizuka',
        ]);
        // id: 737
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '165',
            'kanji' => '大久保',
            'kana' => 'おおくぼ',
            'romaji' => 'Ōkubo',
        ]);
        // id: 738
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '165',
            'kanji' => '上二田',
            'kana' => 'かみふただ',
            'romaji' => 'Kami-Futada',
        ]);
        // id: 739
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '165',
            'kanji' => '出戸浜',
            'kana' => 'でとはま',
            'romaji' => 'Detohama',
        ]);
        // id: 740
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '165',
            'kanji' => '天王',
            'kana' => 'てんのう',
            'romaji' => 'Tennō',
        ]);
        // id: 741
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '165',
            'kanji' => '二田',
            'kana' => 'ふただ',
            'romaji' => 'Futada',
        ]);
        // id: 742
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '166',
            'kanji' => '鹿角花輪',
            'kana' => 'かづのはなわ',
            'romaji' => 'Kazunohanawa',
        ]);
        // id: 743
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '166',
            'kanji' => '柴平',
            'kana' => 'しばひら',
            'romaji' => 'Shibahira',
        ]);
        // id: 744
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '166',
            'kanji' => '末広',
            'kana' => 'すえひろ',
            'romaji' => 'Suehiro',
        ]);
        // id: 745
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '166',
            'kanji' => '土深井',
            'kana' => 'どぶかい',
            'romaji' => 'Dobukai',
        ]);
        // id: 746
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '166',
            'kanji' => '十和田南',
            'kana' => 'とわだみなみ',
            'romaji' => 'Towadaminami',
        ]);
        // id: 747
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '166',
            'kanji' => '八幡平',
            'kana' => 'はちまんたい',
            'romaji' => 'Hachimantai',
        ]);
        // id: 748
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '166',
            'kanji' => '湯瀬温泉',
            'kana' => 'ゆぜおんせん',
            'romaji' => 'Yuze-Onsen',
        ]);
        // id: 749
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '166',
            'kanji' => '陸中大里',
            'kana' => 'りくちゅうおおさと',
            'romaji' => 'Rikuchū-Ōsato',
        ]);
        // id: 750
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '167',
            'kanji' => '鷹ノ巣',
            'kana' => 'たかのす',
            'romaji' => 'Takanosu',
        ]);
        // id: 751
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '167',
            'kanji' => '糠沢',
            'kana' => 'ぬかざわ',
            'romaji' => 'Nukazawa',
        ]);
        // id: 752
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '167',
            'kanji' => '前山',
            'kana' => 'まえやま',
            'romaji' => 'Maeyama',
        ]);
        // id: 753
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '168',
            'kanji' => '角館',
            'kana' => 'かくのだて',
            'romaji' => 'Kakunodate',
        ]);
        // id: 754
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '168',
            'kanji' => '刺巻',
            'kana' => 'さしまき',
            'romaji' => 'Sashimaki',
        ]);
        // id: 755
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '168',
            'kanji' => '生田',
            'kana' => 'しょうでん',
            'romaji' => 'Shōden',
        ]);
        // id: 756
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '168',
            'kanji' => '神代',
            'kana' => 'じんだい',
            'romaji' => 'Jindai',
        ]);
        // id: 757
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '168',
            'kanji' => '田沢湖',
            'kana' => 'たざわこ',
            'romaji' => 'Tazawako',
        ]);
        // id: 758
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '鶯野',
            'kana' => 'うぐいすの',
            'romaji' => 'Uguisuno',
        ]);
        // id: 759
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '羽後境',
            'kana' => 'うごさかい',
            'romaji' => 'Ugo-Sakai',
        ]);
        // id: 760
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '羽後長野',
            'kana' => 'うごながの',
            'romaji' => 'Ugo-Nagano',
        ]);
        // id: 761
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '羽後四ツ屋',
            'kana' => 'うごよつや',
            'romaji' => 'Ugo-Yotsuya',
        ]);
        // id: 762
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '大曲',
            'kana' => 'おおまがり',
            'romaji' => 'Ōmagari',
        ]);
        // id: 763
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '刈和野',
            'kana' => 'かりわの',
            'romaji' => 'Kariwano',
        ]);
        // id: 764
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '北大曲',
            'kana' => 'きたおおまがり',
            'romaji' => 'Kita-Ōmagari',
        ]);
        // id: 765
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '神宮寺',
            'kana' => 'じんぐうじ',
            'romaji' => 'Jingūji',
        ]);
        // id: 766
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '峰吉川',
            'kana' => 'みねよしかわ',
            'romaji' => 'Mineyoshikawa',
        ]);
        // id: 767
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '169',
            'kanji' => '鑓見内',
            'kana' => 'やりみない',
            'romaji' => 'Yariminai',
        ]);
        // id: 768
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '170',
            'kanji' => '上浜',
            'kana' => 'かみはま',
            'romaji' => 'Kamihama',
        ]);
        // id: 769
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '170',
            'kanji' => '象潟',
            'kana' => 'きさかた',
            'romaji' => 'Kisakata',
        ]);
        // id: 770
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '170',
            'kanji' => '小砂川',
            'kana' => 'こさがわ',
            'romaji' => 'Kosagawa',
        ]);
        // id: 771
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '170',
            'kanji' => '金浦',
            'kana' => 'このうら',
            'romaji' => 'Konoura',
        ]);
        // id: 772
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '170',
            'kanji' => '仁賀保',
            'kana' => 'にかほ',
            'romaji' => 'Nikaho',
        ]);
        // id: 773
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '171',
            'kanji' => '北能代',
            'kana' => 'きたのしろ',
            'romaji' => 'Kita-Noshiro',
        ]);
        // id: 774
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '171',
            'kanji' => '鶴形',
            'kana' => 'つるがた',
            'romaji' => 'Tsurugata',
        ]);
        // id: 775
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '171',
            'kanji' => '富根',
            'kana' => 'とみね',
            'romaji' => 'Tomine',
        ]);
        // id: 776
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '171',
            'kanji' => '鳥形',
            'kana' => 'とりがた',
            'romaji' => 'Torigata',
        ]);
        // id: 777
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '171',
            'kanji' => '能代',
            'kana' => 'のしろ',
            'romaji' => 'Noshiro',
        ]);
        // id: 778
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '171',
            'kanji' => '東能代',
            'kana' => 'ひがしのしろ',
            'romaji' => 'Higashi-Noshiro',
        ]);
        // id: 779
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '171',
            'kanji' => '二ツ井',
            'kana' => 'ふたつい',
            'romaji' => 'Futatsui',
        ]);
        // id: 780
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '171',
            'kanji' => '向能代',
            'kana' => 'むかいのしろ',
            'romaji' => 'Mukai-Noshiro',
        ]);
        // id: 781
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '172',
            'kanji' => '八郎潟',
            'kana' => 'はちろうがた',
            'romaji' => 'Hachirōgata',
        ]);
        // id: 782
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '173',
            'kanji' => 'あきた白神',
            'kana' => 'あきたしらかみ',
            'romaji' => 'Akita-Shirakami',
        ]);
        // id: 783
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '173',
            'kanji' => '岩館',
            'kana' => 'いわだて',
            'romaji' => 'Iwadate',
        ]);
        // id: 784
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '173',
            'kanji' => '沢目',
            'kana' => 'さわめ',
            'romaji' => 'Sawame',
        ]);
        // id: 785
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '173',
            'kanji' => '滝ノ間',
            'kana' => 'たきのま',
            'romaji' => 'Takinoma',
        ]);
        // id: 786
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '173',
            'kanji' => '八森',
            'kana' => 'はちもり',
            'romaji' => 'Hachimori',
        ]);
        // id: 787
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '173',
            'kanji' => '東八森',
            'kana' => 'ひがしはちもり',
            'romaji' => 'Higashi-Hachimori',
        ]);
        // id: 788
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '174',
            'kanji' => '飯詰',
            'kana' => 'いいづめ',
            'romaji' => 'Iizume',
        ]);
        // id: 789
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '174',
            'kanji' => '後三年',
            'kana' => 'ごさんねん',
            'romaji' => 'Gosannen',
        ]);
        // id: 790
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '175',
            'kanji' => '鹿渡',
            'kana' => 'かど',
            'romaji' => 'Kado',
        ]);
        // id: 791
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '175',
            'kanji' => '北金岡',
            'kana' => 'きたかなおか',
            'romaji' => 'Kita-Kanaoka',
        ]);
        // id: 792
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '175',
            'kanji' => '鯉川',
            'kana' => 'こいかわ',
            'romaji' => 'Koikawa',
        ]);
        // id: 793
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '175',
            'kanji' => '森岳',
            'kana' => 'もりたけ',
            'romaji' => 'Moritake',
        ]);
        // id: 794
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '176',
            'kanji' => '院内',
            'kana' => 'いんない',
            'romaji' => 'Innai',
        ]);
        // id: 795
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '176',
            'kanji' => '上湯沢',
            'kana' => 'かみゆざわ',
            'romaji' => 'Kami-Yuzawa',
        ]);
        // id: 796
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '176',
            'kanji' => '下湯沢',
            'kana' => 'しもゆざわ',
            'romaji' => 'Shimo-Yuzawa',
        ]);
        // id: 797
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '176',
            'kanji' => '三関',
            'kana' => 'みつせき',
            'romaji' => 'Mitsuseki',
        ]);
        // id: 798
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '176',
            'kanji' => '湯沢',
            'kana' => 'ゆざわ',
            'romaji' => 'Yuzawa',
        ]);
        // id: 799
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '176',
            'kanji' => '横堀',
            'kana' => 'よこぼり',
            'romaji' => 'Yokobori',
        ]);
        // id: 800
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '177',
            'kanji' => '岩城みなと',
            'kana' => 'いわきみなと',
            'romaji' => 'Iwaki-Minato',
        ]);
        // id: 801
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '177',
            'kanji' => '羽後岩谷',
            'kana' => 'うごいわや',
            'romaji' => 'Ugo-Iwaya',
        ]);
        // id: 802
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '177',
            'kanji' => '羽後亀田',
            'kana' => 'うごかめだ',
            'romaji' => 'Ugo-Kameda',
        ]);
        // id: 803
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '177',
            'kanji' => '羽後本荘',
            'kana' => 'うごほんじょう',
            'romaji' => 'Ugo-Honjō',
        ]);
        // id: 804
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '177',
            'kanji' => '折渡',
            'kana' => 'おりわたり',
            'romaji' => 'Oriwatari',
        ]);
        // id: 805
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '177',
            'kanji' => '西目',
            'kana' => 'にしめ',
            'romaji' => 'Nishime',
        ]);
        // id: 806
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '177',
            'kanji' => '道川',
            'kana' => 'みちかわ',
            'romaji' => 'Michikawa',
        ]);
        // id: 807
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '相野々',
            'kana' => 'あいのの',
            'romaji' => 'Ainono',
        ]);
        // id: 808
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '黒沢',
            'kana' => 'くろさわ',
            'romaji' => 'Kurosawa',
        ]);
        // id: 809
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '小松川',
            'kana' => 'こまつかわ',
            'romaji' => 'Komatsukawa',
        ]);
        // id: 810
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '十文字',
            'kana' => 'じゅうもんじ',
            'romaji' => 'Jūmonji',
        ]);
        // id: 811
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '醍醐',
            'kana' => 'だいご',
            'romaji' => 'Daigo',
        ]);
        // id: 812
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '平石',
            'kana' => 'ひらいし',
            'romaji' => 'Hiraishi',
        ]);
        // id: 813
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '柳田',
            'kana' => 'やなぎた',
            'romaji' => 'Yanagita',
        ]);
        // id: 814
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '矢美津',
            'kana' => 'やびつ',
            'romaji' => 'Yabitsu',
        ]);
        // id: 815
        Station::insert([
            'prefecture_id' => '5',
            'city_id' => '178',
            'kanji' => '横手',
            'kana' => 'よこて',
            'romaji' => 'Yokote',
        ]);
        // id: 816
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '179',
            'kanji' => '羽前椿',
            'kana' => 'うぜんつばき',
            'romaji' => 'Uzen-Tsubaki',
        ]);
        // id: 817
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '179',
            'kanji' => '手ノ子',
            'kana' => 'てのこ',
            'romaji' => 'Tenoko',
        ]);
        // id: 818
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '179',
            'kanji' => '萩生',
            'kana' => 'はぎゅう',
            'romaji' => 'Hagyū',
        ]);
        // id: 819
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '180',
            'kanji' => '大石田',
            'kana' => 'おおいしだ',
            'romaji' => 'Ōishida',
        ]);
        // id: 820
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '180',
            'kanji' => '北大石田',
            'kana' => 'きたおおいしだ',
            'romaji' => 'Kita-Ōishida',
        ]);
        // id: 821
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '181',
            'kanji' => '左沢',
            'kana' => 'あてらざわ',
            'romaji' => 'Aterazawa',
        ]);
        // id: 822
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '182',
            'kanji' => '伊佐領',
            'kana' => 'いさりょう',
            'romaji' => 'Isaryō',
        ]);
        // id: 823
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '182',
            'kanji' => '羽前沼沢',
            'kana' => 'うぜんぬまざわ',
            'romaji' => 'Uzen-Numazawa',
        ]);
        // id: 824
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '182',
            'kanji' => '羽前松岡',
            'kana' => 'うぜんまつおか',
            'romaji' => 'Uzen-Matsuoka',
        ]);
        // id: 825
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '182',
            'kanji' => '小国',
            'kana' => 'おぐに',
            'romaji' => 'Oguni',
        ]);
        // id: 826
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '183',
            'kanji' => '芦沢',
            'kana' => 'あしさわ',
            'romaji' => 'Ashisawa',
        ]);
        // id: 827
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '184',
            'kanji' => '羽前中山',
            'kana' => 'うぜんなかやま',
            'romaji' => 'Uzen-Nakayama',
        ]);
        // id: 828
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '184',
            'kanji' => 'かみのやま温泉',
            'kana' => 'かみのやまおんせん',
            'romaji' => 'Kaminoyama-Onsen',
        ]);
        // id: 829
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '184',
            'kanji' => '茂吉記念館前',
            'kana' => 'もきちきねんかんまえ',
            'romaji' => 'Mokichikinenkammae',
        ]);
        // id: 830
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '185',
            'kanji' => '犬川',
            'kana' => 'いぬかわ',
            'romaji' => 'Inukawa',
        ]);
        // id: 831
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '185',
            'kanji' => '羽前小松',
            'kana' => 'うぜんこまつ',
            'romaji' => 'Uzen-Komatsu',
        ]);
        // id: 832
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '185',
            'kanji' => '中郡',
            'kana' => 'ちゅうぐん',
            'romaji' => 'Chūgun',
        ]);
        // id: 833
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '186',
            'kanji' => '羽前高松',
            'kana' => 'うぜんたかまつ',
            'romaji' => 'Uzen-Takamatsu',
        ]);
        // id: 834
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '186',
            'kanji' => '寒河江',
            'kana' => 'さがえ',
            'romaji' => 'Sagae',
        ]);
        // id: 835
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '186',
            'kanji' => '柴橋',
            'kana' => 'しばはし',
            'romaji' => 'Shibahashi',
        ]);
        // id: 836
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '186',
            'kanji' => '西寒河江',
            'kana' => 'にしさがえ',
            'romaji' => 'Nishi-Sagae',
        ]);
        // id: 837
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '186',
            'kanji' => '南寒河江',
            'kana' => 'みなみさがえ',
            'romaji' => 'Minami-Sagae',
        ]);
        // id: 838
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '187',
            'kanji' => '酒田',
            'kana' => 'さかた',
            'romaji' => 'Sakata',
        ]);
        // id: 839
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '187',
            'kanji' => '砂越',
            'kana' => 'さごし',
            'romaji' => 'Sagoshi',
        ]);
        // id: 840
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '187',
            'kanji' => '東酒田',
            'kana' => 'ひがしさかた',
            'romaji' => 'Higashi-Sakata',
        ]);
        // id: 841
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '187',
            'kanji' => '南鳥海',
            'kana' => 'みなみちょうかい',
            'romaji' => 'Minami-Chōkai',
        ]);
        // id: 842
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '187',
            'kanji' => '本楯',
            'kana' => 'もとたて',
            'romaji' => 'Mototate',
        ]);
        // id: 843
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '188',
            'kanji' => '羽前豊里',
            'kana' => 'うぜんとよさと',
            'romaji' => 'Uzen-Toyosato',
        ]);
        // id: 844
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '189',
            'kanji' => '余目',
            'kana' => 'あまるめ',
            'romaji' => 'Amarume',
        ]);
        // id: 845
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '189',
            'kanji' => '狩川',
            'kana' => 'かりかわ',
            'romaji' => 'Karikawa',
        ]);
        // id: 846
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '189',
            'kanji' => '北余目',
            'kana' => 'きたあまるめ',
            'romaji' => 'Kita-Amarume',
        ]);
        // id: 847
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '189',
            'kanji' => '清川',
            'kana' => 'きよかわ',
            'romaji' => 'Kiyokawa',
        ]);
        // id: 848
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '189',
            'kanji' => '西袋',
            'kana' => 'にしぶくろ',
            'romaji' => 'Nishibukuro',
        ]);
        // id: 849
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '189',
            'kanji' => '南野',
            'kana' => 'みなみの',
            'romaji' => 'Minamino',
        ]);
        // id: 850
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '190',
            'kanji' => '泉田',
            'kana' => 'いずみた',
            'romaji' => 'Izumita',
        ]);
        // id: 851
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '190',
            'kanji' => '羽前前波',
            'kana' => 'うぜんぜんなみ',
            'romaji' => 'Uzen-Zennami',
        ]);
        // id: 852
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '190',
            'kanji' => '新庄',
            'kana' => 'しんじょう',
            'romaji' => 'Shinjō',
        ]);
        // id: 853
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '190',
            'kanji' => '升形',
            'kana' => 'ますかた',
            'romaji' => 'Masukata',
        ]);
        // id: 854
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '190',
            'kanji' => '南新庄',
            'kana' => 'みなみしんじょう',
            'romaji' => 'Minami-Shinjō',
        ]);
        // id: 855
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '191',
            'kanji' => '高畠',
            'kana' => 'たかはた',
            'romaji' => 'Takahata',
        ]);
        // id: 856
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => 'あつみ温泉',
            'kana' => 'あつみおんせん',
            'romaji' => 'Atsumi-onsen',
        ]);
        // id: 857
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '五十川',
            'kana' => 'いらがわ',
            'romaji' => 'Iragawa',
        ]);
        // id: 858
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '羽前大山',
            'kana' => 'うぜんおおやま',
            'romaji' => 'Uzen-Ōyama',
        ]);
        // id: 859
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '羽前水沢',
            'kana' => 'うぜんみずさわ',
            'romaji' => 'Uzen-Mizusawa',
        ]);
        // id: 860
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '小岩川',
            'kana' => 'こいわがわ',
            'romaji' => 'Koiwagawa',
        ]);
        // id: 861
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '小波渡',
            'kana' => 'こばと',
            'romaji' => 'Kobato',
        ]);
        // id: 862
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '三瀬',
            'kana' => 'さんぜ',
            'romaji' => 'Sanze',
        ]);
        // id: 863
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '鶴岡',
            'kana' => 'つるおか',
            'romaji' => 'Tsuruoka',
        ]);
        // id: 864
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '鼠ケ関',
            'kana' => 'ねずがせき',
            'romaji' => 'Nezugaseki',
        ]);
        // id: 865
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '192',
            'kanji' => '藤島',
            'kana' => 'ふじしま',
            'romaji' => 'Fujishima',
        ]);
        // id: 866
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '193',
            'kanji' => '高擶',
            'kana' => 'たかたま',
            'romaji' => 'Takatama',
        ]);
        // id: 867
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '193',
            'kanji' => '天童',
            'kana' => 'てんどう',
            'romaji' => 'Tendō',
        ]);
        // id: 868
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '193',
            'kanji' => '天童南',
            'kana' => 'てんどうみなみ',
            'romaji' => 'Tendōminami',
        ]);
        // id: 869
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '193',
            'kanji' => '乱川',
            'kana' => 'みだれがわ',
            'romaji' => 'Midaregawa',
        ]);
        // id: 870
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '194',
            'kanji' => '高屋',
            'kana' => 'たかや',
            'romaji' => 'Takaya',
        ]);
        // id: 871
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '194',
            'kanji' => '津谷',
            'kana' => 'つや',
            'romaji' => 'Tsuya',
        ]);
        // id: 872
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '194',
            'kanji' => '古口',
            'kana' => 'ふるくち',
            'romaji' => 'Furukuchi',
        ]);
        // id: 873
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '195',
            'kanji' => '今泉',
            'kana' => 'いまいずみ',
            'romaji' => 'Imaizumi',
        ]);
        // id: 874
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '196',
            'kanji' => '羽前金沢',
            'kana' => 'うぜんかねざわ',
            'romaji' => 'Uzen-Kanezawa',
        ]);
        // id: 875
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '196',
            'kanji' => '羽前長崎',
            'kana' => 'うぜんながさき',
            'romaji' => 'Uzen-Nagasaki',
        ]);
        // id: 876
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '197',
            'kanji' => '赤湯',
            'kana' => 'あかゆ',
            'romaji' => 'Akayu',
        ]);
        // id: 877
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '197',
            'kanji' => '中川',
            'kana' => 'なかがわ',
            'romaji' => 'Nakagawa',
        ]);
        // id: 878
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '198',
            'kanji' => 'さくらんぼ東根',
            'kana' => 'さくらんぼひがしね',
            'romaji' => 'Sakurambohigashine',
        ]);
        // id: 879
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '198',
            'kanji' => '神町',
            'kana' => 'じんまち',
            'romaji' => 'Jimmachi',
        ]);
        // id: 880
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '198',
            'kanji' => '東根',
            'kana' => 'ひがしね',
            'romaji' => 'Higashine',
        ]);
        // id: 881
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '199',
            'kanji' => '長沢',
            'kana' => 'ながさわ',
            'romaji' => 'Nagasawa',
        ]);
        // id: 882
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '199',
            'kanji' => '東長沢',
            'kana' => 'ひがしながさわ',
            'romaji' => 'Higashi-Nagasawa',
        ]);
        // id: 883
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '199',
            'kanji' => '舟形',
            'kana' => 'ふながた',
            'romaji' => 'Funagata',
        ]);
        // id: 884
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '200',
            'kanji' => '大滝',
            'kana' => 'おおたき',
            'romaji' => 'Ōtaki',
        ]);
        // id: 885
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '200',
            'kanji' => '釜淵',
            'kana' => 'かまぶち',
            'romaji' => 'Kamabuchi',
        ]);
        // id: 886
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '200',
            'kanji' => '及位',
            'kana' => 'のぞき',
            'romaji' => 'Nozoki',
        ]);
        // id: 887
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '200',
            'kanji' => '真室川',
            'kana' => 'まむろがわ',
            'romaji' => 'Mamurogawa',
        ]);
        // id: 888
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '201',
            'kanji' => '袖崎',
            'kana' => 'そでさき',
            'romaji' => 'Sodesaki',
        ]);
        // id: 889
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '201',
            'kanji' => '村山',
            'kana' => 'むらやま',
            'romaji' => 'Murayama',
        ]);
        // id: 890
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '202',
            'kanji' => '赤倉温泉',
            'kana' => 'あかくらおんせん',
            'romaji' => 'Akakura-onsen',
        ]);
        // id: 891
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '202',
            'kanji' => '鵜杉',
            'kana' => 'うすぎ',
            'romaji' => 'Usugi',
        ]);
        // id: 892
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '202',
            'kanji' => '大堀',
            'kana' => 'おおほり',
            'romaji' => 'Ōhori',
        ]);
        // id: 893
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '202',
            'kanji' => '堺田',
            'kana' => 'さかいだ',
            'romaji' => 'Sakaida',
        ]);
        // id: 894
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '202',
            'kanji' => '瀬見温泉',
            'kana' => 'せみおんせん',
            'romaji' => 'Semi-Onsen',
        ]);
        // id: 895
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '202',
            'kanji' => '立小路',
            'kana' => 'たちこうじ',
            'romaji' => 'Tachikōji',
        ]);
        // id: 896
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '202',
            'kanji' => '最上',
            'kana' => 'もがみ',
            'romaji' => 'Mogami',
        ]);
        // id: 897
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '羽前千歳',
            'kana' => 'うぜんちとせ',
            'romaji' => 'Uzen-Chitose',
        ]);
        // id: 898
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '漆山',
            'kana' => 'うるしやま',
            'romaji' => 'Urushiyama',
        ]);
        // id: 899
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '面白山高原',
            'kana' => 'おもしろやまこうげん',
            'romaji' => 'Omoshiroyama-Kōgen',
        ]);
        // id: 900
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '北山形',
            'kana' => 'きたやまがた',
            'romaji' => 'Kita-Yamagata',
        ]);
        // id: 901
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '蔵王',
            'kana' => 'ざおう',
            'romaji' => 'Zaō',
        ]);
        // id: 902
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '高瀬',
            'kana' => 'たかせ',
            'romaji' => 'Takase',
        ]);
        // id: 903
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '楯山',
            'kana' => 'たてやま',
            'romaji' => 'Tateyama',
        ]);
        // id: 904
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '東金井',
            'kana' => 'ひがしかない',
            'romaji' => 'Higashi-Kanai',
        ]);
        // id: 905
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '南出羽',
            'kana' => 'みなみでわ',
            'romaji' => 'Minami-Dewa',
        ]);
        // id: 906
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '山形',
            'kana' => 'やまがた',
            'romaji' => 'Yamagata',
        ]);
        // id: 907
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '203',
            'kanji' => '山寺',
            'kana' => 'やまでら',
            'romaji' => 'Yamadera',
        ]);
        // id: 908
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '204',
            'kanji' => '羽前山辺',
            'kana' => 'うぜんやまべ',
            'romaji' => 'Uzen-Yamabe',
        ]);
        // id: 909
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '205',
            'kanji' => '吹浦',
            'kana' => 'ふくら',
            'romaji' => 'Fukura',
        ]);
        // id: 910
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '205',
            'kanji' => '女鹿',
            'kana' => 'めが',
            'romaji' => 'Mega',
        ]);
        // id: 911
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '205',
            'kanji' => '遊佐',
            'kana' => 'ゆざ',
            'romaji' => 'Yuza',
        ]);
        // id: 912
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '板谷',
            'kana' => 'いたや',
            'romaji' => 'Itaya',
        ]);
        // id: 913
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '置賜',
            'kana' => 'おいたま',
            'romaji' => 'Oitama',
        ]);
        // id: 914
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '大沢',
            'kana' => 'おおさわ',
            'romaji' => 'Ōsawa',
        ]);
        // id: 915
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '関根',
            'kana' => 'せきね',
            'romaji' => 'Sekine',
        ]);
        // id: 916
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '峠',
            'kana' => 'とうげ',
            'romaji' => 'Tōge',
        ]);
        // id: 917
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '成島',
            'kana' => 'なるしま',
            'romaji' => 'Narushima',
        ]);
        // id: 918
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '西米沢',
            'kana' => 'にしよねざわ',
            'romaji' => 'Nishi-Yonezawa',
        ]);
        // id: 919
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '南米沢',
            'kana' => 'みなみよねざわ',
            'romaji' => 'Minami-Yonezawa',
        ]);
        // id: 920
        Station::insert([
            'prefecture_id' => '6',
            'city_id' => '206',
            'kanji' => '米沢',
            'kana' => 'よねざわ',
            'romaji' => 'Yonezawa',
        ]);
        // id: 921
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '207',
            'kanji' => '会津坂本',
            'kana' => 'あいづさかもと',
            'romaji' => 'Aizu-Sakamoto',
        ]);
        // id: 922
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '207',
            'kanji' => '会津坂下',
            'kana' => 'あいづばんげ',
            'romaji' => 'Aizu-Bange',
        ]);
        // id: 923
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '207',
            'kanji' => '塔寺',
            'kana' => 'とうでら',
            'romaji' => 'Tōdera',
        ]);
        // id: 924
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '207',
            'kanji' => '若宮',
            'kana' => 'わかみや',
            'romaji' => 'Wakamiya',
        ]);
        // id: 925
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '208',
            'kanji' => '会津高田',
            'kana' => 'あいづたかだ',
            'romaji' => 'Aizu-Takada',
        ]);
        // id: 926
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '208',
            'kanji' => '新鶴',
            'kana' => 'にいつる',
            'romaji' => 'Niitsuru',
        ]);
        // id: 927
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '208',
            'kanji' => '根岸',
            'kana' => 'ねぎし',
            'romaji' => 'Negishi',
        ]);
        // id: 928
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '209',
            'kanji' => '会津本郷',
            'kana' => 'あいづほんごう',
            'romaji' => 'Aizu-Hongō',
        ]);
        // id: 929
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '209',
            'kanji' => '会津若松',
            'kana' => 'あいづわかまつ',
            'romaji' => 'Aizu-Wakamatsu',
        ]);
        // id: 930
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '209',
            'kanji' => '堂島',
            'kana' => 'どうじま',
            'romaji' => 'Dōjima',
        ]);
        // id: 931
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '209',
            'kanji' => '七日町',
            'kana' => 'なぬかまち',
            'romaji' => 'Nanukamachi',
        ]);
        // id: 932
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '209',
            'kanji' => '西若松',
            'kana' => 'にしわかまつ',
            'romaji' => 'Nishi-Wakamatsu',
        ]);
        // id: 933
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '209',
            'kanji' => '東長原',
            'kana' => 'ひがしながはら',
            'romaji' => 'Higashi-Nagahara',
        ]);
        // id: 934
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '209',
            'kanji' => '広田',
            'kana' => 'ひろた',
            'romaji' => 'Hirota',
        ]);
        // id: 935
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '210',
            'kanji' => '磐城浅川',
            'kana' => 'いわきあさかわ',
            'romaji' => 'Iwaki-Asakawa',
        ]);
        // id: 936
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '210',
            'kanji' => '里白石',
            'kana' => 'さとしらいし',
            'romaji' => 'Satoshiraishi',
        ]);
        // id: 937
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '211',
            'kanji' => '磐城石川',
            'kana' => 'いわきいしかわ',
            'romaji' => 'Iwaki-Ishikawa',
        ]);
        // id: 938
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '211',
            'kanji' => '野木沢',
            'kana' => 'のぎさわ',
            'romaji' => 'Nogisawa',
        ]);
        // id: 939
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '212',
            'kanji' => '泉崎',
            'kana' => 'いずみざき',
            'romaji' => 'Izumizaki',
        ]);
        // id: 940
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '213',
            'kanji' => '猪苗代',
            'kana' => 'いなわしろ',
            'romaji' => 'Inawashiro',
        ]);
        // id: 941
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '213',
            'kanji' => '猪苗代湖畔(臨)',
            'kana' => 'いなわしろこはん',
            'romaji' => 'Inawashirokohan',
        ]);
        // id: 942
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '213',
            'kanji' => '翁島',
            'kana' => 'おきなしま',
            'romaji' => 'Okinashima',
        ]);
        // id: 943
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '213',
            'kanji' => '川桁',
            'kana' => 'かわげた',
            'romaji' => 'Kawageta',
        ]);
        // id: 944
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '213',
            'kanji' => '上戸',
            'kana' => 'じょうこ',
            'romaji' => 'Jōko',
        ]);
        // id: 945
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '213',
            'kanji' => '関都',
            'kana' => 'せきと',
            'romaji' => 'Sekito',
        ]);
        // id: 946
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '赤井',
            'kana' => 'あかい',
            'romaji' => 'Akai',
        ]);
        // id: 947
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '泉',
            'kana' => 'いずみ',
            'romaji' => 'Izumi',
        ]);
        // id: 948
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => 'いわき',
            'kana' => 'いわき',
            'romaji' => 'Iwaki',
        ]);
        // id: 949
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '植田',
            'kana' => 'うえだ',
            'romaji' => 'Ueda',
        ]);
        // id: 950
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '内郷',
            'kana' => 'うちごう',
            'romaji' => 'Uchigō',
        ]);
        // id: 951
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '江田',
            'kana' => 'えだ',
            'romaji' => 'Eda',
        ]);
        // id: 952
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '小川郷',
            'kana' => 'おがわごう',
            'romaji' => 'Ogawagō',
        ]);
        // id: 953
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '川前',
            'kana' => 'かわまえ',
            'romaji' => 'Kawamae',
        ]);
        // id: 954
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '草野',
            'kana' => 'くさの',
            'romaji' => 'Kusano',
        ]);
        // id: 955
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '末続',
            'kana' => 'すえつぎ',
            'romaji' => 'Suetsugi',
        ]);
        // id: 956
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '勿来',
            'kana' => 'なこそ',
            'romaji' => 'Nakoso',
        ]);
        // id: 957
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '久ノ浜',
            'kana' => 'ひさのはま',
            'romaji' => 'Hisanohama',
        ]);
        // id: 958
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '湯本',
            'kana' => 'ゆもと',
            'romaji' => 'Yumoto',
        ]);
        // id: 959
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '214',
            'kanji' => '四ツ倉',
            'kana' => 'よつくら',
            'romaji' => 'Yotsukura',
        ]);
        // id: 960
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '215',
            'kanji' => '大野',
            'kana' => 'おおの',
            'romaji' => 'Ōno',
        ]);
        // id: 961
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '216',
            'kanji' => '小野新町',
            'kana' => 'おのにいまち',
            'romaji' => 'Ononiimachi',
        ]);
        // id: 962
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '216',
            'kanji' => '夏井',
            'kana' => 'なつい',
            'romaji' => 'Natsui',
        ]);
        // id: 963
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '217',
            'kanji' => '鏡石',
            'kana' => 'かがみいし',
            'romaji' => 'Kagamiishi',
        ]);
        // id: 964
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '218',
            'kanji' => '会津大塩',
            'kana' => 'あいづおおしお',
            'romaji' => 'Aizu-Ōshio',
        ]);
        // id: 965
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '218',
            'kanji' => '会津川口',
            'kana' => 'あいづかわぐち',
            'romaji' => 'Aizu-Kawaguchi',
        ]);
        // id: 966
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '218',
            'kanji' => '会津越川',
            'kana' => 'あいづこすがわ',
            'romaji' => 'Aizu-Kosugawa',
        ]);
        // id: 967
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '218',
            'kanji' => '会津中川',
            'kana' => 'あいづなかがわ',
            'romaji' => 'Aizu-Nakagawa',
        ]);
        // id: 968
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '218',
            'kanji' => '会津水沼',
            'kana' => 'あいづみずぬま',
            'romaji' => 'Aizu-Mizunuma',
        ]);
        // id: 969
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '218',
            'kanji' => '会津横田',
            'kana' => 'あいづよこた',
            'romaji' => 'Aizu-Yokota',
        ]);
        // id: 970
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '218',
            'kanji' => '本名',
            'kana' => 'ほんな',
            'romaji' => 'Honna',
        ]);
        // id: 971
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '219',
            'kanji' => '会津豊川',
            'kana' => 'あいづとよかわ',
            'romaji' => 'Aizu-Toyokawa',
        ]);
        // id: 972
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '219',
            'kanji' => '姥堂',
            'kana' => 'うばどう',
            'romaji' => 'Ubadō',
        ]);
        // id: 973
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '219',
            'kanji' => '荻野',
            'kana' => 'おぎの',
            'romaji' => 'Ogino',
        ]);
        // id: 974
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '219',
            'kanji' => '喜多方',
            'kana' => 'きたかた',
            'romaji' => 'Kitakata',
        ]);
        // id: 975
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '219',
            'kanji' => '塩川',
            'kana' => 'しおかわ',
            'romaji' => 'Shiokawa',
        ]);
        // id: 976
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '219',
            'kanji' => '山都',
            'kana' => 'やまと',
            'romaji' => 'Yamato',
        ]);
        // id: 977
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '220',
            'kanji' => '貝田',
            'kana' => 'かいだ',
            'romaji' => 'Kaida',
        ]);
        // id: 978
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '220',
            'kanji' => '藤田',
            'kana' => 'ふじた',
            'romaji' => 'Fujita',
        ]);
        // id: 979
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '221',
            'kanji' => '桑折',
            'kana' => 'こおり',
            'romaji' => 'Kōri',
        ]);
        // id: 980
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '安子ケ島',
            'kana' => 'あこがしま',
            'romaji' => 'Akogashima',
        ]);
        // id: 981
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '安積永盛',
            'kana' => 'あさかながもり',
            'romaji' => 'Asaka-Nagamori',
        ]);
        // id: 982
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '磐城守山',
            'kana' => 'いわきもりやま',
            'romaji' => 'Iwaki-Moriyama',
        ]);
        // id: 983
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '喜久田',
            'kana' => 'きくた',
            'romaji' => 'Kikuta',
        ]);
        // id: 984
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '郡山',
            'kana' => 'こおりやま',
            'romaji' => 'Kōriyama',
        ]);
        // id: 985
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '郡山富田',
            'kana' => 'こおりやまとみた',
            'romaji' => 'Kōriyamatomita',
        ]);
        // id: 986
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '中山宿',
            'kana' => 'なかやまじゅく',
            'romaji' => 'Nakayamajuku',
        ]);
        // id: 987
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '磐梯熱海',
            'kana' => 'ばんだいあたみ',
            'romaji' => 'Bandaiatami',
        ]);
        // id: 988
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '日和田',
            'kana' => 'ひわだ',
            'romaji' => 'Hiwada',
        ]);
        // id: 989
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '舞木',
            'kana' => 'もうぎ',
            'romaji' => 'Mōgi',
        ]);
        // id: 990
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '222',
            'kanji' => '谷田川',
            'kana' => 'やたがわ',
            'romaji' => 'Yatagawa',
        ]);
        // id: 991
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '223',
            'kanji' => '久田野',
            'kana' => 'くたの',
            'romaji' => 'Kutano',
        ]);
        // id: 992
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '223',
            'kanji' => '白河',
            'kana' => 'しらかわ',
            'romaji' => 'Shirakawa',
        ]);
        // id: 993
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '223',
            'kanji' => '白坂',
            'kana' => 'しらさか',
            'romaji' => 'Shirasaka',
        ]);
        // id: 994
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '224',
            'kanji' => '駒ケ嶺',
            'kana' => 'こまがみね',
            'romaji' => 'Komagamine',
        ]);
        // id: 995
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '224',
            'kanji' => '新地',
            'kana' => 'しんち',
            'romaji' => 'Shinchi',
        ]);
        // id: 996
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '225',
            'kanji' => '小塩江',
            'kana' => 'おしおえ',
            'romaji' => 'Oshioe',
        ]);
        // id: 997
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '225',
            'kanji' => '川東',
            'kana' => 'かわひがし',
            'romaji' => 'Kawahigashi',
        ]);
        // id: 998
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '225',
            'kanji' => '須賀川',
            'kana' => 'すかがわ',
            'romaji' => 'Sukagawa',
        ]);
        // id: 999
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '226',
            'kanji' => '相馬',
            'kana' => 'そうま',
            'romaji' => 'Sōma',
        ]);
        // id: 1000
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '226',
            'kanji' => '日立木',
            'kana' => 'にったき',
            'romaji' => 'Nittaki',
        ]);
        // id: 1001
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '227',
            'kanji' => '会津蒲生',
            'kana' => 'あいづがもう',
            'romaji' => 'Aizu-Gamō',
        ]);
        // id: 1002
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '227',
            'kanji' => '会津塩沢',
            'kana' => 'あいづしおざわ',
            'romaji' => 'Aizu-Shiozawa',
        ]);
        // id: 1003
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '227',
            'kanji' => '只見',
            'kana' => 'ただみ',
            'romaji' => 'Tadami',
        ]);
        // id: 1004
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '228',
            'kanji' => '伊達',
            'kana' => 'だて',
            'romaji' => 'Date',
        ]);
        // id: 1005
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '229',
            'kanji' => '磐城棚倉',
            'kana' => 'いわきたなくら',
            'romaji' => 'Iwaki-Tanakura',
        ]);
        // id: 1006
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '229',
            'kanji' => '近津',
            'kana' => 'ちかつ',
            'romaji' => 'Chikatsu',
        ]);
        // id: 1007
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '229',
            'kanji' => '中豊',
            'kana' => 'なかとよ',
            'romaji' => 'Nakatoyo',
        ]);
        // id: 1008
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '230',
            'kanji' => '泉郷',
            'kana' => 'いずみごう',
            'romaji' => 'Izumigō',
        ]);
        // id: 1009
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '230',
            'kanji' => '川辺沖',
            'kana' => 'かわべおき',
            'romaji' => 'Kawabeoki',
        ]);
        // id: 1010
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '231',
            'kanji' => '磐城常葉',
            'kana' => 'いわきときわ',
            'romaji' => 'Iwaki-Tokiwa',
        ]);
        // id: 1011
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '231',
            'kanji' => '大越',
            'kana' => 'おおごえ',
            'romaji' => 'Ōgoe',
        ]);
        // id: 1012
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '231',
            'kanji' => '要田',
            'kana' => 'かなめた',
            'romaji' => 'Kanameta',
        ]);
        // id: 1013
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '231',
            'kanji' => '神俣',
            'kana' => 'かんまた',
            'romaji' => 'Kammata',
        ]);
        // id: 1014
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '231',
            'kanji' => '菅谷',
            'kana' => 'すがや',
            'romaji' => 'Sugaya',
        ]);
        // id: 1015
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '231',
            'kanji' => '船引',
            'kana' => 'ふねひき',
            'romaji' => 'Funehiki',
        ]);
        // id: 1016
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '232',
            'kanji' => '富岡',
            'kana' => 'とみおか',
            'romaji' => 'Tomioka',
        ]);
        // id: 1017
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '232',
            'kanji' => '夜ノ森',
            'kana' => 'よのもり',
            'romaji' => 'Yonomori',
        ]);
        // id: 1018
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '233',
            'kanji' => '浪江',
            'kana' => 'なみえ',
            'romaji' => 'Namie',
        ]);
        // id: 1019
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '234',
            'kanji' => '木戸',
            'kana' => 'きど',
            'romaji' => 'Kido',
        ]);
        // id: 1020
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '234',
            'kanji' => 'Jヴィレッジ',
            'kana' => 'じぇいびれっじ',
            'romaji' => 'J village',
        ]);
        // id: 1021
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '234',
            'kanji' => '竜田',
            'kana' => 'たつた',
            'romaji' => 'Tatsuta',
        ]);
        // id: 1022
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '235',
            'kanji' => '尾登',
            'kana' => 'おのぼり',
            'romaji' => 'Onobori',
        ]);
        // id: 1023
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '235',
            'kanji' => '上野尻',
            'kana' => 'かみのじり',
            'romaji' => 'Kami-Nojiri',
        ]);
        // id: 1024
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '235',
            'kanji' => '徳沢',
            'kana' => 'とくさわ',
            'romaji' => 'Tokusawa',
        ]);
        // id: 1025
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '235',
            'kanji' => '野沢',
            'kana' => 'のざわ',
            'romaji' => 'Nozawa',
        ]);
        // id: 1026
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '236',
            'kanji' => '新白河',
            'kana' => 'しんしらかわ',
            'romaji' => 'Shin-Shirakawa',
        ]);
        // id: 1027
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '237',
            'kanji' => '安達',
            'kana' => 'あだち',
            'romaji' => 'Adachi',
        ]);
        // id: 1028
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '237',
            'kanji' => '杉田',
            'kana' => 'すぎた',
            'romaji' => 'Sugita',
        ]);
        // id: 1029
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '237',
            'kanji' => '二本松',
            'kana' => 'にほんまつ',
            'romaji' => 'Nihommatsu',
        ]);
        // id: 1030
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '238',
            'kanji' => '磐城塙',
            'kana' => 'いわきはなわ',
            'romaji' => 'Iwaki-Hanawa',
        ]);
        // id: 1031
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '239',
            'kanji' => '磐梯町',
            'kana' => 'ばんだいまち',
            'romaji' => 'Bandaimachi',
        ]);
        // id: 1032
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '240',
            'kanji' => '広野',
            'kana' => 'ひろの',
            'romaji' => 'Hirono',
        ]);
        // id: 1033
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '241',
            'kanji' => '赤岩',
            'kana' => 'あかいわ',
            'romaji' => 'Akaiwa',
        ]);
        // id: 1034
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '241',
            'kanji' => '金谷川',
            'kana' => 'かなやがわ',
            'romaji' => 'Kanayagawa',
        ]);
        // id: 1035
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '241',
            'kanji' => '笹木野',
            'kana' => 'ささきの',
            'romaji' => 'Sasakino',
        ]);
        // id: 1036
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '241',
            'kanji' => '庭坂',
            'kana' => 'にわさか',
            'romaji' => 'Niwasaka',
        ]);
        // id: 1037
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '241',
            'kanji' => '東福島',
            'kana' => 'ひがしふくしま',
            'romaji' => 'Higashi-Fukushima',
        ]);
        // id: 1038
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '241',
            'kanji' => '福島',
            'kana' => 'ふくしま',
            'romaji' => 'Fukushima',
        ]);
        // id: 1039
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '241',
            'kanji' => '松川',
            'kana' => 'まつかわ',
            'romaji' => 'Matsukawa',
        ]);
        // id: 1040
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '241',
            'kanji' => '南福島',
            'kana' => 'みなみふくしま',
            'romaji' => 'Minami-Fukushima',
        ]);
        // id: 1041
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '242',
            'kanji' => '双葉',
            'kana' => 'ふたば',
            'romaji' => 'Futaba',
        ]);
        // id: 1042
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '243',
            'kanji' => '会津西方',
            'kana' => 'あいづにしかた',
            'romaji' => 'Aizu-Nishikata',
        ]);
        // id: 1043
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '243',
            'kanji' => '会津桧原',
            'kana' => 'あいづひのはら',
            'romaji' => 'Aizu-Hinohara',
        ]);
        // id: 1044
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '243',
            'kanji' => '会津宮下',
            'kana' => 'あいづみやした',
            'romaji' => 'Aizu-Miyashita',
        ]);
        // id: 1045
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '243',
            'kanji' => '早戸',
            'kana' => 'はやと',
            'romaji' => 'Hayato',
        ]);
        // id: 1046
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '244',
            'kanji' => '磐城太田',
            'kana' => 'いわきおおた',
            'romaji' => 'Iwaki-Ōta',
        ]);
        // id: 1047
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '244',
            'kanji' => '小高',
            'kana' => 'おだか',
            'romaji' => 'Odaka',
        ]);
        // id: 1048
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '244',
            'kanji' => '鹿島',
            'kana' => 'かしま',
            'romaji' => 'Kashima',
        ]);
        // id: 1049
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '244',
            'kanji' => '原ノ町',
            'kana' => 'はらのまち',
            'romaji' => 'Haranomachi',
        ]);
        // id: 1050
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '244',
            'kanji' => '桃内',
            'kana' => 'ももうち',
            'romaji' => 'Momouchi',
        ]);
        // id: 1051
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '245',
            'kanji' => '三春',
            'kana' => 'みはる',
            'romaji' => 'Miharu',
        ]);
        // id: 1052
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '246',
            'kanji' => '五百川',
            'kana' => 'ごひゃくがわ',
            'romaji' => 'Gohyakugawa',
        ]);
        // id: 1053
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '246',
            'kanji' => '本宮',
            'kana' => 'もとみや',
            'romaji' => 'Motomiya',
        ]);
        // id: 1054
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '247',
            'kanji' => '会津柳津',
            'kana' => 'あいづやないづ',
            'romaji' => 'Aisu-Yanaizu',
        ]);
        // id: 1055
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '247',
            'kanji' => '郷戸',
            'kana' => 'ごうど',
            'romaji' => 'Gōdo',
        ]);
        // id: 1056
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '247',
            'kanji' => '滝谷',
            'kana' => 'たきや',
            'romaji' => 'Takiya',
        ]);
        // id: 1057
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '248',
            'kanji' => '矢吹',
            'kana' => 'やぶき',
            'romaji' => 'Yabuki',
        ]);
        // id: 1058
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '249',
            'kanji' => '磐城石井',
            'kana' => 'いわきいしい',
            'romaji' => 'Iwaki-Ishii',
        ]);
        // id: 1059
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '249',
            'kanji' => '東館',
            'kana' => 'ひがしだて',
            'romaji' => 'Higashidate',
        ]);
        // id: 1060
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '249',
            'kanji' => '南石井',
            'kana' => 'みなみいしい',
            'romaji' => 'Minami-Ishii',
        ]);
        // id: 1061
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '249',
            'kanji' => '矢祭山',
            'kana' => 'やまつりやま',
            'romaji' => 'Yamatsuriyama',
        ]);
        // id: 1062
        Station::insert([
            'prefecture_id' => '7',
            'city_id' => '250',
            'kanji' => '笈川',
            'kana' => 'おいかわ',
            'romaji' => 'Oikawa',
        ]);
        // id: 1063
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '251',
            'kanji' => '石岡',
            'kana' => 'いしおか',
            'romaji' => 'Ishioka',
        ]);
        // id: 1064
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '251',
            'kanji' => '高浜',
            'kana' => 'たかはま',
            'romaji' => 'Takahama',
        ]);
        // id: 1065
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '252',
            'kanji' => '潮来',
            'kana' => 'いたこ',
            'romaji' => 'Itako',
        ]);
        // id: 1066
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '252',
            'kanji' => '延方',
            'kana' => 'のぶかた',
            'romaji' => 'Nobukata',
        ]);
        // id: 1067
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '253',
            'kanji' => '牛久',
            'kana' => 'うしく',
            'romaji' => 'Ushiku',
        ]);
        // id: 1068
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '253',
            'kanji' => 'ひたち野うしく',
            'kana' => 'ひたちのうしく',
            'romaji' => 'Hitachinoushiku',
        ]);
        // id: 1069
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '254',
            'kanji' => '羽鳥',
            'kana' => 'はとり',
            'romaji' => 'Hatori',
        ]);
        // id: 1070
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '255',
            'kanji' => '稲田',
            'kana' => 'いなだ',
            'romaji' => 'Inada',
        ]);
        // id: 1071
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '255',
            'kanji' => '岩間',
            'kana' => 'いわま',
            'romaji' => 'Iwama',
        ]);
        // id: 1072
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '255',
            'kanji' => '笠間',
            'kana' => 'かさま',
            'romaji' => 'Kasama',
        ]);
        // id: 1073
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '255',
            'kanji' => '宍戸',
            'kana' => 'ししど',
            'romaji' => 'Shishido',
        ]);
        // id: 1074
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '255',
            'kanji' => '友部',
            'kana' => 'ともべ',
            'romaji' => 'Tomobe',
        ]);
        // id: 1075
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '255',
            'kanji' => '福原',
            'kana' => 'ふくはら',
            'romaji' => 'Fukuhara',
        ]);
        // id: 1076
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '256',
            'kanji' => '鹿島サッカースタジアム',
            'kana' => 'かしまさっかーすたじあむ',
            'romaji' => 'Kashima-Soccer Stadium',
        ]);
        // id: 1077
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '256',
            'kanji' => '鹿島神宮',
            'kana' => 'かしまじんぐう',
            'romaji' => 'Kashimajingū',
        ]);
        // id: 1078
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '257',
            'kanji' => '磯原',
            'kana' => 'いそはら',
            'romaji' => 'Isohara',
        ]);
        // id: 1079
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '257',
            'kanji' => '大津港',
            'kana' => 'おおつこう',
            'romaji' => 'Ōtsukō',
        ]);
        // id: 1080
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '257',
            'kanji' => '南中郷',
            'kana' => 'みなみなかごう',
            'romaji' => 'Minami-Nakagō',
        ]);
        // id: 1081
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '258',
            'kanji' => '古河',
            'kana' => 'こが',
            'romaji' => 'Koga',
        ]);
        // id: 1082
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '259',
            'kanji' => '岩瀬',
            'kana' => 'いわせ',
            'romaji' => 'Iwase',
        ]);
        // id: 1083
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '259',
            'kanji' => '羽黒',
            'kana' => 'はぐろ',
            'romaji' => 'Haguro',
        ]);
        // id: 1084
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '259',
            'kanji' => '大和',
            'kana' => 'やまと',
            'romaji' => 'Yamato',
        ]);
        // id: 1085
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '260',
            'kanji' => '上小川',
            'kana' => 'かみおがわ',
            'romaji' => 'Kami-Ogawa',
        ]);
        // id: 1086
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '260',
            'kanji' => '西金',
            'kana' => 'さいがね',
            'romaji' => 'Saigane',
        ]);
        // id: 1087
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '260',
            'kanji' => '下野宮',
            'kana' => 'しものみや',
            'romaji' => 'Shimonomiya',
        ]);
        // id: 1088
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '260',
            'kanji' => '常陸大子',
            'kana' => 'ひたちだいご',
            'romaji' => 'Hitachi-Daigo',
        ]);
        // id: 1089
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '260',
            'kanji' => '袋田',
            'kana' => 'ふくろだ',
            'romaji' => 'Fukuroda',
        ]);
        // id: 1090
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '261',
            'kanji' => '高萩',
            'kana' => 'たかはぎ',
            'romaji' => 'Takahagi',
        ]);
        // id: 1091
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '262',
            'kanji' => '川島',
            'kana' => 'かわしま',
            'romaji' => 'Kawashima',
        ]);
        // id: 1092
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '262',
            'kanji' => '下館',
            'kana' => 'しもだて',
            'romaji' => 'Shimodate',
        ]);
        // id: 1093
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '262',
            'kanji' => '玉戸',
            'kana' => 'たまど',
            'romaji' => 'Tamado',
        ]);
        // id: 1094
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '262',
            'kanji' => '新治',
            'kana' => 'にいはり',
            'romaji' => 'Niihari',
        ]);
        // id: 1095
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '263',
            'kanji' => '荒川沖',
            'kana' => 'あらかわおき',
            'romaji' => 'Arakawaoki',
        ]);
        // id: 1096
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '263',
            'kanji' => '神立',
            'kana' => 'かんだつ',
            'romaji' => 'Kandatsu',
        ]);
        // id: 1097
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '263',
            'kanji' => '土浦',
            'kana' => 'つちうら',
            'romaji' => 'Tsuchiura',
        ]);
        // id: 1098
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '264',
            'kanji' => '東海',
            'kana' => 'とうかい',
            'romaji' => 'Tōkai',
        ]);
        // id: 1099
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '265',
            'kanji' => '取手',
            'kana' => 'とりで',
            'romaji' => 'Toride',
        ]);
        // id: 1100
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '265',
            'kanji' => '藤代',
            'kana' => 'ふじしろ',
            'romaji' => 'Fujishiro',
        ]);
        // id: 1101
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '瓜連',
            'kana' => 'うりづら',
            'romaji' => 'Urizura',
        ]);
        // id: 1102
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '上菅谷',
            'kana' => 'かみすがや',
            'romaji' => 'Kami-Sugaya',
        ]);
        // id: 1103
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '後台',
            'kana' => 'ごだい',
            'romaji' => 'Godai',
        ]);
        // id: 1104
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '静',
            'kana' => 'しず',
            'romaji' => 'Shizu',
        ]);
        // id: 1105
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '下菅谷',
            'kana' => 'しもすがや',
            'romaji' => 'Shimo-Sugaya',
        ]);
        // id: 1106
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '中菅谷',
            'kana' => 'なかすがや',
            'romaji' => 'Naka-Sugaya',
        ]);
        // id: 1107
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '額田',
            'kana' => 'ぬかだ',
            'romaji' => 'Nukada',
        ]);
        // id: 1108
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '常陸鴻巣',
            'kana' => 'ひたちこうのす',
            'romaji' => 'Hitachi-Kōnosu',
        ]);
        // id: 1109
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '266',
            'kanji' => '南酒出',
            'kana' => 'みなみさかいで',
            'romaji' => 'Minami-Sakaide',
        ]);
        // id: 1110
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '267',
            'kanji' => '河合',
            'kana' => 'かわい',
            'romaji' => 'Kawai',
        ]);
        // id: 1111
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '267',
            'kanji' => '常陸太田',
            'kana' => 'ひたちおおた',
            'romaji' => 'Hitachi-Ōta',
        ]);
        // id: 1112
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '267',
            'kanji' => '谷河原',
            'kana' => 'やがわら',
            'romaji' => 'Yagawara',
        ]);
        // id: 1113
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '268',
            'kanji' => '下小川',
            'kana' => 'しもおがわ',
            'romaji' => 'Shimo-Ogawa',
        ]);
        // id: 1114
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '268',
            'kanji' => '玉川村',
            'kana' => 'たまがわむら',
            'romaji' => 'Tamagawamura',
        ]);
        // id: 1115
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '268',
            'kanji' => '中舟生',
            'kana' => 'なかふにゅう',
            'romaji' => 'Naka-Funyū',
        ]);
        // id: 1116
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '268',
            'kanji' => '野上原',
            'kana' => 'のがみはら',
            'romaji' => 'Nogamihara',
        ]);
        // id: 1117
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '268',
            'kanji' => '常陸大宮',
            'kana' => 'ひたちおおみや',
            'romaji' => 'Hitachi-Ōmiya',
        ]);
        // id: 1118
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '268',
            'kanji' => '山方宿',
            'kana' => 'やまがたじゅく',
            'romaji' => 'Yamagatajuku',
        ]);
        // id: 1119
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '269',
            'kanji' => '大甕',
            'kana' => 'おおみか',
            'romaji' => 'Ōmika',
        ]);
        // id: 1120
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '269',
            'kanji' => '小木津',
            'kana' => 'おぎつ',
            'romaji' => 'Ogitsu',
        ]);
        // id: 1121
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '269',
            'kanji' => '十王',
            'kana' => 'じゅうおう',
            'romaji' => 'Jūō',
        ]);
        // id: 1122
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '269',
            'kanji' => '日立',
            'kana' => 'ひたち',
            'romaji' => 'Hitachi',
        ]);
        // id: 1123
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '269',
            'kanji' => '常陸多賀',
            'kana' => 'ひたちたが',
            'romaji' => 'Hitachi-Taga',
        ]);
        // id: 1124
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '270',
            'kanji' => '勝田',
            'kana' => 'かつた',
            'romaji' => 'Katsuta',
        ]);
        // id: 1125
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '270',
            'kanji' => '佐和',
            'kana' => 'さわ',
            'romaji' => 'Sawa',
        ]);
        // id: 1126
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '270',
            'kanji' => '常陸青柳',
            'kana' => 'ひたちあおやぎ',
            'romaji' => 'Hitachi-Aoyagi',
        ]);
        // id: 1127
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '270',
            'kanji' => '常陸津田',
            'kana' => 'ひたちつだ',
            'romaji' => 'Hitachi-Tsuda',
        ]);
        // id: 1128
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '271',
            'kanji' => '赤塚',
            'kana' => 'あかつか',
            'romaji' => 'Akatsuka',
        ]);
        // id: 1129
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '271',
            'kanji' => '内原',
            'kana' => 'うちはら',
            'romaji' => 'Uchihara',
        ]);
        // id: 1130
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '271',
            'kanji' => '偕楽園(臨)',
            'kana' => 'かいらくえん',
            'romaji' => 'Kairakuen',
        ]);
        // id: 1131
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '271',
            'kanji' => '水戸',
            'kana' => 'みと',
            'romaji' => 'Mito',
        ]);
        // id: 1132
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '272',
            'kanji' => '小田林',
            'kana' => 'おたばやし',
            'romaji' => 'Otabayashi',
        ]);
        // id: 1133
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '272',
            'kanji' => '東結城',
            'kana' => 'ひがしゆうき',
            'romaji' => 'Higashi-Yūki',
        ]);
        // id: 1134
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '272',
            'kanji' => '結城',
            'kana' => 'ゆうき',
            'romaji' => 'Yūki',
        ]);
        // id: 1135
        Station::insert([
            'prefecture_id' => '8',
            'city_id' => '273',
            'kanji' => '龍ケ崎市',
            'kana' => 'りゅうがさきし',
            'romaji' => 'Ryūgasakishi',
        ]);
        // id: 1136
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '274',
            'kanji' => '足利',
            'kana' => 'あしかが',
            'romaji' => 'Ashikaga',
        ]);
        // id: 1137
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '274',
            'kanji' => 'あしかがフラワーパーク',
            'kana' => 'あしかがふらわーぱーく',
            'romaji' => 'Ashikaga Flower Park',
        ]);
        // id: 1138
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '274',
            'kanji' => '小俣',
            'kana' => 'おまた',
            'romaji' => 'Omata',
        ]);
        // id: 1139
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '274',
            'kanji' => '富田',
            'kana' => 'とみた',
            'romaji' => 'Tomita',
        ]);
        // id: 1140
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '274',
            'kanji' => '山前',
            'kana' => 'やままえ',
            'romaji' => 'Yamamae',
        ]);
        // id: 1141
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '275',
            'kanji' => '宇都宮',
            'kana' => 'うつのみや',
            'romaji' => 'Utsunomiya',
        ]);
        // id: 1142
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '275',
            'kanji' => '岡本',
            'kana' => 'おかもと',
            'romaji' => 'Okamoto',
        ]);
        // id: 1143
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '275',
            'kanji' => '雀宮',
            'kana' => 'すずめのみや',
            'romaji' => 'Suzumenomiya',
        ]);
        // id: 1144
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '275',
            'kanji' => '鶴田',
            'kana' => 'つるた',
            'romaji' => 'Tsuruta',
        ]);
        // id: 1145
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '276',
            'kanji' => '野崎',
            'kana' => 'のざき',
            'romaji' => 'Nozaki',
        ]);
        // id: 1146
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '277',
            'kanji' => '思川',
            'kana' => 'おもいがわ',
            'romaji' => 'Omoigawa',
        ]);
        // id: 1147
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '277',
            'kanji' => '小山',
            'kana' => 'おやま',
            'romaji' => 'Oyama',
        ]);
        // id: 1148
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '277',
            'kanji' => '間々田',
            'kana' => 'ままだ',
            'romaji' => 'Mamada',
        ]);
        // id: 1149
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '278',
            'kanji' => '鹿沼',
            'kana' => 'かぬま',
            'romaji' => 'Kanuma',
        ]);
        // id: 1150
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '279',
            'kanji' => '氏家',
            'kana' => 'うじいえ',
            'romaji' => 'Ujiie',
        ]);
        // id: 1151
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '279',
            'kanji' => '蒲須坂',
            'kana' => 'かますさか',
            'romaji' => 'Kamasusaka',
        ]);
        // id: 1152
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '280',
            'kanji' => '佐野',
            'kana' => 'さの',
            'romaji' => 'Sano',
        ]);
        // id: 1153
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '281',
            'kanji' => '石橋',
            'kana' => 'いしばし',
            'romaji' => 'Ishibashi',
        ]);
        // id: 1154
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '281',
            'kanji' => '小金井',
            'kana' => 'こがねい',
            'romaji' => 'Koganei',
        ]);
        // id: 1155
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '281',
            'kanji' => '自治医大',
            'kana' => 'じちいだい',
            'romaji' => 'Jichi Medical University',
        ]);
        // id: 1156
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '282',
            'kanji' => '下野花岡',
            'kana' => 'しもつけはなおか',
            'romaji' => 'Shimotsuke-Hanaoka',
        ]);
        // id: 1157
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '282',
            'kanji' => '仁井田',
            'kana' => 'にいた',
            'romaji' => 'Niita',
        ]);
        // id: 1158
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '282',
            'kanji' => '宝積寺',
            'kana' => 'ほうしゃくじ',
            'romaji' => 'Hōshakuji',
        ]);
        // id: 1159
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '283',
            'kanji' => '岩舟',
            'kana' => 'いわふね',
            'romaji' => 'Iwafune',
        ]);
        // id: 1160
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '283',
            'kanji' => '大平下',
            'kana' => 'おおひらした',
            'romaji' => 'Ōhirashita',
        ]);
        // id: 1161
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '283',
            'kanji' => '栃木',
            'kana' => 'とちぎ',
            'romaji' => 'Tochigi',
        ]);
        // id: 1162
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '284',
            'kanji' => '大金',
            'kana' => 'おおがね',
            'romaji' => 'Ōgane',
        ]);
        // id: 1163
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '284',
            'kanji' => '烏山',
            'kana' => 'からすやま',
            'romaji' => 'Karasuyama',
        ]);
        // id: 1164
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '284',
            'kanji' => '鴻野山',
            'kana' => 'こうのやま',
            'romaji' => 'Kōnoyama',
        ]);
        // id: 1165
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '284',
            'kanji' => '小塙',
            'kana' => 'こばな',
            'romaji' => 'Kobana',
        ]);
        // id: 1166
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '284',
            'kanji' => '滝',
            'kana' => 'たき',
            'romaji' => 'Taki',
        ]);
        // id: 1167
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '285',
            'kanji' => '黒磯',
            'kana' => 'くろいそ',
            'romaji' => 'Kuroiso',
        ]);
        // id: 1168
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '285',
            'kanji' => '那須塩原',
            'kana' => 'なすしおばら',
            'romaji' => 'Nasushiobara',
        ]);
        // id: 1169
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '285',
            'kanji' => '西那須野',
            'kana' => 'にしなすの',
            'romaji' => 'Nishi-Nasuno',
        ]);
        // id: 1170
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '286',
            'kanji' => '黒田原',
            'kana' => 'くろだはら',
            'romaji' => 'Kurodahara',
        ]);
        // id: 1171
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '286',
            'kanji' => '高久',
            'kana' => 'たかく',
            'romaji' => 'Takaku',
        ]);
        // id: 1172
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '286',
            'kanji' => '豊原',
            'kana' => 'とよはら',
            'romaji' => 'Toyohara',
        ]);
        // id: 1173
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '287',
            'kanji' => '今市',
            'kana' => 'いまいち',
            'romaji' => 'Imaichi',
        ]);
        // id: 1174
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '287',
            'kanji' => '下野大沢',
            'kana' => 'しもつけおおさわ',
            'romaji' => 'Shimotsuke-Ōsawa',
        ]);
        // id: 1175
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '287',
            'kanji' => '日光',
            'kana' => 'にっこう',
            'romaji' => 'Nikkō',
        ]);
        // id: 1176
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '287',
            'kanji' => '文挟',
            'kana' => 'ふばさみ',
            'romaji' => 'Fubasami',
        ]);
        // id: 1177
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '288',
            'kanji' => '野木',
            'kana' => 'のぎ',
            'romaji' => 'Nogi',
        ]);
        // id: 1178
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '289',
            'kanji' => '片岡',
            'kana' => 'かたおか',
            'romaji' => 'Kataoka',
        ]);
        // id: 1179
        Station::insert([
            'prefecture_id' => '9',
            'city_id' => '289',
            'kanji' => '矢板',
            'kana' => 'やいた',
            'romaji' => 'Yaita',
        ]);
        // id: 1180
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '290',
            'kanji' => '安中',
            'kana' => 'あんなか',
            'romaji' => 'Annaka',
        ]);
        // id: 1181
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '290',
            'kanji' => '安中榛名',
            'kana' => 'あんなかはるな',
            'romaji' => 'Annakaharuna',
        ]);
        // id: 1182
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '290',
            'kanji' => '磯部',
            'kana' => 'いそべ',
            'romaji' => 'Isobe',
        ]);
        // id: 1183
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '290',
            'kanji' => '西松井田',
            'kana' => 'にしまついだ',
            'romaji' => 'Nishi-Matsuida',
        ]);
        // id: 1184
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '290',
            'kanji' => '松井田',
            'kana' => 'まついだ',
            'romaji' => 'Matsuida',
        ]);
        // id: 1185
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '290',
            'kanji' => '横川',
            'kana' => 'よこかわ',
            'romaji' => 'Yokokawa',
        ]);
        // id: 1186
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '291',
            'kanji' => '伊勢崎',
            'kana' => 'いせさき',
            'romaji' => 'Isesaki',
        ]);
        // id: 1187
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '291',
            'kanji' => '国定',
            'kana' => 'くにさだ',
            'romaji' => 'Kunisada',
        ]);
        // id: 1188
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '292',
            'kanji' => '桐生',
            'kana' => 'きりゅう',
            'romaji' => 'Kiryū',
        ]);
        // id: 1189
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '293',
            'kanji' => '祖母島',
            'kana' => 'うばしま',
            'romaji' => 'Ubashima',
        ]);
        // id: 1190
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '293',
            'kanji' => '小野上',
            'kana' => 'おのがみ',
            'romaji' => 'Onogami',
        ]);
        // id: 1191
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '293',
            'kanji' => '小野上温泉',
            'kana' => 'おのがみおんせん',
            'romaji' => 'Onogami-Onsen',
        ]);
        // id: 1192
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '293',
            'kanji' => '金島',
            'kana' => 'かなしま',
            'romaji' => 'Kanashima',
        ]);
        // id: 1193
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '293',
            'kanji' => '敷島',
            'kana' => 'しきしま',
            'romaji' => 'Shikishima',
        ]);
        // id: 1194
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '293',
            'kanji' => '渋川',
            'kana' => 'しぶかわ',
            'romaji' => 'Shibukawa',
        ]);
        // id: 1195
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '293',
            'kanji' => '津久田',
            'kana' => 'つくだ',
            'romaji' => 'Tsukuda',
        ]);
        // id: 1196
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '293',
            'kanji' => '八木原',
            'kana' => 'やぎはら',
            'romaji' => 'Yagihara',
        ]);
        // id: 1197
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '294',
            'kanji' => '井野',
            'kana' => 'いの',
            'romaji' => 'Ino',
        ]);
        // id: 1198
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '294',
            'kanji' => '北高崎',
            'kana' => 'きたたかさき',
            'romaji' => 'Kita-Takasaki',
        ]);
        // id: 1199
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '294',
            'kanji' => '倉賀野',
            'kana' => 'くらがの',
            'romaji' => 'Kuragano',
        ]);
        // id: 1200
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '294',
            'kanji' => '群馬八幡',
            'kana' => 'ぐんまやわた',
            'romaji' => 'Gumma-Yawata',
        ]);
        // id: 1201
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '294',
            'kanji' => '新町',
            'kana' => 'しんまち',
            'romaji' => 'Shimmachi',
        ]);
        // id: 1202
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '294',
            'kanji' => '高崎',
            'kana' => 'たかさき',
            'romaji' => 'Takasaki',
        ]);
        // id: 1203
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '294',
            'kanji' => '高崎問屋町',
            'kana' => 'たかさきとんやまち',
            'romaji' => 'Takasakitonyamachi',
        ]);
        // id: 1204
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '295',
            'kanji' => '大前',
            'kana' => 'おおまえ',
            'romaji' => 'Ōmae',
        ]);
        // id: 1205
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '295',
            'kanji' => '袋倉',
            'kana' => 'ふくろぐら',
            'romaji' => 'Fukurogura',
        ]);
        // id: 1206
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '295',
            'kanji' => '万座・鹿沢口',
            'kana' => 'まんざ・かざわぐち',
            'romaji' => 'Manza-Kazawaguchi',
        ]);
        // id: 1207
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '296',
            'kanji' => '市城',
            'kana' => 'いちしろ',
            'romaji' => 'Ichishiro',
        ]);
        // id: 1208
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '296',
            'kanji' => '中之条',
            'kana' => 'なかのじょう',
            'romaji' => 'Nakanojō',
        ]);
        // id: 1209
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '297',
            'kanji' => '川原湯温泉',
            'kana' => 'かわらゆおんせん',
            'romaji' => 'Kawarayu-Onsen',
        ]);
        // id: 1210
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '297',
            'kanji' => '群馬大津',
            'kana' => 'ぐんまおおつ',
            'romaji' => 'Gumma-Ōtsu',
        ]);
        // id: 1211
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '297',
            'kanji' => '長野原草津口',
            'kana' => 'ながのはらくさつぐち',
            'romaji' => 'Naganoharakusatsuguchi',
        ]);
        // id: 1212
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '297',
            'kanji' => '羽根尾',
            'kana' => 'はねお',
            'romaji' => 'Haneo',
        ]);
        // id: 1213
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '298',
            'kanji' => '岩本',
            'kana' => 'いわもと',
            'romaji' => 'Iwamoto',
        ]);
        // id: 1214
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '298',
            'kanji' => '沼田',
            'kana' => 'ぬまた',
            'romaji' => 'Numata',
        ]);
        // id: 1215
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '299',
            'kanji' => '岩島',
            'kana' => 'いわしま',
            'romaji' => 'Iwashima',
        ]);
        // id: 1216
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '299',
            'kanji' => '群馬原町',
            'kana' => 'ぐんまはらまち',
            'romaji' => 'Gumma-Haramachi',
        ]);
        // id: 1217
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '299',
            'kanji' => '郷原',
            'kana' => 'ごうばら',
            'romaji' => 'Gōbara',
        ]);
        // id: 1218
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '299',
            'kanji' => '矢倉',
            'kana' => 'やぐら',
            'romaji' => 'Yagura',
        ]);
        // id: 1219
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '300',
            'kanji' => '北藤岡',
            'kana' => 'きたふじおか',
            'romaji' => 'Kita-Fujioka',
        ]);
        // id: 1220
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '300',
            'kanji' => '群馬藤岡',
            'kana' => 'ぐんまふじおか',
            'romaji' => 'Gumma-Fujioka',
        ]);
        // id: 1221
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '301',
            'kanji' => '群馬総社',
            'kana' => 'ぐんまそうじゃ',
            'romaji' => 'Gumma-Sōja',
        ]);
        // id: 1222
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '301',
            'kanji' => '駒形',
            'kana' => 'こまがた',
            'romaji' => 'Komagata',
        ]);
        // id: 1223
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '301',
            'kanji' => '新前橋',
            'kana' => 'しんまえばし',
            'romaji' => 'Shin-Maebashi',
        ]);
        // id: 1224
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '301',
            'kanji' => '前橋',
            'kana' => 'まえばし',
            'romaji' => 'Maebashi',
        ]);
        // id: 1225
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '301',
            'kanji' => '前橋大島',
            'kana' => 'まえばしおおしま',
            'romaji' => 'Maebashiōshima',
        ]);
        // id: 1226
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '302',
            'kanji' => '岩宿',
            'kana' => 'いわじゅく',
            'romaji' => 'Iwajuku',
        ]);
        // id: 1227
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '303',
            'kanji' => '上牧',
            'kana' => 'かみもく',
            'romaji' => 'Kamimoku',
        ]);
        // id: 1228
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '303',
            'kanji' => '後閑',
            'kana' => 'ごかん',
            'romaji' => 'Gokan',
        ]);
        // id: 1229
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '303',
            'kanji' => '上毛高原',
            'kana' => 'じょうもうこうげん',
            'romaji' => 'Jōmō-Kōgen',
        ]);
        // id: 1230
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '303',
            'kanji' => '土合',
            'kana' => 'どあい',
            'romaji' => 'Doai',
        ]);
        // id: 1231
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '303',
            'kanji' => '水上',
            'kana' => 'みなかみ',
            'romaji' => 'Minakami',
        ]);
        // id: 1232
        Station::insert([
            'prefecture_id' => '10',
            'city_id' => '303',
            'kanji' => '湯檜曽',
            'kana' => 'ゆびそ',
            'romaji' => 'Yubiso',
        ]);
        // id: 1233
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '304',
            'kanji' => '上尾',
            'kana' => 'あげお',
            'romaji' => 'Ageo',
        ]);
        // id: 1234
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '304',
            'kanji' => '北上尾',
            'kana' => 'きたあげお',
            'romaji' => 'Kita-Ageo',
        ]);
        // id: 1235
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '305',
            'kanji' => '北朝霞',
            'kana' => 'きたあさか',
            'romaji' => 'Kita-Asaka',
        ]);
        // id: 1236
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '306',
            'kanji' => '金子',
            'kana' => 'かねこ',
            'romaji' => 'Kaneko',
        ]);
        // id: 1237
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '307',
            'kanji' => '小川町',
            'kana' => 'おがわまち',
            'romaji' => 'Ogawamachi',
        ]);
        // id: 1238
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '307',
            'kanji' => '竹沢',
            'kana' => 'たけざわ',
            'romaji' => 'Takezawa',
        ]);
        // id: 1239
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '308',
            'kanji' => '桶川',
            'kana' => 'おけがわ',
            'romaji' => 'Okegawa',
        ]);
        // id: 1240
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '309',
            'kanji' => '越生',
            'kana' => 'おごせ',
            'romaji' => 'Ogose',
        ]);
        // id: 1241
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '310',
            'kanji' => '丹荘',
            'kana' => 'たんしょう',
            'romaji' => 'Tanshō',
        ]);
        // id: 1242
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '311',
            'kanji' => '神保原',
            'kana' => 'じんぼはら',
            'romaji' => 'Jimbohara',
        ]);
        // id: 1243
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '312',
            'kanji' => '川口',
            'kana' => 'かわぐち',
            'romaji' => 'Kawaguchi',
        ]);
        // id: 1244
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '312',
            'kanji' => '西川口',
            'kana' => 'にしかわぐち',
            'romaji' => 'Nishi-Kawaguchi',
        ]);
        // id: 1245
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '312',
            'kanji' => '東川口',
            'kana' => 'ひがしかわぐち',
            'romaji' => 'Higashi-Kawaguchi',
        ]);
        // id: 1246
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '313',
            'kanji' => '笠幡',
            'kana' => 'かさはた',
            'romaji' => 'Kasahata',
        ]);
        // id: 1247
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '313',
            'kanji' => '川越',
            'kana' => 'かわごえ',
            'romaji' => 'Kawagoe',
        ]);
        // id: 1248
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '313',
            'kanji' => '西川越',
            'kana' => 'にしかわごえ',
            'romaji' => 'Nishi-Kawagoe',
        ]);
        // id: 1249
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '313',
            'kanji' => '的場',
            'kana' => 'まとば',
            'romaji' => 'Matoba',
        ]);
        // id: 1250
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '313',
            'kanji' => '南古谷',
            'kana' => 'みなみふるや',
            'romaji' => 'Minami-Furuya',
        ]);
        // id: 1251
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '314',
            'kanji' => '北本',
            'kana' => 'きたもと',
            'romaji' => 'Kitamoto',
        ]);
        // id: 1252
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '315',
            'kanji' => '行田',
            'kana' => 'ぎょうだ',
            'romaji' => 'Gyōda',
        ]);
        // id: 1253
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '316',
            'kanji' => '久喜',
            'kana' => 'くき',
            'romaji' => 'Kuki',
        ]);
        // id: 1254
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '316',
            'kanji' => '栗橋',
            'kana' => 'くりはし',
            'romaji' => 'Kurihashi',
        ]);
        // id: 1255
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '316',
            'kanji' => '東鷲宮',
            'kana' => 'ひがしわしのみや',
            'romaji' => 'Higashi-Washinomiya',
        ]);
        // id: 1256
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '317',
            'kanji' => '籠原',
            'kana' => 'かごはら',
            'romaji' => 'Kagohara',
        ]);
        // id: 1257
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '317',
            'kanji' => '熊谷',
            'kana' => 'くまがや',
            'romaji' => 'Kumagaya',
        ]);
        // id: 1258
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '318',
            'kanji' => '北鴻巣',
            'kana' => 'きたこうのす',
            'romaji' => 'Kita-Kōnosu',
        ]);
        // id: 1259
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '318',
            'kanji' => '鴻巣',
            'kana' => 'こうのす',
            'romaji' => 'Kōnosu',
        ]);
        // id: 1260
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '318',
            'kanji' => '吹上',
            'kana' => 'ふきあげ',
            'romaji' => 'Fukiage',
        ]);
        // id: 1261
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '319',
            'kanji' => '越谷レイクタウン',
            'kana' => 'こしがやれいくたうん',
            'romaji' => 'Koshigaya-Laketown',
        ]);
        // id: 1262
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '319',
            'kanji' => '南越谷',
            'kana' => 'みなみこしがや',
            'romaji' => 'Minami-Koshigaya',
        ]);
        // id: 1263
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '浦和',
            'kana' => 'うらわ',
            'romaji' => 'Urawa',
        ]);
        // id: 1264
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '大宮',
            'kana' => 'おおみや',
            'romaji' => 'Ōmiya',
        ]);
        // id: 1265
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '北浦和',
            'kana' => 'きたうらわ',
            'romaji' => 'Kita-Urawa',
        ]);
        // id: 1266
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '北与野',
            'kana' => 'きたよの',
            'romaji' => 'Kita-Yono',
        ]);
        // id: 1267
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => 'さいたま新都心',
            'kana' => 'さいたましんとしん',
            'romaji' => 'Saitama-Shintoshin',
        ]);
        // id: 1268
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '指扇',
            'kana' => 'さしおうぎ',
            'romaji' => 'Sashiōgi',
        ]);
        // id: 1269
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '土呂',
            'kana' => 'とろ',
            'romaji' => 'Toro',
        ]);
        // id: 1270
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '中浦和',
            'kana' => 'なかうらわ',
            'romaji' => 'Naka-Urawa',
        ]);
        // id: 1271
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '西浦和',
            'kana' => 'にしうらわ',
            'romaji' => 'Nishi-Urawa',
        ]);
        // id: 1272
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '西大宮',
            'kana' => 'にしおおみや',
            'romaji' => 'Nishi-Ōmiya',
        ]);
        // id: 1273
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '日進',
            'kana' => 'にっしん',
            'romaji' => 'Nisshin',
        ]);
        // id: 1274
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '東浦和',
            'kana' => 'ひがしうらわ',
            'romaji' => 'Higashi-Urawa',
        ]);
        // id: 1275
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '東大宮',
            'kana' => 'ひがしおおみや',
            'romaji' => 'Higashi-Ōmiya',
        ]);
        // id: 1276
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '南浦和',
            'kana' => 'みなみうらわ',
            'romaji' => 'Minami-Urawa',
        ]);
        // id: 1277
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '南与野',
            'kana' => 'みなみよの',
            'romaji' => 'Minami-Yono',
        ]);
        // id: 1278
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '宮原',
            'kana' => 'みやはら',
            'romaji' => 'Miyahara',
        ]);
        // id: 1279
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '武蔵浦和',
            'kana' => 'むさしうらわ',
            'romaji' => 'Musashi-Urawa',
        ]);
        // id: 1280
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '与野',
            'kana' => 'よの',
            'romaji' => 'Yono',
        ]);
        // id: 1281
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '320',
            'kanji' => '与野本町',
            'kana' => 'よのほんまち',
            'romaji' => 'Yono-Hommachi',
        ]);
        // id: 1282
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '321',
            'kanji' => '白岡',
            'kana' => 'しらおか',
            'romaji' => 'Shiraoka',
        ]);
        // id: 1283
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '321',
            'kanji' => '新白岡',
            'kana' => 'しんしらおか',
            'romaji' => 'Shin-Shiraoka',
        ]);
        // id: 1284
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '322',
            'kanji' => '明覚',
            'kana' => 'みょうかく',
            'romaji' => 'Myōkaku',
        ]);
        // id: 1285
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '323',
            'kanji' => '東所沢',
            'kana' => 'ひがしところざわ',
            'romaji' => 'Higashi-Tokorozawa',
        ]);
        // id: 1286
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '324',
            'kanji' => '北戸田',
            'kana' => 'きたとだ',
            'romaji' => 'Kita-Toda',
        ]);
        // id: 1287
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '324',
            'kanji' => '戸田',
            'kana' => 'とだ',
            'romaji' => 'Toda',
        ]);
        // id: 1288
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '324',
            'kanji' => '戸田公園',
            'kana' => 'とだこうえん',
            'romaji' => 'Toda-Kōen',
        ]);
        // id: 1289
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '325',
            'kanji' => '新座',
            'kana' => 'にいざ',
            'romaji' => 'Niiza',
        ]);
        // id: 1290
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '326',
            'kanji' => '蓮田',
            'kana' => 'はすだ',
            'romaji' => 'Hasuda',
        ]);
        // id: 1291
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '327',
            'kanji' => '東飯能',
            'kana' => 'ひがしはんのう',
            'romaji' => 'Higashi-Hannō',
        ]);
        // id: 1292
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '328',
            'kanji' => '高麗川',
            'kana' => 'こまがわ',
            'romaji' => 'Komagawa',
        ]);
        // id: 1293
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '328',
            'kanji' => '武蔵高萩',
            'kana' => 'むさしたかはぎ',
            'romaji' => 'Musashi-Takahagi',
        ]);
        // id: 1294
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '329',
            'kanji' => '岡部',
            'kana' => 'おかべ',
            'romaji' => 'Okabe',
        ]);
        // id: 1295
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '329',
            'kanji' => '深谷',
            'kana' => 'ふかや',
            'romaji' => 'Fukaya',
        ]);
        // id: 1296
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '330',
            'kanji' => '児玉',
            'kana' => 'こだま',
            'romaji' => 'Kodama',
        ]);
        // id: 1297
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '330',
            'kanji' => '本庄',
            'kana' => 'ほんじょう',
            'romaji' => 'Honjō',
        ]);
        // id: 1298
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '330',
            'kanji' => '本庄早稲田',
            'kana' => 'ほんじょうわせだ',
            'romaji' => 'Honjōwaseda',
        ]);
        // id: 1299
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '331',
            'kanji' => '新三郷',
            'kana' => 'しんみさと',
            'romaji' => 'Shin-Misato',
        ]);
        // id: 1300
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '331',
            'kanji' => '三郷',
            'kana' => 'みさと',
            'romaji' => 'Misato',
        ]);
        // id: 1301
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '332',
            'kanji' => '松久',
            'kana' => 'まつひさ',
            'romaji' => 'Matsuhisa',
        ]);
        // id: 1302
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '333',
            'kanji' => '毛呂',
            'kana' => 'もろ',
            'romaji' => 'Moro',
        ]);
        // id: 1303
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '334',
            'kanji' => '吉川',
            'kana' => 'よしかわ',
            'romaji' => 'Yoshikawa',
        ]);
        // id: 1304
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '334',
            'kanji' => '吉川美南',
            'kana' => 'よしかわみなみ',
            'romaji' => 'Yoshikawaminami',
        ]);
        // id: 1305
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '335',
            'kanji' => '折原',
            'kana' => 'おりはら',
            'romaji' => 'Orihara',
        ]);
        // id: 1306
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '335',
            'kanji' => '用土',
            'kana' => 'ようど',
            'romaji' => 'Yōdo',
        ]);
        // id: 1307
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '335',
            'kanji' => '寄居',
            'kana' => 'よりい',
            'romaji' => 'Yorii',
        ]);
        // id: 1308
        Station::insert([
            'prefecture_id' => '11',
            'city_id' => '336',
            'kanji' => '蕨',
            'kana' => 'わらび',
            'romaji' => 'Warabi',
        ]);
        // id: 1309
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '337',
            'kanji' => '旭',
            'kana' => 'あさひ',
            'romaji' => 'Asahi',
        ]);
        // id: 1310
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '337',
            'kanji' => '飯岡',
            'kana' => 'いいおか',
            'romaji' => 'Iioka',
        ]);
        // id: 1311
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '337',
            'kanji' => '倉橋',
            'kana' => 'くらはし',
            'romaji' => 'Kurahashi',
        ]);
        // id: 1312
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '337',
            'kanji' => '干潟',
            'kana' => 'ひがた',
            'romaji' => 'Higata',
        ]);
        // id: 1313
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '338',
            'kanji' => '我孫子',
            'kana' => 'あびこ',
            'romaji' => 'Abiko',
        ]);
        // id: 1314
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '338',
            'kanji' => '新木',
            'kana' => 'あらき',
            'romaji' => 'Araki',
        ]);
        // id: 1315
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '338',
            'kanji' => '湖北',
            'kana' => 'こほく',
            'romaji' => 'Kohoku',
        ]);
        // id: 1316
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '338',
            'kanji' => '天王台',
            'kana' => 'てんのうだい',
            'romaji' => 'Tennōdai',
        ]);
        // id: 1317
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '338',
            'kanji' => '東我孫子',
            'kana' => 'ひがしあびこ',
            'romaji' => 'Higashi-Abiko',
        ]);
        // id: 1318
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '338',
            'kanji' => '布佐',
            'kana' => 'ふさ',
            'romaji' => 'Fusa',
        ]);
        // id: 1319
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '339',
            'kanji' => '大原',
            'kana' => 'おおはら',
            'romaji' => 'Ōhara',
        ]);
        // id: 1320
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '339',
            'kanji' => '太東',
            'kana' => 'たいとう',
            'romaji' => 'Taitō',
        ]);
        // id: 1321
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '339',
            'kanji' => '長者町',
            'kana' => 'ちょうじゃまち',
            'romaji' => 'Chōjamachi',
        ]);
        // id: 1322
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '339',
            'kanji' => '浪花',
            'kana' => 'なみはな',
            'romaji' => 'Namihana',
        ]);
        // id: 1323
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '339',
            'kanji' => '三門',
            'kana' => 'みかど',
            'romaji' => 'Mikado',
        ]);
        // id: 1324
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '340',
            'kanji' => '市川',
            'kana' => 'いちかわ',
            'romaji' => 'Ichikawa',
        ]);
        // id: 1325
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '340',
            'kanji' => '市川大野',
            'kana' => 'いちかわおおの',
            'romaji' => 'Ichikawaōno',
        ]);
        // id: 1326
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '340',
            'kanji' => '市川塩浜',
            'kana' => 'いちかわしおはま',
            'romaji' => 'Ichikawashiohama',
        ]);
        // id: 1327
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '340',
            'kanji' => '二俣新町',
            'kana' => 'ふたまたしんまち',
            'romaji' => 'Futamatashimmachi',
        ]);
        // id: 1328
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '340',
            'kanji' => '本八幡',
            'kana' => 'もとやわた',
            'romaji' => 'Moto-Yawata',
        ]);
        // id: 1329
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '341',
            'kanji' => '上総一ノ宮',
            'kana' => 'かずさいちのみや',
            'romaji' => 'Kazusa-Ichinomiya',
        ]);
        // id: 1330
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '341',
            'kanji' => '東浪見',
            'kana' => 'とらみ',
            'romaji' => 'Torami',
        ]);
        // id: 1331
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '342',
            'kanji' => '姉ケ崎',
            'kana' => 'あねがさき',
            'romaji' => 'Anegasaki',
        ]);
        // id: 1332
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '342',
            'kanji' => '五井',
            'kana' => 'ごい',
            'romaji' => 'Goi',
        ]);
        // id: 1333
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '342',
            'kanji' => '八幡宿',
            'kana' => 'やわたじゅく',
            'romaji' => 'Yawatajuku',
        ]);
        // id: 1334
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '343',
            'kanji' => '木下',
            'kana' => 'きおろし',
            'romaji' => 'Kioroshi',
        ]);
        // id: 1335
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '343',
            'kanji' => '小林',
            'kana' => 'こばやし',
            'romaji' => 'Kobayashi',
        ]);
        // id: 1336
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '344',
            'kanji' => '新浦安',
            'kana' => 'しんうらやす',
            'romaji' => 'Shin-Urayasu',
        ]);
        // id: 1337
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '344',
            'kanji' => '舞浜',
            'kana' => 'まいはま',
            'romaji' => 'Maihama',
        ]);
        // id: 1338
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '345',
            'kanji' => '大網',
            'kana' => 'おおあみ',
            'romaji' => 'Ōami',
        ]);
        // id: 1339
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '345',
            'kanji' => '永田',
            'kana' => 'ながた',
            'romaji' => 'Nagata',
        ]);
        // id: 1340
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '346',
            'kanji' => '御宿',
            'kana' => 'おんじゅく',
            'romaji' => 'Onjuku',
        ]);
        // id: 1341
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '347',
            'kanji' => '柏',
            'kana' => 'かしわ',
            'romaji' => 'Kashiwa',
        ]);
        // id: 1342
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '347',
            'kanji' => '北柏',
            'kana' => 'きたかしわ',
            'romaji' => 'Kita-Kashiwa',
        ]);
        // id: 1343
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '347',
            'kanji' => '南柏',
            'kana' => 'みなみかしわ',
            'romaji' => 'Minami-Kashiwa',
        ]);
        // id: 1344
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '348',
            'kanji' => '鵜原',
            'kana' => 'うばら',
            'romaji' => 'Ubara',
        ]);
        // id: 1345
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '348',
            'kanji' => '上総興津',
            'kana' => 'かずさおきつ',
            'romaji' => 'Kazusa-Okitsu',
        ]);
        // id: 1346
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '348',
            'kanji' => '勝浦',
            'kana' => 'かつうら',
            'romaji' => 'Katsuura',
        ]);
        // id: 1347
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '348',
            'kanji' => '行川アイランド',
            'kana' => 'なめがわあいらんど',
            'romaji' => 'Namegawa-Island',
        ]);
        // id: 1348
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '349',
            'kanji' => '大戸',
            'kana' => 'おおと',
            'romaji' => 'Ōto',
        ]);
        // id: 1349
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '349',
            'kanji' => '小見川',
            'kana' => 'おみがわ',
            'romaji' => 'Omigawa',
        ]);
        // id: 1350
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '349',
            'kanji' => '香取',
            'kana' => 'かとり',
            'romaji' => 'Katori',
        ]);
        // id: 1351
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '349',
            'kanji' => '佐原',
            'kana' => 'さわら',
            'romaji' => 'Sawara',
        ]);
        // id: 1352
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '349',
            'kanji' => '十二橋',
            'kana' => 'じゅうにきょう',
            'romaji' => 'Jūnikyō',
        ]);
        // id: 1353
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '349',
            'kanji' => '水郷',
            'kana' => 'すいごう',
            'romaji' => 'Suigō',
        ]);
        // id: 1354
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '350',
            'kanji' => '安房天津',
            'kana' => 'あわあまつ',
            'romaji' => 'Awa-Amatsu',
        ]);
        // id: 1355
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '350',
            'kanji' => '安房鴨川',
            'kana' => 'あわかもがわ',
            'romaji' => 'Awa-Kamogawa',
        ]);
        // id: 1356
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '350',
            'kanji' => '安房小湊',
            'kana' => 'あわこみなと',
            'romaji' => 'Awa-Kominato',
        ]);
        // id: 1357
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '350',
            'kanji' => '江見',
            'kana' => 'えみ',
            'romaji' => 'Emi',
        ]);
        // id: 1358
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '350',
            'kanji' => '太海',
            'kana' => 'ふとみ',
            'romaji' => 'Futomi',
        ]);
        // id: 1359
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '351',
            'kanji' => '巌根',
            'kana' => 'いわね',
            'romaji' => 'Iwane',
        ]);
        // id: 1360
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '351',
            'kanji' => '上総清川',
            'kana' => 'かずさきよかわ',
            'romaji' => 'Kazusa-Kiyokawa',
        ]);
        // id: 1361
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '351',
            'kanji' => '祇園',
            'kana' => 'ぎおん',
            'romaji' => 'Gion',
        ]);
        // id: 1362
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '351',
            'kanji' => '木更津',
            'kana' => 'きさらづ',
            'romaji' => 'Kisarazu',
        ]);
        // id: 1363
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '351',
            'kanji' => '東清川',
            'kana' => 'ひがしきよかわ',
            'romaji' => 'Higashi-Kiyokawa',
        ]);
        // id: 1364
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '351',
            'kanji' => '馬来田',
            'kana' => 'まくた',
            'romaji' => 'Makuta',
        ]);
        // id: 1365
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '352',
            'kanji' => '小櫃',
            'kana' => 'おびつ',
            'romaji' => 'Obitsu',
        ]);
        // id: 1366
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '352',
            'kanji' => '上総亀山',
            'kana' => 'かずさかめやま',
            'romaji' => 'Kazusa-Kameyama',
        ]);
        // id: 1367
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '352',
            'kanji' => '上総松丘',
            'kana' => 'かずさまつおか',
            'romaji' => 'Kazusa-Matsuoka',
        ]);
        // id: 1368
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '352',
            'kanji' => '君津',
            'kana' => 'きみつ',
            'romaji' => 'Kimitsu',
        ]);
        // id: 1369
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '352',
            'kanji' => '久留里',
            'kana' => 'くるり',
            'romaji' => 'Kururi',
        ]);
        // id: 1370
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '352',
            'kanji' => '下郡',
            'kana' => 'しもごおり',
            'romaji' => 'Shimogōri',
        ]);
        // id: 1371
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '352',
            'kanji' => '俵田',
            'kana' => 'たわらだ',
            'romaji' => 'Tawarada',
        ]);
        // id: 1372
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '352',
            'kanji' => '平山',
            'kana' => 'ひらやま',
            'romaji' => 'Hirayama',
        ]);
        // id: 1373
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '353',
            'kanji' => '安房勝山',
            'kana' => 'あわかつやま',
            'romaji' => 'Awa-Katsuyama',
        ]);
        // id: 1374
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '353',
            'kanji' => '保田',
            'kana' => 'ほた',
            'romaji' => 'Hota',
        ]);
        // id: 1375
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '354',
            'kanji' => '下総神崎',
            'kana' => 'しもうさこうざき',
            'romaji' => 'Shimōsa-Kōzaki',
        ]);
        // id: 1376
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '355',
            'kanji' => '安食',
            'kana' => 'あじき',
            'romaji' => 'Ajiki',
        ]);
        // id: 1377
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '356',
            'kanji' => '佐倉',
            'kana' => 'さくら',
            'romaji' => 'Sakura',
        ]);
        // id: 1378
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '357',
            'kanji' => '成東',
            'kana' => 'なるとう',
            'romaji' => 'Narutō',
        ]);
        // id: 1379
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '357',
            'kanji' => '日向',
            'kana' => 'ひゅうが',
            'romaji' => 'Hyūga',
        ]);
        // id: 1380
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '357',
            'kanji' => '松尾',
            'kana' => 'まつお',
            'romaji' => 'Matsuo',
        ]);
        // id: 1381
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '358',
            'kanji' => '酒々井',
            'kana' => 'しすい',
            'romaji' => 'Shisui',
        ]);
        // id: 1382
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '358',
            'kanji' => '南酒々井',
            'kana' => 'みなみしすい',
            'romaji' => 'Minami-Shisui',
        ]);
        // id: 1383
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '359',
            'kanji' => '飯倉',
            'kana' => 'いいぐら',
            'romaji' => 'Iigura',
        ]);
        // id: 1384
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '359',
            'kanji' => '八日市場',
            'kana' => 'ようかいちば',
            'romaji' => 'Yōkaichiba',
        ]);
        // id: 1385
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '360',
            'kanji' => '袖ケ浦',
            'kana' => 'そでがうら',
            'romaji' => 'Sodegaura',
        ]);
        // id: 1386
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '360',
            'kanji' => '長浦',
            'kana' => 'ながうら',
            'romaji' => 'Nagaura',
        ]);
        // id: 1387
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '360',
            'kanji' => '東横田',
            'kana' => 'ひがしよこた',
            'romaji' => 'Higashi-Yokota',
        ]);
        // id: 1388
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '360',
            'kanji' => '横田',
            'kana' => 'よこた',
            'romaji' => 'Yokota',
        ]);
        // id: 1389
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '361',
            'kanji' => '九重',
            'kana' => 'ここのえ',
            'romaji' => 'Kokonoe',
        ]);
        // id: 1390
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '361',
            'kanji' => '館山',
            'kana' => 'たてやま',
            'romaji' => 'Tateyama',
        ]);
        // id: 1391
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '361',
            'kanji' => '那古船形',
            'kana' => 'なこふなかた',
            'romaji' => 'Nakofunakata',
        ]);
        // id: 1392
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '稲毛',
            'kana' => 'いなげ',
            'romaji' => 'Inage',
        ]);
        // id: 1393
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '稲毛海岸',
            'kana' => 'いなげかいがん',
            'romaji' => 'Inagekaigan',
        ]);
        // id: 1394
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '海浜幕張',
            'kana' => 'かいひんまくはり',
            'romaji' => 'Kaihimmakuhari',
        ]);
        // id: 1395
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '鎌取',
            'kana' => 'かまとり',
            'romaji' => 'Kamatori',
        ]);
        // id: 1396
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '検見川浜',
            'kana' => 'けみがわはま',
            'romaji' => 'Kemigawahama',
        ]);
        // id: 1397
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '新検見川',
            'kana' => 'しんけみがわ',
            'romaji' => 'Shin-Kemigawa',
        ]);
        // id: 1398
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '蘇我',
            'kana' => 'そが',
            'romaji' => 'Soga',
        ]);
        // id: 1399
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '千葉',
            'kana' => 'ちば',
            'romaji' => 'Chiba',
        ]);
        // id: 1400
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '千葉みなと',
            'kana' => 'ちばみなと',
            'romaji' => 'Chibaminato',
        ]);
        // id: 1401
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '都賀',
            'kana' => 'つが',
            'romaji' => 'Tsuga',
        ]);
        // id: 1402
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '土気',
            'kana' => 'とけ',
            'romaji' => 'Toke',
        ]);
        // id: 1403
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '西千葉',
            'kana' => 'にしちば',
            'romaji' => 'Nishi-Chiba',
        ]);
        // id: 1404
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '浜野',
            'kana' => 'はまの',
            'romaji' => 'Hamano',
        ]);
        // id: 1405
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '東千葉',
            'kana' => 'ひがしちば',
            'romaji' => 'Higashi-Chiba',
        ]);
        // id: 1406
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '誉田',
            'kana' => 'ほんだ',
            'romaji' => 'Honda',
        ]);
        // id: 1407
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '本千葉',
            'kana' => 'ほんちば',
            'romaji' => 'Hon-Chiba',
        ]);
        // id: 1408
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '幕張',
            'kana' => 'まくはり',
            'romaji' => 'Makuhari',
        ]);
        // id: 1409
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '362',
            'kanji' => '幕張本郷',
            'kana' => 'まくはりほんごう',
            'romaji' => 'Makuharihongō',
        ]);
        // id: 1410
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '363',
            'kanji' => '猿田',
            'kana' => 'さるだ',
            'romaji' => 'Saruda',
        ]);
        // id: 1411
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '363',
            'kanji' => '椎柴',
            'kana' => 'しいしば',
            'romaji' => 'Shiishiba',
        ]);
        // id: 1412
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '363',
            'kanji' => '下総豊里',
            'kana' => 'しもうさとよさと',
            'romaji' => 'Shimōsa-Toyosato',
        ]);
        // id: 1413
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '363',
            'kanji' => '銚子',
            'kana' => 'ちょうし',
            'romaji' => 'Chōshi',
        ]);
        // id: 1414
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '363',
            'kanji' => '松岸',
            'kana' => 'まつぎし',
            'romaji' => 'Matsugishi',
        ]);
        // id: 1415
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '364',
            'kanji' => '八積',
            'kana' => 'やつみ',
            'romaji' => 'Yatsumi',
        ]);
        // id: 1416
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '365',
            'kanji' => '求名',
            'kana' => 'ぐみょう',
            'romaji' => 'Gumyō',
        ]);
        // id: 1417
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '365',
            'kanji' => '東金',
            'kana' => 'とうがね',
            'romaji' => 'Tōgane',
        ]);
        // id: 1418
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '365',
            'kanji' => '福俵',
            'kana' => 'ふくたわら',
            'romaji' => 'Fukutawara',
        ]);
        // id: 1419
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '366',
            'kanji' => '笹川',
            'kana' => 'ささがわ',
            'romaji' => 'Sasagawa',
        ]);
        // id: 1420
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '366',
            'kanji' => '下総橘',
            'kana' => 'しもうさたちばな',
            'romaji' => 'Shimōsa-Tachibana',
        ]);
        // id: 1421
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '367',
            'kanji' => '南流山',
            'kana' => 'みなみながれやま',
            'romaji' => 'Minami-Nagareyama',
        ]);
        // id: 1422
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '368',
            'kanji' => '新習志野',
            'kana' => 'しんならしの',
            'romaji' => 'Shin-Narashino',
        ]);
        // id: 1423
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '368',
            'kanji' => '津田沼',
            'kana' => 'つだぬま',
            'romaji' => 'Tsudanuma',
        ]);
        // id: 1424
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '369',
            'kanji' => '空港第２ビル',
            'kana' => 'くうこうだいにびる',
            'romaji' => 'Narita Airport Terminal 2・3',
        ]);
        // id: 1425
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '369',
            'kanji' => '久住',
            'kana' => 'くずみ',
            'romaji' => 'Kuzumi',
        ]);
        // id: 1426
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '369',
            'kanji' => '下総松崎',
            'kana' => 'しもうさまんざき',
            'romaji' => 'Shimōsa-Manzaki',
        ]);
        // id: 1427
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '369',
            'kanji' => '滑河',
            'kana' => 'なめがわ',
            'romaji' => 'Namegawa',
        ]);
        // id: 1428
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '369',
            'kanji' => '成田',
            'kana' => 'なりた',
            'romaji' => 'Narita',
        ]);
        // id: 1429
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '369',
            'kanji' => '成田空港',
            'kana' => 'なりたくうこう',
            'romaji' => 'Narita Airport Terminal 1',
        ]);
        // id: 1430
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '370',
            'kanji' => '青堀',
            'kana' => 'あおほり',
            'romaji' => 'Aohori',
        ]);
        // id: 1431
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '370',
            'kanji' => '大貫',
            'kana' => 'おおぬき',
            'romaji' => 'Ōnuki',
        ]);
        // id: 1432
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '370',
            'kanji' => '上総湊',
            'kana' => 'かずさみなと',
            'romaji' => 'Kazusa-Minato',
        ]);
        // id: 1433
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '370',
            'kanji' => '佐貫町',
            'kana' => 'さぬきまち',
            'romaji' => 'Sanukimachi',
        ]);
        // id: 1434
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '370',
            'kanji' => '竹岡',
            'kana' => 'たけおか',
            'romaji' => 'Takeoka',
        ]);
        // id: 1435
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '370',
            'kanji' => '浜金谷',
            'kana' => 'はまかなや',
            'romaji' => 'Hama-Kanaya',
        ]);
        // id: 1436
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '371',
            'kanji' => '下総中山',
            'kana' => 'しもうさなかやま',
            'romaji' => 'Shimōsa-Nakayama',
        ]);
        // id: 1437
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '371',
            'kanji' => '西船橋',
            'kana' => 'にしふなばし',
            'romaji' => 'Nishi-Funabashi',
        ]);
        // id: 1438
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '371',
            'kanji' => '東船橋',
            'kana' => 'ひがしふなばし',
            'romaji' => 'Higashi-Funabashi',
        ]);
        // id: 1439
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '371',
            'kanji' => '船橋',
            'kana' => 'ふなばし',
            'romaji' => 'Funabashi',
        ]);
        // id: 1440
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '371',
            'kanji' => '船橋法典',
            'kana' => 'ふなばしほうてん',
            'romaji' => 'Funabashihōten',
        ]);
        // id: 1441
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '371',
            'kanji' => '南船橋',
            'kana' => 'みなみふなばし',
            'romaji' => 'Minami-Funabashi',
        ]);
        // id: 1442
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '372',
            'kanji' => '北小金',
            'kana' => 'きたこがね',
            'romaji' => 'Kita-Kogane',
        ]);
        // id: 1443
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '372',
            'kanji' => '北松戸',
            'kana' => 'きたまつど',
            'romaji' => 'Kita-Matsudo',
        ]);
        // id: 1444
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '372',
            'kanji' => '新松戸',
            'kana' => 'しんまつど',
            'romaji' => 'Shin-Matsudo',
        ]);
        // id: 1445
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '372',
            'kanji' => '新八柱',
            'kana' => 'しんやはしら',
            'romaji' => 'Shin-Yahashira',
        ]);
        // id: 1446
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '372',
            'kanji' => '東松戸',
            'kana' => 'ひがしまつど',
            'romaji' => 'Higashi-Matsudo',
        ]);
        // id: 1447
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '372',
            'kanji' => '松戸',
            'kana' => 'まつど',
            'romaji' => 'Matsudo',
        ]);
        // id: 1448
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '372',
            'kanji' => '馬橋',
            'kana' => 'まばし',
            'romaji' => 'Mabashi',
        ]);
        // id: 1449
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '373',
            'kanji' => '岩井',
            'kana' => 'いわい',
            'romaji' => 'Iwai',
        ]);
        // id: 1450
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '373',
            'kanji' => '千倉',
            'kana' => 'ちくら',
            'romaji' => 'Chikura',
        ]);
        // id: 1451
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '373',
            'kanji' => '千歳',
            'kana' => 'ちとせ',
            'romaji' => 'Chitose',
        ]);
        // id: 1452
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '373',
            'kanji' => '富浦',
            'kana' => 'とみうら',
            'romaji' => 'Tomiura',
        ]);
        // id: 1453
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '373',
            'kanji' => '南三原',
            'kana' => 'みなみはら',
            'romaji' => 'Minamihara',
        ]);
        // id: 1454
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '373',
            'kanji' => '和田浦',
            'kana' => 'わだうら',
            'romaji' => 'Wadaura',
        ]);
        // id: 1455
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '374',
            'kanji' => '新茂原',
            'kana' => 'しんもばら',
            'romaji' => 'Shin-Mobara',
        ]);
        // id: 1456
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '374',
            'kanji' => '本納',
            'kana' => 'ほんのう',
            'romaji' => 'Honnō',
        ]);
        // id: 1457
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '374',
            'kanji' => '茂原',
            'kana' => 'もばら',
            'romaji' => 'Mobara',
        ]);
        // id: 1458
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '375',
            'kanji' => '榎戸',
            'kana' => 'えのきど',
            'romaji' => 'Enokido',
        ]);
        // id: 1459
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '375',
            'kanji' => '八街',
            'kana' => 'やちまた',
            'romaji' => 'Yachimata',
        ]);
        // id: 1460
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '376',
            'kanji' => '横芝',
            'kana' => 'よこしば',
            'romaji' => 'Yokoshiba',
        ]);
        // id: 1461
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '377',
            'kanji' => '物井',
            'kana' => 'ものい',
            'romaji' => 'Monoi',
        ]);
        // id: 1462
        Station::insert([
            'prefecture_id' => '12',
            'city_id' => '377',
            'kanji' => '四街道',
            'kana' => 'よつかいどう',
            'romaji' => 'Yotsukaidō',
        ]);
        // id: 1463
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '378',
            'kanji' => '昭島',
            'kana' => 'あきしま',
            'romaji' => 'Akishima',
        ]);
        // id: 1464
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '378',
            'kanji' => '中神',
            'kana' => 'なかがみ',
            'romaji' => 'Nakagami',
        ]);
        // id: 1465
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '378',
            'kanji' => '拝島',
            'kana' => 'はいじま',
            'romaji' => 'Haijima',
        ]);
        // id: 1466
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '378',
            'kanji' => '東中神',
            'kana' => 'ひがしなかがみ',
            'romaji' => 'Higashi-Nakagami',
        ]);
        // id: 1467
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '379',
            'kanji' => '秋川',
            'kana' => 'あきがわ',
            'romaji' => 'Akigawa',
        ]);
        // id: 1468
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '379',
            'kanji' => '東秋留',
            'kana' => 'ひがしあきる',
            'romaji' => 'Higashi-Akiru',
        ]);
        // id: 1469
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '379',
            'kanji' => '武蔵五日市',
            'kana' => 'むさしいつかいち',
            'romaji' => 'Musashi-Itsukaichi',
        ]);
        // id: 1470
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '379',
            'kanji' => '武蔵引田',
            'kana' => 'むさしひきだ',
            'romaji' => 'Musashi-Hikida',
        ]);
        // id: 1471
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '379',
            'kanji' => '武蔵増戸',
            'kana' => 'むさしますこ',
            'romaji' => 'Musashi-Masuko',
        ]);
        // id: 1472
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '380',
            'kanji' => '綾瀬',
            'kana' => 'あやせ',
            'romaji' => 'Ayase',
        ]);
        // id: 1473
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '380',
            'kanji' => '北千住',
            'kana' => 'きたせんじゅ',
            'romaji' => 'Kita-Senju',
        ]);
        // id: 1474
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '381',
            'kanji' => '西日暮里',
            'kana' => 'にしにっぽり',
            'romaji' => 'Nishi-Nippori',
        ]);
        // id: 1475
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '381',
            'kanji' => '日暮里',
            'kana' => 'にっぽり',
            'romaji' => 'Nippori',
        ]);
        // id: 1476
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '381',
            'kanji' => '三河島',
            'kana' => 'みかわしま',
            'romaji' => 'Mikawashima',
        ]);
        // id: 1477
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '381',
            'kanji' => '南千住',
            'kana' => 'みなみせんじゅ',
            'romaji' => 'Minami-Senju',
        ]);
        // id: 1478
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '382',
            'kanji' => '板橋',
            'kana' => 'いたばし',
            'romaji' => 'Itabashi',
        ]);
        // id: 1479
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '383',
            'kanji' => '稲城長沼',
            'kana' => 'いなぎながぬま',
            'romaji' => 'Inaginaganuma',
        ]);
        // id: 1480
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '383',
            'kanji' => '南多摩',
            'kana' => 'みなみたま',
            'romaji' => 'Minami-Tama',
        ]);
        // id: 1481
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '383',
            'kanji' => '矢野口',
            'kana' => 'やのくち',
            'romaji' => 'Yanokuchi',
        ]);
        // id: 1482
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '384',
            'kanji' => '葛西臨海公園',
            'kana' => 'かさいりんかいこうえん',
            'romaji' => 'Kasai-Rinkai Park',
        ]);
        // id: 1483
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '384',
            'kanji' => '小岩',
            'kana' => 'こいわ',
            'romaji' => 'Koiwa',
        ]);
        // id: 1484
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '384',
            'kanji' => '平井',
            'kana' => 'ひらい',
            'romaji' => 'Hirai',
        ]);
        // id: 1485
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '軍畑',
            'kana' => 'いくさばた',
            'romaji' => 'Ikusabata',
        ]);
        // id: 1486
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '石神前',
            'kana' => 'いしがみまえ',
            'romaji' => 'Ishigamimae',
        ]);
        // id: 1487
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '青梅',
            'kana' => 'おうめ',
            'romaji' => 'Ōme',
        ]);
        // id: 1488
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '河辺',
            'kana' => 'かべ',
            'romaji' => 'Kabe',
        ]);
        // id: 1489
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '沢井',
            'kana' => 'さわい',
            'romaji' => 'Sawai',
        ]);
        // id: 1490
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '東青梅',
            'kana' => 'ひがしおうめ',
            'romaji' => 'Higashi-Ōme',
        ]);
        // id: 1491
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '日向和田',
            'kana' => 'ひなたわだ',
            'romaji' => 'Hinatawada',
        ]);
        // id: 1492
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '二俣尾',
            'kana' => 'ふたまたお',
            'romaji' => 'Futamatao',
        ]);
        // id: 1493
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '御嶽',
            'kana' => 'みたけ',
            'romaji' => 'Mitake',
        ]);
        // id: 1494
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '385',
            'kanji' => '宮ノ平',
            'kana' => 'みやのひら',
            'romaji' => 'Miyanohira',
        ]);
        // id: 1495
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '386',
            'kanji' => '大森',
            'kana' => 'おおもり',
            'romaji' => 'Ōmori',
        ]);
        // id: 1496
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '386',
            'kanji' => '蒲田',
            'kana' => 'かまた',
            'romaji' => 'Kamata',
        ]);
        // id: 1497
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '387',
            'kanji' => '奥多摩',
            'kana' => 'おくたま',
            'romaji' => 'Okutama',
        ]);
        // id: 1498
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '387',
            'kanji' => '川井',
            'kana' => 'かわい',
            'romaji' => 'Kawai',
        ]);
        // id: 1499
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '387',
            'kanji' => '古里',
            'kana' => 'こり',
            'romaji' => 'Kori',
        ]);
        // id: 1500
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '387',
            'kanji' => '白丸',
            'kana' => 'しろまる',
            'romaji' => 'Shiromaru',
        ]);
        // id: 1501
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '387',
            'kanji' => '鳩ノ巣',
            'kana' => 'はとのす',
            'romaji' => 'Hatonosu',
        ]);
        // id: 1502
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '388',
            'kanji' => '金町',
            'kana' => 'かなまち',
            'romaji' => 'Kanamachi',
        ]);
        // id: 1503
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '388',
            'kanji' => '亀有',
            'kana' => 'かめあり',
            'romaji' => 'Kameari',
        ]);
        // id: 1504
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '388',
            'kanji' => '新小岩',
            'kana' => 'しんこいわ',
            'romaji' => 'Shin-Koiwa',
        ]);
        // id: 1505
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '赤羽',
            'kana' => 'あかばね',
            'romaji' => 'Akabane',
        ]);
        // id: 1506
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '浮間舟渡',
            'kana' => 'うきまふなど',
            'romaji' => 'Ukimafunado',
        ]);
        // id: 1507
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '王子',
            'kana' => 'おうじ',
            'romaji' => 'Ōji',
        ]);
        // id: 1508
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '尾久',
            'kana' => 'おく',
            'romaji' => 'Oku',
        ]);
        // id: 1509
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '上中里',
            'kana' => 'かみなかざと',
            'romaji' => 'Kami-Nakazato',
        ]);
        // id: 1510
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '北赤羽',
            'kana' => 'きたあかばね',
            'romaji' => 'Kita-Akabane',
        ]);
        // id: 1511
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '十条',
            'kana' => 'じゅうじょう',
            'romaji' => 'Jūjō',
        ]);
        // id: 1512
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '田端',
            'kana' => 'たばた',
            'romaji' => 'Tabata',
        ]);
        // id: 1513
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '389',
            'kanji' => '東十条',
            'kana' => 'ひがしじゅうじょう',
            'romaji' => 'Higashi-Jūjō',
        ]);
        // id: 1514
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '390',
            'kanji' => '国立',
            'kana' => 'くにたち',
            'romaji' => 'Kunitachi',
        ]);
        // id: 1515
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '390',
            'kanji' => '矢川',
            'kana' => 'やがわ',
            'romaji' => 'Yagawa',
        ]);
        // id: 1516
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '390',
            'kanji' => '谷保',
            'kana' => 'やほ',
            'romaji' => 'Yaho',
        ]);
        // id: 1517
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '391',
            'kanji' => '越中島',
            'kana' => 'えっちゅうじま',
            'romaji' => 'Etchūjima',
        ]);
        // id: 1518
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '391',
            'kanji' => '亀戸',
            'kana' => 'かめいど',
            'romaji' => 'Kameido',
        ]);
        // id: 1519
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '391',
            'kanji' => '潮見',
            'kana' => 'しおみ',
            'romaji' => 'Shiomi',
        ]);
        // id: 1520
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '391',
            'kanji' => '新木場',
            'kana' => 'しんきば',
            'romaji' => 'Shin-Kiba',
        ]);
        // id: 1521
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '392',
            'kanji' => '東小金井',
            'kana' => 'ひがしこがねい',
            'romaji' => 'Higashi-Koganei',
        ]);
        // id: 1522
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '392',
            'kanji' => '武蔵小金井',
            'kana' => 'むさしこがねい',
            'romaji' => 'Musashi-Koganei',
        ]);
        // id: 1523
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '393',
            'kanji' => '国分寺',
            'kana' => 'こくぶんじ',
            'romaji' => 'Kokubunji',
        ]);
        // id: 1524
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '393',
            'kanji' => '西国分寺',
            'kana' => 'にしこくぶんじ',
            'romaji' => 'Nishi-Kokubunji',
        ]);
        // id: 1525
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '394',
            'kanji' => '新小平',
            'kana' => 'しんこだいら',
            'romaji' => 'Shin-Kodaira',
        ]);
        // id: 1526
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '395',
            'kanji' => '大井町',
            'kana' => 'おおいまち',
            'romaji' => 'Ōimachi',
        ]);
        // id: 1527
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '395',
            'kanji' => '大崎',
            'kana' => 'おおさき',
            'romaji' => 'Ōsaki',
        ]);
        // id: 1528
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '395',
            'kanji' => '五反田',
            'kana' => 'ごたんだ',
            'romaji' => 'Gotanda',
        ]);
        // id: 1529
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '395',
            'kanji' => '西大井',
            'kana' => 'にしおおい',
            'romaji' => 'Nishi-Ōi',
        ]);
        // id: 1530
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '395',
            'kanji' => '目黒',
            'kana' => 'めぐろ',
            'romaji' => 'Meguro',
        ]);
        // id: 1531
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '396',
            'kanji' => '恵比寿',
            'kana' => 'えびす',
            'romaji' => 'Ebisu',
        ]);
        // id: 1532
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '396',
            'kanji' => '渋谷',
            'kana' => 'しぶや',
            'romaji' => 'Shibuya',
        ]);
        // id: 1533
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '396',
            'kanji' => '千駄ケ谷',
            'kana' => 'せんだがや',
            'romaji' => 'Sendagaya',
        ]);
        // id: 1534
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '396',
            'kanji' => '原宿',
            'kana' => 'はらじゅく',
            'romaji' => 'Harajuku',
        ]);
        // id: 1535
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '396',
            'kanji' => '代々木',
            'kana' => 'よよぎ',
            'romaji' => 'Yoyogi',
        ]);
        // id: 1536
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '397',
            'kanji' => '大久保',
            'kana' => 'おおくぼ',
            'romaji' => 'Ōkubo',
        ]);
        // id: 1537
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '397',
            'kanji' => '信濃町',
            'kana' => 'しなのまち',
            'romaji' => 'Shinanomachi',
        ]);
        // id: 1538
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '397',
            'kanji' => '新大久保',
            'kana' => 'しんおおくぼ',
            'romaji' => 'Shin-Ōkubo',
        ]);
        // id: 1539
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '397',
            'kanji' => '新宿',
            'kana' => 'しんじゅく',
            'romaji' => 'Shinjuku',
        ]);
        // id: 1540
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '397',
            'kanji' => '高田馬場',
            'kana' => 'たかだのばば',
            'romaji' => 'Takadanobaba',
        ]);
        // id: 1541
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '397',
            'kanji' => '四ツ谷',
            'kana' => 'よつや',
            'romaji' => 'Yotsuya',
        ]);
        // id: 1542
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '398',
            'kanji' => '阿佐ケ谷',
            'kana' => 'あさがや',
            'romaji' => 'Asagaya',
        ]);
        // id: 1543
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '398',
            'kanji' => '荻窪',
            'kana' => 'おぎくぼ',
            'romaji' => 'Ogikubo',
        ]);
        // id: 1544
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '398',
            'kanji' => '高円寺',
            'kana' => 'こうえんじ',
            'romaji' => 'Kōenji',
        ]);
        // id: 1545
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '398',
            'kanji' => '西荻窪',
            'kana' => 'にしおぎくぼ',
            'romaji' => 'Nishi-Ogikubo',
        ]);
        // id: 1546
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '399',
            'kanji' => '錦糸町',
            'kana' => 'きんしちょう',
            'romaji' => 'Kinshichō',
        ]);
        // id: 1547
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '399',
            'kanji' => '両国',
            'kana' => 'りょうごく',
            'romaji' => 'Ryōgoku',
        ]);
        // id: 1548
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '400',
            'kanji' => '浅草橋',
            'kana' => 'あさくさばし',
            'romaji' => 'Asakusabashi',
        ]);
        // id: 1549
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '400',
            'kanji' => '上野',
            'kana' => 'うえの',
            'romaji' => 'Ueno',
        ]);
        // id: 1550
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '400',
            'kanji' => '鶯谷',
            'kana' => 'うぐいすだに',
            'romaji' => 'Uguisudani',
        ]);
        // id: 1551
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '400',
            'kanji' => '御徒町',
            'kana' => 'おかちまち',
            'romaji' => 'Okachimachi',
        ]);
        // id: 1552
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '401',
            'kanji' => '立川',
            'kana' => 'たちかわ',
            'romaji' => 'Tachikawa',
        ]);
        // id: 1553
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '401',
            'kanji' => '西国立',
            'kana' => 'にしくにたち',
            'romaji' => 'Nishi-Kunitachi',
        ]);
        // id: 1554
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '401',
            'kanji' => '西立川',
            'kana' => 'にしたちかわ',
            'romaji' => 'Nishi-Tachikawa',
        ]);
        // id: 1555
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '402',
            'kanji' => '新日本橋',
            'kana' => 'しんにほんばし',
            'romaji' => 'Shin-Nihombashi',
        ]);
        // id: 1556
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '402',
            'kanji' => '馬喰町',
            'kana' => 'ばくろちょう',
            'romaji' => 'Bakurochō',
        ]);
        // id: 1557
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '402',
            'kanji' => '八丁堀',
            'kana' => 'はっちょうぼり',
            'romaji' => 'Hatchōbori',
        ]);
        // id: 1558
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '403',
            'kanji' => '秋葉原',
            'kana' => 'あきはばら',
            'romaji' => 'Akihabara',
        ]);
        // id: 1559
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '403',
            'kanji' => '飯田橋',
            'kana' => 'いいだばし',
            'romaji' => 'Iidabashi',
        ]);
        // id: 1560
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '403',
            'kanji' => '市ケ谷',
            'kana' => 'いちがや',
            'romaji' => 'Ichigaya',
        ]);
        // id: 1561
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '403',
            'kanji' => '御茶ノ水',
            'kana' => 'おちゃのみず',
            'romaji' => 'Ochanomizu',
        ]);
        // id: 1562
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '403',
            'kanji' => '神田',
            'kana' => 'かんだ',
            'romaji' => 'Kanda',
        ]);
        // id: 1563
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '403',
            'kanji' => '水道橋',
            'kana' => 'すいどうばし',
            'romaji' => 'Suidōbashi',
        ]);
        // id: 1564
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '403',
            'kanji' => '東京',
            'kana' => 'とうきょう',
            'romaji' => 'Tōkyō',
        ]);
        // id: 1565
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '403',
            'kanji' => '有楽町',
            'kana' => 'ゆうらくちょう',
            'romaji' => 'Yūrakuchō',
        ]);
        // id: 1566
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '404',
            'kanji' => '池袋',
            'kana' => 'いけぶくろ',
            'romaji' => 'Ikebukuro',
        ]);
        // id: 1567
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '404',
            'kanji' => '大塚',
            'kana' => 'おおつか',
            'romaji' => 'Ōtsuka',
        ]);
        // id: 1568
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '404',
            'kanji' => '駒込',
            'kana' => 'こまごめ',
            'romaji' => 'Komagome',
        ]);
        // id: 1569
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '404',
            'kanji' => '巣鴨',
            'kana' => 'すがも',
            'romaji' => 'Sugamo',
        ]);
        // id: 1570
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '404',
            'kanji' => '目白',
            'kana' => 'めじろ',
            'romaji' => 'Mejiro',
        ]);
        // id: 1571
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '405',
            'kanji' => '中野',
            'kana' => 'なかの',
            'romaji' => 'Nakano',
        ]);
        // id: 1572
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '405',
            'kanji' => '東中野',
            'kana' => 'ひがしなかの',
            'romaji' => 'Higashi-Nakano',
        ]);
        // id: 1573
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '406',
            'kanji' => '片倉',
            'kana' => 'かたくら',
            'romaji' => 'Katakura',
        ]);
        // id: 1574
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '406',
            'kanji' => '北八王子',
            'kana' => 'きたはちおうじ',
            'romaji' => 'Kita-Hachiōji',
        ]);
        // id: 1575
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '406',
            'kanji' => '小宮',
            'kana' => 'こみや',
            'romaji' => 'Komiya',
        ]);
        // id: 1576
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '406',
            'kanji' => '高尾',
            'kana' => 'たかお',
            'romaji' => 'Takao',
        ]);
        // id: 1577
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '406',
            'kanji' => '西八王子',
            'kana' => 'にしはちおうじ',
            'romaji' => 'Nishi-Hachiōji',
        ]);
        // id: 1578
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '406',
            'kanji' => '八王子',
            'kana' => 'はちおうじ',
            'romaji' => 'Hachiōji',
        ]);
        // id: 1579
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '406',
            'kanji' => '八王子みなみ野',
            'kana' => 'はちおうじみなみの',
            'romaji' => 'Hachiōjiminamino',
        ]);
        // id: 1580
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '407',
            'kanji' => '小作',
            'kana' => 'おざく',
            'romaji' => 'Ozaku',
        ]);
        // id: 1581
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '407',
            'kanji' => '羽村',
            'kana' => 'はむら',
            'romaji' => 'Hamura',
        ]);
        // id: 1582
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '408',
            'kanji' => '新秋津',
            'kana' => 'しんあきつ',
            'romaji' => 'Shin-Akitsu',
        ]);
        // id: 1583
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '409',
            'kanji' => '豊田',
            'kana' => 'とよだ',
            'romaji' => 'Toyoda',
        ]);
        // id: 1584
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '409',
            'kanji' => '日野',
            'kana' => 'ひの',
            'romaji' => 'Hino',
        ]);
        // id: 1585
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '410',
            'kanji' => '北府中',
            'kana' => 'きたふちゅう',
            'romaji' => 'Kita-Fuchū',
        ]);
        // id: 1586
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '410',
            'kanji' => '西府',
            'kana' => 'にしふ',
            'romaji' => 'Nishifu',
        ]);
        // id: 1587
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '410',
            'kanji' => '府中本町',
            'kana' => 'ふちゅうほんまち',
            'romaji' => 'Fuchūhommachi',
        ]);
        // id: 1588
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '410',
            'kanji' => '分倍河原',
            'kana' => 'ぶばいがわら',
            'romaji' => 'Bubaigawara',
        ]);
        // id: 1589
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '411',
            'kanji' => '牛浜',
            'kana' => 'うしはま',
            'romaji' => 'Ushihama',
        ]);
        // id: 1590
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '411',
            'kanji' => '熊川',
            'kana' => 'くまがわ',
            'romaji' => 'Kumagawa',
        ]);
        // id: 1591
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '411',
            'kanji' => '東福生',
            'kana' => 'ひがしふっさ',
            'romaji' => 'Higashi-Fussa',
        ]);
        // id: 1592
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '411',
            'kanji' => '福生',
            'kana' => 'ふっさ',
            'romaji' => 'Fussa',
        ]);
        // id: 1593
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '412',
            'kanji' => '相原',
            'kana' => 'あいはら',
            'romaji' => 'Aihara',
        ]);
        // id: 1594
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '412',
            'kanji' => '成瀬',
            'kana' => 'なるせ',
            'romaji' => 'Naruse',
        ]);
        // id: 1595
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '412',
            'kanji' => '町田',
            'kana' => 'まちだ',
            'romaji' => 'Machida',
        ]);
        // id: 1596
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '413',
            'kanji' => '箱根ケ崎',
            'kana' => 'はこねがさき',
            'romaji' => 'Hakonegasaki',
        ]);
        // id: 1597
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '414',
            'kanji' => '三鷹',
            'kana' => 'みたか',
            'romaji' => 'Mitaka',
        ]);
        // id: 1598
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '415',
            'kanji' => '品川',
            'kana' => 'しながわ',
            'romaji' => 'Shinagawa',
        ]);
        // id: 1599
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '415',
            'kanji' => '新橋',
            'kana' => 'しんばし',
            'romaji' => 'Shimbashi',
        ]);
        // id: 1600
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '415',
            'kanji' => '高輪ゲートウェイ',
            'kana' => 'たかなわげーとうぇい',
            'romaji' => 'Takanawa Gateway',
        ]);
        // id: 1601
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '415',
            'kanji' => '田町',
            'kana' => 'たまち',
            'romaji' => 'Tamachi',
        ]);
        // id: 1602
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '415',
            'kanji' => '浜松町',
            'kana' => 'はままつちょう',
            'romaji' => 'Hamamatsuchō',
        ]);
        // id: 1603
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '416',
            'kanji' => '吉祥寺',
            'kana' => 'きちじょうじ',
            'romaji' => 'Kichijōji',
        ]);
        // id: 1604
        Station::insert([
            'prefecture_id' => '13',
            'city_id' => '416',
            'kanji' => '武蔵境',
            'kana' => 'むさしさかい',
            'romaji' => 'Musashi-Sakai',
        ]);
        // id: 1605
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '417',
            'kanji' => '厚木',
            'kana' => 'あつぎ',
            'romaji' => 'Atsugi',
        ]);
        // id: 1606
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '417',
            'kanji' => '海老名',
            'kana' => 'えびな',
            'romaji' => 'Ebina',
        ]);
        // id: 1607
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '417',
            'kanji' => '門沢橋',
            'kana' => 'かどさわばし',
            'romaji' => 'Kadosawabashi',
        ]);
        // id: 1608
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '417',
            'kanji' => '社家',
            'kana' => 'しゃけ',
            'romaji' => 'Shake',
        ]);
        // id: 1609
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '418',
            'kanji' => '大磯',
            'kana' => 'おおいそ',
            'romaji' => 'Ōiso',
        ]);
        // id: 1610
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '419',
            'kanji' => '上大井',
            'kana' => 'かみおおい',
            'romaji' => 'Kami-Ōi',
        ]);
        // id: 1611
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '419',
            'kanji' => '相模金子',
            'kana' => 'さがみかねこ',
            'romaji' => 'Sagami-Kaneko',
        ]);
        // id: 1612
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '420',
            'kanji' => '小田原',
            'kana' => 'おだわら',
            'romaji' => 'Odawara',
        ]);
        // id: 1613
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '420',
            'kanji' => '鴨宮',
            'kana' => 'かものみや',
            'romaji' => 'Kamonomiya',
        ]);
        // id: 1614
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '420',
            'kanji' => '国府津',
            'kana' => 'こうづ',
            'romaji' => 'Kōzu',
        ]);
        // id: 1615
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '420',
            'kanji' => '下曽我',
            'kana' => 'しもそが',
            'romaji' => 'Shimosoga',
        ]);
        // id: 1616
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '420',
            'kanji' => '根府川',
            'kana' => 'ねぶかわ',
            'romaji' => 'Nebukawa',
        ]);
        // id: 1617
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '420',
            'kanji' => '早川',
            'kana' => 'はやかわ',
            'romaji' => 'Hayakawa',
        ]);
        // id: 1618
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '421',
            'kanji' => '大船',
            'kana' => 'おおふな',
            'romaji' => 'Ōfuna',
        ]);
        // id: 1619
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '421',
            'kanji' => '鎌倉',
            'kana' => 'かまくら',
            'romaji' => 'Kamakura',
        ]);
        // id: 1620
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '421',
            'kanji' => '北鎌倉',
            'kana' => 'きたかまくら',
            'romaji' => 'Kita-Kamakura',
        ]);
        // id: 1621
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '稲田堤',
            'kana' => 'いなだづつみ',
            'romaji' => 'Inadazutsumi',
        ]);
        // id: 1622
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '扇町',
            'kana' => 'おうぎまち',
            'romaji' => 'Ōgimachi',
        ]);
        // id: 1623
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '大川',
            'kana' => 'おおかわ',
            'romaji' => 'Ōkawa',
        ]);
        // id: 1624
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '小田栄',
            'kana' => 'おださかえ',
            'romaji' => 'Odasakae',
        ]);
        // id: 1625
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '鹿島田',
            'kana' => 'かしまだ',
            'romaji' => 'Kashimada',
        ]);
        // id: 1626
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '川崎',
            'kana' => 'かわさき',
            'romaji' => 'Kawasaki',
        ]);
        // id: 1627
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '川崎新町',
            'kana' => 'かわさきしんまち',
            'romaji' => 'Kawasakishimmachi',
        ]);
        // id: 1628
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '久地',
            'kana' => 'くじ',
            'romaji' => 'Kuji',
        ]);
        // id: 1629
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '尻手',
            'kana' => 'しって',
            'romaji' => 'Shitte',
        ]);
        // id: 1630
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '宿河原',
            'kana' => 'しゅくがわら',
            'romaji' => 'Shukugawara',
        ]);
        // id: 1631
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '昭和',
            'kana' => 'しょうわ',
            'romaji' => 'Shōwa',
        ]);
        // id: 1632
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '新川崎',
            'kana' => 'しんかわさき',
            'romaji' => 'Shin-Kawasaki',
        ]);
        // id: 1633
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '津田山',
            'kana' => 'つだやま',
            'romaji' => 'Tsudayama',
        ]);
        // id: 1634
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '中野島',
            'kana' => 'なかのしま',
            'romaji' => 'Nakanoshima',
        ]);
        // id: 1635
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '登戸',
            'kana' => 'のぼりと',
            'romaji' => 'Noborito',
        ]);
        // id: 1636
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '八丁畷',
            'kana' => 'はっちょうなわて',
            'romaji' => 'Hatchōnawate',
        ]);
        // id: 1637
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '浜川崎',
            'kana' => 'はまかわさき',
            'romaji' => 'Hama-kawasaki',
        ]);
        // id: 1638
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '平間',
            'kana' => 'ひらま',
            'romaji' => 'Hirama',
        ]);
        // id: 1639
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '向河原',
            'kana' => 'むかいがわら',
            'romaji' => 'Mukaigawara',
        ]);
        // id: 1640
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '武蔵小杉',
            'kana' => 'むさしこすぎ',
            'romaji' => 'Musashi-Kosugi',
        ]);
        // id: 1641
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '武蔵白石',
            'kana' => 'むさししらいし',
            'romaji' => 'Musashi-Shiraishi',
        ]);
        // id: 1642
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '武蔵新城',
            'kana' => 'むさししんじょう',
            'romaji' => 'Musashi-Shinjō',
        ]);
        // id: 1643
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '武蔵中原',
            'kana' => 'むさしなかはら',
            'romaji' => 'Musashi-Nakahara',
        ]);
        // id: 1644
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '422',
            'kanji' => '武蔵溝ノ口',
            'kana' => 'むさしみぞのくち',
            'romaji' => 'Musashi-Mizonokuchi',
        ]);
        // id: 1645
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '上溝',
            'kana' => 'かみみぞ',
            'romaji' => 'Kamimizo',
        ]);
        // id: 1646
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '古淵',
            'kana' => 'こぶち',
            'romaji' => 'Kobuchi',
        ]);
        // id: 1647
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '相模湖',
            'kana' => 'さがみこ',
            'romaji' => 'Sagamiko',
        ]);
        // id: 1648
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '相模原',
            'kana' => 'さがみはら',
            'romaji' => 'Sagamihara',
        ]);
        // id: 1649
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '下溝',
            'kana' => 'しもみぞ',
            'romaji' => 'Shimomizo',
        ]);
        // id: 1650
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '相武台下',
            'kana' => 'そうぶだいした',
            'romaji' => 'Sōbudaishita',
        ]);
        // id: 1651
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '橋本',
            'kana' => 'はしもと',
            'romaji' => 'Hashimoto',
        ]);
        // id: 1652
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '原当麻',
            'kana' => 'はらたいま',
            'romaji' => 'Harataima',
        ]);
        // id: 1653
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '番田',
            'kana' => 'ばんだ',
            'romaji' => 'Banda',
        ]);
        // id: 1654
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '藤野',
            'kana' => 'ふじの',
            'romaji' => 'Fujino',
        ]);
        // id: 1655
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '淵野辺',
            'kana' => 'ふちのべ',
            'romaji' => 'Fuchinobe',
        ]);
        // id: 1656
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '南橋本',
            'kana' => 'みなみはしもと',
            'romaji' => 'Minami-Hashimoto',
        ]);
        // id: 1657
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '423',
            'kanji' => '矢部',
            'kana' => 'やべ',
            'romaji' => 'Yabe',
        ]);
        // id: 1658
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '424',
            'kanji' => '入谷',
            'kana' => 'いりや',
            'romaji' => 'Iriya',
        ]);
        // id: 1659
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '425',
            'kanji' => '倉見',
            'kana' => 'くらみ',
            'romaji' => 'Kurami',
        ]);
        // id: 1660
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '425',
            'kanji' => '寒川',
            'kana' => 'さむかわ',
            'romaji' => 'Samukawa',
        ]);
        // id: 1661
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '425',
            'kanji' => '宮山',
            'kana' => 'みややま',
            'romaji' => 'Miyayama',
        ]);
        // id: 1662
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '426',
            'kanji' => '逗子',
            'kana' => 'ずし',
            'romaji' => 'Zushi',
        ]);
        // id: 1663
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '426',
            'kanji' => '東逗子',
            'kana' => 'ひがしずし',
            'romaji' => 'Higashi-Zushi',
        ]);
        // id: 1664
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '427',
            'kanji' => '香川',
            'kana' => 'かがわ',
            'romaji' => 'Kagawa',
        ]);
        // id: 1665
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '427',
            'kanji' => '北茅ケ崎',
            'kana' => 'きたちがさき',
            'romaji' => 'Kita-Chigasaki',
        ]);
        // id: 1666
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '427',
            'kanji' => '茅ケ崎',
            'kana' => 'ちがさき',
            'romaji' => 'Chigasaki',
        ]);
        // id: 1667
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '428',
            'kanji' => '二宮',
            'kana' => 'にのみや',
            'romaji' => 'Ninomiya',
        ]);
        // id: 1668
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '429',
            'kanji' => '平塚',
            'kana' => 'ひらつか',
            'romaji' => 'Hiratsuka',
        ]);
        // id: 1669
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '430',
            'kanji' => '辻堂',
            'kana' => 'つじどう',
            'romaji' => 'Tsujidō',
        ]);
        // id: 1670
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '430',
            'kanji' => '藤沢',
            'kana' => 'ふじさわ',
            'romaji' => 'Fujisawa',
        ]);
        // id: 1671
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '431',
            'kanji' => '松田',
            'kana' => 'まつだ',
            'romaji' => 'Matsuda',
        ]);
        // id: 1672
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '432',
            'kanji' => '真鶴',
            'kana' => 'まなづる',
            'romaji' => 'Manazuru',
        ]);
        // id: 1673
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '433',
            'kanji' => '東山北',
            'kana' => 'ひがしやまきた',
            'romaji' => 'Higashi-Yamakita',
        ]);
        // id: 1674
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '433',
            'kanji' => '谷峨',
            'kana' => 'やが',
            'romaji' => 'Yaga',
        ]);
        // id: 1675
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '433',
            'kanji' => '山北',
            'kana' => 'やまきた',
            'romaji' => 'Yamakita',
        ]);
        // id: 1676
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '434',
            'kanji' => '湯河原',
            'kana' => 'ゆがわら',
            'romaji' => 'Yugawara',
        ]);
        // id: 1677
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '435',
            'kanji' => '衣笠',
            'kana' => 'きぬがさ',
            'romaji' => 'Kinugasa',
        ]);
        // id: 1678
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '435',
            'kanji' => '久里浜',
            'kana' => 'くりはま',
            'romaji' => 'Kurihama',
        ]);
        // id: 1679
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '435',
            'kanji' => '田浦',
            'kana' => 'たうら',
            'romaji' => 'Taura',
        ]);
        // id: 1680
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '435',
            'kanji' => '横須賀',
            'kana' => 'よこすか',
            'romaji' => 'Yokosuka',
        ]);
        // id: 1681
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '浅野',
            'kana' => 'あさの',
            'romaji' => 'Asano',
        ]);
        // id: 1682
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '安善',
            'kana' => 'あんぜん',
            'romaji' => 'Anzen',
        ]);
        // id: 1683
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '石川町',
            'kana' => 'いしかわちょう',
            'romaji' => 'Ishikawachō',
        ]);
        // id: 1684
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '磯子',
            'kana' => 'いそご',
            'romaji' => 'Isogo',
        ]);
        // id: 1685
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '海芝浦',
            'kana' => 'うみしばうら',
            'romaji' => 'Umishibaura',
        ]);
        // id: 1686
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '大口',
            'kana' => 'おおぐち',
            'romaji' => 'Ōguchi',
        ]);
        // id: 1687
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '鴨居',
            'kana' => 'かもい',
            'romaji' => 'Kamoi',
        ]);
        // id: 1688
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '関内',
            'kana' => 'かんない',
            'romaji' => 'Kannai',
        ]);
        // id: 1689
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '菊名',
            'kana' => 'きくな',
            'romaji' => 'Kikuna',
        ]);
        // id: 1690
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '港南台',
            'kana' => 'こうなんだい',
            'romaji' => 'Kōnandai',
        ]);
        // id: 1691
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '国道',
            'kana' => 'こくどう',
            'romaji' => 'Kokudō',
        ]);
        // id: 1692
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '小机',
            'kana' => 'こづくえ',
            'romaji' => 'Kozukue',
        ]);
        // id: 1693
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '桜木町',
            'kana' => 'さくらぎちょう',
            'romaji' => 'Sakuragichō',
        ]);
        // id: 1694
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '新子安',
            'kana' => 'しんこやす',
            'romaji' => 'Shin-Koyasu',
        ]);
        // id: 1695
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '新芝浦',
            'kana' => 'しんしばうら',
            'romaji' => 'Shin-Shibaura',
        ]);
        // id: 1696
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '新杉田',
            'kana' => 'しんすぎた',
            'romaji' => 'Shin-Sugita',
        ]);
        // id: 1697
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '新横浜',
            'kana' => 'しんよこはま',
            'romaji' => 'Shin-Yokohama',
        ]);
        // id: 1698
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '鶴見',
            'kana' => 'つるみ',
            'romaji' => 'Tsurumi',
        ]);
        // id: 1699
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '鶴見小野',
            'kana' => 'つるみおの',
            'romaji' => 'Tsurumiono',
        ]);
        // id: 1700
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '十日市場',
            'kana' => 'とおかいちば',
            'romaji' => 'Tōkaichiba',
        ]);
        // id: 1701
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '戸塚',
            'kana' => 'とつか',
            'romaji' => 'Totsuka',
        ]);
        // id: 1702
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '長津田',
            'kana' => 'ながつた',
            'romaji' => 'Nagatsuta',
        ]);
        // id: 1703
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '中山',
            'kana' => 'なかやま',
            'romaji' => 'Nakayama',
        ]);
        // id: 1704
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '根岸',
            'kana' => 'ねぎし',
            'romaji' => 'Negishi',
        ]);
        // id: 1705
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '羽沢横浜国大',
            'kana' => 'はざわよこはまこくだい',
            'romaji' => 'Hazawa yokohama-kokudai',
        ]);
        // id: 1706
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '東神奈川',
            'kana' => 'ひがしかながわ',
            'romaji' => 'Higashi-Kanagawa',
        ]);
        // id: 1707
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '東戸塚',
            'kana' => 'ひがしとつか',
            'romaji' => 'Higashi-Totsuka',
        ]);
        // id: 1708
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '弁天橋',
            'kana' => 'べんてんばし',
            'romaji' => 'Bentembashi',
        ]);
        // id: 1709
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '保土ケ谷',
            'kana' => 'ほどがや',
            'romaji' => 'Hodogaya',
        ]);
        // id: 1710
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '本郷台',
            'kana' => 'ほんごうだい',
            'romaji' => 'Hongōdai',
        ]);
        // id: 1711
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '矢向',
            'kana' => 'やこう',
            'romaji' => 'Yakō',
        ]);
        // id: 1712
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '山手',
            'kana' => 'やまて',
            'romaji' => 'Yamate',
        ]);
        // id: 1713
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '洋光台',
            'kana' => 'ようこうだい',
            'romaji' => 'Yōkōdai',
        ]);
        // id: 1714
        Station::insert([
            'prefecture_id' => '14',
            'city_id' => '436',
            'kanji' => '横浜',
            'kana' => 'よこはま',
            'romaji' => 'Yokohama',
        ]);
        // id: 1715
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '437',
            'kanji' => '神山',
            'kana' => 'かみやま',
            'romaji' => 'Kamiyama',
        ]);
        // id: 1716
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '437',
            'kanji' => '京ケ瀬',
            'kana' => 'きょうがせ',
            'romaji' => 'Kyōgase',
        ]);
        // id: 1717
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '437',
            'kanji' => '水原',
            'kana' => 'すいばら',
            'romaji' => 'Suibara',
        ]);
        // id: 1718
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '438',
            'kanji' => '五十島',
            'kana' => 'いがしま',
            'romaji' => 'Igashima',
        ]);
        // id: 1719
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '438',
            'kanji' => '鹿瀬',
            'kana' => 'かのせ',
            'romaji' => 'Kanose',
        ]);
        // id: 1720
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '438',
            'kanji' => '津川',
            'kana' => 'つがわ',
            'romaji' => 'Tsugawa',
        ]);
        // id: 1721
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '438',
            'kanji' => '豊実',
            'kana' => 'とよみ',
            'romaji' => 'Toyomi',
        ]);
        // id: 1722
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '438',
            'kanji' => '東下条',
            'kana' => 'ひがしげじょう',
            'romaji' => 'Higashi-Gejō',
        ]);
        // id: 1723
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '438',
            'kanji' => '日出谷',
            'kana' => 'ひでや',
            'romaji' => 'Hideya',
        ]);
        // id: 1724
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '438',
            'kanji' => '三川',
            'kana' => 'みかわ',
            'romaji' => 'Mikawa',
        ]);
        // id: 1725
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '439',
            'kanji' => '出雲崎',
            'kana' => 'いずもざき',
            'romaji' => 'Izumozaki',
        ]);
        // id: 1726
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '439',
            'kanji' => '小木ノ城',
            'kana' => 'おぎのじょう',
            'romaji' => 'Oginojō',
        ]);
        // id: 1727
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '440',
            'kanji' => '糸魚川',
            'kana' => 'いといがわ',
            'romaji' => 'Itoigawa',
        ]);
        // id: 1728
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '440',
            'kanji' => '頸城大野',
            'kana' => 'くびきおおの',
            'romaji' => 'Kubiki-Ōno',
        ]);
        // id: 1729
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '440',
            'kanji' => '小滝',
            'kana' => 'こたき',
            'romaji' => 'Kotaki',
        ]);
        // id: 1730
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '440',
            'kanji' => '根知',
            'kana' => 'ねち',
            'romaji' => 'Nechi',
        ]);
        // id: 1731
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '440',
            'kanji' => '姫川',
            'kana' => 'ひめかわ',
            'romaji' => 'Himekawa',
        ]);
        // id: 1732
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '440',
            'kanji' => '平岩',
            'kana' => 'ひらいわ',
            'romaji' => 'Hiraiwa',
        ]);
        // id: 1733
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '入広瀬',
            'kana' => 'いりひろせ',
            'romaji' => 'Irihirose',
        ]);
        // id: 1734
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '魚沼田中',
            'kana' => 'うおぬまたなか',
            'romaji' => 'Uonuma-Tanaka',
        ]);
        // id: 1735
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '越後須原',
            'kana' => 'えちごすはら',
            'romaji' => 'Echigo-Suhara',
        ]);
        // id: 1736
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '越後広瀬',
            'kana' => 'えちごひろせ',
            'romaji' => 'Echigo-Hirose',
        ]);
        // id: 1737
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '越後堀之内',
            'kana' => 'えちごほりのうち',
            'romaji' => 'Echigo-Horinouchi',
        ]);
        // id: 1738
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '大白川',
            'kana' => 'おおしらかわ',
            'romaji' => 'Ōshirakawa',
        ]);
        // id: 1739
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '上条',
            'kana' => 'かみじょう',
            'romaji' => 'Kamijō',
        ]);
        // id: 1740
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '北堀之内',
            'kana' => 'きたほりのうち',
            'romaji' => 'Kita-Horinouchi',
        ]);
        // id: 1741
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '小出',
            'kana' => 'こいで',
            'romaji' => 'Koide',
        ]);
        // id: 1742
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '441',
            'kanji' => '藪神',
            'kana' => 'やぶかみ',
            'romaji' => 'Yabukami',
        ]);
        // id: 1743
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '442',
            'kanji' => '内ケ巻',
            'kana' => 'うちがまき',
            'romaji' => 'Uchigamaki',
        ]);
        // id: 1744
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '442',
            'kanji' => '越後岩沢',
            'kana' => 'えちごいわさわ',
            'romaji' => 'Echigo-Iwasawa',
        ]);
        // id: 1745
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '442',
            'kanji' => '小千谷',
            'kana' => 'おぢや',
            'romaji' => 'Ojiya',
        ]);
        // id: 1746
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '石地',
            'kana' => 'いしじ',
            'romaji' => 'Ishiji',
        ]);
        // id: 1747
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '茨目',
            'kana' => 'いばらめ',
            'romaji' => 'Ibarame',
        ]);
        // id: 1748
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '越後広田',
            'kana' => 'えちごひろた',
            'romaji' => 'Echigo-Hirota',
        ]);
        // id: 1749
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '青海川',
            'kana' => 'おうみがわ',
            'romaji' => 'Ōmigawa',
        ]);
        // id: 1750
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '笠島',
            'kana' => 'かさしま',
            'romaji' => 'Kasashima',
        ]);
        // id: 1751
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '柏崎',
            'kana' => 'かしわざき',
            'romaji' => 'Kashiwazaki',
        ]);
        // id: 1752
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '北条',
            'kana' => 'きたじょう',
            'romaji' => 'Kitajō',
        ]);
        // id: 1753
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '鯨波',
            'kana' => 'くじらなみ',
            'romaji' => 'Kujiranami',
        ]);
        // id: 1754
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '長鳥',
            'kana' => 'ながとり',
            'romaji' => 'Nagatori',
        ]);
        // id: 1755
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '西中通',
            'kana' => 'にしなかどおり',
            'romaji' => 'Nishi-Nakadōri',
        ]);
        // id: 1756
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '西山',
            'kana' => 'にしやま',
            'romaji' => 'Nishiyama',
        ]);
        // id: 1757
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '東柏崎',
            'kana' => 'ひがしかしわざき',
            'romaji' => 'Higashi-Kashiwazaki',
        ]);
        // id: 1758
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '安田',
            'kana' => 'やすだ',
            'romaji' => 'Yasuda',
        ]);
        // id: 1759
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '米山',
            'kana' => 'よねやま',
            'romaji' => 'Yoneyama',
        ]);
        // id: 1760
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '443',
            'kanji' => '礼拝',
            'kana' => 'らいはい',
            'romaji' => 'Raihai',
        ]);
        // id: 1761
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '444',
            'kanji' => '加茂',
            'kana' => 'かも',
            'romaji' => 'Kamo',
        ]);
        // id: 1762
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '445',
            'kanji' => '荒浜',
            'kana' => 'あらはま',
            'romaji' => 'Arahama',
        ]);
        // id: 1763
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '445',
            'kanji' => '刈羽',
            'kana' => 'かりわ',
            'romaji' => 'Kariwa',
        ]);
        // id: 1764
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '446',
            'kanji' => '北五泉',
            'kana' => 'きたごせん',
            'romaji' => 'Kita-Gosen',
        ]);
        // id: 1765
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '446',
            'kanji' => '五泉',
            'kana' => 'ごせん',
            'romaji' => 'Gosen',
        ]);
        // id: 1766
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '446',
            'kanji' => '咲花',
            'kana' => 'さきはな',
            'romaji' => 'Sakihana',
        ]);
        // id: 1767
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '446',
            'kanji' => '猿和田',
            'kana' => 'さるわだ',
            'romaji' => 'Saruwada',
        ]);
        // id: 1768
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '446',
            'kanji' => '馬下',
            'kana' => 'まおろし',
            'romaji' => 'Maoroshi',
        ]);
        // id: 1769
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '447',
            'kanji' => '帯織',
            'kana' => 'おびおり',
            'romaji' => 'Obiori',
        ]);
        // id: 1770
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '447',
            'kanji' => '北三条',
            'kana' => 'きたさんじょう',
            'romaji' => 'Kita-Sanjō',
        ]);
        // id: 1771
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '447',
            'kanji' => '三条',
            'kana' => 'さんじょう',
            'romaji' => 'Sanjō',
        ]);
        // id: 1772
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '447',
            'kanji' => '燕三条',
            'kana' => 'つばめさんじょう',
            'romaji' => 'Tsubamesanjō',
        ]);
        // id: 1773
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '447',
            'kanji' => '東光寺',
            'kana' => 'とうこうじ',
            'romaji' => 'Tōkōji',
        ]);
        // id: 1774
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '447',
            'kanji' => '東三条',
            'kana' => 'ひがしさんじょう',
            'romaji' => 'Higashi-Sanjō',
        ]);
        // id: 1775
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '447',
            'kanji' => '保内',
            'kana' => 'ほない',
            'romaji' => 'Honai',
        ]);
        // id: 1776
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '448',
            'kanji' => '加治',
            'kana' => 'かじ',
            'romaji' => 'Kaji',
        ]);
        // id: 1777
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '448',
            'kanji' => '金塚',
            'kana' => 'かなづか',
            'romaji' => 'Kanazuka',
        ]);
        // id: 1778
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '448',
            'kanji' => '佐々木',
            'kana' => 'ささき',
            'romaji' => 'Sasaki',
        ]);
        // id: 1779
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '448',
            'kanji' => '新発田',
            'kana' => 'しばた',
            'romaji' => 'Shibata',
        ]);
        // id: 1780
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '448',
            'kanji' => '月岡',
            'kana' => 'つきおか',
            'romaji' => 'Tsukioka',
        ]);
        // id: 1781
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '448',
            'kanji' => '中浦',
            'kana' => 'なかうら',
            'romaji' => 'Nakaura',
        ]);
        // id: 1782
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '448',
            'kanji' => '西新発田',
            'kana' => 'にししばた',
            'romaji' => 'Nishi-Shibata',
        ]);
        // id: 1783
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '449',
            'kanji' => '柿崎',
            'kana' => 'かきざき',
            'romaji' => 'Kakizaki',
        ]);
        // id: 1784
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '449',
            'kanji' => '潟町',
            'kana' => 'かたまち',
            'romaji' => 'Katamachi',
        ]);
        // id: 1785
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '449',
            'kanji' => '黒井',
            'kana' => 'くろい',
            'romaji' => 'Kuroi',
        ]);
        // id: 1786
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '449',
            'kanji' => '犀潟',
            'kana' => 'さいがた',
            'romaji' => 'Saigata',
        ]);
        // id: 1787
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '449',
            'kanji' => '上越妙高',
            'kana' => 'じょうえつみょうこう',
            'romaji' => 'Jōetsumyōkō',
        ]);
        // id: 1788
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '449',
            'kanji' => '上下浜',
            'kana' => 'じょうげはま',
            'romaji' => 'Jōgehama',
        ]);
        // id: 1789
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '449',
            'kanji' => '土底浜',
            'kana' => 'どそこはま',
            'romaji' => 'Dosokohama',
        ]);
        // id: 1790
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '449',
            'kanji' => '直江津',
            'kana' => 'なおえつ',
            'romaji' => 'Naoetsu',
        ]);
        // id: 1791
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '450',
            'kanji' => '越後大島',
            'kana' => 'えちごおおしま',
            'romaji' => 'Echigo-Ōshima',
        ]);
        // id: 1792
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '450',
            'kanji' => '越後片貝',
            'kana' => 'えちごかたかい',
            'romaji' => 'Echigo-Katakai',
        ]);
        // id: 1793
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '450',
            'kanji' => '越後金丸',
            'kana' => 'えちごかなまる',
            'romaji' => 'Echigo-Kanamaru',
        ]);
        // id: 1794
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '450',
            'kanji' => '越後下関',
            'kana' => 'えちごしもせき',
            'romaji' => 'Echigo-Shimoseki',
        ]);
        // id: 1795
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '451',
            'kanji' => '中条',
            'kana' => 'なかじょう',
            'romaji' => 'Nakajō',
        ]);
        // id: 1796
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '451',
            'kanji' => '平木田',
            'kana' => 'ひらきだ',
            'romaji' => 'Hirakida',
        ]);
        // id: 1797
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '452',
            'kanji' => '田上',
            'kana' => 'たがみ',
            'romaji' => 'Tagami',
        ]);
        // id: 1798
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '452',
            'kanji' => '羽生田',
            'kana' => 'はにゅうだ',
            'romaji' => 'Hanyūda',
        ]);
        // id: 1799
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '453',
            'kanji' => '足滝',
            'kana' => 'あしだき',
            'romaji' => 'Ashidaki',
        ]);
        // id: 1800
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '453',
            'kanji' => '越後鹿渡',
            'kana' => 'えちごしかわたり',
            'romaji' => 'Echigo-Shikawatari',
        ]);
        // id: 1801
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '453',
            'kanji' => '越後田中',
            'kana' => 'えちごたなか',
            'romaji' => 'Echigo-Tanaka',
        ]);
        // id: 1802
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '453',
            'kanji' => '津南',
            'kana' => 'つなん',
            'romaji' => 'Tsunan',
        ]);
        // id: 1803
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '454',
            'kanji' => '粟生津',
            'kana' => 'あおうづ',
            'romaji' => 'Aōzu',
        ]);
        // id: 1804
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '454',
            'kanji' => '北吉田',
            'kana' => 'きたよしだ',
            'romaji' => 'Kita-Yoshida',
        ]);
        // id: 1805
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '454',
            'kanji' => '燕',
            'kana' => 'つばめ',
            'romaji' => 'Tsubame',
        ]);
        // id: 1806
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '454',
            'kanji' => '西燕',
            'kana' => 'にしつばめ',
            'romaji' => 'Nishi-Tsubame',
        ]);
        // id: 1807
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '454',
            'kanji' => '分水',
            'kana' => 'ぶんすい',
            'romaji' => 'Bunsui',
        ]);
        // id: 1808
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '454',
            'kanji' => '南吉田',
            'kana' => 'みなみよしだ',
            'romaji' => 'Minami-Yoshida',
        ]);
        // id: 1809
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '454',
            'kanji' => '吉田',
            'kana' => 'よしだ',
            'romaji' => 'Yoshida',
        ]);
        // id: 1810
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '455',
            'kanji' => '魚沼中条',
            'kana' => 'うおぬまなかじょう',
            'romaji' => 'Uonuma-Nakajō',
        ]);
        // id: 1811
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '455',
            'kanji' => '越後田沢',
            'kana' => 'えちごたざわ',
            'romaji' => 'Echigo-Tazawa',
        ]);
        // id: 1812
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '455',
            'kanji' => '越後水沢',
            'kana' => 'えちごみずさわ',
            'romaji' => 'Echigo-Mizusawa',
        ]);
        // id: 1813
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '455',
            'kanji' => '下条',
            'kana' => 'げじょう',
            'romaji' => 'Gejō',
        ]);
        // id: 1814
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '455',
            'kanji' => '土市',
            'kana' => 'どいち',
            'romaji' => 'Doichi',
        ]);
        // id: 1815
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '455',
            'kanji' => '十日町',
            'kana' => 'とおかまち',
            'romaji' => 'Tōkamachi',
        ]);
        // id: 1816
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '越後岩塚',
            'kana' => 'えちごいわつか',
            'romaji' => 'Echigo-Iwatsuka',
        ]);
        // id: 1817
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '越後川口',
            'kana' => 'えちごかわぐち',
            'romaji' => 'Echigo-Kawaguchi',
        ]);
        // id: 1818
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '越後滝谷',
            'kana' => 'えちごたきや',
            'romaji' => 'Echigo-Takiya',
        ]);
        // id: 1819
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '押切',
            'kana' => 'おしきり',
            'romaji' => 'Oshikiri',
        ]);
        // id: 1820
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '小島谷',
            'kana' => 'おじまや',
            'romaji' => 'Ojimaya',
        ]);
        // id: 1821
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '北長岡',
            'kana' => 'きたながおか',
            'romaji' => 'Kita-Nagaoka',
        ]);
        // id: 1822
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '桐原',
            'kana' => 'きりはら',
            'romaji' => 'Kirihara',
        ]);
        // id: 1823
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '塚山',
            'kana' => 'つかやま',
            'romaji' => 'Tsukayama',
        ]);
        // id: 1824
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '寺泊',
            'kana' => 'てらどまり',
            'romaji' => 'Teradomari',
        ]);
        // id: 1825
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '長岡',
            'kana' => 'ながおか',
            'romaji' => 'Nagaoka',
        ]);
        // id: 1826
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '前川',
            'kana' => 'まえかわ',
            'romaji' => 'Maekawa',
        ]);
        // id: 1827
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '宮内',
            'kana' => 'みやうち',
            'romaji' => 'Miyauchi',
        ]);
        // id: 1828
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '妙法寺',
            'kana' => 'みょうほうじ',
            'romaji' => 'Myōhōji',
        ]);
        // id: 1829
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '456',
            'kanji' => '来迎寺',
            'kana' => 'らいこうじ',
            'romaji' => 'Raikōji',
        ]);
        // id: 1830
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '青山',
            'kana' => 'あおやま',
            'romaji' => 'Aoyama',
        ]);
        // id: 1831
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '岩室',
            'kana' => 'いわむろ',
            'romaji' => 'Iwamuro',
        ]);
        // id: 1832
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '内野',
            'kana' => 'うちの',
            'romaji' => 'Uchino',
        ]);
        // id: 1833
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '内野西が丘',
            'kana' => 'うちのにしがおか',
            'romaji' => 'Uchinonishigaoka',
        ]);
        // id: 1834
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '越後赤塚',
            'kana' => 'えちごあかつか',
            'romaji' => 'Echigo-Akatsuka',
        ]);
        // id: 1835
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '越後石山',
            'kana' => 'えちごいしやま',
            'romaji' => 'Echigo-Ishiyama',
        ]);
        // id: 1836
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '越後曽根',
            'kana' => 'えちごそね',
            'romaji' => 'Echigo-Sone',
        ]);
        // id: 1837
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '大形',
            'kana' => 'おおがた',
            'romaji' => 'Ōgata',
        ]);
        // id: 1838
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '荻川',
            'kana' => 'おぎかわ',
            'romaji' => 'Ogikawa',
        ]);
        // id: 1839
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '亀田',
            'kana' => 'かめだ',
            'romaji' => 'Kameda',
        ]);
        // id: 1840
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '黒山',
            'kana' => 'くろやま',
            'romaji' => 'Kuroyama',
        ]);
        // id: 1841
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '小針',
            'kana' => 'こばり',
            'romaji' => 'Kobari',
        ]);
        // id: 1842
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => 'さつき野',
            'kana' => 'さつきの',
            'romaji' => 'Satsukino',
        ]);
        // id: 1843
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '新関',
            'kana' => 'しんせき',
            'romaji' => 'Shinseki',
        ]);
        // id: 1844
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '関屋',
            'kana' => 'せきや',
            'romaji' => 'Sekiya',
        ]);
        // id: 1845
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '寺尾',
            'kana' => 'てらお',
            'romaji' => 'Terao',
        ]);
        // id: 1846
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '豊栄',
            'kana' => 'とよさか',
            'romaji' => 'Toyosaka',
        ]);
        // id: 1847
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '新潟',
            'kana' => 'にいがた',
            'romaji' => 'Niigata',
        ]);
        // id: 1848
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '新潟大学前',
            'kana' => 'にいがただいがくまえ',
            'romaji' => 'Niigatadaigakumae',
        ]);
        // id: 1849
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '新崎',
            'kana' => 'にいざき',
            'romaji' => 'Niizaki',
        ]);
        // id: 1850
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '新津',
            'kana' => 'にいつ',
            'romaji' => 'Niitsu',
        ]);
        // id: 1851
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '白山',
            'kana' => 'はくさん',
            'romaji' => 'Hakusan',
        ]);
        // id: 1852
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '早通',
            'kana' => 'はやどおり',
            'romaji' => 'Hayadōri',
        ]);
        // id: 1853
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '東新潟',
            'kana' => 'ひがしにいがた',
            'romaji' => 'Higashi-Niigata',
        ]);
        // id: 1854
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '東新津',
            'kana' => 'ひがしにいつ',
            'romaji' => 'Higashi-Niitsu',
        ]);
        // id: 1855
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '古津',
            'kana' => 'ふるつ',
            'romaji' => 'Furutsu',
        ]);
        // id: 1856
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '巻',
            'kana' => 'まき',
            'romaji' => 'Maki',
        ]);
        // id: 1857
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '457',
            'kanji' => '矢代田',
            'kana' => 'やしろだ',
            'romaji' => 'Yashiroda',
        ]);
        // id: 1858
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '458',
            'kanji' => '見附',
            'kana' => 'みつけ',
            'romaji' => 'Mitsuke',
        ]);
        // id: 1859
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '459',
            'kanji' => '石打',
            'kana' => 'いしうち',
            'romaji' => 'Ishiuchi',
        ]);
        // id: 1860
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '459',
            'kanji' => '五日町',
            'kana' => 'いつかまち',
            'romaji' => 'Itsukamachi',
        ]);
        // id: 1861
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '459',
            'kanji' => '浦佐',
            'kana' => 'うらさ',
            'romaji' => 'Urasa',
        ]);
        // id: 1862
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '459',
            'kanji' => '大沢',
            'kana' => 'おおさわ',
            'romaji' => 'Ōsawa',
        ]);
        // id: 1863
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '459',
            'kanji' => '塩沢',
            'kana' => 'しおざわ',
            'romaji' => 'Shiozawa',
        ]);
        // id: 1864
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '459',
            'kanji' => '上越国際スキー場前',
            'kana' => 'じょうえつこくさいスキーじょうまえ',
            'romaji' => 'Jōetsu International Skiing Ground',
        ]);
        // id: 1865
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '459',
            'kanji' => '六日町',
            'kana' => 'むいかまち',
            'romaji' => 'Muikamachi',
        ]);
        // id: 1866
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '459',
            'kanji' => '八色',
            'kana' => 'やいろ',
            'romaji' => 'Yairo',
        ]);
        // id: 1867
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '今川',
            'kana' => 'いまがわ',
            'romaji' => 'Imagawa',
        ]);
        // id: 1868
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '岩船町',
            'kana' => 'いわふねまち',
            'romaji' => 'Iwafunemachi',
        ]);
        // id: 1869
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '越後寒川',
            'kana' => 'えちごかんがわ',
            'romaji' => 'Echigo-Kangawa',
        ]);
        // id: 1870
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '越後早川',
            'kana' => 'えちごはやかわ',
            'romaji' => 'Echigo-Hayakawa',
        ]);
        // id: 1871
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '勝木',
            'kana' => 'がつぎ',
            'romaji' => 'Gatsugi',
        ]);
        // id: 1872
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '桑川',
            'kana' => 'くわがわ',
            'romaji' => 'Kuwagawa',
        ]);
        // id: 1873
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '坂町',
            'kana' => 'さかまち',
            'romaji' => 'Sakamachi',
        ]);
        // id: 1874
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '平林',
            'kana' => 'ひらばやし',
            'romaji' => 'Hirabayashi',
        ]);
        // id: 1875
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '府屋',
            'kana' => 'ふや',
            'romaji' => 'Fuya',
        ]);
        // id: 1876
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '間島',
            'kana' => 'まじま',
            'romaji' => 'Majima',
        ]);
        // id: 1877
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '460',
            'kanji' => '村上',
            'kana' => 'むらかみ',
            'romaji' => 'Murakami',
        ]);
        // id: 1878
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '461',
            'kanji' => '矢作',
            'kana' => 'やはぎ',
            'romaji' => 'Yahagi',
        ]);
        // id: 1879
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '461',
            'kanji' => '弥彦',
            'kana' => 'やひこ',
            'romaji' => 'Yahiko',
        ]);
        // id: 1880
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '462',
            'kanji' => '岩原スキー場前',
            'kana' => 'いわっぱらすきーじょうまえ',
            'romaji' => 'Iwappara Skiing Ground',
        ]);
        // id: 1881
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '462',
            'kanji' => '越後中里',
            'kana' => 'えちごなかざと',
            'romaji' => 'Echigo-Nakazato',
        ]);
        // id: 1882
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '462',
            'kanji' => '越後湯沢',
            'kana' => 'えちごゆざわ',
            'romaji' => 'Echigo-Yuzawa',
        ]);
        // id: 1883
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '462',
            'kanji' => 'ガーラ湯沢',
            'kana' => 'がーらゆざわ',
            'romaji' => 'Gala Yuzawa',
        ]);
        // id: 1884
        Station::insert([
            'prefecture_id' => '15',
            'city_id' => '462',
            'kanji' => '土樽',
            'kana' => 'つちたる',
            'romaji' => 'Tsuchitaru',
        ]);
        // id: 1885
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '463',
            'kanji' => '黒部宇奈月温泉',
            'kana' => 'くろべうなづきおんせん',
            'romaji' => 'Kurobe-Unazukionsen',
        ]);
        // id: 1886
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '雨晴',
            'kana' => 'あまはらし',
            'romaji' => 'Amaharashi',
        ]);
        // id: 1887
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '越中国分',
            'kana' => 'えっちゅうこくぶ',
            'romaji' => 'Etchū-Kokubu',
        ]);
        // id: 1888
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '越中中川',
            'kana' => 'えっちゅうなかがわ',
            'romaji' => 'Etchū-Nakagawa',
        ]);
        // id: 1889
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '新高岡',
            'kana' => 'しんたかおか',
            'romaji' => 'Shin-Takaoka',
        ]);
        // id: 1890
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '高岡',
            'kana' => 'たかおか',
            'romaji' => 'Takaoka',
        ]);
        // id: 1891
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '戸出',
            'kana' => 'といで',
            'romaji' => 'Toide',
        ]);
        // id: 1892
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '能町',
            'kana' => 'のうまち',
            'romaji' => 'Nōmachi',
        ]);
        // id: 1893
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '林',
            'kana' => 'はやし',
            'romaji' => 'Hayashi',
        ]);
        // id: 1894
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '伏木',
            'kana' => 'ふしき',
            'romaji' => 'Fushiki',
        ]);
        // id: 1895
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '464',
            'kanji' => '二塚',
            'kana' => 'ふたつか',
            'romaji' => 'Futatsuka',
        ]);
        // id: 1896
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '465',
            'kanji' => '油田',
            'kana' => 'あぶらでん',
            'romaji' => 'Aburaden',
        ]);
        // id: 1897
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '465',
            'kanji' => '砺波',
            'kana' => 'となみ',
            'romaji' => 'Tonami',
        ]);
        // id: 1898
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '465',
            'kanji' => '東野尻',
            'kana' => 'ひがしのじり',
            'romaji' => 'Higashi-Nojiri',
        ]);
        // id: 1899
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '猪谷',
            'kana' => 'いのたに',
            'romaji' => 'Inotani',
        ]);
        // id: 1900
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '越中八尾',
            'kana' => 'えっちゅうやつお',
            'romaji' => 'Etchū-Yatsuo',
        ]);
        // id: 1901
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '笹津',
            'kana' => 'ささづ',
            'romaji' => 'Sasazu',
        ]);
        // id: 1902
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '千里',
            'kana' => 'ちさと',
            'romaji' => 'Chisato',
        ]);
        // id: 1903
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '富山',
            'kana' => 'とやま',
            'romaji' => 'Toyama',
        ]);
        // id: 1904
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '西富山',
            'kana' => 'にしとやま',
            'romaji' => 'Nishi-Toyama',
        ]);
        // id: 1905
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '楡原',
            'kana' => 'にれはら',
            'romaji' => 'Nirehara',
        ]);
        // id: 1906
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '速星',
            'kana' => 'はやほし',
            'romaji' => 'Hayahoshi',
        ]);
        // id: 1907
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '東八尾',
            'kana' => 'ひがしやつお',
            'romaji' => 'Higashi-Yatsuo',
        ]);
        // id: 1908
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '466',
            'kanji' => '婦中鵜坂',
            'kana' => 'ふちゅううさか',
            'romaji' => 'Fuchū-Usaka',
        ]);
        // id: 1909
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '467',
            'kanji' => '越中山田',
            'kana' => 'えっちゅうやまだ',
            'romaji' => 'Etchū-Yamada',
        ]);
        // id: 1910
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '467',
            'kanji' => '城端',
            'kana' => 'じょうはな',
            'romaji' => 'Jōhana',
        ]);
        // id: 1911
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '467',
            'kanji' => '高儀',
            'kana' => 'たかぎ',
            'romaji' => 'Takagi',
        ]);
        // id: 1912
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '467',
            'kanji' => '東石黒',
            'kana' => 'ひがしいしぐろ',
            'romaji' => 'Higashi-Ishiguro',
        ]);
        // id: 1913
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '467',
            'kanji' => '福野',
            'kana' => 'ふくの',
            'romaji' => 'Fukuno',
        ]);
        // id: 1914
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '467',
            'kanji' => '福光',
            'kana' => 'ふくみつ',
            'romaji' => 'Fukumitsu',
        ]);
        // id: 1915
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '468',
            'kanji' => '島尾',
            'kana' => 'しまお',
            'romaji' => 'Shimao',
        ]);
        // id: 1916
        Station::insert([
            'prefecture_id' => '16',
            'city_id' => '468',
            'kanji' => '氷見',
            'kana' => 'ひみ',
            'romaji' => 'Himi',
        ]);
        // id: 1917
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '469',
            'kanji' => '動橋',
            'kana' => 'いぶりはし',
            'romaji' => 'Iburibashi',
        ]);
        // id: 1918
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '469',
            'kanji' => '加賀温泉',
            'kana' => 'かがおんせん',
            'romaji' => 'Kagaonsen',
        ]);
        // id: 1919
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '469',
            'kanji' => '大聖寺',
            'kana' => 'だいしょうじ',
            'romaji' => 'Daishōji',
        ]);
        // id: 1920
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '470',
            'kanji' => '金沢',
            'kana' => 'かなざわ',
            'romaji' => 'Kanazawa',
        ]);
        // id: 1921
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '470',
            'kanji' => '西金沢',
            'kana' => 'にしかなざわ',
            'romaji' => 'Nishi-Kanazawa',
        ]);
        // id: 1922
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '471',
            'kanji' => '宇野気',
            'kana' => 'うのけ',
            'romaji' => 'Unoke',
        ]);
        // id: 1923
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '471',
            'kanji' => '高松',
            'kana' => 'たかまつ',
            'romaji' => 'Takamatsu',
        ]);
        // id: 1924
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '471',
            'kanji' => '横山',
            'kana' => 'よこやま',
            'romaji' => 'Yokoyama',
        ]);
        // id: 1925
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '472',
            'kanji' => '粟津',
            'kana' => 'あわづ',
            'romaji' => 'Awazu',
        ]);
        // id: 1926
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '472',
            'kanji' => '小松',
            'kana' => 'こまつ',
            'romaji' => 'Komatsu',
        ]);
        // id: 1927
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '472',
            'kanji' => '明峰',
            'kana' => 'めいほう',
            'romaji' => 'Meihō',
        ]);
        // id: 1928
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '473',
            'kanji' => '津幡',
            'kana' => 'つばた',
            'romaji' => 'Tsubata',
        ]);
        // id: 1929
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '473',
            'kanji' => '中津幡',
            'kana' => 'なかつばた',
            'romaji' => 'Naka-Tsubata',
        ]);
        // id: 1930
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '473',
            'kanji' => '能瀬',
            'kana' => 'のせ',
            'romaji' => 'Nose',
        ]);
        // id: 1931
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '473',
            'kanji' => '本津幡',
            'kana' => 'ほんつばた',
            'romaji' => 'Hon-Tsubata',
        ]);
        // id: 1932
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '474',
            'kanji' => '金丸',
            'kana' => 'かねまる',
            'romaji' => 'Kanemaru',
        ]);
        // id: 1933
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '474',
            'kanji' => '能登二宮',
            'kana' => 'のとにのみや',
            'romaji' => 'Noto-Ninomiya',
        ]);
        // id: 1934
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '474',
            'kanji' => '能登部',
            'kana' => 'のとべ',
            'romaji' => 'Notobe',
        ]);
        // id: 1935
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '474',
            'kanji' => '良川',
            'kana' => 'よしかわ',
            'romaji' => 'Yoshikawa',
        ]);
        // id: 1936
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '475',
            'kanji' => '徳田',
            'kana' => 'とくだ',
            'romaji' => 'Tokuda',
        ]);
        // id: 1937
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '475',
            'kanji' => '七尾',
            'kana' => 'ななお',
            'romaji' => 'Nanao',
        ]);
        // id: 1938
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '475',
            'kanji' => '和倉温泉',
            'kana' => 'わくらおんせん',
            'romaji' => 'Wakuraonsen',
        ]);
        // id: 1939
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '476',
            'kanji' => '野々市',
            'kana' => 'ののいち',
            'romaji' => 'Nonoichi',
        ]);
        // id: 1940
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '477',
            'kanji' => '能美根上',
            'kana' => 'のみねあがり',
            'romaji' => 'Nomineagari',
        ]);
        // id: 1941
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '478',
            'kanji' => '千路',
            'kana' => 'ちじ',
            'romaji' => 'Chji',
        ]);
        // id: 1942
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '478',
            'kanji' => '羽咋',
            'kana' => 'はくい',
            'romaji' => 'Hakui',
        ]);
        // id: 1943
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '478',
            'kanji' => '南羽咋',
            'kana' => 'みなみはくい',
            'romaji' => 'Minami-Hakui',
        ]);
        // id: 1944
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '479',
            'kanji' => '加賀笠間',
            'kana' => 'かがかさま',
            'romaji' => 'Kaga-Kasama',
        ]);
        // id: 1945
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '479',
            'kanji' => '小舞子',
            'kana' => 'こまいこ',
            'romaji' => 'Komaiko',
        ]);
        // id: 1946
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '479',
            'kanji' => '松任',
            'kana' => 'まっとう',
            'romaji' => 'Mattō',
        ]);
        // id: 1947
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '479',
            'kanji' => '美川',
            'kana' => 'みかわ',
            'romaji' => 'Mikawa',
        ]);
        // id: 1948
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '480',
            'kanji' => '敷浪',
            'kana' => 'しきなみ',
            'romaji' => 'Shikinami',
        ]);
        // id: 1949
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '480',
            'kanji' => '宝達',
            'kana' => 'ほうだつ',
            'romaji' => 'Hōdatsu',
        ]);
        // id: 1950
        Station::insert([
            'prefecture_id' => '17',
            'city_id' => '480',
            'kanji' => '免田',
            'kana' => 'めんでん',
            'romaji' => 'Menden',
        ]);
        // id: 1951
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '481',
            'kanji' => '芦原温泉',
            'kana' => 'あわらおんせん',
            'romaji' => 'Awaraonsen',
        ]);
        // id: 1952
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '481',
            'kanji' => '牛ノ谷',
            'kana' => 'うしのや',
            'romaji' => 'Ushinoya',
        ]);
        // id: 1953
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '481',
            'kanji' => '細呂木',
            'kana' => 'ほそろぎ',
            'romaji' => 'Hosorogi',
        ]);
        // id: 1954
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '482',
            'kanji' => '王子保',
            'kana' => 'おうしお',
            'romaji' => 'Ōshio',
        ]);
        // id: 1955
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '482',
            'kanji' => '武生',
            'kana' => 'たけふ',
            'romaji' => 'Takefu',
        ]);
        // id: 1956
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '483',
            'kanji' => '若狭本郷',
            'kana' => 'わかさほんごう',
            'romaji' => 'Wakasa-Hongō',
        ]);
        // id: 1957
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '牛ケ原',
            'kana' => 'うしがはら',
            'romaji' => 'Ushigahara',
        ]);
        // id: 1958
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '越前大野',
            'kana' => 'えちぜんおおの',
            'romaji' => 'Echizen-Ōno',
        ]);
        // id: 1959
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '越前下山',
            'kana' => 'えちぜんしもやま',
            'romaji' => 'Echizen-Shimoyama',
        ]);
        // id: 1960
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '越前田野',
            'kana' => 'えちぜんたの',
            'romaji' => 'Echizen-Tano',
        ]);
        // id: 1961
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '越前富田',
            'kana' => 'えちぜんとみだ',
            'romaji' => 'Echizen-Tomida',
        ]);
        // id: 1962
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '柿ケ島',
            'kana' => 'かきがしま',
            'romaji' => 'Kakigashima',
        ]);
        // id: 1963
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '勝原',
            'kana' => 'かどはら',
            'romaji' => 'Kadohara',
        ]);
        // id: 1964
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '北大野',
            'kana' => 'きたおおの',
            'romaji' => 'Kita-Ōno',
        ]);
        // id: 1965
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '九頭竜湖',
            'kana' => 'くずりゅうこ',
            'romaji' => 'Kuzuryūko',
        ]);
        // id: 1966
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '484',
            'kanji' => '下唯野',
            'kana' => 'しもゆいの',
            'romaji' => 'Shimo-Yuino',
        ]);
        // id: 1967
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '485',
            'kanji' => '小浜',
            'kana' => 'おばま',
            'romaji' => 'Obama',
        ]);
        // id: 1968
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '485',
            'kanji' => '加斗',
            'kana' => 'かと',
            'romaji' => 'Kato',
        ]);
        // id: 1969
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '485',
            'kanji' => '新平野',
            'kana' => 'しんひらの',
            'romaji' => 'Shin-Hirano',
        ]);
        // id: 1970
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '485',
            'kanji' => '勢浜',
            'kana' => 'せいはま',
            'romaji' => 'Seihama',
        ]);
        // id: 1971
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '485',
            'kanji' => '東小浜',
            'kana' => 'ひがしおばま',
            'romaji' => 'Higashi-Obama',
        ]);
        // id: 1972
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '486',
            'kanji' => '春江',
            'kana' => 'はるえ',
            'romaji' => 'Harue',
        ]);
        // id: 1973
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '486',
            'kanji' => '丸岡',
            'kana' => 'まるおか',
            'romaji' => 'Maruoka',
        ]);
        // id: 1974
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '487',
            'kanji' => '北鯖江',
            'kana' => 'きたさばえ',
            'romaji' => 'Kita-Sabae',
        ]);
        // id: 1975
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '487',
            'kanji' => '鯖江',
            'kana' => 'さばえ',
            'romaji' => 'Sabae',
        ]);
        // id: 1976
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '488',
            'kanji' => '青郷',
            'kana' => 'あおのごう',
            'romaji' => 'Aonogō',
        ]);
        // id: 1977
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '488',
            'kanji' => '三松',
            'kana' => 'みつまつ',
            'romaji' => 'Mitsumatsu',
        ]);
        // id: 1978
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '488',
            'kanji' => '若狭高浜',
            'kana' => 'わかさたかはま',
            'romaji' => 'Wakasa-Takahama',
        ]);
        // id: 1979
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '488',
            'kanji' => '若狭和田',
            'kana' => 'わかさわだ',
            'romaji' => 'Wakasa-Wada',
        ]);
        // id: 1980
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '489',
            'kanji' => '粟野',
            'kana' => 'あわの',
            'romaji' => 'Awano',
        ]);
        // id: 1981
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '489',
            'kanji' => '新疋田',
            'kana' => 'しんひきだ',
            'romaji' => 'Shin-Hikida',
        ]);
        // id: 1982
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '489',
            'kanji' => '敦賀',
            'kana' => 'つるが',
            'romaji' => 'Tsuruga',
        ]);
        // id: 1983
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '489',
            'kanji' => '西敦賀',
            'kana' => 'にしつるが',
            'romaji' => 'Nishi-Tsuruga',
        ]);
        // id: 1984
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '足羽',
            'kana' => 'あすわ',
            'romaji' => 'Asuwa',
        ]);
        // id: 1985
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '一乗谷',
            'kana' => 'いちじょうだに',
            'romaji' => 'Ichijōdani',
        ]);
        // id: 1986
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '市波',
            'kana' => 'いちなみ',
            'romaji' => 'Ichinami',
        ]);
        // id: 1987
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '越前大宮',
            'kana' => 'えちぜんおおみや',
            'romaji' => 'Echizen-Ōmiya',
        ]);
        // id: 1988
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '越前高田',
            'kana' => 'えちぜんたかだ',
            'romaji' => 'Echizen-Takada',
        ]);
        // id: 1989
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '越前東郷',
            'kana' => 'えちぜんとうごう',
            'romaji' => 'Echizen-Tōgō',
        ]);
        // id: 1990
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '越前花堂',
            'kana' => 'えちぜんはなんどう',
            'romaji' => 'Echizen-Hanandō',
        ]);
        // id: 1991
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '越前薬師',
            'kana' => 'えちぜんやくし',
            'romaji' => 'Echizen-Yakushi',
        ]);
        // id: 1992
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '大土呂',
            'kana' => 'おおどろ',
            'romaji' => 'Ōdoro',
        ]);
        // id: 1993
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '小和清水',
            'kana' => 'こわしょうず',
            'romaji' => 'Kowashōzu',
        ]);
        // id: 1994
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '計石',
            'kana' => 'はかりいし',
            'romaji' => 'Hakariishi',
        ]);
        // id: 1995
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '福井',
            'kana' => 'ふくい',
            'romaji' => 'Fukui',
        ]);
        // id: 1996
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '美山',
            'kana' => 'みやま',
            'romaji' => 'Miyama',
        ]);
        // id: 1997
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '森田',
            'kana' => 'もりた',
            'romaji' => 'Morita',
        ]);
        // id: 1998
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '490',
            'kanji' => '六条',
            'kana' => 'ろくじょう',
            'romaji' => 'Rokujō',
        ]);
        // id: 1999
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '491',
            'kanji' => '今庄',
            'kana' => 'いまじょう',
            'romaji' => 'Imajō',
        ]);
        // id: 2000
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '491',
            'kanji' => '南条',
            'kana' => 'なんじょう',
            'romaji' => 'Nanjō',
        ]);
        // id: 2001
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '491',
            'kanji' => '南今庄',
            'kana' => 'みなみいまじょう',
            'romaji' => 'Minami-Imajō',
        ]);
        // id: 2002
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '491',
            'kanji' => '湯尾',
            'kana' => 'ゆのお',
            'romaji' => 'Yunoo',
        ]);
        // id: 2003
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '492',
            'kanji' => '東美浜',
            'kana' => 'ひがしみはま',
            'romaji' => 'Higashi-Mihama',
        ]);
        // id: 2004
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '492',
            'kanji' => '美浜',
            'kana' => 'みはま',
            'romaji' => 'Mihama',
        ]);
        // id: 2005
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '493',
            'kanji' => '大鳥羽',
            'kana' => 'おおとば',
            'romaji' => 'Ōtoba',
        ]);
        // id: 2006
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '493',
            'kanji' => '上中',
            'kana' => 'かみなか',
            'romaji' => 'Kaminaka',
        ]);
        // id: 2007
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '493',
            'kanji' => '気山',
            'kana' => 'きやま',
            'romaji' => 'Kiyama',
        ]);
        // id: 2008
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '493',
            'kanji' => '十村',
            'kana' => 'とむら',
            'romaji' => 'Tomura',
        ]);
        // id: 2009
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '493',
            'kanji' => '藤井',
            'kana' => 'ふじい',
            'romaji' => 'Fujii',
        ]);
        // id: 2010
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '493',
            'kanji' => '三方',
            'kana' => 'みかた',
            'romaji' => 'Mikata',
        ]);
        // id: 2011
        Station::insert([
            'prefecture_id' => '18',
            'city_id' => '493',
            'kanji' => '若狭有田',
            'kana' => 'わかさありた',
            'romaji' => 'Wakasa-Arita',
        ]);
        // id: 2012
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '494',
            'kanji' => '芦川',
            'kana' => 'あしがわ',
            'romaji' => 'Ashigawa',
        ]);
        // id: 2013
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '494',
            'kanji' => '市川大門',
            'kana' => 'いちかわだいもん',
            'romaji' => 'Ichikawadaimon',
        ]);
        // id: 2014
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '494',
            'kanji' => '市川本町',
            'kana' => 'いちかわほんまち',
            'romaji' => 'Ichikawahommachi',
        ]);
        // id: 2015
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '494',
            'kanji' => '落居',
            'kana' => 'おちい',
            'romaji' => 'Ochii',
        ]);
        // id: 2016
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '494',
            'kanji' => '甲斐岩間',
            'kana' => 'かいいわま',
            'romaji' => 'Kai-Iwama',
        ]);
        // id: 2017
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '494',
            'kanji' => '甲斐上野',
            'kana' => 'かいうえの',
            'romaji' => 'Kai-Ueno',
        ]);
        // id: 2018
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '494',
            'kanji' => '鰍沢口',
            'kana' => 'かじかざわぐち',
            'romaji' => 'Kajikazawaguchi',
        ]);
        // id: 2019
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '495',
            'kanji' => '上野原',
            'kana' => 'うえのはら',
            'romaji' => 'Uenohara',
        ]);
        // id: 2020
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '495',
            'kanji' => '四方津',
            'kana' => 'しおつ',
            'romaji' => 'Shiotsu',
        ]);
        // id: 2021
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '496',
            'kanji' => '大月',
            'kana' => 'おおつき',
            'romaji' => 'Ōtsuki',
        ]);
        // id: 2022
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '496',
            'kanji' => '笹子',
            'kana' => 'ささご',
            'romaji' => 'Sasago',
        ]);
        // id: 2023
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '496',
            'kanji' => '猿橋',
            'kana' => 'さるはし',
            'romaji' => 'Saruhashi',
        ]);
        // id: 2024
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '496',
            'kanji' => '鳥沢',
            'kana' => 'とりさわ',
            'romaji' => 'Torisawa',
        ]);
        // id: 2025
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '496',
            'kanji' => '初狩',
            'kana' => 'はつかり',
            'romaji' => 'Hatsukari',
        ]);
        // id: 2026
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '496',
            'kanji' => '梁川',
            'kana' => 'やながわ',
            'romaji' => 'Yanagawa',
        ]);
        // id: 2027
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '497',
            'kanji' => '塩崎',
            'kana' => 'しおざき',
            'romaji' => 'Shiozaki',
        ]);
        // id: 2028
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '497',
            'kanji' => '竜王',
            'kana' => 'りゅうおう',
            'romaji' => 'Ryūō',
        ]);
        // id: 2029
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '498',
            'kanji' => '塩山',
            'kana' => 'えんざん',
            'romaji' => 'Enzan',
        ]);
        // id: 2030
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '498',
            'kanji' => '甲斐大和',
            'kana' => 'かいやまと',
            'romaji' => 'Kai-Yamato',
        ]);
        // id: 2031
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '498',
            'kanji' => '勝沼ぶどう郷',
            'kana' => 'かつぬまぶどうきょう',
            'romaji' => 'Katsunumabudōkyō',
        ]);
        // id: 2032
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '499',
            'kanji' => '甲斐住吉',
            'kana' => 'かいすみよし',
            'romaji' => 'Kai-Sumiyoshi',
        ]);
        // id: 2033
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '499',
            'kanji' => '金手',
            'kana' => 'かねんて',
            'romaji' => 'Kanente',
        ]);
        // id: 2034
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '499',
            'kanji' => '甲府',
            'kana' => 'こうふ',
            'romaji' => 'Kōfu',
        ]);
        // id: 2035
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '499',
            'kanji' => '酒折',
            'kana' => 'さかおり',
            'romaji' => 'Sakaori',
        ]);
        // id: 2036
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '499',
            'kanji' => '善光寺',
            'kana' => 'ぜんこうじ',
            'romaji' => 'Zenkōji',
        ]);
        // id: 2037
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '499',
            'kanji' => '南甲府',
            'kana' => 'みなみこうふ',
            'romaji' => 'Minami-Kōfu',
        ]);
        // id: 2038
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '500',
            'kanji' => '国母',
            'kana' => 'こくぼ',
            'romaji' => 'Kokubo',
        ]);
        // id: 2039
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '500',
            'kanji' => '常永',
            'kana' => 'じょうえい',
            'romaji' => 'Jōei',
        ]);
        // id: 2040
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '501',
            'kanji' => '小井川',
            'kana' => 'こいかわ',
            'romaji' => 'Koikawa',
        ]);
        // id: 2041
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '501',
            'kanji' => '東花輪',
            'kana' => 'ひがしはなわ',
            'romaji' => 'Higashi-Hanawa',
        ]);
        // id: 2042
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '502',
            'kanji' => '井出',
            'kana' => 'いで',
            'romaji' => 'Ide',
        ]);
        // id: 2043
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '502',
            'kanji' => '内船',
            'kana' => 'うつぶな',
            'romaji' => 'Utsubuna',
        ]);
        // id: 2044
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '502',
            'kanji' => '十島',
            'kana' => 'とおしま',
            'romaji' => 'Tōshima',
        ]);
        // id: 2045
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '502',
            'kanji' => '寄畑',
            'kana' => 'よりはた',
            'romaji' => 'Yorihata',
        ]);
        // id: 2046
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '503',
            'kanji' => '穴山',
            'kana' => 'あなやま',
            'romaji' => 'Anayama',
        ]);
        // id: 2047
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '503',
            'kanji' => '新府',
            'kana' => 'しんぷ',
            'romaji' => 'Shimpu',
        ]);
        // id: 2048
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '503',
            'kanji' => '韮崎',
            'kana' => 'にらさき',
            'romaji' => 'Nirasaki',
        ]);
        // id: 2049
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '504',
            'kanji' => '石和温泉',
            'kana' => 'いさわおんせん',
            'romaji' => 'Isawa-Onsen',
        ]);
        // id: 2050
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '504',
            'kanji' => '春日居町',
            'kana' => 'かすがいちょう',
            'romaji' => 'Kasugaichō',
        ]);
        // id: 2051
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '505',
            'kanji' => '甲斐大泉',
            'kana' => 'かいおおいずみ',
            'romaji' => 'Kai-Ōizumi',
        ]);
        // id: 2052
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '505',
            'kanji' => '甲斐小泉',
            'kana' => 'かいこいずみ',
            'romaji' => 'Kai-Koizumi',
        ]);
        // id: 2053
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '505',
            'kanji' => '清里',
            'kana' => 'きよさと',
            'romaji' => 'Kiyosato',
        ]);
        // id: 2054
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '505',
            'kanji' => '小淵沢',
            'kana' => 'こぶちざわ',
            'romaji' => 'Kobuchizawa',
        ]);
        // id: 2055
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '505',
            'kanji' => '長坂',
            'kana' => 'ながさか',
            'romaji' => 'Nagasaka',
        ]);
        // id: 2056
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '505',
            'kanji' => '日野春',
            'kana' => 'ひのはる',
            'romaji' => 'Hinoharu',
        ]);
        // id: 2057
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '506',
            'kanji' => '市ノ瀬',
            'kana' => 'いちのせ',
            'romaji' => 'Ichinose',
        ]);
        // id: 2058
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '506',
            'kanji' => '甲斐大島',
            'kana' => 'かいおおしま',
            'romaji' => 'Kai-Ōshima',
        ]);
        // id: 2059
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '506',
            'kanji' => '甲斐常葉',
            'kana' => 'かいときわ',
            'romaji' => 'Kai-Tokiwa',
        ]);
        // id: 2060
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '506',
            'kanji' => '久那土',
            'kana' => 'くなど',
            'romaji' => 'Kunado',
        ]);
        // id: 2061
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '506',
            'kanji' => '塩之沢',
            'kana' => 'しおのさわ',
            'romaji' => 'Shionosawa',
        ]);
        // id: 2062
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '506',
            'kanji' => '下部温泉',
            'kana' => 'しもべおんせん',
            'romaji' => 'Shimobe-Onsen',
        ]);
        // id: 2063
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '506',
            'kanji' => '波高島',
            'kana' => 'はだかじま',
            'romaji' => 'Hadakajima',
        ]);
        // id: 2064
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '506',
            'kanji' => '身延',
            'kana' => 'みのぶ',
            'romaji' => 'Minobu',
        ]);
        // id: 2065
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '507',
            'kanji' => '東山梨',
            'kana' => 'ひがしやまなし',
            'romaji' => 'Higashi-Yamanashi',
        ]);
        // id: 2066
        Station::insert([
            'prefecture_id' => '19',
            'city_id' => '507',
            'kanji' => '山梨市',
            'kana' => 'やまなしし',
            'romaji' => 'Yamanashishi',
        ]);
        // id: 2067
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '508',
            'kanji' => '上松',
            'kana' => 'あげまつ',
            'romaji' => 'Agematsu',
        ]);
        // id: 2068
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '508',
            'kanji' => '倉本',
            'kana' => 'くらもと',
            'romaji' => 'Kuramoto',
        ]);
        // id: 2069
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '明科',
            'kana' => 'あかしな',
            'romaji' => 'Akashina',
        ]);
        // id: 2070
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '梓橋',
            'kana' => 'あずさばし',
            'romaji' => 'Azusabashi',
        ]);
        // id: 2071
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '安曇追分',
            'kana' => 'あずみおいわけ',
            'romaji' => 'Azumi-Oiwake',
        ]);
        // id: 2072
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '有明',
            'kana' => 'ありあけ',
            'romaji' => 'Ariake',
        ]);
        // id: 2073
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '田沢',
            'kana' => 'たざわ',
            'romaji' => 'Tazawa',
        ]);
        // id: 2074
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '豊科',
            'kana' => 'とよしな',
            'romaji' => 'Toyoshina',
        ]);
        // id: 2075
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '中萱',
            'kana' => 'なかがや',
            'romaji' => 'Nakagaya',
        ]);
        // id: 2076
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '柏矢町',
            'kana' => 'はくやちょう',
            'romaji' => 'Hakuyachō',
        ]);
        // id: 2077
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '一日市場',
            'kana' => 'ひといちば',
            'romaji' => 'Hitoichiba',
        ]);
        // id: 2078
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '穂高',
            'kana' => 'ほたか',
            'romaji' => 'Hotaka',
        ]);
        // id: 2079
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '509',
            'kanji' => '南豊科',
            'kana' => 'みなみとよしな',
            'romaji' => 'Minami-Toyoshina',
        ]);
        // id: 2080
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '510',
            'kanji' => '飯島',
            'kana' => 'いいじま',
            'romaji' => 'Iijima',
        ]);
        // id: 2081
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '510',
            'kanji' => '伊那本郷',
            'kana' => 'いなほんごう',
            'romaji' => 'Ina-Hongō',
        ]);
        // id: 2082
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '510',
            'kanji' => '高遠原',
            'kana' => 'たかとおばら',
            'romaji' => 'Takatōbara',
        ]);
        // id: 2083
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '510',
            'kanji' => '田切',
            'kana' => 'たぎり',
            'romaji' => 'Tagiri',
        ]);
        // id: 2084
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '510',
            'kanji' => '七久保',
            'kana' => 'ななくぼ',
            'romaji' => 'Nanakubo',
        ]);
        // id: 2085
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '飯田',
            'kana' => 'いいだ',
            'romaji' => 'Iida',
        ]);
        // id: 2086
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '伊那上郷',
            'kana' => 'いなかみさと',
            'romaji' => 'Ina-Kamisato',
        ]);
        // id: 2087
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '伊那八幡',
            'kana' => 'いなやわた',
            'romaji' => 'Ina-Yawata',
        ]);
        // id: 2088
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '鼎',
            'kana' => 'かなえ',
            'romaji' => 'Kanae',
        ]);
        // id: 2089
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '川路',
            'kana' => 'かわじ',
            'romaji' => 'Kawaji',
        ]);
        // id: 2090
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '切石',
            'kana' => 'きりいし',
            'romaji' => 'Kiriishi',
        ]);
        // id: 2091
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '金野',
            'kana' => 'きんの',
            'romaji' => 'Kinno',
        ]);
        // id: 2092
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '毛賀',
            'kana' => 'けが',
            'romaji' => 'Kega',
        ]);
        // id: 2093
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '桜町',
            'kana' => 'さくらまち',
            'romaji' => 'Sakuramachi',
        ]);
        // id: 2094
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '下山村',
            'kana' => 'しもやまむら',
            'romaji' => 'Shimoyamamura',
        ]);
        // id: 2095
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '駄科',
            'kana' => 'だしな',
            'romaji' => 'Dashina',
        ]);
        // id: 2096
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '千代',
            'kana' => 'ちよ',
            'romaji' => 'Chiyo',
        ]);
        // id: 2097
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '天竜峡',
            'kana' => 'てんりゅうきょう',
            'romaji' => 'Tenryūkyō',
        ]);
        // id: 2098
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '時又',
            'kana' => 'ときまた',
            'romaji' => 'Tokimata',
        ]);
        // id: 2099
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '511',
            'kanji' => '元善光寺',
            'kana' => 'もとぜんこうじ',
            'romaji' => 'Moto-zenkōji',
        ]);
        // id: 2100
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '飯山',
            'kana' => 'いいやま',
            'romaji' => 'Iiyama',
        ]);
        // id: 2101
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '上桑名川',
            'kana' => 'かみくわながわ',
            'romaji' => 'Kami-Kuwanagawa',
        ]);
        // id: 2102
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '上境',
            'kana' => 'かみさかい',
            'romaji' => 'Kami-Sakai',
        ]);
        // id: 2103
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '北飯山',
            'kana' => 'きたいいやま',
            'romaji' => 'Kita-Iiyama',
        ]);
        // id: 2104
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '桑名川',
            'kana' => 'くわながわ',
            'romaji' => 'Kuwanagawa',
        ]);
        // id: 2105
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '信濃平',
            'kana' => 'しなのたいら',
            'romaji' => 'Shinano-Taira',
        ]);
        // id: 2106
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '戸狩野沢温泉',
            'kana' => 'とがりのざわおんせん',
            'romaji' => 'Togarinozawa-Onsen',
        ]);
        // id: 2107
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '西大滝',
            'kana' => 'にしおおたき',
            'romaji' => 'Nishi-Ōtaki',
        ]);
        // id: 2108
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '512',
            'kanji' => '蓮',
            'kana' => 'はちす',
            'romaji' => 'Hachisu',
        ]);
        // id: 2109
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '513',
            'kanji' => '赤木',
            'kana' => 'あかぎ',
            'romaji' => 'Akagi',
        ]);
        // id: 2110
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '513',
            'kanji' => '伊那北',
            'kana' => 'いなきた',
            'romaji' => 'Inakita',
        ]);
        // id: 2111
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '513',
            'kanji' => '伊那市',
            'kana' => 'いなし',
            'romaji' => 'Inashi',
        ]);
        // id: 2112
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '513',
            'kanji' => '沢渡',
            'kana' => 'さわんど',
            'romaji' => 'Sawando',
        ]);
        // id: 2113
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '513',
            'kanji' => '下島',
            'kana' => 'しもじま',
            'romaji' => 'Shimojima',
        ]);
        // id: 2114
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '514',
            'kanji' => '上田',
            'kana' => 'うえだ',
            'romaji' => 'Ueda',
        ]);
        // id: 2115
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '515',
            'kanji' => '大桑',
            'kana' => 'おおくわ',
            'romaji' => 'Ōkuwa',
        ]);
        // id: 2116
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '515',
            'kanji' => '須原',
            'kana' => 'すはら',
            'romaji' => 'Suhara',
        ]);
        // id: 2117
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '515',
            'kanji' => '野尻',
            'kana' => 'のじり',
            'romaji' => 'Nojiri',
        ]);
        // id: 2118
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '安曇沓掛',
            'kana' => 'あずみくつかけ',
            'romaji' => 'Azumi-Kutsukake',
        ]);
        // id: 2119
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '稲尾',
            'kana' => 'いなお',
            'romaji' => 'Inao',
        ]);
        // id: 2120
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '海ノ口',
            'kana' => 'うみのくち',
            'romaji' => 'Uminokuchi',
        ]);
        // id: 2121
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '北大町',
            'kana' => 'きたおおまち',
            'romaji' => 'Kita-Ōmachi',
        ]);
        // id: 2122
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '信濃大町',
            'kana' => 'しなのおおまち',
            'romaji' => 'Shinano-Ōmachi',
        ]);
        // id: 2123
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '信濃木崎',
            'kana' => 'しなのきざき',
            'romaji' => 'Shinano-Kizaki',
        ]);
        // id: 2124
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '信濃常盤',
            'kana' => 'しなのときわ',
            'romaji' => 'Shinano-Tokiwa',
        ]);
        // id: 2125
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '南大町',
            'kana' => 'みなみおおまち',
            'romaji' => 'Minami-Ōmachi',
        ]);
        // id: 2126
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '516',
            'kanji' => '簗場',
            'kana' => 'やなば',
            'romaji' => 'Yanaba',
        ]);
        // id: 2127
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '517',
            'kanji' => '岡谷',
            'kana' => 'おかや',
            'romaji' => 'Okaya',
        ]);
        // id: 2128
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '517',
            'kanji' => '川岸',
            'kana' => 'かわぎし',
            'romaji' => 'Kawagishi',
        ]);
        // id: 2129
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '518',
            'kanji' => '北小谷',
            'kana' => 'きたおたり',
            'romaji' => 'Kita-Otari',
        ]);
        // id: 2130
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '518',
            'kanji' => '千国',
            'kana' => 'ちくに',
            'romaji' => 'Chikuni',
        ]);
        // id: 2131
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '518',
            'kanji' => '中土',
            'kana' => 'なかつち',
            'romaji' => 'Nakatsuchi',
        ]);
        // id: 2132
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '518',
            'kanji' => '白馬大池',
            'kana' => 'はくばおおいけ',
            'romaji' => 'Hakubaōike',
        ]);
        // id: 2133
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '518',
            'kanji' => '南小谷',
            'kana' => 'みなみおたり',
            'romaji' => 'Minami-Otari',
        ]);
        // id: 2134
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '519',
            'kanji' => '聖高原',
            'kana' => 'ひじりこうげん',
            'romaji' => 'Hijiri-Kōgen',
        ]);
        // id: 2135
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '520',
            'kanji' => '軽井沢',
            'kana' => 'かるいざわ',
            'romaji' => 'Karuizawa',
        ]);
        // id: 2136
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '521',
            'kanji' => '信濃川上',
            'kana' => 'しなのかわかみ',
            'romaji' => 'Shinano-Kawakami',
        ]);
        // id: 2137
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '522',
            'kanji' => '木曽福島',
            'kana' => 'きそふくしま',
            'romaji' => 'Kiso-Fukushima',
        ]);
        // id: 2138
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '522',
            'kanji' => '原野',
            'kana' => 'はらの',
            'romaji' => 'Harano',
        ]);
        // id: 2139
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '522',
            'kanji' => '宮ノ越',
            'kana' => 'みやのこし',
            'romaji' => 'Miyanokoshi',
        ]);
        // id: 2140
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '523',
            'kanji' => '藪原',
            'kana' => 'やぶはら',
            'romaji' => 'Yabuhara',
        ]);
        // id: 2141
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '524',
            'kanji' => '小海',
            'kana' => 'こうみ',
            'romaji' => 'Koumi',
        ]);
        // id: 2142
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '524',
            'kanji' => '松原湖',
            'kana' => 'まつばらこ',
            'romaji' => 'Matsubarako',
        ]);
        // id: 2143
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '524',
            'kanji' => '馬流',
            'kana' => 'まながし',
            'romaji' => 'Managashi',
        ]);
        // id: 2144
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '525',
            'kanji' => '伊那福岡',
            'kana' => 'いなふくおか',
            'romaji' => 'Ina-Fukuoka',
        ]);
        // id: 2145
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '525',
            'kanji' => '大田切',
            'kana' => 'おおたぎり',
            'romaji' => 'Ōtagiri',
        ]);
        // id: 2146
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '525',
            'kanji' => '駒ケ根',
            'kana' => 'こまがね',
            'romaji' => 'Komagane',
        ]);
        // id: 2147
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '525',
            'kanji' => '小町屋',
            'kana' => 'こまちや',
            'romaji' => 'Komachiya',
        ]);
        // id: 2148
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '526',
            'kanji' => '乙女',
            'kana' => 'おとめ',
            'romaji' => 'Otome',
        ]);
        // id: 2149
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '526',
            'kanji' => '小諸',
            'kana' => 'こもろ',
            'romaji' => 'Komoro',
        ]);
        // id: 2150
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '526',
            'kanji' => '東小諸',
            'kana' => 'ひがしこもろ',
            'romaji' => 'Higashi-Komoro',
        ]);
        // id: 2151
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '526',
            'kanji' => '美里',
            'kana' => 'みさと',
            'romaji' => 'Misato',
        ]);
        // id: 2152
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '526',
            'kanji' => '三岡',
            'kana' => 'みつおか',
            'romaji' => 'Mitsuoka',
        ]);
        // id: 2153
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '527',
            'kanji' => '信濃白鳥',
            'kana' => 'しなのしらとり',
            'romaji' => 'Shinano-Shiratori',
        ]);
        // id: 2154
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '527',
            'kanji' => '平滝',
            'kana' => 'ひらたき',
            'romaji' => 'Hirataki',
        ]);
        // id: 2155
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '527',
            'kanji' => '森宮野原',
            'kana' => 'もりみやのはら',
            'romaji' => 'Morimiyanohara',
        ]);
        // id: 2156
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '527',
            'kanji' => '横倉',
            'kana' => 'よこくら',
            'romaji' => 'Yokokura',
        ]);
        // id: 2157
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '青沼',
            'kana' => 'あおぬま',
            'romaji' => 'Aonuma',
        ]);
        // id: 2158
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '岩村田',
            'kana' => 'いわむらだ',
            'romaji' => 'Iwamurada',
        ]);
        // id: 2159
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '臼田',
            'kana' => 'うすだ',
            'romaji' => 'Usuda',
        ]);
        // id: 2160
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '太田部',
            'kana' => 'おおたべ',
            'romaji' => 'Ōtabe',
        ]);
        // id: 2161
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '北中込',
            'kana' => 'きたなかごみ',
            'romaji' => 'Kita-Nakagomi',
        ]);
        // id: 2162
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '佐久平',
            'kana' => 'さくだいら',
            'romaji' => 'Sakudaira',
        ]);
        // id: 2163
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '龍岡城',
            'kana' => 'たつおかじょう',
            'romaji' => 'Tatsuokajō',
        ]);
        // id: 2164
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '中込',
            'kana' => 'なかごみ',
            'romaji' => 'Nakagomi',
        ]);
        // id: 2165
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '中佐都',
            'kana' => 'なかさと',
            'romaji' => 'Nakasato',
        ]);
        // id: 2166
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '528',
            'kanji' => '滑津',
            'kana' => 'なめづ',
            'romaji' => 'Namezu',
        ]);
        // id: 2167
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '529',
            'kanji' => '海瀬',
            'kana' => 'かいぜ',
            'romaji' => 'Kaize',
        ]);
        // id: 2168
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '529',
            'kanji' => '高岩',
            'kana' => 'たかいわ',
            'romaji' => 'Takaiwa',
        ]);
        // id: 2169
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '529',
            'kanji' => '羽黒下',
            'kana' => 'はぐろした',
            'romaji' => 'Haguroshita',
        ]);
        // id: 2170
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '529',
            'kanji' => '八千穂',
            'kana' => 'やちほ',
            'romaji' => 'Yachiho',
        ]);
        // id: 2171
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '530',
            'kanji' => '木曽平沢',
            'kana' => 'きそひらさわ',
            'romaji' => 'Kiso-Hirasawa',
        ]);
        // id: 2172
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '530',
            'kanji' => '塩尻',
            'kana' => 'しおじり',
            'romaji' => 'Shiojiri',
        ]);
        // id: 2173
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '530',
            'kanji' => '洗馬',
            'kana' => 'せば',
            'romaji' => 'Seba',
        ]);
        // id: 2174
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '530',
            'kanji' => '奈良井',
            'kana' => 'ならい',
            'romaji' => 'Narai',
        ]);
        // id: 2175
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '530',
            'kanji' => '贄川',
            'kana' => 'にえかわ',
            'romaji' => 'Niekawa',
        ]);
        // id: 2176
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '530',
            'kanji' => '日出塩',
            'kana' => 'ひでしお',
            'romaji' => 'Hideshio',
        ]);
        // id: 2177
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '530',
            'kanji' => '広丘',
            'kana' => 'ひろおか',
            'romaji' => 'Hirooka',
        ]);
        // id: 2178
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '530',
            'kanji' => 'みどり湖',
            'kana' => 'みどりこ',
            'romaji' => 'Midoriko',
        ]);
        // id: 2179
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '531',
            'kanji' => '下諏訪',
            'kana' => 'しもすわ',
            'romaji' => 'Shimo-Suwa',
        ]);
        // id: 2180
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '532',
            'kanji' => '上諏訪',
            'kana' => 'かみすわ',
            'romaji' => 'Kami-Suwa',
        ]);
        // id: 2181
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '533',
            'kanji' => '市田',
            'kana' => 'いちだ',
            'romaji' => 'Ichida',
        ]);
        // id: 2182
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '533',
            'kanji' => '下市田',
            'kana' => 'しもいちだ',
            'romaji' => 'Shimo-Ichida',
        ]);
        // id: 2183
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '533',
            'kanji' => '下平',
            'kana' => 'しもだいら',
            'romaji' => 'Shimodaira',
        ]);
        // id: 2184
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '533',
            'kanji' => '山吹',
            'kana' => 'やまぶき',
            'romaji' => 'Yamabuki',
        ]);
        // id: 2185
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '534',
            'kanji' => '伊那新町',
            'kana' => 'いなしんまち',
            'romaji' => 'Ina-Shimmachi',
        ]);
        // id: 2186
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '534',
            'kanji' => '小野',
            'kana' => 'おの',
            'romaji' => 'Ono',
        ]);
        // id: 2187
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '534',
            'kanji' => '信濃川島',
            'kana' => 'しなのかわしま',
            'romaji' => 'Shinano-Kawashima',
        ]);
        // id: 2188
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '534',
            'kanji' => '辰野',
            'kana' => 'たつの',
            'romaji' => 'Tatsuno',
        ]);
        // id: 2189
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '534',
            'kanji' => '羽場',
            'kana' => 'はば',
            'romaji' => 'Haba',
        ]);
        // id: 2190
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '534',
            'kanji' => '宮木',
            'kana' => 'みやき',
            'romaji' => 'Miyaki',
        ]);
        // id: 2191
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '535',
            'kanji' => '冠着',
            'kana' => 'かむりき',
            'romaji' => 'Kamuriki',
        ]);
        // id: 2192
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '535',
            'kanji' => '坂北',
            'kana' => 'さかきた',
            'romaji' => 'Sakakita',
        ]);
        // id: 2193
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '535',
            'kanji' => '西条',
            'kana' => 'にしじょう',
            'romaji' => 'Nishijō',
        ]);
        // id: 2194
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '536',
            'kanji' => '姨捨',
            'kana' => 'おばすて',
            'romaji' => 'Obasute',
        ]);
        // id: 2195
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '537',
            'kanji' => '青柳',
            'kana' => 'あおやぎ',
            'romaji' => 'Aoyagi',
        ]);
        // id: 2196
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '537',
            'kanji' => '茅野',
            'kana' => 'ちの',
            'romaji' => 'Chino',
        ]);
        // id: 2197
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '538',
            'kanji' => '伊那小沢',
            'kana' => 'いなこざわ',
            'romaji' => 'Ina-Kozawa',
        ]);
        // id: 2198
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '538',
            'kanji' => '鶯巣',
            'kana' => 'うぐす',
            'romaji' => 'Ugusu',
        ]);
        // id: 2199
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '538',
            'kanji' => '為栗',
            'kana' => 'してぐり',
            'romaji' => 'Shiteguri',
        ]);
        // id: 2200
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '538',
            'kanji' => '中井侍',
            'kana' => 'なかいさむらい',
            'romaji' => 'Nakaisamurai',
        ]);
        // id: 2201
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '538',
            'kanji' => '平岡',
            'kana' => 'ひらおか',
            'romaji' => 'Hiraoka',
        ]);
        // id: 2202
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '539',
            'kanji' => '伊那田島',
            'kana' => 'いなたじま',
            'romaji' => 'Ina-Tajima',
        ]);
        // id: 2203
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '540',
            'kanji' => '替佐',
            'kana' => 'かえさ',
            'romaji' => 'Kaesa',
        ]);
        // id: 2204
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '540',
            'kanji' => '上今井',
            'kana' => 'かみいまい',
            'romaji' => 'Kami-Imai',
        ]);
        // id: 2205
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '安茂里',
            'kana' => 'あもり',
            'romaji' => 'Amori',
        ]);
        // id: 2206
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '稲荷山',
            'kana' => 'いなりやま',
            'romaji' => 'Inariyama',
        ]);
        // id: 2207
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '今井',
            'kana' => 'いまい',
            'romaji' => 'Imai',
        ]);
        // id: 2208
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '川中島',
            'kana' => 'かわなかじま',
            'romaji' => 'Kawanakajima',
        ]);
        // id: 2209
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '信濃浅野',
            'kana' => 'しなのあさの',
            'romaji' => 'Shinano-Asano',
        ]);
        // id: 2210
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '篠ノ井',
            'kana' => 'しののい',
            'romaji' => 'Shinonoi',
        ]);
        // id: 2211
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '立ケ花',
            'kana' => 'たてがはな',
            'romaji' => 'Tategahana',
        ]);
        // id: 2212
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '豊野',
            'kana' => 'とよの',
            'romaji' => 'Toyono',
        ]);
        // id: 2213
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '541',
            'kanji' => '長野',
            'kana' => 'ながの',
            'romaji' => 'Nagano',
        ]);
        // id: 2214
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '542',
            'kanji' => '十二兼',
            'kana' => 'じゅうにかね',
            'romaji' => 'Jūnikane',
        ]);
        // id: 2215
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '542',
            'kanji' => '田立',
            'kana' => 'ただち',
            'romaji' => 'Tadachi',
        ]);
        // id: 2216
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '542',
            'kanji' => '南木曽',
            'kana' => 'なぎそ',
            'romaji' => 'Nagiso',
        ]);
        // id: 2217
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '543',
            'kanji' => '飯森',
            'kana' => 'いいもり',
            'romaji' => 'Iimori',
        ]);
        // id: 2218
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '543',
            'kanji' => '神城',
            'kana' => 'かみしろ',
            'romaji' => 'Kamishiro',
        ]);
        // id: 2219
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '543',
            'kanji' => '信濃森上',
            'kana' => 'しなのもりうえ',
            'romaji' => 'Shinano-Moriue',
        ]);
        // id: 2220
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '543',
            'kanji' => '白馬',
            'kana' => 'はくば',
            'romaji' => 'Hakuba',
        ]);
        // id: 2221
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '543',
            'kanji' => '南神城',
            'kana' => 'みなみかみしろ',
            'romaji' => 'Minami-Kamishiro',
        ]);
        // id: 2222
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '544',
            'kanji' => '信濃境',
            'kana' => 'しなのさかい',
            'romaji' => 'Shinano-Sakai',
        ]);
        // id: 2223
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '544',
            'kanji' => 'すずらんの里',
            'kana' => 'すずらんのさと',
            'romaji' => 'Suzurannosato',
        ]);
        // id: 2224
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '544',
            'kanji' => '富士見',
            'kana' => 'ふじみ',
            'romaji' => 'Fujimichō',
        ]);
        // id: 2225
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '545',
            'kanji' => '伊那大島',
            'kana' => 'いなおおしま',
            'romaji' => 'Ina-Ōshima',
        ]);
        // id: 2226
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '545',
            'kanji' => '上片桐',
            'kana' => 'かみかたぎり',
            'romaji' => 'Kami-Katagiri',
        ]);
        // id: 2227
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '546',
            'kanji' => '北細野',
            'kana' => 'きたほその',
            'romaji' => 'Kita-Hosono',
        ]);
        // id: 2228
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '546',
            'kanji' => '信濃松川',
            'kana' => 'しなのまつかわ',
            'romaji' => 'Shinano-Matsukawa',
        ]);
        // id: 2229
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '546',
            'kanji' => '細野',
            'kana' => 'ほその',
            'romaji' => 'Hosono',
        ]);
        // id: 2230
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '547',
            'kanji' => '北松本',
            'kana' => 'きたまつもと',
            'romaji' => 'Kita-Matsumoto',
        ]);
        // id: 2231
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '547',
            'kanji' => '島内',
            'kana' => 'しまうち',
            'romaji' => 'Shimauchi',
        ]);
        // id: 2232
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '547',
            'kanji' => '島高松',
            'kana' => 'しまたかまつ',
            'romaji' => 'Shimatakamatsu',
        ]);
        // id: 2233
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '547',
            'kanji' => '平田',
            'kana' => 'ひらた',
            'romaji' => 'Hirata',
        ]);
        // id: 2234
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '547',
            'kanji' => '松本',
            'kana' => 'まつもと',
            'romaji' => 'Matsumoto',
        ]);
        // id: 2235
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '547',
            'kanji' => '南松本',
            'kana' => 'みなみまつもと',
            'romaji' => 'Minami-Matsumoto',
        ]);
        // id: 2236
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '547',
            'kanji' => '村井',
            'kana' => 'むらい',
            'romaji' => 'Murai',
        ]);
        // id: 2237
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '548',
            'kanji' => '海尻',
            'kana' => 'うみじり',
            'romaji' => 'Umijiri',
        ]);
        // id: 2238
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '548',
            'kanji' => '佐久海ノ口',
            'kana' => 'さくうみのくち',
            'romaji' => 'Saku-Uminokuchi',
        ]);
        // id: 2239
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '548',
            'kanji' => '佐久広瀬',
            'kana' => 'さくひろせ',
            'romaji' => 'Saku-Hirose',
        ]);
        // id: 2240
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '548',
            'kanji' => '野辺山',
            'kana' => 'のべやま',
            'romaji' => 'Nobeyama',
        ]);
        // id: 2241
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '549',
            'kanji' => '北殿',
            'kana' => 'きたとの',
            'romaji' => 'Kitatono',
        ]);
        // id: 2242
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '549',
            'kanji' => '田畑',
            'kana' => 'たばた',
            'romaji' => 'Tabata',
        ]);
        // id: 2243
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '550',
            'kanji' => '伊那松島',
            'kana' => 'いなまつしま',
            'romaji' => 'Ina-Matsushima',
        ]);
        // id: 2244
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '550',
            'kanji' => '木ノ下',
            'kana' => 'きのした',
            'romaji' => 'Kinoshita',
        ]);
        // id: 2245
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '550',
            'kanji' => '沢',
            'kana' => 'さわ',
            'romaji' => 'Sawa',
        ]);
        // id: 2246
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '551',
            'kanji' => '宮田',
            'kana' => 'みやだ',
            'romaji' => 'Miyada',
        ]);
        // id: 2247
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '552',
            'kanji' => '門島',
            'kana' => 'かどしま',
            'romaji' => 'Kadoshima',
        ]);
        // id: 2248
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '552',
            'kanji' => '唐笠',
            'kana' => 'からかさ',
            'romaji' => 'Karakasa',
        ]);
        // id: 2249
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '552',
            'kanji' => '田本',
            'kana' => 'たもと',
            'romaji' => 'Tamoto',
        ]);
        // id: 2250
        Station::insert([
            'prefecture_id' => '20',
            'city_id' => '552',
            'kanji' => '温田',
            'kana' => 'ぬくた',
            'romaji' => 'Nukuta',
        ]);
        // id: 2251
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '553',
            'kanji' => '恵那',
            'kana' => 'えな',
            'romaji' => 'Ena',
        ]);
        // id: 2252
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '553',
            'kanji' => '武並',
            'kana' => 'たけなみ',
            'romaji' => 'Takenami',
        ]);
        // id: 2253
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '554',
            'kanji' => '荒尾',
            'kana' => 'あらお',
            'romaji' => 'Arao',
        ]);
        // id: 2254
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '554',
            'kanji' => '大垣',
            'kana' => 'おおがき',
            'romaji' => 'Ōgaki',
        ]);
        // id: 2255
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '554',
            'kanji' => '美濃赤坂',
            'kana' => 'みのあかさか',
            'romaji' => 'Mino-Akasaka',
        ]);
        // id: 2256
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '555',
            'kanji' => '鵜沼',
            'kana' => 'うぬま',
            'romaji' => 'Unuma',
        ]);
        // id: 2257
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '555',
            'kanji' => '各務ケ原',
            'kana' => 'かがみがはら',
            'romaji' => 'Kagamigahara',
        ]);
        // id: 2258
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '555',
            'kanji' => '蘇原',
            'kana' => 'そはら',
            'romaji' => 'Sohara',
        ]);
        // id: 2259
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '555',
            'kanji' => '那加',
            'kana' => 'なか',
            'romaji' => 'Naka',
        ]);
        // id: 2260
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '556',
            'kanji' => '可児',
            'kana' => 'かに',
            'romaji' => 'Kani',
        ]);
        // id: 2261
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '556',
            'kanji' => '下切',
            'kana' => 'しもぎり',
            'romaji' => 'Shimogiri',
        ]);
        // id: 2262
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '557',
            'kanji' => '下麻生',
            'kana' => 'しもあそう',
            'romaji' => 'Shimo-Asō',
        ]);
        // id: 2263
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '557',
            'kanji' => '中川辺',
            'kana' => 'なかかわべ',
            'romaji' => 'Naka-Kawabe',
        ]);
        // id: 2264
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '558',
            'kanji' => '岐阜',
            'kana' => 'ぎふ',
            'romaji' => 'Gifu',
        ]);
        // id: 2265
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '558',
            'kanji' => '長森',
            'kana' => 'ながもり',
            'romaji' => 'Nagamori',
        ]);
        // id: 2266
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '558',
            'kanji' => '西岐阜',
            'kana' => 'にしぎふ',
            'romaji' => 'Nishi-Gifu',
        ]);
        // id: 2267
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '559',
            'kanji' => '下呂',
            'kana' => 'げろ',
            'romaji' => 'Gero',
        ]);
        // id: 2268
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '559',
            'kanji' => '上呂',
            'kana' => 'じょうろ',
            'romaji' => 'Jōro',
        ]);
        // id: 2269
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '559',
            'kanji' => '禅昌寺',
            'kana' => 'ぜんしょうじ',
            'romaji' => 'Zenshōji',
        ]);
        // id: 2270
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '559',
            'kanji' => '飛騨小坂',
            'kana' => 'ひだおさか',
            'romaji' => 'Hida-Osaka',
        ]);
        // id: 2271
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '559',
            'kanji' => '飛騨金山',
            'kana' => 'ひだかなやま',
            'romaji' => 'Hida-Kanayama',
        ]);
        // id: 2272
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '559',
            'kanji' => '飛騨萩原',
            'kana' => 'ひだはぎわら',
            'romaji' => 'Hida-Hagiwara',
        ]);
        // id: 2273
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '559',
            'kanji' => '飛騨宮田',
            'kana' => 'ひだみやだ',
            'romaji' => 'Hida-Miyada',
        ]);
        // id: 2274
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '559',
            'kanji' => '焼石',
            'kana' => 'やけいし',
            'romaji' => 'Yakeishi',
        ]);
        // id: 2275
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '560',
            'kanji' => '坂祝',
            'kana' => 'さかほぎ',
            'romaji' => 'Sakahogi',
        ]);
        // id: 2276
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '561',
            'kanji' => '下油井',
            'kana' => 'しもゆい',
            'romaji' => 'Shimo-Yui',
        ]);
        // id: 2277
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '561',
            'kanji' => '白川口',
            'kana' => 'しらかわぐち',
            'romaji' => 'Shirakawaguchi',
        ]);
        // id: 2278
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '562',
            'kanji' => '関ケ原',
            'kana' => 'せきがはら',
            'romaji' => 'Sekigahara',
        ]);
        // id: 2279
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '563',
            'kanji' => '久々野',
            'kana' => 'くぐの',
            'romaji' => 'Kuguno',
        ]);
        // id: 2280
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '563',
            'kanji' => '高山',
            'kana' => 'たかやま',
            'romaji' => 'Takayama',
        ]);
        // id: 2281
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '563',
            'kanji' => '渚',
            'kana' => 'なぎさ',
            'romaji' => 'Nagisa',
        ]);
        // id: 2282
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '563',
            'kanji' => '飛騨一ノ宮',
            'kana' => 'ひだいちのみや',
            'romaji' => 'Hida-Ichinomiya',
        ]);
        // id: 2283
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '563',
            'kanji' => '飛騨国府',
            'kana' => 'ひだこくふ',
            'romaji' => 'Hida-Kokufu',
        ]);
        // id: 2284
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '563',
            'kanji' => '上枝',
            'kana' => 'ほずえ',
            'romaji' => 'Hozue',
        ]);
        // id: 2285
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '564',
            'kanji' => '小泉',
            'kana' => 'こいずみ',
            'romaji' => 'Koizumi',
        ]);
        // id: 2286
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '564',
            'kanji' => '古虎渓',
            'kana' => 'ここけい',
            'romaji' => 'Kokokei',
        ]);
        // id: 2287
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '564',
            'kanji' => '多治見',
            'kana' => 'たじみ',
            'romaji' => 'Tajimi',
        ]);
        // id: 2288
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '564',
            'kanji' => '根本',
            'kana' => 'ねもと',
            'romaji' => 'Nemoto',
        ]);
        // id: 2289
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '564',
            'kanji' => '姫',
            'kana' => 'ひめ',
            'romaji' => 'Hime',
        ]);
        // id: 2290
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '565',
            'kanji' => '垂井',
            'kana' => 'たるい',
            'romaji' => 'Tarui',
        ]);
        // id: 2291
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '566',
            'kanji' => '土岐市',
            'kana' => 'ときし',
            'romaji' => 'Tokishi',
        ]);
        // id: 2292
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '567',
            'kanji' => '落合川',
            'kana' => 'おちあいがわ',
            'romaji' => 'Ochiaigawa',
        ]);
        // id: 2293
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '567',
            'kanji' => '坂下',
            'kana' => 'さかした',
            'romaji' => 'Sakashita',
        ]);
        // id: 2294
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '567',
            'kanji' => '中津川',
            'kana' => 'なかつがわ',
            'romaji' => 'Nakatsugawa',
        ]);
        // id: 2295
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '567',
            'kanji' => '美乃坂本',
            'kana' => 'みのさかもと',
            'romaji' => 'Mino-Sakamoto',
        ]);
        // id: 2296
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '568',
            'kanji' => '岐阜羽島',
            'kana' => 'ぎふはしま',
            'romaji' => 'Gifu-Hashima',
        ]);
        // id: 2297
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '569',
            'kanji' => '打保',
            'kana' => 'うつぼ',
            'romaji' => 'Utsubo',
        ]);
        // id: 2298
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '569',
            'kanji' => '坂上',
            'kana' => 'さかかみ',
            'romaji' => 'Sakakami',
        ]);
        // id: 2299
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '569',
            'kanji' => '杉崎',
            'kana' => 'すぎさき',
            'romaji' => 'Sugisaki',
        ]);
        // id: 2300
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '569',
            'kanji' => '杉原',
            'kana' => 'すぎはら',
            'romaji' => 'Sugihara',
        ]);
        // id: 2301
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '569',
            'kanji' => '角川',
            'kana' => 'つのがわ',
            'romaji' => 'Tsunogawa',
        ]);
        // id: 2302
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '569',
            'kanji' => '飛騨古川',
            'kana' => 'ひだふるかわ',
            'romaji' => 'Hida-Furukawa',
        ]);
        // id: 2303
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '569',
            'kanji' => '飛騨細江',
            'kana' => 'ひだほそえ',
            'romaji' => 'Hida-Hosoe',
        ]);
        // id: 2304
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '570',
            'kanji' => '上麻生',
            'kana' => 'かみあそう',
            'romaji' => 'Kami-Asō',
        ]);
        // id: 2305
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '571',
            'kanji' => '釜戸',
            'kana' => 'かまど',
            'romaji' => 'Kamado',
        ]);
        // id: 2306
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '571',
            'kanji' => '瑞浪',
            'kana' => 'みずなみ',
            'romaji' => 'Mizunami',
        ]);
        // id: 2307
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '572',
            'kanji' => '穂積',
            'kana' => 'ほづみ',
            'romaji' => 'Hozumi',
        ]);
        // id: 2308
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '573',
            'kanji' => '古井',
            'kana' => 'こび',
            'romaji' => 'Kobi',
        ]);
        // id: 2309
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '573',
            'kanji' => '美濃太田',
            'kana' => 'みのおおた',
            'romaji' => 'Mino-Ōta',
        ]);
        // id: 2310
        Station::insert([
            'prefecture_id' => '21',
            'city_id' => '573',
            'kanji' => '美濃川合',
            'kana' => 'みのかわい',
            'romaji' => 'Mino-Kawai',
        ]);
        // id: 2311
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '574',
            'kanji' => '網代',
            'kana' => 'あじろ',
            'romaji' => 'Ajiro',
        ]);
        // id: 2312
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '574',
            'kanji' => '熱海',
            'kana' => 'あたみ',
            'romaji' => 'Atami',
        ]);
        // id: 2313
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '574',
            'kanji' => '伊豆多賀',
            'kana' => 'いずたが',
            'romaji' => 'Izu-Taga',
        ]);
        // id: 2314
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '574',
            'kanji' => '来宮',
            'kana' => 'きのみや',
            'romaji' => 'Kinomiya',
        ]);
        // id: 2315
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '575',
            'kanji' => '伊東',
            'kana' => 'いとう',
            'romaji' => 'Itō',
        ]);
        // id: 2316
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '575',
            'kanji' => '宇佐美',
            'kana' => 'うさみ',
            'romaji' => 'Usami',
        ]);
        // id: 2317
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '576',
            'kanji' => '磐田',
            'kana' => 'いわた',
            'romaji' => 'Iwata',
        ]);
        // id: 2318
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '576',
            'kanji' => '豊田町',
            'kana' => 'とよだちょう',
            'romaji' => 'Toyodachō',
        ]);
        // id: 2319
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '576',
            'kanji' => '御厨',
            'kana' => 'みくりや',
            'romaji' => 'Mikuriya',
        ]);
        // id: 2320
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '577',
            'kanji' => '足柄',
            'kana' => 'あしがら',
            'romaji' => 'Ashigara',
        ]);
        // id: 2321
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '577',
            'kanji' => '駿河小山',
            'kana' => 'するがおやま',
            'romaji' => 'Suruga-Oyama',
        ]);
        // id: 2322
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '578',
            'kanji' => '掛川',
            'kana' => 'かけがわ',
            'romaji' => 'Kakegawa',
        ]);
        // id: 2323
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '579',
            'kanji' => '函南',
            'kana' => 'かんなみ',
            'romaji' => 'Kannami',
        ]);
        // id: 2324
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '580',
            'kanji' => '菊川',
            'kana' => 'きくがわ',
            'romaji' => 'Kikugawa',
        ]);
        // id: 2325
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '581',
            'kanji' => '新居町',
            'kana' => 'あらいまち',
            'romaji' => 'Araimachi',
        ]);
        // id: 2326
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '581',
            'kanji' => '新所原',
            'kana' => 'しんじょはら',
            'romaji' => 'Shinjohara',
        ]);
        // id: 2327
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '581',
            'kanji' => '鷲津',
            'kana' => 'わしづ',
            'romaji' => 'Washizu',
        ]);
        // id: 2328
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '582',
            'kanji' => '御殿場',
            'kana' => 'ごてんば',
            'romaji' => 'Gotemba',
        ]);
        // id: 2329
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '582',
            'kanji' => '富士岡',
            'kana' => 'ふじおか',
            'romaji' => 'Fujioka',
        ]);
        // id: 2330
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '582',
            'kanji' => '南御殿場',
            'kana' => 'みなみごてんば',
            'romaji' => 'Minami-Gotemba',
        ]);
        // id: 2331
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '安倍川',
            'kana' => 'あべかわ',
            'romaji' => 'Abekawa',
        ]);
        // id: 2332
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '興津',
            'kana' => 'おきつ',
            'romaji' => 'Okitsu',
        ]);
        // id: 2333
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '蒲原',
            'kana' => 'かんばら',
            'romaji' => 'Kambara',
        ]);
        // id: 2334
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '草薙',
            'kana' => 'くさなぎ',
            'romaji' => 'Kusanagi',
        ]);
        // id: 2335
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '静岡',
            'kana' => 'しずおか',
            'romaji' => 'Shizuoka',
        ]);
        // id: 2336
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '清水',
            'kana' => 'しみず',
            'romaji' => 'Shimizu',
        ]);
        // id: 2337
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '新蒲原',
            'kana' => 'しんかんばら',
            'romaji' => 'Shin-Kambara',
        ]);
        // id: 2338
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '東静岡',
            'kana' => 'ひがししずおか',
            'romaji' => 'Higashi-Shizuoka',
        ]);
        // id: 2339
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '用宗',
            'kana' => 'もちむね',
            'romaji' => 'Mochimune',
        ]);
        // id: 2340
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '583',
            'kanji' => '由比',
            'kana' => 'ゆい',
            'romaji' => 'Yui',
        ]);
        // id: 2341
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '584',
            'kanji' => '金谷',
            'kana' => 'かなや',
            'romaji' => 'Kanaya',
        ]);
        // id: 2342
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '584',
            'kanji' => '島田',
            'kana' => 'しまだ',
            'romaji' => 'Shimada',
        ]);
        // id: 2343
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '584',
            'kanji' => '六合',
            'kana' => 'ろくごう',
            'romaji' => 'Rokugō',
        ]);
        // id: 2344
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '585',
            'kanji' => '岩波',
            'kana' => 'いわなみ',
            'romaji' => 'Iwanami',
        ]);
        // id: 2345
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '585',
            'kanji' => '裾野',
            'kana' => 'すその',
            'romaji' => 'Susono',
        ]);
        // id: 2346
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '586',
            'kanji' => '下土狩',
            'kana' => 'しもとがり',
            'romaji' => 'Shimo-Togari',
        ]);
        // id: 2347
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '586',
            'kanji' => '長泉なめり',
            'kana' => 'ながいずみなめり',
            'romaji' => 'Nagaizumi-Nameri',
        ]);
        // id: 2348
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '587',
            'kanji' => '大岡',
            'kana' => 'おおおか',
            'romaji' => 'Ōoka',
        ]);
        // id: 2349
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '587',
            'kanji' => '片浜',
            'kana' => 'かたはま',
            'romaji' => 'Katahama',
        ]);
        // id: 2350
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '587',
            'kanji' => '沼津',
            'kana' => 'ぬまづ',
            'romaji' => 'Numazu',
        ]);
        // id: 2351
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '587',
            'kanji' => '原',
            'kana' => 'はら',
            'romaji' => 'Hara',
        ]);
        // id: 2352
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '相月',
            'kana' => 'あいづき',
            'romaji' => 'Aizuki',
        ]);
        // id: 2353
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '出馬',
            'kana' => 'いずんま',
            'romaji' => 'Izumma',
        ]);
        // id: 2354
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '浦川',
            'kana' => 'うらかわ',
            'romaji' => 'Urakawa',
        ]);
        // id: 2355
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '大嵐',
            'kana' => 'おおぞれ',
            'romaji' => 'Ōzore',
        ]);
        // id: 2356
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '上市場',
            'kana' => 'かみいちば',
            'romaji' => 'Kami-Ichiba',
        ]);
        // id: 2357
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '小和田',
            'kana' => 'こわだ',
            'romaji' => 'Kowada',
        ]);
        // id: 2358
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '佐久間',
            'kana' => 'さくま',
            'romaji' => 'Sakuma',
        ]);
        // id: 2359
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '下川合',
            'kana' => 'しもかわい',
            'romaji' => 'Shimo-Kawai',
        ]);
        // id: 2360
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '城西',
            'kana' => 'しろにし',
            'romaji' => 'Shironishi',
        ]);
        // id: 2361
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '高塚',
            'kana' => 'たかつか',
            'romaji' => 'Takatsuka',
        ]);
        // id: 2362
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '中部天竜',
            'kana' => 'ちゅうぶてんりゅう',
            'romaji' => 'Chūbu-Tenryū',
        ]);
        // id: 2363
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '天竜川',
            'kana' => 'てんりゅうがわ',
            'romaji' => 'Tenryūgawa',
        ]);
        // id: 2364
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '浜松',
            'kana' => 'はままつ',
            'romaji' => 'Hamamatsu',
        ]);
        // id: 2365
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '早瀬',
            'kana' => 'はやせ',
            'romaji' => 'Hayase',
        ]);
        // id: 2366
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '弁天島',
            'kana' => 'べんてんじま',
            'romaji' => 'Bentenjima',
        ]);
        // id: 2367
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '舞阪',
            'kana' => 'まいさか',
            'romaji' => 'Maisaka',
        ]);
        // id: 2368
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '水窪',
            'kana' => 'みさくぼ',
            'romaji' => 'Misakubo',
        ]);
        // id: 2369
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '588',
            'kanji' => '向市場',
            'kana' => 'むかいちば',
            'romaji' => 'Mukaichiba',
        ]);
        // id: 2370
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '589',
            'kanji' => '愛野',
            'kana' => 'あいの',
            'romaji' => 'Aino',
        ]);
        // id: 2371
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '589',
            'kanji' => '袋井',
            'kana' => 'ふくろい',
            'romaji' => 'Fukuroi',
        ]);
        // id: 2372
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '590',
            'kanji' => '藤枝',
            'kana' => 'ふじえだ',
            'romaji' => 'Fujieda',
        ]);
        // id: 2373
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '入山瀬',
            'kana' => 'いりやませ',
            'romaji' => 'Iriyamase',
        ]);
        // id: 2374
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '新富士',
            'kana' => 'しんふじ',
            'romaji' => 'Shin-Fuji',
        ]);
        // id: 2375
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '竪堀',
            'kana' => 'たてぼり',
            'romaji' => 'Tatebori',
        ]);
        // id: 2376
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '東田子の浦',
            'kana' => 'ひがしたごのうら',
            'romaji' => 'Higashi-Tagonoura',
        ]);
        // id: 2377
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '富士',
            'kana' => 'ふじ',
            'romaji' => 'Fuji',
        ]);
        // id: 2378
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '富士川',
            'kana' => 'ふじかわ',
            'romaji' => 'Fujikawa',
        ]);
        // id: 2379
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '富士根',
            'kana' => 'ふじね',
            'romaji' => 'Fujine',
        ]);
        // id: 2380
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '柚木',
            'kana' => 'ゆのき',
            'romaji' => 'Yunoki',
        ]);
        // id: 2381
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '591',
            'kanji' => '吉原',
            'kana' => 'よしわら',
            'romaji' => 'Yoshiwara',
        ]);
        // id: 2382
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '592',
            'kanji' => '稲子',
            'kana' => 'いなこ',
            'romaji' => 'Inako',
        ]);
        // id: 2383
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '592',
            'kanji' => '源道寺',
            'kana' => 'げんどうじ',
            'romaji' => 'Gendōji',
        ]);
        // id: 2384
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '592',
            'kanji' => '芝川',
            'kana' => 'しばかわ',
            'romaji' => 'Shibakawa',
        ]);
        // id: 2385
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '592',
            'kanji' => '西富士宮',
            'kana' => 'にしふじのみや',
            'romaji' => 'Nishi-Fujinomiya',
        ]);
        // id: 2386
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '592',
            'kanji' => '沼久保',
            'kana' => 'ぬまくぼ',
            'romaji' => 'Numakubo',
        ]);
        // id: 2387
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '592',
            'kanji' => '富士宮',
            'kana' => 'ふじのみや',
            'romaji' => 'Fujinomiya',
        ]);
        // id: 2388
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '593',
            'kanji' => '三島',
            'kana' => 'みしま',
            'romaji' => 'Mishima',
        ]);
        // id: 2389
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '594',
            'kanji' => '西焼津',
            'kana' => 'にしやいづ',
            'romaji' => 'Nishi-Yaizu',
        ]);
        // id: 2390
        Station::insert([
            'prefecture_id' => '22',
            'city_id' => '594',
            'kanji' => '焼津',
            'kana' => 'やいづ',
            'romaji' => 'Yaizu',
        ]);
        // id: 2391
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '595',
            'kanji' => '永和',
            'kana' => 'えいわ',
            'romaji' => 'Eiwa',
        ]);
        // id: 2392
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '596',
            'kanji' => '安城',
            'kana' => 'あんじょう',
            'romaji' => 'Anjō',
        ]);
        // id: 2393
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '596',
            'kanji' => '三河安城',
            'kana' => 'みかわあんじょう',
            'romaji' => 'Mikawa-Anjō',
        ]);
        // id: 2394
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '597',
            'kanji' => '尾張一宮',
            'kana' => 'おわりいちのみや',
            'romaji' => 'Owari-Ichinomiya',
        ]);
        // id: 2395
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '597',
            'kanji' => '木曽川',
            'kana' => 'きそがわ',
            'romaji' => 'Kisogawa',
        ]);
        // id: 2396
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '598',
            'kanji' => '稲沢',
            'kana' => 'いなざわ',
            'romaji' => 'Inazawa',
        ]);
        // id: 2397
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '598',
            'kanji' => '清洲',
            'kana' => 'きよす',
            'romaji' => 'Kiyosu',
        ]);
        // id: 2398
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '599',
            'kanji' => '大府',
            'kana' => 'おおぶ',
            'romaji' => 'Ōbu',
        ]);
        // id: 2399
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '599',
            'kanji' => '共和',
            'kana' => 'きょうわ',
            'romaji' => 'Kyōwa',
        ]);
        // id: 2400
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '600',
            'kanji' => '岡崎',
            'kana' => 'おかざき',
            'romaji' => 'Okazaki',
        ]);
        // id: 2401
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '600',
            'kanji' => '西岡崎',
            'kana' => 'にしおかざき',
            'romaji' => 'Nishi-Okazaki',
        ]);
        // id: 2402
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '601',
            'kanji' => '春日井',
            'kana' => 'かすがい',
            'romaji' => 'Kasugai',
        ]);
        // id: 2403
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '601',
            'kanji' => '勝川',
            'kana' => 'かちがわ',
            'romaji' => 'Kachigawa',
        ]);
        // id: 2404
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '601',
            'kanji' => '高蔵寺',
            'kana' => 'こうぞうじ',
            'romaji' => 'Kōzōji',
        ]);
        // id: 2405
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '601',
            'kanji' => '定光寺',
            'kana' => 'じょうこうじ',
            'romaji' => 'Jōkōji',
        ]);
        // id: 2406
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '601',
            'kanji' => '神領',
            'kana' => 'じんりょう',
            'romaji' => 'Jinryō',
        ]);
        // id: 2407
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '602',
            'kanji' => '蟹江',
            'kana' => 'かにえ',
            'romaji' => 'kanie',
        ]);
        // id: 2408
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '603',
            'kanji' => '蒲郡',
            'kana' => 'がまごおり',
            'romaji' => 'Gamagōri',
        ]);
        // id: 2409
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '603',
            'kanji' => '三河大塚',
            'kana' => 'みかわおおつか',
            'romaji' => 'Mikawa-Ōtsuka',
        ]);
        // id: 2410
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '603',
            'kanji' => '三河塩津',
            'kana' => 'みかわしおつ',
            'romaji' => 'Mikawa-Shiotsu',
        ]);
        // id: 2411
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '603',
            'kanji' => '三河三谷',
            'kana' => 'みかわみや',
            'romaji' => 'Mikawa-Miya',
        ]);
        // id: 2412
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '604',
            'kanji' => '逢妻',
            'kana' => 'あいづま',
            'romaji' => 'Aizuma',
        ]);
        // id: 2413
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '604',
            'kanji' => '刈谷',
            'kana' => 'かりや',
            'romaji' => 'kariya',
        ]);
        // id: 2414
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '604',
            'kanji' => '野田新町',
            'kana' => 'のだしんまち',
            'romaji' => 'Noda-Shimmachi',
        ]);
        // id: 2415
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '604',
            'kanji' => '東刈谷',
            'kana' => 'ひがしかりや',
            'romaji' => 'Higashi-Kariya',
        ]);
        // id: 2416
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '605',
            'kanji' => '枇杷島',
            'kana' => 'びわじま',
            'romaji' => 'Biwajima',
        ]);
        // id: 2417
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '606',
            'kanji' => '相見',
            'kana' => 'あいみ',
            'romaji' => 'Aimi',
        ]);
        // id: 2418
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '606',
            'kanji' => '幸田',
            'kana' => 'こうだ',
            'romaji' => 'Kōda',
        ]);
        // id: 2419
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '606',
            'kanji' => '三ケ根',
            'kana' => 'さんがね',
            'romaji' => 'Sangane',
        ]);
        // id: 2420
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '池場',
            'kana' => 'いけば',
            'romaji' => 'Ikeba',
        ]);
        // id: 2421
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '大海',
            'kana' => 'おおみ',
            'romaji' => 'Ōmi',
        ]);
        // id: 2422
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '柿平',
            'kana' => 'かきだいら',
            'romaji' => 'Kakidaira',
        ]);
        // id: 2423
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '新城',
            'kana' => 'しんしろ',
            'romaji' => 'Shinshiro',
        ]);
        // id: 2424
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '茶臼山',
            'kana' => 'ちゃうすやま',
            'romaji' => 'Chausuyama',
        ]);
        // id: 2425
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '鳥居',
            'kana' => 'とりい',
            'romaji' => 'Torii',
        ]);
        // id: 2426
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '長篠城',
            'kana' => 'ながしのじょう',
            'romaji' => 'Nagashinojō',
        ]);
        // id: 2427
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '野田城',
            'kana' => 'のだじょう',
            'romaji' => 'Nodajō',
        ]);
        // id: 2428
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '東新町',
            'kana' => 'ひがししんまち',
            'romaji' => 'Higashi-Shimmachi',
        ]);
        // id: 2429
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '本長篠',
            'kana' => 'ほんながしの',
            'romaji' => 'Hon-Nagashino',
        ]);
        // id: 2430
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '三河大野',
            'kana' => 'みかわおおの',
            'romaji' => 'Mikawa-Ōno',
        ]);
        // id: 2431
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '三河川合',
            'kana' => 'みかわかわい',
            'romaji' => 'Mikawa-Kawai',
        ]);
        // id: 2432
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '三河東郷',
            'kana' => 'みかわとうごう',
            'romaji' => 'Mikawa-Tōgō',
        ]);
        // id: 2433
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '三河槙原',
            'kana' => 'みかわまきはら',
            'romaji' => 'Mikawa-Makihara',
        ]);
        // id: 2434
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '607',
            'kanji' => '湯谷温泉',
            'kana' => 'ゆやおんせん',
            'romaji' => 'Yuya-Onsen',
        ]);
        // id: 2435
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '608',
            'kanji' => '武豊',
            'kana' => 'たけとよ',
            'romaji' => 'Taketoyo',
        ]);
        // id: 2436
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '609',
            'kanji' => '東栄',
            'kana' => 'とうえい',
            'romaji' => 'Tōei',
        ]);
        // id: 2437
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '愛知御津',
            'kana' => 'あいちみと',
            'romaji' => 'Aichi-Mito',
        ]);
        // id: 2438
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '牛久保',
            'kana' => 'うしくぼ',
            'romaji' => 'Ushikubo',
        ]);
        // id: 2439
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '江島',
            'kana' => 'えじま',
            'romaji' => 'Ejima',
        ]);
        // id: 2440
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '小坂井',
            'kana' => 'こざかい',
            'romaji' => 'Kozakai',
        ]);
        // id: 2441
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '東上',
            'kana' => 'とうじょう',
            'romaji' => 'Tōjō',
        ]);
        // id: 2442
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '豊川',
            'kana' => 'とよかわ',
            'romaji' => 'Toyokawa',
        ]);
        // id: 2443
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '長山',
            'kana' => 'ながやま',
            'romaji' => 'Nagayama',
        ]);
        // id: 2444
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '西小坂井',
            'kana' => 'にしこざかい',
            'romaji' => 'Nishi-Kozakai',
        ]);
        // id: 2445
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '610',
            'kanji' => '三河一宮',
            'kana' => 'みかわいちのみや',
            'romaji' => 'Mikawa-Ichinomiya',
        ]);
        // id: 2446
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '611',
            'kanji' => '下地',
            'kana' => 'しもじ',
            'romaji' => 'Shimoji',
        ]);
        // id: 2447
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '611',
            'kanji' => '豊橋',
            'kana' => 'とよはし',
            'romaji' => 'Toyohashi',
        ]);
        // id: 2448
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '611',
            'kanji' => '二川',
            'kana' => 'ふたがわ',
            'romaji' => 'Futagawa',
        ]);
        // id: 2449
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '611',
            'kanji' => '船町',
            'kana' => 'ふなまち',
            'romaji' => 'Funamachi',
        ]);
        // id: 2450
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '熱田',
            'kana' => 'あつた',
            'romaji' => 'Atsuta',
        ]);
        // id: 2451
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '大曽根',
            'kana' => 'おおぞね',
            'romaji' => 'Ōzone',
        ]);
        // id: 2452
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '大高',
            'kana' => 'おおだか',
            'romaji' => 'Ōdaka',
        ]);
        // id: 2453
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '尾頭橋',
            'kana' => 'おとうばし',
            'romaji' => 'Otōbashi',
        ]);
        // id: 2454
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '笠寺',
            'kana' => 'かさでら',
            'romaji' => 'Kasadera',
        ]);
        // id: 2455
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '金山',
            'kana' => 'かなやま',
            'romaji' => 'Kanayama',
        ]);
        // id: 2456
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '新守山',
            'kana' => 'しんもりやま',
            'romaji' => 'Shin-Moriyama',
        ]);
        // id: 2457
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '千種',
            'kana' => 'ちくさ',
            'romaji' => 'Chikusa',
        ]);
        // id: 2458
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '鶴舞',
            'kana' => 'つるまい',
            'romaji' => 'Tsurumai',
        ]);
        // id: 2459
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '名古屋',
            'kana' => 'なごや',
            'romaji' => 'Nagoya',
        ]);
        // id: 2460
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '八田',
            'kana' => 'はった',
            'romaji' => 'Hatta',
        ]);
        // id: 2461
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '春田',
            'kana' => 'はるた',
            'romaji' => 'Haruta',
        ]);
        // id: 2462
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '612',
            'kanji' => '南大高',
            'kana' => 'みなみおおだか',
            'romaji' => 'Minami-Ōdaka',
        ]);
        // id: 2463
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '613',
            'kanji' => '乙川',
            'kana' => 'おっかわ',
            'romaji' => 'Okkawa',
        ]);
        // id: 2464
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '613',
            'kanji' => '亀崎',
            'kana' => 'かめざき',
            'romaji' => 'Kamezaki',
        ]);
        // id: 2465
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '613',
            'kanji' => '半田',
            'kana' => 'はんだ',
            'romaji' => 'Handa',
        ]);
        // id: 2466
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '613',
            'kanji' => '東成岩',
            'kana' => 'ひがしならわ',
            'romaji' => 'Higashi-Narawa',
        ]);
        // id: 2467
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '614',
            'kanji' => '石浜',
            'kana' => 'いしはま',
            'romaji' => 'Ishihama',
        ]);
        // id: 2468
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '614',
            'kanji' => '緒川',
            'kana' => 'おがわ',
            'romaji' => 'Ogawa',
        ]);
        // id: 2469
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '614',
            'kanji' => '尾張森岡',
            'kana' => 'おわりもりおか',
            'romaji' => 'Owari-Morioka',
        ]);
        // id: 2470
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '614',
            'kanji' => '東浦',
            'kana' => 'ひがしうら',
            'romaji' => 'Higashiura',
        ]);
        // id: 2471
        Station::insert([
            'prefecture_id' => '23',
            'city_id' => '615',
            'kanji' => '弥富',
            'kana' => 'やとみ',
            'romaji' => 'Yatomi',
        ]);
        // id: 2472
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '616',
            'kanji' => '朝日',
            'kana' => 'あさひ',
            'romaji' => 'Asahi',
        ]);
        // id: 2473
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '617',
            'kanji' => '伊賀上野',
            'kana' => 'いがうえの',
            'romaji' => 'Iga-Ueno',
        ]);
        // id: 2474
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '617',
            'kanji' => '佐那具',
            'kana' => 'さなぐ',
            'romaji' => 'Sanagu',
        ]);
        // id: 2475
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '617',
            'kanji' => '島ケ原',
            'kana' => 'しまがはら',
            'romaji' => 'Shimagahara',
        ]);
        // id: 2476
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '617',
            'kanji' => '新堂',
            'kana' => 'しんどう',
            'romaji' => 'Shindō',
        ]);
        // id: 2477
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '617',
            'kanji' => '柘植',
            'kana' => 'つげ',
            'romaji' => 'Tsuge',
        ]);
        // id: 2478
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '618',
            'kanji' => '五十鈴ケ丘',
            'kana' => 'いすずがおか',
            'romaji' => 'Isuzugaoka',
        ]);
        // id: 2479
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '618',
            'kanji' => '伊勢市',
            'kana' => 'いせし',
            'romaji' => 'Iseshi',
        ]);
        // id: 2480
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '618',
            'kanji' => '二見浦',
            'kana' => 'ふたみのうら',
            'romaji' => 'Futaminoura',
        ]);
        // id: 2481
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '618',
            'kanji' => '松下',
            'kana' => 'まつした',
            'romaji' => 'Matsushita',
        ]);
        // id: 2482
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '618',
            'kanji' => '宮川',
            'kana' => 'みやがわ',
            'romaji' => 'Miyagawa',
        ]);
        // id: 2483
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '618',
            'kanji' => '山田上口',
            'kana' => 'やまだかみぐち',
            'romaji' => 'Yamada-Kamiguchi',
        ]);
        // id: 2484
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '619',
            'kanji' => '川添',
            'kana' => 'かわぞえ',
            'romaji' => 'Kawazoe',
        ]);
        // id: 2485
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '619',
            'kanji' => '滝原',
            'kana' => 'たきはら',
            'romaji' => 'Takihara',
        ]);
        // id: 2486
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '619',
            'kanji' => '栃原',
            'kana' => 'とちはら',
            'romaji' => 'Tochihara',
        ]);
        // id: 2487
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '619',
            'kanji' => '三瀬谷',
            'kana' => 'みせだに',
            'romaji' => 'Misedani',
        ]);
        // id: 2488
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '620',
            'kanji' => '大曽根浦',
            'kana' => 'おおそねうら',
            'romaji' => 'Ōsoneura',
        ]);
        // id: 2489
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '620',
            'kanji' => '尾鷲',
            'kana' => 'おわせ',
            'romaji' => 'Owase',
        ]);
        // id: 2490
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '620',
            'kanji' => '賀田',
            'kana' => 'かた',
            'romaji' => 'Kata',
        ]);
        // id: 2491
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '620',
            'kanji' => '九鬼',
            'kana' => 'くき',
            'romaji' => 'Kuki',
        ]);
        // id: 2492
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '620',
            'kanji' => '三木里',
            'kana' => 'みきさと',
            'romaji' => 'Mikisato',
        ]);
        // id: 2493
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '621',
            'kanji' => '井田川',
            'kana' => 'いだがわ',
            'romaji' => 'Idagawa',
        ]);
        // id: 2494
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '621',
            'kanji' => '加太',
            'kana' => 'かぶと',
            'romaji' => 'Kabuto',
        ]);
        // id: 2495
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '621',
            'kanji' => '亀山',
            'kana' => 'かめやま',
            'romaji' => 'Kameyama',
        ]);
        // id: 2496
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '621',
            'kanji' => '下庄',
            'kana' => 'しものしょう',
            'romaji' => 'Shimonoshō',
        ]);
        // id: 2497
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '621',
            'kanji' => '関',
            'kana' => 'せき',
            'romaji' => 'Seki',
        ]);
        // id: 2498
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '622',
            'kanji' => '鵜殿',
            'kana' => 'うどの',
            'romaji' => 'Udono',
        ]);
        // id: 2499
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '622',
            'kanji' => '紀伊井田',
            'kana' => 'きいいだ',
            'romaji' => 'Kii-Ida',
        ]);
        // id: 2500
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '623',
            'kanji' => '相賀',
            'kana' => 'あいが',
            'romaji' => 'Aiga',
        ]);
        // id: 2501
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '623',
            'kanji' => '紀伊長島',
            'kana' => 'きいながしま',
            'romaji' => 'Kii-Nagashima',
        ]);
        // id: 2502
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '623',
            'kanji' => '船津',
            'kana' => 'ふなつ',
            'romaji' => 'Funatsu',
        ]);
        // id: 2503
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '623',
            'kanji' => '三野瀬',
            'kana' => 'みのせ',
            'romaji' => 'Minose',
        ]);
        // id: 2504
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '624',
            'kanji' => '新鹿',
            'kana' => 'あたしか',
            'romaji' => 'Atashika',
        ]);
        // id: 2505
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '624',
            'kanji' => '有井',
            'kana' => 'ありい',
            'romaji' => 'Arii',
        ]);
        // id: 2506
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '624',
            'kanji' => '大泊',
            'kana' => 'おおどまり',
            'romaji' => 'Ōdomari',
        ]);
        // id: 2507
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '624',
            'kanji' => '熊野市',
            'kana' => 'くまのし',
            'romaji' => 'Kumanoshi',
        ]);
        // id: 2508
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '624',
            'kanji' => '二木島',
            'kana' => 'にぎしま',
            'romaji' => 'Nigishima',
        ]);
        // id: 2509
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '624',
            'kanji' => '波田須',
            'kana' => 'はだす',
            'romaji' => 'Hadasu',
        ]);
        // id: 2510
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '625',
            'kanji' => '桑名',
            'kana' => 'くわな',
            'romaji' => 'Kuwana',
        ]);
        // id: 2511
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '625',
            'kanji' => '長島',
            'kana' => 'ながしま',
            'romaji' => 'Nagashima',
        ]);
        // id: 2512
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '626',
            'kanji' => '加佐登',
            'kana' => 'かさど',
            'romaji' => 'Kasado',
        ]);
        // id: 2513
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '626',
            'kanji' => '河曲',
            'kana' => 'かわの',
            'romaji' => 'Kawano',
        ]);
        // id: 2514
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '627',
            'kanji' => '阿曽',
            'kana' => 'あそ',
            'romaji' => 'Aso',
        ]);
        // id: 2515
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '627',
            'kanji' => '伊勢柏崎',
            'kana' => 'いせかしわざき',
            'romaji' => 'Ise-Kashiwazaki',
        ]);
        // id: 2516
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '627',
            'kanji' => '梅ケ谷',
            'kana' => 'うめがたに',
            'romaji' => 'Umegatani',
        ]);
        // id: 2517
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '627',
            'kanji' => '大内山',
            'kana' => 'おおうちやま',
            'romaji' => 'Ōuchiyama',
        ]);
        // id: 2518
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '628',
            'kanji' => '相可',
            'kana' => 'おうか',
            'romaji' => 'Ōka',
        ]);
        // id: 2519
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '628',
            'kanji' => '佐奈',
            'kana' => 'さな',
            'romaji' => 'Sana',
        ]);
        // id: 2520
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '628',
            'kanji' => '多気',
            'kana' => 'たき',
            'romaji' => 'Taki',
        ]);
        // id: 2521
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '628',
            'kanji' => '外城田',
            'kana' => 'ときだ',
            'romaji' => 'Tokida',
        ]);
        // id: 2522
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '629',
            'kanji' => '田丸',
            'kana' => 'たまる',
            'romaji' => 'Tamaru',
        ]);
        // id: 2523
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '阿漕',
            'kana' => 'あこぎ',
            'romaji' => 'Akogi',
        ]);
        // id: 2524
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '家城',
            'kana' => 'いえき',
            'romaji' => 'Ieki',
        ]);
        // id: 2525
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '一身田',
            'kana' => 'いしんでん',
            'romaji' => 'Ishinden',
        ]);
        // id: 2526
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '伊勢大井',
            'kana' => 'いせおおい',
            'romaji' => 'Ise-Ōi',
        ]);
        // id: 2527
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '伊勢奥津',
            'kana' => 'いせおきつ',
            'romaji' => 'Ise-Okitsu',
        ]);
        // id: 2528
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '伊勢鎌倉',
            'kana' => 'いせかまくら',
            'romaji' => 'Ise-Kamakura',
        ]);
        // id: 2529
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '伊勢川口',
            'kana' => 'いせかわぐち',
            'romaji' => 'Ise-Kawaguchi',
        ]);
        // id: 2530
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '井関',
            'kana' => 'いせぎ',
            'romaji' => 'Isegi',
        ]);
        // id: 2531
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '伊勢竹原',
            'kana' => 'いせたけはら',
            'romaji' => 'Ise-Takehara',
        ]);
        // id: 2532
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '伊勢八太',
            'kana' => 'いせはた',
            'romaji' => 'Ise-Hata',
        ]);
        // id: 2533
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '伊勢八知',
            'kana' => 'いせやち',
            'romaji' => 'Ise-Yachi',
        ]);
        // id: 2534
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '一志',
            'kana' => 'いちし',
            'romaji' => 'Ichishi',
        ]);
        // id: 2535
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '関ノ宮',
            'kana' => 'せきのみや',
            'romaji' => 'Sekinomiya',
        ]);
        // id: 2536
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '高茶屋',
            'kana' => 'たかちゃや',
            'romaji' => 'Takachaya',
        ]);
        // id: 2537
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '津',
            'kana' => 'つ',
            'romaji' => 'Tsu',
        ]);
        // id: 2538
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '630',
            'kanji' => '比津',
            'kana' => 'ひつ',
            'romaji' => 'Hitsu',
        ]);
        // id: 2539
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '631',
            'kanji' => '鳥羽',
            'kana' => 'とば',
            'romaji' => 'Toba',
        ]);
        // id: 2540
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '632',
            'kanji' => '上ノ庄',
            'kana' => 'かみのしょう',
            'romaji' => 'Kaminoshō',
        ]);
        // id: 2541
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '632',
            'kanji' => '権現前',
            'kana' => 'ごんげんまえ',
            'romaji' => 'Gongemmae',
        ]);
        // id: 2542
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '632',
            'kanji' => '徳和',
            'kana' => 'とくわ',
            'romaji' => 'Tokuwa',
        ]);
        // id: 2543
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '632',
            'kanji' => '松阪',
            'kana' => 'まつさか',
            'romaji' => 'Matsusaka',
        ]);
        // id: 2544
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '632',
            'kanji' => '六軒',
            'kana' => 'ろっけん',
            'romaji' => 'Rokken',
        ]);
        // id: 2545
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '633',
            'kanji' => '阿田和',
            'kana' => 'あたわ',
            'romaji' => 'Atawa',
        ]);
        // id: 2546
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '633',
            'kanji' => '紀伊市木',
            'kana' => 'きいいちぎ',
            'romaji' => 'Kii-Ichigi',
        ]);
        // id: 2547
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '633',
            'kanji' => '神志山',
            'kana' => 'こうしやま',
            'romaji' => 'Kōshiyama',
        ]);
        // id: 2548
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '634',
            'kanji' => '河原田',
            'kana' => 'かわらだ',
            'romaji' => 'Kawarada',
        ]);
        // id: 2549
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '634',
            'kanji' => '富田',
            'kana' => 'とみだ',
            'romaji' => 'Tomida',
        ]);
        // id: 2550
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '634',
            'kanji' => '富田浜',
            'kana' => 'とみだはま',
            'romaji' => 'Tomidahama',
        ]);
        // id: 2551
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '634',
            'kanji' => '南四日市',
            'kana' => 'みなみよっかいち',
            'romaji' => 'Minami-Yokkaichi',
        ]);
        // id: 2552
        Station::insert([
            'prefecture_id' => '24',
            'city_id' => '634',
            'kanji' => '四日市',
            'kana' => 'よっかいち',
            'romaji' => 'Yokkaichi',
        ]);
        // id: 2553
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '635',
            'kanji' => '安土',
            'kana' => 'あづち',
            'romaji' => 'Azuchi',
        ]);
        // id: 2554
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '635',
            'kanji' => '近江八幡',
            'kana' => 'おうみはちまん',
            'romaji' => 'Ōmi-Hachiman',
        ]);
        // id: 2555
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '635',
            'kanji' => '篠原',
            'kana' => 'しのはら',
            'romaji' => 'Shinohara',
        ]);
        // id: 2556
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '石山',
            'kana' => 'いしやま',
            'romaji' => 'Ishiyama',
        ]);
        // id: 2557
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '近江舞子',
            'kana' => 'おうみまいこ',
            'romaji' => 'Ōmi-Maiko',
        ]);
        // id: 2558
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '大津',
            'kana' => 'おおつ',
            'romaji' => 'Ōtsu',
        ]);
        // id: 2559
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '大津京',
            'kana' => 'おおつきょう',
            'romaji' => 'Ōtsukyō',
        ]);
        // id: 2560
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => 'おごと温泉',
            'kana' => 'おごとおんせん',
            'romaji' => 'Ogotoonsen',
        ]);
        // id: 2561
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '小野',
            'kana' => 'おの',
            'romaji' => 'Ono',
        ]);
        // id: 2562
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '堅田',
            'kana' => 'かたた',
            'romaji' => 'Katata',
        ]);
        // id: 2563
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '唐崎',
            'kana' => 'からさき',
            'romaji' => 'Karasaki',
        ]);
        // id: 2564
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '北小松',
            'kana' => 'きたこまつ',
            'romaji' => 'Kitakomatsu',
        ]);
        // id: 2565
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '志賀',
            'kana' => 'しが',
            'romaji' => 'Shiga',
        ]);
        // id: 2566
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '膳所',
            'kana' => 'ぜぜ',
            'romaji' => 'Zeze',
        ]);
        // id: 2567
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '瀬田',
            'kana' => 'せた',
            'romaji' => 'Seta',
        ]);
        // id: 2568
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '比叡山坂本',
            'kana' => 'ひえいざんさかもと',
            'romaji' => 'Hieizan-Sakamoto',
        ]);
        // id: 2569
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '比良',
            'kana' => 'ひら',
            'romaji' => 'Hira',
        ]);
        // id: 2570
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '蓬莱',
            'kana' => 'ほうらい',
            'romaji' => 'Hōrai',
        ]);
        // id: 2571
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '636',
            'kanji' => '和邇',
            'kana' => 'わに',
            'romaji' => 'Wani',
        ]);
        // id: 2572
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '637',
            'kanji' => '草津',
            'kana' => 'くさつ',
            'romaji' => 'Kusatsu',
        ]);
        // id: 2573
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '637',
            'kanji' => '南草津',
            'kana' => 'みなみくさつ',
            'romaji' => 'Minami-Kusatsu',
        ]);
        // id: 2574
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '638',
            'kanji' => '油日',
            'kana' => 'あぶらひ',
            'romaji' => 'Aburahi',
        ]);
        // id: 2575
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '638',
            'kanji' => '貴生川',
            'kana' => 'きぶかわ',
            'romaji' => 'Kibukawa',
        ]);
        // id: 2576
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '638',
            'kanji' => '甲賀',
            'kana' => 'こうか',
            'romaji' => 'Kōka',
        ]);
        // id: 2577
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '638',
            'kanji' => '甲南',
            'kana' => 'こうなん',
            'romaji' => 'Kōnan',
        ]);
        // id: 2578
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '638',
            'kanji' => '寺庄',
            'kana' => 'てらしょう',
            'romaji' => 'Terashō',
        ]);
        // id: 2579
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '639',
            'kanji' => '石部',
            'kana' => 'いしべ',
            'romaji' => 'Ishibe',
        ]);
        // id: 2580
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '639',
            'kanji' => '甲西',
            'kana' => 'こうせい',
            'romaji' => 'Kōsei',
        ]);
        // id: 2581
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '639',
            'kanji' => '三雲',
            'kana' => 'みくも',
            'romaji' => 'Mikumo',
        ]);
        // id: 2582
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '640',
            'kanji' => '安曇川',
            'kana' => 'あどがわ',
            'romaji' => 'Adogawa',
        ]);
        // id: 2583
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '640',
            'kanji' => '近江今津',
            'kana' => 'おうみいまづ',
            'romaji' => 'Ōmi-Imazu',
        ]);
        // id: 2584
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '640',
            'kanji' => '近江高島',
            'kana' => 'おうみたかしま',
            'romaji' => 'Ōmi-Takashima',
        ]);
        // id: 2585
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '640',
            'kanji' => '近江中庄',
            'kana' => 'おうみなかしょう',
            'romaji' => 'Ōmi-Nakashō',
        ]);
        // id: 2586
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '640',
            'kanji' => '新旭',
            'kana' => 'しんあさひ',
            'romaji' => 'Shin-asahi',
        ]);
        // id: 2587
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '640',
            'kanji' => 'マキノ',
            'kana' => 'まきの',
            'romaji' => 'Makino',
        ]);
        // id: 2588
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '近江塩津',
            'kana' => 'おうみしおつ',
            'romaji' => 'Ōmi-Shiotsu',
        ]);
        // id: 2589
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '河毛',
            'kana' => 'かわけ',
            'romaji' => 'Kawake',
        ]);
        // id: 2590
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '木ノ本',
            'kana' => 'きのもと',
            'romaji' => 'Kinomoto',
        ]);
        // id: 2591
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '高月',
            'kana' => 'たかつき',
            'romaji' => 'Takatsuki',
        ]);
        // id: 2592
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '田村',
            'kana' => 'たむら',
            'romaji' => 'Tamura',
        ]);
        // id: 2593
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '虎姫',
            'kana' => 'とらひめ',
            'romaji' => 'Torahime',
        ]);
        // id: 2594
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '長浜',
            'kana' => 'ながはま',
            'romaji' => 'Nagahama',
        ]);
        // id: 2595
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '永原',
            'kana' => 'ながはら',
            'romaji' => 'Nagahara',
        ]);
        // id: 2596
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '641',
            'kanji' => '余呉',
            'kana' => 'よご',
            'romaji' => 'Yogo',
        ]);
        // id: 2597
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '642',
            'kanji' => '能登川',
            'kana' => 'のとがわ',
            'romaji' => 'Notogawa',
        ]);
        // id: 2598
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '643',
            'kanji' => '稲枝',
            'kana' => 'いなえ',
            'romaji' => 'Inae',
        ]);
        // id: 2599
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '643',
            'kanji' => '河瀬',
            'kana' => 'かわせ',
            'romaji' => 'Kawase',
        ]);
        // id: 2600
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '643',
            'kanji' => '彦根',
            'kana' => 'ひこね',
            'romaji' => 'Hikone',
        ]);
        // id: 2601
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '643',
            'kanji' => '南彦根',
            'kana' => 'みなみひこね',
            'romaji' => 'Minami-Hikone',
        ]);
        // id: 2602
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '644',
            'kanji' => '近江長岡',
            'kana' => 'おうみながおか',
            'romaji' => 'Ōmi-Nagaoka',
        ]);
        // id: 2603
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '644',
            'kanji' => '柏原',
            'kana' => 'かしわばら',
            'romaji' => 'Kashiwabara',
        ]);
        // id: 2604
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '644',
            'kanji' => '坂田',
            'kana' => 'さかた',
            'romaji' => 'Sakata',
        ]);
        // id: 2605
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '644',
            'kanji' => '醒ケ井',
            'kana' => 'さめがい',
            'romaji' => 'Samegai',
        ]);
        // id: 2606
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '644',
            'kanji' => '米原',
            'kana' => 'まいばら',
            'romaji' => 'Maibara',
        ]);
        // id: 2607
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '645',
            'kanji' => '守山',
            'kana' => 'もりやま',
            'romaji' => 'Moriyama',
        ]);
        // id: 2608
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '646',
            'kanji' => '野洲',
            'kana' => 'やす',
            'romaji' => 'Yasu',
        ]);
        // id: 2609
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '647',
            'kanji' => '手原',
            'kana' => 'てはら',
            'romaji' => 'Tehara',
        ]);
        // id: 2610
        Station::insert([
            'prefecture_id' => '25',
            'city_id' => '647',
            'kanji' => '栗東',
            'kana' => 'りっとう',
            'romaji' => 'Rittō',
        ]);
        // id: 2611
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '648',
            'kanji' => '綾部',
            'kana' => 'あやべ',
            'romaji' => 'Ayabe',
        ]);
        // id: 2612
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '648',
            'kanji' => '梅迫',
            'kana' => 'うめざこ',
            'romaji' => 'Umezako',
        ]);
        // id: 2613
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '648',
            'kanji' => '高津',
            'kana' => 'たかつ',
            'romaji' => 'Takatsu',
        ]);
        // id: 2614
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '648',
            'kanji' => '淵垣',
            'kana' => 'ふちがき',
            'romaji' => 'Fuchigaki',
        ]);
        // id: 2615
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '648',
            'kanji' => '山家',
            'kana' => 'やまが',
            'romaji' => 'Yamaga',
        ]);
        // id: 2616
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '649',
            'kanji' => '玉水',
            'kana' => 'たまみず',
            'romaji' => 'Tamamizu',
        ]);
        // id: 2617
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '649',
            'kanji' => '山城多賀',
            'kana' => 'やましろたが',
            'romaji' => 'Yamashiro-Taga',
        ]);
        // id: 2618
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '650',
            'kanji' => '宇治',
            'kana' => 'うじ',
            'romaji' => 'Uji',
        ]);
        // id: 2619
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '650',
            'kanji' => '黄檗',
            'kana' => 'おうばく',
            'romaji' => 'Ōbaku',
        ]);
        // id: 2620
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '650',
            'kanji' => '木幡',
            'kana' => 'こはた',
            'romaji' => 'Kohata',
        ]);
        // id: 2621
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '650',
            'kanji' => 'JR小倉',
            'kana' => 'じぇいあーるおぐら',
            'romaji' => 'JR-Ogura',
        ]);
        // id: 2622
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '650',
            'kanji' => '新田',
            'kana' => 'しんでん',
            'romaji' => 'Shinden',
        ]);
        // id: 2623
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '650',
            'kanji' => '六地蔵',
            'kana' => 'ろくじぞう',
            'romaji' => 'Rokujizō',
        ]);
        // id: 2624
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '651',
            'kanji' => '山崎',
            'kana' => 'やまざき',
            'romaji' => 'Yamazaki',
        ]);
        // id: 2625
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '652',
            'kanji' => '笠置',
            'kana' => 'かさぎ',
            'romaji' => 'Kasagi',
        ]);
        // id: 2626
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '653',
            'kanji' => '馬堀',
            'kana' => 'うまほり',
            'romaji' => 'Umahori',
        ]);
        // id: 2627
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '653',
            'kanji' => '亀岡',
            'kana' => 'かめおか',
            'romaji' => 'Kameoka',
        ]);
        // id: 2628
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '653',
            'kanji' => '千代川',
            'kana' => 'ちよかわ',
            'romaji' => 'Chiyokawa',
        ]);
        // id: 2629
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '653',
            'kanji' => '並河',
            'kana' => 'なみかわ',
            'romaji' => 'Namikawa',
        ]);
        // id: 2630
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '654',
            'kanji' => '上狛',
            'kana' => 'かみこま',
            'romaji' => 'Kamikoma',
        ]);
        // id: 2631
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '654',
            'kanji' => '加茂',
            'kana' => 'かも',
            'romaji' => 'Kamo',
        ]);
        // id: 2632
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '654',
            'kanji' => '木津',
            'kana' => 'きづ',
            'romaji' => 'Kizu',
        ]);
        // id: 2633
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '654',
            'kanji' => '棚倉',
            'kana' => 'たなくら',
            'romaji' => 'Tanakura',
        ]);
        // id: 2634
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '654',
            'kanji' => '西木津',
            'kana' => 'にしきづ',
            'romaji' => 'Nishi-Kizu',
        ]);
        // id: 2635
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '655',
            'kanji' => '大住',
            'kana' => 'おおすみ',
            'romaji' => 'Ōsumi',
        ]);
        // id: 2636
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '655',
            'kanji' => '京田辺',
            'kana' => 'きょうたなべ',
            'romaji' => 'Kyōtanabe',
        ]);
        // id: 2637
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '655',
            'kanji' => 'JR三山木',
            'kana' => 'じぇいあーるみやまき',
            'romaji' => 'JR-Miyamaki',
        ]);
        // id: 2638
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '655',
            'kanji' => '同志社前',
            'kana' => 'どうししゃまえ',
            'romaji' => 'Dōshishamae',
        ]);
        // id: 2639
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '655',
            'kanji' => '松井山手',
            'kana' => 'まついやまて',
            'romaji' => 'Matsuiyamate',
        ]);
        // id: 2640
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '656',
            'kanji' => '安栖里',
            'kana' => 'あせり',
            'romaji' => 'Aseri',
        ]);
        // id: 2641
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '656',
            'kanji' => '下山',
            'kana' => 'しもやま',
            'romaji' => 'Shimoyama',
        ]);
        // id: 2642
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '656',
            'kanji' => '立木',
            'kana' => 'たちき',
            'romaji' => 'Tachiki',
        ]);
        // id: 2643
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '656',
            'kanji' => '和知',
            'kana' => 'わち',
            'romaji' => 'Wachi',
        ]);
        // id: 2644
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '稲荷',
            'kana' => 'いなり',
            'romaji' => 'Inari',
        ]);
        // id: 2645
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '太秦',
            'kana' => 'うずまさ',
            'romaji' => 'Uzumasa',
        ]);
        // id: 2646
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '梅小路京都西',
            'kana' => 'うめこうじきょうとにし',
            'romaji' => 'Umekōji-Kyōtonishi',
        ]);
        // id: 2647
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '円町',
            'kana' => 'えんまち',
            'romaji' => 'Emmachi',
        ]);
        // id: 2648
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '桂川',
            'kana' => 'かつらがわ',
            'romaji' => 'Katsuragawa',
        ]);
        // id: 2649
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '京都',
            'kana' => 'きょうと',
            'romaji' => 'Kyōto',
        ]);
        // id: 2650
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '嵯峨嵐山',
            'kana' => 'さがあらしやま',
            'romaji' => 'Saga-Arashiyama',
        ]);
        // id: 2651
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => 'JR藤森',
            'kana' => 'じぇいあーるふじのもり',
            'romaji' => 'JR-Fujinomori',
        ]);
        // id: 2652
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '丹波口',
            'kana' => 'たんばぐち',
            'romaji' => 'Tambaguchi',
        ]);
        // id: 2653
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '東福寺',
            'kana' => 'とうふくじ',
            'romaji' => 'Tōfukuji',
        ]);
        // id: 2654
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '西大路',
            'kana' => 'にしおおじ',
            'romaji' => 'Nishiōji',
        ]);
        // id: 2655
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '二条',
            'kana' => 'にじょう',
            'romaji' => 'Nijō',
        ]);
        // id: 2656
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '花園',
            'kana' => 'はなぞの',
            'romaji' => 'Hanazono',
        ]);
        // id: 2657
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '保津峡',
            'kana' => 'ほづきょう',
            'romaji' => 'Hozukyō',
        ]);
        // id: 2658
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '桃山',
            'kana' => 'ももやま',
            'romaji' => 'Momoyama',
        ]);
        // id: 2659
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '657',
            'kanji' => '山科',
            'kana' => 'やましな',
            'romaji' => 'Yamashina',
        ]);
        // id: 2660
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '658',
            'kanji' => '城陽',
            'kana' => 'じょうよう',
            'romaji' => 'Jōyō',
        ]);
        // id: 2661
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '658',
            'kanji' => '長池',
            'kana' => 'ながいけ',
            'romaji' => 'Nagaike',
        ]);
        // id: 2662
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '658',
            'kanji' => '山城青谷',
            'kana' => 'やましろあおだに',
            'romaji' => 'Yamashiro-Aodani',
        ]);
        // id: 2663
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '659',
            'kanji' => '下狛',
            'kana' => 'しもこま',
            'romaji' => 'Shimokoma',
        ]);
        // id: 2664
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '659',
            'kanji' => '祝園',
            'kana' => 'ほうその',
            'romaji' => 'Hōsono',
        ]);
        // id: 2665
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '660',
            'kanji' => '長岡京',
            'kana' => 'ながおかきょう',
            'romaji' => 'Nagaokakyō',
        ]);
        // id: 2666
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '661',
            'kanji' => '胡麻',
            'kana' => 'ごま',
            'romaji' => 'Goma',
        ]);
        // id: 2667
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '661',
            'kanji' => '鍼灸大学前',
            'kana' => 'しんきゅうだいがくまえ',
            'romaji' => 'Shinkyūdaigakumae',
        ]);
        // id: 2668
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '661',
            'kanji' => '園部',
            'kana' => 'そのべ',
            'romaji' => 'Sonobe',
        ]);
        // id: 2669
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '661',
            'kanji' => '日吉',
            'kana' => 'ひよし',
            'romaji' => 'Hiyoshi',
        ]);
        // id: 2670
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '661',
            'kanji' => '船岡',
            'kana' => 'ふなおか',
            'romaji' => 'Funaoka',
        ]);
        // id: 2671
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '661',
            'kanji' => '八木',
            'kana' => 'やぎ',
            'romaji' => 'Yagi',
        ]);
        // id: 2672
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '661',
            'kanji' => '吉富',
            'kana' => 'よしとみ',
            'romaji' => 'Yoshitomi',
        ]);
        // id: 2673
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '662',
            'kanji' => '石原',
            'kana' => 'いさ',
            'romaji' => 'Isa',
        ]);
        // id: 2674
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '662',
            'kanji' => '上川口',
            'kana' => 'かみかわぐち',
            'romaji' => 'Kami-Kawaguchi',
        ]);
        // id: 2675
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '662',
            'kanji' => '上夜久野',
            'kana' => 'かみやくの',
            'romaji' => 'Kami-Yakuno',
        ]);
        // id: 2676
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '662',
            'kanji' => '下夜久野',
            'kana' => 'しもやくの',
            'romaji' => 'Shimo-Yakuno',
        ]);
        // id: 2677
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '662',
            'kanji' => '福知山',
            'kana' => 'ふくちやま',
            'romaji' => 'Fukuchiyama',
        ]);
        // id: 2678
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '663',
            'kanji' => '西舞鶴',
            'kana' => 'にしまいづる',
            'romaji' => 'Nishi-Maizuru',
        ]);
        // id: 2679
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '663',
            'kanji' => '東舞鶴',
            'kana' => 'ひがしまいづる',
            'romaji' => 'Higashi-Maizuru',
        ]);
        // id: 2680
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '663',
            'kanji' => '真倉',
            'kana' => 'まぐら',
            'romaji' => 'Magura',
        ]);
        // id: 2681
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '663',
            'kanji' => '松尾寺',
            'kana' => 'まつのおでら',
            'romaji' => 'Matsunoodera',
        ]);
        // id: 2682
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '664',
            'kanji' => '大河原',
            'kana' => 'おおかわら',
            'romaji' => 'Ōkawara',
        ]);
        // id: 2683
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '664',
            'kanji' => '月ケ瀬口',
            'kana' => 'つきがせぐち',
            'romaji' => 'Tsukigaseguchi',
        ]);
        // id: 2684
        Station::insert([
            'prefecture_id' => '26',
            'city_id' => '665',
            'kanji' => '向日町',
            'kana' => 'むこうまち',
            'romaji' => 'Mukōmachi',
        ]);
        // id: 2685
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '666',
            'kanji' => '長滝',
            'kana' => 'ながたき',
            'romaji' => 'Nagataki',
        ]);
        // id: 2686
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '666',
            'kanji' => '東佐野',
            'kana' => 'ひがしさの',
            'romaji' => 'Higashi-Sano',
        ]);
        // id: 2687
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '666',
            'kanji' => '日根野',
            'kana' => 'ひねの',
            'romaji' => 'Hineno',
        ]);
        // id: 2688
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '666',
            'kanji' => 'りんくうタウン',
            'kana' => 'りんくうたうん',
            'romaji' => 'Rinkū-town',
        ]);
        // id: 2689
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '667',
            'kanji' => '和泉府中',
            'kana' => 'いずみふちゅう',
            'romaji' => 'Izumi-Fuchū',
        ]);
        // id: 2690
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '667',
            'kanji' => '北信太',
            'kana' => 'きたしのだ',
            'romaji' => 'Kita-Shinoda',
        ]);
        // id: 2691
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '667',
            'kanji' => '信太山',
            'kana' => 'しのだやま',
            'romaji' => 'Shinodayama',
        ]);
        // id: 2692
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '668',
            'kanji' => '茨木',
            'kana' => 'いばらき',
            'romaji' => 'Ibaraki',
        ]);
        // id: 2693
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '668',
            'kanji' => 'JR総持寺',
            'kana' => 'じぇいあーるそうじじ',
            'romaji' => 'JR-Sōjiji',
        ]);
        // id: 2694
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '安治川口',
            'kana' => 'あじかわぐち',
            'romaji' => 'Ajikawaguchi',
        ]);
        // id: 2695
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '芦原橋',
            'kana' => 'あしはらばし',
            'romaji' => 'Ashiharabashi',
        ]);
        // id: 2696
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '我孫子町',
            'kana' => 'あびこちょう',
            'romaji' => 'Abikochō',
        ]);
        // id: 2697
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '今宮',
            'kana' => 'いまみや',
            'romaji' => 'Imamiya',
        ]);
        // id: 2698
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '海老江',
            'kana' => 'えびえ',
            'romaji' => 'Ebie',
        ]);
        // id: 2699
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '大阪',
            'kana' => 'おおさか',
            'romaji' => 'Ōsaka',
        ]);
        // id: 2700
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '大阪城北詰',
            'kana' => 'おおさかじょうきたづめ',
            'romaji' => 'Ōsakajōkitazume',
        ]);
        // id: 2701
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '大阪城公園',
            'kana' => 'おおさかじょうこうえん',
            'romaji' => 'Ōsakajōkōen',
        ]);
        // id: 2702
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '大阪天満宮',
            'kana' => 'おおさかてんまんぐう',
            'romaji' => 'Ōsakatemmangū',
        ]);
        // id: 2703
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '加島',
            'kana' => 'かしま',
            'romaji' => 'Kashima',
        ]);
        // id: 2704
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '加美',
            'kana' => 'かみ',
            'romaji' => 'Kami',
        ]);
        // id: 2705
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '北新地',
            'kana' => 'きたしんち',
            'romaji' => 'Kitashinchi',
        ]);
        // id: 2706
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '京橋',
            'kana' => 'きょうばし',
            'romaji' => 'Kyōbashi',
        ]);
        // id: 2707
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '桜島',
            'kana' => 'さくらじま',
            'romaji' => 'Sakurajima',
        ]);
        // id: 2708
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '桜ノ宮',
            'kana' => 'さくらのみや',
            'romaji' => 'Sakuranomiya',
        ]);
        // id: 2709
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => 'JR淡路',
            'kana' => 'じぇいあーるあわじ',
            'romaji' => 'JR-Awaji',
        ]);
        // id: 2710
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => 'JR難波',
            'kana' => 'じぇいあーるなんば',
            'romaji' => 'JR-Namba',
        ]);
        // id: 2711
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => 'JR野江',
            'kana' => 'じぇいあーるのえ',
            'romaji' => 'JR-Noe',
        ]);
        // id: 2712
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '鴫野',
            'kana' => 'しぎの',
            'romaji' => 'Shikino',
        ]);
        // id: 2713
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '城北公園通',
            'kana' => 'しろきたこうえんどおり',
            'romaji' => 'Shirokitakōendōri',
        ]);
        // id: 2714
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '新今宮',
            'kana' => 'しんいまみや',
            'romaji' => 'Shin-Imamiya',
        ]);
        // id: 2715
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '新大阪',
            'kana' => 'しんおおさか',
            'romaji' => 'Shin-Ōsaka',
        ]);
        // id: 2716
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '新加美',
            'kana' => 'しんかみ',
            'romaji' => 'Shin-Kami',
        ]);
        // id: 2717
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '新福島',
            'kana' => 'しんふくしま',
            'romaji' => 'Shin-Fukushima',
        ]);
        // id: 2718
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '杉本町',
            'kana' => 'すぎもとちょう',
            'romaji' => 'Sugimotochō',
        ]);
        // id: 2719
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '大正',
            'kana' => 'たいしょう',
            'romaji' => 'Taishō',
        ]);
        // id: 2720
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '玉造',
            'kana' => 'たまつくり',
            'romaji' => 'Tamatsukuri',
        ]);
        // id: 2721
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '塚本',
            'kana' => 'つかもと',
            'romaji' => 'Tsukamoto',
        ]);
        // id: 2722
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '鶴ケ丘',
            'kana' => 'つるがおか',
            'romaji' => 'Tsurugaoka',
        ]);
        // id: 2723
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '鶴橋',
            'kana' => 'つるはし',
            'romaji' => 'Tsuruhashi',
        ]);
        // id: 2724
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '寺田町',
            'kana' => 'てらだちょう',
            'romaji' => 'Teradachō',
        ]);
        // id: 2725
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '天王寺',
            'kana' => 'てんのうじ',
            'romaji' => 'Tennōji',
        ]);
        // id: 2726
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '天満',
            'kana' => 'てんま',
            'romaji' => 'Temma',
        ]);
        // id: 2727
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '東部市場前',
            'kana' => 'とうぶしじょうまえ',
            'romaji' => 'Tōbushijōmae',
        ]);
        // id: 2728
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '長居',
            'kana' => 'ながい',
            'romaji' => 'Nagai',
        ]);
        // id: 2729
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '西九条',
            'kana' => 'にしくじょう',
            'romaji' => 'Nishikujō',
        ]);
        // id: 2730
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '野田',
            'kana' => 'のだ',
            'romaji' => 'Noda',
        ]);
        // id: 2731
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '放出',
            'kana' => 'はなてん',
            'romaji' => 'Hanaten',
        ]);
        // id: 2732
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '東淀川',
            'kana' => 'ひがしよどがわ',
            'romaji' => 'Higashi-Yodogawa',
        ]);
        // id: 2733
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '美章園',
            'kana' => 'びしょうえん',
            'romaji' => 'Bishōen',
        ]);
        // id: 2734
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '平野',
            'kana' => 'ひらの',
            'romaji' => 'Hirano',
        ]);
        // id: 2735
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '福島',
            'kana' => 'ふくしま',
            'romaji' => 'Fukushima',
        ]);
        // id: 2736
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '弁天町',
            'kana' => 'べんてんちょう',
            'romaji' => 'Bentenchō',
        ]);
        // id: 2737
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '御幣島',
            'kana' => 'みてじま',
            'romaji' => 'Mitejima',
        ]);
        // id: 2738
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '南田辺',
            'kana' => 'みなみたなべ',
            'romaji' => 'Minami-Tanabe',
        ]);
        // id: 2739
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '桃谷',
            'kana' => 'ももだに',
            'romaji' => 'Momodani',
        ]);
        // id: 2740
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => '森ノ宮',
            'kana' => 'もりのみや',
            'romaji' => 'Morinomiya',
        ]);
        // id: 2741
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '669',
            'kanji' => 'ユニバーサルシティ',
            'kana' => 'ゆにばーさるしてぃ',
            'romaji' => 'Universal-city',
        ]);
        // id: 2742
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '670',
            'kanji' => '和泉橋本',
            'kana' => 'いずみはしもと',
            'romaji' => 'Izumi-Hashimoto',
        ]);
        // id: 2743
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '670',
            'kanji' => '東貝塚',
            'kana' => 'ひがしかいづか',
            'romaji' => 'Higashi-Kaizuka',
        ]);
        // id: 2744
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '671',
            'kanji' => '柏原',
            'kana' => 'かしわら',
            'romaji' => 'Kashiwara',
        ]);
        // id: 2745
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '671',
            'kanji' => '河内堅上',
            'kana' => 'かわちかたかみ',
            'romaji' => 'Kawachi-Katakami',
        ]);
        // id: 2746
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '671',
            'kanji' => '高井田',
            'kana' => 'たかいだ',
            'romaji' => 'Takaida',
        ]);
        // id: 2747
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '672',
            'kanji' => '河内磐船',
            'kana' => 'かわちいわふね',
            'romaji' => 'Kawachi-Iwafune',
        ]);
        // id: 2748
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '672',
            'kanji' => '星田',
            'kana' => 'ほしだ',
            'romaji' => 'Hoshida',
        ]);
        // id: 2749
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '673',
            'kanji' => '久米田',
            'kana' => 'くめだ',
            'romaji' => 'Kumeda',
        ]);
        // id: 2750
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '673',
            'kanji' => '下松',
            'kana' => 'しもまつ',
            'romaji' => 'Shimomatsu',
        ]);
        // id: 2751
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '673',
            'kanji' => '東岸和田',
            'kana' => 'ひがしきしわだ',
            'romaji' => 'Higashi-Kishiwada',
        ]);
        // id: 2752
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '674',
            'kanji' => '熊取',
            'kana' => 'くまとり',
            'romaji' => 'Kumatori',
        ]);
        // id: 2753
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '675',
            'kanji' => '浅香',
            'kana' => 'あさか',
            'romaji' => 'Asaka',
        ]);
        // id: 2754
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '675',
            'kanji' => '上野芝',
            'kana' => 'うえのしば',
            'romaji' => 'Uenoshiba',
        ]);
        // id: 2755
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '675',
            'kanji' => '鳳',
            'kana' => 'おおとり',
            'romaji' => 'Ōtori',
        ]);
        // id: 2756
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '675',
            'kanji' => '堺市',
            'kana' => 'さかいし',
            'romaji' => 'Sakaishi',
        ]);
        // id: 2757
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '675',
            'kanji' => '津久野',
            'kana' => 'つくの',
            'romaji' => 'Tsukuno',
        ]);
        // id: 2758
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '675',
            'kanji' => '三国ケ丘',
            'kana' => 'みくにがおか',
            'romaji' => 'Mikunigaoka',
        ]);
        // id: 2759
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '675',
            'kanji' => '百舌鳥',
            'kana' => 'もず',
            'romaji' => 'Mozu',
        ]);
        // id: 2760
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '676',
            'kanji' => '忍ケ丘',
            'kana' => 'しのぶがおか',
            'romaji' => 'Shinobugaoka',
        ]);
        // id: 2761
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '677',
            'kanji' => '島本',
            'kana' => 'しまもと',
            'romaji' => 'Shimamoto',
        ]);
        // id: 2762
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '678',
            'kanji' => '岸辺',
            'kana' => 'きしべ',
            'romaji' => 'Kishibe',
        ]);
        // id: 2763
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '678',
            'kanji' => '吹田',
            'kana' => 'すいた',
            'romaji' => 'Suita',
        ]);
        // id: 2764
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '678',
            'kanji' => '南吹田',
            'kana' => 'みなみすいた',
            'romaji' => 'Minami-Suita',
        ]);
        // id: 2765
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '679',
            'kanji' => '千里丘',
            'kana' => 'せんりおか',
            'romaji' => 'Senrioka',
        ]);
        // id: 2766
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '680',
            'kanji' => '和泉砂川',
            'kana' => 'いずみすながわ',
            'romaji' => 'Izumi-Sunagawa',
        ]);
        // id: 2767
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '680',
            'kanji' => '新家',
            'kana' => 'しんげ',
            'romaji' => 'Shinge',
        ]);
        // id: 2768
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '681',
            'kanji' => '四条畷',
            'kana' => 'しじょうなわて',
            'romaji' => 'Shijōnawate',
        ]);
        // id: 2769
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '681',
            'kanji' => '住道',
            'kana' => 'すみのどう',
            'romaji' => 'Suminodō',
        ]);
        // id: 2770
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '681',
            'kanji' => '野崎',
            'kana' => 'のざき',
            'romaji' => 'Nozaki',
        ]);
        // id: 2771
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '682',
            'kanji' => '富木',
            'kana' => 'とのき',
            'romaji' => 'Tonoki',
        ]);
        // id: 2772
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '682',
            'kanji' => '東羽衣',
            'kana' => 'ひがしはごろも',
            'romaji' => 'Higashi-Hagoromo',
        ]);
        // id: 2773
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '683',
            'kanji' => '摂津富田',
            'kana' => 'せっつとんだ',
            'romaji' => 'Settsu-Tonda',
        ]);
        // id: 2774
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '683',
            'kanji' => '高槻',
            'kana' => 'たかつき',
            'romaji' => 'Takatsuki',
        ]);
        // id: 2775
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '684',
            'kanji' => '関西空港',
            'kana' => 'かんさいくうこう',
            'romaji' => 'Kansai-airport',
        ]);
        // id: 2776
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '685',
            'kanji' => '寝屋川公園',
            'kana' => 'ねやがわこうえん',
            'romaji' => 'Neyagawakōen',
        ]);
        // id: 2777
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '686',
            'kanji' => '和泉鳥取',
            'kana' => 'いずみとっとり',
            'romaji' => 'Izumi-Tottori',
        ]);
        // id: 2778
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '686',
            'kanji' => '山中渓',
            'kana' => 'やまなかだに',
            'romaji' => 'Yamanakadani',
        ]);
        // id: 2779
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '687',
            'kanji' => '衣摺加美北',
            'kana' => 'きずりかみきた',
            'romaji' => 'Kizuri-Kamikita',
        ]);
        // id: 2780
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '687',
            'kanji' => '鴻池新田',
            'kana' => 'こうのいけしんでん',
            'romaji' => 'Kōnoikeshinden',
        ]);
        // id: 2781
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '687',
            'kanji' => 'JR河内永和',
            'kana' => 'じぇいあーるかわちえいわ',
            'romaji' => 'JR-Kawachi-Eiwa',
        ]);
        // id: 2782
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '687',
            'kanji' => 'JR俊徳道',
            'kana' => 'じぇいあーるしゅんとくみち',
            'romaji' => 'JR-Shuntokumichi',
        ]);
        // id: 2783
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '687',
            'kanji' => 'JR長瀬',
            'kana' => 'じぇいあーるながせ',
            'romaji' => 'JR-Nagase',
        ]);
        // id: 2784
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '687',
            'kanji' => '高井田中央',
            'kana' => 'たかいだちゅうおう',
            'romaji' => 'Takaida-Chūō',
        ]);
        // id: 2785
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '687',
            'kanji' => '徳庵',
            'kana' => 'とくあん',
            'romaji' => 'Tokuan',
        ]);
        // id: 2786
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '688',
            'kanji' => '津田',
            'kana' => 'つだ',
            'romaji' => 'Tsuda',
        ]);
        // id: 2787
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '688',
            'kanji' => '長尾',
            'kana' => 'ながお',
            'romaji' => 'Nagao',
        ]);
        // id: 2788
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '688',
            'kanji' => '藤阪',
            'kana' => 'ふじさか',
            'romaji' => 'Fujisaka',
        ]);
        // id: 2789
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '689',
            'kanji' => '久宝寺',
            'kana' => 'きゅうほうじ',
            'romaji' => 'Kyūhōji',
        ]);
        // id: 2790
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '689',
            'kanji' => '志紀',
            'kana' => 'しき',
            'romaji' => 'Shiki',
        ]);
        // id: 2791
        Station::insert([
            'prefecture_id' => '27',
            'city_id' => '689',
            'kanji' => '八尾',
            'kana' => 'やお',
            'romaji' => 'Yao',
        ]);
        // id: 2792
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '690',
            'kanji' => '相生',
            'kana' => 'あいおい',
            'romaji' => 'Aioi',
        ]);
        // id: 2793
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '690',
            'kanji' => '西相生',
            'kana' => 'にしあいおい',
            'romaji' => 'Nishi-Aioi',
        ]);
        // id: 2794
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '691',
            'kanji' => '明石',
            'kana' => 'あかし',
            'romaji' => 'Akashi',
        ]);
        // id: 2795
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '691',
            'kanji' => '朝霧',
            'kana' => 'あさぎり',
            'romaji' => 'Asagiri',
        ]);
        // id: 2796
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '691',
            'kanji' => '魚住',
            'kana' => 'うおずみ',
            'romaji' => 'Uozumi',
        ]);
        // id: 2797
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '691',
            'kanji' => '大久保',
            'kana' => 'おおくぼ',
            'romaji' => 'Ōkubo',
        ]);
        // id: 2798
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '691',
            'kanji' => '西明石',
            'kana' => 'にしあかし',
            'romaji' => 'Nishi-Akashi',
        ]);
        // id: 2799
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '692',
            'kanji' => '有年',
            'kana' => 'うね',
            'romaji' => 'Une',
        ]);
        // id: 2800
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '692',
            'kanji' => '坂越',
            'kana' => 'さこし',
            'romaji' => 'Sakoshi',
        ]);
        // id: 2801
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '692',
            'kanji' => '天和',
            'kana' => 'てんわ',
            'romaji' => 'Tenwa',
        ]);
        // id: 2802
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '692',
            'kanji' => '播州赤穂',
            'kana' => 'ばんしゅうあこう',
            'romaji' => 'Banshū-Akō',
        ]);
        // id: 2803
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '692',
            'kanji' => '備前福河',
            'kana' => 'びぜんふくかわ',
            'romaji' => 'Bizen-Fukukawa',
        ]);
        // id: 2804
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '693',
            'kanji' => '青倉',
            'kana' => 'あおくら',
            'romaji' => 'Aokura',
        ]);
        // id: 2805
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '693',
            'kanji' => '生野',
            'kana' => 'いくの',
            'romaji' => 'Ikuno',
        ]);
        // id: 2806
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '693',
            'kanji' => '竹田',
            'kana' => 'たけだ',
            'romaji' => 'Takeda',
        ]);
        // id: 2807
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '693',
            'kanji' => '新井',
            'kana' => 'にい',
            'romaji' => 'Nii',
        ]);
        // id: 2808
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '693',
            'kanji' => '梁瀬',
            'kana' => 'やなせ',
            'romaji' => 'Yanase',
        ]);
        // id: 2809
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '693',
            'kanji' => '和田山',
            'kana' => 'わだやま',
            'romaji' => 'Wadayama',
        ]);
        // id: 2810
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '694',
            'kanji' => '芦屋',
            'kana' => 'あしや',
            'romaji' => 'Ashiya',
        ]);
        // id: 2811
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '695',
            'kanji' => '尼崎',
            'kana' => 'あまがさき',
            'romaji' => 'Amagasaki',
        ]);
        // id: 2812
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '695',
            'kanji' => '猪名寺',
            'kana' => 'いなでら',
            'romaji' => 'Inadera',
        ]);
        // id: 2813
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '695',
            'kanji' => '立花',
            'kana' => 'たちばな',
            'romaji' => 'Tachibana',
        ]);
        // id: 2814
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '695',
            'kanji' => '塚口',
            'kana' => 'つかぐち',
            'romaji' => 'Tsukaguchi',
        ]);
        // id: 2815
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '696',
            'kanji' => '伊丹',
            'kana' => 'いたみ',
            'romaji' => 'Itami',
        ]);
        // id: 2816
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '696',
            'kanji' => '北伊丹',
            'kana' => 'きたいたみ',
            'romaji' => 'Kita-Itami',
        ]);
        // id: 2817
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '697',
            'kanji' => '甘地',
            'kana' => 'あまじ',
            'romaji' => 'Amaji',
        ]);
        // id: 2818
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '697',
            'kanji' => '鶴居',
            'kana' => 'つるい',
            'romaji' => 'Tsurui',
        ]);
        // id: 2819
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '698',
            'kanji' => '粟生',
            'kana' => 'あお',
            'romaji' => 'Ao',
        ]);
        // id: 2820
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '698',
            'kanji' => '青野ケ原',
            'kana' => 'あおのがはら',
            'romaji' => 'Aonogahara',
        ]);
        // id: 2821
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '698',
            'kanji' => '市場',
            'kana' => 'いちば',
            'romaji' => 'Ichiba',
        ]);
        // id: 2822
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '698',
            'kanji' => '小野町',
            'kana' => 'おのまち',
            'romaji' => 'Onomachi',
        ]);
        // id: 2823
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '698',
            'kanji' => '河合西',
            'kana' => 'かわいにし',
            'romaji' => 'Kawainishi',
        ]);
        // id: 2824
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '699',
            'kanji' => '加古川',
            'kana' => 'かこがわ',
            'romaji' => 'Kakogawa',
        ]);
        // id: 2825
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '699',
            'kanji' => '神野',
            'kana' => 'かんの',
            'romaji' => 'Kanno',
        ]);
        // id: 2826
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '699',
            'kanji' => '日岡',
            'kana' => 'ひおか',
            'romaji' => 'Hioka',
        ]);
        // id: 2827
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '699',
            'kanji' => '東加古川',
            'kana' => 'ひがしかこがわ',
            'romaji' => 'Higashi-Kakogawa',
        ]);
        // id: 2828
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '699',
            'kanji' => '厄神',
            'kana' => 'やくじん',
            'romaji' => 'Yakujin',
        ]);
        // id: 2829
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '700',
            'kanji' => '滝',
            'kana' => 'たき',
            'romaji' => 'Taki',
        ]);
        // id: 2830
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '700',
            'kanji' => '滝野',
            'kana' => 'たきの',
            'romaji' => 'Takino',
        ]);
        // id: 2831
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '700',
            'kanji' => '社町',
            'kana' => 'やしろちょう',
            'romaji' => 'Yashirochō',
        ]);
        // id: 2832
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '701',
            'kanji' => '寺前',
            'kana' => 'てらまえ',
            'romaji' => 'Teramae',
        ]);
        // id: 2833
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '701',
            'kanji' => '新野',
            'kana' => 'にいの',
            'romaji' => 'Niino',
        ]);
        // id: 2834
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '701',
            'kanji' => '長谷',
            'kana' => 'はせ',
            'romaji' => 'Hase',
        ]);
        // id: 2835
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '702',
            'kanji' => '上郡',
            'kana' => 'かみごおり',
            'romaji' => 'Kamigōri',
        ]);
        // id: 2836
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '703',
            'kanji' => '餘部',
            'kana' => 'あまるべ',
            'romaji' => 'Amarube',
        ]);
        // id: 2837
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '703',
            'kanji' => '香住',
            'kana' => 'かすみ',
            'romaji' => 'Kasumi',
        ]);
        // id: 2838
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '703',
            'kanji' => '佐津',
            'kana' => 'さつ',
            'romaji' => 'Satsu',
        ]);
        // id: 2839
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '703',
            'kanji' => '柴山',
            'kana' => 'しばやま',
            'romaji' => 'Shibayama',
        ]);
        // id: 2840
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '703',
            'kanji' => '鎧',
            'kana' => 'よろい',
            'romaji' => 'Yoroi',
        ]);
        // id: 2841
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '704',
            'kanji' => '川西池田',
            'kana' => 'かわにしいけだ',
            'romaji' => 'Kawanishi-Ikeda',
        ]);
        // id: 2842
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '甲南山手',
            'kana' => 'こうなんやまて',
            'romaji' => 'Kōnan-Yamate',
        ]);
        // id: 2843
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '神戸',
            'kana' => 'こうべ',
            'romaji' => 'Kōbe',
        ]);
        // id: 2844
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '三ノ宮',
            'kana' => 'さんのみや',
            'romaji' => 'Sannomiya',
        ]);
        // id: 2845
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '塩屋',
            'kana' => 'しおや',
            'romaji' => 'Shioya',
        ]);
        // id: 2846
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '新神戸',
            'kana' => 'しんこうべ',
            'romaji' => 'Shin-Kōbe',
        ]);
        // id: 2847
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '新長田',
            'kana' => 'しんながた',
            'romaji' => 'Shin-Nagata',
        ]);
        // id: 2848
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '須磨',
            'kana' => 'すま',
            'romaji' => 'Suma',
        ]);
        // id: 2849
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '須磨海浜公園',
            'kana' => 'すまかいひんこうえん',
            'romaji' => 'Sumakaihinkōen',
        ]);
        // id: 2850
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '住吉',
            'kana' => 'すみよし',
            'romaji' => 'Sumiyoshi',
        ]);
        // id: 2851
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '摂津本山',
            'kana' => 'せっつもとやま',
            'romaji' => 'Settsu-Motoyama',
        ]);
        // id: 2852
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '鷹取',
            'kana' => 'たかとり',
            'romaji' => 'Takatori',
        ]);
        // id: 2853
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '垂水',
            'kana' => 'たるみ',
            'romaji' => 'Tarumi',
        ]);
        // id: 2854
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '道場',
            'kana' => 'どうじょう',
            'romaji' => 'Dōjō',
        ]);
        // id: 2855
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '灘',
            'kana' => 'なだ',
            'romaji' => 'Nada',
        ]);
        // id: 2856
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '兵庫',
            'kana' => 'ひょうご',
            'romaji' => 'Hyōgo',
        ]);
        // id: 2857
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '舞子',
            'kana' => 'まいこ',
            'romaji' => 'Maiko',
        ]);
        // id: 2858
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '摩耶',
            'kana' => 'まや',
            'romaji' => 'Maya',
        ]);
        // id: 2859
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '元町',
            'kana' => 'もとまち',
            'romaji' => 'Motomachi',
        ]);
        // id: 2860
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '六甲道',
            'kana' => 'ろっこうみち',
            'romaji' => 'Rokkōmichi',
        ]);
        // id: 2861
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '705',
            'kanji' => '和田岬',
            'kana' => 'わだみさき',
            'romaji' => 'Wadamisaki',
        ]);
        // id: 2862
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '706',
            'kanji' => '上月',
            'kana' => 'こうづき',
            'romaji' => 'Kōzuki',
        ]);
        // id: 2863
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '706',
            'kanji' => '佐用',
            'kana' => 'さよ',
            'romaji' => 'Sayo',
        ]);
        // id: 2864
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '706',
            'kanji' => '播磨徳久',
            'kana' => 'はりまとくさ',
            'romaji' => 'Harima-Tokusa',
        ]);
        // id: 2865
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '706',
            'kanji' => '三日月',
            'kana' => 'みかづき',
            'romaji' => 'Mikazuki',
        ]);
        // id: 2866
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '707',
            'kanji' => '相野',
            'kana' => 'あいの',
            'romaji' => 'Aino',
        ]);
        // id: 2867
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '707',
            'kanji' => '藍本',
            'kana' => 'あいもと',
            'romaji' => 'Aimoto',
        ]);
        // id: 2868
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '707',
            'kanji' => '三田',
            'kana' => 'さんだ',
            'romaji' => 'Sanda',
        ]);
        // id: 2869
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '707',
            'kanji' => '新三田',
            'kana' => 'しんさんだ',
            'romaji' => 'Shin-Sanda',
        ]);
        // id: 2870
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '707',
            'kanji' => '広野',
            'kana' => 'ひろの',
            'romaji' => 'Hirono',
        ]);
        // id: 2871
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '708',
            'kanji' => '居組',
            'kana' => 'いぐみ',
            'romaji' => 'Igumi',
        ]);
        // id: 2872
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '708',
            'kanji' => '久谷',
            'kana' => 'くたに',
            'romaji' => 'Kutani',
        ]);
        // id: 2873
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '708',
            'kanji' => '浜坂',
            'kana' => 'はまさか',
            'romaji' => 'Hamasaka',
        ]);
        // id: 2874
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '708',
            'kanji' => '諸寄',
            'kana' => 'もろよせ',
            'romaji' => 'Moroyose',
        ]);
        // id: 2875
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '709',
            'kanji' => '曽根',
            'kana' => 'そね',
            'romaji' => 'Sone',
        ]);
        // id: 2876
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '709',
            'kanji' => '宝殿',
            'kana' => 'ほうでん',
            'romaji' => 'Hōden',
        ]);
        // id: 2877
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '710',
            'kanji' => '宝塚',
            'kana' => 'たからづか',
            'romaji' => 'Takarazuka',
        ]);
        // id: 2878
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '710',
            'kanji' => '武田尾',
            'kana' => 'たけだお',
            'romaji' => 'Takedao',
        ]);
        // id: 2879
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '710',
            'kanji' => '中山寺',
            'kana' => 'なかやまでら',
            'romaji' => 'Nakayamadera',
        ]);
        // id: 2880
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '711',
            'kanji' => '千本',
            'kana' => 'せんぼん',
            'romaji' => 'Sembon',
        ]);
        // id: 2881
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '711',
            'kanji' => '竜野',
            'kana' => 'たつの',
            'romaji' => 'Tatsuno',
        ]);
        // id: 2882
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '711',
            'kanji' => '西栗栖',
            'kana' => 'にしくりす',
            'romaji' => 'Nishi-Kurisu',
        ]);
        // id: 2883
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '711',
            'kanji' => '播磨新宮',
            'kana' => 'はりましんぐう',
            'romaji' => 'Harima-Shingū',
        ]);
        // id: 2884
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '711',
            'kanji' => '東觜崎',
            'kana' => 'ひがしはしさき',
            'romaji' => 'Higashi-Hashisaki',
        ]);
        // id: 2885
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '711',
            'kanji' => '本竜野',
            'kana' => 'ほんたつの',
            'romaji' => 'Hon-Tatsuno',
        ]);
        // id: 2886
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '712',
            'kanji' => '草野',
            'kana' => 'くさの',
            'romaji' => 'Kusano',
        ]);
        // id: 2887
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '712',
            'kanji' => '篠山口',
            'kana' => 'ささやまぐち',
            'romaji' => 'Sasayamaguchi',
        ]);
        // id: 2888
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '712',
            'kanji' => '丹波大山',
            'kana' => 'たんばおおやま',
            'romaji' => 'Tamba-Ōyama',
        ]);
        // id: 2889
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '712',
            'kanji' => '古市',
            'kana' => 'ふるいち',
            'romaji' => 'Furuichi',
        ]);
        // id: 2890
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '712',
            'kanji' => '南矢代',
            'kana' => 'みなみやしろ',
            'romaji' => 'Minami-Yashiro',
        ]);
        // id: 2891
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '713',
            'kanji' => '石生',
            'kana' => 'いそう',
            'romaji' => 'Isō',
        ]);
        // id: 2892
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '713',
            'kanji' => '市島',
            'kana' => 'いちじま',
            'romaji' => 'Ichijima',
        ]);
        // id: 2893
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '713',
            'kanji' => '柏原',
            'kana' => 'かいばら',
            'romaji' => 'Kaibara',
        ]);
        // id: 2894
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '713',
            'kanji' => '久下村',
            'kana' => 'くげむら',
            'romaji' => 'Kugemura',
        ]);
        // id: 2895
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '713',
            'kanji' => '黒井',
            'kana' => 'くろい',
            'romaji' => 'Kuroi',
        ]);
        // id: 2896
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '713',
            'kanji' => '下滝',
            'kana' => 'しもたき',
            'romaji' => 'Shimotaki',
        ]);
        // id: 2897
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '713',
            'kanji' => '谷川',
            'kana' => 'たにかわ',
            'romaji' => 'Tanikawa',
        ]);
        // id: 2898
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '713',
            'kanji' => '丹波竹田',
            'kana' => 'たんばたけだ',
            'romaji' => 'Tamba-Takeda',
        ]);
        // id: 2899
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '714',
            'kanji' => '江原',
            'kana' => 'えばら',
            'romaji' => 'Ebara',
        ]);
        // id: 2900
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '714',
            'kanji' => '城崎温泉',
            'kana' => 'きのさきおんせん',
            'romaji' => 'Kinosakionsen',
        ]);
        // id: 2901
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '714',
            'kanji' => '玄武洞',
            'kana' => 'げんぶどう',
            'romaji' => 'Gembudō',
        ]);
        // id: 2902
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '714',
            'kanji' => '国府',
            'kana' => 'こくふ',
            'romaji' => 'Kokufu',
        ]);
        // id: 2903
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '714',
            'kanji' => '竹野',
            'kana' => 'たけの',
            'romaji' => 'Takeno',
        ]);
        // id: 2904
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '714',
            'kanji' => '豊岡',
            'kana' => 'とよおか',
            'romaji' => 'Toyooka',
        ]);
        // id: 2905
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '715',
            'kanji' => '甲子園口',
            'kana' => 'こうしえんぐち',
            'romaji' => 'Kōshienguchi',
        ]);
        // id: 2906
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '715',
            'kanji' => 'さくら夙川',
            'kana' => 'さくらしゅくがわ',
            'romaji' => 'Sakurashukugawa',
        ]);
        // id: 2907
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '715',
            'kanji' => '生瀬',
            'kana' => 'なまぜ',
            'romaji' => 'Namaze',
        ]);
        // id: 2908
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '715',
            'kanji' => '西宮',
            'kana' => 'にしのみや',
            'romaji' => 'Nishinomiya',
        ]);
        // id: 2909
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '715',
            'kanji' => '西宮名塩',
            'kana' => 'にしのみやなじお',
            'romaji' => 'Nishinomiya-Najio',
        ]);
        // id: 2910
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '716',
            'kanji' => '黒田庄',
            'kana' => 'くろだしょう',
            'romaji' => 'Kurodashō',
        ]);
        // id: 2911
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '716',
            'kanji' => '新西脇',
            'kana' => 'しんにしわき',
            'romaji' => 'Shin-Nishiwaki',
        ]);
        // id: 2912
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '716',
            'kanji' => '西脇市',
            'kana' => 'にしわきし',
            'romaji' => 'Nishiwakishi',
        ]);
        // id: 2913
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '716',
            'kanji' => '日本へそ公園',
            'kana' => 'にほんへそこうえん',
            'romaji' => 'Nihonhesokōen',
        ]);
        // id: 2914
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '716',
            'kanji' => '比延',
            'kana' => 'ひえ',
            'romaji' => 'Hie',
        ]);
        // id: 2915
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '716',
            'kanji' => '船町口',
            'kana' => 'ふなまちぐち',
            'romaji' => 'Funamachiguchi',
        ]);
        // id: 2916
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '716',
            'kanji' => '本黒田',
            'kana' => 'ほんくろだ',
            'romaji' => 'Hon-Kuroda',
        ]);
        // id: 2917
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '717',
            'kanji' => '土山',
            'kana' => 'つちやま',
            'romaji' => 'Tsuchiyama',
        ]);
        // id: 2918
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '英賀保',
            'kana' => 'あがほ',
            'romaji' => 'Agaho',
        ]);
        // id: 2919
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '網干',
            'kana' => 'あぼし',
            'romaji' => 'Aboshi',
        ]);
        // id: 2920
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '太市',
            'kana' => 'おおいち',
            'romaji' => 'Ōichi',
        ]);
        // id: 2921
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '京口',
            'kana' => 'きょうぐち',
            'romaji' => 'Kyōguchi',
        ]);
        // id: 2922
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '香呂',
            'kana' => 'こうろ',
            'romaji' => 'Kōro',
        ]);
        // id: 2923
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '御着',
            'kana' => 'ごちゃく',
            'romaji' => 'Gochaku',
        ]);
        // id: 2924
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '砥堀',
            'kana' => 'とほり',
            'romaji' => 'Tohori',
        ]);
        // id: 2925
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '仁豊野',
            'kana' => 'にぶの',
            'romaji' => 'Nibuno',
        ]);
        // id: 2926
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '野里',
            'kana' => 'のざと',
            'romaji' => 'Nozato',
        ]);
        // id: 2927
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => 'はりま勝原',
            'kana' => 'はりまかつはら',
            'romaji' => 'Harima-Katsuhara',
        ]);
        // id: 2928
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '播磨高岡',
            'kana' => 'はりまたかおか',
            'romaji' => 'Harima-Takaoka',
        ]);
        // id: 2929
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '東姫路',
            'kana' => 'ひがしひめじ',
            'romaji' => 'Higashi-Himeji',
        ]);
        // id: 2930
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '姫路',
            'kana' => 'ひめじ',
            'romaji' => 'Himeji',
        ]);
        // id: 2931
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => 'ひめじ別所',
            'kana' => 'ひめじべっしょ',
            'romaji' => 'Himeji-Bessho',
        ]);
        // id: 2932
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '溝口',
            'kana' => 'みぞぐち',
            'romaji' => 'Mizoguchi',
        ]);
        // id: 2933
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '718',
            'kanji' => '余部',
            'kana' => 'よべ',
            'romaji' => 'Yobe',
        ]);
        // id: 2934
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '719',
            'kanji' => '福崎',
            'kana' => 'ふくさき',
            'romaji' => 'Fukusaki',
        ]);
        // id: 2935
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '720',
            'kanji' => '養父',
            'kana' => 'やぶ',
            'romaji' => 'Yabu',
        ]);
        // id: 2936
        Station::insert([
            'prefecture_id' => '28',
            'city_id' => '720',
            'kanji' => '八鹿',
            'kana' => 'ようか',
            'romaji' => 'Yōka',
        ]);
        // id: 2937
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '721',
            'kanji' => '法隆寺',
            'kana' => 'ほうりゅうじ',
            'romaji' => 'Hōryūji',
        ]);
        // id: 2938
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '722',
            'kanji' => '王寺',
            'kana' => 'おうじ',
            'romaji' => 'Ōji',
        ]);
        // id: 2939
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '722',
            'kanji' => '畠田',
            'kana' => 'はたけだ',
            'romaji' => 'Hatakeda',
        ]);
        // id: 2940
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '723',
            'kanji' => '香芝',
            'kana' => 'かしば',
            'romaji' => 'Kashiba',
        ]);
        // id: 2941
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '723',
            'kanji' => 'JR五位堂',
            'kana' => 'じぇいあーるごいどう',
            'romaji' => 'JR-Goidō',
        ]);
        // id: 2942
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '723',
            'kanji' => '志都美',
            'kana' => 'しずみ',
            'romaji' => 'Shizumi',
        ]);
        // id: 2943
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '724',
            'kanji' => '畝傍',
            'kana' => 'うねび',
            'romaji' => 'Unebi',
        ]);
        // id: 2944
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '724',
            'kanji' => '香久山',
            'kana' => 'かぐやま',
            'romaji' => 'Kaguyama',
        ]);
        // id: 2945
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '724',
            'kanji' => '金橋',
            'kana' => 'かなはし',
            'romaji' => 'Kanahashi',
        ]);
        // id: 2946
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '725',
            'kanji' => '大和新庄',
            'kana' => 'やまとしんじょう',
            'romaji' => 'Yamato-Shinjō',
        ]);
        // id: 2947
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '726',
            'kanji' => '北宇智',
            'kana' => 'きたうち',
            'romaji' => 'Kitauchi',
        ]);
        // id: 2948
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '726',
            'kanji' => '五条',
            'kana' => 'ごじょう',
            'romaji' => 'Gojō',
        ]);
        // id: 2949
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '726',
            'kanji' => '大和二見',
            'kana' => 'やまとふたみ',
            'romaji' => 'Yamato-Futami',
        ]);
        // id: 2950
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '727',
            'kanji' => '御所',
            'kana' => 'ごせ',
            'romaji' => 'Gose',
        ]);
        // id: 2951
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '727',
            'kanji' => '玉手',
            'kana' => 'たまで',
            'romaji' => 'Tamade',
        ]);
        // id: 2952
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '727',
            'kanji' => '吉野口',
            'kana' => 'よしのぐち',
            'romaji' => 'Yoshinoguchi',
        ]);
        // id: 2953
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '727',
            'kanji' => '掖上',
            'kana' => 'わきがみ',
            'romaji' => 'Wakigami',
        ]);
        // id: 2954
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '728',
            'kanji' => '桜井',
            'kana' => 'さくらい',
            'romaji' => 'Sakurai',
        ]);
        // id: 2955
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '728',
            'kanji' => '巻向',
            'kana' => 'まきむく',
            'romaji' => 'Makimuku',
        ]);
        // id: 2956
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '728',
            'kanji' => '三輪',
            'kana' => 'みわ',
            'romaji' => 'Miwa',
        ]);
        // id: 2957
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '729',
            'kanji' => '三郷',
            'kana' => 'さんごう',
            'romaji' => 'Sangō',
        ]);
        // id: 2958
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '730',
            'kanji' => '櫟本',
            'kana' => 'いちのもと',
            'romaji' => 'Ichinomoto',
        ]);
        // id: 2959
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '730',
            'kanji' => '天理',
            'kana' => 'てんり',
            'romaji' => 'Tenri',
        ]);
        // id: 2960
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '730',
            'kanji' => '長柄',
            'kana' => 'ながら',
            'romaji' => 'Nagara',
        ]);
        // id: 2961
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '730',
            'kanji' => '柳本',
            'kana' => 'やなぎもと',
            'romaji' => 'Yanagimoto',
        ]);
        // id: 2962
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '731',
            'kanji' => '帯解',
            'kana' => 'おびとけ',
            'romaji' => 'Obitoke',
        ]);
        // id: 2963
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '731',
            'kanji' => '京終',
            'kana' => 'きょうばて',
            'romaji' => 'Kyōbate',
        ]);
        // id: 2964
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '731',
            'kanji' => '奈良',
            'kana' => 'なら',
            'romaji' => 'Nara',
        ]);
        // id: 2965
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '731',
            'kanji' => '平城山',
            'kana' => 'ならやま',
            'romaji' => 'Narayama',
        ]);
        // id: 2966
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '732',
            'kanji' => '郡山',
            'kana' => 'こおりやま',
            'romaji' => 'Kōriyama',
        ]);
        // id: 2967
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '732',
            'kanji' => '大和小泉',
            'kana' => 'やまとこいずみ',
            'romaji' => 'Yamato-Koizumi',
        ]);
        // id: 2968
        Station::insert([
            'prefecture_id' => '29',
            'city_id' => '733',
            'kanji' => '高田',
            'kana' => 'たかだ',
            'romaji' => 'Takada',
        ]);
        // id: 2969
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '734',
            'kanji' => '藤並',
            'kana' => 'ふじなみ',
            'romaji' => 'Fujinami',
        ]);
        // id: 2970
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '735',
            'kanji' => '紀伊宮原',
            'kana' => 'きいみやはら',
            'romaji' => 'Kii-Miyahara',
        ]);
        // id: 2971
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '735',
            'kanji' => '初島',
            'kana' => 'はつしま',
            'romaji' => 'Hatsushima',
        ]);
        // id: 2972
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '735',
            'kanji' => '箕島',
            'kana' => 'みのしま',
            'romaji' => 'Minoshima',
        ]);
        // id: 2973
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '736',
            'kanji' => '稲原',
            'kana' => 'いなはら',
            'romaji' => 'Inahara',
        ]);
        // id: 2974
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '736',
            'kanji' => '印南',
            'kana' => 'いなみ',
            'romaji' => 'Inami',
        ]);
        // id: 2975
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '736',
            'kanji' => '切目',
            'kana' => 'きりめ',
            'romaji' => 'Kirime',
        ]);
        // id: 2976
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '737',
            'kanji' => '岩出',
            'kana' => 'いわで',
            'romaji' => 'Iwade',
        ]);
        // id: 2977
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '737',
            'kanji' => '船戸',
            'kana' => 'ふなと',
            'romaji' => 'Funato',
        ]);
        // id: 2978
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '738',
            'kanji' => '海南',
            'kana' => 'かいなん',
            'romaji' => 'Kainan',
        ]);
        // id: 2979
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '738',
            'kanji' => '加茂郷',
            'kana' => 'かもごう',
            'romaji' => 'Kamogō',
        ]);
        // id: 2980
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '738',
            'kanji' => '黒江',
            'kana' => 'くろえ',
            'romaji' => 'Kuroe',
        ]);
        // id: 2981
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '738',
            'kanji' => '冷水浦',
            'kana' => 'しみずうら',
            'romaji' => 'Shimizuura',
        ]);
        // id: 2982
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '738',
            'kanji' => '下津',
            'kana' => 'しもつ',
            'romaji' => 'Shimotsu',
        ]);
        // id: 2983
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '739',
            'kanji' => '大谷',
            'kana' => 'おおたに',
            'romaji' => 'Ōtani',
        ]);
        // id: 2984
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '739',
            'kanji' => '笠田',
            'kana' => 'かせだ',
            'romaji' => 'Kaseda',
        ]);
        // id: 2985
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '739',
            'kanji' => '中飯降',
            'kana' => 'なかいぶり',
            'romaji' => 'Naka-Iburi',
        ]);
        // id: 2986
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '739',
            'kanji' => '西笠田',
            'kana' => 'にしかせだ',
            'romaji' => 'Nishi-Kaseda',
        ]);
        // id: 2987
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '739',
            'kanji' => '妙寺',
            'kana' => 'みょうじ',
            'romaji' => 'Myōji',
        ]);
        // id: 2988
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '740',
            'kanji' => '朝来',
            'kana' => 'あっそ',
            'romaji' => 'Asso',
        ]);
        // id: 2989
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '741',
            'kanji' => '打田',
            'kana' => 'うちた',
            'romaji' => 'Uchita',
        ]);
        // id: 2990
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '741',
            'kanji' => '紀伊長田',
            'kana' => 'きいながた',
            'romaji' => 'Kii-Nagata',
        ]);
        // id: 2991
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '741',
            'kanji' => '粉河',
            'kana' => 'こかわ',
            'romaji' => 'Kokawa',
        ]);
        // id: 2992
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '741',
            'kanji' => '下井阪',
            'kana' => 'しもいさか',
            'romaji' => 'Shimo-Isaka',
        ]);
        // id: 2993
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '741',
            'kanji' => '名手',
            'kana' => 'なて',
            'romaji' => 'Nate',
        ]);
        // id: 2994
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '742',
            'kanji' => '紀伊有田',
            'kana' => 'きいありた',
            'romaji' => 'Kii-Arita',
        ]);
        // id: 2995
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '742',
            'kanji' => '紀伊田原',
            'kana' => 'きいたはら',
            'romaji' => 'Kii-Tahara',
        ]);
        // id: 2996
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '742',
            'kanji' => '紀伊姫',
            'kana' => 'きいひめ',
            'romaji' => 'Kii-Hime',
        ]);
        // id: 2997
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '742',
            'kanji' => '串本',
            'kana' => 'くしもと',
            'romaji' => 'Kushimoto',
        ]);
        // id: 2998
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '742',
            'kanji' => '古座',
            'kana' => 'こざ',
            'romaji' => 'Koza',
        ]);
        // id: 2999
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '742',
            'kanji' => '田子',
            'kana' => 'たこ',
            'romaji' => 'Tako',
        ]);
        // id: 3000
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '742',
            'kanji' => '田並',
            'kana' => 'たなみ',
            'romaji' => 'Tanami',
        ]);
        // id: 3001
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '742',
            'kanji' => '和深',
            'kana' => 'わぶか',
            'romaji' => 'Wabuka',
        ]);
        // id: 3002
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '743',
            'kanji' => '御坊',
            'kana' => 'ごぼう',
            'romaji' => 'Gobō',
        ]);
        // id: 3003
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '743',
            'kanji' => '道成寺',
            'kana' => 'どうじょうじ',
            'romaji' => 'Dōjōji',
        ]);
        // id: 3004
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '744',
            'kanji' => '紀伊富田',
            'kana' => 'きいとんだ',
            'romaji' => 'Kii-Tonda',
        ]);
        // id: 3005
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '744',
            'kanji' => '紀伊日置',
            'kana' => 'きいひき',
            'romaji' => 'Kii-Hiki',
        ]);
        // id: 3006
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '744',
            'kanji' => '白浜',
            'kana' => 'しらはま',
            'romaji' => 'Shirahama',
        ]);
        // id: 3007
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '744',
            'kanji' => '椿',
            'kana' => 'つばき',
            'romaji' => 'Tsubaki',
        ]);
        // id: 3008
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '745',
            'kanji' => '紀伊佐野',
            'kana' => 'きいさの',
            'romaji' => 'Kii-Sano',
        ]);
        // id: 3009
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '745',
            'kanji' => '新宮',
            'kana' => 'しんぐう',
            'romaji' => 'Shingū',
        ]);
        // id: 3010
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '745',
            'kanji' => '三輪崎',
            'kana' => 'みわさき',
            'romaji' => 'Miwasaki',
        ]);
        // id: 3011
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '746',
            'kanji' => '江住',
            'kana' => 'えすみ',
            'romaji' => 'Esumi',
        ]);
        // id: 3012
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '746',
            'kanji' => '周参見',
            'kana' => 'すさみ',
            'romaji' => 'Susami',
        ]);
        // id: 3013
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '746',
            'kanji' => '見老津',
            'kana' => 'みろづ',
            'romaji' => 'Mirozu',
        ]);
        // id: 3014
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '747',
            'kanji' => '太地',
            'kana' => 'たいじ',
            'romaji' => 'Taiji',
        ]);
        // id: 3015
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '748',
            'kanji' => '紀伊新庄',
            'kana' => 'きいしんじょう',
            'romaji' => 'Kii-Shinjō',
        ]);
        // id: 3016
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '748',
            'kanji' => '紀伊田辺',
            'kana' => 'きいたなべ',
            'romaji' => 'Kii-Tanabe',
        ]);
        // id: 3017
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '748',
            'kanji' => '芳養',
            'kana' => 'はや',
            'romaji' => 'Haya',
        ]);
        // id: 3018
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '749',
            'kanji' => '宇久井',
            'kana' => 'うくい',
            'romaji' => 'Ukui',
        ]);
        // id: 3019
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '749',
            'kanji' => '紀伊浦神',
            'kana' => 'きいうらがみ',
            'romaji' => 'Kii-Uragami',
        ]);
        // id: 3020
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '749',
            'kanji' => '紀伊勝浦',
            'kana' => 'きいかつうら',
            'romaji' => 'Kii-Katsuura',
        ]);
        // id: 3021
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '749',
            'kanji' => '紀伊天満',
            'kana' => 'きいてんま',
            'romaji' => 'Kii-Temma',
        ]);
        // id: 3022
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '749',
            'kanji' => '下里',
            'kana' => 'しもさと',
            'romaji' => 'Shimosato',
        ]);
        // id: 3023
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '749',
            'kanji' => '那智',
            'kana' => 'なち',
            'romaji' => 'Nachi',
        ]);
        // id: 3024
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '749',
            'kanji' => '湯川',
            'kana' => 'ゆかわ',
            'romaji' => 'Yukawa',
        ]);
        // id: 3025
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '750',
            'kanji' => '紀伊山田',
            'kana' => 'きいやまだ',
            'romaji' => 'Kii-Yamada',
        ]);
        // id: 3026
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '750',
            'kanji' => '高野口',
            'kana' => 'こうやぐち',
            'romaji' => 'Kōyaguchi',
        ]);
        // id: 3027
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '750',
            'kanji' => '下兵庫',
            'kana' => 'しもひょうご',
            'romaji' => 'Shimo-Hyōgo',
        ]);
        // id: 3028
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '750',
            'kanji' => '隅田',
            'kana' => 'すだ',
            'romaji' => 'Suda',
        ]);
        // id: 3029
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '750',
            'kanji' => '橋本',
            'kana' => 'はしもと',
            'romaji' => 'Hashimoto',
        ]);
        // id: 3030
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '751',
            'kanji' => '和佐',
            'kana' => 'わさ',
            'romaji' => 'Wasa',
        ]);
        // id: 3031
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '752',
            'kanji' => '紀伊内原',
            'kana' => 'きいうちはら',
            'romaji' => 'Kii-Uchihara',
        ]);
        // id: 3032
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '753',
            'kanji' => '広川ビーチ',
            'kana' => 'ひろかわびーち',
            'romaji' => 'Hirokawa-beach',
        ]);
        // id: 3033
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '754',
            'kanji' => '岩代',
            'kana' => 'いわしろ',
            'romaji' => 'Iwashiro',
        ]);
        // id: 3034
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '754',
            'kanji' => '南部',
            'kana' => 'みなべ',
            'romaji' => 'Minabe',
        ]);
        // id: 3035
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '755',
            'kanji' => '湯浅',
            'kana' => 'ゆあさ',
            'romaji' => 'Yuasa',
        ]);
        // id: 3036
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '756',
            'kanji' => '紀伊由良',
            'kana' => 'きいゆら',
            'romaji' => 'Kii-Yura',
        ]);
        // id: 3037
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '紀伊',
            'kana' => 'きい',
            'romaji' => 'Kii',
        ]);
        // id: 3038
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '紀伊小倉',
            'kana' => 'きいおぐら',
            'romaji' => 'Kii-Ogura',
        ]);
        // id: 3039
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '紀伊中ノ島',
            'kana' => 'きいなかのしま',
            'romaji' => 'Kii-Nakanoshima',
        ]);
        // id: 3040
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '紀三井寺',
            'kana' => 'きみいでら',
            'romaji' => 'Kimiidera',
        ]);
        // id: 3041
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '紀和',
            'kana' => 'きわ',
            'romaji' => 'Kiwa',
        ]);
        // id: 3042
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '千旦',
            'kana' => 'せんだ',
            'romaji' => 'Senda',
        ]);
        // id: 3043
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '田井ノ瀬',
            'kana' => 'たいのせ',
            'romaji' => 'Tainose',
        ]);
        // id: 3044
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '布施屋',
            'kana' => 'ほしや',
            'romaji' => 'Hoshiya',
        ]);
        // id: 3045
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '宮前',
            'kana' => 'みやまえ',
            'romaji' => 'Miyamae',
        ]);
        // id: 3046
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '六十谷',
            'kana' => 'むそた',
            'romaji' => 'Musota',
        ]);
        // id: 3047
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '和歌山',
            'kana' => 'わかやま',
            'romaji' => 'Wakayama',
        ]);
        // id: 3048
        Station::insert([
            'prefecture_id' => '30',
            'city_id' => '757',
            'kanji' => '和歌山市',
            'kana' => 'わかやまし',
            'romaji' => 'Wakayamashi',
        ]);
        // id: 3049
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '758',
            'kanji' => '岩美',
            'kana' => 'いわみ',
            'romaji' => 'Iwami',
        ]);
        // id: 3050
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '758',
            'kanji' => '大岩',
            'kana' => 'おおいわ',
            'romaji' => 'Ōiwa',
        ]);
        // id: 3051
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '758',
            'kanji' => '東浜',
            'kana' => 'ひがしはま',
            'romaji' => 'Higashihama',
        ]);
        // id: 3052
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '759',
            'kanji' => '倉吉',
            'kana' => 'くらよし',
            'romaji' => 'Kurayoshi',
        ]);
        // id: 3053
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '760',
            'kanji' => '江尾',
            'kana' => 'えび',
            'romaji' => 'Ebi',
        ]);
        // id: 3054
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '760',
            'kanji' => '武庫',
            'kana' => 'むこ',
            'romaji' => 'Muko',
        ]);
        // id: 3055
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '761',
            'kanji' => '赤碕',
            'kana' => 'あかさき',
            'romaji' => 'Akasaki',
        ]);
        // id: 3056
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '761',
            'kanji' => '浦安',
            'kana' => 'うらやす',
            'romaji' => 'Urayasu',
        ]);
        // id: 3057
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '761',
            'kanji' => '八橋',
            'kana' => 'やばせ',
            'romaji' => 'Yabase',
        ]);
        // id: 3058
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '762',
            'kanji' => '上道',
            'kana' => 'あがりみち',
            'romaji' => 'Agarimichi',
        ]);
        // id: 3059
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '762',
            'kanji' => '余子',
            'kana' => 'あまりこ',
            'romaji' => 'Amariko',
        ]);
        // id: 3060
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '762',
            'kanji' => '境港',
            'kana' => 'さかいみなと',
            'romaji' => 'Sakaiminato',
        ]);
        // id: 3061
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '762',
            'kanji' => '高松町',
            'kana' => 'たかまつちょう',
            'romaji' => 'Takamatsuchō',
        ]);
        // id: 3062
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '762',
            'kanji' => '中浜',
            'kana' => 'なかはま',
            'romaji' => 'Nakahama',
        ]);
        // id: 3063
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '762',
            'kanji' => '馬場崎町',
            'kana' => 'ばばさきちょう',
            'romaji' => 'Babasakichō',
        ]);
        // id: 3064
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '763',
            'kanji' => '下市',
            'kana' => 'しもいち',
            'romaji' => 'Shimoichi',
        ]);
        // id: 3065
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '763',
            'kanji' => '大山口',
            'kana' => 'だいせんぐち',
            'romaji' => 'Daisenguchi',
        ]);
        // id: 3066
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '763',
            'kanji' => '中山口',
            'kana' => 'なかやまぐち',
            'romaji' => 'Nakayamaguchi',
        ]);
        // id: 3067
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '763',
            'kanji' => '名和',
            'kana' => 'なわ',
            'romaji' => 'Nawa',
        ]);
        // id: 3068
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '763',
            'kanji' => '御来屋',
            'kana' => 'みくりや',
            'romaji' => 'Mikuriya',
        ]);
        // id: 3069
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '764',
            'kanji' => '智頭',
            'kana' => 'ちず',
            'romaji' => 'Chizu',
        ]);
        // id: 3070
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '764',
            'kanji' => '那岐',
            'kana' => 'なぎ',
            'romaji' => 'Nagi',
        ]);
        // id: 3071
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '764',
            'kanji' => '土師',
            'kana' => 'はじ',
            'romaji' => 'Haji',
        ]);
        // id: 3072
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '青谷',
            'kana' => 'あおや',
            'romaji' => 'Aoya',
        ]);
        // id: 3073
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '因幡社',
            'kana' => 'いなばやしろ',
            'romaji' => 'Inaba-Yashiro',
        ]);
        // id: 3074
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '国英',
            'kana' => 'くにふさ',
            'romaji' => 'Kunifusa',
        ]);
        // id: 3075
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '湖山',
            'kana' => 'こやま',
            'romaji' => 'Koyama',
        ]);
        // id: 3076
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '末恒',
            'kana' => 'すえつね',
            'romaji' => 'Suetsune',
        ]);
        // id: 3077
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '鷹狩',
            'kana' => 'たかがり',
            'romaji' => 'Takagari',
        ]);
        // id: 3078
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '津ノ井',
            'kana' => 'つのい',
            'romaji' => 'Tsunoi',
        ]);
        // id: 3079
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '鳥取',
            'kana' => 'とっとり',
            'romaji' => 'Tottori',
        ]);
        // id: 3080
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '鳥取大学前',
            'kana' => 'とっとりだいがくまえ',
            'romaji' => 'Tottoridaigakumae',
        ]);
        // id: 3081
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '浜村',
            'kana' => 'はまむら',
            'romaji' => 'Hamamura',
        ]);
        // id: 3082
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '福部',
            'kana' => 'ふくべ',
            'romaji' => 'Fukube',
        ]);
        // id: 3083
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '宝木',
            'kana' => 'ほうぎ',
            'romaji' => 'Hōgi',
        ]);
        // id: 3084
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '765',
            'kanji' => '用瀬',
            'kana' => 'もちがせ',
            'romaji' => 'Mochigase',
        ]);
        // id: 3085
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '766',
            'kanji' => '上石見',
            'kana' => 'かみいわみ',
            'romaji' => 'Kami-Iwami',
        ]);
        // id: 3086
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '766',
            'kanji' => '生山',
            'kana' => 'しょうやま',
            'romaji' => 'Shōyama',
        ]);
        // id: 3087
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '767',
            'kanji' => '上菅',
            'kana' => 'かみすげ',
            'romaji' => 'Kamisuge',
        ]);
        // id: 3088
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '767',
            'kanji' => '黒坂',
            'kana' => 'くろさか',
            'romaji' => 'Kurosaka',
        ]);
        // id: 3089
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '767',
            'kanji' => '根雨',
            'kana' => 'ねう',
            'romaji' => 'Neu',
        ]);
        // id: 3090
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '768',
            'kanji' => '岸本',
            'kana' => 'きしもと',
            'romaji' => 'Kishimoto',
        ]);
        // id: 3091
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '768',
            'kanji' => '伯耆溝口',
            'kana' => 'ほうきみぞぐち',
            'romaji' => 'Hōki-Mizoguchi',
        ]);
        // id: 3092
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '769',
            'kanji' => '下北条',
            'kana' => 'しもほうじょう',
            'romaji' => 'Shimohōjō',
        ]);
        // id: 3093
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '769',
            'kanji' => '由良',
            'kana' => 'ゆら',
            'romaji' => 'Yura',
        ]);
        // id: 3094
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '770',
            'kanji' => '河原',
            'kana' => 'かわはら',
            'romaji' => 'Kawahara',
        ]);
        // id: 3095
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '770',
            'kanji' => '郡家',
            'kana' => 'こおげ',
            'romaji' => 'Kōge',
        ]);
        // id: 3096
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '770',
            'kanji' => '東郡家',
            'kana' => 'ひがしこおげ',
            'romaji' => 'Higashi-Kōge',
        ]);
        // id: 3097
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '771',
            'kanji' => '泊',
            'kana' => 'とまり',
            'romaji' => 'Tomari',
        ]);
        // id: 3098
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '771',
            'kanji' => '松崎',
            'kana' => 'まつざき',
            'romaji' => 'Matsuzaki',
        ]);
        // id: 3099
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '大篠津町',
            'kana' => 'おおしのづちょう',
            'romaji' => 'Ōshinozuchō',
        ]);
        // id: 3100
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '河崎口',
            'kana' => 'かわさきぐち',
            'romaji' => 'Kawasakiguchi',
        ]);
        // id: 3101
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '後藤',
            'kana' => 'ごとう',
            'romaji' => 'Gotō',
        ]);
        // id: 3102
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '三本松口',
            'kana' => 'さんぼんまつぐち',
            'romaji' => 'Sambommatsuguchi',
        ]);
        // id: 3103
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '博労町',
            'kana' => 'ばくろうまち',
            'romaji' => 'Bakurōmachi',
        ]);
        // id: 3104
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '東山公園',
            'kana' => 'ひがしやまこうえん',
            'romaji' => 'Higashiyamakōen',
        ]);
        // id: 3105
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '富士見町',
            'kana' => 'ふじみちょう',
            'romaji' => 'Fujimichō',
        ]);
        // id: 3106
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '伯耆大山',
            'kana' => 'ほうきだいせん',
            'romaji' => 'Hōki-Daisen',
        ]);
        // id: 3107
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '弓ケ浜',
            'kana' => 'ゆみがはま',
            'romaji' => 'Yumigahama',
        ]);
        // id: 3108
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '淀江',
            'kana' => 'よどえ',
            'romaji' => 'Yodoe',
        ]);
        // id: 3109
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '米子',
            'kana' => 'よなご',
            'romaji' => 'Yonago',
        ]);
        // id: 3110
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '米子空港',
            'kana' => 'よなごくうこう',
            'romaji' => 'Yonago-airport',
        ]);
        // id: 3111
        Station::insert([
            'prefecture_id' => '31',
            'city_id' => '772',
            'kanji' => '和田浜',
            'kana' => 'わだはま',
            'romaji' => 'Wadahama',
        ]);
        // id: 3112
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '773',
            'kanji' => '出雲市',
            'kana' => 'いずもし',
            'romaji' => 'Izumoshi',
        ]);
        // id: 3113
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '773',
            'kanji' => '出雲神西',
            'kana' => 'いずもじんざい',
            'romaji' => 'Izumo-Jinzai',
        ]);
        // id: 3114
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '773',
            'kanji' => '小田',
            'kana' => 'おだ',
            'romaji' => 'Oda',
        ]);
        // id: 3115
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '773',
            'kanji' => '江南',
            'kana' => 'こうなん',
            'romaji' => 'Kōnan',
        ]);
        // id: 3116
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '773',
            'kanji' => '荘原',
            'kana' => 'しょうばら',
            'romaji' => 'Jōbara',
        ]);
        // id: 3117
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '773',
            'kanji' => '田儀',
            'kana' => 'たぎ',
            'romaji' => 'Tagi',
        ]);
        // id: 3118
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '773',
            'kanji' => '直江',
            'kana' => 'なおえ',
            'romaji' => 'Naoe',
        ]);
        // id: 3119
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '773',
            'kanji' => '西出雲',
            'kana' => 'にしいずも',
            'romaji' => 'Nishi-Izumo',
        ]);
        // id: 3120
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '774',
            'kanji' => '出雲大東',
            'kana' => 'いずもだいとう',
            'romaji' => 'Izumo-Daitō',
        ]);
        // id: 3121
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '774',
            'kanji' => '加茂中',
            'kana' => 'かもなか',
            'romaji' => 'Kamonaka',
        ]);
        // id: 3122
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '774',
            'kanji' => '木次',
            'kana' => 'きすき',
            'romaji' => 'Kisuki',
        ]);
        // id: 3123
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '774',
            'kanji' => '下久野',
            'kana' => 'しもくの',
            'romaji' => 'Shimokuno',
        ]);
        // id: 3124
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '774',
            'kanji' => '幡屋',
            'kana' => 'はたや',
            'romaji' => 'Hataya',
        ]);
        // id: 3125
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '774',
            'kanji' => '日登',
            'kana' => 'ひのぼり',
            'romaji' => 'Hinobori',
        ]);
        // id: 3126
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '774',
            'kanji' => '南大東',
            'kana' => 'みなみだいとう',
            'romaji' => 'Minami-Daitō',
        ]);
        // id: 3127
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '五十猛',
            'kana' => 'いそたけ',
            'romaji' => 'Isotake',
        ]);
        // id: 3128
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '石見福光',
            'kana' => 'いわみふくみつ',
            'romaji' => 'Iwami-Fukumitsu',
        ]);
        // id: 3129
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '大田市',
            'kana' => 'おおだし',
            'romaji' => 'Ōdashi',
        ]);
        // id: 3130
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '久手',
            'kana' => 'くて',
            'romaji' => 'Kute',
        ]);
        // id: 3131
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '静間',
            'kana' => 'しずま',
            'romaji' => 'Shizuma',
        ]);
        // id: 3132
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '仁万',
            'kana' => 'にま',
            'romaji' => 'Nima',
        ]);
        // id: 3133
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '波根',
            'kana' => 'はね',
            'romaji' => 'Hane',
        ]);
        // id: 3134
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '馬路',
            'kana' => 'まじ',
            'romaji' => 'Maji',
        ]);
        // id: 3135
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '湯里',
            'kana' => 'ゆさと',
            'romaji' => 'Yusato',
        ]);
        // id: 3136
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '775',
            'kanji' => '温泉津',
            'kana' => 'ゆのつ',
            'romaji' => 'Yunotsu',
        ]);
        // id: 3137
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '776',
            'kanji' => '出雲坂根',
            'kana' => 'いずもさかね',
            'romaji' => 'Izumo-Sakane',
        ]);
        // id: 3138
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '776',
            'kanji' => '出雲三成',
            'kana' => 'いずもみなり',
            'romaji' => 'Izumo-Minari',
        ]);
        // id: 3139
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '776',
            'kanji' => '出雲八代',
            'kana' => 'いずもやしろ',
            'romaji' => 'Izumo-Yashiro',
        ]);
        // id: 3140
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '776',
            'kanji' => '出雲横田',
            'kana' => 'いずもよこた',
            'romaji' => 'Izumo-Yokota',
        ]);
        // id: 3141
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '776',
            'kanji' => '亀嵩',
            'kana' => 'かめだけ',
            'romaji' => 'Kamedake',
        ]);
        // id: 3142
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '776',
            'kanji' => '三井野原',
            'kana' => 'みいのはら',
            'romaji' => 'Miinohara',
        ]);
        // id: 3143
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '776',
            'kanji' => '八川',
            'kana' => 'やかわ',
            'romaji' => 'Yakawa',
        ]);
        // id: 3144
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '777',
            'kanji' => '浅利',
            'kana' => 'あさり',
            'romaji' => 'Asari',
        ]);
        // id: 3145
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '777',
            'kanji' => '敬川',
            'kana' => 'うやがわ',
            'romaji' => 'Uyagawa',
        ]);
        // id: 3146
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '777',
            'kanji' => '黒松',
            'kana' => 'くろまつ',
            'romaji' => 'Kuromatsu',
        ]);
        // id: 3147
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '777',
            'kanji' => '江津',
            'kana' => 'ごうつ',
            'romaji' => 'Gōtsu',
        ]);
        // id: 3148
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '777',
            'kanji' => '都野津',
            'kana' => 'つのづ',
            'romaji' => 'Tsunozu',
        ]);
        // id: 3149
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '777',
            'kanji' => '波子',
            'kana' => 'はし',
            'romaji' => 'Hashi',
        ]);
        // id: 3150
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '778',
            'kanji' => '青野山',
            'kana' => 'あおのやま',
            'romaji' => 'Aonoyama',
        ]);
        // id: 3151
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '778',
            'kanji' => '青原',
            'kana' => 'あおはら',
            'romaji' => 'Aohara',
        ]);
        // id: 3152
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '778',
            'kanji' => '津和野',
            'kana' => 'つわの',
            'romaji' => 'Tsuwano',
        ]);
        // id: 3153
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '778',
            'kanji' => '日原',
            'kana' => 'にちはら',
            'romaji' => 'Nichihara',
        ]);
        // id: 3154
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '778',
            'kanji' => '東青原',
            'kana' => 'ひがしあおはら',
            'romaji' => 'Higashi-Aohara',
        ]);
        // id: 3155
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '779',
            'kanji' => '岡見',
            'kana' => 'おかみ',
            'romaji' => 'Okami',
        ]);
        // id: 3156
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '779',
            'kanji' => '折居',
            'kana' => 'おりい',
            'romaji' => 'Orii',
        ]);
        // id: 3157
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '779',
            'kanji' => '久代',
            'kana' => 'くしろ',
            'romaji' => 'Kushiro',
        ]);
        // id: 3158
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '779',
            'kanji' => '下府',
            'kana' => 'しもこう',
            'romaji' => 'Shimokō',
        ]);
        // id: 3159
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '779',
            'kanji' => '周布',
            'kana' => 'すふ',
            'romaji' => 'Sufu',
        ]);
        // id: 3160
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '779',
            'kanji' => '西浜田',
            'kana' => 'にしはまだ',
            'romaji' => 'Nishi-Hamada',
        ]);
        // id: 3161
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '779',
            'kanji' => '浜田',
            'kana' => 'はまだ',
            'romaji' => 'Hamada',
        ]);
        // id: 3162
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '779',
            'kanji' => '三保三隅',
            'kana' => 'みほみすみ',
            'romaji' => 'Miho-Misumi',
        ]);
        // id: 3163
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '780',
            'kanji' => '飯浦',
            'kana' => 'いいのうら',
            'romaji' => 'Iinoura',
        ]);
        // id: 3164
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '780',
            'kanji' => '石見津田',
            'kana' => 'いわみつだ',
            'romaji' => 'Iwami-Tsuda',
        ]);
        // id: 3165
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '780',
            'kanji' => '石見横田',
            'kana' => 'いわみよこた',
            'romaji' => 'Iwami-Yokota',
        ]);
        // id: 3166
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '780',
            'kanji' => '鎌手',
            'kana' => 'かまて',
            'romaji' => 'Kamate',
        ]);
        // id: 3167
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '780',
            'kanji' => '戸田小浜',
            'kana' => 'とだこはま',
            'romaji' => 'Toda-Kohama',
        ]);
        // id: 3168
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '780',
            'kanji' => '本俣賀',
            'kana' => 'ほんまたが',
            'romaji' => 'Hommataga',
        ]);
        // id: 3169
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '780',
            'kanji' => '益田',
            'kana' => 'ますだ',
            'romaji' => 'Masuda',
        ]);
        // id: 3170
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '781',
            'kanji' => '揖屋',
            'kana' => 'いや',
            'romaji' => 'Iya',
        ]);
        // id: 3171
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '781',
            'kanji' => '来待',
            'kana' => 'きまち',
            'romaji' => 'Kimachi',
        ]);
        // id: 3172
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '781',
            'kanji' => '宍道',
            'kana' => 'しんじ',
            'romaji' => 'Shinji',
        ]);
        // id: 3173
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '781',
            'kanji' => '玉造温泉',
            'kana' => 'たまつくりおんせん',
            'romaji' => 'Tamatsukurionsen',
        ]);
        // id: 3174
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '781',
            'kanji' => '乃木',
            'kana' => 'のぎ',
            'romaji' => 'Nogi',
        ]);
        // id: 3175
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '781',
            'kanji' => '東松江',
            'kana' => 'ひがしまつえ',
            'romaji' => 'Higashi-Matsue',
        ]);
        // id: 3176
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '781',
            'kanji' => '松江',
            'kana' => 'まつえ',
            'romaji' => 'Matsue',
        ]);
        // id: 3177
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '781',
            'kanji' => '南宍道',
            'kana' => 'みなみしんじ',
            'romaji' => 'Minami-Shinji',
        ]);
        // id: 3178
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '782',
            'kanji' => '荒島',
            'kana' => 'あらしま',
            'romaji' => 'Arashima',
        ]);
        // id: 3179
        Station::insert([
            'prefecture_id' => '32',
            'city_id' => '782',
            'kanji' => '安来',
            'kana' => 'やすぎ',
            'romaji' => 'Yasugi',
        ]);
        // id: 3180
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '783',
            'kanji' => '熊山',
            'kana' => 'くまやま',
            'romaji' => 'Kumayama',
        ]);
        // id: 3181
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '784',
            'kanji' => '鴨方',
            'kana' => 'かもがた',
            'romaji' => 'Kamogata',
        ]);
        // id: 3182
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '784',
            'kanji' => '金光',
            'kana' => 'こんこう',
            'romaji' => 'Konkō',
        ]);
        // id: 3183
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '足守',
            'kana' => 'あしもり',
            'romaji' => 'Ashimori',
        ]);
        // id: 3184
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '植松',
            'kana' => 'うえまつ',
            'romaji' => 'Uematsu',
        ]);
        // id: 3185
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '大多羅',
            'kana' => 'おおだら',
            'romaji' => 'Ōdara',
        ]);
        // id: 3186
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '大元',
            'kana' => 'おおもと',
            'romaji' => 'Ōmoto',
        ]);
        // id: 3187
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '岡山',
            'kana' => 'おかやま',
            'romaji' => 'Okayama',
        ]);
        // id: 3188
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '金川',
            'kana' => 'かながわ',
            'romaji' => 'Kanagawa',
        ]);
        // id: 3189
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '北長瀬',
            'kana' => 'きたながせ',
            'romaji' => 'Kita-Nagase',
        ]);
        // id: 3190
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '吉備津',
            'kana' => 'きびつ',
            'romaji' => 'Kibitsu',
        ]);
        // id: 3191
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '西大寺',
            'kana' => 'さいだいじ',
            'romaji' => 'Saidaiji',
        ]);
        // id: 3192
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '上道',
            'kana' => 'じょうとう',
            'romaji' => 'Jōtō',
        ]);
        // id: 3193
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '瀬戸',
            'kana' => 'せと',
            'romaji' => 'Seto',
        ]);
        // id: 3194
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '妹尾',
            'kana' => 'せのお',
            'romaji' => 'Senoo',
        ]);
        // id: 3195
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '大安寺',
            'kana' => 'だいあんじ',
            'romaji' => 'Daianji',
        ]);
        // id: 3196
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '高島',
            'kana' => 'たかしま',
            'romaji' => 'Takashima',
        ]);
        // id: 3197
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '建部',
            'kana' => 'たけべ',
            'romaji' => 'Takebe',
        ]);
        // id: 3198
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '玉柏',
            'kana' => 'たまがし',
            'romaji' => 'Tamagashi',
        ]);
        // id: 3199
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '西川原',
            'kana' => 'にしがわら',
            'romaji' => 'Nishigawara',
        ]);
        // id: 3200
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '庭瀬',
            'kana' => 'にわせ',
            'romaji' => 'Niwase',
        ]);
        // id: 3201
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '野々口',
            'kana' => 'ののくち',
            'romaji' => 'Nonokuchi',
        ]);
        // id: 3202
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '迫川',
            'kana' => 'はざかわ',
            'romaji' => 'Hazakawa',
        ]);
        // id: 3203
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '東岡山',
            'kana' => 'ひがしおかやま',
            'romaji' => 'Higashi-Okayama',
        ]);
        // id: 3204
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '彦崎',
            'kana' => 'ひこさき',
            'romaji' => 'Hikosaki',
        ]);
        // id: 3205
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '備前一宮',
            'kana' => 'びぜんいちのみや',
            'romaji' => 'Bizen-Ichinomiya',
        ]);
        // id: 3206
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '備前片岡',
            'kana' => 'びぜんかたおか',
            'romaji' => 'Bizen-Kataoka',
        ]);
        // id: 3207
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '備前西市',
            'kana' => 'びぜんにしいち',
            'romaji' => 'Bizen-Nishiichi',
        ]);
        // id: 3208
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '備前原',
            'kana' => 'びぜんはら',
            'romaji' => 'Bizen-Hara',
        ]);
        // id: 3209
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '備前三門',
            'kana' => 'びぜんみかど',
            'romaji' => 'Bizen-Mikado',
        ]);
        // id: 3210
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '備中高松',
            'kana' => 'びっちゅうたかまつ',
            'romaji' => 'Bitchū-Takamatsu',
        ]);
        // id: 3211
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '備中箕島',
            'kana' => 'びっちゅうみしま',
            'romaji' => 'Bitchū-Mishima',
        ]);
        // id: 3212
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '福渡',
            'kana' => 'ふくわたり',
            'romaji' => 'Fukuwatari',
        ]);
        // id: 3213
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '法界院',
            'kana' => 'ほうかいいん',
            'romaji' => 'Hōkaiin',
        ]);
        // id: 3214
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '牧山',
            'kana' => 'まきやま',
            'romaji' => 'Makiyama',
        ]);
        // id: 3215
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '785',
            'kanji' => '万富',
            'kana' => 'まんとみ',
            'romaji' => 'Mantomi',
        ]);
        // id: 3216
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '786',
            'kanji' => '笠岡',
            'kana' => 'かさおか',
            'romaji' => 'Kasaoka',
        ]);
        // id: 3217
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '787',
            'kanji' => '神目',
            'kana' => 'こうめ',
            'romaji' => 'Kōme',
        ]);
        // id: 3218
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '787',
            'kanji' => '誕生寺',
            'kana' => 'たんじょうじ',
            'romaji' => 'Tanjōji',
        ]);
        // id: 3219
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '787',
            'kanji' => '弓削',
            'kana' => 'ゆげ',
            'romaji' => 'Yuge',
        ]);
        // id: 3220
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '788',
            'kanji' => '上の町',
            'kana' => 'かみのちょう',
            'romaji' => 'Kaminochō',
        ]);
        // id: 3221
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '788',
            'kanji' => '木見',
            'kana' => 'きみ',
            'romaji' => 'Kimi',
        ]);
        // id: 3222
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '788',
            'kanji' => '倉敷',
            'kana' => 'くらしき',
            'romaji' => 'Kurashiki',
        ]);
        // id: 3223
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '788',
            'kanji' => '児島',
            'kana' => 'こじま',
            'romaji' => 'Kojima',
        ]);
        // id: 3224
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '788',
            'kanji' => '新倉敷',
            'kana' => 'しんくらしき',
            'romaji' => 'Shin-Kurashiki',
        ]);
        // id: 3225
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '788',
            'kanji' => '茶屋町',
            'kana' => 'ちゃやまち',
            'romaji' => 'Chayamachi',
        ]);
        // id: 3226
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '788',
            'kanji' => '中庄',
            'kana' => 'なかしょう',
            'romaji' => 'Nakashō',
        ]);
        // id: 3227
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '788',
            'kanji' => '西阿知',
            'kana' => 'にしあち',
            'romaji' => 'Nishi-Achi',
        ]);
        // id: 3228
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '789',
            'kanji' => '里庄',
            'kana' => 'さとしょう',
            'romaji' => 'Satoshō',
        ]);
        // id: 3229
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '790',
            'kanji' => '勝間田',
            'kana' => 'かつまだ',
            'romaji' => 'Katsumada',
        ]);
        // id: 3230
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '790',
            'kanji' => '西勝間田',
            'kana' => 'にしかつまだ',
            'romaji' => 'Nishi-Katsumada',
        ]);
        // id: 3231
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '791',
            'kanji' => '大富',
            'kana' => 'おおどみ',
            'romaji' => 'Ōdomi',
        ]);
        // id: 3232
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '791',
            'kanji' => '邑久',
            'kana' => 'おく',
            'romaji' => 'Oku',
        ]);
        // id: 3233
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '791',
            'kanji' => '長船',
            'kana' => 'おさふね',
            'romaji' => 'Osafune',
        ]);
        // id: 3234
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '792',
            'kanji' => '清音',
            'kana' => 'きよね',
            'romaji' => 'Kiyone',
        ]);
        // id: 3235
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '792',
            'kanji' => '豪渓',
            'kana' => 'ごうけい',
            'romaji' => 'Gōkei',
        ]);
        // id: 3236
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '792',
            'kanji' => '総社',
            'kana' => 'そうじゃ',
            'romaji' => 'Sōja',
        ]);
        // id: 3237
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '792',
            'kanji' => '服部',
            'kana' => 'はっとり',
            'romaji' => 'Hattori',
        ]);
        // id: 3238
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '792',
            'kanji' => '東総社',
            'kana' => 'ひがしそうじゃ',
            'romaji' => 'Higashi-Sōja',
        ]);
        // id: 3239
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '792',
            'kanji' => '日羽',
            'kana' => 'ひわ',
            'romaji' => 'Hiwa',
        ]);
        // id: 3240
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '792',
            'kanji' => '美袋',
            'kana' => 'みなぎ',
            'romaji' => 'Minagi',
        ]);
        // id: 3241
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '793',
            'kanji' => '木野山',
            'kana' => 'きのやま',
            'romaji' => 'Kinoyama',
        ]);
        // id: 3242
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '793',
            'kanji' => '備中川面',
            'kana' => 'びっちゅうかわも',
            'romaji' => 'Bitchū-Kawamo',
        ]);
        // id: 3243
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '793',
            'kanji' => '備中高梁',
            'kana' => 'びっちゅうたかはし',
            'romaji' => 'Bitchū-Takahashi',
        ]);
        // id: 3244
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '793',
            'kanji' => '備中広瀬',
            'kana' => 'びっちゅうひろせ',
            'romaji' => 'Bitchū-Hirose',
        ]);
        // id: 3245
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '793',
            'kanji' => '方谷',
            'kana' => 'ほうこく',
            'romaji' => 'Hōkoku',
        ]);
        // id: 3246
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '794',
            'kanji' => '宇野',
            'kana' => 'うの',
            'romaji' => 'Uno',
        ]);
        // id: 3247
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '794',
            'kanji' => '常山',
            'kana' => 'つねやま',
            'romaji' => 'Tsuneyama',
        ]);
        // id: 3248
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '794',
            'kanji' => '八浜',
            'kana' => 'はちはま',
            'romaji' => 'Hachihama',
        ]);
        // id: 3249
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '794',
            'kanji' => '備前田井',
            'kana' => 'びぜんたい',
            'romaji' => 'Bizen-Tai',
        ]);
        // id: 3250
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '院庄',
            'kana' => 'いんのしょう',
            'romaji' => 'Innoshō',
        ]);
        // id: 3251
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '佐良山',
            'kana' => 'さらやま',
            'romaji' => 'Sarayama',
        ]);
        // id: 3252
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '高野',
            'kana' => 'たかの',
            'romaji' => 'Takano',
        ]);
        // id: 3253
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '知和',
            'kana' => 'ちわ',
            'romaji' => 'Chiwa',
        ]);
        // id: 3254
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '坪井',
            'kana' => 'つぼい',
            'romaji' => 'Tsuboi',
        ]);
        // id: 3255
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '津山',
            'kana' => 'つやま',
            'romaji' => 'Tsuyama',
        ]);
        // id: 3256
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '津山口',
            'kana' => 'つやまぐち',
            'romaji' => 'Tsuyamaguchi',
        ]);
        // id: 3257
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '東津山',
            'kana' => 'ひがしつやま',
            'romaji' => 'Higashi-Tsuyama',
        ]);
        // id: 3258
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '三浦',
            'kana' => 'みうら',
            'romaji' => 'Miura',
        ]);
        // id: 3259
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '美作大崎',
            'kana' => 'みまさかおおさき',
            'romaji' => 'Mimasaka-Ōsaki',
        ]);
        // id: 3260
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '美作加茂',
            'kana' => 'みまさかかも',
            'romaji' => 'Mimasaka-Kamo',
        ]);
        // id: 3261
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '美作河井',
            'kana' => 'みまさかかわい',
            'romaji' => 'Mimasaka-Kawai',
        ]);
        // id: 3262
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '美作千代',
            'kana' => 'みまさかせんだい',
            'romaji' => 'Mimasaka-Sendai',
        ]);
        // id: 3263
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '795',
            'kanji' => '美作滝尾',
            'kana' => 'みまさかたきお',
            'romaji' => 'Mimasaka-Takio',
        ]);
        // id: 3264
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '足立',
            'kana' => 'あしだち',
            'romaji' => 'Ashidachi',
        ]);
        // id: 3265
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '井倉',
            'kana' => 'いくら',
            'romaji' => 'Ikura',
        ]);
        // id: 3266
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '石蟹',
            'kana' => 'いしが',
            'romaji' => 'Ishiga',
        ]);
        // id: 3267
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '市岡',
            'kana' => 'いちおか',
            'romaji' => 'Ichioka',
        ]);
        // id: 3268
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '岩山',
            'kana' => 'いわやま',
            'romaji' => 'Iwayama',
        ]);
        // id: 3269
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '刑部',
            'kana' => 'おさかべ',
            'romaji' => 'Osakabe',
        ]);
        // id: 3270
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '坂根',
            'kana' => 'さかね',
            'romaji' => 'Sakane',
        ]);
        // id: 3271
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '丹治部',
            'kana' => 'たじべ',
            'romaji' => 'Tajibe',
        ]);
        // id: 3272
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '新郷',
            'kana' => 'にいざと',
            'romaji' => 'Niizato',
        ]);
        // id: 3273
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '新見',
            'kana' => 'にいみ',
            'romaji' => 'Niimi',
        ]);
        // id: 3274
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '布原',
            'kana' => 'ぬのはら',
            'romaji' => 'Nunohara',
        ]);
        // id: 3275
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '野馳',
            'kana' => 'のち',
            'romaji' => 'Nochi',
        ]);
        // id: 3276
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '備中神代',
            'kana' => 'びっちゅうこうじろ',
            'romaji' => 'Bitchū-Kōjiro',
        ]);
        // id: 3277
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '796',
            'kanji' => '矢神',
            'kana' => 'やがみ',
            'romaji' => 'Yagami',
        ]);
        // id: 3278
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '797',
            'kanji' => '久々原',
            'kana' => 'くぐはら',
            'romaji' => 'Kuguhara',
        ]);
        // id: 3279
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '797',
            'kanji' => '早島',
            'kana' => 'はやしま',
            'romaji' => 'Hayashima',
        ]);
        // id: 3280
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '伊里',
            'kana' => 'いり',
            'romaji' => 'Iri',
        ]);
        // id: 3281
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '伊部',
            'kana' => 'いんべ',
            'romaji' => 'Imbe',
        ]);
        // id: 3282
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '香登',
            'kana' => 'かがと',
            'romaji' => 'Kagato',
        ]);
        // id: 3283
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '寒河',
            'kana' => 'そうご',
            'romaji' => 'Sōgo',
        ]);
        // id: 3284
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '西片上',
            'kana' => 'にしかたかみ',
            'romaji' => 'Nishi-Katakami',
        ]);
        // id: 3285
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '備前片上',
            'kana' => 'びぜんかたかみ',
            'romaji' => 'Bizen-Katakami',
        ]);
        // id: 3286
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '日生',
            'kana' => 'ひなせ',
            'romaji' => 'Hinase',
        ]);
        // id: 3287
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '三石',
            'kana' => 'みついし',
            'romaji' => 'Mitsuishi',
        ]);
        // id: 3288
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '798',
            'kanji' => '吉永',
            'kana' => 'よしなが',
            'romaji' => 'Yoshinaga',
        ]);
        // id: 3289
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '799',
            'kanji' => '久世',
            'kana' => 'くせ',
            'romaji' => 'Kuse',
        ]);
        // id: 3290
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '799',
            'kanji' => '古見',
            'kana' => 'こみ',
            'romaji' => 'Komi',
        ]);
        // id: 3291
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '799',
            'kanji' => '中国勝山',
            'kana' => 'ちゅうごくかつやま',
            'romaji' => 'Chūgoku-Katsuyama',
        ]);
        // id: 3292
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '799',
            'kanji' => '月田',
            'kana' => 'つきだ',
            'romaji' => 'Tsukida',
        ]);
        // id: 3293
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '799',
            'kanji' => '富原',
            'kana' => 'とみはら',
            'romaji' => 'Tomihara',
        ]);
        // id: 3294
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '799',
            'kanji' => '美作追分',
            'kana' => 'みまさかおいわけ',
            'romaji' => 'Mimasaka-Oiwake',
        ]);
        // id: 3295
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '799',
            'kanji' => '美作落合',
            'kana' => 'みまさかおちあい',
            'romaji' => 'Mimasaka-Ochiai',
        ]);
        // id: 3296
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '800',
            'kanji' => '小原',
            'kana' => 'おばら',
            'romaji' => 'Obara',
        ]);
        // id: 3297
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '800',
            'kanji' => '亀甲',
            'kana' => 'かめのこう',
            'romaji' => 'Kamenokō',
        ]);
        // id: 3298
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '801',
            'kanji' => '楢原',
            'kana' => 'ならはら',
            'romaji' => 'Narahara',
        ]);
        // id: 3299
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '801',
            'kanji' => '林野',
            'kana' => 'はやしの',
            'romaji' => 'Hayashino',
        ]);
        // id: 3300
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '801',
            'kanji' => '美作江見',
            'kana' => 'みまさかえみ',
            'romaji' => 'Mimasaka-Emi',
        ]);
        // id: 3301
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '801',
            'kanji' => '美作土居',
            'kana' => 'みまさかどい',
            'romaji' => 'Mimasaka-Doi',
        ]);
        // id: 3302
        Station::insert([
            'prefecture_id' => '33',
            'city_id' => '802',
            'kanji' => '和気',
            'kana' => 'わけ',
            'romaji' => 'Wake',
        ]);
        // id: 3303
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '803',
            'kanji' => '甲立',
            'kana' => 'こうたち',
            'romaji' => 'Kōtachi',
        ]);
        // id: 3304
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '803',
            'kanji' => '向原',
            'kana' => 'むかいはら',
            'romaji' => 'Mukaihara',
        ]);
        // id: 3305
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '803',
            'kanji' => '吉田口',
            'kana' => 'よしだぐち',
            'romaji' => 'Yoshidaguchi',
        ]);
        // id: 3306
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '804',
            'kanji' => '大竹',
            'kana' => 'おおたけ',
            'romaji' => 'Ōtake',
        ]);
        // id: 3307
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '804',
            'kanji' => '玖波',
            'kana' => 'くば',
            'romaji' => 'Kuba',
        ]);
        // id: 3308
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '805',
            'kanji' => '尾道',
            'kana' => 'おのみち',
            'romaji' => 'Onomichi',
        ]);
        // id: 3309
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '805',
            'kanji' => '新尾道',
            'kana' => 'しんおのみち',
            'romaji' => 'Shin-Onomichi',
        ]);
        // id: 3310
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '805',
            'kanji' => '東尾道',
            'kana' => 'ひがしおのみち',
            'romaji' => 'Higashi-Onomichi',
        ]);
        // id: 3311
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '806',
            'kanji' => '海田市',
            'kana' => 'かいたいち',
            'romaji' => 'Kaitaichi',
        ]);
        // id: 3312
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '安芸阿賀',
            'kana' => 'あきあが',
            'romaji' => 'Aki-Aga',
        ]);
        // id: 3313
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '安芸川尻',
            'kana' => 'あきかわじり',
            'romaji' => 'Aki-Kawajiri',
        ]);
        // id: 3314
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '安登',
            'kana' => 'あと',
            'romaji' => 'Ato',
        ]);
        // id: 3315
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => 'かるが浜',
            'kana' => 'かるがはま',
            'romaji' => 'Karugahama',
        ]);
        // id: 3316
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '川原石',
            'kana' => 'かわらいし',
            'romaji' => 'Kawaraishi',
        ]);
        // id: 3317
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '呉',
            'kana' => 'くれ',
            'romaji' => 'Kure',
        ]);
        // id: 3318
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '呉ポートピア',
            'kana' => 'くれぽーとぴあ',
            'romaji' => 'Kure-portpia',
        ]);
        // id: 3319
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '新広',
            'kana' => 'しんひろ',
            'romaji' => 'Shin-Hiro',
        ]);
        // id: 3320
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '天応',
            'kana' => 'てんのう',
            'romaji' => 'Tennō',
        ]);
        // id: 3321
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '仁方',
            'kana' => 'にがた',
            'romaji' => 'Nigata',
        ]);
        // id: 3322
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '広',
            'kana' => 'ひろ',
            'romaji' => 'Hiro',
        ]);
        // id: 3323
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '安浦',
            'kana' => 'やすうら',
            'romaji' => 'Yasuura',
        ]);
        // id: 3324
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '807',
            'kanji' => '吉浦',
            'kana' => 'よしうら',
            'romaji' => 'Yoshiura',
        ]);
        // id: 3325
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '808',
            'kanji' => '小屋浦',
            'kana' => 'こやうら',
            'romaji' => 'Koyaura',
        ]);
        // id: 3326
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '808',
            'kanji' => '坂',
            'kana' => 'さか',
            'romaji' => 'Saka',
        ]);
        // id: 3327
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '808',
            'kanji' => '水尻',
            'kana' => 'みずしり',
            'romaji' => 'Mizushiri',
        ]);
        // id: 3328
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '内名',
            'kana' => 'うちな',
            'romaji' => 'Uchina',
        ]);
        // id: 3329
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '小奴可',
            'kana' => 'おぬか',
            'romaji' => 'Onuka',
        ]);
        // id: 3330
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '高',
            'kana' => 'たか',
            'romaji' => 'Taka',
        ]);
        // id: 3331
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '道後山',
            'kana' => 'どうごやま',
            'romaji' => 'Dōgoyama',
        ]);
        // id: 3332
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '東城',
            'kana' => 'とうじょう',
            'romaji' => 'Tōjō',
        ]);
        // id: 3333
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '七塚',
            'kana' => 'ななつか',
            'romaji' => 'Nanatsuka',
        ]);
        // id: 3334
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '比婆山',
            'kana' => 'ひばやま',
            'romaji' => 'Hibayama',
        ]);
        // id: 3335
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '平子',
            'kana' => 'ひらこ',
            'romaji' => 'Hirako',
        ]);
        // id: 3336
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '備後落合',
            'kana' => 'びんごおちあい',
            'romaji' => 'Bingo-Ochiai',
        ]);
        // id: 3337
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '備後西城',
            'kana' => 'びんごさいじょう',
            'romaji' => 'Bingo-Saijō',
        ]);
        // id: 3338
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '備後庄原',
            'kana' => 'びんごしょうばら',
            'romaji' => 'Bingo-Shōbara',
        ]);
        // id: 3339
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '備後三日市',
            'kana' => 'びんごみっかいち',
            'romaji' => 'Bingo-Mikkaichi',
        ]);
        // id: 3340
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '備後八幡',
            'kana' => 'びんごやわた',
            'romaji' => 'Bingo-Yawata',
        ]);
        // id: 3341
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '山ノ内',
            'kana' => 'やまのうち',
            'romaji' => 'Yamanouchi',
        ]);
        // id: 3342
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '809',
            'kanji' => '油木',
            'kana' => 'ゆき',
            'romaji' => 'Yuki',
        ]);
        // id: 3343
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '810',
            'kanji' => '備後三川',
            'kana' => 'びんごみかわ',
            'romaji' => 'Bingo-Mikawa',
        ]);
        // id: 3344
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '811',
            'kanji' => '安芸長浜',
            'kana' => 'あきながはま',
            'romaji' => 'Aki-Nagahama',
        ]);
        // id: 3345
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '811',
            'kanji' => '大乗',
            'kana' => 'おおのり',
            'romaji' => 'Ōnori',
        ]);
        // id: 3346
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '811',
            'kanji' => '竹原',
            'kana' => 'たけはら',
            'romaji' => 'Takehara',
        ]);
        // id: 3347
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '811',
            'kanji' => '忠海',
            'kana' => 'ただのうみ',
            'romaji' => 'Tadanoumi',
        ]);
        // id: 3348
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '811',
            'kanji' => '吉名',
            'kana' => 'よしな',
            'romaji' => 'Yoshina',
        ]);
        // id: 3349
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '812',
            'kanji' => '阿品',
            'kana' => 'あじな',
            'romaji' => 'Ajina',
        ]);
        // id: 3350
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '812',
            'kanji' => '大野浦',
            'kana' => 'おおのうら',
            'romaji' => 'Ōnoura',
        ]);
        // id: 3351
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '812',
            'kanji' => '廿日市',
            'kana' => 'はつかいち',
            'romaji' => 'Hatsukaichi',
        ]);
        // id: 3352
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '812',
            'kanji' => '前空',
            'kana' => 'まえぞら',
            'romaji' => 'Maezora',
        ]);
        // id: 3353
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '812',
            'kanji' => '宮内串戸',
            'kana' => 'みやうちくしど',
            'romaji' => 'Miyauchi-Kushido',
        ]);
        // id: 3354
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '812',
            'kanji' => '宮島口',
            'kana' => 'みやじまぐち',
            'romaji' => 'Miyajimaguchi',
        ]);
        // id: 3355
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '安芸津',
            'kana' => 'あきつ',
            'romaji' => 'Akitsu',
        ]);
        // id: 3356
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '風早',
            'kana' => 'かざはや',
            'romaji' => 'Kazahaya',
        ]);
        // id: 3357
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '河内',
            'kana' => 'こうち',
            'romaji' => 'Kōchi',
        ]);
        // id: 3358
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '西条',
            'kana' => 'さいじょう',
            'romaji' => 'Saijō',
        ]);
        // id: 3359
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '寺家',
            'kana' => 'じけ',
            'romaji' => 'Jike',
        ]);
        // id: 3360
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '白市',
            'kana' => 'しらいち',
            'romaji' => 'Shiraichi',
        ]);
        // id: 3361
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '西高屋',
            'kana' => 'にしたかや',
            'romaji' => 'Nishitakaya',
        ]);
        // id: 3362
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '入野',
            'kana' => 'にゅうの',
            'romaji' => 'Nyūno',
        ]);
        // id: 3363
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '八本松',
            'kana' => 'はちほんまつ',
            'romaji' => 'Hachihommatsu',
        ]);
        // id: 3364
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '813',
            'kanji' => '東広島',
            'kana' => 'ひがしひろしま',
            'romaji' => 'Higashi-Hiroshima',
        ]);
        // id: 3365
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => 'あき亀山',
            'kana' => 'あきかめやま',
            'romaji' => 'Aki-Kameyama',
        ]);
        // id: 3366
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '安芸長束',
            'kana' => 'あきながつか',
            'romaji' => 'Aki-Nagatsuka',
        ]);
        // id: 3367
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '安芸中野',
            'kana' => 'あきなかの',
            'romaji' => 'Aki-Nakano',
        ]);
        // id: 3368
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '安芸矢口',
            'kana' => 'あきやぐち',
            'romaji' => 'Aki-Yaguchi',
        ]);
        // id: 3369
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '五日市',
            'kana' => 'いつかいち',
            'romaji' => 'Itsukaichi',
        ]);
        // id: 3370
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '井原市',
            'kana' => 'いばらいち',
            'romaji' => 'Ibaraichi',
        ]);
        // id: 3371
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '大町',
            'kana' => 'おおまち',
            'romaji' => 'Ōmachi',
        ]);
        // id: 3372
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '可部',
            'kana' => 'かべ',
            'romaji' => 'Kabe',
        ]);
        // id: 3373
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '上深川',
            'kana' => 'かみふかわ',
            'romaji' => 'Kami-Fukawa',
        ]);
        // id: 3374
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '上三田',
            'kana' => 'かみみた',
            'romaji' => 'Kami-Mita',
        ]);
        // id: 3375
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '上八木',
            'kana' => 'かみやぎ',
            'romaji' => 'Kamiyagi',
        ]);
        // id: 3376
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '狩留家',
            'kana' => 'かるが',
            'romaji' => 'Karuga',
        ]);
        // id: 3377
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '玖村',
            'kana' => 'くむら',
            'romaji' => 'Kumura',
        ]);
        // id: 3378
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '河戸帆待川',
            'kana' => 'こうどほまちがわ',
            'romaji' => 'Kōdo-Homachigawa',
        ]);
        // id: 3379
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '七軒茶屋',
            'kana' => 'しちけんぢゃや',
            'romaji' => 'Shichikenjaya',
        ]);
        // id: 3380
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '下祇園',
            'kana' => 'しもぎおん',
            'romaji' => 'Shimo-Gion',
        ]);
        // id: 3381
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '下深川',
            'kana' => 'しもふかわ',
            'romaji' => 'Shimo-Fukawa',
        ]);
        // id: 3382
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '白木山',
            'kana' => 'しらきやま',
            'romaji' => 'Shirakiyama',
        ]);
        // id: 3383
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '志和口',
            'kana' => 'しわぐち',
            'romaji' => 'Shiwaguchi',
        ]);
        // id: 3384
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '新井口',
            'kana' => 'しんいのくち',
            'romaji' => 'Shin-Inokuchi',
        ]);
        // id: 3385
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '新白島',
            'kana' => 'しんはくしま',
            'romaji' => 'Shin-Hakushima',
        ]);
        // id: 3386
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '瀬野',
            'kana' => 'せの',
            'romaji' => 'Seno',
        ]);
        // id: 3387
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '天神川',
            'kana' => 'てんじんがわ',
            'romaji' => 'Tenjingawa',
        ]);
        // id: 3388
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '中島',
            'kana' => 'なかしま',
            'romaji' => 'Nakashima',
        ]);
        // id: 3389
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '中野東',
            'kana' => 'なかのひがし',
            'romaji' => 'Nakanohigashi',
        ]);
        // id: 3390
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '中深川',
            'kana' => 'なかふかわ',
            'romaji' => 'Naka-Fukawa',
        ]);
        // id: 3391
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '中三田',
            'kana' => 'なかみた',
            'romaji' => 'Naka-Mita',
        ]);
        // id: 3392
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '西広島',
            'kana' => 'にしひろしま',
            'romaji' => 'Nishi-Hiroshima',
        ]);
        // id: 3393
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '梅林',
            'kana' => 'ばいりん',
            'romaji' => 'Bairin',
        ]);
        // id: 3394
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '広島',
            'kana' => 'ひろしま',
            'romaji' => 'Hiroshima',
        ]);
        // id: 3395
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '古市橋',
            'kana' => 'ふるいちばし',
            'romaji' => 'Furuichibashi',
        ]);
        // id: 3396
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '戸坂',
            'kana' => 'へさか',
            'romaji' => 'Hesaka',
        ]);
        // id: 3397
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '三滝',
            'kana' => 'みたき',
            'romaji' => 'Mitaki',
        ]);
        // id: 3398
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '緑井',
            'kana' => 'みどりい',
            'romaji' => 'Modorii',
        ]);
        // id: 3399
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '矢賀',
            'kana' => 'やが',
            'romaji' => 'Yaga',
        ]);
        // id: 3400
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '矢野',
            'kana' => 'やの',
            'romaji' => 'Yano',
        ]);
        // id: 3401
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '814',
            'kanji' => '横川',
            'kana' => 'よこがわ',
            'romaji' => 'Yokogawa',
        ]);
        // id: 3402
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '駅家',
            'kana' => 'えきや',
            'romaji' => 'Ekiya',
        ]);
        // id: 3403
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '上戸手',
            'kana' => 'かみとで',
            'romaji' => 'Kami-Tode',
        ]);
        // id: 3404
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '神辺',
            'kana' => 'かんなべ',
            'romaji' => 'Kannabe',
        ]);
        // id: 3405
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '新市',
            'kana' => 'しんいち',
            'romaji' => 'Shin-ichi',
        ]);
        // id: 3406
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '大門',
            'kana' => 'だいもん',
            'romaji' => 'Daimon',
        ]);
        // id: 3407
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '近田',
            'kana' => 'ちかた',
            'romaji' => 'Chikata',
        ]);
        // id: 3408
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '戸手',
            'kana' => 'とで',
            'romaji' => 'Tode',
        ]);
        // id: 3409
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '東福山',
            'kana' => 'ひがしふくやま',
            'romaji' => 'Higashi-Fukuyama',
        ]);
        // id: 3410
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '備後赤坂',
            'kana' => 'びんごあかさか',
            'romaji' => 'Bingo-Akasaka',
        ]);
        // id: 3411
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '備後本庄',
            'kana' => 'びんごほんじょう',
            'romaji' => 'Bingo-Honjō',
        ]);
        // id: 3412
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '福山',
            'kana' => 'ふくやま',
            'romaji' => 'Fukuyama',
        ]);
        // id: 3413
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '松永',
            'kana' => 'まつなが',
            'romaji' => 'Matsunaga',
        ]);
        // id: 3414
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '万能倉',
            'kana' => 'まなぐら',
            'romaji' => 'Managura',
        ]);
        // id: 3415
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '道上',
            'kana' => 'みちのうえ',
            'romaji' => 'Michinoue',
        ]);
        // id: 3416
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '湯田村',
            'kana' => 'ゆだむら',
            'romaji' => 'Yudamura',
        ]);
        // id: 3417
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '815',
            'kanji' => '横尾',
            'kana' => 'よこお',
            'romaji' => 'Yokoo',
        ]);
        // id: 3418
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '816',
            'kanji' => '鵜飼',
            'kana' => 'うかい',
            'romaji' => 'Ukai',
        ]);
        // id: 3419
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '816',
            'kanji' => '河佐',
            'kana' => 'かわさ',
            'romaji' => 'Kawasa',
        ]);
        // id: 3420
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '816',
            'kanji' => '下川辺',
            'kana' => 'しもかわべ',
            'romaji' => 'Shimokawabe',
        ]);
        // id: 3421
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '816',
            'kanji' => '上下',
            'kana' => 'じょうげ',
            'romaji' => 'Jōge',
        ]);
        // id: 3422
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '816',
            'kanji' => '高木',
            'kana' => 'たかぎ',
            'romaji' => 'Takagi',
        ]);
        // id: 3423
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '816',
            'kanji' => '中畑',
            'kana' => 'なかはた',
            'romaji' => 'Nakahata',
        ]);
        // id: 3424
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '816',
            'kanji' => '備後矢野',
            'kana' => 'びんごやの',
            'romaji' => 'Bingo-Yano',
        ]);
        // id: 3425
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '816',
            'kanji' => '府中',
            'kana' => 'ふちゅう',
            'romaji' => 'Fuchū',
        ]);
        // id: 3426
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '817',
            'kanji' => '向洋',
            'kana' => 'むかいなだ',
            'romaji' => 'Mukainada',
        ]);
        // id: 3427
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '818',
            'kanji' => '安芸幸崎',
            'kana' => 'あきさいざき',
            'romaji' => 'Aki-Saizaki',
        ]);
        // id: 3428
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '818',
            'kanji' => '糸崎',
            'kana' => 'いとざき',
            'romaji' => 'Itozaki',
        ]);
        // id: 3429
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '818',
            'kanji' => '須波',
            'kana' => 'すなみ',
            'romaji' => 'Sunami',
        ]);
        // id: 3430
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '818',
            'kanji' => '本郷',
            'kana' => 'ほんごう',
            'romaji' => 'Hongō',
        ]);
        // id: 3431
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '818',
            'kanji' => '三原',
            'kana' => 'みはら',
            'romaji' => 'Mihara',
        ]);
        // id: 3432
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '梶田',
            'kana' => 'かじた',
            'romaji' => 'Kajita',
        ]);
        // id: 3433
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '上川立',
            'kana' => 'かみかわたち',
            'romaji' => 'Kami-Kawatachi',
        ]);
        // id: 3434
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '神杉',
            'kana' => 'かみすぎ',
            'romaji' => 'Kamisugi',
        ]);
        // id: 3435
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '吉舎',
            'kana' => 'きさ',
            'romaji' => 'Kisa',
        ]);
        // id: 3436
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '甲奴',
            'kana' => 'こうぬ',
            'romaji' => 'Kōnu',
        ]);
        // id: 3437
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '塩町',
            'kana' => 'しおまち',
            'romaji' => 'Shiomachi',
        ]);
        // id: 3438
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '下和知',
            'kana' => 'しもわち',
            'romaji' => 'Shimo-Wachi',
        ]);
        // id: 3439
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '志和地',
            'kana' => 'しわち',
            'romaji' => 'Shiwachi',
        ]);
        // id: 3440
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '西三次',
            'kana' => 'にしみよし',
            'romaji' => 'Nishi-Miyoshi',
        ]);
        // id: 3441
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '備後安田',
            'kana' => 'びんごやすだ',
            'romaji' => 'Bingo-Yasuda',
        ]);
        // id: 3442
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '三次',
            'kana' => 'みよし',
            'romaji' => 'Miyoshi',
        ]);
        // id: 3443
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '三良坂',
            'kana' => 'みらさか',
            'romaji' => 'Mirasaka',
        ]);
        // id: 3444
        Station::insert([
            'prefecture_id' => '34',
            'city_id' => '819',
            'kanji' => '八次',
            'kana' => 'やつぎ',
            'romaji' => 'Yatsugi',
        ]);
        // id: 3445
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '820',
            'kanji' => '宇田郷',
            'kana' => 'うたごう',
            'romaji' => 'Utagō',
        ]);
        // id: 3446
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '820',
            'kanji' => '木与',
            'kana' => 'きよ',
            'romaji' => 'Kiyo',
        ]);
        // id: 3447
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '820',
            'kanji' => '奈古',
            'kana' => 'なご',
            'romaji' => 'Nago',
        ]);
        // id: 3448
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '岩国',
            'kana' => 'いわくに',
            'romaji' => 'Iwakuni',
        ]);
        // id: 3449
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '川西',
            'kana' => 'かわにし',
            'romaji' => 'Kawanishi',
        ]);
        // id: 3450
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '欽明路',
            'kana' => 'きんめいじ',
            'romaji' => 'Kimmeiji',
        ]);
        // id: 3451
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '玖珂',
            'kana' => 'くが',
            'romaji' => 'Kuga',
        ]);
        // id: 3452
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '神代',
            'kana' => 'こうじろ',
            'romaji' => 'Kōjiro',
        ]);
        // id: 3453
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '新岩国',
            'kana' => 'しんいわくに',
            'romaji' => 'Shin-Iwakuni',
        ]);
        // id: 3454
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '周防高森',
            'kana' => 'すおうたかもり',
            'romaji' => 'Suō-Takamori',
        ]);
        // id: 3455
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '通津',
            'kana' => 'つづ',
            'romaji' => 'Tsuzu',
        ]);
        // id: 3456
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '西岩国',
            'kana' => 'にしいわくに',
            'romaji' => 'Nishi-Iwakuni',
        ]);
        // id: 3457
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '柱野',
            'kana' => 'はしらの',
            'romaji' => 'Hashirano',
        ]);
        // id: 3458
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '藤生',
            'kana' => 'ふじゅう',
            'romaji' => 'Fujū',
        ]);
        // id: 3459
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '南岩国',
            'kana' => 'みなみいわくに',
            'romaji' => 'Minami-Iwakuni',
        ]);
        // id: 3460
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '由宇',
            'kana' => 'ゆう',
            'romaji' => 'Yū',
        ]);
        // id: 3461
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '821',
            'kanji' => '米川',
            'kana' => 'よねかわ',
            'romaji' => 'Yonekawa',
        ]);
        // id: 3462
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '居能',
            'kana' => 'いのう',
            'romaji' => 'Inō',
        ]);
        // id: 3463
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '岩鼻',
            'kana' => 'いわはな',
            'romaji' => 'Iwahana',
        ]);
        // id: 3464
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '宇部',
            'kana' => 'うべ',
            'romaji' => 'Ube',
        ]);
        // id: 3465
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '宇部新川',
            'kana' => 'うべしんかわ',
            'romaji' => 'Ube-Shinkawa',
        ]);
        // id: 3466
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '宇部岬',
            'kana' => 'うべみさき',
            'romaji' => 'Ubemisaki',
        ]);
        // id: 3467
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '岐波',
            'kana' => 'きわ',
            'romaji' => 'Kiwa',
        ]);
        // id: 3468
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '草江',
            'kana' => 'くさえ',
            'romaji' => 'Kusae',
        ]);
        // id: 3469
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '厚東',
            'kana' => 'ことう',
            'romaji' => 'Kotō',
        ]);
        // id: 3470
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '琴芝',
            'kana' => 'ことしば',
            'romaji' => 'Kotoshiba',
        ]);
        // id: 3471
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '妻崎',
            'kana' => 'つまざき',
            'romaji' => 'Tsumazaki',
        ]);
        // id: 3472
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '常盤',
            'kana' => 'ときわ',
            'romaji' => 'Tokiwa',
        ]);
        // id: 3473
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '床波',
            'kana' => 'とこなみ',
            'romaji' => 'Tokonami',
        ]);
        // id: 3474
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '長門長沢',
            'kana' => 'ながとながさわ',
            'romaji' => 'Nagato-Nagasawa',
        ]);
        // id: 3475
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '東新川',
            'kana' => 'ひがししんかわ',
            'romaji' => 'Higashi-Shinkawa',
        ]);
        // id: 3476
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '822',
            'kanji' => '丸尾',
            'kana' => 'まるお',
            'romaji' => 'Maruo',
        ]);
        // id: 3477
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '823',
            'kanji' => '生野屋',
            'kana' => 'いくのや',
            'romaji' => 'Ikunoya',
        ]);
        // id: 3478
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '823',
            'kanji' => '下松',
            'kana' => 'くだまつ',
            'romaji' => 'Kudamatsu',
        ]);
        // id: 3479
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '823',
            'kanji' => '周防久保',
            'kana' => 'すおうくぼ',
            'romaji' => 'Suō-Kubo',
        ]);
        // id: 3480
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '823',
            'kanji' => '周防花岡',
            'kana' => 'すおうはなおか',
            'romaji' => 'Suō-Hanaoka',
        ]);
        // id: 3481
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '厚狭',
            'kana' => 'あさ',
            'romaji' => 'Asa',
        ]);
        // id: 3482
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '小野田',
            'kana' => 'おのだ',
            'romaji' => 'Onoda',
        ]);
        // id: 3483
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '小野田港',
            'kana' => 'おのだこう',
            'romaji' => 'Onodakō',
        ]);
        // id: 3484
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '雀田',
            'kana' => 'すずめだ',
            'romaji' => 'Suzumeda',
        ]);
        // id: 3485
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '長門本山',
            'kana' => 'ながともとやま',
            'romaji' => 'Nagato-Motoyama',
        ]);
        // id: 3486
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '埴生',
            'kana' => 'はぶ',
            'romaji' => 'Habu',
        ]);
        // id: 3487
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '浜河内',
            'kana' => 'はまごうち',
            'romaji' => 'Hamagōchi',
        ]);
        // id: 3488
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '南小野田',
            'kana' => 'みなみおのだ',
            'romaji' => 'Minami-Onoda',
        ]);
        // id: 3489
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '南中川',
            'kana' => 'みなみなかがわ',
            'romaji' => 'Minami-Nakagawa',
        ]);
        // id: 3490
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '目出',
            'kana' => 'めで',
            'romaji' => 'Mede',
        ]);
        // id: 3491
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '824',
            'kanji' => '湯ノ峠',
            'kana' => 'ゆのとう',
            'romaji' => 'Yunotō',
        ]);
        // id: 3492
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '阿川',
            'kana' => 'あがわ',
            'romaji' => 'Agawa',
        ]);
        // id: 3493
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '綾羅木',
            'kana' => 'あやらぎ',
            'romaji' => 'Ayaragi',
        ]);
        // id: 3494
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '宇賀本郷',
            'kana' => 'うかほんごう',
            'romaji' => 'Ukahongō',
        ]);
        // id: 3495
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '梅ケ峠',
            'kana' => 'うめがとう',
            'romaji' => 'Umegatō',
        ]);
        // id: 3496
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '小月',
            'kana' => 'おづき',
            'romaji' => 'Ozuki',
        ]);
        // id: 3497
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '梶栗郷台地',
            'kana' => 'かじくりごうだいち',
            'romaji' => 'Kajikuri-Gōdaichi',
        ]);
        // id: 3498
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '川棚温泉',
            'kana' => 'かわたなおんせん',
            'romaji' => 'Kawatanaonsen',
        ]);
        // id: 3499
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '黒井村',
            'kana' => 'くろいむら',
            'romaji' => 'Kuroimura',
        ]);
        // id: 3500
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '小串',
            'kana' => 'こぐし',
            'romaji' => 'Kogushi',
        ]);
        // id: 3501
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '特牛',
            'kana' => 'こっとい',
            'romaji' => 'Kottoi',
        ]);
        // id: 3502
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '下関',
            'kana' => 'しものせき',
            'romaji' => 'Shimonoseki',
        ]);
        // id: 3503
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '新下関',
            'kana' => 'しんしものせき',
            'romaji' => 'Shin-Shimonoseki',
        ]);
        // id: 3504
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '滝部',
            'kana' => 'たきべ',
            'romaji' => 'Takibe',
        ]);
        // id: 3505
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '長府',
            'kana' => 'ちょうふ',
            'romaji' => 'Chōfu',
        ]);
        // id: 3506
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '長門粟野',
            'kana' => 'ながとあわの',
            'romaji' => 'Nagato-Awano',
        ]);
        // id: 3507
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '長門二見',
            'kana' => 'ながとふたみ',
            'romaji' => 'Nagato-Futami',
        ]);
        // id: 3508
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '幡生',
            'kana' => 'はたぶ',
            'romaji' => 'Hatabu',
        ]);
        // id: 3509
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '福江',
            'kana' => 'ふくえ',
            'romaji' => 'Fukue',
        ]);
        // id: 3510
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '安岡',
            'kana' => 'やすおか',
            'romaji' => 'Yasuoka',
        ]);
        // id: 3511
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '湯玉',
            'kana' => 'ゆたま',
            'romaji' => 'Yutama',
        ]);
        // id: 3512
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '825',
            'kanji' => '吉見',
            'kana' => 'よしみ',
            'romaji' => 'Yoshimi',
        ]);
        // id: 3513
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '826',
            'kanji' => '大河内',
            'kana' => 'おおかわち',
            'romaji' => 'Ōkawachi',
        ]);
        // id: 3514
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '826',
            'kanji' => '勝間',
            'kana' => 'かつま',
            'romaji' => 'Katsuma',
        ]);
        // id: 3515
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '826',
            'kanji' => '櫛ケ浜',
            'kana' => 'くしがはま',
            'romaji' => 'Kushigahama',
        ]);
        // id: 3516
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '826',
            'kanji' => '新南陽',
            'kana' => 'しんなんよう',
            'romaji' => 'Shin-Nanyō',
        ]);
        // id: 3517
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '826',
            'kanji' => '高水',
            'kana' => 'たかみず',
            'romaji' => 'Takamizu',
        ]);
        // id: 3518
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '826',
            'kanji' => '徳山',
            'kana' => 'とくやま',
            'romaji' => 'Tokuyama',
        ]);
        // id: 3519
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '826',
            'kanji' => '福川',
            'kana' => 'ふくがわ',
            'romaji' => 'Fukugawa',
        ]);
        // id: 3520
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '826',
            'kanji' => '戸田',
            'kana' => 'へた',
            'romaji' => 'Heta',
        ]);
        // id: 3521
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '827',
            'kanji' => '田布施',
            'kana' => 'たぶせ',
            'romaji' => 'Tabuse',
        ]);
        // id: 3522
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '伊上',
            'kana' => 'いがみ',
            'romaji' => 'Igami',
        ]);
        // id: 3523
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '板持',
            'kana' => 'いたもち',
            'romaji' => 'Itamochi',
        ]);
        // id: 3524
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '黄波戸',
            'kana' => 'きわど',
            'romaji' => 'Kiwado',
        ]);
        // id: 3525
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '渋木',
            'kana' => 'しぶき',
            'romaji' => 'Shibuki',
        ]);
        // id: 3526
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '仙崎',
            'kana' => 'せんざき',
            'romaji' => 'Senzaki',
        ]);
        // id: 3527
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '長門市',
            'kana' => 'ながとし',
            'romaji' => 'Nagatoshi',
        ]);
        // id: 3528
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '長門古市',
            'kana' => 'ながとふるいち',
            'romaji' => 'Nagato-Furuichi',
        ]);
        // id: 3529
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '長門三隅',
            'kana' => 'ながとみすみ',
            'romaji' => 'Nagato-Misumi',
        ]);
        // id: 3530
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '長門湯本',
            'kana' => 'ながとゆもと',
            'romaji' => 'Nagato-Yumoto',
        ]);
        // id: 3531
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '828',
            'kanji' => '人丸',
            'kana' => 'ひとまる',
            'romaji' => 'Hitomaru',
        ]);
        // id: 3532
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '飯井',
            'kana' => 'いい',
            'romaji' => 'Ii',
        ]);
        // id: 3533
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '江崎',
            'kana' => 'えさき',
            'romaji' => 'Esaki',
        ]);
        // id: 3534
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '越ケ浜',
            'kana' => 'こしがはま',
            'romaji' => 'Koshigahama',
        ]);
        // id: 3535
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '三見',
            'kana' => 'さんみ',
            'romaji' => 'Sammi',
        ]);
        // id: 3536
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '須佐',
            'kana' => 'すさ',
            'romaji' => 'Susa',
        ]);
        // id: 3537
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '玉江',
            'kana' => 'たまえ',
            'romaji' => 'Tamae',
        ]);
        // id: 3538
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '長門大井',
            'kana' => 'ながとおおい',
            'romaji' => 'Nagato-Ōi',
        ]);
        // id: 3539
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '萩',
            'kana' => 'はぎ',
            'romaji' => 'Hagi',
        ]);
        // id: 3540
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '829',
            'kanji' => '東萩',
            'kana' => 'ひがしはぎ',
            'romaji' => 'Higashi-Hagi',
        ]);
        // id: 3541
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '830',
            'kanji' => '岩田',
            'kana' => 'いわた',
            'romaji' => 'Iwata',
        ]);
        // id: 3542
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '830',
            'kanji' => '島田',
            'kana' => 'しまた',
            'romaji' => 'Shimata',
        ]);
        // id: 3543
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '830',
            'kanji' => '光',
            'kana' => 'ひかり',
            'romaji' => 'Hikari',
        ]);
        // id: 3544
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '831',
            'kanji' => '大道',
            'kana' => 'だいどう',
            'romaji' => 'Daidō',
        ]);
        // id: 3545
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '831',
            'kanji' => '富海',
            'kana' => 'とのみ',
            'romaji' => 'Tonomi',
        ]);
        // id: 3546
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '831',
            'kanji' => '防府',
            'kana' => 'ほうふ',
            'romaji' => 'Hōfu',
        ]);
        // id: 3547
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '832',
            'kanji' => '厚保',
            'kana' => 'あつ',
            'romaji' => 'Atsu',
        ]);
        // id: 3548
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '832',
            'kanji' => '於福',
            'kana' => 'おふく',
            'romaji' => 'Ofuku',
        ]);
        // id: 3549
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '832',
            'kanji' => '重安',
            'kana' => 'しげやす',
            'romaji' => 'Shigeyasu',
        ]);
        // id: 3550
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '832',
            'kanji' => '四郎ケ原',
            'kana' => 'しろうがはら',
            'romaji' => 'Shirōgahara',
        ]);
        // id: 3551
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '832',
            'kanji' => '南大嶺',
            'kana' => 'みなみおおみね',
            'romaji' => 'Minami-Ōmine',
        ]);
        // id: 3552
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '832',
            'kanji' => '美祢',
            'kana' => 'みね',
            'romaji' => 'Mine',
        ]);
        // id: 3553
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '833',
            'kanji' => '大畠',
            'kana' => 'おおばたけ',
            'romaji' => 'Ōbatake',
        ]);
        // id: 3554
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '833',
            'kanji' => '柳井',
            'kana' => 'やない',
            'romaji' => 'Yanai',
        ]);
        // id: 3555
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '833',
            'kanji' => '柳井港',
            'kana' => 'やないみなと',
            'romaji' => 'Yanaiminato',
        ]);
        // id: 3556
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '阿知須',
            'kana' => 'あじす',
            'romaji' => 'Ajisu',
        ]);
        // id: 3557
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '岩倉',
            'kana' => 'いわくら',
            'romaji' => 'Iwakura',
        ]);
        // id: 3558
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '大歳',
            'kana' => 'おおとし',
            'romaji' => 'Ōtoshi',
        ]);
        // id: 3559
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '嘉川',
            'kana' => 'かがわ',
            'romaji' => 'Kagawa',
        ]);
        // id: 3560
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '上嘉川',
            'kana' => 'かみかがわ',
            'romaji' => 'Kami-Kagawa',
        ]);
        // id: 3561
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '上郷',
            'kana' => 'かみごう',
            'romaji' => 'Kamigō',
        ]);
        // id: 3562
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '上山口',
            'kana' => 'かみやまぐち',
            'romaji' => 'Kami-Yamaguchi',
        ]);
        // id: 3563
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '篠目',
            'kana' => 'しのめ',
            'romaji' => 'Shinome',
        ]);
        // id: 3564
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '地福',
            'kana' => 'じふく',
            'romaji' => 'Jifuku',
        ]);
        // id: 3565
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '新山口',
            'kana' => 'しんやまぐち',
            'romaji' => 'Shin-Yamaguchi',
        ]);
        // id: 3566
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '周防佐山',
            'kana' => 'すおうさやま',
            'romaji' => 'Suō-Sayama',
        ]);
        // id: 3567
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '周防下郷',
            'kana' => 'すおうしもごう',
            'romaji' => 'Suō-Shimogō',
        ]);
        // id: 3568
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '長門峡',
            'kana' => 'ちょうもんきょう',
            'romaji' => 'Chōmonkyō',
        ]);
        // id: 3569
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '徳佐',
            'kana' => 'とくさ',
            'romaji' => 'Tokusa',
        ]);
        // id: 3570
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '名草',
            'kana' => 'なぐさ',
            'romaji' => 'Nagusa',
        ]);
        // id: 3571
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '鍋倉',
            'kana' => 'なべくら',
            'romaji' => 'Nabekura',
        ]);
        // id: 3572
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '仁保',
            'kana' => 'にほ',
            'romaji' => 'Niho',
        ]);
        // id: 3573
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '仁保津',
            'kana' => 'にほづ',
            'romaji' => 'Nihozu',
        ]);
        // id: 3574
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '深溝',
            'kana' => 'ふかみぞ',
            'romaji' => 'Fukamizo',
        ]);
        // id: 3575
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '船平山',
            'kana' => 'ふなひらやま',
            'romaji' => 'Funahirayama',
        ]);
        // id: 3576
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '本由良',
            'kana' => 'ほんゆら',
            'romaji' => 'Hon-Yura',
        ]);
        // id: 3577
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '三谷',
            'kana' => 'みたに',
            'romaji' => 'Mitani',
        ]);
        // id: 3578
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '宮野',
            'kana' => 'みやの',
            'romaji' => 'Miyano',
        ]);
        // id: 3579
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '矢原',
            'kana' => 'やばら',
            'romaji' => 'Yabara',
        ]);
        // id: 3580
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '山口',
            'kana' => 'やまぐち',
            'romaji' => 'Yamaguchi',
        ]);
        // id: 3581
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '湯田温泉',
            'kana' => 'ゆだおんせん',
            'romaji' => 'Yudaonsen',
        ]);
        // id: 3582
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '四辻',
            'kana' => 'よつつじ',
            'romaji' => 'Yotsutsuji',
        ]);
        // id: 3583
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '834',
            'kanji' => '渡川',
            'kana' => 'わたりがわ',
            'romaji' => 'Watarigawa',
        ]);
        // id: 3584
        Station::insert([
            'prefecture_id' => '35',
            'city_id' => '835',
            'kanji' => '和木',
            'kana' => 'わき',
            'romaji' => 'Waki',
        ]);
        // id: 3585
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '836',
            'kanji' => '勝瑞',
            'kana' => 'しょうずい',
            'romaji' => 'Shōzui',
        ]);
        // id: 3586
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '阿南',
            'kana' => 'あなん',
            'romaji' => 'Anan',
        ]);
        // id: 3587
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '新野',
            'kana' => 'あらたの',
            'romaji' => 'Aratano',
        ]);
        // id: 3588
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '阿波橘',
            'kana' => 'あわたちばな',
            'romaji' => 'Awa-Tachibana',
        ]);
        // id: 3589
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '阿波中島',
            'kana' => 'あわなかしま',
            'romaji' => 'Awa-Nakashima',
        ]);
        // id: 3590
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '阿波福井',
            'kana' => 'あわふくい',
            'romaji' => 'Awa-Fukui',
        ]);
        // id: 3591
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '桑野',
            'kana' => 'くわの',
            'romaji' => 'Kuwano',
        ]);
        // id: 3592
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '西原',
            'kana' => 'にしばら',
            'romaji' => 'Nishibara',
        ]);
        // id: 3593
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '羽ノ浦',
            'kana' => 'はのうら',
            'romaji' => 'Hanoura',
        ]);
        // id: 3594
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '837',
            'kanji' => '見能林',
            'kana' => 'みのばやし',
            'romaji' => 'Minobayashi',
        ]);
        // id: 3595
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '838',
            'kanji' => '石井',
            'kana' => 'いしい',
            'romaji' => 'Ishii',
        ]);
        // id: 3596
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '838',
            'kanji' => '下浦',
            'kana' => 'しもうら',
            'romaji' => 'Shimoura',
        ]);
        // id: 3597
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '839',
            'kanji' => '阿波大宮',
            'kana' => 'あわおおみや',
            'romaji' => 'Awa-Ōmiya',
        ]);
        // id: 3598
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '839',
            'kanji' => '阿波川端',
            'kana' => 'あわかわばた',
            'romaji' => 'Awa-Kawabata',
        ]);
        // id: 3599
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '839',
            'kanji' => '板野',
            'kana' => 'いたの',
            'romaji' => 'Itano',
        ]);
        // id: 3600
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '840',
            'kanji' => '浅川',
            'kana' => 'あさかわ',
            'romaji' => 'Asakawa',
        ]);
        // id: 3601
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '840',
            'kanji' => '阿波海南',
            'kana' => 'あわかいなん',
            'romaji' => 'Awa-Kainan',
        ]);
        // id: 3602
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '840',
            'kanji' => '海部',
            'kana' => 'かいふ',
            'romaji' => 'Kaifu',
        ]);
        // id: 3603
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '840',
            'kanji' => '鯖瀬',
            'kana' => 'さばせ',
            'romaji' => 'Sabase',
        ]);
        // id: 3604
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '841',
            'kanji' => '阿波赤石',
            'kana' => 'あわあかいし',
            'romaji' => 'Awa-Akaishi',
        ]);
        // id: 3605
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '841',
            'kanji' => '立江',
            'kana' => 'たつえ',
            'romaji' => 'Tatsue',
        ]);
        // id: 3606
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '841',
            'kanji' => '中田',
            'kana' => 'ちゅうでん',
            'romaji' => 'Chūden',
        ]);
        // id: 3607
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '841',
            'kanji' => '南小松島',
            'kana' => 'みなみこまつしま',
            'romaji' => 'Minami-Komatsushima',
        ]);
        // id: 3608
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '842',
            'kanji' => '阿波半田',
            'kana' => 'あわはんだ',
            'romaji' => 'Awa-Handa',
        ]);
        // id: 3609
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '842',
            'kanji' => '貞光',
            'kana' => 'さだみつ',
            'romaji' => 'Sadamitsu',
        ]);
        // id: 3610
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '鮎喰',
            'kana' => 'あくい',
            'romaji' => 'Akui',
        ]);
        // id: 3611
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '阿波富田',
            'kana' => 'あわとみだ',
            'romaji' => 'Awa-Tomida',
        ]);
        // id: 3612
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '蔵本',
            'kana' => 'くらもと',
            'romaji' => 'Kuramoto',
        ]);
        // id: 3613
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '府中',
            'kana' => 'こう',
            'romaji' => 'Kō',
        ]);
        // id: 3614
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '佐古',
            'kana' => 'さこ',
            'romaji' => 'Sako',
        ]);
        // id: 3615
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '地蔵橋',
            'kana' => 'じぞうばし',
            'romaji' => 'Jizōbashi',
        ]);
        // id: 3616
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '徳島',
            'kana' => 'とくしま',
            'romaji' => 'Tokushima',
        ]);
        // id: 3617
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '二軒屋',
            'kana' => 'にけんや',
            'romaji' => 'Nikenya',
        ]);
        // id: 3618
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '文化の森',
            'kana' => 'ぶんかのもり',
            'romaji' => 'Bunkanomori',
        ]);
        // id: 3619
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '843',
            'kanji' => '吉成',
            'kana' => 'よしなり',
            'romaji' => 'Yoshinari',
        ]);
        // id: 3620
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '844',
            'kanji' => '阿波大谷',
            'kana' => 'あわおおたに',
            'romaji' => 'Awa-Ōtani',
        ]);
        // id: 3621
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '844',
            'kanji' => '池谷',
            'kana' => 'いけのたに',
            'romaji' => 'Ikenotani',
        ]);
        // id: 3622
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '844',
            'kanji' => '教会前',
            'kana' => 'きょうかいまえ',
            'romaji' => 'Kyōkaimae',
        ]);
        // id: 3623
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '844',
            'kanji' => '金比羅前',
            'kana' => 'こんぴらまえ',
            'romaji' => 'Kompiramae',
        ]);
        // id: 3624
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '844',
            'kanji' => '立道',
            'kana' => 'たつみち',
            'romaji' => 'Tatsumichi',
        ]);
        // id: 3625
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '844',
            'kanji' => '鳴門',
            'kana' => 'なると',
            'romaji' => 'Naruto',
        ]);
        // id: 3626
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '844',
            'kanji' => '板東',
            'kana' => 'ばんどう',
            'romaji' => 'Bandō',
        ]);
        // id: 3627
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '844',
            'kanji' => '撫養',
            'kana' => 'むや',
            'romaji' => 'Muya',
        ]);
        // id: 3628
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '845',
            'kanji' => '阿波加茂',
            'kana' => 'あわかも',
            'romaji' => 'Awa-Kamo',
        ]);
        // id: 3629
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '845',
            'kanji' => '江口',
            'kana' => 'えぐち',
            'romaji' => 'Eguchi',
        ]);
        // id: 3630
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '845',
            'kanji' => '三加茂',
            'kana' => 'みかも',
            'romaji' => 'Mikamo',
        ]);
        // id: 3631
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '846',
            'kanji' => '木岐',
            'kana' => 'きき',
            'romaji' => 'Kiki',
        ]);
        // id: 3632
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '846',
            'kanji' => '北河内',
            'kana' => 'きたがわち',
            'romaji' => 'Kitagawachi',
        ]);
        // id: 3633
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '846',
            'kanji' => '田井ノ浜(臨)',
            'kana' => 'たいのはま',
            'romaji' => 'Tainohama',
        ]);
        // id: 3634
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '846',
            'kanji' => '日和佐',
            'kana' => 'ひわさ',
            'romaji' => 'Hiwasa',
        ]);
        // id: 3635
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '846',
            'kanji' => '山河内',
            'kana' => 'やまがわち',
            'romaji' => 'Yamagawachi',
        ]);
        // id: 3636
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '846',
            'kanji' => '由岐',
            'kana' => 'ゆき',
            'romaji' => 'Yuki',
        ]);
        // id: 3637
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '847',
            'kanji' => '穴吹',
            'kana' => 'あなぶき',
            'romaji' => 'Anabuki',
        ]);
        // id: 3638
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '847',
            'kanji' => '小島',
            'kana' => 'おしま',
            'romaji' => 'Oshima',
        ]);
        // id: 3639
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '阿波池田',
            'kana' => 'あわいけだ',
            'romaji' => 'Awa-Ikeda',
        ]);
        // id: 3640
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '阿波川口',
            'kana' => 'あわかわぐち',
            'romaji' => 'Awa-Kawaguchi',
        ]);
        // id: 3641
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '祖谷口',
            'kana' => 'いやぐち',
            'romaji' => 'Iyaguchi',
        ]);
        // id: 3642
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '大歩危',
            'kana' => 'おおぼけ',
            'romaji' => 'Ōboke',
        ]);
        // id: 3643
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '小歩危',
            'kana' => 'こぼけ',
            'romaji' => 'Koboke',
        ]);
        // id: 3644
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '佃',
            'kana' => 'つくだ',
            'romaji' => 'Tsukuda',
        ]);
        // id: 3645
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '辻',
            'kana' => 'つじ',
            'romaji' => 'Tsuji',
        ]);
        // id: 3646
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '坪尻',
            'kana' => 'つぼじり',
            'romaji' => 'Tsubojiri',
        ]);
        // id: 3647
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '箸蔵',
            'kana' => 'はしくら',
            'romaji' => 'Hashikura',
        ]);
        // id: 3648
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '848',
            'kanji' => '三縄',
            'kana' => 'みなわ',
            'romaji' => 'Minawa',
        ]);
        // id: 3649
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '849',
            'kanji' => '辺川',
            'kana' => 'へがわ',
            'romaji' => 'Hegawa',
        ]);
        // id: 3650
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '849',
            'kanji' => '牟岐',
            'kana' => 'むぎ',
            'romaji' => 'Mugi',
        ]);
        // id: 3651
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '阿波川島',
            'kana' => 'あわかわしま',
            'romaji' => 'Awa-Kawashima',
        ]);
        // id: 3652
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '阿波山川',
            'kana' => 'あわやまかわ',
            'romaji' => 'Awa-Yamakawa',
        ]);
        // id: 3653
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '牛島',
            'kana' => 'うしのしま',
            'romaji' => 'Ushinoshima',
        ]);
        // id: 3654
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '麻植塚',
            'kana' => 'おえづか',
            'romaji' => 'Oezuka',
        ]);
        // id: 3655
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '学',
            'kana' => 'がく',
            'romaji' => 'Gaku',
        ]);
        // id: 3656
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '鴨島',
            'kana' => 'かもじま',
            'romaji' => 'Kamojima',
        ]);
        // id: 3657
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '川田',
            'kana' => 'かわた',
            'romaji' => 'Kawata',
        ]);
        // id: 3658
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '西麻植',
            'kana' => 'にしおえ',
            'romaji' => 'Nishi-Oe',
        ]);
        // id: 3659
        Station::insert([
            'prefecture_id' => '36',
            'city_id' => '850',
            'kanji' => '山瀬',
            'kana' => 'やませ',
            'romaji' => 'Yamase',
        ]);
        // id: 3660
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '851',
            'kanji' => '宇多津',
            'kana' => 'うたづ',
            'romaji' => 'Utazu',
        ]);
        // id: 3661
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '852',
            'kanji' => '観音寺',
            'kana' => 'かんおんじ',
            'romaji' => 'Kan-onji',
        ]);
        // id: 3662
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '852',
            'kanji' => '豊浜',
            'kana' => 'とよはま',
            'romaji' => 'Toyohama',
        ]);
        // id: 3663
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '852',
            'kanji' => '箕浦',
            'kana' => 'みのうら',
            'romaji' => 'Minoura',
        ]);
        // id: 3664
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '853',
            'kanji' => '琴平',
            'kana' => 'ことひら',
            'romaji' => 'Kotohira',
        ]);
        // id: 3665
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '854',
            'kanji' => '鴨川',
            'kana' => 'かもがわ',
            'romaji' => 'Kamogawa',
        ]);
        // id: 3666
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '854',
            'kanji' => '坂出',
            'kana' => 'さかいで',
            'romaji' => 'Sakaide',
        ]);
        // id: 3667
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '854',
            'kanji' => '讃岐府中',
            'kana' => 'さぬきふちゅう',
            'romaji' => 'Sanuki-Fuchū',
        ]);
        // id: 3668
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '854',
            'kanji' => '八十場',
            'kana' => 'やそば',
            'romaji' => 'Yasoba',
        ]);
        // id: 3669
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '855',
            'kanji' => 'オレンジタウン',
            'kana' => 'おれんじたうん',
            'romaji' => 'Orange-Town',
        ]);
        // id: 3670
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '855',
            'kanji' => '神前',
            'kana' => 'かんざき',
            'romaji' => 'Kanzaki',
        ]);
        // id: 3671
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '855',
            'kanji' => '讃岐津田',
            'kana' => 'さぬきつだ',
            'romaji' => 'Sanuki-Tsuda',
        ]);
        // id: 3672
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '855',
            'kanji' => '志度',
            'kana' => 'しど',
            'romaji' => 'Shido',
        ]);
        // id: 3673
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '855',
            'kanji' => '造田',
            'kana' => 'ぞうだ',
            'romaji' => 'Zōda',
        ]);
        // id: 3674
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '855',
            'kanji' => '鶴羽',
            'kana' => 'つるわ',
            'romaji' => 'Tsuruwa',
        ]);
        // id: 3675
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '856',
            'kanji' => '金蔵寺',
            'kana' => 'こんぞうじ',
            'romaji' => 'Konzōji',
        ]);
        // id: 3676
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '856',
            'kanji' => '善通寺',
            'kana' => 'ぜんつうじ',
            'romaji' => 'Zentsūji',
        ]);
        // id: 3677
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '木太町',
            'kana' => 'きたちょう',
            'romaji' => 'Kitachō',
        ]);
        // id: 3678
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '鬼無',
            'kana' => 'きなし',
            'romaji' => 'Kinashi',
        ]);
        // id: 3679
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '香西',
            'kana' => 'こうざい',
            'romaji' => 'Kōzai',
        ]);
        // id: 3680
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '国分',
            'kana' => 'こくぶ',
            'romaji' => 'Kokubu',
        ]);
        // id: 3681
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '讃岐牟礼',
            'kana' => 'さぬきむれ',
            'romaji' => 'Sanuki-Mure',
        ]);
        // id: 3682
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '昭和町',
            'kana' => 'しょうわちょう',
            'romaji' => 'Shōwachō',
        ]);
        // id: 3683
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '高松',
            'kana' => 'たかまつ',
            'romaji' => 'Takamatsu',
        ]);
        // id: 3684
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '端岡',
            'kana' => 'はしおか',
            'romaji' => 'Hashioka',
        ]);
        // id: 3685
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '古高松南',
            'kana' => 'ふるたかまつみなみ',
            'romaji' => 'Furutakamatsu-Minami',
        ]);
        // id: 3686
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '八栗口',
            'kana' => 'やくりぐち',
            'romaji' => 'Yakuriguchi',
        ]);
        // id: 3687
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '屋島',
            'kana' => 'やしま',
            'romaji' => 'Yashima',
        ]);
        // id: 3688
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '栗林',
            'kana' => 'りつりん',
            'romaji' => 'Ritsurin',
        ]);
        // id: 3689
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '857',
            'kanji' => '栗林公園北口',
            'kana' => 'りつりんこうえんきたぐち',
            'romaji' => 'Ritsurinkōen-Kitaguchi',
        ]);
        // id: 3690
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '858',
            'kanji' => '海岸寺',
            'kana' => 'かいがんじ',
            'romaji' => 'Kaiganji',
        ]);
        // id: 3691
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '858',
            'kanji' => '多度津',
            'kana' => 'たどつ',
            'romaji' => 'Tadotsu',
        ]);
        // id: 3692
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '859',
            'kanji' => '讃岐相生',
            'kana' => 'さぬきあいおい',
            'romaji' => 'Sanuki-Aioi',
        ]);
        // id: 3693
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '859',
            'kanji' => '讃岐白鳥',
            'kana' => 'さぬきしろとり',
            'romaji' => 'Sanuki-Shirotori',
        ]);
        // id: 3694
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '859',
            'kanji' => '三本松',
            'kana' => 'さんぼんまつ',
            'romaji' => 'Sambommatsu',
        ]);
        // id: 3695
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '859',
            'kanji' => '丹生',
            'kana' => 'にぶ',
            'romaji' => 'Nibu',
        ]);
        // id: 3696
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '859',
            'kanji' => '引田',
            'kana' => 'ひけた',
            'romaji' => 'Hiketa',
        ]);
        // id: 3697
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '860',
            'kanji' => '讃岐塩屋',
            'kana' => 'さぬきしおや',
            'romaji' => 'Sanuki-Shioya',
        ]);
        // id: 3698
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '860',
            'kanji' => '丸亀',
            'kana' => 'まるがめ',
            'romaji' => 'Marugame',
        ]);
        // id: 3699
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '861',
            'kanji' => '黒川',
            'kana' => 'くろかわ',
            'romaji' => 'Kurokawa',
        ]);
        // id: 3700
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '861',
            'kanji' => '塩入',
            'kana' => 'しおいり',
            'romaji' => 'Shioiri',
        ]);
        // id: 3701
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '862',
            'kanji' => '讃岐財田',
            'kana' => 'さぬきさいだ',
            'romaji' => 'Sanuki-Saida',
        ]);
        // id: 3702
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '862',
            'kanji' => '高瀬',
            'kana' => 'たかせ',
            'romaji' => 'Takase',
        ]);
        // id: 3703
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '862',
            'kanji' => '詫間',
            'kana' => 'たくま',
            'romaji' => 'Takuma',
        ]);
        // id: 3704
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '862',
            'kanji' => '津島ノ宮(臨)',
            'kana' => 'つしまのみや',
            'romaji' => 'Tsushimanomiya',
        ]);
        // id: 3705
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '862',
            'kanji' => '比地大',
            'kana' => 'ひじだい',
            'romaji' => 'Hijidai',
        ]);
        // id: 3706
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '862',
            'kanji' => 'みの',
            'kana' => 'みの',
            'romaji' => 'Mino',
        ]);
        // id: 3707
        Station::insert([
            'prefecture_id' => '37',
            'city_id' => '862',
            'kanji' => '本山',
            'kana' => 'もとやま',
            'romaji' => 'Motoyama',
        ]);
        // id: 3708
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '863',
            'kanji' => '今治',
            'kana' => 'いまばり',
            'romaji' => 'Imabari',
        ]);
        // id: 3709
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '863',
            'kanji' => '伊予亀岡',
            'kana' => 'いよかめおか',
            'romaji' => 'Iyo-Kameoka',
        ]);
        // id: 3710
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '863',
            'kanji' => '伊予桜井',
            'kana' => 'いよさくらい',
            'romaji' => 'Iyo-Sakurai',
        ]);
        // id: 3711
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '863',
            'kanji' => '伊予富田',
            'kana' => 'いよとみた',
            'romaji' => 'Iyo-Tomita',
        ]);
        // id: 3712
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '863',
            'kanji' => '大西',
            'kana' => 'おおにし',
            'romaji' => 'Ōnishi',
        ]);
        // id: 3713
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '863',
            'kanji' => '菊間',
            'kana' => 'きくま',
            'romaji' => 'Kikuma',
        ]);
        // id: 3714
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '863',
            'kanji' => '波方',
            'kana' => 'なみかた',
            'romaji' => 'Namikata',
        ]);
        // id: 3715
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '863',
            'kanji' => '波止浜',
            'kana' => 'はしはま',
            'romaji' => 'Hashihama',
        ]);
        // id: 3716
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '伊予大平',
            'kana' => 'いよおおひら',
            'romaji' => 'Iyo-Ōhira',
        ]);
        // id: 3717
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '伊予上灘',
            'kana' => 'いよかみなだ',
            'romaji' => 'Iyo-Kaminada',
        ]);
        // id: 3718
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '伊予市',
            'kana' => 'いよし',
            'romaji' => 'Iyoshi',
        ]);
        // id: 3719
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '伊予中山',
            'kana' => 'いよなかやま',
            'romaji' => 'Iyo-Nakayama',
        ]);
        // id: 3720
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '串',
            'kana' => 'くし',
            'romaji' => 'Kushi',
        ]);
        // id: 3721
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '高野川',
            'kana' => 'こうのかわ',
            'romaji' => 'Kōnokawa',
        ]);
        // id: 3722
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '下灘',
            'kana' => 'しもなだ',
            'romaji' => 'Shimonada',
        ]);
        // id: 3723
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '鳥ノ木',
            'kana' => 'とりのき',
            'romaji' => 'Torinoki',
        ]);
        // id: 3724
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '南伊予',
            'kana' => 'みなみいよ',
            'romaji' => 'Minami-Iyo',
        ]);
        // id: 3725
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '864',
            'kanji' => '向井原',
            'kana' => 'むかいばら',
            'romaji' => 'Mukaibara',
        ]);
        // id: 3726
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '865',
            'kanji' => '五十崎',
            'kana' => 'いかざき',
            'romaji' => 'Ikazaki',
        ]);
        // id: 3727
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '865',
            'kanji' => '伊予立川',
            'kana' => 'いよたちかわ',
            'romaji' => 'Iyo-Tachikawa',
        ]);
        // id: 3728
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '865',
            'kanji' => '内子',
            'kana' => 'うちこ',
            'romaji' => 'Uchiko',
        ]);
        // id: 3729
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '伊予宮野下',
            'kana' => 'いよみやのした',
            'romaji' => 'Iyo-Miyanoshita',
        ]);
        // id: 3730
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '伊予吉田',
            'kana' => 'いよよしだ',
            'romaji' => 'Iyo-Yoshida',
        ]);
        // id: 3731
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '宇和島',
            'kana' => 'うわじま',
            'romaji' => 'Uwajima',
        ]);
        // id: 3732
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '大内',
            'kana' => 'おおうち',
            'romaji' => 'Ōuchi',
        ]);
        // id: 3733
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '北宇和島',
            'kana' => 'きたうわじま',
            'romaji' => 'Kita-Uwajima',
        ]);
        // id: 3734
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '高光',
            'kana' => 'たかみつ',
            'romaji' => 'Takamitsu',
        ]);
        // id: 3735
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '立間',
            'kana' => 'たちま',
            'romaji' => 'Tachima',
        ]);
        // id: 3736
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '二名',
            'kana' => 'ふたな',
            'romaji' => 'Futana',
        ]);
        // id: 3737
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '866',
            'kanji' => '務田',
            'kana' => 'むでん',
            'romaji' => 'Muden',
        ]);
        // id: 3738
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '伊予出石',
            'kana' => 'いよいずし',
            'romaji' => 'Iyo-Izushi',
        ]);
        // id: 3739
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '伊予大洲',
            'kana' => 'いよおおず',
            'romaji' => 'Iyo-Ōzu',
        ]);
        // id: 3740
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '伊予白滝',
            'kana' => 'いよしらたき',
            'romaji' => 'Iyo-Shirataki',
        ]);
        // id: 3741
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '伊予長浜',
            'kana' => 'いよながはま',
            'romaji' => 'Iyo-Nagahama',
        ]);
        // id: 3742
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '伊予平野',
            'kana' => 'いよひらの',
            'romaji' => 'Iyo-Hirano',
        ]);
        // id: 3743
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '喜多灘',
            'kana' => 'きたなだ',
            'romaji' => 'Kitanada',
        ]);
        // id: 3744
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '喜多山',
            'kana' => 'きたやま',
            'romaji' => 'Kitayama',
        ]);
        // id: 3745
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '五郎',
            'kana' => 'ごろう',
            'romaji' => 'Gorō',
        ]);
        // id: 3746
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '新谷',
            'kana' => 'にいや',
            'romaji' => 'Niiya',
        ]);
        // id: 3747
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '西大洲',
            'kana' => 'にしおおず',
            'romaji' => 'Nishi-Ōzu',
        ]);
        // id: 3748
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '八多喜',
            'kana' => 'はたき',
            'romaji' => 'Hataki',
        ]);
        // id: 3749
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '867',
            'kanji' => '春賀',
            'kana' => 'はるか',
            'romaji' => 'Haruka',
        ]);
        // id: 3750
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '868',
            'kanji' => '出目',
            'kana' => 'いずめ',
            'romaji' => 'Izume',
        ]);
        // id: 3751
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '868',
            'kanji' => '近永',
            'kana' => 'ちかなが',
            'romaji' => 'Chikanaga',
        ]);
        // id: 3752
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '868',
            'kanji' => '深田',
            'kana' => 'ふかた',
            'romaji' => 'Fukata',
        ]);
        // id: 3753
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '869',
            'kanji' => '石鎚山',
            'kana' => 'いしづちやま',
            'romaji' => 'Ishizuchiyama',
        ]);
        // id: 3754
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '869',
            'kanji' => '伊予小松',
            'kana' => 'いよこまつ',
            'romaji' => 'Iyo-Komatsu',
        ]);
        // id: 3755
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '869',
            'kanji' => '伊予西条',
            'kana' => 'いよさいじょう',
            'romaji' => 'Iyo-Saijō',
        ]);
        // id: 3756
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '869',
            'kanji' => '伊予氷見',
            'kana' => 'いよひみ',
            'romaji' => 'Iyo-Himi',
        ]);
        // id: 3757
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '869',
            'kanji' => '伊予三芳',
            'kana' => 'いよみよし',
            'romaji' => 'Iyo-Miyoshi',
        ]);
        // id: 3758
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '869',
            'kanji' => '玉之江',
            'kana' => 'たまのえ',
            'romaji' => 'Tamanoe',
        ]);
        // id: 3759
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '869',
            'kanji' => '壬生川',
            'kana' => 'にゅうがわ',
            'romaji' => 'Nyūgawa',
        ]);
        // id: 3760
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '870',
            'kanji' => '赤星',
            'kana' => 'あかぼし',
            'romaji' => 'Akaboshi',
        ]);
        // id: 3761
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '870',
            'kanji' => '伊予寒川',
            'kana' => 'いよさんがわ',
            'romaji' => 'Iyo-Sangawa',
        ]);
        // id: 3762
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '870',
            'kanji' => '伊予土居',
            'kana' => 'いよどい',
            'romaji' => 'Iyo-Doi',
        ]);
        // id: 3763
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '870',
            'kanji' => '伊予三島',
            'kana' => 'いよみしま',
            'romaji' => 'Iyo-Mishima',
        ]);
        // id: 3764
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '870',
            'kanji' => '川之江',
            'kana' => 'かわのえ',
            'romaji' => 'Kawanoe',
        ]);
        // id: 3765
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '870',
            'kanji' => '関川',
            'kana' => 'せきがわ',
            'romaji' => 'Sekigawa',
        ]);
        // id: 3766
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '871',
            'kanji' => '伊予石城',
            'kana' => 'いよいわき',
            'romaji' => 'Iyo-Iwaki',
        ]);
        // id: 3767
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '871',
            'kanji' => '卯之町',
            'kana' => 'うのまち',
            'romaji' => 'Unomachi',
        ]);
        // id: 3768
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '871',
            'kanji' => '上宇和',
            'kana' => 'かみうわ',
            'romaji' => 'Kami-Uwa',
        ]);
        // id: 3769
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '871',
            'kanji' => '下宇和',
            'kana' => 'しもうわ',
            'romaji' => 'Shimo-Uwa',
        ]);
        // id: 3770
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '872',
            'kanji' => '多喜浜',
            'kana' => 'たきはま',
            'romaji' => 'Takihama',
        ]);
        // id: 3771
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '872',
            'kanji' => '中萩',
            'kana' => 'なかはぎ',
            'romaji' => 'Nakahagi',
        ]);
        // id: 3772
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '872',
            'kanji' => '新居浜',
            'kana' => 'にいはま',
            'romaji' => 'Niihama',
        ]);
        // id: 3773
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '873',
            'kanji' => '伊予横田',
            'kana' => 'いよよこた',
            'romaji' => 'Iyo-Yokota',
        ]);
        // id: 3774
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '873',
            'kanji' => '北伊予',
            'kana' => 'きたいよ',
            'romaji' => 'Kita-Iyo',
        ]);
        // id: 3775
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '874',
            'kanji' => '真土',
            'kana' => 'まつち',
            'romaji' => 'Matsuchi',
        ]);
        // id: 3776
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '874',
            'kanji' => '松丸',
            'kana' => 'まつまる',
            'romaji' => 'Matsumaru',
        ]);
        // id: 3777
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '874',
            'kanji' => '吉野生',
            'kana' => 'よしのぶ',
            'romaji' => 'Yoshinobu',
        ]);
        // id: 3778
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '浅海',
            'kana' => 'あさなみ',
            'romaji' => 'Asanami',
        ]);
        // id: 3779
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '粟井',
            'kana' => 'あわい',
            'romaji' => 'Awai',
        ]);
        // id: 3780
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '市坪',
            'kana' => 'いちつぼ',
            'romaji' => 'Ichitsubo',
        ]);
        // id: 3781
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '伊予北条',
            'kana' => 'いよほうじょう',
            'romaji' => 'Iyo-Hōjō',
        ]);
        // id: 3782
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '伊予和気',
            'kana' => 'いよわけ',
            'romaji' => 'Iyo-Wake',
        ]);
        // id: 3783
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '大浦',
            'kana' => 'おおうら',
            'romaji' => 'Ōura',
        ]);
        // id: 3784
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '光洋台',
            'kana' => 'こうようだい',
            'romaji' => 'Kōyōdai',
        ]);
        // id: 3785
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '堀江',
            'kana' => 'ほりえ',
            'romaji' => 'Horie',
        ]);
        // id: 3786
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '松山',
            'kana' => 'まつやま',
            'romaji' => 'Matsuyama',
        ]);
        // id: 3787
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '三津浜',
            'kana' => 'みつはま',
            'romaji' => 'Mitsuhama',
        ]);
        // id: 3788
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '875',
            'kanji' => '柳原',
            'kana' => 'やなぎはら',
            'romaji' => 'Yanagihara',
        ]);
        // id: 3789
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '876',
            'kanji' => '千丈',
            'kana' => 'せんじょう',
            'romaji' => 'Senjō',
        ]);
        // id: 3790
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '876',
            'kanji' => '双岩',
            'kana' => 'ふたいわ',
            'romaji' => 'Futaiwa',
        ]);
        // id: 3791
        Station::insert([
            'prefecture_id' => '38',
            'city_id' => '876',
            'kanji' => '八幡浜',
            'kana' => 'やわたはま',
            'romaji' => 'Yawatahama',
        ]);
        // id: 3792
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '877',
            'kanji' => '伊野',
            'kana' => 'いの',
            'romaji' => 'Ino',
        ]);
        // id: 3793
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '877',
            'kanji' => '枝川',
            'kana' => 'えだがわ',
            'romaji' => 'Edagawa',
        ]);
        // id: 3794
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '877',
            'kanji' => '波川',
            'kana' => 'はかわ',
            'romaji' => 'Hakawa',
        ]);
        // id: 3795
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '878',
            'kanji' => '大杉',
            'kana' => 'おおすぎ',
            'romaji' => 'Ōsugi',
        ]);
        // id: 3796
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '878',
            'kanji' => '大田口',
            'kana' => 'おおたぐち',
            'romaji' => 'Ōtaguchi',
        ]);
        // id: 3797
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '878',
            'kanji' => '角茂谷',
            'kana' => 'かくもだに',
            'romaji' => 'Kakumodani',
        ]);
        // id: 3798
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '878',
            'kanji' => '土佐穴内',
            'kana' => 'とさあなない',
            'romaji' => 'Tosa-Ananai',
        ]);
        // id: 3799
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '878',
            'kanji' => '土佐岩原',
            'kana' => 'とさいわはら',
            'romaji' => 'Tosa-Iwahara',
        ]);
        // id: 3800
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '878',
            'kanji' => '土佐北川',
            'kana' => 'とさきたがわ',
            'romaji' => 'Tosa-Kitagawa',
        ]);
        // id: 3801
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '878',
            'kanji' => '豊永',
            'kana' => 'とよなが',
            'romaji' => 'Toyonaga',
        ]);
        // id: 3802
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '879',
            'kanji' => '繁藤',
            'kana' => 'しげとう',
            'romaji' => 'Shigetō',
        ]);
        // id: 3803
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '879',
            'kanji' => '新改',
            'kana' => 'しんがい',
            'romaji' => 'Shingai',
        ]);
        // id: 3804
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '879',
            'kanji' => '土佐山田',
            'kana' => 'とさやまだ',
            'romaji' => 'Tosa-Yamada',
        ]);
        // id: 3805
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '879',
            'kanji' => '山田西町',
            'kana' => 'やまだにしまち',
            'romaji' => 'Yamadanishimachi',
        ]);
        // id: 3806
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '朝倉',
            'kana' => 'あさくら',
            'romaji' => 'Asakura',
        ]);
        // id: 3807
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '旭',
            'kana' => 'あさひ',
            'romaji' => 'Asahi',
        ]);
        // id: 3808
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '薊野',
            'kana' => 'あぞうの',
            'romaji' => 'Azōno',
        ]);
        // id: 3809
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '入明',
            'kana' => 'いりあけ',
            'romaji' => 'Iriake',
        ]);
        // id: 3810
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '円行寺口',
            'kana' => 'えんぎょうじぐち',
            'romaji' => 'Engyōjiguchi',
        ]);
        // id: 3811
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '高知',
            'kana' => 'こうち',
            'romaji' => 'Kōchi',
        ]);
        // id: 3812
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '高知商業前',
            'kana' => 'こうちしょうぎょうまえ',
            'romaji' => 'Kōchishōgyōmae',
        ]);
        // id: 3813
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '土佐一宮',
            'kana' => 'とさいっく',
            'romaji' => 'Tosa-Ikku',
        ]);
        // id: 3814
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '土佐大津',
            'kana' => 'とさおおつ',
            'romaji' => 'Tosa-Ōtsu',
        ]);
        // id: 3815
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '880',
            'kanji' => '布師田',
            'kana' => 'ぬのしだ',
            'romaji' => 'Nunoshida',
        ]);
        // id: 3816
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '881',
            'kanji' => '襟野々',
            'kana' => 'えりのの',
            'romaji' => 'Erinono',
        ]);
        // id: 3817
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '881',
            'kanji' => '佐川',
            'kana' => 'さかわ',
            'romaji' => 'Sakawa',
        ]);
        // id: 3818
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '881',
            'kanji' => '斗賀野',
            'kana' => 'とがの',
            'romaji' => 'Togano',
        ]);
        // id: 3819
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '881',
            'kanji' => '土佐加茂',
            'kana' => 'とさかも',
            'romaji' => 'Tosa-Kamo',
        ]);
        // id: 3820
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '881',
            'kanji' => '西佐川',
            'kana' => 'にしさかわ',
            'romaji' => 'Nishi-Sakawa',
        ]);
        // id: 3821
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '882',
            'kanji' => '江川崎',
            'kana' => 'えかわさき',
            'romaji' => 'Ekawasaki',
        ]);
        // id: 3822
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '882',
            'kanji' => '西ケ方',
            'kana' => 'にしがほう',
            'romaji' => 'Nishigahō',
        ]);
        // id: 3823
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '882',
            'kanji' => '半家',
            'kana' => 'はげ',
            'romaji' => 'Hage',
        ]);
        // id: 3824
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '家地川',
            'kana' => 'いえぢがわ',
            'romaji' => 'Iejigawa',
        ]);
        // id: 3825
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '打井川',
            'kana' => 'うついがわ',
            'romaji' => 'Utsuigawa',
        ]);
        // id: 3826
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '影野',
            'kana' => 'かげの',
            'romaji' => 'Kageno',
        ]);
        // id: 3827
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '窪川',
            'kana' => 'くぼかわ',
            'romaji' => 'Kubokawa',
        ]);
        // id: 3828
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '十川',
            'kana' => 'とおかわ',
            'romaji' => 'Tōkawa',
        ]);
        // id: 3829
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '土佐昭和',
            'kana' => 'とさしょうわ',
            'romaji' => 'Tosa-Shōwa',
        ]);
        // id: 3830
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '土佐大正',
            'kana' => 'とさたいしょう',
            'romaji' => 'Tosa-Taishō',
        ]);
        // id: 3831
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '仁井田',
            'kana' => 'にいだ',
            'romaji' => 'Niida',
        ]);
        // id: 3832
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '六反地',
            'kana' => 'ろくたんじ',
            'romaji' => 'Rokutanji',
        ]);
        // id: 3833
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '883',
            'kanji' => '若井',
            'kana' => 'わかい',
            'romaji' => 'Wakai',
        ]);
        // id: 3834
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '884',
            'kanji' => '吾桑',
            'kana' => 'あそう',
            'romaji' => 'Asō',
        ]);
        // id: 3835
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '884',
            'kanji' => '安和',
            'kana' => 'あわ',
            'romaji' => 'Awa',
        ]);
        // id: 3836
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '884',
            'kanji' => '多ノ郷',
            'kana' => 'おおのごう',
            'romaji' => 'Ōnogō',
        ]);
        // id: 3837
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '884',
            'kanji' => '大間',
            'kana' => 'おおま',
            'romaji' => 'Ōma',
        ]);
        // id: 3838
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '884',
            'kanji' => '須崎',
            'kana' => 'すさき',
            'romaji' => 'Susaki',
        ]);
        // id: 3839
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '884',
            'kanji' => '土佐新荘',
            'kana' => 'とさしんじょう',
            'romaji' => 'Tosa-Shinjō',
        ]);
        // id: 3840
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '885',
            'kanji' => '土佐久礼',
            'kana' => 'とさくれ',
            'romaji' => 'Tosa-Kure',
        ]);
        // id: 3841
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '886',
            'kanji' => '後免',
            'kana' => 'ごめん',
            'romaji' => 'Gomen',
        ]);
        // id: 3842
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '886',
            'kanji' => '土佐長岡',
            'kana' => 'とさながおか',
            'romaji' => 'Tosa-Nagaoka',
        ]);
        // id: 3843
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '887',
            'kanji' => '岡花',
            'kana' => 'おかばな',
            'romaji' => 'Okabana',
        ]);
        // id: 3844
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '887',
            'kanji' => '小村神社前',
            'kana' => 'おむらじんじゃまえ',
            'romaji' => 'Omurajinjamae',
        ]);
        // id: 3845
        Station::insert([
            'prefecture_id' => '39',
            'city_id' => '887',
            'kanji' => '日下',
            'kana' => 'くさか',
            'romaji' => 'Kusaka',
        ]);
        // id: 3846
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '飯塚',
            'kana' => 'いいづか',
            'romaji' => 'Iizuka',
        ]);
        // id: 3847
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '浦田',
            'kana' => 'うらた',
            'romaji' => 'Urata',
        ]);
        // id: 3848
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '上穂波',
            'kana' => 'かみほなみ',
            'romaji' => 'Kami-Honami',
        ]);
        // id: 3849
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '上三緒',
            'kana' => 'かみみお',
            'romaji' => 'Kami-Mio',
        ]);
        // id: 3850
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '九郎原',
            'kana' => 'くろうばる',
            'romaji' => 'Kurōbaru',
        ]);
        // id: 3851
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '新飯塚',
            'kana' => 'しんいいづか',
            'romaji' => 'Shin-Iizuka',
        ]);
        // id: 3852
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '筑前内野',
            'kana' => 'ちくぜんうちの',
            'romaji' => 'Chikuzen-Uchino',
        ]);
        // id: 3853
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '筑前庄内',
            'kana' => 'ちくぜんしょうない',
            'romaji' => 'Chikuzen-Shōnai',
        ]);
        // id: 3854
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '筑前大分',
            'kana' => 'ちくぜんだいぶ',
            'romaji' => 'Chikuzen-Daibu',
        ]);
        // id: 3855
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '天道',
            'kana' => 'てんとう',
            'romaji' => 'Tentō',
        ]);
        // id: 3856
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '888',
            'kanji' => '鯰田',
            'kana' => 'なまずた',
            'romaji' => 'Namazuta',
        ]);
        // id: 3857
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '一貴山',
            'kana' => 'いきさん',
            'romaji' => 'Ikisan',
        ]);
        // id: 3858
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '糸島高校前',
            'kana' => 'いとしまこうこうまえ',
            'romaji' => 'Itoshimakōkō-mae',
        ]);
        // id: 3859
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '加布里',
            'kana' => 'かふり',
            'romaji' => 'Kafuri',
        ]);
        // id: 3860
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '鹿家',
            'kana' => 'しかか',
            'romaji' => 'Shikaka',
        ]);
        // id: 3861
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '大入',
            'kana' => 'だいにゅう',
            'romaji' => 'Dainyū',
        ]);
        // id: 3862
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '筑前深江',
            'kana' => 'ちくぜんふかえ',
            'romaji' => 'Chikuzen-Fukae',
        ]);
        // id: 3863
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '筑前前原',
            'kana' => 'ちくぜんまえばる',
            'romaji' => 'Chikuzen-Maebaru',
        ]);
        // id: 3864
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '波多江',
            'kana' => 'はたえ',
            'romaji' => 'Hatae',
        ]);
        // id: 3865
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '福吉',
            'kana' => 'ふくよし',
            'romaji' => 'Fukuyoshi',
        ]);
        // id: 3866
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '889',
            'kanji' => '美咲が丘',
            'kana' => 'みさきがおか',
            'romaji' => 'Misakigaoka',
        ]);
        // id: 3867
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '890',
            'kanji' => 'うきは',
            'kana' => 'うきは',
            'romaji' => 'Ukiha',
        ]);
        // id: 3868
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '890',
            'kanji' => '筑後大石',
            'kana' => 'ちくごおおいし',
            'romaji' => 'Chikugo-Ōishi',
        ]);
        // id: 3869
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '890',
            'kanji' => '筑後吉井',
            'kana' => 'ちくごよしい',
            'romaji' => 'Chikugo-Yoshii',
        ]);
        // id: 3870
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '891',
            'kanji' => '宇美',
            'kana' => 'うみ',
            'romaji' => 'Umi',
        ]);
        // id: 3871
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '892',
            'kanji' => '大野城',
            'kana' => 'おおのじょう',
            'romaji' => 'Ōnojō',
        ]);
        // id: 3872
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '892',
            'kanji' => '水城',
            'kana' => 'みずき',
            'romaji' => 'Mizuki',
        ]);
        // id: 3873
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '893',
            'kanji' => '大牟田',
            'kana' => 'おおむた',
            'romaji' => 'Ōmuta',
        ]);
        // id: 3874
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '893',
            'kanji' => '銀水',
            'kana' => 'ぎんすい',
            'romaji' => 'Ginsui',
        ]);
        // id: 3875
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '893',
            'kanji' => '新大牟田',
            'kana' => 'しんおおむた',
            'romaji' => 'Shin-Ōmuta',
        ]);
        // id: 3876
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '893',
            'kanji' => '吉野',
            'kana' => 'よしの',
            'romaji' => 'Yoshino',
        ]);
        // id: 3877
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '894',
            'kanji' => '海老津',
            'kana' => 'えびつ',
            'romaji' => 'Ebitsu',
        ]);
        // id: 3878
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '895',
            'kanji' => '遠賀川',
            'kana' => 'おんががわ',
            'romaji' => 'Ongagawa',
        ]);
        // id: 3879
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '896',
            'kanji' => '春日',
            'kana' => 'かすが',
            'romaji' => 'Kasuga',
        ]);
        // id: 3880
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '896',
            'kanji' => '博多南',
            'kana' => 'はかたみなみ',
            'romaji' => 'Hakataminami',
        ]);
        // id: 3881
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '897',
            'kanji' => '伊賀',
            'kana' => 'いが',
            'romaji' => 'Iga',
        ]);
        // id: 3882
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '897',
            'kanji' => '門松',
            'kana' => 'かどまつ',
            'romaji' => 'Kadomatsu',
        ]);
        // id: 3883
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '897',
            'kanji' => '酒殿',
            'kana' => 'さかど',
            'romaji' => 'Sakado',
        ]);
        // id: 3884
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '897',
            'kanji' => '長者原',
            'kana' => 'ちょうじゃばる',
            'romaji' => 'Chōjabaru',
        ]);
        // id: 3885
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '897',
            'kanji' => '原町',
            'kana' => 'はるまち',
            'romaji' => 'Harumachi',
        ]);
        // id: 3886
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '897',
            'kanji' => '柚須',
            'kana' => 'ゆす',
            'romaji' => 'Yusu',
        ]);
        // id: 3887
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '898',
            'kanji' => '下鴨生',
            'kana' => 'しもかもお',
            'romaji' => 'Shimo-Kamoo',
        ]);
        // id: 3888
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '899',
            'kanji' => '池尻',
            'kana' => 'いけじり',
            'romaji' => 'Ikejiri',
        ]);
        // id: 3889
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '899',
            'kanji' => '豊前川崎',
            'kana' => 'ぶぜんかわさき',
            'romaji' => 'Buzen-Kawasaki',
        ]);
        // id: 3890
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '900',
            'kanji' => '一本松',
            'kana' => 'いっぽんまつ',
            'romaji' => 'Ippommatsu',
        ]);
        // id: 3891
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '900',
            'kanji' => '香春',
            'kana' => 'かわら',
            'romaji' => 'Kawara',
        ]);
        // id: 3892
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '900',
            'kanji' => '採銅所',
            'kana' => 'さいどうしょ',
            'romaji' => 'Saidōsho',
        ]);
        // id: 3893
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '901',
            'kanji' => '小波瀬西工大前',
            'kana' => 'おばせにしこうだいまえ',
            'romaji' => 'Obase Nishikōdai-mae',
        ]);
        // id: 3894
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '901',
            'kanji' => '苅田',
            'kana' => 'かんだ',
            'romaji' => 'Kanda',
        ]);
        // id: 3895
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '安部山公園',
            'kana' => 'あべやまこうえん',
            'romaji' => 'Abeyama-kōen',
        ]);
        // id: 3896
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '石田',
            'kana' => 'いしだ',
            'romaji' => 'Ishida',
        ]);
        // id: 3897
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '石原町',
            'kana' => 'いしはらまち',
            'romaji' => 'Ishiharamachi',
        ]);
        // id: 3898
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '枝光',
            'kana' => 'えだみつ',
            'romaji' => 'Edamitsu',
        ]);
        // id: 3899
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '奥洞海',
            'kana' => 'おくどうかい',
            'romaji' => 'Okudōkai',
        ]);
        // id: 3900
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '折尾',
            'kana' => 'おりお',
            'romaji' => 'Orio',
        ]);
        // id: 3901
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '九州工大前',
            'kana' => 'きゅうしゅうこうだいまえ',
            'romaji' => 'Kyūshūkōdai-mae',
        ]);
        // id: 3902
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '朽網',
            'kana' => 'くさみ',
            'romaji' => 'Kusami',
        ]);
        // id: 3903
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '黒崎',
            'kana' => 'くろさき',
            'romaji' => 'Kurosaki',
        ]);
        // id: 3904
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '小倉',
            'kana' => 'こくら',
            'romaji' => 'Kokura',
        ]);
        // id: 3905
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '小森江',
            'kana' => 'こもりえ',
            'romaji' => 'Komorie',
        ]);
        // id: 3906
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '志井',
            'kana' => 'しい',
            'romaji' => 'Shii',
        ]);
        // id: 3907
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '志井公園',
            'kana' => 'しいこうえん',
            'romaji' => 'Shii-kōen',
        ]);
        // id: 3908
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '下曽根',
            'kana' => 'しもそね',
            'romaji' => 'Shimo-Sone',
        ]);
        // id: 3909
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '城野',
            'kana' => 'じょうの',
            'romaji' => 'Jōno',
        ]);
        // id: 3910
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '陣原',
            'kana' => 'じんのはる',
            'romaji' => 'Jinnoharu',
        ]);
        // id: 3911
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => 'スペースワールド',
            'kana' => 'すぺーすわーるど',
            'romaji' => 'Space World',
        ]);
        // id: 3912
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '戸畑',
            'kana' => 'とばた',
            'romaji' => 'Tobata',
        ]);
        // id: 3913
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '西小倉',
            'kana' => 'にしこくら',
            'romaji' => 'Nishi-Kokura',
        ]);
        // id: 3914
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '藤ノ木',
            'kana' => 'ふじのき',
            'romaji' => 'Fujinoki',
        ]);
        // id: 3915
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '二島',
            'kana' => 'ふたじま',
            'romaji' => 'Futajima',
        ]);
        // id: 3916
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '本城',
            'kana' => 'ほんじょう',
            'romaji' => 'Honjō',
        ]);
        // id: 3917
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '南小倉',
            'kana' => 'みなみこくら',
            'romaji' => 'Minami-Kokura',
        ]);
        // id: 3918
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '門司',
            'kana' => 'もじ',
            'romaji' => 'Moji',
        ]);
        // id: 3919
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '門司港',
            'kana' => 'もじこう',
            'romaji' => 'Mojikō',
        ]);
        // id: 3920
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '八幡',
            'kana' => 'やはた',
            'romaji' => 'Yahata',
        ]);
        // id: 3921
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '呼野',
            'kana' => 'よぶの',
            'romaji' => 'Yobuno',
        ]);
        // id: 3922
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '902',
            'kanji' => '若松',
            'kana' => 'わかまつ',
            'romaji' => 'Wakamatsu',
        ]);
        // id: 3923
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '903',
            'kanji' => '鞍手',
            'kana' => 'くらて',
            'romaji' => 'Kurate',
        ]);
        // id: 3924
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '荒木',
            'kana' => 'あらき',
            'romaji' => 'Araki',
        ]);
        // id: 3925
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '久留米',
            'kana' => 'くるめ',
            'romaji' => 'Kurume',
        ]);
        // id: 3926
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '久留米高校前',
            'kana' => 'くるめこうこうまえ',
            'romaji' => 'Kurumekōkō-mae',
        ]);
        // id: 3927
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '久留米大学前',
            'kana' => 'くるめだいがくまえ',
            'romaji' => 'Kurumedaigaku-mae',
        ]);
        // id: 3928
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '善導寺',
            'kana' => 'ぜんどうじ',
            'romaji' => 'Zendōji',
        ]);
        // id: 3929
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '田主丸',
            'kana' => 'たぬしまる',
            'romaji' => 'Tanushimaru',
        ]);
        // id: 3930
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '筑後草野',
            'kana' => 'ちくごくさの',
            'romaji' => 'Chikugo-Kusano',
        ]);
        // id: 3931
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '御井',
            'kana' => 'みい',
            'romaji' => 'Mii',
        ]);
        // id: 3932
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '904',
            'kanji' => '南久留米',
            'kana' => 'みなみくるめ',
            'romaji' => 'Minami-Kurume',
        ]);
        // id: 3933
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '905',
            'kanji' => '桂川',
            'kana' => 'けいせん',
            'romaji' => 'Keisen',
        ]);
        // id: 3934
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '906',
            'kanji' => '古賀',
            'kana' => 'こが',
            'romaji' => 'Koga',
        ]);
        // id: 3935
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '906',
            'kanji' => 'ししぶ',
            'kana' => 'ししぶ',
            'romaji' => 'Shishibu',
        ]);
        // id: 3936
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '906',
            'kanji' => '千鳥',
            'kana' => 'ちどり',
            'romaji' => 'Chidori',
        ]);
        // id: 3937
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '907',
            'kanji' => '勝野',
            'kana' => 'かつの',
            'romaji' => 'Katsuno',
        ]);
        // id: 3938
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '907',
            'kanji' => '小竹',
            'kana' => 'こたけ',
            'romaji' => 'Kotake',
        ]);
        // id: 3939
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '908',
            'kanji' => '城戸南蔵院前',
            'kana' => 'きどなんぞういんまえ',
            'romaji' => 'Kido Nanzōin-mae',
        ]);
        // id: 3940
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '908',
            'kanji' => '篠栗',
            'kana' => 'ささぐり',
            'romaji' => 'Sasaguri',
        ]);
        // id: 3941
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '908',
            'kanji' => '筑前山手',
            'kana' => 'ちくぜんやまて',
            'romaji' => 'Chikuzen-Yamate',
        ]);
        // id: 3942
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '909',
            'kanji' => '新宮中央',
            'kana' => 'しんぐうちゅうおう',
            'romaji' => 'Shingū-chūō',
        ]);
        // id: 3943
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '910',
            'kanji' => '新原',
            'kana' => 'しんばる',
            'romaji' => 'Shimbaru',
        ]);
        // id: 3944
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '910',
            'kanji' => '須恵',
            'kana' => 'すえ',
            'romaji' => 'Sue',
        ]);
        // id: 3945
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '910',
            'kanji' => '須恵中央',
            'kana' => 'すえちゅうおう',
            'romaji' => 'Sue-chūō',
        ]);
        // id: 3946
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '911',
            'kanji' => '歓遊舎ひこさん',
            'kana' => 'かんゆうしゃひこさん',
            'romaji' => 'Kanyūsha-Hikosan',
        ]);
        // id: 3947
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '911',
            'kanji' => '添田',
            'kana' => 'そえだ',
            'romaji' => 'Soeda',
        ]);
        // id: 3948
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '911',
            'kanji' => '西添田',
            'kana' => 'にしそえだ',
            'romaji' => 'Nishi-Soeda',
        ]);
        // id: 3949
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '911',
            'kanji' => '彦山',
            'kana' => 'ひこさん',
            'romaji' => 'Hikosan',
        ]);
        // id: 3950
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '911',
            'kanji' => '豊前桝田',
            'kana' => 'ぶぜんますだ',
            'romaji' => 'Buzen-Masuda',
        ]);
        // id: 3951
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '912',
            'kanji' => '田川伊田',
            'kana' => 'たがわいた',
            'romaji' => 'Tagawaita',
        ]);
        // id: 3952
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '912',
            'kanji' => '田川後藤寺',
            'kana' => 'たがわごとうじ',
            'romaji' => 'Tagawagotōji',
        ]);
        // id: 3953
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '912',
            'kanji' => '船尾',
            'kana' => 'ふなお',
            'romaji' => 'Funao',
        ]);
        // id: 3954
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '913',
            'kanji' => '都府楼南',
            'kana' => 'とふろうみなみ',
            'romaji' => 'Tofurōminami',
        ]);
        // id: 3955
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '914',
            'kanji' => '筑後船小屋',
            'kana' => 'ちくごふなごや',
            'romaji' => 'Chikugo-Funagoya',
        ]);
        // id: 3956
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '914',
            'kanji' => '西牟田',
            'kana' => 'にしむた',
            'romaji' => 'Nishimuta',
        ]);
        // id: 3957
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '914',
            'kanji' => '羽犬塚',
            'kana' => 'はいぬづか',
            'romaji' => 'Hainuzuka',
        ]);
        // id: 3958
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '915',
            'kanji' => '筑前山家',
            'kana' => 'ちくぜんやまえ',
            'romaji' => 'Chikuzen-Yamae',
        ]);
        // id: 3959
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '915',
            'kanji' => '天拝山',
            'kana' => 'てんぱいざん',
            'romaji' => 'Tempaizan',
        ]);
        // id: 3960
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '915',
            'kanji' => '原田',
            'kana' => 'はるだ',
            'romaji' => 'Haruda',
        ]);
        // id: 3961
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '915',
            'kanji' => '二日市',
            'kana' => 'ふつかいち',
            'romaji' => 'Futsukaichi',
        ]);
        // id: 3962
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '916',
            'kanji' => '椎田',
            'kana' => 'しいだ',
            'romaji' => 'Shiida',
        ]);
        // id: 3963
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '916',
            'kanji' => '築城',
            'kana' => 'ついき',
            'romaji' => 'Tsuiki',
        ]);
        // id: 3964
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '917',
            'kanji' => '大行司',
            'kana' => 'だいぎょうじ',
            'romaji' => 'Daigyōji',
        ]);
        // id: 3965
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '917',
            'kanji' => '筑前岩屋',
            'kana' => 'ちくぜんいわや',
            'romaji' => 'Chikuzen-Iwaya',
        ]);
        // id: 3966
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '917',
            'kanji' => '宝珠山',
            'kana' => 'ほうしゅやま',
            'romaji' => 'Hōshuyama',
        ]);
        // id: 3967
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '918',
            'kanji' => '筑前垣生',
            'kana' => 'ちくぜんはぶ',
            'romaji' => 'Chikuzen-Habu',
        ]);
        // id: 3968
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '918',
            'kanji' => '中間',
            'kana' => 'なかま',
            'romaji' => 'Nakama',
        ]);
        // id: 3969
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '919',
            'kanji' => '新入',
            'kana' => 'しんにゅう',
            'romaji' => 'Shinnyū',
        ]);
        // id: 3970
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '919',
            'kanji' => '筑前植木',
            'kana' => 'ちくぜんうえき',
            'romaji' => 'Chikuzen-Ueki',
        ]);
        // id: 3971
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '919',
            'kanji' => '直方',
            'kana' => 'のおがた',
            'romaji' => 'Nōgata',
        ]);
        // id: 3972
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '今宿',
            'kana' => 'いまじゅく',
            'romaji' => 'Imajuku',
        ]);
        // id: 3973
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '海ノ中道',
            'kana' => 'うみのなかみち',
            'romaji' => 'Uminonakamichi',
        ]);
        // id: 3974
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '香椎',
            'kana' => 'かしい',
            'romaji' => 'Kashii',
        ]);
        // id: 3975
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '香椎神宮',
            'kana' => 'かしいじんぐう',
            'romaji' => 'Kashii-jingū',
        ]);
        // id: 3976
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '雁ノ巣',
            'kana' => 'がんのす',
            'romaji' => 'Gannosu',
        ]);
        // id: 3977
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '九産大前',
            'kana' => 'きゅうさんだいまえ',
            'romaji' => 'Kyūsandai-mae',
        ]);
        // id: 3978
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '九大学研都市',
            'kana' => 'きゅうだいがっけんとし',
            'romaji' => 'Kyūdai-Gakkentoshi',
        ]);
        // id: 3979
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '西戸崎',
            'kana' => 'さいとざき',
            'romaji' => 'Saitozaki',
        ]);
        // id: 3980
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '笹原',
            'kana' => 'ささばる',
            'romaji' => 'Sasabaru',
        ]);
        // id: 3981
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '下山門',
            'kana' => 'しもやまと',
            'romaji' => 'Shimoyamato',
        ]);
        // id: 3982
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '周船寺',
            'kana' => 'すせんじ',
            'romaji' => 'Susenji',
        ]);
        // id: 3983
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '竹下',
            'kana' => 'たけした',
            'romaji' => 'Takeshita',
        ]);
        // id: 3984
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '千早',
            'kana' => 'ちはや',
            'romaji' => 'Chihaya',
        ]);
        // id: 3985
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '土井',
            'kana' => 'どい',
            'romaji' => 'Doi',
        ]);
        // id: 3986
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '奈多',
            'kana' => 'なた',
            'romaji' => 'Nata',
        ]);
        // id: 3987
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '博多',
            'kana' => 'はかた',
            'romaji' => 'Hakata',
        ]);
        // id: 3988
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '箱崎',
            'kana' => 'はこざき',
            'romaji' => 'Hakozaki',
        ]);
        // id: 3989
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '福工大前',
            'kana' => 'ふっこうだいまえ',
            'romaji' => 'Fukkōdai-mae',
        ]);
        // id: 3990
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '舞松原',
            'kana' => 'まいまつばら',
            'romaji' => 'Maimatsubara',
        ]);
        // id: 3991
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '南福岡',
            'kana' => 'みなみふくおか',
            'romaji' => 'Minami-Fukuoka',
        ]);
        // id: 3992
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '姪浜',
            'kana' => 'めいのはま',
            'romaji' => 'Meinohama',
        ]);
        // id: 3993
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '吉塚',
            'kana' => 'よしづか',
            'romaji' => 'Yoshizuka',
        ]);
        // id: 3994
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '920',
            'kanji' => '和白',
            'kana' => 'わじろ',
            'romaji' => 'Wajiro',
        ]);
        // id: 3995
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '921',
            'kanji' => '東福間',
            'kana' => 'ひがしふくま',
            'romaji' => 'Higashi-Fukuma',
        ]);
        // id: 3996
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '921',
            'kanji' => '福間',
            'kana' => 'ふくま',
            'romaji' => 'Fukuma',
        ]);
        // id: 3997
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '922',
            'kanji' => '宇島',
            'kana' => 'うのしま',
            'romaji' => 'Unoshima',
        ]);
        // id: 3998
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '922',
            'kanji' => '豊前松江',
            'kana' => 'ぶぜんしょうえ',
            'romaji' => 'Buzen-Shōe',
        ]);
        // id: 3999
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '922',
            'kanji' => '三毛門',
            'kana' => 'みけかど',
            'romaji' => 'Mikekado',
        ]);
        // id: 4000
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '923',
            'kanji' => '東水巻',
            'kana' => 'ひがしみずまき',
            'romaji' => 'Higashi-Mizumaki',
        ]);
        // id: 4001
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '923',
            'kanji' => '水巻',
            'kana' => 'みずまき',
            'romaji' => 'Mizumaki',
        ]);
        // id: 4002
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '924',
            'kanji' => '瀬高',
            'kana' => 'せたか',
            'romaji' => 'Setaka',
        ]);
        // id: 4003
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '924',
            'kanji' => '南瀬高',
            'kana' => 'みなみせたか',
            'romaji' => 'Minami-Setaka',
        ]);
        // id: 4004
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '924',
            'kanji' => '渡瀬',
            'kana' => 'わたぜ',
            'romaji' => 'Wataze',
        ]);
        // id: 4005
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '925',
            'kanji' => '赤間',
            'kana' => 'あかま',
            'romaji' => 'Akama',
        ]);
        // id: 4006
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '925',
            'kanji' => '教育大前',
            'kana' => 'きょういくだいまえ',
            'romaji' => 'Kyōikudai-mae',
        ]);
        // id: 4007
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '925',
            'kanji' => '東郷',
            'kana' => 'とうごう',
            'romaji' => 'Tōgō',
        ]);
        // id: 4008
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '926',
            'kanji' => '新田原',
            'kana' => 'しんでんばる',
            'romaji' => 'Shindembaru',
        ]);
        // id: 4009
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '926',
            'kanji' => '南行橋',
            'kana' => 'みなみゆくはし',
            'romaji' => 'Minami-Yukuhashi',
        ]);
        // id: 4010
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '926',
            'kanji' => '行橋',
            'kana' => 'ゆくはし',
            'romaji' => 'Yukuhashi',
        ]);
        // id: 4011
        Station::insert([
            'prefecture_id' => '40',
            'city_id' => '927',
            'kanji' => '吉富',
            'kana' => 'よしとみ',
            'romaji' => 'Yoshitomi',
        ]);
        // id: 4012
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '928',
            'kanji' => '有田',
            'kana' => 'ありた',
            'romaji' => 'Arita',
        ]);
        // id: 4013
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '928',
            'kanji' => '上有田',
            'kana' => 'かみありた',
            'romaji' => 'Kami-Arita',
        ]);
        // id: 4014
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '929',
            'kanji' => '伊万里',
            'kana' => 'いまり',
            'romaji' => 'Imari',
        ]);
        // id: 4015
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '929',
            'kanji' => '大川野',
            'kana' => 'おおかわの',
            'romaji' => 'Ōkawano',
        ]);
        // id: 4016
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '929',
            'kanji' => '金石原',
            'kana' => 'かないしはら',
            'romaji' => 'Kanaishihara',
        ]);
        // id: 4017
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '929',
            'kanji' => '上伊万里',
            'kana' => 'かみいまり',
            'romaji' => 'Kami-Imari',
        ]);
        // id: 4018
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '929',
            'kanji' => '駒鳴',
            'kana' => 'こまなき',
            'romaji' => 'Komanaki',
        ]);
        // id: 4019
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '929',
            'kanji' => '肥前長野',
            'kana' => 'ひぜんながの',
            'romaji' => 'Hizen-Nagano',
        ]);
        // id: 4020
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '929',
            'kanji' => '桃川',
            'kana' => 'もものかわ',
            'romaji' => 'Momonokawa',
        ]);
        // id: 4021
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '930',
            'kanji' => '大町',
            'kana' => 'おおまち',
            'romaji' => 'Ōmachi',
        ]);
        // id: 4022
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '931',
            'kanji' => '牛津',
            'kana' => 'うしづ',
            'romaji' => 'Ushizu',
        ]);
        // id: 4023
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '931',
            'kanji' => '小城',
            'kana' => 'おぎ',
            'romaji' => 'Ogi',
        ]);
        // id: 4024
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '932',
            'kanji' => '肥前飯田',
            'kana' => 'ひぜんいいだ',
            'romaji' => 'Hizen-Iida',
        ]);
        // id: 4025
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '932',
            'kanji' => '肥前鹿島',
            'kana' => 'ひぜんかしま',
            'romaji' => 'Hizen-Kashima',
        ]);
        // id: 4026
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '932',
            'kanji' => '肥前七浦',
            'kana' => 'ひぜんななうら',
            'romaji' => 'Hizen-Nanaura',
        ]);
        // id: 4027
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '932',
            'kanji' => '肥前浜',
            'kana' => 'ひぜんはま',
            'romaji' => 'Hizen-Hama',
        ]);
        // id: 4028
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '岩屋',
            'kana' => 'いわや',
            'romaji' => 'Iwaya',
        ]);
        // id: 4029
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '相知',
            'kana' => 'おうち',
            'romaji' => 'Ōchi',
        ]);
        // id: 4030
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '鬼塚',
            'kana' => 'おにづか',
            'romaji' => 'Onizuka',
        ]);
        // id: 4031
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '唐津',
            'kana' => 'からつ',
            'romaji' => 'Karatsu',
        ]);
        // id: 4032
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '厳木',
            'kana' => 'きゅうらぎ',
            'romaji' => 'Kyūragi',
        ]);
        // id: 4033
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '佐里',
            'kana' => 'さり',
            'romaji' => 'Sari',
        ]);
        // id: 4034
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '西相知',
            'kana' => 'にしおうち',
            'romaji' => 'Nishi-Ōchi',
        ]);
        // id: 4035
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '西唐津',
            'kana' => 'にしからつ',
            'romaji' => 'Nishi-Karatsu',
        ]);
        // id: 4036
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '虹ノ松原',
            'kana' => 'にじのまつばら',
            'romaji' => 'Nijinomatsubara',
        ]);
        // id: 4037
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '浜崎',
            'kana' => 'はまさき',
            'romaji' => 'Hamasaki',
        ]);
        // id: 4038
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '東唐津',
            'kana' => 'ひがしからつ',
            'romaji' => 'Higashi-Karatsu',
        ]);
        // id: 4039
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '肥前久保',
            'kana' => 'ひぜんくぼ',
            'romaji' => 'Hizen-Kubo',
        ]);
        // id: 4040
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '本牟田部',
            'kana' => 'ほんむたべ',
            'romaji' => 'Hon-Mutabe',
        ]);
        // id: 4041
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '山本',
            'kana' => 'やまもと',
            'romaji' => 'Yamamoto',
        ]);
        // id: 4042
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '933',
            'kanji' => '和多田',
            'kana' => 'わただ',
            'romaji' => 'Watada',
        ]);
        // id: 4043
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '934',
            'kanji' => '神埼',
            'kana' => 'かんざき',
            'romaji' => 'Kanzaki',
        ]);
        // id: 4044
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '935',
            'kanji' => '基山',
            'kana' => 'きやま',
            'romaji' => 'Kiyama',
        ]);
        // id: 4045
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '935',
            'kanji' => 'けやき台',
            'kana' => 'けやきだい',
            'romaji' => 'Keyakidai',
        ]);
        // id: 4046
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '936',
            'kanji' => '肥前山口',
            'kana' => 'ひぜんやまぐち',
            'romaji' => 'Hizen-Yamaguchi',
        ]);
        // id: 4047
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '937',
            'kanji' => '伊賀屋',
            'kana' => 'いがや',
            'romaji' => 'Igaya',
        ]);
        // id: 4048
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '937',
            'kanji' => '久保田',
            'kana' => 'くぼた',
            'romaji' => 'Kubota',
        ]);
        // id: 4049
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '937',
            'kanji' => '佐賀',
            'kana' => 'さが',
            'romaji' => 'Saga',
        ]);
        // id: 4050
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '937',
            'kanji' => '鍋島',
            'kana' => 'なべしま',
            'romaji' => 'Nabeshima',
        ]);
        // id: 4051
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '937',
            'kanji' => 'バルーンさが(臨)',
            'kana' => 'ばるーんさが',
            'romaji' => 'Balloon Saga',
        ]);
        // id: 4052
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '938',
            'kanji' => '肥前白石',
            'kana' => 'ひぜんしろいし',
            'romaji' => 'Hizen-Shiroishi',
        ]);
        // id: 4053
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '938',
            'kanji' => '肥前竜王',
            'kana' => 'ひぜんりゅうおう',
            'romaji' => 'Hizen-Ryūō',
        ]);
        // id: 4054
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '939',
            'kanji' => '多久',
            'kana' => 'たく',
            'romaji' => 'Taku',
        ]);
        // id: 4055
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '939',
            'kanji' => '中多久',
            'kana' => 'なかたく',
            'romaji' => 'Nakataku',
        ]);
        // id: 4056
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '939',
            'kanji' => '東多久',
            'kana' => 'ひがしたく',
            'romaji' => 'Higashi-Taku',
        ]);
        // id: 4057
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '940',
            'kanji' => '北方',
            'kana' => 'きたがた',
            'romaji' => 'Kitagata',
        ]);
        // id: 4058
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '940',
            'kanji' => '高橋',
            'kana' => 'たかはし',
            'romaji' => 'Takahashi',
        ]);
        // id: 4059
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '940',
            'kanji' => '武雄温泉',
            'kana' => 'たけおおんせん',
            'romaji' => 'Takeo-onsen',
        ]);
        // id: 4060
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '940',
            'kanji' => '永尾',
            'kana' => 'ながお',
            'romaji' => 'Nagao',
        ]);
        // id: 4061
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '940',
            'kanji' => '三間坂',
            'kana' => 'みまさか',
            'romaji' => 'Mimasaka',
        ]);
        // id: 4062
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '941',
            'kanji' => '多良',
            'kana' => 'たら',
            'romaji' => 'Tara',
        ]);
        // id: 4063
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '941',
            'kanji' => '肥前大浦',
            'kana' => 'ひぜんおおうら',
            'romaji' => 'Hizen-Ōura',
        ]);
        // id: 4064
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '942',
            'kanji' => '新鳥栖',
            'kana' => 'しんとす',
            'romaji' => 'Shin-Tosu',
        ]);
        // id: 4065
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '942',
            'kanji' => '田代',
            'kana' => 'たしろ',
            'romaji' => 'Tashiro',
        ]);
        // id: 4066
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '942',
            'kanji' => '鳥栖',
            'kana' => 'とす',
            'romaji' => 'Tosu',
        ]);
        // id: 4067
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '942',
            'kanji' => '肥前旭',
            'kana' => 'ひぜんあさひ',
            'romaji' => 'Hizen-Asahi',
        ]);
        // id: 4068
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '942',
            'kanji' => '肥前麓',
            'kana' => 'ひぜんふもと',
            'romaji' => 'Hizen-Fumoto',
        ]);
        // id: 4069
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '942',
            'kanji' => '弥生が丘',
            'kana' => 'やよいがおか',
            'romaji' => 'Yayoigaoka',
        ]);
        // id: 4070
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '943',
            'kanji' => '中原',
            'kana' => 'なかばる',
            'romaji' => 'Nakabaru',
        ]);
        // id: 4071
        Station::insert([
            'prefecture_id' => '41',
            'city_id' => '944',
            'kanji' => '吉野ケ里公園',
            'kana' => 'よしのがりこうえん',
            'romaji' => 'Yoshinogari-kōen',
        ]);
        // id: 4072
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '諫早',
            'kana' => 'いさはや',
            'romaji' => 'Isahaya',
        ]);
        // id: 4073
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '市布',
            'kana' => 'いちぬの',
            'romaji' => 'Ichinuno',
        ]);
        // id: 4074
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '小江',
            'kana' => 'おえ',
            'romaji' => 'Oe',
        ]);
        // id: 4075
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '大草',
            'kana' => 'おおくさ',
            'romaji' => 'Ōkusa',
        ]);
        // id: 4076
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '喜々津',
            'kana' => 'ききつ',
            'romaji' => 'Kikitsu',
        ]);
        // id: 4077
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '小長井',
            'kana' => 'こながい',
            'romaji' => 'Konagai',
        ]);
        // id: 4078
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '長里',
            'kana' => 'ながさと',
            'romaji' => 'Nagasato',
        ]);
        // id: 4079
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '西諫早',
            'kana' => 'にしいさはや',
            'romaji' => 'Nishi-Isahaya',
        ]);
        // id: 4080
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '東諫早',
            'kana' => 'ひがしいさはや',
            'romaji' => 'Higashi-Isahaya',
        ]);
        // id: 4081
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '東園',
            'kana' => 'ひがしその',
            'romaji' => 'Higashisono',
        ]);
        // id: 4082
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '肥前長田',
            'kana' => 'ひぜんながた',
            'romaji' => 'Hizen-Nagata',
        ]);
        // id: 4083
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '945',
            'kanji' => '湯江',
            'kana' => 'ゆえ',
            'romaji' => 'Yue',
        ]);
        // id: 4084
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '946',
            'kanji' => '岩松',
            'kana' => 'いわまつ',
            'romaji' => 'Iwamatsu',
        ]);
        // id: 4085
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '946',
            'kanji' => '大村',
            'kana' => 'おおむら',
            'romaji' => 'Ōmura',
        ]);
        // id: 4086
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '946',
            'kanji' => '諏訪',
            'kana' => 'すわ',
            'romaji' => 'Suwa',
        ]);
        // id: 4087
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '946',
            'kanji' => '竹松',
            'kana' => 'たけまつ',
            'romaji' => 'Takematsu',
        ]);
        // id: 4088
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '946',
            'kanji' => '松原',
            'kana' => 'まつばら',
            'romaji' => 'Matsubara',
        ]);
        // id: 4089
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '947',
            'kanji' => '小串郷',
            'kana' => 'おぐしごう',
            'romaji' => 'Ogushigō',
        ]);
        // id: 4090
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '947',
            'kanji' => '川棚',
            'kana' => 'かわたな',
            'romaji' => 'Kawatana',
        ]);
        // id: 4091
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '948',
            'kanji' => '佐世保',
            'kana' => 'させぼ',
            'romaji' => 'Sasebo',
        ]);
        // id: 4092
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '948',
            'kanji' => '大塔',
            'kana' => 'だいとう',
            'romaji' => 'Daitō',
        ]);
        // id: 4093
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '948',
            'kanji' => '早岐',
            'kana' => 'はいき',
            'romaji' => 'Haiki',
        ]);
        // id: 4094
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '948',
            'kanji' => 'ハウステンボス',
            'kana' => 'はうすてんぼす',
            'romaji' => 'Huis Ten Bosch',
        ]);
        // id: 4095
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '948',
            'kanji' => '南風崎',
            'kana' => 'はえのさき',
            'romaji' => 'Haenosaki',
        ]);
        // id: 4096
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '948',
            'kanji' => '日宇',
            'kana' => 'ひう',
            'romaji' => 'Hiu',
        ]);
        // id: 4097
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '948',
            'kanji' => '三河内',
            'kana' => 'みかわち',
            'romaji' => 'Mikawachi',
        ]);
        // id: 4098
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '949',
            'kanji' => '現川',
            'kana' => 'うつつがわ',
            'romaji' => 'Utsutsugawa',
        ]);
        // id: 4099
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '949',
            'kanji' => '浦上',
            'kana' => 'うらかみ',
            'romaji' => 'Urakami',
        ]);
        // id: 4100
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '949',
            'kanji' => '長崎',
            'kana' => 'ながさき',
            'romaji' => 'Nagasaki',
        ]);
        // id: 4101
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '949',
            'kanji' => '西浦上',
            'kana' => 'にしうらかみ',
            'romaji' => 'Nishi-Urakami',
        ]);
        // id: 4102
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '949',
            'kanji' => '肥前古賀',
            'kana' => 'ひぜんこが',
            'romaji' => 'Hizen-Koga',
        ]);
        // id: 4103
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '949',
            'kanji' => '道ノ尾',
            'kana' => 'みちのお',
            'romaji' => 'Michinoo',
        ]);
        // id: 4104
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '950',
            'kanji' => '高田',
            'kana' => 'こうだ',
            'romaji' => 'Kōda',
        ]);
        // id: 4105
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '950',
            'kanji' => '長与',
            'kana' => 'ながよ',
            'romaji' => 'Nagayo',
        ]);
        // id: 4106
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '950',
            'kanji' => '本川内',
            'kana' => 'ほんかわち',
            'romaji' => 'Honkawachi',
        ]);
        // id: 4107
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '951',
            'kanji' => '彼杵',
            'kana' => 'そのぎ',
            'romaji' => 'Sonogi',
        ]);
        // id: 4108
        Station::insert([
            'prefecture_id' => '42',
            'city_id' => '951',
            'kanji' => '千綿',
            'kana' => 'ちわた',
            'romaji' => 'Chiwata',
        ]);
        // id: 4109
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '952',
            'kanji' => '海路',
            'kana' => 'かいじ',
            'romaji' => 'Kaiji',
        ]);
        // id: 4110
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '952',
            'kanji' => '白石',
            'kana' => 'しろいし',
            'romaji' => 'Shiroishi',
        ]);
        // id: 4111
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '952',
            'kanji' => '吉尾',
            'kana' => 'よしお',
            'romaji' => 'Yoshio',
        ]);
        // id: 4112
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '953',
            'kanji' => '赤水',
            'kana' => 'あかみず',
            'romaji' => 'Akamizu',
        ]);
        // id: 4113
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '953',
            'kanji' => '阿蘇',
            'kana' => 'あそ',
            'romaji' => 'Aso',
        ]);
        // id: 4114
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '953',
            'kanji' => 'いこいの村',
            'kana' => 'いこいのむら',
            'romaji' => 'Ikoi-no-Mura',
        ]);
        // id: 4115
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '953',
            'kanji' => '市ノ川',
            'kana' => 'いちのかわ',
            'romaji' => 'Ichinokawa',
        ]);
        // id: 4116
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '953',
            'kanji' => '内牧',
            'kana' => 'うちのまき',
            'romaji' => 'Uchinomaki',
        ]);
        // id: 4117
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '953',
            'kanji' => '滝水',
            'kana' => 'たきみず',
            'romaji' => 'Takimizu',
        ]);
        // id: 4118
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '953',
            'kanji' => '波野',
            'kana' => 'なみの',
            'romaji' => 'Namino',
        ]);
        // id: 4119
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '953',
            'kanji' => '宮地',
            'kana' => 'みやじ',
            'romaji' => 'Miyaji',
        ]);
        // id: 4120
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '954',
            'kanji' => '荒尾',
            'kana' => 'あらお',
            'romaji' => 'Arao',
        ]);
        // id: 4121
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '954',
            'kanji' => '南荒尾',
            'kana' => 'みなみあらお',
            'romaji' => 'Minami-Arao',
        ]);
        // id: 4122
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '955',
            'kanji' => '石打ダム',
            'kana' => 'いしうちだむ',
            'romaji' => 'Ishiuchi-dam',
        ]);
        // id: 4123
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '955',
            'kanji' => '小川',
            'kana' => 'おがわ',
            'romaji' => 'Ogawa',
        ]);
        // id: 4124
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '955',
            'kanji' => '波多浦',
            'kana' => 'はたうら',
            'romaji' => 'Hataura',
        ]);
        // id: 4125
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '955',
            'kanji' => '松橋',
            'kana' => 'まつばせ',
            'romaji' => 'Matsubase',
        ]);
        // id: 4126
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '955',
            'kanji' => '三角',
            'kana' => 'みすみ',
            'romaji' => 'Misumi',
        ]);
        // id: 4127
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '956',
            'kanji' => '赤瀬',
            'kana' => 'あかせ',
            'romaji' => 'Akase',
        ]);
        // id: 4128
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '956',
            'kanji' => '宇土',
            'kana' => 'うと',
            'romaji' => 'Uto',
        ]);
        // id: 4129
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '956',
            'kanji' => '網田',
            'kana' => 'おうだ',
            'romaji' => 'Ōda',
        ]);
        // id: 4130
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '956',
            'kanji' => '住吉',
            'kana' => 'すみよし',
            'romaji' => 'Sumiyoshi',
        ]);
        // id: 4131
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '956',
            'kanji' => '肥後長浜',
            'kana' => 'ひごながはま',
            'romaji' => 'Higo-Nagahama',
        ]);
        // id: 4132
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '956',
            'kanji' => '緑川',
            'kana' => 'みどりかわ',
            'romaji' => 'Midorikawa',
        ]);
        // id: 4133
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '957',
            'kanji' => '瀬田',
            'kana' => 'せた',
            'romaji' => 'Seta',
        ]);
        // id: 4134
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '957',
            'kanji' => '肥後大津',
            'kana' => 'ひごおおづ',
            'romaji' => 'Higo-Ōzu',
        ]);
        // id: 4135
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '958',
            'kanji' => '三里木',
            'kana' => 'さんりぎ',
            'romaji' => 'Sanrigi',
        ]);
        // id: 4136
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '958',
            'kanji' => '原水',
            'kana' => 'はらみず',
            'romaji' => 'Haramizu',
        ]);
        // id: 4137
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '959',
            'kanji' => '木葉',
            'kana' => 'このは',
            'romaji' => 'Konoha',
        ]);
        // id: 4138
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '960',
            'kanji' => '一勝地',
            'kana' => 'いっしょうち',
            'romaji' => 'Isshōchi',
        ]);
        // id: 4139
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '960',
            'kanji' => '球泉洞',
            'kana' => 'きゅうせんどう',
            'romaji' => 'Kyūsendō',
        ]);
        // id: 4140
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '960',
            'kanji' => '那良口',
            'kana' => 'ならぐち',
            'romaji' => 'Naraguchi',
        ]);
        // id: 4141
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '960',
            'kanji' => '渡',
            'kana' => 'わたり',
            'romaji' => 'Watari',
        ]);
        // id: 4142
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '植木',
            'kana' => 'うえき',
            'romaji' => 'Ueki',
        ]);
        // id: 4143
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '上熊本',
            'kana' => 'かみくまもと',
            'romaji' => 'Kami-Kumamoto',
        ]);
        // id: 4144
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '川尻',
            'kana' => 'かわしり',
            'romaji' => 'Kawashiri',
        ]);
        // id: 4145
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '熊本',
            'kana' => 'くまもと',
            'romaji' => 'Kumamoto',
        ]);
        // id: 4146
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '新水前寺',
            'kana' => 'しんすいぜんじ',
            'romaji' => 'Shin-Suizenji',
        ]);
        // id: 4147
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '水前寺',
            'kana' => 'すいぜんじ',
            'romaji' => 'Suizenji',
        ]);
        // id: 4148
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '崇城大学前',
            'kana' => 'そうじょうだいがくまえ',
            'romaji' => 'Sōjōdaigaku-mae',
        ]);
        // id: 4149
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '竜田口',
            'kana' => 'たつたぐち',
            'romaji' => 'Tatsutaguchi',
        ]);
        // id: 4150
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '田原坂',
            'kana' => 'たばるざか',
            'romaji' => 'Tabaruzaka',
        ]);
        // id: 4151
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '東海学園前',
            'kana' => 'とうかいがくえんまえ',
            'romaji' => 'Tōkaigakuen-mae',
        ]);
        // id: 4152
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '富合',
            'kana' => 'とみあい',
            'romaji' => 'Tomiai',
        ]);
        // id: 4153
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '西熊本',
            'kana' => 'にしくまもと',
            'romaji' => 'Nishi-Kumamoto',
        ]);
        // id: 4154
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '西里',
            'kana' => 'にしさと',
            'romaji' => 'Nishisato',
        ]);
        // id: 4155
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '光の森',
            'kana' => 'ひかりのもり',
            'romaji' => 'Hikarinomori',
        ]);
        // id: 4156
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '平成',
            'kana' => 'へいせい',
            'romaji' => 'Heisei',
        ]);
        // id: 4157
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '南熊本',
            'kana' => 'みなみくまもと',
            'romaji' => 'Minami-Kumamoto',
        ]);
        // id: 4158
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '961',
            'kanji' => '武蔵塚',
            'kana' => 'むさしづか',
            'romaji' => 'Musashizuka',
        ]);
        // id: 4159
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '962',
            'kanji' => '大野下',
            'kana' => 'おおのしも',
            'romaji' => 'Ōnoshimo',
        ]);
        // id: 4160
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '962',
            'kanji' => '新玉名',
            'kana' => 'しんたまな',
            'romaji' => 'Shin-Tamana',
        ]);
        // id: 4161
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '962',
            'kanji' => '玉名',
            'kana' => 'たまな',
            'romaji' => 'Tamana',
        ]);
        // id: 4162
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '962',
            'kanji' => '肥後伊倉',
            'kana' => 'ひごいくら',
            'romaji' => 'Higo-Ikura',
        ]);
        // id: 4163
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '963',
            'kanji' => '長洲',
            'kana' => 'ながす',
            'romaji' => 'Nagasu',
        ]);
        // id: 4164
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '964',
            'kanji' => '大畑',
            'kana' => 'おこば',
            'romaji' => 'Okoba',
        ]);
        // id: 4165
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '964',
            'kanji' => '西人吉',
            'kana' => 'にしひとよし',
            'romaji' => 'Nishi-Hitoyoshi',
        ]);
        // id: 4166
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '964',
            'kanji' => '人吉',
            'kana' => 'ひとよし',
            'romaji' => 'Hitoyoshi',
        ]);
        // id: 4167
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '964',
            'kanji' => '矢岳',
            'kana' => 'やたけ',
            'romaji' => 'Yatake',
        ]);
        // id: 4168
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '965',
            'kanji' => '新水俣',
            'kana' => 'しんみなまた',
            'romaji' => 'Shin-Minamata',
        ]);
        // id: 4169
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '966',
            'kanji' => '立野',
            'kana' => 'たての',
            'romaji' => 'Tateno',
        ]);
        // id: 4170
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '有佐',
            'kana' => 'ありさ',
            'romaji' => 'Arisa',
        ]);
        // id: 4171
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '鎌瀬',
            'kana' => 'かませ',
            'romaji' => 'Kamase',
        ]);
        // id: 4172
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '坂本',
            'kana' => 'さかもと',
            'romaji' => 'Sakamoto',
        ]);
        // id: 4173
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '新八代',
            'kana' => 'しんやつしろ',
            'romaji' => 'Shin-Yatsushiro',
        ]);
        // id: 4174
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '瀬戸石',
            'kana' => 'せといし',
            'romaji' => 'Setoishi',
        ]);
        // id: 4175
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '千丁',
            'kana' => 'せんちょう',
            'romaji' => 'Senchō',
        ]);
        // id: 4176
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '段',
            'kana' => 'だん',
            'romaji' => 'Dan',
        ]);
        // id: 4177
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '葉木',
            'kana' => 'はき',
            'romaji' => 'Haki',
        ]);
        // id: 4178
        Station::insert([
            'prefecture_id' => '43',
            'city_id' => '967',
            'kanji' => '八代',
            'kana' => 'やつしろ',
            'romaji' => 'Yatsushiro',
        ]);
        // id: 4179
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '968',
            'kanji' => '天津',
            'kana' => 'あまつ',
            'romaji' => 'Amatsu',
        ]);
        // id: 4180
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '968',
            'kanji' => '宇佐',
            'kana' => 'うさ',
            'romaji' => 'Usa',
        ]);
        // id: 4181
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '968',
            'kanji' => '西屋敷',
            'kana' => 'にしやしき',
            'romaji' => 'Nishiyashiki',
        ]);
        // id: 4182
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '968',
            'kanji' => '豊前善光寺',
            'kana' => 'ぶぜんぜんこうじ',
            'romaji' => 'Buzen-Zenkōji',
        ]);
        // id: 4183
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '968',
            'kanji' => '豊前長洲',
            'kana' => 'ぶぜんながす',
            'romaji' => 'Buzen-Nagasu',
        ]);
        // id: 4184
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '968',
            'kanji' => '柳ケ浦',
            'kana' => 'やなぎがうら',
            'romaji' => 'Yanagigaura',
        ]);
        // id: 4185
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '969',
            'kanji' => '臼杵',
            'kana' => 'うすき',
            'romaji' => 'Usuki',
        ]);
        // id: 4186
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '969',
            'kanji' => '上臼杵',
            'kana' => 'かみうすき',
            'romaji' => 'Kami-Usuki',
        ]);
        // id: 4187
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '969',
            'kanji' => '熊崎',
            'kana' => 'くまさき',
            'romaji' => 'Kumasaki',
        ]);
        // id: 4188
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '969',
            'kanji' => '佐志生',
            'kana' => 'さしう',
            'romaji' => 'Sashiu',
        ]);
        // id: 4189
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '969',
            'kanji' => '下ノ江',
            'kana' => 'したのえ',
            'romaji' => 'Shitanoe',
        ]);
        // id: 4190
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '大分',
            'kana' => 'おおいた',
            'romaji' => 'Ōita',
        ]);
        // id: 4191
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '大分大学前',
            'kana' => 'おおいただいがくまえ',
            'romaji' => 'Ōita-Daigaku-mae',
        ]);
        // id: 4192
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '大在',
            'kana' => 'おおざい',
            'romaji' => 'Ōzai',
        ]);
        // id: 4193
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '賀来',
            'kana' => 'かく',
            'romaji' => 'Kaku',
        ]);
        // id: 4194
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '幸崎',
            'kana' => 'こうざき',
            'romaji' => 'Kōzaki',
        ]);
        // id: 4195
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '坂ノ市',
            'kana' => 'さかのいち',
            'romaji' => 'Sakanoichi',
        ]);
        // id: 4196
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '敷戸',
            'kana' => 'しきど',
            'romaji' => 'Shikido',
        ]);
        // id: 4197
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '高城',
            'kana' => 'たかじょう',
            'romaji' => 'Takajō',
        ]);
        // id: 4198
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '滝尾',
            'kana' => 'たきお',
            'romaji' => 'Takio',
        ]);
        // id: 4199
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '竹中',
            'kana' => 'たけなか',
            'romaji' => 'Takenaka',
        ]);
        // id: 4200
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '鶴崎',
            'kana' => 'つるさき',
            'romaji' => 'Tsurusaki',
        ]);
        // id: 4201
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '中判田',
            'kana' => 'なかはんだ',
            'romaji' => 'Naka-Handa',
        ]);
        // id: 4202
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '西大分',
            'kana' => 'にしおおいた',
            'romaji' => 'Nishi-Ōita',
        ]);
        // id: 4203
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '古国府',
            'kana' => 'ふるごう',
            'romaji' => 'Furugō',
        ]);
        // id: 4204
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '豊後国分',
            'kana' => 'ぶんごこくぶ',
            'romaji' => 'Bungo-Kokubu',
        ]);
        // id: 4205
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '牧',
            'kana' => 'まき',
            'romaji' => 'Maki',
        ]);
        // id: 4206
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '970',
            'kanji' => '南大分',
            'kana' => 'みなみおおいた',
            'romaji' => 'Minami-Ōita',
        ]);
        // id: 4207
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '971',
            'kanji' => '杵築',
            'kana' => 'きつき',
            'romaji' => 'Kitsuki',
        ]);
        // id: 4208
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '971',
            'kanji' => '立石',
            'kana' => 'たていし',
            'romaji' => 'Tateishi',
        ]);
        // id: 4209
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '971',
            'kanji' => '中山香',
            'kana' => 'なかやまが',
            'romaji' => 'Naka-Yamaga',
        ]);
        // id: 4210
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '972',
            'kanji' => '北山田',
            'kana' => 'きたやまだ',
            'romaji' => 'Kita-Yamada',
        ]);
        // id: 4211
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '972',
            'kanji' => '豊後森',
            'kana' => 'ぶんごもり',
            'romaji' => 'Bungo-Mori',
        ]);
        // id: 4212
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '973',
            'kanji' => '恵良',
            'kana' => 'えら',
            'romaji' => 'Era',
        ]);
        // id: 4213
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '973',
            'kanji' => '野矢',
            'kana' => 'のや',
            'romaji' => 'Noya',
        ]);
        // id: 4214
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '973',
            'kanji' => '引治',
            'kana' => 'ひきじ',
            'romaji' => 'Hikiji',
        ]);
        // id: 4215
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '973',
            'kanji' => '豊後中村',
            'kana' => 'ぶんごなかむら',
            'romaji' => 'Bungo-Nakamura',
        ]);
        // id: 4216
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '浅海井',
            'kana' => 'あざむい',
            'romaji' => 'Azamui',
        ]);
        // id: 4217
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '海崎',
            'kana' => 'かいざき',
            'romaji' => 'Kaizaki',
        ]);
        // id: 4218
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '上岡',
            'kana' => 'かみおか',
            'romaji' => 'Kamioka',
        ]);
        // id: 4219
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '狩生',
            'kana' => 'かりう',
            'romaji' => 'Kariu',
        ]);
        // id: 4220
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '佐伯',
            'kana' => 'さいき',
            'romaji' => 'Saiki',
        ]);
        // id: 4221
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '重岡',
            'kana' => 'しげおか',
            'romaji' => 'Shigeoka',
        ]);
        // id: 4222
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '宗太郎',
            'kana' => 'そうたろう',
            'romaji' => 'Sōtarō',
        ]);
        // id: 4223
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '直川',
            'kana' => 'なおかわ',
            'romaji' => 'Naokawa',
        ]);
        // id: 4224
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '974',
            'kanji' => '直見',
            'kana' => 'なおみ',
            'romaji' => 'Naomi',
        ]);
        // id: 4225
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '975',
            'kanji' => '玉来',
            'kana' => 'たまらい',
            'romaji' => 'Tamarai',
        ]);
        // id: 4226
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '975',
            'kanji' => '豊後荻',
            'kana' => 'ぶんごおぎ',
            'romaji' => 'Bungo-Ogi',
        ]);
        // id: 4227
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '975',
            'kanji' => '豊後竹田',
            'kana' => 'ぶんごたけた',
            'romaji' => 'Bungo-Taketa',
        ]);
        // id: 4228
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '976',
            'kanji' => '津久見',
            'kana' => 'つくみ',
            'romaji' => 'Tsukumi',
        ]);
        // id: 4229
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '976',
            'kanji' => '日代',
            'kana' => 'ひしろ',
            'romaji' => 'Hishiro',
        ]);
        // id: 4230
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '977',
            'kanji' => '今津',
            'kana' => 'いまづ',
            'romaji' => 'Imazu',
        ]);
        // id: 4231
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '977',
            'kanji' => '中津',
            'kana' => 'なかつ',
            'romaji' => 'Nakatsu',
        ]);
        // id: 4232
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '977',
            'kanji' => '東中津',
            'kana' => 'ひがしなかつ',
            'romaji' => 'Higashi-Nakatsu',
        ]);
        // id: 4233
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '978',
            'kanji' => '大神',
            'kana' => 'おおが',
            'romaji' => 'Ōga',
        ]);
        // id: 4234
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '978',
            'kanji' => '日出',
            'kana' => 'ひじ',
            'romaji' => 'Hiji',
        ]);
        // id: 4235
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '978',
            'kanji' => '豊後豊岡',
            'kana' => 'ぶんごとよおか',
            'romaji' => 'Bungo-Toyooka',
        ]);
        // id: 4236
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '978',
            'kanji' => '暘谷',
            'kana' => 'ようこく',
            'romaji' => 'Yōkoku',
        ]);
        // id: 4237
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '天ケ瀬',
            'kana' => 'あまがせ',
            'romaji' => 'Amagase',
        ]);
        // id: 4238
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '今山',
            'kana' => 'いまやま',
            'romaji' => 'Imayama',
        ]);
        // id: 4239
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '大鶴',
            'kana' => 'おおつる',
            'romaji' => 'Ōtsuru',
        ]);
        // id: 4240
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '杉河内',
            'kana' => 'すぎかわち',
            'romaji' => 'Sugikawachi',
        ]);
        // id: 4241
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '光岡',
            'kana' => 'てるおか',
            'romaji' => 'Teruoka',
        ]);
        // id: 4242
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '日田',
            'kana' => 'ひた',
            'romaji' => 'Hita',
        ]);
        // id: 4243
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '豊後中川',
            'kana' => 'ぶんごなかがわ',
            'romaji' => 'Bungo-Nakagawa',
        ]);
        // id: 4244
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '豊後三芳',
            'kana' => 'ぶんごみよし',
            'romaji' => 'Bungo-Miyoshi',
        ]);
        // id: 4245
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '979',
            'kanji' => '夜明',
            'kana' => 'よあけ',
            'romaji' => 'Yoake',
        ]);
        // id: 4246
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '980',
            'kanji' => '朝地',
            'kana' => 'あさじ',
            'romaji' => 'Asaji',
        ]);
        // id: 4247
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '980',
            'kanji' => '犬飼',
            'kana' => 'いぬかい',
            'romaji' => 'Inukai',
        ]);
        // id: 4248
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '980',
            'kanji' => '緒方',
            'kana' => 'おがた',
            'romaji' => 'Ogata',
        ]);
        // id: 4249
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '980',
            'kanji' => '菅尾',
            'kana' => 'すがお',
            'romaji' => 'Sugao',
        ]);
        // id: 4250
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '980',
            'kanji' => '豊後清川',
            'kana' => 'ぶんごきよかわ',
            'romaji' => 'Bungo-Kiyokawa',
        ]);
        // id: 4251
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '980',
            'kanji' => '三重町',
            'kana' => 'みえまち',
            'romaji' => 'Miemachi',
        ]);
        // id: 4252
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '981',
            'kanji' => '亀川',
            'kana' => 'かめがわ',
            'romaji' => 'Kamegawa',
        ]);
        // id: 4253
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '981',
            'kanji' => '東別府',
            'kana' => 'ひがしべっぷ',
            'romaji' => 'Higashi-Beppu',
        ]);
        // id: 4254
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '981',
            'kanji' => '別府',
            'kana' => 'べっぷ',
            'romaji' => 'Beppu',
        ]);
        // id: 4255
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '981',
            'kanji' => '別府大学',
            'kana' => 'べっぷだいがく',
            'romaji' => 'Beppudaigaku',
        ]);
        // id: 4256
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '982',
            'kanji' => '鬼瀬',
            'kana' => 'おにがせ',
            'romaji' => 'Onigase',
        ]);
        // id: 4257
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '982',
            'kanji' => '小野屋',
            'kana' => 'おのや',
            'romaji' => 'Onoya',
        ]);
        // id: 4258
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '982',
            'kanji' => '庄内',
            'kana' => 'しょうない',
            'romaji' => 'Shōnai',
        ]);
        // id: 4259
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '982',
            'kanji' => '天神山',
            'kana' => 'てんじんやま',
            'romaji' => 'Tenjinyama',
        ]);
        // id: 4260
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '982',
            'kanji' => '南由布',
            'kana' => 'みなみゆふ',
            'romaji' => 'Minami-Yufu',
        ]);
        // id: 4261
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '982',
            'kanji' => '向之原',
            'kana' => 'むかいのはる',
            'romaji' => 'Mukainoharu',
        ]);
        // id: 4262
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '982',
            'kanji' => '湯平',
            'kana' => 'ゆのひら',
            'romaji' => 'Yunohira',
        ]);
        // id: 4263
        Station::insert([
            'prefecture_id' => '44',
            'city_id' => '982',
            'kanji' => '由布院',
            'kana' => 'ゆふいん',
            'romaji' => 'Yufuin',
        ]);
        // id: 4264
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '983',
            'kanji' => 'えびの',
            'kana' => 'えびの',
            'romaji' => 'Ebino',
        ]);
        // id: 4265
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '983',
            'kanji' => 'えびの飯野',
            'kana' => 'えびのいいの',
            'romaji' => 'Ebino-Iino',
        ]);
        // id: 4266
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '983',
            'kanji' => 'えびの上江',
            'kana' => 'えびのうわえ',
            'romaji' => 'Ebino-Uwae',
        ]);
        // id: 4267
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '983',
            'kanji' => '京町温泉',
            'kana' => 'きょうまちおんせん',
            'romaji' => 'Kyōmachi-onsen',
        ]);
        // id: 4268
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '983',
            'kanji' => '真幸',
            'kana' => 'まさき',
            'romaji' => 'Masaki',
        ]);
        // id: 4269
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '984',
            'kanji' => '門川',
            'kana' => 'かどがわ',
            'romaji' => 'Kadogawa',
        ]);
        // id: 4270
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '985',
            'kanji' => '川南',
            'kana' => 'かわみなみ',
            'romaji' => 'Kawaminami',
        ]);
        // id: 4271
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '986',
            'kanji' => '串間',
            'kana' => 'くしま',
            'romaji' => 'Kushima',
        ]);
        // id: 4272
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '986',
            'kanji' => '日向大束',
            'kana' => 'ひゅうがおおつか',
            'romaji' => 'Hyūga-Ōtsuka',
        ]);
        // id: 4273
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '986',
            'kanji' => '日向北方',
            'kana' => 'ひゅうがきたかた',
            'romaji' => 'Hyūga-Kitakata',
        ]);
        // id: 4274
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '986',
            'kanji' => '福島今町',
            'kana' => 'ふくしまいままち',
            'romaji' => 'Fukushima-Imamachi',
        ]);
        // id: 4275
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '986',
            'kanji' => '福島高松',
            'kana' => 'ふくしまたかまつ',
            'romaji' => 'Fukushima-Takamatsu',
        ]);
        // id: 4276
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '987',
            'kanji' => '小林',
            'kana' => 'こばやし',
            'romaji' => 'Kobayashi',
        ]);
        // id: 4277
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '987',
            'kanji' => '西小林',
            'kana' => 'にしこばやし',
            'romaji' => 'Nishi-Kobayashi',
        ]);
        // id: 4278
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '988',
            'kanji' => '日向新富',
            'kana' => 'ひゅうがしんとみ',
            'romaji' => 'Hyūga-Shintomi',
        ]);
        // id: 4279
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '989',
            'kanji' => '高鍋',
            'kana' => 'たかなべ',
            'romaji' => 'Takanabe',
        ]);
        // id: 4280
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '990',
            'kanji' => '高原',
            'kana' => 'たかはる',
            'romaji' => 'Takaharu',
        ]);
        // id: 4281
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '990',
            'kanji' => '広原',
            'kana' => 'ひろわら',
            'romaji' => 'Hirowara',
        ]);
        // id: 4282
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '991',
            'kanji' => '都農',
            'kana' => 'つの',
            'romaji' => 'Tsuno',
        ]);
        // id: 4283
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '991',
            'kanji' => '東都農',
            'kana' => 'ひがしつの',
            'romaji' => 'Higashi-Tsuno',
        ]);
        // id: 4284
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '油津',
            'kana' => 'あぶらつ',
            'romaji' => 'Aburatsu',
        ]);
        // id: 4285
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '伊比井',
            'kana' => 'いびい',
            'romaji' => 'Ibii',
        ]);
        // id: 4286
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '内之田',
            'kana' => 'うちのだ',
            'romaji' => 'Uchinoda',
        ]);
        // id: 4287
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '大堂津',
            'kana' => 'おおどうつ',
            'romaji' => 'Ōdōtsu',
        ]);
        // id: 4288
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '飫肥',
            'kana' => 'おび',
            'romaji' => 'Obi',
        ]);
        // id: 4289
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '北郷',
            'kana' => 'きたごう',
            'romaji' => 'Kitagō',
        ]);
        // id: 4290
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '谷之口',
            'kana' => 'たにのくち',
            'romaji' => 'Taninokuchi',
        ]);
        // id: 4291
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '南郷',
            'kana' => 'なんごう',
            'romaji' => 'Nangō',
        ]);
        // id: 4292
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '日南',
            'kana' => 'にちなん',
            'romaji' => 'Nichinan',
        ]);
        // id: 4293
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '992',
            'kanji' => '榎原',
            'kana' => 'よわら',
            'romaji' => 'Yowara',
        ]);
        // id: 4294
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '993',
            'kanji' => '旭ケ丘',
            'kana' => 'あさひがおか',
            'romaji' => 'Asahigaoka',
        ]);
        // id: 4295
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '993',
            'kanji' => '市棚',
            'kana' => 'いちたな',
            'romaji' => 'Ichitana',
        ]);
        // id: 4296
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '993',
            'kanji' => '北川',
            'kana' => 'きたがわ',
            'romaji' => 'Kitagawa',
        ]);
        // id: 4297
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '993',
            'kanji' => '北延岡',
            'kana' => 'きたのべおか',
            'romaji' => 'Kita-Nobeoka',
        ]);
        // id: 4298
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '993',
            'kanji' => '土々呂',
            'kana' => 'ととろ',
            'romaji' => 'Totoro',
        ]);
        // id: 4299
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '993',
            'kanji' => '延岡',
            'kana' => 'のべおか',
            'romaji' => 'Nobeoka',
        ]);
        // id: 4300
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '993',
            'kanji' => '日向長井',
            'kana' => 'ひゅうがながい',
            'romaji' => 'Hyūga-Nagai',
        ]);
        // id: 4301
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '993',
            'kanji' => '南延岡',
            'kana' => 'みなみのべおか',
            'romaji' => 'Minami-Nobeoka',
        ]);
        // id: 4302
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '994',
            'kanji' => '財光寺',
            'kana' => 'ざいこうじ',
            'romaji' => 'Zaikōji',
        ]);
        // id: 4303
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '994',
            'kanji' => '日向市',
            'kana' => 'ひゅうがし',
            'romaji' => 'Hyūgashi',
        ]);
        // id: 4304
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '994',
            'kanji' => '南日向',
            'kana' => 'みなみひゅうが',
            'romaji' => 'Minami-Hyūga',
        ]);
        // id: 4305
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '994',
            'kanji' => '美々津',
            'kana' => 'みみつ',
            'romaji' => 'Mimitsu',
        ]);
        // id: 4306
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '995',
            'kanji' => '三股',
            'kana' => 'みまた',
            'romaji' => 'Mimata',
        ]);
        // id: 4307
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '995',
            'kanji' => '餅原',
            'kana' => 'もちばる',
            'romaji' => 'Mochibaru',
        ]);
        // id: 4308
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '青井岳',
            'kana' => 'あおいだけ',
            'romaji' => 'Aoidake',
        ]);
        // id: 4309
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '五十市',
            'kana' => 'いそいち',
            'romaji' => 'Isoichi',
        ]);
        // id: 4310
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '高崎新田',
            'kana' => 'たかさきしんでん',
            'romaji' => 'Takasakishinden',
        ]);
        // id: 4311
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '谷頭',
            'kana' => 'たにがしら',
            'romaji' => 'Tanigashira',
        ]);
        // id: 4312
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '西都城',
            'kana' => 'にしみやこのじょう',
            'romaji' => 'Nishi-Miyakonojō',
        ]);
        // id: 4313
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '東高崎',
            'kana' => 'ひがしたかさき',
            'romaji' => 'Higashi-Takasaki',
        ]);
        // id: 4314
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '日向庄内',
            'kana' => 'ひゅうがしょうない',
            'romaji' => 'Hyūga-Shōnai',
        ]);
        // id: 4315
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '日向前田',
            'kana' => 'ひゅうがまえだ',
            'romaji' => 'Hyūga-Maeda',
        ]);
        // id: 4316
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '万ケ塚',
            'kana' => 'まんがつか',
            'romaji' => 'Mangatsuka',
        ]);
        // id: 4317
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '都城',
            'kana' => 'みやこのじょう',
            'romaji' => 'Miyakonojō',
        ]);
        // id: 4318
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '996',
            'kanji' => '山之口',
            'kana' => 'やまのくち',
            'romaji' => 'Yamanokuchi',
        ]);
        // id: 4319
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '青島',
            'kana' => 'あおしま',
            'romaji' => 'Aoshima',
        ]);
        // id: 4320
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '内海',
            'kana' => 'うちうみ',
            'romaji' => 'Uchiumi',
        ]);
        // id: 4321
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '運動公園',
            'kana' => 'うんどうこうえん',
            'romaji' => 'Undō-kōen',
        ]);
        // id: 4322
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '折生迫',
            'kana' => 'おりゅうざこ',
            'romaji' => 'Oryūzako',
        ]);
        // id: 4323
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '加納',
            'kana' => 'かのう',
            'romaji' => 'Kanō',
        ]);
        // id: 4324
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '木花',
            'kana' => 'きばな',
            'romaji' => 'Kibana',
        ]);
        // id: 4325
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '清武',
            'kana' => 'きよたけ',
            'romaji' => 'Kiyotake',
        ]);
        // id: 4326
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '小内海',
            'kana' => 'こうちうみ',
            'romaji' => 'Kouchiumi',
        ]);
        // id: 4327
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '子供の国',
            'kana' => 'こどものくに',
            'romaji' => 'Kodomonokuni',
        ]);
        // id: 4328
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '佐土原',
            'kana' => 'さどわら',
            'romaji' => 'Sadowara',
        ]);
        // id: 4329
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '曽山寺',
            'kana' => 'そさんじ',
            'romaji' => 'Sosanji',
        ]);
        // id: 4330
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '田野',
            'kana' => 'たの',
            'romaji' => 'Tano',
        ]);
        // id: 4331
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '田吉',
            'kana' => 'たよし',
            'romaji' => 'Tayoshi',
        ]);
        // id: 4332
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '蓮ケ池',
            'kana' => 'はすがいけ',
            'romaji' => 'Hasugaike',
        ]);
        // id: 4333
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '日向沓掛',
            'kana' => 'ひゅうがくつかけ',
            'romaji' => 'Hyūga-Kutsukake',
        ]);
        // id: 4334
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '日向住吉',
            'kana' => 'ひゅうがすみよし',
            'romaji' => 'Hyūga-Sumiyoshi',
        ]);
        // id: 4335
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '南方',
            'kana' => 'みなみかた',
            'romaji' => 'Minamikata',
        ]);
        // id: 4336
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '南宮崎',
            'kana' => 'みなみみやざき',
            'romaji' => 'Minami-Miyazaki',
        ]);
        // id: 4337
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '宮崎',
            'kana' => 'みやざき',
            'romaji' => 'Miyazaki',
        ]);
        // id: 4338
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '宮崎空港',
            'kana' => 'みやざきくうこう',
            'romaji' => 'Miyazaki Airport',
        ]);
        // id: 4339
        Station::insert([
            'prefecture_id' => '45',
            'city_id' => '997',
            'kanji' => '宮崎神宮',
            'kana' => 'みやざきじんぐう',
            'romaji' => 'Miyazaki-jingū',
        ]);
        // id: 4340
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '998',
            'kanji' => '姶良',
            'kana' => 'あいら',
            'romaji' => 'Aira',
        ]);
        // id: 4341
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '998',
            'kanji' => '加治木',
            'kana' => 'かじき',
            'romaji' => 'Kajiki',
        ]);
        // id: 4342
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '998',
            'kanji' => '錦江',
            'kana' => 'きんこう',
            'romaji' => 'Kinkō',
        ]);
        // id: 4343
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '998',
            'kanji' => '重富',
            'kana' => 'しげとみ',
            'romaji' => 'Shigetomi',
        ]);
        // id: 4344
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '998',
            'kanji' => '帖佐',
            'kana' => 'ちょうさ',
            'romaji' => 'Chōsa',
        ]);
        // id: 4345
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '999',
            'kanji' => '出水',
            'kana' => 'いずみ',
            'romaji' => 'Izumi',
        ]);
        // id: 4346
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1000',
            'kanji' => '市来',
            'kana' => 'いちき',
            'romaji' => 'Ichiki',
        ]);
        // id: 4347
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1000',
            'kanji' => '神村学園前',
            'kana' => 'かみむらがくえんまえ',
            'romaji' => 'Kamimuragakuen-mae',
        ]);
        // id: 4348
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1000',
            'kanji' => '串木野',
            'kana' => 'くしきの',
            'romaji' => 'Kushikino',
        ]);
        // id: 4349
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '指宿',
            'kana' => 'いぶすき',
            'romaji' => 'Ibusuki',
        ]);
        // id: 4350
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '入野',
            'kana' => 'いりの',
            'romaji' => 'Irino',
        ]);
        // id: 4351
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '大山',
            'kana' => 'おおやま',
            'romaji' => 'Ōyama',
        ]);
        // id: 4352
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '開聞',
            'kana' => 'かいもん',
            'romaji' => 'Kaimon',
        ]);
        // id: 4353
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '薩摩今和泉',
            'kana' => 'さつまいまいずみ',
            'romaji' => 'Satsuma-Imaizumi',
        ]);
        // id: 4354
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '薩摩川尻',
            'kana' => 'さつまかわしり',
            'romaji' => 'Satsuma-Kawashiri',
        ]);
        // id: 4355
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '二月田',
            'kana' => 'にがつでん',
            'romaji' => 'Nigatsuden',
        ]);
        // id: 4356
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '西大山',
            'kana' => 'にしおおやま',
            'romaji' => 'Nishi-Ōyama',
        ]);
        // id: 4357
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '東開聞',
            'kana' => 'ひがしかいもん',
            'romaji' => 'Higashi-Kaimon',
        ]);
        // id: 4358
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '宮ケ浜',
            'kana' => 'みやがはま',
            'romaji' => 'Miyagahama',
        ]);
        // id: 4359
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1001',
            'kanji' => '山川',
            'kana' => 'やまかわ',
            'romaji' => 'Yamakawa',
        ]);
        // id: 4360
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '宇宿',
            'kana' => 'うすき',
            'romaji' => 'Usuki',
        ]);
        // id: 4361
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '鹿児島',
            'kana' => 'かごしま',
            'romaji' => 'Kagoshima',
        ]);
        // id: 4362
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '鹿児島中央',
            'kana' => 'かごしまちゅうおう',
            'romaji' => 'Kagoshima-chūō',
        ]);
        // id: 4363
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '上伊集院',
            'kana' => 'かみいじゅういん',
            'romaji' => 'Kami-Ijūin',
        ]);
        // id: 4364
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '喜入',
            'kana' => 'きいれ',
            'romaji' => 'Kiire',
        ]);
        // id: 4365
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '五位野',
            'kana' => 'ごいの',
            'romaji' => 'Goino',
        ]);
        // id: 4366
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '郡元',
            'kana' => 'こおりもと',
            'romaji' => 'Kōrimoto',
        ]);
        // id: 4367
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '坂之上',
            'kana' => 'さかのうえ',
            'romaji' => 'Sakanoue',
        ]);
        // id: 4368
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '薩摩松元',
            'kana' => 'さつままつもと',
            'romaji' => 'Satsuma-Matsumoto',
        ]);
        // id: 4369
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '慈眼寺',
            'kana' => 'じげんじ',
            'romaji' => 'Jigenji',
        ]);
        // id: 4370
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '瀬々串',
            'kana' => 'せせくし',
            'romaji' => 'Sesekushi',
        ]);
        // id: 4371
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '谷山',
            'kana' => 'たにやま',
            'romaji' => 'Taniyama',
        ]);
        // id: 4372
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '中名',
            'kana' => 'なかみょう',
            'romaji' => 'Nakamyō',
        ]);
        // id: 4373
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '生見',
            'kana' => 'ぬくみ',
            'romaji' => 'Nukumi',
        ]);
        // id: 4374
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '平川',
            'kana' => 'ひらかわ',
            'romaji' => 'Hirakawa',
        ]);
        // id: 4375
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '広木',
            'kana' => 'ひろき',
            'romaji' => 'Hiroki',
        ]);
        // id: 4376
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '前之浜',
            'kana' => 'まえのはま',
            'romaji' => 'Maenohama',
        ]);
        // id: 4377
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '南鹿児島',
            'kana' => 'みなみかごしま',
            'romaji' => 'Minami-Kagoshima',
        ]);
        // id: 4378
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1002',
            'kanji' => '竜ケ水',
            'kana' => 'りゅうがみず',
            'romaji' => 'Ryūgamizu',
        ]);
        // id: 4379
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '植村',
            'kana' => 'うえむら',
            'romaji' => 'Uemura',
        ]);
        // id: 4380
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '大隅横川',
            'kana' => 'おおすみよこがわ',
            'romaji' => 'Ōsumi-Yokogawa',
        ]);
        // id: 4381
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '嘉例川',
            'kana' => 'かれいがわ',
            'romaji' => 'Kareigawa',
        ]);
        // id: 4382
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '北永野田',
            'kana' => 'きたながのだ',
            'romaji' => 'Kita-Naganoda',
        ]);
        // id: 4383
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '霧島温泉',
            'kana' => 'きりしまおんせん',
            'romaji' => 'Kirishima-Onsen',
        ]);
        // id: 4384
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '霧島神宮',
            'kana' => 'きりしまじんぐう',
            'romaji' => 'Kirishima-jingū',
        ]);
        // id: 4385
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '国分',
            'kana' => 'こくぶ',
            'romaji' => 'Kokubu',
        ]);
        // id: 4386
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '中福良',
            'kana' => 'なかふくら',
            'romaji' => 'Naka-Fukura',
        ]);
        // id: 4387
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '隼人',
            'kana' => 'はやと',
            'romaji' => 'Hayato',
        ]);
        // id: 4388
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '日当山',
            'kana' => 'ひなたやま',
            'romaji' => 'Hinatayama',
        ]);
        // id: 4389
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1003',
            'kanji' => '表木山',
            'kana' => 'ひょうきやま',
            'romaji' => 'Hyōkiyama',
        ]);
        // id: 4390
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1004',
            'kanji' => '隈之城',
            'kana' => 'くまのじょう',
            'romaji' => 'Kumanojō',
        ]);
        // id: 4391
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1004',
            'kanji' => '木場茶屋',
            'kana' => 'こばんちゃや',
            'romaji' => 'Kobanchaya',
        ]);
        // id: 4392
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1004',
            'kanji' => '川内',
            'kana' => 'せんだい',
            'romaji' => 'Sendai',
        ]);
        // id: 4393
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1005',
            'kanji' => '大隅夏井',
            'kana' => 'おおすみなつい',
            'romaji' => 'Ōsumi-Natsui',
        ]);
        // id: 4394
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1005',
            'kanji' => '志布志',
            'kana' => 'しぶし',
            'romaji' => 'Shibushi',
        ]);
        // id: 4395
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1006',
            'kanji' => '大隅大川原',
            'kana' => 'おおすみおおかわら',
            'romaji' => 'Ōsumi-Ōkawara',
        ]);
        // id: 4396
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1006',
            'kanji' => '北俣',
            'kana' => 'きたまた',
            'romaji' => 'Kitamata',
        ]);
        // id: 4397
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1006',
            'kanji' => '財部',
            'kana' => 'たからべ',
            'romaji' => 'Takarabe',
        ]);
        // id: 4398
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1007',
            'kanji' => '伊集院',
            'kana' => 'いじゅういん',
            'romaji' => 'Ijūin',
        ]);
        // id: 4399
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1007',
            'kanji' => '東市来',
            'kana' => 'ひがしいちき',
            'romaji' => 'Higashi-Ichiki',
        ]);
        // id: 4400
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1007',
            'kanji' => '湯之元',
            'kana' => 'ゆのもと',
            'romaji' => 'Yunomoto',
        ]);
        // id: 4401
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1008',
            'kanji' => '薩摩板敷',
            'kana' => 'さつまいたしき',
            'romaji' => 'Satsuma-Itashiki',
        ]);
        // id: 4402
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1008',
            'kanji' => '白沢',
            'kana' => 'しらさわ',
            'romaji' => 'Shirasawa',
        ]);
        // id: 4403
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1008',
            'kanji' => '枕崎',
            'kana' => 'まくらざき',
            'romaji' => 'Makurazaki',
        ]);
        // id: 4404
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1009',
            'kanji' => '石垣',
            'kana' => 'いしかき',
            'romaji' => 'Ishikaki',
        ]);
        // id: 4405
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1009',
            'kanji' => '頴娃',
            'kana' => 'えい',
            'romaji' => 'Ei',
        ]);
        // id: 4406
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1009',
            'kanji' => '頴娃大川',
            'kana' => 'えいおおかわ',
            'romaji' => 'Ei-Ōkawa',
        ]);
        // id: 4407
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1009',
            'kanji' => '御領',
            'kana' => 'ごりょう',
            'romaji' => 'Goryō',
        ]);
        // id: 4408
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1009',
            'kanji' => '薩摩塩屋',
            'kana' => 'さつましおや',
            'romaji' => 'Satsuma-Shioya',
        ]);
        // id: 4409
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1009',
            'kanji' => '西頴娃',
            'kana' => 'にしえい',
            'romaji' => 'Nishi-Ei',
        ]);
        // id: 4410
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1009',
            'kanji' => '松ケ浦',
            'kana' => 'まつがうら',
            'romaji' => 'Matsugaura',
        ]);
        // id: 4411
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1009',
            'kanji' => '水成川',
            'kana' => 'みずなりかわ',
            'romaji' => 'Mizunarigawa',
        ]);
        // id: 4412
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1010',
            'kanji' => '栗野',
            'kana' => 'くりの',
            'romaji' => 'Kurino',
        ]);
        // id: 4413
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1010',
            'kanji' => '鶴丸',
            'kana' => 'つるまる',
            'romaji' => 'Tsurumaru',
        ]);
        // id: 4414
        Station::insert([
            'prefecture_id' => '46',
            'city_id' => '1010',
            'kanji' => '吉松',
            'kana' => 'よしまつ',
            'romaji' => 'Yoshimatsu',
        ]);
    }
}
