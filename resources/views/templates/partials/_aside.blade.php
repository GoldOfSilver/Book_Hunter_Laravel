<aside class="w-full md:w-1/4 p-3">
    <div class="bg-gray-700 rounded-lg shadow-lg p-4">
        <h2 class="font-bold text-lg mb-4">Categories</h2>
        <ul class="list-reset">
            @foreach (\App\Models\Category::orderBy('created_at', 'DESC')->get() as $category)
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="bg-gray-700 rounded-lg shadow-lg p-4 mt-4">
        <h2 class="font-bold text-lg mb-4">Tags</h2>
        <div class="tag-cloud">
            @foreach (\App\Models\Tag::orderBy('created_at', 'DESC')->get() as $tag)
                <a class="text-gray-300 hover:text-white text-sm" href="#">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
</aside>