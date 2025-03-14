<section>
  <div class="container text-center mb-5 mt-0">
    <div class="row thumb-lists my-3">
      @foreach ($brands as $brand)
        <div class="col-6 col-md-4 col-lg-2">
          
        <!--   <span class="vertical-helper"></span> -->
          <a href="{{ route('show.brand', $brand->slug) }}" class="brand-thumb-custom">
            <img src="{{ get_storage_file_url(optional($brand->logoImage)->path, 'logo_lg') }}">
            <span>{{ $brand->name }}</span>
          </a>
        
        </div>
      @endforeach
    </div><!-- /.row -->

    <div class="row pagenav-wrapper mt-4">
      {{ $brands->links('theme::layouts.pagination') }}
    </div>
  </div><!-- /.container -->
</section>
