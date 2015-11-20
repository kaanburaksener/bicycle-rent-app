<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>
<?php $id = $_GET["id"];
      $eventSug = getEventSuggestion($id); 
      $event= mysql_fetch_array($eventSug);

      $questions = getQuestion($id); 
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
                                <h1 >Etkinlik Ayarları</h1>
                                <p>Etkinlikle ilgili düzenlemeler için butonları kullanınız.</p>
                            </div>

                            <div class="event-details">
                                <h2><?php echo($event[2]);?></h2>
                                <p><?php echo($event[3]);?></p>
                            </div>

                            <div class="pool-area">
                                <h2 class="alert alert-success" >Sorular</h2>
                               <?php while($question= mysql_fetch_array($questions)):?>

                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo $question[2]; ?></h3>
                                  </div>
                                  <div class="panel-body">
                                    <?php 
                                        $answers = getAnswers($question[0]);
                                        while($answer= mysql_fetch_array($answers)):
                                            if($answer[1]!=null){
                                            ?>
                                            <li>
                                            <?php echo $answer[1]; } ?>
                                            </li>
                                        <?php endwhile;?>
                                  </div>
                                </div>
                            <?php endwhile;?>
                            <div class="event-buttons">
                                <a class="btn btn-success btn-lg btn-block" href="add-pool.php?id=<?php echo $event[0]; ?>">Anket Sorusu Ekle</a>
                                <a class="btn btn-info btn-lg btn-block" href="edit-event.php?id=<?php echo $event[0]; ?>">Etkinliği Kesinleştir</a>
                                <a class="btn btn-warning btn-lg btn-block" href="delete-event.php?id=<?php echo $event[0]; ?>">Sil</a>
                            </div>
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
