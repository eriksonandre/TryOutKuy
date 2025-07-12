<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content'); ?>
	<?php
		foreach ($data_faqs as $faq) :
	?>
		<h2><?php echo $faq['pertanyaan']; ?></h2>
		<p><?php echo $faq['jawaban']; ?></p>
	<?php
		endforeach;
	?>
<?= $this->endSection(); ?>