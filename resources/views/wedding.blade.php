<!DOCTYPE html>

<head> 
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Pawiwahan Alfath & Desya</title>
    <meta name="description" content="Hello, you are invited to our wedding">
    <meta name="author" content="Alfath Prabanuadhi">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- <link rel="icon" href="{{ URL::to('/') }}/vendors/images/favicon.ico" type="image/x-icon"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Toto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <!-- Basic Page Needs -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css'>
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/custom.css">
    
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
</head>

<body>
    <div class="loading"></div>

    <div class="overlay">
        <div class="sambutan">
            <img src="{{ URL::to('/') }}/assets/sambutan.png" id="imgsambutan" alt="sambutan">
            <button type="button" class="btn btn-primary btn-buka" onclick="buka()">BUKA UNDANGAN</button>
            <div class="kepada">Bp. Kntaul</div>
        </div>
    </div>

    <div class="section" id="section1">
        <video id="background-video" autoplay loop muted poster="assets/vidposter.jpg">
            <source src="{{ URL::to('/') }}/assets/memadik.mp4" type="video/mp4">
        </video>
        <img class="images img1" id="img1h" src="{{ URL::to('/') }}/assets/section1-writing1.png" alt="alfath-desya">
        <img class="images img1" id="img1v" src="{{ URL::to('/') }}/assets/section1-writing1v.png" alt="alfath-desya">
        <div id="tanggal">23 Desember 2023</div>
        <table id="countdown">
            <tr>
                <td class="rb"><span id="d"></span> HARI</td>
                <td class="rb"><span id="h"></span> JAM</td>
                <td class="rb"><span id="m"></span> MENIT</td>
                <td><span id="s"></span> DETIK</td>
            </tr>
        </table>
        <div id="wheeler">
            <div class="mouse"></div>
        </div>
    </div>

    <div class="section" id="section2">
        <img class="images img2" id="img2h" src="{{ URL::to('/') }}/assets/sec2h.png" alt="brides">
        <img class="images img2" id="img2v" src="{{ URL::to('/') }}/assets/sec2v.png" alt="brides">
        <a href="https://www.instagram.com/desyaesp" target="_blank" class="btn btn-outline-danger btn-cp" id="ig-des">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram"
                viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334">
                </path>
            </svg>
            desyaesp
        </a>
        <a href="https://www.instagram.com/al.prabanuadhi" target="_blank" class="btn btn-outline-danger btn-cp" id="ig-al">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram"
                viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334">
                </path>
            </svg>
            al.prabanuadhi
        </a>
    </div>

    <div class="section" id="section3">
        <img class="images img3" id="img3h" src="{{ URL::to('/') }}/assets/loch.svg" alt="location">
        <img class="images img3" id="img3v" src="{{ URL::to('/') }}/assets/locv.svg" alt="location">
        <a target="_blank"  href="https://www.google.com/maps/place/lorin+Solo+Hotel,+Jl.+Adi+Sucipto+No.47,+Kenaiban,+Blulukan,+Colomadu,+Karanganyar+Regency,+Central+Java+57174/@-7.5431068,110.7682585,17z/data=!4m6!3m5!1s0x2e7a142335947789:0x543661c39726d136!8m2!3d-7.5431068!4d110.7682585!16s%2Fg%2F11s544stt4"><img class="images btnmap" id="btnmap3h" src="{{ URL::to('/') }}/assets/btnmap.svg" alt="map"></a>
        
        <!-- <img class="images img3" id="img3doah" src="{{ URL::to('/') }}/assets/sec3doah.png" alt="doa">
        <img class="images img3" id="img3doav" src="{{ URL::to('/') }}/assets/sec3doav.png" alt="doa"> -->
    </div>

    <div class="section" id="section4">
        <div id="blackbg">
            <div class="container">
                <div class="row mx-0 justify-content-center cardsc4">
                    <div class="col-10 rounded-1 p-4 border bg-white" id="sec4card" ng-app="alfathdesya">
                        <div class="row mx-0 justify-content-center" ng-controller="ADController">
                            <div class="col-sm-12 col-md-6 col-lg-6 px-lg-2 col-xl-6 px-xl-0 px-xxl-3">
                                <h2 class="fw-bold text-center">RSVP</h2>
                                <form class="w-100 p-lg-4 p-md-4 p-sm-0 pt-0 kontensec4">
                                    <label class="d-block mb-3">
                                    <span class="form-label d-block">Nama Lengkap</span>
                                    <input
                                        name="nama"
                                        type="text"
                                        class="form-control"
                                        placeholder="Nama Lengkap"
                                        ng-model="nama"
                                    />
                                    </label>
            
                                    <label class="d-block mb-3">
                                    <span class="form-label d-block">Konfirmasi Kehadiran</span>
                                    <select class="form-control" name="kehadiran" ng-model="rsvp">
                                        <option value="" disabled selected>Kehadiran?</option>
                                        <option value="hadir">Hadir</option>
                                        <option value="tidak">Tidak Hadir</option>
                                    </select>
                                    </label>
            
                                    <label class="d-block mb-3">
                                    <span class="form-label d-block">Doa & Ucapan</span>
                                    <textarea
                                        name="pesan"
                                        class="form-control"
                                        rows="3"
                                        placeholder="Doa & ucapan digital kepada Pengantin"
                                        ng-model="pesan"
                                    ></textarea>
                                    </label>
            
                                    <div class="mb-3 text-center">
                                        <h3>Memproses submit data RSVP</h3>
                                        <button type="button" class="btn btn-rsvp px-3 rounded-3" ng-click="submitRSVP()">
                                            Submit RSVP
                                        </button>
                                    </div>
            
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 px-lg-2 col-xl-6 px-xl-0 px-xxl-3" id="sec4kado">
                                <h2 class="fw-bold text-center">Kado Digital</h2>
                                <div class="w-100 p-lg-4 p-md-4 p-sm-0 pt-0 text-center kontensec4">
                                    <p class="text-center">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat mengirim kado secara cashless melalui salah satu dari beberapa channel berikut.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="detailkado k1">
                                                <img class="imgkado" src="{{ URL::to('/') }}/assets/mandiri.svg" alt="mandiri">
                                                <div class="kodekado"><span id="cm">900001069257</span> <div class="btn btn-sm btn-rsvp btn-copy" id="tcm"  onclick="copyToClipboard('cm', 'tcm')">copy</div></div>
                                                <div class="namakado">Mandiri a.n Alfath Prabanuadhi</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="detailkado k2">
                                                <img class="imgkado" src="{{ URL::to('/') }}/assets/dana.svg" alt="dana">
                                                <div class="kodekado"><span id="cd">085826673856</span> <div class="btn btn-sm btn-rsvp btn-copy" id="tcd"  onclick="copyToClipboard('cd', 'tcd')">copy</div></div>
                                                <div class="namakado">Dana a.n Alfath Prabanuadhi</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="detailkado k3">
                                                <img class="imgkado" src="{{ URL::to('/') }}/assets/bca.svg" alt="dana">
                                                <div class="kodekado"><span id="cb">1070246020</span> <div class="btn btn-sm btn-rsvp btn-copy" id="tcb"  onclick="copyToClipboard('cb', 'tcb')">copy</div></div>
                                                <div class="namakado">BCA a.n Ni Putu Desya Esprillia</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            
                            <div class="col-12 px-lg-2 px-xl-0 px-xxl-3">
                                <div class="container pt-3 vertical-scrollable rounded-3 doadoa"> 
                                    <div class="row text-center">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 p-2 m-2 ucapan bb">
                                                        <p>"lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"</p>
                                                        <h4>Andi Meruya</h4>
                                                    </div>
                                                    <div class="col-12 p-2 m-2 ucapan">
                                                        <p>"lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"</p>
                                                        <h4>Andi Meruya</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 p-2 m-2 ucapan bb">
                                                        <p>"lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet ipsum dolor sit amet lorem ipsum dolor sit amet"</p>
                                                        <h4>Andi Meruya</h4>
                                                    </div>
                                                    <div class="col-12 p-2 m-2 ucapan">
                                                        <p>"lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"</p>
                                                        <h4>Andi Meruya</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 p-3 pb-4 sec5part" id="sec5kado">
                    <h2 class="fw-bold text-center">Kado Digital</h2>
                    <div class="w-100 p-lg-4 p-md-4 p-sm-0 pt-0 text-center kontensec4">
                        <p class="text-center sec5kadop">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika
                            memberi adalah ungkapan tanda kasih Anda, Anda dapat mengirim kado secara cashless melalui
                            salah satu dari beberapa channel berikut.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="detailkado k1">
                                    <img class="imgkado"
                                        src="{{ URL::to('/') }}/assets/mandiri.svg"
                                        alt="mandiri">
                                    <div class="kodekado"><span id="mcm">900001069257</span>
                                        <div class="btn btn-sm btn-rsvp btn-copy" id="mtcm"  onclick="copyToClipboard('mcm', 'mtcm')">copy</div>
                                    </div>
                                    <div class="namakado">Mandiri a.n Alfath Prabanuadhi</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="detailkado mt-3">
                                    <img class="imgkado"
                                        src="{{ URL::to('/') }}/assets/dana.svg" alt="dana">
                                    <div class="kodekado"><span id="mcd">085826673856</span>
                                        <div class="btn btn-sm btn-rsvp btn-copy" id="mtcd"  onclick="copyToClipboard('mcd', 'mtcd')">copy</div>
                                    </div>
                                    <div class="namakado">Dana a.n Alfath Prabanuadhi</div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="detailkado mt-3">
                                    <img class="imgkado" src="{{ URL::to('/') }}/assets/bca.svg"
                                        alt="dana">
                                    <div class="kodekado"><span id="mcb">1070246020</span>
                                        <div class="btn btn-sm btn-rsvp btn-copy" id="mtcb"  onclick="copyToClipboard('mcb', 'mtcb')">copy</div>
                                    </div>
                                    <div class="namakado">BCA a.n Ni Putu Desya Esprillia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-0 sec5part" id="igfilter">
                    <img src="{{ URL::to('/') }}/assets/igfilter.png" id="imgigfilter" alt="ig filter">
                    <div id="descigfilter">
                        <p>Gunakan Filter Instagram<br>#ALovingbriDE</p>
                        <button type="button" class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334">
                                </path>
                            </svg>
                            IG Filter
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-0 sec5part" id="solotour">
                    <img src="{{ URL::to('/') }}/assets/wtdinsolo.png" id="imgwtdinsolo" alt="what to do in solo">
                    <div id="descwtdinsolo">
                        <p>Ada Apa di Kota<br>Surakarta (Solo)?</p>
                        <button type="button" class="btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"></path>
                        </svg>
                            Explore Solo
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section6">
        <div class="container">
            <!-- <h2 class="fw-bold text-center">Momen Bahagia Kami</h2> -->
            <div id="gallery" class="photos-grid-container gallery">
            <div class="main-photo img-box">
                <a href="{{ URL::to('/') }}/assets/g1.jpg" class="glightbox" data-glightbox="type: image"><img src="{{ URL::to('/') }}/assets/sg1.jpg" alt="image" /></a>
            </div>
            <div>
                <div class="sub">
                <div class="img-box"><a href="{{ URL::to('/') }}/assets/g2.jpg" class="glightbox" data-glightbox="type: image"><img src="{{ URL::to('/') }}/assets/sg2.jpg" alt="image" /></a></div>
                <div class="img-box"><a href="{{ URL::to('/') }}/assets/g3.jpg" class="glightbox" data-glightbox="type: image"><img src="{{ URL::to('/') }}/assets/sg3.jpg" alt="image" /></a></div>
                <div class="img-box"><a href="{{ URL::to('/') }}/assets/g4.jpg" class="glightbox" data-glightbox="type: image"><img src="{{ URL::to('/') }}/assets/sg4.jpg" alt="image" /></a></div>
                <div id="multi-link" class="img-box">
                    <a href="{{ URL::to('/') }}/assets/g5.jpg" class="glightbox" data-glightbox="type: image">
                    <img src="{{ URL::to('/') }}/assets/sg5.jpg" alt="image" />
                    <div class="transparent-box">
                        <div class="caption">
                        +3
                        </div>
                    </div>
                    </a>
                </div>
                </div>
            </div>
            <div id="more-img" class="extra-images-container hide-element">
                <a href="{{ URL::to('/') }}/assets/g6.jpg" class="glightbox" data-glightbox="type: image"><img src="{{ URL::to('/') }}/assets/sg6.jpg" alt="image" /></a>
                <a href="{{ URL::to('/') }}/assets/g7.jpg" class="glightbox" data-glightbox="type: image"><img src="{{ URL::to('/') }}/assets/sg7.jpg" alt="image" /></a>
                <a href="{{ URL::to('/') }}/assets/g8.jpg" class="glightbox" data-glightbox="type: image"><img src="{{ URL::to('/') }}/assets/sg8.jpg" alt="image" /></a>

            </div>
            </div>
        </div>
        <img src="{{ URL::to('/') }}/assets/foot.svg" id="imgfooter" alt="footer">
    </div>

    <script src="{{ URL::to('/') }}/vendors/jquery/jquery.js"></script>
    <script src='https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script>      
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-route.js"></script>      
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.js"></script>
    <script src="{{ URL::to('/') }}/js/script.js"></script>
    <script>
        var app = angular.module('alfathdesya', []).config(function ($interpolateProvider) {
            $interpolateProvider.startSymbol('{~');
            $interpolateProvider.endSymbol('~}');
        });

        app.filter('enc_base64', function () {
            return function (input) {
                return encode_base64(input);
            };
        });

        app.controller('ADController', function ($scope, $rootScope, $http) {
            getPesan();

            function getPesan() {
                // $http.post("{{ config('url_base') }}/api/APIPaymentRequest/CreatePaymentRequest", '')
                //     .then(function (response) {
                //         console.log("Get create PR Data");
                //         console.log(response);
                //         $scope.createPRData = response.data;
                //         $scope.selectedInput.category = '';
                //     }).catch(function (error) {
                        
                //     });
            }

            $scope.submitRSVP = function() {
                console.log($scope.nama + ' - ' + $scope.rsvp + ' - ' + $scope.pesan);
            }
        });
    </script>
</body>

</html>