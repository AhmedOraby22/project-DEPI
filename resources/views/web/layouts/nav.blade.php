<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('web_asset/public/assets/img/gallery/logo.png')}}" width="118" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{route('about')}}">About Us</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{route('home')}}#departments">Departments</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#">F&Q</a></li>
            </ul>
              @if(Auth::id())
                <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{route('web.profile.show',\Illuminate\Support\Facades\Auth::id())}}">Profile</a>
                  <a class="btn btn-sm btn-outline-danger rounded-pill order-1 order-lg-0 ms-lg-4" href="{{route('logout')}}">Log out</a>
              @else
                <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{route('login')}}">Sign In</a>
              @endif
          </div>
        </div>
      </nav>