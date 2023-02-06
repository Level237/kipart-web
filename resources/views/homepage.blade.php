<html>
  <head>
    <title>KiPart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles-responsive.css')}}" />
  </head>
  <body>
    <header>
      <nav id="menu-primary">
        <div class="logo">
          <img src="{{asset('assets/images/logo.svg')}}" alt="logo">
        </div>
        <div id="menu-toggle-primary">
          <a class="open-menu-primary" href="#menu-primary">
            <img src="images/icon-hamburger-menu.svg" alt="Open this menu" />
          </a>
          <a class="close-menu-primary" href="#">
            <img src="{{ asset('assets/images/icon-times.svg')}}" alt="Close this menu" />
          </a>
        </div>
        <ul>
          <li>Vos réservations</li>
          <li><a href="#" data-a11y-dialog-show="login">S'identifier</a></li>
          <li><a href="#" data-a11y-dialog-show="register">Créer un compte</a></li>
          <li>En</li>
        </ul>
      </nav>
    </header>
    <main id="homepage">
      <section id="hero">
        <div class="content">
          <article>
            <form method="post" action="#">
              <div class="input select">
                <select>
                  <option value="aller-simple">Aller Simple</option>
                  <option value="aller-retour">Aller et Retour</option>
                </select>
              </div>
              <div class="input left">
                <img src="{{asset('assets/images/icon-departure.svg')}}" alt="departure icon" />
                <input type="text" placeholder="Douala" />
              </div>
              <div class="input left">
                <img src="{{asset('assets/images/icon-location.svg')}}" alt="location icon" />
                <input type="text" placeholder="Yaounde" />
              </div>
              <div class="group">
                <div class="input left">
                  <img src="{{asset('assets/images/icon-calendar.svg')}}" alt="calendar icon" />
                  <input type="date" />
                </div>
                <div class="input">
                  <button type="button">
                    <span>+</span>
                    Ajouter un retour
                  </button>
                </div>
              </div>
              <div class="group">
                <div>
                  <label>
                    <img src="{{asset('assets/images/icon-user.svg')}}" alt="user icon" class="colored"/>
                    Nombre de passager
                  </label>
                  <div class="input right">
                    <input type="number" placeholder="0" id="number-of-passengers"/>
                    <button type="button" class="no-bg" onclick="increaseNumberOfPassengers()">
                      <img src="{{asset('assets/images/icon-plus.svg')}}" alt="plus icon" />
                    </button>
                  </div>
                </div>
                <div>
                  <label>
                    <img src="{{asset('assets/images/icon-star.svg')}}" alt="icon start" class="colored"/> Classe
                  </label>
                  <select>
                    <option value="vip">VIP</option>
                    <option value="eco">ECO</option>
                  </select>
                </div>
              </div>
              <div class="actions">
                <button type="submit">CHERCHER</button>
              </div>
            </form>
          </article>
          <article>
            <div class="title">Salut !</div>
            <div class="subtitle">Où désirez-vous voyager ?</div>
          </article>
          <div class="overlay"></div>
        </div>
      </section>
      <section id="agencies">
        <div class="content">
          <!-- <div> -->
            <article>
              <h2>Toutes vos agences de voyages préférés sur une seule plateforme</h2>
              <p>
                Plus de 10 agences de voyage de confiance, afin que vous puissiez vous concentrer uniquement sur le voyage. </br>
                Trouvez les horaires, les prix, l'emplacement des gares routières, les services, les promotions et les bons plans.
              </p>
            </article>
            <article>
              <div class="agency-item 1">LOGO AGENCE</div>
              <div class="agency-item 2">LOGO AGENCE</div>
              <div class="agency-item 3">LOGO AGENCE</div>
              <div class="agency-item 4">LOGO AGENCE</div>
              <div class="agency-item 5">LOGO AGENCE</div>
              <div class="agency-item 6">LOGO AGENCE</div>
              <div class="agency-item 7">LOGO AGENCE</div>
              <div class="agency-item 8">LOGO AGENCE</div>
              <div class="agency-item 9">LOGO AGENCE</div>
            </article>
          <!-- </div> -->
        </div>
      </section>
      <section id="app">
        <div class="content">
          <article>
            <img src="{{ asset('assets/images/app.png') }}" alt="app section" />
          </article>
          <article>
            <h2>L'application tout-en-un des voyageurs</h2>
            <p>Télécharger l'application KiPART gratuitement pour bénéficier d'une expertise sur laquelle vous pouvez compter et voyagez en toute confiance</p>
            <div>
              <ul>
                <li><img src="{{ asset('assets/images/icon-info.svg') }}" alt="info icon"/> Assistance voyage</li>
                <li><img src="{{ asset('assets/images/icon-square.svg') }}" alt="square icon"/> Billets sur mobile</li>
                <li><img src="{{ asset('assets/images/icon-refresh.svg') }}" alt="refresh icon"/> Mise à jour et rappels</li>
              </ul>
              <ul>
                <li><img src="{{ asset('assets/images/play-store.png') }}" alt="play-store" /></li>
                <li><img src="{{ asset('assets/images/apple-store.svg') }}" alt="apple-store" /></li>
              </ul>
            </div>
          </article>
        </div>
      </section>
      <section id="newsletter">
        <div class="content">
          <h2>Vous souhaitez recevoir des remises exclusives et des mises à jour directement dans votre boite de réceptions?</h2>
          <hr/>
          <form method="POST" action="#">
            <div class="input">
              <img src="{{ asset('assets/images/icon-email.svg') }}" alt="email icon" />
              <input type="email" placeholder="Votre email" name="email" id="email" />
            </div>
            <button type="submit">Je m'enregistre</button>
          </form>
        </div>
      </section>
    </main>
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
            <img src="./images/logo-2.svg" alt="logo 2" />
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
                  <button type="button"><img src="images/icon-eye.svg" alt="eye icon" /></button>
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
                  <button type="button"><img src="images/icon-eye.svg" alt="eye icon" /></button>
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
