<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }} - Laravel App</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow mb-10">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-indigo-600">LaravelVercel</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-indigo-600">Home</a>
                <a href="/blogs" class="hover:text-indigo-600">Blog</a>
                <a href="/about" class="hover:text-indigo-600">About</a>
                </div>
        </div>
    </nav>

    <main class="max-w-2xl mx-auto px-4 bg-white p-8 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <span class="text-xs font-bold uppercase tracking-wide text-indigo-600">Post ID: {{ $blog->id }}</span>
            <span class="text-xs text-gray-400">{{ $blog->created_at->format('M d, Y') }}</span>
        </div>
        
        
        <h1 class="text-3xl font-bold mt-2 mb-4">{{ $blog->title }}</h1>
        <p class="text-gray-700 leading-relaxed mb-6 whitespace-pre-line">
            {{ $blog->content }}
        </p>
        
        <div class="flex justify-between items-center border-t border-gray-100 pt-4">
            <a href="/blogs" class="text-indigo-600 hover:underline">&larr; Blog စာမျက်နှာသို့ ပြန်သွားရန်</a>
            <a href="/blogs/{{ $blog->id }}/edit" class="bg-amber-500 text-white px-3 py-1 rounded text-sm hover:bg-amber-600">ပြင်ဆင်မည်</a>
        </div>
    </main>

</body>
</html>