@extends('admin.layouts.base-admin')

@section('title')
    <title>SIMPEG | Manajemen Mahasiswa</title>

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
                                    class="text-primary"><b>Mahasiswa</b></span> kamu bersama
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
                            <p class="card-title">Table data Mahasiswa</p>
                            {{-- Button Tambah --}}
                            <a href="{{ route('admin.create.employee-type') }}" type="button"
                                class="btn btn-primary btn-icon-text mb-3">
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
                                                    <th width="">Nama</th>
                                                    <th width="">Nim</th>
                                                    <th width="">Alamat</th>
                                                    <th width="15%">Option</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($mahasiswa as $item)
                                                <tr>
                                                    <td>{{ $no }}</td>
                                                    <td>{{ $item->Nama }}</td>
                                                    <td>{{ $item->NIM }}</td>
                                                    <td>{{ $item->Alamat }}</td>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.edit.employee-type', $item->id) }}"
                                                            class="link-manage">Edit</a> | <a
                                                            href="{{ route('admin.delete.employee-type', $item->id) }}"
                                                            class="link-manage"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data?');">Delete</a>
                                                    </td>
                                                </tr>
                                                @php
                                                    $no++;
                                                @endphp
                                            @endforeach
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
