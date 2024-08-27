@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>History Transaction</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Transaction</div>
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
                                        <th>Order Id</th>
                                        <th>Customer</th>
                                        <th>Seller</th>
                                        <th>Total</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction as $transactions)
                                        <tr>
                                            <td>{{ $transactions['no'] }}</td>
                                            <td><a href="#">{{ $transactions['orderId'] }}</a></td>
                                            <td class="font-weight-600">{{ $transactions['customer'] }}</td>
                                            <td class="font-weight-600">{{ $transactions['seller'] }}</td>
                                            <td class="font-weight-600">{{ $transactions['total'] }}</td>
                                            <td>{{ $transactions['date'] }}</td>
                                            <td>
                                                @php
                                                    $statusClass = '';
                                                    if ($transactions['status'] === 'pending') {
                                                        $statusClass = 'badge-warning';
                                                    } elseif ($transactions['status'] === 'paid') {
                                                        $statusClass = 'badge-success';
                                                    } elseif ($transactions['status'] === 'unpaid') {
                                                        $statusClass = 'badge-danger';
                                                    }
                                                @endphp
                                                <div class="badge {{ $statusClass }}">{{ $transactions['status'] }}</div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="/detail_transaction">Details</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#ModalTransaction">Tracking</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
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
    </div>
    @include('Admin.transaction.Tracking')
@endsection
