@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Transaction</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                    <div class="breadcrumb-item">Transaction</div>
                    <div class="breadcrumb-item">Details</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Jilhan</h2>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-title pb-2 m-0">
                        <h4>Timeline</h4>
                    </div>
                </div>
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="activities">
                                    <div class="activity">
                                        <div class="activity-icon bg-primary text-white shadow-primary">
                                            <i class="fas fa-comment-alt"></i>
                                        </div>
                                        <div class="activity-detail">
                                            <div class="mb-2">
                                                <span class="text-job text-primary">August 21, 2023, 8:30:15 am</span>
                                            </div>
                                            <p>User Created Trade</p>
                                        </div>
                                    </div>
                                    <div class="activity">
                                        <div class="activity-icon bg-primary text-white shadow-primary">
                                            <i class="fas fa-arrows-alt"></i>
                                        </div>
                                        <div class="activity-detail">
                                            <div class="mb-2">
                                                <span class="text-job text-primary">August 22, 2023, 8:30:15 am</span>
                                            </div>
                                            <p>System Notified Admin</p>
                                        </div>
                                    </div>
                                    <div class="activity">
                                        <div class="activity-icon bg-primary text-white shadow-primary">
                                            <i class="fas fa-unlock"></i>
                                        </div>
                                        <div class="activity-detail">
                                            <div class="mb-2">
                                                <span class="text-job text-primary">August 23, 2023, 8:30:15 am</span>
                                            </div>
                                            <p>Admin Accepted Trade</p>
                                        </div>
                                    </div>
                                    <div class="activity">
                                        <div class="activity-icon bg-primary text-white shadow-primary">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                        <div class="activity-detail">
                                            <div class="mb-2">
                                                <span class="text-job text-primary">August 24, 2023, 8:30:15 am</span>
                                            </div>
                                            <p>Trade in system</p>
                                        </div>
                                    </div>
                                    <div class="activity">
                                        <div class="activity-icon bg-primary text-white shadow-primary">
                                            <i class="fas fa-comment-alt"></i>
                                        </div>
                                        <div class="activity-detail">
                                            <div class="mb-2">
                                                <span class="text-job text-primary">August 24, 2023, 8:30:15 am</span>
                                            </div>
                                            <p>Transaction Success</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title pb-2 m-0">
                                    <h4>Transaction Detail</h4>
                                </div>
                                @foreach ($detail_transaction as $detailTransaction)
                                    <div class="d-flex flex-column">
                                        <div class="data-field">
                                            <span class="fw-bold text-start">Order Details</span>

                                        </div>
                                        <div class="data-field">
                                            <span class="fw-bold text-start">ID Transaction</span>
                                            <span class="text-muted ">{{ $detailTransaction['idTransaction'] }}</span>
                                        </div>
                                        <hr class="border border-1 opacity-75 w-100">
                                        <div class="data-field">
                                            <span class="fw-bold text-start">Side</span>
                                            <span class="text-muted ">{{ $detailTransaction['side'] }}</span>
                                        </div>
                                        <div class="data-field">
                                            <span class="fw-bold text-start">Market Pair</span>
                                            <span class="text-muted ">{{ $detailTransaction['marketPair'] }}</span>
                                        </div>
                                        <div class="data-field">
                                            <span class="fw-bold text-start">Email</span>
                                            <span class="text-muted ">{{ $detailTransaction['email'] }}</span>
                                        </div>
                                        <div class="data-field">
                                            <span class="fw-bold text-start">Amount Transaction</span>
                                            <span class="text-muted ">{{ $detailTransaction['amountTransaction'] }}</span>
                                        </div>
                                        <div class="data-field">
                                            <span class="fw-bold text-start">Fee Transaction</span>
                                            <span class="text-muted ">{{ $detailTransaction['feeTransaction'] }}</span>
                                        </div>
                                        <div class="data-field">
                                            <span class="fw-bold text-start">Total</span>
                                            <span class="text-muted ">{{ $detailTransaction['total'] }}</span>
                                        </div>
                                    </div>
                                    <hr class="border border-1 opacity-75 w-100">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title pb-2 m-0">
                                            <h5>Payment</h5>
                                        </div>
                                    </div>

                                    <div class="data-field">
                                        <span class="fw-bold text-start">Payment Detail</span>
                                        <span class="text-muted ">{{ $detailTransaction['paymentDetail'] }}</span>
                                    </div>
                                    <div class="data-field">
                                        <span class="fw-bold text-start">Bank Name</span>
                                        <span class="text-muted ">{{ $detailTransaction['bankName'] }}</span>
                                    </div>
                                    <div class="data-field">
                                        <span class="fw-bold text-start">Account Number</span>
                                        <span class="text-muted ">{{ $detailTransaction['accountNumber'] }}</span>
                                    </div>
                                    <div class="data-field">
                                        <span class="fw-bold text-start">Status Transaction</span>
                                        <span class="text-muted ">{{ $detailTransaction['statusTransaction'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
