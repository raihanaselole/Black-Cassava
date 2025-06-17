
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

<aside class="sidebar">
  <!-- sidebar close btn -->
   <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i class="ph ph-x"></i></button>
  <!-- sidebar close btn -->
  
  <a href="index.html" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-35 px z-1 pb-10">
      <img src="{{ asset('admin/images/logo.png')}}" alt="Logo">
  </a>

  <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
      <div class="p-20 pt-10">
          <ul class="sidebar-menu">
              <li class="sidebar-menu__item">
                  <a href="{{ url('dashboard') }}" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-squares-four"></i></span>
                      <span class="text">Dashboard</span>
                  </a>
              </li>
              <li class="sidebar-menu__item">
                <a href="{{ url('dashboard/klinik') }}" class="sidebar-menu__link">
                    <span class="icon"><i class="bi bi-hospital"></i></span>
                    <span class="text">klinik</span>
                </a>
              </li>
              <li class="sidebar-menu__item">
                  <a href="{{ url('dashboard/pasien') }}" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-users-three"></i></span>
                      <span class="text">Pasien</span>
                  </a>
              </li>
              <li class="sidebar-menu__item">
                  <a href="{{ url('dashboard/akun') }}" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-users-three"></i></span>
                      <span class="text">akun</span>
                  </a>
              </li>
              <li class="sidebar-menu__item">
                <form action="{{ url('logout') }}" method="POST" class="sidebar-menu__link" 
                      style="display: flex; align-items: center; gap: 10px; color: #dc3545; background-color: transparent; border: none; width: 100%; text-align: start; padding: 8px 12px; border-radius: 4px; transition: color 0.3s, background-color 0.3s; cursor: pointer;" 
                      onsubmit="return confirmLogout();">
                    @csrf
                    <button type="submit" style="display: flex; align-items: center; gap: 10px; color: inherit; background-color: inherit; border: none; width: 100%; text-align: start; padding: 0;">
                        <span class="icon"><i class="ph ph-sign-out"></i></span>
                        <span class="text">Logout</span>
                    </button>
                </form>
            </li>
                         
                  <!-- Submenu End --> 
          </ul>
      </div>
  </div>

</aside>

<script>
    function confirmLogout() {
        return confirm("Apakah Anda yakin ingin keluar?");
    }
</script>