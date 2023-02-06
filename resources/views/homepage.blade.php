@extends('layouts.frontoffice.main')
@section('title')
Kipart
@endsection

@section('content')
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

                  <select name="hours" id="">
                    <option value="">05:00</option>
                    <option value="">06:00</option>
                    <option value="">07:30</option>
                    <option value="">08:30</option>
                    <option value="">09:30</option>
                  </select>

              </div>
            </div>
            <div class="group">
              <div>
                <label>
                  <img src="{{asset('assets/images/icon-user.svg')}}" alt="user icon" class="colored"/>
                  Nombre de passager
                </label>
                <div class="input right">
                  <input type="number" placeholder="1" id="number-of-passengers"/>

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
@endsection
