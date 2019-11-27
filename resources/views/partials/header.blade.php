<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
          {{ env('APP_NAME', 'The Event') }}
        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#intro">首頁</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">關於</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">講師</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#schedule">流程</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">場地</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#hotels">旅館</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#gallery">活動花絮</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#supporters">贊助商</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">聯絡</a></li>
        <li class="buy-tickets"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#buy-tickets">購票</a></li>
      </ul>
    </nav>
  </div>
</header>
