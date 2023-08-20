@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Marks</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Marks
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Marks Information</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Student ID : </label>
                                            <input name="student_id" class="form-control" type="text" placeholder="Enter Student ID">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Course ID : </label>
                                            <input name="course_id" class="form-control" type="text" placeholder="Enter Course ID">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Modiul ID : </label>
                                            <input name="modiul_id" class="form-control" type="text" placeholder="Enter Modiul ID">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Marks : </label>
                                            <input name="marks" class="form-control" type="text" placeholder="Enter Merker">
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