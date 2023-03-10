<form method="post" action="{{ route('search.step-one') }}">
    @csrf
    <div class="input select">
      <select name="type">
        <option value="aller-simple">Aller Simple</option>
        <option value="aller-retour">Aller et Retour</option>
      </select>
    </div>
    <div class="input left">
      <img src="{{asset('assets/images/icon-departure.svg')}}" alt="departure icon" />
      <input class="typeahead form-control" type="text" placeholder="Douala" name="departure" />
    </div>
    <div class="input left">
      <img src="{{asset('assets/images/icon-location.svg')}}" alt="location icon" />
      <input class="typeahead form-control" type="text" placeholder="Yaounde" name="arrival" />
    </div>
    <div class="group">
      <div class="input left">
        <img src="{{asset('assets/images/icon-calendar.svg')}}" alt="calendar icon" />
        <input type="date" name="dateDeparture" />
      </div>
      <div class="input left">
        
          <select name="departure_time" id="">
            <option value="05:00">05:00</option>
            <option value="06:00">06:00</option>
            <option value="07:30">07:30</option>
            <option value="08:30">08:30</option>
            <option value="09:30">09:30</option>
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
          <input type="number" placeholder="1" id="number-of-passengers" name="number_of_places"/>

          <button type="button" class="no-bg" onclick="increaseNumberOfPassengers()">
            <img src="{{asset('assets/images/icon-plus.svg')}}" alt="plus icon" />
          </button>

        </div>
      </div>
      <div>
        <label>
          <img src="{{asset('assets/images/icon-star.svg')}}" alt="icon start" class="colored"/> Classe
        </label>
        <select name="classe">
          <option value="Vip">Vip</option>
          <option value="Classique">Classique</option>
        </select>
      </div>
    </div>
    <div class="actions">
      <button type="submit">CHERCHER</button>
    </div>
  </form>
