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
                                <h1 >Kullanıcılar</h1>
                                <p>Kullanıcıları düzenlemek ya da silmek için listenin sağ tarafındaki butonları kullanınız.</p>
                            </div>
                            
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>İsim</th>
                                    <th>Soyisim</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                                <?php $allUsers = getUsers();?>
                                <?php while($users= mysql_fetch_array($allUsers)):?>
                                <tr>
                                    <td>
                                        <?php echo $users[1]; ?>
                                    </td>

                                    <td>
                                        <?php echo $users[2]; ?>
                                    </td>
                                    <td>
                                        <?php echo $users[3]; ?>
                                    </td>

                                    <td>
                                       <?php
                                            switch ($users[5]) {
                                                case '0':
                                                    echo "Admin";
                                                    break;
                                                
                                                case '1':
                                                    echo "Editör";
                                                    break;
                                                    
                                                case '2':
                                                    echo "Mezun";
                                                    break;
                                                
                                                case '3':
                                                    echo "Öğrenci";
                                                    break;
                                               
                                                default:
                                                    echo "Bulunamadı";
                                                    break;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-lg btn-block" href="edit-user.php?id=<?php echo $users[0]; ?>">Düzenle</a>
                                        
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-lg btn-block" href="delete-user.php?id=<?php echo $users[0]; ?>"  >Sil</a>
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
