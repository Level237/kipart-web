@extends('layouts.frontoffice.main')
@section('title')
Renseignez vos informations et payez
@endsection

@section('content')

<main id="resume-2">

    @if(Session::get("cancel"))
<div id="cancel" class="modal">


    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <p style="text-align: center;color:white">{{ Session::get("cancel") }}</p>
        </div>

    </div>
    @endif
    @if(Session::get("expired"))
    <div id="cancel" class="modal">


        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <p style="text-align: center;color:white">{{ Session::get("expired") }}</p>
            </div>

        </div>
        @endif

        @if(Session::get("expired"))
    <div id="cancel" class="modal">


        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <p style="text-align: center;color:white">{{ Session::get("expired") }}</p>
            </div>

        </div>
        @endif

        @if(Session::get("error"))
    <div id="cancel" class="modal">


        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <p style="text-align: center;color:white">{{ Session::get("error") }}</p>
            </div>

        </div>
        @endif

        @if(Session::get("fail"))
    <div id="cancel" class="modal">


        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <p style="text-align: center;color:white">{{ Session::get("fail") }}</p>
            </div>

        </div>
        @endif
</div>
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
        <div class="card">
          <header style="background: url({{ asset('assets/images/orange.png') }});;width:100%;">
            Detail Orange Money
          </header>
          <form action="{{ route('payment.withOm') }}" method="post">
            @csrf
            <fieldset>
              {{-- <div class="input">
                <input type="text" name="name" id="name" placeholder="Nom sur la carte" />
              </div> --}}

              <div class="input">
                <input type="text" name="number" id="card-number" placeholder="Entrez votre numero de Telephone" />
              </div>
            </fieldset>
            <div class="actions">
              <button type="submit">
                Payez (<span>{{ $travels['price'] + 500 }} FCFA</span>)
              </button>
            </div>
          </form>
        </div>
        <div class="recap">

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
        </div>
      </div>
    </section>
  </main>
<script>
let modal = document.getElementById("cancel");
  let span = document.getElementsByClassName("close")[0];
  span.onclick = function() {
    modal.style.display = "none";
    console.log("eed");
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
@endsection
