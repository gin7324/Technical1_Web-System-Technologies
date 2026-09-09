<?= view('partials/header', ['title' => 'Customer Accounts']) ?>
<div class="page-heading">
    <span class="eyebrow">Accounts / Customers</span>
    <h2>Customer Accounts</h2>
    <p>A quick view of the customers currently known to the shop.</p>
</div>
<div class="table-wrap">
    <table>
        <thead>
            <tr><th>Full name</th><th>Email</th><th>Phone</th></tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= view('partials/footer') ?>