<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{ route('home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <img src="/img/logo.png" width="400" alt="">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('home') }}" class="nav-link px-2 text-secondary">Главная</a></li>
          <li><a href="{{ route('go_katalogs') }}" class="nav-link px-2 text-white">Каталог ГО</a></li>
          <li><a href="{{ route('so_katalogs') }}" class="nav-link px-2 text-white">Каталог СО</a></li>
          <li><a href="{{ route('about_company') }}" class="nav-link px-2 text-white">О компании</a></li>
          <li><a href="{{ route('contacts') }}" class="nav-link px-2 text-white">Котнакты</a></li>
        </ul>

        <div class="text-end">
          @if(session('login'))
            @include('module_SP.login_true')
          @else
            @include('module_SP.login_false')
          @endif
        </div>

        
      </div>
    </div>
</header>