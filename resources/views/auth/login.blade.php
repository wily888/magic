@extends('layouts.app')

@section('content')

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('logo1.png') }}" alt="">
                                <span class="d-none d-lg-block">Connexion</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Connectez-vous à votre compte</h5>
                                    <p class="text-center small">Entrez votre nom d'utilisateur & mot de passe pour se connecter</p>
                                </div>


                                <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="email" class="form-control" id="yourUsername" required>
                                            <div class="invalid-feedback">s'il vous plaît entrez votre nom d'utilisateur.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">s'il vous plait entrez votre mot de passe!</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Souviens-toi de moi</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Connexion</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Je n'ai pas de compte? <a href="{{ route('register') }}">Créer un compte</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                        {{-- <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>  --}}

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

@endsection
