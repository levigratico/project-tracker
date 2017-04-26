<div class="col-md-3 pull-md-9 colTrackOne">
        <div class="trackProfile">
            <div class="form-inline">
                <img src="<?php echo base_url(); ?>public/img/circle.png" style="width: 45px; height: 45px; margin: 10px 20px 10px 30px">
                <p class="profileName"><?php echo $user_name; ?></p>
                <i class="fa fa-chevron-down iconChevTwo" style="color: white" aria-hidden="true"></i>
            </div>
        </div>
        <div class="divBtnIssue">
        <center><button type="button" class="btn btn-primary btncreate" id="btncreateissue">Create Issue</button><center>
        </div>
        <div class="menu" style="padding: 10px 30px 30px 30px;">
            <div class="col" style="margin: 20px 20px 20px 20px">
                <a href="/public/mywork.php"><div class="row">
                    <img src="<?php echo base_url(); ?>public/img/inbox.png" style="width: 30px; height: 30px">
                    <p class="pWork"> My Work </p>
                </div>
            </div>

           <div class="col" style="margin: 20px 20px 20px 20px">
               <div class="row">
                   <img src="<?php echo base_url(); ?>public/img/server.png" style="width: 30px; height: 30px">
                   <p class="pCurrent"> Current/Backlog</p>
               </div>
            </div>

           <div class="col" style="margin: 20px 20px 20px 20px">
               <div class="row">
                   <img src="<?php echo base_url(); ?>public/img/search-problem.png" style="width: 30px; height: 30px">
                   <p class="pIssue">Issue</p>
               </div>
           </div>

           <div class="col" style="margin: 20px 20px 20px 20px">
               <div class="row">
                   <img src="<?php echo base_url(); ?>public/img/browser.png" style="width: 30px; height: 30px">
                   <p class="pDone"> Done </p>
               </div>
           </div>
        </div>
    </div>