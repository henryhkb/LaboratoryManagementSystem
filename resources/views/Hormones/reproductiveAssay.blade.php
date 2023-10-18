@extends('layouts.sideMenu')
@section('content')
<div class="row row-sm" style="margin-top: 100px">
    
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <!--div-->
        <form action="{{url('/addLabResult')}}" method="post" >
            @csrf
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Hormones Assay
                </div>

                <div class="form-group">
                    <label for="patient_id">Patient ID</label>
                    <input type="text" name="patient_id" class="w-50 form-control" id="">
                </div>

                <div class="row row-sm  mt-3">
                    <div class="col">
                        <label for="">DOB</label>
                        <input type="date" name="date_of_birth" id="" class="form-control">
                    </div>

                    <div class="col">
                        <label for="">Lab No</label>
                        <input type="text" name="Lab_number" id="" class="form-control" placeholder="Laboratory Number">
                    </div>

                    <div class="col">
                        <label for="">Date</label>
                        <input type="date" name="today_Date" id="" class="form-control">
                    </div>
                </div>

                <div class="row row-sm mt-2">
                    <div class="col">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="Gender" id="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" id="" class="form-control">
                    </div>

                    <div class="col">
                        <label for="">Drawn Date & Time</label>
                        <input type="date" name="drawn_date_time" id="" class="form-control">
                    </div>
                </div>

                <div class="alert alert-primary mt-2 text text-center">
                    <h5>REPRODUCTIVE ASSAY</h5>
                </div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">HORMONE</th>
                        <th scope="col">LH</th>
                        <th scope="col">FSH</th>
                        <th scope="col">PROLACTIN</th>
                        <th scope="col">PROGESTERONE</th>
                        <th scope="col">OBSTROGEN</th>
                        <th scope="col">TESTOSTERONE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row fs-5">RESULTS</th>
                        <td><input type="text" name="LH" class="form-control"></td>
                        <td><input type="text" name="FSH" class="form-control"></td>
                        <td><input type="text" name="prolactin" class="form-control"></td>
                        <td><input type="text" name="progesterone" class="form-control"></td>
                        <td><input type="text" name="obstrogen" class="form-control"></td>
                        <td><input type="text" name="testosterone" class="form-control"></td>
                      </tr>
                    
                     
                    </tbody>
                </table>
 
                  <div class="alert alert-primary mt-2 text text-center">
                    <h5>REFERENCE VALUES</h5>
                </div>
                  <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">HORMONE</th>
                            <th scope="col">LH (mlu/mL)</th>
                            <th scope="col">FSH (mlu/mL)</th>
                            <th scope="col">PROLACTIN (ng/mL)</th>
                            <th scope="col">PROGESTERONE (ng/mL)</th>
                            <th scope="col">ESTRADIOL (pmol/L)</th>
                            <th scope="col">TESTOSTERONE (ng/mL)</th>
                          </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">FOLLICULAR</th>
                        <td>0.5 - 10.5</td>
                        <td>3.0 - 12.0</td>
                        <td>2.0 - 19.0</td>
                        <td>0.15 - 1.40</td>
                        <td>32.4 - 197.3</td>
                        <td>Children: 100 - 400</td>
                      </tr>

                      <tr>
                        <th scope="row">MID-CYCLE</th>
                        <td>18.4 - 61.2</td>
                        <td>8.0 - 22.0</td>
                        <td></td>
                        <td>2.0 - 19.0</td>
                        <td>40 - 195</td>
                        <td>Adult Females: 10 - 90</td>
                      </tr>

                      <tr>
                        <th scope="row">LUTEAL</th>
                        <td>1.5 - 10.5</td>
                        <td>2.0 - 12.0</td>
                        <td>2.0 - 19.0</td>
                        <td>2.00 - 20.00</td>
                        <td>43 - 240</td>
                        <td>Adult Females: 10 - 90</td>
                      </tr>

                      <tr>
                        <th scope="row">POST MENOPAUSAL</th>
                        <td>8.2 - 40.8</td>
                        <td>35.0 - 151.0</td>
                        <td>2.0 - 19.0</td>
                        <td>0.00 - 0.80</td>
                        <td>18.3 - 43.0</td>
                        <td></td>
                      </tr>

                      <tr>
                        <th scope="row">MEN</th>
                        <td>0.7 - 7.4</td>
                        <td>1.0 - 14.0</td>
                        <td>2.0 - 12.0</td>
                        <td>0.13 - 1.22</td>
                        <td>0 - 62.0</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <label for="">Comments:</label>
                    <textarea class="form-control" name="comments" id="" cols="90" rows="5"></textarea>
                  </div>

                  <div class="row">
                  <div class="col form-group">
                    <label for="">Result(s) Validated by:</label>
                    <select class="form-control" name="validated_by" id="">
                        <option value="Dr. Kwame">Dr. Kwame</option>
                    </select>
                  </div>

                  <div class="col">
                    <label for="date">Date</label>
                  </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="SUBMIT" class="btn btn-primary">
                </div>

                  <!--/div-->
                  <div class="alert alert-primary mt-2 text text-center" style="float: right">
                      <p>Diagnopharma Ltd Medical Laboratory Services</p>
                      <p>Copyright@2023 All Right Reserved.</p>
                      <p> Design: Henry K. Brandoh</p>
                      <p>Contact: +233 (0)57-678-7603</p>	
                  </div>
                
        </div>

        </form>

        
    </div>
  

</div>
<!-- /row -->

</div>
<!-- main-content closed -->
@endsection