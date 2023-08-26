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
                                            <select name="course_id"  class="form-control"  id="course_id">
                                                @foreach ($course as $course)
                                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <script>
                                                let courseId = document.querySelector('#course_id');
                                                courseId.addEventListener('change', function () {
                                                            $.post("http://localhost/R55/TSPManagement/public/admin/getAll",
                                                            {
                                                                id: "Donald Duck",
                                                            },
                                                            function(data, status){
                                                                alert("Data: " + data + "\nStatus: " + status);
                                                            });
                                                })
                                            </script> --}}
                                            <div class="text-danger">
                                                @error('course_id')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Batch Id :</label>
                                            <select name="batch_id"  class="form-control"  id="">
                                                {{-- {{ dd($course->batches) }} --}}
                                                @foreach ($batch as $batch)
                                                    <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @error('course_id')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Name : </label>
                                            <input name="first_name" class="form-control" type="text" placeholder="Enter Your First Name">
                                            <div class="text-danger">
                                                @error('first_name')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name : </label>
                                            <input name="last_name" class="form-control" type="text" placeholder="Enter Your Last Name">
                                            <div class="text-danger">
                                                @error('last_name')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Date Of Birth : </label>
                                            <input name="dob" class="form-control" type="date" placeholder=" Enter Your Date Of Birth">
                                            <div class="text-danger">
                                                @error('dob')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Email : </label>
                                            <input name="email" class="form-control" type="email" placeholder="Enter Your Email">
                                            <div class="text-danger">
                                                @error('email')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Phone : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Enter Your Number">
                                            <div class="text-danger">
                                                @error('phone')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Gender : </label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="">---Select Option---</option>
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                            </select>
                                            <div class="text-danger">
                                                @error('gender')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>address : </label>
                                            <textarea name="address" class="form-control" placeholder ="address" id="" cols="2"rows="1"></textarea>
                                            <div class="text-danger">
                                                @error('address')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Addmission Date :</label>
                                            <input name="admission_date" class="form-control" type="date" placeholder="Enter Your Addmimite Date">
                                            <div class="text-danger">
                                                @error('admission_date')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Payment Status :</label>
                                                <select name="status" class="form-control" id="">
                                                    <option value="due">Due</option>
                                                    <option value="paid">Paid</option>
                                                </select>
                                            <div class="text-danger">
                                                @error('status')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Major :</label>
                                            <select name="category_id" class="form-control" id="">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @error('category_id')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
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
            <div class="container">
            <table>
                <table class="table" id="myTable">
                    <thead>
                      <tr>
                        <th class="col-md-">ID</th>
                        <th class="col-md-2">Course Id</th>
                        <th class="col-md-2">First Name</th>
                        <th class="col-md-2">Last Name</th>
                        <th class="col-md-1">Email</th>
                        <th class="col-md-1">Phone</th>
                        <th class="col-md-2">Payment Status</th>
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
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>

                                @php
                                $totalAmount = 0; // Initialize the variable to store the total sum
                                @endphp

                                @forelse ($student->payments as $payment)
                                    @php
                                        $totalAmount += $payment->amount; // Add the current payment amount to the total
                                    @endphp
                                @empty
                                @endforelse
                                
                                @if ($totalAmount >= $course->course_fee)
                                    <td class="text-primary text-capitalize fw-bold">Paid</td>
                                @else
                                    <td class="text-danger text-capitalize fw-bold">Due</td>
                                @endif
                                <td>{{ $student->category->name }}</td>
                                <td>
                                    <a href="{{ route('student.edit', $student->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                    <a href="{{ route('student.show', $student->id) }}"><i class="bi bi-eye text-lg p-1"></i></i></a>
                                    <form action="{{  route('student.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div></div>
                                        <button type="submit" class="no-border">
                                            <i class="bi bi-trash"></i></i>
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

<style>
    /* Remove default button styling */
    button.no-border {
      border: none;
      background-color: transparent;
      padding: 0;
    }
  
    button.no-border .bi {
      font-size: 1.4rem; 
      color: #f5423c; 
    }
  </style>     
@endsection