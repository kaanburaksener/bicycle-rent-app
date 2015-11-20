<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>
<?php $id = $_GET["id"];
      $userdb = getUser($id); 
      $user= mysql_fetch_array($userdb)
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
                                <h1 >Kullanıcıyı Düzenle</h1>
                                <p>Kullanıcının bilgilerini düzenledikten sonra Güncelle butonuna basınız.</p>
                            </div>

                            <form role="form" action="update-user.php" method="post">

                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="name" class="label label-primary">İsim:</label></h2>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo($user[1]);?>">
                                </div>

                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="lastname" class="label label-primary">Soyisim:</label></h2>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo($user[2]);?>">
                                </div>

                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="email" class="label label-primary">E-posta Adresi:</label></h2>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo($user[3]);?>">
                                </div>

                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="password" class="label label-primary">Şifre:</label></h2>
                                    <input class="form-control" id="password" name="password" placeholder="Şifre Giriniz" value="<?php echo($user[4]);?>">
                                </div>

                                 <!--News Status-->
                                <div class="form-group">
                                    <h2><label for="role" class="label label-primary">Kullanıcı Rolü:</label></h2>
                                    <select class="form-control" id="role" name="role">
                                    <option <?php if($user[5]==2) echo "selected"; ?> >Mezun</option>
                                    <option <?php if($user[5]==3) echo "selected"; ?> >Ogrenci</option>
                                    <option <?php if($user[5]==1) echo "selected"; ?> >Editor</option>
                                    <option <?php if($user[5]==0) echo "selected"; ?> >Admin</option>
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo($user[0]);?>">
                                </div>
                                
                                <!--Button-->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Güncelle</button>
                                <a class="btn btn-warning btn-lg btn-block" href="delete-user.php?id=<?php echo $user[0]; ?>"  >Sil</a>
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
