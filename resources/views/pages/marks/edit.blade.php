@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Marks Edit</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('marks.update', $marks->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <!--form body start here-->
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Student ID : </label>
                                    <select name="student_id" class="form-control" id="">
                                        @foreach ($student as $student)
                                            <option value="{{ $student->id }}"{{ $student->id == $student->id ? 'selected' : '' }}>{{ $student->last_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('student_id')
                                            <strong class="">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Course ID : </label>
                                    <select name="course_id" class="form-control" id="">
                                        @foreach ($course as $course)
                                            <option value="{{ $course->id }}"{{ $course->id == $course->id ? 'selected' : '' }}>{{ $course->course_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('course_id')
                                            <strong class="">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Modiul ID : </label>
                                    <select name="modiul_id" class="form-control" id="">
                                        @foreach ($modiul as $modiul)
                                            <option value="{{ $modiul->id }}" {{ $modiul->id == $modiul->id ? 'selected' : '' }}>{{ $modiul->modiul_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('modiul_id')
                                            <strong class="">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Marks : </label>
                                    <input name="marks" value="{{ $marks->marks }}" class="form-control" type="text" placeholder="Enter Merker">
                                    <div class="text-danger">
                                        @error('marks')
                                            <strong class="">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--form body end -->
                            <div class="modal-footer">
                                <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

         
@endsection