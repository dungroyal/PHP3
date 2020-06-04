<html>
<head>
    <title>PHP3 | Lab3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
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
