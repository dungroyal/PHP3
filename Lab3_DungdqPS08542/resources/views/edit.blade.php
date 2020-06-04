@extends('layouts._layout')
@section('content')
<div class="card">
        <div class="card-header">
          Chỉnh sửa chuyến bay từ <strong>{{$flight->origin}}</strong> đến <strong>{{$flight->destination}}</strong>
        </div>
        <div class="card-body">
          <form method="post" action="/flight/update/{{$flight->id}}">
          @csrf
            <div class="form-group">
                <label for="name">Origin</label>
                <input type="text" class="form-control" value="{{$flight->origin}}" name="origin"/>
            </div>
            <div class="form-group">
                <label for="des">Destination</label>
                <input type="text" class="form-control" value="{{$flight->destination}}" name="destination"/>
            </div>
            <div class="form-group">
                <label for="dur">Duration</label>
                <input type="number" class="form-control" value="{{$flight->duration}}" name="duration"/>
                </div>
            <button type="submit" class="btn btn-block btn-danger">Lưu thây đổi</button>
            <a href="/flight" class="btn btn-block btn-danger">Quay lại</a>
          </form>
        </div><!--end card body-->
      </div><!--end card-->
@endsection
