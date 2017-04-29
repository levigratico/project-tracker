        <?php if (!empty($userdata['track_id'])): ?>
            <?php echo '<input type="hidden" id="track_id" value="'. urldecode($userdata['track_id']) .'"/>'; ?>
            <?php echo PHP_EOL; ?>
            <?php echo '<input type="hidden" id="approved" value="'. urldecode($userdata['issue_approved_by_id']) .'"/>'; ?>
        <?php endif ?>
       <li class="ui-state-default">
                <div class="tabIssue" id="tabIssue">
                    <!-- tab title -->
                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel5" role="tabpanel" style="margin-top: -12px">
                            <br>
                            <div class="card" style="width: 450px">
                                <div class="buttons pull-right" style="margin-top: 10px">
                                    <a href="#" class="btn btnsave pull-right">Save</a>
                                    <a href="#" class="btn btncancel pull-right">Cancel</a>
                                </div>
                                <div class="card-block">
                                    <div class="md-form">
                                       <input type="text" id="form3" class="form-control" value="<?php echo empty($userdata['track_title']) ? '' : urldecode($userdata['track_title']); ?>">
                                       <label for="form3">Issue Title:</label>
                                   </div>
                                   <!--DROPDOWN FOR ASSIGN-->
                                   <div class="btn-group pull-right">
                                       <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort pull-right" aria-hidden="true"></i></a>
                                       <div class="dropdown-menu">
                                          <?php loopDropDownItem($userdata['user_tbl'], 0); ?>
                                       </div>
                                   </div>
                                    <div class="divassigned">
                                        <p>Assigned to:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>

                                    </div>
                                      <!--DROPDOWN FOR MODULE-->
                                    <div class="btn-group pull-right">
                                        <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort pull-right" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu">
                                            <?php loopDropDownItem($userdata['modules_tbl'], 1); ?>
                                        </div>
                                    </div>
                                    <div class="divmodule" style="border-color: red">
                                       <p>Module Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
                                    </div>
                                    <!--DROPDOWN FOR QA-->
                                    <div class="btn-group pull-right">
                                        <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort pull-right" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu">
                                            <?php loopDropDownItem($userdata['qa_type_tbl'], 2); ?>
                                        </div>
                                    </div>
                                    <div class="divqa" style="border-color: red">
                                       <p>QA Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
                                    </div>
                                    <!--DROPDOWN FOR GIT-->
                                    <div class="btn-group pull-right">
                                        <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort pull-right" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu">
                                            <?php loopDropDownItem($userdata['git_repo_tbl'], 3); ?>
                                        </div>
                                    </div>
                                    <div class="divgit" style="border-color: red">
                                       <p>Git Repository:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
                                    </div>
                                    <!--DROPDOWN FOR PLATFORM-->
                                    <div class="btn-group pull-right">
                                        <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort pull-right" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu">
                                            <?php loopDropDownItem($userdata['platform_type'], 4); ?>
                                        </div>
                                    </div>
                                    <div class="divplat" style="border-color: red">
                                       <p>Platform type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
                                    </div>
                                    <!--DROPDOWN FOR PRIORITY-->
                                    <div class="btn-group pull-right">
                                        <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort pull-right" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu">
                                            <?php loopDropDownItem($userdata['priority_level'], 5); ?>
                                        </div>
                                    </div>
                                    <div class="divpriority" style="border-color: red">
                                       <p>Priority Level:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
                                    </div>

                                     <!--DROPDOWN FOR PRIORITY-->
                                    <div class="btn-group pull-right">
                                        <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort pull-right" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu">
                                            <?php loopDropDownItem($userdata['issue_type'], 6); ?>
                                        </div>
                                    </div>
                                    <div class="divissuetype" style="border-color: red">
                                       <p>Issue Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
                                    </div>

                                    <div class="md-form">
                                        <input type="text" id="form1" class="form-control">
                                        <label for="form1" class="">Issue Description:</label>
                                    </div>

                                    <button type="button" class="btn btnattach">
                                        <i class="fa fa-paperclip" aria-hidden="true"></i>
                                    </button>

                                    <button type="button" class="btn btnadduser">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </li>