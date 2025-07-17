<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @include('components.user.partials.styles')
    @stack('styles')
</head>

<body>
    <livewire:components.user.partials.sidebar />

    <main class="dashboard-main">
        <livewire:components.user.partials.header />

        <div class="dashboard-main-body">
            {{ $slot }}
        </div>
        <livewire:components.user.partials.footer />
    </main>
    @include('components.user.partials.scripts')
    @stack('scripts')
</body>

</html>
