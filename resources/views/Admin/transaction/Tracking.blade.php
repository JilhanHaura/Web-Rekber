<!-- Modal -->
<div class="modal fade" id="ModalTransaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle">Tracking Information</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-body">
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
            </div>
            <div class="modal-footer">
                <a href="/history_transaction" class="btn btn-primary mx-1">Back</a>
            </div>
        </div>
    </div>
</div>




{{-- @extends('layout.main')
@section('content')
    @foreach ($detail_transaction as $detail_transactions)
        <div class="main-content">
            <section class="section">
                <div class="tracking-container">
                    <h2>Tracking Information</h2>
                    <div class="tracking-info">
                        <p>Tracking Number: <span
                                class="tracking-status">{{ $detail_transactions['tracking_number'] }}</span></p>
                        <p>Order ID: <span class="tracking-status">{{ $detail_transactions['orderId'] }}</span></p>
                        <p>Status: <span class="tracking-status">{{ $detail_transactions['status'] }}</span></p>
                        <p>Estimated: {{ $detail_transactions['estimated'] }}</p>
                    </div>
                    <h2>Tracking Details</h2>
                    <ul>
                        <li>{{ $detail_transactions['tracking_detail1'] }}</li>
                        <li>{{ $detail_transactions['tracking_detail2'] }}</li>
                        <li>{{ $detail_transactions['tracking_detail3'] }}</li>
                    </ul>
                </div>
            </section>
        </div>
    @endforeach
@endsection --}}
