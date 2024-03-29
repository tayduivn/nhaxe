<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1/feedback/homes/homeFeedback.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="backgroundfeedback wow fadeIn" Data-wow-duration='2s'>
  <div class="container">
    <div class="f-center-module tab-hot">
       <div class="f-center-title ">
        <ul class="f-video-tab-home stylefeedback" class="nav-tabs ">
          <li class="active"><a href="<?=$web['home_url']?>/feedback.html" data-toggle="tab"><?php echo lang('customer_feedback');?></a></li>
          
        </ul>
        
      </div>
      <div class="f-center-body">
      
          <div class="customNavigation">
              
            </div>
            
            <a class="btn btn-left prev-<?=$value['id']?>"><i class="fa fa-chevron-left"></i></a>
              <a class="btn  btn-right next-<?=$value['id']?>"><i class="fa fa-chevron-right"></i></a>
        <ul class="f-feedback-home owl-carousel owl-theme " id="feed">
          <?php if(is_array($data['content']['feedback'])) { foreach($data['content']['feedback'] as $k => $v) { ?>
          <li class="item">
            <div class="f-feedback-home-item">
              <div class="f-feedback-home-item-img col-md-12 col-sm-12 col-xs-12"> 
                <a> <img <?php  echo loadImage($v['img'],'crop','160','160',true); ?>alt="<?=$v['customers']?>" /> </a> 
              </div>
              <div class="f-feedback-home-title col-md-12 col-sm-12 col-xs-12">
                <h3> <a><?=$v['customers']?></a>
                </h3>
                 <p class="f-feedback-home-time">(<?php echo lang('label_time');?>: <?=$v['create_time']?>)</p>
                 <div class="f-feedback-home-sum">
                  <q><?=$v['content']?></q>
                  
                  </div>
              </div>
            </div>
          </li>
          <?php } } ?>
        </ul>
            
              <script>
              $(document).ready(function() {

                var owl = $("#feed");

                owl.owlCarousel({

                items : 4, //10 items above 1000px browser width
                itemsDesktop : [1000,4], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
                itemsTablet: [768,2], //2 items between 600 and 0;
                itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
                
                });

                // Custom Navigation Events
                // $(".next-<?=$value['id']?>").click(function(){
                //   owl.trigger('owl.next');
                // });
                // $(".prev-<?=$value['id']?>").click(function(){
                //   owl.trigger('owl.prev');
                // });


              });
            </script>
        <div class="clearfix"></div>
      </div>
      
    </div><!--end modue tabhot-->
    </div>
</div><!--end background feedback-->
