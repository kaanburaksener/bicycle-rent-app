<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>

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
                                <h1 >Haberler</h1>
                                <p>Haberleri düzenlemek ya da silmek için listenin sağ tarafındaki butonları kullanınız.</p>
                            </div>
                            
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Durum</th>
                                    <th>Başlık</th>
                                    <th>İçerik</th>
                                    <th>Tarih</th>
                                    <th>Düzenle</th>
                                </tr>
                                <?php $allNews = getNews();?>
                                <?php while($news= mysql_fetch_array($allNews)):?>
                                <tr>
                                    <td>
                                        <?php
                                            if($news[1]==0)
                                                echo "Taslak";
                                            else
                                                echo "Yayında";
                                        ?>
                                    </td>

                                    <td>
                                        <?php echo $news[2]; ?>
                                    </td>
                                    <td>
                                        <?php echo(summary($news[3],40));
                                              echo "..."; 
                                        ?>
                                    </td>

                                    <td>
                                       <?php echo $news[4]; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-lg btn-block" href="edit-news.php?id=<?php echo $news[0]; ?>">Düzenle</a>
                                        <a class="btn btn-warning btn-lg btn-block" href="delete-news.php?id=<?php echo $news[0]; ?>"  >Sil</a>
                                    </td>
                                </tr>
                                <?php endwhile;?>
                            </table>
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
