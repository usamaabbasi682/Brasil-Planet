@extends('layouts.app')
@section('title','Create Hotel')
@section('breadcrumb')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
      <li class="breadcrumb-item">
         <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
      </li>
      <li class="breadcrumb-item text-dark mt-1">Hotels / Add New</li>
   </ol>
   <h6 class="mt-0">Add New</h6>
</nav>
@endsection
@section('main')
<div class="container-fluid py-4">
    <div class="card">
       <div class="card-header">
          <h5 class="mb-0 text-center">Add New Hotel</h5>
       </div>
       <div class="card-body pt-0" id="first-step">
          <div style="border: 1px solid #afafaf; border-radius: 16px; padding: 24px;">
             <h6>Choose Payment Method</h6>
             <div class="d-flex gap-5 align-items-center flex-wrap">
                <div class="form-check">
                   <input class="form-check-input" type="radio" name="trip" id="trip1" value="option1" />
                   <label class="form-check-label" for="trip1">
                      Payment in Dollars
                   </label>
                </div>
                <div class="form-check">
                   <input class="form-check-input" type="radio" name="trip" id="trip1" value="option1" checked />
                   <label class="form-check-label" for="trip1">
                      Payment in Real
                   </label>
                </div>
                <div class="form-check">
                   <input class="form-check-input" type="radio" name="trip" id="trip1" value="option1" checked />
                   <label class="form-check-label" for="trip1">
                      Payment in Euros
                   </label>
                </div>
             </div>
             <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-12 col-md-4">
                      <label>Hotel Name</label>
                      <input type="text" class="form-control" placeholder="Hotel Name" />
                   </div>
                   <div class="col-12 col-md-4">
                      <label>Email</label>
                      <input type="email" class="form-control" placeholder="Email" />
                   </div>
                   <div class="col-12 col-md-4">
                      <label>Contact no</label>
                      <input type="text" class="form-control" placeholder="Contact no" />
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-12 col-md-4">
                      <label>Hotel Website</label>
                      <input type="text" class="form-control" placeholder="Hotel Website" />
                   </div>
                   <div class="col-12 col-md-4">
                      <label>Room Category</label>
                      <select class="form-select">
                         <option>Select</option>
                         <option>Room Category 1</option>
                         <option>Room Category 2</option>
                         <option>Room Category 3</option>
                      </select>
                   </div>
                   <div class="col-12 col-md-4">
                      <label>Room Type</label>
                      <select class="form-select">
                         <option>Select</option>
                         <option>Room Type 1</option>
                         <option>Room Type 2</option>
                         <option>Room Type 3</option>
                      </select>
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-12 col-md-4">
                      <label>Address 1</label>
                      <input type="text" class="form-control" placeholder="Address 1" />
                   </div>
                   <div class="col-12 col-md-4">
                      <label>Check In Time</label>
                      <input type="time" class="form-control" placeholder="Check In Time" />
                   </div>
                   <div class="col-12 col-md-4">
                      <label>Check Out Time</label>
                      <input type="time" class="form-control" placeholder="Check Out Time" />
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-12">
                      <label>Notes</label>
                      <input type="text" class="form-control" placeholder="Notes" />
                   </div>
                </div>
             </div>
          </div>
 
          <div style="border: 1px solid #afafaf; border-radius: 16px; padding: 24px;" class="mt-3">
             <h6>Bank Details</h6>
             <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-12 col-md-2">
                      <p class="mb-0">Select Add ons</p>
                   </div>
                   <div class="col-12 col-md-4">
                      <div class="d-flex gap-5">
                         <div class="form-check ps-0">
                            <input type="checkbox" class="" id="customCheckDisabled" />
                            <label class="custom-control-label" for="customCheckDisabled">Breakfast</label>
                         </div>
                         <div class="form-check ps-0">
                            <input type="checkbox" class="" id="customCheckDisabled" />
                            <label class="custom-control-label" for="customCheckDisabled">Excrusions</label>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-12 col-md-2">
                      <p class="mb-0">Select Payment</p>
                   </div>
                   <div class="col-12 col-md-4">
                      <div class="d-flex gap-5">
                         <div class="form-check ps-0">
                            <input type="checkbox" class="" id="customCheckDisabled" />
                            <label class="custom-control-label" for="customCheckDisabled">Invoice</label>
                         </div>
                         <div class="form-check ps-0">
                            <input type="checkbox" class="" id="customCheckDisabled" />
                            <label class="custom-control-label" for="customCheckDisabled">Advance</label>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-12 col-md-2">
                      <p class="mb-0">Allow Access</p>
                   </div>
                   <div class="col-12 col-md-4">
                      <div class="d-flex gap-3 align-items-center flex-wrap">
                         <div class="form-check">
                            <input class="form-check-input" type="radio" name="trip" id="trip1" value="option1" />
                            <label class="form-check-label" for="trip1">
                               Yes
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="radio" name="trip" id="trip1" value="option1" checked />
                            <label class="form-check-label" for="trip1">
                               No
                            </label>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
 
          <div style="border: 1px solid #afafaf; border-radius: 16px; padding: 24px;" class="mt-3">
             <h6>Bank Details</h6>
             <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-12 col-md-4">
                      <label>Bank Name</label>
                      <input type="text" class="form-control" placeholder="Bank Name" />
                   </div>
                   <div class="col-12 col-md-4">
                      <label>Account No</label>
                      <input type="text" class="form-control" placeholder="Account No" />
                   </div>
                </div>
             </div>
          </div>
 
          <div class="d-flex justify-content-end mt-3">
             <button id="next_step" class="btn" style="background-color: #004d73; color: white;">
                NEXT
             </button>
          </div>
       </div>
       <div class="card-body pt-0" id="step_2" style="display: none;">
            <div style="border: 1px solid #afafaf; border-radius: 16px; padding: 24px;">
            <h6>Creating Periods</h6>
            <div class="container-fluid p-0">
                <div id="dynamic-rows">
                    <div class="row dynamic-row">
                        <div class="col-12 col-md-5">
                        <label>Period Name</label>
                        <input type="text" class="form-control" placeholder="Period Name" />
                        </div>
                        <div class="col-12 col-md-3">
                        <label>From</label>
                        <input type="date" class="form-control" placeholder="From" />
                        </div>
                        <div class="col-12 col-md-3">
                        <label>To</label>
                        <input type="date" class="form-control" placeholder="To" />
                        </div>
                        <div class="col-12 col-md-1 d-flex align-items-center" style="margin-top: 24px;">
                        <div class="d-flex align-items-center gap-3">
                            <img src="../assets/images/add-circle-green-icon.png" alt="" class="cursor-pointer add-icon" />
                            <img src="../assets/images/subtract-circle-icon.png" alt="" class="cursor-pointer subtract-icon" />
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
            <div style="border: 1px solid #afafaf; border-radius: 16px; padding: 24px;" class="mt-3">
            <h6>Low Season</h6>
            <div class="table-responsive custom-table-header" style="overflow-y: hidden;">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7">
                            Room Types
                        </th>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7">
                            Room Category
                        </th>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7">
                            Set Price
                        </th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Apartment
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Deluxe
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Standard
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            <h6>Mid Season</h6>
            <div class="table-responsive custom-table-header" style="overflow-y: hidden;">
                <table class="table table-flush" id="datatable-basic2">
                    <thead class="thead-light">
                        <tr>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7">
                            Room Types
                        </th>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7">
                            Room Category
                        </th>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Apartment
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Deluxe
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Standard
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            <h6>High Season</h6>
            <div class="table-responsive custom-table-header" style="overflow-y: hidden;">
                <table class="table table-flush" id="datatable-basic3">
                    <thead class="thead-light">
                        <tr>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7">
                            Room Types
                        </th>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7">
                            Room Category
                        </th>
                        <th class="w-25 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="w-15 text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Apartment
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Deluxe
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                        <tr style="border-style: none; border-color: transparent;">
                        <td class="text-sm font-weight-normal">
                            Standard
                        </td>
                        <td class="text-sm font-weight-normal">
                            Single Bed
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <input type="text" class="form-control" placeholder="" />
                        </td>
                        <td class="text-sm font-weight-normal">
                            <div style="background-color: #f2f2f2; display: inline-block; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 8px;">%</div>
                        </td>
                        <td class="text-sm font-weight-normal">
                            <button class="btn m-0" style="background-color: #004d73; color: white;" data-bs-toggle="modal" data-bs-target="#priceModal">
                                SAVE
                            </button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        
            <div class="d-flex justify-content-end mt-3">
            <button class="btn" style="background-color: #004d73; color: white;">
                ADD
            </button>
            </div>
        </div>
    </div>
 </div>
 <div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="addContentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
          <div class="modal-body p-0" style="background-color: #2e5492;">
             <div class="d-flex flex-column justify-content-center align-items-center py-5">
                <img src="{{ asset('assets/images/bell.png') }}" alt="" />
                <h4 style="color: white;">"Outdated Prices"</h4>
             </div>
             <a href="{{ route('hotels.create') }}" style="color: #0000ee; display: block; background-color: white; text-align: center; padding: 16px;">
                Continue
             </a>
          </div>
       </div>
    </div>
 </div>
  
@endsection
@push('custom-js')
<script>
    next_step.addEventListener('click', function(){
        document.getElementById('first-step').style.display = 'none';
        document.getElementById('step_2').style.display = 'block';
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
       const dynamicRowsContainer = document.getElementById("dynamic-rows");
 
       function updateIcons() {
          const rows = dynamicRowsContainer.querySelectorAll(".row");
          rows.forEach((row, index) => {
             const addIcon = row.querySelector(".add-icon");
             const subtractIcon = row.querySelector(".subtract-icon");
 
             if (index === rows.length - 1) {
                addIcon.style.display = "block";
                subtractIcon.style.display = "none";
             } else {
                addIcon.style.display = "none";
                subtractIcon.style.display = "block";
             }
          });
       }
 
       updateIcons();
 
       dynamicRowsContainer.addEventListener("click", function (e) {
          if (e.target && e.target.classList.contains("add-icon")) {
             const newRow = e.target.closest(".row").cloneNode(true);
 
             const addIcon = newRow.querySelector(".add-icon");
             const subtractIcon = newRow.querySelector(".subtract-icon");
             addIcon.style.display = "none";
             subtractIcon.style.display = "block";
 
             dynamicRowsContainer.appendChild(newRow);
 
             updateIcons();
          }
 
          if (e.target && e.target.classList.contains("subtract-icon")) {
             const rowToRemove = e.target.closest(".row");
             if (dynamicRowsContainer.children.length > 1) {
                rowToRemove.remove();
             }
 
             updateIcons();
          }
       });
    });
 </script>
 
@endpush