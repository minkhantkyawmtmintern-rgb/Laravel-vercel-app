<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Detail - Laravel App</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow mb-10">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-indigo-600">LaravelVercel</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-indigo-600">Home</a>
                <a href="/blog" class="hover:text-indigo-600">Blog</a>
                <a href="/about" class="hover:text-indigo-600">About</a>
            </div>
        </div>
    </nav>

    <main class="max-w-2xl mx-auto px-4 bg-white p-8 rounded-lg shadow">
        <span class="text-xs font-bold uppercase tracking-wide text-indigo-600">Post ID: {{ $id }}</span>
        <h1 class="text-3xl font-bold mt-2 mb-4">Dynamic Route ကို စမ်းသပ်ခြင်း</h1>
        <p class="text-gray-700 leading-relaxed mb-6">
            သင်အခုကြည့်နေတဲ့ စာမျက်နှာရဲ့ URL ကို သတိထားကြည့်ပါ။ URL အဆုံးမှာ ပါတဲ့ ID နံပါတ်ကို လိုက်ပြောင်းရင် ဒီစာမျက်နှာပေါ်က ID နံပါတ်ကလည်း လိုက်ပြောင်းနေပါလိမ့်မယ်။ ဒါက Laravel ရဲ့ Dynamic Routing စနစ် Vercel ပေါ်မှာ အလုပ်လုပ်ကြောင်း သက်သေပြနေတာ ဖြစ်ပါတယ်။
        </p>
        <a href="/blog" class="text-indigo-600 hover:underline">&larr; Blog စာမျက်နှာသို့ ပြန်သွားရန်</a>
    </main>

</body>
</html>