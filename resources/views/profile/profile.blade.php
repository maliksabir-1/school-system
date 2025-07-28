@extends('layouts.master')
@section('content')
<div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Forms</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route('profile', $profile->id) }}">Forms</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route('profile', $profile->id) }}">Basic Form</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                 <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">My Profile</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label for="email2">Email Address</label>
                          <input type="email" class="form-control" name="email" value="{{ $profile->email }}" id="email2" placeholder="Enter Email"/>
                          <small id="emailHelp2" class="form-text text-muted"
                            >We'll never share your email with anyone
                            else.</small
                          >
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                            value="{{ $profile->password }}"
                            name="password"
                          />
                        </div>
                        
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"
                              >@</span
                            >
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Username"
                              aria-label="Username"
                              aria-describedby="basic-addon1"
                              value="{{ $profile->name }}"
                              name="name"
                            />
                          </div>
                        </div>
                    </div>
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"
                              >File</span
                            >
                            <input
                              type="file"
                              class="form-control"
                              placeholder="Username"
                              aria-label="file"
                              aria-describedby="basic-addon1"
                              value="{{ $profile->file }}"
                              name="file"
                            />
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection