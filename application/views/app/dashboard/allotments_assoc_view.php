<div class="dashboard section-frame" ng-controller="DashboardController as dashboard">
	<div class="wrap">
		<div class="hdashboard mt-40">
			<h3 class="headingline3">Asociar a inversión</h3>
			<hr>
		</div>
		<div class="dashboard-content">
			<div class="option-content">
				<div class="option-leads">
					<div class="wrap">
						<!--div class="item">
							<a href="#!dashboard" ng-class="dashboard.disablePointerEventClass"><span>ASSOCIAR</span></a>
						</div-->
					</div>
				</div>
			</div>
			<table>
				<tr class="headlinet htable">
					<th colspan="2">Terrenos</th>
				</tr>
				<tr class="headlinet hrow">
					<th>#</th>
					<th>Condominio</th>
					<th>Tipo</th>
					<th>Tamaño</th>
					<th>Precio por M2</th>
					<th>Precio Lista</th>
					<th>Enganche</th>
					<th>36 MSI</th>
					f<th>Estado</th>
				</tr>
				<tr ng-repeat="lead in dashboard.activeLeads" ng-init="dashboard.selectedLeadID = -1">
					<div>
						<td>
							<div class="control-radio">
								<label class="custom-radio">{{lead.name + " " + lead.last_name}}
									<input type="radio" name="lead-selector" ng-value="$index" ng-model="dashboard.selectedLeadID" ng-change="dashboard.onChange(dashboard.selectedLeadID)">
									<span class="checkmark"></span>
								</label>
							</div>
						</td>
						<td><label>{{lead.email}}</label></td>
					</div>
				</tr>
			</table>
		</div>
	</div>
</div>