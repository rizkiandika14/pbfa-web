@include('template.headerLogin')


<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        {{-- navbar --}}
        @include('template.navbar')

        {{-- Sidebar --}}
        @include('template.sidebar')

        <div class="content-wrapper" style="min-height: 1604.44px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Manage User</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Nama
                            </th>
                            <th style="width: 30%">
                                Email
                            </th>
                            <th>
                                jabatan
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <a>
                                        {{ $user->name }}
                                    </a>
                                    <br>
                                    <small>
                                        {{ $user->username }}
                                    </small>
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td class="project_progress">
                                    {{ $user->level }}
                                </td>
                                <td class="project-state">
                                    @if ($user->is_active == 'Y')
                                        <a href=""><span class="badge badge-success">Active</span></a>
                                    @else
                                        <a href=""><span class="badge badge-danger">NonActive</span></a>
                                    @endif
                                </td>
                                <td class="project-actions">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>

                                    <form method="POST" action="{{ route('users.delete', $user->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a href="{{ route('users.delete', $user->id) }}" type="submit"
                                            class="btn btn-danger btn-sm" data-confirm-delete="true">
                                            <i class="fas
                                            fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </section>
            <!-- /.content -->
        </div>
    </div>
    @include('template.footerLogin')

</body>

</html>
