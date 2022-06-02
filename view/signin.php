<?php
include 'partials/header.php';
?>

<body style="
display: flex;
align-items: center;
padding-top: 40px;
padding-bottom: 40px;
background-color: #f5f5f5;">
    <div class="container containersignin">
        <main class="form-signin">
            <button type="button" class="btn-close" aria-label="Close" style="margin-right: 100%;"></button>
            <form method="post" action="../traitement.php">
                <img class="mb-4" src="../assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <p class="text-gray-soft text-center small mb-2">Already have an account? <a href="../view/signup.php">Sign up</a></p>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            </form>
        </main>
    </div>
</body>