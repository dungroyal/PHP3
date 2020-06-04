<html>
<head>
    <title>PHP3 | Lab3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    form{
        width: 50%;
        margin: 0px auto;
        padding-top: 20px;
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
          <a class="nav-link" href="/create-flight">Tạo chuyến bay</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="container">
    <div class="row" style=" margin-top: 12px;">
      <div class="col-12">
        <div class="card">
        <div class="card-header">
            Thêm chuyến bay
        </div>
        
<form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-12 control-label" for="product_id">Điểm đi</label>
            <div class="col-md-12">
                <input id="product_id" name="namePro" placeholder="" class="form-control input-md"  type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-12 control-label" for="product_name">Điểm đến</label>
            <div class="col-md-12">
                <input id="product_name" name="codePro" placeholder="" class="form-control input-md"  type="text">

            </div>
        </div>

        <!-- Search input-->
        <div class="form-group">
            <label class="col-md-12 control-label" for="tutorial">Thời gian bay</label>
            <div class="col-md-12">
                <input id="tutorial" name="mota" placeholder="" class="form-control input-md" type="search">

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <input type="submit" value="Lưu lại" name="addnewProduct" class="btn btn-primary">
                <a href="index.php"><button class="btn btn-primary">Huỷ bỏ</button></a>
            </div>
        </div>

    </fieldset>
</form>
      </div>
    </div>
  </div>
    
</div>
  
 
</body>
</html>
