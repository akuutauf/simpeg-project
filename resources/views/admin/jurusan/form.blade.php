@extends('admin.layouts.base-admin')

@section('title')
    <title>SIMPEG | Update Jurusan</title>
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
                                Edit data jurusan
                            </h4>
                            {{-- Jurusan Info --}}
                            <p class="card-description">
                                Jurusan Info
                            </p>
                            <form action="{{ $action }}" class="form-group" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Nama_Jurusan">Nama Jurusan</label>
                                            <input type="text" class="form-control" id="Nama_Jurusan" name="Nama_Jurusan"
                                                placeholder="Name employee type" value="{{ $jurusan->Nama_Jurusan }}" />
                                        </div>
                                    </div>
                                </div>
                                {{-- Button Confirmation --}}
                                <button type="submit" class="btn btn-primary mr-2">
                                    Submit
                                </button>
                                <a href="{{ route('admin.jurusan') }}" class="btn btn-light">
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
