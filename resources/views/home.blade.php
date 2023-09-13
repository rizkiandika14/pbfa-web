@include('template.headerLogin')


<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        {{-- navbar --}}
        @include('template.navbar')

        {{-- Sidebar --}}
        @include('template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('LTE/images/default.png') }}" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                                    <p class="text-muted text-center">{{ auth()->user()->level }}</p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Username</b> <a class="float-right">{{ auth()->user()->username }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Telepon</b> <a class="float-right">{{ auth()->user()->telepon }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right">{{ auth()->user()->email }}</a>
                                        </li>
                                    </ul>


                                    <a href="#" class="btn btn-primary btn-block"><i class="fas fa-cog"></i><b>
                                            Edit Profile</b></a>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-12">

                            <!-- Kritik dan saran -->
                            <div class="card card-success card-outline">
                                <div class="card-body box-profile">
                                    <form action="#" method="POST">
                                        <div class="form-group" style="margin-left: 10px; margin-right:10px;">
                                            <label for="inputMessage">Kritik dan Saran</label>
                                            <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="float-right" style="margin-right: 10px;">
                                            <button type="submit" class="btn btn-success">POST</button>
                                        </div>
                                    </form>


                                    <!-- /.card-body -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>


        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->


    </div>
    <!-- ./wrapper -->

    @include('template.footerLogin')
</body>

</html>
