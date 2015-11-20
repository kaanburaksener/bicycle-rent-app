<!DOCTYPE html>
<html lang="en">

<?php 
include 'header.php'; 
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
                                <h1 >Haber Ekle</h1>
                                <p>Haber oluşturmak için aşağıdaki formda bulunan her alanı eksiksiz doldurunuz.</p>
                            </div>
                            
                            <form role="form" action="save-news.php" method="post">
                                <!--News Status-->
                                <div class="form-group">
                                    <h2><label for="status" class="label label-primary">Haber Durumu:</label></h2>
                                    <select class="form-control" id="status" name="status">
                                        <option>Taslak</option>
                                        <option>Yayınla</option>
                                    </select>
                                </div>
                                
                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="title" class="label label-primary">Başlık:</label></h2>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                
                                <!--Content-->
                                <div class="form-group">
                                    <h2><label for="content" class="label label-primary">İçerik:</label></h2>
                                    <textarea class="form-control" rows="5" id="content" name="content" data-uk-htmleditor="{mode:'tab',lblPreview:'Önizleme'}"></textarea>
                                </div>
                                
                                <!--Button-->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Kaydet</button>
                            
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

</body>

</html>
