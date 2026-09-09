<?= view('partials/header', ['title' => 'About']) ?>
<div class="page-heading">
    <span class="eyebrow">About the system</span>
    <h2>Simple tools for a busy counter.</h2>
    <p>This first version of Counterpoint POS focuses on clear account views and an easy path between the pages your team uses most.</p>
</div>
<div class="actions">
    <a class="button primary" href="<?= base_url('customers') ?>">Browse customer accounts</a>
    <a class="button" href="<?= base_url('users') ?>">Browse user accounts</a>
</div>
<?= view('partials/footer') ?>