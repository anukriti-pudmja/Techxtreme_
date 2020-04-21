<?php include 'header.php'; ?>

<section>
    <!--content-->
    <div class="card rounded-lg z-depth-5" id="login_panel">
        <div class="row p-0">
            <div class="col-lg-6 col-md-12">
                <img src="https://content.thriveglobal.com/wp-content/uploads/2018/03/Blog_9_Ways_to_Take_Responsiblity_for_Your_Life.jpeg"
                    alt="thumbnail" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-12 my-auto">
                <form id="login" method="post" class="px-4 my-md-5">
                    <h1 class="h1-responsive font-weight-light">Login</h1>
                    <!-- Email -->
                    <div class="md-form">
                        <input type="email" id="email" class="form-control">
                        <label for="email">E-mail</label>
                    </div>
                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="password" class="form-control">
                        <label for="password">Password</label>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- forgot password -->
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                    <div class="text-center">
                    <!--signin-->
                    <button id="button" class="btn " type="submit"><a href="home.php">Sign in </a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>