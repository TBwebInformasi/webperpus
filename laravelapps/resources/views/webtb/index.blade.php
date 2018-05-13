<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>halaman pencarian</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('awal/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('awal/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('awal/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('awal/css/landing-page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('awal/css/nav.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <!-- <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">aku loo</a>
        <a class="btn btn-primary" href="#">Sign In</a>
      </div>
    </nav> -->
    <nav>
    <ul>
        <li><a href="alamatnya">Cari Buku</a></li>
        <li><a href="{{ url('/coba2')}}">List Buku</a>
            <ul>
            </ul>
        </li>
        <li><a href="alamatnya" onClick="return confirm ('Yakin?')">Home</a></li>
    </ul>
</nav>

    <!-- Masthead -->
    <header class=" text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">

          <div class="col-xl-9 mx-auto">
            <!--<h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>-->
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Buku yang ingin di cari">
                </div>
                <div class="col-12 col-md-3">
                  <a href="/coba2" class="btn btn-block btn-lg btn-primary">pencarian</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>


    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Novel</h3>
              <p class="lead mb-0"> karangan prosa yang panjang mengandung rangkaian cerita kehidupan seseorang dengan orang di sekelilingnya dengan menonjolkan watak dan sifat setiap pelaku</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Jurnal</h3>
              <p class="lead mb-0">artikel yang disusun untuk memberikan wawasan tentang teori atau penerarapan ilmu</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Skripsi</h3>
              <p class="lead mb-0">istilah yang digunakan di Indonesia untuk mengilustrasikan suatu karya tulis ilmiah</p>
            </div>
          </div>
        </div>
      </div>
    </section>

   

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('awal/vendor/jquery/jquery.min.js')}}"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  </body>

</html>
