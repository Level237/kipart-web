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
          <div class="title">{{ __("Hello")}}

                {{ $userCurrent['name'] ?? '' }} !</div>
          <div class="subtitle">{{ __("Where do you want to travel?")}}</div>
        </article>

        @if(Session::get("error"))
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <p style="text-align: center;color:white">{{ Session::get("error") }}</p>
            </div>

        </div>
        @endif


        <div class="overlay"></div>
      </div>
    </section>
    <section id="agencies">
      <div class="content">
        <!-- <div> -->
          <article>
            <h2>{{ __("All your favorite travel agencies on one platform")}}</h2>
            <p>
                {{ __("More than 10 trusted travel agencies")}}, {{ __("so you can just focus on the trip")}} </br>
                {{ __("Find timetables, prices, location of bus stations, services, promotions and tips.")}}
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
          <h2>{{ __("The all-in-one app for travelers")}}</h2>
          <p>{{ __("Download the KiPART app for free to benefit from expertise you can rely on and travel with confidence")}}</p>
          <div>
            <ul>
              <li><img src="{{ asset('assets/images/icon-info.svg') }}" alt="info icon"/> {{ __("Travel assistance")}}</li>
              <li><img src="{{ asset('assets/images/icon-square.svg') }}" alt="square icon"/> {{ __("Mobile tickets")}}</li>
              <li><img src="{{ asset('assets/images/icon-refresh.svg') }}" alt="refresh icon"/> {{ __("Updates and Reminders")}}</li>
            </ul>
            <ul>
              <li><a href="https://play.google.com/store/apps/details?id=com.ki_part" target="_blank"><img src="{{ asset('assets/images/play-store.png') }}" alt="play-store" /></a></li>
              <li><a href="https://apps.apple.com/us/app/kipart/id1671331889"><img src="{{ asset('assets/images/apple-store.svg') }}" alt="apple-store" /></a></li>
            </ul>
          </div>
        </article>
      </div>
    </section>
    <section id="newsletter">
        <div class="content">
          <header>
            <div class="section-title">Newsletter</div>
            <h2>{{ __("Do you want to receive exclusive discounts and updates straight to your inbox?")}}</h2>
          </header>
          <hr/>
          <form method="POST" action="#">
            <div class="input">
              <img src="{{asset('assets/images/icon-email.svg')}}" alt="email icon" />
              <input type="email" placeholder="Votre email" name="email" id="email" />
            </div>
            <button type="submit">{{ __("I register")}}</button>
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



