<!-- breadcrumb, project popup -->
<input type="hidden" id="checkload" value="0">
<div class="crt_slide task_action_bar">
  <button type="button" class="btn gry_btn task_create_back" onclick="crt_popup_close()"><i class="icon-backto"></i>Go Back</button>
</div>
<div class="breadcrumb_div">
  <ol class="breadcrumb breadcrumb_fixed">
    <li> <a href="http://newui.orangescrum.org/dashboard"> <i class="icon-home"></i></a> </li>
    <li>Dashboard</li>
    <li class="dropdown" id="prj_drpdwn">Project: <a href="javascript:void(0);" onclick="view_project_menu(&#39;mydashboard&#39;);" data-toggle="dropdown" class="option-toggle" id="prj_ahref">
      <div class="prjnm_ttc"><span id="pname_dashboard" class="ttc ">1234 Test Project A</span></div>
      <i class="caret"></i> </a>
      <div class="dropdown-menu lft popup" id="projpopup">
        <center>
          <div id="loader_prmenu" style="display:none;"> <img src="./mydashboard_files/del.gif" alt="loading..." title="loading..."> </div>
        </center>
        <div id="find_prj_dv" style="display: none;">
          <input type="text" placeholder="Find a Project" class="form-control pro_srch" onkeyup="search_project_menu(&#39;mydashboard&#39;,this.value,event)" id="search_project_menu_txt">
          <i class="icon-srch-img"></i>
          <div id="load_find_dashboard" style="display:none;" class="loading-pro"> <img src="./mydashboard_files/del.gif"> </div>
        </div>
        <div id="ajaxViewProject" style="display:none;"></div>
        <div id="ajaxViewProjects"></div>
      </div>
    </li>
    <li class="kanbn dashborad-view-type" id="select_view_mlst" style="display: none;"> <a href="http://newui.orangescrum.org/dashboard#milestone" onclick="checkHashLoad(&#39;milestone&#39;);">
      <div id="mlview_btn" class="btn gry_btn kan30" title="Manage Milestone"><i class="icon-list-view"></i></div>
      </a> <a href="http://newui.orangescrum.org/dashboard#milestonelist" onclick="checkHashLoad(&#39;milestonelist&#39;);">
      <div id="mkbview_btn" class="btn gry_btn kan30" style="border-radius:0 3px 3px 0" title="Milestone Kanban View"><i class="icon-kanv-view"></i></div>
      </a> 
      <!--<a href="javascript:void(0);" onclick="addEditMilestone(this);" id="mlist_crt_mlstbtn" class="mlstlink_new" data-name="" data-uid="" data-id="">Create Milestone</a>--> 
    </li>
  </ol>
</div>
<div class="task_action_bar_div task_detail_head">
  <div class="task_action_bar">
    <button class="btn gry_btn task_detail_back" type="button" style="margin-left:18px;"> <i class="icon-backto"></i>Go Back </button>
    <div class="fr">
      <button class="btn gry_btn next" type="button" title="Next"> <i class="icon-next"></i> </button>
    </div>
    <div class="fr">
      <button class="btn gry_btn prev" type="button" title="Previous"> <i class="icon-prev"></i> </button>
    </div>
  </div>
  <!-- Case Detail buttons --> 
</div>
<div class="task_action_bar_div milestonekb_detail_head">
  <div class="task_action_bar">
    <button class="btn gry_btn task_detail_back" type="button" style="margin-left:18px;"> <i class="icon-backto"></i>Go Back </button>
  </div>
  <!-- Case Detail buttons --> 
</div>
<style>
/*.breadcrumb > li + li::before {background:none !important;}*/
.brcmbcal{line-height:30px;}
</style>
<style>
.menu_os_timelog { background-image: url("./mydashboard_files/images/ico-timlog.png"); background-position: 23px 48px; content: ""; display: inline-block;width: 22px; height: 23px; margin-right: 14px; position: relative; top: 3px;}

.menu_os_wiki { background-image: url("./mydashboard_files/images/top_sprite_wiki.png"); background-position:  0 -27px; content: ""; display: inline-block;width: 21px; height: 15px; margin-right: 15px; position: relative; top: 3px;}
.profile_name ~ ul.dropdown-menu > li div.sett_div div ul > li > a:hover .menu_os_wiki{ background-position:  21px -27px;width:21px;margin-right:15px;}

.menu_os_expense { background-image: url("./mydashboard_files/images/top_sprite_wiki.png"); background-position:  0 0; content: ""; display: inline-block;width: 21px; height: 20px; margin-right: 15px; position: relative; top: 3px;}
.profile_name ~ ul.dropdown-menu > li div.sett_div div ul > li > a:hover .menu_os_expense{ background-position:  21px -42px;}

.menu_os_timer { background: url("./mydashboard_files/images/ico-timer.png") no-repeat; background-position: -21px 0px; content: ""; display: inline-block;width: 22px; height: 23px; margin-right: 14px; position: relative; top: 4px;left:-3px}
.loginactive {
    background: #f4f4f4 none repeat scroll 0 0 !important;
    border: 1px solid #d8d8d8;
    border-radius: 5px;
    color: #a2a2a2 !important;
    cursor: not-allowed !important;
    font-family: "Raleway !important";
    font-size: 14px;
    padding: 5px 20px !important;
    text-decoration: none;}
.profile_name ~ ul.dropdown-menu > li div.sett_div div ul > li > a:hover .menu_os_timelog {background-position: 0px 48px;}
.profile_name ~ ul.dropdown-menu > li div.sett_div div ul > li > a:hover .menu_os_timer {background-position: 5px 0px;}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$(".all-addon-list > a").click(function(){
        $(".all-addon-list > ul").toggle(500);
		$(this).toggleClass('open-addon');
    });
})
</script>
<div class="slide_rht_con">
  <div>
    <style>
 .slide_rht_con{/*padding-left:12px;*/}
</style>
    <ul class="sortable ui-sortable" id="ul_mydashboard">
      <li class="sortable-li" id="list_1">
        <div class="sort_li_inner">
          <div class="dshbd-hed">
            <div class="fl">To Dos</div>
            <div class="fr active_icn portlet-header"> <img width="16px" src="./mydashboard_files/images/active_dboard.png" rel="tooltip" title="Move"> </div>
            <div class="fr active_icn"> <a href="create_task.html" onclick="creatask()" class="" style="color:#5191BD; font-size:13px;display:block;" rel="tooltip" title="Create Task"> <i id="ctask_icons" class="icon-create-tsk"></i> </a> </div>
            <div class="cb"></div>
          </div>
          <div class="htdb custom_scroll jspScrollable" tabindex="0" style="overflow: hidden; padding: 0px; width: 355px;">
            <div class="jspContainer" style="width: 355px; height: 280px;">
              <div class="jspPane" style="padding: 0px; top: 0px; width: 344px;">
                <div class="loader_dv_db" id="to_dos_ldr" style="margin-top: 90px; display: none;">
                  <center>
                    <img src="./mydashboard_files/images/case_loader2.gif" alt="Loading..." title="Loading...">
                  </center>
                </div>
                <div class="dboard_cont" id="to_dos">
                  <div class="due_task_list">Overdue Tasks</div>
                  <div class="listdv">
                    <div class="fl task_title_db"> <a href="#" title="1234 Test Project A" style="color:#5191BD">CSOB...</a> - <a href="http://newui.orangescrum.org/dashboard#details/cbbfef6da39f39b649a1a85fa4067043" title="Gfdgbdf">#15: Gfdgbdf</a> </div>
                    <div class="cb"></div>
                    <div class="fl" style="font-size:12px;"> <span style="color: #999999;">Created on Jun 08</span> </div>
                    <div class="fr" style="font-size:12px;">
                      <div class="img-cls-dt" style="margin:-1px;"></div>
                      <span class="over-due" title="Thursday, June 08, 2017">Overdue</span> </div>
                    <div class="cb"></div>
                    <div class="lstbtndv"></div>
                  </div>
                  <div class="cb"></div>
                  <div class="listdv">
                    <div class="fl task_title_db"> <a href="http://newui.orangescrum.org/dashboard/?project=0a97e1e4949123fc3472a77c603a00ec" title="1234 Test Project A" style="color:#5191BD">CSOB...</a> - <a href="http://newui.orangescrum.org/dashboard#details/d22154a30f2a9f2d925ac26c07802502" title="Threat Risk Assessment">#3: Threat Risk Assessment</a> </div>
                    <div class="cb"></div>
                    <div class="fl" style="font-size:12px;"> <span style="color: #999999;">Created on May 29</span> </div>
                    <div class="fr" style="font-size:12px;">
                      <div class="img-cls-dt" style="margin:-1px;"></div>
                      <span class="over-due" title="Friday, March 20, 1970">Overdue</span> </div>
                    <div class="cb"></div>
                    <div class="lstbtndv"></div>
                  </div>
                  <div class="cb"></div>
                  <div class="listdv">
                    <div class="fl task_title_db"> <a href="http://newui.orangescrum.org/dashboard/?project=0a97e1e4949123fc3472a77c603a00ec" title="1234 Test Project A" style="color:#5191BD">CSOB...</a> - <a href="http://newui.orangescrum.org/dashboard#details/785e2e93c233789b26cf317727d361b6" title="PEN Test">#5: PEN Test</a> </div>
                    <div class="cb"></div>
                    <div class="fl" style="font-size:12px;"> <span style="color: #999999;">Created on May 29</span> </div>
                    <div class="fr" style="font-size:12px;">
                      <div class="img-cls-dt" style="margin:-1px;"></div>
                      <span class="over-due" title="Tuesday, April 07, 1970">Overdue</span> </div>
                    <div class="cb"></div>
                    <div class="lstbtndv"></div>
                  </div>
                  <div class="cb"></div>
                  <div class="listdv">
                    <div class="fl task_title_db"> <a href="http://newui.orangescrum.org/dashboard/?project=0a97e1e4949123fc3472a77c603a00ec" title="1234 Test Project A" style="color:#5191BD">CSOB...</a> - <a href="http://newui.orangescrum.org/dashboard#details/8c623e7c9102e57893743f4f17c8186c" title="gytgfyughyuh">#11: gytgfyughyuh</a> </div>
                    <div class="cb"></div>
                    <div class="fl" style="font-size:12px;"> <span style="color: #999999;">Created on May 31</span> </div>
                    <div class="fr" style="font-size:12px;">
                      <div class="img-cls-dt" style="margin:-1px;"></div>
                      <span class="over-due" title="Thursday, June 01, 2017">Overdue</span> </div>
                    <div class="cb"></div>
                    <div class="lstbtndv"></div>
                  </div>
                  <div class="cb"></div>
                  <div class="due_task_list up_task_list">Upcoming Tasks</div>
                  <div class="listdv">
                    <div class="fl task_title_db"> <a href="http://newui.orangescrum.org/dashboard/?project=0a97e1e4949123fc3472a77c603a00ec" title="1234 Test Project A" style="color:#5191BD">CSOB...</a> - <a href="http://newui.orangescrum.org/dashboard#details/857d21e02f15dba0318a5bd1e0c1b01c" title="SAS">#1: SAS</a> </div>
                    <div class="cb"></div>
                    <div class="fl" style="font-size:12px;"> <span style="color: #999999;">Created on May 29</span> </div>
                    <div class="fr" style="font-size:12px;">
                      <div class="img-cls-dt" style="margin:-1px;"></div>
                      <span style="color: #0CAA00;">Jun 23</span> </div>
                    <div class="cb"></div>
                  </div>
                  <div class="cb"></div>
                  <div id="to_dos_more" data-value="5" style="display: none;"></div>
                </div>
              </div>
              <div class="jspVerticalBar">
                <div class="jspCap jspCapTop"></div>
                <div class="jspTrack" style="height: 280px;">
                  <div class="jspDrag" style="height: 219px;">
                    <div class="jspDragTop"></div>
                    <div class="jspDragBottom"></div>
                  </div>
                </div>
                <div class="jspCap jspCapBottom"></div>
              </div>
            </div>
          </div>
          <div class="fr moredb" id="more_to_dos" style="display: none;"><a href="javascript:void(0);" onclick="showTasks(&#39;my&#39;);">View All <span id="todos_cnt" style="display:none;">(0)</span></a></div>
        </div>
      </li>
      <li class="sortable-li" id="list_2" style="display: none;">
        <div class="sort_li_inner">
          <div class="dshbd-hed">
            <div class="fl">Recent Projects</div>
            <div class="fr active_icn portlet-header"> <img width="16px" src="./mydashboard_files/active_dboard.png" rel="tooltip" title="Move"> </div>
            <div class="fr active_icn"> <a href="javascript:void(0);" onclick="newProject()" class="" style="color:#5191BD; font-size:13px;" rel="tooltip" title="Create Project"> <i class="icon-create-proj"></i> </a> </div>
            <div class="cb"></div>
          </div>
          <div class="htdb custom_scroll" style="overflow: hidden; padding: 0px; width: 0px;">
            <div class="jspContainer" style="width: 0px; height: 280px;">
              <div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 0px;">
                <div class="loader_dv_db" id="recent_projects_ldr" style="margin-top: 90px;">
                  <center>
                    <img src="./mydashboard_files/images/case_loader2.gif" alt="Loading..." title="Loading...">
                  </center>
                </div>
                <div class="dboard_cont" id="recent_projects"></div>
              </div>
            </div>
          </div>
          <div class="fr moredb" id="more_recent_projects" style="display: none;"><a href="javascript:void(0);" onclick="showTasks(&#39;all&#39;);">View All <span id="todos_cnt" style="display:none;">(0)</span></a></div>
        </div>
      </li>
      <li class="sortable-li" id="list_3">
        <div class="sort_li_inner">
          <div class="dshbd-hed">
            <div class="fl">Usage Details</div>
            <div class="fr active_icn portlet-header"> <img width="16px" src="./mydashboard_files/images/active_dboard.png" rel="tooltip" title="Move"> </div>
            <div class="cb"></div>
          </div>
          <div id="usage_details" class="dboard_cont">
            <div class="listdv">
              <div class="fl icn_udet_db"><img class="portlet-header" src="./mydashboard_files/images/u_det_sto.png"></div>
              <div class="fl cnt_udet_db"><b>0</b> MB of File Storage</div>
              <div class="cb"></div>
            </div>
            <div class="listdv">
              <div class="fl icn_udet_db"><img class="portlet-header" src="./mydashboard_files/images/u_det_usr.png"></div>
              <div class="fl cnt_udet_db"><b>1</b> Active Users</div>
              <div class="cb"></div>
            </div>
          </div>
          <div class="loader_dv_db" id="usage_details_ldr" style="margin-top: 90px; display: none;">
            <center>
              <img src="./mydashboard_files/images/case_loader2.gif" alt="Loading..." title="Loading...">
            </center>
          </div>
        </div>
      </li>
      <li class="sortable-li" id="list_5">
        <div class="sort_li_inner">
          <div class="dshbd-hed">
            <div class="fl">Summary</div>
            <div class="fr active_icn portlet-header"> <img width="16px" src="./mydashboard_files/active_dboard.png" rel="tooltip" title="Move"> </div>
            <div class="cb"></div>
          </div>
          <div id="statistics" class="dboard_cont">
            <div class="listdv">
              <div class="fl stas_icn stas_red">11</div>
              <div class="fl stas_cnt_db">Task without Due Date</div>
              <div class="cb"></div>
            </div>
            <div class="lstbtndv"></div>
            <div class="listdv">
              <div class="fl stas_icn stas_green">2 hrs 13 mins</div>
              <div class="fl stas_cnt_db">Hours spent and still counting</div>
              <div class="cb"></div>
            </div>
            <div class="lstbtndv"></div>
            <div class="listdv">
              <div class="fl stas_icn stas_green">0</div>
              <div class="fl stas_cnt_db">Hours spent on deklaration</div>
              <div class="cb"></div>
            </div>
            <!--
<div class="lstbtndv"></div>
<div class="listdv">
    <div class="fl stas_icn stas_green">47</div>
    <div class="fl stas_cnt_db">Task without Due Date</div>
    <div class="cb"></div>
</div>
<div class="lstbtndv"></div>
<div class="listdv">
    <div class="fl stas_icn stas_orange">47</div>
    <div class="fl stas_cnt_db">Task without Due Date</div>
    <div class="cb"></div>
</div>
--></div>
          <div class="loader_dv_db" id="statistics_ldr" style="margin-top: 90px; display: none;">
            <center>
              <img src="./mydashboard_files/images/case_loader2.gif" alt="Loading..." title="Loading...">
            </center>
          </div>
        </div>
      </li>
      <li class="sortable-li" id="list_6">
        <div class="sort_li_inner">
          <div class="dshbd-hed">
            <div class="fl">Recent Activities</div>
            <div class="fr active_icn portlet-header"> <img width="16px" src="./mydashboard_files/active_dboard.png" rel="tooltip" title="Move"> </div>
            <div class="fr active_icn"> <a href="javascript:void(0);" onclick="newUser()" class="" style="color:#5191BD; font-size:13px;" rel="tooltip" title="Invite User"> <i class="icon-create-proj"></i> </a> </div>
            <div class="cb"></div>
          </div>
          <div class="htdb custom_scroll jspScrollable" tabindex="0" style="overflow: hidden; padding: 0px; width: 355px;">
            <div class="jspContainer" style="width: 355px; height: 280px;">
              <div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 344px;">
                <div class="loader_dv_db" id="recent_activities_ldr" style="margin-top: 90px; display: none;">
                  <center>
                    <img src="./mydashboard_files/images/case_loader2.gif" alt="Loading..." title="Loading...">
                  </center>
                </div>
                <div class="dboard_cont" id="recent_activities">
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title=" created #19: gfhgfngfnmgh"> <span class="col-crt"><b>created</b></span> <a href="http://newui.orangescrum.org/dashboard#details/15c34d9b4da1e5a7c32f780fcdc7e66e">#19: gfhgfngfnmgh</a></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Fri, Jun 09 4:29 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title="updated Status changed to Assigned"><span class="col-wip"><b>updated</b> </span><span class="fnt_clr_gry">Status changed to <b style="color:#F3C788">Assigned</b></span></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Fri, Jun 09 4:27 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title=" created #17: treytry"> <span class="col-crt"><b>created</b></span> <a href="http://newui.orangescrum.org/dashboard#details/a2bfed78265f5aab81944878d1543a04">#17: treytry</a></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Fri, Jun 09 4:25 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title="updated Status changed to Assigned"><span class="col-wip"><b>updated</b> </span><span class="fnt_clr_gry">Status changed to <b style="color:#F3C788">Assigned</b></span></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Thu, Jun 08 7:05 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title="updated Status changed to Hold"><span class="col-wip"><b>updated</b> </span><span class="fnt_clr_gry">Status changed to <b style="color:#ff0000">Hold</b></span></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Thu, Jun 08 7:04 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title="updated Status changed to In Progress"><span class="col-wip"><b>updated</b> </span><span class="fnt_clr_gry">Status changed to <b style="color:#8dc2f8">In Progress</b></span></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Thu, Jun 08 7:04 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title=" Modified #16: Bcvb cvb"> <span class="col-rslvd"><b>Modified</b></span> <a href="http://newui.orangescrum.org/dashboard#details/efd0094524fef67d04df6a2ae1cfb697">#16: Bcvb cvb</a></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Thu, Jun 08 4:28 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title=" Modified #16: Bcvb cvb"> <span class="col-rslvd"><b>Modified</b></span> <a href="http://newui.orangescrum.org/dashboard#details/efd0094524fef67d04df6a2ae1cfb697">#16: Bcvb cvb</a></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Thu, Jun 08 4:27 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title=" created #16: Bcvb cvb"> <span class="col-crt"><b>created</b></span> <a href="http://newui.orangescrum.org/dashboard#details/efd0094524fef67d04df6a2ae1cfb697">#16: Bcvb cvb</a></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Thu, Jun 08 4:27 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div class="lstbtndv"></div>
                  <div class="listdv">
                    <div class="fl">
                      <div class="rec_act_img"> <img src="./mydashboard_files/saved_resource(1)" title="DaNiEl" rel="tooltip" alt="Loading"> </div>
                    </div>
                    <div class="fl wd_rec_80">
                      <div>
                        <div class="fl act_title_db" title="DaNiEl">DaNiEl</div>
                        <div class="task_cre_rec_db" title=" created #15: Gfdgbdf"> <span class="col-crt"><b>created</b></span> <a href="http://newui.orangescrum.org/dashboard#details/cbbfef6da39f39b649a1a85fa4067043">#15: Gfdgbdf</a></div>
                      </div>
                      <div class="cb"></div>
                      <div class="time_rec_db">
                        <div class="fl" style="padding-top: 2px;padding-left:3px;">Thu, Jun 08 3:02 am </div>
                        <div class="cb"></div>
                      </div>
                    </div>
                    <div class="cb"></div>
                  </div>
                  <div id="recent_activities_more" data-value="67" style="display: none;"></div>
                </div>
              </div>
              <div class="jspVerticalBar">
                <div class="jspCap jspCapTop"></div>
                <div class="jspTrack" style="height: 280px;">
                  <div class="jspDrag" style="height: 135px;">
                    <div class="jspDragTop"></div>
                    <div class="jspDragBottom"></div>
                  </div>
                </div>
                <div class="jspCap jspCapBottom"></div>
              </div>
            </div>
          </div>
          <div class="fr moredb" id="more_recent_activities" style="display: block;"><a href="javascript:void(0);" onclick="showTasks(&#39;activities&#39;);">View All <span id="todos_cnt" style="">(67)</span></a></div>
        </div>
      </li>
      <li class="sortable-li" id="list_8">
        <div class="sort_li_inner">
          <div class="dshbd-hed">
            <div class="fl">
              <select id="sel_task_type" style="color: #5191BD;background: #FFF;width: 140px;border: 1px solid #999;" onchange="showTaskStatus(this, &#39;0a97e1e4949123fc3472a77c603a00ec&#39;);">
                <option value="124">Deklaration</option>
                <option value="15">Design</option>
                <option value="2">Development</option>
                <option value="7">Maintenance</option>
                <option value="99">Post Production</option>
                <option value="122">Problem Resolution-I</option>
                <option value="123">Problem Resolution-P</option>
                <option value="78">Requirements Phase</option>
                <option value="115">Testing</option>
                <option value="121">UAT</option>
              </select>
            </div>
            <div class="fl pichart_msg ellipsis-view" id="task_type_msg" style="font-size: 15px;max-width:120px;" title="0% (0 of 2Closed)"> - 0%Closed</div>
            <div class="fr active_icn portlet-header"> <img width="16px" src="./mydashboard_files/active_dboard.png" rel="tooltip" title="Move"> </div>
            <div class="cb"></div>
          </div>
          <div id="task_type" class="dboard_cont" data-highcharts-chart="0">
            <div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 314px; height: 270px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif; font-size: 12px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="314" height="270">
              <desc>Created with Highcharts 3.0.7</desc>
              <defs>
                <clippath id="highcharts-1">
                  <rect fill="none" x="0" y="0" width="294" height="206"></rect>
                </clippath>
              </defs>
              <rect rx="5" ry="5" fill="#FFFFFF" x="0" y="0" width="314" height="270"></rect>
              <g class="highcharts-button" style="cursor:default;" title="Download" stroke-linecap="round" transform="translate(280,10)">
                <title>Download</title>
                <rect rx="2" ry="2" fill="white" x="0.5" y="0.5" width="24" height="22" stroke="none" stroke-width="1"></rect>
                <path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" stroke="#969696" stroke-width="2" zIndex="1"></path>
                <text x="0" y="13" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:black;fill:black;" zIndex="1"></text>
              </g>
              <g class="highcharts-series-group" zIndex="3">
                <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(10,10) scale(1 1)" style="">
                  <path fill="#E1857A" d="M 29.10000978163808 161.14802614043518 A 117.9 117.9 0 1 1 264.89994105000494 160.98210001965 L 196.7999751000021 161.05020000829998 A 49.8 49.8 0 1 0 97.20000413168428 161.12028585066727 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                </g>
                <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(10,10) scale(1 1)"></g>
              </g>
              <g class="highcharts-data-labels highcharts-tracker" visibility="visible" zIndex="6" transform="translate(10,10) scale(1 1)" style="">
                <g zIndex="1" style="cursor:default;" transform="translate(131,63)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">100%</tspan>
                  </text>
                </g>
              </g>
              <g class="highcharts-legend" zIndex="7" transform="translate(119,226)">
                <rect rx="5" ry="5" fill="none" x="0.5" y="0.5" width="74" height="28" stroke="#909090" stroke-width="1" visibility="visible"></rect>
                <g zIndex="1">
                  <g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                        <tspan x="21">Others</tspan>
                      </text>
                      <rect rx="2" ry="2" fill="#E1857A" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                  </g>
                </g>
              </g>
              <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-999)">
                <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="16" height="16" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></rect>
                <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="16" height="16" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></rect>
                <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="16" height="16" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></rect>
                <rect rx="3" ry="3" fill="rgb(255,255,255)" x="0.5" y="0.5" width="16" height="16" fill-opacity="0.85"></rect>
                <text x="8" y="21" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#333333;fill:#333333;" zIndex="1"></text>
              </g>
              </svg></div>
          </div>
          <div class="loader_dv_db" id="task_type_ldr" style="margin-top: 90px; display: none;">
            <center>
              <img src="./mydashboard_files/images/case_loader2.gif" alt="Loading..." title="Loading...">
            </center>
          </div>
        </div>
      </li>
      <li class="sortable-li" id="list_9">
        <div class="sort_li_inner">
          <div class="dshbd-hed">
            <div class="fl">Task Status</div>
            <div class="fl pichart_msg" id="task_status_msg" title=""></div>
            <div class="fr active_icn portlet-header"> <img width="16px" src="./mydashboard_files/active_dboard.png" rel="tooltip" title="Move"> </div>
            <div class="cb"></div>
          </div>
          <div id="task_status" class="dboard_cont" data-highcharts-chart="1">
            <div class="highcharts-container" id="highcharts-2" style="position: relative; overflow: hidden; width: 314px; height: 270px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif; font-size: 12px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="314" height="270">
              <desc>Created with Highcharts 3.0.7</desc>
              <defs>
                <clippath id="highcharts-3">
                  <rect fill="none" x="0" y="0" width="294" height="170"></rect>
                </clippath>
              </defs>
              <rect rx="5" ry="5" fill="#FFFFFF" x="0" y="0" width="314" height="270"></rect>
              <g class="highcharts-button" style="cursor:default;" title="Download" stroke-linecap="round" transform="translate(280,10)">
                <title>Download</title>
                <rect rx="2" ry="2" fill="white" x="0.5" y="0.5" width="24" height="22" stroke="none" stroke-width="1"></rect>
                <path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" stroke="#969696" stroke-width="2" zIndex="1"></path>
                <text x="0" y="13" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:black;fill:black;" zIndex="1"></text>
              </g>
              <g class="highcharts-series-group" zIndex="3">
                <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(10,10) scale(1 1)" style="">
                  <path fill="#808080" d="M 146.98340063389884 -0.3999983095769579 A 81.5 81.5 0 1 1 133.43630755996048 161.46340116864152 L 141.59116559139528 113.14675506724969 A 32.5 32.5 0 1 0 146.99338062087992 48.60000067409508 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                  <path fill="#ff0000" d="M 133.3559509540314 161.44979729676487 A 81.5 81.5 0 0 1 86.95749247221977 136.21031926759682 L 123.05666877726556 103.0765076833975 A 32.5 32.5 0 0 0 141.55912154608615 113.14133021036636 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                  <path fill="#F3C788" d="M 86.90241218338849 136.1502492149188 A 81.5 81.5 0 0 1 65.77113699414221 87.74242536846192 L 114.60812211422848 83.74881993220875 A 32.5 32.5 0 0 0 123.03470424490952 103.0525533679124 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                  <path fill="none" d="M 65.76453518430893 87.66119319778181 A 81.5 81.5 0 0 1 68.00162444750869 61.06236890080208 L 115.49758030115377 73.1095336107493 A 32.5 32.5 0 0 0 114.60548949067534 83.71642673531176 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                  <path fill="#d524de" d="M 68.02170157445276 60.9833805572307 A 81.5 81.5 0 0 1 78.75724632062878 36.54467966385309 L 119.7866319683489 63.33254097024816 A 32.5 32.5 0 0 0 115.50558651741981 73.07803519153371 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                  <path fill="#000dff" d="M 78.80183575491303 36.476459199205834 A 81.5 81.5 0 0 1 96.94159617203533 16.785101211333526 L 127.03805982320428 55.45295447077717 A 32.5 32.5 0 0 0 119.8044130311003 63.305336490480855 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                  <path fill="#ff9900" d="M 97.0059360893047 16.735074973295312 A 81.5 81.5 0 0 1 120.48342490369087 4.034305653152003 L 136.42590563644114 50.36828139542871 A 32.5 32.5 0 0 0 127.06371684542825 55.43300535744905 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                  <path fill="#8ad6a3" d="M 120.5605038434799 4.007827615319073 A 81.5 81.5 0 0 1 146.88679813504717 -0.39992138240241104 L 146.95485815201266 48.600031350575726 A 32.5 32.5 0 0 0 136.4566426369705 50.35772266868552 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                </g>
                <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(10,10) scale(1 1)"></g>
              </g>
              <g class="highcharts-data-labels highcharts-tracker" visibility="visible" zIndex="6" transform="translate(10,10) scale(1 1)" style="">
                <g zIndex="1" style="cursor:default;" transform="translate(177,75)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">52.68%</tspan>
                  </text>
                </g>
                <g zIndex="1" style="cursor:default;" transform="translate(101,116)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">10.52%</tspan>
                  </text>
                </g>
                <g zIndex="1" style="cursor:default;" transform="translate(79,92)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">10.52%</tspan>
                  </text>
                </g>
                <g zIndex="1" style="cursor:default;" transform="translate(78,67)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">5.26%</tspan>
                  </text>
                </g>
                <g zIndex="1" style="cursor:default;" transform="translate(82,50)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">5.26%</tspan>
                  </text>
                </g>
                <g zIndex="1" style="cursor:default;" transform="translate(91,36)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">5.26%</tspan>
                  </text>
                </g>
                <g zIndex="1" style="cursor:default;" transform="translate(105,26)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">5.26%</tspan>
                  </text>
                </g>
                <g zIndex="1" style="cursor:default;" transform="translate(121,20)" visibility="visible">
                  <text x="3" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:white;line-height:14px;fill:white;" zIndex="1">
                    <tspan x="3">5.26%</tspan>
                  </text>
                </g>
              </g>
              <g class="highcharts-legend" zIndex="7" transform="translate(34,190)">
                <rect rx="5" ry="5" fill="none" x="0.5" y="0.5" width="244" height="64" stroke="#909090" stroke-width="1" visibility="visible"></rect>
                <g zIndex="1">
                  <g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                        <tspan x="21">New</tspan>
                      </text>
                      <rect rx="2" ry="2" fill="#808080" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(62.546875,3)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                        <tspan x="21">Hold</tspan>
                      </text>
                      <rect rx="2" ry="2" fill="#ff0000" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(118.75,3)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                        <tspan x="21">Assigned</tspan>
                      </text>
                      <rect rx="2" ry="2" fill="#F3C788" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(201.890625,3)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2"></text>
                      <rect rx="2" ry="2" fill="#2f7ed8" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(8,21)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                        <tspan x="21">In Review</tspan>
                      </text>
                      <rect rx="2" ry="2" fill="#d524de" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(92.328125,21)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                        <tspan x="21">Completed</tspan>
                      </text>
                      <rect rx="2" ry="2" fill="#000dff" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(184.625,21)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                        <tspan x="21">Billed</tspan>
                      </text>
                      <rect rx="2" ry="2" fill="#ff9900" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                    <g class="highcharts-legend-item" zIndex="1" transform="translate(8,39)">
                      <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                        <tspan x="21">Closed</tspan>
                      </text>
                      <rect rx="2" ry="2" fill="#8ad6a3" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                    </g>
                  </g>
                </g>
              </g>
              <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-999)">
                <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="16" height="16" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></rect>
                <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="16" height="16" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></rect>
                <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="16" height="16" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></rect>
                <rect rx="3" ry="3" fill="rgb(255,255,255)" x="0.5" y="0.5" width="16" height="16" fill-opacity="0.85"></rect>
                <text x="8" y="21" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#333333;fill:#333333;" zIndex="1"></text>
              </g>
              </svg></div>
          </div>
          <div class="loader_dv_db" id="task_status_ldr" style="margin-top: 90px; display: none;">
            <center>
              <img src="./mydashboard_files/images/case_loader2.gif" alt="Loading..." title="Loading...">
            </center>
          </div>
        </div>
      </li>
      <li class="sortable-li tlog-grph" id="list_10">
        <div class="sort_li_inner">
          <div class="dshbd-hed">
            <div class="fl">Time Log</div>
            <div class="fr active_icn portlet-header"> <img width="16px" src="./mydashboard_files/active_dboard.png" rel="tooltip" title="Move"> </div>
            <div class="cb"></div>
          </div>
          <div id="timelog_graph" class="dboard_cont">
            <div id="dboardtimelog" class="tlog-chrt-prnt" style="height:280px" data-highcharts-chart="2">
              <div class="highcharts-container" id="highcharts-4" style="position: relative; overflow: hidden; width: 1081px; height: 280px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif; font-size: 12px;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1081" height="280">
                <desc>Created with Highcharts 3.0.7</desc>
                <defs>
                  <clippath id="highcharts-5">
                    <rect fill="none" x="0" y="0" width="1018" height="185"></rect>
                  </clippath>
                </defs>
                <rect rx="5" ry="5" fill="#FFFFFF" x="0" y="0" width="1081" height="280"></rect>
                <g class="highcharts-grid" zIndex="1"></g>
                <g class="highcharts-grid" zIndex="1"></g>
                <g class="highcharts-axis" zIndex="2">
                  <path fill="none" d="M 151.5 195 L 151.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 216.5 195 L 216.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 282.5 195 L 282.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 348.5 195 L 348.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 413.5 195 L 413.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 479.5 195 L 479.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 545.5 195 L 545.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 610.5 195 L 610.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 676.5 195 L 676.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 742.5 195 L 742.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 807.5 195 L 807.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 873.5 195 L 873.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 939.5 195 L 939.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 1004.5 195 L 1004.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 1071.5 195 L 1071.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 85.5 195 L 85.5 200" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                  <path fill="none" d="M 52.5 195 L 52.5 200" stroke="#C0D0E0" stroke-width="1"></path>
                  <path fill="none" d="M 53 195.5 L 1071 195.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path>
                </g>
                <g class="highcharts-axis" zIndex="2">
                  <text x="28" y="102.5" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#4d759e;font-weight:bold;fill:#4d759e;" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 28 102.5)" visibility="visible">
                    <tspan x="28">Hour(s) Spent</tspan>
                  </text>
                </g>
                <g class="highcharts-series-group" zIndex="3">
                  <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(53,10) scale(1 1)" style="" clip-path="url(#highcharts-5)">
                    <rect fill="#C5C5C5" x="8.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="40.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="73.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="106.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="139.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="172.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="205.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="237.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="270.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="303.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="336.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="369.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="402.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="434.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="467.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="500.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="533.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="566.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="599.5" y="72.5" width="16" height="5" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="631.5" y="139.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="664.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="697.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="730.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="763.5" y="139.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="796.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="829.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="861.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="894.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="927.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="960.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#C5C5C5" x="993.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                  </g>
                  <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(53,10) scale(1 1)"></g>
                  <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(53,10) scale(1 1)" style="" clip-path="url(#highcharts-5)">
                    <rect fill="#00A2FF" x="8.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="40.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="73.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="106.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="139.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="172.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="205.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="237.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="270.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="303.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="336.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="369.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="402.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="434.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="467.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="500.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="533.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="566.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="599.5" y="77.5" width="16" height="108" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="631.5" y="139.5" width="16" height="46" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="664.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="697.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="730.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="763.5" y="139.5" width="16" height="46" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="796.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="829.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="861.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="894.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="927.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="960.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                    <rect fill="#00A2FF" x="993.5" y="185.5" width="16" height="0" stroke="#FFFFFF" stroke-width="1" rx="0" ry="0"></rect>
                  </g>
                  <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(53,10) scale(1 1)"></g>
                </g>
                <g class="highcharts-legend" zIndex="7" transform="translate(450,236)">
                  <rect rx="5" ry="5" fill="none" x="0.5" y="0.5" width="180" height="28" stroke="#909090" stroke-width="1" visibility="visible"></rect>
                  <g zIndex="1">
                    <g>
                      <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                        <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                          <tspan x="21">Non-billable</tspan>
                        </text>
                        <rect rx="2" ry="2" fill="#C5C5C5" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                      </g>
                      <g class="highcharts-legend-item" zIndex="1" transform="translate(110.234375,3)">
                        <text x="21" y="15" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;cursor:pointer;color:#274b6d;fill:#274b6d;" text-anchor="start" zIndex="2">
                          <tspan x="21">Billable</tspan>
                        </text>
                        <rect rx="2" ry="2" fill="#00A2FF" x="0" y="4" width="16" height="12" zIndex="3"></rect>
                      </g>
                    </g>
                  </g>
                </g>
                <g class="highcharts-axis-labels" zIndex="7">
                  <text x="69.41935483870968" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="69.41935483870968">May 13,</tspan>
                    <tspan dy="14" x="69.41935483870968">2017</tspan>
                  </text>
                  <text x="135.09677419354838" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="135.09677419354838">May 15,</tspan>
                    <tspan dy="14" x="135.09677419354838">2017</tspan>
                  </text>
                  <text x="200.77419354838707" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="200.77419354838707">May 17,</tspan>
                    <tspan dy="14" x="200.77419354838707">2017</tspan>
                  </text>
                  <text x="266.4516129032258" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="266.4516129032258">May 19,</tspan>
                    <tspan dy="14" x="266.4516129032258">2017</tspan>
                  </text>
                  <text x="332.1290322580645" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="332.1290322580645">May 21,</tspan>
                    <tspan dy="14" x="332.1290322580645">2017</tspan>
                  </text>
                  <text x="397.8064516129032" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="397.8064516129032">May 23,</tspan>
                    <tspan dy="14" x="397.8064516129032">2017</tspan>
                  </text>
                  <text x="463.4838709677419" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="463.4838709677419">May 25,</tspan>
                    <tspan dy="14" x="463.4838709677419">2017</tspan>
                  </text>
                  <text x="529.1612903225806" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="529.1612903225806">May 27,</tspan>
                    <tspan dy="14" x="529.1612903225806">2017</tspan>
                  </text>
                  <text x="594.8387096774193" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="594.8387096774193">May 29,</tspan>
                    <tspan dy="14" x="594.8387096774193">2017</tspan>
                  </text>
                  <text x="660.516129032258" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="660.516129032258">May 31,</tspan>
                    <tspan dy="14" x="660.516129032258">2017</tspan>
                  </text>
                  <text x="726.1935483870967" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="726.1935483870967">Jun 02,</tspan>
                    <tspan dy="14" x="726.1935483870967">2017</tspan>
                  </text>
                  <text x="791.8709677419354" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="791.8709677419354">Jun 04,</tspan>
                    <tspan dy="14" x="791.8709677419354">2017</tspan>
                  </text>
                  <text x="857.5483870967741" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="857.5483870967741">Jun 06,</tspan>
                    <tspan dy="14" x="857.5483870967741">2017</tspan>
                  </text>
                  <text x="923.2258064516128" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="923.2258064516128">Jun 08,</tspan>
                    <tspan dy="14" x="923.2258064516128">2017</tspan>
                  </text>
                  <text x="988.9032258064516" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="988.9032258064516">Jun 10,</tspan>
                    <tspan dy="14" x="988.9032258064516">2017</tspan>
                  </text>
                  <text x="1054.5806451612902" y="209" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="middle" opacity="1">
                    <tspan x="1054.5806451612902">Jun 12,</tspan>
                    <tspan dy="14" x="1054.5806451612902">2017</tspan>
                  </text>
                </g>
                <g class="highcharts-axis-labels" zIndex="7">
                  <text x="45" y="198.5" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="end" opacity="1">
                    <tspan x="45">0</tspan>
                  </text>
                  <text x="45" y="106" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="end" opacity="1">
                    <tspan x="45">1</tspan>
                  </text>
                  <text x="45" y="13.5" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;cursor:default;line-height:14px;fill:#666;" text-anchor="end" opacity="1">
                    <tspan x="45">2</tspan>
                  </text>
                </g>
                <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(186,117)" opacity="0" visibility="hidden">
                  <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="100" height="66" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></rect>
                  <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="100" height="66" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></rect>
                  <rect rx="3" ry="3" fill="none" x="0.5" y="0.5" width="100" height="66" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></rect>
                  <rect rx="3" ry="3" fill="rgb(255,255,255)" x="0.5" y="0.5" width="100" height="66" fill-opacity="0.85" stroke="#00A2FF" stroke-width="1" anchorX="113.5" anchorY="78"></rect>
                  <text x="8" y="21" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#333333;fill:#333333;" zIndex="1">
                    <tspan style="font-weight:bold" x="8">May 20, 2017</tspan>
                    <tspan x="8" dy="16">Billable: 0</tspan>
                    <tspan x="8" dy="16">Total: 0</tspan>
                  </text>
                </g>
                </svg></div>
            </div>
            <script>
$(function () {
    var dt = ["May 13, 2017","May 14, 2017","May 15, 2017","May 16, 2017","May 17, 2017","May 18, 2017","May 19, 2017","May 20, 2017","May 21, 2017","May 22, 2017","May 23, 2017","May 24, 2017","May 25, 2017","May 26, 2017","May 27, 2017","May 28, 2017","May 29, 2017","May 30, 2017","May 31, 2017","Jun 01, 2017","Jun 02, 2017","Jun 03, 2017","Jun 04, 2017","Jun 05, 2017","Jun 06, 2017","Jun 07, 2017","Jun 08, 2017","Jun 09, 2017","Jun 10, 2017","Jun 11, 2017","Jun 12, 2017"];
    var series =[{"name":"Non-billable","color":"#C5C5C5","data":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.05,0,0,0,0,0,0,0,0,0,0,0,0]},{"name":"Billable","color":"#00A2FF","data":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1.1666666666667,0.5,0,0,0,0.5,0,0,0,0,0,0,0]}];
    $('#dboardtimelog').highcharts({

        chart: {
            type: 'column'
        },

        title: {
            align: 'left',
            text: ''
        },
        exporting: {
            enabled: false,
            buttons: {
                contextButton: {
                    symbolStrokeWidth: 2,
                    symbolStroke: '#969696',
                    menuItems: [{
                        text: 'PNG',
                        onclick: function() {
                            this.exportChart();
                        },
                        separator: false
                    }, {
                        text: 'JPEG',
                        onclick: function() {
                            this.exportChart({
                                type: 'image/jpeg'
                            });
                        },
                        separator: false
                    }, {
                        text: 'PDF',
                        onclick: function() {
                            this.exportChart({
                                type: 'application/pdf'
                            });
                        },
                        separator: false
                    }, {
                        text: 'Print',
                        onclick: function() {
                            this.print();
                        },
                        separator: false
                    }]
                }
            },
        },
        xAxis: {
            type:'datetime',
            categories: eval(dt),
            showFirstLabel:true,
            showLastLabel:true,
            tickInterval: 3,
        },

        yAxis: {
            allowDecimals: false,
            gridLineWidth: 0,
            minorGridLineWidth: 0,
            min: 0,
            title: {
                text: 'Hour(s) Spent'
            }
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },
		credits: {
			enabled: false
		},
        plotOptions: {
            column: {
                stacking: 'normal'
            }
        },

        series: series
    });
});
</script></div>
          <div class="loader_dv_db" id="timelog_graph_ldr" style="margin-top: 90px; display: none;">
            <center>
              <img src="./mydashboard_files/images/case_loader2.gif" alt="Loading..." title="Loading...">
            </center>
          </div>
        </div>
      </li>
    </ul>
    <div class="cb"></div>
    <script type="text/javascript">
    var DASHBOARD_ORDER = {"1":{"id":"1","name":"To Dos"},"2":{"id":"2","name":"Recent Projects"},"3":{"id":"3","name":"Usage Details"},"5":{"id":"5","name":"Statistics"},"6":{"id":"6","name":"Recent Activities"},"8":{"id":"8","name":"Task Type"},"9":{"id":"9","name":"Task Status"},"10":{"id":10,"name":"Time Log"}};
    $(document).ready(function() {
	loadDashboardPage('0a97e1e4949123fc3472a77c603a00ec');
    });
</script> </div>
</div>
