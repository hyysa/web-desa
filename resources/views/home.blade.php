<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Desa Pandanarum</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
  <style>
    body{
      font-family: 'Noto Sans KR', sans-serif;
    }
    /* Ensure navbar items display inline within the navbar */
    .navbar-text {
      display: inline-block;
    }

    /* Define the blue 900 background color */
    .bg-blue-900 {
      background-color: #07244f;
    }

    .overlapping-image {
      position: relative;
      height: 450px; /* Adjust the height as needed */
      overflow: hidden;
      -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
      filter: grayscale(25%);
    }

    .overlapping-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      gap:20px;
    }

    .overlapping-content img {
      max-width: 20%; /* Adjust the width as needed */
      max-height: 20%; /* Adjust the height as needed */
      display: block;

    }

    .overlapping-content h2 {
      /* margin-top: 10px; */
    }
    

  </style>
</head>
<body>
  <div class="main-container">
    <nav class="navbar fixed-top bg-blue-900">
      <div class="container-fluid">
        <span id="dateTime" class="navbar-text text-white"></span>
        <button type="button" class="btn btn-outline-light" id="realTime"></button>
      </div>
    </nav>

    <!-- Add a container to control the padding -->
    <div class="container-fluid overlapping-image p-0">
      <div class="overlapping-content">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Lambang_Kabupaten_Blitar.webp/905px-Lambang_Kabupaten_Blitar.webp.png" class="" alt="Logo">
        <div class="wrap">
          <h2>DESA PANDANARUM</h2>
          <h4>KABUPATEN BLITAR</h4>
        </div>
      </div>
      <img src="https://www.desawisataterong.com/images/image/Sales%20Mission_2022/desa-wisata-kreatif-terong-belitung-11.jpg" class="img-fluid" alt="...">
    </div>

    <nav class="navbar navbar-expand-lg bg-blue-900 text-white">
      <div class="container-fluid">
        <a class="navbar-brand text-white active" href="/"><i class="fas fa-home"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sejarah</a></li>
                <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="#">Peta</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sejarah</a></li>
                <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="#">Peta</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <footer class="bg-blue-900 text-white text-center py-3 fixed-bottom">
    <div class="container">
      <p>&copy; 2024 Desa Pandanarum. All rights reserved.</p>
    </div>
  </footer>
  
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/time.js') }}"></script>
</body>
</html>