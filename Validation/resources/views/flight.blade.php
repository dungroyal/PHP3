@extends('layouts._layout')
@section('content')
<div class="card">
        <div class="card-header">
          Danh sách chuyến bay
        </div>
        <div class="card-body">
            <table class="table">
            <thead>
                  <tr>
                    <th>Mã chuyến</th>
                    <th>Xuất phát</th>
                    <th>Điểm đến</th>
                    <th>Thời lượng</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
           @foreach($flights as $flight)
              <tr>
                <td>{{$flight->id}}</td>
                <td>{{$flight->origin}}</td>
                <td>{{$flight->destination}}</td>
                <td>{{$flight->duration}}</td>
                <td>
                  <a href="/flight/edit/{{$flight->id}}" class="btn btn-primary">Chỉnh sửa</a>
                  <a href="/flight/del/{{$flight->id}}" class="btn btn-danger">Xóa</a>
                </td>
              </tr>
            @endforeach
              </tbody>
            </table>
        </div>
      </div><!--end card-->
@endsection
