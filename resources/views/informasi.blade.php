<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Pariwisata Yogyakarta</title>
  </head>
  <body>
    @include('component.navbar')
    <div>
        <h1>INFORMASI</h1>
        <div class="col-lg-8 col-md-10 mx-auto">
          @if (count($data) > 0)
              @foreach ($data as $item)
                  <div class="card mb-3">
                      
                      <div class="card-body">
                          <h1 class="card-title">{{ $item->judul_info }}</h1>
                          <h4 class="card-title">{{ $item->info }}</h4>
                          <h6 class="card-title">{{ $item->tgl_info }}</h6>
                          {{-- <img src="{{ Voyager::image($item->gambar_info) }}" class="card-img-top" alt="..."> --}}
                      </div>
                  </div>
              @endforeach
          @else
              <p class="alert alert-danger">Berita tidak ditemukan</p>
          @endif
      </div>
    </div>
    @include('component.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>