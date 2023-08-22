@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Fees Collection</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Fees
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('fees.index') }}" method="POST">
                        @csrf
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Fees Information</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Student Name : </label>
                                            <select name="student_id" class="form-control" id="">
                                                @foreach ($student as $student)
                                                    <option value="{{ $student->id }}">{{ $student->last_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @error('student_id')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Course Name : </label>
                                            <select name="course_id"  class="form-control" id="">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Transaction ID : </label>
                                            <input name="transaction_id" class="form-control" type="text" placeholder="Enter Transaction ID">
                                            <div class="text-danger">
                                                @error('transaction_id')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Transaction Date  : </label>
                                            <input name="transaction_date" class="form-control" type="date" placeholder="Enter Transaction Date">
                                            <div class="text-danger">
                                                @error('transaction_date')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Amount : </label>
                                            <input name="amount" class="form-control" type="text" placeholder=" Enter Amount">
                                            <div class="text-danger">
                                                @error('amount')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Payment Method : </label>
                                            <input name="payment_method" class="form-control" type="text" placeholder="Payment Method">
                                            <div class="text-danger">
                                                @error('payment_method')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Receipt Number : </label>
                                            <input name="receipt_number" class="form-control" type="text" placeholder="Monye Receipt Number">
                                            <div class="text-danger">
                                                @error('receipt_number')
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
            <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th class="col-md-0">ID</th>
                    <th class="col-md-2">Student Id </th>
                    <th class="col-md-1">Course Id</th>
                    <th class="col-md-2">Transaction Id</th>
                    <th class="col-md-2">Transaction Date</th>
                    <th class="col-md-1">Amount</th>
                    <th class="col-md-2">Payment Method</th>
                    <th class="col-md-2">Receipt Number</th>
                    <th class="col-md-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($fees as $fee)
                        <tr>
                            <td scope="row">{{ $fee->id }}</td>
                            <td>{{ $fee->student->last_name }}</td>
                            <td>{{ $fee->course->course_name }}</td>
                            <td>{{ $fee->transaction_id }}</td>
                            <td>{{ $fee->transaction_date }}</td>
                            <td>{{ $fee->amount }}</td>
                            <td>{{ $fee->payment_method }}</td>
                            <td>{{ $fee->receipt_number }}</td>
                            <td>
                                {{-- <a href="{{ route('category.show', $category->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a> --}}
                                <a href="{{ route('fees.edit', $fee->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                <form action="{{  route('fees.destroy', $fee->id) }}" method="POST">
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