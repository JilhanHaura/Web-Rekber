@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-head">
                        <img id="card_head" src="/assets/images/sampul.jpg"></img>
                    </div>
                    <div class="image-crop">
                        <img id="avatar" src="/assets/images/dashboard/img_1.jpg"></img>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <strong style="font-size: 30px; color: black;"><b>Tsalsabila Jilhan
                                                Haura</b></strong><br>
                                        Super Admin<br>
                                    </div>
                                </div>
                                <div class="col-md my-3">
                                    <div>
                                        <div class="row justify-content-end row-divider">
                                            <div class="col-1"><i class="fas fa-id-card" style="font-size: 20px;"></i>
                                            </div>
                                            <div class="col-lg-9 col-md-8" style="font-size: 15px;">94894893848</div>
                                        </div>
                                        <div class="row justify-content-end row-divider">
                                            <div class="col-1"><i class="fas fa-user" style="font-size:20px"></i></div>
                                            <div class="col-lg-9 col-md-8" style="font-size: 15px">jilhan Haura</div>
                                        </div>
                                        <div class="row justify-content-end row-divider">
                                            <div class="col-1"><i class="fas fa-user-tag" style="font-size:20px"></i>
                                            </div>
                                            <div class="col-lg-9 col-md-8" style="font-size: 15px">Super Admin</div>
                                        </div>
                                        <div class="row justify-content-end row-divider">
                                            <div class="col-1"><i class="fas fa-map-marker-alt" style="font-size:20px"></i>
                                            </div>
                                            <div class="col-lg-9 col-md-8" style="font-size: 15px">Jl simpang komplek
                                                polda
                                            </div>
                                        </div>
                                        <div class="row justify-content-end row-divider">
                                            <div class="col-1"><i class="fas fa-phone" style="font-size:20px"></i>
                                            </div>
                                            <div class="col-lg-9 col-md-8" style="font-size: 15px">+62 1209 0120 02
                                            </div>
                                        </div>
                                        <div class="row justify-content-end row-divider">
                                            <div class="col-1"><i class="fas fa-envelope" style="font-size:20px"></i>
                                            </div>
                                            <div class="col-lg-9 col-md-8" style="font-size: 15px">jilhan@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
