@extends('layouts.frontoffice.main')
@section('title')
{{ __("Add a passenger")}}
@endsection

@section('content')

<main id="passenger-data">
    <section id="breadcumb">
      <div class="content">
        <ul>
          <li>{{ __("Choice of seat")}}</li>
          <li><img src="{{ asset('assets/images/icon-arrow-right.svg') }}" alt="icon arrow" /></li>
          <li>{{ __("Passenger information")}}</li>
          <li><img src="{{ asset('assets/images/icon-arrow-right.svg') }}" alt="icon arrow" /></li>
          <li>{{ __("Review and payment")}}</li>
        </ul>
      </div>
    </section>
    <section id="details">
      <div class="content">
        <article id="informations">
          <form action="{{ route('add-passenger') }}" method="post" >
            @csrf
            <fieldset id="form">

              <div class="input">
                <input type="text" name="name[]" id="name" placeholder="Noms & Prénoms" value="{{ $userCurrent['name'] }}" required>
              </div>
              <div class="input">
                <input type="number"  id="nic" placeholder="N CNI" required/>
              </div>
              <div class="input">
                <input type="number" name="telephone[]"  id="phone" placeholder="Téléphone" value="{{ $userCurrent['phone_number'] }}"/>
              </div>
              <hr>

            </fieldset>
            <div style="margin-top: 15px; text-align:center;cursor:pointer" onclick="addPassenger()">
                <img src="{{asset('assets/images/icon-plus.svg')}}" alt="plus icon"/>Ajouter une Personne
            </div>


            <div class="actions">

              <button type="submit" style="margin-top: 10px;">{{ __("Add")}}</button>
            </div>
          </form>
        </article>
        <article id="travel">
          <div id="choosen">
            <div>{{ __("Departure chosen")}}</div>
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
              <div>{{ __("KiPART fees")}}</div>
              <div>500 FCFA</div>
            </div>
            <div>
              <div>{{ __("Total")}}</div>
              <div>{{ $myTravel['price'] + 500 }} FCFA</div>
            </div>
          </div>
          <div id="more">
            {{ __("Prices include taxes and may change based on availability. Pricing will be finalized once purchase is complete. Any additional charges can be reviewed prior to payment.")}}
          </div>
        </article>
      </div>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script>
    let i=0;
    function addPassenger(){
        i=i+1;
        const newDiv = document.createElement(`fieldset`);
        newDiv.setAttribute('id',`fieldset-${i}`);
        const div=document.getElementById('form');
        newDiv.innerHTML=`<div onclick="closeBtn(${i})"><button type="button" style="border: none;"><img src="{{ asset('assets/images/icon-times.svg') }}" alt="Close this dialog" /></button></div><div class="input"><input type="text" name="name[]" id="name" placeholder="Noms & Prénoms"></div><div class="input"><input type="text" style="margin-top: 15px;" name="cni[]" id="nic" placeholder="N CNI" /></div><div class="input"><input type="text" style="margin-top: 15px;" name="telephone[]" id="phone" placeholder="Téléphone"  /></div><hr>`
        div.appendChild(newDiv);


    }
   function closeBtn(i){
    const div=document.getElementById(`fieldset-${i}`);
    div.remove();

   }
  </script>
@endsection
