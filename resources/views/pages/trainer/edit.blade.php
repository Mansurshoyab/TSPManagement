@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Information</div>
                </div>
                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('trainer.update', $trainer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container mt-3">
                            <!--form body start here-->
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>First Name</label>
                                    <input name="first_name" value="{{ $trainer->first_name }}" class="form-control"type="text"placeholder="Enter Your First Name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Last Name : </label>
                                    <input name="last_name" value="{{ $trainer->last_name }}" class="form-control"type="text"placeholder="Enter Your Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Date Of Birth : </label>
                                    <input name="dob" value="{{ $trainer->dob }}" class="form-control" type="date"placeholder="Enter Your Date Of Birth">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Email : </label>
                                    <input name="email" value="{{ $trainer->email }}" class="form-control"type="email"placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Phone : </label>
                                    <input name="phone" value="{{ $trainer->phone }}"  class="form-control"type="text"placeholder="Enter Your Number">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Experience : </label>
                                    <input name="experience" value="{{ $trainer->experience }}"class="form-control"type="text"placeholder="Enter Your Experience">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Specialization :</label>
                                    <input name="specialization" value="{{ $trainer->specialization }}" class="form-control"type="text"placeholder="Enter Your Specialization">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Status :</label>
                                    <select name="status" class="form-control">
                                        <option value="">---SELECT---</option>
                                        <option value="1" {{ $trainer->status === 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="2"{{ $trainer->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>address :</label>
                                    <textarea name="address" class="form-control"placeholder="address" id="" cols="2"rows="1">{{ $trainer->address }}</textarea>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </div>
                            <!--form body end -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

         
@endsection