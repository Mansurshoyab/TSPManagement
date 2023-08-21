@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Marks</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Marks
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Marks Information</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Student ID : </label>
                                            <select name="student_id" class="form-control" id="">
                                                @foreach ($student as $student)
                                                    <option value="{{ $student->id }}">{{ $student->last_name }}</option>
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
                                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                @endforeach
                                                <div class="text-danger">
                                                    @error('course_id')
                                                        <strong class="">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Modiul ID : </label>
                                            <select name="modiul_id" class="form-control" id="">
                                                @foreach ($modiul as $modiul)
                                                    <option value="{{ $modiul->id }}">{{ $modiul->modiul_name }}</option>
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
                                            <input name="marks" class="form-control" type="text" placeholder="Enter Merker">
                                            <div class="text-danger">
                                                @error('marks')
                                                    <strong class="">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--form body end -->
                                </div>
                                <div class="modal-footer">
                                    <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-2">Student Id </th>
                    <th class="col-md-1">Course Id</th>
                    <th class="col-md-2">Modiul ID</th>
                    <th class="col-md-2">Marks</th>
                    <th class="col-md-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($marks as $marks)
                        <tr>
                            <td scope="row">{{ $marks->id }}</td>
                            <td>{{ $marks->student->last_name }}</td>
                            <td>{{ $marks->course->course_name }}</td>
                            <td>{{ $marks->modiul->modiul_name }}</td>
                            <td>{{ $marks->marks }}</td>
                            <td>
                                {{-- <a href="{{ route('category.show', $category->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a> --}}
                                <a href="{{ route('marks.edit', $marks->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                <form action="{{  route('marks.destroy', $marks->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash3 text-lg"></i></i>
                                    </button>
                                </form>
                                {{-- <a href="{{ route('modiu/l.destroy', $modiul->id) }}"><i class="bi bi-trash3 text-lg p-1"></i></i></a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div> 
</div>

         
@endsection