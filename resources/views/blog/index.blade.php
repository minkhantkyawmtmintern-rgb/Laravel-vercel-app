<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - My Laravel App</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow mb-10">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-indigo-600">LaravelVercel</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-indigo-600">Home</a>
                <a href="/blog" class="text-indigo-600 font-bold">Blog</a>
                <a href="/about" class="hover:text-indigo-600">About</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6">နောက်ဆုံးရဆောင်းပါးများ</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Blog Card 1 -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Vercel ပေါ်မှာ Laravel Serverless deploy လုပ်နည်း</h3>
                    <p class="text-gray-600 text-sm mb-4">ဒီဆောင်းပါးမှာတော့ modern Laravel app တွေကို Vercel platform ပေါ်မှာ စက္ကန့်ပိုင်းအတွင်း အခမဲ့ဘယ်လိုတင်မလဲဆိုတာ...</p>
                    <a href="/blog/1" class="text-indigo-600 font-medium hover:underline">ဆက်လက်ဖတ်ရှုရန် &rarr;</a>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Laravel 13 ၏ ထူးခြားချက်အသစ်များ</h3>
                    <p class="text-gray-600 text-sm mb-4">PHP 8.3 ရဲ့ စွမ်းဆောင်ရည်တွေနဲ့အတူ ပိုမိုမြန်ဆန်သွက်လက်လာတဲ့ Laravel ၏ နောက်ဆုံးထွက် version အကြောင်း...</p>
                    <a href="/blog/2" class="text-indigo-600 font-medium hover:underline">ဆက်လက်ဖတ်ရှုရန် &rarr;</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>