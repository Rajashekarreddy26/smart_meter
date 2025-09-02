<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add new consumer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form name="addConsumerForm" id="addConsumerForm" method="post">
        <div class="modal-body">
        @csrf
        @method('POST')
            <div>
                <div>
                    <label for="name" class="form-label">Name&nbsp;:&nbsp;</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" value="{{ old('name') }}">
                    </div>
                </div>
                <div>
                    <label for="email" class="form-label">Email&nbsp;:&nbsp;</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email" value="{{ old('email') }}">
                    </div>
                </div>
                <div>
                    <label for="mobile" class="form-label">Mobile&nbsp;:&nbsp;</label>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter the mobile number" value="{{ old('mobile') }}">
                    </div>
                </div>
                <div>
                    <label for="address" class="form-label">Address&nbsp;:&nbsp;</label>
                    <div class="input-group mb-3">
                        <textarea class="form-control" id="address" name="address" placeholder="Enter the address">{{ old('address') }}</textarea>
                    </div>
                </div>
            </div>
            <span id="error_div"></span>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success btn-sm" onclick="addConsumer()"><i class="bi bi-plus"></i>&nbsp;Add</button>
            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="bi bi-x"></i>&nbsp;Close</button>
        </div>
    </form>
</div>