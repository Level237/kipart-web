@extends('layouts.frontoffice.main')
@section('title')
Connexion
@endsection

@section('content')

@if(Session::get("error"))
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
    <span class="close">&times;</span>
    <p style="text-align: center;color:white">{{ Session::get("error") }}</p>
    </div>

</div>
@endif
<main id="passenger-data">
    <section id="breadcumb">
      <div class="content">
       <h1 style="color: white;text-align:center">Connexion</h1>
      </div>
    </section>
    <section id="details">
      <div class="content">
        <article id="informations">
          <form action="{{ route('login') }}" method="post" style="max-width:900px;margin-top:2rem;">
            @csrf
            <fieldset>
              <div class="input">
                <input type="text" name="phone_number" id="username" placeholder="Téléphone"  />
              </div>
              <div class="input">
                <input type="password" name="password" id="password" placeholder="Mot de passe" />

              </div>

            </fieldset>
            <div class="actions" style="margin-top: 10px">

              <button type="submit">Connexion</button>
            </div>
          </form>
        </article>

      </div>
    </section>
  </main>
@endsection
