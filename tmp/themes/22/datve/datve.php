<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22//datve/datve.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><!--<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/styledv2.css?v=4.8"> -->
<style type="text/css">
    .main-wrap{
        padding-top: 20px;
    }
</style>
<section class="booking-page">
<div class="my-container">
<div class="title-block">
        <h1>Đặt chỗ trực tuyến</h1>
        <p class="" style="font-size:20px;" >tại Đan Anh Limousine</p>
    </div>
<div class="booking-area main-wrap pr">
      
  <!--end product-tab-wrap-->
    <div class="search-wrap pr clearfix">
        <div class="tab-content">
            <div id="bus-search-box " class="wow fadeIn animated animated" data-wow-duration="100ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 100ms; animation-delay: 100ms; animation-name: fadeIn; display: block;">
                <div class="col-sm-12 title"><span>Vé Xe Khách</span></div>
                <form action="dat-ve" id="search-form ">
                    <div class="row pr" id="Bus-search-panel-box-div">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="startPoint" >Điểm đi</label>
                                <div class="iconic-input">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="Bus swap">
                            <div class="form-group">
                                <a><i class="fa icon-switch"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="endPoint" >Điểm đến</label>
                                <div class="iconic-input">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="depatureDate" >Ngày đi</label>
                                <div class="iconic-input">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <div class="search-btn">
                                    
                                    <input type="hidden" id="startId" name="startId">
                                    <input type="hidden" name="returnDate">
                                    <input type="hidden" id="endId" name="endId">
                                    <button type="submit" class="btn btn-orange" id="search-btn">Tìm chuyến xe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="row" id="Bus-search-option-div">
                <div class="col-lg-12">
                    <a href="javascript:;" id="aBasic_Bus" class="orange" style="display: none;">Tìm kiếm cơ bản</a>
                    <a href="javascript:;" id="aAdvanced_Bus" class="orange" style="">Tìm kiếm nâng cao</a>
                    <a data-toggle="modal" data-target="#suggest-new-route" class="suggest-route">Đề Xuất Tuyến Mới</a>
                </div>
            </div>
        </div>
    </div>
  <div class="form-tab-booking">
        
  </div>
  <!--search-wrap-->
  
</div>

</div>
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
<div class="modal fade" id="adsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/images/ads.png" style="width: 100%" class="img-responsive img-ads" alt="">
            </div>
        </div>
    </div>
</div>
</section>

<style>
    h3 {
        font-size: 18px;
    }
</style>
<script>
    <?php if($data['content']['timeBookHolder']) { ?>
    var timeBookHolder = <?=$data['content']['timeBookHolder']?>;
    <?php } else { ?>
    var timeBookHolder = '';
    <?php } ?>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    companyId = $("base").attr("id");

    routeId = getParameterByName('routeId');

    $("#routeIdd").val(routeId);
    if(routeId != ''){
        $.ajax({
            type: "POST",
            url: "https://www.anvui.vn/pointNX",
            data: {
                routeId: routeId
            },
            success: function (result) {

                // routeBackId = result.routeBack;

                //lấy thông tin điểm đầu
                
                $('#startPoint').val(result.a1[0].pointName).change();
                $("#startId").val(result.a1[0].pointId)

                
                $('#endPoint').val(result.a2[0].pointName).change();
                $("#endId").val(result.a2[0].pointId)



            }
        });
    }
    

    function filterFunction() {
        var input, filter, ul, li, a, i;
        $(".showDropStartPoint").show();
        input = document.getElementById("startPointD");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }

    }
    function filterFunctionEndPoint() {
        var input, filter, ul, li, a, i;
        $(".showDropEndPoint").show();
        input = document.getElementById("endPointD");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdownEnd");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }

    }
    function selectStartPoint(data){
        startPointId = $(data).data('id');
        startPointname = $(data).data('name');
        $("#startPointD").val(startPointname);
        $("#startId").val(startPointId);
        $(".showDropStartPoint").hide();

    }
    function selectEndPoint(data){
        endPointId = $(data).data('id');
        endPointname = $(data).data('name');
        $("#endPointD").val(endPointname);
        $("#endId").val(endPointId);
        $(".showDropEndPoint").hide();

    }

    $.ajax({
    type: 'POST',
    url: 'https://dobody-anvui.appspot.com/point/get_province_and_point',
    dataType: "json",
    data: JSON.stringify({companyId: '<?=$web["anvui_id"]?>'}),

    success: function (data) {

        


            provinceData = data.results.result;
            $.each(provinceData, function (index, val) {
               
                $('.showDropStartPoint').append("<a data-Id='" + val.id + "' data-name = '"+val.provinceName+"' onclick = 'selectStartPoint(this)'>" + val.provinceName + "</a>");


                $('.showDropEndPoint').append("<a data-Id='" + val.id + "' data-name = '"+val.provinceName+"' onclick = 'selectEndPoint(this)'>" + val.provinceName + "</a>");

                 
            });
            $.each(provinceData, function (index, val) {
                listDistrict = val.listDistrict;
                $.each(listDistrict, function (index, item) {

                    $('.showDropStartPoint').append("<a data-Id='" + item.districtId + "' data-name = '"+item.districtName+"' onclick = 'selectStartPoint(this)'>" + item.districtName + "</a>");

                    $('.showDropEndPoint').append("<a data-Id='" + item.districtId + "' data-name = '"+item.districtName+"' onclick = 'selectEndPoint(this)'>" + item.districtName + "</a>");
                })
            });

                
            
        

        }
    });
$("#search-btn-show").click(function(){
alert($("#tags").val());
})
    
    var isRound;
    $(document).ready(function () {
        var dataAds =getAds();
        if(dataAds.length>0){
            $('#adsModal').find('img').attr('src',dataAds[0].link||"<?=$web['static_temp']?><?=$web['temp']?>/statics/images/ads.png");
            $('#adsModal').modal('show');
        }
        $('.img-ads').click(function () {
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
            url: 'https://dobody-anvui.appspot.com/point/get_province_and_point',
            dataType: "json",
            data: JSON.stringify({companyId: '<?=$web["anvui_id"]?>'}),
            success: function (data) {
                provinceData = data.results.result;
                $.each(provinceData, function (index, val) {
                    $('#provideId').append("<option value='" + val.id + "'>" + val.provinceName + "</option>");
                });
            }
        });

        $('#startPoint').click(function () {
            $('#typePoint').val(1);
            $('#choosePoint').modal('show');
        });

        $('#endPoint').click(function () {
            $('#typePoint').val(2);
            $('#choosePoint').modal('show');
        });

        $("#provideId").change(function() {
            var proviceId = $(this).val();

            $('#districtId').html('<option value="">Chọn điểm</option>');

            if(proviceId !== '') {
                district = provinceData.filter(function(val) {
                    return val.id === proviceId;
                });

                if($('#typePoint').val() == 1) {
                    $('#startId').val(proviceId);
                    $('#startPoint').val(district[0].unitName + " " + district[0].provinceName);
                } else {
                    $('#endId').val(proviceId);
                    $('#endPoint').val(district[0].unitName + " " + district[0].provinceName);
                }

                $.each(district[0].listDistrict, function (index, val) {
                    $('#districtId').append("<option value='" + val.districtId + "'>" + val.districtName + "</option>");
                });
                $('.selectDistrict').show();
            } else {
                $('.selectDistrict').hide();

                if($('#typePoint').val() == 1) {
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
            if(districtId !== '') {
                var districtDetail = district[0].listDistrict.filter(function(val) {
                    return val.districtId === districtId;
                });
                if($('#typePoint').val() == 1) {
                    $('#startId').val(districtId);
                    $('#startPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                } else {
                    $('#endId').val(districtId);
                    $('#endPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                }

                $('#choosePoint').modal('hide');
            } else {
                if($('#typePoint').val() == 1) {
                    $('#startId').val(district[0].id);
                    $('#startPoint').val(district[0].unitName + " " + district[0].provinceName);
                } else {
                    $('#endId').val(district[0].id);
                    $('#endPoint').val(district[0].unitName + " " + district[0].provinceName);
                }

            }

        });

        $('#depatureDate').val($.format.date(new Date() ,"dd/MM/yyyy"));

        

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

        var companyId = <?=$web["anvui_id"]?>;
        var urlAndroid = '';
        var urlIOs = '';
        if(companyId == 'TC03h1IzK1jParS')
        {
            urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.phucxuyen';
            urlIOs = 'https://itunes.apple.com/app/id1364355888';
        }

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

        $('#depatureDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
            onSelect: function (dateStr) {
                changeDate(dateStr);
            }
        });

        $('#returnDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
        });

        //Tìm chuyến
        $('#search-btn').click(function () {
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
                    onClose: function () {
                        $('#depatureDate').datepicker('show');
                    }
                });

                return false;
            }

            //có khứ hồi
            if(isRound == 1) {

                if (returnDate === "") {
                    $.alert({
                        title: 'Cảnh báo!',
                        type: 'red',
                        typeAnimated: true,
                        content: 'Chưa chọn ngày về',
                        onClose: function () {
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
        $('#roundtrip').click(function () {
            isRound = 1;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').prop('disabled', false);
            changeDate($('#depatureDate').val());
        });

        //chọn một chiều
        $('#oneway').click(function () {
            isRound = 0;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').val('');
            $('#returnDate').prop('disabled', true);
        });
    });

    function changeDate(dateStr) {
        if(dateStr === '') {
            return;
        }
        var date_Str = '';
        for (var i = 0; i < 10; i++) {

            if (i == 1 || i == 0) {
                date_Str += dateStr.charAt(i + 3);
            } else if (i == 3 || i == 4) {
                date_Str += dateStr.charAt(i - 3);
            }
            else date_Str += dateStr.charAt(i);
        }
        if(isRound == 1) {
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
            async:false,
            data: JSON.stringify({companyId: companyId,date:d}),
            success: function (data) {
                if(data.code===200){
                    ddata=data.results.popUps;
                }
            }
        });
        return ddata;
    }

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

</script>
<style type="text/css">
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .dropdown-content .showDropStartPoint, .showDropEndPoint {
        position: absolute;
        width: 250px;
        z-index: 9999;
        background: #fff;
        border: 1px solid #ddd;
        top: 40px;
        height: 250px;
        overflow-y: scroll;
    }
</style>