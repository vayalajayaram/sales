
<div class="ciuis-body-content">
	<div class="main-content container-fluid col-xs-12 col-md-12 col-lg-9 hidden-sm hidden-md hidden-lg" ng-hide="ONLYADMIN != 'true'">
		<?php include(APPPATH . 'views/inc/widgets/panel_bottom_summary.php'); ?>
	</div>
	<div class="main-content container-fluid col-xs-12 col-md-12 col-lg-9 hidden-sm hidden-md hidden-lg" ng-hide="ONLYADMIN != 'false'">
		<?php include(APPPATH . 'views/inc/widgets/panel_bottom_summary_staff.php'); ?>
		
	</div>
	<div class="main-content container-fluid col-xs-12 col-md-12 col-lg-9">
		<md-content class="bg-white ciuis-home-summary-top">
			<md-toolbar class="toolbar-white" style="border-right:1px solid #e0e0e0">
				<div class="md-toolbar-tools">
					<h4 class="text-muted" flex md-truncate ><strong><?php echo lang('panelsummary'); ?></strong></h4>					
					<md-button class="md-icon-button" aria-label="Actions">
						<md-icon><span class="ion-flag text-muted"></span></md-icon>
					</md-button>
				</div>
			</md-toolbar>
			<div class="col-md-6 col-sm-6 col-lg-6 nopadding">
		
				<md-content class="bg-white ciuis-summary-two">
					<div class="ciuis-dashboard-box-b1-xs-ca-body">
							<div class="ciuis-dashboard-box-stats ciuis-dashboard-box-stats-main">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.otc"></div>
								<a ng-href="<?php echo base_url('tickets')?>">
									<div class="ciuis-dashboard-box-stats-caption" ng-bind="stats.newticketmsg"></div></a>
								<!--<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value--positive" ng-bind="'+' + stats.twt">+</div>
									<div class="ciuis-dashboard-box-stats-period"><?php echo lang('thisweek'); ?></div>
								</div>-->
							</div>
							<div class="ciuis-dashboard-box-stats">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.yms"></div>
								<a ng-href="<?php echo base_url('customers')?>">
									<div class="ciuis-dashboard-box-stats-caption" ng-bind="stats.newcustomermsg"></div></a>
								<!--<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value-negative ion-refresh"></div>
								</div>-->
							</div>
							<div class="ciuis-dashboard-box-stats">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.tclc"></div>
								<div class="ciuis-dashboard-box-stats-caption" ><a ng-href="<?php echo base_url('leads')?>"><?php echo lang('totalleads'); ?></a></div>
								<!--<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value-negative ion-refresh"></div>
								</div>-->
							</div>
							
						</div>
					<!--<div class="hidden-xs" ng-hide="ONLYADMIN != 'true'" ng-controller="Chart_Controller">
						<h4 class="text-center"><?php echo lang('monthlyexpenses'); ?></h4>
					<div id="monthlyexpenses" style="height: 145px;display: block;bottom: 14px;position: absolute;width: 100%;border-bottom-left-radius: 5px;"></div>
					</div>-->
				</md-content>
			</div>
			<!--<div class="col-sm-9 xs-p-0">
			<md-content class="bg-white ciuis-summary-two">
					<div class="ciuis-dashboard-box-b1-xs-ca-body">
							<div class="ciuis-dashboard-box-stats ciuis-dashboard-box-stats-main">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.otc"></div>
								<div class="ciuis-dashboard-box-stats-caption" ng-bind="stats.newticketmsg"></div>
								<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value--positive" ng-bind="'+' + stats.twt">+</div>
									<div class="ciuis-dashboard-box-stats-period"><?php echo lang('thisweek'); ?></div>
								</div>
							</div>
							<div class="ciuis-dashboard-box-stats">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.yms"></div>
								<div class="ciuis-dashboard-box-stats-caption" ng-bind="stats.newcustomermsg"></div>
								<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value-negative ion-refresh"></div>
								</div>
							</div>
							<div class="ciuis-dashboard-box-stats">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.clc"></div>
								<div class="ciuis-dashboard-box-stats-caption" ng-bind="stats.newtotalleads"></div>
								<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value-negative ion-refresh"></div>
								</div>
							</div>
						</div>
					<!--<div class="hidden-xs" ng-hide="ONLYADMIN != 'true'" ng-controller="Chart_Controller">
						<h4 class="text-center"><?php echo lang('monthlyexpenses'); ?></h4>
					<div id="monthlyexpenses" style="height: 145px;display: block;bottom: 14px;position: absolute;width: 100%;border-bottom-left-radius: 5px;"></div>
					</div>-->
							<div class="col-sm-6 xs-p-0">
			<md-content class="bg-white ciuis-summary-two">
					<div class="ciuis-dashboard-box-b1-xs-ca-body">
							<div class="ciuis-dashboard-box-stats ciuis-dashboard-box-stats-main">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.tcl"></div>
								<div class="ciuis-dashboard-box-stats-caption" ><a ng-href="<?php echo base_url('prospect')?>"><?php echo lang('newappointments'); ?></a></div>
								<!--<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value-negative ion-refresh"></div>
								</div>-->
							</div>
							<div class="ciuis-dashboard-box-stats">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.ftcl"></div>
								<div class="ciuis-dashboard-box-stats-caption"><a ng-href="<?php echo base_url('prospect')?>"><?php echo lang('followup'); ?></a></div>
								<!--<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value-negative ion-refresh"></div>
								</div>-->
							</div>
							<div class="ciuis-dashboard-box-stats">
								<div class="ciuis-dashboard-box-stats-amount" ng-bind="stats.prod"></div>
								<div class="ciuis-dashboard-box-stats-caption" ><a ng-href="<?php echo base_url('products')?>"><?php echo lang('totalproducts'); ?></a></div>
								<!--<div class="ciuis-dashboard-box-stats-change">
									<div class="ciuis-dashboard-box-stats-value ciuis-dashboard-box-stats-value-negative ion-refresh"></div>
								</div>-->
							</div>
						</div>
		                 </md-content>
	                  </div>
				</md-content>

			</div>
		</md-content>
	</div>
	<div class="ciuis-body-content" ng-controller="Reports_Controller">
	<md-content class="main-content container-fluid col-xs-12 col-md-12 col-lg-9">
	<md-content class="bg-white">
		<md-tabs md-dynamic-height md-border-bottom>

		  <md-tab label="<?php echo lang('lead') ?>">

				<div class="col-md-12" style="background: #f5f5f5; border-radius: 0px;padding: 10px">
					<div class="col-md-6" style="border-right: 2px solid #fdfdfd;">
					<div class="widget-chart-container">
					<div class="widget-counter-group widget-counter-group-right">
						<div style="width: auto" class="pull-left">
							<i style="font-size: 38px;color: #eaeaea;margin-right: 10px" class="ion-stats-bars pull-left"></i>
							<div class="pull-right" style="text-align: left;margin-top: 10px;line-height: 10px;">
								<h4 style="padding: 0px;margin: 0px;"><b>Leads by Leadsource</b></h4>
							</div>
						</div>
					</div>
					<div class="my-2">
						<div class="chart-wrapper">
							<canvas id="leads_by_leadsource"></canvas>
						</div>
					</div>
					</div>
					</div>
				</div>
		  </md-tab>
		</md-tabs>
	  </md-content>		
	</md-content>
	<?php include_once(APPPATH . 'views/inc/sidebar.php'); ?>
	
</div>
	<!--<div class="main-content container-fluid col-xs-12 col-md-12 col-lg-9 hidden-xs" ng-hide="ONLYADMIN != 'true'">
	<?php include(APPPATH . 'views/inc/widgets/panel_bottom_summary.php'); ?>
		
	</div>
	<div class="main-content container-fluid col-xs-12 col-md-12 col-lg-9 hidden-xs" ng-hide="ONLYADMIN != 'false'">
	<?php include(APPPATH . 'views/inc/widgets/panel_bottom_summary_staff.php'); ?>
		
	</div>-->
	<?php include_once(APPPATH . 'views/inc/sidebar.php'); ?>
	
</div>
