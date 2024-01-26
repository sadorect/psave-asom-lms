
<!--======================================
        END HEADER AREA
======================================-->
@extends('frontend.master')
@section('home')
<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">

    <div class="off-canvas-menu dashboard-off-canvas-menu off--canvas-menu custom-scrollbar-styled pt-20px">
        <div class="off-canvas-menu-close dashboard-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <div class="logo-box px-4">
            <a href="" class="logo"><img src="{{ asset('frontend/asset/images/logo.png') }}" alt="logo"></a>
        </div>
        <ul class="generic-list-item off-canvas-menu-list off--canvas-menu-list pt-35px">
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg> Dashboard</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg> My Profile</a></li>
            <li><a href="{{route('show.courses')}}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg> My Courses</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="18px" viewBox="0 0 24 24" width="18px"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,21h-1l1-7H7.5c-0.88,0-0.33-0.75-0.31-0.78C8.48,10.94,10.42,7.54,13.01,3h1l-1,7h3.51c0.4,0,0.62,0.19,0.4,0.66 C12.97,17.55,11,21,11,21z"/></g></svg> Quiz Attempts</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"/></svg> Bookmarks</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg> Enrolled Courses</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/></svg> Message <span class="badge badge-info p-1 ml-2">2</span></a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/></svg> Reviews</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg> Earnings</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z"/><circle cx="16" cy="12" r="1.5"/></svg> Withdraw</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg> Purchase History</a></li>
            <li><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg> Submit Course</a></li>
            <li class="page-active"><a href=""><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg> Settings</a></li>
            <li><a href="{{route('user.logout')}}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/></svg>  Logout</a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg> Delete Account</a></li>
        </ul>
    </div><!-- end off-canvas-menu -->
    
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
                <div class="media media-card align-items-center">
                    <div class="media-img media--img media-img-md rounded-full">
                        <img class="rounded-full" src="{{ asset('frontend/asset/images/small-avatar-1.jpg') }}" alt="Student thumbnail image">
                    </div>
                    <div class="media-body">
                        <h2 class="section__title fs-30">Howdy, {{ $profileData->name}}</h2>
                        <div class="rating-wrap d-flex align-items-center pt-2">
                            <div class="review-stars">
                                <span class="rating-number">4.4</span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star-o"></span>
                            </div>
                            <span class="rating-total pl-1">(20,230)</span>
                        </div><!-- end rating-wrap -->
                    </div><!-- end media-body -->
                </div><!-- end media -->
                <div class="file-upload-wrap file-upload-wrap-2 file--upload-wrap">
                    <input type="file" name="files[]" class="multi file-upload-input">
                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Upload a course</span>
                </div><!-- file-upload-wrap -->
            </div><!-- end breadcrumb-content -->
            <div class="section-block mb-5"></div>
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">Settings</h3>
            </div>
            <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="edit-profile" aria-selected="false">
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true">
                        Password
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="change-email-tab" data-toggle="tab" href="#change-email" role="tab" aria-controls="change-email" aria-selected="false">
                        Change Email
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab" aria-controls="withdraw" aria-selected="false">
                        Withdraw
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">
                        Account
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>
                        <div class="media media-card align-items-center">
                            <form method="post" class="row pt-40px" enctype="multipart/form-data" action="{{ route('update.user.profile')}}"> @csrf
                            <div class="media-img media-img-lg mr-4 bg-gray">
                                <img id="showImage" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="user" class=" showImage" >
                                <!--img class="mr-3" src="{{ asset('frontend/asset/images/team11.jpg')}}" alt="avatar image"-->
                            </div>
                            <div class="media-body">
                                <div class="file-upload-wrap file-upload-wrap-2">
                                    <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple>
                                    <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a Photo</span>
                                </div><!-- file-upload-wrap -->
                                <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                            </div>
                        </div><!-- end media -->
                        <div class="row">
                            <div class="input-box col-lg-6">
                                <label class="label-text">Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="name" value="{{$profileData->name}}">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                           
                            <div class="input-box col-lg-6">
                                <label class="label-text">User Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="username" value="{{$profileData->username}}">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" value="{{$profileData->email}}">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Phone Number</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="phone" value="{{$profileData->phone}}">
                                    <span class="la la-phone input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <!--div class="input-box col-lg-12">
                                <label class="label-text">Bio</label>
                                <div class="form-group">
                                    <textarea class="form-control form--control user-text-editor pl-3" name="message">Hello! I am Alex Smith Washington area graphic designer with over 6 years of graphic design experience. I specialize in designing infographics, icons, brochures, and flyers</textarea>
                                </div>
                            </div--><!-- end input-box -->
                            <div class="input-box col-lg-12 py-2 mb-4">
                                <button class="btn theme-btn">Save Changes</button>
                            </div><!-- end input-box -->
                        </div>
                        </form>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->

                
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>

                        <form method="post" action="{{ route('update.user.password')}}" class="row">@csrf

                            <div class="input-box col-lg-4">
                                <label class="label-text">Old Password</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="password" name="old_password" id="old_password" placeholder="Old Password">
                                    <span class="la la-lock input-icon"></span>
                                </div>
                                @error('old_password')
                                    <span class="text-danger"> {{ $message }}</span>
                                 @enderror
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">New Password</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="password" name="new_password" id="new_password" placeholder="New Password">
                                    <span class="la la-lock input-icon"></span>
                                </div>
                                @error('new_password')
                                     <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Confirm New Password</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="password" name="new_password_confirmation" id="new_password_confirmation"  placeholder="Confirm New Password">
                                    <span class="la la-lock input-icon"></span>
                                </div>
                                @error('new_password_confirmation')
                                     <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-12 py-2">
                                <button class="btn theme-btn">Change Password</button>
                            </div><!-- end input-box -->
                        </form>
                        <form method="post" class="pt-5 mt-5 border-top border-top-gray">
                            <h3 class="fs-17 font-weight-semi-bold pb-1">Forgot Password then Recover Password</h3>
                            <p class="pb-4">Enter the email of your account to reset password. Then you will receive a link to email
                                to reset the password. If you have any issue about reset password
                                <a href="contact.html" class="text-color">contact us</a></p>
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" placeholder="Enter email address">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box py-2">
                                <button class="btn theme-btn">Recover Password</button>
                            </div><!-- end input-box -->
                        </form>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">Change Email</h3>
                        <form method="post" class="row">
                            <div class="input-box col-lg-4">
                                <label class="label-text">Old Email</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="Old Email">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">New Email</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="New Email">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Confirm New Email</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="Confirm New Email">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-12 py-2">
                                <button class="btn theme-btn">Change Email</button>
                            </div><!-- end input-box -->
                        </form>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">Select a Withdraw Method</h3>
                        <form method="post" class="row mb-40px">
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="bankTransfer" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="bankTransfer">
                                        <span class="font-weight-semi-bold text-black d-block">Bank Transfer</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="eCheck" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="eCheck">
                                        <span class="font-weight-semi-bold text-black d-block">E-Check</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="payoneer" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="payoneer">
                                        <span class="font-weight-semi-bold text-black d-block">Payoneer</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="PayPal" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="PayPal">
                                        <span class="font-weight-semi-bold text-black d-block">PayPal</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="skrill" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="skrill">
                                        <span class="font-weight-semi-bold text-black d-block">Skrill</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="stripe" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="stripe">
                                        <span class="font-weight-semi-bold text-black d-block">Stripe</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                        </form>
                        <form method="post" class="row">
                            <h3 class="fs-17 font-weight-semi-bold pb-4 col-lg-12">Account info</h3>
                            <div class="input-box col-lg-4">
                                <label class="label-text">Account Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="Alex Smith">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Account Number</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="3275476222500">
                                    <span class="la la-pencil input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Bank Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="South State Bank">
                                    <span class="la la-bank input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">IBAN</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="3030">
                                    <span class="la la-pencil input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">BIC/SWIFT</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="CDDHDBBL">
                                    <span class="la la-pencil input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-12 py-2">
                                <button class="btn theme-btn">Save withdraw account</button>
                            </div><!-- end input-box -->
                        </form>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">My Account</h3>
                        <form method="post" class="mb-40px">
                            <div class="custom-control-wrap d-flex flex-wrap align-items-center">
                                <div class="custom-control custom-radio pl-0 flex-shrink-0 mr-3 mb-2">
                                    <input type="radio" class="custom-control-input" id="deactivateAccount" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="deactivateAccount">
                                        <span class="font-weight-semi-bold text-black">Deactivate Account</span>
                                    </label>
                                </div>
                                <button class="btn theme-btn mb-2">Deactivate</button>
                            </div><!-- end custom-control-wrap -->
                        </form>
                        <div class="section-block"></div>
                        <div class="danger-zone pt-40px">
                            <h4 class="fs-17 font-weight-semi-bold text-danger">Delete Account Permanently</h4>
                            <p class="pt-1 pb-4"><span class="text-warning">Warning: </span>Once you delete your account, there is no going back. Please be certain.</p>
                            <button class="btn theme-btn" data-toggle="modal" data-target="#deleteModal">Delete my account</button>
                        </div>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
            
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('.showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });

</script>
@endsection