    <div class="modal fade" id="ModalSetting" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <form method="POST" action="{{ route('setting.store') }}">
                                    @csrf
                                    <div class="card-header">
                                        <h4>Add Data Setting</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <input type="text" class="form-control" name="month">
                                            @error('month')
                                                <p class="text text-danger">
                                                    {{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <input type="number" class="form-control" name="year">
                                            @error('year')
                                                <p class="text text-danger">
                                                    {{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Persentase</label>
                                            <input type="text" class="form-control" name="percentage">
                                            @error('percentage')
                                                <p class="text text-danger">
                                                    {{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-0">
                                            <label>Status</label>
                                            <input type="text" class="form-control" name="status"></input>
                                            @error('status')
                                                <p class="text text-danger">
                                                    {{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
