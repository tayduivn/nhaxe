<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/24//datve/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style>
    body {
        /*background: url("https://sonycenter.sony.com.vn/Data/Sites/1/media/vinh-ha-long_schk/halong-2.jpg");*/
        /*background: url("<?=$web['static_temp']?><?=$web['temp']?>/statics/images/halong-2.jpg");
        background-size: auto 100%;*/
    }

    .loader {
        top: 50%;
        left: 50%;
        border: 16px solid #f3f3f3;
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        position: absolute;
    }

    #loading {
        padding-top: 150px;
        top: 0;
        position: fixed;
        width: 100%;
        height: 100%;
        z-index: 999;
        background-color: rgba(0, 0, 0, 0.5);
        text-align: center;
    }
    div#next-step {
        display: none !important;
    }
    #roundtrip{
        display: none;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/styledv2.css?v=5.0">
<div class="route-list datve-home wp-datve-dz" style="margin-top: 0px">
    <div class="container">
        <form action="dat-ve" id="search-form" style="display: none;">
            
            <div class="row" style="margin-bottom: -15px;">
                <div class="clearfix">
                    <div class="row chonchieu" style="display: none;">
                        <button type="button" class="btn btn-oder selectday selected" id="oneway">Một chiều</button>
                        <!-- <button type="button" class="btn btn-oder selectday" id="roundtrip">Khứ hồi</button> -->
                    </div>
                    <div class="col-md-3 ">
                        <label for="startPoint" class="label-cus">Điểm đi</label>
                        <div class="iconic-input">
                            <i class="fa fa-map-marker"></i>
                            <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <label for="endPoint" class="label-cus">Điểm đến</label>
                        <div class="iconic-input">
                            <i class="fa fa-map-marker"></i>
                            <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <label for="depatureDate" class="label-cus">Ngày đi</label>
                        <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                    </div>
                    <div class="col-md-6" style="display: none;">
                        <label for="depatureDate" class="label-cus">Ngày về</label>
                        <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" readonly>
                    </div>
                    <div class="col-md-3 ">
                        <input type="hidden" id="startId" name="startId">
                        <input type="hidden" id="routeIdd" name="routeIdd" >
                        <input type="hidden" id="endId" name="endId">
                        <button type="submit" class="btn" id="search-btn" style="    margin-top: 24px;">TÌM KIẾM</button>
                    </div>
                </div>

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
                    
                </div>

            </div>

        </form>
    </div>
</div>
<style type="text/css">
    .col-2{
        width: 20%;
        float: left;
    }
    .wp-datve-dz{
        background: #ffc432;
    }
    .wp-datve-dz {
        background: #ffc432;
        border: none !important;
    }
    #search-form {
        /* background: #fff; */
        padding: 20px 0px;
        position: relative;
    }
</style>
<div id="loading" style="display: none;">
    <div class="loader"></div>
</div>
<div class="container">
    <div class="row">
            <div id="select-trip">
                <div id="trip-oneway" style="display: none">
                <div class="col-md-12">
                    <div id="steps">
                        <ul class="list-step clearfix">
                            <li class="active">Chọn chuyến <span></span> </li>
                            <li>Chi tiết vé<span></span></li>
                            <li>Thanh toán <span></span></li>
                        </ul>
                    </div>
                    <h3 class="chooseticket">1. Lựa chọn chuyến đi</h3>
                    <h4 class="trip">
                        <strong class="start"></strong>
                        <span class="scb-to"> Tới: </span>
                        <strong class="end"></strong>
                         <span id="selecttypecars">
                        </span>
                    </h4>
                    <div class="oneway-info">
                        <span class="fdate-highlight">
                            Ngày đi: <strong class="startDate"></strong>
                        </span>
                    </div>
                    <div class="table-responsive list-trip">
                        <div class="row">
                            <div id="list-oneway" class="col-md-12" style="padding: 0px; float: left; width: 100%">

                            </div>
                            <div class="col-md-12" style="padding: 10px 0px; float: left; width: 100%">
                                <div id="select-seat-oneway">
                                    <div class="col-md-8">
                                    <div class="row">
                                    <div class="col-md-6">
                                    <div class="select-seat">
                                    <h3 class="trip-info">Chọn ghế chuyến đi</h3>
                                    <ul class="chuthich"><li><div class="ghetrong"></div> Ghế trống</li><li><div class="ghedachon"></div> Ghế đã chọn</li><li><div class="ghedaban"></div> Ghế đã bán</li></ul>
                                    <div id="seatMapOneWay" class="row"></div>
                                    </div>
                                    <div class="select-seat" id="chooseRound" style="display: none">
                                    <h3 class="trip-info">Chọn ghế chuyến về</h3>
                                    <p style="padding-left: 15px; padding-bottom: 20px; font-style: italic">* Trẻ em vẫn được tính chỗ và giá vé bằng 100% vé người lớn. </p>
                                    <ul class="chuthich"><li><div class="ghetrong"></div> Ghế trống</li><li><div class="ghedachon"></div> Ghế đã chọn</li><li><div class="ghedaban"></div> Ghế đã bán</li><li><div class="ghetreem"></div> Ghế trẻ em</li></ul>
                                    <div id="seatMapRound" class="row"></div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">

                                    <div class="select-seat">
                                    <h3 class="trip-info">Thông tin hành khách</h3>
                                    <p style="padding-left: 15px; padding-bottom: 20px;">Quý khách vui lòng nhập thông tin chính xác </p>
                                    <div class="row form-customer">
                                    <div class="col-md-12"><label for="fullname" style="display: none;">Họ và tên (<span class="required">*</span>)</label><input type="text" placeholder="Họ và tên" class="form-control" name="fullname" id="fullname" autofocus required></div>
                                    <div class="col-md-12"><label for="phoneNumber" style="display: none;">Số điện thoại (<span class="required">*</span>)</label><input type="text" placeholder="Số điện thoại" class="form-control" name="phoneNumber" id="phoneNumber" required></div>
                                    <div class="col-md-12" style="display: none;"><label for="phoneNumber" style="display: none;">Email</label><input type="email" placeholder="Email" class="form-control" name="email" id="email"></div>
                                    <div class="col-md-12"><label for="phoneNumber" style="display: none;">Ghi chú</label><textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea></div>
                                    <div class="col-md-12"><input autocomplete="off" class="col-md-5 form-control" id="promotionCode" style="width: auto;" type="text" placeholder="Mã khuyến mại"><button type="button" class="btn btn-info col-md-3" id="checkPromotion">Kiểm tra</button></div>
                                    </div>

                                    <div class="detail-customer-info">
                                    <label class="container-checkbox" for="transshipment" style="display:none">Đón tận nơi - Trả tận nơi';
                                    <input type="checkbox" id="transshipment">
                                    <span class="checkmark"></span>
                                    </label>
                                    <div class="content-boxd">
                                    <div class="tab-content">
                                    <div id="fromstart" class="tab-pane fade active in">
                                    <div class="transshipmentOneway">
                                    <div class="">
                                    <label for="transshipmentInPointOneway">Nhập điểm đón </label>
                                    <input class="form-control" name="pickUpAddress" placeholder="Nhập điểm đón" id="pickUpAddress"/>
                                    </div>
                                    </div>
                                    </div>
                                    <div id="toend" class="tab-pane active in">
                                    <div class="">
                                    <label for="transshipmentOffPointOneway">Nhập điểm trả </label>
                                    <input class="form-control" name="dropOffAddress" placeholder="Nhập điểm trả" id="dropOffAddress"/>
                                    </div>
                                    </div>
                                    </div>
                                                                    


                                    </div>

                                    </div>


                                            

                                    </div>
                                    </div>
                                    </div>


                                    </div>
                                    <div class="col-md-4 payment-info">
                                    <div class="col-md-12 customer-info">
                                    <h4 class="trip-info ticket-detail">Chi tiết giá vé</h4>
                                    <div class="total-title">
                                    <h4>Lượt đi</h4>
                                    <div class="total-inside row">
                                    <div class="col-md-12">Giá ghế: <span class="price" id="adultMoneyOneway">0 VND</span> <br></div>
                                    <div class="col-md-12" style="display:none;">Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br></div>
                                    </div>
                                    <div class="subtotal">Tổng tiền lượt đi<strong id="totalMoneyOneway">0 VND</strong></div>
                                    <div class="col-md-12" style="display:none;">Phí trung chuyển: <span class="price" id="transshipmentPriceOneway">0 VND</span> <br></div>
                                    </div>
                                    <div class="total-title" id="total-round" style="display:none;">
                                    <h4>Lượt về</h4>
                                    <div class="total-inside row">
                                    <div class="col-md-12">Ghế đã chọn: <span class="seatlist" id="gheve"></span> <br></div>
                                    <div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyReturn">0 VND</span> <br></div>
                                    <div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyReturn">0 VND</span> <br></div>
                                    </div>
                                    <div class="subtotal">Tổng tiền lượt về<br><strong id="totalMoneyReturn">0 VND</strong></div>
                                    </div>
                                    <div id="promotion" style="display: none">
                                    <h4>Khuyến mãi</h4>
                                    <div class="promotion-div row"><div class="col-md-12">Giảm giá: <span class="price" id="promotionPrice"></span></div></div>
                                    </div>
                                    <div class="subtotal">Tổng tiền<strong id="totalMoney" style="float: right;">0 VND</strong></div>
                                    </div>

                                    <div class="select-seat" id="select-seat-round" style="display: none">           
                                    <h3 class="trip-info">Thông tin chuyến về</h3>           
                                    <ul><li><strong>Chuyến về</strong></li><li>Ngày đi: <strong class="startDateReturn"></strong></li><li>Tuyến đường: <strong class="routeNameReturn"></strong></li><li>Giờ xuất phát: <strong class="intimeReturn"></strong></li></ul>           
                                    </div>           
                                    <div class="col-md-12 payment">           
                                    <div class="col-md-12 payment-dialog">           
                                    <h3 class="trip-info">Thanh toán</h3>           
                                    <div class="payment-form">           
                                    <div class="radio">           
                                    <label class="radio">Thanh toán bằng thẻ nội địa<input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="1"><span class="checkround"></span></label>           
                                        
                                    <label class="radio" id="radiochuyenkhoan" style="display: none">Chuyển khoản <input type="radio" class="paymenttype" name="paymenttype" value="6"><span class="checkround"></span></label>           
                                    </div>           
                                    <center><button type="button" id="hoanthanhbtn" class="btn" onclick="hoanthanhbtndatve(this)" >Xác nhận đặt vé </button><button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">Thông tin chuyển khoản</button></center>           
                                    </div>           
                                    </div>           
                                    </div>           
                                    </div> 
                                    </div>   
                            </div>
                        </div>
                    </div>

                    <div id="trip-round" style="display: none">

                        <h3 class="chooseticket">2. Lựa chọn chuyến về</h3>
                        <h4 class="trip">
                            <strong class="end"></strong>
                            <span class="scb-to"> Tới: </span>
                            <strong class="start"></strong>

                           
                        </h4>
                        <div class="oneway-info">
                            <span class="fdate-highlight">
                                Ngày đi: <strong class="endDate"></strong>
                            </span>
                        </div>
                        <div class="table-responsive list-trip">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Chuyến xe</th>
                                    <th>Loại xe</th>
                                    <th>Khởi hành</th>
                                    <th>Đến</th>
                                    <th>Ghế trống</th>
                                    <th>Giá vé</th>
                                </tr>
                                </thead>
                                <tbody id="list-roundway">

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="click-back">
                    </div>
                </div>
                </div>
                
                <div id="next-step" class="scrollDown" style="display: none">
                    <button type="button" class="btn" id="select-seat">Tiếp tục</button>
                    <button type="button" class="btn" id="back">Chọn lại</button>
                </div>
            </div>
            
    </div>
</div>

<!--Modal-->
<div class="modal fade" id="chuyenkhoan" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Thông tin chuyển khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Nội dung: <i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></h3>

                <p><strong>Ngân hàng BIDV</strong></p>
                <p>Chủ tài khoản: VŨ THANH HOÀI - Số tài khoản: 1601 0000 064 640</p>
                <p>Chi nhánh: Ngân hàng BIDV Sở Giao dịch 3</p>

                <p><strong>Ngân hàng TECHCOMBANK</strong></p>
                <p>Chủ tài khoản: VŨ THANH HOÀI - Số tài khoản: 111 20032107 106</p>
                <p>Chi nhánh: Ngân hàng TECHCOMBANK Hà Nội</p>

                <p><strong>Ngân hàng VIETCOMBANK</strong></p>
                <p>Chủ tài khoản: VŨ THANH HOÀI - Số tài khoản: 001 10037 90795</p>
                <p>Chi nhánh: Ngân hàng VIETCOMBANK Sở Giao dịch</p>

                <p><strong>Ngân hàng VIETCOMBANK - Số tài khoản: 150 2205 120668</strong></p>
                <p>Chủ tài khoản: VŨ THANH HOÀI</p>
                <p>Chi nhánh: Ngân hàng AGRIBANK CN Hoàn Kiếm HN</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal-->

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
                        <option value="">Chọn điểm</option>
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
<script type="text/javascript">
    <?php if($data['content']['timeBookHolder']) { ?>
    var timeBookHolder = <?=$data['content']['timeBookHolder']?>;
    <?php } else { ?>
    var timeBookHolder = '';
    <?php } ?>
    
</script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/js/anvui.js?v=1.<?php echo time() ?>123"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    var routeId = getParameterByName('routeIdd');

    // if(routeId != ''){
    //     $.ajax({
    //         type: "POST",
    //         url: "https://anvui.vn/pointNX",
    //         data: {
    //             routeId: routeId
    //         },
    //         success: function (result) {

    //             // routeBackId = result.routeBack;

    //             //lấy thông tin điểm đầu
                
    //             $('#startPoint').val(result.a1[0].pointName).change();
    //             $("#startId").val(result.a1[0].pointId)

                
    //             $('#endPoint').val(result.a2[0].pointName).change();
    //             $("#endId").val(result.a2[0].pointId)



    //         }
    //     });
    // }

    $(".click-back").append('<a href="/dat-ve?routeId='+routeId+'"><i class="fa fa-chevron-left" aria-hidden="true"></i> Quay lại</a>')
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $("#booking-form").offset().top
        },1000);

        $('.select2').select2({
            dropdownParent: $('#choosePoint'),
            width: '100%',
            height: '40px'
        });
    });

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
    .select-seat{
        width: 100%;
    }
    .click-back a {
        background: #c00;
        padding: 5px 15px;
        color: #fff;
        float: right;
        margin: 15px 0px;
        border-radius: 5px;
    }
    .iconic-input i {
        color: #555;
        font-size: 18px;
        margin: 10px 0 0 10px;
        z-index: 9999;
        position: absolute;
    }
    .iconic-input input {
        padding-left: 25px;
    }
    .ticket-ac-btn {
    color: #fff;
    background: #c00;
    }
    #list-oneway li.active div.btn{
        background: #c70100 !important;
    }
</style>