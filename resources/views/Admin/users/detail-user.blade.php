@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Users</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Users</div>
                    <div class="breadcrumb-item">Details</div>
                </div>
            </div>
            {{-- @foreach ($data as $detailUser) --}}
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card-title pb-2 m-0">User Id<br /><span>#{{ $detailUser['userId'] }}</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <img src="/assets/img/avatar/avatar-6.png" class="rounded-circle shadow align-self-center"
                                    style="max-width: 130px;" alt="" srcset="">
                                <hr class="border border-1 opacity-75 w-100">
                                <div class="data-field">
                                    <span class="fw-bold text-start">NIK</span>
                                    <span class="text-muted ">{{ $detailUser['nik'] }}</span>
                                </div>
                                <div class="data-field">
                                    <span class="fw-bold text-start">Name</span>
                                    <span class="text-muted ">{{ $detailUser['name'] }}</span>
                                </div>
                                <div class="data-field">
                                    <span class="fw-bold text-start">Gender</span>
                                    <span class="text-muted ">{{ $detailUser['gender'] }}</span>
                                </div>
                                <div class="data-field">
                                    <span class="fw-bold text-start">Birth Place</span>
                                    <span class="text-muted ">{{ $detailUser['birthPlace'] }}</span>
                                </div>
                                <div class="data-field">
                                    <span class="fw-bold text-start">Date Of Birth</span>
                                    <span class="text-muted ">{{ $detailUser['dateOfBirth'] }}</span>
                                </div>
                            </div>
                            <hr class="border border-1 opacity-75 w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card-title pb-2 m-0">
                                    <h4>Contact</h4>
                                </div>
                            </div>

                            <div class="data-field">
                                <span class="fw-bold text-start">Email</span>
                                <span class="text-muted ">{{ $detailUser['email'] }}</span>
                            </div>
                            <div class="data-field">
                                <span class="fw-bold text-start">Phone Number</span>
                                <span class="text-muted ">{{ $detailUser['phoneNumber'] }}</span>
                            </div>
                            <hr class="border border-1 opacity-75 w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card-title pb-2 m-0">
                                    <h4>Address</h4>
                                </div>
                            </div>
                            <div class="data-field">
                                <span class="fw-bold text-start">Province</span>
                                <span class="text-muted ">{{ $detailUser['province'] }}</span>
                            </div>
                            <div class="data-field">
                                <span class="fw-bold text-start">City</span>
                                <span class="text-muted ">{{ $detailUser['city'] }}</span>
                            </div>
                            <div class="data-field">
                                <span class="fw-bold text-start">Village</span>
                                <span class="text-muted ">{{ $detailUser['village'] }}</span>
                            </div>
                            <div class="data-field">
                                <span class="fw-bold text-start">Detail</span>
                                <span class="text-muted ">{{ $detailUser['detail'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
    </div>
@endsection
