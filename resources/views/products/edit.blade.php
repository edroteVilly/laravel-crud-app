<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1e1e1e;
            color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            background-color: #2c2c2c;
            border: 1px solid #444;
        }
        .form-label {
            font-weight: 600;
            color: #f5f5f5;
        }
        .form-control {
            background-color: #3a3a3a;
            border: 1px solid #555;
            color: #fff;
        }
        .form-control:focus {
            background-color: #444;
            color: #fff;
            border-color: #0d6efd;
            box-shadow: none;
        }
        .btn-warning {
            font-weight: bold;
        }
        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: #fff;
        }
        h2 {
            font-weight: bold;
            color: #ffc107;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card mx-auto shadow p-4" style="max-width: 600px;">
            <h2 class="text-center mb-4">✏️ Edit Product</h2>
            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price (₱)</label>
                    <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price', $product->price) }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-warning">Update Product</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
