<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- ✅ Bootstrap link added -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h1>Welcome to Dashboard</h1>

        <p>Choose an option:</p>

        <!-- ✅ New styled buttons -->
        <div class="mt-4">
            <a href="{{ route('sellers.create') }}" class="btn btn-primary">
                Manage Sellers
            </a>

            <a href="{{ route('products.index') }}" class="btn btn-success">
                Manage Products
            </a>
        </div>

        <!-- ✅ Keep your original logout form -->
        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>
</html>
