<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19//home/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="wrapper">
<div id="reason-flight" class="reason">
    <div class="reason-form">
        <div class="reason-item-img">
            <div class="reason-flight reason-flight_hunting"></div>
        </div>
        <h2 class="title">ĐẶT VÉ DỄ DÀNG</h2>
        <p>Đặt vé mọi lúc, mọi nơi với vài thao tác đơn giản<a data-toggle="modal" data-target="#flightPrice-modal" class="reason-show"></a></p>
    </div>
    <div class="reason-form">
        <div class="reason-item-img">
            <div class="reason-flight reason-flight_security"></div>
        </div>
        <h2 class="title">THANH TOÁN TIỆN LỢI</h2>
        <p>Cung cấp tất cả các hình thức thanh toán<br> Tiện lợi, đảm bảo an toàn.</p>
    </div>
    <div class="reason-form">
        <div class="reason-item-img">
            <div class="reason-flight reason-flight_support"></div>
        </div>
        <h2 class="title">HỖ TRỢ MIỄN PHÍ 24/7</h2>
        <p>Gọi ngay <?=$web['info']['phone']?> để được hỗ trợ.<br> Hoàn toàn<span class="orange"> không - mất - phí!</span></p>
    </div>
</div>
</div>
<?php if($web['anvui_id'] != 'TC0Cn1rx2Fp3dumx' || $web['anvui_id'] != 'TC0Dy1sPqJsYVkgG') { ?>
<div class="av-product">
    <div class="wrapper">
        <div class="div_title">
            <?php if($web['anvui_id'] == "TC03h1IzK1jParS") { ?>
            <h2><span class="hot">Dịch Vụ Xe</span></h2>
            <?php } else { ?>
        <h3 class="title">Đội xe</h3>
        <?php } ?>
        </div>

    </div>
    
    <div id="slider_pro">
        <div aria-live="polite" class="slick-list draggable">
            <div class="slick-track">
                <?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
                <div class="item-d ">
                    <div class="w-item effect_up" style="animation-duration: 0.9s;">
                        <div class="i-image">
                            <a href="<?=$v['link']?>" tabindex="0">
                                      <?php if($v['listImages']['0'] != "0" && isset($v['listImages']['0'])) { ?>

                                        <img src="" data-image="<?=$v['listImages']['1']?>" class="img-responsive" alt="<?=$v['routeName']?>" alt="<?=$v['routeName']?>" id='key-<?=$k?>' />

                                        <?php } else { ?>

                                        <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/bottom%20-%20sin.jpg" class="img-responsive" alt="<?=$v['routeName']?>" />

                                        <?php } ?>
                                    </a>
                        </div>
                        <div class="i-desc">
                            <div class="w-desc" style="    text-align: center;">
                                <div class="i-title">
                                    <h3><a href="<?=$v['link']?>" tabindex="0"><?=$v['routeName']?></a></h3>
                                </div>
                                <div class="i-content">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <?php } } ?>

            </div>
        </div>
    </div>
</div>
<?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
    <script type="text/javascript">
        var link<?=$k?> = "<?=$v['listImages']['0']?>";

        var linkImage<?=$k?> = link<?=$k?>.replace("http://", "https://");


        console.log(linkImage<?=$k?>);

        $("#key-"+<?=$k?>).attr('src', linkImage<?=$k?>)




    </script>
<?php } } ?>
<?php } ?>
<script type="text/javascript">
$(document).ready(function() {

    $(".slick-track").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

});
</script>
<style type="text/css">
.w-item {
    padding: 0px 15px;
}
</style>
<?php $_B['temp']->printhome(); ?>
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

<?php if($web['anvui_id'] == 'TC0A31qrgPVJBW3a') { ?>
    <script>
    var isRound;
    $(document).ready(function() {
        

        $('.select2').select2({
            dropdownParent: $('#choosePoint'),
            width: '100%',
            height: '40px'
        });

        //Lay danh sach tinh thanh
        $.ajax({
            type: 'POST',
            url: 'https://dobody-anvui.appspot.com/point/get_province_and_point',
            dataType: "json",
            data: JSON.stringify({ companyId: '<?=$data['content']['anvuiId']?>' }),
            success: function(data) {
                provinceData = data.results.result;
                $.each(provinceData, function(index, val) {
                    console.log(val);
                    $('#provideId').append("<option value='" + val.id + "'>" + val.provinceName + "</option>");
                    $('#diemdi').append('<li id="'+val.id+'"> <a class="dropdown-item "  data-id="'+ val.id +'" data-name="'+ val.provinceName +'" onclick="chondiemdi(this)">'+ val.provinceName +'</a> <ul class="cl'+val.id+'"></ul> </li>');
                    $('#diemden').append('<li  id="'+val.id+'"> <a class="dropdown-item" data-id="'+ val.id +'" data-name="'+ val.provinceName +'" onclick="chondiemden(this)">'+ val.provinceName +'</a> <ul class="cl'+val.id+'"></ul> </li>');
                });

                $.each(data.results.result[1].listDistrict, function(k, v){
                    $("#diemdi .clP22").append('<li ><a class="dropdown-item" data-id="'+ v.districtId +'" data-name="'+ v.districtName +'" onclick="chondiemdi(this)">'+ v.districtName +'</a></li>')
                    $("#diemden .clP22").append('<li ><a class="dropdown-item" data-id="'+ v.districtId +'" data-name="'+ v.districtName +'" onclick="chondiemden(this)">'+ v.districtName +'</a></li>')
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

    $("#diemdi #P22").click(function(){
        $("#diemden li").show();
        $("#diemden #P22").hide(); 
    })

    $('body').on('click','#diemdi #P22',function(){
        $("#diemden li").show();
        $("#diemden #P22").hide(); 
    })

    $('body').on('click','#diemdi #P01',function(){
        $("#diemden li").show();
        $("#diemden #P01").hide(); 
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

    function getAds() {
        var companyId = $("base").attr("id");
        var dnow = new Date();
        var d = dnow.getTime();
        var ddata = [];
        $.ajax({
            type: 'POST',
            url: 'https://dobody-anvui.appspot.com/popup/get-list',
            dataType: "json",
            async: false,
            data: JSON.stringify({ companyId: companyId, date: d }),
            success: function(data) {
                if (data.code === 200) {
                    ddata = data.results.popUps;
                }
            }
        });
        return ddata;
    }

    
    </script>
<?php } elseif($web['anvui_id'] == 'TC0Ai1r7za9DJh1i' || $web['anvui_id'] == 'TC0B31rGICznLw9n' || $web['anvui_id'] == 'TC0BO1rObet9WJXn' || $web['anvui_id'] == 'TC0Ah1r7aBgqH7jX' || $web['anvui_id'] == 'TC1OHntfnujP' || $web['anvui_id'] == 'TC0Ba1rTOa1WJOCp' || $web['anvui_id'] == 'TC0Cn1rx2Fp3dumx' || $web['anvui_id'] == 'TC04r1lru1vOk3c' || $web['anvui_id'] == 'TC0821q4JlOdY2Tz' || $web['anvui_id'] == 'TC0Dy1sPqJsYVkgG') { ?>

<?php if($web['anvui_id'] == 'TC04r1lru1vOk3c') { ?>
<script type="text/javascript">
    //Lay danh sach tinh thanh
        $.ajax({
            type: 'POST',
            url: 'https://ticket-new-dot-dobody-anvui.appspot.com/point/getList',
            dataType: "json",
            data: JSON.stringify({ companyId: '<?=$data['content']['anvuiId']?>', count: 1000, pointType : 1 }),
            success: function(data) {
                
                var checklistCity = [];
               
                var listCity = [{
                        "text": "Tỉnh",
                        "children": []
                    },
                    {
                        "text": "Quận - Huyện",
                        "children": []
                    }
                ];
                provinceData = data.results.result;
                $.each(provinceData, function(index, val) {

                    
                    if(checklistCity.indexOf(val.province) == -1){
                            checklistCity.push(val.province);
                            listCity[0]['children'].push({'id' : val.province, 'text' : val.province});
                    }

                    listCity[1]['children'].push({'id' : val.id, 'text' : val.name});
                });


                console.log(listCity);
                $("#startPoint").select2({

                    data: listCity
                });
                $("#endPoint").select2({

                    data: listCity
                })
            }
        });
</script>
<?php } else { ?>
<script type="text/javascript">
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
</script>
<?php } ?>

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

<?php } else { ?>
        <script>
    var isRound;
    $(document).ready(function() {
        // var dataAds = getAds();
        // if (dataAds.length > 0) {
        //     $('#adsModal').find('img').attr('src', dataAds[0].link || "<?=$web['static_temp']?><?=$web['temp']?>/statics/images/ads.png");
        //     $('#adsModal').modal('show');
        // }
        // $('.img-ads').click(function() {
        //     $('#adsModal').modal('hide');
        // });
        // console.log(getAds());

        $('.select2').select2({
            dropdownParent: $('#choosePoint'),
            width: '100%',
            height: '40px'
        });

        //Lay danh sach tinh thanh
        $.ajax({
            type: 'POST',
            url: 'https://dobody-anvui.appspot.com/point/get_province_and_point',
            dataType: "json",
            data: JSON.stringify({ companyId: '<?=$data['content']['anvuiId']?>' }),
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

    function getAds() {
        var companyId = $("base").attr("id");
        var dnow = new Date();
        var d = dnow.getTime();
        var ddata = [];
        $.ajax({
            type: 'POST',
            url: 'https://dobody-anvui.appspot.com/popup/get-list',
            dataType: "json",
            async: false,
            data: JSON.stringify({ companyId: companyId, date: d }),
            success: function(data) {
                if (data.code === 200) {
                    ddata = data.results.popUps;
                }
            }
        });
        return ddata;
    }
    </script>
<?php } ?>
