@extends('master')


@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Batch</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        @csrf
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-12">
                                <div class="col-sm-6 form-group">
                                    <label>Course Name :</label>
                                    <select name="course_id" class="form-control" id="">
                                        @foreach ($course as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
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
                                    <input name="name" class="form-control" placeholder ="Enter Batch Name" type="text">
                                    
                                    <div class="text-danger">
                                        @error('description')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <input type="submit" value="Add Batch" class="btn btn-primary">
                                </div>
                            </div>
                            <!--form body end -->
                        </div>
                    </form>
                </div>
            </div>

                <div class="container">
                    <table>
                        <table class="table" id="myTable">
                            <thead class="">
                              <tr class="mt-5">
                                <th class="col-md-2">ID</th>
                                <th class="col-md-2">Course Name</th>
                                <th class="col-md-2">Batch Name</th>
                                <th class="col-md-2">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($batch as $batch)
                                    <tr>
                                        <td scope="row">{{ $batch->id }}</td>
                                        <td>{{ $batch->course->course_name }}</td>
                                        <td>{{ $batch->name }}</td>
                                        <td>
                                            {{-- <a href="{{ route('batch.show', $name->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a> --}}
                                            <a href="{{ route('batch.edit', $batch->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                            <form action="{{  route('batch.destroy', $batch->id) }}" method="POST">
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
                    </table>
                </div>
        </div>
    </div> 
</div>

         
@endsection