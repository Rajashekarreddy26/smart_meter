<html>
<head>
    <title>Consumers List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Consumers List</h1>
    <div class="container-fluid">
        <div class="row">
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
                                <td>{{ $consumer->user->name }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('registration.create') }}" class="btn btn-success">Add New Consumer</a>
            </div>
        </div>
    </div>
</body>
</html>