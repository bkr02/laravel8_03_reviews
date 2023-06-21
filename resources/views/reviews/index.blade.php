<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reviews') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('reviews.create') }}" class="btn-link btn-lg mb-2">+ New Review</a>


        @foreach ($reviews as $review)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('reviews.show', $review) }}">{{ $review->title }}</a>
                    </h2>

                    <p class="mt-2">
                        {{ Str::limit($review->text, 200) }}
                    </p>
                    <p class="mt-2">
                        {{ $review->rating }}
                    </p>
                    <span>
                        {{ $review->updated_at->diffForHumans() }}
                    </span>
                </div>
            @endforeach
                {{ $reviews->links() }}
        </div>
    </div>
</x-app-layout>

