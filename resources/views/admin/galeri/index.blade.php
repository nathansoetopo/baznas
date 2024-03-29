<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.stisla.head')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('admin.stisla.navbar')
            @include('admin.stisla.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Admin Page</h1>
                    </div>
                    <a href="{{ route('add.galeri') }}" class="btn btn-success mb-1"><i class="fa fa-plus" aria-hidden="true"></i> Input Galeri </a>
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12" style="width: 100%;">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Tabel Galeri</h4>
                                    </div>
                                    <div class="card-body">
                                        @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('success') }}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md" id="myTable">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Judul</th>
                                                        <th scope="col">Gambar</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no=1;
                                                    @endphp
                                                    @foreach ($galeri as $g)
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $g->judul }}</td>
                                                        <td style="">
                                                            @foreach (explode('|', $g->gambar) as $image)
                                                            <img src="{{ asset($image) }}" alt=""
                                                                style="height: 40px; width:70px;">                                                             
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('admin/galeri/edit/'.$g->id) }}"
                                                                class="btn btn-transparent text-center text-dark">
                                                                <i class="fas fa-edit fa-2x"></i>
                                                            </a>
                                                            <a  href="{{ url('admin/galeri/delete/'.$g->id) }}"
                                                                class="btn btn-transparent text-center text-dark" >
                                                                <i class="fas fa-trash-alt fa-2x"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $galeri->links() }}
                                        </div>

                                    </div>
                                    <!-- This is where your code ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                @include('admin.stisla.footer')
            </footer>
        </div>
    </div>

    @include('admin.stisla.script')
</body>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</html>
