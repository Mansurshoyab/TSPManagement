@extends('master')


@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Certificate</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        @csrf
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-12">
                                <div class="col-sm-4 form-group">
                                    <label>Course Name :</label>
                                    <select name="course_id" class="form-control" id="">
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Category Name :</label>
                                    <select name="category_id" class="form-control" id="">
                                        @foreach ($category as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Student Name :</label>
                                    <select name="student_id" class="form-control" id="">
                                        @foreach ($student as $student)
                                            <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Grade :</label>
                                    <input type="text" name="grade" placeholder="Enter Grade" class="form-control">
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Issued date :</label>
                                    <input type="date" name="issue_date" class="form-control">
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Issued By :</label>
                                    <input type="text" name="issued_by" placeholder="Issued By" class="form-control">
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <input type="submit" value="Add Data" class="btn btn-primary">
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
                                <th class="col-md-2">Category Name</th>
                                <th class="col-md-2">Student Name</th>
                                <th class="col-md-2">Grade</th>
                                <th class="col-md-2">Issued Date</th>
                                <th class="col-md-2">Issued By</th>
                                <th class="col-md-2">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificate as $certificate)
                                    <tr>
                                        <td scope="row">{{ $certificate->id }}</td>
                                        <td>{{ $certificate->course->course_name }}</td>
                                        <td>{{ $certificate->category->name }}</td>
                                        <td>{{ $certificate->student->first_name }}</td>
                                        <td>{{ $certificate->grade }}</td>
                                        <td>{{ $certificate->issue_date }}</td>
                                        <td>{{ $certificate->issued_by }}</td>
                                        <td>
                                            <a href="{{ route('certificate.show', $certificate->id) }}"><i class="btn btn-primary">certificate</i></a>
                                            <a href="{{ route('certificate.edit', $certificate->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                            <form action="{{  route('certificate.destroy', $certificate->id) }}" method="POST">
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