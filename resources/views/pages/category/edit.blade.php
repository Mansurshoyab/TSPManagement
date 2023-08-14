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
                    <form action="{{  }}" method="post">
                        @csrf
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-3">
                                <div class="col-sm-12 form-group">
                                    <label> <b> Edit </b></label>
                                    <select name="name" class="form-control" id="" value="">
                                        {{-- <option value="{{ $categories->name }}">---SELECT---</option> --}}
                                        {{-- <option value="{{ $categories->name }}">---SELECT---</option> --}}
                                        <option value="Java" {{ $categories->name === 'Java' ? 'selected' : '' }}>Java</option>
                                        <option value="JavaScript" {{ $categories->name === 'JavaScript' ? 'selected' : '' }}>Java Script</option>
                                        <option value="C" {{ $categories->name === 'C' ? 'selected' : '' }}>C</option>
                                        <option value="C++" {{ $categories->name === 'C++' ? 'selected' : '' }}>C++</option>
                                        <option value="PHP" {{ $categories->name === 'PHP' ? 'selected' : '' }}>PHP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5">{{ $categories->description }}</textarea>
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