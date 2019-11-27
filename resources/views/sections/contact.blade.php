<section id="contact" class="section-bg wow fadeInUp">

  <div class="container">

    <div class="section-header">
      <h2>與我們聯絡</h2>
      <p>有任何問題嗎？我們非常期待能聽到來自你的意見！</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>地址</h3>
          <address>{{ $settings['contact_address'] }}</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>電話號碼</h3>
          <p><a href="tel:{{ str_replace(' ', '', $settings['contact_phone'] ?? '') }}">{{ $settings['contact_phone'] ?? '' }}</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>電子郵件</h3>
          <p><a href="mailto:{{ $settings['contact_email'] ?? '' }}">{{ $settings['contact_email'] ?? '' }}</a></p>
        </div>
      </div>

    </div>

    <div class="form">
      <div id="sendmessage">你的訊息已傳送，謝謝你！</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="你的名稱" data-rule="minlen:4" data-msg="請輸入至少 4 個字元" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="你的電子郵件" data-rule="email" data-msg="請輸入有效的電子郵件" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="主旨" data-rule="minlen:4" data-msg="請輸入主旨至少 8 個字元" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="有任何疑問或建議歡迎提供" placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit">傳送訊息</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->
