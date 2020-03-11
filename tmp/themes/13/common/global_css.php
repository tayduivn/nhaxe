<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/13//common/global_css.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/bootstrap.min.css?v=1.4">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/js/jquery-ui-1.9.2.custom/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/jquery.datepicker.lunar.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/jquery-confirm-v3.3.0/dist/jquery-confirm.min.css">
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/owl-carousel/owl.theme.css">
 
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/main.css?v=4.5">
<?php if($web['anvui_id'] === 'TC04J1GKSSth4UY' || $web['anvui_id'] === 'TC0Ah1r7bCvzRlpF' || $web['anvui_id'] === 'TC08D1q8jZt6mDzV' || $web['anvui_id'] === 'TC08Z1qHHZBxlNLt' || $web['anvui_id'] === 'TC0BA1rJ3ah7wdMl' || $web['anvui_id'] === 'TC07C1pjfHQtyduK' || $web['anvui_id'] == 'TC0Bp1rZFPJNRYty' || $web['anvui_id'] == 'TC0CK1rlUyn1qquy' || $web['anvui_id'] == 'TC05wM7dDRQSo6') { ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/main2.css?v=4.9">
<?php } ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/style3.css?v=4.2">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/style4.css?v=4.8">


<?php if($web['anvui_id'] == 'TC0Bp1rZFPJNRYty') { ?>
<style type="text/css">
#logo{
margin-top: 35px;
}
</style>
<?php } ?>

<style type="text/css">
html {-webkit-tap-highlight-color:<?=$web['background']['color']?>;} a,.more,.services.boxed .details h4 a:hover,.services.iconic h3,.content a,.description a:hover,.description a:focus,.microlocations p a:hover,.microlocations p a:focus,.hentry .entry-content h2 a:hover,.hentry .entry-content h2 a:focus,.footer .contact-data a:hover,.footer .contact-data a:focus,.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today,.faqs .expanded,.faqs .expanded:after ,.black .ico,.icon,.testimonials h6:before,blockquote:before {color:<?=$web['background']['color']?>;} .color,.pager a.current,.pager a:hover,.pager a:focus,table.hover tr:hover td,.tabs li.active a,.social li:hover,.data th,.tabs li a:hover,.tabs li a:focus,.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current,.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current,.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover,.slicknav_menu .slicknav_icon-bar {background-color:<?=$web['background']['color']?> ;} .xdsoft_datetimepicker .xdsoft_calendar td:hover,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div:hover,button, input[type="button"], input[type="reset"], input[type="submit"],#wp-calendar #today,.woocommerce .woocommerce-breadcrumb,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {background:<?=$web['background']['color']?> !important;} .btn:hover,.btn:focus, button, input[type="button"], input[type="reset"], input[type="submit"] {background:<?=$web['background']['color']?> ;color:#fff !important;} .more:after,.single a:after,.main .static-content .entry-content a:after {border-bottom:2px dotted <?=$web['background']['color']?>;} .tabs li.active a:after {border-color:<?=$web['background']['color']?> transparent transparent transparent;}
.btn:hover, .btn:focus {
    background: #c00 !important;
    color: #fff !important;
}
footer,.thongke{
background: <?=$web['background']['color']?> !important;
}
.home-box h2 {
color: <?=$web['background']['color']?> !important;
}
.br-header nav ul li a{
color: <?=$web['background']['color']?> !important;
}
.route-list {
    border: 3px solid <?=$web['background']['color']?> !important;
}
.btn-oder {
    background-color: #ffffff;
    color: #c1112c;
    font-size: 2rem;
    padding: .5rem 1.875rem .5rem 1.875rem;
    font-weight: 700;
    border-radius: 6.25rem;
    border: solid 2px <?=$web['background']['color']?> ;
}
h3.heading {
    margin: 0 0 2px;
    /* padding: 10px 0; */
    
    
    font-size: 16px;

    height: 48px;
    line-height: 45px;
    color: <?=$web['background']['color']?>;
    border-bottom: 3px solid <?=$web['background']['color']?> !important;
    background: <?=$web['background']['color']?> !important;
}
#top-nav{
    background: <?=$web['background']['color']?>;
    
}
.trip, #booking-form h3, .label-cus{
color: <?=$web['background']['color']?> !important;
}
.selected {
    background-color: #c1112c !important;
    color: #ffffff;
}
#steps ul .active, .offer-tag{
background: <?=$web['background']['color']?> !important;
}
 button.btn, a.btn{
background: <?=$web['background']['color']?> !important;
}
div.btn{
    background: #c00 !important;
}
#steps ul .active:before{
background: <?=$web['background']['color']?> !important;
}
.offer-tag:before{
border-left: 10px solid <?=$web['background']['color']?> !important;
}
#steps ul .active:after {
    border-left: 25px solid <?=$web['background']['color']?> !important;
}
h3.heading {
    margin: 0 0 2px;
    /* padding: 10px 0; */
    
    
    font-size: 16px;

    height: 48px;
    line-height: 45px;
    color: <?=$web['background']['color']?>;
    border-bottom: 3px solid <?=$web['background']['color']?> !important;
    background: <?=$web['background']['color']?> !important;
}
#top-nav{
    background: <?=$web['background']['color']?>;
    
}
.trip, #booking-form h3, .label-cus{
color: <?=$web['background']['color']?> !important;
}
.ticket-ac-btn {
    border-radius: 10px !important;
    height: 38px;
}
</style>

<?php if($web['anvui_id'] == 'TC0Bp1rZFPJNRYty') { ?>
<style type="text/css">
#top-nav, .w-menu-h{
display: none !important;
}
</style>
<?php } ?>