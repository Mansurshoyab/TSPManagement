@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Information</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('course.index') }}" method="POST">
                        @csrf
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-3">
                                <div class="col-sm-6 form-group">
                                    <label>Course Name : </label>
                                    <input name="course_name" class="form-control" type="text" placeholder="Course Name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Course category : </label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name  }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Course Description : </label>
                                    <textarea name="description" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Trainer : </label>
                                    <select name="trainer_id" class="form-control" id="">
                                        @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}"> {{ $trainer->first_name }} {{ $trainer->last_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Course Duretion : </label>
                                    <input name="course_duretion" class="form-control" type="text" placeholder="Course Duretion">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Start Date : </label>
                                    <input name="start_date" class="form-control" type="date" placeholder="Course Duretion">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Course Fee : </label>
                                    <input name="course_fee" class="form-control" type="text" placeholder="Course Fees">
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
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <input type="submit" value="Add Course" class="btn btn-primary">
                                </div>
                            </div>
                            <!--form body end -->
                        </div>
                    </form>
                </div>
            </div>
            
            <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course category</th>
                    <th scope="col">Course Description</th>
                    <th scope="col">Trainer</th>
                    <th scope="col">Course Duretion</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Course Fee</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                  <tr>
                    <th scope="row">{{ $course->id }}</th>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->category->name }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->trainer->first_name.' '.$course->trainer->last_name }}</td>
                    <td>{{ $course->course_duretion }}</td>
                    <td>{{ $course->start_date }}</td>
                    <td>{{ $course->end_date }}</td>
                    <td>{{ $course->course_fee }}</td>
                    <td>{{ $course->location}}</td>
                    <td>
                        {{-- <a href="#"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a> --}}
                        <a href="{{ route('course.edit', $course->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                        <form action="{{  route('course.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash3 text-lg"></i></i>
                            </button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

        </div>  
    </div> 
</div>

         
@endsection