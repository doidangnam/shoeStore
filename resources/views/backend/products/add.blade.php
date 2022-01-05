<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new product</h5>
            </div>
            <div class="modal-body">
            <form method="POST" id="createForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="confirmPasswordDelete" class="col-form-label"><h6>Product Name:</h6></label>
                    <input type="text" class="form-control" name="name">
                    <span class="text-danger small" id="error_name"></span>
                </div>
                <div class="mb-2">
                    <label for="confirmPasswordDelete" class="col-form-label"><h6>Description:</h6></label>
                    <textarea type="text" class="form-control" name="description"></textarea>
                    <span class="text-danger small" id="error_description"></span>
                </div>
                <div class="mb-2">
                    <label for="confirmPasswordDelete" class="col-form-label"><h6>SKU:</h6></label>
                    <input type="text" class="form-control" name="sku">
                    <span class="text-danger small" id="error_sku"></span>
                </div>
                <div class="mb-2">
                    <label for="confirmPasswordDelete" class="col-form-label"><h6>Size:</h6></label>
                    <input type="number" class="form-control" name="size">
                    <span class="text-danger small" id="error_size"></span>
                </div>
                <div class="mb-2">
                    <label for="confirmPasswordDelete" class="col-form-label"><h6>Brand:</h6></label>
                    <input type="text" class="form-control" name="brand">
                    <span class="text-danger small" id="error_brand"></span>
                </div>
                <div class="mb-2">
                    <label class="col-form-label"><h6>Category:</h6></label>
                    <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="confirmPasswordDelete" class="col-form-label"><h6>Quantity:</h6></label>
                    <input type="number" class="form-control" name="quantity">
                    <span class="text-danger small" id="error_quantity"></span>
                </div>
                <div class="mb-2">
                    <label for="confirmPasswordDelete" class="col-form-label"><h6>Price:</h6></label>
                    <input type="number" class="form-control" name="price">
                    <span class="text-danger small" id="error_price"></span>
                </div>
                <div class="mb-2">
                    <label for="confirmPasswordDelete" class="col-form-label"><h6>Upload image:</h6></label>
                    <input type="file" class="form-control" name="upload_images">
                    <span class="text-danger small" id="error_upload_images"></span>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                <button type="button" class="btn btn-success" id="buttonCreate">Create</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>