@extends('admin.layouts.base-admin')

@section('title')
    <title>SIMPEG | Update Prodi</title>
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
                                Edit data prodi
                            </h4>
                            {{-- Employee Type Info --}}
                            <p class="card-description">
                                Prodi Info
                            </p>
                            <form action="{{ $action }}" class="form-group" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Nama_Prodi">Nama Prodi</label>
                                            <input type="text" class="form-control" id="Nama_Prodi" name="Nama_Prodi"
                                                placeholder="Nama prodi" value="{{ $prodi->Nama_Prodi }}" />
                                        </div>
                                    </div>
                                </div>
                                {{-- Button Confirmation --}}
                                <button type="submit" class="btn btn-primary mr-2">
                                    Submit
                                </button>
                                <a href="{{ route('admin.prodi') }}" class="btn btn-light">
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
