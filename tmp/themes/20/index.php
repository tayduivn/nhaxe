<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/20//index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="wrapper">
    <form action="" id="formValidate">
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="grid">
                    <div class="row" id="packages">
                        
                    </div>
                </div>
            </section>
            <!-- SECTION 2 -->
            <h4></h4>
            <section>
                <div class="form-row">
                        <div class="form-holder active">
                            <input type="text" name="customerName" id="customerName" placeholder="Họ tên bạn" class="form-control">
                        </div>
                        <div class="form-holder">
                            <input type="text" name="partnerName" id="partnerName" placeholder="Họ tên bạn" class="form-control">
                        </div>
                </div>
                <div class="form-row">
                        <div class="form-holder">
                            <input type="text" name="dob" id="dob" placeholder="Ngày sinh Tháng/Ngày/Năm" class="form-control">
                        </div>
                        <div class="form-holder">
                            <input type="text" name="partnerDob" id="partnerDob" placeholder="Ngày sinh Tháng/Ngày/Năm" class="form-control">
                        </div>
                </div>
                <div class="form-row">
                        <div class="form-holder">
                            <input type="text" name="citizenId" id="citizenId" placeholder="Số chứng minh thư/Căn cước/Hộ chiếu" class="form-control">
                        </div>
                        <div class="form-holder">
                            <input type="text" name="partnerCitizenId" id="partnerCitizenId" placeholder="Số chứng minh thư/Căn cước/Hộ chiếu" class="form-control">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-holder">
                        <select class="form-control" id="gender" id="gender" name="gender">
                          <option value="">Giới Tính</option>
                          <option value="1">Nam</option>
                          <option value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="form-holder">
                        <select class="form-control" name="partnerGender" id="partnerGender" id="exampleFormControlSelect1">
                          <option value="">Giới Tính</option>
                          <option value="1">Nam</option>
                          <option value="2">Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="form-holder">
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-holder">
                    <input type="text" placeholder="Số điện thoại" name="phoneNumber" id="phoneNumber" class="form-control">
                </div>
            </section>
            <!-- SECTION 3 -->
            
            <h4></h4>
            <section>
                <div id="PaymentMethodSelectWrapper" alwayshowinfo="true">
                    <ul>
                        <li class="active radio">
                            <div class="PaymentMethodHeader">
                                <label for="PM2" class="BHRadioLabel">
                                    <input id="PM2" type="radio" name="paymentTyped" checked  value="1" class="BHRadio">Thanh toán qua NAPAS
                                </label>
                            </div>
                        </li>

                        <li class=" radio">
                            <div class="PaymentMethodHeader">
                                <label for="PM1" class="BHRadioLabel">
                                    <input id="PM1" type="radio" name="paymentTyped" value="2"  class="BHRadio">
                                    Thanh toán qua VTC Pay ( Thẻ nội địa, Ví VTC Pay) 
                                </label>
                                
                            </div>
                            <div class="PaymentMethodContent">
                                Quý khách dùng thẻ ATM nội địa của các ngân hàng để thanh toán online cho chúng tôi.<br>
                                Các ngân hàng hỗ trợ gồm:
                                <p style="text-align: center;">
                                    <img src="https://daily.baohiemtinhyeu.vn/view/image/ngan-hang-ho-tro-thanh-toan.png?v=1" style="max-width: 100%;height: 250px;display: inline-block">
                                </p>
                                    <p><b>Lưu ý:</b></p>
                                    <ul>
                                        <li>Khách hàng cần liên hệ với ngân hàng phát hành thẻ để đăng ký chức năng thanh
toán trực tuyến. Nếu không đăng ký, thẻ sẽ không thanh toán được trên Internet.</li>
                                    </ul>
                                    
                            </div>
                        </li>
                        
                        
                    </ul>
                </div>
            </section>
            <div class="actions clearfix" style="display: block !important;">
                <ul>
                    <li class="backward"><a href="#previous">Quay lại</a></li>
                    <li class="forward " ><a href="#next">Tiếp tục</a></li>
                    <li class="finish " ><a href="#finish">Thanh toán</a></li>
                </ul>
            </div>
        </div>
    </form>
</div>
<style type="text/css">
    .actions.clearfix{
        display: none;
    }
</style>