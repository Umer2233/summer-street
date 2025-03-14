<div class="row">
  <div class="col-12 ">
    <div class="my-info-container my-info-container-custom account__box-shadow">
      <div class="my-info-box">
        <div class="me-info-block me-info-block-custom">
          <div class="dashboard-profile-avtar-sec">
            <div class="my-photo-block">
              <img src="{{ get_storage_file_url(optional($dashboard->image)->path, 'thumbnail') }}" class="center-block" alt="{{ trans('theme.avatar') }}" />
            </div>
            <div class="my-info">
              <div class="name">
                <span>
                  {{ $dashboard->getName() }}
                </span>
                <a href="{{ route('account', 'account') }}" class="small indent10"><i class="fas fa-edit" data-toggle="tooltip" data-title="{{ trans('theme.edit_account') }}"></i></a>
              </div>
              <div class="messages">
                <span>
                 <!--  <i class="fas fa-clock-o"></i> -->
                  {{ trans('theme.member_since') }}: <em>{{ $dashboard->created_at->diffForHumans() }}</em>
                </span>
              </div>
            </div>
          </div>

          <div class="pull-right bor-radius btn-me-info-custom">
            <a href="{{ url('/') }}" class="btn btn-primary flat">
              <svg xmlns="http://www.w3.org/2000/svg" width="18.107" height="18.418" viewBox="0 0 18.107 18.418">
                <g id="Group_217" data-name="Group 217" transform="translate(-1493.158 5656.305)">
                  <path id="Path_147" data-name="Path 147" d="M1503.353-5651.382a3.923,3.923,0,0,1,3.923-3.924h0a3.923,3.923,0,0,1,3.923,3.924v.839" transform="translate(-4.998 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path id="Path_148" data-name="Path 148" d="M1506.2-5644.863h2.688a1.369,1.369,0,0,1,1.337,1.659l-1.9,8.764a1.566,1.566,0,0,1-1.53,1.233h-9.165a1.565,1.565,0,0,1-1.53-1.233l-1.9-8.764a1.369,1.369,0,0,1,1.337-1.659h7.8" transform="translate(0 -5.68)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line id="Line_121" data-name="Line 121" x2="11.106" transform="translate(1497.971 -5643.749)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </g>
              </svg>
               @lang('theme.button.continue_shopping')
            </a>

            @unless($dashboard->shippingAddress)
              <a href="{{ route('account', 'account') }}#address-tab" class="btn btn-default flat">
                <i class="fas fa-truck"></i> @lang('theme.add_shipping_address')
              </a>
            @endunless
          </div>
        </div>
      </div><!-- .my-info-box -->

      <div class="my-info-details my-info-details-custom">
        <ul>
          <li>
            <a href="{{ route('account', 'orders') }}">
              <span class="v">{{ $dashboard->orders_count }}</span>
              <span class="d">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18.107" height="18.418" viewBox="0 0 18.107 18.418">
                    <g id="Group_217" data-name="Group 217" transform="translate(-1493.158 5656.305)">
                      <path id="Path_147" data-name="Path 147" d="M1503.353-5651.382a3.923,3.923,0,0,1,3.923-3.924h0a3.923,3.923,0,0,1,3.923,3.924v.839" transform="translate(-4.998 0)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      <path id="Path_148" data-name="Path 148" d="M1506.2-5644.863h2.688a1.369,1.369,0,0,1,1.337,1.659l-1.9,8.764a1.566,1.566,0,0,1-1.53,1.233h-9.165a1.565,1.565,0,0,1-1.53-1.233l-1.9-8.764a1.369,1.369,0,0,1,1.337-1.659h7.8" transform="translate(0 -5.68)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      <line id="Line_121" data-name="Line 121" x2="11.106" transform="translate(1497.971 -5643.749)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                  </svg>
               @lang('theme.orders')</span>
            </a>
          </li>
          <li>
            <a href="{{ route('account', 'wishlist') }}">
              <span class="v">{{ $dashboard->wishlists_count }}</span>
              <span class="d">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.294" height="16.001" viewBox="0 0 18.294 16.001">
                  <path id="Path_473" data-name="Path 473" d="M937.1-5275.781c-2.262-4.01-7.431-2.961-8.047.716-.672,4.012,3.98,8.3,8.047,10.71,4.066-2.405,8.865-6.68,8.047-10.71-.742-3.653-5.784-4.726-8.047-.716" transform="translate(-927.971 5279.356)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
               @lang('theme.wishlist')</span>
            </a>
          </li>
          <li>
            <a href="{{ route('account', 'messages') }}">
              <span class="v">{{ $dashboard->messages_count }}</span>
              <span class="d">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.218" height="14.597" viewBox="0 0 18.218 14.597">
                  <g id="Group_213" data-name="Group 213" transform="translate(-739.718 5652.286)">
                    <path id="Path_141" data-name="Path 141" d="M756.936-5647.169v6.678a1.8,1.8,0,0,1-1.8,1.8H742.52a1.8,1.8,0,0,1-1.8-1.8v-9.443a1.352,1.352,0,0,1,1.352-1.352h14.867l-.56.547" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <path id="Path_142" data-name="Path 142" d="M757.1-5650l-7.549,6.13-7.517-6.13" transform="translate(-0.722 -0.707)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  </g>
                </svg>
               @lang('theme.unread_messages')</span>
            </a>
          </li>
          <li>
            <a href="{{ route('account', 'coupons') }}">
              <span class="v">{{ $dashboard->coupons_count }}</span>
              <span class="d">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13.861" height="17.558" viewBox="0 0 13.861 17.558">
                  <path id="Path_474" data-name="Path 474" d="M933.267-5078.063v-12.965a2.593,2.593,0,0,1,2.593-2.593h9.268l-2.073,4.37,2.073,4.37h-8.615" transform="translate(-932.267 5094.621)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
               @lang('theme.coupons')</span>
            </a>
          </li>
          <li class="last">
            <a href="{{ route('account', 'disputes') }}">
              <span class="v">{{ $dashboard->disputes_count }}</span>
              <span class="d">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <g id="Group_773" data-name="Group 773" transform="translate(-551.542 -549.57)">
                    <path id="Path_438" data-name="Path 438" d="M552.542,559.57c0,1.156,1.141,2.076,1.558,3.082.432,1.042.293,2.5,1.078,3.282s2.24.646,3.281,1.078c1.005.417,1.926,1.559,3.082,1.559s2.077-1.142,3.083-1.559c1.042-.432,2.5-.292,3.281-1.078s.646-2.24,1.078-3.281c.417-1.005,1.558-1.926,1.558-3.082s-1.141-2.077-1.558-3.082c-.432-1.042-.292-2.5-1.078-3.282s-2.24-.646-3.281-1.078c-1.005-.417-1.927-1.558-3.083-1.558s-2.077,1.141-3.082,1.558c-1.042.432-2.5.293-3.282,1.078s-.646,2.24-1.078,3.282C553.683,557.493,552.542,558.414,552.542,559.57Z" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <g id="Group_569" data-name="Group 569" transform="translate(559.619 557.646)">
                      <line id="Line_293" data-name="Line 293" x1="3.725" y2="3.725" transform="translate(0.061 0.061)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      <g id="Group_568" data-name="Group 568">
                        <circle id="Ellipse_92" data-name="Ellipse 92" cx="0.061" cy="0.061" r="0.061" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        <circle id="Ellipse_93" data-name="Ellipse 93" cx="0.061" cy="0.061" r="0.061" transform="translate(3.725 3.725)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      </g>
                    </g>
                  </g>
                </svg>
               @lang('theme.disputes')</span>
            </a>
          </li>
        </ul>
      </div><!-- .my-info-details -->
    </div><!-- .my-info-container -->
  </div><!-- .col-sm-12 -->
</div><!-- .row -->

<div class="row pt-4">
  <div class="col-lg-6 col-md-12 col-12 pe-1 table-responsive-custom">
    <table class="table table-bordered account__box-shadow account-table-order-custom">
      <thead>
        <tr class="text-muted">
          <th class="min-width-5">{{ trans('theme.date') }}</th>
          <th class="min-width-14">
            {{ trans('theme.orders') }}
            <i class="fas fa-question-circle pull-right" data-toggle="tooltip" data-title="{{ trans('theme.item_count') }}"></i>
          </th>
          <th class="min-width-5">{{ trans('theme.amount') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dashboard->orders as $order)
          <tr>
            <td>{!! $order->created_at->format('M j') !!}</td>
            <td>
              <img src="{{ get_storage_file_url(optional($order->shop->logoImage)->path, 'tiny_thumb') }}" class="img-circle" alt="{{ $order->shop->name }}" data-toggle="tooltip" data-title="{{ $order->shop->name }}">
              <a href="{{ route('order.detail', $order) }}">
                {!! $order->order_number !!}
              </a>
              <small class="indent10">{!! $order->orderStatus() !!}</small>
              <span class="label label-outline pull-right label-outline-custom"> {{ $order->item_count }} </span>
            </td>
            <td>{!! get_formated_price($order->grand_total, 2) !!}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div><!-- .col-sm-6 -->
  <div class="col-lg-6 col-md-12 col-12 nopadding-left table-responsive-custom">
    <table class="table ps-1 table-bordered account__box-shadow account-table-wish-custom">
      <thead>
        <tr class="text-muted">
          <th class="min-width-20">{{ trans('theme.wishlist') }}</th>
          <th class="min-width-6"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dashboard->wishlists as $wish)
          @if ($wish->inventory)
            <tr>
              <td>
                <img class="" src="{{ get_product_img_src($wish->inventory, 'tiny') }}" alt="{!! $wish->inventory->title !!}" title="{!! $wish->inventory->title !!}" />

                <a class="product-link" href="{{ route('show.product', $wish->inventory->slug) }}">{!! str_limit($wish->inventory->title, 35) !!}</a>
              </td>
              <td>
                <a class="btn btn-primary btn-xs btn-primary-custom-account" href="{{ route('direct.checkout', $wish->inventory->slug) }}">
                  <!-- <i class="fas fa-rocket"> --></i> @lang('theme.button.buy_now')
                </a>
              </td>
            </tr>

          @elseif($wish->product)

            <tr>
              <td>
                <img src="{{ get_storage_file_url(optional($wish->product->featuredImage)->path, 'tiny') }}" alt="{!! $wish->product->name !!}" title="{!! $wish->product->name !!}" />

                <a class="product-link" href="{{ route('show.offers', $wish->product->slug) }}" class="btn btn-sm btn-link">{!! str_limit($wish->product->name, 35) !!}</a>
              </td>
              <td>
                <a class="btn btn-primary btn-xs flat" href="{{ route('show.offers', $wish->product->slug) }}">
                  @lang('theme.view_more_offers', ['count' => $wish->product->inventories_count])
                </a>
              </td>
            </tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </div><!-- .col-sm-6 -->
</div><!-- .row -->
<div class="clearfix space50"></div>
