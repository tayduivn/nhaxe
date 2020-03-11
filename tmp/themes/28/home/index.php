<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28//home/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<?php $_B['temp']->printhome(); ?>
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
    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px;
        -o-transition: background-color .3s, border-color .3s;
        -webkit-transition: background-color .3s, border-color .3s;
        background-color: rgba(255, 255, 255, 0.2);
        border: 1px solid #acd9f5;
        border-radius: 4px;
        color: #e6e7e8;
        font-weight: 600;
        padding: 10px 14px;
        transition: background-color .3s, border-color .3s;
        width: 100%;
        padding: 0px;
        height: 40px;
        background: #e6e7e8;
        border-radius: 5px;
        border: none;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #00a859;
        line-height: 40px ;
    }
    input#depatureDate {
    height: 40px;
    line-height: 40px;
    border-radius: 0px;
    border: 0px;
    color: #00a859 !important;
    }
    .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            text-align: center;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    text-transform: uppercase;

    }
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #00a859;
    color: white;
    }
    li.select2-results__option {
    text-transform: uppercase;
}
    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-default{
        background: #ed3237
    }
</style>
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
                title: 'THÔNG BÁO!',
                type: 'red',
                typeAnimated: true,
                content: 'BẠN CHƯA CHỌN ĐIỂM ĐI',
            });
            return false;
        }

        if (endPoint === "") {
            $.alert({
                title: 'THÔNG BÁO!',
                type: 'red',
                typeAnimated: true,
                content: 'BẠN CHƯA CHỌN ĐIỂM ĐẾN',
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

    // $('#depatureDate').val($.format.date(new Date(), "dd/MM/yyyy"));



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