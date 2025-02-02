<?php
// Set header agar browser membaca sebagai file M3U
header("Content-Type: text/plain");

// Mulai output M3U
echo "#EXTM3U\n";

// Array daftar episode
$episodes = [
    ["01", "Murid Baru dari Dimensi Lain", "https://s0.wibufile.com/video/2.5jnR-01-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["02", "Grup Cosplay yang Berpotensi?", "https://s0.wibufile.com/video/2.5jnR-02-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["03", "Lili x Miri", "https://s0.wibufile.com/video/2.5jnR-03-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["04", "Saatnya Acara Pertama Kita!", "https://s0.wibufile.com/video/2.5-jbR-MP4HD-SAMEHADAKU.CARE.mp4"],
    ["05", "Acara Pertama Telah Usai!!", "https://s0.wibufile.com/video/2.5-jbR-5-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["06", "Tips dari Seorang Ahli!?", "https://s0.wibufile.com/video/2.5-jbR-6-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["07", "Kita Butuh Seorang Pembimbing!", "https://s0.wibufile.com/video/2.5-jbR-7-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["08", "Apakah Kamu Suka Cosplay?", "https://s0.wibufile.com/video/2.5-jbR-8-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["09", "Kau Bukan Liliel!", "https://s0.wibufile.com/video/2.5-jbR-9-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["10", "Mayura vs. Nagomi!!", "https://s0.wibufile.com/video/2.5-jbR-10-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["11", "Baju Pelindung Sihirku", "https://s0.wibufile.com/video/2.5-jbR-11-FULLHD-SAMEHADAKU.CARE.mp4"],
    ["12", "Lima Bintang yang Bersinar", "https://s0.wibufile.com/video/2.5-jbR-12-FULLHD-SAMEHADAKU.CARE.mp4"]
];

// URL gambar cover anime
$tvg_logo = "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx158559-eVc9cNSmcUix.jpg";

// Loop untuk menampilkan setiap episode
foreach ($episodes as $ep) {
    echo "#EXTINF:-1 group-title=\"2.5 jigen no Ririsa\" tvg-logo=\"$tvg_logo\",Episode $ep[0] - $ep[1]\n";
    echo "$ep[2]\n";
}

?>