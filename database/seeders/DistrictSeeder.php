<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        // İlk part olduğu için tabloyu temizleyerek taze bir başlangıç yapıyoruz
        DB::table('districts')->truncate();

        $part1 = [
            // ==========================================
            // 01 - ADANA (Tüm 15 İlçe)
            // ==========================================
            ['city_plate' => 1, 'name' => 'Aladağ', 'latitude' => 37.5480, 'longitude' => 35.3960],
            ['city_plate' => 1, 'name' => 'Ceyhan', 'latitude' => 37.0244, 'longitude' => 35.8175],
            ['city_plate' => 1, 'name' => 'Çukurova', 'latitude' => 37.0494, 'longitude' => 35.2894],
            ['city_plate' => 1, 'name' => 'Feke', 'latitude' => 37.8169, 'longitude' => 35.9100],
            ['city_plate' => 1, 'name' => 'İmamoğlu', 'latitude' => 37.2652, 'longitude' => 35.6572],
            ['city_plate' => 1, 'name' => 'Karaisalı', 'latitude' => 37.2584, 'longitude' => 35.0620],
            ['city_plate' => 1, 'name' => 'Karataş', 'latitude' => 36.5647, 'longitude' => 35.3725],
            ['city_plate' => 1, 'name' => 'Kozan', 'latitude' => 37.4553, 'longitude' => 35.8157],
            ['city_plate' => 1, 'name' => 'Pozantı', 'latitude' => 37.4278, 'longitude' => 34.8722],
            ['city_plate' => 1, 'name' => 'Saimbeyli', 'latitude' => 37.9897, 'longitude' => 36.0939],
            ['city_plate' => 1, 'name' => 'Sarıçam', 'latitude' => 37.0333, 'longitude' => 35.4500],
            ['city_plate' => 1, 'name' => 'Seyhan', 'latitude' => 36.9850, 'longitude' => 35.3289],
            ['city_plate' => 1, 'name' => 'Tufanbeyli', 'latitude' => 38.2586, 'longitude' => 36.2236],
            ['city_plate' => 1, 'name' => 'Yumurtalık', 'latitude' => 36.7725, 'longitude' => 35.7947],
            ['city_plate' => 1, 'name' => 'Yüreğir', 'latitude' => 36.9936, 'longitude' => 35.3497],

            // ==========================================
            // 02 - ADIYAMAN (Tüm 9 İlçe)
            // ==========================================
            ['city_plate' => 2, 'name' => 'Besni', 'latitude' => 37.6917, 'longitude' => 37.8631],
            ['city_plate' => 2, 'name' => 'Çelikhan', 'latitude' => 38.0342, 'longitude' => 38.2417],
            ['city_plate' => 2, 'name' => 'Gerger', 'latitude' => 38.0375, 'longitude' => 39.0347],
            ['city_plate' => 2, 'name' => 'Gölbaşı', 'latitude' => 37.7853, 'longitude' => 37.6414],
            ['city_plate' => 2, 'name' => 'Kahta', 'latitude' => 37.7852, 'longitude' => 38.6254],
            ['city_plate' => 2, 'name' => 'Adıyaman Merkez', 'latitude' => 37.7634, 'longitude' => 38.2766],
            ['city_plate' => 2, 'name' => 'Samsat', 'latitude' => 37.5744, 'longitude' => 38.4792],
            ['city_plate' => 2, 'name' => 'Sincik', 'latitude' => 38.0136, 'longitude' => 38.6144],
            ['city_plate' => 2, 'name' => 'Tut', 'latitude' => 37.7903, 'longitude' => 37.9142],

            // ==========================================
            // 03 - AFYONKARAHİSAR (Tüm 18 İlçe)
            // ==========================================
            ['city_plate' => 3, 'name' => 'Başmakçı', 'latitude' => 37.9000, 'longitude' => 30.0167],
            ['city_plate' => 3, 'name' => 'Bayat', 'latitude' => 38.9875, 'longitude' => 30.9258],
            ['city_plate' => 3, 'name' => 'Bolvadin', 'latitude' => 38.7122, 'longitude' => 31.0489],
            ['city_plate' => 3, 'name' => 'Çay', 'latitude' => 38.5919, 'longitude' => 31.0286],
            ['city_plate' => 3, 'name' => 'Çobanlar', 'latitude' => 38.6978, 'longitude' => 30.7761],
            ['city_plate' => 3, 'name' => 'Dazkırı', 'latitude' => 37.9256, 'longitude' => 29.8475],
            ['city_plate' => 3, 'name' => 'Dinar', 'latitude' => 38.0650, 'longitude' => 30.1656],
            ['city_plate' => 3, 'name' => 'Emirdağ', 'latitude' => 39.0197, 'longitude' => 31.1500],
            ['city_plate' => 3, 'name' => 'Evciler', 'latitude' => 38.0075, 'longitude' => 30.0381],
            ['city_plate' => 3, 'name' => 'Hocalar', 'latitude' => 38.5086, 'longitude' => 29.9869],
            ['city_plate' => 3, 'name' => 'İhsaniye', 'latitude' => 38.9283, 'longitude' => 30.4131],
            ['city_plate' => 3, 'name' => 'İscehisar', 'latitude' => 38.8667, 'longitude' => 30.7500],
            ['city_plate' => 3, 'name' => 'Kızılören', 'latitude' => 38.2044, 'longitude' => 30.1478],
            ['city_plate' => 3, 'name' => 'Afyon Merkez', 'latitude' => 38.7569, 'longitude' => 30.5387],
            ['city_plate' => 3, 'name' => 'Sandıklı', 'latitude' => 38.4639, 'longitude' => 30.1492],
            ['city_plate' => 3, 'name' => 'Sinanpaşa', 'latitude' => 38.7428, 'longitude' => 30.2431],
            ['city_plate' => 3, 'name' => 'Sultandağı', 'latitude' => 38.5303, 'longitude' => 31.2269],
            ['city_plate' => 3, 'name' => 'Şuhut', 'latitude' => 38.5317, 'longitude' => 30.5428],

            // ==========================================
            // 04 - AĞRI (Tüm 8 İlçe)
            // ==========================================
            ['city_plate' => 4, 'name' => 'Diyadin', 'latitude' => 39.5317, 'longitude' => 43.6644],
            ['city_plate' => 4, 'name' => 'Doğubayazıt', 'latitude' => 39.5472, 'longitude' => 44.0822],
            ['city_plate' => 4, 'name' => 'Eleşkirt', 'latitude' => 39.7992, 'longitude' => 42.6719],
            ['city_plate' => 4, 'name' => 'Hamur', 'latitude' => 39.6064, 'longitude' => 42.9839],
            ['city_plate' => 4, 'name' => 'Ağrı Merkez', 'latitude' => 39.7191, 'longitude' => 43.0503],
            ['city_plate' => 4, 'name' => 'Patnos', 'latitude' => 39.2319, 'longitude' => 42.8639],
            ['city_plate' => 4, 'name' => 'Taşlıçay', 'latitude' => 39.6339, 'longitude' => 43.4303],
            ['city_plate' => 4, 'name' => 'Tutak', 'latitude' => 39.4217, 'longitude' => 42.8028],

            // ==========================================
            // 05 - AMASYA (Tüm 7 İlçe)
            // ==========================================
            ['city_plate' => 5, 'name' => 'Göynücek', 'latitude' => 40.4022, 'longitude' => 35.4597],
            ['city_plate' => 5, 'name' => 'Gümüşhacıköy', 'latitude' => 40.8753, 'longitude' => 35.2158],
            ['city_plate' => 5, 'name' => 'Hamamözü', 'latitude' => 40.7933, 'longitude' => 35.1764],
            ['city_plate' => 5, 'name' => 'Amasya Merkez', 'latitude' => 40.6533, 'longitude' => 35.8333],
            ['city_plate' => 5, 'name' => 'Merzifon', 'latitude' => 40.8736, 'longitude' => 35.4622],
            ['city_plate' => 5, 'name' => 'Suluova', 'latitude' => 40.8350, 'longitude' => 35.6558],
            ['city_plate' => 5, 'name' => 'Taşova', 'latitude' => 40.7583, 'longitude' => 36.3208],

            // ==========================================
            // 06 - ANKARA (Tüm 25 İlçe)
            // ==========================================
            ['city_plate' => 6, 'name' => 'Akyurt', 'latitude' => 40.1308, 'longitude' => 33.0853],
            ['city_plate' => 6, 'name' => 'Altındağ', 'latitude' => 39.9417, 'longitude' => 32.8686],
            ['city_plate' => 6, 'name' => 'Ayaş', 'latitude' => 40.0158, 'longitude' => 32.3314],
            ['city_plate' => 6, 'name' => 'Bala', 'latitude' => 39.5539, 'longitude' => 33.1236],
            ['city_plate' => 6, 'name' => 'Beypazarı', 'latitude' => 40.1681, 'longitude' => 31.9206],
            ['city_plate' => 6, 'name' => 'Çamlıdere', 'latitude' => 40.4894, 'longitude' => 32.4753],
            ['city_plate' => 6, 'name' => 'Çankaya', 'latitude' => 39.9208, 'longitude' => 32.8541],
            ['city_plate' => 6, 'name' => 'Çubuk', 'latitude' => 40.2372, 'longitude' => 33.0322],
            ['city_plate' => 6, 'name' => 'Elmadağ', 'latitude' => 39.9219, 'longitude' => 33.2325],
            ['city_plate' => 6, 'name' => 'Etimesgut', 'latitude' => 39.9483, 'longitude' => 32.6614],
            ['city_plate' => 6, 'name' => 'Evren', 'latitude' => 39.0175, 'longitude' => 33.5853],
            ['city_plate' => 6, 'name' => 'Gölbaşı', 'latitude' => 39.7892, 'longitude' => 32.8053],
            ['city_plate' => 6, 'name' => 'Güdül', 'latitude' => 40.2106, 'longitude' => 32.2458],
            ['city_plate' => 6, 'name' => 'Haymana', 'latitude' => 39.4344, 'longitude' => 32.4958],
            ['city_plate' => 6, 'name' => 'Kahramankazan', 'latitude' => 40.1069, 'longitude' => 32.6828],
            ['city_plate' => 6, 'name' => 'Kalecik', 'latitude' => 40.0967, 'longitude' => 33.4094],
            ['city_plate' => 6, 'name' => 'Keçiören', 'latitude' => 39.9711, 'longitude' => 32.8633],
            ['city_plate' => 6, 'name' => 'Kızılcahamam', 'latitude' => 40.4703, 'longitude' => 32.6508],
            ['city_plate' => 6, 'name' => 'Mamak', 'latitude' => 39.9272, 'longitude' => 32.9211],
            ['city_plate' => 6, 'name' => 'Nallıhan', 'latitude' => 40.1839, 'longitude' => 31.3503],
            ['city_plate' => 6, 'name' => 'Polatlı', 'latitude' => 39.5772, 'longitude' => 32.1417],
            ['city_plate' => 6, 'name' => 'Pursaklar', 'latitude' => 40.0381, 'longitude' => 32.8994],
            ['city_plate' => 6, 'name' => 'Sincan', 'latitude' => 39.9578, 'longitude' => 32.5764],
            ['city_plate' => 6, 'name' => 'Şereflikoçhisar', 'latitude' => 38.9392, 'longitude' => 33.5386],
            ['city_plate' => 6, 'name' => 'Yenimahalle', 'latitude' => 39.9678, 'longitude' => 32.7936],

            // ==========================================
            // 07 - ANTALYA (Tüm 19 İlçe)
            // ==========================================
            ['city_plate' => 7, 'name' => 'Akseki', 'latitude' => 37.0475, 'longitude' => 31.7850],
            ['city_plate' => 7, 'name' => 'Aksu', 'latitude' => 36.9556, 'longitude' => 30.8539],
            ['city_plate' => 7, 'name' => 'Alanya', 'latitude' => 36.5438, 'longitude' => 31.9998],
            ['city_plate' => 7, 'name' => 'Demre', 'latitude' => 36.2447, 'longitude' => 29.9856],
            ['city_plate' => 7, 'name' => 'Döşemealtı', 'latitude' => 37.0189, 'longitude' => 30.6158],
            ['city_plate' => 7, 'name' => 'Elmalı', 'latitude' => 36.7358, 'longitude' => 29.9169],
            ['city_plate' => 7, 'name' => 'Finike', 'latitude' => 36.2942, 'longitude' => 30.1439],
            ['city_plate' => 7, 'name' => 'Gazipaşa', 'latitude' => 36.2689, 'longitude' => 32.3183],
            ['city_plate' => 7, 'name' => 'Gündoğmuş', 'latitude' => 36.8117, 'longitude' => 31.9967],
            ['city_plate' => 7, 'name' => 'İbradı', 'latitude' => 37.0950, 'longitude' => 31.5975],
            ['city_plate' => 7, 'name' => 'Kaş', 'latitude' => 36.2025, 'longitude' => 29.6417],
            ['city_plate' => 7, 'name' => 'Kemer', 'latitude' => 36.6033, 'longitude' => 30.5603],
            ['city_plate' => 7, 'name' => 'Kepez', 'latitude' => 36.9314, 'longitude' => 30.7061],
            ['city_plate' => 7, 'name' => 'Konyaaltı', 'latitude' => 36.8617, 'longitude' => 30.6353],
            ['city_plate' => 7, 'name' => 'Korkuteli', 'latitude' => 37.0633, 'longitude' => 30.1961],
            ['city_plate' => 7, 'name' => 'Kumluca', 'latitude' => 36.3683, 'longitude' => 30.2869],
            ['city_plate' => 7, 'name' => 'Manavgat', 'latitude' => 36.7865, 'longitude' => 31.4428],
            ['city_plate' => 7, 'name' => 'Muratpaşa', 'latitude' => 36.8869, 'longitude' => 30.7075],
            ['city_plate' => 7, 'name' => 'Serik', 'latitude' => 36.9172, 'longitude' => 31.1044],

            // ==========================================
            // 08 - ARTVİN (Tüm 9 İlçe)
            // ==========================================
            ['city_plate' => 8, 'name' => 'Ardanuç', 'latitude' => 41.1347, 'longitude' => 42.0608],
            ['city_plate' => 8, 'name' => 'Arhavi', 'latitude' => 41.3508, 'longitude' => 41.3075],
            ['city_plate' => 8, 'name' => 'Borçka', 'latitude' => 41.3639, 'longitude' => 41.6797],
            ['city_plate' => 8, 'name' => 'Hopa', 'latitude' => 41.3967, 'longitude' => 41.4414],
            ['city_plate' => 8, 'name' => 'Kemalpaşa', 'latitude' => 41.4800, 'longitude' => 41.5239],
            ['city_plate' => 8, 'name' => 'Artvin Merkez', 'latitude' => 41.1833, 'longitude' => 41.8167],
            ['city_plate' => 8, 'name' => 'Murgul', 'latitude' => 41.2081, 'longitude' => 41.5647],
            ['city_plate' => 8, 'name' => 'Şavşat', 'latitude' => 41.2408, 'longitude' => 42.4631],
            ['city_plate' => 8, 'name' => 'Yusufeli', 'latitude' => 40.8267, 'longitude' => 41.5433],

            // ==========================================
            // 09 - AYDIN (Tüm 17 İlçe)
            // ==========================================
            ['city_plate' => 9, 'name' => 'Bozdoğan', 'latitude' => 37.6694, 'longitude' => 28.3125],
            ['city_plate' => 9, 'name' => 'Buharkent', 'latitude' => 37.9622, 'longitude' => 28.7428],
            ['city_plate' => 9, 'name' => 'Çine', 'latitude' => 37.6106, 'longitude' => 28.0628],
            ['city_plate' => 9, 'name' => 'Didim', 'latitude' => 37.3822, 'longitude' => 27.2667],
            ['city_plate' => 9, 'name' => 'Efeler', 'latitude' => 37.8450, 'longitude' => 27.8392],
            ['city_plate' => 9, 'name' => 'Germencik', 'latitude' => 37.8711, 'longitude' => 27.6083],
            ['city_plate' => 9, 'name' => 'İncirliova', 'latitude' => 37.8492, 'longitude' => 27.7242],
            ['city_plate' => 9, 'name' => 'Karacasu', 'latitude' => 37.7289, 'longitude' => 28.6086],
            ['city_plate' => 9, 'name' => 'Karpuzlu', 'latitude' => 37.6167, 'longitude' => 27.8333],
            ['city_plate' => 9, 'name' => 'Koçarlı', 'latitude' => 37.7656, 'longitude' => 27.6975],
            ['city_plate' => 9, 'name' => 'Köşk', 'latitude' => 37.8542, 'longitude' => 28.0514],
            ['city_plate' => 9, 'name' => 'Kuşadası', 'latitude' => 37.8583, 'longitude' => 27.2604],
            ['city_plate' => 9, 'name' => 'Kuyucak', 'latitude' => 37.9133, 'longitude' => 28.4589],
            ['city_plate' => 9, 'name' => 'Nazilli', 'latitude' => 37.9142, 'longitude' => 28.3244],
            ['city_plate' => 9, 'name' => 'Söke', 'latitude' => 37.7547, 'longitude' => 27.4047],
            ['city_plate' => 9, 'name' => 'Sultanhisar', 'latitude' => 37.8828, 'longitude' => 28.1561],
            ['city_plate' => 9, 'name' => 'Yenipazar', 'latitude' => 37.8906, 'longitude' => 28.1969],

            // ==========================================
            // 10 - BALIKESİR (Tüm 20 İlçe)
            // ==========================================
            ['city_plate' => 10, 'name' => 'Altıeylül', 'latitude' => 39.6484, 'longitude' => 27.8826],
            ['city_plate' => 10, 'name' => 'Ayvalık', 'latitude' => 39.3172, 'longitude' => 26.6947],
            ['city_plate' => 10, 'name' => 'Balya', 'latitude' => 39.7544, 'longitude' => 27.5861],
            ['city_plate' => 10, 'name' => 'Bandırma', 'latitude' => 40.3522, 'longitude' => 27.9769],
            ['city_plate' => 10, 'name' => 'Bigadiç', 'latitude' => 39.4000, 'longitude' => 28.1333],
            ['city_plate' => 10, 'name' => 'Burhaniye', 'latitude' => 39.5033, 'longitude' => 26.9722],
            ['city_plate' => 10, 'name' => 'Dursunbey', 'latitude' => 39.5847, 'longitude' => 28.6267],
            ['city_plate' => 10, 'name' => 'Edremit', 'latitude' => 39.5961, 'longitude' => 27.0244],
            ['city_plate' => 10, 'name' => 'Erdek', 'latitude' => 40.4003, 'longitude' => 27.7925],
            ['city_plate' => 10, 'name' => 'Gömeç', 'latitude' => 39.3889, 'longitude' => 26.8372],
            ['city_plate' => 10, 'name' => 'Gönen', 'latitude' => 40.1047, 'longitude' => 27.6539],
            ['city_plate' => 10, 'name' => 'Havran', 'latitude' => 39.5583, 'longitude' => 27.0983],
            ['city_plate' => 10, 'name' => 'İvrindi', 'latitude' => 39.5947, 'longitude' => 27.4872],
            ['city_plate' => 10, 'name' => 'Karesi', 'latitude' => 39.6542, 'longitude' => 27.8839],
            ['city_plate' => 10, 'name' => 'Kepsut', 'latitude' => 39.7003, 'longitude' => 28.1517],
            ['city_plate' => 10, 'name' => 'Manyas', 'latitude' => 40.0467, 'longitude' => 27.9694],
            ['city_plate' => 10, 'name' => 'Marmara', 'latitude' => 40.5858, 'longitude' => 27.5539],
            ['city_plate' => 10, 'name' => 'Savaştepe', 'latitude' => 39.3842, 'longitude' => 27.6569],
            ['city_plate' => 10, 'name' => 'Sındırgı', 'latitude' => 39.2433, 'longitude' => 28.1764],
            ['city_plate' => 10, 'name' => 'Susurluk', 'latitude' => 39.9142, 'longitude' => 28.1569],
        

            // ==========================================
            // 11 - BİLECİK (Tüm 8 İlçe)
            // ==========================================
            ['city_plate' => 11, 'name' => 'Bilecik Merkez', 'latitude' => 40.1419, 'longitude' => 29.9794],
            ['city_plate' => 11, 'name' => 'Bozüyük', 'latitude' => 39.9078, 'longitude' => 30.0353],
            ['city_plate' => 11, 'name' => 'Gölpazarı', 'latitude' => 40.2672, 'longitude' => 30.3150],
            ['city_plate' => 11, 'name' => 'İnhisar', 'latitude' => 40.0469, 'longitude' => 30.3853],
            ['city_plate' => 11, 'name' => 'Osmaneli', 'latitude' => 40.3547, 'longitude' => 30.0169],
            ['city_plate' => 11, 'name' => 'Pazaryeri', 'latitude' => 39.9922, 'longitude' => 29.9042],
            ['city_plate' => 11, 'name' => 'Söğüt', 'latitude' => 40.0175, 'longitude' => 30.1817],
            ['city_plate' => 11, 'name' => 'Yenipazar', 'latitude' => 40.1764, 'longitude' => 30.5236],

            // ==========================================
            // 12 - BİNGÖL (Tüm 8 İlçe)
            // ==========================================
            ['city_plate' => 12, 'name' => 'Adaklı', 'latitude' => 39.2247, 'longitude' => 40.4431],
            ['city_plate' => 12, 'name' => 'Bingöl Merkez', 'latitude' => 38.8847, 'longitude' => 40.4939],
            ['city_plate' => 12, 'name' => 'Genç', 'latitude' => 38.7497, 'longitude' => 40.5597],
            ['city_plate' => 12, 'name' => 'Karlıova', 'latitude' => 39.2933, 'longitude' => 41.0150],
            ['city_plate' => 12, 'name' => 'Kiğı', 'latitude' => 39.3175, 'longitude' => 40.3517],
            ['city_plate' => 12, 'name' => 'Solhan', 'latitude' => 38.9631, 'longitude' => 41.0558],
            ['city_plate' => 12, 'name' => 'Yayladere', 'latitude' => 39.2206, 'longitude' => 40.0675],
            ['city_plate' => 12, 'name' => 'Yedisu', 'latitude' => 39.4283, 'longitude' => 40.5456],

            // ==========================================
            // 13 - BİTLİS (Tüm 7 İlçe)
            // ==========================================
            ['city_plate' => 13, 'name' => 'Adilcevaz', 'latitude' => 38.8058, 'longitude' => 42.7303],
            ['city_plate' => 13, 'name' => 'Ahlat', 'latitude' => 38.7458, 'longitude' => 42.4933],
            ['city_plate' => 13, 'name' => 'Bitlis Merkez', 'latitude' => 38.4006, 'longitude' => 42.1094],
            ['city_plate' => 13, 'name' => 'Güroymak', 'latitude' => 38.5619, 'longitude' => 42.0231],
            ['city_plate' => 13, 'name' => 'Hizan', 'latitude' => 38.2258, 'longitude' => 42.4239],
            ['city_plate' => 13, 'name' => 'Mutki', 'latitude' => 38.4117, 'longitude' => 41.9214],
            ['city_plate' => 13, 'name' => 'Tatvan', 'latitude' => 38.5028, 'longitude' => 42.2789],

            // ==========================================
            // 14 - BOLU (Tüm 9 İlçe)
            // ==========================================
            ['city_plate' => 14, 'name' => 'Bolu Merkez', 'latitude' => 40.7350, 'longitude' => 31.6078],
            ['city_plate' => 14, 'name' => 'Dörtdivan', 'latitude' => 40.7231, 'longitude' => 32.0622],
            ['city_plate' => 14, 'name' => 'Gerede', 'latitude' => 40.8014, 'longitude' => 32.1978],
            ['city_plate' => 14, 'name' => 'Göynük', 'latitude' => 40.4000, 'longitude' => 30.7853],
            ['city_plate' => 14, 'name' => 'Kıbrıscık', 'latitude' => 40.4103, 'longitude' => 31.8547],
            ['city_plate' => 14, 'name' => 'Mengen', 'latitude' => 40.9439, 'longitude' => 32.0519],
            ['city_plate' => 14, 'name' => 'Mudurnu', 'latitude' => 40.4636, 'longitude' => 31.2114],
            ['city_plate' => 14, 'name' => 'Seben', 'latitude' => 40.4111, 'longitude' => 31.5739],
            ['city_plate' => 14, 'name' => 'Yeniçağa', 'latitude' => 40.7719, 'longitude' => 32.0306],

            // ==========================================
            // 15 - BURDUR (Tüm 11 İlçe)
            // ==========================================
            ['city_plate' => 15, 'name' => 'Ağlasun', 'latitude' => 37.6492, 'longitude' => 30.5367],
            ['city_plate' => 15, 'name' => 'Altınyayla', 'latitude' => 36.9458, 'longitude' => 29.5447],
            ['city_plate' => 15, 'name' => 'Bucak', 'latitude' => 37.4592, 'longitude' => 30.5906],
            ['city_plate' => 15, 'name' => 'Burdur Merkez', 'latitude' => 37.7203, 'longitude' => 30.2908],
            ['city_plate' => 15, 'name' => 'Çavdır', 'latitude' => 37.1517, 'longitude' => 29.6917],
            ['city_plate' => 15, 'name' => 'Çeltikçi', 'latitude' => 37.5256, 'longitude' => 30.4744],
            ['city_plate' => 15, 'name' => 'Gölhisar', 'latitude' => 37.1444, 'longitude' => 29.5133],
            ['city_plate' => 15, 'name' => 'Karamanlı', 'latitude' => 37.3547, 'longitude' => 29.8186],
            ['city_plate' => 15, 'name' => 'Kemer', 'latitude' => 37.3464, 'longitude' => 30.0531],
            ['city_plate' => 15, 'name' => 'Tefenni', 'latitude' => 37.3164, 'longitude' => 29.7753],
            ['city_plate' => 15, 'name' => 'Yeşilova', 'latitude' => 37.5056, 'longitude' => 29.7533],

            // ==========================================
            // 16 - BURSA (Tüm 17 İlçe)
            // ==========================================
            ['city_plate' => 16, 'name' => 'Büyükorhan', 'latitude' => 39.6739, 'longitude' => 28.8872],
            ['city_plate' => 16, 'name' => 'Gemlik', 'latitude' => 40.4311, 'longitude' => 29.1583],
            ['city_plate' => 16, 'name' => 'Gürsu', 'latitude' => 40.2169, 'longitude' => 29.1911],
            ['city_plate' => 16, 'name' => 'Harmancık', 'latitude' => 39.6872, 'longitude' => 29.1625],
            ['city_plate' => 16, 'name' => 'İnegöl', 'latitude' => 40.0781, 'longitude' => 29.5117],
            ['city_plate' => 16, 'name' => 'İznik', 'latitude' => 40.4286, 'longitude' => 29.7192],
            ['city_plate' => 16, 'name' => 'Karacabey', 'latitude' => 40.2144, 'longitude' => 28.3614],
            ['city_plate' => 16, 'name' => 'Keles', 'latitude' => 39.9144, 'longitude' => 29.2319],
            ['city_plate' => 16, 'name' => 'Kestel', 'latitude' => 40.1989, 'longitude' => 29.2208],
            ['city_plate' => 16, 'name' => 'Mudanya', 'latitude' => 40.3753, 'longitude' => 28.8825],
            ['city_plate' => 16, 'name' => 'Mustafakemalpaşa', 'latitude' => 40.0353, 'longitude' => 28.4117],
            ['city_plate' => 16, 'name' => 'Nilüfer', 'latitude' => 40.2106, 'longitude' => 28.9614],
            ['city_plate' => 16, 'name' => 'Orhaneli', 'latitude' => 39.9042, 'longitude' => 28.9881],
            ['city_plate' => 16, 'name' => 'Orhangazi', 'latitude' => 40.4917, 'longitude' => 29.3106],
            ['city_plate' => 16, 'name' => 'Osmangazi', 'latitude' => 40.2553, 'longitude' => 29.0117],
            ['city_plate' => 16, 'name' => 'Yenişehir', 'latitude' => 40.2644, 'longitude' => 29.6528],
            ['city_plate' => 16, 'name' => 'Yıldırım', 'latitude' => 40.1911, 'longitude' => 29.0922],

            // ==========================================
            // 17 - ÇANAKKALE (Tüm 12 İlçe)
            // ==========================================
            ['city_plate' => 17, 'name' => 'Ayvacık', 'latitude' => 39.6017, 'longitude' => 26.4056],
            ['city_plate' => 17, 'name' => 'Bayramiç', 'latitude' => 39.8117, 'longitude' => 26.6111],
            ['city_plate' => 17, 'name' => 'Biga', 'latitude' => 40.2281, 'longitude' => 27.2425],
            ['city_plate' => 17, 'name' => 'Bozcaada', 'latitude' => 39.8336, 'longitude' => 26.0417],
            ['city_plate' => 17, 'name' => 'Çan', 'latitude' => 40.0267, 'longitude' => 27.0494],
            ['city_plate' => 17, 'name' => 'Çanakkale Merkez', 'latitude' => 40.1458, 'longitude' => 26.4064],
            ['city_plate' => 17, 'name' => 'Eceabat', 'latitude' => 40.1856, 'longitude' => 26.3575],
            ['city_plate' => 17, 'name' => 'Ezine', 'latitude' => 39.7894, 'longitude' => 26.3319],
            ['city_plate' => 17, 'name' => 'Gelibolu', 'latitude' => 40.4103, 'longitude' => 26.6711],
            ['city_plate' => 17, 'name' => 'Gökçeada', 'latitude' => 40.2003, 'longitude' => 25.9064],
            ['city_plate' => 17, 'name' => 'Lapseki', 'latitude' => 40.3444, 'longitude' => 26.6961],
            ['city_plate' => 17, 'name' => 'Yenice', 'latitude' => 39.9308, 'longitude' => 27.2575],

            // ==========================================
            // 18 - ÇANKIRI (Tüm 12 İlçe)
            // ==========================================
            ['city_plate' => 18, 'name' => 'Atkaracalar', 'latitude' => 40.8119, 'longitude' => 33.1039],
            ['city_plate' => 18, 'name' => 'Bayramören', 'latitude' => 40.9483, 'longitude' => 33.1819],
            ['city_plate' => 18, 'name' => 'Çankırı Merkez', 'latitude' => 40.6014, 'longitude' => 33.6133],
            ['city_plate' => 18, 'name' => 'Çerkeş', 'latitude' => 40.8092, 'longitude' => 32.8944],
            ['city_plate' => 18, 'name' => 'Eldivan', 'latitude' => 40.5239, 'longitude' => 33.5117],
            ['city_plate' => 18, 'name' => 'Ilgaz', 'latitude' => 40.9197, 'longitude' => 33.6289],
            ['city_plate' => 18, 'name' => 'Kızılırmak', 'latitude' => 40.3458, 'longitude' => 33.9933],
            ['city_plate' => 18, 'name' => 'Korgun', 'latitude' => 40.7358, 'longitude' => 33.5222],
            ['city_plate' => 18, 'name' => 'Kurşunlu', 'latitude' => 40.8394, 'longitude' => 33.2589],
            ['city_plate' => 18, 'name' => 'Orta', 'latitude' => 40.6272, 'longitude' => 33.1111],
            ['city_plate' => 18, 'name' => 'Şabanözü', 'latitude' => 40.4706, 'longitude' => 33.2778],
            ['city_plate' => 18, 'name' => 'Yapraklı', 'latitude' => 40.6756, 'longitude' => 33.7911],

            // ==========================================
            // 19 - ÇORUM (Tüm 14 İlçe)
            // ==========================================
            ['city_plate' => 19, 'name' => 'Alaca', 'latitude' => 40.1656, 'longitude' => 34.8431],
            ['city_plate' => 19, 'name' => 'Bayat', 'latitude' => 40.6433, 'longitude' => 34.2567],
            ['city_plate' => 19, 'name' => 'Boğazkale', 'latitude' => 40.0211, 'longitude' => 34.6083],
            ['city_plate' => 19, 'name' => 'Çorum Merkez', 'latitude' => 40.5489, 'longitude' => 34.9533],
            ['city_plate' => 19, 'name' => 'Dodurga', 'latitude' => 40.9606, 'longitude' => 34.7783],
            ['city_plate' => 19, 'name' => 'İskilip', 'latitude' => 40.7347, 'longitude' => 34.4756],
            ['city_plate' => 19, 'name' => 'Kargı', 'latitude' => 41.1342, 'longitude' => 34.4883],
            ['city_plate' => 19, 'name' => 'Laçin', 'latitude' => 40.7717, 'longitude' => 34.8731],
            ['city_plate' => 19, 'name' => 'Mecitözü', 'latitude' => 40.5211, 'longitude' => 35.2958],
            ['city_plate' => 19, 'name' => 'Oğuzlar', 'latitude' => 40.7936, 'longitude' => 34.7172],
            ['city_plate' => 19, 'name' => 'Ortaköy', 'latitude' => 40.2944, 'longitude' => 35.2417],
            ['city_plate' => 19, 'name' => 'Osmancık', 'latitude' => 40.9717, 'longitude' => 34.8019],
            ['city_plate' => 19, 'name' => 'Sungurlu', 'latitude' => 40.1669, 'longitude' => 34.3739],
            ['city_plate' => 19, 'name' => 'Uğurludağ', 'latitude' => 40.5564, 'longitude' => 34.2744],

            // ==========================================
            // 20 - DENİZLİ (Tüm 19 İlçe)
            // ==========================================
            ['city_plate' => 20, 'name' => 'Acıpayam', 'latitude' => 37.4244, 'longitude' => 29.3469],
            ['city_plate' => 20, 'name' => 'Babadağ', 'latitude' => 37.8081, 'longitude' => 28.8550],
            ['city_plate' => 20, 'name' => 'Baklan', 'latitude' => 37.9694, 'longitude' => 29.4792],
            ['city_plate' => 20, 'name' => 'Bekilli', 'latitude' => 38.2253, 'longitude' => 29.3800],
            ['city_plate' => 20, 'name' => 'Beyağaç', 'latitude' => 37.1683, 'longitude' => 28.9419],
            ['city_plate' => 20, 'name' => 'Bozkurt', 'latitude' => 37.8206, 'longitude' => 29.6103],
            ['city_plate' => 20, 'name' => 'Buldan', 'latitude' => 38.0017, 'longitude' => 28.8317],
            ['city_plate' => 20, 'name' => 'Çal', 'latitude' => 38.0658, 'longitude' => 29.4128],
            ['city_plate' => 20, 'name' => 'Çameli', 'latitude' => 37.0792, 'longitude' => 29.3364],
            ['city_plate' => 20, 'name' => 'Çardak', 'latitude' => 37.8258, 'longitude' => 29.6681],
            ['city_plate' => 20, 'name' => 'Çivril', 'latitude' => 38.2981, 'longitude' => 29.7428],
            ['city_plate' => 20, 'name' => 'Güney', 'latitude' => 38.1506, 'longitude' => 29.0494],
            ['city_plate' => 20, 'name' => 'Honaz', 'latitude' => 37.7558, 'longitude' => 29.2586],
            ['city_plate' => 20, 'name' => 'Kale', 'latitude' => 37.4475, 'longitude' => 28.9483],
            ['city_plate' => 20, 'name' => 'Merkezefendi', 'latitude' => 37.7770, 'longitude' => 29.0860],
            ['city_plate' => 20, 'name' => 'Pamukkale', 'latitude' => 37.7680, 'longitude' => 29.0960],
            ['city_plate' => 20, 'name' => 'Sarayköy', 'latitude' => 37.8731, 'longitude' => 28.9250],
            ['city_plate' => 20, 'name' => 'Serinhisar', 'latitude' => 37.5925, 'longitude' => 29.2597],
            ['city_plate' => 20, 'name' => 'Tavas', 'latitude' => 37.5744, 'longitude' => 29.0717],

            // ==========================================
            // 21 - DİYARBAKIR (Tüm 17 İlçe)
            // ==========================================
            ['city_plate' => 21, 'name' => 'Bağlar', 'latitude' => 37.9100, 'longitude' => 40.2000],
            ['city_plate' => 21, 'name' => 'Bismil', 'latitude' => 37.8483, 'longitude' => 40.6653],
            ['city_plate' => 21, 'name' => 'Çermik', 'latitude' => 38.1361, 'longitude' => 39.4492],
            ['city_plate' => 21, 'name' => 'Çınar', 'latitude' => 37.7244, 'longitude' => 40.4136],
            ['city_plate' => 21, 'name' => 'Çüngüş', 'latitude' => 38.2217, 'longitude' => 39.2942],
            ['city_plate' => 21, 'name' => 'Dicle', 'latitude' => 38.4181, 'longitude' => 40.0675],
            ['city_plate' => 21, 'name' => 'Eğil', 'latitude' => 38.2564, 'longitude' => 40.0817],
            ['city_plate' => 21, 'name' => 'Ergani', 'latitude' => 38.2678, 'longitude' => 39.7578],
            ['city_plate' => 21, 'name' => 'Hani', 'latitude' => 38.4069, 'longitude' => 40.3956],
            ['city_plate' => 21, 'name' => 'Hazro', 'latitude' => 38.2522, 'longitude' => 40.7719],
            ['city_plate' => 21, 'name' => 'Kayapınar', 'latitude' => 37.9400, 'longitude' => 40.1600],
            ['city_plate' => 21, 'name' => 'Kocaköy', 'latitude' => 38.4811, 'longitude' => 40.5483],
            ['city_plate' => 21, 'name' => 'Kulp', 'latitude' => 38.4914, 'longitude' => 41.0117],
            ['city_plate' => 21, 'name' => 'Lice', 'latitude' => 38.4550, 'longitude' => 40.6483],
            ['city_plate' => 21, 'name' => 'Silvan', 'latitude' => 38.1417, 'longitude' => 41.0119],
            ['city_plate' => 21, 'name' => 'Sur', 'latitude' => 37.9130, 'longitude' => 40.2350],
            ['city_plate' => 21, 'name' => 'Yenişehir', 'latitude' => 37.9250, 'longitude' => 40.2200],

            // ==========================================
            // 22 - EDİRNE (9 İlçe)
            // ==========================================
            ['city_plate' => 22, 'name' => 'Enez', 'latitude' => 40.7167, 'longitude' => 26.0833],
            ['city_plate' => 22, 'name' => 'Havsa', 'latitude' => 41.5519, 'longitude' => 26.8286],
            ['city_plate' => 22, 'name' => 'İpsala', 'latitude' => 40.9133, 'longitude' => 26.3789],
            ['city_plate' => 22, 'name' => 'Keşan', 'latitude' => 40.8500, 'longitude' => 26.6333],
            ['city_plate' => 22, 'name' => 'Lalapaşa', 'latitude' => 41.7681, 'longitude' => 26.7328],
            ['city_plate' => 22, 'name' => 'Meriç', 'latitude' => 41.1717, 'longitude' => 26.3756],
            ['city_plate' => 22, 'name' => 'Edirne Merkez', 'latitude' => 41.6771, 'longitude' => 26.5557],
            ['city_plate' => 22, 'name' => 'Süloğlu', 'latitude' => 41.6508, 'longitude' => 26.7725],
            ['city_plate' => 22, 'name' => 'Uzunköprü', 'latitude' => 41.2722, 'longitude' => 26.6806],

            // ==========================================
            // 23 - ELAZIĞ (11 İlçe)
            // ==========================================
            ['city_plate' => 23, 'name' => 'Ağın', 'latitude' => 38.9333, 'longitude' => 38.6500],
            ['city_plate' => 23, 'name' => 'Alacakaya', 'latitude' => 38.3167, 'longitude' => 39.9500],
            ['city_plate' => 23, 'name' => 'Arıcak', 'latitude' => 38.3500, 'longitude' => 40.0833],
            ['city_plate' => 23, 'name' => 'Baskil', 'latitude' => 38.6167, 'longitude' => 39.1833],
            ['city_plate' => 23, 'name' => 'Karakoçan', 'latitude' => 38.9500, 'longitude' => 40.0333],
            ['city_plate' => 23, 'name' => 'Keban', 'latitude' => 38.7833, 'longitude' => 38.7500],
            ['city_plate' => 23, 'name' => 'Kovancılar', 'latitude' => 38.7167, 'longitude' => 40.0000],
            ['city_plate' => 23, 'name' => 'Maden', 'latitude' => 38.6500, 'longitude' => 39.8000],
            ['city_plate' => 23, 'name' => 'Elazığ Merkez', 'latitude' => 38.6814, 'longitude' => 39.2264],
            ['city_plate' => 23, 'name' => 'Palu', 'latitude' => 38.6833, 'longitude' => 40.0000],
            ['city_plate' => 23, 'name' => 'Sivrice', 'latitude' => 38.4667, 'longitude' => 39.3167],

            // ==========================================
            // 24 - ERZİNCAN (9 İlçe)
            // ==========================================
            ['city_plate' => 24, 'name' => 'Çayırlı', 'latitude' => 39.7500, 'longitude' => 40.1167],
            ['city_plate' => 24, 'name' => 'Erzincan Merkez', 'latitude' => 39.7500, 'longitude' => 39.4833],
            ['city_plate' => 24, 'name' => 'İliç', 'latitude' => 39.4833, 'longitude' => 38.5333],
            ['city_plate' => 24, 'name' => 'Kemah', 'latitude' => 39.6000, 'longitude' => 39.0667],
            ['city_plate' => 24, 'name' => 'Kemaliye', 'latitude' => 39.2500, 'longitude' => 38.5000],
            ['city_plate' => 24, 'name' => 'Otlukbeli', 'latitude' => 40.0000, 'longitude' => 40.2333],
            ['city_plate' => 24, 'name' => 'Refahiye', 'latitude' => 39.9000, 'longitude' => 38.7500],
            ['city_plate' => 24, 'name' => 'Tercan', 'latitude' => 39.7667, 'longitude' => 40.3833],
            ['city_plate' => 24, 'name' => 'Üzümlü', 'latitude' => 39.8167, 'longitude' => 39.6333],

            // ==========================================
            // 25 - ERZURUM (20 İlçe)
            // ==========================================
            ['city_plate' => 25, 'name' => 'Aşkale', 'latitude' => 39.9167, 'longitude' => 40.6500],
            ['city_plate' => 25, 'name' => 'Aziziye', 'latitude' => 39.9500, 'longitude' => 41.0500],
            ['city_plate' => 25, 'name' => 'Çat', 'latitude' => 39.6000, 'longitude' => 40.9500],
            ['city_plate' => 25, 'name' => 'Hınıs', 'latitude' => 39.3667, 'longitude' => 41.7167],
            ['city_plate' => 25, 'name' => 'Horasan', 'latitude' => 40.0500, 'longitude' => 42.1667],
            ['city_plate' => 25, 'name' => 'İspir', 'latitude' => 40.4833, 'longitude' => 40.9833],
            ['city_plate' => 25, 'name' => 'Karaçoban', 'latitude' => 39.4500, 'longitude' => 41.9000],
            ['city_plate' => 25, 'name' => 'Karayazı', 'latitude' => 39.7000, 'longitude' => 41.9167],
            ['city_plate' => 25, 'name' => 'Köprüköy', 'latitude' => 40.0000, 'longitude' => 41.5000],
            ['city_plate' => 25, 'name' => 'Narman', 'latitude' => 40.3500, 'longitude' => 41.8333],
            ['city_plate' => 25, 'name' => 'Oltu', 'latitude' => 40.5500, 'longitude' => 41.9833],
            ['city_plate' => 25, 'name' => 'Olur', 'latitude' => 40.8000, 'longitude' => 42.3333],
            ['city_plate' => 25, 'name' => 'Palandöken', 'latitude' => 39.8833, 'longitude' => 41.2500],
            ['city_plate' => 25, 'name' => 'Pasinler', 'latitude' => 39.9833, 'longitude' => 41.6667],
            ['city_plate' => 25, 'name' => 'Pazaryolu', 'latitude' => 40.5000, 'longitude' => 40.7333],
            ['city_plate' => 25, 'name' => 'Şenkaya', 'latitude' => 40.5167, 'longitude' => 42.1500],
            ['city_plate' => 25, 'name' => 'Tekman', 'latitude' => 39.6667, 'longitude' => 41.5667],
            ['city_plate' => 25, 'name' => 'Tortum', 'latitude' => 40.3000, 'longitude' => 41.5167],
            ['city_plate' => 25, 'name' => 'Uzundere', 'latitude' => 40.5500, 'longitude' => 41.6333],
            ['city_plate' => 25, 'name' => 'Yakutiye', 'latitude' => 39.9000, 'longitude' => 41.2667],

            // ==========================================
            // 26 - ESKİŞEHİR (14 İlçe)
            // ==========================================
            ['city_plate' => 26, 'name' => 'Alpu', 'latitude' => 39.8167, 'longitude' => 30.9500],
            ['city_plate' => 26, 'name' => 'Beylikova', 'latitude' => 39.6667, 'longitude' => 31.1833],
            ['city_plate' => 26, 'name' => 'Çifteler', 'latitude' => 39.4167, 'longitude' => 31.0500],
            ['city_plate' => 26, 'name' => 'Günyüzü', 'latitude' => 39.3833, 'longitude' => 31.7833],
            ['city_plate' => 26, 'name' => 'Han', 'latitude' => 39.3833, 'longitude' => 31.0167],
            ['city_plate' => 26, 'name' => 'İnönü', 'latitude' => 39.8333, 'longitude' => 30.1333],
            ['city_plate' => 26, 'name' => 'Mahmudiye', 'latitude' => 39.5833, 'longitude' => 30.9167],
            ['city_plate' => 26, 'name' => 'Mihalgazi', 'latitude' => 39.9167, 'longitude' => 30.2500],
            ['city_plate' => 26, 'name' => 'Mihalıççık', 'latitude' => 39.8833, 'longitude' => 31.6500],
            ['city_plate' => 26, 'name' => 'Odunpazarı', 'latitude' => 39.7500, 'longitude' => 30.5167],
            ['city_plate' => 26, 'name' => 'Sarıcakaya', 'latitude' => 39.9500, 'longitude' => 30.4333],
            ['city_plate' => 26, 'name' => 'Seyitgazi', 'latitude' => 39.4500, 'longitude' => 30.6667],
            ['city_plate' => 26, 'name' => 'Sivrihisar', 'latitude' => 39.4500, 'longitude' => 31.5333],
            ['city_plate' => 26, 'name' => 'Tepebaşı', 'latitude' => 39.8000, 'longitude' => 30.4833],

            // ==========================================
            // 27 - GAZİANTEP (9 İlçe)
            // ==========================================
            ['city_plate' => 27, 'name' => 'Araban', 'latitude' => 37.4500, 'longitude' => 37.5833],
            ['city_plate' => 27, 'name' => 'İslahiye', 'latitude' => 37.0167, 'longitude' => 36.6333],
            ['city_plate' => 27, 'name' => 'Karkamış', 'latitude' => 36.8333, 'longitude' => 37.9833],
            ['city_plate' => 27, 'name' => 'Nizip', 'latitude' => 37.0167, 'longitude' => 37.8000],
            ['city_plate' => 27, 'name' => 'Nurdağı', 'latitude' => 37.1833, 'longitude' => 36.7333],
            ['city_plate' => 27, 'name' => 'Oğuzeli', 'latitude' => 36.9333, 'longitude' => 37.5333],
            ['city_plate' => 27, 'name' => 'Şahinbey', 'latitude' => 37.0667, 'longitude' => 37.3833],
            ['city_plate' => 27, 'name' => 'Şehitkamil', 'latitude' => 37.1333, 'longitude' => 37.3833],
            ['city_plate' => 27, 'name' => 'Yavuzeli', 'latitude' => 37.3167, 'longitude' => 37.5333],

            // ==========================================
            // 28 - GİRESUN (16 İlçe)
            // ==========================================
            ['city_plate' => 28, 'name' => 'Alucra', 'latitude' => 40.3833, 'longitude' => 38.6500],
            ['city_plate' => 28, 'name' => 'Bulancak', 'latitude' => 40.9333, 'longitude' => 38.2167],
            ['city_plate' => 28, 'name' => 'Çamoluk', 'latitude' => 40.1667, 'longitude' => 38.6667],
            ['city_plate' => 28, 'name' => 'Çanakçı', 'latitude' => 40.8500, 'longitude' => 39.0333],
            ['city_plate' => 28, 'name' => 'Dereli', 'latitude' => 40.6667, 'longitude' => 38.3333],
            ['city_plate' => 28, 'name' => 'Doğankent', 'latitude' => 40.9167, 'longitude' => 39.0667],
            ['city_plate' => 28, 'name' => 'Espiye', 'latitude' => 40.9500, 'longitude' => 38.7167],
            ['city_plate' => 28, 'name' => 'Eynesil', 'latitude' => 41.0500, 'longitude' => 39.1500],
            ['city_plate' => 28, 'name' => 'Giresun Merkez', 'latitude' => 40.9167, 'longitude' => 38.3833],
            ['city_plate' => 28, 'name' => 'Görele', 'latitude' => 41.0333, 'longitude' => 39.0000],
            ['city_plate' => 28, 'name' => 'Güce', 'latitude' => 40.9500, 'longitude' => 38.8667],
            ['city_plate' => 28, 'name' => 'Keşap', 'latitude' => 40.8833, 'longitude' => 38.5167],
            ['city_plate' => 28, 'name' => 'Piraziz', 'latitude' => 40.9667, 'longitude' => 38.1000],
            ['city_plate' => 28, 'name' => 'Şebinkarahisar', 'latitude' => 40.2833, 'longitude' => 38.4167],
            ['city_plate' => 28, 'name' => 'Tirebolu', 'latitude' => 41.0000, 'longitude' => 38.8167],
            ['city_plate' => 28, 'name' => 'Yağlıdere', 'latitude' => 40.8667, 'longitude' => 38.6500],


            // ==========================================
            // 29 - GÜMÜŞHANE (6 İlçe)
            // ==========================================
            ['city_plate' => 29, 'name' => 'Gümüşhane Merkez', 'latitude' => 40.4572, 'longitude' => 39.4822],
            ['city_plate' => 29, 'name' => 'Kelkit', 'latitude' => 40.1472, 'longitude' => 39.4317],
            ['city_plate' => 29, 'name' => 'Köse', 'latitude' => 40.2300, 'longitude' => 39.8167],
            ['city_plate' => 29, 'name' => 'Kürtün', 'latitude' => 40.6833, 'longitude' => 39.1167],
            ['city_plate' => 29, 'name' => 'Şiran', 'latitude' => 40.1667, 'longitude' => 39.1000],
            ['city_plate' => 29, 'name' => 'Torul', 'latitude' => 40.5667, 'longitude' => 39.3167],

            // ==========================================
            // 30 - HAKKARİ (5 İlçe)
            // ==========================================
            ['city_plate' => 30, 'name' => 'Çukurca', 'latitude' => 37.2500, 'longitude' => 43.6000],
            ['city_plate' => 30, 'name' => 'Derecik', 'latitude' => 37.3333, 'longitude' => 44.4333],
            ['city_plate' => 30, 'name' => 'Hakkari Merkez', 'latitude' => 37.5833, 'longitude' => 43.7333],
            ['city_plate' => 30, 'name' => 'Şemdinli', 'latitude' => 37.2833, 'longitude' => 44.5667],
            ['city_plate' => 30, 'name' => 'Yüksekova', 'latitude' => 37.5667, 'longitude' => 44.2833],

            // ==========================================
            // 31 - HATAY (15 İlçe)
            // ==========================================
            ['city_plate' => 31, 'name' => 'Altınözü', 'latitude' => 36.1000, 'longitude' => 36.3167],
            ['city_plate' => 31, 'name' => 'Antakya', 'latitude' => 36.2000, 'longitude' => 36.1667],
            ['city_plate' => 31, 'name' => 'Arsuz', 'latitude' => 36.4167, 'longitude' => 35.8833],
            ['city_plate' => 31, 'name' => 'Belen', 'latitude' => 36.4833, 'longitude' => 36.1833],
            ['city_plate' => 31, 'name' => 'Defne', 'latitude' => 36.1667, 'longitude' => 36.1500],
            ['city_plate' => 31, 'name' => 'Dörtyol', 'latitude' => 36.8500, 'longitude' => 36.2333],
            ['city_plate' => 31, 'name' => 'Erzin', 'latitude' => 36.9500, 'longitude' => 36.2000],
            ['city_plate' => 31, 'name' => 'Hassa', 'latitude' => 36.7833, 'longitude' => 36.5000],
            ['city_plate' => 31, 'name' => 'İskenderun', 'latitude' => 36.5833, 'longitude' => 36.1667],
            ['city_plate' => 31, 'name' => 'Kırıkhan', 'latitude' => 36.5000, 'longitude' => 36.3500],
            ['city_plate' => 31, 'name' => 'Kumlu', 'latitude' => 36.2833, 'longitude' => 36.3167],
            ['city_plate' => 31, 'name' => 'Payas', 'latitude' => 36.7667, 'longitude' => 36.2000],
            ['city_plate' => 31, 'name' => 'Reyhanlı', 'latitude' => 36.2667, 'longitude' => 36.5667],
            ['city_plate' => 31, 'name' => 'Samandağ', 'latitude' => 36.0833, 'longitude' => 35.9500],
            ['city_plate' => 31, 'name' => 'Yayladağı', 'latitude' => 35.9167, 'longitude' => 36.0667],

            // ==========================================
            // 32 - ISPARTA (13 İlçe)
            // ==========================================
            ['city_plate' => 32, 'name' => 'Aksu', 'latitude' => 37.8167, 'longitude' => 31.1000],
            ['city_plate' => 32, 'name' => 'Atabey', 'latitude' => 37.9500, 'longitude' => 30.6000],
            ['city_plate' => 32, 'name' => 'Eğirdir', 'latitude' => 37.8667, 'longitude' => 30.8500],
            ['city_plate' => 32, 'name' => 'Gelendost', 'latitude' => 38.0833, 'longitude' => 30.9167],
            ['city_plate' => 32, 'name' => 'Gönen', 'latitude' => 37.9167, 'longitude' => 30.5500],
            ['city_plate' => 32, 'name' => 'Isparta Merkez', 'latitude' => 37.7667, 'longitude' => 30.5500],
            ['city_plate' => 32, 'name' => 'Keçiborlu', 'latitude' => 37.9500, 'longitude' => 30.2833],
            ['city_plate' => 32, 'name' => 'Senirkent', 'latitude' => 38.1500, 'longitude' => 30.5667],
            ['city_plate' => 32, 'name' => 'Sütçüler', 'latitude' => 37.5667, 'longitude' => 31.1167],
            ['city_plate' => 32, 'name' => 'Şarkikaraağaç', 'latitude' => 38.1000, 'longitude' => 31.3667],
            ['city_plate' => 32, 'name' => 'Uluborlu', 'latitude' => 38.0667, 'longitude' => 30.4500],
            ['city_plate' => 32, 'name' => 'Yalvaç', 'latitude' => 38.3000, 'longitude' => 31.1833],
            ['city_plate' => 32, 'name' => 'Yenişarbademli', 'latitude' => 37.6833, 'longitude' => 31.2167],

            // ==========================================
            // 33 - MERSİN (13 İlçe)
            // ==========================================
            ['city_plate' => 33, 'name' => 'Akdeniz', 'latitude' => 36.8000, 'longitude' => 34.6333],
            ['city_plate' => 33, 'name' => 'Anamur', 'latitude' => 36.0833, 'longitude' => 32.8333],
            ['city_plate' => 33, 'name' => 'Aydıncık', 'latitude' => 36.1333, 'longitude' => 33.3333],
            ['city_plate' => 33, 'name' => 'Bozyazı', 'latitude' => 36.1000, 'longitude' => 32.9667],
            ['city_plate' => 33, 'name' => 'Çamlıyayla', 'latitude' => 37.1667, 'longitude' => 34.6000],
            ['city_plate' => 33, 'name' => 'Erdemli', 'latitude' => 36.6000, 'longitude' => 34.3000],
            ['city_plate' => 33, 'name' => 'Gülnar', 'latitude' => 36.3333, 'longitude' => 33.3667],
            ['city_plate' => 33, 'name' => 'Mezitli', 'latitude' => 36.7500, 'longitude' => 34.5500],
            ['city_plate' => 33, 'name' => 'Mut', 'latitude' => 36.6333, 'longitude' => 33.4333],
            ['city_plate' => 33, 'name' => 'Silifke', 'latitude' => 36.3667, 'longitude' => 33.9333],
            ['city_plate' => 33, 'name' => 'Tarsus', 'latitude' => 36.9167, 'longitude' => 34.8833],
            ['city_plate' => 33, 'name' => 'Toroslar', 'latitude' => 36.8167, 'longitude' => 34.6167],
            ['city_plate' => 33, 'name' => 'Yenişehir', 'latitude' => 36.7500, 'longitude' => 34.5833],

            // ==========================================
            // 34 - İSTANBUL (39 İlçe)
            // ==========================================
            ['city_plate' => 34, 'name' => 'Adalar', 'latitude' => 40.8750, 'longitude' => 29.1250],
            ['city_plate' => 34, 'name' => 'Arnavutköy', 'latitude' => 41.1833, 'longitude' => 28.7333],
            ['city_plate' => 34, 'name' => 'Ataşehir', 'latitude' => 40.9833, 'longitude' => 29.1167],
            ['city_plate' => 34, 'name' => 'Avcılar', 'latitude' => 40.9833, 'longitude' => 28.7167],
            ['city_plate' => 34, 'name' => 'Bağcılar', 'latitude' => 41.0333, 'longitude' => 28.8500],
            ['city_plate' => 34, 'name' => 'Bahçelievler', 'latitude' => 41.0000, 'longitude' => 28.8500],
            ['city_plate' => 34, 'name' => 'Bakırköy', 'latitude' => 40.9833, 'longitude' => 28.8667],
            ['city_plate' => 34, 'name' => 'Başakşehir', 'latitude' => 41.0833, 'longitude' => 28.8000],
            ['city_plate' => 34, 'name' => 'Bayrampaşa', 'latitude' => 41.0333, 'longitude' => 28.8833],
            ['city_plate' => 34, 'name' => 'Beşiktaş', 'latitude' => 41.0500, 'longitude' => 29.0000],
            ['city_plate' => 34, 'name' => 'Beykoz', 'latitude' => 41.1167, 'longitude' => 29.1000],
            ['city_plate' => 34, 'name' => 'Beylikdüzü', 'latitude' => 40.9833, 'longitude' => 28.6333],
            ['city_plate' => 34, 'name' => 'Beyoğlu', 'latitude' => 41.0333, 'longitude' => 28.9667],
            ['city_plate' => 34, 'name' => 'Büyükçekmece', 'latitude' => 41.0167, 'longitude' => 28.5833],
            ['city_plate' => 34, 'name' => 'Çatalca', 'latitude' => 41.1500, 'longitude' => 28.4500],
            ['city_plate' => 34, 'name' => 'Çekmeköy', 'latitude' => 41.0333, 'longitude' => 29.1667],
            ['city_plate' => 34, 'name' => 'Esenler', 'latitude' => 41.0500, 'longitude' => 28.8667],
            ['city_plate' => 34, 'name' => 'Esenyurt', 'latitude' => 41.0333, 'longitude' => 28.6667],
            ['city_plate' => 34, 'name' => 'Eyüpsultan', 'latitude' => 41.0500, 'longitude' => 28.9333],
            ['city_plate' => 34, 'name' => 'Fatih', 'latitude' => 41.0167, 'longitude' => 28.9500],
            ['city_plate' => 34, 'name' => 'Gaziosmanpaşa', 'latitude' => 41.0667, 'longitude' => 28.9000],
            ['city_plate' => 34, 'name' => 'Güngören', 'latitude' => 41.0167, 'longitude' => 28.8667],
            ['city_plate' => 34, 'name' => 'Kadıköy', 'latitude' => 40.9833, 'longitude' => 29.0500],
            ['city_plate' => 34, 'name' => 'Kağıthane', 'latitude' => 41.0667, 'longitude' => 28.9667],
            ['city_plate' => 34, 'name' => 'Kartal', 'latitude' => 40.9000, 'longitude' => 29.1833],
            ['city_plate' => 34, 'name' => 'Küçükçekmece', 'latitude' => 41.0000, 'longitude' => 28.7833],
            ['city_plate' => 34, 'name' => 'Maltepe', 'latitude' => 40.9333, 'longitude' => 29.1333],
            ['city_plate' => 34, 'name' => 'Pendik', 'latitude' => 40.8833, 'longitude' => 29.2333],
            ['city_plate' => 34, 'name' => 'Sancaktepe', 'latitude' => 41.0000, 'longitude' => 29.2167],
            ['city_plate' => 34, 'name' => 'Sarıyer', 'latitude' => 41.1667, 'longitude' => 29.0500],
            ['city_plate' => 34, 'name' => 'Silivri', 'latitude' => 41.0667, 'longitude' => 28.2500],
            ['city_plate' => 34, 'name' => 'Sultanbeyli', 'latitude' => 40.9667, 'longitude' => 29.2667],
            ['city_plate' => 34, 'name' => 'Sultangazi', 'latitude' => 41.1000, 'longitude' => 28.8667],
            ['city_plate' => 34, 'name' => 'Şile', 'latitude' => 41.1667, 'longitude' => 29.6000],
            ['city_plate' => 34, 'name' => 'Şişli', 'latitude' => 41.0667, 'longitude' => 28.9833],
            ['city_plate' => 34, 'name' => 'Tuzla', 'latitude' => 40.8167, 'longitude' => 29.3000],
            ['city_plate' => 34, 'name' => 'Ümraniye', 'latitude' => 41.0167, 'longitude' => 29.1000],
            ['city_plate' => 34, 'name' => 'Üsküdar', 'latitude' => 41.0167, 'longitude' => 29.0333],
            ['city_plate' => 34, 'name' => 'Zeytinburnu', 'latitude' => 40.9833, 'longitude' => 28.9000],

            // ==========================================
            // 35 - İZMİR (30 İlçe)
            // ==========================================
            ['city_plate' => 35, 'name' => 'Aliağa', 'latitude' => 38.8000, 'longitude' => 26.9667],
            ['city_plate' => 35, 'name' => 'Balçova', 'latitude' => 38.3833, 'longitude' => 27.0500],
            ['city_plate' => 35, 'name' => 'Bayındır', 'latitude' => 38.2333, 'longitude' => 27.6500],
            ['city_plate' => 35, 'name' => 'Bayraklı', 'latitude' => 38.4667, 'longitude' => 27.1667],
            ['city_plate' => 35, 'name' => 'Bergama', 'latitude' => 39.1167, 'longitude' => 27.1833],
            ['city_plate' => 35, 'name' => 'Beydağ', 'latitude' => 38.0333, 'longitude' => 28.2000],
            ['city_plate' => 35, 'name' => 'Bornova', 'latitude' => 38.4667, 'longitude' => 27.2167],
            ['city_plate' => 35, 'name' => 'Buca', 'latitude' => 38.3833, 'longitude' => 27.1667],
            ['city_plate' => 35, 'name' => 'Çeşme', 'latitude' => 38.3333, 'longitude' => 26.3167],
            ['city_plate' => 35, 'name' => 'Çiğli', 'latitude' => 38.4833, 'longitude' => 27.0500],
            ['city_plate' => 35, 'name' => 'Dikili', 'latitude' => 39.0667, 'longitude' => 26.8833],
            ['city_plate' => 35, 'name' => 'Foça', 'latitude' => 38.6667, 'longitude' => 26.7500],
            ['city_plate' => 35, 'name' => 'Gaziemir', 'latitude' => 38.3333, 'longitude' => 27.1333],
            ['city_plate' => 35, 'name' => 'Güzelbahçe', 'latitude' => 38.3500, 'longitude' => 26.8667],
            ['city_plate' => 35, 'name' => 'Karabağlar', 'latitude' => 38.3667, 'longitude' => 27.1167],
            ['city_plate' => 35, 'name' => 'Karaburun', 'latitude' => 38.6333, 'longitude' => 26.5167],
            ['city_plate' => 35, 'name' => 'Karşıyaka', 'latitude' => 38.4667, 'longitude' => 27.1000],
            ['city_plate' => 35, 'name' => 'Kemalpaşa', 'latitude' => 38.4167, 'longitude' => 27.4167],
            ['city_plate' => 35, 'name' => 'Kınık', 'latitude' => 39.0000, 'longitude' => 27.3833],
            ['city_plate' => 35, 'name' => 'Kiraz', 'latitude' => 38.1667, 'longitude' => 28.2167],
            ['city_plate' => 35, 'name' => 'Konak', 'latitude' => 38.4167, 'longitude' => 27.1333],
            ['city_plate' => 35, 'name' => 'Menderes', 'latitude' => 38.1500, 'longitude' => 27.1500],
            ['city_plate' => 35, 'name' => 'Menemen', 'latitude' => 38.6000, 'longitude' => 27.0667],
            ['city_plate' => 35, 'name' => 'Narlıdere', 'latitude' => 38.3833, 'longitude' => 27.0000],
            ['city_plate' => 35, 'name' => 'Ödemiş', 'latitude' => 38.2333, 'longitude' => 27.9667],
            ['city_plate' => 35, 'name' => 'Seferihisar', 'latitude' => 38.1667, 'longitude' => 26.8333],
            ['city_plate' => 35, 'name' => 'Selçuk', 'latitude' => 37.9500, 'longitude' => 27.3667],
            ['city_plate' => 35, 'name' => 'Tire', 'latitude' => 38.0833, 'longitude' => 27.7333],
            ['city_plate' => 35, 'name' => 'Torbalı', 'latitude' => 38.1500, 'longitude' => 27.3667],
            ['city_plate' => 35, 'name' => 'Urla', 'latitude' => 38.3167, 'longitude' => 26.7667],

            // ==========================================
            // 36 - KARS (8 İlçe)
            // ==========================================
            ['city_plate' => 36, 'name' => 'Akyaka', 'latitude' => 40.5667, 'longitude' => 43.5833],
            ['city_plate' => 36, 'name' => 'Arpaçay', 'latitude' => 40.8333, 'longitude' => 43.3667],
            ['city_plate' => 36, 'name' => 'Digor', 'latitude' => 40.3500, 'longitude' => 43.4000],
            ['city_plate' => 36, 'name' => 'Kağızman', 'latitude' => 40.1500, 'longitude' => 43.1333],
            ['city_plate' => 36, 'name' => 'Kars Merkez', 'latitude' => 40.6167, 'longitude' => 43.1000],
            ['city_plate' => 36, 'name' => 'Sarıkamış', 'latitude' => 40.3333, 'longitude' => 42.5833],
            ['city_plate' => 36, 'name' => 'Selim', 'latitude' => 40.4333, 'longitude' => 42.7167],
            ['city_plate' => 36, 'name' => 'Susuz', 'latitude' => 40.8000, 'longitude' => 43.0333],

            // ==========================================
            // 37 - KASTAMONU (20 İlçe)
            // ==========================================
            ['city_plate' => 37, 'name' => 'Abana', 'latitude' => 41.9667, 'longitude' => 34.0167],
            ['city_plate' => 37, 'name' => 'Ağlı', 'latitude' => 41.6833, 'longitude' => 33.5667],
            ['city_plate' => 37, 'name' => 'Araç', 'latitude' => 41.2500, 'longitude' => 33.3333],
            ['city_plate' => 37, 'name' => 'Azdavay', 'latitude' => 41.6667, 'longitude' => 33.4333],
            ['city_plate' => 37, 'name' => 'Bozkurt', 'latitude' => 41.9333, 'longitude' => 34.0000],
            ['city_plate' => 37, 'name' => 'Cide', 'latitude' => 41.8833, 'longitude' => 33.0000],
            ['city_plate' => 37, 'name' => 'Çatalzeytin', 'latitude' => 41.9333, 'longitude' => 34.2000],
            ['city_plate' => 37, 'name' => 'Daday', 'latitude' => 41.4833, 'longitude' => 33.4333],
            ['city_plate' => 37, 'name' => 'Devrekani', 'latitude' => 41.5333, 'longitude' => 33.8333],
            ['city_plate' => 37, 'name' => 'Doğanyurt', 'latitude' => 41.9167, 'longitude' => 33.5667],
            ['city_plate' => 37, 'name' => 'Hanönü', 'latitude' => 41.5667, 'longitude' => 34.5000],
            ['city_plate' => 37, 'name' => 'İhsangazi', 'latitude' => 41.2833, 'longitude' => 33.7333],
            ['city_plate' => 37, 'name' => 'İnebolu', 'latitude' => 41.9667, 'longitude' => 33.7667],
            ['city_plate' => 37, 'name' => 'Kastamonu Merkez', 'latitude' => 41.3667, 'longitude' => 33.7833],
            ['city_plate' => 37, 'name' => 'Küre', 'latitude' => 41.8000, 'longitude' => 33.7167],
            ['city_plate' => 37, 'name' => 'Pınarbaşı', 'latitude' => 41.6500, 'longitude' => 33.0500],
            ['city_plate' => 37, 'name' => 'Seydiler', 'latitude' => 41.5500, 'longitude' => 33.7333],
            ['city_plate' => 37, 'name' => 'Şenpazar', 'latitude' => 41.7667, 'longitude' => 33.2833],
            ['city_plate' => 37, 'name' => 'Taşköprü', 'latitude' => 41.5000, 'longitude' => 34.2000],
            ['city_plate' => 37, 'name' => 'Tosya', 'latitude' => 41.0167, 'longitude' => 34.0333],

            // ==========================================
            // 38 - KAYSERİ (16 İlçe)
            // ==========================================
            ['city_plate' => 38, 'name' => 'Akkışla', 'latitude' => 39.0333, 'longitude' => 35.8833],
            ['city_plate' => 38, 'name' => 'Bünyan', 'latitude' => 38.8333, 'longitude' => 35.8667],
            ['city_plate' => 38, 'name' => 'Develi', 'latitude' => 38.3833, 'longitude' => 35.4833],
            ['city_plate' => 38, 'name' => 'Felahiye', 'latitude' => 39.0000, 'longitude' => 35.6500],
            ['city_plate' => 38, 'name' => 'Hacılar', 'latitude' => 38.6500, 'longitude' => 35.4000],
            ['city_plate' => 38, 'name' => 'İncesu', 'latitude' => 38.6167, 'longitude' => 35.2000],
            ['city_plate' => 38, 'name' => 'Kayseri Merkez', 'latitude' => 38.7167, 'longitude' => 35.4833],
            ['city_plate' => 38, 'name' => 'Kocasinan', 'latitude' => 38.7500, 'longitude' => 35.4500],
            ['city_plate' => 38, 'name' => 'Melikgazi', 'latitude' => 38.7000, 'longitude' => 35.5000],
            ['city_plate' => 38, 'name' => 'Özvatan', 'latitude' => 39.0500, 'longitude' => 35.8000],
            ['city_plate' => 38, 'name' => 'Pınarbaşı', 'latitude' => 38.7167, 'longitude' => 36.3833],
            ['city_plate' => 38, 'name' => 'Sarıoğlan', 'latitude' => 39.0333, 'longitude' => 35.8500],
            ['city_plate' => 38, 'name' => 'Sarız', 'latitude' => 38.4833, 'longitude' => 36.4500],
            ['city_plate' => 38, 'name' => 'Talas', 'latitude' => 38.6833, 'longitude' => 35.5667],
            ['city_plate' => 38, 'name' => 'Tomarza', 'latitude' => 38.4667, 'longitude' => 35.8333],
            ['city_plate' => 38, 'name' => 'Yahyalı', 'latitude' => 38.0333, 'longitude' => 35.3833],
            ['city_plate' => 38, 'name' => 'Yeşilhisar', 'latitude' => 38.3500, 'longitude' => 35.1000],

            // ==========================================
            // 39 - KIRKLARELİ (8 İlçe)
            // ==========================================
            ['city_plate' => 39, 'name' => 'Babaeski', 'latitude' => 41.4333, 'longitude' => 27.1000],
            ['city_plate' => 39, 'name' => 'Demirköy', 'latitude' => 41.8167, 'longitude' => 27.7667],
            ['city_plate' => 39, 'name' => 'Kırklareli Merkez', 'latitude' => 41.7333, 'longitude' => 27.2167],
            ['city_plate' => 39, 'name' => 'Kofçaz', 'latitude' => 41.8500, 'longitude' => 27.2000],
            ['city_plate' => 39, 'name' => 'Lüleburgaz', 'latitude' => 41.4000, 'longitude' => 27.3500],
            ['city_plate' => 39, 'name' => 'Pehlivanköy', 'latitude' => 41.3667, 'longitude' => 26.9667],
            ['city_plate' => 39, 'name' => 'Pınarhisar', 'latitude' => 41.6000, 'longitude' => 27.5167],
            ['city_plate' => 39, 'name' => 'Vize', 'latitude' => 41.5667, 'longitude' => 27.7667],

            // ==========================================
            // 40 - KIRŞEHİR (7 İlçe)
            // ==========================================
            ['city_plate' => 40, 'name' => 'Akçakent', 'latitude' => 39.5667, 'longitude' => 34.3333],
            ['city_plate' => 40, 'name' => 'Akpınar', 'latitude' => 39.4667, 'longitude' => 34.0167],
            ['city_plate' => 40, 'name' => 'Boztepe', 'latitude' => 39.4667, 'longitude' => 34.3167],
            ['city_plate' => 40, 'name' => 'Çiçekdağı', 'latitude' => 39.6333, 'longitude' => 34.4500],
            ['city_plate' => 40, 'name' => 'Kaman', 'latitude' => 39.3500, 'longitude' => 34.0833],
            ['city_plate' => 40, 'name' => 'Kırşehir Merkez', 'latitude' => 39.1500, 'longitude' => 34.1667],
            ['city_plate' => 40, 'name' => 'Mucur', 'latitude' => 39.0833, 'longitude' => 34.3167],


            // ==========================================
            // 41 - KİLİS (4 İlçe)
            // ==========================================
            ['city_plate' => 41, 'name' => 'Elbeyli', 'latitude' => 36.6667, 'longitude' => 37.3333],
            ['city_plate' => 41, 'name' => 'Kilis Merkez', 'latitude' => 36.7167, 'longitude' => 37.1167],
            ['city_plate' => 41, 'name' => 'Musabeyli', 'latitude' => 36.8500, 'longitude' => 37.0333],
            ['city_plate' => 41, 'name' => 'Polateli', 'latitude' => 36.8667, 'longitude' => 37.0000],

            // ==========================================
            // 42 - KONYA (31 İlçe)
            // ==========================================
            ['city_plate' => 42, 'name' => 'Ahırlı', 'latitude' => 37.2833, 'longitude' => 32.3333],
            ['city_plate' => 42, 'name' => 'Akören', 'latitude' => 37.5833, 'longitude' => 32.4667],
            ['city_plate' => 42, 'name' => 'Akşehir', 'latitude' => 38.3500, 'longitude' => 31.4167],
            ['city_plate' => 42, 'name' => 'Altınekin', 'latitude' => 38.3500, 'longitude' => 32.6667],
            ['city_plate' => 42, 'name' => 'Beyşehir', 'latitude' => 37.6833, 'longitude' => 31.7333],
            ['city_plate' => 42, 'name' => 'Bozkır', 'latitude' => 37.1833, 'longitude' => 32.2500],
            ['city_plate' => 42, 'name' => 'Cihanbeyli', 'latitude' => 38.4833, 'longitude' => 32.9167],
            ['city_plate' => 42, 'name' => 'Çeltik', 'latitude' => 38.6500, 'longitude' => 31.5833],
            ['city_plate' => 42, 'name' => 'Çumra', 'latitude' => 37.5667, 'longitude' => 32.7667],
            ['city_plate' => 42, 'name' => 'Derbent', 'latitude' => 37.9500, 'longitude' => 32.0667],
            ['city_plate' => 42, 'name' => 'Derebucak', 'latitude' => 37.4000, 'longitude' => 31.4667],
            ['city_plate' => 42, 'name' => 'Doğanhisar', 'latitude' => 38.1667, 'longitude' => 31.5833],
            ['city_plate' => 42, 'name' => 'Emirgazi', 'latitude' => 37.9000, 'longitude' => 33.7333],
            ['city_plate' => 42, 'name' => 'Ereğli', 'latitude' => 37.5167, 'longitude' => 34.0500],
            ['city_plate' => 42, 'name' => 'Güneysınır', 'latitude' => 37.4167, 'longitude' => 32.7500],
            ['city_plate' => 42, 'name' => 'Hadim', 'latitude' => 37.0333, 'longitude' => 32.4333],
            ['city_plate' => 42, 'name' => 'Halkapınar', 'latitude' => 37.5167, 'longitude' => 34.1333],
            ['city_plate' => 42, 'name' => 'Hüyük', 'latitude' => 37.9500, 'longitude' => 31.7000],
            ['city_plate' => 42, 'name' => 'Ilgın', 'latitude' => 38.2667, 'longitude' => 31.9167],
            ['city_plate' => 42, 'name' => 'Kadınhanı', 'latitude' => 38.2333, 'longitude' => 32.2167],
            ['city_plate' => 42, 'name' => 'Karapınar', 'latitude' => 37.7167, 'longitude' => 33.5333],
            ['city_plate' => 42, 'name' => 'Karatay', 'latitude' => 37.8667, 'longitude' => 32.5000],
            ['city_plate' => 42, 'name' => 'Kulu', 'latitude' => 39.0833, 'longitude' => 33.0667],
            ['city_plate' => 42, 'name' => 'Meram', 'latitude' => 37.8667, 'longitude' => 32.4833],
            ['city_plate' => 42, 'name' => 'Sarayönü', 'latitude' => 38.2667, 'longitude' => 32.4333],
            ['city_plate' => 42, 'name' => 'Selçuklu', 'latitude' => 37.8833, 'longitude' => 32.4833],
            ['city_plate' => 42, 'name' => 'Seydişehir', 'latitude' => 37.4167, 'longitude' => 31.8500],
            ['city_plate' => 42, 'name' => 'Taşkent', 'latitude' => 36.9167, 'longitude' => 32.5333],
            ['city_plate' => 42, 'name' => 'Tuzlukçu', 'latitude' => 38.4000, 'longitude' => 31.4167],
            ['city_plate' => 42, 'name' => 'Yalıhüyük', 'latitude' => 37.2667, 'longitude' => 32.1333],
            ['city_plate' => 42, 'name' => 'Yunak', 'latitude' => 38.5167, 'longitude' => 31.7500],

            // ==========================================
            // 43 - KÜTAHYA (13 İlçe)
            // ==========================================
            ['city_plate' => 43, 'name' => 'Altıntaş', 'latitude' => 39.0000, 'longitude' => 30.1500],
            ['city_plate' => 43, 'name' => 'Aslanapa', 'latitude' => 39.2667, 'longitude' => 29.8167],
            ['city_plate' => 43, 'name' => 'Çavdarhisar', 'latitude' => 39.1667, 'longitude' => 29.5667],
            ['city_plate' => 43, 'name' => 'Domaniç', 'latitude' => 39.7167, 'longitude' => 29.6000],
            ['city_plate' => 43, 'name' => 'Dumlupınar', 'latitude' => 38.9667, 'longitude' => 30.2667],
            ['city_plate' => 43, 'name' => 'Emet', 'latitude' => 39.3333, 'longitude' => 29.2833],
            ['city_plate' => 43, 'name' => 'Gediz', 'latitude' => 39.0500, 'longitude' => 29.4167],
            ['city_plate' => 43, 'name' => 'Hisarcık', 'latitude' => 39.2833, 'longitude' => 29.3833],
            ['city_plate' => 43, 'name' => 'Kütahya Merkez', 'latitude' => 39.4167, 'longitude' => 29.9833],
            ['city_plate' => 43, 'name' => 'Pazarlar', 'latitude' => 39.1333, 'longitude' => 29.3167],
            ['city_plate' => 43, 'name' => 'Simav', 'latitude' => 39.0833, 'longitude' => 28.9833],
            ['city_plate' => 43, 'name' => 'Şaphane', 'latitude' => 39.0500, 'longitude' => 29.2167],
            ['city_plate' => 43, 'name' => 'Tavşanlı', 'latitude' => 39.5500, 'longitude' => 29.5000],

            // ==========================================
            // 44 - MALATYA (13 İlçe)
            // ==========================================
            ['city_plate' => 44, 'name' => 'Akçadağ', 'latitude' => 38.3500, 'longitude' => 37.9167],
            ['city_plate' => 44, 'name' => 'Arapgir', 'latitude' => 39.0500, 'longitude' => 38.4833],
            ['city_plate' => 44, 'name' => 'Arguvan', 'latitude' => 38.6333, 'longitude' => 38.1000],
            ['city_plate' => 44, 'name' => 'Battalgazi', 'latitude' => 38.4333, 'longitude' => 38.3667],
            ['city_plate' => 44, 'name' => 'Darende', 'latitude' => 38.4667, 'longitude' => 37.4833],
            ['city_plate' => 44, 'name' => 'Doğanşehir', 'latitude' => 38.0833, 'longitude' => 37.8667],
            ['city_plate' => 44, 'name' => 'Doğanyol', 'latitude' => 38.2500, 'longitude' => 39.1333],
            ['city_plate' => 44, 'name' => 'Hekimhan', 'latitude' => 38.8000, 'longitude' => 37.9500],
            ['city_plate' => 44, 'name' => 'Kale', 'latitude' => 38.3500, 'longitude' => 38.7500],
            ['city_plate' => 44, 'name' => 'Kuluncak', 'latitude' => 38.9167, 'longitude' => 37.7333],
            ['city_plate' => 44, 'name' => 'Pütürge', 'latitude' => 38.1333, 'longitude' => 38.7500],
            ['city_plate' => 44, 'name' => 'Yazıhan', 'latitude' => 38.5667, 'longitude' => 38.2167],
            ['city_plate' => 44, 'name' => 'Yeşilyurt', 'latitude' => 38.3000, 'longitude' => 38.2667],

            // ==========================================
            // 45 - MANİSA (17 İlçe)
            // ==========================================
            ['city_plate' => 45, 'name' => 'Ahmetli', 'latitude' => 38.5333, 'longitude' => 28.0167],
            ['city_plate' => 45, 'name' => 'Akhisar', 'latitude' => 38.9167, 'longitude' => 27.8333],
            ['city_plate' => 45, 'name' => 'Alaşehir', 'latitude' => 38.3500, 'longitude' => 28.5167],
            ['city_plate' => 45, 'name' => 'Demirci', 'latitude' => 39.0333, 'longitude' => 28.3333],
            ['city_plate' => 45, 'name' => 'Gölmarmara', 'latitude' => 38.6833, 'longitude' => 27.9833],
            ['city_plate' => 45, 'name' => 'Gördes', 'latitude' => 38.9167, 'longitude' => 28.0500],
            ['city_plate' => 45, 'name' => 'Kırkağaç', 'latitude' => 39.0833, 'longitude' => 27.6667],
            ['city_plate' => 45, 'name' => 'Köprübaşı', 'latitude' => 38.7500, 'longitude' => 28.2333],
            ['city_plate' => 45, 'name' => 'Kula', 'latitude' => 38.5500, 'longitude' => 28.5833],
            ['city_plate' => 45, 'name' => 'Salihli', 'latitude' => 38.4833, 'longitude' => 28.1333],
            ['city_plate' => 45, 'name' => 'Sarıgöl', 'latitude' => 38.2167, 'longitude' => 28.6833],
            ['city_plate' => 45, 'name' => 'Saruhanlı', 'latitude' => 38.7167, 'longitude' => 27.5667],
            ['city_plate' => 45, 'name' => 'Selendi', 'latitude' => 38.7500, 'longitude' => 28.8167],
            ['city_plate' => 45, 'name' => 'Soma', 'latitude' => 39.1833, 'longitude' => 27.6000],
            ['city_plate' => 45, 'name' => 'Şehzadeler', 'latitude' => 38.6167, 'longitude' => 27.4333],
            ['city_plate' => 45, 'name' => 'Turgutlu', 'latitude' => 38.5000, 'longitude' => 27.7167],
            ['city_plate' => 45, 'name' => 'Yunusemre', 'latitude' => 38.6167, 'longitude' => 27.4167],

            //==================
            // 46 - KAHRAMANMARAŞ (11 İlçe)
            // ==========================================
            ['city_plate' => 46, 'name' => 'Afşin', 'latitude' => 38.2500, 'longitude' => 36.9167],
            ['city_plate' => 46, 'name' => 'Andırın', 'latitude' => 37.5833, 'longitude' => 36.3500],
            ['city_plate' => 46, 'name' => 'Çağlayancerit', 'latitude' => 37.7333, 'longitude' => 37.3000],
            ['city_plate' => 46, 'name' => 'Dulkadiroğlu', 'latitude' => 37.5833, 'longitude' => 36.9333],
            ['city_plate' => 46, 'name' => 'Ekinözü', 'latitude' => 38.0833, 'longitude' => 37.2000],
            ['city_plate' => 46, 'name' => 'Elbistan', 'latitude' => 38.2000, 'longitude' => 37.2000],
            ['city_plate' => 46, 'name' => 'Göksun', 'latitude' => 38.0167, 'longitude' => 36.4833],
            ['city_plate' => 46, 'name' => 'Nurhak', 'latitude' => 37.9500, 'longitude' => 37.3667],
            ['city_plate' => 46, 'name' => 'Onikişubat', 'latitude' => 37.5833, 'longitude' => 36.9167],
            ['city_plate' => 46, 'name' => 'Pazarcık', 'latitude' => 37.4833, 'longitude' => 37.2833],
            ['city_plate' => 46, 'name' => 'Türkoğlu', 'latitude' => 37.4000, 'longitude' => 36.9833],

            // ==========================================
            // 47 - MARDİN (10 İlçe)
            // ==========================================
            ['city_plate' => 47, 'name' => 'Artuklu', 'latitude' => 37.3167, 'longitude' => 40.7333],
            ['city_plate' => 47, 'name' => 'Dargeçit', 'latitude' => 37.5000, 'longitude' => 41.8333],
            ['city_plate' => 47, 'name' => 'Derik', 'latitude' => 37.3333, 'longitude' => 40.3500],
            ['city_plate' => 47, 'name' => 'Kızıltepe', 'latitude' => 37.2000, 'longitude' => 40.5833],
            ['city_plate' => 47, 'name' => 'Mazıdağı', 'latitude' => 37.4167, 'longitude' => 40.4833],
            ['city_plate' => 47, 'name' => 'Midyat', 'latitude' => 37.4167, 'longitude' => 41.3500],
            ['city_plate' => 47, 'name' => 'Nusaybin', 'latitude' => 37.0833, 'longitude' => 41.2167],
            ['city_plate' => 47, 'name' => 'Ömerli', 'latitude' => 37.3500, 'longitude' => 40.9167],
            ['city_plate' => 47, 'name' => 'Savur', 'latitude' => 37.5167, 'longitude' => 40.9167],
            ['city_plate' => 47, 'name' => 'Yeşilli', 'latitude' => 37.3333, 'longitude' => 40.8167],

            // ==========================================
            // 48 - MUĞLA (13 İlçe)
            // ==========================================
            ['city_plate' => 48, 'name' => 'Bodrum', 'latitude' => 37.0333, 'longitude' => 27.4333],
            ['city_plate' => 48, 'name' => 'Dalaman', 'latitude' => 36.7667, 'longitude' => 28.8000],
            ['city_plate' => 48, 'name' => 'Datça', 'latitude' => 36.7333, 'longitude' => 27.6833],
            ['city_plate' => 48, 'name' => 'Fethiye', 'latitude' => 36.6167, 'longitude' => 29.1167],
            ['city_plate' => 48, 'name' => 'Kavaklıdere', 'latitude' => 37.4500, 'longitude' => 28.3667],
            ['city_plate' => 48, 'name' => 'Köyceğiz', 'latitude' => 36.9667, 'longitude' => 28.6833],
            ['city_plate' => 48, 'name' => 'Marmaris', 'latitude' => 36.8500, 'longitude' => 28.2667],
            ['city_plate' => 48, 'name' => 'Menteşe', 'latitude' => 37.2167, 'longitude' => 28.3667],
            ['city_plate' => 48, 'name' => 'Milas', 'latitude' => 37.3167, 'longitude' => 27.7833],
            ['city_plate' => 48, 'name' => 'Ortaca', 'latitude' => 36.8333, 'longitude' => 28.7500],
            ['city_plate' => 48, 'name' => 'Seydikemer', 'latitude' => 36.6333, 'longitude' => 29.4000],
            ['city_plate' => 48, 'name' => 'Ula', 'latitude' => 37.1000, 'longitude' => 28.4500],
            ['city_plate' => 48, 'name' => 'Yatağan', 'latitude' => 37.3500, 'longitude' => 28.1333],

            // ==========================================
            // 49 - MUŞ (6 İlçe)
            // ==========================================
            ['city_plate' => 49, 'name' => 'Bulanık', 'latitude' => 39.0667, 'longitude' => 42.2000],
            ['city_plate' => 49, 'name' => 'Hasköy', 'latitude' => 38.8667, 'longitude' => 41.6500],
            ['city_plate' => 49, 'name' => 'Korkut', 'latitude' => 38.8833, 'longitude' => 41.5167],
            ['city_plate' => 49, 'name' => 'Malazgirt', 'latitude' => 39.1500, 'longitude' => 42.5333],
            ['city_plate' => 49, 'name' => 'Muş Merkez', 'latitude' => 38.7333, 'longitude' => 41.5000],
            ['city_plate' => 49, 'name' => 'Varto', 'latitude' => 39.1667, 'longitude' => 41.4333],

            // ==========================================
            // 50 - NEVŞEHİR (8 İlçe)
            // ==========================================
            ['city_plate' => 50, 'name' => 'Acıgöl', 'latitude' => 38.5333, 'longitude' => 34.5167],
            ['city_plate' => 50, 'name' => 'Avanos', 'latitude' => 38.7167, 'longitude' => 34.8333],
            ['city_plate' => 50, 'name' => 'Derinkuyu', 'latitude' => 38.3333, 'longitude' => 34.7333],
            ['city_plate' => 50, 'name' => 'Gülşehir', 'latitude' => 38.7333, 'longitude' => 34.5667],
            ['city_plate' => 50, 'name' => 'Hacıbektaş', 'latitude' => 38.9333, 'longitude' => 34.5667],
            ['city_plate' => 50, 'name' => 'Kozaklı', 'latitude' => 39.2000, 'longitude' => 34.8000],
            ['city_plate' => 50, 'name' => 'Nevşehir Merkez', 'latitude' => 38.6167, 'longitude' => 34.7167],
            ['city_plate' => 50, 'name' => 'Ürgüp', 'latitude' => 38.6333, 'longitude' => 34.9167],

            // ==========================================
            // 51 - NİĞDE (6 İlçe)
            // ==========================================
            ['city_plate' => 51, 'name' => 'Altunhisar', 'latitude' => 37.9500, 'longitude' => 34.5667],
            ['city_plate' => 51, 'name' => 'Bor', 'latitude' => 37.9000, 'longitude' => 34.5500],
            ['city_plate' => 51, 'name' => 'Çamardı', 'latitude' => 37.8333, 'longitude' => 34.8500],
            ['city_plate' => 51, 'name' => 'Çiftlik', 'latitude' => 38.0000, 'longitude' => 34.7500],
            ['city_plate' => 51, 'name' => 'Niğde Merkez', 'latitude' => 37.9667, 'longitude' => 34.6833],
            ['city_plate' => 51, 'name' => 'Ulukışla', 'latitude' => 37.6333, 'longitude' => 34.4833],

            // ==========================================
            // 52 - ORDU (19 İlçe)
            // ==========================================
            ['city_plate' => 52, 'name' => 'Akkuş', 'latitude' => 40.8167, 'longitude' => 37.0333],
            ['city_plate' => 52, 'name' => 'Altınordu', 'latitude' => 40.9833, 'longitude' => 37.8833],
            ['city_plate' => 52, 'name' => 'Aybastı', 'latitude' => 40.6833, 'longitude' => 37.4500],
            ['city_plate' => 52, 'name' => 'Çamaş', 'latitude' => 40.8167, 'longitude' => 37.5833],
            ['city_plate' => 52, 'name' => 'Çatalpınar', 'latitude' => 40.8333, 'longitude' => 37.5167],
            ['city_plate' => 52, 'name' => 'Çaybaşı', 'latitude' => 40.9833, 'longitude' => 37.1167],
            ['city_plate' => 52, 'name' => 'Fatsa', 'latitude' => 41.0333, 'longitude' => 37.5000],
            ['city_plate' => 52, 'name' => 'Gölköy', 'latitude' => 40.6667, 'longitude' => 37.6167],
            ['city_plate' => 52, 'name' => 'Gülyalı', 'latitude' => 40.9500, 'longitude' => 37.9833],
            ['city_plate' => 52, 'name' => 'Gürgentepe', 'latitude' => 40.7667, 'longitude' => 37.7333],
            ['city_plate' => 52, 'name' => 'İkizce', 'latitude' => 41.0167, 'longitude' => 37.1667],
            ['city_plate' => 52, 'name' => 'Kabadüz', 'latitude' => 40.8667, 'longitude' => 37.8333],
            ['city_plate' => 52, 'name' => 'Kabataş', 'latitude' => 40.6333, 'longitude' => 37.4333],
            ['city_plate' => 52, 'name' => 'Korgan', 'latitude' => 40.8000, 'longitude' => 37.3167],
            ['city_plate' => 52, 'name' => 'Kumru', 'latitude' => 40.8500, 'longitude' => 37.2833],
            ['city_plate' => 52, 'name' => 'Mesudiye', 'latitude' => 40.4500, 'longitude' => 37.6333],
            ['city_plate' => 52, 'name' => 'Perşembe', 'latitude' => 41.0667, 'longitude' => 37.8000],
            ['city_plate' => 52, 'name' => 'Ulubey', 'latitude' => 40.8500, 'longitude' => 37.7667],
            ['city_plate' => 52, 'name' => 'Ünye', 'latitude' => 41.1333, 'longitude' => 37.2833],

            // ==========================================
            // 53 - RİZE (12 İlçe)
            // ==========================================
            ['city_plate' => 53, 'name' => 'Ardeşen', 'latitude' => 41.1833, 'longitude' => 40.9833],
            ['city_plate' => 53, 'name' => 'Çamlıhemşin', 'latitude' => 40.9667, 'longitude' => 40.9833],
            ['city_plate' => 53, 'name' => 'Çayeli', 'latitude' => 41.0667, 'longitude' => 40.7167],
            ['city_plate' => 53, 'name' => 'Derepazarı', 'latitude' => 41.0333, 'longitude' => 40.4667],
            ['city_plate' => 53, 'name' => 'Fındıklı', 'latitude' => 41.2667, 'longitude' => 41.1667],
            ['city_plate' => 53, 'name' => 'Güneysu', 'latitude' => 41.0000, 'longitude' => 40.5667],
            ['city_plate' => 53, 'name' => 'Hemşin', 'latitude' => 40.9500, 'longitude' => 40.9000],
            ['city_plate' => 53, 'name' => 'İkizdere', 'latitude' => 40.7833, 'longitude' => 40.5667],
            ['city_plate' => 53, 'name' => 'İyidere', 'latitude' => 41.0167, 'longitude' => 40.4333],
            ['city_plate' => 53, 'name' => 'Kalkandere', 'latitude' => 40.9500, 'longitude' => 40.4833],
            ['city_plate' => 53, 'name' => 'Pazar', 'latitude' => 41.1667, 'longitude' => 40.8833],
            ['city_plate' => 53, 'name' => 'Rize Merkez', 'latitude' => 41.0167, 'longitude' => 40.5167],

            // ==========================================
            // 54 - SAKARYA (16 İlçe)
            // ==========================================
            ['city_plate' => 54, 'name' => 'Adapazarı', 'latitude' => 40.7833, 'longitude' => 30.4000],
            ['city_plate' => 54, 'name' => 'Akyazı', 'latitude' => 40.6833, 'longitude' => 30.6333],
            ['city_plate' => 54, 'name' => 'Arifiye', 'latitude' => 40.7167, 'longitude' => 30.3667],
            ['city_plate' => 54, 'name' => 'Erenler', 'latitude' => 40.7667, 'longitude' => 30.4167],
            ['city_plate' => 54, 'name' => 'Ferizli', 'latitude' => 40.8833, 'longitude' => 30.4500],
            ['city_plate' => 54, 'name' => 'Geyve', 'latitude' => 40.4833, 'longitude' => 30.3000],
            ['city_plate' => 54, 'name' => 'Hendek', 'latitude' => 40.8000, 'longitude' => 30.7500],
            ['city_plate' => 54, 'name' => 'Karapürçek', 'latitude' => 40.6500, 'longitude' => 30.6000],
            ['city_plate' => 54, 'name' => 'Karasu', 'latitude' => 41.1333, 'longitude' => 30.6833],
            ['city_plate' => 54, 'name' => 'Kaynarca', 'latitude' => 41.0667, 'longitude' => 30.4500],
            ['city_plate' => 54, 'name' => 'Kocaali', 'latitude' => 41.1667, 'longitude' => 30.8500],
            ['city_plate' => 54, 'name' => 'Pamukova', 'latitude' => 40.4500, 'longitude' => 30.3667],
            ['city_plate' => 54, 'name' => 'Sapanca', 'latitude' => 40.6833, 'longitude' => 30.2500],
            ['city_plate' => 54, 'name' => 'Serdivan', 'latitude' => 40.7833, 'longitude' => 30.3667],
            ['city_plate' => 54, 'name' => 'Söğütlü', 'latitude' => 40.8333, 'longitude' => 30.4500],
            ['city_plate' => 54, 'name' => 'Taraklı', 'latitude' => 40.4667, 'longitude' => 30.5000],

            // ==========================================
            // 55 - SAMSUN (17 İlçe)
            // ==========================================
            ['city_plate' => 55, 'name' => 'Alaçam', 'latitude' => 41.5667, 'longitude' => 35.5833],
            ['city_plate' => 55, 'name' => 'Asarcık', 'latitude' => 41.1333, 'longitude' => 36.3333],
            ['city_plate' => 55, 'name' => 'Atakum', 'latitude' => 41.3167, 'longitude' => 36.2500],
            ['city_plate' => 55, 'name' => 'Ayvacık', 'latitude' => 41.0333, 'longitude' => 36.6333],
            ['city_plate' => 55, 'name' => 'Bafra', 'latitude' => 41.5667, 'longitude' => 35.9000],
            ['city_plate' => 55, 'name' => 'Canik', 'latitude' => 41.2667, 'longitude' => 36.3667],
            ['city_plate' => 55, 'name' => 'Çarşamba', 'latitude' => 41.2000, 'longitude' => 36.7333],
            ['city_plate' => 55, 'name' => 'Havza', 'latitude' => 40.9667, 'longitude' => 35.6667],
            ['city_plate' => 55, 'name' => 'İlkadım', 'latitude' => 41.2833, 'longitude' => 36.3167],
            ['city_plate' => 55, 'name' => 'Kavak', 'latitude' => 41.0833, 'longitude' => 36.0500],
            ['city_plate' => 55, 'name' => 'Ladik', 'latitude' => 40.9167, 'longitude' => 35.8833],
            ['city_plate' => 55, 'name' => 'Ondokuzmayıs', 'latitude' => 41.4500, 'longitude' => 36.0667],
            ['city_plate' => 55, 'name' => 'Salıpazarı', 'latitude' => 41.0833, 'longitude' => 36.6667],
            ['city_plate' => 55, 'name' => 'Tekkeköy', 'latitude' => 41.2500, 'longitude' => 36.4667],
            ['city_plate' => 55, 'name' => 'Terme', 'latitude' => 41.2000, 'longitude' => 36.9667],
            ['city_plate' => 55, 'name' => 'Vezirköprü', 'latitude' => 41.1333, 'longitude' => 35.4333],
            ['city_plate' => 55, 'name' => 'Yakakent', 'latitude' => 41.6667, 'longitude' => 35.4667],

            // ==========================================
            // 56 - SİİRT (7 İlçe)
            // ==========================================
            ['city_plate' => 56, 'name' => 'Baykan', 'latitude' => 38.0167, 'longitude' => 41.6000],
            ['city_plate' => 56, 'name' => 'Eruh', 'latitude' => 37.7500, 'longitude' => 42.0667],
            ['city_plate' => 56, 'name' => 'Kurtalan', 'latitude' => 37.9167, 'longitude' => 41.6833],
            ['city_plate' => 56, 'name' => 'Pervari', 'latitude' => 37.9167, 'longitude' => 42.6667],
            ['city_plate' => 56, 'name' => 'Siirt Merkez', 'latitude' => 37.9333, 'longitude' => 41.9333],
            ['city_plate' => 56, 'name' => 'Şirvan', 'latitude' => 38.0000, 'longitude' => 42.0333],
            ['city_plate' => 56, 'name' => 'Tillo', 'latitude' => 37.9333, 'longitude' => 42.0333],

            // ==========================================
            // 57 - SİNOP (9 İlçe)
            // ==========================================
            ['city_plate' => 57, 'name' => 'Ayancık', 'latitude' => 41.9500, 'longitude' => 34.5833],
            ['city_plate' => 57, 'name' => 'Boyabat', 'latitude' => 41.4667, 'longitude' => 34.7667],
            ['city_plate' => 57, 'name' => 'Dikmen', 'latitude' => 41.8333, 'longitude' => 34.8333],
            ['city_plate' => 57, 'name' => 'Durağan', 'latitude' => 41.3667, 'longitude' => 35.0667],
            ['city_plate' => 57, 'name' => 'Erfelek', 'latitude' => 41.7667, 'longitude' => 34.9000],
            ['city_plate' => 57, 'name' => 'Gerze', 'latitude' => 41.8000, 'longitude' => 35.1667],
            ['city_plate' => 57, 'name' => 'Saraydüzü', 'latitude' => 41.3167, 'longitude' => 34.9333],
            ['city_plate' => 57, 'name' => 'Sinop Merkez', 'latitude' => 42.0333, 'longitude' => 35.1500],
            ['city_plate' => 57, 'name' => 'Türkeli', 'latitude' => 41.8667, 'longitude' => 34.3333],
// ==========================================
            // 58 - SİVAS (17 İlçe)
            // ==========================================
            ['city_plate' => 58, 'name' => 'Akıncılar', 'latitude' => 40.0667, 'longitude' => 38.3000],
            ['city_plate' => 58, 'name' => 'Altınyayla', 'latitude' => 39.3833, 'longitude' => 36.7500],
            ['city_plate' => 58, 'name' => 'Divriği', 'latitude' => 39.3667, 'longitude' => 38.1167],
            ['city_plate' => 58, 'name' => 'Doğanşar', 'latitude' => 40.0667, 'longitude' => 37.8333],
            ['city_plate' => 58, 'name' => 'Gemerek', 'latitude' => 39.1500, 'longitude' => 36.1667],
            ['city_plate' => 58, 'name' => 'Gölova', 'latitude' => 40.1167, 'longitude' => 38.3667],
            ['city_plate' => 58, 'name' => 'Gürün', 'latitude' => 38.7167, 'longitude' => 37.2333],
            ['city_plate' => 58, 'name' => 'Hafik', 'latitude' => 39.8167, 'longitude' => 37.3833],
            ['city_plate' => 58, 'name' => 'İmranlı', 'latitude' => 39.8333, 'longitude' => 38.0000],
            ['city_plate' => 58, 'name' => 'Kangal', 'latitude' => 39.2333, 'longitude' => 37.3833],
            ['city_plate' => 58, 'name' => 'Koyulhisar', 'latitude' => 40.3167, 'longitude' => 37.8333],
            ['city_plate' => 58, 'name' => 'Sivas Merkez', 'latitude' => 39.7500, 'longitude' => 37.0167],
            ['city_plate' => 58, 'name' => 'Suşehri', 'latitude' => 40.1333, 'longitude' => 38.0667],
            ['city_plate' => 58, 'name' => 'Şarkışla', 'latitude' => 39.3000, 'longitude' => 36.3167],
            ['city_plate' => 58, 'name' => 'Ulaş', 'latitude' => 39.5167, 'longitude' => 37.0167],
            ['city_plate' => 58, 'name' => 'Yıldızeli', 'latitude' => 39.8500, 'longitude' => 36.5333],
            ['city_plate' => 58, 'name' => 'Zara', 'latitude' => 39.9167, 'longitude' => 37.5500],


            // ==========================================
            // 59 - TEKİRDAĞ (11 İlçe)
            // ==========================================
            ['city_plate' => 59, 'name' => 'Çerkezköy', 'latitude' => 41.2833, 'longitude' => 28.0000],
            ['city_plate' => 59, 'name' => 'Çorlu', 'latitude' => 41.1500, 'longitude' => 27.8000],
            ['city_plate' => 59, 'name' => 'Ergene', 'latitude' => 41.1333, 'longitude' => 27.7333],
            ['city_plate' => 59, 'name' => 'Hayrabolu', 'latitude' => 41.2167, 'longitude' => 27.2833],
            ['city_plate' => 59, 'name' => 'Kapaklı', 'latitude' => 41.3167, 'longitude' => 28.0000],
            ['city_plate' => 59, 'name' => 'Malkara', 'latitude' => 40.9000, 'longitude' => 26.9000],
            ['city_plate' => 59, 'name' => 'Marmaraereğlisi', 'latitude' => 40.9667, 'longitude' => 27.9333],
            ['city_plate' => 59, 'name' => 'Muratlı', 'latitude' => 41.2667, 'longitude' => 27.5000],
            ['city_plate' => 59, 'name' => 'Saray', 'latitude' => 41.4333, 'longitude' => 27.9167],
            ['city_plate' => 59, 'name' => 'Süleymanpaşa', 'latitude' => 40.9833, 'longitude' => 27.5167],
            ['city_plate' => 59, 'name' => 'Şarköy', 'latitude' => 40.6167, 'longitude' => 27.1167],

            // ==========================================
            // 60 - TOKAT (12 İlçe)
            // ==========================================
            ['city_plate' => 60, 'name' => 'Almus', 'latitude' => 40.3500, 'longitude' => 36.9167],
            ['city_plate' => 60, 'name' => 'Artova', 'latitude' => 40.1500, 'longitude' => 36.3167],
            ['city_plate' => 60, 'name' => 'Başçiftlik', 'latitude' => 40.4833, 'longitude' => 37.0667],
            ['city_plate' => 60, 'name' => 'Erbaa', 'latitude' => 40.6667, 'longitude' => 36.5667],
            ['city_plate' => 60, 'name' => 'Niksar', 'latitude' => 40.5833, 'longitude' => 36.9500],
            ['city_plate' => 60, 'name' => 'Pazar', 'latitude' => 40.3833, 'longitude' => 36.2667],
            ['city_plate' => 60, 'name' => 'Reşadiye', 'latitude' => 40.3833, 'longitude' => 37.3333],
            ['city_plate' => 60, 'name' => 'Sulusaray', 'latitude' => 40.0500, 'longitude' => 36.0333],
            ['city_plate' => 60, 'name' => 'Tokat Merkez', 'latitude' => 40.3167, 'longitude' => 36.5500],
            ['city_plate' => 60, 'name' => 'Turhal', 'latitude' => 40.3833, 'longitude' => 36.0833],
            ['city_plate' => 60, 'name' => 'Yeşilyurt', 'latitude' => 40.0667, 'longitude' => 36.1500],
            ['city_plate' => 60, 'name' => 'Zile', 'latitude' => 40.2333, 'longitude' => 35.8833],

            // ==========================================
            // 61 - TRABZON (18 İlçe)
            // ==========================================
            ['city_plate' => 61, 'name' => 'Akçaabat', 'latitude' => 41.0167, 'longitude' => 39.5667],
            ['city_plate' => 61, 'name' => 'Araklı', 'latitude' => 40.9500, 'longitude' => 39.9833],
            ['city_plate' => 61, 'name' => 'Arsin', 'latitude' => 40.9500, 'longitude' => 39.8833],
            ['city_plate' => 61, 'name' => 'Beşikdüzü', 'latitude' => 41.0667, 'longitude' => 39.2333],
            ['city_plate' => 61, 'name' => 'Çarşıbaşı', 'latitude' => 41.0833, 'longitude' => 39.3833],
            ['city_plate' => 61, 'name' => 'Çaykara', 'latitude' => 40.6333, 'longitude' => 40.2500],
            ['city_plate' => 61, 'name' => 'Dernekpazarı', 'latitude' => 40.7500, 'longitude' => 40.0833],
            ['city_plate' => 61, 'name' => 'Düzköy', 'latitude' => 40.8500, 'longitude' => 39.5000],
            ['city_plate' => 61, 'name' => 'Hayrat', 'latitude' => 40.8167, 'longitude' => 40.1667],
            ['city_plate' => 61, 'name' => 'Köprübaşı', 'latitude' => 40.8500, 'longitude' => 40.0667],
            ['city_plate' => 61, 'name' => 'Maçka', 'latitude' => 40.8167, 'longitude' => 39.6000],
            ['city_plate' => 61, 'name' => 'Of', 'latitude' => 40.8833, 'longitude' => 40.2500],
            ['city_plate' => 61, 'name' => 'Ortahisar', 'latitude' => 41.0000, 'longitude' => 39.7333],
            ['city_plate' => 61, 'name' => 'Sürmene', 'latitude' => 40.9000, 'longitude' => 40.1000],
            ['city_plate' => 61, 'name' => 'Şalpazarı', 'latitude' => 40.9667, 'longitude' => 39.2333],
            ['city_plate' => 61, 'name' => 'Tonya', 'latitude' => 40.9167, 'longitude' => 39.2833],
            ['city_plate' => 61, 'name' => 'Vakfıkebir', 'latitude' => 41.0500, 'longitude' => 39.3000],
            ['city_plate' => 61, 'name' => 'Yomra', 'latitude' => 40.9500, 'longitude' => 39.8167],

            // ==========================================
            // 62 - TUNCELİ (8 İlçe)
            // ==========================================
            ['city_plate' => 62, 'name' => 'Çemişgezek', 'latitude' => 38.9167, 'longitude' => 38.9167],
            ['city_plate' => 62, 'name' => 'Hozat', 'latitude' => 39.1000, 'longitude' => 39.1833],
            ['city_plate' => 62, 'name' => 'Mazgirt', 'latitude' => 38.9833, 'longitude' => 39.5833],
            ['city_plate' => 62, 'name' => 'Nazımiye', 'latitude' => 39.3667, 'longitude' => 39.8000],
            ['city_plate' => 62, 'name' => 'Ovacık', 'latitude' => 39.3333, 'longitude' => 38.8333],
            ['city_plate' => 62, 'name' => 'Pertek', 'latitude' => 39.0167, 'longitude' => 39.3333],
            ['city_plate' => 62, 'name' => 'Pülümür', 'latitude' => 39.4833, 'longitude' => 39.8333],
            ['city_plate' => 62, 'name' => 'Tunceli Merkez', 'latitude' => 39.1000, 'longitude' => 39.5500],

            // ==========================================
            // 63 - ŞANLIURFA (13 İlçe)
            // ==========================================
            ['city_plate' => 63, 'name' => 'Akçakale', 'latitude' => 36.6833, 'longitude' => 38.9500],
            ['city_plate' => 63, 'name' => 'Birecik', 'latitude' => 37.0333, 'longitude' => 37.9833],
            ['city_plate' => 63, 'name' => 'Bozova', 'latitude' => 37.5167, 'longitude' => 38.4667],
            ['city_plate' => 63, 'name' => 'Ceylanpınar', 'latitude' => 36.8500, 'longitude' => 39.9833],
            ['city_plate' => 63, 'name' => 'Eyyübiye', 'latitude' => 37.1500, 'longitude' => 38.8000],
            ['city_plate' => 63, 'name' => 'Halfeti', 'latitude' => 37.2333, 'longitude' => 37.8667],
            ['city_plate' => 63, 'name' => 'Haliliye', 'latitude' => 37.1667, 'longitude' => 38.7833],
            ['city_plate' => 63, 'name' => 'Harran', 'latitude' => 36.8667, 'longitude' => 39.0333],
            ['city_plate' => 63, 'name' => 'Hilvan', 'latitude' => 37.5500, 'longitude' => 38.8667],
            ['city_plate' => 63, 'name' => 'Karaköprü', 'latitude' => 37.2167, 'longitude' => 38.7667],
            ['city_plate' => 63, 'name' => 'Siverek', 'latitude' => 37.7500, 'longitude' => 39.3167],
            ['city_plate' => 63, 'name' => 'Suruç', 'latitude' => 36.9833, 'longitude' => 38.4167],
            ['city_plate' => 63, 'name' => 'Viranşehir', 'latitude' => 37.2333, 'longitude' => 39.7500],


            // ==========================================
            // 64 - UŞAK (6 İlçe)
            // ==========================================
            ['city_plate' => 64, 'name' => 'Banaz', 'latitude' => 38.7500, 'longitude' => 29.8833],
            ['city_plate' => 64, 'name' => 'Eşme', 'latitude' => 38.4000, 'longitude' => 29.1000],
            ['city_plate' => 64, 'name' => 'Karahallı', 'latitude' => 38.2500, 'longitude' => 29.5333],
            ['city_plate' => 64, 'name' => 'Sivaslı', 'latitude' => 38.4833, 'longitude' => 29.6167],
            ['city_plate' => 64, 'name' => 'Ulubey', 'latitude' => 38.5000, 'longitude' => 29.3500],
            ['city_plate' => 64, 'name' => 'Uşak Merkez', 'latitude' => 38.6833, 'longitude' => 29.4000],

            // ==========================================
            // 65 - VAN (13 İlçe)
            // ==========================================
            ['city_plate' => 65, 'name' => 'Bahçesaray', 'latitude' => 38.0333, 'longitude' => 43.0000],
            ['city_plate' => 65, 'name' => 'Başkale', 'latitude' => 38.0500, 'longitude' => 44.0500],
            ['city_plate' => 65, 'name' => 'Çaldıran', 'latitude' => 39.1667, 'longitude' => 43.9167],
            ['city_plate' => 65, 'name' => 'Çatak', 'latitude' => 38.0000, 'longitude' => 43.0833],
            ['city_plate' => 65, 'name' => 'Edremit', 'latitude' => 38.4167, 'longitude' => 43.2333],
            ['city_plate' => 65, 'name' => 'Erciş', 'latitude' => 39.0333, 'longitude' => 43.3667],
            ['city_plate' => 65, 'name' => 'Gevaş', 'latitude' => 38.2167, 'longitude' => 43.1167],
            ['city_plate' => 65, 'name' => 'Gürpınar', 'latitude' => 38.2500, 'longitude' => 43.5333],
            ['city_plate' => 65, 'name' => 'İpekyolu', 'latitude' => 38.5000, 'longitude' => 43.3833],
            ['city_plate' => 65, 'name' => 'Muradiye', 'latitude' => 39.0000, 'longitude' => 43.7500],
            ['city_plate' => 65, 'name' => 'Özalp', 'latitude' => 38.6667, 'longitude' => 43.9500],
            ['city_plate' => 65, 'name' => 'Saray', 'latitude' => 38.5667, 'longitude' => 44.1500],
            ['city_plate' => 65, 'name' => 'Tuşba', 'latitude' => 38.5500, 'longitude' => 43.4000],

            // ==========================================
            // 66 - YOZGAT (14 İlçe)
            // ==========================================
            ['city_plate' => 66, 'name' => 'Akdağmadeni', 'latitude' => 39.6667, 'longitude' => 35.8833],
            ['city_plate' => 66, 'name' => 'Aydıncık', 'latitude' => 40.0333, 'longitude' => 35.3167],
            ['city_plate' => 66, 'name' => 'Boğazlıyan', 'latitude' => 39.1833, 'longitude' => 35.2500],
            ['city_plate' => 66, 'name' => 'Çandır', 'latitude' => 39.4667, 'longitude' => 35.3500],
            ['city_plate' => 66, 'name' => 'Çayıralan', 'latitude' => 39.3167, 'longitude' => 35.7333],
            ['city_plate' => 66, 'name' => 'Çekerek', 'latitude' => 40.0667, 'longitude' => 35.6500],
            ['city_plate' => 66, 'name' => 'Kadışehri', 'latitude' => 40.0667, 'longitude' => 35.8167],
            ['city_plate' => 66, 'name' => 'Saraykent', 'latitude' => 39.7500, 'longitude' => 35.5333],
            ['city_plate' => 66, 'name' => 'Sarıkaya', 'latitude' => 39.5000, 'longitude' => 35.3833],
            ['city_plate' => 66, 'name' => 'Sorgun', 'latitude' => 39.8167, 'longitude' => 35.1833],
            ['city_plate' => 66, 'name' => 'Şefaatli', 'latitude' => 39.3833, 'longitude' => 34.7333],
            ['city_plate' => 66, 'name' => 'Yenifakılı', 'latitude' => 39.2000, 'longitude' => 34.9333],
            ['city_plate' => 66, 'name' => 'Yerköy', 'latitude' => 39.6333, 'longitude' => 34.4667],
            ['city_plate' => 66, 'name' => 'Yozgat Merkez', 'latitude' => 39.8167, 'longitude' => 34.8000],

            // ==========================================
            // 67 - ZONGULDAK (8 İlçe)
            // ==========================================
            ['city_plate' => 67, 'name' => 'Alaplı', 'latitude' => 41.1000, 'longitude' => 31.4167],
            ['city_plate' => 67, 'name' => 'Çaycuma', 'latitude' => 41.4333, 'longitude' => 32.0667],
            ['city_plate' => 67, 'name' => 'Devrek', 'latitude' => 41.2167, 'longitude' => 31.9667],
            ['city_plate' => 67, 'name' => 'Ereğli', 'latitude' => 41.2833, 'longitude' => 31.4167],
            ['city_plate' => 67, 'name' => 'Gökçebey', 'latitude' => 41.2500, 'longitude' => 32.0167],
            ['city_plate' => 67, 'name' => 'Kilimli', 'latitude' => 41.4667, 'longitude' => 31.8167],
            ['city_plate' => 67, 'name' => 'Kozlu', 'latitude' => 41.4333, 'longitude' => 31.7667],
            ['city_plate' => 67, 'name' => 'Zonguldak Merkez', 'latitude' => 41.4500, 'longitude' => 31.7833],

            // ==========================================
            // 68 - AKSARAY (7 İlçe)
            // ==========================================
            ['city_plate' => 68, 'name' => 'Ağaçören', 'latitude' => 38.9333, 'longitude' => 33.9167],
            ['city_plate' => 68, 'name' => 'Aksaray Merkez', 'latitude' => 38.3667, 'longitude' => 34.0333],
            ['city_plate' => 68, 'name' => 'Eskil', 'latitude' => 38.1667, 'longitude' => 33.3333],
            ['city_plate' => 68, 'name' => 'Gülağaç', 'latitude' => 38.3333, 'longitude' => 34.1333],
            ['city_plate' => 68, 'name' => 'Güzelyurt', 'latitude' => 38.2667, 'longitude' => 34.3667],
            ['city_plate' => 68, 'name' => 'Ortaköy', 'latitude' => 38.7333, 'longitude' => 34.0333],
            ['city_plate' => 68, 'name' => 'Sarıyahşi', 'latitude' => 39.0667, 'longitude' => 33.9000],

            // ==========================================
            // 69 - BAYBURT (3 İlçe)
            // ==========================================
            ['city_plate' => 69, 'name' => 'Aydıntepe', 'latitude' => 40.3167, 'longitude' => 40.1333],
            ['city_plate' => 69, 'name' => 'Bayburt Merkez', 'latitude' => 40.2500, 'longitude' => 40.2333],
            ['city_plate' => 69, 'name' => 'Demirözü', 'latitude' => 40.1667, 'longitude' => 39.8167],

            // ==========================================
            // 70 - KARAMAN (6 İlçe)
            // ==========================================
            ['city_plate' => 70, 'name' => 'Ayrancı', 'latitude' => 37.3833, 'longitude' => 33.7167],
            ['city_plate' => 70, 'name' => 'Başyayla', 'latitude' => 36.8500, 'longitude' => 32.6167],
            ['city_plate' => 70, 'name' => 'Ermenek', 'latitude' => 36.6333, 'longitude' => 32.8833],
            ['city_plate' => 70, 'name' => 'Karaman Merkez', 'latitude' => 37.1833, 'longitude' => 33.2167],
            ['city_plate' => 70, 'name' => 'Kazımkarabekir', 'latitude' => 37.3500, 'longitude' => 33.1167],
            ['city_plate' => 70, 'name' => 'Sarıveliler', 'latitude' => 36.6500, 'longitude' => 32.5500],

            // ==========================================
            // 71 - KIRIKKALE (9 İlçe)
            // ==========================================
            ['city_plate' => 71, 'name' => 'Bahşili', 'latitude' => 39.8167, 'longitude' => 33.3833],
            ['city_plate' => 71, 'name' => 'Balışeyh', 'latitude' => 39.9333, 'longitude' => 33.6833],
            ['city_plate' => 71, 'name' => 'Çelebi', 'latitude' => 39.7333, 'longitude' => 33.5667],
            ['city_plate' => 71, 'name' => 'Delice', 'latitude' => 40.0667, 'longitude' => 33.9167],
            ['city_plate' => 71, 'name' => 'Karakeçili', 'latitude' => 39.6333, 'longitude' => 33.4833],
            ['city_plate' => 71, 'name' => 'Keskin', 'latitude' => 39.6833, 'longitude' => 33.6167],
            ['city_plate' => 71, 'name' => 'Kırıkkale Merkez', 'latitude' => 39.8500, 'longitude' => 33.5167],
            ['city_plate' => 71, 'name' => 'Sulakyurt', 'latitude' => 40.1167, 'longitude' => 33.7333],
            ['city_plate' => 71, 'name' => 'Yahşihan', 'latitude' => 39.8333, 'longitude' => 33.4333],

            // ==========================================
            // 72 - BATMAN (6 İlçe)
            // ==========================================
            ['city_plate' => 72, 'name' => 'Batman Merkez', 'latitude' => 37.8833, 'longitude' => 41.1333],
            ['city_plate' => 72, 'name' => 'Beşiri', 'latitude' => 37.8667, 'longitude' => 41.2500],
            ['city_plate' => 72, 'name' => 'Gercüş', 'latitude' => 37.5667, 'longitude' => 41.3833],
            ['city_plate' => 72, 'name' => 'Hasankeyf', 'latitude' => 37.6833, 'longitude' => 41.4167],
            ['city_plate' => 72, 'name' => 'Kozluk', 'latitude' => 38.1667, 'longitude' => 41.5000],
            ['city_plate' => 72, 'name' => 'Sason', 'latitude' => 38.2000, 'longitude' => 41.4833],

            // ==========================================
            // 73 - ŞIRNAK (7 İlçe)
            // ==========================================
            ['city_plate' => 73, 'name' => 'Beytüşşebap', 'latitude' => 37.6833, 'longitude' => 43.1500],
            ['city_plate' => 73, 'name' => 'Cizre', 'latitude' => 37.3000, 'longitude' => 42.1833],
            ['city_plate' => 73, 'name' => 'Güçlükonak', 'latitude' => 37.4500, 'longitude' => 42.4167],
            ['city_plate' => 73, 'name' => 'İdil', 'latitude' => 37.3333, 'longitude' => 41.8500],
            ['city_plate' => 73, 'name' => 'Silopi', 'latitude' => 37.2500, 'longitude' => 42.4667],
            ['city_plate' => 73, 'name' => 'Şırnak Merkez', 'latitude' => 37.5167, 'longitude' => 42.4667],
            ['city_plate' => 73, 'name' => 'Uludere', 'latitude' => 37.4167, 'longitude' => 43.0833],

            // ==========================================
            // 74 - BARTIN (4 İlçe)
            // ==========================================
            ['city_plate' => 74, 'name' => 'Amasra', 'latitude' => 41.7500, 'longitude' => 32.3833],
            ['city_plate' => 74, 'name' => 'Bartın Merkez', 'latitude' => 41.6333, 'longitude' => 32.3333],
            ['city_plate' => 74, 'name' => 'Kurucaşile', 'latitude' => 41.8333, 'longitude' => 32.6667],
            ['city_plate' => 74, 'name' => 'Ulus', 'latitude' => 41.5667, 'longitude' => 32.6000],

            // ==========================================
            // 75 - ARDAHAN (6 İlçe)
            // ==========================================
            ['city_plate' => 75, 'name' => 'Ardahan Merkez', 'latitude' => 41.1167, 'longitude' => 42.7000],
            ['city_plate' => 75, 'name' => 'Çıldır', 'latitude' => 41.0333, 'longitude' => 43.1667],
            ['city_plate' => 75, 'name' => 'Damal', 'latitude' => 41.3333, 'longitude' => 42.8167],
            ['city_plate' => 75, 'name' => 'Göle', 'latitude' => 40.8500, 'longitude' => 42.6167],
            ['city_plate' => 75, 'name' => 'Hanak', 'latitude' => 41.2167, 'longitude' => 42.8500],
            ['city_plate' => 75, 'name' => 'Posof', 'latitude' => 41.5000, 'longitude' => 42.8833],


            // ==========================================
            // 76 - IĞDIR (4 İlçe)
            // ==========================================
            ['city_plate' => 76, 'name' => 'Aralık', 'latitude' => 39.8667, 'longitude' => 44.5167],
            ['city_plate' => 76, 'name' => 'Iğdır Merkez', 'latitude' => 39.9167, 'longitude' => 44.0333],
            ['city_plate' => 76, 'name' => 'Karakoyunlu', 'latitude' => 39.9667, 'longitude' => 44.2500],
            ['city_plate' => 76, 'name' => 'Tuzluca', 'latitude' => 40.0500, 'longitude' => 43.6667],

            // ==========================================
            // 77 - YALOVA (6 İlçe)
            // ==========================================
            ['city_plate' => 77, 'name' => 'Altınova', 'latitude' => 40.6833, 'longitude' => 29.5167],
            ['city_plate' => 77, 'name' => 'Armutlu', 'latitude' => 40.5167, 'longitude' => 28.8333],
            ['city_plate' => 77, 'name' => 'Çınarcık', 'latitude' => 40.6333, 'longitude' => 29.1333],
            ['city_plate' => 77, 'name' => 'Çiftlikköy', 'latitude' => 40.6667, 'longitude' => 29.3500],
            ['city_plate' => 77, 'name' => 'Termal', 'latitude' => 40.6000, 'longitude' => 29.1500],
            ['city_plate' => 77, 'name' => 'Yalova Merkez', 'latitude' => 40.6500, 'longitude' => 29.2667],

            // ==========================================
            // 78 - KARABÜK (6 İlçe)
            // ==========================================
            ['city_plate' => 78, 'name' => 'Eflani', 'latitude' => 41.3333, 'longitude' => 32.8667],
            ['city_plate' => 78, 'name' => 'Eskipazar', 'latitude' => 41.0167, 'longitude' => 32.4333],
            ['city_plate' => 78, 'name' => 'Karabük Merkez', 'latitude' => 41.2000, 'longitude' => 32.6167],
            ['city_plate' => 78, 'name' => 'Ovacık', 'latitude' => 41.2500, 'longitude' => 33.1000],
            ['city_plate' => 78, 'name' => 'Safranbolu', 'latitude' => 41.2500, 'longitude' => 32.6833],
            ['city_plate' => 78, 'name' => 'Yenice', 'latitude' => 41.1167, 'longitude' => 32.3167],

            // ==========================================
            // 79 - KİLİS (4 İlçe)
            // ==========================================
            ['city_plate' => 79, 'name' => 'Elbeyli', 'latitude' => 36.6667, 'longitude' => 37.3333],
            ['city_plate' => 79, 'name' => 'Kilis Merkez', 'latitude' => 36.7167, 'longitude' => 37.1167],
            ['city_plate' => 79, 'name' => 'Musabeyli', 'latitude' => 36.8500, 'longitude' => 37.0333],
            ['city_plate' => 79, 'name' => 'Polateli', 'latitude' => 36.8667, 'longitude' => 37.0000],

            // ==========================================
            // 80 - OSMANİYE (7 İlçe)
            // ==========================================
            ['city_plate' => 80, 'name' => 'Bahçe', 'latitude' => 37.1833, 'longitude' => 36.6167],
            ['city_plate' => 80, 'name' => 'Düziçi', 'latitude' => 37.2500, 'longitude' => 36.4667],
            ['city_plate' => 80, 'name' => 'Hasanbeyli', 'latitude' => 37.1500, 'longitude' => 36.5000],
            ['city_plate' => 80, 'name' => 'Kadirli', 'latitude' => 37.3833, 'longitude' => 36.1000],
            ['city_plate' => 80, 'name' => 'Osmaniye Merkez', 'latitude' => 37.2167, 'longitude' => 36.2500],
            ['city_plate' => 80, 'name' => 'Sumbas', 'latitude' => 37.4167, 'longitude' => 36.1500],
            ['city_plate' => 80, 'name' => 'Toprakkale', 'latitude' => 37.1333, 'longitude' => 36.1000],

            // ==========================================
            // 81 - DÜZCE (8 İlçe)
            // ==========================================
            ['city_plate' => 81, 'name' => 'Akçakoca', 'latitude' => 41.0833, 'longitude' => 31.1167],
            ['city_plate' => 81, 'name' => 'Cumayeri', 'latitude' => 40.8333, 'longitude' => 31.0000],
            ['city_plate' => 81, 'name' => 'Çilimli', 'latitude' => 40.8500, 'longitude' => 31.1833],
            ['city_plate' => 81, 'name' => 'Düzce Merkez', 'latitude' => 40.8500, 'longitude' => 31.1667],
            ['city_plate' => 81, 'name' => 'Gölyaka', 'latitude' => 40.7833, 'longitude' => 30.9833],
            ['city_plate' => 81, 'name' => 'Gümüşova', 'latitude' => 40.8500, 'longitude' => 30.9667],
            ['city_plate' => 81, 'name' => 'Kaynaşlı', 'latitude' => 40.7500, 'longitude' => 31.3167],
            ['city_plate' => 81, 'name' => 'Yığılca', 'latitude' => 40.9333, 'longitude' => 31.4333],
        ];


  foreach ($part1 as $district) {
            DB::table('districts')->insert([
                'city_plate' => $district['city_plate'],
                'name' => $district['name'],
                'latitude' => $district['latitude'],
                'longitude' => $district['longitude'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}