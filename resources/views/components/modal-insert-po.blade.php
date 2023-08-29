<!-- Modal -->
<div class="modal fade" id="modal-insert-po" tabindex="-1" aria-labelledby="modalPO" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-insert-po" id="modalPO">TAMBAH POST</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name" class="control-label">Upload File</label>
                    <input type="file" class="form-control" id="upload">
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

        //define variable
        let upload = $('#title').val();
        let content = $('#content').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //ajax
        $.ajax({

            url: `/posts`,
            type: "POST",
            cache: false,
            data: {
                "title": title,
                "content": content,
                "_token": token
            },
            success: function(response) {

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let post = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.title}</td>
                        <td>${response.data.content}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                `;

                //append to table
                $('#table-posts').prepend(post);

                //clear form
                $('#title').val('');
                $('#content').val('');

                //close modal
                $('#modal-insert-po').modal('hide');


            },
            error: function(error) {

                if (error.responseJSON.title[0]) {

                    //show alert
                    $('#alert-title').removeClass('d-none');
                    $('#alert-title').addClass('d-block');

                    //add message to alert
                    $('#alert-title').html(error.responseJSON.title[0]);
                }

                if (error.responseJSON.content[0]) {

                    //show alert
                    $('#alert-content').removeClass('d-none');
                    $('#alert-content').addClass('d-block');

                    //add message to alert
                    $('#alert-content').html(error.responseJSON.content[0]);
                }

            }

        });

    });
    $('[data-dismiss="modal"]').click(function() {
        // Hide the modal with ID "modal-insert-po"
        $('#modal-insert-po').modal('hide');
    });
</script>
