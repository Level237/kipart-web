<footer>
      <article>
        <div class="content">
          <div>
            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
          </div>
          <div>
            <ul>
              <li>{{ __("Ready to go")}}</li>
              <li> <a href="#">{{ __("Your reservations")}}</a> </li>
              <li> <a href="#">{{ __("Create account")}}</a></li>
              <li> <a href="#">{{ __("Get the app")}}</a></li>
            </ul>
          </div>
          <div>
            <ul>
              <li>{{ __("In the office")}}</li>
              <li><a href="#">{{ __("About us")}}</a></li>
              <li><a href="#">{{ __("Careers ")}}</a></li>
              <li><a href="#">{{ __("Become a partner ")}}</a></li>
            </ul>
          </div>
          <div>
            <div>{{ __("Need our help?")}}</div>
            <div>
              <a href="{{route('FAQ')}}">{{ __("Help Center")}}</a>
            </div>
          </div>
          <div>
            <div>{{ __("Follow us ")}}</div>
            <ul>
              <li><a href="https://www.tiktok.com/@kipart2023?_t=8aWYe2Uep3V&_r=1" target="_blank"><img src="{{ asset('assets/images/linkedin.svg') }}"  alt="TikTok"/></a></li>
              <li><a href="https://www.facebook.com/profile.php?id=100090647243119" target="_blank"><img src="{{ asset('assets/images/facebook.svg') }}" alt="facebook"/></a></li>
              <li><a href="https://instagram.com/kipartbyksoft?igshid=YmMyMTA2M2Y=" target="_blank"><img src="{{ asset('assets/images/instagram.svg') }}" alt="instagram"/></a></li>
            </ul>
          </div>
        </div>
      </article>
      <article>
        <div class="content">
          <div>
            <img src="{{ asset('assets/images/logo-2.svg') }}" alt="logo 2" />
          </div>
          <div>
            <a href="{{route('cgu')}}">{{ __("Terms of use")}}</a>
          </div>
          <div>
            <a href="{{route('privacy-policy')}}">{{ __("Privacy Policy")}}</a>
          </div>
          <div>
            <a href="https://play.google.com/store/apps/details?id=com.ki_part" target="_blank">
              <img src="{{ asset('assets/images/play-store.png') }}" /></a>
            <a href="#"><img src="{{ asset('assets/images/apple-store.svg') }}" /></a>
          </div>
        </div>
      </article>
    </footer>
