<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegacion</li>
    <!-- Optionally, you can add icons to the links -->
<li {{request()->is('admin') ? 'class= active': ''}}><a  href="{{ route('admin')}}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
    

<li class="treeview {{request()->is('admin/posts') ? ' active': ''}}">
    <a href="#"><i class="fa fa-bars"></i> <span>Blog</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li  {{request()->is('admin/posts') ? 'class= active': ''}} ><a href="{{route('admin.posts.index')}}"<i class="fa fa-eye"></i>Ver todos los posts</a></li>
            <li><a href="#"><i class="fa fa-pencil"></i> Crear post</a></li>
        </ul>
    </li>
</ul>