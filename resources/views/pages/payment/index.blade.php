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
                    <form action="" method="POST">
                        @csrf
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
                                    <input type="text" name="amount" class="form-control" placeholder="Enter Your Payment">
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
                                    <textarea name="comment" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5"></textarea>
                                    <div class="text-danger">
                                        @error('description')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <input type="submit" value="Add Payment" class="btn btn-primary">
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
                                <th class="col-md-2">Student Name</th>
                                <th class="col-md-1">Amount</th>
                                <th class="col-md-4">Comment</th>
                                <th class="col-md-2">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($payment as $payment)
                                    <tr>
                                        <td scope="row">{{ $payment->id }}</td>
                                        <td>{{ $payment->student->last_name }}</td>
                                        <td>{{ $payment->amount }}</td>
                                        <td>{{ $payment->comment }}</td>
                                        <td>
                                            <a href="{{ route('payment.show', $payment->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a>
                                            <a href="{{ route('payment.edit', $payment->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                            <form action="{{  route('payment.destroy', $payment->id) }}" method="POST">
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