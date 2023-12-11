<!DOCTYPE html>

<head> 
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>The Wedding of Alfath & Desya</title>
    <meta name="description" content="Hello, you are invited to our wedding">
    <meta name="author" content="Alfath Prabanuadhi">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- <link rel="icon" href="{{ URL::to('/') }}/vendors/images/favicon.ico" type="image/x-icon"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Toto:wght@700&display=swap" rel="stylesheet">

    <!-- Basic Page Needs -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/custom-old.css">
</head>

<body>

    <div class="section" id="section1">
        <div class="container abs-100">
            <div class="row">
                <div class="col-12 text-center mt-4 z30" id="sect1-1"><img src="{{ URL::to('/') }}/assets/ring.svg" alt="ring" id="sect1-ring"><br>The Wedding</div>
                <div class="col-12 text-center mt-3 mb-3 z30"><div id="sect1-divider1"></div></div>
                <div class="col-12 text-center mt-0 z30" id="sect1-2">Desya <span id="ampers">&</span> Alfath</div>
                <div class="col-2"></div>
                <div class="col-8 text-center mt-4 z30" id="sect1-3">Lorem ipsum dolor sit amet reminisci aramai teus dev scipikcy areum tedeus</div>
                <div class="col-2"></div>
                <div class="col-12 text-center mt-4 z30" id="sect1-4">04.05.2023</div>
            </div>
        </div>
        <div class="dot z20"></div>
        <video autoplay muted loop class="z10" id="headervid">
            <source src="{{ URL::to('/') }}/assets/samplevid.mp4" type="video/mp4">
        </video>
    </div>

    <div class="section z20">
        <img src="{{ URL::to('/') }}/assets/section2.jpg" alt="profile" id="sect2-img">
    </div>

    <div class="section z10">
        <div id="map"></div>
    </div>

    <script src="{{ URL::to('/') }}/vendors/jquery/jquery.js"></script>
    <script>
        const map = L.map('map').setView([51.505, -0.09], 13);
        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

    </script>
</body>

</html>