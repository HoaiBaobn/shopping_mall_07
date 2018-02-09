 @extends('backend.layouts.index')
 @section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="txtName" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input class="form-control" name="txtcat" placeholder="Please Enter category" />
                    </div>
                    <div class="form-group">
                        <label>New</label>
                        <select class="form-control">
                            <option value="0">Please Choose Category</option>
                            <option value="">cũ</option>
                            <option value="">mới</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="txtdes"></textarea>
                    </div>
                  
                    <div class="form-group">
                        <label>Quantity</label>
                        <input class="form-control" name="txtquantity" placeholder="Please Enter décription" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="txtprice" placeholder="Please Enter price" />
                    </div>
                    <div class="form-group">
                        <label>discount</label>
                        <input class="form-control" name="txtdiscount" placeholder="Please Enter discount" />
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="fImages">
                    </div>
                    <button type="submit" class="btn btn-default">Product Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection