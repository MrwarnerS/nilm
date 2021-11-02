<div>
    <div class="sidebar " id="sidebar">
        <div class="logo-details">
            <img src="{{ asset('img/svg/D-TRANSPARENCIA.svg') }}" alt="40" width="30" >
            <span class="logo_name">
                <label style="color:#1db7c3;" for="">Data</label>
                <label style="color:#a19f9f;" for="">In</label>
                <label style="color:#e3e3e3" for="">Situ</label>
           </span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-home' ></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Inicio</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-bar-chart-alt'></i>
                    <span class="link_name">Consumo Ultimos 30 días</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Consumo Ultimos 30 días</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-bar-chart-alt'></i>
                    <span class="link_name">Consumo Mensual</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Consumo Mensual</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="name-job">
                        <div class="profile_name">Editar Perfil</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>
    </div>

    <script type="text/javascript" src="{{ asset('js/sliderbar.js') }}">
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

    </script>
</div>
