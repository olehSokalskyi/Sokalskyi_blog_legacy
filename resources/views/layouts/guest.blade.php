@vite(['resources/css/app.css', 'resources/js/app.js'])
на:
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@livewireStyles
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
