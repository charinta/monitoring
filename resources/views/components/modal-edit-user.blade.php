<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="modal fade" id="modal-edit-user" tabindex="-1" aria-labelledby="modalUser" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-edit-user" id="modalUser">EDIT USER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="id" type="text" name="id" hidden>
                <div class="form-group">
                    <label class="control-label" for="name">Nama</label>
                    <input class="form-control" id="nama-edit" type="text">
                    <div class="alert alert-danger mt-2 d-none" id="alert-nama-edit" role="alert"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="name">NPK</label>
                    <input class="form-control" id="npk-edit" type="text">
                    <div class="alert alert-danger mt-2 d-none" id="alert-npk-edit" role="alert"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="name">Department</label>
                    <select class="form-select" name="pos" id="department-edit">
                        <option value="">1</option>
                    </select>
                    <div class="alert alert-danger mt-2 d-none" id="alert-department-edit" role="alert"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="name">Role</label>
                    <select class="form-select" name="role" id="role-edit">
                        <option value="admin">Admin
                        </option>
                        <option value="User">User
                        </option>
                    </select>
                    <div class="alert alert-danger mt-2 d-none" id="alert-role-edit" role="alert"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="name">Password</label>
                    <input class="form-control" id="password-edit" type="password">
                    <div class="alert alert-danger mt-2 d-none" id="alert-password-edit" role="alert"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="button" class="btn bg-gradient-warning update" id="update">UPDATE</button>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        $('body').on('click', '#btn-edit-user', function() {
            $.ajax({
                url: `/user-account/${id}`,
                type: "GET",
                dataType: "json",
                cache: false,
                success: function(response) {
                    //open modal
                    $('#modal-edit-user').modal('show');
                }
            });
        });
    });
</script>
