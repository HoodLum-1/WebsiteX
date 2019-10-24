<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2018/01/12
 * Time: 12:56 AM
 */
?>

<!-- Sell Content-->
<div class="row">
    <div class="page-header">
        <h1 class="text-center"> Sell Book</h1>
    </div><!-- End Header -->
    <form>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>ISBN:</label>
                    <input type="text" placeholder="Enter Book ISBN Here..." class="form-control" name="isbn">
                </div>
                <div class="col-sm-6 form-group">
                    <label>Title:</label>
                    <input type="text" placeholder="Enter Book Title Here..." class="form-control" name="title" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Author:</label>
                    <input type="text" placeholder="Enter Book Author Here..." class="form-control" name="author" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Publisher:</label>
                    <input type="text" placeholder="Enter Book Publisher Here..." class="form-control" name="publisher" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Price:</label>
                    <input type="text" placeholder="Enter Book Price Here..." class="form-control" name="price" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Image:</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea placeholder="Enter Book Description Here..." cols="40" rows="5" class="form-control" name="description"></textarea>
                </div>
                <div class="col-sm-6 col-sm-offset-5">
                    <a href="success.php" class="btn btn-primary glyphicon glyphicon-save-file">&nbsp;Submit</a></p>
                </div><!--end colomn-->
                <br>
                <br>
                <br>
            </div><!-- end row -->
        </div><!-- end col -->
    </form>
</div><!--Row-->
