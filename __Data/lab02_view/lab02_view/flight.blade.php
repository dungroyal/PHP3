<html>
<head>
    <title>PHP2-Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/flight">List flight</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="card">
        <div class="card-header">
          List flights
        </div>
        <div class="card-body">
            <table class="table">
              <thead>
                  <tr>
                    <th>Mã chuyến</th>
                    <th>Xuất phát</th>
                    <th>Điểm đến</th>
                    <th>Thời lượng</th>
                    <th></th>
                  </tr>
              </thead>
              <tbody>
            
              <tr>
                <td>01</td>
                <td>Tp.Hồ Chí Minh</td>
                <td>Đà Nẵng</td>
                <td>1h</td>
                <td><a href="#">List Custommer</a></td>
              </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          List customer - Chuyen bay: 01
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
                <tr>
                  <th>Mã khach</th>
                  <th>Ten khach</th>
                  <th></th>
                </tr>
            </thead>
            <tbody>
            <tr>
              <td>C001</td>
              <td>Tran Cong Mua</td>
              <td><a href="#">Xoa</a></td>
            </tr>
            <tr>
              <td>C002</td>
              <td>Tran Cong Mua</td>
              <td><a href="#">Xoa</a></td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
  
    </div>
  </div>
    
</div>
  
 
</body>
</html>