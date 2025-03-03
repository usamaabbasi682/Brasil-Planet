@extends('layouts.app')
@section('title','Payments')
@section('breadcrumb')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
      <li class="breadcrumb-item">
         <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
      </li>
      <li class="breadcrumb-item text-dark mt-1">Payments</li>
   </ol>
   <h6 class="mt-0">Payments</h6>
</nav>
@endsection
@section('main')
<div class="container-fluid py-4">
    <div class="row mt-3">
       <div class="col-12">
          <div class="card">
             <div class="card-header">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                   <h5 class="mb-0">Payments</h5>
 
                   <div class="d-flex flex-column flex-md-row gap-2 w-100 w-md-auto">
                      <div class="d-flex flex-column flex-md-row gap-2 flex-grow-1">
                         <div class="form-group mb-0 w-100 w-md-auto">
                            <select class="form-select" style="min-width: 150px;">
                               <option>Select Suppliers</option>
                               <option>Suppliers 1</option>
                               <option>Suppliers 2</option>
                            </select>
                         </div>
                         <div class="form-group mb-0 w-100 w-md-auto">
                            <select class="form-select" style="min-width: 150px;">
                               <option>Select Date</option>
                               <option>Date 1</option>
                               <option>Date 2</option>
                            </select>
                         </div>
                         <div class="form-group mb-0 w-100 w-md-auto">
                            <select class="form-select" style="min-width: 150px;">
                               <option>Select Client</option>
                               <option>Client 1</option>
                               <option>Client 2</option>
                            </select>
                         </div>
                         <div class="form-group mb-0 w-100 w-md-auto">
                            <select class="form-select" style="min-width: 150px;">
                               <option>Select Hotel</option>
                               <option>Hotel 1</option>
                               <option>Hotel 2</option>
                            </select>
                         </div>
                         <div class="form-group mb-0 w-100 w-md-auto">
                            <select class="form-select" style="min-width: 150px;">
                               <option>Select Status</option>
                               <option>Paid</option>
                               <option>Unpaid</option>
                            </select>
                         </div>
                      </div>
 
                      <div class="d-flex flex-column flex-md-row gap-2">
                         <div class="input-group w-100 w-md-auto">
                            <span class="input-group-text">
                               <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Search" />
                         </div>
                         <button type="button" class="btn mb-0 w-100 w-md-auto text-nowrap" style="background-color: #2e5492; color: white;">
                            RANDOM PAYMENTS
                         </button>
                      </div>
                   </div>
                </div>
             </div>
             <div class="card-body pt-0">
                <div class="table-responsive">
                   <table class="table table-flush" id="datatable-basic">
                      <thead class="thead-light">
                         <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                               ID
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                               CLIENT NAME
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                               HOTEL/SUPPLIER NAME
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                               PAYMENT DEADLINE
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                               BANK ACCOUNT
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                               REMARKS
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                               PAYMENT
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                               ACTION
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td class="text-sm font-weight-normal">01</td>
                            <td class="text-sm font-weight-normal">
                               <div style="display: flex; align-items: center; position: relative;">
                                  <img src="{{ asset('assets/images/team-2.jpg') }}" class="avatar avatar-md rounded" style="width: 32px; height: 32px; margin-left: -10px; position: relative; z-index: 2;" alt="Profile" />
                                  <span style="font-weight: bold;" class="ms-2">Ryan Holland</span>
                               </div>
                            </td>
                            <td class="text-sm font-weight-normal">Ryan Holland</td>
                            <td class="text-sm font-weight-normal">10/12/2024</td>
                            <td class="text-sm font-weight-normal">EDUARDO FALCÃO DE ARRUDA, 00097834000167</td>
                            <td class="text-sm font-weight-normal">Lorem ipsum...</td>
                            <td class="text-sm font-weight-normal">
                               <div class="custom-status custom-green-status">PAY</div>
                            </td>
                            <td class="text-sm font-weight-normal">
                               <div class="d-flex align-items-center gap-3">
                                  <img src="{{ asset('assets/images/view-icon.png') }}" alt="" class="cursor-pointer" />
                               </div>
                            </td>
                         </tr>
                         <tr>
                            <td class="text-sm font-weight-normal">01</td>
                            <td class="text-sm font-weight-normal">
                               <div style="display: flex; align-items: center; position: relative;">
                                  <img src="{{ asset('assets/images/team-2.jpg') }}" class="avatar avatar-md rounded" style="width: 32px; height: 32px; margin-left: -10px; position: relative; z-index: 2;" alt="Profile" />
                                  <span style="font-weight: bold;" class="ms-2">Ryan Holland</span>
                               </div>
                            </td>
                            <td class="text-sm font-weight-normal">Ryan Holland</td>
                            <td class="text-sm font-weight-normal">10/12/2024</td>
                            <td class="text-sm font-weight-normal">EDUARDO FALCÃO DE ARRUDA, 00097834000167</td>
                            <td class="text-sm font-weight-normal">Lorem ipsum...</td>
                            <td class="text-sm font-weight-normal">
                               <div class="custom-status custom-purple-status cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewHotelModal">PENDING</div>
                            </td>
                            <td class="text-sm font-weight-normal">
                               <div class="d-flex align-items-center gap-3">
                                  <img src="{{ asset('assets/images/view-icon.png') }}" alt="" class="cursor-pointer" />
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 <!-- TODO: MODALS  -->
 <div class="modal fade" id="viewHotelModal" tabindex="-1" aria-labelledby="addContentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
       <div class="modal-content">
          <div class="modal-header d-flex justify-content-between align-items-center">
             <h5 class="modal-title" id="addContentModalLabel">Confirm Payment</h5>
             <img src="{{ asset('assets/images/close-icon.png') }}" data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;" alt="" />
          </div>
          <div class="modal-body">
             <h6>Payment Details</h6>
             <div class="container-fluid px-0">
                <div class="row">
                   <div class="col-12 col-md-3">
                      <div class="d-flex gap-2">
                         <h6 class="mb-0">Total:</h6>
                         <p class="mb-0">$ 300</p>
                      </div>
                   </div>
                   <div class="col-12 col-md-3">
                      <div class="d-flex gap-2">
                         <h6 class="mb-0">Paid:</h6>
                         <p class="mb-0">$ 300</p>
                      </div>
                   </div>
                   <div class="col-12 col-md-3">
                      <div class="d-flex gap-2">
                         <h6 class="mb-0">Remaining:</h6>
                         <p class="mb-0">$ 300</p>
                      </div>
                   </div>
                   <div class="col-12 col-md-3">
                      <div class="d-flex gap-2">
                         <h6 class="mb-0">Upcoming:</h6>
                         <p class="mb-0">$ 300</p>
                      </div>
                   </div>
                </div>
 
                <div class="row">
                   <div class="d-flex flex-column flex-md-row gap-2 align-items-start mt-3">
                      <h6 class="mb-0 col-md-auto">Service Summary:</h6>
                      <p class="mb-0 col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
                </div>
 
                <h6>Bank Details</h6>
 
                <div class="row">
                   <div class="col-12 col-md-6">
                      <div class="d-flex gap-2 flex-wrap">
                         <h6 class="mb-0">Bank Name:</h6>
                         <p class="mb-0">EDUARDO FALCÃO DE ARRUDA</p>
                      </div>
                   </div>
                   <div class="col-12 col-md-6">
                      <div class="d-flex gap-2 flex-wrap">
                         <h6 class="mb-0Bank Name:">Account No:</h6>
                         <p class="mb-0">00097834000167</p>
                      </div>
                   </div>
                </div>
 
                <div class="row">
                   <div class="d-flex flex-column flex-md-row gap-2 align-items-start mt-3">
                      <h6 class="mb-0 col-md-auto">Remarks:</h6>
                      <p class="mb-0 col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
                </div>
 
                <div class="mt-4 d-flex justify-content-between align-items-center gap-2 flex-wrap">
                   <h6 class="mb-0">PAYMENT Details</h6>
                   <p class="mb-0" style="color: #2e5492;">Installments: 03</p>
                </div>
 
                <div class="row mt-3">
                   <div class="col-12 col-md-3">
                      10/12/2024
                   </div>
                   <div class="col-12 col-md-9">
                      <div class="custom-status custom-green-status">PAID</div>
                   </div>
                </div>
 
                <div class="row mt-2">
                   <div class="col-12 col-md-3">
                      10/12/2024
                   </div>
                   <div class="col-12 col-md-9">
                      <div class="custom-status custom-green-status">PAID</div>
                   </div>
                </div>
 
                <div class="row mt-2">
                   <div class="col-12 col-md-3">
                      10/12/2024
                   </div>
                   <div class="col-12 col-md-9">
                      <div class="custom-status custom-purple-status">PENDING</div>
                   </div>
                </div>
 
                <div class="row mt-3">
                   <div class="col-12">
                      <label class="form-label">Payment Amount <span style="color: #f94343;">*</span></label>
                      <input type="text" class="form-control" placeholder="Enter Payment Amount" />
                   </div>
                </div>
             </div>
          </div>
          <div class="modal-footer" style="border-top: 0;">
             <button type="button" class="btn" style="background-color: #2e5492; color: white;">
                CONFIRM PAYMENT
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