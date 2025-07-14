<?= $this->extend('layout/home_layout'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="p-5"></div>
    <div class="row row-cols-2">
        <div class="container px-4">
            <div class="container-xl d-flex justify-content-center mt-5">
                <h5>Tingkatkan hasil ujian Anda dengan latihan soal berkualitas. <br>
                    Kami menyediakan bank soal terlengkap sebagai sarana persiapan
                    ujian yang efektif dan terpercaya.
                </h5>
            </div>
            <div class="d-flex justify-content-center pt-3">
                <a href="<?= base_url('/pages/login') ?>" class="btn btn-primary d-inline p-2 text-bg-primary" role="button">Mulai</a>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <img src="/assets/images/exam-312px.png" alt="exam logo">
        </div>
    </div>
</main>
<?= $this->endSection(); ?>