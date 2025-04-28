<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nation;

class NationSeeder extends Seeder
{
    /**
     * Запускает сидер.
     *
     * @return void
     */
    public function run()
    {
        $nations = [
            [
                'name' => 'Kazakhs',
                'cover_image' => 'images/kz/kazakh_cover.png',
                'main_image' => 'images/kz/kazakh_main.png',
                'title' => 'The spirit of the Kazakh lives
    in every song carried by the steppe wind',
                'introduction' => 'Step into the world of the Kazakh people — a nation shaped by the vastness of the steppe, a deep nomadic heritage, and timeless cultural values. From ancient times to the modern era, Kazakhs have preserved their unique identity and spiritual strength.',
                'history_text_1' => 'The land of modern Kazakhstan has been inhabited since the Paleolithic era. Ancient nomadic tribes like the Scythians and Saka once roamed these steppes.',
                'history_image_1_1' => 'images/kz/history_1_1.png', 
                'history_description_1_1' => 'Scythians — early steppe warriors related to Saka tribes',
                'history_image_1_2' => 'images/kz/history_1_2.png', 
                'history_description_1_2' => 'Saka — ancient nomads of the steppe, ancestors of Kazakhs.',
                'history_text_2' => 'Founded in 1465, the Kazakh Khanate became a unifying force for Turkic tribes and laid the foundation of the Kazakh ethnic identity.',
                'history_image_2_1' => 'images/kz/history_2_1.png',
                'history_description_2_1' => 'The Kazakh Khanate — cradle of Kazakh culture and steppe diplomacy.',
                'history_image_2_2' => 'images/kz/history_2_2.png',
                'history_description_2_2' => 'The Kazakh Khanate — cradle of Kazakh culture and steppe diplomacy.',
                'history_text_3' => 'From the 18th century, Kazakh territories were gradually incorporated into the Russian Empire and later the USSR, influencing social and cultural life.',
                'history_image_3_1' => 'images/kz/history_3_1.png',
                'history_description_3_1' => 'Soviet era reshaped Kazakh society, culture, and identity.',
                'history_image_3_2' => 'images/kz/history_3_2.png', 
                'history_description_3_2' => 'Kazakh lands under the Russian Empire — a time of transformation and resistance.',
                'history_text_4' => 'In 1991, Kazakhstan declared independence, becoming a sovereign state that continues to honor its rich cultural legacy.',
                'history_image_4_1' => 'images/kz/history_4_1.png', 
                'history_description_4_1' => 'The birth of independence — President Nursultan Nazarbayevs oath in 1991.',
                'history_image_4_2' => 'images/kz/history_4_2.png',
                'history_description_4_2' => 'Modern Kazakhstan — symbol of unity, progress, and national identity.',
                'distribution_image' => 'images/kz/distribution.png', 
                'traditional_clothing_image' => 'images/kz/traditional_clothing.png',
                'traditional_clothing_description' => 'Description for traditional clothing...',
                'music_and_culture_description' => 'In the photos, Kazakh people are shown wearing traditional clothing. Men wear shapan and traditional headwear such as borik or tymaq. Women are dressed in embroidered dresses with a kamzol on top, and wear kimeshek or saukele on their heads.',
                'video_link' => 'https://www.youtube.com/watch?v=kzS7iJMpmHI',
                'bg_image' => 'images/kz/bg-image-kz.png',
                'icon_image' => 'images/kz/kz_icon.png',
            ],
            [
                'name' => 'Japanese',
                'cover_image' => 'images/jp/japan_cover.png',
                'main_image' => 'images/jp/japan_main.png',
                'title' => 'The soul of Japan blooms in every cherry blossom and echoes in every shrine bell',
                'introduction' => 'Discover the rich tapestry of Japanese culture — a harmonious blend of ancient tradition and cutting-edge innovation that has shaped one of the world\'s most fascinating societies.',
                'history_text_1' => 'Japan\'s early history includes the Jomon and Yayoi periods, where agricultural and artistic foundations were laid.',
                'history_image_1_1' => 'images/jp/history_image_1_1.png',
                'history_description_1_1' => 'Artifacts from the Jomon period — among the oldest pottery in the world.',
                'history_image_1_2' => 'images/jp/history_image_1_2.png',
                'history_description_1_2' => 'Yayoi culture introduced rice cultivation and metallurgy to Japan.',
                'history_text_2' => 'During the Heian period, Japan developed a distinct court culture, arts, and literature, with influences from China diminishing.',
                'history_image_2_1' => 'images/jp/history_image_2_1.png',
                'history_description_2_1' => 'Heian era aristocracy, noted for elegant art and poetry.',
                'history_image_2_2' => 'images/jp/history_image_2_2.png',
                'history_description_2_2' => 'Classic Japanese literature, including "The Tale of Genji," emerged.',
                'history_text_3' => 'The Edo period brought centuries of isolation, internal peace, and flourishing traditional arts such as kabuki and ukiyo-e.',
                'history_image_3_1' => 'images/jp/history_image_3_1.png',
                'history_description_3_1' => 'Kabuki theater — vibrant storytelling through drama and dance.',
                'history_image_3_2' => 'images/jp/history_image_3_2.png',
                'history_description_3_2' => 'Ukiyo-e prints captured the beauty of everyday life in Edo Japan.',
                'history_text_4' => 'Modernization rapidly transformed Japan after the Meiji Restoration in 1868, leading to it becoming a major world power.',
                'history_image_4_1' => 'images/jp/history_image_4_1.png',
                'history_description_4_1' => 'The Meiji era modernized Japan\'s industry, military, and government.',
                'history_image_4_2' => 'images/jp/history_image_4_2.png',
                'history_description_4_2' => 'Japan today — a dynamic blend of tradition and innovation.',
                'distribution_image' => 'images/jp/distribution.png',
                'traditional_clothing_image' => 'images/jp/traditional_clothing.png',
                'traditional_clothing_description' => 'In traditional attire, Japanese men wear hakama pants with haori jackets, while women wear intricately patterned kimonos, often tied with a wide obi belt.',
                'music_and_culture_description' => 'Traditional Japanese music features instruments like the koto and shamisen, while festivals celebrate seasonal beauty and spiritual connections.',
                'video_link' => 'https://www.youtube.com/watch?v=uQX8UwV87Os',
                'bg_image' => 'images/jp/bg-image-jp.png',
                'icon_image' => 'images/jp/jp_icon.png',
            ],
            [
                'name' => 'Turkish',
                'cover_image' => 'images/tr/turkey_cover.jpg',
                'main_image' => 'images/tr/turkey_main.jpg',
                'title' => 'The heart of Turkey beats with the rhythm of its ancient civilizations and vibrant traditions',
                'introduction' => 'Experience the rich heritage of Turkey — a nation where East meets West, and history, culture, and modernity intertwine seamlessly across breathtaking landscapes.',
                'history_text_1' => 'The history of Turkey begins with ancient Anatolian civilizations such as the Hittites, Phrygians, and Urartians, laying the foundation of a rich cultural legacy.',
                'history_image_1_1' => 'images/tr/history_image_1_1.jpg',
                'history_description_1_1' => 'The Hittites — an ancient Anatolian civilization that influenced early Middle Eastern culture.',
                'history_image_1_2' => 'images/tr/history_image_1_2.jpg',
                'history_description_1_2' => 'Ancient Anatolia — a crossroads of diverse cultures and peoples.',
                'history_text_2' => 'The rise of the Seljuk Turks in the 11th century marked the beginning of Turkic influence, later leading to the foundation of the Ottoman Empire.',
                'history_image_2_1' => 'images/tr/history_image_2_1.jpg',
                'history_description_2_1' => 'The Seljuk Empire — pioneers of Turkish-Islamic culture in Anatolia.',
                'history_image_2_2' => 'images/tr/history_image_2_2.jpg',
                'history_description_2_2' => 'The Battle of Manzikert opened Anatolia to Turkish settlement.',
                'history_text_3' => 'The Ottoman Empire, founded in 1299, grew into one of history\'s most powerful empires, blending diverse cultures across three continents.',
                'history_image_3_1' => 'images/tr/history_image_3_1.jpg',
                'history_description_3_1' => 'Ottoman architecture — grand mosques, palaces, and cities that endure today.',
                'history_image_3_2' => 'images/tr/history_image_3_2.jpg',
                'history_description_3_2' => 'Sultan Suleiman the Magnificent expanded the empire to its peak.',
                'history_text_4' => 'Following World War I, Mustafa Kemal Atatürk led the Turkish War of Independence, founding the modern Republic of Turkey in 1923 with sweeping reforms.',
                'history_image_4_1' => 'images/tr/history_image_4_1.jpg',
                'history_description_4_1' => 'Atatürk — visionary founder of the secular, modern Turkish Republic.',
                'history_image_4_2' => 'images/tr/history_image_4_2.jpg',
                'history_description_4_2' => 'Today, Turkey stands as a vibrant bridge between Europe and Asia.',
                'distribution_image' => 'images/tr/distribution.jpg',
                'traditional_clothing_image' => 'images/tr/traditional_clothing.jpg',
                'traditional_clothing_description' => 'Traditional Turkish clothing features garments like the şalvar (loose trousers), entari (embroidered dresses), and ornate headgear, reflecting regional and historical diversity.',
                'music_and_culture_description' => 'Turkish music, from Ottoman classical tunes to vibrant folk melodies, mirrors the nation\'s cultural richness. Festivals and culinary traditions celebrate Turkey\'s heritage.',
                'video_link' => 'https://www.youtube.com/watch?v=sFQkvTsBuoo',
                'bg_image' => 'images/tr/bg-image-tr.jpg',
                'icon_image' => 'images/tr/tr_icon.jpg',
            ],

        ];

        foreach ($nations as $data) {
            $validator = Nation::validate($data);

            if ($validator->fails()) {
                dd($validator->errors());
            } else {
                Nation::create($data);
            }
        }
    }
}
