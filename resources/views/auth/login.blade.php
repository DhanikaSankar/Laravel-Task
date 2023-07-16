@extends('layout.index')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="card" style="width: 35rem;margin-top:100px;">
            <h4 class="text-center mt-4"><b>LOGIN</b></h4>

            @if (Session::has('error'))
                <div role="alert" style="background: rgb(248, 159, 159);padding:10px;border-radius:3%">
                    {{Session::get('error')}}
                </div>
            @endif
            <form action="{{route('user.login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                </div>

                <div class="text-center mb-4">
                    <button type="submit" class="btn btn-warning mb-2">LOG IN</button><br>
                    <h6>New Member? <a href="{{route('register')}}">Register</a></h6>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
