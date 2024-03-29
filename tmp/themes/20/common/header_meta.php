<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/20//common/header_meta.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?=$web['ga']?>
<!--<base s_name="interbuslines" href="<?=$web['home_url']?>" extention="<?=$web['dotExtension']?>" />-->
<base id="<?=$web['anvui_id']?>" href="<?=$web['home_url']?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"  /> 
<title><?=$data['head']['ogsite_name']?></title>
<meta name="description" content="<?=$data['head']['description']?>">
<meta name="keywords" content="<?=$data['head']['keywords']?>">
<meta name="robots" content="INDEX, FOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?=$web['static_upload']?><?=$data['head']['favicon']?>" />
<link rel="icon" href="<?=$web['static_upload']?><?=$data['head']['favicon']?>" />

<meta property="og:title" content="<?=$data['head']['ogtitle']?>"/> 
<meta property="og:image" content="<?=$data['head']['ogimage']?>"/>
<meta property="og:description" content="<?=$data['head']['ogdescription']?>"/> 
<meta property="og:site_name" content="<?=$data['head']['ogsite_name']?>"/>


 
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128562266-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128562266-1');
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '519389348530629');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=519389348530629&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code --><!-- Example -->
