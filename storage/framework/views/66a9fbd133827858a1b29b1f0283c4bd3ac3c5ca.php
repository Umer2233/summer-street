<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar main-sidebar-custom">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="<?php echo e(Request::is('admin/dashboard*') ? 'active' : '', false); ?>">
        <a href="<?php echo e(url('admin/dashboard'), false); ?>">
         <svg id="dashboard" class="sidebar-left-icons" xmlns="http://www.w3.org/2000/svg" width="24.326" height="17.839" viewBox="0 0 24.326 17.839">
         <path id="Path_11" data-name="Path 11" d="M1096.912,1517.415h11.352v-8.109h-11.352Zm1.878-6h7.6v3.9h-7.6Z" transform="translate(-1083.938 -1499.575)" fill="#d0dbe5"/>
         <path id="Path_22" data-name="Path 22" d="M1096.912,1517.415h11.352v-8.109h-11.352Zm1.878-6h7.6v3.9h-7.6Z" transform="translate(-1096.912 -1499.575)" fill="#d0dbe5"/>
         <path id="Path_20" data-name="Path 20" d="M1096.912,1517.415h11.352v-8.109h-11.352Zm1.878-6h7.6v3.9h-7.6Z" transform="translate(-1083.938 -1509.306)" fill="#d0dbe5"/>
         <path id="Path_21" data-name="Path 21" d="M1096.912,1517.415h11.352v-8.109h-11.352Zm1.878-6h7.6v3.9h-7.6Z" transform="translate(-1096.912 -1509.306)" fill="#d0dbe5"/>
         </svg>

          <span><?php echo e(trans('nav.dashboard'), false); ?></span>
        </a>
      </li>

      <?php if(Gate::allows('index', \App\Category::class) || Gate::allows('index', \App\Attribute::class) || Gate::allows('index', \App\Product::class) || Gate::allows('index', \App\Manufacturer::class) || Gate::allows('index', \App\CategoryGroup::class) || Gate::allows('index', \App\CategorySubGroup::class)): ?>
        <li class="treeview <?php echo e(Request::is('admin/catalog*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <svg class="sidebar-left-icons" xmlns="http://www.w3.org/2000/svg" width="17.024" height="22.153" viewBox="0 0 17.024 22.153">
            <g id="trading_view" data-name="trading view" transform="translate(0 22.153) rotate(-90)">
            <rect id="Rectangle_21" data-name="Rectangle 21" width="7.254" height="1.736" transform="translate(14.899 1.404)" fill="#d0dbe5"/>
            <rect id="Rectangle_22" data-name="Rectangle 22" width="7.722" height="1.736" transform="translate(0 1.404)" fill="#d0dbe5"/>
            <path id="Path_27" data-name="Path 27" d="M5.886,0H0V4.545H5.886ZM4.149,2.808H1.736V1.736H4.149Z" transform="translate(8.29)" fill="#d0dbe5"/>
            <rect id="Rectangle_23" data-name="Rectangle 23" width="2.574" height="1.736" transform="translate(19.579 7.644)" fill="#d0dbe5"/>
            <rect id="Rectangle_24" data-name="Rectangle 24" width="12.402" height="1.736" transform="translate(0 7.644)" fill="#d0dbe5"/>
            <path id="Path_28" data-name="Path 28" d="M5.886,0H0V4.545H5.886ZM4.149,2.808H1.736V1.736H4.149Z" transform="translate(12.97 6.24)" fill="#d0dbe5"/>
            <rect id="Rectangle_25" data-name="Rectangle 25" width="10.375" height="1.736" transform="translate(11.778 13.884)" fill="#d0dbe5"/>
            <rect id="Rectangle_26" data-name="Rectangle 26" width="4.602" height="1.736" transform="translate(0 13.884)" fill="#d0dbe5"/>
            <path id="Path_29" data-name="Path 29" d="M5.886,4.544V0H0V4.544ZM1.736,1.736H4.149V2.808H1.736Z" transform="translate(5.17 12.48)" fill="#d0dbe5"/>
             </g>
            </svg>

            <span><?php echo e(trans('nav.catalog'), false); ?></span>
            <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
            <g id="Group_50" data-name="Group 50">
            <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
            </g>
            </svg>
          </a>
          <ul class="treeview-menu">
            <?php if(Gate::allows('index', \App\Category::class) || Gate::allows('index', \App\CategoryGroup::class) || Gate::allows('index', \App\CategorySubGroup::class)): ?>
              <li class="<?php echo e(Request::is('admin/catalog/category*') ? 'active' : '', false); ?>">
                <a href="javascript:void(0)">
                   <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>

                  <?php echo e(trans('nav.categories'), false); ?>

                   <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
                </a>
                <ul class="treeview-menu">
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\CategoryGroup::class)): ?>
                    <li class="<?php echo e(Request::is('admin/catalog/categoryGroup*') ? 'active' : '', false); ?>">
                      <a href="<?php echo e(route('admin.catalog.categoryGroup.index'), false); ?>">
                         <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                        <?php echo e(trans('nav.groups'), false); ?>

                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\CategorySubGroup::class)): ?>
                    <li class="<?php echo e(Request::is('admin/catalog/categorySubGroup*') ? 'active' : '', false); ?>">
                      <a href="<?php echo e(route('admin.catalog.categorySubGroup.index'), false); ?>">
                         <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                        <?php echo e(trans('nav.sub-groups'), false); ?>

                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Category::class)): ?>
                    <li class="<?php echo e(Request::is('admin/catalog/category') ? 'active' : '', false); ?>">
                      <a href="<?php echo e(url('admin/catalog/category'), false); ?>">
                         <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                        <?php echo e(trans('nav.categories'), false); ?>

                      </a>
                    </li>
                  <?php endif; ?>
                </ul>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Attribute::class)): ?>
              <li class="<?php echo e(Request::is('admin/catalog/attribute*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/catalog/attribute'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.attributes'), false); ?>

                </a>
              </li>
            <?php endif; ?>

             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Product::class)): ?>
              <li class="<?php echo e(Request::is('admin/catalog/product*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/catalog/product'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.products'), false); ?>

                </a>
              </li>
            <?php endif; ?> 

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Manufacturer::class)): ?>
              <li class="<?php echo e(Request::is('admin/catalog/manufacturer*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/catalog/manufacturer'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.manufacturers'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          </ul>
        </li>
      <?php endif; ?>

      <?php if(Gate::allows('index', \App\Inventory::class) || Gate::allows('index', \App\Warehouse::class) || Gate::allows('index', \App\Supplier::class)): ?>
        <li class="treeview <?php echo e(Request::is('admin/stock*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <i class="fa fa-cubes"></i>
            <span><?php echo e(trans('nav.stock'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Inventory::class)): ?>
              <li class="<?php echo e(Request::is('admin/stock/inventory*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/stock/inventory'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.inventories'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Warehouse::class)): ?>
              <li class="<?php echo e(Request::is('admin/stock/warehouse*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/stock/warehouse'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.warehouses'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Supplier::class)): ?>
              <li class="<?php echo e(Request::is('admin/stock/supplier*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/stock/supplier'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.suppliers'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          </ul>
        </li>
      <?php endif; ?>

      <?php if(Gate::allows('index', \App\Order::class) || Gate::allows('index', \App\Cart::class)): ?>
        <li class="treeview <?php echo e(Request::is('admin/order*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <svg id="files" class="sidebar-left-icons" xmlns="http://www.w3.org/2000/svg" width="21.17" height="19.234" viewBox="0 0 21.17 19.234">
            <path id="Path_26" data-name="Path 26" d="M904.545,2342.523h16.748l2.211-14h-21.17Zm15.187-1.827H906.107l-1.634-10.346h16.892Z" transform="translate(-902.335 -2323.29)" fill="#d0dbe5"/>
            <rect id="Rectangle_17" data-name="Rectangle 17" width="7.372" height="1.827" transform="translate(6.898 9.349)" fill="#d0dbe5"/>
            <rect id="Rectangle_18" data-name="Rectangle 18" width="17.488" height="1.827" transform="translate(1.841 2.617)" fill="#d0dbe5"/>
            <rect id="Rectangle_19" data-name="Rectangle 19" width="13.488" height="1.827" transform="translate(3.841)" fill="#d0dbe5"/>
          </svg>

            <span><?php echo e(trans('nav.orders'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Order::class)): ?>
              <li class="<?php echo e(Request::is('admin/order/order*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/order/order'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.orders'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Cart::class)): ?>
              <li class="<?php echo e(Request::is('admin/order/cart*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/order/cart'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.carts'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancelAny', \App\Order::class)): ?>
              <li class="<?php echo e(Request::is('admin/order/cancellation*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/order/cancellation'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.cancellations'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            
            
            
          </ul>
        </li>
      <?php endif; ?>

      <?php if(Gate::allows('index', \App\User::class) || Gate::allows('index', \App\Customer::class)): ?>
        <li class="treeview <?php echo e(Request::is('admin/admin*') || Request::is('address/addresses/customer*') || Request::is('admin/inspector*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <svg id="Group_140" class="sidebar-left-icons" data-name="Group 140" xmlns="http://www.w3.org/2000/svg" width="24.305" height="19.65" viewBox="0 0 24.305 19.65">
            <path id="Path_18" data-name="Path 18" d="M293.085,2237.61a4.329,4.329,0,0,0-2.68.936,5.429,5.429,0,1,0-.211,6.637,4.339,4.339,0,1,0,2.892-7.573Zm-7.077,7.673a3.559,3.559,0,1,1,3.559-3.559A3.563,3.563,0,0,1,286.009,2245.283Zm7.077-.864a2.439,2.439,0,0,1-1.932-.964,5.306,5.306,0,0,0,.1-3.129,2.46,2.46,0,1,1,1.834,4.093Z" transform="translate(-276.354 -2236.292)" fill="#d0dbe5"/>
            <path id="Path_19" data-name="Path 19" d="M291.673,2249.869a8.333,8.333,0,0,0-5.14,1.687,11.64,11.64,0,0,0-1.936-.166c-4.856,0-8.941,2.961-9.5,6.886l-.153,1.069h19.31l-.153-1.069a6.616,6.616,0,0,0-.6-1.927h5.744l-.153-1.069C298.652,2252.2,295.462,2249.869,291.673,2249.869Zm-14.442,7.6c.962-2.461,3.917-4.209,7.365-4.209s6.4,1.748,7.365,4.209Zm17.883-3h-2.9A9.365,9.365,0,0,0,289,2252.27a6.984,6.984,0,0,1,2.673-.528,5.764,5.764,0,0,1,5.228,2.734Z" transform="translate(-274.941 -2239.695)" fill="#d0dbe5"/>
          </svg>

            <span><?php echo e(trans('nav.admin'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\User::class)): ?>
              <li class="<?php echo e(Request::is('admin/admin/user*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/admin/user'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.users'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Customer::class)): ?>
              <li class="<?php echo e(Request::is('admin/admin/customer*') || Request::is('address/addresses/customer*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/admin/customer'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.customers'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if(Auth::user()->isAdmin() && is_incevio_package_loaded('inspector')): ?>
              <li class="<?php echo e(Request::is('admin/inspector/inspectables*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/inspector/inspectables'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('inspector::lang.inspectables'), false); ?>

                </a>
              </li>
            <?php endif; ?>

          </ul>
        </li>
      <?php endif; ?>

      <?php if(Gate::allows('index', \App\Merchant::class) || Gate::allows('index', \App\Shop::class)): ?>
        <li class="treeview <?php echo e(Request::is('admin/vendor*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <svg id="analytics" class="sidebar-left-icons" xmlns="http://www.w3.org/2000/svg" width="25.978" height="25.977" viewBox="0 0 25.978 25.977">
            <path id="Path_24" data-name="Path 24" d="M731.17,1350.038a11.768,11.768,0,0,0,11.755-11.755v-.876H732.046v-10.878h-.876a11.755,11.755,0,1,0,0,23.509Zm-.876-21.72v10.841h10.841a10,10,0,1,1-10.841-10.841Z" transform="translate(-719.415 -1324.061)" fill="#d0dbe5"/>
            <path id="Path_25" data-name="Path 25" d="M751.37,1335.216a12.121,12.121,0,0,0-12.107-12.107h-.9v13.009H751.37Zm-11.205-.9v-9.361a10.319,10.319,0,0,1,9.361,9.361Z" transform="translate(-725.392 -1323.109)" fill="#d0dbe5"/>
          </svg>

            <span><?php echo e(trans('nav.vendors'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Shop::class)): ?>
              <li class="<?php echo e(Request::is('admin/vendor/merchant*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/vendor/merchant'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.merchants'), false); ?>

                </a>
              </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Shop::class)): ?>
              <!-- <li class="<?php echo e(Request::is('admin/vendor/shop*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/vendor/shop'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.shops'), false); ?>

                </a>
              </li> -->
            <?php endif; ?>
          </ul>
        </li>
      <?php endif; ?>

      <?php if(is_incevio_package_loaded('wallet')): ?>
        <?php if(Auth::user()->isAdmin()): ?>
          <li class="treeview <?php echo e(Request::is('admin/account*') || Request::is('admin/payout/requests*') ? 'active' : '', false); ?>">
            <a href="javascript:void(0)">
              <i class="fa fa-money"></i>
              <span><?php echo e(trans('wallet::lang.wallet'), false); ?></span>
               <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
            </a>
            <ul class="treeview-menu">
              <li class="<?php echo e(Request::is('admin/payout/requests*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/payout/requests'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('wallet::lang.payout_requests'), false); ?>

                </a>
              </li>

              <li class="<?php echo e(Request::is('admin/account/wallet/payouts*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/account/wallet/payouts'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('wallet::lang.payouts'), false); ?>

                </a>
              </li>
            </ul>
          </li>
        <?php elseif(Auth::user()->isMerchant()): ?>
          <li class="<?php echo e(Request::is('account/wallet*') ? 'active' : '', false); ?>">
            <a href="<?php echo e(route(config('wallet.routes.wallet')), false); ?>">
              <i class="fa fa-money"></i> <span><?php echo e(trans('wallet::lang.wallet'), false); ?></span>
            </a>
          </li>
        <?php endif; ?>
      <?php endif; ?>

      <?php if(Gate::allows('index', \App\Carrier::class) || Gate::allows('index', \App\Packaging::class)): ?>
        <li class="treeview <?php echo e(Request::is('admin/shipping*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <i class="fa fa-truck"></i>
            <span><?php echo e(trans('nav.shipping'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Carrier::class)): ?>
              <li class="<?php echo e(Request::is('admin/shipping/carrier*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/shipping/carrier'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.carriers'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Packaging::class)): ?>
              <li class="<?php echo e(Request::is('admin/shipping/packaging*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/shipping/packaging'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.packaging'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\ShippingZone::class)): ?>
              <li class="<?php echo e(Request::is('admin/shipping/shippingZone*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/shipping/shippingZone'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.shipping_zones'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          </ul>
        </li>
      <?php endif; ?>

      
      <?php if(Auth::user()->isFromMerchant()): ?>
        <?php if(Gate::allows('index', \App\Coupon::class) || Gate::allows('index', \App\GiftCard::class)): ?>
          <li class="treeview <?php echo e(Request::is('admin/promotion*') ? 'active' : '', false); ?>">
            <a href="javascript:void(0)">
              <i class="fa fa-paper-plane"></i>
              <span><?php echo e(trans('nav.promotions'), false); ?></span>
               <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
            </a>
            <ul class="treeview-menu">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Coupon::class)): ?>
                <li class="<?php echo e(Request::is('admin/promotion/coupon*') ? 'active' : '', false); ?>">
                  <a href="<?php echo e(url('admin/promotion/coupon'), false); ?>">
                    <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                     <?php echo e(trans('nav.coupons'), false); ?>

                  </a>
                </li>
              <?php endif; ?>
              
            </ul>
          </li>
        <?php endif; ?>
      <?php endif; ?>

      <?php if(Gate::allows('index', \App\Message::class) || Gate::allows('index', \App\Ticket::class) || Gate::allows('index', \App\Dispute::class) || Gate::allows('index', \App\Refund::class)): ?>
        <li class="treeview <?php echo e(Request::is('admin/support*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <svg id="calendar" class="sidebar-left-icons" xmlns="http://www.w3.org/2000/svg" width="25.077" height="23.007" viewBox="0 0 25.077 23.007">
            <rect id="Rectangle_29" data-name="Rectangle 29" width="2.027" height="5.102" transform="translate(7.033)" fill="#d0dbe5"/>
            <rect id="Rectangle_30" data-name="Rectangle 30" width="2.027" height="5.102" transform="translate(15.83)" fill="#d0dbe5"/>
            <path id="Path_33" data-name="Path 33" d="M1105.107,1745.2h-5.853v2.027h3.825v17.151h-21.023v-17.151h3.385V1745.2h-5.412V1766.4h25.077Z" transform="translate(-1080.03 -1743.396)" fill="#d0dbe5"/>
            <rect id="Rectangle_31" data-name="Rectangle 31" width="3.519" height="2.027" transform="translate(10.603 1.802)" fill="#d0dbe5"/>
            <path id="Subtraction_5" data-name="Subtraction 5" d="M5.729,5.729H0V0H5.729V5.728ZM1.791,1.791v2.2h2.2v-2.2Z" transform="translate(16.065 6.975)" fill="#d0dbe5" stroke="rgba(0,0,0,0)" stroke-width="1"/>
            <path id="Subtraction_6" data-name="Subtraction 6" d="M5.729,5.729H0V0H5.729V5.728ZM1.791,1.791v2.2h2.2v-2.2Z" transform="translate(9.695 6.975)" fill="#d0dbe5" stroke="rgba(0,0,0,0)" stroke-width="1"/>
            <path id="Subtraction_9" data-name="Subtraction 9" d="M5.729,5.729H0V0H5.729V5.728ZM1.791,1.791v2.2h2.2v-2.2Z" transform="translate(9.695 13.462)" fill="#d0dbe5" stroke="rgba(0,0,0,0)" stroke-width="1"/>
            <path id="Subtraction_7" data-name="Subtraction 7" d="M5.729,5.729H0V0H5.729V5.728ZM1.791,1.791v2.2h2.2v-2.2Z" transform="translate(3.325 6.975)" fill="#d0dbe5" stroke="rgba(0,0,0,0)" stroke-width="1"/>
            <path id="Subtraction_8" data-name="Subtraction 8" d="M5.729,5.729H0V0H5.729V5.728ZM1.791,1.791v2.2h2.2v-2.2Z" transform="translate(3.325 13.462)" fill="#d0dbe5" stroke="rgba(0,0,0,0)" stroke-width="1"/>
          </svg>

            <span><?php echo e(trans('nav.support'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\ChatConversation::class)): ?>
              <li class="<?php echo e(Request::is('admin/support/chat*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/support/chat'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.chats'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Message::class)): ?>
              <li class="<?php echo e(Request::is('admin/support/message*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/support/message/labelOf/' . \App\Message::LABEL_INBOX), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.support_messages'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if(Auth::user()->isFromPlatform()): ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Ticket::class)): ?>
                <li class="<?php echo e(Request::is('admin/support/ticket*') ? 'active' : '', false); ?>">
                  <a href="<?php echo e(url('admin/support/ticket'), false); ?>">
                    <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                     <?php echo e(trans('nav.support_tickets'), false); ?>

                  </a>
                </li>
              <?php endif; ?>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Dispute::class)): ?>
              <li class="<?php echo e(Request::is('admin/support/dispute*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/support/dispute'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.disputes'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Refund::class)): ?>
              <li class="<?php echo e(Request::is('admin/support/refund*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/support/refund'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.refunds'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          </ul>
        </li>
      <?php endif; ?>

      <?php if((new \App\Helpers\Authorize(Auth::user(), 'customize_appearance'))->check()): ?>
      <li class="treeview <?php echo e(Request::is('admin/appearance*') ? 'active' : '', false); ?>">
        <a href="javascript:void(0)">
          <svg class="sidebar-left-icons" xmlns="http://www.w3.org/2000/svg" width="22.523" height="23.159" viewBox="0 0 22.523 23.159">
          <g id="ninja" transform="translate(0.25 0.25)">
            <path id="Path_138" data-name="Path 138" d="M57.509,20.485a1.959,1.959,0,0,0-2.361-1.923,1.344,1.344,0,0,0-.359-.481,1.935,1.935,0,0,0,.162-1.469,2.727,2.727,0,0,0,1.138-5.085,1.211,1.211,0,0,0-.231-1.165,1.835,1.835,0,0,0-1.127-2.556A1.7,1.7,0,0,0,52,6.575V4.694a4.694,4.694,0,1,0-9.387,0V6.73a2.369,2.369,0,0,0-1.842,1.75,2.867,2.867,0,0,0-1.949,4.671,1.567,1.567,0,0,0-.046,1,2.537,2.537,0,0,0,1.176,4.555q0,.027,0,.055a1.759,1.759,0,0,0,1.174,1.657,1.235,1.235,0,0,0,.722,2.238H57.322a1.095,1.095,0,0,0,.188-2.173ZM53.032,6.894a1.04,1.04,0,0,1,1.038,1.038,1.052,1.052,0,0,1-.006.109.333.333,0,0,0,.289.364,1.169,1.169,0,0,1,.81,1.831.333.333,0,0,0,.083.465.547.547,0,0,1,.237.45.541.541,0,0,1-.11.328.333.333,0,0,0,.14.508,2.062,2.062,0,0,1-.778,3.971h-.122a1.915,1.915,0,0,0-1-.66A2.652,2.652,0,0,0,52,13.72V7.8a1.036,1.036,0,0,1,1.029-.907ZM40.619,18.764a1.094,1.094,0,0,1,.037-.282.333.333,0,0,0-.329-.418h-.041a1.872,1.872,0,0,1-.934-3.494.332.332,0,0,0,.13-.44.9.9,0,0,1,.025-.868.333.333,0,0,0-.047-.4,2.2,2.2,0,0,1,1.58-3.732h.012a.332.332,0,0,0,.33-.291,1.7,1.7,0,0,1,1.234-1.429v8.3a.333.333,0,1,0,.665,0V7.1a4.7,4.7,0,0,0,5.238,2.13.333.333,0,1,0-.171-.643,4.031,4.031,0,1,1,1.2-.542.333.333,0,0,0,.37.553,4.7,4.7,0,0,0,1.423-1.5v.67h0V13.58a2.653,2.653,0,0,0-2.865,2.51c0,.07,0,.14,0,.21a.169.169,0,0,1-.048.123.162.162,0,0,1-.117.049.173.173,0,0,1-.146-.088,1.846,1.846,0,0,0-3.409.7,1.866,1.866,0,0,0-.005.461A1.463,1.463,0,0,0,44,18a1.763,1.763,0,0,0-.72-.167v-.7a.333.333,0,0,0-.665,0v.819A1.757,1.757,0,0,0,41.5,19.469a1.778,1.778,0,0,0,.015.369A1.093,1.093,0,0,1,40.619,18.764Zm16.7,3.23H41.85a.571.571,0,0,1,0-1.142h.33a.332.332,0,0,0,.25-.551A1.091,1.091,0,0,1,43.9,18.7a.333.333,0,0,0,.49-.11.8.8,0,0,1,.7-.42h.044a.332.332,0,0,0,.332-.442,1.181,1.181,0,0,1,2.125-1,.833.833,0,0,0,.715.409.831.831,0,0,0,.829-.855c0-.052,0-.106,0-.159a1.992,1.992,0,0,1,3.9-.45.333.333,0,0,0,.266.236,1.261,1.261,0,0,1,.761,2.055.332.332,0,0,0,.123.519.672.672,0,0,1,.4.536.333.333,0,0,0,.459.267,1.286,1.286,0,0,1,.58-.1,1.293,1.293,0,0,1,1.187,1.547.333.333,0,0,0,.326.4h.177a.43.43,0,0,1,0,.86Z" transform="translate(-36.393 0)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_139" data-name="Path 139" d="M180.888,36.063a2.7,2.7,0,1,1,2.7-2.7.333.333,0,0,0,.665,0,3.364,3.364,0,1,0-3.364,3.364.333.333,0,1,0,0-.665Z" transform="translate(-169.971 -28.671)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_140" data-name="Path 140" d="M209.558,60a.333.333,0,1,0,0,.665,1.369,1.369,0,1,1-1.369,1.369.332.332,0,1,0-.665,0A2.034,2.034,0,1,0,209.558,60Z" transform="translate(-198.642 -57.341)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_141" data-name="Path 141" d="M185.432,213.127a.332.332,0,0,0,.332-.333v-3.327a.333.333,0,1,0-.665,0v3.327A.332.332,0,0,0,185.432,213.127Z" transform="translate(-177.211 -199.863)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_142" data-name="Path 142" d="M185.432,318.459a.332.332,0,0,0,.332-.333v-.34a.333.333,0,0,0-.665,0v.34A.332.332,0,0,0,185.432,318.459Z" transform="translate(-177.211 -303.38)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_143" data-name="Path 143" d="M309.509,212.434a.332.332,0,0,0,.333-.333v-2.635a.333.333,0,1,0-.665,0V212.1A.332.332,0,0,0,309.509,212.434Z" transform="translate(-295.788 -199.862)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_144" data-name="Path 144" d="M246.228,248.276a.332.332,0,0,0,.333-.333v-3.009a.333.333,0,0,0-.665,0v3.009A.332.332,0,0,0,246.228,248.276Z" transform="translate(-235.312 -233.758)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_145" data-name="Path 145" d="M92.257,232.885a.333.333,0,1,0,0-.665.443.443,0,1,1,0-.887.333.333,0,1,0,0-.665,1.108,1.108,0,1,0,0,2.217Z" transform="translate(-87.426 -220.442)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_146" data-name="Path 146" d="M94.779,341.4a.332.332,0,1,0,0,.665.37.37,0,1,1,0,.741.332.332,0,1,0,0,.665,1.035,1.035,0,1,0,0-2.07Z" transform="translate(-90.577 -326.263)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_147" data-name="Path 147" d="M312.428,392.528a.332.332,0,0,0-.332.333.48.48,0,1,1-.48-.48.333.333,0,0,0,0-.665,1.145,1.145,0,1,0,1.145,1.145A.332.332,0,0,0,312.428,392.528Z" transform="translate(-297.025 -374.35)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_148" data-name="Path 148" d="M197.984,428.07a1.212,1.212,0,0,0-1.21,1.21.332.332,0,1,0,.665,0,.545.545,0,1,1,.545.545.332.332,0,1,0,0,.665,1.21,1.21,0,1,0,0-2.421Z" transform="translate(-188.368 -409.092)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_149" data-name="Path 149" d="M391.215,465.382h-.694a.333.333,0,0,0,0,.665h.694a.333.333,0,0,0,0-.665Z" transform="translate(-373.208 -444.75)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_150" data-name="Path 150" d="M318.819,346.2h.457a.333.333,0,0,0,0-.665h-.457a.333.333,0,0,0,0,.665Z" transform="translate(-304.684 -330.213)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_151" data-name="Path 151" d="M161.78,460.038h-.271a.333.333,0,1,0,0,.665h.271a.333.333,0,0,0,0-.665Z" transform="translate(-154.349 -439.643)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_152" data-name="Path 152" d="M283.9,460.038h-.579a.333.333,0,1,0,0,.665h.579a.333.333,0,0,0,0-.665Z" transform="translate(-270.762 -439.643)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_153" data-name="Path 153" d="M375.642,244.673h.578a.332.332,0,1,0,0-.665h-.578a.332.332,0,1,0,0,.665Z" transform="translate(-358.988 -233.19)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_154" data-name="Path 154" d="M429.055,304.87h.307a.332.332,0,0,0,0-.665h-.307a.332.332,0,0,0,0,.665Z" transform="translate(-410.034 -290.719)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_155" data-name="Path 155" d="M409.147,44.811h1.111a1.322,1.322,0,1,0-1.1-2.06h-.012a1.03,1.03,0,1,0,0,2.06Zm0-1.395a.365.365,0,0,1,.1.015.332.332,0,0,0,.4-.193.657.657,0,1,1,.608.907h-1.111a.365.365,0,1,1,0-.73Z" transform="translate(-390.341 -40.297)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
            <path id="Path_156" data-name="Path 156" d="M11.944,53.339a1.207,1.207,0,0,0-1.206-1.206h-.009a1.206,1.206,0,0,0-2.318,0H8.374a1.206,1.206,0,0,0,0,2.411h2.365a1.207,1.207,0,0,0,1.206-1.206Zm-4.111,0a.54.54,0,0,1,.742-.5.333.333,0,0,0,.456-.332V52.5c0-.011,0-.022,0-.034a.541.541,0,0,1,1.081,0c0,.006,0,.011,0,.017V52.5a.332.332,0,0,0,.445.333.54.54,0,1,1,.185,1.048H8.374A.541.541,0,0,1,7.833,53.339Z" transform="translate(-7.168 -48.987)" fill="#d0dbe5" stroke="#d0dbe5" stroke-width="0.5"/>
          </g>
        </svg>

          <span><?php echo e(trans('nav.appearance'), false); ?></span>
           <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo e(Request::is('admin/appearance/theme') ? 'active' : '', false); ?>">
            <a href="<?php echo e(url('admin/appearance/theme'), false); ?>">
              <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
               <?php echo e(trans('nav.themes'), false); ?>

            </a>
          </li>

          <li class="<?php echo e(Request::is('admin/appearance/banner*') ? 'active' : '', false); ?>">
            <a href="<?php echo e(url('admin/appearance/banner'), false); ?>">
              <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
               <?php echo e(trans('nav.banners'), false); ?>

            </a>
          </li>

          <li class="<?php echo e(Request::is('admin/appearance/slider*') ? 'active' : '', false); ?>">
            <a href="<?php echo e(url('admin/appearance/slider'), false); ?>">
              <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
               <?php echo e(trans('nav.sliders'), false); ?>

            </a>
          </li>
        </ul>
      </li>
      <?php endif; ?>

      
      <!-- <?php if(Auth::user()->isAdmin()): ?>
        <li class="treeview <?php echo e(Request::is('admin/promotions*') || Request::is('admin/flashdeal*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <svg id="megaphone_1_" class="sidebar-left-icons" data-name="megaphone (1)" xmlns="http://www.w3.org/2000/svg" width="21.114" height="19.326" viewBox="0 0 21.114 19.326">
            <path id="Path_90" data-name="Path 90" d="M426.53,296.959a.619.619,0,1,0-.875.875l1.248,1.248a.619.619,0,0,0,.875-.875Z" transform="translate(-407.929 -285.434)" fill="#d0dbe5"/>
            <path id="Path_91" data-name="Path 91" d="M426.093,119.263a.617.617,0,0,0,.437-.181l1.248-1.248a.619.619,0,1,0-.875-.875l-1.248,1.248a.619.619,0,0,0,.437,1.056Z" transform="translate(-407.929 -112.857)" fill="#d0dbe5"/>
            <path id="Path_92" data-name="Path 92" d="M441.59,221.907h-1.765a.619.619,0,1,0,0,1.237h1.765a.619.619,0,1,0,0-1.237Z" transform="translate(-421.095 -213.65)" fill="#d0dbe5"/>
            <path id="Path_93" data-name="Path 93" d="M16.464,21.754a.619.619,0,0,0-.625.012L8.755,26.1H5.61a2.417,2.417,0,0,0-1.8.66,2.5,2.5,0,0,0-.459.586H1.793A1.8,1.8,0,0,0,0,29.144v2.813A1.8,1.8,0,0,0,1.793,33.75H3.347a2.7,2.7,0,0,0,1.082,1.059L2.274,38.542a.619.619,0,0,0,.233.849l2.729,1.531a.618.618,0,0,0,.838-.23l3.077-5.33,6.694,3.978a.619.619,0,0,0,.935-.532V22.294a.619.619,0,0,0-.316-.54ZM1.793,32.513a.557.557,0,0,1-.556-.556V29.144a.557.557,0,0,1,.556-.556H3.016c0,.009,0,.018,0,.028v3.87c0,.009,0,.018,0,.028Zm2.459-3.9a1.307,1.307,0,0,1,.4-.95,1.192,1.192,0,0,1,.9-.325H8.31v6.549h-2.7a1.438,1.438,0,0,1-1.36-1.405ZM5.308,39.544l-1.65-.926,1.979-3.427a.62.62,0,0,0,.031-.063h2.19Zm10.235-1.823-6-3.563V27.07l6-3.672Z" transform="translate(0 -21.675)" fill="#d0dbe5"/>
          </svg>

            <span><?php echo e(trans('nav.promotions'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/promotions*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/promotions'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <span><?php echo e(trans('nav.promotions'), false); ?></span>
              </a>
            </li>

            <?php if(Auth::user()->isAdmin() && is_incevio_package_loaded('flashdeal')): ?>
              <li class="<?php echo e(Request::is('admin/flashdeal*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(route('admin.flashdeal'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('flashdeal::lang.flashdeal'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          </ul>
        </li>
      <?php endif; ?> -->

      <?php if(Auth::user()->isAdmin()): ?>
        <li class="<?php echo e(Request::is('admin/packages*') ? 'active' : '', false); ?>">
          <a href="<?php echo e(url('admin/packages'), false); ?>">
            <svg class="sidebar-left-icons setting-left-icon2" xmlns="http://www.w3.org/2000/svg" width="21.684" height="21.625" viewBox="0 0 21.684 21.625">
            <g id="package" transform="translate(0.25 0.25)">
              <path id="Path_157" data-name="Path 157" d="M72.714,390.224H70.689a.309.309,0,0,0,0,.619h2.024a.309.309,0,1,0,0-.619Z" transform="translate(-67.476 -374.153)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_158" data-name="Path 158" d="M72.714,365.026H70.689a.309.309,0,1,0,0,.619h2.024a.309.309,0,1,0,0-.619Z" transform="translate(-67.476 -349.995)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_159" data-name="Path 159" d="M72.714,339.827H70.689a.309.309,0,1,0,0,.619h2.024a.309.309,0,1,0,0-.619Z" transform="translate(-67.476 -325.836)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_160" data-name="Path 160" d="M283.278,390.224h-2.024a.309.309,0,0,0,0,.619h2.024a.309.309,0,1,0,0-.619Z" transform="translate(-269.353 -374.153)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_161" data-name="Path 161" d="M283.278,365.026h-2.024a.309.309,0,0,0,0,.619h2.024a.309.309,0,1,0,0-.619Z" transform="translate(-269.353 -349.995)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_162" data-name="Path 162" d="M283.278,339.827h-2.024a.309.309,0,0,0,0,.619h2.024a.309.309,0,1,0,0-.619Z" transform="translate(-269.353 -325.836)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_163" data-name="Path 163" d="M178,179.66h-2.024a.309.309,0,1,0,0,.619H178a.309.309,0,1,0,0-.619Z" transform="translate(-168.414 -172.277)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_164" data-name="Path 164" d="M178,154.461h-2.024a.309.309,0,1,0,0,.619H178a.309.309,0,1,0,0-.619Z" transform="translate(-168.414 -148.118)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_165" data-name="Path 165" d="M178,129.262h-2.024a.309.309,0,1,0,0,.619H178a.309.309,0,1,0,0-.619Z" transform="translate(-168.414 -123.958)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
              <path id="Path_166" data-name="Path 166" d="M20.558,18.092h-1a.834.834,0,0,0,.03-.219V10.242a.839.839,0,0,0-.838-.838H15.215a.834.834,0,0,0,.03-.219V6.092a.309.309,0,1,0-.619,0V9.186a.219.219,0,0,1-.219.219H6.776a.219.219,0,0,1-.219-.219V1.555a.219.219,0,0,1,.219-.219H8.865V4.32a.558.558,0,0,0,.862.466l.864-.565.864.565a.558.558,0,0,0,.862-.466V1.336h2.089a.219.219,0,0,1,.219.219V4.648a.309.309,0,0,0,.619,0V1.555a.839.839,0,0,0-.838-.838H6.776a.839.839,0,0,0-.838.838V9.186a.832.832,0,0,0,.03.219H2.433a.839.839,0,0,0-.838.838v7.631a.834.834,0,0,0,.03.219h-1A.626.626,0,0,0,0,18.718v.872a.626.626,0,0,0,.625.625h.513v.978a.649.649,0,0,0,.648.648h.949a.649.649,0,0,0,.648-.648v-.978H9.469v.978a.649.649,0,0,0,.648.648h.949a.649.649,0,0,0,.648-.648v-.978h2.321a.309.309,0,0,0,0-.619H.625a.006.006,0,0,1-.006-.006v-.872a.006.006,0,0,1,.006-.006H20.558a.006.006,0,0,1,.006.006v.872a.006.006,0,0,1-.006.006H15.479a.309.309,0,0,0,0,.619H17.8v.978a.649.649,0,0,0,.648.648H19.4a.649.649,0,0,0,.648-.648v-.978h.513a.626.626,0,0,0,.625-.625v-.872A.626.626,0,0,0,20.558,18.092ZM9.484,1.336H11.7v2.87l-.8-.525a.557.557,0,0,0-.61,0l-.8.525Zm.6,18.879H11.1v.978a.029.029,0,0,1-.029.029h-.949a.029.029,0,0,1-.029-.029Zm-8.331,0H2.765v.978a.029.029,0,0,1-.029.029H1.786a.029.029,0,0,1-.029-.029ZM13.828,10.024h2.215v2.87l-.8-.525a.557.557,0,0,0-.61,0l-.8.525Zm-8.688,0H7.356v2.87l-.8-.525a.557.557,0,0,0-.61,0l-.8.525Zm5.142,7.85a.222.222,0,0,1-.219.219H2.433a.222.222,0,0,1-.219-.219V10.242a.219.219,0,0,1,.219-.219H4.522v2.984a.558.558,0,0,0,.863.466l.864-.565.864.565a.558.558,0,0,0,.862-.466V10.024h2.089a.219.219,0,0,1,.219.219v7.631Zm8.688,0a.219.219,0,0,1-.219.219H11.12a.219.219,0,0,1-.219-.219V10.242a.219.219,0,0,1,.219-.219h2.089v2.984a.558.558,0,0,0,.862.466l.864-.565.864.565a.558.558,0,0,0,.862-.466V10.024h2.089a.219.219,0,0,1,.219.219v7.631Zm.457,3.32a.029.029,0,0,1-.029.029h-.949a.029.029,0,0,1-.029-.029v-.978h1.008Z" transform="translate(0 -0.717)" fill="#d0dce5" stroke="#d1dbe6" stroke-width="0.5"/>
            </g>
          </svg>

             <span><?php echo e(trans('nav.packages'), false); ?></span>
          </a>
        </li>
      <?php endif; ?>

      <li class="treeview <?php echo e(Request::is('admin/setting*') ? 'active' : '', false); ?>">
        <a href="javascript:void(0)">
          <svg class="sidebar-left-icons setting-left-icon" xmlns="http://www.w3.org/2000/svg" width="23.288" height="23.288" viewBox="0 0 23.288 23.288">
          <g id="settings" transform="translate(0.5 0.5)">
            <g id="Group_142" data-name="Group 142" transform="translate(0 7.429)">
              <g id="Group_141" data-name="Group 141">
                <path id="Path_167" data-name="Path 167" d="M13.744,165.572h-.409a.366.366,0,0,1-.344-.24c-.045-.119-.094-.235-.146-.35a.366.366,0,0,1,.074-.415l.291-.292a1.117,1.117,0,0,0,0-1.575l-1.05-1.05a1.117,1.117,0,0,0-1.575,0l-.291.291a.368.368,0,0,1-.415.074c-.115-.052-.231-.1-.351-.149a.365.365,0,0,1-.241-.345v-.409A1.114,1.114,0,0,0,8.172,160H6.686a1.114,1.114,0,0,0-1.114,1.114v.409a.366.366,0,0,1-.24.344c-.119.045-.235.094-.35.146a.367.367,0,0,1-.415-.074l-.292-.291a1.117,1.117,0,0,0-1.575,0L1.651,162.7a1.117,1.117,0,0,0,0,1.575l.291.291a.366.366,0,0,1,.074.415c-.052.115-.1.231-.147.351a.365.365,0,0,1-.347.24H1.114A1.114,1.114,0,0,0,0,166.686v1.486a1.114,1.114,0,0,0,1.114,1.114h.409a.366.366,0,0,1,.344.24c.045.119.094.235.146.35a.366.366,0,0,1-.074.415l-.291.292a1.117,1.117,0,0,0,0,1.575l1.05,1.05a1.117,1.117,0,0,0,1.575,0l.291-.291a.368.368,0,0,1,.415-.074c.115.052.231.1.351.149a.365.365,0,0,1,.243.345v.409a1.114,1.114,0,0,0,1.114,1.114H8.172a1.114,1.114,0,0,0,1.114-1.114v-.409a.366.366,0,0,1,.24-.344c.119-.045.235-.094.35-.146a.367.367,0,0,1,.415.074l.292.291a1.117,1.117,0,0,0,1.575,0l1.05-1.05a1.117,1.117,0,0,0,0-1.575l-.291-.291a.366.366,0,0,1-.074-.415c.052-.115.1-.231.149-.351a.365.365,0,0,1,.345-.241h.409a1.114,1.114,0,0,0,1.114-1.114v-1.486A1.114,1.114,0,0,0,13.744,165.572Zm.371,2.6a.371.371,0,0,1-.371.371h-.409a1.118,1.118,0,0,0-1.04.718q-.059.156-.128.307a1.118,1.118,0,0,0,.223,1.247l.29.291a.371.371,0,0,1,0,.525h0l-1.05,1.05a.371.371,0,0,1-.525,0l-.291-.291a1.117,1.117,0,0,0-1.247-.223c-.1.046-.2.088-.306.128a1.118,1.118,0,0,0-.718,1.039v.409a.371.371,0,0,1-.371.371H6.686a.371.371,0,0,1-.371-.371v-.409A1.118,1.118,0,0,0,5.6,172.3q-.156-.059-.307-.128a1.118,1.118,0,0,0-1.247.223l-.291.29a.371.371,0,0,1-.525,0h0l-1.05-1.049a.371.371,0,0,1,0-.525l.291-.291a1.118,1.118,0,0,0,.223-1.247c-.046-.1-.088-.2-.128-.306a1.118,1.118,0,0,0-1.039-.719H1.114a.371.371,0,0,1-.371-.371v-1.486a.371.371,0,0,1,.371-.371h.409a1.118,1.118,0,0,0,1.04-.718q.059-.156.128-.307a1.118,1.118,0,0,0-.223-1.247l-.292-.291a.371.371,0,0,1,0-.525h0l1.05-1.05a.371.371,0,0,1,.525,0l.291.291a1.117,1.117,0,0,0,1.247.223c.1-.046.2-.088.306-.128a1.118,1.118,0,0,0,.72-1.039v-.409a.371.371,0,0,1,.371-.371H8.172a.371.371,0,0,1,.371.371v.409a1.118,1.118,0,0,0,.718,1.04q.156.059.307.128a1.117,1.117,0,0,0,1.247-.223l.291-.29a.374.374,0,0,1,.526,0l1.05,1.05a.371.371,0,0,1,0,.525l-.291.291a1.118,1.118,0,0,0-.223,1.247c.046.1.088.2.128.306a1.118,1.118,0,0,0,1.039.718h.409a.371.371,0,0,1,.371.371v1.486Z" transform="translate(0 -160)" fill="#d0dbe5" stroke="#d1dbe6" stroke-width="1"/>
              </g>
            </g>
            <g id="Group_144" data-name="Group 144" transform="translate(4.084 11.515)">
              <g id="Group_143" data-name="Group 143">
                <path id="Path_168" data-name="Path 168" d="M94.639,251.195c0-.089-.01-.178-.021-.266s-.026-.189-.046-.282c-.013-.061-.03-.12-.046-.181q-.031-.115-.07-.226c-.018-.052-.037-.1-.056-.154a3.308,3.308,0,0,0-.164-.348c0-.009-.008-.018-.013-.026a3.3,3.3,0,0,0-.334-.487c-.011-.013-.023-.026-.034-.039-.051-.061-.1-.119-.159-.175-.029-.03-.059-.058-.09-.087s-.074-.069-.111-.1-.091-.077-.138-.114l-.061-.045A3.32,3.32,0,0,0,91.3,248c-.037,0-.074.006-.111.007-.079,0-.159.007-.238.015l-.126.015a3.405,3.405,0,0,0-.36.067,3.345,3.345,0,0,0,0,6.478.085.085,0,0,1,.019,0,3.551,3.551,0,0,0,.389.074c.087.011.173.013.26.017.058,0,.111.012.172.012.106,0,.216-.007.328-.018a.362.362,0,0,0,.037,0c.09-.01.182-.023.275-.042.037-.007.072-.016.107-.025.065-.015.13-.031.2-.051s.1-.034.153-.052l.156-.057c.053-.02.1-.043.145-.065s.124-.057.186-.09h0a4.4,4.4,0,0,0,.952-.688,1.17,1.17,0,0,0,.2-.244,3.966,3.966,0,0,0,.559-1.527c.01-.072.02-.143.025-.217s.009-.134.01-.2c0-.021,0-.041,0-.062C94.647,251.293,94.642,251.245,94.639,251.195Zm-.74.243c0,.031,0,.062,0,.092-.007.09-.018.18-.033.27a2.606,2.606,0,0,1-1.305,1.82c-.046.024-.091.047-.137.068l-.031.015a2.683,2.683,0,0,1-.678.205l-.05.008c-.046.007-.092.012-.137.016s-.12.008-.181.009h-.078a2.612,2.612,0,0,1-.263-.016l-.045-.005a2.746,2.746,0,0,1-.3-.057,2.6,2.6,0,0,1,0-5.037h0a2.691,2.691,0,0,1,.653-.082,2.565,2.565,0,0,1,.318.022l.084.013c.08.013.16.029.238.049l.077.02a2.622,2.622,0,0,1,.566.238l.085.052c.059.037.116.074.172.117.03.022.061.043.09.067a2.682,2.682,0,0,1,.209.186c.026.027.051.056.076.084.043.046.084.094.124.144.027.035.054.07.08.106.037.054.074.109.108.166l.056.092a2.55,2.55,0,0,1,.128.272c.015.037.027.074.041.111.024.068.045.137.063.207.009.037.02.07.027.106a2.617,2.617,0,0,1,.047.3c0,.027,0,.055,0,.082C93.9,251.266,93.9,251.352,93.9,251.438Z" transform="translate(-87.959 -248)" fill="#d0dbe5" stroke="#d1dbe6" stroke-width="1"/>
              </g>
            </g>
            <g id="Group_146" data-name="Group 146" transform="translate(4.052)">
              <g id="Group_145" data-name="Group 145">
                <path id="Path_169" data-name="Path 169" d="M104.383,7.8h-1.168a.363.363,0,0,1-.346-.244,7.737,7.737,0,0,0-.417-1.007.364.364,0,0,1,.071-.419l.828-.829a1.114,1.114,0,0,0,0-1.575l-1.579-1.577a1.114,1.114,0,0,0-1.575,0l-.828.828a.364.364,0,0,1-.419.072,7.717,7.717,0,0,0-1.007-.419.363.363,0,0,1-.245-.346V1.114A1.114,1.114,0,0,0,96.582,0H94.353a1.114,1.114,0,0,0-1.114,1.114V2.283A.363.363,0,0,1,93,2.629a7.741,7.741,0,0,0-1.007.419.363.363,0,0,1-.419-.071l-.829-.828a1.117,1.117,0,0,0-1.575,0L87.588,3.725a1.114,1.114,0,0,0,0,1.576l1.218,1.22A.371.371,0,0,0,89.332,6l-1.219-1.22a.371.371,0,0,1,0-.525l1.576-1.576a.371.371,0,0,1,.525,0l.83.828a1.1,1.1,0,0,0,1.276.21,7.028,7.028,0,0,1,.91-.379,1.105,1.105,0,0,0,.751-1.051V1.114a.371.371,0,0,1,.371-.371h2.229a.371.371,0,0,1,.371.371V2.283A1.1,1.1,0,0,0,97.7,3.333a7.006,7.006,0,0,1,.911.379,1.107,1.107,0,0,0,1.276-.21l.83-.828a.371.371,0,0,1,.525,0l1.576,1.577a.371.371,0,0,1,0,.525l-.828.83a1.105,1.105,0,0,0-.21,1.276,7.029,7.029,0,0,1,.379.91,1.1,1.1,0,0,0,1.051.751h1.168a.371.371,0,0,1,.371.371v2.229a.371.371,0,0,1-.371.371h-1.168a1.1,1.1,0,0,0-1.051.751,7,7,0,0,1-.379.911,1.106,1.106,0,0,0,.21,1.276l.828.83a.371.371,0,0,1,0,.525l-1.577,1.576a.371.371,0,0,1-.525,0L99.5,16.166a.371.371,0,1,0-.534.517l.009.009,1.22,1.218a1.114,1.114,0,0,0,1.575,0l1.576-1.576a1.114,1.114,0,0,0,0-1.576l-.827-.829a.364.364,0,0,1-.072-.419,7.717,7.717,0,0,0,.419-1.007.363.363,0,0,1,.346-.245h1.168a1.114,1.114,0,0,0,1.114-1.114V8.915A1.114,1.114,0,0,0,104.383,7.8Z" transform="translate(-87.261)" fill="#d0dbe5" stroke="#d1dbe6" stroke-width="1"/>
              </g>
            </g>
            <g id="Group_148" data-name="Group 148" transform="translate(8.739 5.203)">
              <g id="Group_147" data-name="Group 147">
                <path id="Path_170" data-name="Path 170" d="M195.152,113.461a4.834,4.834,0,0,0-6.829,0,.371.371,0,0,0,.525.525,4.086,4.086,0,0,1,5.817,5.74l-.039.039a.371.371,0,1,0,.516.534l.009-.009A4.834,4.834,0,0,0,195.152,113.461Z" transform="translate(-188.219 -112.049)" fill="#d0dbe5" stroke="#d1dbe6" stroke-width="1"/>
              </g>
            </g>
          </g>
        </svg>

          <span><?php echo e(trans('nav.settings'), false); ?></span>
           <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
        </a>
        <ul class="treeview-menu">
          <?php if(is_subscription_enabled()): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\SubscriptionPlan::class)): ?>
              <li class="<?php echo e(Request::is('admin/setting/subscriptionPlan*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/setting/subscriptionPlan'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.subscription_plans'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          <?php endif; ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Role::class)): ?>
            <li class="<?php echo e(Request::is('admin/setting/role*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/role'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.user_roles'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Tax::class)): ?>
            <li class="<?php echo e(Request::is('admin/setting/tax*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/tax'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.taxes'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if(Auth::user()->isMerchant()): ?>
            <li class="<?php echo e(Request::is('admin/setting/cache*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('clearr'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <!-- <?php echo e(trans('nav.taxes'), false); ?> -->
                 Cache Clear 
              </a>
            </li>
           <?php endif; ?>  

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Config::class)): ?>
            <li class="<?php echo e(Request::is('admin/setting/general*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/general'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.general'), false); ?>

              </a>
            </li>

            <li class="<?php echo e(Request::is('admin/setting/config*') || Request::is('admin/setting/verify*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/config'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.config'), false); ?>

              </a>
            </li>

            <?php if(vendor_get_paid_directly()): ?>
              <li class=" <?php echo e(Request::is('admin/setting/paymentMethod*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/setting/paymentMethod'), false); ?>">
                  <i class="fa fa-angle-double-right"></i> <?php echo e(trans('nav.payment_methods'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          <?php endif; ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\System::class)): ?>
            <li class="<?php echo e(Request::is('admin/setting/system/general*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/system/general'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.system_settings'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\SystemConfig::class)): ?>
            <li class="<?php echo e(Request::is('admin/setting/system/config*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/system/config'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.config'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if(Auth::user()->isAdmin()): ?>
            <li class="<?php echo e(Request::is('admin/setting/announcement*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/announcement'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.announcements'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if(Auth::user()->isAdmin()): ?>
            <li class="<?php echo e(Request::is('admin/setting/country*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/country'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.countries'), false); ?>

              </a>
            </li>

            <li class="<?php echo e(Request::is('admin/setting/currency*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/currency'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('nav.currencies'), false); ?>

              </a>
            </li>

            <li class="<?php echo e(Request::is('admin/setting/language*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/language'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('app.languages'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if(Auth::user()->isSuperAdmin() && is_incevio_package_loaded('wallet')): ?>
            <li class="<?php echo e(Request::is('admin/setting/wallet*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(url('admin/setting/wallet'), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('wallet::lang.wallet_settings'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if(Auth::user()->isSuperAdmin() && is_incevio_package_loaded('inspector')): ?>
            <li class="<?php echo e(Request::is('admin/setting/inspector*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(route(config('inspector.routes.settings')), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('inspector::lang.inspector_settings'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if(Auth::user()->isSuperAdmin() && is_incevio_package_loaded('zipcode')): ?>
            <li class="<?php echo e(Request::is('admin/setting/zipcode*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(route(config('zipcode.routes.settings')), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('zipcode::lang.zipcode_setting'), false); ?>

              </a>
            </li>
          <?php endif; ?>

          <?php if(Auth::user()->isSuperAdmin() && is_incevio_package_loaded('dynamicCommission')): ?>
            <li class="<?php echo e(Request::is('admin/setting/dynamicCommission*') ? 'active' : '', false); ?>">
              <a href="<?php echo e(route(config('dynamicCommission.routes.settings')), false); ?>">
                <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                 <?php echo e(trans('dynamicCommission::lang.commissions_settings'), false); ?>

              </a>
            </li>
          <?php endif; ?>
        </ul>
      </li>

      <?php if(Gate::allows('index', \App\Page::class) || Gate::allows('index', \App\EmailTemplate::class) || Gate::allows('index', \App\Blog::class) || Gate::allows('index', \App\Faq::class)): ?>
        <li class="treeview <?php echo e(Request::is('admin/utility*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <svg class="sidebar-left-icons setting-left-icon" xmlns="http://www.w3.org/2000/svg" width="20.052" height="20.144" viewBox="0 0 20.052 20.144">
              <g id="settings_1_" data-name="settings (1)" transform="translate(0.5 0.552)">
                <g id="Group_150" data-name="Group 150" transform="translate(0 0)">
                  <g id="Group_149" data-name="Group 149">
                    <path id="Path_171" data-name="Path 171" d="M18.329,6.817l-2.2-.324a7.591,7.591,0,0,0-.726-1.281l.836-2.14a.853.853,0,0,0-.369-1.055L12.717.142a.844.844,0,0,0-1.107.211l-1.369,1.8a6.173,6.173,0,0,0-1.432,0L7.439.35a.848.848,0,0,0-1.1-.211L3.188,2.011a.88.88,0,0,0-.377,1.063l.834,2.134A7.33,7.33,0,0,0,2.92,6.492l-2.19.323A.853.853,0,0,0,0,7.669v3.754a.85.85,0,0,0,.722.853l2.2.324a7.591,7.591,0,0,0,.726,1.281l-.836,2.14a.852.852,0,0,0,.369,1.055l3.167,1.883a.869.869,0,0,0,.425.112.843.843,0,0,0,.671-.332l1.369-1.8a7.451,7.451,0,0,0,1.433,0l1.37,1.8a.85.85,0,0,0,1.1.212l.913-.543a.4.4,0,0,0-.406-.682l-.979.531-1.506-1.981a.4.4,0,0,0-.367-.153,7.69,7.69,0,0,1-1.688,0,.4.4,0,0,0-.367.153L6.745,18.271,3.578,16.388a.066.066,0,0,1-.025-.082l.913-2.337a.4.4,0,0,0-.049-.379,6.854,6.854,0,0,1-.846-1.5.4.4,0,0,0-.311-.246L.841,11.489S.8,11.422.8,11.422V7.668L.841,7.6l2.419-.356A.4.4,0,0,0,3.57,7a6.512,6.512,0,0,1,.844-1.5.4.4,0,0,0,.052-.382L3.557,2.8a.088.088,0,0,1,.03-.1L6.812.832,8.317,2.813a.4.4,0,0,0,.367.153,5.62,5.62,0,0,1,1.688,0,.4.4,0,0,0,.367-.153L12.31.821,15.477,2.7a.067.067,0,0,1,.025.082l-.913,2.337a.4.4,0,0,0,.049.379A6.854,6.854,0,0,1,15.484,7a.4.4,0,0,0,.311.246l2.419.356s.042.067.044.067v3.754l-.044.067-1.551.229a.4.4,0,0,0,.115.785l1.543-.228a.852.852,0,0,0,.73-.853V7.669A.852.852,0,0,0,18.329,6.817Z" transform="translate(0 -0.02)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="1"/>
                    <path id="Path_172" data-name="Path 172" d="M157.93,154.978a2.1,2.1,0,0,1-.66-1.542,3.9,3.9,0,0,0-1.253-2.858,3.788,3.788,0,0,0-2.763-1.251,3.921,3.921,0,0,0-2.431.891.4.4,0,0,0,.045.649l2.426,1.455a2.158,2.158,0,0,1-1.163,1.711l-2.172-1.3a.428.428,0,0,0-.41,0,.4.4,0,0,0-.206.325,3.939,3.939,0,0,0,1.074,2.962,3.987,3.987,0,0,0,2.889,1.246,3.622,3.622,0,0,0,.907-.12l5.067,5.067a2.08,2.08,0,1,0,2.942-2.942Zm2.82,7.048h0a1.278,1.278,0,0,1-.91-.377l-5.23-5.23a.4.4,0,0,0-.281-.116.378.378,0,0,0-.113.016,3.1,3.1,0,0,1-.909.15,3.178,3.178,0,0,1-3.139-2.69l1.744,1.046a.4.4,0,0,0,.382.015l.167-.083A2.951,2.951,0,0,0,154.1,152.1a.4.4,0,0,0-.193-.341l-2.1-1.257a3.081,3.081,0,0,1,1.454-.387,3,3,0,0,1,2.174,1,3.117,3.117,0,0,1,1.038,2.281,2.89,2.89,0,0,0,.892,2.138l4.29,4.29a1.286,1.286,0,0,1-.909,2.2Z" transform="translate(-143.779 -143.771)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="1"/>
                  </g>
                </g>
              </g>
            </svg>


            <span><?php echo e(trans('nav.utilities'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\EmailTemplate::class)): ?>
              <li class="<?php echo e(Request::is('admin/utility/emailTemplate*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/utility/emailTemplate'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.email_templates'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Page::class)): ?>
              <li class="<?php echo e(Request::is('admin/utility/page*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/utility/page'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.pages'), false); ?>

                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Blog::class)): ?>
              <li class="<?php echo e(Request::is('admin/utility/blog*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/utility/blog'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <span><?php echo e(trans('nav.blogs'), false); ?></span>
                </a>
              </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Faq::class)): ?>
              <li class="<?php echo e(Request::is('admin/utility/faq*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(url('admin/utility/faq'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.faqs'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          </ul>
        </li>
      <?php endif; ?>

      <?php if(Auth::user()->isAdmin() || Auth::user()->isMerchant()): ?>
        <li class="treeview <?php echo e(Request::is('admin/report*') || Request::is('admin/shop/report*') ? 'active' : '', false); ?>">
          <a href="javascript:void(0)">
            <svg class="sidebar-left-icons setting-left-icon2" xmlns="http://www.w3.org/2000/svg" width="14.071" height="18.955" viewBox="0 0 14.071 18.955">
            <g id="business-report" transform="translate(0.1 0.1)">
              <g id="Group_151" data-name="Group 151" transform="translate(0)">
                <path id="Path_173" data-name="Path 173" d="M80.266,0H66.945a.275.275,0,0,0-.275.275v13.05a.275.275,0,0,0,.549,0V.549H79.991V2.277a.275.275,0,1,0,.549,0v-2A.275.275,0,0,0,80.266,0Z" transform="translate(-66.67)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_174" data-name="Path 174" d="M80.266,89.65a.275.275,0,0,0-.275.275v14.647H67.219v-3.6a.275.275,0,0,0-.549,0v3.873a.275.275,0,0,0,.275.275H80.266a.275.275,0,0,0,.275-.275V89.925A.275.275,0,0,0,80.266,89.65Z" transform="translate(-66.67 -86.366)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_175" data-name="Path 175" d="M99,100.111a2.125,2.125,0,1,0,2.125-2.125A2.127,2.127,0,0,0,99,100.111Zm2.125,1.575a1.575,1.575,0,0,1-.275-3.126v1.551a.275.275,0,0,0,.275.275h1.551A1.578,1.578,0,0,1,101.121,101.686Zm1.551-1.85H101.4V98.56A1.579,1.579,0,0,1,102.672,99.836Z" transform="translate(-97.812 -94.397)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_176" data-name="Path 176" d="M103.311,432.35a.275.275,0,0,0-.275.275v1.184a.275.275,0,0,0,.275.275h1.776a.275.275,0,0,0,.275-.275v-1.184a.275.275,0,0,0-.275-.275Zm1.5,1.184h-1.227V432.9h1.227Z" transform="translate(-101.704 -416.512)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_177" data-name="Path 177" d="M184.125,387.372H185.9a.275.275,0,0,0,.275-.275v-2.96a.275.275,0,0,0-.275-.275h-1.776a.275.275,0,0,0-.275.275v2.96A.275.275,0,0,0,184.125,387.372Zm.275-2.96h1.227v2.411H184.4Z" transform="translate(-179.557 -369.8)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_178" data-name="Path 178" d="M264.938,323.252a.275.275,0,0,0-.275.275v5.181a.275.275,0,0,0,.275.275h1.776a.275.275,0,0,0,.275-.275v-5.181a.275.275,0,0,0-.275-.275Zm1.5,5.181h-1.227V323.8h1.227Z" transform="translate(-257.41 -311.411)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_179" data-name="Path 179" d="M347.531,284.368a.275.275,0,0,0,.275-.275v-.969a.275.275,0,0,0-.275-.275h-1.776a.275.275,0,0,0-.275.275v6.66a.275.275,0,0,0,.275.275h1.776a.275.275,0,0,0,.275-.275v-4.409a.275.275,0,0,0-.55,0v4.135H346.03V283.4h1.226v.694A.275.275,0,0,0,347.531,284.368Z" transform="translate(-335.267 -272.489)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_180" data-name="Path 180" d="M173.882,32.325h-5.921a.275.275,0,0,0-.275.275v1.184a.275.275,0,0,0,.275.275h5.921a.275.275,0,0,0,.275-.275V32.6A.275.275,0,0,0,173.882,32.325Zm-.275,1.184h-5.371v-.635h5.371v.635Z" transform="translate(-163.987 -31.141)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_181" data-name="Path 181" d="M254.251,97.986h-5.477a.275.275,0,1,0,0,.549h5.477a.275.275,0,0,0,0-.549Z" transform="translate(-241.839 -94.397)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_182" data-name="Path 182" d="M254.251,131.658h-5.477a.275.275,0,1,0,0,.549h5.477a.275.275,0,0,0,0-.549Z" transform="translate(-241.839 -126.835)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_183" data-name="Path 183" d="M254.526,165.6a.275.275,0,0,0-.275-.275h-5.477a.275.275,0,1,0,0,.549h5.477A.275.275,0,0,0,254.526,165.6Z" transform="translate(-241.839 -159.274)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_184" data-name="Path 184" d="M252.306,199.277a.275.275,0,0,0-.275-.275h-3.256a.275.275,0,1,0,0,.549h3.256A.275.275,0,0,0,252.306,199.277Z" transform="translate(-241.839 -191.712)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_185" data-name="Path 185" d="M117.4,248.5h-5a.275.275,0,1,0,0,.549h5a.275.275,0,1,0,0-.549Z" transform="translate(-110.463 -239.397)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_186" data-name="Path 186" d="M117.673,282.447a.275.275,0,0,0-.275-.275h-5a.275.275,0,1,0,0,.549h5A.275.275,0,0,0,117.673,282.447Z" transform="translate(-110.463 -271.836)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
                <path id="Path_187" data-name="Path 187" d="M115.453,316.119a.275.275,0,0,0-.275-.275H112.4a.275.275,0,1,0,0,.549h2.775A.275.275,0,0,0,115.453,316.119Z" transform="translate(-110.463 -304.274)" fill="#d1dbe6" stroke="#d1dbe6" stroke-width="0.2"/>
              </g>
            </g>
          </svg>

            <span><?php echo e(trans('nav.reports'), false); ?></span>
             <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
          </a>
          <ul class="treeview-menu">
            <?php if(Auth::user()->isAdmin()): ?>
              <?php if(is_incevio_package_loaded('wallet')): ?>
                <li class="<?php echo e(Request::is('admin/report/wallet/payout/report*') ? 'active' : '', false); ?>">
                  <a href="<?php echo e(route('admin.wallet.payout.report'), false); ?>">
                    <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                     <?php echo e(trans('nav.payout'), false); ?>

                  </a>
                </li>
              <?php endif; ?>

              <li class="<?php echo e(Request::is('admin/report/kpi*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(route('admin.kpi'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.performance'), false); ?>

                </a>
              </li>
              <li class="<?php echo e(Request::is('admin/report/visitors*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(route('admin.report.visitors'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.visitors'), false); ?>

                </a>
              </li>
              <li class="<?php echo e(Request::is('admin/report/sales*') ? 'active' : '', false); ?>">
                <a href="javascript:void(0)">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                  <?php echo e(trans('nav.sales'), false); ?>

                  <svg id="Group_234" class="svg-angle-left" data-name="Group 234" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50">
                   <path id="Path_88" data-name="Path 88" d="M224.487,51.826l3.324-3.324a1.662,1.662,0,1,1,2.35,2.35L228.012,53l2.149,2.149a1.662,1.662,0,1,1-2.35,2.35l-3.324-3.324a1.661,1.661,0,0,1,0-2.35Zm.587,1.762,3.324,3.324a.85.85,0,0,0,1.175,0,.831.831,0,0,0,0-1.175L226.837,53l2.736-2.736a.831.831,0,0,0-1.175-1.176l-3.324,3.324a.831.831,0,0,0,0,1.176Z" transform="translate(-224 -48.016)" fill="#52575d"/>
                   </g>
                   </svg>
                </a>
                <ul class="treeview-menu">
                  <li class="<?php echo e(Request::is('admin/report/sales/orders*') ? 'active' : '', false); ?>">
                    <a href="<?php echo e(route('admin.sales.orders'), false); ?>">
                       <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                      <?php echo e(trans('nav.orders'), false); ?>

                    </a>
                  </li>
                  <li class="<?php echo e(Request::is('admin/report/sales/products*') ? 'active' : '', false); ?>">
                    <a href="<?php echo e(route('admin.sales.products'), false); ?>">
                       <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                      <?php echo e(trans('nav.products'), false); ?>

                    </a>
                  </li>
                  <li class="<?php echo e(Request::is('admin/report/sales/payment*') ? 'active' : '', false); ?>">
                    <a href="<?php echo e(route('admin.sales.payments'), false); ?>">
                       <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                      <?php echo e(trans('nav.payments'), false); ?>

                    </a>
                  </li>
                </ul>
              </li>
            <?php elseif(Auth::user()->isMerchant()): ?>
              <li class="<?php echo e(Request::is('admin/shop/report/kpi*') ? 'active' : '', false); ?>">
                <a href="<?php echo e(route('admin.shop-kpi'), false); ?>">
                  <svg id="Group_300" class="svg-double-angle-right" data-name="Group 300" xmlns="http://www.w3.org/2000/svg" width="6.647" height="9.97" viewBox="0 0 6.647 9.97">
                   <g id="Group_50" data-name="Group 50" transform="translate(0)">
                   <path id="Path_88" data-name="Path 88" d="M230.161,51.826,226.837,48.5a1.662,1.662,0,1,0-2.35,2.35L226.636,53l-2.149,2.149a1.662,1.662,0,1,0,2.35,2.35l3.324-3.324a1.661,1.661,0,0,0,0-2.35Zm-.587,1.762-3.324,3.324a.85.85,0,0,1-1.175,0,.831.831,0,0,1,0-1.175L227.811,53l-2.736-2.736a.831.831,0,0,1,1.175-1.176l3.324,3.324a.831.831,0,0,1,0,1.176Z" transform="translate(-224 -48.016)" fill="#bfc4c8"/>
                   </g>
                   </svg>
                   <?php echo e(trans('nav.performance'), false); ?>

                </a>
              </li>
            <?php endif; ?>
          </ul>
        </li>
        <hr>
        <!-- <li class="<?php echo e(Request::is('admin/report/kpi*') ? 'active' : '', false); ?>">
          <a href="<?php echo e(Request::session()->has('impersonated') ? route('admin.secretLogout') : route('logout'), false); ?>" class="logout_btn-s">
            <svg class="sidebar-left-icons" xmlns="http://www.w3.org/2000/svg" width="16.992" height="16.419" viewBox="0 0 16.992 16.419">
              <g id="loguot" transform="translate(16.992 16.419) rotate(180)">
                <path id="Path_31" data-name="Path 31" d="M0,4.263H7.789L5.819,6.046,6.775,7.1,10.7,3.551,6.775,0,5.819,1.057l1.97,1.782H0Z" transform="translate(0 4.659)" fill="#d0dbe5"/>
                <path id="Path_32" data-name="Path 32" d="M13.859,0H0V3.476H1.425V1.425H12.434V14.994H1.425V12.907H0v3.511H13.859Z" transform="translate(3.133)" fill="#d0dbe5"/>
              </g>
            </svg>

            <?php echo e(trans('nav.logout'), false); ?>

          </a>
        </li> -->
      <?php endif; ?>

      <!--
        <li class="header">LABELS</li>
        <li><a href="javascript:void(0)">
        <i class="fa fa-circle-o text-red"></i> <span>Important</span></a>
        </li>
        <li><a href="javascript:void(0)">
        <i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a>
        </li>
        <li><a href="javascript:void(0)">
        <i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a>
        </li>
        -->
    </ul>
  </section> <!-- /.sidebar -->
</aside>
<?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>