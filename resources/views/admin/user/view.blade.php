@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users View</li>

        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title">View Users</h6>

                    <form class="forms-sample">

                        <div class="row mb-3">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Id</label>
                            <div class="col-sm-9">
                                {{$getRecord->id}}
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    {{$getRecord->name}}
                                </div>
    

                        <div class="row mb-3">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                {{$getRecord->username}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                {{$getRecord->email}}
                            </div>


                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">photo</label>
                            <div class="col-sm-9">
                                @if (!empty($getRecord->photo))
                                <img src="{{ $getRecord->photo }}" alt="Uploaded Photo" style="max-width: 20%; height: 50%;">

                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                {{$getRecord->phone}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9">
                                {{$getRecord->website}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                {{$getRecord->address}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">About</label>
                            <div class="col-sm-9">
                                {{$getRecord->about}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                {{$getRecord->role}}
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                {{$getRecord->status}}
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Created At</label>
                            <div class="col-sm-9">
                                {{$getRecord->created_at}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Updated At</label>
                            <div class="col-sm-9">
                                {{$getRecord->updated_at}}
                            </div>
                        </div>
                        
                        <a href="{{url('admin/users')}}" class="btn btn-secondary col-auto">Back</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection