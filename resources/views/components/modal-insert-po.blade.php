<!-- Modal -->
<div class="modal fade" id="modal-insert-po" tabindex="-1" aria-labelledby="modalPO" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle" id="modalPO">TAMBAH POST</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name" class="control-label">Upload File</label>
                    <input type="file" class="form-control" id="upload"
                        accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-upload"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="store">SIMPAN</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    //button create post event
    $('body').on('click', '#btn-create-po', function() {
        console.log('upload button clicked');
        //open modal
        $('#modal-insert-po').modal('show');
    });

    //action create post
    $('#store').click(function(e) {
        e.preventDefault();
        var fileInput = $('#upload')[0];
        var file = fileInput.files[0];

        if (file) {
            var formData = new FormData();
            formData.append('file', file);

            $.ajax({
                url: '/insert-po',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#response').text('File uploaded successfully.');
                },
                error: function() {
                    $('#alert-upload').removeClass('alert-success').addClass('alert-danger').text(
                        'Error uploading file.').removeClass('d-none');
                }
            });
        }
    });

    $('[data-dismiss="modal"]').click(function() {
        // Hide the modal with ID "modal-insert-po"
        $('#modal-insert-po').modal('hide');
    });
</script>
