<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles-responsive.css')}}" />
    <link rel="icon" href="{{ asset('assets/images/logo.svg') }}" sizes="any">
    <script src="https://kit.fontawesome.com/021511bd83.js" crossorigin="anonymous"></script>
    <title>Verifier votre numero de telephone</title>
    <style>
        body{
  background:#eee;
}

.bgWhite{
  background:white;
  box-shadow:0px 3px 6px 0px #cacaca;
}

.title{
  font-weight:300;
  margin-top:20px;
  font-size:18px
}

.customBtn{
  border-radius:0px;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 90px;
  padding-right: 90px;
  background: #e7ab05;
  border: none;
}

form input{
  display:inline-block;

  text-align:center;
}
    </style>
</head>
<body>
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


            <li><a href="#" data-a11y-dialog-show="login">S'identifier</a></li>
            <li><a href="#" data-a11y-dialog-show="register">Créer un compte</a></li>



          </ul>
        </nav>
      </header>
      @if(Session::get("error"))
      <div class="alert alert-danger">
          {{ Session::get('error') }}
      </div>
  @endif
    <div class="container mb-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4 text-center">
              <div class="row">
                <div class="col-sm-12 mt-5 bgWhite">
                  <div class="title">

                  </div>


                    <form action="{{route("newPassword")}}" method="get" class="mt-5">
                        @csrf
                        <div class="title">Entrez votre Nouveau mot de passe</div>

                        <div class="input mt-2">
                          <input type="text" name="password" class="form-control"  placeholder= "Nouveau mot de passe" required />

                        </div>
                        <div class="input mt-3">
                            <input type="text" name="password_confirmation" class="form-control"  placeholder= "confirmez votre mot de passe" required/>

                          </div>
                        <hr class="mt-4">
                        <button type="submit" class='btn-block mt-4 mb-4 customBtn' >Soumettre</button>
                    </form>



                </div>
              </div>
            </div>
        </div>
      </div>
      @include('layouts.frontoffice.footer')
      <script>
        let digitValidate = function(ele){
  console.log(ele.value);
  ele.value = ele.value.replace(/[^0-9]/g,'');
}

let tabChange = function(val){
    let ele = document.querySelectorAll('input');
    if(ele[val-1].value != ''){
      ele[val].focus()
    }else if(ele[val-1].value == ''){
      ele[val-2].focus()
    }
 }


      </script>
</body>
</html>






























