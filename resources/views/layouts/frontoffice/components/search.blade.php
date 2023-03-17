<form method="get" action="{{ route('search.step-one') }}">

    <div class="input select">
      <select name="type">
        <option value="aller-simple">{{ __("One way")}}</option>
        <option value="aller-retour">{{ __("Round Trip")}}</option>
      </select>
    </div>
    <div class="input left">
      <img src="{{asset('assets/images/icon-departure.svg')}}" alt="departure icon" />
      <input class="typeahead form-control" type="text" placeholder="Destination" autocomplete="off" name="departure" required />
    </div>
    <div class="input left">
      <img src="{{asset('assets/images/icon-location.svg')}}" alt="location icon" />
      <input class="typeahead form-control" type="text" placeholder="Arrivée" autocomplete="off" name="arrival" required />
    </div>
    <div class="group">
      <div class="input left">
        <img src="{{asset('assets/images/icon-calendar.svg')}}" alt="calendar icon" required />
        <input type="date" name="dateDeparture" class="date"   required />

      </div>
      <div class="input">

          <select name="departure_time" id="" required>
            @foreach ($hours as $hour)
                <option value="{{ $hour->hours }}">{{ $hour->hours }}</option>
            @endforeach
          </select>

      </div>
    </div>
    <div class="group">
      <div>
        <label>
          <img src="{{asset('assets/images/icon-user.svg')}}" alt="user icon" class="colored"/>
          {{ __("Number of passengers")}}
        </label>
        <div class="input right">
          <input type="number" placeholder="1" id="number-of-passengers" value="1" autocomplete="off" name="number_of_places" required />

          <button type="button" class="no-bg" >

            <img src="{{asset('assets/images/icon-plus.svg')}}" alt="plus icon" onclick="increaseNumberOfPassengers()"/>
            <img src="{{asset('assets/images/icon-substract.svg')}}" alt="plus icon" onclick="decreaseNumberOfPassengers()" />
          </button>


        </div>
      </div>
      <div>
        <label>
          <img src="{{asset('assets/images/icon-star.svg')}}" alt="icon start" class="colored"/> {{ __("Class")}}
        </label>
        <select name="classe">
          <option value="Vip">VIP</option>
          <option value="Classique">{{ __("Classic")}}</option>
        </select>
      </div>
    </div>
    <div class="actions">
      <button type="submit">{{ __("SEARCH")}}</button>
    </div>
  </form>
