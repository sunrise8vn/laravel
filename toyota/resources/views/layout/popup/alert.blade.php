{{-- @if ($message = Session::get('success')) --}}
@if(Session::has('success'))
{{-- <div class="sweet-overlay" tabindex="-1" style="opacity: 1.03; display: block;"></div> --}}
<div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="false" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: block; margin-top: -92px;">
    <div class="inner_alert">
        <div class="sa-icon sa-error" style="display: none;">
          <span class="sa-x-mark">
            <span class="sa-line sa-left"></span>
            <span class="sa-line sa-right"></span>
          </span>
        </div>
    <div class="sa-icon sa-warning" style="display: none;">
      <span class="sa-body"></span>
      <span class="sa-dot"></span>
    </div>
    <div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success" style="display: none;">
      <span class="sa-line sa-tip"></span>
      <span class="sa-line sa-long"></span>

      <div class="sa-placeholder"></div>
      <div class="sa-fix"></div>
    </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>Liên hệ</h2>
    <p style="display: block;"><p>Thông tin liên hệ của Quý khách đã được tiếp nhận.</p><p>Chúng tôi sẽ liên hệ Quý khách trong thời gian sớm nhất.</p><p>Xin trân trọng cảm ơn!</p></p>
    <fieldset>
      <input type="text" tabindex="3" placeholder="">
      <div class="sa-input-error"></div>
    </fieldset><div class="sa-error-container">
      <div class="icon">!</div>
      <p>Not valid!</p>
    </div><div class="sa-button-container">
      <button class="cancel" tabindex="2" style="display: none;">Cancel</button>
      <div class="sa-confirm-button-container">
        <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(140, 212, 245); box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">x</button><div class="la-ball-fall">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    </div>
</div>
@endif