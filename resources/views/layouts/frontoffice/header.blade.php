<header>
    <nav id="menu-primary">
      <div class="logo">
        <img src="{{asset('assets/images/logo.svg')}}" alt="logo">
      </div>
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
            <li>Mes Tickets</li>
            <form method="POST" action="{{ route('logout') }}" id="logout">
                @csrf
            </form>

            <li><a href="" class="mega-menu" onclick="event.preventDefault(); document.getElementById('logout').submit();" title="Sign Out">
                Deconnexion
            </a></li>
        @else
        <li>Vos réservations</li>
        <li><a href="#" data-a11y-dialog-show="login">S'identifier</a></li>
        <li><a href="#" data-a11y-dialog-show="register">Créer un compte</a></li>
        @endif

        <li>En</li>
      </ul>
    </nav>
  </header>
