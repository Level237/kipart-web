@extends('layouts.frontoffice.main')
@section('title')
Choisissez votre Voyage
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
    <main id="departures">
        <section id="search">
            <div class="content">
              <form method="get" action="{{ route('search.step-one') }}">
                <div class="input select">
                    <select name="type" value="{{ $arrayTravel['type'] }}">
                      <option value="aller-simple">Aller Simple</option>
                      <option value="aller-retour">Aller et Retour</option>
                    </select>
                  </div>
                <div class="input left">
                  <img src="{{ asset('assets/images/icon-departure.svg') }}" alt="departure icon" />
                  <input type="text" class="typeahead form-control" value="{{ $arrayTravel['departure'] }}" type="text" placeholder="Douala" name="departure" required />
                </div>
                <div class="input left">
                  <img src="{{ asset('assets/images/icon-location.svg') }}" alt="location icon" />
                  <input class="typeahead form-control" type="text" value="{{ $arrayTravel['arrival'] }}" placeholder="Yaounde" name="arrival" required />
                </div>
                <div class="group">
                  <div class="input left">
                    <img src="{{ asset('assets/images/icon-calendar.svg') }}" alt="calendar icon" />
                    <input type="date" name="dateDeparture" id="date" value="{{ $arrayTravel['dateDeparture'] }}"  required  />
                  </div>
                  <div class="input">

                    <select name="departure_time" id="" value="{{ $arrayTravel['departure_time'] }}" required>
                        @foreach ($hours as $hour)
                        <option value="{{ $hour->hours }}">{{ $hour->hours }}</option>
                    @endforeach
                    </select>

                </div>
                </div>
                <div class="group">
                    <div>

                      <div class="input right">
                        <input type="number" value="{{ $arrayTravel['number_of_places']  }}" placeholder="1" id="number-of-passengers" value="1" name="number_of_places" required />

                        <button type="button" class="no-bg" >

                          <img src="{{asset('assets/images/icon-plus.svg')}}" alt="plus icon" onclick="increaseNumberOfPassengers()"/>
                          <img src="{{asset('assets/images/icon-substract.svg')}}" alt="plus icon" onclick="decreaseNumberOfPassengers()" />
                        </button>


                      </div>
                    </div>
                    <div>

                      <select name="classe" value="{{ $arrayTravel['classe'] }}">
                        <option value="Vip">VIP</option>
                        <option value="Classique">Classique</option>
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
