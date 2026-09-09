<?= view('partials/header', ['title' => 'Home']) ?>
<span class="eyebrow">Point of sale, made clear</span>
<h1>Keep the counter moving.</h1>
<p>GENIE POS gives your team a calm, practical home for the people and accounts behind every sale.</p>
<div class="actions">
    <a class="button primary" href="<?= base_url('customers') ?>">View customers</a>
    <a class="button" href="<?= base_url('users') ?>">View staff accounts</a>
</div>
<?= view('partials/footer') ?>