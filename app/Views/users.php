<?= view('partials/header', ['title' => 'User Accounts']) ?>
<div class="page-heading">
    <span class="eyebrow">Accounts / Staff</span>
    <h2>User Accounts</h2>
    <p>Staff access details for the people who keep the counter running.</p>
</div>
<div class="table-wrap">
    <table>
        <thead>
            <tr><th>Username</th><th>Full name</th><th>Role</th></tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td class="role"><?= esc($user['role']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= view('partials/footer') ?>