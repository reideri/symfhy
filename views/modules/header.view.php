<?php 
  $item = null;
  $value = null;

  $header = BodyController::ctrShowComponents($item, $value);
?>

   <header>
      
       <nav  class="container d-flex justify-content-start">
          
          <ul class="brand d-flex align-items-center">
            <li><i style="color: #4400F5;" class="fas fa-map-marker"></i><a href="<?php echo $Route; ?>">SYMFHY</a></li>
          </ul>
          
           <ul class="d-flex align-items-center">
                  <?php foreach ($header as $ul => $li): ?>
                    <li>
                    <a href="<?php echo $li['url']; ?>"><?php echo $li['route']; ?></a>
                  </li>
                  <?php endforeach ?>
                   
               
           </ul>    
       </nav><!-- END NAV -->
       
   </header>