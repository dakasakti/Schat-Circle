<div class="container">
    <div class="d-flex justify-content-center LoginCenter">
        <div class="col-8 border border-dark shadow">
            <div class="row">
                <a href="{{ route('register') }}" class="col">
                    <div
                        class="text-center rounded border border-dark pb-2 pt-2 {{
                            $title === 'Register' ? 'sung' : 'sing'
                        }} "
                    >
                        Register
                    </div>
                </a>
                <a href="{{ route('login') }}" class="col">
                    <div
                        class="text-center rounded border border-dark pb-2 pt-2 {{
                            $title === 'login' ? 'sung' : 'sing'
                        }}"
                    >
                        Login
                    </div>
                </a>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="fs-2">
                        <i class="fs-1" style="font-weight: 900">S</i>chat
                        Circle
                    </p>
                </div>
            </div>
            @if (session()->has('failed'))
            <div class="row ps-5 pe-5">
                <div
                    class="alert alert-danger d-flex align-items-center"
                    role="alert"
                >
                    <svg
                        class="bi flex-shrink-0 me-2"
                        width="24"
                        height="24"
                        role="img"
                        aria-label="Danger:"
                    >
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>{{ session("failed") }}</div>
                </div>
            </div>
            @endif @if (session()->has('failedLogin'))
            <div class="row ps-5 pe-5">
                <div
                    class="alert alert-danger d-flex align-items-center"
                    role="alert"
                >
                    <svg
                        class="bi flex-shrink-0 me-2"
                        width="24"
                        height="24"
                        role="img"
                        aria-label="Danger:"
                    >
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>{{ session("failedLogin") }}</div>
                </div>
            </div>
            @endif @if (session()->has('success'))
            <div class="row ps-5 pe-5">
                <div
                    class="alert alert-success d-flex align-items-center"
                    role="alert"
                >
                    <svg
                        class="bi flex-shrink-0 me-2"
                        width="24"
                        height="24"
                        role="img"
                        aria-label="success:"
                    >
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>{{ session("success") }}</div>
                </div>
            </div>
            @endif @yield('login')
        </div>
    </div>
</div>
