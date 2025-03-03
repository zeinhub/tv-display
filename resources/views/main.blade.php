<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warung Nasi Zein Pemalang</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    @vite(['node_modules/@splidejs/splide/dist/css/splide-core.min.css', 'node_modules/@splidejs/splide/dist/css/themes/splide-default.min.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <style>
        .splide__progress__bar {
            height: 3px;
            background: #000957;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">
        <div id="test"></div>
        {{-- <div class="row">
            <div class="col-12">
                <div class="splide splide_menu" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide" data-splide-interval="10000">
                                <img class="menu"
                                    src="https://asset-2.tstatic.net/jabar/foto/bank/images/kata-kata-mutiara-ucapan-marhaban-ya-ramadhan.jpg"
                                    alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="menu"
                                    src="https://cdn1-production-images-kly.akamaized.net/R5mL_yW29-uQPD2FeNu4B2Rl0pc=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4763428/original/061690000_1709698167-10340776.jpg"
                                    alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-8">
                <div class="splide splide_info" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($banners as $item)
                                <li class="splide__slide" data-splide-interval="10000">
                                    <img style="max-width: 80%" class="banner"
                                        src="{{ asset('img/' . $item->filename) }}" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="splide__progress mt-3">
                        <div class="splide__progress__bar p-1">
                        </div>
                    </div> --}}
                </div>
                <br> <br>
                <div class="card">
                    <div class="card-body">
                        <div class="text-left">
                            <div class="d-flex"><h3 id="jadwalSholatTitle"></h3> <h3 id="maghrib" class="d-none"> &nbsp; | Waktu Maghrib Telah Tiba, Selamat Berbuka Puasa!</h3></div>
                        </div>
                        <div class="table-responsive">
                            <table id="jadwalSholat" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Imsak</th>
                                        <th>Subuh</th>
                                        <th>Dhuha</th>
                                        <th>Dzuhur</th>
                                        <th>Ashar</th>
                                        <th>Maghrib</th>
                                        <th>Isya</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <div class="song-request">
                            <iframe id="embed" class="embed"
                                src="https://www.youtube.com/embed/72kUZ1LaI7U?autoplay=1&enablejsapi=1"
                                title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen>
                            </iframe>
                            <div class="mt-3">
                                <div class="song-req-section">
                                    <h4 class="fs-4 fw-bold mb-2">Scan Untuk Request Lagu</h4>
                                    <img style="width: 200px; background-color: white;" class="mt-0"
                                        src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example"
                                        alt="">
                                    <p class="fs-4">https://app.zeinpemalang.com/song-request</p>
                                </div>
                                <div class="song-title-section d-none">
                                    <h4 class="fs-4 fw-bold mb-0" id="songTitle">Cafe Music 4K - Relaxing Jazz Music
                                        with Latte Art
                                        Scenes...</h4>
                                    <h4 class="fs-5 fw-normal mb-0" id="requestedBy">Belum ada yang request lagu, yuk
                                        request!</h4>
                                    <h4 class="fs-5 fw-normal mb-0" id="message">Pesan: </h4>
                                    <h4 class="fs-4 fw-bold mt-3 text-start">Lagu Selanjutnya</h4>
                                    <ol id="nextSong" class="text-start">
                                    </ol>
                                </div>
                            </div>

                            <h4 class="fs-4 fw-bold mb-4" id="nextBy"></h4>

                            {{-- <img style="width: 280px;" class="mt-3"
                                src="{{ asset('img/QRCode-219a2c57-b969-405a-9f74-78d164f7b56d.png') }}" alt=""> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="rtWrapper">
        <marquee class="runningText" behavior="" direction=""> Selamat datang di Warung Nasi Zein Pemalang dan
            selamat menikmati | Pembayaran dapat menggunakan <img class="running-image" style="width: 8rem"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_QRIS.svg/2560px-Logo_QRIS.svg.png"
                alt=""> atau melalui transfer bank <img class="running-image" style="width: 8rem"
                src="https://upload.wikimedia.org/wikipedia/commons/2/2e/BRI_2020.svg" alt="">
            <img class="running-image" style="width: 8rem"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png"
                alt=""> <img class="running-image" style="width: 8rem"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Permata_Bank_%282024%29.svg/2560px-Permata_Bank_%282024%29.svg.png"
                alt=""> | Gunakan pembayaran non-tunai (QRIS) untuk mempermudah dan
            mempercepat transaksi
        </marquee>
        <div id="clock" class="clock">
            <div id="time" class="m-0"></div>
            <div id="date" class="m-0"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        function updateClock() {
            var d = new Date();
            let jamSekarang = d.getHours().toString().padStart(2, '0');
            let menitSekarang = d.getMinutes().toString().padStart(2, '0');
            let waktuSekarang = `${jamSekarang}:${menitSekarang}`; // Format "HH:mm"
            let maghrib;

            // Ambil jam, menit, dan detik dengan format dua digit
            var hours = String(d.getHours()).padStart(2, '0');
            var minutes = String(d.getMinutes()).padStart(2, '0');
            var seconds = String(d.getSeconds()).padStart(2, '0');

            // Ambil tanggal, bulan, dan tahun
            var day = String(d.getDate()).padStart(2, '0');
            var month = String(d.getMonth() + 1).padStart(2, '0'); // Karena getMonth() dimulai dari 0
            var year = d.getFullYear();

            // Gabungkan format waktu dan tanggal
            let now = hours + ":" + minutes + ":" + seconds;
            let date = day + "/" + month + "/" + year;

            if (waktuSekarang === maghrib) {
                console.log(waktuSekarang);
                console.log(maghrib);
                $('#maghrib').removeClass('d-none').addClass('d-block');
            }else{
                $('#maghrib').removeClass('d-block').addClass('d-none');
            }


            document.getElementById('time').innerText = now;
            document.getElementById('date').innerText = date;
        }

        (function() {
            setInterval(updateClock, 1000);
            updateClock();
            // Ambil elemen yang ingin di-toggle
            var songReqSection = document.querySelector(".song-req-section");
            var songTitleSection = document.querySelector(".song-title-section");

            // Fungsi untuk mengganti tampilan
            function toggleSections() {
                // Jika song-req-section sedang terlihat, sembunyikan dan tampilkan song-title-section
                if (songReqSection.classList.contains("d-none")) {
                    songReqSection.classList.remove("d-none");
                    songTitleSection.classList.add("d-none");
                } else {
                    songReqSection.classList.add("d-none");
                    songTitleSection.classList.remove("d-none");
                }
            }

            // Jalankan fungsi toggle setiap 5 detik (5000 ms)
            setInterval(toggleSections, 15000);


            var splide = new Splide('.splide_info', {
                type: 'loop',
                autoplay: true, // Pastikan autoplay aktif
                interval: 10000, // Durasi tampilan tiap slide dalam milidetik (10 detik)
                perPage: 1,
                pauseOnHover: false, // Opsional: agar tetap berjalan saat dihover
                pauseOnFocus: false, // Opsional: agar tidak berhenti saat fokus
                arrows: false
            });


            // splide.on('autoplay:playing', function(rate) {
            //     console.log(rate); // 0-1
            // });


            splide.mount();

            // var splide_menu = new Splide('.splide_menu', {
            //     type: 'loop',
            //     autoplay: true, // Pastikan autoplay aktif
            //     interval: 1000, // Durasi tampilan tiap slide dalam milidetik (10 detik)
            //     perPage: 6,
            //     pauseOnHover: false, // Opsional: agar tetap berjalan saat dihover
            //     pauseOnFocus: false, // Opsional: agar tidak berhenti saat fokus
            //     arrows: false
            // });
            // splide_menu.mount();
        })();
    </script>
    <script src="https://cdn.socket.io/4.8.1/socket.io.min.js" crossorigin="anonymous"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('embed', {
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            console.log("YouTube Player siap!");
            event.target.playVideo(); // Coba mainkan video secara otomatis
        }


        function onPlayerStateChange(event) {
            console.log("State berubah:", event.data);

            if (event.data === YT.PlayerState.ENDED) {
                // alert("Lagu telah selesai!");
                console.log("Lagu telah selesai!");

                playSong(true);
                // player.cueVideoById('NEXT_VIDEO_ID');
            }
        }
    </script>

    <script>
        const socket = io("{{ env('SOCKET_IO_URL') }}");
        var first_load = true;
        var is_history = "Y";
        // const socket = io("wss://wsock.awiez.com");

        const form = document.getElementById("form");
        const input = document.getElementById("input");
        const messages = document.getElementById("messages");

        //    form.addEventListener("submit", (e) => {
        //      e.preventDefault();
        //      if (input.value) {
        //        socket.emit("tv-display", input.value);
        //        input.value = "";
        //      }
        //    });

        function secureUrl(url)
        {
            var getSongUrl = url;
            var secureUrl = getSongUrl.replace("http://", "https://");

            return secureUrl;
        }

        function getSong(callback) {
            $.ajax({
                url: secureUrl("{{ route('song.queue') }}"),
                method: 'GET',
                success: function(res) {
                    let html = "";
                    $.each(res.data, function(index, item) {
                        // console.log(item.data);

                        if (is_history == "Y") {
                            html = `
                            <li>Belum ada request, lagu akan diputar secara acak.</li>
                            `;
                        } else {
                            html += `
                            <li>${item.song_title}</li>
                        `;
                        }

                    })
                    $('#nextSong').html(html);

                    if (callback) callback(res);
                    console.log(res);
                },
                error: function(err) {
                    console.log(err);
                }
            })
        }

        $(document).ready(function() {
            getSong();
            playSong();
        })

        socket.on("tv-display", (msg) => {
            if (msg == "play") {
                playSong();
            } else {
                playSong(true, msg);
            }
        });

        function updateSong(id) {
            $.ajax({
                url: secureUrl("{{ route('song.queue.update') }}"),
                method: 'POST',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    console.log(res);

                },
                error: function(err) {
                    console.log(err);
                }
            })
        }

        function playSong(next = false, name = '') {
            getSong(function(res) {

                let msg;
                const item = document.getElementById('embed');
                msg = "https://www.youtube.com/embed/72kUZ1LaI7U?autoplay=1&enablejsapi=1";

                if (res.data.length > 0) {
                    console.log(res.data);

                    msg = res.data[0].song_url
                }

                console.log("aaass", convertToEmbed(player.getVideoUrl()) + "?autoplay=1&enablejsapi=1");


                if (is_history == "N" && next == false) {
                    if (first_load == false) {
                        return;
                    }

                    first_load = false;
                }
                // if (convertToEmbed(player.getVideoUrl()) + "?autoplay=1&enablejsapi=1" !=
                //     "https://www.youtube.com/embed/72kUZ1LaI7U?autoplay=1&enablejsapi=1" && next ==
                //     false) {
                //     return;
                // }

                if (next == true) {
                    $('#nextBy').html("Lagu di skip oleh: " + name);
                    console.log(name);
                }
                console.log(next);
                $('#nextBy').html("");

                msg = convertToEmbed(msg) + "?autoplay=1&enablejsapi=1";

                // item.src = msg + "?autoplay=1&enablejsapi=1";

                console.log("urllll", msg);

                player.loadVideoById(extractVideoId(msg));

                if (res.data.length > 0) {
                    console.log("l");
                    $('#songTitle').html(res.data[0].song_title);
                    $('#requestedBy').html("Lagu ini di request oleh " + res.data[0].requested_by);
                    res.data[0].message != null ? $('#message').html("Pesan: " + res.data[0].message) : $(
                        '#message').html("");
                    msg = res.data[0].song_url
                    is_history = res.is_history
                    updateSong(res.data[0].id);
                } else {
                    console.log("n");

                    $('#requestedBy').html("");
                    $('#songTitle').html(
                        "Cafe Music 4K - Relaxing Jazz Music with Latte Art Scenes...");
                    $('#requestedBy').html("");
                    $('#message').html("");
                }
                // Cek apakah iframe telah berhasil dimuat
                // setTimeout(() => {
                //     if (!item.src.includes('youtube.com')) {
                //         iframe.src = newVideoUrl;
                //         item.src =
                //             "https://www.youtube.com/embed/72kUZ1LaI7U?autoplay=1&enablejsapi=1";
                //         $('#songTitle').val(
                //             "Cafe Music 4K - Relaxing Jazz Music with Latte Art Scenes...");
                //         $('#requestedBy').val("");
                //         $('#message').val("");
                //     }
                // }, 2000); // Waktu tunggu 5 detik, bisa disesuaikan
                // item.innerText = msg;

                getSong();

            })
        }

        function convertToEmbed(url) {
            let videoId = "";

            // Cek apakah URL mengandung format standar YouTube
            let match = url.match(
                /(?:youtube\.com\/(?:.*v=|embed\/|v\/|shorts\/)|youtu\.be\/)([^?&]+)/i
            );

            if (match) {
                videoId = match[1]; // Ambil video ID dari URL
            }

            // Jika ID ditemukan, kembalikan format embed
            return videoId ? `https://www.youtube.com/embed/${videoId}` : null;
        }

        function extractVideoId(url) {
            const match = url.match(/(?:youtube\.com\/(?:.*v=|embed\/|v\/|shorts\/)|youtu\.be\/)([^?&]+)/i);
            return match ? match[1] : null;
        }

        function formatTanggal(dateString) {
            let date = new Date(dateString);
            let options = {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };

            return date.toLocaleDateString('id-ID', options);
        }

        function getJadwalSholat() {
            $(document).ready(function() {
                let today = new Date();
                let year = today.getFullYear();
                let month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan dalam format 2 digit
                let date = String(today.getDate()).padStart(2, '0'); // Tanggal dalam format 2 digit

                let apiUrl = `https://api.myquran.com/v2/sholat/jadwal/1107/${year}/${month}`;

                $.ajax({
                    url: apiUrl,
                    method: "GET",
                    success: function(response) {
                        if (response.status) {
                            let todayDate = `${year}-${month}-${date}`; // Format YYYY-MM-DD
                            let jadwalHariIni = response.data.jadwal.find(j => j.date === todayDate);

                            if (jadwalHariIni) {
                                maghrib = jadwalHariIni.maghrib;
                                $('#jadwalSholatTitle').html(formatTanggal(jadwalHariIni.date))
                                console.log("Jadwal Sholat Hari Ini:", jadwalHariIni);
                                let html = `
                                    <tr>
                                        <td>${jadwalHariIni.imsak}</td>
                                        <td>${jadwalHariIni.subuh}</td>
                                        <td>${jadwalHariIni.dhuha}</td>
                                        <td>${jadwalHariIni.dzuhur}</td>
                                        <td>${jadwalHariIni.ashar}</td>
                                        <td>${jadwalHariIni.maghrib}</td>
                                        <td>${jadwalHariIni.isya}</td>
                                    </tr>
                                `;

                                $('#jadwalSholat tbody').html(html);
                            } else {
                                console.log("Jadwal tidak ditemukan untuk tanggal hari ini.");
                            }
                        }
                    },
                    error: function() {
                        console.log("Gagal mengambil data dari API");
                    }
                });
            });
        }

        getJadwalSholat();
    </script>
</body>

</html>
