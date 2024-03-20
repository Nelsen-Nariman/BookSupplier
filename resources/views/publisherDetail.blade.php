<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"/>

</head>
<body>

    <div class="upperNavbar">
        <h1>Giant Book Supplier</h1>
    </div>

    
    <nav class="navbar navbar-expand-lg">
            <div class="navbar">
            <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active text-primary" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('readCategory', ['id' => 1]) }}">Psychology</a></li>
                        <li><a class="dropdown-item" href="{{ route('readCategory', ['id' => 2]) }}">Computer</a></li>
                        <li><a class="dropdown-item" href="{{ route('readCategory', ['id' => 3]) }}">Biography</a></li>
                        <li><a class="dropdown-item" href="{{ route('readCategory', ['id' => 4]) }}">Astronomy</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary" href="{{ route('readPublisher') }}">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{ route('readContact') }}">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="bg-secondary p-2">
            <h5 class="text-light fw-normal">
                {{ $publisher->name }} <br>
                Address - {{ $publisher->address }} <br>
                Phone - {{ $publisher->phone }} <br>
                Email - {{ $publisher->email }}
            </h5>
            
        </div>

        {{-- <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div> --}}
        <div class="pemisah"></div>

        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
        @foreach ($books as $book)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ $book->image }}" class="card-img-top" id="displayImage" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $book->title }}</h5>
                  <p class="card-text">by <br> {{ $book->author }}</p>
                  <a href="{{ route('bookDetail', $book->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
          </div>
        @endforeach
            </div>
          </div>
          
          <div class="pemisah"></div>

          <div class="bg-primary" id="footer">
              <h6 class="text-light fw-normal">© Happy Book Store 2022</h6>
          </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>