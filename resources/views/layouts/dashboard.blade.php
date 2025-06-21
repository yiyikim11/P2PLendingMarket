<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        {{$slot}}
    </div>
</body>

</html>