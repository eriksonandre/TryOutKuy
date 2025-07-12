<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>

	<h2><?php echo $Judul; ?></h2>
	<form>
		Username: <input type="text" name="username"> <br>
		Password: <input type="password" name="password">
	</form>
<?= $this->endSection(); ?>