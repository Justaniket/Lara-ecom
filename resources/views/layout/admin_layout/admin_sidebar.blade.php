<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="" class="brand-link">
     <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Admin</span>
   </a>
   < <div class="sidebar">
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Aniket</a>
       </div>
     </div>
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>
    <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       <li class="nav-item">
           <a href="products.blade.php" class="nav-link">
             <p> Category <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{url('admin/add_category')}}" class="nav-link">
                 <i class="fa fa-plus-circle" aria-hidden="true"></i>
                 <p> Add category </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('category.display')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>view categories</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="" class="nav-link">
             <p> Products <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{url('admin/Add_product')}}" class="nav-link">
                 <i class="fa fa-plus-circle"></i>
                 <p>Add product</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('product.display')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>View products</p>
               </a>
             </li>
           </ul>
         </li>
       </ul>
     </nav>
     </div>
 </aside>