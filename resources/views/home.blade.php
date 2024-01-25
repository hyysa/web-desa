<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Desa Pandanarum</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
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
    }

    .overlapping-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
    }

    .overlapping-content img {
      max-width: 20%; /* Adjust the width as needed */
      max-height: 20%; /* Adjust the height as needed */
      display: flex;
    }

    .overlapping-content h2 {
      margin-top: 10px;
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
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Lambang_Kabupaten_Blitar.webp/905px-Lambang_Kabupaten_Blitar.webp.png" class="d-block w-100 h-100" alt="Logo">
        <h2>DESA PANDANARUM</h2>
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
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/time.js') }}"></script>
</body>
</html>
