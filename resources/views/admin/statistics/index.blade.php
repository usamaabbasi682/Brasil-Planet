@extends('layouts.app')
@section('title','Statistics')
@section('breadcrumb')
@endsection
@section('main')
<div class="container-fluid py-4">
    <div class="row mt-3">
       <div class="col-12">
          <div class="card">
             <div class="card-header">
                <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                   <div class="d-flex gap-2 align-items-center">
                      <h5 class="mb-0">Statistics</h5>
                   </div>
                </div>
             </div>
             <div class="card-body pt-0">
                <div class="p-3" style="border: 1px solid #dbdbdd; border-radius: 16px;">
                   <div class="container-fluid px-0">
                      <div class="row">
                         <div class="col-12 col-md-4">
                            <label>Nation Statistics</label>
                            <select class="form-select">
                               <option>Select Nation</option>
                               <option>Nation 1</option>
                               <option>Nation 2</option>
                               <option>Nation 3</option>
                            </select>
                         </div>
                         <div class="col-12 col-md-4">
                            <label>From Date</label>
                            <input type="date" class="form-control" id="fromDate" placeholder="From Date" />
                         </div>
                         <div class="col-12 col-md-4">
                            <label>To Date</label>
                            <input type="date" class="form-control" id="toDate" placeholder="To Date" />
                         </div>
                         <div class="col-12 col-md-4">
                            <label>Destination</label>
                            <select class="form-select">
                               <option>Select Destination</option>
                               <option>Destination 1</option>
                               <option>Destination 2</option>
                               <option>Destination 3</option>
                            </select>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-l2 mt-4">
                            <div class="d-flex gap-3 align-items-center flex-wrap">
                               <div class="form-check">
                                  <input class="form-check-input" type="radio" name="reservation" id="reservation1" value="compare" />
                                  <label class="form-check-label" for="reservation1">
                                     Compare
                                  </label>
                               </div>
                               <div class="form-check">
                                  <input class="form-check-input" type="radio" name="reservation" id="reservation2" value="dontCompare" checked />
                                  <label class="form-check-label" for="reservation2">
                                     Don't Compare
                                  </label>
                               </div>
                               <div class="form-check">
                                  <input class="form-check-input" type="radio" name="reservation" id="reservation3" value="comparePrevious" />
                                  <label class="form-check-label" for="reservation3">
                                     Compare with same periods of previous years
                                  </label>
                               </div>
                            </div>
                         </div>
                      </div>

                      <div class="row compare-fields d-none">
                         <div class="col-12 col-md-4">
                            <label>From Date</label>
                            <input type="date" class="form-control" id="fromDate" placeholder="From Date" />
                         </div>
                         <div class="col-12 col-md-4">
                            <label>To Date</label>
                            <input type="date" class="form-control" id="toDate" placeholder="To Date" />
                         </div>
                      </div>

                      <div class="row compare-fields d-none">
                         <div class="col-12 col-md-4">
                            <label>Destination</label>
                            <select class="form-select">
                               <option>Select Destination</option>
                               <option>Destination 1</option>
                               <option>Destination 2</option>
                               <option>Destination 3</option>
                            </select>
                         </div>
                         <div class="col-12 col-md-4">
                            <label>Suppliers</label>
                            <select class="form-select">
                               <option>Select Suppliers</option>
                               <option>Suppliers 1</option>
                               <option>Suppliers 2</option>
                               <option>Suppliers 3</option>
                            </select>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-12 col-sm-12 mt-3 text-start">
                            <h6 style="text-align: left;" class="mb-2">
                               Select Multiple Destinations
                            </h6>
                            <div class="d-flex gap-5 align-items-center flex-wrap">
                               <div class="form-check ps-0">
                                  <input type="checkbox" name="trip" id="trip1" value="option1" />
                                  <label class="form-check-label" for="trip1">
                                     The Wonders of Brasil
                                  </label>
                               </div>
                               <div class="form-check ps-0">
                                  <input type="checkbox" name="trip" id="trip1" value="option1" />
                                  <label class="form-check-label" for="trip1">
                                     Brasil: The Great Adventure
                                  </label>
                               </div>
                               <div class="form-check ps-0">
                                  <input type="checkbox" name="trip" id="trip1" value="option1" />
                                  <label class="form-check-label" for="trip1">
                                     Tropical Brasil
                                  </label>
                               </div>
                            </div>
                         </div>
                      </div>

                      <div class="d-flex justify-content-end mt-3">
                         <button type="button" class="btn" style="background-color: #2e5492; color: white;" id="filter-btn">
                            FILTER STATISTICS
                         </button>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>

    <div class="row mt-3">
       <div class="col-12 col-md-4 custom-filter-statistics" style="display: none;">
          <div class="card">
             <div class="card-body">
                <div
                   id="custom-card-handler"
                   class="custom-card-handler"
                   style="background-image: url(../assets/images/service-details.png); background-size: cover; background-repeat: no-repeat; background-position: center; text-align: center; padding: 1rem; cursor: pointer;"
                >
                   <h6 style="margin: 0; color: white;">
                      Brazil
                      <i class="fas fa-solid fa-chevron-down"></i>
                   </h6>
                </div>

                <div class="toggle-content">
                   <div class="mt-3 d-flex justify-content-between align-items-center gap-2 flex-wrap">
                      <p class="mb-0">01/02/2023 - 10/30/2024</p>
                      <h6 class="mb-0">Total: 326</h6>
                   </div>
                   <div class="mt-3 d-flex justify-content-between align-items-center gap-2 flex-wrap">
                      <h6 class="mb-0">39</h6>
                      <div class="custom-status custom-red-status">
                         NOT ASSIGNED
                      </div>
                   </div>
                   <div class="table-responsive">
                      <table class="table table-flush" id="datatable-basic">
                         <thead class="thead-light">
                            <tr>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Customer
                               </th>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Start Date
                               </th>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  End Date
                               </th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-12 col-md-4 custom-filter-statistics" style="display: none;">
          <div class="card">
             <div class="card-body">
                <div
                   id="custom-card-handler"
                   class="custom-card-handler"
                   style="background-image: url(../assets/images/service-details.png); background-size: cover; background-repeat: no-repeat; background-position: center; text-align: center; padding: 1rem; cursor: pointer;"
                >
                   <h6 style="margin: 0; color: white;">
                      Brazil
                      <i class="fas fa-solid fa-chevron-down"></i>
                   </h6>
                </div>

                <div class="toggle-content">
                   <div class="mt-3 d-flex justify-content-between align-items-center gap-2 flex-wrap">
                      <p class="mb-0">01/02/2023 - 10/30/2024</p>
                      <h6 class="mb-0">Total: 326</h6>
                   </div>
                   <div class="mt-3 d-flex justify-content-between align-items-center gap-2 flex-wrap">
                      <h6 class="mb-0">39</h6>
                      <div class="custom-status custom-red-status">
                         NOT ASSIGNED
                      </div>
                   </div>
                   <div class="table-responsive">
                      <table class="table table-flush" id="datatable-basic2">
                         <thead class="thead-light">
                            <tr>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Customer
                               </th>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Start Date
                               </th>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  End Date
                               </th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-12 col-md-4 custom-filter-statistics" style="display: none;">
          <div class="card">
             <div class="card-body">
                <div
                   id="custom-card-handler"
                   class="custom-card-handler"
                   style="background-image: url(../assets/images/service-details.png); background-size: cover; background-repeat: no-repeat; background-position: center; text-align: center; padding: 1rem; cursor: pointer;"
                >
                   <h6 style="margin: 0; color: white;">
                      Brazil
                      <i class="fas fa-solid fa-chevron-down"></i>
                   </h6>
                </div>

                <div class="toggle-content">
                   <div class="mt-3 d-flex justify-content-between align-items-center gap-2 flex-wrap">
                      <p class="mb-0">01/02/2023 - 10/30/2024</p>
                      <h6 class="mb-0">Total: 326</h6>
                   </div>
                   <div class="mt-3 d-flex justify-content-between align-items-center gap-2 flex-wrap">
                      <h6 class="mb-0">39</h6>
                      <div class="custom-status custom-red-status">
                         NOT ASSIGNED
                      </div>
                   </div>
                   <div class="table-responsive">
                      <table class="table table-flush" id="datatable-basic3">
                         <thead class="thead-light">
                            <tr>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Customer
                               </th>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Start Date
                               </th>
                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  End Date
                               </th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                            <tr>
                               <td class="text-sm font-weight-normal">
                                  Ryan Holland
                               </td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                               <td class="text-sm font-weight-normal">10/12/2024</td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>

    <div class="row mt-3">
       <div class="col-12 col-md-4 custom-filter-statistics" style="display: none;">
          <div class="card">
             <div class="card-body">
                <div
                   class="d-flex gap-3 align-items-center justify-content-center"
                   style="background-image: url(../assets/images/service-details.png); background-size: cover; background-repeat: no-repeat; background-position: center; text-align: center; padding: 1rem;"
                >
                   <h6 style="margin: 0; color: white;">
                      TOTAL
                   </h6>
                   <h6 style="margin: 0; color: white;">
                      45
                   </h6>
                </div>

                <div class="d-flex gap-2 mt-3 flex-wrap">
                   <h6 class="mb-0">Tri Started:</h6>
                   <p class="mb-0">01/02/2023 - 10/30/2024</p>
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                   <h6 class="mb-0">Total começaram a viagem</h6>
                   <h6 class="mb-0">01/12/2024 - 16/12/2024</h6>
                </div>

                <div class="chart my-4">
                   <canvas id="pie-chart" class="chart-canvas" height="300"></canvas>
                </div>

                <div class="container-fluid px-0 mt-4">
                   <div class="row">
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #358fec;"></div>
                         <p class="mb-0 text-sm">Brazil</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #eec447;"></div>
                         <p class="mb-0 text-sm">Salvador (Bahia)</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #6bbf50;"></div>
                         <p class="mb-0 text-sm">Goiania (Goias)</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #000000;"></div>
                         <p class="mb-0 text-sm">Belo Horizonte (Minas Gerais)</p>
                      </div>
                   </div>
                </div>

                <div style="width: 100%; height: 1px; background-color: #dadada; margin: 16px 0;"></div>

                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                   <h6 class="mb-0">Total começaram a viagem</h6>
                   <h6 class="mb-0">01/12/2024 - 16/12/2024</h6>
                </div>

                <div class="chart my-4">
                   <canvas id="pie-chart2" class="chart-canvas" height="300"></canvas>
                </div>

                <div class="container-fluid px-0 mt-4">
                   <div class="row">
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #358fec;"></div>
                         <p class="mb-0 text-sm">Tour Operator</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #000000;"></div>
                         <p class="mb-0 text-sm">Private</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>

       <div class="col-12 col-md-4 custom-filter-statistics" style="display: none;">
          <div class="card">
             <div class="card-body">
                <div
                   class="d-flex gap-3 align-items-center justify-content-center"
                   style="background-image: url(../assets/images/service-details.png); background-size: cover; background-repeat: no-repeat; background-position: center; text-align: center; padding: 1rem;"
                >
                   <h6 style="margin: 0; color: white;">
                      TOTAL
                   </h6>
                   <h6 style="margin: 0; color: white;">
                      45
                   </h6>
                </div>

                <div class="d-flex gap-2 mt-3 flex-wrap">
                   <h6 class="mb-0">Tri Started:</h6>
                   <p class="mb-0">01/02/2023 - 10/30/2024</p>
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                   <h6 class="mb-0">Total começaram a viagem</h6>
                   <h6 class="mb-0">01/12/2024 - 16/12/2024</h6>
                </div>

                <div class="chart my-4">
                   <canvas id="pie-chart3" class="chart-canvas" height="300"></canvas>
                </div>

                <div class="container-fluid px-0 mt-4">
                   <div class="row">
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #358fec;"></div>
                         <p class="mb-0 text-sm">Brazil</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #eec447;"></div>
                         <p class="mb-0 text-sm">Salvador (Bahia)</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #6bbf50;"></div>
                         <p class="mb-0 text-sm">Goiania (Goias)</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #000000;"></div>
                         <p class="mb-0 text-sm">Belo Horizonte (Minas Gerais)</p>
                      </div>
                   </div>
                </div>

                <div style="width: 100%; height: 1px; background-color: #dadada; margin: 16px 0;"></div>

                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                   <h6 class="mb-0">Total começaram a viagem</h6>
                   <h6 class="mb-0">01/12/2024 - 16/12/2024</h6>
                </div>

                <div class="chart my-4">
                   <canvas id="pie-chart4" class="chart-canvas" height="300"></canvas>
                </div>

                <div class="container-fluid px-0 mt-4">
                   <div class="row">
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #358fec;"></div>
                         <p class="mb-0 text-sm">Tour Operator</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #000000;"></div>
                         <p class="mb-0 text-sm">Private</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>

       <div class="col-12 col-md-4 custom-filter-statistics" style="display: none;">
          <div class="card">
             <div class="card-body">
                <div
                   class="d-flex gap-3 align-items-center justify-content-center"
                   style="background-image: url(../assets/images/service-details.png); background-size: cover; background-repeat: no-repeat; background-position: center; text-align: center; padding: 1rem;"
                >
                   <h6 style="margin: 0; color: white;">
                      TOTAL
                   </h6>
                   <h6 style="margin: 0; color: white;">
                      45
                   </h6>
                </div>

                <div class="d-flex gap-2 mt-3 flex-wrap">
                   <h6 class="mb-0">Tri Started:</h6>
                   <p class="mb-0">01/02/2023 - 10/30/2024</p>
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                   <h6 class="mb-0">Total começaram a viagem</h6>
                   <h6 class="mb-0">01/12/2024 - 16/12/2024</h6>
                </div>

                <div class="chart my-4">
                   <canvas id="pie-chart5" class="chart-canvas" height="300"></canvas>
                </div>

                <div class="container-fluid px-0 mt-4">
                   <div class="row">
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #358fec;"></div>
                         <p class="mb-0 text-sm">Brazil</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #eec447;"></div>
                         <p class="mb-0 text-sm">Salvador (Bahia)</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #6bbf50;"></div>
                         <p class="mb-0 text-sm">Goiania (Goias)</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #000000;"></div>
                         <p class="mb-0 text-sm">Belo Horizonte (Minas Gerais)</p>
                      </div>
                   </div>
                </div>

                <div style="width: 100%; height: 1px; background-color: #dadada; margin: 16px 0;"></div>

                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                   <h6 class="mb-0">Total começaram a viagem</h6>
                   <h6 class="mb-0">01/12/2024 - 16/12/2024</h6>
                </div>

                <div class="chart my-4">
                   <canvas id="pie-chart6" class="chart-canvas" height="300"></canvas>
                </div>

                <div class="container-fluid px-0 mt-4">
                   <div class="row">
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #358fec;"></div>
                         <p class="mb-0 text-sm">Tour Operator</p>
                      </div>
                      <div class="col-12 col-md-6 d-flex gap-2 align-items-center">
                         <div style="width: 12px; height: 12px; border-radius: 10px; background-color: #000000;"></div>
                         <p class="mb-0 text-sm">Private</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
@push('custom-js')
<script>
    document.getElementById("filter-btn").addEventListener("click", function () {
       document.querySelectorAll(".custom-filter-statistics").forEach((div) => {
          div.style.display = div.style.display === "none" ? "block" : "none";
       });
    });
 </script>
 <script>
    document.addEventListener("DOMContentLoaded", function () {
       document.querySelectorAll(".custom-card-handler").forEach((handler) => {
          handler.addEventListener("click", function () {
             const content = this.nextElementSibling;
             if (content.classList.contains("toggle-content")) {
                content.classList.toggle("d-none");
             }
          });
       });
    });
 </script>
 <script>
    document.addEventListener("DOMContentLoaded", function () {
       const radioButtons = document.querySelectorAll('input[name="reservation"]');
       const compareFields = document.querySelectorAll(".compare-fields");

       function toggleFields() {
          const selectedValue = document.querySelector('input[name="reservation"]:checked').value;

          if (selectedValue === "compare") {
             compareFields.forEach((field) => field.classList.remove("d-none"));
          } else {
             compareFields.forEach((field) => field.classList.add("d-none"));
          }
       }

       radioButtons.forEach((radio) => {
          radio.addEventListener("change", toggleFields);
       });

       toggleFields();
    });
 </script>
 <script>
    document.addEventListener("DOMContentLoaded", function () {
       const chartData = {
          "pie-chart": {
             labels: ["Salvador (Bahia)", "Goiania (Goias)", "Belo Horizonte (Minas Gerais)", "Brazil"],
             backgroundColor: ["#EEC447", "#6BBF50", "#000000", "#358FEC"],
             data: [15, 20, 12, 60],
          },
          "pie-chart2": {
             labels: ["Private", "Tour Operator"],
             backgroundColor: ["#000000", "#358FEC"],
             data: [50, 50],
          },
          "pie-chart3": {
             labels: ["Salvador (Bahia)", "Goiania (Goias)", "Belo Horizonte (Minas Gerais)", "Brazil"],
             backgroundColor: ["#EEC447", "#6BBF50", "#000000", "#358FEC"],
             data: [15, 20, 12, 60],
          },
          "pie-chart4": {
             labels: ["Private", "Tour Operator"],
             backgroundColor: ["#000000", "#358FEC"],
             data: [50, 50],
          },
          "pie-chart5": {
             labels: ["Salvador (Bahia)", "Goiania (Goias)", "Belo Horizonte (Minas Gerais)", "Brazil"],
             backgroundColor: ["#EEC447", "#6BBF50", "#000000", "#358FEC"],
             data: [15, 20, 12, 60],
          },
          "pie-chart6": {
             labels: ["Private", "Tour Operator"],
             backgroundColor: ["#000000", "#358FEC"],
             data: [50, 50],
          },
       };

       Object.keys(chartData).forEach((chartId) => {
          const chartElement = document.getElementById(chartId);
          if (chartElement) {
             const ctx = chartElement.getContext("2d");
             new Chart(ctx, {
                type: "pie",
                data: {
                   labels: chartData[chartId].labels,
                   datasets: [
                      {
                         label: "Projects",
                         weight: 9,
                         cutout: 0,
                         tension: 0.9,
                         pointRadius: 2,
                         borderWidth: 2,
                         backgroundColor: chartData[chartId].backgroundColor,
                         data: chartData[chartId].data,
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
          }
       });
    });
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