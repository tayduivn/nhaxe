<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/25//datve/datve.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/styledv2.css?v=4.8">
<style type="text/css">
    .ticket-ac-btn {
    border-radius: 10px !important;
    height: 38px;
    line-height: 26px;
}
</style>
<div class="container" style="margin-top: 10px;">
    <div class="">
        <h3 style="margin-top: 44px; padding-bottom: 0px; display: none;"><img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/images/booking.png" style="width: 45px; height: 45px; margin-right: 10px;" alt="">
            <span class="title"><?php echo lang('booking');?></span></h3>
    </div>
    

    <h3 class="heading"><i class="fa fa-bus"></i> <span>Mua vé trực tuyến</span></h3>
    <div class="clearfix"></div>
    <div class="route-list datve-home" style="margin-top: 0px">
        <form action="dat-ve" id="search-form">
            <div class="row chonchieu">
                <button type="button" class="btn btn-oder selectday selected" id="oneway">Một chiều</button>
                <!-- <button type="button" class="btn btn-oder selectday" id="roundtrip">Khứ hồi</button> -->
            </div>
            <div class="row" style="margin-bottom: -15px;">
                <div class="clearfix">
                    <div class="col-md-6">
                        <label for="startPoint" class="label-cus">Điểm đi</label>
                        <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="endPoint" class="label-cus">Điểm đến</label>
                        <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                    </div>
                </div>
                    

                    <script>
                    
                    </script>
                    <style type="text/css">
                        .ui-autocomplete-group {
                            line-height: 30px;
                            background-color: #aaa;
                        }
                        .ui-menu-item {
                            padding-left: 10px;
                        }
                    </style>

                
                <div class="col-xs-12 hide">
                    <label for="vehicleType" class="label-cus">Loại xe</label>
                    <select name="vehicleType" id="vehicleType" class="form-control">
                    </select>
                </div>

                <div class="clearfix">
                    <div class="col-md-6">
                        <label for="depatureDate" class="label-cus">Ngày đi</label>
                        <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="depatureDate" class="label-cus">Ngày về</label>
                        <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" readonly>
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" id="startId" name="startId">
                        <input type="hidden" id="routeIdd" name="routeIdd" >
                        <input type="hidden" id="endId" name="endId">
                        <button type="submit" class="btn" id="search-btn">TÌM CHUYẾN XE</button>
                    </div>
                </div>

            </div>

        </form>
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

<style>
    h3 {
        font-size: 18px;
    }
</style>

<?php if($web['anvui_id'] == 'TC09m1ql0HQCiixG') { ?>
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
                    $('#startPoint').val(district[0].provinceName);
                } else {
                    $('#endId').val(proviceId);
                    $('#endPoint').val( district[0].provinceName);
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
                    $('#startPoint').val(district[0].districtName + " " + district[0].provinceName);
                } else {
                    $('#endId').val(district[0].id);
                    $('#endPoint').val(district[0].districtName + " " + district[0].provinceName);
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
<?php } else { ?>
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
                    $('#startPoint').val(district[0].provinceName + " dz " + district[0].provinceName);
                } else {
                    $('#endId').val(proviceId);
                    $('#endPoint').val(district[0].provinceName + " fjk " + district[0].provinceName);
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
                    $('#startPoint').val(district[0].provinceName + " " + district[0].provinceName);
                } else {
                    $('#endId').val(district[0].id);
                    $('#endPoint').val(district[0].provinceName + " " + district[0].provinceName);
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
<?php } ?>
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