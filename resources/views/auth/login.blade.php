@extends('layouts.frontoffice.main')
@section('title')
Connexion
@endsection

@section('content')

<div
      id="login"
      aria-hidden="false">
      <!-- 2. The dialog overlay -->
      <div class="dialog-overlay" data-a11y-dialog-hide></div>
      <!-- 3. The actual dialog -->
      <div class="dialog-content" role="document">
        <!-- 4. The close button -->
        <!-- <button type="button" data-a11y-dialog-hide aria-label="Close dialog">
          &times;
        </button> -->
        <!-- 5. The dialog title -->
        <!-- <h1 id="your-dialog-title-id">Your dialog title</h1> -->
        <!-- 6. Dialog content -->
        <div class="content">
            <div class="dialog-content">
              <div class="advert">
                <div>
                  <span class="white">Connectez-vous</span>
                  <span class="colored">et vivez pleinement l'expérience</span>
                  <span class="white">Ki</span><span class="colored">Part</span>
                </div>
              </div>
              <div class="details">
                @include("layouts.frontoffice.popup.Login")
              </div>
            </div>
        <div>

      </div>
    </div>
    <script src="{{ asset('assets/js/function.js') }}"></script>
@endsection
