@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Student Information</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Student
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Student</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Name : </label>
                                            <input name="first_name" class="form-control" type="text" placeholder="Enter Your First Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name : </label>
                                            <input name="last_name" class="form-control" type="text" placeholder="Enter Your Last Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Date Of Birth : </label>
                                            <input name="dob" class="form-control" type="dob" placeholder=" Enter Your Date Of Birth">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Email : </label>
                                            <input name="email" class="form-control" type="email" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Phone : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Enter Your Number">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Gender : </label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="">---Select Option---</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>address : </label>
                                            <textarea name="address" class="form-control" placeholder ="address" id="" cols="2"rows="1"></textarea>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Addmission Date :</label>
                                            <input name="admission_date" class="form-control" type="date" placeholder="Enter Your Addmimite Date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Major :</label>
                                            <input name="major" class="form-control" type="text" placeholder="Enter Your Subject">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Course Id :</label>
                                            <input name="course_id" class="form-control" type="text" placeholder="Enter Your Course Id">
                                        </div>
                                    </div>
                                    <!--form body end -->
                                </div>
                                <div class="modal-footer">
                                    <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        
            </div>
        </div>
    </div> 
</div>

         
@endsection