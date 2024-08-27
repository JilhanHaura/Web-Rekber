@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Refund</div>
                    <div class="breadcrumb-item">History</div>
                    <div class="breadcrumb-item">Detail</div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="container">
                            <p><strong>Image/Video</strong></p>
                            <img src="/assets/images/dashboard/img_2.jpg" alt="Return Image" width="300">
                            <img src="/assets/images/dashboard/img_3.jpg" alt="Return Image" width="300">
                            <img src="/assets/images/dashboard/img_4.jpg" alt="Return Image" width="300">
                            <br><br>
                            <div class="row">
                                <div class="col-2"><strong>ID Order</strong></div>
                                <div class="col">: {{ $DetailRefund['orderId'] }}</div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Customer Name</strong></div>
                                <div class="col">: {{ $DetailRefund['customerName'] }}</div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Seller Name</strong></div>
                                <div class="col">: {{ $DetailRefund['sellerName'] }}</div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Total</strong></div>
                                <div class="col">: Rp. {{ $DetailRefund['total'] }}</div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Due Date</strong></div>
                                <div class="col">: {{ $DetailRefund['dueDate'] }}</div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Reason Complaint</strong></div>
                                <div class="col justified-text">: {{ $DetailRefund['reasonComplaint'] }}</div>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                @if ($DetailRefund['status'] === 'Refund Success' || $DetailRefund['status'] === 'Refund Refused')
                                    @php
                                        $refundStatus = '';
                                        if ($DetailRefund['status'] === 'Refund Success') {
                                            $refundStatus = 'badge-success';
                                        } elseif ($DetailRefund['status'] === 'Refund Refused') {
                                            $refundStatus = 'badge-danger';
                                        }
                                    @endphp
                                    <div class="badge {{ $refundStatus }}">{{ $DetailRefund['status'] }}</div>
                                @else
                                    @php
                                        $statusRefund = 'Refund Refused';
                                    @endphp
                                    <a href="/refund" class="btn btn-danger mx-1">Decline</a>
                                    <a href="#" data-toggle="modal" data-target="#ModalRefund"
                                        class="btn btn-primary mx-1">Accept</a>
                                @endif
                            </div>

                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('Admin.refund.next-detail-refund')
@endsection
