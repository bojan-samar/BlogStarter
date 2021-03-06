<section id="comments" class="bg-gray-100 py-12">
    <div class="container mx-auto">
        <div class="card bg-white">

        <div class="font-black tracking-wider mb-5 uppercase text-base">Comments</div>

        @forelse($comments as $comment)
                @livewire('comment.comment', ['comment' => $comment], key($comment->id))

                <div class="ml-14">
                    @foreach ($comment->children as $child)
                        @livewire('comment.comment', ['comment' => $child], key(time().$child->id))
                    @endforeach
                </div>
            @empty
                <div class="font-bold">No Comments Yet</div>
            @endforelse

            @auth
                <div class="mt-10">

                    <form id="new-comment" wire:submit.prevent="postComment" class="max-w-2xl">
                        <textarea id="reply" type="text"
                                  wire:model.defer="newCommentState.body"
                                  class="form-input @error('newCommentState.body') border-red-500 @enderror"
                                  name="reply"
                                  rows="5">
                        </textarea>

                        @error('newCommentState.body')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror

                        <x-jet-button class="mt-3">
                            Comment
                        </x-jet-button>
                    </form>
                </div>
            @else
                <div class="text-base">
                    <a href="/login" class="text-blue-600">Log In</a> or <a href="/register" class="text-blue-600">Register</a> To Reply
                </div>
            @endauth

        </div>
    </div>
</section>
