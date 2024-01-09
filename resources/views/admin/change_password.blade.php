@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">User Profile</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">UChange Password</li>
        </ol>
      </nav>
    </div>
   
  </div>
  <!--end breadcrumb-->
  <div class="container">
    <div class="main-body">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="100" height="100">
                <div class="mt-3">
                  <h4>{{$profileData->name}}</h4>
                  <p class="text-secondary mb-1">{{$profileData->username }}</p>
                  <p class="text-muted font-size-sm">{{$profileData->email}}</p>
                  <button class="btn btn-primary">Follow</button>
                  <button class="btn btn-outline-primary">Message</button>
                </div>
              </div>
      
              
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card">

            <form action="{{ route('admin.update.password')}}" method="post">
              @csrf
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Old Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="password" id="old_password" name="old_password" class="form-control" />
                  @error('old_password')
                      <span class="text-danger"> {{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">New Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="password" name="new_password"  id="new_password" class="form-control"  />
                  @error('new_password')
                  <span class="text-danger"> {{ $message }}</span>
              @enderror
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Confirm New Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control"  />
                
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                  <input type="submit" class="btn btn-primary px-4" value="Change Password" />
                </div>
              </div>
            </div>
          </form>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</div>



@endsection