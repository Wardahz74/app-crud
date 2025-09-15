<!DOCTYPE html>
<html>
<head>
    <title>Sellers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="container">
        <h1 class="mb-4">All Sellers</h1>

        <a href="{{ route('sellers.create') }}" class="btn btn-primary mb-3">Add New Seller</a>

        @if(session('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Registration #</th>
                    <th>NTN</th>
                    <th>Province</th>
                    <th>Environment</th>
                    <th>Sandbox Token</th>
                    <th>Production Token</th>
                    <th>Address</th>
                    <th>Scenarios</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sellers as $seller)
                <tr>
                    <td>{{ $seller->id }}</td>
                    <td>{{ $seller->name }}</td>
                    <td>{{ $seller->email }}</td>
                    <td>{{ $seller->phone }}</td>
                    <td>{{ $seller->registration_number }}</td>
                    <td>{{ $seller->ntn }}</td>
                    <td>{{ $seller->province }}</td>
                    <td>{{ ucfirst($seller->environment) }}</td>
                    <td>{{ $seller->sandbox_token }}</td>
                    <td>{{ $seller->production_token }}</td>
                    <td>{{ $seller->address }}</td>
                    <td>
                        @if($seller->scenarios)
                            {{ implode(', ', json_decode($seller->scenarios, true)) }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('sellers.edit', $seller->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('sellers.destroy', $seller->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this seller?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
