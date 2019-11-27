<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <img src="img/logo.png" alt="TheEvenet">
          <p>{{ $settings['footer_description'] ?? '' }}</p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">首頁</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">關於我們</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">服務項目</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">服務條款</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">隱私權政策</a></li>
            @guest
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('login') }}">登入</a></li>
            @endguest
            @auth
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('admin.home') }}">管理後台</a></li>
            @endauth
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">首頁</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">關於我們</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">服務項目</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">服務條款</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">隱私權政策</a></li>
            @guest
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('login') }}">登入</a></li>
            @endguest
            @auth
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('admin.home') }}">管理後台</a></li>
            @endauth
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>與我們聯絡</h4>
          <p>
            {!! $settings['footer_address'] ?? '' !!}<br>
            <strong>Phone:</strong> {{ $settings['contact_phone'] }}<br>
            <strong>Email:</strong> {{ $settings['contact_email'] }}<br>
          </p>

          <div class="social-links">
            <a href="{{ $settings['footer_twitter'] ?? '' }}" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="{{ $settings['footer_facebook'] ?? '' }}" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="{{ $settings['footer_instagram'] ?? '' }}" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="{{ $settings['footer_googleplus'] ?? '' }}" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="{{ $settings['footer_linkedin'] ?? '' }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; 著作權<strong>李亨利</strong>，保留一切權利。
    </div>
    <div class="credits">
      由 <a href="https://bootstrapmade.com/">BootstrapMade</a> 設計網站
    </div>
  </div>
</footer><!-- #footer -->
