<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1 class="mb-4"><?= $title ?></h1>
<a href="/customer/add" class="btn btn-primary my-3">Add Customer</a>
<table id="customerTable" class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($customers)) : ?>
            <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?= $customer['name'] ?></td>
                    <td><?= $customer['phone'] ?></td>
                    <td><?= $customer['address'] ?></td>
                    <td><?= $customer['status'] ?></td>
                    <td class="text-nowrap">
                        <a href="/customer/edit/<?= $customer['id'] ?>" class="btn btn-warning btn-sm mr-1">Edit</a>
                        <a href="/customer/delete/<?= $customer['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this customer?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="5" class="text-center">No customers found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>