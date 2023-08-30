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
                            <div class="row ">
                                <div class="col-sm-6 form-group">
                                    <label>Course Id : </label>
                                    <select name="course_id" id="" class="form-control">
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
                                    <label>Modiul Name : </label>
                                    <input name="modiul_name" class="form-control" type="text" placeholder="Modiul Name">
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
                                    <textarea name="description" class="form-control" placeholder ="Modiul Description" id="description" cols="10"rows="5"></textarea>
                                    <div class="description">
                                        @error('modiul_name')
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
            <table>
                <table class="table" id="myTable">
                    <thead>
                      <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-2">Course Name</th>
                        <th class="col-md-2">Modiul</th>
                        <th class="col-md-5">Description</th>
                        <th class="col-md-2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $index = 1;
                        @endphp
                        @foreach ($modiuls as $modiul)
                            <tr>
                                <td scope="row">{{ $index++ }}</td>
                                <td>{{ $modiul->course->course_name }}</td>
                                <td>{{ $modiul->modiul_name }}</td>
                                <td>{{ $modiul->description }}</td>
                                <td>
                                    {{-- <a href="{{ route('category.show', $category->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a> --}}
                                    <a href="{{ route('modiul.edit', $modiul->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                    <form action="{{  route('modiul.destroy', $modiul->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash3 text-lg"></i></i>
                                        </button>
                                    </form>
                                    {{-- <a href="{{ route('modiul.destroy', $modiul->id) }}"><i class="bi bi-trash3 text-lg p-1"></i></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </table>
        </div>
    </div> 
</div>

         
@endsection