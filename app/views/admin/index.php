<link href="" rel="stylesheet" type="text/css">
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once("partikels/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once("partikels/topbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
<!--============================================================-->
<!--////////////////////////////////////////////////////////////-->
<!--============================================================-->

                <!--bungkus keseluruhan content--> 

                 <div class="pembungkus-general">

                    <!--bungkus content guru--> 

                 <div class=" d-flex bungkus-content1">
                    <div class="d-flex  guru">
                        <div class="bungkus-3-guru d-flex">
                            <div class="stroke-guru"></div>
                            <div class="con-title d-flex">
                                    <p id="title-guru">GURU</p>
                                    <h4 id="jumlah">3</h3>
                            </div>
                            <div class="con-img d-flex">
                                <div class="frame-img">
                                    <i class="fa-solid fa-user"></i>
                                 </div>
                            </div>
                            
                        </div>   
                    <div>   <!--@@@@@@INI KU BINGUNG KALO DIHAPUS MALAH NGEBUG TAMPILANNYA@@@@@-->
                </div>   
                </div>

                    <!--------------------SISWA----------------------->

                    <div class=" d-flex siswa">
                        <div class="bungkus-3 d-flex">
                            <div class="stroke-siswa"></div>
                                <div class="con-title d-flex">
                                    <p id="title-siswa">SISWA</p>
                                    <h4 id="jumlah">20</h3>
                                </div>
                            <div class="con-img d-flex">
                                <div class="frame-img">
                                     <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!--------------------kelas----------------------->

                <div class="bungkus-content2">
                    <div class="d-flex kelas">
                        <div class="bungkus-3-kelas d-flex">
                             <div class="stroke-kelas"></div>
                                <div class="con-title d-flex">
                                    <p id="title-kelas">KELAS</p>
                                    <h3 id="jumlah">1</h3>
                                </div>  
                            <div class="con-img d-flex">
                                <div class="frame-img">
                                    <i class="fa-solid fa-house-user"></i>
                                </div>
                            </div>
                            </div>     
                        </div>
                    </div>
                </div>
               
                <!-- /.container-fluid -->

            <!--end bungkus keseluruhan content--> 

            </div>
<!--============================================================-->
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<!--============================================================-->
            
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Absensi Kelas</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>