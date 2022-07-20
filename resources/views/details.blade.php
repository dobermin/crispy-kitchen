<x-main-layout>
    <x-slot name="title">
        Crispy Kitchen - News Page
    </x-slot>
    <x-slot name="container">

        <header class="site-header site-news-detail-header">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2>{{ $news->title }}</h2>
                    </div>

                </div>
            </div>
        </header>

        <section class="news-detail section-padding pt-0">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        {{ $news->article }}
                    </div>

                </div>
            </div>
        </section>

        <section class="comments section-padding">
            <div class="container">
                <div class="row">

                    <div id="box" class="col-12">
                        <h4 class="text-center mb-4">Comment Box</h4>
                    </div>
                    <div class="col-lg-7 col-12 mx-auto">
                        @if($errors->any)
                            @foreach($errors->all() as $error)
                                <p class="error">{{ $error }}</p>
                            @endforeach
                        @endif
                        <form class="custom-form comment-form" action="{{ url()->current() }}" method="post"
                              role="form">
                            @csrf
                            <label for="comment_name"></label><input type="text" name="comment_name" id="comment_name"
                                                                     class="form-control" placeholder="Your Name"
                                                                     required value="{{ old('comment_name') }}">

                            <label for="comment_email"></label><input type="email" name="comment_email"
                                                                      id="comment_email" pattern="[^ @]*@[^ @]*"
                                                                      class="form-control" placeholder="Your Email"
                                                                      required="" value="{{ old('comment_email') }}">

                            <label for="comment"></label><textarea class="form-control" rows="5" id="comment"
                                                                   name="comment" placeholder="Write a comment"
                                                                   required></textarea>

                            <div class="col-lg-3 col-4 mx-auto">
                                <button name="add_comment" type="submit" class="form-control" id="subscribe">Submit
                                </button>
                            </div>
                        </form>

                        @foreach($comments as $comment)
                            <div id="comments" class="news-author d-flex flex-wrap align-items-center">

                                <div class="ms-4 w-50">
                                    <p class="mb-2">{{ $comment->comment }}</p>

                                    <p>{{ $comment->name }}</p>
                                </div>

                                <span class="ms-auto">{{ $comment->updated_at->diffForHumans() }}</span>
                            </div>
                        @endforeach
                        {{ $comments->links('vendor.pagination.bootstrap-5') }}
                    </div>

                </div>
            </div>
        </section>
    </x-slot>
</x-main-layout>
