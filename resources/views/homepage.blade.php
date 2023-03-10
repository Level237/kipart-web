@extends('layouts.frontoffice.main')
@section('title')
KiPART
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

@section('content')
<main id="homepage">
    <section id="hero">
      <div class="content">
        <article>
          @include('layouts.frontoffice.components.search')
        </article>
        <article>
          <div class="title">Salut

                {{ $userCurrent['name'] ?? '' }} !</div>
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
            <div class="agency-item 1"><img src="{{ asset('admin/assets/images/buca.jpg') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
            <div class="agency-item 2"><img src="{{ asset('assets/images/agences/generalVoyages.jpeg') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
            <div class="agency-item 3"><img src="{{ asset('assets/images/agences/global.jpeg') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
            <div class="agency-item 4"><img src="{{ asset('assets/images/agences/mentravel.jpeg') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
            <div class="agency-item 5"><img src="{{ asset('assets/images/agences/touristiques.jpeg') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
            <div class="agency-item 6"><img src="{{ asset('assets/images/agences/united.jpg') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
            <div class="agency-item 7"><img src="{{ asset('assets/images/agences/fitness.png') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
            <div class="agency-item 8"><img src="{{ asset('assets/images/agences/Inter-City_1960s.webp') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
            <div class="agency-item 9"><img src="{{ asset('assets/images/agences/camrail.png') }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;"></div>
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
              <li><a href="https://play.google.com/store/apps/details?id=com.ki_part" target="_blank"><img src="{{ asset('assets/images/play-store.png') }}" alt="play-store" /></a></li>
              <li><img src="{{ asset('assets/images/apple-store.svg') }}" alt="apple-store" /></li>
            </ul>
          </div>
        </article>
      </div>
    </section>
    <section id="newsletter">
        <div class="content">
          <header>
            <div class="section-title">Newsletter</div>
            <h2>Vous souhaitez recevoir des remises exclusives et des mises à jour directement dans votre boite de réceptions?</h2>
          </header>
          <hr/>
          <form method="POST" action="#">
            <div class="input">
              <img src="{{asset('assets/images/icon-email.svg')}}" alt="email icon" />
              <input type="email" placeholder="Votre email" name="email" id="email" />
            </div>
            <button type="submit">Je m'enregistre</button>
          </form>
        </div>
      </section>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  <script type="text/javascript">
    var path = "{{ route('list.departure') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
            console.log(data);
                return process(data);
            });
        }
    });
</script>

@endsection



