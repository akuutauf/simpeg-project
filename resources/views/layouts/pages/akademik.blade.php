@extends('layouts.base-user')

@section('title')
    <title>Akademik | SIMPEG</title>
@endsection

@section('content')
    <div class="container py-5 mt-5 pt-5">
        <div class="row justify-content-around">
            <div class="col-lg-7 mb-3 text-left my-auto">
                <h1>Data Akademik,</h1>
                <h4>Siapa saja mahasiswa yang sudah terdaftar ?</h4>
                <p class="text-secondary">Berikut adalah data Mahasiswa yang sudah terdata pada sistem akademik Politeknik
                    Negeri Banyuwangi.</p>
                </p>
            </div>
            <div class="col-lg-5 mb-3">
                <img src="{{ asset('img/ilustrator/employee.svg') }}" class=" img-fluid" alt="">
            </div>
        </div>
        <div class="row py-4 justify-content-around mb-4 mt-4">
            <div class="col-lg-12">
                <div class="shadow-card p-5 fw-regular text-justify">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="bg-theme text-white" scope="col">No</th>
                                <th class="bg-theme text-white" scope="col">Nim</th>
                                <th class="bg-theme text-white" scope="col">Nama</th>
                                <th class="bg-theme text-white" scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($api as $data) --}}
                            <tr>
                                <th scope="row">1</th>
                                <td>Andy Lutfi</td>
                                <td>362055301020</td>
                                <td scope="col">Banyuwangi Jl. Haji Murot</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
