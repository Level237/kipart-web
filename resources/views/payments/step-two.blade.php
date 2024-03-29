@extends('layouts.frontoffice.main')
@section('title')
{{ __("Fill in your information and pay")}}
@endsection

@section('content')

@if(Session::get("error"))
<div id="cancel" class="modal">


    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <p style="text-align: center;color:white">{{ Session::get("error") }}</p>
        </div>

    </div>
</div>
    @endif
<main id="resume-2">
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
        <div class="card">
          <header style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url({{ asset('assets/images/visa.png') }});;width:100%;">
            {{ __("Card Details")}}
          </header>
          <form action="{{ route('pay') }}" method="post">
            @csrf
            <fieldset>
              {{-- <div class="input">
                <input type="text" name="name" id="name" placeholder="Nom sur la carte" />
              </div> --}}

              <div class="input">
                <input type="text" name="number" id="card-number" placeholder="Numéro de carte" />
              </div>
              <div class="group">
                <div class="input">
                  <input type="text" name="exp_year" id="date-expiration" placeholder="Date d'expiration" />
                </div>
                <div class="input">
                  <input type="text" name="exp_month" id="exp_month" placeholder="Mois d'expiration" />
                </div>
                <div class="input">
                    <input type="text" name="cvv" id="cvv" placeholder="CVV" />
                  </div>
                  @if($travels['classe']=="vip")
                    <input type="hidden" name="amount" value="{{ $travels['price'] + 1000 }}">
              @endif
              @if($travels['classe']=="classique")
                    <input type="hidden" name="amount" value="{{ $travels['price'] + 500 }}">
            @endif

              </div>
            </fieldset>
            <div class="actions">
              <button type="submit">
              @if($travels['classe']=="vip")
              {{ __("Pay")}}(<span> {{ $travels['price'] + 1000 }} FCFA</span>)
              @endif
              @if($travels['classe']=="classique")
              {{ __("Pay")}} ( <span> {{ $travels['price'] + 500 }} FCFA</span>)
            @endif

              </button>
            </div>
          </form>
        </div>
        <div class="recap">

            @foreach ($currentPassengers as $passenger)
                <div id="coords">
                    <div>
                    <div>{{ __("Passenger details")}}</div>

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
              <div>{{ __("Departure chosen")}}</div>

            </div>
            <div class="infos">
              <div class="towns">{{ $travels['departure'] }} - {{ $travels['arrival'] }}</div>
              <div class="date-seats">
                <span class="date">{{ $travels['date'] }}</span>,
                <span class="number-of-seats">{{ $count }} place(s)</span>
              </div>
              <div class="agency">{{ $agency_name }}</div>
              <div class="hour">{{ $travels['hour'] }}</div>
              <div class="class">{{ $travels['classe'] }}</div>
            </div>
          </div>
          <div id="ticket">
            <div>
                <div>Tickets ({{ $count }})</div>
                <div>{{ $travels['price'] * $count }} FCFA</div>
            </div>
            <div>
                <div>{{ __("KiPART fees")}}</div>
                @if($travels['classe']=="vip")
                <div>1000 FCFA</div>
                @endif
                @if($travels['classe']=="classique")
                <div>500 FCFA</div>
              @endif
            </div>
            <div>
                <div>{{ __("Total")}}</div>
                @if($travels['classe']=="vip")
                  <div>{{ ($travels['price'] * $count) + (1000 * $count) }} FCFA</div>
                @endif
                @if($travels['classe']=="classique")
                <div>{{ ($travels['price'] * $count) + (500 * $count) }} FCFA</div>
              @endif
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
