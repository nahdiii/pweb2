<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ubah Pengguna</title>
    @include('komponen.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('komponen.left-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('komponen.top-bar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <center>
                    <div class="card shadow mb-4 col-lg-6">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Ubah Pengguna</h6>
                        </div>
                        <div class="card-body">
                            <form class="user" action="{{ url('simpan-ubah-pengguna/'. $usr->id) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="namapengguna" id="exampleFirstName"
                                            placeholder="Name" value="{{$usr->name}}">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"  id="exampleInputEmail"
                                        placeholder="Email Address" name="emailpengguna" value="{{$usr->email}}">
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="passwordpengguna" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Simpan
                                </button>
                                <hr>
                            </form>
                        </div>
                    </div>    
                </center>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('komponen.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('komponen.modal-logout')

    <!-- Bootstrap core JavaScript-->
    @include('komponen.script')
</body>

</html>
