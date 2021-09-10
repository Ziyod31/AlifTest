<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TEST PROJECT</title>
    
    <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">
</head>
<body>
 <div class="container">
  <header class="p-3 bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('index') }}" class="nav-link px-2 text-white"
            >Home</a></li>
            <li><a href="{{ route('contacts.index') }}" class="nav-link px-2 text-white">Contacts</a></li>
            <li><a href="{{ route('phones.index') }}" class="nav-link px-2 text-white">Phones</a></li>
            <li><a href="{{ route('emails.index') }}" class="nav-link px-2 text-white">Emails</a></li>
            <li><a href="{{ route('reset') }}" class="nav-link px-2 text-white" class="btn btn-outline-error">RESET</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" action="{{ route('search') }}">
            <input type="search" class="form-control form-control-dark me-2" placeholder="Search..." aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

        </div>
      </div>
    </header>
  </div>


  @include('layouts.errors')
  <main class="container">
    @yield('content')
  </main>

</body>
</html>