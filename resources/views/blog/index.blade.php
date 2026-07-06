<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - My Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow mb-10">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-indigo-600">LaravelVercel</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-indigo-600">Home</a>
                <a href="/blogs" class="text-indigo-600 font-bold">Blog</a>
                <a href="/about" class="hover:text-indigo-600">About</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold">နောက်ဆုံးရဆောင်းပါးများ</h2>
            <a href="/blogs/create" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow hover:bg-indigo-700 text-sm font-medium">
                + ဆောင်းပါးအသစ်တင်ရန်
            </a>
        </div>
        
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($blogs as $blog)
                <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col justify-between">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">{{ $blog->title }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($blog->content, 100) }}</p>
                    </div>
                    
                    <div class="px-6 pb-4 pt-3 flex justify-between items-center bg-gray-50 border-t border-gray-100">
                        <a href="/blogs/{{ $blog->id }}" class="text-indigo-600 font-medium hover:underline text-xs">
                            ဖတ်ရှုရန် &rarr;
                        </a>
                        
                        <div class="flex items-center space-x-3">
                            <a href="/blogs/{{ $blog->id }}/edit" class="text-amber-600 hover:text-amber-800 text-xs font-medium">
                                ပြင်မည်
                            </a>

                            <form action="/blogs/{{ $blog->id }}" method="POST" onsubmit="return confirm('သေချာပါသလား‌?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 text-xs">ဖျက်မည်</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white p-10 rounded-lg text-center shadow">
                    <p class="text-gray-500">ဆောင်းပါးများ မရှိသေးပါ‌။</p>
                </div>
            @endforelse
        </div>
        <div class="mt-8 mb-10">
            {{ $blogs->links() }}
        </div>
    </main>

</body>
</html>