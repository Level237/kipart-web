<form method="get" action="{{ route('search.step-one') }}">

    <div class="input select">
      <select name="type">
        <option value="aller-simple">Aller Simple</option>
        <option value="aller-retour">Aller et Retour</option>
      </select>
    </div>
    <div class="input left">
      <img src="{{asset('assets/images/icon-departure.svg')}}" alt="departure icon" />
      <input class="typeahead form-control" type="text" placeholder="Douala" name="departure" required />
    </div>
    <div class="input left">
      <img src="{{asset('assets/images/icon-location.svg')}}" alt="location icon" />
      <input class="typeahead form-control" type="text" placeholder="Yaounde" name="arrival" required />
    </div>
    <div class="group">
      <div class="input left">
        <img src="{{asset('assets/images/icon-calendar.svg')}}" alt="calendar icon" required />
        <input type="date" name="dateDeparture" id="date"  required />

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
          Nombre de passager
        </label>
        <div class="input right">
          <input type="number" placeholder="1" id="number-of-passengers" value="1" name="number_of_places" required />

          <button type="button" class="no-bg" >

            <img src="{{asset('assets/images/icon-plus.svg')}}" alt="plus icon" onclick="increaseNumberOfPassengers()"/>
            <img src="{{asset('assets/images/icon-substract.svg')}}" alt="plus icon" onclick="decreaseNumberOfPassengers()" />
          </button>


        </div>
      </div>
      <div>
        <label>
          <img src="{{asset('assets/images/icon-star.svg')}}" alt="icon start" class="colored"/> Classe
        </label>
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
