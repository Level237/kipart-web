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


    <form action="{{route('Password')}}", method="post" >
        @csrf
        <div class="title">Entrez votre Nouveau mot de passe</div>

        <div class="input">
          <input type="text" name="newPassword"  placeholder= "Entrez votre nouveau mot de passe" />
          <button type="submit">Envoyer</button>
        </div>

    </form>


  </body>
</html>
