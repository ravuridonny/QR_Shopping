
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Qr Code Scanner</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="assets/css/plugins/iCheck/custom.css" rel="stylesheet">

        <link href="assets/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">

        <link href="assets/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

        <link href="assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

        <link href="assets/css/plugins/cropper/cropper.min.css" rel="stylesheet">

        <link href="assets/css/plugins/switchery/switchery.css" rel="stylesheet">

        <link href="assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">

        <link href="assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

        <link href="assets/css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
        <link href="assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">

        <link href="assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

        <link href="assets/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

        <link href="assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

        <link href="assets/css/plugins/select2/select2.min.css" rel="stylesheet">

        <link href="assets/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

        <link href="assets/css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">

        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

        <style>
            /* Additional style to fix warning dialog position */
            #alertmod_table_list_2 {
                top: 900px !important;
            }
        </style>
    </head>

    <body>


        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title ibox-title-background">
                        <center>
                           <h4>e Billing System</h4>
                        </center>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <form class="form-horizontal" id="customerform" role="form" method="post" action="vote_qrCode.php">


                            <div class="form-group"  id="div_qrCode">
                                <label class="col-sm-3 control-label">Scan QrCode</label>
                                <div class="col-sm-7">
                                    <canvas></canvas>
                                </div>
                            </div>
                            <br/>
                            <table class="table table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody class ="order">

                                    </tbody>
                                </table>
                                <center><h3 class="text-danger">Total: <b id="total">0</b></h3></center>
                        </form>

                        <div class="col-sm-4 col-sm-offset-4" id="pay">
                                    <a href="#"  onClick="hideCam()" class="btn btn-primary block full-width m-b">Pay</a>                                              
                                </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mainly scripts -->  
        <script src="assets/js/jquery-3.1.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-notify.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="assets/js/inspinia.js"></script>
        <script src="assets/js/plugins/pace/pace.min.js"></script>
        <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Chosen -->
        <script src="assets/js/plugins/chosen/chosen.jquery.js"></script>

        <!-- JSKnob -->
        <script src="assets/js/plugins/jsKnob/jquery.knob.js"></script>

        <!-- Input Mask-->
        <script src="assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>

        <!-- Data picker -->
        <script src="assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

        <!-- NouSlider -->
        <script src="assets/js/plugins/nouslider/jquery.nouislider.min.js"></script>

        <!-- Switchery -->
        <script src="assets/js/plugins/switchery/switchery.js"></script>

        <!-- IonRangeSlider -->
        <script src="assets/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

        <!-- iCheck -->
        <script src="assets/js/plugins/iCheck/icheck.min.js"></script>

        <!-- MENU -->
        <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

        <!-- Color picker -->
        <script src="assets/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

        <!-- Clock picker -->
        <script src="assets/js/plugins/clockpicker/clockpicker.js"></script>

        <!-- Image cropper -->
        <script src="assets/js/plugins/cropper/cropper.min.js"></script>

        <!-- Date range use moment.js same as full calendar plugin -->
        <script src="assets/js/plugins/fullcalendar/moment.min.js"></script>

        <!-- Date range picker -->
        <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>

        <!-- Select2 -->
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>

        <!-- TouchSpin -->
        <script src="assets/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

        <!-- Tags Input -->
        <script src="assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

        <!-- Dual Listbox -->
        <script src="assets/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>
        <script type="text/javascript" src="assets/js/qrcodelib.js"></script>
        <script type="text/javascript" src="assets/js/webcodecamjs.js"></script>

        <script type="text/javascript">
            function hideCam()
            {
                $('#div_qrCode').hide();
                $('#pay').hide();
            }
            var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var index =1;
            var sum = 0;
            var arg = {
                resultFunction: function (result) {
                    var qr_code = result.code;


                    $.ajax({
                        url: "ajax_getProductDetails.php",
                        method: "post",
                        data: {qr_code: qr_code},
                        success: function (data) {
                            
                          var jsonobj = JSON.parse(data);
                          var pp = jsonobj['product_price'];
                          var pn = jsonobj['product_name'];
                          if (!isNaN(pp) && pp.length !== 0) {
                sum += parseFloat(pp);
            }
                          
                          
                            $(".order").append('<tr><td>' + index++ +'</td><td>' + pn + '</td> <td class = "values">' + pp + '</td></tr>'); 

                        $('#total').html(sum);


// var index =0;
// var sum = 0;
//                 for (var key in jsonobj) {
//                    sum = product_price++;
//                          $(".order").append('<tr><td>'+ index++ +'</td><td>' + product_name + '</td> <td>' + product_price + '</td></tr>');
//                         }
                           }
                    });
                }
            };
            new WebCodeCamJS("canvas").init(arg).play();

            function sumValues()
            {
                 $('tr').each(function () {
        //the value of sum needs to be reset for each row, so it has to be set inside the row loop
        var sum = 0
        //find the combat elements in the current row and sum it 
        $(this).find('.values').each(function () {
            var values = $(this).text();
            if (!isNaN(values) && values.length !== 0) {
                sum += parseFloat(values);
            }
        });
        //set the value of currents rows sum to the total-combat element in the current row
        console.log(sum);
        //$('.total-values', this).html(sum);
    });
            }
        </script>

        <script>
            $(document).ready(function () {

                $('#data_3 .input-group.date').datepicker({
                    startView: 2,
                    todayBtn: "linked",
                    keyboardNavigation: false,
                    forceParse: false,
                    autoclose: true
                });


                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green'
                });
            });
        </script>
    </body>

</html>