<!-- CONTENT SECTION -->
<div class="clearfix space20"></div>
<section>
  <div class="container">
    <div class="row row-col-border" data-gutter="60">
      <div class="col-lg-9 col-md-8 blog-post-left-col-custom">
        @forelse($blogs as $blog)
          <article class="blog-post blog-post-custom">
            @if ($blog->image)
              <a href="{{ route('blog.show', $blog->slug) }}">
                <img class="full-width" src="{{ get_storage_file_url(optional($blog->coverImage)->path, 'blog') }}" alt="{{ $blog->title }}" title="{{ $blog->title }}" />
              </a>
            @endif

            <h1 class="blog-post-title"><a href="{{ route('blog.show', $blog->slug) }}">{!! $blog->title !!}</a></h1>
            <p class="blog-post-excerpt">
              {!! \Illuminate\Support\Str::limit($blog->excerpt, 250) !!}
              
            </p>

            <ul class="blog-post-meta">
              <li>{{ trans('theme.published_at') . ' ' . $blog->published_at->diffForHumans() }}</li>
              <li>by <a href="{{ route('blog.author', $blog->user_id) }}">{!! $blog->author->getName() !!}</a>
              </li>
            </ul>
            <a class="btn btn-link btn-blog-page-custom" href="{{ route('blog.show', $blog->slug) }}">{{ trans('theme.button.read_more') }}</a>
          </article>

          <div class="clearfix space50"></div>
        @empty
          <div class="clearfix space50"></div>
          <h3 class="text-center text-muted">{{ trans('theme.notify.nothing_found') }}</h3>
        @endforelse

        <div class="text-center">
          {{ $blogs->links('theme::layouts.pagination') }}
        </div>
      </div> <!-- /.col-md-9 -->

      <div class="col-lg-3 col-md-4">
        @include('theme::partials._blog_sidebar')
      </div> <!-- /.col-md-3 -->
    </div>
    <div class="clearfix space50"></div>
  </div><!-- /.container -->
</section>
