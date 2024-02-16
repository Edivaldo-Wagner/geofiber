 <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <?php
          $link = $_SERVER['PHP_SELF'];
          $link_array = explode('/',$link);
          $page = end($link_array);
      ?>
      
      <li <?php if($page=="index.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?> >
        <a class="nav-link" href="index.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-map"></i>&nbsp;&nbsp;&nbsp;
            <span>Mapa</span>
          </div>
        </a>
      </li>
      <li <?php if($page=="projectos.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?> >
        <a class="nav-link" href="projectos.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-home"></i>&nbsp;&nbsp;&nbsp;
            <span>Projectos</span>
          </div>
        </a>
      </li>
      <li <?php if($page=="dashboard.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?> >
        <a class="nav-link" href="dashboard.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp;
            <span>Dashboard</span>
          </div>
        </a>
      </li>
      <li <?php if($page=="pendencias.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?>>
        <a class="nav-link" href="pendencias.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-suitcase"></i>&nbsp;&nbsp;&nbsp;
            <span>Pendencias</span>
          </div></a>
      </li>
      <li <?php if($page=="map.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?>>
        <a class="nav-link" href="map.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-exclamation-triangle"></i>&nbsp;&nbsp;&nbsp;
            <span>Problemas</span>
          </div></a>
      </li>
      <li <?php if($page=="users.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?>>
        <a class="nav-link" href="users.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-users"></i>&nbsp;&nbsp;&nbsp;
            <span>Usuarios</span>
          </div></a>
      </li>
      <li class="nav-item dropdown" display="block">
        <a class="nav-link dropdown-toggle" id="nav-tipos" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-th"></i>&nbsp;&nbsp;&nbsp;
            <span>Tipos</span></a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" id="mini-nav-tipos">
          <a class="dropdown-item" href="poste.php">
              <i class="fas fa-fw fa-suitcase"></i>&nbsp;&nbsp;&nbsp;
              <span>Poste</span>
          </a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="caixa-nivel-1.php">
              <i class="fas fa-fw fa-archive"></i>&nbsp;&nbsp;&nbsp;
              <span>Caixa (Nível 1)</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="caixa-nivel-2.php">
              <i class="fas fa-fw fa-archive"></i>&nbsp;&nbsp;&nbsp;
              <span>Caixa (Nível 2)</span>
            </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cabos-nivel-1.php">
          <i class="fas fa-fw fa-plug"></i>&nbsp;&nbsp;&nbsp;
          <span>Cabos (Nível 1)</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cabos-nivel-2.php">
          <i class="fas fa-fw fa-plug"></i>&nbsp;&nbsp;&nbsp;
          <span>Cabos (Nível 2)</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cabos-drops.php">
          <i class="fas fa-fw fa-plug"></i>&nbsp;&nbsp;&nbsp;
          <span>Cabos Drop`s</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="concentradores.php">
          <i class="fas fa-fw fa-columns"></i>&nbsp;&nbsp;&nbsp;
          <span>Concentradores</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="olt.php">
          <i class="fas fa-fw fa-chain-broken"></i>&nbsp;&nbsp;&nbsp;
          <span>Splitter</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="olt.php">
          <i class="fas fa-fw fa-chain-broken"></i>&nbsp;&nbsp;&nbsp;
          <span>OLT</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="dio.php">
          <i class="fas fa-fw fa-archive"></i>&nbsp;&nbsp;&nbsp;
          <span>DIO</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="switch.php">
          <i class="fas fa-fw fa-chain-broken"></i>&nbsp;&nbsp;&nbsp;
          <span>Switch</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="conector.php">
          <i class="fas fa-fw fa-plug"></i>&nbsp;&nbsp;&nbsp;
          <span>Conector</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fusao.php">
          <i class="fas fa-fw fa-plug"></i>&nbsp;&nbsp;&nbsp;
          <span>Fusao</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="regiao.php">
          <i class="fas fa-fw fa-globe"></i>&nbsp;&nbsp;&nbsp;
          <span>Regiao</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="pendencias.php">
          <i class="fas fa-fw fa-suitcase"></i>&nbsp;&nbsp;&nbsp;
          <span>Pendencias</span></a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="nav-personalizacao" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-pie-chart"></i>&nbsp;&nbsp;&nbsp;
            <span>Personalizacao</span></a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" id="mini-nav-personalizacao">
          
          <a class="dropdown-item" href="tag.php">
          <i class="fas fa-fw fa-tags"></i>&nbsp;&nbsp;&nbsp;
          <span>Tags</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cores.php">
          <i class="fas fa-fw fa-thumb-tack"></i>&nbsp;&nbsp;&nbsp;
          <span>Cores</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="templates-de-caixa.php">
          <i class="fas fa-fw fa-binoculars"></i>&nbsp;&nbsp;&nbsp;
          <span>Templates de Caixa</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="perfis-de-fibra.php">
          <i class="fas fa-fw fa-user-md"></i>&nbsp;&nbsp;&nbsp;
          <span>Perfis de fibra</span></a>
        </div>
      </li>
      <li <?php if($page=="auditoria.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?>>
        <a class="nav-link" href="auditoria.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-list"></i>&nbsp;&nbsp;&nbsp;
            <span>Auditoria</span>
          </div></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="nav-configuracoes" href="configuracoes.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-wrench"></i>&nbsp;&nbsp;&nbsp;
            <span>Configuracoes</span></a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" id="mini-nav-configuracoes">
      
          <a class="dropdown-item" href="projeto.php">
            <i class="fas fa-fw fa-wrench"></i>&nbsp;&nbsp;&nbsp;
            <span>Projecto</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="sistema.php">
          <i class="fas fa-fw fa-wrench"></i>&nbsp;&nbsp;&nbsp;
          <span>Sistema</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="papel.php">
          <i class="fas fa-fw fa-paper-plane"></i>&nbsp;&nbsp;&nbsp;
          <span>Papel</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="idioma.php">
          <i class="fas fa-fw fa-language"></i>&nbsp;&nbsp;&nbsp;
          <span>Idioma</span></a>
        </div>
      </li>
      <li <?php if($page=="backup.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?>>
        <a class="nav-link" href="backup.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-database "></i>&nbsp;&nbsp;&nbsp;
            <span>Backup</span>
          </div></a>
      </li>

      <li class="list_divider"></li>

      <li class="nav-item signout" style="background: transparent;">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
          <div class="wrapped">
            <i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;
            <span>Logout</span>
          </div></a>
      </li>
      
    </ul>



    <script>

      document.querySelector("#nav-tipos").addEventListener("mouseover", ()=>{

        document.querySelector("#mini-nav-tipos").style.display = "block"

      })

      document.querySelector("#mini-nav-tipos").addEventListener("mouseover", ()=>{

        document.querySelector("#mini-nav-tipos").style.display = "block"

      })


      document.querySelector("#nav-tipos").addEventListener("mouseout", ()=>{

        document.querySelector("#mini-nav-tipos").style.display = "none"

      })

      document.querySelector("#mini-nav-tipos").addEventListener("mouseout", ()=>{

        document.querySelector("#mini-nav-tipos").style.display = "none"

      })
      






      document.querySelector("#nav-personalizacao").addEventListener("mouseover", ()=>{

        document.querySelector("#mini-nav-personalizacao").style.display = "block"

      })

      document.querySelector("#mini-nav-personalizacao").addEventListener("mouseover", ()=>{

        document.querySelector("#mini-nav-personalizacao").style.display = "block"

      })


      document.querySelector("#nav-personalizacao").addEventListener("mouseout", ()=>{

        document.querySelector("#mini-nav-personalizacao").style.display = "none"

      })

      document.querySelector("#mini-nav-personalizacao").addEventListener("mouseout", ()=>{

        document.querySelector("#mini-nav-personalizacao").style.display = "none"

      })





      document.querySelector("#nav-configuracoes").addEventListener("mouseover", ()=>{

        document.querySelector("#mini-nav-configuracoes").style.display = "block"

      })

      document.querySelector("#mini-nav-configuracoes").addEventListener("mouseover", ()=>{

        document.querySelector("#mini-nav-configuracoes").style.display = "block"

      })


      document.querySelector("#nav-configuracoes").addEventListener("mouseout", ()=>{

        document.querySelector("#mini-nav-configuracoes").style.display = "none"

      })

      document.querySelector("#mini-nav-configuracoes").addEventListener("mouseout", ()=>{

        document.querySelector("#mini-nav-configuracoes").style.display = "none"

      })

    </script>