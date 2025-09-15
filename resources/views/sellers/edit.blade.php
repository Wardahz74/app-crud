<!DOCTYPE html>
<html>
<head>
    <title>Edit Seller</title>
</head>
<body>
    <h1>Edit Seller</h1>

    <form method="POST" action="{{ route('sellers.update', $seller->id) }}">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $seller->name }}" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $seller->email }}" required><br><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $seller->phone }}" required><br><br>

        <label>Address:</label>
        <textarea name="address">{{ $seller->address }}</textarea><br><br>

        <button type="submit">Update Seller</button>
    </form>
</body>
</html>
