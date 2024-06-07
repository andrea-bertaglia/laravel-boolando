<header class="ms_bg-header">
    <div class="container">
        <div class="row text-white">
            
            {{-- menù links --}}
            <div class="col fw-bold d-flex align-items-center">
                <ul class="d-flex align-items-center mb-0 list-unstyled gap-3">
                    <li><a class="text-decoration-none text-white" href="#">Donna</a></li>
                    <li><a class="text-decoration-none text-white" href="#">Uomo</a></li>
                    <li><a class="text-decoration-none text-white" href="#">Bambini</a></li>
                </ul>
            </div>
            {{-- /menù links --}}

            {{-- logo --}}
            <div class="col d-flex justify-content-center align-items-center">
                <img class="img-fluid h-50" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo">
            </div>
            {{-- /logo --}}

            {{-- icone --}}
            <div class="col d-flex justify-content-end align-items-center gap-2 fs-4">
                <span>⌘</span>
                <span>&hearts;</span>
                <span>⇧</span>
            </div>
            {{-- /icone --}}

        </div>
    </div>
</header>

