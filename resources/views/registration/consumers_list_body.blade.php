<div>
    <h1>Consumers List</h1>
    <div class="row">
        <div class="clearfix"></div>
        <div class="text-start mb-1">
            <label>Search&nbsp;:&nbsp;</label>
            <input type="text" id="keyword" name="keyword" value="{{ old('keyword') }}" placeholder="Search by name, email or mobile">
            <button class="btn btn-primary btn-sm" onclick="listBody()"><i class="bi bi-search"></i>&nbsp;Search</button>
        </div>
        <div class="text-end mb-1">
            <a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="createConsumer()">Add New Consumer</a>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consumers as $consumer)
                        <tr>
                            <td>{{ $consumer->id }}</td>
                            <td>{{ $consumer->code }}</td>
                            <td>{{ $consumer->name }}</td>
                            <td>{{ $consumer->mobile }}</td>
                            <td>{{ $consumer->email }}</td>
                            <td>{{ $consumer->address }}</td>
                            <td>{{ $consumer->createdBy->name }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)" onclick="viewConsumer({{ $consumer->id }})"><i class="bi bi-eye"></i>&nbsp;View</a>
                                        <a class="dropdown-item" href="javascript:void(0)" onclick="editConsumer({{ $consumer->id }})"> <i class="bi bi-pencil"></i>&nbsp;Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)" onclick="deleteConsumer({{ $consumer->id }})"><i class="bi bi-trash"></i>&nbsp;Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-12 text-center">
            {{ $consumers->links() }}
        </div>
    </div>
</div>