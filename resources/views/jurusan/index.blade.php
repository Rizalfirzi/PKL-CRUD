@extends('layouts.admin')

@section('content')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('siswa.index') }}">Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('nilai.index') }}">Nilai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jurusan.index') }}">Jurusan</a>
                        </li>
                    </ul>

                      
                    </ul>
                </div>
            </div>
        </nav>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Jurusan
                    <a href="{{ route('jurusan.create') }}" class="btn btn-sm btn-primary" style="float: right;">Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Mata Pelajaran</th>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Semester</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($jurusan as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->kode_mata_pelajaran }}</td>
                                    <td>{{ $data->nama_mata_pelajaran }}</td>
                                    <td>{{ $data->semester }}</td>
                                    <td>{{ $data->jurusan }}</td>
                                    <td>
                                        <form action="{{ route('jurusan.destroy', $data->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ route('jurusan.edit', $data->id) }}" class="btn btn-sm btn-outline-warning">Ubah
                                            </a> |
                                            <a href="{{ route('jurusan.show', $data->id) }}" class="btn btn-sm btn-outline-info">Tampilkan
                                            </a> |
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('apakah kmu yakin ingin menghapus data?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection