<!-- <div class="section-title">
  <h4>@lang('theme.manage_your_account')</h4>
</div>
 -->
<ul class="account-sidebar-nav mt-2 account__sidebar account__sidebar-custom account__sidebar-radius account__box-shadow">
  <li class="{{ $tab == 'dashboard' ? 'active' : '' }}">
    <a href="{{ route('account', 'dashboard') }}">
     <svg xmlns="http://www.w3.org/2000/svg" width="18.218" height="15.701" viewBox="0 0 18.218 15.701">
      <g id="Group_212" data-name="Group 212" transform="translate(-550.945 5653.934)">
        <path id="Path_139" data-name="Path 139" d="M551.945-5635.388v2.725a1.753,1.753,0,0,0,1.753,1.753H566.41a1.753,1.753,0,0,0,1.753-1.753v-5.453h-4.944a3.248,3.248,0,0,1-3.165,2.529,3.248,3.248,0,0,1-3.166-2.529h-4.943" transform="translate(0 -8.323)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
        <path id="Path_140" data-name="Path 140" d="M560.054-5643.91a3.248,3.248,0,0,0,3.165-2.529h4.944l-2.581-6.5H554.526l-2.581,6.5h4.943A3.248,3.248,0,0,0,560.054-5643.91Z" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
      </g>
     </svg>
   
     @lang('theme.nav.dashboard')</a>
  </li>
  {{-- @if (customer_has_wallet())
    <li class="{{ $tab == 'wallet' || $tab == 'deposit' ? 'active' : '' }}">
      <a href="{{ route(config('wallet.routes.wallet')) }}"><i class="fas fa-credit-card"></i> @lang('wallet::lang.my_wallet')</a>
    </li>
  @endif --}}
  <!-- <li class="{{ $tab == 'messages' || $tab == 'message' ? 'active' : '' }}">
    <a href="{{ route('account', 'messages') }}">
     <svg xmlns="http://www.w3.org/2000/svg" width="18.218" height="14.597" viewBox="0 0 18.218 14.597">
        <g id="Group_213" data-name="Group 213" transform="translate(-739.718 5652.286)">
          <path id="Path_141" data-name="Path 141" d="M756.936-5647.169v6.678a1.8,1.8,0,0,1-1.8,1.8H742.52a1.8,1.8,0,0,1-1.8-1.8v-9.443a1.352,1.352,0,0,1,1.352-1.352h14.867l-.56.547" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
          <path id="Path_142" data-name="Path 142" d="M757.1-5650l-7.549,6.13-7.517-6.13" transform="translate(-0.722 -0.707)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
        </g>
      </svg>

     @lang('theme.my_messages')</a>
  </li> -->
  <li class="{{ $tab == 'orders' ? 'active' : '' }}">
    <a href="{{ route('account', 'orders') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="18.107" height="18.418" viewBox="0 0 18.107 18.418">
        <g id="Group_217" data-name="Group 217" transform="translate(-1493.158 5656.305)">
          <path id="Path_147" data-name="Path 147" d="M1503.353-5651.382a3.923,3.923,0,0,1,3.923-3.924h0a3.923,3.923,0,0,1,3.923,3.924v.839" transform="translate(-4.998 0)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
          <path id="Path_148" data-name="Path 148" d="M1506.2-5644.863h2.688a1.369,1.369,0,0,1,1.337,1.659l-1.9,8.764a1.566,1.566,0,0,1-1.53,1.233h-9.165a1.565,1.565,0,0,1-1.53-1.233l-1.9-8.764a1.369,1.369,0,0,1,1.337-1.659h7.8" transform="translate(0 -5.68)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
          <line id="Line_121" data-name="Line 121" x2="11.106" transform="translate(1497.971 -5643.749)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
        </g>
      </svg>

     @lang('theme.nav.my_orders')</a>
  </li>
  <li class="{{ $tab == 'wishlist' ? 'active' : '' }}">
    <a href="{{ route('account', 'wishlist') }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="18.294" height="16.001" viewBox="0 0 18.294 16.001">
        <path id="Path_473" data-name="Path 473" d="M937.1-5275.781c-2.262-4.01-7.431-2.961-8.047.716-.672,4.012,3.98,8.3,8.047,10.71,4.066-2.405,8.865-6.68,8.047-10.71-.742-3.653-5.784-4.726-8.047-.716" transform="translate(-927.971 5279.356)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
      </svg>

     @lang('theme.nav.my_wishlist')</a>
  </li>
  <li class="{{ $tab == 'disputes' ? 'active' : '' }}">
    <a href="{{ route('account', 'disputes') }}">
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

     @lang('theme.nav.refunds_disputes')</a>
  </li>
  <li class="{{ $tab == 'coupons' ? 'active' : '' }}">
    <a href="{{ route('account', 'coupons') }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="13.861" height="17.558" viewBox="0 0 13.861 17.558">
        <path id="Path_474" data-name="Path 474" d="M933.267-5078.063v-12.965a2.593,2.593,0,0,1,2.593-2.593h9.268l-2.073,4.37,2.073,4.37h-8.615" transform="translate(-932.267 5094.621)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
      </svg>

     @lang('theme.nav.my_coupons')</a>
  </li>
  {{-- <li class="{{ $tab == 'gift_cards' ? 'active' : '' }}">
        <a href="{{ route('account', 'gift_cards') }}"><i class="fas fa-gift"></i> @lang('theme.nav.gift_cards')</a>
    </li> --}}
  <li class="{{ $tab == 'account' ? 'active' : '' }}">
    <a href="{{ route('account', 'account') }}">
     <svg xmlns="http://www.w3.org/2000/svg" width="15.931" height="15.931" viewBox="0 0 15.931 15.931">
        <g id="Group_225" data-name="Group 225" transform="translate(-552.445 5468.077)">
          <g id="Group_224" data-name="Group 224" transform="translate(556.457 -5467.077)">
            <circle id="Ellipse_25" data-name="Ellipse 25" cx="3.954" cy="3.954" r="3.954" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
          </g>
          <path id="Path_156" data-name="Path 156" d="M567.376-5441.755h0a6.024,6.024,0,0,0-6.024-6.024h-1.884a6.024,6.024,0,0,0-6.023,6.024h0" transform="translate(0 -11.391)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
        </g>
      </svg>

     @lang('theme.nav.my_account')</a>
  </li>
    <li class="{{ $tab == 'getAccountPayment' ? 'active' : '' }}">
        <a href="{{ route('account', 'getAccountPayment') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="15.931" height="15.931" viewBox="0 0 15.931 15.931">
                <g id="Group_225" data-name="Group 225" transform="translate(-552.445 5468.077)">
                    <g id="Group_224" data-name="Group 224" transform="translate(556.457 -5467.077)">
                        <circle id="Ellipse_25" data-name="Ellipse 25" cx="3.954" cy="3.954" r="3.954" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                    <path id="Path_156" data-name="Path 156" d="M567.376-5441.755h0a6.024,6.024,0,0,0-6.024-6.024h-1.884a6.024,6.024,0,0,0-6.023,6.024h0" transform="translate(0 -11.391)" fill="none" stroke="#52575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </g>
            </svg>
            Account Payment
            </a>
    </li>
</ul>
