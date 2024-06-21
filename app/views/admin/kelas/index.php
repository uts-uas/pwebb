<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once(__DIR__ . "/../partikels/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once(__DIR__ . "/../partikels/topbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-------------------START TABEL------------------------>

    <div class="container">
        <h1>Manajemen Kelas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kelas</th>
                    <th>Nama Guru</th>
                    <th>Jumlah Siswa</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr id="row">
                    <td>1</td>
                    <td>A</td>
                    <td>Kurama Neo</td>
                    <td>20</td>
                    <td>
                        <div class="con-status">
                            <p class="status">Aktif</p>
                        </div>
                    </td>
                    <td>
                        <button class="btn-action edit">
                            <img src="../public/img/edit.png">
                        </button>
                        <button class="btn-action delete">
                            <img src="../public/img/trash-can.png">
                        </button>
                    </td>
                </tr>
                <tr id="row">
                    <td>2</td>
                    <td>A</td>
                    <td>Shuna kaira</td>
                    <td>20</td>
                    <td>
                        <div class="con-status">
                            <p class="status">Aktif</p>
                        </div>
                    </td>
                    <td>
                        <button class="btn-action edit">
                            <img src="../public/img/edit.png">
                        </button>
                        <button class="btn-action delete">
                            <img src="../public/img/trash-can.png">
                        </button>
                    </td>
                </tr>
                <tr id="row">
                    <td>3</td>
                    <td>A</td>
                    <td>Mahiru shiina</td>
                    <td>14</td>
                    <td>
                        <div class="con-status">
                            <p class="status">Aktif</p>
                        </div>
                    </td>
                    <td>
                        <button class="btn-action edit">
                            <img src="../public/img/edit.png">
                        </button>
                        <button class="btn-action delete">
                            <img src="../public/img/trash-can.png">
                        </button>
                    </td>
                </tr>
                <tr id="row">
                    <td>4</td>
                    <td>A</td>
                    <td>Joko widodo</td>
                    <td>14</td>
                    <td>
                        <div class="con-status">
                            <p class="status">Aktif</p>
                        </div>
                    </td>
                    <td>
                        <button class="btn-action edit">
                            <img src="../public/img/edit.png">
                        </button>
                        <button class="btn-action delete">
                            <img src="../public/img/trash-can.png">
                        </button>
                    </td>
                </tr>
                <tr id="row">
                    <td>4</td>
                    <td>A</td>
                    <td>Prabowo Subianto</td>
                    <td>14</td>
                    <td>
                        <div class="con-status">
                            <p class="status">Aktif</p>
                        </div>
                    </td>
                    <td>
                        <button class="btn-action edit">
                            <img src="../public/img/edit.png">
                        </button>
                        <button class="btn-action delete">
                            <img src="../public/img/trash-can.png">
                        </button>
                    </td>
                </tr>
                <tr id="row">
                    <td>5</td>
                    <td>A</td>
                    <td>Ganjar Pranowo</td>
                    <td>14</td>
                    <td>
                        <div class="con-status">
                            <p class="status">Aktif</p>
                        </div>
                    </td>
                    <td>
                        <button class="btn-action edit">
                            <img src="../public/img/edit.png">
                        </button>
                        <button class="btn-action delete">
                            <img src="../public/img/trash-can.png">
                        </button>
                    </td>
                </tr>
                <tr id="row">
                    <td>6</td>
                    <td>A</td>
                    <td>Osama bin Laden</td>
                    <td>14</td>
                    <td>
                        <div class="con-status">
                            <p class="status">Aktif</p>
                        </div>
                    </td>
                    <td>
                        <button class="btn-action edit">
                            <img src="../public/img/edit.png">
                        </button>
                        <button class="btn-action delete">
                            <img src="../public/img/trash-can.png">
                        </button>
                    </td>
                </tr>
              
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="page">
                        <div class="con-page d-flex">
                            <p>Row per page 5</p>
                            <p>1-5 of 9</p>
                        </div>
                    </td>
                    <td colspan="5">
                        <div class="pagination">
                            <button class="btn-pagination prev"> << </button>
                            <button class="btn-pagination prev"> < </button>
                            <button class="btn-pagination next"> > </button>
                            <button class="btn-pagination next"> >> </button>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
<!-------------------END TABEL------------------------>
                </div>
                <!-- /.container-fluid -->

            </div>
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