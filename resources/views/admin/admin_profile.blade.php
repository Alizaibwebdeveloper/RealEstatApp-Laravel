@extends('admin.admin_dashboard')

@section('admin')


<div class="page-content">

@include('_message')
    
    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="card-title mb-0">About</h6>
              
            </div>

            
            <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>

            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                <p class="text-muted">Ali zaib</p>
              </div>
              
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
              <p class="text-muted">November 15, 2015</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
              <p class="text-muted">New York, USA</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">me@nobleui.com</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
              <p class="text-muted">www.nobleui.com</p>
            </div>
            
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-9 middle-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
    
                                    <h6 class="card-title">Profile Update</h6>
    
                                    <form class="forms-sample" action="{{url('admin_profile/update')}}" method="POST" enctype="multipart/form-data">
                                      @csrf

                                        <div class="mb-3">
                                            <label  class="form-label">Name</label>
                                            <input type="text" name="name" value="{{$getRecord->name}}" class="form-control" placeholder="Name">
                                        </div>

                                        <div class="mb-3">
                                            <label  class="form-label">Username</label>
                                            <input type="text" name="username" value="{{$getRecord->username}}" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email"name="email" value="{{$getRecord->email}}" class="form-control" placeholder="Email">
                                            @if ($errors->has('email'))
        <span style="color: red;">{{ $errors->first('email') }}</span>
    @endif
                                        </div>

                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Phone</label>
                                          <input type="text"name="phone" value="{{$getRecord->phone}}" class="form-control" placeholder="phone">
                                      </div>
                                        <div class="mb-3">
                                            <label  class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" value="{{$getRecord->password}}" placeholder="Password">
                                            (Leave Blank If you are not changing the password)
                                        </div>

                                        <div class="mb-3">
                                            <label  class="form-label">Profile Image</label>
                                            <input type="file" class="form-control" name="photo" >

                                            @if (!empty($getRecord->photo))
                                                
                                            <img src="{{ $getRecord->photo }}" alt="Uploaded Photo" style="max-width: 10%; height: 10%;">

                                            @endif


                                        </div>

                                        
                                        <div class="mb-3">
                                            <label  class="form-label">Address</label>
                                            <input type="text" name="address" value="{{$getRecord->address}}" class="form-control" placeholder="Address">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label  class="form-label">About</label>
                                            <textarea class="form-control" name="about" value="{{$getRecord->about}}" placeholder="About">
                                            </textarea>
                                        </div>


                                        <div class="mb-3">
                                            <label  class="form-label">Website</label>
                                            <input type="text" name="website" value="{{$getRecord->website}}" class="form-control" placeholder="Website">
                                        </div>

                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-secondary">Cancel</button>
                                    </form>
    
                  </div>
                </div>
                        </div>
      <!-- right wrapper end -->
    </div>

        </div>
    
@endsection