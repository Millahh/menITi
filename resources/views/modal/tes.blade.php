<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

    <select class="form-select" id="value" name="value">
        <option value="">Select an option</option>
        <option value="1" data-bs-toggle="modal" data-bs-target="#valueModal" data-id="1">Number of Document</option>
        <option value="2" data-bs-toggle="modal" data-bs-target="#valueModal" data-id="2">Date</option>
        <option value="3" data-bs-toggle="modal" data-bs-target="#valueModal" data-id="3">Seller name</option>
        <option value="4" data-bs-toggle="modal" data-bs-target="#valueModal" data-id="4">Create date</option>
    </select>
</form>

<div class="modal fade" id="valueModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="valueModal" aria-hidden="true">
    <div class="modal-dialog">
        <form action="#" class="modal-content">
            <input value="" name="option_id" type="hidden">
            <div class="modal-header">
                <h5 class="modal-title" id="valueModal">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Multi Forms -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
<script>
$("#value").bind("change", function () {
        if(this.value >=1)
        $('#valueModal').modal('show')
    }).change();
</script>