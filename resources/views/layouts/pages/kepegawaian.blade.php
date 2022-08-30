@extends('layouts.base-user')

@section('title')
    <title>SIMPEG | Kepegawaian</title>
@endsection

@section('content')
    <div class="container py-5 mt-5 pt-5">
        <div class="row justify-content-around">
            <div class="col-lg-6 mb-3 text-left my-auto">
                <h1>Mau tau nih..</h1>
                <h4>Siapa aja yang sudah gabung ?</h4>
                <p class="text-secondary">Berikut adalah data pegawai dari perusahaan kami.</p>
                <p class="text-secondary">Kami telah bekerjasama dengan berbagai pihak, perusahaan dan berbagai startup yang
                    terdapat di daerah kami.
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
                                <th class="bg-theme text-white" scope="col">Nama Pegawai</th>
                                <th class="bg-theme text-white" scope="col">Jabatan</th>
                                <th class="bg-theme text-white" scope="col">Email</th>
                                <th class="bg-theme text-white" scope="col">Kota</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($api as $data) --}}
                            <tr>
                                <th scope="row">1</th>
                                <td>Andy</td>
                                <td>Karyawan</td>
                                <td scope="col">andy@email.com</td>
                                <td scope="col">Banyuwangi</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
