@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="ibox-head">
                    {{-- <div class="ibox-title">Category</div> --}}
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <div class="my-5">
                        <div class="outer-border">
                            <div class="inner-dotted-border">
                                   <span class="genuty fs-20 fw-bold">Genuty System</span><br>
                                   <span class="certification text-decoration-underline">Certificate of Completion</span>
                                   <br><br><br>
                                   <span class="certify"><i>This is to certify that <strong class="text-decortion-italic">{{ $certificate->student->first_name }}</strong> has successfully completed the <strong class="text-decortion-italic">{{ $certificate->course->course_name }}</strong> course, demonstrating dedication, enthusiasm, and a strong commitment to learning. Active participation and engagement in course materials were truly commendable.</i></span> <br/><br/>

                                   <span class="fs-30"><strong class="text-decortion-italic">{{ $certificate->category->name }}</strong></span> <br/><br/>

                                   <span class="fs-20">With score of <b><strong class="text-decortion-italic">{{ $certificate->grade }}</strong></b></span> <br/><br/><br>
                                <div class="date">
                                   <p class=" text-start fs-20">Date : {{ $certificate->issue_date }}</p>
                                   <p class="issued text-end text-decoration-underline fs-20">Issued By {{ $certificate->issued_by }}</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div> 
</div>
       
@endsection