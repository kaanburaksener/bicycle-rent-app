<!DOCTYPE html>
<html lang="en">

<?php 
include 'header.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>
<?php $id = $_GET["id"];
      $newsdb = getaNews($id); 
      $news= mysql_fetch_array($newsdb)
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
                                <h1 >Haber Düzenle</h1>
                                <p>Haberi düzenledikten sonra Güncelle butonuna basınız.</p>
                            </div>
                            
                            <form role="form" action="update-news.php" method="post">
                                <!--News Status-->
                                <div class="form-group">
                                    <h2><label for="status" class="label label-primary">Haber Durumu:</label></h2>
                                    <select class="form-control" id="status" name="status">
                                        <option <?php if($news[1]==0) echo "selected"; ?>>Taslak</option>
                                        <option <?php if($news[1]==1) echo "selected"; ?>>Yayınla</option>
                                    </select>
                                </div>
                                
                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="title" class="label label-primary">Başlık:</label></h2>
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo($news[2]);?>">
                                </div>
                                
                                <!--Content-->
                                <div class="form-group">
                                    <h2><label for="content" class="label label-primary">İçerik:</label></h2>
                                    <textarea class="form-control" rows="5" id="content" name="content" data-uk-htmleditor="{mode:'tab',lblPreview:'Önizleme'}"><?php echo($news[3]);?></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo($news[0]);?>">
                                </div>
                                <!--Button-->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Güncelle</button>
                                <a class="btn btn-warning btn-lg btn-block" href="delete-news.php?id=<?php echo $news[0]; ?>"  >Sil</a>
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
