<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Consumer view</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form name="editConsumerForm" id="editConsumerForm" method="post">
        <div class="modal-body">
        @csrf
        @method('GET')
            <div>
                <div>
                    <label for="name" class="form-label">Name&nbsp;:&nbsp;</label>
                    <span> {{ $consumer->name }}</span>
                </div>
                <div>
                    <label for="email" class="form-label">Email&nbsp;:&nbsp;</label>
                    <span>{{ $consumer->email }}</span>
                </div>
                <div>
                    <label for="mobile" class="form-label">Mobile&nbsp;:&nbsp;</label>
                    <span>{{ $consumer->mobile }}</span>
                </div>
                <div>
                    <label for="address" class="form-label">Address&nbsp;:&nbsp;</label>
                    <span>{{ $consumer->address }}</span>
                </div>
                <div>
                    <label for="created_at" class="form-label">Created Date&nbsp;:&nbsp;</label>
                    <span>{{ $consumer->created_at }}</span>
                </div>
                <div>
                    <label for="created_by" class="form_label">Created By&nbsp;:&nbsp;</label>
                    <span>{{ $consumer->createdBy?->name ?? "-" }}</span>
                </div>
                <div>
                    <label for="updated_at" class="form_label">Updated Date&nbsp;&nbsp;</label>
                    <span>{{ $consumer->updated_at }}</span>
                </div>
                <div>
                    <label for="updated_by" class="form_label">Updated By&nbsp;:&nbsp;</label>
                    <span>{{ $consumer->updatedBy?->name ?? "-" }}</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="bi bi-x"></i>&nbsp;Close</button>
        </div>
    </form>
</div>