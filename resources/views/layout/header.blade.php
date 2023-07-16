
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <h4 class="text-light m-2">Personal App</h4>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                </ul>
            </div>
            <form action="{{route('register')}}" method="GET" style="margin-right: 20px;">
                @csrf
                <button class="btn btn-warning btn-sm" >LOG OUT</button>
            </form>
        </nav>
    </div>
