@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Fees Edit</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('fees.update', $fees->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <!--form body start here-->
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Student Name : </label>
                                    <select name="student_id" class="form-control" id="">
                                        @foreach ($student as $student)
                                            <option value="{{ $student->id }}"{{ $student->id== $student->id ? 'selected' : '' }}>{{ $student->first_name }}</option>
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
                                    <input name="transaction_id" value="{{ $fees->transaction_id }}" class="form-control" type="text" placeholder="Enter Transaction ID">
                                    <div class="text-danger">
                                        @error('transaction_id')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Transaction Date  : </label>
                                    <input name="transaction_date" value="{{ $fees->transaction_date }}" class="form-control" type="date" placeholder="Enter Transaction Date">
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
                                    <input name="amount" value="{{ $fees->amount }}" class="form-control" type="text" placeholder=" Enter Amount">
                                    <div class="text-danger">
                                        @error('amount')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Payment Method : </label>
                                    <input name="payment_method"  value="{{ $fees->payment_method }}"  class="form-control" type="text" placeholder="Payment Method">
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
                                    <input name="receipt_number"  value="{{ $fees->receipt_number }}"  class="form-control" type="text" placeholder="Monye Receipt Number">
                                    <div class="text-danger">
                                        @error('receipt_number')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--form body end -->
                            <div class="modal-footer">
                                <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

         
@endsection