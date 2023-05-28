<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cook Lagbe</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 50px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            padding: 40px;
            text-align: center;
            border-radius: 20px;
            display: flex;
            align-items: center;
        }

        .title {
            font-size: 3rem;
        }

        .title span:first-child {
            color: #37bcf7;
        }

        .title span:last-child {
            color: #101010;
        }

        .image-container {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

        .image-container img {
            max-width: 400px;
            border-radius: 10px;
        }

        .content-container {
            flex: 1;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-container">
            <header>
                <h1 class="text-3xl font-semibold mb-6 text-left title">
                    <span>Cook</span> <span>Lagbe</span>
                </h1>
            </header>
            <br>

            <main>
                <p class="text-gray-600 text-left">Cook Lagbe is a platform where you can easily hire a cook.</p>

                <div class="mt-4 text-left">
                    <h3 class="text-xl font-semibold mb-2">For whom & what we offer?</h3>
                    <ul class="list-disc list-inside feature-list">
                        <li>For <code class="text-sm font-bold text-blue-500">Students</code>, <code class="text-sm font-bold text-blue-500">Bachelors</code>, or <code class="text-sm font-bold text-blue-500">Homo sapiens</code>.</li>
                        <li>Professional <code class="text-sm font-bold text-blue-500">cooks</code> at your doorstep.</li>
                        <li>Safe & Secure.</li>
                        <li>Easy to use.</li>
                    </ul>
                </div>

                <div class="mt-7 text-left">
                    <p class="text-black-500 font-semibold">Want to dig deeper into Cook Lagbe?</p>

                    <a href="{{ route('register') }}" class="text-blue-500">Register now!</a>
                    <br>
                    <a href="{{ route('login') }}" class="text-blue-500">Login now!</a>
                </div>
            </main>
        </div>

        <div class="image-container">
        <img src="{{url('/storage/public/cooking.jpg')}}" alt="Image" width="300" height="250"/>

        </div>
    </div>
</body>
</html>
