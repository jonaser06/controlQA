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
                <!--<li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>-->
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- feeds -->
                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Portal</th>
                      <th scope="col">Robots</th>
                      <th scope="col">SiteMaps</th>
                      <th scope="col">Feed News</th>
                      <th scope="col">Instant RSS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><img src="view/img/products/ae.ico" width="20px" height="20px"></th>
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
                      <td># Lineas</td>
                      <td># Lineas</td>
                      <td># Lineas</td>
                    </tr>
                    <tr>
                      <th scope="row"><img src="view/img/products/an.ico" width="20px" height="20px"></th>
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
                      <td># Lineas</td>
                      <td># Lineas</td>
                      <td># Lineas</td>
                    </tr>
                    <tr>
                      <th scope="row"><img src="view/img/products/ad.ico" width="20px" height="20px"></th>
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
                      <td># Lineas</td>
                      <td># Lineas</td>
                      <td># Lineas</td>
                    </tr>
                    <tr>
                      <th scope="row"><img src="view/img/products/cn.ico" width="20px" height="20px"></th>
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
                      <td># Lineas</td>
                      <td># Lineas</td>
                      <td># Lineas</td>
                    </tr>
                  </tbody>
                  </table>
                  <!-- /.feeds -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <ul class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <li class="time-label">
                          <span class="bg-red">
                            10 Feb. 2014
                          </span>
                    </li>
                    <!-- /.timeline-label -->

                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-envelope bg-blue"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                        <div class="timeline-body">
                          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                          weebly ning heekya handango imeem plugg dopplr jibjab, movity
                          jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                          quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class="timeline-footer">
                          <a class="btn btn-primary btn-xs">Read more</a>
                          <a class="btn btn-danger btn-xs">Delete</a>
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    
                    <!-- timeline item -->

                    
                    <li>
                      <i class="fa fa-user bg-aqua"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                        </h3>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-comments bg-yellow"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                        <div class="timeline-body">
                          Take me to your leader!
                          Switzerland is small and neutral!
                          We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class="timeline-footer">
                          <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li class="time-label">
                          <span class="bg-green">
                            3 Jan. 2014
                          </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-camera bg-purple"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                        <div class="timeline-body">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                          <img src="http://placehold.it/150x100" alt="..." class="margin">
                        </div>
                      </div>
                    </li>
                    <!-- END timeline item -->
                    <li>
                      <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                  </ul>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Name</label>

                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Name</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  