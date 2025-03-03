@extends('layouts.app')
@section('title', 'Update Password')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
       <li class="breadcrumb-item">
          <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
       </li>
       <li class="breadcrumb-item text-dark mt-1">Settings</li>
    </ol>
    <h6 class="mt-0">Settings</h6>
 </nav>
@endsection
@section('main')
<div class="container-fluid py-4">
    <div style="background-color: white; padding: 16px; border-radius: 8px;" class="d-inline-flex flex-column flex-md-row gap-2">
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: white; color: #67748e; box-shadow: none;" onclick="window.location.href = '{{ route('settings') }}'">
          Update Profile
       </button>
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: #2e5492; color: white;" onclick="window.location.href = '{{ route('settings.update-password') }}'">
          Update Password
       </button>
       <button class="btn btn-sm mb-0 text-capitalize w-100 w-md-auto" style="background-color: white; color: #67748e; box-shadow: none;" onclick="window.location.href = '{{ route('settings.staff-member') }}'">
          Staff Members
       </button>
    </div>
 
    <div class="card mt-4">
       <div class="card-body pt-0">
          <div class="mt-3" style="border: 1px solid #afafaf; border-radius: 16px; padding: 24px;">
             <h6 class="mb-3">Update Password</h6>
 
             <div class="container-fluid px-0">
                <div class="row">
                   <div class="col-12">
                      <label>Current Password</label>
                      <input type="password" class="form-control" placeholder="Current Password" />
                   </div>
                   <div class="col-12 mt-2">
                      <label>New Password</label>
                      <input type="password" class="form-control" placeholder="New Password" />
                   </div>
                   <div class="col-12 mt-2">
                      <label>Confirm New Password</label>
                      <input type="password" class="form-control" placeholder="Confirm New Password" />
                   </div>
                </div>
             </div>
          </div>
 
          <h6 class="mb-0 mt-5">Password requirements</h6>
          <p>Please follow this guide for a strong password:</p>
          <p class="mb-0 text-sm">One special characters</p>
          <p class="mb-0 text-sm">Min 6 characters</p>
          <p class="mb-0 text-sm">One number (2 are recommended)</p>
          <p class="mb-0 text-sm">Change it often</p>
 
          <div class="d-flex justify-content-end mt-3">
             <button class="btn" style="background-color: #004d73; color: white;">
                Update
             </button>
          </div>
       </div>
    </div>
 </div> 
@endsection
@push('custom-js')
<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
       searchable: false,
       fixedHeight: true,
    });
 </script>
 <script>
    const openButton = document.getElementById("custom-sidenav-toggler");
    const body = document.body;
 
    openButton.addEventListener("click", () => {
       body.classList.add("g-sidenav-pinned");
    });
 </script>
 <script>
    const closeButton = document.getElementById("closeSidebar");
    const bodyContainer = document.body;
 
    closeButton.addEventListener("click", () => {
       bodyContainer.classList.remove("g-sidenav-pinned");
    });
 </script>
 <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
       var options = {
          damping: "0.5",
       };
       Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
 </script>
 
@endpush