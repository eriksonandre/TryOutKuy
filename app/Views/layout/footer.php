<!-- Modal Sign In -->
<div class="modal fade" id="modallogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-smartest">
                <h1 class="modal-title fs-5 text-trust" id="modalsignin">Welcome to Login</h1>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example : tryout@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Sign up -->
<div class="modal fade" id="modalsignup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-accent">
                <h1 class="modal-title fs-5 text-smartest" id="modalsignup">Welcome to Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <= form_open() ?> -->
                <div class="mb-3">
                    <label for="username" class="form-label">User name</label>
                    <input type="text" class="form-control" id="username" name="username" value="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="">
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Repeat password</label>
                    <input type="password" class="form-control" id="password2" name="password2" value="">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>

                <!-- <= form_close() ?> -->
            </div>
        </div>
    </div>
</div>

<!-- <footer class="fixed-bottom jumbotron jumbotron-fluid mt-5 mb-0 bg-primary">
    <div class="container text-center">
        <small>
            Copyright &copy; <?= Date('Y') ?> TryOutKUY
        </small>
    </div>

</footer> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>