<section>
  <div class="container">
    <div class="row mt-5 ">
      <div class="space20">
        <h3><strong>Shop By Category</strong></h3>
      </div>
    </div>
    <div class="row mb-4">
      @foreach ($all_categories as $catGroup)
        @if ($catGroup->subGroups->count())
          @php
            $categories_count = $catGroup->subGroups->sum('categories_count');
            $cat_counter = 0;
          @endphp
          <div class="col-lg-3 col-md-4 col-12 mt-4">
            <div class="card">
              <div class="card-body text-center crd_br-s  py-3 px-2">
                <a href="{{ route('categoryGrp.browse', $catGroup->slug) }}" class="text-center">
                  @if ($catGroup->backgroundImage)
                  
                    <div style="background-image:url({{ $catGroup->backgroundImage ? get_storage_file_url(optional($catGroup->backgroundImage)->path, 'full') : '' }}); background-position: center; background-repeat: no-repeat;margin-right: 0; background-size: contain;width:100%; height:120px"></div>
                  @else
                    <img src="../../themes/default/assets/img/summer-street-logo.svg" width='100%' height="120" alt="">
                  @endif
                  <h4 class="fg_dark-s mb-3"><strong>{{ $catGroup->name }}</strong></h4>
                </a>
              </div>
            </div>
          </div>
        @endif
      @endforeach
      
      <div class="col-12 mt-4">
        <h3><strong>What is Lorem Ipsum</strong></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <div class="col-12 mt-4">
        <h3><strong>What is Lorem Ipsum</strong></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <div class="col-12 mt-4">
        <h3><strong>What is Lorem Ipsum</strong></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      {{-- @foreach ($all_categories as $categoryGroup)
        @if ($categoryGroup->subGroups->count())
          <div class="col-md-3 col-sm-6 bg-light category-widget space30">
            <section class="category-banner-img-wrapper">
              <div class="banner banner-o-hid" style="background-image:url( {{ get_cover_img_src($categoryGroup, 'category') }} );">
                <div class="banner-caption">
                  <span class="lead">{{ $categoryGroup->name }}</span>
                </div>
              </div>
            </section>
            @foreach ($categoryGroup->subGroups as $subGroup)
              <h5 class="nav-category-inner-title">
                <a href="{{ route('categories.browse', $subGroup->slug) }}">{{ $subGroup->name }}</a>
              </h5>
              <ul class="nav-category-inner-list">
                @foreach ($subGroup->categories as $cat)
                  <li><a href="{{ route('category.browse', $cat->slug) }}">{{ $cat->name }}</a>
                    @if ($cat->description)
                      <p>{!! $cat->description !!}</p>
                    @endif
                  </li>
                @endforeach
              </ul>
            @endforeach
          </div><!-- /.col-md-3 -->

          @if ($loop->iteration % 4 == 0)
            <div class="clearfix"></div>
          @endif

          @if ($loop->iteration % 2 == 0)
            <!-- Add clearfix for only the sm viewport -->
            <div class="clearfix visible-sm-block"></div>
          @endif
         @endif
      @endforeach --}}
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
