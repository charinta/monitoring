@extends('layouts.user_type.auth')

@section('content')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">

        {{-- FORM INSERT USER ACCOUNT --}}
        <div class="container-fluid py-4">
            <div class="row">
                {{-- form header --}}
                <div class="col-12 col-xl-3 pr-15">
                    <div class="card h-100 w-100 mt-n4 bg-gradient-dark">
                        <div class="card-header pb-0 p-3 bg-gradient-dark">
                            <h4 class="mb-0 text-light"> <b>Resume</b></h4>
                            <hr class="text-light">
                        </div>
                        {{-- form body --}}
                        <div class="card-body">

                            <form id="insert-form" action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="copro" class="form-control-label text-light" name="copro">COPRO</label>
                                    <br>
                                    <select class="form-select" name="copro">
                                        <option value="">1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="item" class="form-control-label text-light" name="item">Item</label>
                                    <br>
                                    <select class="form-select" name="item">
                                        <option value="">1</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Insert
                                        Issue</button>
                                </div>

                                <br>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- FORM USER ACCOUNT END --}}


                {{-- Table --}}
                <div class="col-12 col-xl-9">
                    <div class="card mb-4 mt-n4">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">SAP Data Table</h6>
                                <form class="form-inline" method="get" action="#">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                                    <input class="form-control" placeholder="Search" type="text"
                                                        name="search" value="#">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    {{-- table header --}}
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                COPRO</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                PR No</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Req Item</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Item</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                PR 1 Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 1 PIC</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR Aging 1</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 2 Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 2 PIC</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR Aging 2</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 3 Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 3 PIC</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR Aging 3</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 4 Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 4 PIC</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR Aging 4</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 5 Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR 5 PIC</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR Aging 5</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR Status</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PO No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                Doc Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PR Deliver</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PO 1 Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PO 1 PIC</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PO Aging 1</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PO 2 Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PO 2 PIC</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PO Aging 2</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                                style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                PO Status</th>
                                        </tr>
                                    </thead>
                                    {{-- table body --}}
                                    <tbody>
                                        <tr>
                                            <td class="text-xs font-weight-bold mb-0 text-center">#
                                            </td>

                                            <td class="text-center">
                                                {{-- <form onsubmit="return confirm ('Apakah Anda Yakin?');"
                                                        action="{{ route('user-account.destroy', $users->id) }}"
                                                        method="POST">
                                                        {{-- icon edit --}}
                                                {{-- <a href="{{ route('user-account.edit', $users->id) }}"
                                                            class="edit_user btn btn-sm btn-primary fa fa-edit"></a>
                                                        <a href="javascript:void(0)" id="btn-edit-user"
                                                            data-id="{{ $users->id }}"
                                                            class="btn btn-edit-user btn-primary btn-sm fa fa-edit"></a>
                                                        {{-- icon delete
                                                        @csrf
                                                        @method('DELETE') 
                                                        <button type="submit"
                                                            class="delete_user btn btn-sm btn-outline-danger fa fa-trash"></button>
                                                    </form> --}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination Section -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:;" tabindex="-1">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                            <li class="page-item "><a class="page-link" href="javascript:;">2</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:;">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
