<!-- Head -->
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
        <div class="tabIssue" id="tabIssue">
            <!--Tab Title -->
            <!-- Tab panels -->
            <div class="tab-content">
                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel5" role="tabpanel" style="margin-top: -12px">
                    <br>
                        <ul id="sortable" style="width: 500px">
                              <!-- list of bugs -->
                        </ul>
                </div>
            </div>
        </div>
    </div> <!-- end colTrackTwo -->
    <?php echo PHP_EOL;?>
    <?php $this->load->view('_partials/sidebar', array('user_name' => 'levi')); ?><!-- coltrackone -->
    <?php echo PHP_EOL;?>
</div> <!-- end of row -->