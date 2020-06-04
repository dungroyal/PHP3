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
                @if ($errors->has('origin'))
                  * {{$errors->First('origin')}}
                @endif
            </div>
            <div class="form-group">
                <label for="des">Destination</label>
                <input type="text" class="form-control" name="destination"/> 
                @if ($errors->has('destination'))
                * {{$errors->First('destination')}}
                @endif
            </div>
            <div class="form-group">
                <label for="dur">Duration</label>
                <input type="number" class="form-control" name="duration"/>
                @if ($errors->has('duration'))
                * {{$errors->First('duration')}}
                @endif
                </div>
            <button type="submit" class="btn btn-block btn-danger">Create Flight</button>
          </form>
        </div><!--end card body-->
        {{-- @if (count($errors->all()))
        <div class="card-footer">
          <ul>
            @foreach ($errors->all() as $err)
              <li>{{$err}}</li>
            @endforeach
          </ul>
        </div>
        @endif --}}
      </div><!--end card-->
@endsection
