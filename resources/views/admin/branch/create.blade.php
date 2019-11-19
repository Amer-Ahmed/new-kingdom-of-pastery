@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add New Branch</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.branch.index')}}">Back</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Branch Details</h3>
            </div>
            <form role="form" autocomplete="off">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputArabicName">Arabic Name</label>
                      <input type="text" class="form-control" id="exampleInputArabicName" placeholder="Enter Arabic Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEnglishName">English Name</label>
                      <input type="text" class="form-control" id="exampleInputEnglishName" placeholder="Enter English Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputCity">City</label>
                      <select class="form-control" id="exampleInputCity">
                        <option>city 1</option>
                        <option>city 2</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputArea">Area</label>
                      <select class="form-control" id="exampleInputArea">
                        <option>area 1</option>
                        <option>area 2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputAddressDescription"> Address Description</label>
                      <textarea class="form-control" id="exampleInputAddressDescription"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputFirstPhone">First Phone</label>
                      <input type="text" class="form-control" id="exampleInputFirstPhone" placeholder="Enter First Phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputSecondPhone">Second Phone</label>
                      <input type="text" class="form-control" id="exampleInputSecondPhone" placeholder="Enter Second Phone">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="exampleInputServiceType">ServiceType</label>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="icheck-primary d-inline">
                            <input type="checkbox" id="delivery">
                            <label for="delivery">
                               Delivery
                            </label>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="icheck-primary d-inline">
                            <input type="checkbox" id="takeaway">
                            <label for="takeaway">
                              Take away
                            </label>
                        </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Working Days</h3>
                      </div>
                      <div class="card-body">
                        <div id="accordion">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseWorkingDays" class="collapsed" aria-expanded="false">
                                  Add Working Days For This Branch
                                </a>
                              </h4>
                            </div>
                            <div id="collapseWorkingDays" class="panel-collapse in collapse" style="">
                              <div class="card-body">
                                <div class="row py-1">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="Sunday">
                                        <label for="Sunday">
                                           Sunday
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                          <label>From:</label>
                                          <div class="input-group date" id="timepicker1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker1">
                                            <div class="input-group-append" data-target="#timepicker1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                          <label>To:</label>

                                          <div class="input-group date" id="timepicker2" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker2">
                                            <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="Monday">
                                        <label for="Monday">
                                           Monday
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                          <label>From:</label>
                                          <div class="input-group date" id="timepicker3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker3">
                                            <div class="input-group-append" data-target="#timepicker3" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                          <label>To:</label>

                                          <div class="input-group date" id="timepicker4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker4">
                                            <div class="input-group-append" data-target="#timepicker4" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="Tuesday">
                                        <label for="Tuesday">
                                           Tuesday
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                          <label>From:</label>
                                          <div class="input-group date" id="timepicker5" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker5">
                                            <div class="input-group-append" data-target="#timepicker5" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                          <label>To:</label>

                                          <div class="input-group date" id="timepicker6" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker6">
                                            <div class="input-group-append" data-target="#timepicker6" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="Wednesday">
                                        <label for="Wednesday">
                                           Wednesday
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                          <label>From:</label>
                                          <div class="input-group date" id="timepicker7" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker7">
                                            <div class="input-group-append" data-target="#timepicker7" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                          <label>To:</label>

                                          <div class="input-group date" id="timepicker8" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker8">
                                            <div class="input-group-append" data-target="#timepicker8" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="Thursday">
                                        <label for="Thursday">
                                           Thursday
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                          <label>From:</label>
                                          <div class="input-group date" id="timepicker9" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker9">
                                            <div class="input-group-append" data-target="#timepicker9" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                          <label>To:</label>

                                          <div class="input-group date" id="timepicker10" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker10">
                                            <div class="input-group-append" data-target="#timepicker10" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="Friday">
                                        <label for="Friday">
                                           Friday
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                          <label>From:</label>
                                          <div class="input-group date" id="timepicker11" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker11">
                                            <div class="input-group-append" data-target="#timepicker11" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                          <label>To:</label>

                                          <div class="input-group date" id="timepicker12" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker12">
                                            <div class="input-group-append" data-target="#timepicker12" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="Saturday">
                                        <label for="Saturday">
                                           Saturday
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                          <label>From:</label>
                                          <div class="input-group date" id="timepicker13" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker13">
                                            <div class="input-group-append" data-target="#timepicker13" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                          <label>To:</label>

                                          <div class="input-group date" id="timepicker14" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker14">
                                            <div class="input-group-append" data-target="#timepicker14" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Delivery Areas</h3>
                      </div>
                      <div class="card-body">
                        <div id="accordion">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseDeliveryAreas" class="collapsed" aria-expanded="false">
                                  Add Delivery Areas For This Branch
                                </a>
                              </h4>
                            </div>
                            <div id="collapseDeliveryAreas" class="panel-collapse in collapse" style="">
                              <div class="card-body">
                                <div class="row py-3">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="exampleInputDelieveryCity">Select City</label>
                                            <select class="form-control" id="exampleInputDelieveryCity" onchange="showCityArea(this)">
                                              <option>Select Delivery City</option>
                                              <option value="city1">city 1</option>
                                              <option value="city2">city 2</option>
                                              <option value="city3">city 3</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="areaCity1">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea1">
                                            <label for="deliveryarea1">
                                              City1 Delivery Area 1
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City1 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City1 Delivery Area 2
                                            </label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City1 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City1 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City1 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City1 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="areaCity2">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea1">
                                            <label for="deliveryarea1">
                                              City2 Delivery Area 1
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City2 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City2 Delivery Area 2
                                            </label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City2 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City2 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City2 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City2 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="areaCity3">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea1">
                                            <label for="deliveryarea1">
                                              City3 Delivery Area 1
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City3 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City3 Delivery Area 2
                                            </label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City3 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City3 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City3 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="deliveryarea2">
                                            <label for="deliveryarea2">
                                              City3 Delivery Area 2
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
              </div>
            </form>
          </div>
        </div>
  </section>
</div>
@endsection
@push('js')
<script>
$( document ).ready(function() {
  document.getElementById('areaCity1').style.display = "none";
  document.getElementById('areaCity2').style.display = "none";
  document.getElementById('areaCity3').style.display = "none";
});
function showCityArea(select) {
  if (select.value=='city1') {
      document.getElementById('areaCity1').style.display = "block";
      document.getElementById('areaCity2').style.display = "none";
      document.getElementById('areaCity3').style.display = "none";
  } else if (select.value=='city2') {
      document.getElementById('areaCity1').style.display = "none";
      document.getElementById('areaCity2').style.display = "block";
      document.getElementById('areaCity3').style.display = "none";
  } else if (select.value=='city3') {
      document.getElementById('areaCity1').style.display = "none";
      document.getElementById('areaCity2').style.display = "none";
      document.getElementById('areaCity3').style.display = "block";
  } else {
      document.getElementById('areaCity1').style.display = "none";
      document.getElementById('areaCity2').style.display = "none";
      document.getElementById('areaCity3').style.display = "none";
  }
}
</script>
@endpush