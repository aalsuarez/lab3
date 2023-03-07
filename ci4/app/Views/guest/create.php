<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/guest/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Name</label>
    <input type="input" name="title" value="<?= set_value('name') ?>">
    <br>

    <label for="body">Email</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('email') ?></textarea>
    <br>
	<label for="body">Comment</label>
    <textarea name="body" cols="45" rows="6"><?= set_value('comment') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create guest item">
</form>