<!-- Modal -->
<div class="modal fade" id="ModalRefund" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Refund Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6> Apakah kamu yakin untuk menerima pengembalian dana? </h6>
                <h7><b>Jumlah Pengembalian Dana: </b></h7>
                <p>Rp. {{ $DetailRefund['total'] }}</p>

                <input type="radio" id="yes" name="fav_language" value="yes">
                <label for="yes">Ya! Terima pengembalian dana </label> <br>
                <input type="radio" id="no" name="fav_language" value="no">
                <label for="no">Tidak! Pengembalian dana tidak bisa dilanjutkan</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <a href="/refund" class="btn btn-primary mx-1">Accept Refund</a>
            </div>
        </div>
    </div>
</div>
