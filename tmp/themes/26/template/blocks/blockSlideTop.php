<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/26/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div style="background: rgb(13,51,148);background: linear-gradient(150deg, rgba(13,51,148,1) 0%, rgba(7,26,74,1) 100%);">
    <div class="t_pad20">
        <div class="container">
            <div class="t_hotelsearchboxhederflex">
                <div class="t_hotelsearchboxhedercontainer">
                    <div class="img" style="font-size: 20px; color: #fff">
                        <i class="fa fa-ticket" aria-hidden="true"></i>
                    </div>
                    <div class="t_hotelsearchboxheder">Tìm chuyến</div>
                </div>
                
            </div>
            <div class="t_hotelsearchboxcontainer">
                <div class="t_hotelsearchboxcity">
                    <div class="t_searchbox n-dropdownbox extend" id="RowFrom">
                        <div class="img">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <input autocomplete="off" type="search" class="n-line-input dropdown-trigger t-dropdowinput" data-target='dropdown111' placeholder="Điểm đi">
                    </div>
                </div>
                <div class="t_hotelsearchboxdate">
                    <div id="t_date-range-picker" style="display: flex;">
                        <div class="t_daterange" style="margin-right: 10px">
                            <div class="img">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <input autocomplete="off" type="search" class="n-line-input dropdown-trigger t-dropdowinput" data-target='dropdown111' placeholder="Điểm đến">
                        </div>
                    </div>
                </div>
                <div class="t_hotelsearchboxdate">
                    <div id="t_date-range-picker" style="display: flex;">
                        <div class="t_daterange" style="margin-right: 10px">
                            <div class="img">
                                <img src="/Assets/img/calendar.svg" />
                            </div>
                            <span class="t_daterangedate" id="t_date-range" style="margin-left: 10px">Ng&#224;y nhận ph&#242;ng</span>
                        </div>
                    </div>
                </div>
                <div class="t_hotelsearchboxbtn">
                    <a id="hotelhomesearchbtn" class="btn waves-effect waves-light t_btnhotelsearchbox">
                        T&#236;m kiếm
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class=" t_hotelsearchmoreinfo">
                <div class="t_hotelresort">
                    <div style="font-size:2.5rem;text-transform:uppercase">
                        Kh&#225;ch sạn, resort v&#224; hơn nữa </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <div class="t_flex">
            <div class="t_hotelsearchmoreinfomobile">
                <div class="t_flex t_CustomerFirstmobile">
                    <div class="img">
                        <img src="/Assets/img/Group 16497.svg" />
                    </div>
                    <div class="text">
                        Customer First
                        Gurantee
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $t = 0 ?>
<?php if(is_array($data)) { foreach($data as $k => $v) { ?> 
<?php if($t == 0) { ?>
<div class="container">
    <div class="t_pad20">
        <div class="t_hotelhometitle"><?=$v['title']?></div>
        <div class="t_hotelhometitle1"><?=$v['description']?></div>
    </div>
    <div id="t_hotelTravelthemesslider" class="t_hotelTravelthemes t_homeslider">
            <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                <div class="t_homehotelwrapper">
                    <div class="border" style="border-color:#F3780C">
                        <a class="t_homehotel-information" href="/vi/travel-theme/dang_cap" title="">
                            <div class="t_homehotel-background-size">
                                <div class="t_homehotel-image">
                                    <img <?php  echo loadImage($v2['src_link'],'none','1170','500',true); ?>>
                                    <div style="position: absolute;color: white;font-size: 3.6rem;font-weight: bold;top: 37%;left: 0; right: 0;"><?=$v2['title']?></div>
                                </div>
                                <div class="t_suggeshotel-info">
                                    <div class="t_suggeshotel-name">
                                        <div class="name"><?=$v2['title']?></div>
                                        <div class="address">
                                            <div style="white-space: nowrap;text-overflow: ellipsis; overflow: hidden;"><?=$v2['description']?></div>
                                        </div>
                                    </div>
                                    <div style="text-align:right">
                                        <span style="font-size:1.6rem; color:#4F80FF; cursor:pointer;text-decoration:underline">
                                            Xem ngay n&#224;o
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } } ?>
            
    </div>
</div>
<?php } elseif($t == 1) { ?>
<div class=" t_getinspi n-top" style="padding: 20px 0px;">
            <div class="container p-blog-title-box" style="padding-bottom:20px">
                <div class="t_hotelhometitle">
                    <?=$v['title']?>
                </div>
                <div class="t_hotelhometitle1"><?=$v['description']?></div>
            </div>

            <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
            <div class="row n-no-margin n-row-top ">
                <div class="container dl-discover-more-cover">
                        <div class="col m6 s5 n-gallery p-blog-dis-cover-more-img ">
                            <div title="<?=$v2['title']?>" class="p-backg-img-blogdis" style="background:url(https://cdn.anvui.vn/<?=$v2['src_link']?>) no-repeat center; "></div>
                        </div>
                    <div class="col m6 s7 n-trek p-box-backg">
                            <div class="row">
                                <div class="col s12 l12 ">
                                    <h3 class="p-blog-dis-cover-more-title">
                                        <a class="c-black-14" href="/vi/blog/bi-kip-du-lich-maldives" title="<?=$v2['title']?>">
                                            <?=$v2['title']?>
                                        </a>
                                    </h3>
                                </div>
                                <div class="col s12 l12 n-trek-content">
                                    <div class="n-trek-content-inner">
                                        <div class=" p-blog-dis-cover-more-des" >
                                            <?=$v2['description']?>
                                        </div>
                                    </div>
                                    <a class="btn n-btn-large n-btn-oval n-bg-orange n-font-white" href="">Đọc ngay</a>
                                </div>
                            </div>

                    </div>
                </div>

            </div>
            <?php } } ?>


        </div>
<?php } elseif($i == 2) { ?>
<div class="container">
    <div class="t_pad20">
        <div class="t_hotelhometitle">
Ưu đ&#227;i tốt nhất h&#244;m nay            </div>
        <div class="t_hotelhometitle1">
Những lựa chọn theo chủ đề gợi &#253; cho chuyến đi của bạn            </div>
    </div>

    <div class="t_hotelTopBestDealscontainer" id="t_hotelTopBestDeals">
    </div>
    
</div>
<?php } elseif($t == 2) { ?>
<div class="container">
        <div class="t_pad20">
            <div class="t_hotelhometitle">
Ưu đãi tốt nhất hôm nay            </div>
            <div class="t_hotelhometitle1">
Những lựa chọn theo chủ đề gợi ý cho chuyến đi của bạn            </div>
        </div>

        <div class="t_hotelTopBestDealscontainer" id="t_hotelTopBestDeals">
        <a href="#" target="_blank" rel=""><img src="https://cdn.tripu.vn/vietravel/Slider/c5f4647e-fd4c-4a33-bade-1723b0948a17" alt="Booking Flow"></a></div>
    </div>
<?php } ?>
<?php $t++ ?>
<?php } } ?>

<script type="text/javascript">
$(document).ready(function() {

    $("#t_hotelTravelthemesslider").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

});
</script>