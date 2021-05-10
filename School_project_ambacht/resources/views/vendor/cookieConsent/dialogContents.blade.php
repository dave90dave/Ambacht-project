<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Cookies</h5>
    <button type="button" class="btn-close text-reset js-cookie-consent cookie-consent" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    <div class="cookie-consent__message">
        Om uw ervaring op de website te personaliseren, gebruiken wij cookies.
        {{--!! trans('cookieConsent::texts.message') !!--}}
    </div>

    <div class="privacy">
        Bekijk onze privacy policy <a href="/privacy">hier</a>.
    </div>

    <button class="text-reset js-cookie-consent-agree cookie-consent__agree" data-bs-dismiss="offcanvas" aria-label="Close">
        Ik ga akkoord
        {{-- trans('cookieConsent::texts.agree') --}}
    </button>
  </div>
</div>


<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
