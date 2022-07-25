@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Kode_mata_pelajaran</label>
                                <input type="number" class="form-control  @error('kode_mata_pelajaran') is-invalid @enderror"
                                    name="kode_mata_pelajaran" value="{{ $jurusan->kode_mata_pelajaran }}">
                                @error('kode_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama_mata_pelajaran</label>
                                <input type="text" class="form-control  @error('nama_mata_pelajaran') is-invalid @enderror"
                                    name="nama_mata_pelajaran" value="{{ $jurusan->nama_mata_pelajaran }}">
                                @error('nama_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Semester</label>
                                <select class="form-select @error('semester') is-invalid @enderror" name="semester">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="1" {{ $jurusan->semester == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ $jurusan->semester == '2' ? 'selected' : '' }}>2
                                    </option>
                                    <option value="3" {{ $jurusan->semester == '3' ? 'selected' : '' }}>3</option>
                                </select>
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <select class="form-select @error('jurusan') is-invalid @enderror" name="jurusan">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="RPL" {{ $jurusan->jurusan == 'RPL' ? 'selected' : '' }}>RPL</option>
                                    <option value="TKJ" {{ $jurusan->jurusan == 'TKJ' ? 'selected' : '' }}>TKJ</option>
                                    <option value="TKR" {{ $jurusan->jurusan == 'TKR' ? 'selected' : '' }}>TKR</option>
                                    <option value="TBSM" {{ $jurusan->jurusan == 'TBSM' ? 'selected' : '' }}>TBSM</option>
                                </select>
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection