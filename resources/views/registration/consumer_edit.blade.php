<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit consumer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form name="editConsumerForm" id="editConsumerForm" method="post">
        <div class="modal-body">
        @csrf
        @method('PUT')
            <div>
                <input type="hidden" id="id" name="id" value="{{ $consumer['id'] }}">
                <div>
                    <label for="name" class="form-label">Name&nbsp;:&nbsp;</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" value="{{ $consumer['name'] }}">
                    </div>
                </div>
                <div>
                    <label for="email" class="form-label">Email&nbsp;:&nbsp;</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email" value="{{ $consumer['email'] }}">
                    </div>
                </div>
                <div>
                    <label for="mobile" class="form-label">Mobile&nbsp;:&nbsp;</label>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter the mobile number" value="{{ $consumer['mobile'] }}">
                    </div>
                </div>
                <div>
                    <label for="address" class="form-label">Address&nbsp;:&nbsp;</label>
                    <div class="input-group mb-3">
                        <textarea class="form-control" id="address" name="address" placeholder="Enter the address">{{ $consumer['address'] }}</textarea>
                    </div>
                </div>
            </div>
            <span id="error_div"></span>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success btn-sm" onclick="updateConsumer()"><i class="bi bi-check"></i>&nbsp;Update</button>
            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="bi bi-x"></i>&nbsp;Close</button>
        </div>
    </form>
</div>