<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/3/news/homes/newsHot.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="backgroundnew">
  <div class="container">
    <div class="f-center-module">
      <div class="f-center-title"> <i></i><span><?php echo lang('news_new');?></span> </div>
      <div class="f-center-body">
        <ul class="f-news row">
          <?php $i=0 ?>
          <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
          <?php if($i < 2) { ?> 
          <li class="col-md-6 col-sm-6 col-xs-6 full-xs">
            <div class="f-news-item">
              <div class="f-news-item-img"> <a href="<?=$v['link']?>" title=""> <img <?php  echo loadImage($v['img'],'crop','570','290',true); ?>class="img-responsive" alt="<?=$v['title']?>" /> </a>

              </div>
              <div class="f-news-item-title">
                
                <h3> <a title="Title" href="<?=$v['link']?>"><?=$v['title']?></a> </h3>
              </div>
            </div>

            <div class="f-new-item-sum"><?php echo cutString($v['short'],0,200); ?></div>
          </li>
          <?php } ?>
          <?php $i++ ?>
          <?php } } ?>
           
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>