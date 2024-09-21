<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Almudassir - Login</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        body {
        background-color: #f8f9fa;
        }
        .login-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .login-card {
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        background-color: white;
        }
        .login-title {
        font-size: 24px;
        margin-bottom: 1.5rem;
        font-weight: bold;
        text-align: center;
        }
        .form-control {
        margin-bottom: 1rem;
        }
        </style>
    </head>
    <body>
        <div class="container login-container">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="card login-card">
                    <h2 class="login-title">Login</h2>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3 btn btn-warning">
                            {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>