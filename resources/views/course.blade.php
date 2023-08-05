@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Item Information</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Item
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Item</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Item Code : </label>
                                            <input name="icode" class="form-control" type="text" placeholder="Item Code">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Item Name : </label>
                                            <input name="iname" class="form-control" type="text" placeholder="Item Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label class="">Select Category</label>
                                            <select name="cat_id" class="form-control select2_style1" style="width: 100%;">
                                                <option disabled selected value="0">Select Category</option>
                                                    <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="">Select Brand</label>
                                            <select name="brand_id" class="form-control select2_style1" style="width: 100%;">
                                                <option disabled selected value="0">Select Brand</option>
                                                    <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Unit : </label>
                                            <input name="unit" class="form-control" type="text" placeholder="Unit">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Unit Price :</label>
                                            <input name="uprice" class="form-control" type="text" placeholder="Unit Price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Re Order Level:</label>
                                            <input name="reolevel" class="form-control" type="text" placeholder="Re Order Level">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Per Price :</label>
                                            <input name="lpprice" class="form-control" type="text" placeholder="Last Per Price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Barcode :</label>
                                            <input name="barcode" class="form-control" type="text" placeholder="Barcode">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Status :</label>
                                            <select name="sts" id="" class="form-control" >
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>stock maintain :</label>
                                            <select name="stmaintain" id="" class="form-control" >
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Opening Stock :</label>
                                            <input name="opstock" class="form-control" type="text" placeholder="Opening Stock">
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