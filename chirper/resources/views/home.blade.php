<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="mt-8 space-y-3">
            <p class="text-sm text-base-content/60 uppercase tracking-wide">Laravel practice project</p>
            <h1 class="text-4xl font-bold">Chirper home</h1>
            <p class="text-base-content/70">
                A tiny Blade page for learning forms, routes, validation, and redirects.
            </p>
        </div>

        <!-- Chirp Form -->
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/chirps">
                    @csrf
                    <div class="form-control w-full">
                        <textarea
                            name="message"
                            placeholder="What's on your mind?"
                            class="textarea textarea-bordered w-full resize-none"
                            rows="4"
                            maxlength="255"
                            required
                        ></textarea>
                    </div>

                    <div class="mt-4 flex items-center justify-end">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Chirp
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Latest chirps</h2>
            <div class="space-y-4">
                @forelse ($chirps as $chirp)
                    <x-chirp :chirp="$chirp" />
                @empty
                    <div class="alert alert-info">
                        <span>No chirps yet. Add the first one above.</span>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>
