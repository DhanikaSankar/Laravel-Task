@extends('layout.index')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="card" style="width: 35rem;margin-top:100px;">
            <h4 class="text-center mt-4"><b>REGISTER</b></h4>
            @if($errors->any())
                {!! implode('', $errors->all('<div style="background: rgb(247, 174, 174); padding:10px;">:message</div>')) !!}
            @endif

            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>

            @endif
            <form action="{{route('user.register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name')}}"

                    placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mobile Number</label>
                    <input type="number" name="mobile" class="form-control"  value="{{ old('mobile')}}" placeholder="Enter mobile number">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Place</label>
                    <input type="text" name="place" class="form-control"  value="{{ old('place')}}" placeholder="Enter your place">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control"  value="{{ old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control"  value="{{ old('password')}}" id="exampleInputPassword1" placeholder="Enter your password">
                </div>

                <div class="text-center mb-4">
                    <button type="submit" class="btn btn-warning mb-4">SIGN UP</button><br>
                    <h6>Already have an account? <a href="{{route('login')}}" >Sign In</a></h6>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
