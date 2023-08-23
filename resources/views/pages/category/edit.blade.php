@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-3">
                                <div class="col-sm-12 form-group">
                                    <label><b>Edit Category</b></label>
                                    <input name="name" value="{{ $category->name }}" class="form-control" type="text">
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5">{{ $category->description }}</textarea>
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