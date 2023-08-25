@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    {{-- <div class="ibox-title">Category</div> --}}
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <div class="card">
                        <div class="card-header">
                            Certificate
                        </div>
                        <div class="outer-border">
                            <div class="inner-dotted-border">
                                   <span class="fs-20 text-primary fw-bold">Genuty System</span><br>
                                   <span class="certification text-decoration-underline">Certificate of Completion</span>
                                   <br><br><br>
                                   <span class="certify"><i>This is to certify that [Student Name] has successfully completed the [Course Name] course, demonstrating dedication, enthusiasm, and a strong commitment to learning. Active participation and engagement in course materials were truly commendable.</i></span> <br/><br/>
                                   <span class="fs-30">Java Developer</span> <br/><br/>
                                   <span class="fs-10">with score of <b>A+</b></span> <br/><br/>
                                   <span class="certify"><i>Date : </i></span><br>
                                  
                                  <span class="fs-30">23 March,2019</span>
                            
                            </div>
                            </div>
                   
                </div>
            </div>

            
        </div>
    </div> 
</div>

         
@endsection