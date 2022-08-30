@extends('admin.layouts.base-admin')

@section('title')
    <title>SIMPEG | Dashboard Admin</title>

    @php
    // fungsi konversi data tipe date ke tanggal
    function dateConversion($date)
    {
        $month = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $slug = explode('-', $date);
        return $slug[2] . ' ' . $month[(int) $slug[1]] . ' ' . $slug[0];
    }
    @endphp
@endsection

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Selamat datang {{ Auth::user()->name }}</h3>
                            <h6 class="font-weight-normal mb-0">Yuk mulai manajemen data kamu di
                                <span class="text-primary"><b>Manajemen Data Admin</b></span>
                            </h6>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="justify-content-end d-flex">
                                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button"
                                        id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true">
                                        <i id="" class="mdi mdi-calendar">Today
                                            <script>
                                                var d = (new Date()).toString().split(' ').splice(1, 3).join(' ');
                                                document.write(d)
                                            </script>
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card tale-bg">
                        <div class="card-people mt-auto">
                            <img src="{{ asset('admin/images/dashboard/people.svg') }}" alt="people">
                            <div class="weather-info">
                                <div class="d-flex">
                                    <div>
                                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="location font-weight-normal">Banyuwangi</h4>
                                        <h6 class="font-weight-normal">Indonesia</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-body">
                                    <a href="{{ route('admin.jurusan') }}" class="link-manage text-white">
                                        <p class="mb-4">Manage Jurusan</p>
                                    </a>
                                    <p class="fs-30 mb-2">{{ $jurusan }}</p>
                                    <p class="mt-3">Total data Jurusan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <a href="{{ route('admin.prodi') }}" class="link-manage text-white">
                                        <p class="mb-4">Manage Prodi</p>
                                    </a>
                                    <p class="fs-30 mb-2">{{ $prodi }}</p>
                                    <p class="mt-3">Total data Prodi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <a href="{{ route('admin.mahasiswa') }}" class="link-manage text-white">
                                        <p class="mb-4">Manage Mahasiswa</p>
                                    </a>
                                    <p class="fs-30 mb-2">{{ $mahasiswa }}</p>
                                    <p class="mt-3">Total data Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <a href="{{ route('admin.employee') }}" class="link-manage text-white">
                                        <p class="mb-4">Manage Employee</p>
                                    </a>
                                    <p class="fs-30 mb-2">{{ $employee }}</p>
                                    <p class="mt-3">Total data Employee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <a href="{{ route('admin.employee-type') }}" class="link-manage text-white">
                                        <p class="mb-4">Manage Employee Type</p>
                                    </a>
                                    <p class="fs-30 mb-2">{{ $employee_type }}</p>
                                    <p class="mt-3">Total data Employee Type</p>
                                </div>
                            </div>
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
