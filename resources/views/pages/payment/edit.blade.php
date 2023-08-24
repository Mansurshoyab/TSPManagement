@extends('master')


@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Category</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('payment.update', $payment->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <!--form body start here-->
                            <div class="row col-md-12 mt-3">
                                <div class="col-md-6 form-group">
                                    <label>Student Name :</label>
                                    <select name="student_id" class="form-control" id="">
                                        @foreach ($student as $student)
                                            <option value="{{ $student->id }}">{{ $student->first_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('student_name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Amount :</label>
                                    <input type="text" name="amount" value="{{ $payment->amount }}" class="form-control" placeholder="Enter Course Name">
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Payment Comment : </label>
                                    <textarea name="comment" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5">{{ $payment->comment }}</textarea>
                                    <div class="text-danger">
                                        @error('description')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </div>
                            <!--form body end -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

         
@endsection