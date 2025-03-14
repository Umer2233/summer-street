@extends('theme::layouts.main')

@section('content')
  <!-- PAGE COVER IMAGE -->
  {{-- @include('theme::banners.page_cover') --}}

  <!-- CONTENT SECTION -->
  {{-- <div class="clearfix space20"></div>
  <section>
    <div class="container">
      <div class="row">
        {!! $page->content !!}
      </div>
    </div>
  </section> --}}


  <!-- For Refund Policy only -->
  @if (\App\Page::PAGE_RETURN_AND_REFUND == $page->slug)
    @include('theme::contents.return_refund_policy')
  @endif

  <!-- For contact page only -->
  @if (\App\Page::PAGE_CONTACT_US == $page->slug)
    @include('theme::contents.contact_us')
  @endif

   <!-- For contact page only -->
   @if (\App\Page::SHIPPING == $page->slug)
   @include('theme::contents.footer_shipping')
 @endif



  <!-- BROWSING ITEMS -->
  {{-- @include('theme::sections.recent_views') --}}
@endsection
