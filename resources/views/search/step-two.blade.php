@extends('layouts.frontoffice.main')
@section('title')
{{ __("Choose your sub-agency")}}
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
                      <option value="aller-simple" >{{ __("One way")}}</option>
                      <option value="aller-retour">{{ __("Round Trip")}}</option>
                    </select>
                  </div>
                <div class="input left">
                  <img src="{{ asset('assets/images/icon-departure.svg') }}" alt="departure icon" />
                  <input type="text" class="typeahead form-control" value="{{ $arrayTravel['departure'] }}" autocomplete="off" type="text" placeholder="Départ" name="departure" required />
                </div>
                <div class="input left">
                  <img src="{{ asset('assets/images/icon-location.svg') }}" alt="location icon" />
                  <input class="typeahead form-control" type="text" value="{{ $arrayTravel['arrival'] }}" autocomplete="off" placeholder="Arrivée" name="arrival" required />
                </div>
                <div class="group">
                  <div class="input left">
                    <img src="{{ asset('assets/images/icon-calendar.svg') }}" alt="calendar icon" />
                    <input type="date" name="dateDeparture"  value="{{ $arrayTravel['dateDeparture'] }}"  required  />
                  </div>
                  <div class="input">

                    <select name="departure_time" id="" value="{{ $arrayTravel['departure_time'] }}" required>
                        @foreach ($hours as $hour)
                        <option value="{{ $hour->hours }}" @selected($arrayTravel['departure_time'] ==$hour->hours)>{{ $hour->hours }}</option>
                    @endforeach
                    </select>

                </div>
                </div>
                <div class="group">
                    <div>

                      <div class="input right">
<<<<<<< HEAD
                        <input type="number" value="{{ $arrayTravel['number_of_places']  }}" placeholder="1" id="number-of-passengers" value="1" name="number_of_places" required />

=======
                        <input type="number" value="{{ $arrayTravel['number_of_places']  }}" autocomplete="off" placeholder="1" id="number-of-passengers" value="1" name="number_of_places" required />
    
>>>>>>> b5dfa6b4752e28a7940504c5c43ced5d20dcdd9a
                        <button type="button" class="no-bg" >

                          <img src="{{asset('assets/images/icon-plus.svg')}}" alt="plus icon" onclick="increaseNumberOfPassengers()"/>
                          <img src="{{asset('assets/images/icon-substract.svg')}}" alt="plus icon" onclick="decreaseNumberOfPassengers()" />
                        </button>


                      </div>
                    </div>
                    <div>

                      <select name="classe" value="{{ $arrayTravel['classe'] }}">
                        <option value="Vip" @selected($arrayTravel['classe'] =="Vip")>VIP</option>
                        <option value="Classique"  @selected($arrayTravel['classe'] =="Classique")>Classique</option>
                      </select>
                    </div>
                  </div>
                <div class="actions">
                  <button type="submit">{{ __("SEARCH")}}</button>
                </div>
              </form>
            </div>
          </section>
      <section id="details">
        <div class="content">
          <div class="">
            <div id="by-agencies">
              <header>
                <h6>{{ __("Choose your sub-agency")}}</h6>
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
            {{-- <div id="all-departures">
              <header>
                <h6>{{ __("All departures")}}</h6>
                <div>
                  <span>{{ __("sort by")}}</span>
                  <select>
                    <option value="">{{ __("Departure time")}}</option>
                    <option value="">{{ __("Arrival time")}}</option>
                  </select>
                </div>
              </header>
              <div class="items">
                <div class="item">
                  <div class="infos">
                    <div class="header">
                      <div>{{ __("Agency name")}}</div>
                      <div class="name">Douala - Yaoundé</div>
                    </div>
                    <div class="body">
                      <div class="hour">04:00</div>
                      <div class="others">
                        <div>
                          <div>{{ __("Vehicle Type")}}</div>
                          <div class="type-of-car">Gros porteur</div>
                        </div>
                        <div>
                          <div>Classe</div>
                          <div class="class">VIP</div>
                        </div>
                        <div>
                          <div>{{ __("Number of places")}}</div>
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
                      <div> <a href="#">{{ __("Rate the agency")}}</a></div>
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
                      <div>{{ __("Agency name")}}</div>
                      <div class="name">Douala - Yaoundé</div>
                    </div>
                    <div class="body">
                      <div class="hour">04:00</div>
                      <div class="others">
                        <div>
                          <div>{{ __("Vehicle Type")}}</div>
                          <div class="type-of-car">Gros porteur</div>
                        </div>
                        <div>
                          <div>Classe</div>
                          <div class="class">VIP</div>
                        </div>
                        <div>
                          <div>{{ __("Number of places")}}</div>
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
                      <div> <a href="#">{{ __("Rate the agency")}}</a></div>
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
                      <div>{{ __("Agency name")}}</div>
                      <div class="name">Douala - Yaoundé</div>
                    </div>
                    <div class="body">
                      <div class="hour">04:00</div>
                      <div class="others">
                        <div>
                          <div>{{ __("Vehicle Type")}}</div>
                          <div class="type-of-car">Gros porteur</div>
                        </div>
                        <div>
                          <div>{{ __("Class")}}</div>
                          <div class="class">VIP</div>
                        </div>
                        <div>
                          <div>{{ __("Number of places")}}</div>
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
                      <div> <a href="#">{{ __("Rate the agency")}}</a></div>
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
                      <div>{{ __("Agency name")}}</div>
                      <div class="name">Douala - Yaoundé</div>
                    </div>
                    <div class="body">
                      <div class="hour">04:00</div>
                      <div class="others">
                        <div>
                          <div>{{ __("Vehicle Type")}}</div>
                          <div class="type-of-car">Gros porteur</div>
                        </div>
                        <div>
                          <div>{{ __("Class")}}</div>
                          <div class="class">VIP</div>
                        </div>
                        <div>
                          <div>{{ __("Number of places")}}</div>
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
                      <div> <a href="#">{{ __("Rate the agency")}}</a></div>
                    </div>
                  </div>
                  <div class="price">
                    <span>3 500</span>
                    <span>F CFA</span>
                  </div>
                </div>
              </div>
            </div> --}}
            <div class="message">
                {{ __("Prices include taxes and may change based on availability. Pricing will be finalized once purchase is complete. Any additional charges can be reviewed prior to payment.")}}
            </div>
          </div>
          <div class="advertising">
            <div>{{ __("Pub Space")}}</div>
            <div>{{ __("Pub Space")}}</div>
          </div>
        </div>
      </section>
    </main>
@endsection
