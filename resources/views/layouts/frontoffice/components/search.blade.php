<form method="post" action="#">
    <div class="input select">
      <select>
        <option value="aller-simple">Aller Simple</option>
        <option value="aller-retour">Aller et Retour</option>
      </select>
    </div>
    <div class="input left">
      <img src="{{asset('assets/images/icon-departure.svg')}}" alt="departure icon" />
      <input type="text" placeholder="Douala" />
    </div>
    <div class="input left">
      <img src="{{asset('assets/images/icon-location.svg')}}" alt="location icon" />
      <input type="text" placeholder="Yaounde" />
    </div>
    <div class="group">
      <div class="input left">
        <img src="images/icon-calendar.svg" alt="calendar icon" />
        <input type="date" />
      </div>
      <div class="input">
        <button type="button">
          <span>+</span>
          Ajouter un retour
        </button>
      </div>
    </div>
    <div class="group">
      <div>
        <label>
          <img src="images/icon-user.svg" alt="user icon" class="colored"/>
          Nombre de passager
        </label>
        <div class="input right">
          <input type="number" placeholder="0" id="number-of-passengers"/>
          <button type="button" class="no-bg" onclick="increaseNumberOfPassengers()">
            <img src="images/icon-plus.svg" alt="plus icon" />
          </button>
        </div>
      </div>
      <div>
        <label>
          <img src="images/icon-star.svg" alt="icon start" class="colored"/> Classe
        </label>
        <select>
          <option value="vip">VIP</option>
          <option value="eco">ECO</option>
        </select>
      </div>
    </div>
    <div class="actions">
      <button type="submit">CHERCHER</button>
    </div>
  </form>
