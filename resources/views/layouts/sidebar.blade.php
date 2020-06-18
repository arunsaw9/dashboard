<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home.index') }}">
                <div class="brand-logo">
                  <img src="{{ asset('app-assets/images/logo/vuexy-logo.png') }}" alt="" style="margin-top: -10px;">
                </div>

              <h2 class="brand-text mb-0">ONGC | HR</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="{{ route('home.index') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
            
          </li>
          {{-- <li class=" navigation-header"><span>Workforce summary</span></li> --}}


          <li class=" nav-item"><a href="#"><i class="feather icon-arrow-down-circle"></i><span class="menu-title" data-i18n="Ecommerce">Menu</span></a>
            <ul class="menu-content">
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">ER</span></a>
              </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">HRD</span></a>
              </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">ONGC</span></a>
              </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">CSR</span></a>

              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">SDC</span></a> </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">HCA</span></a> </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Medical</span></a> </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Legal</span></a> </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Sports</span></a> </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Work Center</span></a> </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">HR Initiatives</span></a> </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Estate</span></a> </li>

            </ul>
          </li>



        </ul>
      </div>
    </div>