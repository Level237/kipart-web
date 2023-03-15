<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                    @include("layouts.frontoffice.popup.register")
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
      function decreaseNumberOfPassengers() {
        var numberOfPassengers = document.getElementById("number-of-passengers");



            if(numberOfPassengers.value == 0){
                numberOfPassengers.value = +numberOfPassengers.value - 1;
        }

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
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>
