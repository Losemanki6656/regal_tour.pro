<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Banner;
use App\Models\Populary;
use App\Models\Destination;
use Illuminate\Database\Seeder;

class DescripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c7.jpg';
        $newCurrency->flag = 'assets/img/flags/italia.png';
        $newCurrency->name_uz = 'Italiya';
        $newCurrency->name_ru = 'Италия';
        $newCurrency->name_en = 'Italia';
        $newCurrency->days = 7;
        $newCurrency->price = '3500';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c5.jpg';
        $newCurrency->flag = 'assets/img/flags/turkey.jpg';
        $newCurrency->name_uz = 'Turkiya';
        $newCurrency->name_ru = 'Турция';
        $newCurrency->name_en = 'Turkey';
        $newCurrency->days = 7;
        $newCurrency->price = '3500';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c15.jpg';
        $newCurrency->flag = 'assets/img/flags/france.png';
        $newCurrency->name_uz = 'Fransia';
        $newCurrency->name_ru = 'Франция';
        $newCurrency->name_en = 'France';
        $newCurrency->days = 7;
        $newCurrency->price = '3500';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c13.jpg';
        $newCurrency->flag = 'assets/img/flags/ru.jpg';
        $newCurrency->name_uz = 'Rossiya';
        $newCurrency->name_ru = 'Россия';
        $newCurrency->name_en = 'Russian';
        $newCurrency->days = 7;
        $newCurrency->price = '3500';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c3.jpg';
        $newCurrency->flag = 'assets/img/flags/kitay.jog';
        $newCurrency->name_uz = 'Xitoy';
        $newCurrency->name_ru = 'Китай';
        $newCurrency->name_en = 'Kitay';
        $newCurrency->days = 7;
        $newCurrency->price = '3500';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c2.jpg';
        $newCurrency->flag = 'assets/img/flags/us.jpg';
        $newCurrency->name_uz = 'Amerika';
        $newCurrency->name_ru = 'США';
        $newCurrency->name_en = 'USA';
        $newCurrency->days = 7;
        $newCurrency->price = '3500';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c14.jpg';
        $newCurrency->flag = 'assets/img/flags/korea.jpg';
        $newCurrency->name_uz = 'Koreya';
        $newCurrency->name_ru = 'Корея';
        $newCurrency->name_en = 'Korea';
        $newCurrency->days = 7;
        $newCurrency->price = '3500';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c4.jpg';
        $newCurrency->flag = 'assets/img/flags/japan.jpg';
        $newCurrency->name_uz = 'Yaponiya';
        $newCurrency->name_ru = 'Япония';
        $newCurrency->name_en = 'Japan';
        $newCurrency->days = 7;
        $newCurrency->price = '3500';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c12.jpg';
        $newCurrency->flag = 'assets/img/flags/uzb.jpg';
        $newCurrency->name_uz = "O'zbekiston";
        $newCurrency->name_ru = 'Узбекистан';
        $newCurrency->name_en = 'Uzbekistan';
        $newCurrency->days = 7;
        $newCurrency->price = '1200';
        $newCurrency->rate = 4;
        $newCurrency->save();

        $newCurrency = new Country();
        $newCurrency->photo = 'assets/img/countries/c16.jpg';
        $newCurrency->flag = 'assets/img/flags/uzb.jpg';
        $newCurrency->name_uz = "Egipet";
        $newCurrency->name_ru = 'Египет';
        $newCurrency->name_en = 'Egypt';
        $newCurrency->days = 7;
        $newCurrency->price = '1200';
        $newCurrency->rate = 4;
        $newCurrency->save();

        
        $newCurrency = new Banner();
        $newCurrency->country_id = 1;
        $newCurrency->photo = 'assets/img/sliders/sl1.jpg';
        $newCurrency->name_uz = 'Italiyaga sayohat';
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Туры в Италию';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Tours to Italy';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->lat = "41.935498";
        $newCurrency->long = "12.515389";
        $newCurrency->save();


        $newCurrency = new Banner();
        $newCurrency->country_id = 2;
        $newCurrency->photo = 'assets/img/sliders/sl2.jpg';
        $newCurrency->name_uz = 'Antaliyaga sayohat';
        $newCurrency->description_uz = "Antaliyadagi Selectum mehmonxonalarida o'zingizni maxsus his qiling. Yozdan zavqlaning";
        $newCurrency->name_ru = 'Туры в Анталию';
        $newCurrency->description_ru = 'Почувствуйте себя особенным с Selectum Hotels в Анталии.Наслаждайся летом';
        $newCurrency->name_en = 'Italiyaga sayohat';
        $newCurrency->description_en = 'Feel special with Selectum Hotels in Antalya. Enjoy your summer';
        $newCurrency->lat = "36.896313";
        $newCurrency->long = "30.713189";
        $newCurrency->save();


        $newCurrency = new Populary();
        $newCurrency->country_id = 1;
        $newCurrency->photo = 'assets/img/tours/t1.jpg';
        $newCurrency->name_uz = 'Antaliyaga sayohat';
        $newCurrency->description_uz = "Antaliyadagi Selectum mehmonxonalarida o'zingizni maxsus his qiling. Yozdan zavqlaning";
        $newCurrency->name_ru = 'Туры в Анталию';
        $newCurrency->description_ru = 'Почувствуйте себя особенным с Selectum Hotels в Анталии.Наслаждайся летом';
        $newCurrency->name_en = 'Italiyaga sayohat';
        $newCurrency->description_en = 'Feel special with Selectum Hotels in Antalya. Enjoy your summer';
        $newCurrency->rew = 3000;
        $newCurrency->prize = "30%";
        $newCurrency->save();

        $newCurrency = new Populary();
        $newCurrency->country_id = 2;
        $newCurrency->photo = 'assets/img/tours/t2.jpg';
        $newCurrency->name_uz = 'Italiyaga sayohat';
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Туры в Италию';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Tours to Italy';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->rew = 3000;
        $newCurrency->prize = "30%";
        $newCurrency->save();

        $newCurrency = new Populary();
        $newCurrency->country_id = 3;
        $newCurrency->photo = 'assets/img/tours/t3.jpg';
        $newCurrency->name_uz = 'Antaliyaga sayohat';
        $newCurrency->description_uz = "Antaliyadagi Selectum mehmonxonalarida o'zingizni maxsus his qiling. Yozdan zavqlaning";
        $newCurrency->name_ru = 'Туры в Анталию';
        $newCurrency->description_ru = 'Почувствуйте себя особенным с Selectum Hotels в Анталии.Наслаждайся летом';
        $newCurrency->name_en = 'Italiyaga sayohat';
        $newCurrency->description_en = 'Feel special with Selectum Hotels in Antalya. Enjoy your summer';
        $newCurrency->rew = 3000;
        $newCurrency->prize = "30%";
        $newCurrency->save();

        $newCurrency = new Populary();
        $newCurrency->country_id = 4;
        $newCurrency->photo = 'assets/img/tours/t4.jpg';
        $newCurrency->name_uz = 'Italiyaga sayohat';
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Туры в Италию';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Tours to Italy';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->rew = 3000;
        $newCurrency->prize = "30%";
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 1;
        $newCurrency->photo = 'assets/img/countries/c1.jpg';
        $newCurrency->name_uz = "O'zbekiston";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Узбекистан';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Uzbekistan';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 2;
        $newCurrency->photo = 'assets/img/countries/c2.jpg';
        $newCurrency->name_uz = "Amerika";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'США';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'USA';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 3;
        $newCurrency->photo = 'assets/img/countries/c3.jpg';
        $newCurrency->name_uz = "Xitoy";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Китай';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Kitay';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 4;
        $newCurrency->photo = 'assets/img/countries/c4.jpg';
        $newCurrency->name_uz = "Yaponiya";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Япония';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Japan';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 5;
        $newCurrency->photo = 'assets/img/countries/c5.jpg';
        $newCurrency->name_uz = "Turkiya";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Турция';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Turkey';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 6;
        $newCurrency->photo = 'assets/img/countries/c6.jpg';
        $newCurrency->name_uz = "Moldova";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Молдова';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Moldoa';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 7;
        $newCurrency->photo = 'assets/img/countries/c7.jpg';
        $newCurrency->name_uz = "Italiya";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Италия';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Italia';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 8;
        $newCurrency->photo = 'assets/img/countries/c8.jpg';
        $newCurrency->name_uz = "Xiva";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Хива';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Xiva';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 9;
        $newCurrency->photo = 'assets/img/countries/c9.jpg';
        $newCurrency->name_uz = "Buxara";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Бухара';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Bukhara';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 9;
        $newCurrency->photo = 'assets/img/countries/c10.jpg';
        $newCurrency->name_uz = "Samarqand";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Самарканд';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Samarkand';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 9;
        $newCurrency->photo = 'assets/img/countries/c11.jpg';
        $newCurrency->name_uz = "Buxoro";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Бухара';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Bukhara';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();

        $newCurrency = new Destination();
        $newCurrency->country_id = 9;
        $newCurrency->photo = 'assets/img/countries/c12.jpg';
        $newCurrency->name_uz = "Samarqand";
        $newCurrency->description_uz = "G'arb madaniyati va oshxonasiga katta ta'sir ko'rsatgan uzun qirg'oq chizig'iga ega Janubiy Evropadagi O'rta er dengizi mamlakati";
        $newCurrency->name_ru = 'Самарканд';
        $newCurrency->description_ru = 'Средиземноморское государство в Южной Европе с длинной береговой линией, которое оказало огромное влияние на западную культуру и кухню';
        $newCurrency->name_en = 'Samarkand';
        $newCurrency->description_en = 'Mediterranean country in Southern Europe with a long coastline that has had a huge impact on Western culture and cuisine';
        $newCurrency->save();
    }
}
