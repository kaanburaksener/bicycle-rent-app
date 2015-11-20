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
                        <img src="img/iu.jpg">
                        <h1>İzmir Üniversitesi Mezun Sistemi - Admin Paneli v0.30</h1>
                        <h3>Kullanılabilir Özellikler</h3>
                        <ul>
                            <li>
                                Haber ekleme
                            </li>
                            <li>
                                Haber düzenleme/silme
                            </li>
                            <li>
                                Haberi taslak olarak kaydedebilme
                            </li>
                            <li>
                                Önizlenebilir HTML Editor
                            </li>
                            <li>
                                Basit MySQL hata görüntüleme mekanizması
                            </li>
                            <li>
                                Etkinlik ekleme
                            </li>
                            <li>
                                Etkinlik düzenleme/silme
                            </li>
                            <li>
                                Etkinliği öneri olarak kaydedebilme
                            </li>
                            <li>
                                Etkinlik önerisi için anket oluşturabilme
                            </li>
                            <li>
                                Kullanıcı ekleme
                            </li>
                            <li>
                                Kullanıcı düzenleme/silme
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
