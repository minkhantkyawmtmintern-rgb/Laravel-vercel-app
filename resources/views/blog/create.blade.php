<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post - Laravel App</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
        <h1 class="text-2xl font-bold mb-6">ဆောင်းပါးအသစ် ဖန်တီးပါ</h1>

        <form action="{{ route('blogs.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">ခေါင်းစဉ် (Title)</label>
                <input type="text" name="title" id="title" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="ဆောင်းပါးခေါင်းစဉ် ထည့်ပါ">
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">အကြောင်းအရာ (Content)</label>
                <textarea name="content" id="content" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="ဆောင်းပါးအပြည့်အစုံကို ဒီနေရာမှာ ရေးသားပါ..."></textarea>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100">
                <a href="{{ route('blogs.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 flex items-center">မလုပ်တော့ပါ</a>
                <button type="submit" class="bg-indigo-600 text-white px-5 py-2 rounded-md shadow hover:bg-indigo-700 text-sm font-medium">
                    သိမ်းဆည်းမည်
                </button>
            </div>
        </form>
    </main>

</body>
</html>