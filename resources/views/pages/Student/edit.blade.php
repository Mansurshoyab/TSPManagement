@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Student Information</div>
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Student
                        </button> --}}
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="container">
                                <!--form body start here-->
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Course Id :</label>
                                        <select name="course_id"  class="form-control"  id="">
                                            @foreach ($course as $course)
                                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger">
                                            @error('course_id')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>First Name : </label>
                                        <input name="first_name" value="{{ $student->first_name }}" class="form-control" type="text" placeholder="Enter Your First Name">
                                        <div class="text-danger">
                                            @error('first_name')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Last Name : </label>
                                        <input name="last_name" value="{{ $student->last_name }}"  class="form-control" type="text" placeholder="Enter Your Last Name">
                                        <div class="text-danger">
                                            @error('last_name')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Date Of Birth : </label>
                                        <input name="dob" value="{{ $student->dob }}" class="form-control" type="date" placeholder=" Enter Your Date Of Birth">
                                        <div class="text-danger">
                                            @error('dob')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Email : </label>
                                        <input name="email" value="{{ $student->email }}" class="form-control" type="email" placeholder="Enter Your Email">
                                        <div class="text-danger">
                                            @error('email')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Phone : </label>
                                        <input name="phone" value="{{ $student->phone }}" class="form-control" type="text" placeholder="Enter Your Number">
                                        <div class="text-danger">
                                            @error('phone')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Gender : </label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="">---Select Option---</option>
                                            <option value="0"{{ $student->gender === 0 ? 'selected' : '' }}>Male</option>
                                            <option value="1" {{ $student->gender === 1 ? 'selected' : '' }}>Female</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('gender')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>address : </label>
                                        <textarea name="address" class="form-control" placeholder ="address" id="" cols="2"rows="1">{{ $student->address }}</textarea>
                                        <div class="text-danger">
                                            @error('address')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Addmission Date :</label>
                                        <input name="admission_date" value="{{ $student->admission_date }}" class="form-control" type="date" placeholder="Enter Your Addmimite Date">
                                        <div class="text-danger">
                                            @error('admission_date')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Payment Status :</label>
                                        <select name="status" class="form-control" id="">
                                            <option value="due">Due</option>
                                            <option value="paid">Paid</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('admission_date')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Major :</label>
                                        <select name="category_id" class="form-control" id="">
                                            @foreach ($category as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger">
                                            @error('major')
                                                <strong class="font-weight-bold">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--form body end -->
                                <div class="modal-footer">
                                    <button name="submit" class="btn btn-primary px-4 mb-5" type="submit">Update</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

         
@endsection