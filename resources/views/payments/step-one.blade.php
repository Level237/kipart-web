
@extends('layouts.frontoffice.main')
@section('title')
{{ __("Choose your payment method")}}
@endsection

@section('content')
<main id="resume">
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
        <div>
            @foreach ($currentPassengers as $passenger)
                <div id="coords">
                    <div>
                    <div>{{ __("Passenger details")}}</div>
                    <div>
                        <a href="#">
                        <img src="{{ asset('assets/images/icon-edit.svg') }}" alt="icon edit" />
                        {{ __("Edit")}}
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
              <div>{{ __("Departure chosen")}}</div>
              <div>
                <a href="#">
                  <img src="{{ asset('assets/images/icon-edit.svg') }}" alt="icon edit" />
                  {{ __("Edit")}}
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
              <div>{{ __("Total")}}</div>
              <div>500 FCFA</div>
            </div>
            <div>
              <div>{{ __("KiPART fees")}}</div>
              <div>{{ $travels['price'] + 500 }} FCFA</div>
            </div>
          </div>
          <div id="reduction">
            <div>
                {{ __("Apply a discount (optional)")}}
            </div>
            <div>
              <form>
                <div class="input">
                  <input type="text" name="code" id="code" placeholder="Code de réduction" />
                </div>
                <div class="actions">
                  <button type="submit">{{ __("Apply")}}</button>
                </div>
              </form>
            </div>
          </div>

          <div id="method-payment">
            <div>
                {{ __("Payment method")}}
            </div>

            <form action="{{ route('payment-final') }}" method="get" >
                @csrf
                <div style="display: flex">
                    <div style="width: 72px;height: 39px;margin-right:40px">
                      <input type="radio" name="method_payment" value="om" checked/>
                      <img src="{{ asset('assets/images/orange.png') }}" alt="icon om" style="width: 50px; height:50px;vertical-align:middle" />
                    </div>
                    <div style="width: 72px;height: 39px;margin-right:40px">
                      <input type="radio" name="method_payment" value="momo" />
                      <img src="{{ asset('assets/images/mtn.jpg') }}" alt="icon momo" style="width: 50px; height:50px;vertical-align:middle" />
                    </div>
                    <div style="margin-right:40px">
                      <input type="radio" name="method_payment" value="visa-mastercard"  />
                      <img src="{{ asset('assets/images/visa.png') }}" style="width: 72px;height: 40px" alt="icon visa mastercard"  />
                    </div>
                    <div style="width: 72px;height: 39px;margin-right:40px">
                      <input type="radio" name="method_payment" value="paypal" />
                      <img src="{{ asset('assets/images/paypal.png') }}" alt="icon paypal" style="width: 50px; height:50px;vertical-align:middle" />
                    </div>
                  </div>


          </div>
          <div id="actions">
            <button type="submit">{{ __("Proceed to payment")}}</button>
            <p>
                {{ __("
                Prices include taxes and may change based on availability. Pricing will be finalized once purchase is complete. Any additional charges can be reviewed prior to payment.")}}
            </p>
          </div>
        </form>
        </div>
        <div class="advert">
            {{ __("Space Pub")}}
        </div>
      </div>
    </section>
  </main>

  @endsection
