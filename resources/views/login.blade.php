<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- remix icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/login.css'])
    <!-- LINEARICONS -->
    <link rel="stylesheet" href="fonts/linearicons/style.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="inner">
            <img src="images/image-1.png" alt="" class="image-1">
            <form action="loginMatch" method="POST">
                @csrf
                <h3>LogIn?</h3>
                <div class="form-holder">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    <span class="lnr lnr-envelope">@error('email')<i class="ri-error-warning-line"></i> {{$message}}@enderror</span>
                </div>
                <div class="form-holder">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="lnr lnr-lock">@error('password')<i class="ri-error-warning-line"></i> {{$message}}@enderror</span>
                </div>
                <a href="{{route('login.google')}}" class="button google">
                    <svg height="24px" width="24px" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                        <path fill="#4285F4"
                            d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027">
                        </path>
                        <path fill="#34A853"
                            d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1">
                        </path>
                        <path fill="#FBBC05"
                            d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782">
                        </path>
                        <path fill="#EB4335"
                            d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251">
                        </path>
                    </svg>
                    Continue with Google
                </a>
                <button type="submit" class="my-btn">
                    <span>Login</span>
                </button>
            </form>
            <img src="images/image-2.png" alt="" class="image-2">
        </div>

    </div>
</body>

</html>
