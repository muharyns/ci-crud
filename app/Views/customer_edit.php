<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Edit Customer</h1>
<form action="/customer/update/<?= $customer['id'] ?>" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="<?= $customer['name'] ?>" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" class="form-control" value="<?= $customer['phone'] ?>" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" class="form-control" value="<?= $customer['address'] ?>" required>
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select id="status" name="status" class="form-control">
            <option value="active" <?= $customer['status'] == 'active' ? 'selected' : '' ?>>Active</option>
            <option value="inactive" <?= $customer['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Customer</button>
    <a href="/customer" class="btn btn-secondary">Back to Customer List</a>
</form>
<?= $this->endSection() ?>