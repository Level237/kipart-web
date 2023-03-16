<header>
    <nav id="menu-primary">
        <a href="{{ route('homepage') }}">
            <div class="logo">
                <img src="{{asset('assets/images/logo.svg')}}" alt="logo">
              </div>
        </a>

      <div id="menu-toggle-primary">
        <a class="open-menu-primary" href="#menu-primary">
          <img src="{{ asset('assets/images/icon-hamburger-menu.svg') }}" alt="Open this menu" />
        </a>
        <a class="close-menu-primary" href="#">
          <img src="{{ asset('assets/images/icon-times.svg')}}" alt="Close this menu" />
        </a>
      </div>
      <ul>

        @if(!isset($userCurrent['errors']))
            <li>Tableau de bord</li>
            <li> <a href={{route('list')}}> Mes Tickets</a></li>
            <form method="POST" action="{{ route('logout') }}" id="logout">
                @csrf
            </form>

            <li><a href="" class="mega-menu" onclick="event.preventDefault(); document.getElementById('logout').submit();" title="Sign Out">
                Deconnexion
            </a></li>
        @else
        <li>{{ __("My tickets")}}</li>
        <li><a href="#" data-a11y-dialog-show="login">S'identifier</a></li>
        <li><a href="#" data-a11y-dialog-show="register">Créer un compte</a></li>
        @endif

        <li style="margin-top:-7px">
         <!-- Dropdown -->
         <div class="dropdown">
          <a href="#" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,0">
              <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="assets/svg/{{ App::getLocale()}}.svg" style="border-radius:10px" alt="..." width="12" height="12"></span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end">
              <li>
                  <h6 class="dropdown-header text-uppercase">Selectionnez une langue</h6>
              </li>
              <li>
                  <a href="lang/en" class="dropdown-item active">
                      <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="{{asset('assets/svg/en.svg')}}" style="border-radius:9px" alt="English" width="18" height="18"></span><span class="text-truncate ms-2">Anglais</span>
                  </a>
              </li>

              <li>
                  <a href="lang/fr" class="dropdown-item">
                      <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="{{asset('assets/svg/fr.svg')}}" alt="Français" style="border-radius:9px" width="18" height="18"></span><span class="text-truncate ms-2">Français</span>
                  </a>
              </li>


          </ul>
      </div>
    </li>
      </ul>
    </nav>
  </header>
