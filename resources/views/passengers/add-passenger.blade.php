@extends('layouts.frontoffice.main')
@section('title')
Ajouter un passager
@endsection

@section('content')

<main id="passenger-data">
    <section id="breadcumb">
      <div class="content">
        <ul>
          <li>Choix du siège</li>
          <li><img src="{{ asset('assets/images/icon-arrow-right.svg') }}" alt="icon arrow" /></li>
          <li>Informations du passager</li>
          <li><img src="{{ asset('assets/images/icon-arrow-right.svg') }}" alt="icon arrow" /></li>
          <li>Révision et paiement</li>
        </ul>
      </div>
    </section>
    <section id="details">
      <div class="content">
        <article id="informations">
          <form action="{{ route('add-passenger') }}" method="post">
            @csrf
            <fieldset>
              <div class="input">
                <input type="text" name="name[]" id="name" placeholder="Noms & Prénoms" value="{{ $userCurrent['name'] }}">
              </div>
              <div class="input">
                <input type="text" name="cni[]" id="nic" placeholder="N CNI" />
              </div>
              <div class="input">
                <input type="text" name="telephone[]" id="phone" placeholder="Téléphone" value="{{ $userCurrent['phone_number'] }}" />
              </div>
            </fieldset>
            <div class="actions">

              <button type="submit" style="margin-top: 10px;">Ajouter</button>
            </div>
          </form>
        </article>
        <article id="travel">
          <div id="choosen">
            <div>départ choisi</div>
            <div class="infos">
              <div class="towns">{{ $myTravel['departure'] }} - {{ $myTravel['arrival'] }}</div>
              <div class="date-seats">
                <span class="date">{{ $myTravel['date'] }}</span>,
                <span class="number-of-seats">1 place</span>
              </div>
              <div class="agency">{{ $agency_name }}</div>
              <div class="hour">{{ $myTravel['hour'] }}</div>
              <div class="class">{{ $myTravel['classe'] }}</div>
            </div>
          </div>
          <div id="ticket">
            <div>
              <div>Tickets (1)</div>
              <div>{{ $myTravel['price'] }} FCFA</div>
            </div>
            <div>
              <div>Frais KiPART</div>
              <div>500 FCFA</div>
            </div>
            <div>
              <div>Net à payer</div>
              <div>{{ $myTravel['price'] + 500 }} FCFA</div>
            </div>
          </div>
          <div id="more">
            Les prix incluent les taxes et peuvent changer selon la disponibilité. Le prix sera finalisé une fois l'achat terminé. Tous les frais supplémentaires peuvent être examinés avant le paiement.
          </div>
        </article>
      </div>
    </section>
  </main>
@endsection
