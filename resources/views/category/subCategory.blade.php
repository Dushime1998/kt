<nav class="bg-gray-100 m-4 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
@foreach ($subcategory as $item)
    


                <li>
                    <a href="{{ route('check-category', ['id' => $item->subCategory]) }}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">{{$item->subCategory}}</a>
                </li>
                

                @endforeach
            </ul>
        </div>
    </div>
</nav>
