<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<?php $id = $_GET["id"]; ?>
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
                                <h1 >Anket Sorusu Ekle</h1>
                                <p>Anket sorusu oluşturmak için aşağıdaki formu kullanınız.</p>
                            </div>
                            
                            <form role="form" action="save-pool.php" method="post">
                                <div class="question">
                                    <!--Question-->
                                    <div class="form-group">
                                        <h2><label for="title" class="label label-primary">Soru:</label></h2>
                                        <input type="text" class="form-control" name="question">
                                    </div>
                                    
                                    <!--Content-->
                                    <div class="form-group answers">
                                        <h2><label for="title" class="label label-primary">Cevaplar:</label></h2>
                                        <div>
                                            <input type="text" class="form-control" name="answer[]">
                                            <a href="#" class="remove_field">Sil</a>
                                        </div>
                                        <div>
                                            <input type="text" class="form-control" name="answer[]">
                                            <a href="#" class="remove_field">Sil</a>
                                        </div>
                                    </div>
                                    <span id="btn-add" class="btn btn-warning btn-lg btn-block">Seçenek Ekle</span>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo($id);?>">
                                </div>
                                <!--Button-->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Soruyu Etkinliğe Ekle</button>
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

                
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".answers"); //Fields wrapper
        var add_button      = $("#btn-add"); //Add button ID
            
        var x = 1; //initlal text box count
            
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div><input type="text" class="form-control" name="answer[]"/><a href="#" class="remove_field">Sil</a></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
        
    
    </script> 
</body>

</html>
