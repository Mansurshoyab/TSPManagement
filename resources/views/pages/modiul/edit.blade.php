@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Modiul</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('modiul.update', $modiul->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-3">
                                <div class="col-sm-6 form-group">
                                    <label>Course Id : </label>
                                    <select name="course_id" id="" class="form-control">
                                        @foreach ($course as $course)
                                        <option value="{{ $course->id }}" {{ $modiul->course_id == $course->id ? 'selected' : '' }}>
                                            {{ $course->course_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('course_id')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Modiul Name : </label>
                                    <input name="modiul_name" value="{{ $modiul->modiul_name }}" class="form-control" type="text" placeholder="Modiul Name">
                                    <div class="text-danger">
                                        @error('modiul_name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Modiul Description : </label>
                                    <textarea name="description" value="setab" class="form-control" placeholder ="Modiul Description" id="description" cols="10"rows="5">{{ $modiul->description }}</textarea>
                                    <div class="text-danger">
                                        @error('description')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <input type="submit" value="Add Modiul" value="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                        <!--form body end -->
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

         
@endsection