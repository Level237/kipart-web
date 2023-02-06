<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles-responsive.css')}}" />
    <link rel="icon" href="{{ asset('assets/images/logo.svg') }}" sizes="any">
  </head>
  <body>
    @include('layouts.frontoffice.header')

    <footer>
      <article>
        <div class="content">
          <div>
            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
          </div>
          <div>
            <ul>
              <li>Pret à partir</li>
              <li>Vos réservations</li>
              <li>Créer un compte</li>
              <li>Obtenir l'application</li>
            </ul>
          </div>
          <div>
            <ul>
              <li>Dans le bureau</li>
              <li>À propos de nous</li>
              <li>Carrières</li>
              <li>Devenir un partenaire</li>
            </ul>
          </div>
          <div>
            <div>Besoin de notre aide?</div>
            <div>
              <a href="#">Centre d'aide</a>
            </div>
          </div>
          <div>
            <div>Suivez-nous</div>
            <ul>
              <li><a href="#"><img src="{{ asset('assets/images/linkedin.svg') }}" alt="linkedin"/></a></li>
              <li><a href="#"></a><img src="{{ asset('assets/images/facebook.svg') }}" alt="facebook"/></a></li>
              <li><a href="#"></a><img src="{{ asset('assets/images/instagram.svg') }}" alt="instagram"/></a></li>
            </ul>
          </div>
        </div>
      </article>
      <article>
        <div class="content">
          <div>
            <img src="{{ asset('assets/images/logo-2.svg') }}" alt="logo 2" />
          </div>
          <div>
            <a href="#">Conditions d'utilisation</a>
          </div>
          <div>
            <a href="#">Politique de confidentialité</a>
          </div>
          <div>
            <a href="#"><img src="{{ asset('assets/images/play-store.png') }}" /></a>
            <a href="#"><img src="{{ asset('assets/images/apple-store.svg') }}" /></a>
          </div>
        </div>
      </article>
    </footer>

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
        <div class="content dialog-content">
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
                <div class="title">Profitez de réservations et de remboursements plus rapides ainsi que les réductions</div>

                <div class="input">
                  <input type="text" name="username" id="username" placeholder="Téléphone ou e-mail" />
                </div>
                <div class="input right">
                  <input type="password" name="password" id="password" placeholder="Mot de passe" />
                  <button type="button"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt="eye icon" /></button>
                </div>
                <div class="group">
                  <div><a href="#">Mot de passe oublié?</a></div>
                  <div>
                    <input type="checkbox" />
                    Se souvenir de moi
                  </div>
                </div>
              </fieldset>
              <div class="actions">
                <button type="submit">CONNEXION</button>
                <div>Vous n'avez pas encore de compte ?</div>
                <div><a href="#">Créer un compte</a></div>
              </div>
            </form>
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
        <div class="content dialog-content">
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
      </div>
    </div>

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

      const containerRegister = document.querySelector('#register');
      const dialogRegister = new A11yDialog(containerRegister);
      dialogRegister.on('show', function (dialogEl, event) {
        console.log(dialogEl);
        console.log(event);
      });
    </script>
  </body>
</html>
