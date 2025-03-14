<div class="copyright-area">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="links-list">
          @foreach ($pages->where('position', 'copyright_area') as $page)
            <li><a href="javascript:void(0)" target="_blank">{{ $page->title }}</a></li>
          @endforeach
          <li><a href="javascript:void(0)">@lang('theme.nav.merchant_dashboard')</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <p class="copyright-text">© {{ date('Y') }} <a href="{{ url('/') }}">{{ get_platform_title() }}</a></p>
      </div>
    </div>
  </div>
</div><!-- /.copyright-area -->
