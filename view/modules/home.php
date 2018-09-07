    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Controles diarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tutoriales</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-file-text-o margin-r-5"></i>Tareas Diarias</strong>
              <p>
                <span class="label label-success">Fácil</span>
              </p>
              <p class="text-muted">
                Tareas que se deben ejecutar de manera diaria
              </p>
              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i>Crear minisites</strong>
              <p>
                <span class="label label-success">Fácil</span>
              </p>
              <p class="text-muted">Aprende a crear un minisite para tvgo en el multidiario</p>
              <hr>
              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>
              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i>Notes</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              <a href="#" class="btn btn-primary btn-block"><b>Agregar tutorial</b></a>
            </div>
            <!-- /.box-body -->
            </div>
        </div>

        <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Feeds</a></li>
                <li><a href="#msfeed" data-toggle="tab">Microsoft feeds</a></li>
                <!--<li><a href="#settings" data-toggle="tab">Settings</a></li>-->
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- feeds -->
                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col"><span class="fa fa-laptop"></span> Portal</th>
                      <th scope="col"><span class="fa fa-file-text"></span> Feeds</th>
                      <th scope="col"><span class="fa fa-file-text"></span> Robots</th>
                      <th scope="col"><span class="fa fa-file-text"></span> SiteMaps</th>
                      <th scope="col"><span class="fa fa-file-text"></span> Feed News</th>
                      <th scope="col"><span class="fa fa-file-text"></span> Instant RSS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><img src="view/img/products/ae.ico" width="20px" height="20px"></th>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe';
                      if(CntrlFeed::feed($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/feed/news' target='_blank'> ".count(file($url.'/feed/news')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe';
                      if(CntrlFeed::robot($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/robots.txt' target='_blank'> ".count(file($url.'/robots.txt')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe';
                      if(CntrlFeed::sitemaps($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/sitemap.xml' target='_blank'> ".count(file($url.'/sitemap.xml')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe';
                      if(CntrlFeed::feednews($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/feed' target='_blank'> ".count(file($url.'/feed')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td><span class="fa fa-times"></span> No implementado</td>
                    </tr>
                    <tr>
                      <th scope="row"><img src="view/img/products/an.ico" width="20px" height="20px"></th>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/noticias';
                      if(CntrlFeed::feed($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/feed/news' target='_blank'> ".count(file($url.'/feed/news')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/noticias';
                      if(CntrlFeed::robot($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/robots.txt' target='_blank'> ".count(file($url.'/robots.txt')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/noticias';
                      if(CntrlFeed::sitemaps($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/sitemap.xml' target='_blank'> ".count(file($url.'/sitemap.xml')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/noticias';
                      if(CntrlFeed::feednews($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/feed' target='_blank'> ".count(file($url.'/feed')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/noticias';
                      if(CntrlFeed::instantrss($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/instantrss/actualidad.xml' target='_blank'> ".count(file($url.'/instantrss/actualidad.xml')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><img src="view/img/products/ad.ico" width="20px" height="20px"></th>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/deportes';
                      if(CntrlFeed::feed($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/feed/news' target='_blank'> ".count(file($url.'/feed/news')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/deportes';
                      if(CntrlFeed::robot($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/robots.txt' target='_blank'> ".count(file($url.'/robots.txt')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/deportes';
                      if(CntrlFeed::sitemaps($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/sitemap.xml' target='_blank'> ".count(file($url.'/sitemap.xml')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://www.americatv.com.pe/deportes';
                      if(CntrlFeed::feednews($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/feed' target='_blank'> ".count(file($url.'/feed')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td><span class="fa fa-times"></span> No implementado</td>
                    </tr>
                    <tr>
                      <th scope="row"><img src="view/img/products/cn.ico" width="20px" height="20px"></th>
                      <td>
                      <?php 
                      $url = 'https://canaln.pe';
                      if(CntrlFeed::feed($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/feed/news' target='_blank'> ".count(file($url.'/feed/news')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://canaln.pe';
                      if(CntrlFeed::robot($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/robots.txt' target='_blank'> ".count(file($url.'/robots.txt')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://canaln.pe';
                      if(CntrlFeed::sitemaps($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/sitemap.xml' target='_blank'> ".count(file($url.'/sitemap.xml')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td>
                      <?php 
                      $url = 'https://canaln.pe';
                      if(CntrlFeed::feednews($url)){
                        echo "<span class='fa fa-check'></span><a href='$url/feed' target='_blank'> ".count(file($url.'/feed')). " lineas </a>";
                      }else{
                        echo '<span class="fa fa-times"></span>';
                      }
                      ?>
                      </td>
                      <td><span class="fa fa-times"></span >No implementado</td>
                    </tr>
                  </tbody>
                  </table>
                  <!-- /.feeds -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="msfeed">
                  
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

          <!-- /.amp -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#amp" data-toggle="tab">AMP Page</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="amp">
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="URL de la pagina">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-info btn-flat">Go!</button>
                        </span>
                  </div>
                  <div class="result">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo tempora distinctio sit ea sunt voluptate error quae necessitatibus consequuntur dignissimos, facilis sed numquam et asperiores saepe. Labore voluptatem earum sapiente?
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.amp -->
      </div>
    </section>
    <!-- /.content -->
  