@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Modiul</div>
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Modiul
                        </button> --}}
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        {{-- <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Course</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div> --}}
                                <div class="container">
                                    <!--form body start here-->
                                    <div class="row mt-3">
                                        <div class="col-sm-6 form-group">
                                            <label>Modiul Name : </label>
                                            <input name="modiul_name" class="form-control" type="text" placeholder="Modiul Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Course Id : </label>
                                            <input name="course_id" class="form-control" type="text" placeholder="Course ID">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>Modiul Description : </label>
                                            <textarea name="description" class="form-control" placeholder ="Modiul Description" id="description" cols="10"rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-12 form-group text-right">
                                            <input type="submit" value="Add Modiul" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                                    <!--form body end -->
                                    {{-- ------------------ --}}
                            {{-- </div>
                        </div> --}}
                    </form>
                </div>
        
            </div>
        </div>
    </div> 
</div>

         
@endsection