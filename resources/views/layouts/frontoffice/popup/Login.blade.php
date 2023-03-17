<form action="{{ route('login') }}" method="post">
    @csrf
    @if(Session::get("success"))
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <p style="text-align: center;color:white">{{ Session::get("success") }}</p>
            </div>

        </div>
        @endif
    <fieldset>
      <div class="title">{{ __("Enjoy faster reservations and refunds as well as discounts")}}</div>

      <div class="input">
        <input type="text" name="phone_number" id="username" placeholder="Téléphone" />
      </div>
      <div class="input right">
        <input type="password" name="password" id="password" placeholder="Mot de passe" />
        <button type="button"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt="eye icon" /></button>
      </div>
      <div class="group">
        <div><a href= {{route('reset')}}>{{ __("Forgot password? ")}}</a></div>
        <div>
          <input type="checkbox" />
          {{ __("Remember me ")}}
        </div>
      </div>
    </fieldset>
    <div class="actions">
      <button type="submit">{{ __("Login ")}}</button>
      <div>{{ __("Do not have an account yet ")}} ?</div>
      <div><a href="#">{{ __("Create account ")}}</a></div>
    </div>
  </form>
