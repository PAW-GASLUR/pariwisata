<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Pariwisata Yogyakarta</title>
</head>

<body>
    @include('component.navbar')
    <div>
        {{-- <h1>WISATA</h1> --}}
        <div class="container" style="height: 2cm"></div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Wonderful Yogyakarta</h1>
                <p class="lead">Yogyakarta adalah destinasi wisata paling populer di Indonesia setelah Bali.
                    Apa yang membuat Jogja begitu istimewa sampai dikunjungi jutaan orang setiap tahun?
                    Temukan info wisata Jogja terbaik di sini.</p>
            </div>
        </div>

        <div class="col-lg-8 col-md-10 mx-auto">
            @if (count($data) > 0)
                @foreach ($data as $item)
                    <div class="card mb-3">
                        {{-- <img src="{{ Voyager::image($item->image) }}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h1 class="card-title">{{ $item->judul_wisata }}</h1>
                            <h4 class="card-title">{{ $item->alamat_wisata }}</h4>
                            <h6 class="card-title">{{ $item->info_wisata }}</h6>
                            {{-- <h5 class="card-title">{{ $item->jenis_wisata }}</h5> --}}
                        </div>
                    </div>
                @endforeach
            @else
                <p class="alert alert-danger">Berita tidak ditemukan</p>
            @endif
        </div>
        <div class="animate" id="home">
            <div class="isi">
                <div class="container atas">
                    <h1>Keistimewaan Tempat Wisata Di Yogyakarta</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <i class="glyphicon glyphicon-map-marker"></i>
                            <h3>STRATEGIC</h3>
                            <p class="text-justify"><strong>Yogyakarta </strong>adalah kota yang sangat strategis karena
                                banyak sekali
                                tempat wisata yang ada di kota ini. Kota pelajar satu ini memang selalu melekat di hati
                                pengunjungnya.
                                Bagaimana tidak? Jogja adalah kota dengan paket wisata lengkap baik wisata alam,
                                edukasi, kuliner,
                                belanja, semua dapat ditemukan. Karena itu, banyak sekali wisatawan yang tertarik dengan
                                kota ini.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <i class="glyphicon glyphicon-tree-conifer"></i>
                            <h3>CLIMATE</h3>
                            <p class="text-justify"><strong>Yogyakarta </strong>memiliki iklim yang panas ketika musim
                                kemarau. Secara
                                umum, rata-rata curah hujan tertinggi di Kota Yogyakarta yaitu sebanyak 692.50 mm3.
                                Kelembaban udara
                                rata-rata cukup tinggi, terendah terjadi pada bulan Agustus tahun 2019 sebesar 81
                                persen. Tahun 2019
                                rata-rata tekanan udara sebesar 995.66 mb dan suhu udara rata-rata 26,05oC.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <i class="glyphicon glyphicon-camera"></i>
                            <h3>EXOTIC</h3>
                            <p class="text-justify"><strong>Yogyakarta </strong>Merupakan kota yang eksotik dan
                                berbudaya. Pegunungan,
                                pantai-pantai, hamparan sawah yang hijau dan udara yang sejuk menghiasi keindahan kota
                                Jogja. Tidak
                                diherankan bila kota Jogja sangat terkenal dan merupakan salah satu tujuan utama para
                                wisatawan
                                mancanegara, untuk berlibur dan menghabiskan sisa waktu istirahatnya di Jogja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('component.footer')

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
