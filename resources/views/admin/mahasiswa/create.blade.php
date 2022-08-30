@extends('admin.layouts.base-admin')

@section('title')
    <title>SIMPEG | Insert Mahasiswa</title>
@endsection

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Tambah data mahasiswa
                            </h4>
                            {{-- Mahasiswa Info --}}
                            <p class="card-description">
                                Mahasiswa Info
                            </p>
                            <form action="{{ $action }}" class="form-group" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Nama">Nama Mahasiswa</label>
                                            <input type="text" class="form-control" id="Nama" name="Nama"
                                                placeholder="Nama mahasiswa" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="NIM">Nim Mahasiswa</label>
                                            <input type="text" class="form-control" id="NIM" name="NIM"
                                                placeholder="Nim mahasiswa" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Alamat">Alamat Mahasiswa</label>
                                            <textarea class="form-control" id="Alamat" name="Alamat" rows="4" placeholder="Alamat lengkap"></textarea>
                                        </div>
                                    </div>
                                </div>
                                {{-- Button Confirmation --}}
                                <button type="submit" class="btn btn-primary mr-2">
                                    Submit
                                </button>
                                <a href="{{ route('admin.mahasiswa') }}" class="btn btn-light">
                                    Cancel
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Icnlude Footer --}}
        @include('admin.layouts.footer-admin')
    </div>
    <!-- main-panel ends -->
@endsection

@section('script')
    <script>
        dateDropper({
            selector: 'input[type="date"]',
            expandedDefault: true,
            expandable: true,
            overlay: true,
            showArrowsOnHover: true,
            autoFill: false
        });
    </script>
@endsection
