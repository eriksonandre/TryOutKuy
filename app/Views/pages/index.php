<?= $this->extend('layout/home_layout'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="p-5"></div>
    <div class="row row-cols-2">
        <div class="container px-4 d-flex align-items-center">
            <div class="container-xl row d-flex justify-content-center  mt-5 item">
                <h5>Tingkatkan hasil ujian Anda dengan latihan soal berkualitas. <br>
                    Kami menyediakan bank soal terlengkap sebagai sarana persiapan
                    ujian yang efektif dan terpercaya.
                </h5>
                <div class="d-flex gap-3 justify-content-center mt-3">
                    <button type="button" class="btn btn-primary col-md-2" data-bs-toggle="modal" data-bs-target="#modalsignin">
                        <b>sign in</b>
                    </button>
                    <button type="button" class="btn btn-primary col-md-2" data-bs-toggle="modal" data-bs-target="#modalsignup">
                        <b>sign up</b>
                    </button>

                </div>
            </div>
        </div>
        <div class="container-sm d-flex justify-content-center">
            <img src="/assets/images/exam-312px.png" alt="exam_logo">
        </div>
    </div>
</main>
<!-- Modal Sign In -->
<div class="modal fade" id="modalsignin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalsignin">Welcome to Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Sign up -->
<div class="modal fade" id="modalsignup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalsignup">Welcome to Sign Up</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>