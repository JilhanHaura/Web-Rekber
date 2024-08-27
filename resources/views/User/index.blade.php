@extends('User.layout.main')
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
                            <i class="fas fa-archive"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Transaction</h4>
                            </div>
                            <div class="card-body">
                                159
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                            <canvas id="balance-chart" height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Refund</h4>
                            </div>
                            <div class="card-body">
                                100
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                            <canvas id="sales-chart" height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total user</h4>
                            </div>
                            <div class="card-body">
                                100 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Transaction Summary <small>Weekly progress</small></h2>
                            <div class="filter">
                                <div id="reportrange" class="pull-right"
                                    style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-9 col-sm-12 ">
                                <div class="demo-container" style="height:280px">
                                    <div id="chart_plot_02" class="demo-placeholder"></div>
                                </div>
                                <div class="tiles">
                                    <div class="col-md-4 tile">
                                        <span>Total Sessions</span>
                                        <h2>231,809</h2>
                                        <span class="sparkline11 graph" style="height: 160px;">
                                            <canvas width="200" height="60"
                                                style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                        </span>
                                    </div>
                                    <div class="col-md-4 tile">
                                        <span>Total Revenue</span>
                                        <h2>$231,809</h2>
                                        <span class="sparkline22 graph" style="height: 160px;">
                                            <canvas width="200" height="60"
                                                style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                        </span>
                                    </div>
                                    <div class="col-md-4 tile">
                                        <span>Total Sessions</span>
                                        <h2>231,809</h2>
                                        <span class="sparkline11 graph" style="height: 160px;">
                                            <canvas width="200" height="60"
                                                style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3 col-sm-12 ">
                                <div>
                                    <div class="x_title">
                                        <h2>Top Profiles</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                </div>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <ul class="list-unstyled top_profiles scroll-view">
                                        <li class="media event">
                                            <a class="pull-left border-aero profile_thumb">
                                                <i class="fa fa-user aero"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                <p> <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media event">
                                            <a class="pull-left border-green profile_thumb">
                                                <i class="fa fa-user green"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                <p> <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media event">
                                            <a class="pull-left border-blue profile_thumb">
                                                <i class="fa fa-user blue"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                <p> <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media event">
                                            <a class="pull-left border-aero profile_thumb">
                                                <i class="fa fa-user aero"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                <p> <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media event">
                                            <a class="pull-left border-green profile_thumb">
                                                <i class="fa fa-user green"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                <p> <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('Admin.transaction.Tracking')
@endsection
