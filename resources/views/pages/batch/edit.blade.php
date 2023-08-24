@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('batch.update', $batch->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-12">
                                <div class="col-sm-6 form-group">
                                    <label>Course Name :</label>
                                    <select name="course_id" class="form-control" id="">
                                        @foreach ($batch->course as $course)
                                            <option value="{{ $batch->course->id }}">{{ $batch->course->course_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Name : </label>
                                    <input name="name" value="{{ $batch->name }}" class="form-control" placeholder ="Enter Batch Name" type="text">
                                    
                                    <div class="text-danger">
                                        @error('description')
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