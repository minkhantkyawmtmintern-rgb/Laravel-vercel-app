<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow mb-10">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-indigo-600">LaravelVercel</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-indigo-600">Home</a>
                <a href="{{ route('blogs.index') }}" class="hover:text-indigo-600">Blog</a>
                <a href="/about" class="text-indigo-600 font-bold">About</a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 text-center py-10">
        <h1 class="text-4xl font-bold mb-4">ကျွန်ုပ်တို့အကြောင်း</h1>
        <p class="text-gray-600 text-lg max-w-xl mx-auto">
            ဤ Website သည် Laravel 13 framework နှင့် Vercel Serverless deployment တို့ကို တွဲဖက်ကာ Routes များနှင့် Pages များ ချိတ်ဆက်ပုံကို စမ်းသပ်ရန် တည်ဆောက်ထားခြင်း ဖြစ်သည်။
        </p>
    </main>

</body>
</html>