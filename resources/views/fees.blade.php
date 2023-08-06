@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Fees Collection</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Fees
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Fees Information</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Student ID   : </label>
                                            <input name="std_id" class="form-control" type="text" placeholder="Enter Student ID">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Transaction Date  : </label>
                                            <input name="transaction" class="form-control" type="text" placeholder="Enter Transaction Date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Amount : </label>
                                            <input name="amount" class="form-control" type="text" placeholder=" Enter Amount">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Payment Method : </label>
                                            <input name="pay_method" class="form-control" type="text" placeholder="Payment Method">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Receipt Number : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Monye Receipt Number">
                                        </div>
                                    </div>
                                    <!--form body end -->
                                </div>
                                <div class="modal-footer">
                                    <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        
            </div>
        </div>
    </div> 
</div>

         
@endsection