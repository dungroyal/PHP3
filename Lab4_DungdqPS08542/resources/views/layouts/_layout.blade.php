<html>
<head>
    <title>PHP3 | Lab4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  
</head>

<style>
  .carousel-item img{
      width : 100%;
  }
</style>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/flight">Danh sách chuyến bay</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/flight/create">Thêm chuyến bay</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login" style="color: #ffffff;font-weight: bold;">Login</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="container">
      
          @section('content')
              This is the master content.
          @show
          
    </div>
  </body>
</html>
