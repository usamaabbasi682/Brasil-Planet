@extends('layouts.app')
@section('title', auth()->user()->hasRole($adminRole) ? 'Dashboard' : 'Service')
@section('breadcrumb')
@hasrole($adminRole)
<nav aria-label="breadcrumb">
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
      <li class="breadcrumb-item">
         <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
      </li>
      <li class="breadcrumb-item text-dark mt-1">Dashboard</li>
   </ol>
   <h6 class="mt-0">Dashboard</h6>
</nav>
@endhasrole
@hasrole($supplierRole)
<nav aria-label="breadcrumb">
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
      <li class="breadcrumb-item">
         <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
      </li>
      <li class="breadcrumb-item text-dark mt-1">Service</li>
   </ol>
   <h6 class="mt-0">Service</h6>
</nav>
@endhasrole
@endsection 
@section('main')
@hasrole($adminRole)
<div class="container-fluid py-4">
   <div class="responsive-container mb-3" style="display: flex;flex-wrap: wrap;align-items: center;justify-content: space-between;background-image: url('{{ asset('assets/images/welcome-bg.png') }}');background-size: cover;background-position: center;background-repeat: no-repeat;border-radius: 20px;overflow: hidden;">
      <div style="flex: 1 1 50%;" class="custom-welcome-content">
         <h4 style="font-size: 1.8rem; margin-bottom: 1rem; color: white;">
            Welcome to BRASIL PLANET,
         </h4>
         <p style="font-size: 1rem; line-height: 1.6; margin-bottom: 0; color: white;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
         </p>
      </div>

      <img src="{{ asset('assets/images/welcome.png') }}" alt="Welcome Image" class="responsive-image" style="flex: 1 1 40%; max-width: 300px; height: auto; object-fit: contain; position: absolute; right: 0;" />
   </div>

   <div class="row g-4">
      <div class="col-lg-3 col-sm-6">
         <div class="card cursor-pointer" onclick="window.location.href = 'services-not-confirmed.html'">
            <div class="card-body p-3">
               <p class="text-sm mb-5 text-capitalize font-weight-bold" style="font-size: 18px;">
                  Services Not Confirmed
               </p>
               <div class="row">
                  <div class="col-8 d-flex align-items-end">
                     <div class="numbers">
                        <h5 class="font-weight-bolder mb-0" style="font-size: 30px;">
                           65
                           <span class="text-success text-sm font-weight-bolder">+55%</span>
                        </h5>
                     </div>
                  </div>
                  <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                     <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 64px; height: 64px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('assets/images/service-not-confirmed-icon.png') }}" alt="" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6">
         <div class="card cursor-pointer" onclick="window.location.href = 'hotels-not-confirmed.html'">
            <div class="card-body p-3">
               <p class="text-sm mb-5 text-capitalize font-weight-bold" style="font-size: 18px;">
                  Hotels Not Confirmed
               </p>
               <div class="row">
                  <div class="col-8 d-flex align-items-end">
                     <div class="numbers">
                        <h5 class="font-weight-bolder mb-0" style="font-size: 30px;">
                           10
                           <span class="text-success text-sm font-weight-bolder">+3%</span>
                        </h5>
                     </div>
                  </div>
                  <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                     <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 64px; height: 64px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('assets/images/hotels-not-confirmed.png') }}" alt="" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-6 col-sm-12">
         <div class="card">
            <div class="card-body p-3">
               <h6 style="font-size: 16px;">Currency Exchange</h6>
               <p class="mb-0" style="font-size: 14px;">Exchange rate for customer sale in</p>
               <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap mt-4">
                  <div class="d-flex align-items-center gap-2 mt-3">
                     <img src="{{ asset('assets/images/dollar-icon.png') }}" alt="" style="width: 37px;" />
                     <p class="mb-0" style="font-size: 16px;">
                        <b>USD:</b>
                        4.78
                     </p>
                  </div>
                  <div class="d-flex align-items-center gap-2 mt-3">
                     <img src="{{ asset('assets/images/euro-icon.png') }}" alt="" style="width: 37px;" />
                     <p class="mb-0" style="font-size: 16px;">
                        <b>EURO:</b>
                        4.78
                     </p>
                  </div>
                  <div class="d-flex align-items-center gap-2 mt-3">
                     <img src="{{ asset('assets/images/pound-icon.png') }}" alt="" style="width: 37px;" />
                     <p class="mb-0" style="font-size: 16px;">
                        <b>GBP:</b>
                        4.78
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="row mt-3 g-3">
      <div class="col-lg-6 mt-lg-0 mt-4">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                  <div>
                     <h5>Upcoming Payments</h5>
                     <a href="upcoming-payments.html" style="color: #0000ee; font-weight: bold; text-decoration: underline;">View Payments</a>
                  </div>
                  <img src="{{ asset('assets/images/upcoming-payments.png') }}" alt="" style="width: 100px;" />
               </div>
            </div>
         </div>
      </div>

      <div class="col-lg-6 col-md-8 col-sm-12 ms-auto mt-4 mt-lg-0">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                  <div>
                     <h6>Alerts</h6>
                     <div class="d-flex gap-2 align-items-center">
                        <img src="{{ asset('assets/images/alert-1.png') }}" alt="" style="width: 16px;" />
                        <p class="mb-0">
                           Advance Payment is required for the hotel you choose.
                        </p>
                     </div>
                     <div class="d-flex gap-2 align-items-center">
                        <img src="{{ asset('assets/images/alert-2.png') }}" alt="" style="width: 16px;" />
                        <p class="mb-0">
                           Advance Payment is required for the hotel you choose.
                        </p>
                     </div>
                  </div>
                  <img src="{{ asset('assets/images/alert.png') }}" alt="" />
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="row mt-3">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                  <div>
                     <h5 class="mb-0">Upcoming Holidays</h5>
                     <p class="mb-0">Don't miss upcoming scheduled holidays</p>
                  </div>
                  <a href="upcoming-holidays.html" style="color: #0000ee; text-decoration: underline; font-weight: bold;">See all</a>
               </div>
            </div>
            <div class="card-body">
               <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap" style="background-color: #e3ebf8; padding: 24px; border-radius: 16px; box-shadow: 0px 3px 6px #00000029;">
                  <div class="d-flex gap-2 align-items-center flex-wrap">
                     <img src="{{ asset('assets/images/calendar.png') }}" alt="" />
                     <div>
                        <h6>New Year Eve's</h6>
                        <p class="mb-0 text-sm">
                           Starting from December 28th to January 3rd
                        </p>
                     </div>
                  </div>
                  <div class="d-flex gap-2 align-items-center">
                     <div style="width: 10px; height: 10px; border-radius: 10px; background-color: #2e5492;"></div>
                     <p class="mb-0">December 28, 2024</p>
                  </div>
               </div>

               <div class="d-flex mt-4 justify-content-between align-items-start gap-2 flex-wrap" style="background-color: #ffddd1; padding: 24px; border-radius: 16px; box-shadow: 0px 3px 6px #00000029;">
                  <div class="d-flex gap-2 align-items-center flex-wrap">
                     <img src="{{ asset('assets/images/calendar.png') }}" alt="" />
                     <div>
                        <h6>New Year Eve's</h6>
                        <p class="mb-0 text-sm">
                           Starting from December 28th to January 3rd
                        </p>
                     </div>
                  </div>
                  <div class="d-flex gap-2 align-items-center">
                     <div style="width: 10px; height: 10px; border-radius: 10px; background-color: #ff6f3c;"></div>
                     <p class="mb-0">December 28, 2024</p>
                  </div>
               </div>

               <div class="d-flex mt-4 justify-content-between align-items-start gap-2 flex-wrap" style="background-color: #cfffbf; padding: 24px; border-radius: 16px; box-shadow: 0px 3px 6px #00000029;">
                  <div class="d-flex gap-2 align-items-center flex-wrap">
                     <img src="{{ asset('assets/images/calendar.png') }}" alt="" />
                     <div>
                        <h6>New Year Eve's</h6>
                        <p class="mb-0 text-sm">
                           Starting from December 28th to January 3rd
                        </p>
                     </div>
                  </div>
                  <div class="d-flex gap-2 align-items-center">
                     <div style="width: 10px; height: 10px; border-radius: 10px; background-color: #6bbf50;"></div>
                     <p class="mb-0">December 28, 2024</p>
                  </div>
               </div>

               <div class="d-flex mt-4 justify-content-between align-items-start gap-2 flex-wrap" style="background-color: #fff2cc; padding: 24px; border-radius: 16px; box-shadow: 0px 3px 6px #00000029;">
                  <div class="d-flex gap-2 align-items-center flex-wrap">
                     <img src="{{ asset('assets/images/calendar.png') }}" alt="" />
                     <div>
                        <h6>New Year Eve's</h6>
                        <p class="mb-0 text-sm">
                           Starting from December 28th to January 3rd
                        </p>
                     </div>
                  </div>
                  <div class="d-flex gap-2 align-items-center">
                     <div style="width: 10px; height: 10px; border-radius: 10px; background-color: #eec447;"></div>
                     <p class="mb-0">December 28, 2024</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endhasrole
@hasrole($supplierRole)
<div class="container-fluid py-4">
   <div class="row g-3">
      <div class="col-lg-3 col-sm-6">
         <div class="card cursor-pointer" onclick="toggleCard(this, 'custom-upcoming-table')">
            <div class="card-body p-3">
               <p class="text-sm mb-5 text-capitalize font-weight-bold">
                  Upcoming Services
               </p>
               <div class="row">
                  <div class="col-8 d-flex align-items-end">
                     <div class="numbers">
                        <h5 class="font-weight-bolder mb-0">
                           65
                           <span class="text-success text-sm font-weight-bolder">+55%</span>
                        </h5>
                     </div>
                  </div>
                  <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                     <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 48px; height: 48px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('assets/images/booking-white.png') }}" alt="Upcoming Services" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-lg-3 col-sm-6">
         <div class="card cursor-pointer" onclick="toggleCard(this, 'custom-confirmed-table')">
            <div class="card-body p-3">
               <p class="text-sm mb-5 text-capitalize font-weight-bold">
                  Confirmed Services
               </p>
               <div class="row">
                  <div class="col-8 d-flex align-items-end">
                     <div class="numbers">
                        <h5 class="font-weight-bolder mb-0">
                           10
                           <span class="text-success text-sm font-weight-bolder">+3%</span>
                        </h5>
                     </div>
                  </div>
                  <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                     <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 48px; height: 48px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('assets/images/booking-white.png') }}" alt="Confirmed Services" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-lg-3 col-sm-6">
         <div class="card cursor-pointer" onclick="toggleCard(this, 'custom-not-confirmed-table')">
            <div class="card-body p-3">
               <p class="text-sm mb-5 text-capitalize font-weight-bold">
                  Services Not Confirmed
               </p>
               <div class="row">
                  <div class="col-8 d-flex align-items-end">
                     <div class="numbers">
                        <h5 class="font-weight-bolder mb-0">
                           65
                           <span class="text-success text-sm font-weight-bolder">+55%</span>
                        </h5>
                     </div>
                  </div>
                  <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                     <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 48px; height: 48px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('assets/images/booking-white.png') }}" alt="Services Not Confirmed" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-lg-3 col-sm-6">
         <div class="card cursor-pointer" onclick="toggleCard(this,  'custom-rejected-table')">
            <div class="card-body p-3">
               <p class="text-sm mb-5 text-capitalize font-weight-bold">
                  Rejected Services
               </p>
               <div class="row">
                  <div class="col-8 d-flex align-items-end">
                     <div class="numbers">
                        <h5 class="font-weight-bolder mb-0">
                           10
                           <span class="text-success text-sm font-weight-bolder">+3%</span>
                        </h5>
                     </div>
                  </div>
                  <div class="col-4 text-end" style="display: flex; justify-content: end; margin: auto;">
                     <div class="icon icon-shape shadow text-center border-radius-md" style="background-color: #2a4885; width: 48px; height: 48px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('assets/images/booking-white.png') }}" alt="Rejected Services" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="row mt-3">
      <div class="card mt-3">
         <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
            <h5 class="mb-0 col-12 col-md-3">Services</h5>
            <div class="d-flex flex-wrap justify-content-end align-items-center col-12 col-md-9 gap-2">
               <div class="form-group mb-0 me-2 w-100 w-md-auto" style="min-width: 180px;">
                  <select class="form-select">
                     <option>Scheduled Services</option>
                     <option>Today</option>
                     <option>Tomorrow</option>
                     <option>Next 7 Days</option>
                  </select>
               </div>
               <div class="form-group mb-0 me-2 w-100 w-md-auto" style="min-width: 150px;">
                  <select class="form-select">
                     <option>Status</option>
                     <option>Upcoming</option>
                     <option>Confirmed</option>
                     <option>Rejected</option>
                     <option>Not Confirmed</option>
                  </select>
               </div>
               <div class="input-group me-2 w-100 w-md-auto">
                  <span class="input-group-text" id="basic-addon1">
                     <i class="bi bi-search"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Search" />
               </div>
            </div>
         </div>
         <div class="card-body pt-0">
            <div class="table-responsive custom-table-header custom-not-confirmed-table" style="overflow-y: hidden; display: none; height: 500px;">
               <table class="table table-flush" id="datatable-basic">
                  <thead class="thead-light">
                     <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           DATE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           TIME
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           PEOPLE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           CUSTOMER <br />
                           NAME
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           FLIGHT
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           HOTEL
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-40 font-weight-bolder opacity-7">
                           SERVICE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           SCHEDULED <br />
                           SERVICES
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           REMARKS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           COST
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           SERVICE <br />
                           STATUS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           ACTION
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-purple-status">
                              NOT CONFIRMED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-purple-status">
                              NOT CONFIRMED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-purple-status">
                              NOT CONFIRMED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="table-responsive custom-table-header custom-confirmed-table" style="overflow-y: hidden; display: none; height: 500px;">
               <table class="table table-flush" id="datatable-basic2">
                  <thead class="thead-light">
                     <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           DATE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           TIME
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           PEOPLE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           CUSTOMER <br />
                           NAME
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           FLIGHT
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           HOTEL
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-40 font-weight-bolder opacity-7">
                           SERVICE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           SCHEDULED <br />
                           SERVICES
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           REMARKS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           COST
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           SERVICE <br />
                           STATUS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           ACTION
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-green-status">
                              CONFIRMED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-green-status">
                              CONFIRMED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-green-status">
                              CONFIRMED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="table-responsive custom-table-header custom-upcoming-table" style="overflow-y: hidden; display: block; height: 500px;">
               <table class="table table-flush" id="datatable-basic3">
                  <thead class="thead-light">
                     <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           DATE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           TIME
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           PEOPLE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           CUSTOMER <br />
                           NAME
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           FLIGHT
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           HOTEL
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-40 font-weight-bolder opacity-7">
                           SERVICE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           SCHEDULED <br />
                           SERVICES
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           REMARKS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           COST
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           SERVICE <br />
                           STATUS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           ACTION
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-yellow-status">
                              UPCOMING
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-yellow-status">
                              UPCOMING
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-yellow-status">
                              UPCOMING
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-yellow-status">
                              UPCOMING
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="table-responsive custom-table-header custom-rejected-table" style="overflow-y: hidden; display: none; height: 500px;">
               <table class="table table-flush" id="datatable-basic4">
                  <thead class="thead-light">
                     <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           DATE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           TIME
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           PEOPLE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           CUSTOMER <br />
                           NAME
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           FLIGHT
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-10 font-weight-bolder opacity-7">
                           HOTEL
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-40 font-weight-bolder opacity-7">
                           SERVICE
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           SCHEDULED <br />
                           SERVICES
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           REMARKS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           COST
                        </th>
                        <th class="text-uppercase text-secondary text-xxs w-20 font-weight-bolder opacity-7">
                           SERVICE <br />
                           STATUS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                           ACTION
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-red-status">
                              REJECTED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-red-status">
                              REJECTED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-sm font-weight-bold">01/12/2024</td>
                        <td class="text-sm font-weight-normal">10:00 AM</td>
                        <td class="text-sm font-weight-normal">
                           2
                           <br />
                           <img src="{{ asset('assets/images/car.png') }}" alt="" class="mt-3" />
                        </td>
                        <td class="text-sm font-weight-normal">Larry Murphy</td>
                        <td class="text-sm font-weight-normal">F3954</td>
                        <td class="text-sm font-weight-normal">Luxury Hotel</td>
                        <td class="text-sm font-weight-normal" style="width: 150px; white-space: wrap;">
                           SSA - Trf IN - 02 pax' s Sedan WITHOUT GUIDE day (from 07:00 to 20:00) (Other States)
                        </td>
                        <td class="text-sm font-weight-normal">Today</td>
                        <td class="text-sm font-weight-normal">
                           Lorem ipsum is a dummy text
                        </td>
                        <td class="text-sm font-weight-normal">$30</td>
                        <td class="text-sm font-weight-normal">
                           <div class="custom-status custom-red-status">
                              REJECTED
                           </div>
                        </td>
                        <td class="text-sm font-weight-normal">
                           <div class="cursor-pointer d-flex align-items-center gap-3" onclick="window.location.href = '{{ route('service.view') }}'">
                              <img src="{{ asset('assets/images/view-icon.png') }}" alt="" />
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
@endhasrole

@endsection
@push('custom-js')
<script>
   const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
      searchable: false,
      fixedHeight: true,
   });

   const openButton = document.getElementById("custom-sidenav-toggler");
   const body = document.body;

   openButton.addEventListener("click", () => {
      body.classList.add("g-sidenav-pinned");
   });

   const closeButton = document.getElementById("closeSidebar");
   const bodyContainer = document.body;

   closeButton.addEventListener("click", () => {
      bodyContainer.classList.remove("g-sidenav-pinned");
   });

   var ctx1 = document.getElementById("chart-consumption").getContext("2d");

   var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

   gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
   gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
   gradientStroke1.addColorStop(0, "rgba(203,12,159,0)");

   new Chart(ctx1, {
      type: "doughnut",
      data: {
         labels: ["Done", "Stuck", "Worked On", "Garage", "Basement"],
         datasets: [
            {
               label: "Consumption",
               weight: 9,
               cutout: 90,
               tension: 0.9,
               pointRadius: 2,
               borderWidth: 2,
               backgroundColor: ["#5AA94A", "#EF191F", "#F1D604"],
               data: [15, 20, 13],
               fill: false,
            },
         ],
      },
      options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
            legend: {
               display: false,
            },
         },
         interaction: {
            intersect: false,
            mode: "index",
         },
         scales: {
            y: {
               grid: {
                  drawBorder: false,
                  display: false,
                  drawOnChartArea: false,
                  drawTicks: false,
               },
               ticks: {
                  display: false,
               },
            },
            x: {
               grid: {
                  drawBorder: false,
                  display: false,
                  drawOnChartArea: false,
                  drawTicks: false,
               },
               ticks: {
                  display: false,
               },
            },
         },
      },
   });

   var win = navigator.platform.indexOf("Win") > -1;
   if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
         damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
   }
</script>





<script>
   function toggleCard(card, tableClass) {
      // Reset all cards and tables
      document.querySelectorAll(".card").forEach((otherCard) => {
         if (otherCard !== card) {
            resetCardStyles(otherCard);
         }
      });
      hideAllTables();

      // Toggle clicked card state
      const isActive = card.style.backgroundColor === "rgb(46, 84, 146)";

      if (!isActive) {
         activateCard(card);
         showTable(tableClass);
      } else {
         deactivateCard(card);
      }
   }

   function resetCardStyles(card) {
      card.style.backgroundColor = "";
      card.style.color = "";
      card.querySelectorAll("p, h5, span").forEach((textElement) => {
         textElement.style.color = "";
      });
      const icon = card.querySelector(".icon");
      if (icon) icon.style.backgroundColor = "#2a4885";
      const img = card.querySelector("img");
      if (img) img.src = img.src.replace("booking.png", "booking-white.png");
   }

   function activateCard(card) {
      card.style.backgroundColor = "#2e5492";
      card.style.color = "white";
      card.querySelectorAll("p, h5, span").forEach((textElement) => {
         textElement.style.color = "white";
      });
      const icon = card.querySelector(".icon");
      if (icon) icon.style.backgroundColor = "white";
      const img = card.querySelector("img");
      if (img) img.src = img.src.replace("booking-white.png", "booking.png");
   }

   function hideAllTables() {
      document.querySelectorAll(".table-responsive").forEach((table) => {
         table.style.display = "none";
      });
   }

   function showTable(tableClass) {
      const table = document.querySelector(`.${tableClass}`);
      if (table) {
         table.style.display = "block";
      }
   }
</script>
<script>
   const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
      searchable: false,
      fixedHeight: true,
   });
   const dataTableBasic2 = new simpleDatatables.DataTable("#datatable-basic2", {
      searchable: false,
      fixedHeight: true,
   });
   const dataTableBasic3 = new simpleDatatables.DataTable("#datatable-basic3", {
      searchable: false,
      fixedHeight: true,
   });
   const dataTableBasic4 = new simpleDatatables.DataTable("#datatable-basic4", {
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


@endpush