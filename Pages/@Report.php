<!DOCTYPE html>
<html>

<?php 
$path = "../";
include($path."include/config_header_top.php");
include 'css.php';
$page_key ='999999';
?>

<body class="theme-red">
    <?php include 'MasterPage.php';?>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>รายงาน</h2>
                        </div>
                        <div class="body">
                            <form action="ProductInfo.php" method="POST">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <b>เอกสาร</b>
                                            <select class="form-control show-tick">
                                                <option>สั่งซื้อ</option>
                                                <option>รับเข้า</option>
                                                <option>ย้าย</option>
                                            </select>                                        
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <b>ตั้งแต่วันที่</b>
                                            <div class="form-line">
                                                <input type="text" name="txtName" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <b>ถึงวันที่</b>
                                            <div class="form-line">
                                                <input type="text" name="txtName" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="icon-and-text-button-demo">
                                            <button type="submit" class="btn btn-primary waves-effect"><span>ค้นหา</span><i class="material-icons">search</i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>รหัสสินค้า</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>ยี่ห้อสินค้า</th>
                                                <th>รุ่นสินค้า</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>TOYO-PROXES ST3 III-15</td>
                                                <td>TOYO PROXES</td>
                                                <td>TOYO</td>
                                                <td>PROXES ST3 III</td>
                                                <td>
                                                    <span  data-toggle="modal" data-target="#largeModal">
                                                        <button id="btn_info" type="button" class="btn btn-info btn-xs waves-effect" data-toggle="tooltip" data-placement="top" title="ข้อมูล">
                                                            <i class="material-icons">info_outline</i>
                                                        </button>
                                                    </span>
                                                    <a class="btn bg-orange btn-xs waves-effect">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a class="btn bg-red btn-xs waves-effect">
                                                        <i class="material-icons">delete_forever</i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>YOKOHAMA-ADVAN dB Decibel V551-15</td>
                                                <td>YOKOHAMA ADVAN</td>
                                                <td>YOKOHAMA</td>
                                                <td>ADVAN Decibel V551</td>
                                                <td>
                                                    <span  data-toggle="modal" data-target="#largeModal">
                                                        <button id="btn_info" type="button" class="btn btn-info btn-xs waves-effect" data-toggle="tooltip" data-placement="top" title="ข้อมูล">
                                                            <i class="material-icons">info_outline</i>
                                                        </button>
                                                    </span>
                                                    <a class="btn bg-orange btn-xs waves-effect">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a class="btn bg-red btn-xs waves-effect">
                                                        <i class="material-icons">delete_forever</i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>COSMIS-XT-005R Eco-15</td>
                                                <td>COSMIS XT-005R Eco (ขอบ15″)</td>
                                                <td>COSMIS</td>
                                                <td>XT-005R</td>
                                                <td>
                                                    <span  data-toggle="modal" data-target="#largeModal">
                                                        <button id="btn_info" type="button" class="btn btn-info btn-xs waves-effect" data-toggle="tooltip" data-placement="top" title="ข้อมูล">
                                                            <i class="material-icons">info_outline</i>
                                                        </button>
                                                    </span>
                                                    <a class="btn bg-orange btn-xs waves-effect">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a class="btn bg-red btn-xs waves-effect">
                                                        <i class="material-icons">delete_forever</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'js.php';?>
</body>

</html>
