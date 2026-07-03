<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App on Vercel</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-indigo-600">LaravelVercel</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-indigo-600 font-medium">Home</a>
                <a href="{{ route('blogs.index') }}" class="hover:text-indigo-600 font-medium">Blog</a>
                <a href="/about" class="hover:text-indigo-600 font-medium">About</a>
            </div>
        </div>
    </nav>

    <header class="max-w-4xl mx-auto text-center py-20 px-4">
        <h1 class="text-5xl font-extrabold text-gray-900 mb-4">Laravel 13 is running on Vercel!</h1>
        <p class="text-lg text-gray-600 mb-8">ယခုစာမျက်နှာသည် Vercel ပေါ်တွင် အောင်မြင်စွာ deploy လုပ်ထားသော Laravel project ၏ စမ်းသပ်စာမျက်နှာ ဖြစ်သည်။</p>
        <div class="space-x-4">
           <a href="{{ route('blogs.index') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">Blog ဖတ်ရန်</a>
            <a href="/about" class="bg-white text-gray-700 border border-gray-300 px-6 py-3 rounded-lg hover:bg-gray-50 transition">ကျွန်ုပ်တို့အကြောင်း</a>
        </div>
    </header>

</body>
</html>