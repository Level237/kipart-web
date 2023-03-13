@extends('layouts.frontoffice.main')
@section('title')
Choisissez votre Voyage
@endsection

@section('content')
    <main id="departures">
      <section id="search">
        <div class="content">
          <form method="post">
            <div class="input left">
              <img src="{{ asset('assets/images/icon-departure.svg') }}" alt="departure icon" />
              <input type="text" placeholder="Douala" />
            </div>
            <div class="input left">
              <img src="{{ asset('assets/images/icon-location.svg') }}" alt="location icon" />
              <input type="text" placeholder="Yaounde" />
            </div>
            <div class="group">
              <div class="input left">
                <img src="{{ asset('assets/images/icon-calendar.svg') }}" alt="calendar icon" />
                <input type="date" />
              </div>
              <div class="input">
                <button type="button">
                  <!-- <span>+</span> -->
                  <img src="{{ asset('assets/images/icon-plus.svg') }}" alt="plus icon" />
                  Ajouter un retour
                </button>
              </div>
            </div>
            <div class="group">
              <div>
                <div class="input right">
                  <input type="number" placeholder="0" id="number-of-passengers"/>
                  <button type="button" class="no-bg" onclick="increaseNumberOfPassengers()">
                    <img src="images/icon-plus.svg" alt="plus icon" />
                  </button>
                </div>
              </div>
              <div>
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
        </div>
      </section>
      <section id="details">
        <div class="content">
          <div class="">

            <hr />
            <div id="all-departures">
              <header>
                <h6>Tous les départs</h6>
                <div>
                  <span>Trié par</span>
                  <select>
                    <option value="">Heure de départ</option>
                    <option value="">Heure d'arrivée</option>
                  </select>
                </div>
              </header>
              <div class="items">
                @foreach ($datas as $travel)

                <form method="get" action="{{ route('goto-passenger') }}" id="add">
                    @csrf
                    <input type="hidden" name="travel_id" value="{{ $travel->id }}">
                    <input type="hidden" name="departure" value="{{ $travel->departure }}">
                    <input type="hidden" name="arrival" value="{{ $travel->arrival }}">
                    <input type="hidden" name="date" value="{{ $travel->date }}">
                    <input type="hidden" name="hour" value="{{ $travel->hours }}">
                    <input type="hidden" name="price" value="{{ $travel->price }}">
                    <input type="hidden" name="places" value="{{ $travel->number_of_places }}">
                    <input type="hidden" name="classe" value="{{ $travel->classe }}">
                </form>
                <a class="mega-menu" onclick="event.preventDefault(); document.getElementById('add').submit();" title="choice-travel">
                            <div class="item">
                                <div class="infos">
                                <div class="header">
                                    <div>{{ $subAgencyName }}</div>
                                    <div class="name">{{ $travel->departure }} - {{ $travel->arrival }}</div>
                                </div>
                                <div class="body">
                                    <div class="hour">{{ $travel->hours }}</div>
                                    <div class="others">
                                    <div>
                                        <div>Type de vehicule</div>
                                        <div class="type-of-car">Gros porteur</div>
                                    </div>
                                    <div>
                                        <div>Classe</div>
                                        <div class="class">{{ $travel->classe }}</div>
                                    </div>
                                    <div>
                                        <div>Nombre de places restante</div>
                                        <div class="seats">{{ $travel->placeAvailable }}</div>
                                    </div>
                                    </div>
                                </div>


                                <div class="footer">
                                    <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div> <a href="#">Notez l'agence</a></div>
                                </div>
                                </div>
                                <div class="price">
                                <span>{{ $travel->price }}</span>
                                <span>F CFA</span>
                                </div>
                            </div>


                        </a>

                @endforeach


              </div>
            </div>
            <div class="message">
              Les prix peuvent changer selon la disponibilité des bus. Tous les frais supplémentaires peuvent être examinés avant le paiement. Le prix total sera finalisé une fois l'achat terminé.
            </div>
          </div>
          <div class="advertising">
            <div>Espace encart PUB</div>
            <div>Espace encore PUB</div>
          </div>
        </div>
      </section>
    </main>
@endsection
