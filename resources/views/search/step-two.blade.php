@extends('layouts.frontoffice.main')
@section('title')
Choisissez votre Sous-Agence
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
                    <select name="type">
                      <option value="aller-simple">Aller Simple</option>
                      <option value="aller-retour">Aller et Retour</option>
                    </select>
                  </div>
                <div class="input left">
                  <img src="{{ asset('assets/images/icon-departure.svg') }}" alt="departure icon" />
                  <input type="text" class="typeahead form-control" type="text" placeholder="Douala" name="departure" required />
                </div>
                <div class="input left">
                  <img src="{{ asset('assets/images/icon-location.svg') }}" alt="location icon" />
                  <input class="typeahead form-control" type="text" placeholder="Yaounde" name="arrival" required />
                </div>
                <div class="group">
                  <div class="input left">
                    <img src="{{ asset('assets/images/icon-calendar.svg') }}" alt="calendar icon" />
                    <input type="date" name="dateDeparture" id="date"  required  />
                  </div>
                  <div class="input">

                    <select name="departure_time" id="" required>
                      <option value="05:00">05:00</option>
                      <option value="06:00">06:00</option>
                      <option value="07:30">07:30</option>
                      <option value="08:30">08:30</option>
                      <option value="09:30">09:30</option>
                      <option value="10:30">10:30</option>
                      <option value="11:30">11:30</option>
                      <option value="12:30">12:30</option>
                      <option value="10:30">13:30</option>
                      <option value="10:30">14:30</option>
                      <option value="10:30">15:30</option>
                      <option value="10:30">17:30</option>
                      <option value="10:30">18:45</option>
                      <option value="10:30">19:30</option>
                    </select>

                </div>
                </div>
                <div class="group">
                    <div>

                      <div class="input right">
                        <input type="number" placeholder="1" id="number-of-passengers" value="1" name="number_of_places" required />

                        <button type="button" class="no-bg" >

                          <img src="{{asset('assets/images/icon-plus.svg')}}" alt="plus icon" onclick="increaseNumberOfPassengers()"/>
                          <img src="{{asset('assets/images/icon-substract.svg')}}" alt="plus icon" onclick="decreaseNumberOfPassengers()" />
                        </button>


                      </div>
                    </div>
                    <div>

                      <select name="classe">
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
            <div id="by-agencies">
              <header>
                <h6>Choisissez votre sous Agence</h6>
              </header>
              <div class="items">



                        @foreach ($arrayList as $list)
                        <div class="item">
                            <div class="logo">
                                <form method="get" action="{{ route('search.step-three') }}">
                                    @csrf
                                    <input type="hidden" name="subAgencyName" value="{{ $list->nom }}">
                                    <input type="hidden" name="subAgency_id" value="{{ $list->id }}">
                                    <button type="submit" style="border-style:none;">
                                        <img src="{{ $list->logo }}" alt="logo-agence" style="width: 75px; height:75px;border-radius: 1em;">
                                    </button>

                                </form>


                        </a>

                            </div>
                            <p style="color:black;font-size:1rem;">{{ $list->nom }}</p>

                        </div>
                        @endforeach





              </div>
            </div>
            <hr />
            <div id="all-departures">
              <header>
                <h6>Tous les d??parts</h6>
                <div>
                  <span>Tri?? par</span>
                  <select>
                    <option value="">Heure de d??part</option>
                    <option value="">Heure d'arriv??e</option>
                  </select>
                </div>
              </header>
              <div class="items">
                <div class="item">
                  <div class="infos">
                    <div class="header">
                      <div>Nom de l'agence</div>
                      <div class="name">Douala - Yaound??</div>
                    </div>
                    <div class="body">
                      <div class="hour">04:00</div>
                      <div class="others">
                        <div>
                          <div>Type de vehicule</div>
                          <div class="type-of-car">Gros porteur</div>
                        </div>
                        <div>
                          <div>Classe</div>
                          <div class="class">VIP</div>
                        </div>
                        <div>
                          <div>Nombre de places</div>
                          <div class="seats">70</div>
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
                    <span>3 500</span>
                    <span>F CFA</span>
                  </div>
                </div>
                <div class="item">
                  <div class="infos">
                    <div class="header">
                      <div>Nom de l'agence</div>
                      <div class="name">Douala - Yaound??</div>
                    </div>
                    <div class="body">
                      <div class="hour">04:00</div>
                      <div class="others">
                        <div>
                          <div>Type de vehicule</div>
                          <div class="type-of-car">Gros porteur</div>
                        </div>
                        <div>
                          <div>Classe</div>
                          <div class="class">VIP</div>
                        </div>
                        <div>
                          <div>Nombre de places</div>
                          <div class="seats">70</div>
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
                    <span>3 500</span>
                    <span>F CFA</span>
                  </div>
                </div>
                <div class="item">
                  <div class="infos">
                    <div class="header">
                      <div>Nom de l'agence</div>
                      <div class="name">Douala - Yaound??</div>
                    </div>
                    <div class="body">
                      <div class="hour">04:00</div>
                      <div class="others">
                        <div>
                          <div>Type de vehicule</div>
                          <div class="type-of-car">Gros porteur</div>
                        </div>
                        <div>
                          <div>Classe</div>
                          <div class="class">VIP</div>
                        </div>
                        <div>
                          <div>Nombre de places</div>
                          <div class="seats">70</div>
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
                    <span>3 500</span>
                    <span>F CFA</span>
                  </div>
                </div>
                <div class="item">
                  <div class="infos">
                    <div class="header">
                      <div>Nom de l'agence</div>
                      <div class="name">Douala - Yaound??</div>
                    </div>
                    <div class="body">
                      <div class="hour">04:00</div>
                      <div class="others">
                        <div>
                          <div>Type de vehicule</div>
                          <div class="type-of-car">Gros porteur</div>
                        </div>
                        <div>
                          <div>Classe</div>
                          <div class="class">VIP</div>
                        </div>
                        <div>
                          <div>Nombre de places</div>
                          <div class="seats">70</div>
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
                    <span>3 500</span>
                    <span>F CFA</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="message">
              Les prix peuvent changer selon la disponibilit?? des bus. Tous les frais suppl??mentaires peuvent ??tre examin??s avant le paiement. Le prix total sera finalis?? une fois l'achat termin??.
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
