<?php

namespace App\Charts;

use App\Models\absen;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $absensi = absen::with('jadwal.kegiatan')
            ->get()
            ->groupBy('jadwal.kegiatan.nama')
            ->map(function ($group) {
                return $group->count();
            });

        // Mengonversi data menjadi array untuk digunakan pada chart
        $jadwalIds = $absensi->keys()->toArray();
        $counts = $absensi->values()->toArray();
        // dd($counts);

        // Membuat chart menggunakan data dari database
        return $this->chart->barChart()
            ->setTitle('Presensi per Jadwal')
            ->setSubtitle('Jumlah Presensi Berdasarkan Jadwal')
            ->addData('Jumlah Presensi Mahasantri', $counts)
            ->setXAxis($jadwalIds);
    }
}
