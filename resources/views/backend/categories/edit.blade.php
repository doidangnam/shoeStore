<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Category's Info</h5>
            </div>
            <div class="modal-body">
                <form method="POST" id="updateCategoryForm">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="col-form-label"><h6>Category's Name:</h6></label>
                        <input type="hidden" name="updateId">
                        <input type="text" class="form-control" name="name">
                        <span class="text-danger small" id="error_update_name"></span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="col-form-label"><h6>Description:</h6></label>
                        <input type="text" class="form-control" name="description">
                        <span class="text-danger small" id="error_update_name"></span>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-success" id="buttonUpdate">Confirm changes?</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>