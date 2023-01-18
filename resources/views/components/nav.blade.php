
  <nav class="navbar navbar-expand-lg navbar-light bg-light bg-navbar">
    <div class="container-fluid">
        <a class="navbar-brand affiliate" 
        href="{{route ('inicio')}}">Affiliate.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" 
                    href="{{route ('inicio')}}">{{__('Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('Quiénes somos')}} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">{{__('Ubicación')}} </a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Categorías')}} </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('category.ads',$category)}}">{{__($category->name)}}</a></li>  
                      @endforeach
                  </ul>

              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route ('ads.create')}}"> {{__('¡Sube tu anuncio!')}}</a>
              </li>
              
              <div class="container-fluid d-flex justify-content-end divWidth">
              @guest
              @if (Route::has('login'))
              <li class="nav-item otraclase">
                  <a class="nav-link" href="{{route('login')}}"> <span>{{__('Entrar')}} </span>
                  </a>
              </li>
              @endif
          
              @if (Route::has('register'))
              <li class="nav-item otraclase">
                  <a class="nav-link" href="{{route('register')}}">
                      <span> {{__('Registrar')}} </span>
                  </a>
              </li>
              @endif
          
              @else
              <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if (Auth::user()->is_revisor)
              <li>
                <a class="dropdown-item" href="{{ route('revisor.home') }}">
                  Revisor
                  <span class="badge rounded-pill bg-danger">
                    {{\App\Models\Ad::ToBeRevisionedCount()}}
                  </span>
                </a>
              </li>
              @endif
              <li>
                <form id="logoutForm" action="{{route('logout')}}" method="POST">
                  @csrf
                </form>
                <a id="logoutBtn" class="dropdown-item" href="#">{{__('Salir')}}</a>
              </li>
            </ul>
          </li>
             @endguest
             <li class='nav-item'>
              <x-locale lang="en" country="gb" />
             </li>
          
             <li class='nav-item'>
             <x-locale lang="it" country="it" />
             </li>
          
             <li class='nav-item'>
             <x-locale lang="es" country="es" />
             </li>
                
            </ul> 
                   
        </div>
        
    </div>
    <form action="{{route('search')}}" method="GET" class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search " aria-label="Search"> 
      <i class="bi bi-search" type="submit"></i>
    </form> 
</div> 

 
</nav>