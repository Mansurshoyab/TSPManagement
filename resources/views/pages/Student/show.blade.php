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
                                      <div class="form-control fw-bold" >{{ $student->email }}</div>
                                    </div>
                                <div class="col-md-6">
                                  <label for="inputPassword4" class="form-label fs-5 fw-bold">Phone</label>
                                  <div class="form-control fw-bold" >{{ $student->phone }}</div>
                                  {{-- <input type="text" value="{{ $student->phone }}" class="form-control fw-bold" id="inputPassword4"> --}}
                                </div>
                                <div class="col-12">
                                  <label for="inputAddress" class="form-label fs-5 fw-bold">Address</label>
                                  <div class="form-control fw-bold" >{{ $student->address }}</div>
                                  {{-- <input type="text" value="{{ $student->address }}" class="form-control fw-bold" id="inputAddress"> --}}
                                </div>
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label fs-5 fw-bold">Date Of Birth</label>
                                  <div class="form-control fw-bold" >{{ $student->dob }}</div>
                                  {{-- <input type="text" value="{{ $student->dob }}" class="form-control fw-bold" id="inputCity"> --}}
                                </div>
                                <div class="col-md-4">
                                  <label for="inputState" class="form-label fs-5 fw-bold">Admission Date</label>
                                  <div class="form-control fw-bold" >{{ $student->admission_date }}</div>
                                  {{-- <input type="text" value="{{ $student->admission_date }}" class="form-control fw-bold" id="inputCity"> --}}
                                </div>
                                <div class="col-md-2">
                                  <label for="inputZip" class="form-label fs-5 fw-bold">Gender</label>
                                  <div class="form-control fw-bold" >{{ $student->gender == 0 ? 'Male' : 'Female' }}</div>
                                  {{-- <input type="text" value="{{ $student->gender == 0 ? 'Male' : 'Female' }}" class="form-control fw-bold" id="inputZip"> --}}
                                </div>
                                <div class="col-md-6 center">
                                    <label for="inputCity" class="form-label fs-5 fw-bold">Payment Status</label>
                                    <div class="form fw-bold">
                                        <ul style="list-style-type: none; padding: 0;">
                                            <li><strong>Date & Time</strong> - <strong>Amount</strong></li> <!-- Added headings -->
                                            
                                            @php
                                                $totalAmount = 0; // Initialize the variable to store the total sum
                                            @endphp
                                            
                                            @forelse ($student->payments as $payment)
                                                <li>{{ $payment->updated_at }} - {{ $payment->amount }}</li>
                                                @php
                                                    $totalAmount += $payment->amount; // Add the current payment amount to the total
                                                @endphp
                                            @empty
                                                <li>No payments done yet</li>
                                            @endforelse
                                        </ul>
                                        @php
                                        $courseFee = $student->course->course_fee; // Assuming the course fee is associated with the student's course
                                        $dueAmount = $courseFee - $totalAmount; // Calculate the due amount
                                          @endphp
                                          
                                          @if ($dueAmount > 0)
                                              <div class="text-danger">Due Amount: {{ $dueAmount }}</div>
                                          @else
                                              <div class="text-primary">No Due</div>
                                          @endif
                                    
                                    </div>
                                </div>
                          
                              
                                <div class="col-md-4">
                                  <label for="inputState" class="form-label fs-5 fw-bold">Mejor</label>
                                  <div class="form-control fw-bold" >{{ $student->category->name }}</div>
                                </div>
                                <div class="col-md-2">
                                  <label for="inputZip" class="form-label fs-5 fw-bold">Course</label>
                                  <div class="form-control fw-bold" >{{ $student->course->course_name }}</div>
                                </div>
                                
                                <div class="col-md-12 text-right mt-5">
                                    <a href="{{ url('admin/student') }}" class="btn btn-primary">Go Back</a>
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