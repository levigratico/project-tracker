<!--Navbar-->
<?php 
$navbar = array(
				 'page_title' => $page_title,
				 'user_name' => 'levi'
			   );
$this->load->view('_partials/navbar', $navbar); 
?>
<?php echo PHP_EOL;?>
<div class="row" style="height:100%;">
    <div class="col-md-9 push-md-3 colTrackTwo">
        <center><h3 style="font-weight: bold" id="NoPanel">There are no panels open</h3></center>
        <ul class="row" id="sortable">
          <!-- createissue module -->
        </ul>
    </div> <!-- end of coltracktwo -->
    <!-- coltrackone -->
    <?php $this->load->view('_partials/sidebar', array('user_name' => 'levi')); ?>
<?php echo PHP_EOL;?>
</div> <!--end of row -->
