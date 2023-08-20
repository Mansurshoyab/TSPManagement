@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Student Information</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Student
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Student</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Course Id :</label>
                                            <select name="course_id"  class="form-control"  id="">
                                                @foreach ($course as $course)
                                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>First Name : </label>
                                            <input name="first_name" class="form-control" type="text" placeholder="Enter Your First Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name : </label>
                                            <input name="last_name" class="form-control" type="text" placeholder="Enter Your Last Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Date Of Birth : </label>
                                            <input name="dob" class="form-control" type="date" placeholder=" Enter Your Date Of Birth">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Email : </label>
                                            <input name="email" class="form-control" type="email" placeholder="Enter Your Email">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Phone : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Enter Your Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Gender : </label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="">---Select Option---</option>
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>address : </label>
                                            <textarea name="address" class="form-control" placeholder ="address" id="" cols="2"rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Addmission Date :</label>
                                            <input name="admission_date" class="form-control" type="date" placeholder="Enter Your Addmimite Date">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Major :</label>
                                            <select name="major" class="form-control" id="">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
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
            <table>
                <table class="table" id="myTable">
                    <thead>
                      <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-1">Course Id</th>
                        <th class="col-md-2">First Name</th>
                        <th class="col-md-2">Last Name</th>
                        <th class="col-md-1">DOB</th>
                        <th class="col-md-1">Email</th>
                        <th class="col-md-1">Phone</th>
                        <th class="col-md-2">address</th>
                        <th class="col-md-1">Gender</th>
                        <th class="col-md-1">Addmission Date</th>
                        <th class="col-md-1">Major</th>
                        <th class="col-md-1">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $student)
                            <tr>
                                <td scope="row">{{ $student->id }}</td>
                                <td>{{ $student->course->course_name }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->admission_date }}</td>
                                <td>
                                   
                                    {{-- {{ $student->category ? $student->category->name : 'N/A' }} --}}

                                    {{-- @foreach($categories as $category) 
                                        <h1>{{ $category }}</h1>
                                    @endforeach --}}
                                    @foreach ($categories as $category)
                                        @if ($category->id == $student->id )
                                        {{ $category->name }}
                                        @endif
                                        {{-- <option value="{{ $category->id }}">{{ $category->name }}</option> --}}
                                    @endforeach

                                </td>
                                {{-- <td>{{ $student->category->name }}</td> --}}
                                <td>
                                    {{-- <a href="{{ route('category.show', $category->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a> --}}
                                    <a href="{{ route('student.edit', $student->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                    <form action="{{  route('student.destroy', $student->id) }}" method="POST">
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