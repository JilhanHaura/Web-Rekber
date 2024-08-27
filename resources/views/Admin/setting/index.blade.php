@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Setting</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Setting</div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end mb-3">
                            <a class="btn btn-success active" href="#" data-toggle="modal"
                                data-target="#ModalSetting">Add Data</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Persentase</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $settings)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $settings['month'] }}</td>
                                            <td>{{ $settings['year'] }}</td>
                                            <td>{{ $settings['percentage'] }}</td>
                                            <td>
                                                @php
                                                    $statusClass = '';
                                                    if ($settings['status'] === 'Active') {
                                                        $statusClass = 'badge-success';
                                                    } elseif ($settings['status'] === 'Non Active') {
                                                        $statusClass = 'badge-danger';
                                                    }
                                                @endphp
                                                <div class="badge {{ $statusClass }}">{{ $settings['status'] }}</div>
                                            </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" @if ($settings['status'] === 'Active') checked @endif>
                                                    <span class="slider round" data-on-text="Yes" data-off-text="No"></span>
                                                </label>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('Admin.setting.add-Data')
@endsection
