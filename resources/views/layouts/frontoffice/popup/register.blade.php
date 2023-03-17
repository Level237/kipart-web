<form action="{{ route('register') }}" method="POST">
    @csrf
    <fieldset>
      <div class="input">
        <input type="text" name="name" id="name" placeholder="Noms & Prénoms" required/>
      </div>
      <div class="input">
        <input type="text" name="email" id="email" placeholder="E-mail" />
      </div>
      <div class="input">
        <input type="text" name="phone_number" id="phone" placeholder="Téléphone" required />
      </div>
      <div class="input right">
        <input type="password" name="password" id="password" placeholder="Mot de passe" required/>
        <button type="button"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt="eye icon" /></button>
      </div>
    </fieldset>
    <div class="actions">
      <button type="submit">{{ __("Create account")}}</button>
      <div>{{ __("By creating your account you agree to our")}} <a href="#">{{ __("Terms of use")}}</a> {{ __("and our")}} <a href="#">{{ __("Privacy Policy")}}</a></div>
    </div>
  </form>
