<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="wrapper wp-slide" style="position: relative;">
  <div class="img-sd" >
    <img src="/themes/28/statics/images/huythang-slide1.png" class="img-responsive" >
  </div>

  <div class="text-img">
    <img src="/themes/28/statics/imgs/WebLIMONOW2.png">
  </div>
  <div class="vnt-logo position-d">
        <h1>
            <a href="<?=$web['home_url']?>">
                <?php if($web['logo'] != null) { ?>
                <?php if($web['logo']['is_swf']) { ?>
                <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                    <param value="transparent" name="wmode">
                    <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                    <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                </object>
                <?php } else { ?>
                <img id="logo-main" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                <?php } ?>
                <?php } else { ?>
                <img id="logo-main" src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                <?php } ?>
            </a>
        </h1>
    </div>
  <div class="wp-item-selected">
    <div class="col-md-4 item-click tv-item">
      <a href="https://www.huythangauto.vn/" target="_blank">
        
        
      </a>
    </div>
    <div class="col-md-4 item-click ct-item">
      <a href="/catalogue-limonow-1-7-120.html">
        
      </a>
    </div>
    <div class="col-md-4 item-click tt-item">
      <a href="/ket-noi-du-lich-2-2-2019.html">
        
      </a>
    </div>
  </div>
</div>
<div class="wb-hotlie" >
  <div class="wrapper" >
    <div class="row">
      <div class="col-md-6">
          <div class="top-title-bg">
            <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/imgs/WebLIMONOW1.png">
          </div>
          <div class="full-title-bottom">
                <a href="tel:18006381" class="hotline-t">
                  
                </a>
                <a href="http://huythanglimo.nhaxe.vn/" class="website-t"></a>
                <a href="http://limonow.vn/tai-app-1-7-119.html" class="downapp-t"></a>
          </div>
      </div>
      <div class="col-md-6">
        <div class="title-dv">
          <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/img/LIMONOWbook.png">
        </div>
        <div class="tabs__contents">
            <div class="tabs__content tabs__content--active" id="tab-panel-0" role="tabpanel" aria-hidden="false" aria-labelledby="tab-link-0">
                    <div data-react-class="SearchMask" data-react-props="{&quot;target&quot;: &quot;homepage&quot;, &quot;displayFlightSearch&quot;: 0}">
                       <div class="search-mask" data-extended="false" data-flight-mode="round" data-target="homepage">
                          
                          <div class="form search-mask__form">
                            <div class="form__row">
                              <div >
                                <div class="wp-dkh">
                                  <div class="form__field form__field--1-3">
                                    <select id="startPoint" name="startPoint">
                                        <option value="">Chọn <strong>Điểm Khởi Hành</strong></option>  
                                    </select>
                                     <span class="search-mask__input-icon">
                                        <svg class="icon icon-destination">
                                           <use xlink:href="#icon-destination"></use>
                                        </svg>
                                     </span>
                                  </div>
                                  <div class="form__field form__field--1-3">
                                     <select id="endPoint" name="endPoint">
                                        <option value="">Chọn <strong>Điểm Đến</strong></option>                        
                                    </select>
                                     <span class="search-mask__input-icon">
                                        <svg class="icon icon-destination">
                                           <use xlink:href="#icon-destination"></use>
                                        </svg>
                                     </span>
                                  </div>
                                </div>
                                <div class="wp-nkh">
                                  <div class="form__field form__field--1-3">
                                     <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly placeholder="CHỌN NGÀY ĐI">
                                     <span class="search-mask__input-icon">
                                        <svg class="icon icon-destination">
                                           <use xlink:href="#icon-destination"></use>
                                        </svg>
                                     </span>
                                  </div>
                                  
                                  
                                  <div class="form__field form__field--1-3">
                                    <div class="search-mask__submit" data-validated="true">
                                        <input type="hidden" name="returnDate">
                                        <input type="hidden" id="startId" name="startId">
                                        <input type="hidden" id="endId" name="endId">
                                        <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                                        <button type="submit" class="button button--size-l button--full-width button--green" id="search-btn">Tìm kiếm xe</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                       </div>
                    </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>

</div>