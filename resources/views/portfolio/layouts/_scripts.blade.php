@livewireScripts

<script src="{{ asset('assets/js/frontend/plugins.js') }}"></script>
<script src="{{ asset('assets/js/frontend/theme.js') }}"></script>
<script src="{{ asset('assets/jquery.js') }}"></script>

@yield('js_after')

@stack('scripts_after')
