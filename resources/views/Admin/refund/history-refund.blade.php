@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>History Refund</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Refund</div>
                    <div class="breadcrumb-item">History</div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Seller</th>
                                        <th>Total</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $HistoryRefund)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="font-weight-600">{{ $HistoryRefund['orderId'] }}</a></td>
                                            <td class="font-weight-600">{{ $HistoryRefund['customerName'] }}</td>
                                            <td class="font-weight-600">{{ $HistoryRefund['sellerName'] }}</td>
                                            <td class="font-weight-600">Rp. {{ $HistoryRefund['total'] }}</td>
                                            <td>{{ $HistoryRefund['dueDate'] }}</td>
                                            <td>
                                                @php
                                                    $refundStatus = '';
                                                    if ($HistoryRefund['status'] === 'Refund Success') {
                                                        $refundStatus = 'badge-success';
                                                    } elseif ($HistoryRefund['status'] === 'Process Refund') {
                                                        $refundStatus = 'badge-warning';
                                                    } elseif ($HistoryRefund['status'] === 'Refund Refused') {
                                                        $refundStatus = 'badge-danger';
                                                    }
                                                @endphp
                                                <div class="badge {{ $refundStatus }}">{{ $HistoryRefund['status'] }}</div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="/refund/{{ $HistoryRefund->id }}">Details</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('refund.destroy', $HistoryRefund->id) }}">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
