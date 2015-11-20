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
                                <h1 >Etkinlik Önerileri</h1>
                                <p>Etkinliklere anket eklemek, kesinleştirmek ya da silmek için ayarlar butonuna tıklayınız.</p>
                            </div>
                            
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Başlık</th>
                                    <th>Açıklama</th>
                                    <th>Ayarlar</th>
                                    <th>Düzenle</th>
                                </tr>

                                <?php $allEventSuggestions = getEventSuggestions();?>
                                <?php while($events= mysql_fetch_array($allEventSuggestions)):?>
                                
                                <tr>
                                    <td>
                                        <?php echo $events[2]; ?>
                                    </td>

                                    <td>
                                        <?php echo $events[3]; ?>
                                    </td>
                                
                                    <td>
                                        <a class="btn btn-info btn-lg btn-block" href="event-settings.php?id=<?php echo $events[0]; ?>">Ayarlar</a>
                                    </td>

                                    <td>
                                        <a class="btn btn-warning btn-lg btn-block" href="edit-event.php?id=<?php echo $events[0]; ?>">Düzenle</a>
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
