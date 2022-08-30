@extends('admin.layouts.base-admin')

@section('title')
    <title>SIMPEG | Insert Employee</title>
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
                                Tambah data employee
                            </h4>
                            {{-- Personal Form --}}
                            <p class="card-description">
                                Personal Form
                            </p>
                            <form action="{{ $action }}" class="form-group" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="">Select Gender</option>
                                                <option value="L">Male</option>
                                                <option value="P">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="birthplace">Birth Place</label>
                                            <input type="text" class="form-control" id="birthplace" name="birthplace"
                                                placeholder="Birth place" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="birthdate">Date of Birth</label>
                                            <input type="date" class="form-control datedropper-init custom-form"
                                                data-dd-opt-custom-class="dd-theme-bootstrap" id="birthdate"
                                                name="birthdate" placeholder="Date of birth" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email"
                                                name="email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="front_degree">Front Degree</label>
                                            <input type="text" class="form-control" id="front_degree"
                                                placeholder="Front degree" name="front_degree" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="back_degree">Back Degree</label>
                                            <input type="text" class="form-control" id="back_degree" name="back_degree"
                                                placeholder="Back degree" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <input type="text" class="form-control" id="religion" name="religion"
                                                placeholder="Religion" />
                                        </div>
                                    </div>
                                </div>
                                {{-- Address Form --}}
                                <p class="card-description mt-2">
                                    Address Form
                                </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" id="address" name="address" rows="4" placeholder="Full Adress"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" class="form-control" id="postal_code"
                                                name="postal_code" placeholder="Postal code" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="City" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="district">Disctrict</label>
                                            <input type="text" class="form-control" id="district" name="district"
                                                placeholder="District" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="province">Province</label>
                                            <input type="text" class="form-control" id="province" name="province"
                                                placeholder="Province" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nationality">Nationality</label>
                                            <input type="text" class="form-control" id="nationality"
                                                name="nationality" placeholder="Nationality" />
                                        </div>
                                    </div>
                                </div>
                                {{-- Employee Form --}}
                                <p class="card-description mt-2">
                                    Employee Form
                                </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nip">NIP</label>
                                            <input type="text" class="form-control" id="nip" name="nip"
                                                placeholder="Nip" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nidn">NIDN</label>
                                            <input type="text" class="form-control" id="nidn" name="nidn"
                                                placeholder="Nidn" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="employee_type_id">Employee Type</label>
                                            <select class="form-control" id="employee_type_id" name="employee_type_id">
                                                <option value="">Select Employee Type</option>
                                                @foreach ($employee_type as $itemId)
                                                    <option value="{{ $itemId->id }}">
                                                        {{ $itemId->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- Button Confirmation --}}
                                <button type="submit" class="btn btn-primary mr-2">
                                    Submit
                                </button>
                                <a href="{{ route('admin.employee') }}" class="btn btn-light">
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
