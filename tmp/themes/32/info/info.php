<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/32//info/info.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="clearfix"></div>
<div class="container bg-3">
    <div class="news-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
                <li class="breadcrumb-item"><a href="<?=$v['href']?>"><?=$v['text']?></a></li>
                <?php } } ?>
            </ol>
        </nav>
    </div>
    <div class="clearfix"></div>
    <?php include $_B['temp']->load('info/info_page_info_list') ?>
    <div class="clearfix"></div>
</div>