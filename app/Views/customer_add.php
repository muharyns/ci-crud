<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Add Customer</h1>
<form action="/customer/create" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select id="status" name="status" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Customer</button>
    <a href="/customer" class="btn btn-secondary">Back to Customer List</a>
</form>
<?= $this->endSection() ?>