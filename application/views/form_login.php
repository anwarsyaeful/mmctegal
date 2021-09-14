<body>
    <div class="container">
        <div id="app">
            <section class="section">
                <div class="container mt-4">
                    <div class="row">
                        <div
                            class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="">
                                <h3>
                                    <center>Form Login</center>
                                </h3>
                            </div>

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Login</h4>
                                </div>

                                <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

                                <div class="card-body">
                                    <form method="POST" action="<?php echo base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input id="username" type="text" class="form-control" name="username"
                                                tabindex="1" autofocus>
                                            <?php echo form_error('username', '<div class="text-danger text-small">', '</div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password" class="control-label">Password</label>
                                            </div>
                                            <input id="password" type="password" class="form-control" name="password"
                                                tabindex="2">
                                            <?php echo form_error('password', '<div class="text-danger text-small">', '</div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-5"
                                                tabindex="4">
                                                Login
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="simple-footer">
                                <?php echo "Copyright &copy; ". (int)date('Y'). " | @ipoeng"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
    // $(".login-action").click(function(){
    //   alert("clicked.");
    // });
    </script>
</body>