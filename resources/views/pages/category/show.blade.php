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
                            Category
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">{{ $categories->name }}</h5>
                          <p class="card-text">{{ $categories->description }}</p>
                          <a href="{{ url('category') }}" class="btn btn-primary">Go Home</a>
                        </div>
                      </div>
                   
                </div>
            </div>

            
        </div>
    </div> 
</div>

         
@endsection