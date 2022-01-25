<header class="loader" id="loader">
    <div class="logo animate__animated animate__fadeIn animate__slow">
        @include('components.logo_loading')
    </div>
    <p class="animate__animated animate__fadeIn animate__slow loading_message" style="text-align: center; position: absolute; top: 80vh">
        {{ $loadingMessage }}
    </p>
</header>
