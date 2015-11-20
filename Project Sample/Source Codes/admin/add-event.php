<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            
                            <div class="alert alert-info">
                                <h1 >Etkinlik Ekle</h1>
                                <p>Etkinlik oluşturmak için aşağıdaki formda bulunan her alanı eksiksiz doldurunuz.</p>
                            </div>
                            
                            <form role="form" action="save-event.php" method="post">
                                <!--Event Status-->
                                <div class="form-group">
                                    <h2><label for="status" class="label label-primary">Etkinlik Durumu:</label></h2>
                                    <select class="form-control" id="status" name="status">
                                        <option>Etkinlik Önerisi</option>
                                        <option>Kararlaştırılmış Etkinlik</option>
                                    </select>
                                </div>
                                
                                <!--Event Title-->
                                <div class="form-group">
                                    <h2><label for="title" class="label label-primary">Etkinlik Başlığı:</label></h2>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                
                                <!--Content-->
                                <div class="form-group">
                                    <h2><label for="content" class="label label-primary">Etkinlik Açıklaması:</label></h2>
                                    <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                                </div>

                                <div type="hidden" class="certain-event-area">
                                    
                                    <!--Event Date - Time-->
                                    <div class="form-group">
                                        <h2><label for="date" class="label label-primary">Etkinliğin Tarihi ve Saati:</label></h2>
                                        <div class="input-group date form_datetime col-md-3" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                            <input class="form-control" id="date" name="date" size="12" type="text" value="" readonly>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input1" name='datetime' value="" />
                                    </div>

                                    <!--Event Place-->
                                    <div class="form-group">
                                        <h2><label for="place" class="label label-primary">Etkinliğin Yapılacağı Yer:</label></h2>
                                        <input type="text" class="form-control" id="place" name="place">
                                    </div>
                                </div>

                                <!--Button-->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Ekle</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- UIkit -->
    <script src="js/uikit.min.js"></script>

    <!-- CodeMirror -->
    <script src="js/codemirror.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Date Time JavaScript -->
    <script src="js/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Date Time Language JavaScript -->
    <script src="js/bootstrap-datetimepicker.tr.js"></script>

    <!-- HTML editor dependencies -->
    <script src="js/markdown.js"></script>
    <script src="js/overlay.js"></script>
    <script src="js/xml.js"></script>
    <script src="js/gfm.js"></script>
    <script src="js/marked.js"></script>
    <script src="js/htmleditor.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        language:  'tr',
        todayBtn: true,
        startDate: "2015-01-01 10:00",
        minuteStep: 5
    });
    </script> 
    <script>

    $(document).ready(function() {

        $('.certain-event-area').hide();

        $('#status').change(function() {
            if( $(this).find('option:selected').text() == 'Kararlaştırılmış Etkinlik')
            {
                $('.certain-event-area').show(500);
            }

            else if ( $(this).find('option:selected').text() == 'Etkinlik Önerisi')
            {
                $('.certain-event-area').hide(500);
            }
        });
    });
    
    </script> 
</body>

</html>
