<!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Shomick  <i>Hasan</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3 text-info">ADMIN</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{Route('dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="fab fa-product-hunt"></i>
            <span class="menu-item-label">Products</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('addproductbtn')}}" class="sub-link">Add Product</a></li>
            <li class="sub-item"><a href="{{Route('viewProduct')}}" class="sub-link">Manage Product</a></li>
            
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span class="menu-item-label">Catagories</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route ('manageCatagories') }}" class="sub-link">Manage Catagories</a></li>
            
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span class="menu-item-label">Sub Category</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route ('subcategory.add') }}" class="sub-link">Add Sub Category</a></li>
            <li class="sub-item"><a href="{{ Route ('subcategory.manage') }}" class="sub-link">Sub-category Manage</a></li>
            
          </ul>
        </li>
        {{-- items --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span class="menu-item-label">Item</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route ('item.add') }}" class="sub-link">Add New Item</a></li>
            <li class="sub-item"><a href="{{Route('item.manage')}}" class="sub-link">Item Manage</a></li>
            
          </ul>
        </li>

        

        
      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->