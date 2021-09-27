<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Coffee Shop - The best coffee on the internet</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="/css/all.min.css">

    <!-- slick -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/fonts/slick.woff">

    <style>
        .slick-prev:before,
        .slick-next:before {
            color: lightgray;
        }
    </style>
    <!-- Favicons -->

    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check" viewBox="0 0 16 16">
        <title>Check</title>
        <path
            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
</svg>

<div class="container py-3">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <i class="fas fa-lg fa-fw fa-mug-hot me-2"></i>
                <span class="fs-4">Coffee Shop</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">All the coffee</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Sign up</a>
                <a class="py-2 text-dark text-decoration-none" href="#">
                    <i class="fas fa-shopping-cart me-2"></i>
                    Cart <span class="badge bg-primary ms-2">1</span>
                </a>
            </nav>
        </div>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Checkout</h1>
        </div>
    </header>

    <main>
        <div class="row mb-3">
            <div class="col-12 col-md-9">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h3>Shipping Address</h3>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Last name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Address</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Zipcode</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">State</label>
                                        <div class="col-6">
                                            <select class="form-select" name="" id="">
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">It's the same as billing address</label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-6">
                                <h3>Billing Address</h3>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Last name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Address</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Zipcode</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">State</label>
                                        <div class="col-6">
                                            <select class="form-select" name="" id="">
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col align-self-center">
                                <button type="submit" class="btn btn-success">Proceed to payment platform</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card p-3">
                    <div class="row mb-2">
                        <div class="col">1 Latte</div>
                        <div class="col text-end">$12,99</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">Shipping</div>
                        <div class="col text-end">Free</div>
                    </div>
                    <div class="row border-top mt-2 py-2" style="background-color: lightgray">
                        <div class="col fw-bold">Total</div>
                        <div class="col fw-bold text-end ">$12,99</div>
                    </div>
                    <div class="row mt-2">
                        <button type="button" class="btn btn-primary">
                            Proceed to checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="" alt="" width="24" height="19">
                <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a>
                    </li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
