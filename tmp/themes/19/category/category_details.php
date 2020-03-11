<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19//category/category_details.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container bg-3">
<div class="news-breadcrumb">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
<li class="breadcrumb-item"><a href="<?=$v['href']?>"><?=$v['text']?></a> <i class="fa fa-caret-right"></i></li>
<?php } } ?>
</ol>
</nav>
</div>
<div class="row">
<div class="col-md-12">
<div class="news-title">
<h3><?=$data['content']['categoryDetail']['title']?></h3>
<div class="news-date">
<div class="left"><i class="fa fa-clock-o"></i> <?php echo lang('post_date');?>: <?=$data['content']['categoryDetail']['create_time']?></div>
</div>
</div>
<div class="news-content">
<?=$data['content']['categoryDetail']['details']?>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>

<?php if($web['anvui_id'] == TC0Ba1rTOa1WJOCp AND $data['content']['categoryDetail']['id'] == 146) { ?>
<script type="text/javascript">
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    var urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.baytau';
    var urlIOs = 'https://itunes.apple.com/app/id1480796501';
    

    if(isMobile.any() != null) {
        if(isMobile.any()[0] == 'Android' && urlAndroid != '')
        {
            window.location.href = urlAndroid;
        }

        if((isMobile.any()[0] == 'iPhone' || isMobile.any()[0] == 'iPad' || isMobile.any()[0] == 'iPod') && urlIOs != '')
        {
            window.location.href = urlIOs;
        }
    }
</script>
<?php } ?>
<?php if($web['anvui_id'] == TC0Cn1rx2Fp3dumx AND $data['content']['categoryDetail']['id'] == 147) { ?>
<script type="text/javascript">
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    var urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.letranlimousines';
    var urlIOs = 'https://itunes.apple.com/app/id1483034227';
    

    if(isMobile.any() != null) {
        if(isMobile.any()[0] == 'Android' && urlAndroid != '')
        {
            window.location.href = urlAndroid;
        }

        if((isMobile.any()[0] == 'iPhone' || isMobile.any()[0] == 'iPad' || isMobile.any()[0] == 'iPod') && urlIOs != '')
        {
            window.location.href = urlIOs;
        }
    }
</script>
<?php } ?>
<?php if($web['anvui_id'] == TC0Dy1sPqJsYVkgG AND $data['content']['categoryDetail']['id'] == 166) { ?>
<script type="text/javascript">
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    var urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.phucxuyen';
    var urlIOs = 'https://itunes.apple.com/app/1364355888?l=vi';
    

    if(isMobile.any() != null) {
        if(isMobile.any()[0] == 'Android' && urlAndroid != '')
        {
            window.location.href = urlAndroid;
        }

        if((isMobile.any()[0] == 'iPhone' || isMobile.any()[0] == 'iPad' || isMobile.any()[0] == 'iPod') && urlIOs != '')
        {
            window.location.href = urlIOs;
        }
    }
</script>

<?php } ?>
<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $(".news-title").offset().top
        },1000);
    });
</script>