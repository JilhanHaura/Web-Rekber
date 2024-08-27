@extends('Admin.layout.main')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title">List Transaction -
                                <div class="dropdown d-inline">
                                    <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#"
                                        id="orders-month">August</a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                        <li class="dropdown-title">Select Month</li>
                                        <li><a href="#" class="dropdown-item">January</a></li>
                                        <li><a href="#" class="dropdown-item">February</a></li>
                                        <li><a href="#" class="dropdown-item">March</a></li>
                                        <li><a href="#" class="dropdown-item">April</a></li>
                                        <li><a href="#" class="dropdown-item">May</a></li>
                                        <li><a href="#" class="dropdown-item">June</a></li>
                                        <li><a href="#" class="dropdown-item">July</a></li>
                                        <li><a href="#" class="dropdown-item active">August</a></li>
                                        <li><a href="#" class="dropdown-item">September</a></li>
                                        <li><a href="#" class="dropdown-item">October</a></li>
                                        <li><a href="#" class="dropdown-item">November</a></li>
                                        <li><a href="#" class="dropdown-item">December</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-stats-items">
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">114</div>
                                    <div class="card-stats-item-label">Success</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">12</div>
                                    <div class="card-stats-item-label">Pending</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">23</div>
                                    <div class="card-stats-item-label">Canceled</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Transaction</h4>
                            </div>
                            <div class="card-body">
                                159
                            </div>
                        </div>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span>
                                1.08%</span>
                            <span class="text-nowrap">Since last week</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                            <canvas id="balance-chart" height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-money-check"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Refund</h4>
                            </div>
                            <div class="card-body">
                                100
                            </div>
                        </div>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span>
                                5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                            <canvas id="sales-chart" height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total user</h4>
                            </div>
                            <div class="card-body">
                                100 </div>
                        </div>
                        <p class="mb-0 text-muted">
                            <span class="text-danger me-2"><span class="mdi mdi-arrow-down-bold"></span>
                                1.08%</span>
                            <span class="text-nowrap">Since previous week</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end d-flex">
                <div class="col-lg-4 col-md-4 col-sm-12 ml-auto">
                    <div class="input-group">
                        <input type="text" name="from-to" class="form-control" id="date-range">
                        <span class="input-group-text bg-primary text-white align-items-center">
                            <i class="mdi mdi-calendar-range font-13"></i>
                        </span>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="alert alert-primary alert-dismissible fade show mb-3" role="alert">
                            Pendapatan Hari Ini meningkat <span class="mdi mdi-arrow-up-bold"></span>
                            5.27%</span>
                        </div>
                        <div class="card-header">
                            <h4>Statistics</h4>
                            <div class="card-header-action">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary">Week</a>
                                    <a href="#" class="btn">Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart1" height="130"></canvas>
                            {{-- <div class="statistic-details mt-sm-4">
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 7%</span>
                                    <div class="detail-value">$243</div>
                                    <div class="detail-name">Today's Sales</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-danger"><i
                                                class="fas fa-caret-down"></i></span> 23%</span>
                                    <div class="detail-value">$2,902</div>
                                    <div class="detail-name">This Week's Sales</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span>9%</span>
                                    <div class="detail-value">$12,821</div>
                                    <div class="detail-name">This Month's Sales</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 19%</span>
                                    <div class="detail-value">$92,142</div>
                                    <div class="detail-name">This Year's Sales</div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card gradient-bottom">
                        <div class="card-header">
                            <h4>Top 5 Users</h4>
                            <div class="card-header-action dropdown">
                                <a href="#" data-toggle="dropdown"
                                    class="btn btn-primary dropdown-toggle">Month</a>
                                <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <li class="dropdown-title">Select Period</li>
                                    <li><a href="#" class="dropdown-item">Today</a></li>
                                    <li><a href="#" class="dropdown-item">Week</a></li>
                                    <li><a href="#" class="dropdown-item active">Month</a></li>
                                    <li><a href="#" class="dropdown-item">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body" id="top-5-scroll">
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <img class="mr-3 rounded" width="55" src="assets/img/avatar/avatar-6.png"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                        </div>
                                        <div class="media-title">Jilhan Haura</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-primary" data-width="64%"></div>
                                                <div class="budget-price-label">$68,714</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger" data-width="43%"></div>
                                                <div class="budget-price-label">$38,700</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded" width="55" src="assets/img/avatar/avatar-1.png"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">67 Sales</div>
                                        </div>
                                        <div class="media-title">Nurul Prima</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-primary" data-width="84%"></div>
                                                <div class="budget-price-label">$107,133</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger" data-width="60%"></div>
                                                <div class="budget-price-label">$91,455</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded" width="55" src="assets/img/avatar/avatar-2.png"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">63 Sales</div>
                                        </div>
                                        <div class="media-title">Muhammad Raihan</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-primary" data-width="34%"></div>
                                                <div class="budget-price-label">$3,717</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger" data-width="28%"></div>
                                                <div class="budget-price-label">$2,835</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded" width="55" src="assets/img/avatar/avatar-3.png"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">28 Sales</div>
                                        </div>
                                        <div class="media-title">Hantu</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-primary" data-width="45%"></div>
                                                <div class="budget-price-label">$13,972</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger" data-width="30%"></div>
                                                <div class="budget-price-label">$9,660</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded" width="55" src="assets/img/avatar/avatar-4.png"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">19 Sales</div>
                                        </div>
                                        <div class="media-title">Testing</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-primary" data-width="35%"></div>
                                                <div class="budget-price-label">$7,391</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger" data-width="28%"></div>
                                                <div class="budget-price-label">$5,472</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer pt-3 d-flex justify-content-center">
                            <div class="budget-price justify-content-center">
                                <div class="budget-price-square bg-primary" data-width="20"></div>
                                <div class="budget-price-label">Selling Price</div>
                            </div>
                            <div class="budget-price justify-content-center">
                                <div class="budget-price-square bg-danger" data-width="20"></div>
                                <div class="budget-price-label">Budget Price</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>History Transaction</h2>
                        </div>
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
                                                    <div class="badge {{ $statusClass }}">{{ $transactions['status'] }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="/detail_transaction">Details</a>
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
            </div> --}}
        </section>
    </div>
    @include('Admin.transaction.Tracking')
@endsection
