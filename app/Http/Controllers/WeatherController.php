<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Tarihleri Türkçe gün ve saate çevirmek için ekledik

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        // Tüm illerin plaka kodu - isim eşleştirmesi (Dokunulmadı!)
        $cityNames = [
            1 => 'Adana',
            2 => 'Adıyaman',
            3 => 'Afyonkarahisar',
            4 => 'Ağrı',
            5 => 'Amasya',
            6 => 'Ankara',
            7 => 'Antalya',
            8 => 'Artvin',
            9 => 'Aydın',
            10 => 'Balıkesir',
            11 => 'Bilecik',
            12 => 'Bingöl',
            13 => 'Bitlis',
            14 => 'Bolu',
            15 => 'Burdur',
            16 => 'Bursa',
            17 => 'Çanakkale',
            18 => 'Çankırı',
            19 => 'Çorum',
            20 => 'Denizli',
            21 => 'Diyarbakır',
            22 => 'Edirne',
            23 => 'Elazığ',
            24 => 'Erzincan',
            25 => 'Erzurum',
            26 => 'Eskişehir',
            27 => 'Gaziantep',
            28 => 'Giresun',
            29 => 'Gümüşhane',
            30 => 'Hakkari',
            31 => 'Hatay',
            32 => 'Isparta',
            33 => 'Mersin',
            34 => 'İstanbul',
            35 => 'İzmir',
            36 => 'Kars',
            37 => 'Kastamonu',
            38 => 'Kayseri',
            39 => 'Kırklareli',
            40 => 'Kırşehir',
            41 => 'Kocaeli',
            42 => 'Konya',
            43 => 'Kütahya',
            44 => 'Malatya',
            45 => 'Manisa',
            46 => 'Kahramanmaraş',
            47 => 'Mardin',
            48 => 'Muğla',
            49 => 'Muş',
            50 => 'Nevşehir',
            51 => 'Niğde',
            52 => 'Ordu',
            53 => 'Rize',
            54 => 'Sakarya',
            55 => 'Samsun',
            56 => 'Siirt',
            57 => 'Sinop',
            58 => 'Sivas',
            59 => 'Tekirdağ',
            60 => 'Tokat',
            61 => 'Trabzon',
            62 => 'Tunceli',
            63 => 'Şanlıurfa',
            64 => 'Uşak',
            65 => 'Van',
            66 => 'Yozgat',
            67 => 'Zonguldak',
            68 => 'Aksaray',
            69 => 'Bayburt',
            70 => 'Karaman',
            71 => 'Kırıkkale',
            72 => 'Batman',
            73 => 'Şırnak',
            74 => 'Bartın',
            75 => 'Ardahan',
            76 => 'Iğdır',
            77 => 'Yalova',
            78 => 'Karabük',
            79 => 'Kilis',
            80 => 'Osmaniye',
            81 => 'Düzce'
        ];

        // Veritabanındaki benzersiz illeri çek (Dokunulmadı!)
        $cities = DB::table('districts')
            ->select('city_plate')
            ->distinct()
            ->orderBy('city_plate')
            ->get()
            ->map(function ($item) use ($cityNames) {
                $item->name = $cityNames[$item->city_plate] ?? 'Bilinmeyen İl';
                return $item;
            });

        // Seçilen ilin ilçelerini getir (Dokunulmadı!)
        $selectedPlate = $request->input('plate');
        $districts = [];

        if ($selectedPlate) {
            $districts = DB::table('districts')
                ->where('city_plate', $selectedPlate)
                ->orderBy('name')
                ->get();
        }

        // Varsayılan konum (Batman Merkez) (Dokunulmadı!)
        $lat = 37.8812;
        $lon = 41.1322;
        $displayName = "Batman, Merkez";

        // İlçe seçilmişse koordinatları değiştir (Dokunulmadı!)
        $selectedDistrictId = $request->input('district_id');

        if ($selectedDistrictId) {
            $currentDistrict = DB::table('districts')
                ->where('id', $selectedDistrictId)
                ->first();

            if ($currentDistrict) {
                $lat = $currentDistrict->latitude;
                $lon = $currentDistrict->longitude;

                $cityName = $cityNames[$currentDistrict->city_plate] ?? 'Bilinmeyen İl';
                $displayName = $cityName . ", " . $currentDistrict->name;
            }
        }

        // OpenWeather API anahtarın (Dokunulmadı!)
        $apiKey = env('OPENWEATHER_API_KEY');

        // GÜNCELLEME: Tek istekte 5 günlük / 3 saatlik tüm verileri çeken 'forecast' endpoint'ine geçtik.
        $response = Http::get('https://api.openweathermap.org/data/2.5/forecast', [
            'lat' => $lat,
            'lon' => $lon,
            'appid' => $apiKey,
            'units' => 'metric',
            'lang' => 'tr'
        ]);

        if ($response->successful()) {
            $weatherData = $response->json();
            
            // Türkçe tarih formatı için dili ayarlıyoruz
            Carbon::setLocale('tr');

            // --- YENİ ÖZELLİK: SAATLİK TAHMİN (Sonraki 24 saat) ---
            // Her 3 saatte bir gelen verilerin ilk 8 adedini (24 saat) alıyoruz.
            $hourly = collect($weatherData['list'])->take(8)->map(function ($item) {
                return [
                    'time' => Carbon::parse($item['dt_txt'])->format('H:i'),
                    'temp' => round($item['main']['temp']),
                    'icon' => $item['weather'][0]['icon'],
                    'description' => $item['weather'][0]['description']
                ];
            });

            // --- YENİ ÖZELLİK: GÜNLÜK TAHMİN (5 Günlük) ---
            // Gelen verileri tarihlere göre gruplayıp günlük en yüksek ve en düşük dereceleri buluyoruz.
            $daily = collect($weatherData['list'])->groupBy(function ($item) {
                return Carbon::parse($item['dt_txt'])->format('Y-m-d');
            })->map(function ($dayItems, $date) {
                $temps = $dayItems->pluck('main.temp');
                return [
                    'day' => Carbon::parse($date)->translatedFormat('l'), // Örn: Pazartesi
                    'temp_max' => round($temps->max()),
                    'temp_min' => round($temps->min()),
                    'icon' => $dayItems->first()['weather'][0]['icon'],
                    'description' => $dayItems->first()['weather'][0]['description']
                ];
            })->take(5);

            // Anlık hava durumu verileri için listenin en başındaki güncel veriyi kullanıyoruz.
            $currentWeather = $weatherData['list'][0];

            return view('hava_durumu', [
                'cities' => $cities,
                'districts' => $districts,
                'selectedPlate' => $selectedPlate,
                'selectedDistrictId' => $selectedDistrictId,
                'displayName' => $displayName,
                // Senin ön yüzdeki değişkenlerin (Aynen korundu!)
                'sicaklik_derece' => round($currentWeather['main']['temp']),
                'hissedilen' => round($currentWeather['main']['feels_like']),
                'durum' => $currentWeather['weather'][0]['description'],
                'nem' => '%' . $currentWeather['main']['humidity'],
                'ruzgar' => $currentWeather['wind']['speed'],
                'basinc' => $currentWeather['main']['pressure'],
                // YENİ EKLEDİĞİMİZ VERİLER (Görünümde döngüyle kullanabilirsin)
                'hourly' => $hourly,
                'daily' => $daily,
                'anlik_ikon' => $currentWeather['weather'][0]['icon']
            ]);
        }

        return "Hava durumu verisi çekilirken teknik bir hata oluştu.";
    }
}