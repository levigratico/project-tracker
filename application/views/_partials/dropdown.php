<div class="btn-group pull-right">
        <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort pull-right" aria-hidden="true"></i></a>
		<div class="dropdown-menu">
		            <a class="dropdown-item history" data-raw="<?php echo $track_issue_id; ?>" href="#">History</a>
		            <a class="dropdown-item" href="#">Details</a>
		            <a class="dropdown-item" href="<?php echo base_url() . 'index.php/createissue/createWithTrackId/' . $id . '/' . $issue_title . '/' . (empty($issue_approved_by_id) ? $id : $issue_approved_by_id); ?>">Create Issue</a>
		            <a class="dropdown-item" href="#">QA</a>
		</div>
</div>