<form action="{{ route('login') }}" method="post">
    @csrf
    <fieldset>
      <div class="title">Profitez de réservations et de remboursements plus rapides ainsi que les réductions</div>

      <div class="input">
        <input type="text" name="phone_number" id="username" placeholder="Téléphone" />
      </div>
      <div class="input right">
        <input type="password" name="password" id="password" placeholder="Mot de passe" />
        <button type="button"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt="eye icon" /></button>
      </div>
      <div class="group">
        <div><a href="#">Mot de passe oublié?</a></div>
        <div>
          <input type="checkbox" />
          Se souvenir de moi
        </div>
      </div>
    </fieldset>
    <div class="actions">
      <button type="submit">CONNEXION</button>
      <div>Vous n'avez pas encore de compte ?</div>
      <div><a href="#">Créer un compte</a></div>
    </div>
  </form>
