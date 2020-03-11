<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/17//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div id="header">
    <a id="menu-btn" href="#menu" class="spr btn-hclick"></a>
    <div class="box-logo">
       <h1 id="logo" class="rs logo"><a  href="/"><?php if($web['logo'] != null) { ?>
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
                        <?php } ?></a></h1>
    </div>
    <div id="menu-phone"><?=$web['info']['phone']?></div>
</div>

<div class="menu">
    <a href="#close" class="menu-close spr btn-hclick1"></a>
    <div class="menu-items">
       <a class="menu-block menu-block-left" href="/phong-ac6.html" style="background-image: url('images/1-vi.png');"></a>
       <a class="menu-block menu-block-right" href="/chung-toi-co-gi-ac7.html" style="background-image: url('images/2-vi.png');"></a>
       <a class="menu-block menu-block-left" href="/chuyen-di-ac9.html" style="background-image: url('images/3-vi.png');"></a>
       <br/>                    <a class="menu-block menu-block-bottom-left" href="/khuyen-mai-ac8.html" style="background-image: url('images/4-vi.png');"></a>
       <a class="menu-block menu-block-right" href="/su-kien-ac10.html" style="background-image: url('images/5-vi.png');"></a>
       <a class="menu-block menu-block-bottom-right" href="javascript:void(0)" style="background-image: url('images/6-vi.png');" data-toggle="modal" data-target="#coming"></a>
    </div>
    <div class="box-review">
       <h3 class="rs">Customer’s review</h3>
       <div class="review-In">
          <div id="TA_selfserveprop500" class="TA_selfserveprop">
             <ul id="caF3mwmMj8BJ" class="TA_links 614DPs">
                <li id="GkuIOBrKq" class="b1QUsQ">
                   <a target="_blank" href="https://www.tripadvisor.com.vn/"><img src="https://www.tripadvisor.com.vn/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
                </li>
             </ul>
          </div>
          <script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=500&amp;locationId=12257200&amp;lang=vi&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script>
       </div>
    </div>
    <div class="menu-footer hMargin hM-bottom clearfix">
       <div class="menu-footer-btn">
          <a href="https://www.facebook.com/sapacapsulehotel" target="_blank">
          <i class="ico-hfb spr"></i>
          https://www.facebook.com/sapacapsulehotel
          </a>
       </div>
       <div class="menu-footer-btn">
          <a href="mailto:sapacapsulehotel@gmail.com" target="_blank">
          <i class="ico-hemail spr"></i>
          sapacapsulehotel@gmail.com
          </a>
       </div>
    </div>
 </div>

<?php if($mod != 'home') { ?>
<?php if(isset($web['background']['color'])) { ?>
<style type="text/css">
.header {
    position: relative;
    background: {
        <?=$web['background']['color']?>
    }
    ;
    background-position: center top;
}
</style>
<?php } else { ?>
<style type="text/css">
.header {
    position: relative;
    background: #0b4a97;
    background-position: center top;
}
</style>
<?php } ?>
<?php } ?>