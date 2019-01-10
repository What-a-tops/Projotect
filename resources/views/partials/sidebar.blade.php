<nav id="sidebar" class="nav-side-menu">
       <div class="sidebar-header">
           <h3>Collapsible Sidebar</h3>
       </div>

       <!-- Sidebar Links -->
       <ul class="list-unstyled components" style="margin-top: 15px">
           <li {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="{{ url('/') }}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
           <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i> About</a></li>

           <li><!-- Link with dropdown items -->
               <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i> Pages</a>
               <ul class="collapse list-unstyled" id="homeSubmenu">
                   <li><a href="#">Page</a></li>
                   <li><a href="#">Page</a></li>
                   <li><a href="#">Page</a></li>
               </ul>

         <li {{{ (Request::is('user') ? 'class=active' : '') }}}><a href="{{ url('user') }}"><i class="glyphicon glyphicon-user"></i> Users</a></li>
         <li {{{ (Request::is('Contact') ? 'class=active' : '') }}}><a href="#"><i class="glyphicon glyphicon-cog"></i> Contact</a></li>
         <li ><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-off"></i> logout</a></li>
     </ul>
</nav>
