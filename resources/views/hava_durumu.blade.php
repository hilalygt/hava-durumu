<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hava Durumu Portalı</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            /* Harika Gece Mavisi / Lacivert Geçişli Arka Plan */
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            color: #f8fafc;
            padding-top: 40px;
            padding-bottom: 60px;
            min-height: 100vh;
        }
        .main-card {
            background: linear-gradient(135deg, #1e40af 0%, #1e1b4b 100%);
            color: white;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.4);
        }
        .forecast-card {
            /* Gece temasına uygun yarı saydam cam (glassmorphism) efekti */
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
            color: #f8fafc;
        }
        .custom-select {
            border-radius: 10px;
            height: 45px;
            font-weight: 500;
            background-color: #1e293b !important;
            border: 1px solid #334155 !important;
            color: #f8fafc !important;
        }
        .custom-select:focus {
            border-color: #3b82f6 !important;
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25) !important;
        }
        .hourly-scroll {
            display: flex;
            overflow-x: auto;
            gap: 15px;
            padding-bottom: 15px;
            scrollbar-width: thin;
            scrollbar-color: #475569 #1e293b;
        }
        .hourly-scroll::-webkit-scrollbar {
            height: 6px;
        }
        .hourly-scroll::-webkit-scrollbar-track {
            background: #1e293b;
            border-radius: 10px;
        }
        .hourly-scroll::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 10px;
        }
        .text-capitalize-first::first-letter {
            text-transform: uppercase;
        }
        .weather-detail-item {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 12px;
            text-align: center;
        }
        /* Bilgilendirme Notu Alanı */
        .disclaimer-box {
            max-width: 650px;
            margin: 30px auto 0 auto;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            border-left: 4px solid #3b82f6;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            border-right: 1px solid rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body>

@php
    $iconMap = [
        '01d' => ['icon' => 'fas fa-sun', 'style' => 'color: #ffcc00 !important; filter: drop-shadow(0 0 8px rgba(255, 204, 0, 0.5));'], // Parlayan Sarı Güneş
        '01n' => ['icon' => 'fas fa-moon', 'style' => 'color: #cbd5e1 !important; filter: drop-shadow(0 0 8px rgba(203, 213, 225, 0.3));'], // Parlayan Ay
        '02d' => ['icon' => 'fas fa-cloud-sun', 'style' => 'color: #ffcc00 !important;'], // Güneş arkasında bulut
        '02n' => ['icon' => 'fas fa-cloud-moon', 'style' => 'color: #94a3b8 !important;'], 
        '03d' => ['icon' => 'fas fa-cloud', 'style' => 'color: #cbd5e1 !important;'], // Parçalı bulut
        '03n' => ['icon' => 'fas fa-cloud', 'style' => 'color: #cbd5e1 !important;'],
        '04d' => ['icon' => 'fas fa-cloud', 'style' => 'color: #94a3b8 !important;'], // Yoğun kapalı bulut
        '04n' => ['icon' => 'fas fa-cloud', 'style' => 'color: #94a3b8 !important;'],
        '09d' => ['icon' => 'fas fa-cloud-showers-heavy', 'style' => 'color: #38bdf8 !important;'], // Sağanak yağmur
        '09n' => ['icon' => 'fas fa-cloud-showers-heavy', 'style' => 'color: #38bdf8 !important;'],
        '10d' => ['icon' => 'fas fa-cloud-sun-rain', 'style' => 'color: #f59e0b !important;'], // Güneşli yağmur
        '10n' => ['icon' => 'fas fa-cloud-moon-rain', 'style' => 'color: #94a3b8 !important;'],
        '11d' => ['icon' => 'fas fa-bolt', 'style' => 'color: #facc15 !important;'], // Şimşekli hava
        '11n' => ['icon' => 'fas fa-bolt', 'style' => 'color: #facc15 !important;'],
        '13d' => ['icon' => 'fas fa-snowflake', 'style' => 'color: #93c5fd !important;'], // Karlı
        '13n' => ['icon' => 'fas fa-snowflake', 'style' => 'color: #93c5fd !important;'],
        '50d' => ['icon' => 'fas fa-smog', 'style' => 'color: #94a3b8 !important;'], // Sisli
        '50n' => ['icon' => 'fas fa-smog', 'style' => 'color: #94a3b8 !important;'],
    ];

    $getWeatherIcon = function($iconCode, $forceDay = false) use ($iconMap) {
        $code = strtolower(trim($iconCode));
        $code = str_replace('.png', '', $code);
        $codeClean = substr($code, 0, 3); // İlk 3 karakteri alıyoruz (01d, 04n vb.)
        
        // Eğer günlük tahmindeysek ve gelen veri geceye aitse ('n'), onu gündüz sürümüne ('d') çeviriyoruz.
        if ($forceDay && substr($codeClean, -1) === 'n') {
            $codeClean = substr($codeClean, 0, 2) . 'd';
        }
        
        if (isset($iconMap[$codeClean])) {
            return $iconMap[$codeClean];
        }
        return ['icon' => 'fas fa-cloud', 'style' => 'color: #cbd5e1 !important;']; // Fallback (Varsayılan Bulut)
    };
@endphp

<div class="container">
    
    <div class="text-center mb-4">
        <h1 class="font-weight-bold text-white">Hava Durumu Portalı</h1>
        <p class="text-white-50">Lütfen detayları görmek istediğiniz şehri ve ilçeyi seçin</p>
    </div>

    <div class="card forecast-card p-4 mb-4">
        <form action="{{ url()->current() }}" method="GET" id="weatherForm">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label for="plate" class="font-weight-bold text-white-50">İl Seçin</label>
                    <select name="plate" id="plate" class="form-control custom-select" onchange="this.form.submit()">
                        <option value="">-- İl Seçin --</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->city_plate }}" {{ $selectedPlate == $city->city_plate ? 'selected' : '' }}>
                                {{ $city->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="district_id" class="font-weight-bold text-white-50">İlçe Seçin</label>
                    <select name="district_id" id="district_id" class="form-control custom-select" onchange="this.form.submit()" {{ empty($districts) ? 'disabled' : '' }}>
                        <option value="">-- İlçe Seçin --</option>
                        @if(!empty($districts))
                            @foreach($districts as $district)
                                <option value="{{ $district->id }}" {{ $selectedDistrictId == $district->id ? 'selected' : '' }}>
                                    {{ $district->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </form>
    </div>

    <div class="card main-card p-4 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                <h2 class="font-weight-bold mb-1">
                    <i class="fas fa-map-marker-alt mr-2 text-warning" style="color: #ffcc00 !important;"></i>{{ $displayName }}
                </h2>
                <p class="mb-0 text-white-50">Şu Anki Hava Durumu</p>
                
                <div class="d-flex align-items-center justify-content-center justify-content-md-start mt-3">
                    @if(isset($anlik_ikon))
                        @php $mainIcon = $getWeatherIcon($anlik_ikon); @endphp
                        <i class="{{ $mainIcon['icon'] }} mr-4" style="{{ $mainIcon['style'] }} font-size: 70px;"></i>
                    @endif
                    <div>
                        <h1 class="display-3 font-weight-bold mb-0" style="line-height: 1;">{{ $sicaklik_derece }}°</h1>
                        <p class="text-capitalize-first mb-0 font-weight-500" style="font-size: 1.2rem;">{{ $durum }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="row">
                    <div class="col-4 mb-3">
                        <div class="weather-detail-item">
                            <i class="fas fa-thermometer-half mb-2 text-warning" style="font-size: 1.2rem; color: #ffcc00 !important;"></i>
                            <span class="d-block small text-white-50">Hissedilen</span>
                            <span class="font-weight-bold" style="font-size: 1.1rem;">{{ $hissedilen }}°C</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="weather-detail-item">
                            <i class="fas fa-tint mb-2 text-info" style="font-size: 1.2rem; color: #38bdf8 !important;"></i>
                            <span class="d-block small text-white-50">Nem</span>
                            <span class="font-weight-bold" style="font-size: 1.1rem;">{{ $nem }}</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="weather-detail-item">
                            <i class="fas fa-wind mb-2 text-light" style="font-size: 1.2rem; color: #a7f3d0 !important;"></i>
                            <span class="d-block small text-white-50">Rüzgar</span>
                            <span class="font-weight-bold" style="font-size: 1.1rem;">{{ $ruzgar }} m/s</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="weather-detail-item py-2">
                            <i class="fas fa-compress-arrows-alt mr-2 text-light"></i>
                            <span class="small text-white-50">Hava Basıncı:</span>
                            <span class="font-weight-bold ml-1">{{ $basinc }} hPa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card forecast-card p-4 mb-4">
        <h4 class="mb-3 text-white font-weight-bold" style="font-size: 1.25rem;">
            <i class="far fa-clock mr-2 text-warning" style="color: #ffcc00 !important;"></i> Önümüzdeki 24 Saat (3'er Saatlik)
        </h4>
        
        @if(isset($hourly) && count($hourly) > 0)
            <div class="hourly-scroll">
                @foreach($hourly as $hour)
                    @php $hrIcon = $getWeatherIcon($hour['icon']); @endphp
                    <div class="text-center p-3" style="min-width: 100px; background: rgba(255, 255, 255, 0.04); border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.08);">
                        <span class="text-white-50 small d-block mb-2 font-weight-bold">{{ $hour['time'] }}</span>
                        
                        <i class="{{ $hrIcon['icon'] }} my-3 d-block" style="{{ $hrIcon['style'] }} font-size: 32px;"></i>
                        
                        <span class="d-block font-weight-bold text-white my-1" style="font-size: 1.1rem;">{{ $hour['temp'] }}°C</span>
                        <span class="text-white-50 d-block text-capitalize-first" style="font-size: 11px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="{{ $hour['description'] }}">
                            {{ $hour['description'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-white-50 mb-0">Saatlik tahmin verisi yüklenemedi.</p>
        @endif
    </div>

    <div class="card forecast-card p-4">
        <h4 class="mb-3 text-white font-weight-bold" style="font-size: 1.25rem;">
            <i class="far fa-calendar-alt mr-2 text-warning" style="color: #ffcc00 !important;"></i> 5 Günlük Hava Tahmini
        </h4>

        <div class="d-flex justify-content-between align-items-center pb-2 mb-2 text-white-50 border-bottom" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important; font-size: 0.75rem; font-weight: 600; letter-spacing: 1px;">
            <div style="width: 30%; min-width: 100px; text-transform: uppercase;">Gün</div>
            <div style="width: 45%; text-transform: uppercase;">Hava Durumu</div>
            <div class="text-right" style="width: 25%; text-transform: uppercase;">Gündüz / Gece</div>
        </div>

        @if(isset($daily) && count($daily) > 0)
            <div class="daily-forecast-list">
                @foreach($daily as $day)
                    @php $dyIcon = $getWeatherIcon($day['icon'], true); @endphp
                    <div class="d-flex justify-content-between align-items-center py-3 {{ !$loop->last ? 'border-bottom' : '' }}" style="border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;">
                        <div style="width: 30%; min-width: 100px;">
                            <span class="font-weight-bold text-white d-block">{{ $day['day'] }}</span>
                        </div>

                        <div class="d-flex align-items-center" style="width: 45%;">
                            <i class="{{ $dyIcon['icon'] }} mr-3" style="{{ $dyIcon['style'] }} font-size: 24px; width: 30px; text-align: center;"></i>
                            <span class="text-white-50 text-capitalize-first small d-none d-sm-inline">{{ $day['description'] }}</span>
                        </div>

                        <div class="text-right" style="width: 25%;">
                            <span class="font-weight-bold mr-2" style="color: #f87171 !important;" title="Gündüz En Yüksek">{{ $day['temp_max'] }}°</span>
                            <span class="font-weight-bold" style="color: #60a5fa !important;" title="Gece En Düşük">{{ $day['temp_min'] }}°</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-white-50 mb-0">Günlük tahmin verisi yüklenemedi.</p>
        @endif
    </div>

    <div class="disclaimer-box text-center">
        <p class="text-white-50 mb-0" style="font-size: 0.85rem; line-height: 1.6;">
            <i class="fas fa-info-circle text-info mr-1" style="color: #38bdf8 !important;"></i>
            <strong>Küçük Bir Not:</strong> Sunulan hava durumu tahminleri en güncel meteorolojik verilerle hazırlanmıştır ancak doğanın tatlı sürprizlerine bağlı olarak anlık değişiklikler gösterebilir. Önemli planlarınızı yaparken bu küçük değişiklik payını göz önünde bulundurmanızı tavsiye ederiz.
        </p>
    </div>

</div>

</body>
</html>