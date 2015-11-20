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
                                <h1 >Kullanıcı Ekle</h1>
                                <p>Kullanıcı eklemek için aşağıdaki formu düzgünce doldurunuz.</p>
                            </div>
                            
                            <form role="form" action="save-user.php" method="post">

                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="name" class="label label-primary">İsim:</label></h2>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>

                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="lastname" class="label label-primary">Soyisim:</label></h2>
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                </div>

                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="email" class="label label-primary">E-posta Adresi:</label></h2>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>

                                <!--News Title-->
                                <div class="form-group">
                                    <h2><label for="password" class="label label-primary">Şifre:</label></h2>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Şifre Giriniz">
                                </div>

                                 <!--News Status-->
                                <div class="form-group">
                                    <h2><label for="role" class="label label-primary">Kullanıcı Rolü:</label></h2>
                                    <select class="form-control" id="role" name="role">
                                        <option>Mezun</option>
                                        <option>Ogrenci</option>
                                        <option>Editor</option>
                                        <option>Admin</option>

                                    </select>
                                </div>

                                <!--Button-->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Kullanıcıyı Kaydet</button>
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