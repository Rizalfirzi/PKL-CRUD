@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">NIS</label>
                            <input type="text" name="title" value="{{ $siswa->nis }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Siswa</label>
                            <textarea type="text" name="content" class="form-control" readonly>{{ $siswa->nama_siswa }}
                                </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Alamat Siswa</label>
                            <textarea type="text" name="content" class="form-control" readonly>{{ $siswa->alamat_siswa }}
                                </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Lahir</label>
                            <textarea type="text" name="content" class="form-control" readonly>{{ $siswa->tanggal_lahir }}
                                </textarea>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection