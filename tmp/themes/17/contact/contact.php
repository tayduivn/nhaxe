<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/17//contact/contact.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="block-box-title">
    <h3 class="rs title-block">Liên hệ</h3>
</div>
<div class="box-contact cf">
    <div class="box-contactL">
        <div class="box-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.418142659984!2d103.83802730000002!3d22.337835000000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd416c3932eb53%3A0x3ee39d4ec7f5e474!2sSapa+Capsule+Hotel!5e0!3m2!1svi!2s!4v1481796634535" width="442" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="box-ct">
            <?php if(isset($data['content']['info'])) { ?><?=$data['content']['info']?><?php } ?>
        </div>
    </div>
    <div class="box-contactR">
        <form class="form-horizontal no-padding" action="" id="form_contact" method="POST" name="register">
                <div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtName"><?php echo lang('name');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <input id="txtName" name="txtName" type="text" placeholder=""
                                   class="form-control input-md">
                            <div class="warning" id="nameError" style="display:none"><span style="color: red;"><?php echo lang('name_null');?></span>
                            </div>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtPhone"><?php echo lang('phone');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <input id="txtPhone" name="txtPhone" type="text" placeholder=""
                                   class="form-control input-md" class='number'>
                            <div class="warning" id="phoneError" style="display:none"><span style="color: red;"><?php echo lang('phone_null');?></span>
                            </div>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtEmail"><?php echo lang('email');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <input id="txtEmail" name="txtEmail" type="text" placeholder=""
                                   class="form-control input-md">
                            <div class="warning" id="emailError" style="display:none"><span style="color: red;"><?php echo lang('mail_error');?></span>
                            </div>
                            <div class="warning" id="emailNull" style="display:none"><span style="color: red;"><?php echo lang('mail_null');?></span>
                            </div>


                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtAddress"><?php echo lang('address');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <input id="txtAddress" name="txtAddress" type="text" placeholder=""
                                   class="form-control input-md">
                            <div class="warning" id="addressError" style="display:none"><span
                                    style="color: red;"><?php echo lang('address_null');?></span></div>

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtContent"><?php echo lang('content');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="txtContent" name="txtContent"></textarea>
                            <div class="warning" id="contentError" style="display:none"><span
                                    style="color: red;"><?php echo lang('content_null');?></span></div>
                        </div>
                    </div>

                    <div class="form-group check_capcha" <?php if(isset($data['content']['check_captcha_url'])) { ?>check_capcha=
                    "<?=$data['content']['check_captcha_url']?>"<?php } ?> >
                        <label class="col-md-3 control-label" for="textinput">Capcha</label>
                        <div class="col-md-9">
                            <img id="capt_img_ct" src="<?=$_B['captcha']?>"/>
                            <img title="<?php echo lang('tai_lai_ma_bao_ve');?>" id="f5capt_cha" src="<?=$web['static_temp_mod']?>/resource/img/view-refresh-small.png"/>
                            <div style="float: left; padding: 1px 5px 0 0; width: 40%;">
                                <input type="text"  class="form-control" id="captcha_cha" value=""/>
                            </div>
                            <div class="warning" id="capchaError" style="display:none"><span style="color: red;"><?php echo lang('capcha_null');?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="btnSent"></label>
                        <div class="col-md-9 ">
                            <button id="btnSent" type="submit" name="action" class="btn btn-primary" value="addContat"><?php echo lang('sent_contact');?>
                            </button>
                            <button type="reset" id="btnCancel" name="btnSent" class="btn btn-primary"><?php echo lang('cancel');?>
                            </button>

                        </div>
                    </div>
                </div>

                </fieldset>
            </form>
    </div>
</div>


<!-- <script src="<?=$web['static_temp_mod']?>/resource/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resource/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<!-- <script src="<?=$web['static_temp_mod']?>/resource/js/contact.js" type="text/javascript"></script> -->
<!-- <script src="<?=$web['static_temp_mod']?>/resource/assets/bootstrap/js/bootstrap.min.js"></script>
<link href="<?=$web['static_temp_mod']?>/resource/assets/bootstrap-dialog/css/bootstrap-dialog.min.css" rel="stylesheet"
      type="text/css"/>
<script src="<?=$web['static_temp_mod']?>/resource/assets/bootstrap-dialog/js/bootstrap-dialog.min.js"></script> --> -->
<!-- <script type="text/javascript">
    $(document).ready(function () {
        Contact.init();
    })
</script> -->