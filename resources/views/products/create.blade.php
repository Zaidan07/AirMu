<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AirMu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-primary py-3">
        <h2 class="text-white text-center">Product Air MU</h2>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-success">
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <form action="{{ route('products.create') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Name</label>
                                <input type="text"
                                    class="@error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Name" name="name">
                                @error('name')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Sku</label>
                                <input type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Sku"
                                    name="sku">
                                @error('sku')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-labe h5">Price</label>
                                <input type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price"
                                    name="price">
                                    @error('price')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="5" placeholder="Enter description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-labe h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Image"
                                    name="image">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg text-white bg-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
