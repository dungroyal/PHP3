@extends('layouts._layout')
@section('content')
<div class="card">
        <div class="card-header">
          Thêm chuyến bay
        </div>
        <div class="card-body">
          <form method="post" action="/flight/store">
          @csrf
            <div class="form-group">
                <label for="name">Origin</label>
                <input type="text" class="form-control" name="origin"/>
            </div>
            <div class="form-group">
                <label for="des">Destination</label>
                <input type="text" class="form-control" name="destination"/>
            </div>
            <div class="form-group">
                <label for="dur">Duration</label>
                <input type="number" class="form-control" name="duration"/>
                </div>
            <button type="submit" class="btn btn-block btn-danger">Create Flight</button>
          </form>
        </div><!--end card body-->
      </div><!--end card-->
@endsection
