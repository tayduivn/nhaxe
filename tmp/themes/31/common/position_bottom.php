<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/31//common/position_bottom.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<script type="text/javascript">
$(document).ready(function() {

    $(".slick-track").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });
    $(".slick-track-dt").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 6,
        itemsDesktop: [1199, 6],
        itemsDesktopSmall: [979, 6]

    });

});
</script>
<style type="text/css">
.i-image {
    padding: 5px;
}
    .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
    background-color: #00aff2;
    background-color: #00aff2 9;
}
.phonering-alo-phone {
   position:fixed;
   visibility:hidden;
   background-color:transparent;
   width: 90px;
   height:90px;
   cursor:pointer;
   z-index:200000!important;
   -webkit-backface-visibility:hidden;
   -webkit-transform:translateZ(0);
   transition:visibility .5s;
   display:block
   }
   .phonering-alo-phone.phonering-alo-show {
   visibility:visible
   }
   @-webkit-keyframes fadeInRight {
   0% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   100% {
   opacity:1;
   -webkit-transform:none;
   transform:none
   }
   }
   @-webkit-keyframes fadeInRightBig {
   0% {
   opacity:0;
   -webkit-transform:translate3d(2000px,0,0);
   transform:translate3d(2000px,0,0)
   }
   100% {
   opacity:1;
   -webkit-transform:none;
   transform:none
   }
   }
   @-webkit-keyframes fadeOutRight {
   0% {
   opacity:1
   }
   100% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   }
   .fadeOutRight {
   -webkit-animation-name:fadeOutRight;
   animation-name:fadeOutRight
   }
   .phonering-alo-phone.phonering-alo-static {
   opacity:.6
   }
   .phonering-alo-phone.phonering-alo-hover,.phonering-alo-phone:hover {
   opacity:1
   }
   .phonering-alo-ph-circle {
   width:160px;
   height:160px;
   top:20px;
   left:20px;
   position:absolute;
   background-color:transparent;
   border-radius:100%;
   border:2px solid rgba(30,30,30,0.4);
   border:2px solid #bfebfc 9;
   opacity:.1;
   -webkit-animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
   animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
   transition:all .5s;
   -webkit-transform-origin:50% 50%;
   -ms-transform-origin:50% 50%;
   transform-origin:50% 50%
   }
   .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle {
   -webkit-animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important;
   animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle {
   -webkit-animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important;
   animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone:hover .phonering-alo-ph-circle {
   border-color:#00aff2;
   opacity:.5
   }
   .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle {
   border-color:#75eb50;
   border-color:#baf5a7 9;
   opacity:.5
   }
   .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
   border-color:#00aff2;
   border-color:#bfebfc 9;
   opacity:.5
   }
   .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle {
   border-color:#ccc;
   opacity:.5
   }
   .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle {
   border-color:#75eb50;
   opacity:.5
   }
   .phonering-alo-ph-circle-fill {
   width: 90px;
   height: 90px;
   bottom: 60px;
   left: -10px;
   z-index: 99999999;
   position: fixed;
   background-color:#000;
   border-radius:100%;
   border:2px solid transparent;
   -webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
   animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
   transition:all .5s;
   -webkit-transform-origin:50% 50%;
   -ms-transform-origin:50% 50%;
   transform-origin:50% 50%;
   }
   .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle-fill {
   -webkit-animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important;
   animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle-fill {
   -webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
   animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
   opacity:0!important
   }
   .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone:hover .phonering-alo-ph-circle-fill {
   background-color:rgba(0,175,242,0.5);
   background-color:#00aff2 9;
   opacity:.75!important
   }
   .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle-fill {
   background-color:rgba(117,235,80,0.5);
   background-color:#baf5a7 9;
   opacity:.75!important
   }
   .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle-fill {
   }
   .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle-fill {
   background-color:rgba(204,204,204,0.5);
   background-color:#ccc 9;
   opacity:.75!important
   }
   .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle-fill {
   background-color:rgba(117,235,80,0.5);
   opacity:.75!important
   }
   .phonering-alo-ph-img-circle {
   width: 50px;
   height: 50px;
   bottom: 81px;
   left: 10px;
   z-index: 99999999999;
   position: fixed;
   background:rgba(30,30,30,0.1) url(https://showroomchevrolet.com/wp-content/uploads/hotline-icon.png) no-repeat center center;
   border-radius:100%;
   border:2px solid transparent;
   -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
   animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
   -webkit-transform-origin:50% 50%;
   -ms-transform-origin:50% 50%;
   transform-origin:50% 50%;
   }
   .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
   -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important;
   animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
   -webkit-animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important;
   animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone:hover .phonering-alo-ph-img-circle {
   background-color:#00aff2
   }
   .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-img-circle {
   background-color:#75eb50;
   background-color:#75eb50 9
   }
   .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
   background-color:#00aff2;
   background-color:#00aff2 9
   }
   .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-img-circle {
   background-color:#ccc
   }
   .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {
   background-color:#75eb50
   }
   @-webkit-keyframes phonering-alo-circle-anim {
   0% {
   -webkit-transform:rotate(0) scale(.5) skew(1deg);
   -webkit-opacity:.1
   }
   30% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   -webkit-opacity:.5
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   -webkit-opacity:.1
   }
   }
   @-webkit-keyframes phonering-alo-circle-fill-anim {
   0% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   opacity:.2
   }
   100% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   }
   @-webkit-keyframes phonering-alo-circle-img-anim {
   0% {
   -webkit-transform:rotate(0) scale(1) skew(1deg)
   }
   10% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
   }
   20% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg)
   }
   30% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
   }
   40% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg)
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg)
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg)
   }
   }
   @-webkit-keyframes fadeInRight {
   0% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   -ms-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   100% {
   opacity:1;
   -webkit-transform:none;
   -ms-transform:none;
   transform:none
   }
   }
   @keyframes fadeInRight {
   0% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   -ms-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   100% {
   opacity:1;
   -webkit-transform:none;
   -ms-transform:none;
   transform:none
   }
   }
   @-webkit-keyframes fadeOutRight {
   0% {
   opacity:1
   }
   100% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   -ms-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   }
   @keyframes fadeOutRight {
   0% {
   opacity:1
   }
   100% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   -ms-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   }
   @-webkit-keyframes phonering-alo-circle-anim {
   0% {
   -webkit-transform:rotate(0) scale(.5) skew(1deg);
   transform:rotate(0) scale(.5) skew(1deg);
   opacity:.1
   }
   30% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.5
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg);
   opacity:.1
   }
   }
   @keyframes phonering-alo-circle-anim {
   0% {
   -webkit-transform:rotate(0) scale(.5) skew(1deg);
   transform:rotate(0) scale(.5) skew(1deg);
   opacity:.1
   }
   30% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.5
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg);
   opacity:.1
   }
   }
   @-webkit-keyframes phonering-alo-circle-fill-anim {
   0% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg);
   opacity:.2
   }
   100% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   }
   @keyframes phonering-alo-circle-fill-anim {
   0% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg);
   opacity:.2
   }
   100% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   }
   @-webkit-keyframes phonering-alo-circle-img-anim {
   0% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   10% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
   transform:rotate(-25deg) scale(1) skew(1deg)
   }
   20% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg);
   transform:rotate(25deg) scale(1) skew(1deg)
   }
   30% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
   transform:rotate(-25deg) scale(1) skew(1deg)
   }
   40% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg);
   transform:rotate(25deg) scale(1) skew(1deg)
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   }
   @keyframes phonering-alo-circle-img-anim {
   0% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   10% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
   transform:rotate(-25deg) scale(1) skew(1deg)
   }
   20% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg);
   transform:rotate(25deg) scale(1) skew(1deg)
   }
   30% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
   transform:rotate(-25deg) scale(1) skew(1deg)
   }
   40% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg);
   transform:rotate(25deg) scale(1) skew(1deg)
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   }
   
   .info-modal p {
    margin-bottom: 9px;
}
.phonering-alo-ph-img-circle {
    background-color: #00aff2;
    background-color: #00aff2 9;
}
</style>
<?php if($web['info']['link_fanpage']) { ?>
<script type="text/javascript">
$(document).ready(function() {
    $('.online-support').hide();
    $('.support-icon-right h3').click(function(e) {
        e.stopPropagation();
        $('.online-support').slideToggle();
    });
    $('.online-support').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('.online-support').slideUp();
    });
});
</script>




<style type="text/css">
    .support-icon-right {
    position: fixed;
    right: 5px;
    bottom: 0;
    z-index: 999999;
    overflow: hidden;
    width: 250px;
    color: #fff!important;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}
.support-icon-right h3 {
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px!important;
    font-family: Arial;
    color: #fff!important;
    margin: 0!important;
    background-color: #3a5795;
    cursor: pointer;
    border-radius: 10px 10px 0px 0px;
    overflow: hidden;
}
.support-icon-right i {
    padding: 10px;
    font-size: 24px;
}
.online-support {
    display: none;
}
</style>
<?php } ?>
<footer class="page-footer font-small unique-color-dark pt-0">
    
    <div class="container">
      <div class="row">
        <?=$web['footer']?>
      </div>
    </div>
    <div class="container">
        <div class="hotline-ftb">Hotline: <span>0966 896 896</span></div>
    </div>
</footer>
<?php if($web['audio'] != null) { ?>
<audio controls autoplay<?php if($web['audio']['play_again'] == 1) { ?> loop<?php } ?> style="display:none">
<source src="<?=$web['static_upload']?><?=$web['audio']['audio']?>" type="audio/mpeg">
</audio>
<?php } ?>

<div class="clearfix"></div>
<!--Modal chon tinh thanh-->
<div class="modal fade" id="choosePoint" tabindex="-1" role="dialog" aria-labelledby="chooseLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chooseLabel">Chọn tỉnh thành</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <style>
                .selectDistrict {
                    margin-top: 20px;
                }
            </style>
            <div class="modal-body row">
                <div class="col-md-12">
                    <select class="form-control select2" name="provideId" id="provideId">
                        <option value="">Chọn tỉnh thành</option>
                    </select>
                </div>
                <div class="col-md-12 selectDistrict" style="display: none">
                    <select class="form-control select2" name="districtId" id="districtId">
                        <option value="">Chọn quận huyện</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="typePoint">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

    <style>
    h3 {
        font-size: 18px;
    }
    </style>






<?php if($web['anvui_id'] == 'TC1OHntfnujP') { ?>
<!-- <script type="text/javascript">
  $('#adsModal').modal('show');
</script> -->
<?php } ?>



<?php if($web['anvui_id'] == 'TC0Ai1r7za9DJh1i' || $web['anvui_id'] == 'TC0B31rGICznLw9n' || $web['anvui_id'] == 'TC0BO1rObet9WJXn' || $web['anvui_id'] == 'TC0Ah1r7aBgqH7jX' || $web['anvui_id'] == 'TC1OHntfnujP') { ?>
<script>
    var isRound;
    var depatureDate;
    var startPoint;
    var startName;
    var endPoint;
    var endName;
    $(document).ready(function() {
        

        $('.select2').select2({
            dropdownParent: $('#choosePoint'),
            width: '100%',
            height: '40px'
        });


        $('#search-btn').on('click', function() {

            
            var url = '/dat-ve';

            depatureDate = $('#depatureDate').val();


            startPoint = $('#startPoint').val();
            endPoint = $('#endPoint').val();

            startName = $('#startPoint option:selected').text();
            endName = $('#endPoint option:selected').text();

            if (startPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điểm đi',
                });
                return false;
            }

            if (endPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điếm đến',
                });
                return false;
            }

            if (depatureDate === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn ngày đi',
                    onClose: function () {
                        $('#depatureDate').datepicker('show');
                    }
                });

                return false;
            }


            if (depatureDate) {
                url += '?depatureDate=' + depatureDate;
            }
           

            if(startName){
                url += '&startPoint=' + startName;
            }

            if(endName){
                url += '&endPoint=' + endName;
            }

            if (startPoint) {
                url += '&startId=' + startPoint;
            }


            if (endPoint) {
                url += '&endId=' + endPoint;
            }

            location = url;
        });

        //Lay danh sach tinh thanh
        $.ajax({
            type: 'POST',
            url: 'https://ticket-new-dot-dobody-anvui.appspot.com/point/getList',
            dataType: "json",
            data: JSON.stringify({ companyId: '<?=$data['content']['anvuiId']?>', count: 1000, pointType : 1 }),
            success: function(data) {
                
                var checklistCity = [];
              

                var listCityNew = [];
                provinceData = data.results.result;
                $.each(provinceData, function(index, val) {

                    console.log(checklistCity.indexOf(val.province));
                    if(checklistCity.indexOf(val.province) == -1){
                            checklistCity.push(val.province);

                            listCityNew.push({'text': val.province, 'children': []})
                    }

                });

                $.each(listCityNew, function(index, val) {
                  console.log();
                  $.each(provinceData, function(key, item) {

                      if(val.text === item.province){
                        listCityNew[index]['children'].push({'id' : item.id, 'text' : item.name})
                      }

                  });
                })


                console.log(listCityNew);
                $("#startPoint").select2({

                    data: listCityNew
                });
                $("#endPoint").select2({

                    data: listCityNew
                })
            }
        });

        

        $("#provideId").change(function() {
            var proviceId = $(this).val();

            $('#districtId').html('<option value="">Chọn điểm</option>');

            if (proviceId !== '') {
                district = provinceData.filter(function(val) {
                    return val.id === proviceId;
                });

                if ($('#typePoint').val() == 1) {
                    $('#startId').val(proviceId);
                    $('#startPoint').val(district[0].provinceName);
                } else {
                    $('#endId').val(proviceId);
                    $('#endPoint').val(district[0].provinceName);
                }

                $.each(district[0].listDistrict, function(index, val) {
                    $('#districtId').append("<option value='" + val.districtId + "'>" + val.districtName + "</option>");
                });
                $('.selectDistrict').show();
            } else {
                $('.selectDistrict').hide();

                if ($('#typePoint').val() == 1) {
                    $('#startId').val('');
                    $('#startPoint').val('');
                } else {
                    $('#endId').val('');
                    $('#endPoint').val('');
                }
            }
        });

        $("#districtId").change(function() {
            var districtId = $(this).val();
            if (districtId !== '') {
                var districtDetail = district[0].listDistrict.filter(function(val) {
                    return val.districtId === districtId;
                });
                if ($('#typePoint').val() == 1) {
                    $('#startId').val(districtId);
                    $('#startPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                } else {
                    $('#endId').val(districtId);
                    $('#endPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                }

                $('#choosePoint').modal('hide');
            } else {
                if ($('#typePoint').val() == 1) {
                    $('#startId').val(district[0].id);
                    $('#startPoint').val(district[0].provinceName);
                } else {
                    $('#endId').val(district[0].id);
                    $('#endPoint').val(district[0].provinceName);
                }

            }

        });

        $('#depatureDate').val($.format.date(new Date(), "dd/MM/yyyy"));



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

        var companyId = '<?=$data['content']['anvuiId']?>';
        var urlAndroid = '';
        var urlIOs = '';
        if (companyId == 'TC03h1IzK1jParS') {
            urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.phucxuyen';
            urlIOs = 'https://itunes.apple.com/app/id1364355888';
        }

        if (isMobile.any() != null) {
            if (isMobile.any()[0] == 'Android' && urlAndroid != '') {
                window.location.href = urlAndroid;
            }

            if ((isMobile.any()[0] == 'iPhone' || isMobile.any()[0] == 'iPad' || isMobile.any()[0] == 'iPod') && urlIOs != '') {
                window.location.href = urlIOs;
            }
        }

        $('#depatureDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
            onSelect: function(dateStr) {
                changeDate(dateStr);
            }
        });

        $('#returnDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
        });

        //Tìm chuyến
        $('#search-btn').click(function() {
            depatureDate = $('#depatureDate').val();
            returnDate = $('#returnDate').val();
            startPoint = $('#startPoint').val();
            endPoint = $('#endPoint').val();

            $('.start').html(routeName.split("-")[0]);
            $('.end').html(routeName.split("-")[1]);
            $('.startDate').html($('#depatureDate').val());
            $('.startDateReturn').html($('#returnDate').val());

            if (startPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điểm đi',
                });
                return false;
            }

            if (endPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điếm đến',
                });
                return false;
            }

            if (depatureDate === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn ngày đi',
                    onClose: function() {
                        $('#depatureDate').datepicker('show');
                    }
                });

                return false;
            }

            //có khứ hồi
            if (isRound == 1) {

                if (returnDate === "") {
                    $.alert({
                        title: 'Cảnh báo!',
                        type: 'red',
                        typeAnimated: true,
                        content: 'Chưa chọn ngày về',
                        onClose: function() {
                            $('#returnDate').datepicker('show');
                        }
                    });
                    return false;
                }

                $('.endDate').html($('#returnDate').val());

                $('#trip-round').show();
                $('#total-round').show();

            }

            $('#trip-oneway').show();
            $('#next-step').show();
            $('#booking-form').hide();

        });

        //chọn khứ hồi
        $('#roundtrip').click(function() {
            isRound = 1;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').prop('disabled', false);
            changeDate($('#depatureDate').val());
        });

        //chọn một chiều
        $('#oneway').click(function() {
            isRound = 0;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').val('');
            $('#returnDate').prop('disabled', true);
        });
    });

    function changeDate(dateStr) {
        if (dateStr === '') {
            return;
        }
        var date_Str = '';
        for (var i = 0; i < 10; i++) {

            if (i == 1 || i == 0) {
                date_Str += dateStr.charAt(i + 3);
            } else if (i == 3 || i == 4) {
                date_Str += dateStr.charAt(i - 3);
            } else date_Str += dateStr.charAt(i);
        }
        if (isRound == 1) {
            $('#returnDate').datepicker("option", {
                minDate: new Date(date_Str)
            });
            $('#returnDate').val(dateStr);
        }
    }

    </script>

<?php } elseif($web['anvui_id'] === 'TC0A31qrgPVJBW3a') { ?>

    <script>
    var isRound;
    var companyId = $("base").attr("id");
    console.log(companyId);
    $(document).ready(function() {
        var dataAds = getAds();
        if (dataAds.length > 0) {
            $('#adsModal').find('img').attr('src', dataAds[0].link || "<?=$web['static_temp']?><?=$web['temp']?>/statics/images/ads.png");
            $('#adsModal').modal('show');
        }
        $('.img-ads').click(function() {
            $('#adsModal').modal('hide');
        });
        console.log(getAds());

        $('.select2').select2({
            dropdownParent: $('#choosePoint'),
            width: '100%',
            height: '40px'
        });

        //Lay danh sach tinh thanh
        $.ajax({
            type: 'POST',
            url: 'https://ticket-new-dot-dobody-anvui.appspot.com/point/getList',
            dataType: "json",
            data: JSON.stringify({ companyId: companyId }),
            success: function(data) {
                provinceData = data.results.result;
                $.each(provinceData, function(index, val) {
                    console.log(val);

                    if(val.province == val.address ){
                      $('#provideId').append("<option value='" + val.id + "'>" + val.name + "</option>");
                      $('#diemdi').append('<li id="'+val.id+'"> <a class="dropdown-item "  data-id="'+ val.id +'" data-name="'+ val.name +'" onclick="chondiemdi(this)">'+ val.name +'</a> <ul class="cl'+val.id+'"></ul> </li>');
                      $('#diemden').append('<li  id="'+val.id+'"> <a class="dropdown-item" data-id="'+ val.id +'" data-name="'+ val.name +'" onclick="chondiemden(this)">'+ val.name +'</a> <ul class="cl'+val.id+'"></ul> </li>');
                    }
                    


                });


                $('#diemdi').append('<li id="Qninh"> <a class="dropdown-item "  data-id="Quảng Ninh" data-name="Quảng Ninh" onclick="chondiemdi(this)">Quảng Ninh</a> <ul class="clQninh"></ul> </li>');
                    

                $('#diemden').append('<li id="Qninh"> <a class="dropdown-item "  data-id="Quảng Ninh" data-name="Quảng Ninh" onclick="chondiemden(this)">Quảng Ninh</a> <ul class="clQninh"></ul> </li>');

                $.each(provinceData, function(index, v) {


                    if(v.province == "Hà Nội"){
                        $("#diemdi .clP0A71qtIbBWTw0N").append('<li ><a class="dropdown-item" data-id="'+ v.id +'" data-name="'+ v.name +'" onclick="chondiemdi(this)">'+ v.name +'</a></li>')
                        $("#diemden .clP0A71qtIbBWTw0N").append('<li ><a class="dropdown-item" data-id="'+ v.id +'" data-name="'+ v.name +'" onclick="chondiemden(this)">'+ v.name +'</a></li>')
                    }

                    if(v.province == "Quảng Ninh"){
                        $("#diemdi .clQninh").append('<li ><a class="dropdown-item" data-id="'+ v.id +'" data-name="'+ v.name +'" onclick="chondiemdi(this)">'+ v.name +'</a></li>')
                        $("#diemden .clQninh").append('<li ><a class="dropdown-item" data-id="'+ v.id +'" data-name="'+ v.name +'" onclick="chondiemden(this)">'+ v.name +'</a></li>')
                    }
                    
                })



                
            }
        });
        
        $('#startPoint').click(function() {
            $('#typePoint').val(1);
            $('#choosePoint').modal('show');
            $('.select2').val([]).trigger('change');
        });

        $('#endPoint').click(function() {
            $('#typePoint').val(2);
            $('#choosePoint').modal('show');
            $('.select2').val([]).trigger('change');
        });

        $("#provideId").change(function() {
            var proviceId = $(this).val();

            $('#districtId').html('<option value="">Chọn điểm</option>');

            if (proviceId !== '') {
                district = provinceData.filter(function(val) {
                    return val.id === proviceId;
                });

                if ($('#typePoint').val() == 1) {
                    $('#startId').val(proviceId);
                    $('#startPoint').val(district[0].provinceName);
                } else {
                    $('#endId').val(proviceId);
                    $('#endPoint').val(district[0].provinceName);
                }

                $.each(district[0].listDistrict, function(index, val) {
                    $('#districtId').append("<option value='" + val.districtId + "'>" + val.districtName + "</option>");
                });
                $('.selectDistrict').show();
            } else {
                $('.selectDistrict').hide();

                if ($('#typePoint').val() == 1) {
                    $('#startId').val('');
                    $('#startPoint').val('');
                } else {
                    $('#endId').val('');
                    $('#endPoint').val('');
                }
            }
        });

        $("#districtId").change(function() {
            var districtId = $(this).val();
            if (districtId !== '') {
                var districtDetail = district[0].listDistrict.filter(function(val) {
                    return val.districtId === districtId;
                });
                if ($('#typePoint').val() == 1) {
                    $('#startId').val(districtId);
                    $('#startPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                } else {
                    $('#endId').val(districtId);
                    $('#endPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                }

                $('#choosePoint').modal('hide');
            } else {
                if ($('#typePoint').val() == 1) {
                    $('#startId').val(district[0].id);
                    $('#startPoint').val(district[0].provinceName);
                } else {
                    $('#endId').val(district[0].id);
                    $('#endPoint').val(district[0].provinceName);
                }

            }

        });

        $('#depatureDate').val($.format.date(new Date(), "dd/MM/yyyy"));



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

        var urlAndroid = '';
        var urlIOs = '';
        if (companyId == 'TC03h1IzK1jParS') {
            urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.phucxuyen';
            urlIOs = 'https://itunes.apple.com/app/id1364355888';
        }

        if (isMobile.any() != null) {
            if (isMobile.any()[0] == 'Android' && urlAndroid != '') {
                window.location.href = urlAndroid;
            }

            if ((isMobile.any()[0] == 'iPhone' || isMobile.any()[0] == 'iPad' || isMobile.any()[0] == 'iPod') && urlIOs != '') {
                window.location.href = urlIOs;
            }
        }

        $('#depatureDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
            onSelect: function(dateStr) {
                changeDate(dateStr);
            }
        });

        $('#returnDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
        });

        //Tìm chuyến
        $('#search-btn').click(function() {

            depatureDate = $('#depatureDate').val();
            returnDate = $('#returnDate').val();
            startPoint = $('#startPoint').val();
            endPoint = $('#endPoint').val();


            $('.startDate').html($('#depatureDate').val());
            $('.startDateReturn').html($('#returnDate').val());

            if (startPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điểm đi',
                });
                return false;
            }

            if (endPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điếm đến',
                });
                return false;
            }

            if (depatureDate === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn ngày đi',
                    onClose: function() {
                        $('#depatureDate').datepicker('show');
                    }
                });

                return false;
            }

            //có khứ hồi
            if (isRound == 1) {

                if (returnDate === "") {
                    $.alert({
                        title: 'Cảnh báo!',
                        type: 'red',
                        typeAnimated: true,
                        content: 'Chưa chọn ngày về',
                        onClose: function() {
                            $('#returnDate').datepicker('show');
                        }
                    });
                    return false;
                }

                $('.endDate').html($('#returnDate').val());

                $('#trip-round').show();
                $('#total-round').show();

            }

            $('#trip-oneway').show();
            $('#next-step').show();
            $('#booking-form').hide();

        });

        //chọn khứ hồi
        $('#roundtrip').click(function() {
            isRound = 1;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').prop('disabled', false);
            changeDate($('#depatureDate').val());
        });
        


        //chọn một chiều
        $('#oneway').click(function() {
            isRound = 0;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').val('');
            $('#returnDate').prop('disabled', true);
        });


        
    });

    

    $('body').on('click','#diemdi #P0A71qtIbBWTw0N',function(){
        $("#diemden li").show();
        $("#diemden #P0A71qtIbBWTw0N").hide(); 
    })

    $('body').on('click','#diemdi #Qninh',function(){
        $("#diemden li").show();
        $("#diemden #Qninh").hide(); 
    })

    
    function chondiemdi(data){

        $('#startPoint').val($(data).data('name')) ;
        $('#startId').val($(data).data('id'));
        $('.textdiemdi').text($(data).data('name'));
        

        console.log($('#startPoint').val());
    }
    function chondiemden(data){

        $('#endPoint').val($(data).data('name')) ;
        $('#endId').val($(data).data('id'));
        $('.textdiemden').text($(data).data('name'));
        console.log($('#startPoint').val());
    }
    function changeDate(dateStr) {
        if (dateStr === '') {
            return;
        }
        var date_Str = '';
        for (var i = 0; i < 10; i++) {

            if (i == 1 || i == 0) {
                date_Str += dateStr.charAt(i + 3);
            } else if (i == 3 || i == 4) {
                date_Str += dateStr.charAt(i - 3);
            } else date_Str += dateStr.charAt(i);
        }
        if (isRound == 1) {
            $('#returnDate').datepicker("option", {
                minDate: new Date(date_Str)
            });
            $('#returnDate').val(dateStr);
        }
    }

    

    
    </script>
<?php } else { ?>

    <script>
    var isRound;
    $(document).ready(function() {
        $('#adsModal').modal('show');
        $('.img-ads').click(function() {
            $('#adsModal').modal('hide');
        });
        //Lay danh sach tinh thanh
        $.ajax({
            type: 'POST',
            url: 'https://dobody-anvui.appspot.com/point/get_province_and_point',
            dataType: "json",
            data: JSON.stringify({ companyId: $("base").attr("id") }),
            success: function(data) {
                provinceData = data.results.result;
                $.each(provinceData, function(index, val) {
                    $('#provideId').append("<option value='" + val.id + "'>" + val.provinceName + "</option>");
                });
            }
        });

        $('#startPoint').click(function() {
            $('#typePoint').val(1);
            $('#choosePoint').modal('show');
        });

        $('#endPoint').click(function() {
            $('#typePoint').val(2);
            $('#choosePoint').modal('show');
        });

        $("#provideId").change(function() {
            var proviceId = $(this).val();

            $('#districtId').html('<option value="">Chọn điểm</option>');

            if (proviceId !== '') {
                district = provinceData.filter(function(val) {
                    return val.id === proviceId;
                });

                if ($('#typePoint').val() == 1) {
                    $('#startId').val(proviceId);
                    $('#startPoint').val(district[0].unitName + " " + district[0].provinceName);
                } else {
                    $('#endId').val(proviceId);
                    $('#endPoint').val(district[0].unitName + " " + district[0].provinceName);
                }

                $.each(district[0].listDistrict, function(index, val) {
                    $('#districtId').append("<option value='" + val.districtId + "'>" + val.districtName + "</option>");
                });
                $('.selectDistrict').show();
            } else {
                $('.selectDistrict').hide();

                if ($('#typePoint').val() == 1) {
                    $('#startId').val('');
                    $('#startPoint').val('');
                } else {
                    $('#endId').val('');
                    $('#endPoint').val('');
                }
            }
        });

        $("#districtId").change(function() {
            var districtId = $(this).val();
            if (districtId !== '') {
                var districtDetail = district[0].listDistrict.filter(function(val) {
                    return val.districtId === districtId;
                });
                if ($('#typePoint').val() == 1) {
                    $('#startId').val(districtId);
                    $('#startPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                } else {
                    $('#endId').val(districtId);
                    $('#endPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                }

                $('#choosePoint').modal('hide');
            } else {
                if ($('#typePoint').val() == 1) {
                    $('#startId').val(district[0].id);
                    $('#startPoint').val(district[0].unitName + " " + district[0].provinceName);
                } else {
                    $('#endId').val(district[0].id);
                    $('#endPoint').val(district[0].unitName + " " + district[0].provinceName);
                }

            }

        });

        $('#depatureDate').val($.format.date(new Date(), "dd/MM/yyyy"));



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

        var companyId = '<?=$data['content']['anvuiId']?>';
        var urlAndroid = '';
        var urlIOs = '';
        if (companyId == 'TC03h1IzK1jParS') {
            urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.phucxuyen';
            urlIOs = 'https://itunes.apple.com/app/id1364355888';
        }

        if (isMobile.any() != null) {
            if (isMobile.any()[0] == 'Android' && urlAndroid != '') {
                window.location.href = urlAndroid;
            }

            if ((isMobile.any()[0] == 'iPhone' || isMobile.any()[0] == 'iPad' || isMobile.any()[0] == 'iPod') && urlIOs != '') {
                window.location.href = urlIOs;
            }
        }

        $('#depatureDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
            onSelect: function(dateStr) {
                changeDate(dateStr);
            }
        });

        $('#returnDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
        });

        //Tìm chuyến
        $('#search-btn').click(function() {
            depatureDate = $('#depatureDate').val();
            returnDate = $('#returnDate').val();
            startPoint = $('#startPoint').val();
            endPoint = $('#endPoint').val();

            $('.start').html(routeName.split("-")[0]);
            $('.end').html(routeName.split("-")[1]);
            $('.startDate').html($('#depatureDate').val());
            $('.startDateReturn').html($('#returnDate').val());

            if (startPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điểm đi',
                });
                return false;
            }

            if (endPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điếm đến',
                });
                return false;
            }

            if (depatureDate === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn ngày đi',
                    onClose: function() {
                        $('#depatureDate').datepicker('show');
                    }
                });

                return false;
            }

            //có khứ hồi
            if (isRound == 1) {

                if (returnDate === "") {
                    $.alert({
                        title: 'Cảnh báo!',
                        type: 'red',
                        typeAnimated: true,
                        content: 'Chưa chọn ngày về',
                        onClose: function() {
                            $('#returnDate').datepicker('show');
                        }
                    });
                    return false;
                }

                $('.endDate').html($('#returnDate').val());

                $('#trip-round').show();
                $('#total-round').show();

            }

            $('#trip-oneway').show();
            $('#next-step').show();
            $('#booking-form').hide();

        });

        //chọn khứ hồi
        $('#roundtrip').click(function() {
            isRound = 1;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').prop('disabled', false);
            changeDate($('#depatureDate').val());
        });

        //chọn một chiều
        $('#oneway').click(function() {
            isRound = 0;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').val('');
            $('#returnDate').prop('disabled', true);
        });
    });

    function changeDate(dateStr) {
        if (dateStr === '') {
            return;
        }
        var date_Str = '';
        for (var i = 0; i < 10; i++) {

            if (i == 1 || i == 0) {
                date_Str += dateStr.charAt(i + 3);
            } else if (i == 3 || i == 4) {
                date_Str += dateStr.charAt(i - 3);
            } else date_Str += dateStr.charAt(i);
        }
        if (isRound == 1) {
            $('#returnDate').datepicker("option", {
                minDate: new Date(date_Str)
            });
            $('#returnDate').val(dateStr);
        }
    }

    </script>
    <?php } ?>



