<aside>
  <section class="blog-sidebar-section">
    <h3 class="widget-title-sm">{{ trans('theme.search') }}</h3>
    <hr class="title-border-cus">
    <div class="row">
      <div class="col-12">
        {!! Form::open(['route' => ['blog.search'], 'method' => 'GET', 'id' => 'form', 'class' => 'form-inline', 'role' => 'form', 'data-toggle' => 'validator']) !!}
        <div class="input-group full-width">
          {!! Form::text('q', null, ['class' => 'form-control br-left-radius-custom', 'placeholder' => trans('theme.placeholder.search'), 'required']) !!}
          <div class="input-group-btn">
            <button class="btn btn-primary br-right-radius-custom btn-blog-search-custom" type="submit">
              <span class="fas fa-search"></span>
            </button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </section>

  <section class="blog-sidebar-section">
    <h3 class="widget-title-sm">{{ trans('theme.recent_posts') }}</h3>
    <hr class="title-border-cus">
    <ul class="blog-sidebar-posts blog-sidebar-posts-custom">
      @foreach (\App\Helpers\ListHelper::recentBlogs() as $blog)
        <li>
          <h5><a href="{{ route('blog.show', $blog->slug) }}">{!! $blog->title !!}</a></h5>
          <small class="text-muted">{{ $blog->published_at->diffForHumans() }}</small>
        </li>
      @endforeach
    </ul>
  </section>
  <section class="blog-sidebar-section">
    <h3 class="widget-title-sm">{{ trans('theme.most_popular') }}</h3>
    <hr class="title-border-cus">
    <ul class="blog-sidebar-posts blog-sidebar-posts-custom">
      @foreach (\App\Helpers\ListHelper::popularBlogs() as $blog)
        <li>
          <h5><a href="{{ route('blog.show', $blog->slug) }}">{!! $blog->title !!}</a></h5>
          <small class="text-muted">{{ $blog->published_at->diffForHumans() }}</small>
        </li>
      @endforeach
    </ul>
  </section>

  @if (isset($tags) && $tags)
    <section class="blog-sidebar-section">
      <h3 class="widget-title-sm">{{ trans('theme.tags') }}</h3>
      <hr class="title-border-cus">
      <ul class="blog-sidebar-tags">
        @foreach ($tags as $tag)
          <li><a href="{{ route('blog.tag', $tag['name']) }}">{{ $tag['name'] }}</a></li>
        @endforeach
      </ul>
    </section>
  @endif
</aside>
