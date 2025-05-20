<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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
            color: #f5f5f5;
            font-weight: 600;
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
        .btn-primary {
            font-weight: bold;
        }
        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: #fff;
        }
        h2 {
            font-weight: bold;
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card mx-auto shadow p-4" style="max-width: 600px;">
            <h2 class="text-center mb-4">🆕 New Product</h2>
            <form method="POST" action="{{ route('products.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price (₱)</label>
                    <input type="number" name="price" step="0.01" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back</a>
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
