@extends('layouts.user_type.guest')
@section('content')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid py-4">
            <div class="row">

                {{-- table --}}
                <div class="col-12">
                    <div class="card mb-4 mt-n4">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Issue Table</h6>
                                <form class="form-inline" method="get" action="#">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                                    <input class="form-control" placeholder="Search" type="text"
                                                        name="search" value="{{ request('search') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0 table-striped">

                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                ID</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Copro</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Problem Issue</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Due Date</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                PIC Project</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                PIC Purchase</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Vendor</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Act. Problem</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm ('Apakah Anda Yakin?');" action="#"
                                                    method="POST">
                                                    {{-- icon edit --}}
                                                    {{-- <a href="{{ route('user-account.edit', $users->id) }}"
                                                            class="edit_user btn btn-sm btn-primary fa fa-edit"></a> --}}
                                                    <a class="btn btn-edit-user btn-primary btn-sm fa fa-edit"></a>
                                                    {{-- icon delete --}}
                                                    @csrf <button type="submit"
                                                        class="delete_user btn btn-sm btn-outline-danger fa fa-trash"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
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
