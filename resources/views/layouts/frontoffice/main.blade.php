<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles-responsive.css')}}" />

    <link rel="icon" href="{{ asset('assets/images/logo.svg') }}" sizes="any">
    <script src="https://kit.fontawesome.com/021511bd83.js" crossorigin="anonymous"></script>
  </head>
  <body>
    @include('layouts.frontoffice.header')
    @yield('content')

    @include('layouts.frontoffice.footer')
    <div
      id="login"
      class="dialog-container"
      aria-hidden="true"
    >
      <!-- 2. The dialog overlay -->
      <div class="dialog-overlay" data-a11y-dialog-hide></div>
      <!-- 3. The actual dialog -->
      <div class="dialog-content" role="document">
        <!-- 4. The close button -->
        <!-- <button type="button" data-a11y-dialog-hide aria-label="Close dialog">
          &times;
        </button> -->
        <!-- 5. The dialog title -->
        <!-- <h1 id="your-dialog-title-id">Your dialog title</h1> -->
        <!-- 6. Dialog content -->
        <div class="content">
            <button type="button" data-a11y-dialog-hide aria-label="Close dialog">
              <img src="{{ asset('assets/images/icon-times.svg') }}" alt="Close this dialog" />
            </button>
            <div class="dialog-content">
                <div class="advert">
                  <div>
                    <span class="white">Connectez-vous</span>
                    <span class="colored">et vivez pleinement l'expérience</span>
                    <span class="white">Ki</span><span class="colored">Part</span>
                  </div>
                </div>
                <div class="details">
                  @include("layouts.frontoffice.popup.Login")
                </div>
              </div>
        </div>
        
      </div>
    </div>
    <div
      id="register"
      class="dialog-container"
      aria-hidden="true"
    >

      <!-- 2. The dialog overlay -->
      <div class="dialog-overlay" data-a11y-dialog-hide></div>
      <!-- 3. The actual dialog -->
      <div class="dialog-content" role="document">
        <!-- 4. The close button -->
        <!-- <button type="button" data-a11y-dialog-hide aria-label="Close dialog">
          &times;
        </button> -->
        <!-- 5. The dialog title -->
        <!-- <h1 id="your-dialog-title-id">Your dialog title</h1> -->
        <!-- 6. Dialog content -->
        <div class="content">
            <button type="button" data-a11y-dialog-hide aria-label="Close dialog">
              <img src="{{ asset('assets/images/icon-times.svg') }}" alt="Close this dialog" />
            </button>
            <div class="dialog-content">
                <div class="advert">
                  <div>
                    <span class="white">Connectez-vous</span>
                    <span class="colored">et vivez pleinement l'expérience</span>
                    <span class="white">Ki</span><span class="colored">Part</span>
                  </div>
                </div>
                <div class="details">
                  <form>
                    <fieldset>
                      <div class="input">
                        <input type="text" name="name" id="name" placeholder="Noms & Prénoms" />
                      </div>
                      <div class="input">
                        <input type="text" name="email" id="email" placeholder="E-mail" />
                      </div>
                      <div class="input">
                        <input type="text" name="phone" id="phone" placeholder="Téléphone" />
                      </div>
                      <div class="input right">
                        <input type="password" name="password" id="password" placeholder="Mot de passe" />
                        <button type="button"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt="eye icon" /></button>
                      </div>
                    </fieldset>
                    <div class="actions">
                      <button type="submit">Créer un compte</button>
                      <div>En créeant votre compte vous acceptez nos <a href="#">conditions d'utilisation</a> et notre <a href="#">politique de confidentialité</a></div>
                    </div>
                  </form>
                </div>
              </div>
            <div>
        
      </div>
    </div>

    <div
      id="logout"
      class="dialog-container"
      aria-hidden="true"
    >

      <!-- 2. The dialog overlay -->
      <div class="dialog-overlay" data-a11y-dialog-hide></div>
      <!-- 3. The actual dialog -->
      <div class="dialog-content" role="document">
        <!-- 4. The close button -->
        <!-- <button type="button" data-a11y-dialog-hide aria-label="Close dialog">
          &times;
        </button> -->
        <!-- 5. The dialog title -->
        <!-- <h1 id="your-dialog-title-id">Your dialog title</h1> -->
        <!-- 6. Dialog content -->
        <div class="content dialog-content">

          <div class="details">

          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/function.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/a11y-dialog@7/dist/a11y-dialog.min.js"></script>
    <script type="module">
      import A11yDialog from 'https://cdn.jsdelivr.net/npm/a11y-dialog@7/dist/a11y-dialog.esm.min.js'

      function increaseNumberOfPassengers() {
        var numberOfPassengers = document.getElementById("number-of-passengers");
        numberOfPassengers.value = +numberOfPassengers.value + 1;
      }

      const containerLogin = document.querySelector('#login');
      const dialogLogin = new A11yDialog(containerLogin);
      dialogLogin.on('show', function (dialogEl, event) {
        console.log(dialogEl);
        console.log(event);
      });

      const containerLogout=document.querySelector('#logout');
      const dialogLogout = new A11yDialog(containerLogout);
      dialogLogout.on('show', function (dialogEl, event) {
        console.log(dialogEl);
        console.log(event);
      });

      const containerRegister = document.querySelector('#register');
      const dialogRegister = new A11yDialog(containerRegister);
      dialogRegister.on('show', function (dialogEl, event) {
        console.log(dialogEl);
        console.log(event);
      });
    </script>
   <script src="//code.tidio.co/lpidtvgl52oisxyfov3xpfbz8x82pu91.js" async></script>
  </body>
</html>
