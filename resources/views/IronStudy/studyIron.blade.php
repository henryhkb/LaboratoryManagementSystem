@extends('layouts.sideMenu')
@section('content')

<div class="row row-sm" style="margin-top: 100px">
    
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <form action="{{url('/addIronStudy')}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Iron Study
                    </div>

                    <div class="form-group">
                        <label for="patient_id">Patient ID</label>
                        <input type="text" name="patient_id" class="w-50 form-control" id="">
                    </div>

                    <div class="row row-sm  mt-3">
                        <div class="col">
                            <label for="">DOB</label>
                            <input type="date" name="dob" id="" class="form-control">
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
                            <input type="text" name="Name" id="" class="form-control" placeholder="Enter Patient Name">
                        </div>
    
                        <div class="col">
                            <label for="">Drawn Date & Time</label>
                            <input type="date" name="drawn_date_time" id="" class="form-control">
                        </div>
                    </div>

                    <div class="alert alert-primary mt-2 text text-center">
                        <h5>******************** IRON STUDY ********************</h5>
                    </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Test Required</th>
                            <th scope="col">Results</th>
                            <th scope="col">Unit</th>
                            <th scope="col">REF. Range</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row fs-5">Ferritin</th>
                            <td class="half">
                                <input type="number" name="Ferritin" class="form-control">
                                <input type="number" name="Ferritin" class="form-control">
                            </td>
                            <td><label for="ng/mL">ng/mL</label></td>
                            
                            <td class="half">
                                <label for="Male-Range">Male - (17.9 - 464.0)</label> <br/>
                                <label for="Male-Range">Female - < 50yrs-(6.24-137.00)</label><br>
                                <label for="Male-Range">Female -≥ 50yrs-(11.1-264.0)</label>
                            </td>
                          </tr>

                         

                          <tr>
                            <th scope="row fs-5">Iron</th>
                            <td><input type="text" name="Iron" class="form-control"></td>
                            <td>
                                <label for="ng/mL">umo/L</label><br/>
                                <label for="ng/mL">umo/L</label>
                            </td>

                            <td>
                                <label for="Male-Range">Male - (8.8 - 32.4)</label><br>
                                <label for="Male-Range">Male - (6.6 - 30.4)</label>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row fs-5">TIBC</th>
                            <td><input type="text" name="TIBC" class="form-control"></td>
                            <td>
                                <label for="ng/mL">umo/L</label><br/>
                                <label for="ng/mL">umo/L</label>
                            </td>

                            <td>
                                <label for="Male-Range">Male - (46.8 - 82.7)</label><br>
                                <label for="Male-Range">Male - (47.4 - 89.0)</label>
                            </td>
                          </tr>
                        
                         <tr>
                            <th scope="row">Folate</th>
                            <td><input type="text" name="Folate" class="form-control"></td>
                            <td><label for="ng/mL">ng/mL</label></td>
                            <td><label for="number">2.76 - 20.00</label></td>
                         </tr>

                         <tr>
                            <th scope="row">Vitamin B<sub>12</sub></th>
                            <td><input type="text" name="VitaminB12" class="form-control"></td>
                            <td><label for="pg/mL">pg/mL</label></td>
                            <td><label for="number">239 - 931</label></td>
                         </tr>

                         <tr>
                            <th scope="row">Transfering</th>
                            <td><input type="text" name="Transfering" class="form-control"></td>
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

                
            </div>
        </form>
    </div>
</div>

@endsection