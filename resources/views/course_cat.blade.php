@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Category</div>
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Category
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
                                        <div class="col-sm-12 form-group">
                                            <label>Course Name :</label>
                                            <select name="name" class="form-control" id="">
                                                <option value="">---SELECT---</option>
                                                <option value="Java">Java</option>
                                                <option value="JavaScript">Java Script</option>
                                                <option value="C">C</option>
                                                <option value="C++">C++</option>
                                                <option value="PHP">PHP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>Course Description : </label>
                                            <textarea name="description" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-12 form-group text-right">
                                            <input type="submit" value="Add Category" class="btn btn-primary">
                                        </div>
                                    </div>
                                    <!--form body end -->
                                </div>
                                {{-- <div class="modal-footer">
                                    <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                </div> --}}
                            {{-- </div>
                        </div> --}}
                    </form>
                </div>
        
            </div>
        </div>
    </div> 
</div>

         
@endsection