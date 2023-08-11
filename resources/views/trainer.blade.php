@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Trainer Information</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Trainer
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Trainer</h5>
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
                                            <label>Experience : </label>
                                            <input name="experience" class="form-control" type="text" placeholder="Enter Your Experience">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Specialization :</label>
                                            <input name="specialization" class="form-control" type="text" placeholder="Enter Your Specialization">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Status :</label>
                                            <select name="status" class="form-control">
                                                <option value="">---SELECT---</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>address :</label>
                                            <textarea name="address" class="form-control" placeholder ="address" id="" cols="2"rows="1"></textarea>
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