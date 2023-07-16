@extends('layout.index')
@section('content')
  @include('layout\header')
<div>
    {{-- <h3 style="padding: 20px;">Welcome {{Auth::user()->name}}</h3> --}}
</div>
<div class="d-flex justify-content-center">
    <div class="card text-center mt-5" style="width: 25rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        {{-- <h4>Personal Details</h4> --}}
        <div class="card-header">
            <h4>Profile Details</h4>
        </div>
        <div class="card-body">
        <h5 class="card-title">{{Auth::user()->name}}</h5>
        <p class="card-text">Email:  {{Auth::user()->email}}</p>
        <p class="card-text">Place:  {{Auth::user()->place}}</p>
        <p class="card-text">Mobile:  {{Auth::user()->mobile}}</p>
        {{-- <button type="submit" class="">EDIT</button> --}}
        <a href="{{route('edit',encrypt(Auth::user()->id))}}" class="btn btn-warning" style="padding: 5px 50px">EDIT</a>
        </div>
    </div>
</div>
@endsection
