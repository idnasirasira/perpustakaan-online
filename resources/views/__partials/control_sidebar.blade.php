<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Profile</h5>
      <p></p>
      <form id="logout-form" action="{{route('logout')}}" method="post">
        @csrf
      </form>
      <a href="#" onclick="$('#logout-form').submit()">Logout</a>
    </div>
  </aside>
  <!-- /.control-sidebar -->