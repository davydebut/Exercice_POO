<style>
    form.register {
        border: none;
        padding: 0;
        margin: 0;
        text-align: left;
        border-radius: 5px;
    }

    form .form-row {
        padding: 0;
        margin-bottom: 1.5rem;
        display: block;
        margin: 0 0 6px;
        clear: both;
    }

    form .form-row label {
        line-height: 2;
        display: block;
    }

    label {
        font-size: 14px;
        color: #2D2D2D;
        margin-bottom: .25rem;
        font-weight: 500;
    }

    form .form-row .required {
        visibility: visible;
        color: red;
        font-weight: 700;
        border: 0 !important;
        text-decoration: none;
    }

    form .form-row input.input-text {
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        outline: 0;
        line-height: normal;
    }

    .input-text {
        -webkit-appearance: none;
        -moz-appearance: none;
        height: 40px;
        color: #272727;
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Roboto, Arial, sans-serif;
        font-size: 14px;
        background-color: #fff;
        background-image: none;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
        padding: 0.5rem 0.75rem;
        display: block;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
    }

    input[type="submit"].btn-block {
        width: 100%;
        margin: 0;
    }

    .btn.btn-lg {
        padding: 13px 27px;
        font-size: 16px;
    }

    .btn.btn-brand {
        background: #7952B3;
        color: #ffffff;
    }

    [type="submit"]:not(:disabled) {
        cursor: pointer;
    }

    .formulaire {
        width: 100%;
        padding: 0 15px;
    }

    .section {
        position: relative;
        padding: 65px 0;
        display: block;
    }

    .main {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 auto;
        flex: 1 0 auto;
        position: relative;
        display: block;
    }

    .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
    }

    .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    #signup_div_wrapper {
        padding-top: 65px;
    }

    .imgsign {
        height: auto;
        max-width: 100%;
    }

    @media (min-width: 768px) {
        .container--xs {
            max-width: 570px;
        }
    }

    .input-text:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: none;
    }

    .corps {
        color: #2C2C2C;
        font-size: 15px;
        letter-spacing: -.01em;
        display: flex;
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
        font-size: 1rem;
        font-weight: normal;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }
</style>

<div class="corps">
    <main class="site-main main">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="container container--xs">
                        <div class="formulaire">
                            <button type="button" onclick="window.location.href='index.php'" class="btn-close mb-5" aria-label="Close" style="float: left;"></button>
                            <div id="signup_div_wrapper">
                                <img class="img-fluid mx-auto d-block mb-3 imgsign" src="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/elements/bootstrap-logo.svg" alt="">
                                <h1 class="mb-1 text-center">Sign up</h1>
                                <form class="register" method="post">
                                    <p class="form form-row form-row-wide">
                                        <label for="pseudo">Pseudo : <span class="required">*</span></label>
                                        <input type="text" class="input-text" name="pseudo" value="">
                                    </p>
                                    <p class="form form-row form-row-wide">
                                        <label for="email">Email : <span class="required">*</span></label>
                                        <input type="email" class="input-text" name="email" value="">
                                    </p>
                                    <p class="form form-row form-row-wide">
                                        <label for="password">Password : <span class="required">*</span></label>
                                        <input type="password" class="input-text" name="password" value="">
                                    </p>
                                    <p class="form-row">
                                        <input type="submit" value="Sign up" class="btn btn-brand btn-block btn-lg mb-4 mt-3" name="register">
                                    </p>
                                </form>
                                <p class="text-gray-soft text-center small mb-2">Already have an account? <a href="signin.php">Sign in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>