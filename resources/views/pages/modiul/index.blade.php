@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Modiul</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('modiul.index') }}" method="POST">
                        @csrf
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-3">
                                <div class="col-sm-6 form-group">
                                    <label>Modiul Name : </label>
                                    <input name="modiul_name" class="form-control" type="text" placeholder="Modiul Name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Course Id : </label>
                                    <select name="course_id" id="" class="form-control">
                                        @foreach ($course as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                        @endforeach
                                        
                                    </select>
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