<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta title="title" content="MCY - VPN Server List" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="MCY - VPN Active Server List. Outline VPN နှင့်အသုံးပြုရန် VPN Server List ဖြစ်ပါတယ်။" />
    <meta name="keywords" content="Myanmar,VPN,MCY Asia,MCY, Myanmar Cyber Youth,မြန်မာ,VPN List">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Aung Myat Moe (@amm834)">

    <title>MCY - VPN Server List</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://tailwindui.com/css/components-v2.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer=""></script>

</head>

<body class="bg-gray-50">
        @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    @stack('scripts')
</body>
</html>