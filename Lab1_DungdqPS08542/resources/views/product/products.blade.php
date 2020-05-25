<html>
<head>
    <title>PHP3 | Lab1 | DungdqPS08542</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product">Sản phẩm</a>
        </li>
      </ul>
    </nav>

<div class="card">
  <div class="card-header">
    Danh sách sản phẩm
  </div>
  <div class="card-body">
      <table class=" table">
        <thead>
            <tr>
              <th>Image</th>
              <th>Product</th>
              <th>Code</th>
              <th>Available</th>
              <th>Price </th>
              <th>5 Star Rating</th>
            </tr>
        </thead>
        <tbody>
        <tr>
              <td>
                <img src='{{ asset('images') }}/hammer.png' width="50px">
              </td>
              <td><a href="product/1">Hammer</a> </td>
              <td>GDN-123</td>
              <td>20-12-2019</td>
              <td>$200</td>
              <td>3.4</td>
            </tr>
            <tr>
              <td>
                <img src='{{ asset('images') }}/saw.jpg' width="50px">
              </td>
              <td><a href="product/2">Saw</a> </td>
              <td>GDN-123</td>
              <td>20-12-2019</td>
              <td>$200</td>
              <td>3.4</td>
            </tr>
        </tbody>
    </table>

   
  </div>
</div>


</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


