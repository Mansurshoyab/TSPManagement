@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('course.update', $course->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-3">
                                <div class="col-sm-6 form-group">
                                    <label>Course Name : </label>
                                    {{-- {{ dd($courses) }} --}}
                                    <input name="course_name" value="{{ $course->course_name }}" class="form-control" type="text" placeholder="Course Name">
                                    <div class="text-danger">
                                        @error('course_name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Course category : </label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('category_id')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Course Description : </label>
                                    <textarea name="description" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5">{{ $course->description }}</textarea>
                                    <div class="text-danger">
                                        @error('description')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Trainer : </label>
                                    <select name="trainer_id" class="form-control" id="">
                                        @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}" {{ $trainer->first_name == $trainer->first_name , $trainer->last_name == $trainer->last_name ? 'selected' : '' }} > {{ $trainer->first_name }} {{ $trainer->last_name }} </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('trainer_id')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Course Duretion : </label>
                                    <input name="course_duretion" value="{{ $course->course_duretion }}" class="form-control" type="text" placeholder="Course Duretion">
                                    <div class="text-danger">
                                        @error('course_duretion')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Start Date : </label>
                                    <input name="start_date" value="{{ $course->start_date }}" class="form-control" type="date" placeholder="Course Duretion">
                                    <div class="text-danger">
                                        @error('start_date')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Course Fee : </label>
                                    <input name="course_fee" value="{{ $course->course_fee }}" class="form-control" type="text" placeholder="Course Fees">
                                    <div class="text-danger">
                                        @error('course_fee')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>End Date :</label>
                                    <input name="end_date" value="{{ $course->end_date }}" class="form-control" type="date" placeholder="End Date">
                                    <div class="text-danger">
                                        @error('end_date')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Location :</label>
                                    <textarea name="location" value="" class="form-control" placeholder ="Location" id="" cols="2"rows="1">{{ $course->location }}</textarea>
                                    <div class="text-danger">
                                        @error('location')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
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