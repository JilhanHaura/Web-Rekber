@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">User</div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>User Id</th>
                                        <th>Avatar</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $key => $list_user)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $list_user['userId'] }}</td>
                                            <td>
                                                <figure class="avatar mr-2 avatar-xl">
                                                    <img src="assets/img/avatar/avatar-6.png" alt="...">
                                                </figure>
                                            </td>
                                            <td>{{ $list_user['name'] }}</td>
                                            <td>{{ $list_user['email'] }}</td>
                                            <td>{{ $list_user['gender'] }}</td>
                                            <td>{{ $list_user['dueDate'] }}</td>
                                            <td>
                                                @php
                                                    $statusClass = '';
                                                    if ($list_user['status'] === 'Finished') {
                                                        $statusClass = 'badge-success';
                                                    } elseif ($list_user['status'] === 'Progress') {
                                                        $statusClass = 'badge-danger';
                                                    }
                                                @endphp
                                                <div class="badge {{ $statusClass }}">{{ $list_user['status'] }}</div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="/user/{{ $list_user->id }}">Details</a>
                                                        <form action="{{ url('user/' . $list_user->id) }}" method="POST"
                                                            class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a class="dropdown-item" type="submit" id="#swal-6"
                                                                onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                                                        </form>
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
        </section>
    </div>
@endsection
