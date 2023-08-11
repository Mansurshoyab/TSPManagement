@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Information</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Course
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Course</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Course Name : </label>
                                            <input name="course_name" class="form-control" type="text" placeholder="Course Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Course Subject : </label>
                                            <input name="course_sub" class="form-control" type="text" placeholder="Course Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Trainer : </label>
                                            <input name="trainer" class="form-control" type="text" placeholder="Trainer Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Course Duretion : </label>
                                            <input name="course_duretion" class="form-control" type="text" placeholder="Course Duretion">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>StartDate : </label>
                                            <input name="start_date" class="form-control" type="date" placeholder="Course Duretion">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Course Fee : </label>
                                            <input name="course_fee" class="form-control" type="text" placeholder="Unit Price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>End Date :</label>
                                            <input name="end_date" class="form-control" type="date" placeholder="End Date">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Location :</label>
                                            <textarea name="location" class="form-control" placeholder ="Location" id="" cols="2"rows="1"></textarea>
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