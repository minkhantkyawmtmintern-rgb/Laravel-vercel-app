<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post - Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow mb-10">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-indigo-600">LaravelVercel</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-indigo-600">Home</a>
                <a href="{{ route('blogs.index') }}" class="hover:text-indigo-600">Blog</a>
                <a href="/about" class="hover:text-indigo-600">About</a>
            </div>
        </div>
    </nav>

    <main class="max-w-2xl mx-auto px-4 bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-6">ဆောင်းပါး ပြင်ဆင်ရန်</h1>

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">ခေါင်းစဉ် (Title)</label>
                <input type="text" name="title" id="title" value="{{ $blog->title }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">အကြောင်းအရာ (Content)</label>
                <textarea name="content" id="content" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none">{{ $blog->content }}</textarea>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100">
                <a href="{{ route('blogs.show', $blog->id) }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 flex items-center">မပြင်တော့ပါ</a>
                <button type="submit" class="bg-indigo-600 text-white px-5 py-2 rounded-md shadow hover:bg-indigo-700 text-sm font-medium">
                    ပြင်ဆင်ချက်များကို သိမ်းမည်
                </button>
            </div>
        </form>
    </main>

</body>
</html>