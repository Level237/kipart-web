
@extends('layouts.frontoffice.main')
@section('title')
Choisissez votre Voyage
@endsection

@section('content')
<main id="resume">
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
        <div>
            @foreach ($currentPassengers as $passenger)
                <div id="coords">
                    <div>
                    <div>Coordonnées du passager</div>
                    <div>
                        <a href="#">
                        <img src="{{ asset('assets/images/icon-edit.svg') }}" alt="icon edit" />
                        Modifier
                        </a>
                    </div>
                    </div>
                    <div>
                    <div>M. {{ $passenger['name'] }}</div>
                    <div>CNI: <span>{{ $passenger['cni'] }}</span></div>
                    <div>Tél.: <span>{{ $passenger['telephone'] }}</span></div>
                    </div>
                </div>
            @endforeach

          <div id="choosen">
            <div>
              <div>départ choisi</div>
              <div>
                <a href="#">
                  <img src="{{ asset('assets/images/icon-edit.svg') }}" alt="icon edit" />
                  Modifier
                </a>
              </div>
            </div>
            <div class="infos">
              <div class="towns">{{ $travels['departure'] }} - {{ $travels['arrival'] }}</div>
              <div class="date-seats">
                <span class="date">{{ $travels['date'] }}</span>,
                <span class="number-of-seats">1 place</span>
              </div>
              <div class="agency">{{ $agency_name }}</div>
              <div class="hour">{{ $travels['hour'] }}</div>
              <div class="class">{{ $travels['classe'] }}</div>
            </div>
          </div>
          <div id="ticket">
            <div>
              <div>Tickets (1)</div>
              <div>{{ $travels['price'] }} FCFA</div>
            </div>
            <div>
              <div>Frais KiPART</div>
              <div>500 FCFA</div>
            </div>
            <div>
              <div>Net à payer</div>
              <div>{{ $travels['price'] + 500 }} FCFA</div>
            </div>
          </div>
          <div id="reduction">
            <div>
              Appliquer une reduction (optionnel)
            </div>
            <div>
              <form>
                <div class="input">
                  <input type="text" name="code" id="code" placeholder="Code de réduction" />
                </div>
                <div class="actions">
                  <button type="submit">Appliquer</button>
                </div>
              </form>
            </div>
          </div>
          <div id="method-payment">
            <div>
              Méthode de paiement
            </div>
            <div>
              <div>
                <input type="radio" name="method-payment" value="om" />
                <img src="" alt="icon om" />
              </div>
              <div>
                <input type="radio" name="method-payment" value="momo" />
                <img src="" alt="icon momo" />
              </div>
              <div>
                <input type="radio" name="method-payment" value="visa-mastercard" />
                <img src="" alt="icon visa mastercard" />
              </div>
              <div>
                <input type="radio" name="method-payment" value="paypal" />
                <img src="" alt="icon paypal" />
              </div>
            </div>
          </div>
          <div id="actions">
            <button type="button">Procéder au paiement</button>
            <p>
              Les prix incluent les taxes et peuvent changer selon la disponibilité. Le prix sera finalisé une fois l'achat terminé. Tous les frais supplémentaires peuvent être examinés avant le paiement.
            </p>
          </div>
        </div>
        <div class="advert">
          ESPACE ENCART PUB
        </div>
      </div>
    </section>
  </main>

  @endsection
