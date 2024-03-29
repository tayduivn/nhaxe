<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/20/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if($web['anvui_id'] == 'TC0BO1rObet9WJXn' || $web['anvui_id'] == 'TC0A31qrgPVJBW3a' || $web['anvui_id'] == 'TC0Ah1r7aBgqH7jX') { ?>

<style>
    .view {
        background-position: center center;
        background-repeat: no-repeat;
        height: 470px;
        text-align: center;
    }

    .full-bg-img {
        padding: 10% 0;
    }
</style>
<div class="div-top-main">
<?php $t = 0 ?>
<?php if(is_array($data)) { foreach($data as $k => $v) { ?> 

    <?php if($t == 0) { ?>
    <div class="bannernews" style="padding: 0px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                
                        <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                            <li data-target="#myCarousel" data-slide-to="<?=$k2?>" class="<?php if($k2==0) { ?> active <?php } ?>"></li>
                        <?php } } ?>
            
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                        <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                            <div class="item item <?php if($k2==0) { ?> active <?php } ?>">
                                <img <?php  echo loadImage($v2['src_link'],'none','1170','500',true); ?>style="width: 100%" class="img-responsive" alt="<?=$v2['title']?>">
                            </div>
                        <?php } } ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <?php } ?>
    <?php $t++ ?>
<?php } } ?>


<style type="text/css">
    .page-template-tpl-homepage .booking-mask{
        position: relative !important;
        top:inherit;
    }
    .div-top-main{
        position: relative;
    }
    .content-container.tabs-container {
        position: absolute;
        bottom: 55px;
        width: 100%;
        z-index: 1;
        margin: auto;
        max-width: inherit;
    }
    .page-template-tpl-homepage .booking-mask {
        position: absolute;
        
        width: 100%;
        z-index: 1;
        max-width: 1140px;
        margin: auto;
    }
    .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    -o-transition: background-color .3s, border-color .3s;
    -webkit-transition: background-color .3s, border-color .3s;
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid #acd9f5;
    border-radius: 4px;
    color: #00305b;
    font-weight: 600;
    padding: 10px 14px;
    transition: background-color .3s, border-color .3s;
    width: 100%;
    padding: 0px;
    height: 39px;
}

</style>


<?php if($web['anvui_id'] == 'TC0A31qrgPVJBW3a') { ?>
<div class="booking_form">
        
        <div class="main-wrap pr">
          
          <!--end product-tab-wrap-->
            <div class="search-wrap pr clearfix">
                <div class="tab-content">
                    <div class="tab_home text-center"><a class="tab_item active" href="#">Đặt vé xe Limousine QUẢNG NINH - HÀ NỘI online</a></div>
                    <div id="bus-search-box " class="limousine_form">
                        <form action="dat-ve" id="search-form ">
                            
                            <div class="pr" id="Bus-search-panel-box-div">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="startPoint" >Điểm đi</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-bus" aria-hidden="true"></i>
                                            <div class="dropdown dzhide" >
                                              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="textdiemdi">Chọn điểm đi</div>
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" id="diemdi" aria-labelledby="dLabel">
                                                
                                              </ul>
                                            </div>
                                            <input type="hidden" class="form-control" name="startPoint" id="startPoint" readonly>    
                                        </div>
                                    </div>

                                    

                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="endPoint" >Điểm đến</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-bus" aria-hidden="true"></i>
                                            <div class="dropdown dzhide" >
                                              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="textdiemden">Chọn điểm đến</div>
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" id="diemden" aria-labelledby="dLabel">
                                               
                                              </ul>
                                            </div>
                                            <input type="hidden" class="form-control" name="endPoint" id="endPoint" readonly>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 selectDateD fullst">
                                    <div class="form-group">
                                        <label for="depatureDate" >Ngày đi</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-calendar"></i>
                                            <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="depatureDate" ></label>
                                        <div class="search-btn">
                                            <input type="hidden" name="returnDate">
                                            <input type="hidden" id="startId" name="startId">
                                            <input type="hidden" id="endId" name="endId">
                                            <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                                            <button type="submit" class="btn btn-orange" id="search-btn">Tìm kiếm xe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style type="text/css">
                                #search-btn{
                                    height: 48px;

                                }
                            </style>
                            
                        </form>
                    </div>
                    <div class="row" id="Bus-search-option-div" style="display: none;">
                        <div class="col-lg-12">
                            <a href="javascript:;" id="aBasic_Bus" class="orange" style="display: none;">Tìm kiếm cơ bản</a>
                            <a href="javascript:;" id="aAdvanced_Bus" class="orange" style="">Tìm kiếm nâng cao</a>
                            <a data-toggle="modal" data-target="#suggest-new-route" class="suggest-route">Đề Xuất Tuyến Mới</a>
                        </div>
                    </div>
                </div>
            </div>
          <div class="form-tab-booking">
                
          </div>
          <!--search-wrap-->
          
        </div>
      </div>
      <style>
    .view {
        background-position: center center;
        background-repeat: no-repeat;
        height: 470px;
        text-align: center;
    }

    .full-bg-img {
        padding: 10% 0;
    }
    .dropdown.dzhide button {
        border: solid 1px #b7b7b7;
        background: #fff !important;
        color: #000 !important;
        border-radius: 0;
        width: 100%;
        box-sizing: border-box;
        height: 48px;
        padding: 7px 30px;
    }
    .limousine_form .form-group input, .limousine_form .form-group select{
        height: 48px;
    }
    .iconic-input .caret {
    position: absolute;
    right: 10px;
    font-size: 20px;
    top: 50%;
    margin-top: -5px;
    color: #555;
}
    .iconic-input .caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 10px dashed;
    border-top: 4px solid\9;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
}
ul#diemdi {
    width: 450px;
}
ul#diemdi li{
    line-height:40px;
    padding-left:10px

}
ul#diemden {
    width: 450px;
}
ul#diemden li a {
    line-height: 40px;
    padding-left: 10px;
    font-size: 16px;
    text-decoration: none;
}

ul#diemdi li a {
    line-height: 40px;
    padding-left: 10px;
    font-size: 16px;
    text-decoration: none;
}

.reason .reason-form:first-child {
    padding-left: 10px;
}
.reason .reason-form {
    padding: 0 20px;
}
.reason {
    width: 100%;
    margin: 20px 0 30px;
    display: table;
    float: left;
}
.reason .reason-form {
    width: 230px;
    display: table-cell;
    text-align: center;
    vertical-align: top;
}
.reason .reason-item-img {
    width: 100%;
    height: 78px;
    position: relative;
    margin-bottom: 20px;
}
.reason .title {
    font-weight: 600;
    font-size: 16px;
    margin: 0 0 10px;
    width: 100%;
}
.reason p {
    font-size: 14px;
    color: #444;
    text-align: center;
}

.dropdown-menu li {
    border-bottom: 1px solid #e7e7e7;
    cursor: pointer;
}

</style>

<style type="text/css">
    div#myCarousel .item {
        margin-bottom: 0px;
    }
    .row.chonchieu .btn {
        line-height: inherit;
    }
</style>
<style type="text/css">
    .datve-home .col-md-12{
        padding: 0px;
    }
    
    .main-bg-vn{
      height: auto;
      overflow: inherit !important;
    }
</style>
<?php } else { ?>



<div class="content-container tabs-container">
    <div class="booking-mask container">
        <div class="tabs js-tabs">
            <ul class="tabs__list">
                <li class="tabs__item" data-length="4">
                    <a href="#tab-search-flight" class="tabs__link"><span><svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>Đặt vé</span></a>
                </li>
                <li class="tabs__item"  data-length="4">
                    <a href="#tab-search-flight" class="tabs__link" id="roundtrip"><span><svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>Khứ hồi</span></a>
                </li>
                
            </ul>
            <div class="tabs__contents">
                <div class="tabs__content tabs__content--active" id="tab-panel-0" role="tabpanel" aria-hidden="false" aria-labelledby="tab-link-0">
                        <div data-react-class="SearchMask" data-react-props="{&quot;target&quot;: &quot;homepage&quot;, &quot;displayFlightSearch&quot;: 0}">
                           <div class="search-mask" data-extended="false" data-flight-mode="round" data-target="homepage">
                              
                              <div class="form search-mask__form">
                                 <div class="form__row">
                                    <div >
                                        <div class="form__field form__field--1-3">
                                           <label for="search-mask-field-from">Điểm đi</label>
                                           <select id="startPoint" name="startPoint">
                                              <option value="">Tìm điểm đi</option>                        
                                          </select>
                                           <span class="search-mask__input-icon">
                                              <svg class="icon icon-destination">
                                                 <use xlink:href="#icon-destination"></use>
                                              </svg>
                                           </span>
                                        </div>
                                        <div class="form__field form__field--1-3">
                                           <label for="search-mask-field-from">Điểm đến</label>
                                           <select id="endPoint" name="endPoint">
                                              <option value="">Tìm điểm đến</option>                        
                                          </select>
                                           <span class="search-mask__input-icon">
                                              <svg class="icon icon-destination">
                                                 <use xlink:href="#icon-destination"></use>
                                              </svg>
                                           </span>
                                        </div>
                                        <div class="form__field form__field--1-3">
                                           <label for="search-mask-field-from">Ngày đi</label>
                                           <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                           <span class="search-mask__input-icon">
                                              <svg class="icon icon-destination">
                                                 <use xlink:href="#icon-destination"></use>
                                              </svg>
                                           </span>
                                        </div>
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
<?php } ?>

<?php } else { ?>

<?php $t = 0 ?>
<?php if(is_array($data)) { foreach($data as $k => $v) { ?> 

<?php if($t == 0) { ?>

<div class="show-top">
<div class="main-bg-vn container-fluid pr">
   
        <div class="bannernews" style="padding: 0px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    
                            <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                                <li data-target="#myCarousel" data-slide-to="<?=$k2?>" class="<?php if($k2==0) { ?> active <?php } ?>"></li>
                            <?php } } ?>
                
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                            <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                                <div class="item item <?php if($k2==0) { ?> active <?php } ?>">
                                    <img <?php  echo loadImage($v2['src_link'],'resize','1349','592',true); ?>style="width: 100%" class="img-responsive" alt="<?=$v2['title']?>">
                                </div>
                            <?php } } ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      
   <div class="main-wrap pr">
      <div class="hotline"><i class="fa fa-phone"></i> Hotline <?=$web['info']['phone']?></div>
      <div class="teaser">
         Trang Đặt Vé Trực Tuyến - <?=$web['info']['business']?></span>
      </div>
      <ul id="promotion-ribbon" class="ribbon-wrap">
         <li class="ribbon-left"><a data-toggle="modal" data-target="#static-ad" href="">Chủ động <span>Đặt vé &nbsp;</span></a></li>
         <li class="ribbon-right"><a data-toggle="modal" data-target="#static-ad" href="">&nbsp;Nhanh chóng  <span>Tiện lợi</span></a></li>
      </ul>
      <?php if($web['anvui_id'] != 'TC05wM7dDRQSo6') { ?>
      <div class="product-tab-wrap pr clearfix wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeIn;">
         <div class="col-sm-12">
            
         </div>
      </div>
      <?php } ?>
      
    <?php if($web['anvui_id'] == 'TC1OHntfnujP') { ?>
    <div class="content-container tabs-container">
        <div class="booking-mask container">
            <div class="tabs js-tabs">
                <ul class="tabs__list">
                    <li class="tabs__item" data-length="4">
                        <a id="oneway" class="tabs__link"><span>Một chiều</span></a>
                    </li>
                    <li class="tabs__item" data-length="4">
                        <a id="roundtrip" class="tabs__link"><span>Khứ hồi</span></a>
                    </li>
                    
                </ul>
                <div class="tabs__contents">
                    <div class="tabs__content tabs__content--active" id="tab-panel-0" role="tabpanel" aria-hidden="false" aria-labelledby="tab-link-0">
                            <div data-react-class="SearchMask" data-react-props="{&quot;target&quot;: &quot;homepage&quot;, &quot;displayFlightSearch&quot;: 0}">
                               <div class="search-mask" data-extended="false" data-flight-mode="round" data-target="homepage">
                                  
                                  <div class="form search-mask__form">
                                     <div class="form__row">
                                        <div >
                                            <div class="form__field form__field--1-3">
                                               <label for="search-mask-field-from">Điểm đi</label>
                                               <select id="startPoint" name="startPoint">
                                                  <option value="">Tìm điểm đi</option>                        
                                              </select>
                                               <span class="search-mask__input-icon">
                                                  <svg class="icon icon-destination">
                                                     <use xlink:href="#icon-destination"></use>
                                                  </svg>
                                               </span>
                                            </div>
                                            <div class="form__field form__field--1-3">
                                               <label for="search-mask-field-from">Điểm đến</label>
                                               <select id="endPoint" name="endPoint">
                                                  <option value="">Tìm điểm đến</option>                        
                                              </select>
                                               <span class="search-mask__input-icon">
                                                  <svg class="icon icon-destination">
                                                     <use xlink:href="#icon-destination"></use>
                                                  </svg>
                                               </span>
                                            </div>
                                            <div class="form__field form__field--1-3">
                                               <label for="search-mask-field-from">Ngày đi</label>
                                               <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                               <span class="search-mask__input-icon">
                                                  <svg class="icon icon-destination">
                                                     <use xlink:href="#icon-destination"></use>
                                                  </svg>
                                               </span>
                                            </div>
                                            <div class="form__field form__field--1-3">
                                               <label for="search-mask-field-from">Ngày về</label>
                                               <input type="text" class="form-control datepicker"  name="returnDate" id="returnDate" disabled = "true"  readonly>
                                               <span class="search-mask__input-icon">
                                                  <svg class="icon icon-destination">
                                                     <use xlink:href="#icon-destination"></use>
                                                  </svg>
                                               </span>
                                            </div>
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
    <?php } else { ?>
    <div class="search-wrap pr clearfix">
        <div class="tab-content">
            <div id="bus-search-box " class="wow fadeIn animated animated" data-wow-duration="100ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 100ms; animation-delay: 100ms; animation-name: fadeIn; display: block;">
                <div class="col-sm-12 title"><span>Tìm chuyến đi</span></div>
                <form action="dat-ve" id="search-form ">
                    <div class="row chonchieu">
                        <div class="col-lg-2 col-md-2 col-sm-3">
                            <button type="button" class="btn btn-oder selectday selected" id="oneway">Một chiều</button>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3">
                            <button type="button" class="btn btn-oder selectday" id="roundtrip">Khứ hồi</button>
                        </div>
                    </div>
                    <div class="row pr" id="Bus-search-panel-box-div">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="startPoint" >Điểm đi</label>
                                <div class="iconic-input">
                                    <i class="fa fa-map-marker"></i>
                                    <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="Bus swap">
                            <div class="form-group">
                                <a><i class="fa icon-switch"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="endPoint" >Điểm đến</label>
                                <div class="iconic-input">
                                    <i class="fa fa-map-marker"></i>
                                    <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3 selectDateD">
                            <div class="form-group">
                                <label for="depatureDate" >Ngày đi</label>
                                <div class="iconic-input">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-3 selectDateD">
                            <div class="form-group">
                                <label for="depatureDate" class="label-cus">Ngày về</label>
                                <div class="iconic-input">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" disabled readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <div class="search-btn">
                                    <input type="hidden" name="returnDate">
                                    <input type="hidden" id="startId" name="startId">
                                    <input type="hidden" id="endId" name="endId">
                                    <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                                    <button type="submit" class="btn btn-orange" id="search-btn">Tìm kiếm xe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="row" id="Bus-search-option-div" style="display: none;">
                <div class="col-lg-12">
                    <a href="javascript:;" id="aBasic_Bus" class="orange" style="display: none;">Tìm kiếm cơ bản</a>
                    <a href="javascript:;" id="aAdvanced_Bus" class="orange" style="">Tìm kiếm nâng cao</a>
                    <a data-toggle="modal" data-target="#suggest-new-route" class="suggest-route">Đề Xuất Tuyến Mới</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>





      <div class="form-tab-booking">
            
      </div>
      <!--search-wrap-->
      
   </div>
   <!--end main-bg-->
</div>
<style type="text/css">
    .main-wrap.pr {
        position: absolute;
        z-index: 1;
        top: 20px;
        left: 50%;
        margin-left: -550px;
    }
    .selectDateD {
        width: 18% !important;
    }
</style>
</div>
<?php } else { ?>
<div class="av-product dt-slidew">
    <div class="wrapper">
        <div class="div_title">
            <h3 class="title">Đối Tác</h3>
        </div>
    </div>
    
    <div class="wrapper">
        <div aria-live="polite" class="slick-list draggable">
            <div class="slick-track-dt">
                <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                    <div class="item-doi-tac">
                        <img <?php  echo loadImage($v2['src_link'],'resize','1349','592',true); ?>style="width: 100%" class="img-responsive" alt="<?=$v2['title']?>">
                    </div>
                <?php } } ?>
                


            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php $t++ ?>
<?php } } ?>
<?php } ?>