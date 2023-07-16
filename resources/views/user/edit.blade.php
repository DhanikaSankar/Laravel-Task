@extends('layout.index')
@section('content')
@include('layout.header')

<div class="card" style="width:40%;margin:10px 450px;">
    <div class="card-header text-center mb-4">
        <h4>Edit Profile Details</h4>
    </div>
    @if($errors->any())
    {!! implode('', $errors->all('<div style="background: rgb(247, 174, 174); padding:10px;margin:5px;">:message</div>')) !!}
    @endif
    <form action="{{route('update')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{encrypt($user->id)}}">
        <div class="m-3">
            <label for="" class="form-label">User Name</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Enter your name">
        </div>
        <div class="m-3">
            <label for="" class="form-label">Mobile Number</label>
            <input type="number" name="mobile" value="{{$user->mobile}}" class="form-control" placeholder="Enter mobile number">
        </div>

        <div class="m-3">
            <label for="" class="form-label">Place</label>
            <input type="text" name="place" value="{{$user->place}}" class="form-control" placeholder="Enter your place">
        </div>

        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address">
        </div>

        {{-- <div class="m-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" value="{{$user->password}}"  class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
        </div> --}}

        <div class="text-center mb-4">
            <button type="submit" class="btn btn-warning">UPDATE</button>
        </div>
    </form>
</div>


@endsection
