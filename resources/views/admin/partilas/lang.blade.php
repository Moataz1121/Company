<a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar') }}" id="langSwitcher" data-mode="light">
    {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'EN' : 'AR' }}
  </a>
