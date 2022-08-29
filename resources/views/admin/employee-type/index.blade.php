@extends('admin.layouts.base-admin')

@section('title')
    <title>SIMPEG | Manajemen Employee Type</title>

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
                            <h6 class="font-weight-normal mb-0">Yuk mulai manajemen data <span
                                    class="text-primary"><b>Employee Type</b></span> kamu bersama
                                kami.
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
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                        <a class="dropdown-item" href="#">January - February</a>
                                        <a class="dropdown-item" href="#">March - April</a>
                                        <a class="dropdown-item" href="#">May - June</a>
                                        <a class="dropdown-item" href="#">August - September</a>
                                        <a class="dropdown-item" href="#">October - November</a>
                                        <a class="dropdown-item" href="#">December - January</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Table data Employee Type</p>
                            {{-- Button Tambah --}}
                            <a href="" type="button" class="btn btn-primary btn-icon-text mb-3">
                                <i class="ti-plus btn-icon-prepend mdi mdi-plus"></i>
                                Tambah
                            </a>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="example" class="display expandable-table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Nidn</th>
                                                    <th>Gender</th>
                                                    <th>Employee Type</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>1</td>
                                                <td>Taufik Hidayat</td>
                                                <td>362055401019</td>
                                                <td>Male</td>
                                                <td>Staff</td>
                                                <td>taufik@email.com</td>
                                                <td>Banyuwangi - Rogojampi</td>
                                                <td><a href="" class="link-manage">Edit</a> | <a href=""
                                                        class="link-manage">Delete</a></td>
                                            </tr>
                                        </table>
                                    </div>
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
