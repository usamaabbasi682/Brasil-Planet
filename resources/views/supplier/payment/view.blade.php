@extends('layouts.app')
@section('title','Payment View')
@section('breadcrumb')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
      <li class="breadcrumb-item">
         <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
      </li>
      <li class="breadcrumb-item text-dark mt-1">Payment</li>
   </ol>
   <h6 class="mt-0">Payment</h6>
</nav>
@endsection
@section('main')
<div class="container-fluid py-4">
    <div class="card p-3">
       <img src="{{ asset('assets/images/welcome-bg.png') }}" alt="" />
       <div class="d-flex justify-content-center" style="margin-top: -60px;">
          <div class="card" style="width: 95%; border: 1px solid #e7e7e7;">
             <div class="card-header">
                <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap">
                   <div class="d-flex gap-2">
                      <img src="{{ asset('assets/images/team-2.jpg') }}" alt="" style="width: 80x; height: 80px; border-radius: 8px;" />
                      <div>
                        <h4 class="d-flex gap-2 flex-wrap align-items-center mb-0">
                          Walter Valdez
                        </h4>
                        <p class="mb-0" style="color: #eec447">Customer</p>
                        <p class="mb-0" style="color: #F5222D">$120</p>
                      </div>
                   </div>
                   <div class="d-flex gap-2 align-items-start">
                      <button class="btn" style="background-color: #2e924c; color: white;">
                        CONFIRMED
                      </button>
                      <button class="btn" style="background-color: #2e5492; color: white;">
                         NOT CONFIRM
                      </button>
                   </div>
                </div>
                <div class="card-body px-0">
                   <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                      <h6 class="mb-0">John Doe</h6>
                      <p class="mb-0" style="color: #2e5492;">Passenger 1</p>
                   </div>
                   <div style="width: 100%; height: 1px; background-color: rgba(151, 151, 151, 0.4); margin: 16px 0;"></div>
                   <div class="container-fluid px-0">
                      <div class="row">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Email:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">walter@gmail.com</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Contact no:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">123 456 7890</p>
                         </div>
                      </div>
                      <div class="row mt-2">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">DOB:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">10/12/1999</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Passport no:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">123 456 7890</p>
                         </div>
                      </div>

                      <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-4">
                         <h6 class="mb-0">Ryan Holland</h6>
                         <p class="mb-0" style="color: #2e5492;">Passenger 2</p>
                      </div>
                      <div style="width: 100%; height: 1px; background-color: rgba(151, 151, 151, 0.4); margin: 16px 0;"></div>
                      <div class="row">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Email:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">walter@gmail.com</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Contact no:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">123 456 7890</p>
                         </div>
                      </div>
                      <div class="row mt-2">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">DOB:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">10/12/1999</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Passport no:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">123 456 7890</p>
                         </div>
                      </div>

                      <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-4">
                         <h6 class="mb-0">Client Information</h6>
                         <div class="d-flex gap-2 align-items-start">
                            <img src="{{ asset('assets/images/location-yellow.png') }}" alt="" />
                            <p class="mb-0">123 Main Street, Australia,78903</p>
                         </div>
                      </div>
                      <div style="width: 100%; height: 1px; background-color: rgba(151, 151, 151, 0.4); margin: 16px 0;"></div>
                      <div class="row">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Number of Clients:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">02com</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Client 1:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">John Doe</p>
                         </div>
                      </div>
                      <div class="row mt-2">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Passport Details:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">123FA-90</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">DOB:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">20/12/1999</p>
                         </div>
                      </div>
                      <div class="row mt-2">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Client 2:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">Ryan Holland</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Passport Details:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">123FA-90</p>
                         </div>
                      </div>
                      <div class="row mt-2">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">DOB:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">20/12/1999</p>
                         </div>
                      </div>

                      <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-4">
                         <h6 class="mb-0">Booking Information</h6>
                      </div>
                      <div style="width: 100%; height: 1px; background-color: rgba(151, 151, 151, 0.4); margin: 16px 0;"></div>
                      <div class="row">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Booking Creator:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">Brooklyn Alice</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Responsible Collaborator:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">John Doe</p>
                         </div>
                      </div>

                      <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-4">
                         <h6 class="mb-0">Services Details</h6>
                      </div>
                      <div style="width: 100%; height: 1px; background-color: rgba(151, 151, 151, 0.4); margin: 16px 0;"></div>
                      <div class="row">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Services:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0 d-inline-block p-2" style="border: 1px solid #d2d6da; border-radius: 8px;">
                               Service 1
                            </p>
                            <p class="mb-0 d-inline-block p-2" style="border: 1px solid #d2d6da; border-radius: 8px;">
                               Service 2
                            </p>
                            <p class="mb-0 d-inline-block p-2" style="border: 1px solid #d2d6da; border-radius: 8px;">
                               Service 3
                            </p>
                         </div>
                      </div>

                      <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-4">
                         <h6 class="mb-0">Service 1</h6>
                         <p class="mb-0" style="color: #2e5492;">
                            10/12/2024, 10:00 AM
                         </p>
                      </div>
                      <div style="width: 100%; height: 1px; background-color: rgba(151, 151, 151, 0.4); margin: 16px 0;"></div>
                      <div class="row">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                            </p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service Schedule:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">Today</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Cost:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">$40</p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Booking Notes:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service Provider Notes:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                         </div>
                      </div>

                      <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-4">
                         <h6 class="mb-0">Service 2</h6>
                         <p class="mb-0" style="color: #2e5492;">
                            10/12/2024, 10:00 AM
                         </p>
                      </div>
                      <div style="width: 100%; height: 1px; background-color: rgba(151, 151, 151, 0.4); margin: 16px 0;"></div>
                      <div class="row">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                            </p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service Schedule:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">Today</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Cost:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">$40</p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Booking Notes:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service Provider Notes:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                         </div>
                      </div>

                      <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-4">
                         <h6 class="mb-0">Service 3</h6>
                         <p class="mb-0" style="color: #2e5492;">
                            10/12/2024, 10:00 AM
                         </p>
                      </div>
                      <div style="width: 100%; height: 1px; background-color: rgba(151, 151, 151, 0.4); margin: 16px 0;"></div>
                      <div class="row">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                            </p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service Schedule:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">Today</p>
                         </div>
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Cost:</h6>
                         </div>
                         <div class="col-12 col-md-3">
                            <p class="mb-0">$40</p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Booking Notes:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                         </div>
                      </div>
                      <div class="row mt-3">
                         <div class="col-12 col-md-3">
                            <h6 class="mb-0">Service Provider Notes:</h6>
                         </div>
                         <div class="col-12 col-md-9">
                            <p class="mb-0">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection