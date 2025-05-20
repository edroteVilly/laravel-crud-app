<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1e1e2f;
            color: #f5f5f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            background-color: #2d2d44;
            color: #fff;
        }
        .card-title {
            font-weight: bold;
        }
        .btn-outline-primary, .btn-outline-warning, .btn-outline-danger {
            border-width: 2px;
        }
        .btn-outline-primary:hover {
            background-color: #0d6efd;
            color: white;
        }
        .btn-outline-warning:hover {
            background-color: #ffc107;
            color: black;
        }
        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4 fw-bold">Inventory Management</h1>

        <div class="text-end mb-4">
            <a href="{{ route('products.create') }}" class="btn btn-outline-primary">+ Add Product</a>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($products as $product)
            <div class="col">
                <div class="card h-100 shadow border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-light">{{ $product->description }}</p>
                        <h6 class="text-success">₱{{ number_format($product->price, 2) }}</h6>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-dark border-0">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-4 text-center">
            {{ $products->links() }}
        </div>
    </div>
</body>
</html>
