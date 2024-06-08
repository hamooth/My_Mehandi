<div class="card">
    <div class="card-header">
        <h2>Add Product</h2>
    </div>
    <div class="card-body">
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="product-name" class="form-label">Name</label>
                <input type="text" class="form-control" id="product-name" name="product-name" required>
            </div>
            <div class="mb-3">
                <label for="product-description" class="form-label">Description</label>
                <textarea class="form-control" id="product-description" name="product-description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="product-price" class="form-label">Price</label>
                <input type="number" class="form-control" id="product-price" name="product-price" required>
            </div>
            <div class="mb-3">
                <label for="product-image" class="form-label">Image</label>
                <input type="file" class="form-control" id="product-image" name="product-image" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</div>