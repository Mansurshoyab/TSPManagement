@extends('master')

@section('body')

<div class="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox my-3">
                <div class="ibox-head">
                    <div class="ibox-title fs-4 fw-bold text-primary">Student</div>
                </div>

                <div class="container my-3" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ $student->first_name }} {{ $student->last_name }}</strong>
                        </div>
                        <div class="card-body">
                          <div class="row">
                              <form class="row g-3">
                                  <div class="col-md-6">
                                      <label for="inputEmail4" class="form-label fs-5 fw-bold">Email</label>
                                      <input value="{{ $student->email }}" type="email" class="form-control fw-bold" id="inputEmail4">
                                    </div>
                                <div class="col-md-6">
                                  <label for="inputPassword4" class="form-label fs-5 fw-bold">Phone</label>
                                  <input type="text" value="{{ $student->phone }}" class="form-control fw-bold" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                  <label for="inputAddress" class="form-label fs-5 fw-bold">Address</label>
                                  <input type="text" value="{{ $student->address }}" class="form-control fw-bold" id="inputAddress">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label fs-5 fw-bold">Date Of Birth</label>
                                  <input type="text" value="{{ $student->dob }}" class="form-control fw-bold" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                  <label for="inputState" class="form-label fs-5 fw-bold">Admission Date</label>
                                  <input type="text" value="{{ $student->admission_date }}" class="form-control fw-bold" id="inputCity">
                                </div>
                                <div class="col-md-2">
                                  <label for="inputZip" class="form-label fs-5 fw-bold">Gender</label>
                                  <input type="text" value="{{ $student->gender == 0 ? 'Male' : 'Female' }}" class="form-control fw-bold" id="inputZip">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label fs-5 fw-bold">Payment Status</label>
                                  <input type="text"  class="form-control fw-bold" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                  <label for="inputState" class="form-label fs-5 fw-bold">Mejor</label>
                                  <input type="text" value="{{ $student->name }}" class="form-control fw-bold" id="inputCity">
                                </div>
                                <div class="col-md-2">
                                  <label for="inputZip" class="form-label fs-5 fw-bold">Course</label>
                                  <input type="text" value="{{ $student->course->course_name }}" class="form-control fw-bold" id="inputZip">
                                </div>
                                <ol>
                                @forelse ($student->payments as $payment)
                                 <li>   {{ $payment->amount }} </li>
                                @empty
                                    <li>No payments done yet</li>
                                @endforelse
                              </ol>
                                
                                <div class="col-md-12 text-right mt-5">
                                    <a href="{{ url('admin/student') }}" class="btn btn-primary">Go Home</a>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                    <br>
            </div>
        </div>
    </div> 
</div>


         
@endsection