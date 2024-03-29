<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/3//datve/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container bg-3">
    <div id="booking-form" style="display: block">
        <h3><i class="fa fa-bus fa-5"></i> Đặt vé online</h3>
        <form action="#" id="search-form">
            <div class="row chonchieu">
                <button type="button" class="btn btn-oder selectday selected" id="oneway">Một chiều</button>
                <button type="button" class="btn btn-oder selectday" id="roundtrip">Khứ hồi</button>
            </div>
            <div class="row chuyen">
                <div class="clearfix">
                    <div class="col-md-4">
                        <label for="routeId">Chuyến</label>
                        <select class="form-control" name="routeId" id="routeId">
                            <option value="">Chọn chuyến</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="startPoint">Điểm đi</label>
                        <select class="form-control" name="startPoint" id="startPoint">
                            <option value="">Điểm đi</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="endPoint">Điểm đến</label>
                        <select class="form-control" name="endPoint" id="endPoint">
                            <option value="">Điểm đến</option>
                        </select>
                    </div>
                </div>

                <div class="clearfix" style="margin-top: 10px">
                    <div class="col-md-4">
                        <label for="depatureDate">Ngày đi</label>
                        <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="depatureDate">Ngày về</label>
                        <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" readonly>
                    </div>
                    <div class="col-md-4">
                        <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                        <button type="button" class="btn" id="search-btn">TÌM CHUYẾN XE</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
    <div id="select-trip">
        <div id="trip-oneway" style="display: none">
            <h3 class="chooseticket">1. Lựa chọn chuyến đi</h3>
            <h4 class="trip">
                <strong class="start"></strong>
                <span class="scb-to"> Tới: </span>
                <strong class="end"></strong>
            </h4>
            <div class="oneway-info">
                <span class="fdate-highlight">
                    Ngày đi: <strong class="startDate"></strong>
                </span>
            </div>
            <div class="table-responsive list-trip">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Chuyến xe</th>
                        <th>Khởi hành</th>
                        <th>Đến</th>
                        <th>Ghế trống</th>
                        <th>Giá vé</th>
                    </tr>
                    </thead>
                    <tbody id="list-oneway">

                    </tbody>
                </table>
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
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Chuyến xe</th>
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
        <div id="next-step" class="scrollDown" style="display: none">
            <button type="button" class="btn" id="select-seat">Tiếp tục</button>
            <button type="button" class="btn" id="back">Chọn lại</button>
        </div>
    </div>
    <div id="select-seat-oneway" style="display: none">
        <div class="col-md-8">
            <div class="select-seat">
                <h3 class="trip-info">Thông tin chuyến đi</h3>
                <ul>
                    <li><strong>Chuyến đi</strong></li>
                    <li>Ngày đi: <strong class="startDate">31/03/2018</strong></li>
                    <li>Tuyến đường: <strong class="routeName"></strong></li>
                    <li>Giờ xuất phát: <strong class="intime">21:45</strong></li>
                </ul>
            </div>
            <div class="select-seat" id="select-seat-round" style="display: none">
                <h3 class="trip-info">Thông tin chuyến về</h3>
                <ul>
                    <li><strong>Chuyến về</strong></li>
                    <li>Ngày đi: <strong class="startDateReturn"></strong></li>
                    <li>Tuyến đường: <strong class="routeNameReturn"></strong></li>
                    <li>Giờ xuất phát: <strong class="intimeReturn"></strong></li>
                </ul>
            </div>
            <div class="select-seat">
                <h3 class="trip-info">Thông tin hành khách</h3>
                <p style="padding-left: 15px; padding-bottom: 20px;">Quý khách vui lòng nhập thông tin chính xác </p>
                <div class="row form-customer">
                    <div class="col-md-4">
                        <label for="fullname">Họ và tên (<span class="required">*</span>)</label>
                        <input type="text" placeholder="Họ và tên" class="form-control" name="fullname" id="fullname" autofocus required>
                    </div>
                    <div class="col-md-4">
                        <label for="phoneNumber">Số điện thoại (<span class="required">*</span>)</label>
                        <input type="text" placeholder="Số điện thoại" class="form-control" name="phoneNumber" id="phoneNumber" required>
                    </div>
                    <div class="col-md-4">
                        <label for="phoneNumber">Email</label>
                        <input type="email" placeholder="Email" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-md-12">
                        <?php if($web['anvui_id'] === 'TC04r1lru1vOk3c') { ?>
                            <label for="phoneNumber">Số điện thoại khác</label>
                        <?php } else { ?>
                            <label for="phoneNumber">Ghi chú</label>
                        <?php } ?>
                        <textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="container-checkbox" for="transshipment">Đưa đón tại đúng địa chỉ
                            <input type="checkbox" id="transshipment">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="transshipmentOneway">
                        <div class="col-md-6">
                            <label for="transshipmentInPointOneway">Trung chuyển đón chuyến đi</label>
                            <select name="transshipmentInPointOneway" disabled class="form-control transshipment" id="transshipmentInPointOneway">
                                <option data-address="" data-lat="" data-long="" data-price="0" value="">Chọn điểm đón</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="transshipmentOffPointOneway">Trung chuyển trả chuyến đi</label>
                            <select name="transshipmentOffPointOneway" disabled class="form-control transshipment" id="transshipmentOffPointOneway">
                                <option data-address="" data-lat="" data-long="" data-price="0" value="">Chọn điểm trả</option>
                            </select>
                        </div>
                    </div>
                    <div class="transshipmentReturn" style="display: none">
                        <div class="col-md-6">
                            <label for="transshipmentInPointReturn">Trung chuyển đón chuyến về</label>
                            <select name="transshipmentInPoint" disabled class="form-control transshipment" id="transshipmentInPointReturn">
                                <option data-address="" data-lat="" data-long="" data-price="0" value="">Chọn điểm đón</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="transshipmentOffPointReturn">Trung chuyển trả chuyến về</label>
                            <select name="transshipmentOffPointReturn" disabled class="form-control transshipment" id="transshipmentOffPointReturn">
                                <option data-address="" data-lat="" data-long="" data-price="0" value="">Chọn điểm trả</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <input autocomplete="off" class="col-md-5 form-control" id="promotionCode" style="width: auto;" type="text" placeholder="Mã khuyến mại">
                        <button type="button" class="btn btn-info col-md-3" id="checkPromotion">Kiểm tra</button>
                    </div>
                </div>
            </div>
            <div class="select-seat">
                <h3 class="trip-info">Chọn ghế chuyến đi</h3>
                <p style="padding-left: 15px; padding-bottom: 20px; font-style: italic">* Trẻ em vẫn được tính chỗ và giá vé bằng 100% vé người lớn. </p>
                <ul class="chuthich">
                    <li><div class="ghetrong"></div> Ghế trống</li>
                    <li><div class="ghedachon"></div> Ghế đã chọn</li>
                    <li><div class="ghedaban"></div> Ghế đã bán</li>
                    <li><div class="ghetreem"></div> Ghế trẻ em</li>
                </ul>
                <div id="seatMapOneWay" class="row">

                </div>
            </div>
            <div class="select-seat" id="chooseRound" style="display: block">
                <h3 class="trip-info">Chọn ghế chuyến về</h3>
                <p style="padding-left: 15px; padding-bottom: 20px; font-style: italic">* Trẻ em vẫn được tính chỗ và giá vé bằng 100% vé người lớn. </p>
                <ul class="chuthich">
                    <li><div class="ghetrong"></div> Ghế trống</li>
                    <li><div class="ghedachon"></div> Ghế đã chọn</li>
                    <li><div class="ghedaban"></div> Ghế đã bán</li>
                    <li><div class="ghetreem"></div> Ghế trẻ em</li>
                </ul>
                <div id="seatMapRound" class="row">

                </div>

            </div>
        </div>
        <div class="customer-info col-md-4">
            <h4 class="trip-info" style="text-transform: uppercase; padding-left: 0px;">Chi tiết giá vé</h4>
            <div class="total-title">
                <h4>Lượt đi</h4>
                <div class="total-inside row">
                    <div class="col-md-12">
                        Ghế đã chọn: <span class="seatlist" id="ghedi"></span> <br>
                    </div>
                    <div class="col-md-12">
                        Giá người lớn: <span class="price" id="adultMoneyOneway">0 VND</span> <br>
                    </div>
                    <div class="col-md-12">
                        Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br>
                    </div>
                    <div class="col-md-12">
                        Phí trung chuyển: <span class="price" id="transshipmentPriceOneway">0 VND</span> <br>
                    </div>
                </div>
                <div class="subtotal">
                    Tổng tiền lượt đi<br>
                    <strong id="totalMoneyOneway">0 VND</strong>
                </div>
            </div>
            <div class="total-title" id="total-round" style="display:none;">
                <h4>Lượt về</h4>
                <div class="total-inside row">
                    <div class="col-md-12">
                        Ghế đã chọn: <span class="seatlist" id="gheve"></span> <br>
                    </div>
                    <div class="col-md-12">
                        Giá người lớn: <span class="price" id="adultMoneyReturn">0 VND</span> <br>
                    </div>
                    <div class="col-md-12">
                        Giá trẻ em: <span class="price" id="babyMoneyReturn">0 VND</span> <br>
                    </div>
                    <div class="col-md-12">
                        Phí trung chuyển: <span class="price" id="transshipmentPriceReturn">0 VND</span> <br>
                    </div>
                </div>
                <div class="subtotal">
                    Tổng tiền lượt về<br>
                    <strong id="totalMoneyReturn">0 VND</strong>
                </div>
            </div>
            <div id="promotion" style="display: none">
                <h4>Khuyến mãi</h4>
                <div class="promotion-div row">
                    <div class="col-md-12">
                        Giảm giá: <span class="price" id="promotionPrice"></span>
                    </div>
                </div>
            </div>
            <div id="total">
                Tổng tiền<br>
                <strong id="totalMoney">0 VND</strong>
            </div>
        </div>
        <div class="col-md-4 payment">
            <div class="col-md-12 payment-dialog">
                <h3>Thanh toán</h3>
                <div class="payment-form">
                    <div class="radio">
                        <label class="radio">Thanh toán bằng thẻ nội địa
                            <input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="1">
                            <span class="checkround"></span>
                        </label>

                        <div class="test" style="display: block">
                            <label class="radio">Thanh toán qua Megabank
                                <input type="radio" class="paymenttype" name="paymenttype" value="2">
                                <span class="checkround"></span>
                            </label>
                            <!--<label class="radio">Thanh toán qua ví
                                <input type="radio" class="paymenttype" name="paymenttype" value="3">
                                <span class="checkround"></span>
                            </label>-->
                        </div>


                        <label class="radio">Thanh toán tại quầy
                            <input type="radio" class="paymenttype" name="paymenttype" value="5">
                            <span class="checkround"></span>
                        </label>
                        <label class="radio" id="radiochuyenkhoan" style="display: none">Chuyển khoản
                            <input type="radio" class="paymenttype" name="paymenttype" value="6">
                            <span class="checkround"></span>
                        </label>
                    </div>
                    <center>
                        <button type="button" id="hoanthanhbtn" class="btn">Xác nhận đặt
                            vé
                        </button>
                        <button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">
                            Thông tin chuyển khoản
                        </button>
                    </center>
                </div>
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
<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $("#booking-form").offset().top
        },1000);
    });
</script>