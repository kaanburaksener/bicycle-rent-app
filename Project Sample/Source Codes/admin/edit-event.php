<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>
<?php $id = $_GET["id"];
      $eventSug = getEventSuggestion($id); 
      $event= mysql_fetch_array($eventSug);
?>
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
                                <h1 >Etkinliği Düzenle</h1>
                                <p>Etkinlik bilgilerini düzenledikten sonra Güncelle butonuna basınız.</p>
                            </div>

                            <form role="form" action="update-event.php" method="post">
                                <!--Event Status-->
                                <div class="form-group">
                                    <h2><label for="status" class="label label-primary">Etkinlik Durumu:</label></h2>
                                    <select class="form-control" id="status" name="status">
                                        <option <?php if($event[1]==0) echo "selected"; ?> >Etkinlik Önerisi</option>
                                        <option <?php if($event[1]==1) echo "selected"; ?>>Kararlaştırılmış Etkinlik</option>
                                    </select>
                                </div>
                                
                                <!--Event Title-->
                                <div class="form-group">
                                    <h2><label for="title" class="label label-primary">Etkinlik Başlığı:</label></h2>
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo($event[2]);?>">
                                </div>
                                
                                <!--Content-->
                                <div class="form-group">
                                    <h2><label for="content" class="label label-primary">Etkinlik Açıklaması:</label></h2>
                                    <textarea class="form-control" rows="5" id="content" name="content"><?php echo($event[3]);?></textarea>
                                </div>

                                <div type="hidden" class="certain-event-area">
                                    
                                    <!--Event Date - Time-->
                                    <div class="form-group">
                                        <h2><label for="date" class="label label-primary">Etkinliğin Tarihi ve Saati:</label></h2>
                                        <div class="input-group date form_datetime col-md-3" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                            <input class="form-control" id="date" name="date" size="12" type="text" value="<?php echo($event[5]);?>" readonly>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input1" name='datetime' value="<?php echo($event[5]);?>" />
                                    </div>

                                    <!--Event Place-->
                                    <div class="form-group">
                                        <h2><label for="place" class="label label-primary">Etkinliğin Yapılacağı Yer:</label></h2>
                                        <input type="text" class="form-control" value="<?php echo($event[4]);?>" id="place" name="place">
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo($event[0]);?>">
                                </div>

                                <!--Button-->
                                <button type="submit" class="btn btn-info btn-lg btn-block">Güncelle</button>
                                <a class="btn btn-warning btn-lg btn-block" href="delete-event.php?id=<?php echo $event[0]; ?>">Sil</a>
                            
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

        if( $(this).find('option:selected').text() == 'Kararlaştırılmış Etkinlik')
            {
                $('.certain-event-area').show(500);
            }

            else if ( $(this).find('option:selected').text() == 'Etkinlik Önerisi')
            {
                $('.certain-event-area').hide(500);
            }


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
