@extends('Admin.layouts.app')

@section('wrapper')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Users Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('admin.user.add') }}" class="btn btn-primary">Add New User</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-11 mx-auto">
            <h6 class="mb-0 text-uppercase">Users</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->getRoleNames() != '[]' ? $user->getRoleNames()[0] : '' }}</td>
                                    <td class="text-center">
                                        <a type="button" class="btn btn-secondary p-2 rounded-circle"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleVerticallycenteredModal{{ $user->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height: 24px;width: 24px">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.user.edit', [$user]) }}" class="btn btn-success p-2 rounded-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height: 24px;width: 24px">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.user.delete', [$user]) }}" class="btn btn-danger p-2 rounded-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height: 24px;width: 24px">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>

                                        </a>
                                        <a href="" class="btn btn-primary p-2 rounded-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height: 24px;width: 24px">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @foreach ($users as $user)
        <div class="modal fade" id="exampleVerticallycenteredModal{{ $user->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $user->full_name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="pt-1 pb-3 border-bottom d-flex justify-content-between align-items-center">
                            <div>Name:</div>
                            <div>{{ $user->full_name }}</div>
                        </div>
                        <div class="pt-3 pb-3 border-bottom d-flex justify-content-between align-items-center">
                            <div>Email:</div>
                            <div>{{ $user->email }}</div>
                        </div>
                        <div class="pt-3 pb-3 border-bottom d-flex justify-content-between align-items-center">
                            <div>Role:</div>
                            <div>{{ $user->getRoleNames() != '[]' ? $user->getRoleNames()[0] : ''  }}</div>
                        </div>
                        <div class="pt-3 pb-3 border-bottom d-flex justify-content-between align-items-center">
                            <div>Registered IP Adress:</div>
                            <div>{{ $user->ip }}</div>
                        </div>
                        <div class="pt-3 pb-3 border-bottom d-flex justify-content-between align-items-center">
                            <div>Joined Date:</div>
                            <div>{{ $user->created_at }}</div>
                        </div>
                        <div class="pt-3 pb-3 border-bottom d-flex justify-content-between align-items-center">
                            <div>Updated Date:</div>
                            <div>{{ $user->updated_at }}</div>
                        </div>
                        <div class="pt-3 pb-1 d-flex justify-content-between align-items-center">
                            <div>NOTE:</div>
                            <div>NOTHİNG CİHAN WİLL UPDATE THİS AREA DONT TOUCH</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
