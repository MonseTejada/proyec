<div class="quote section-frame" ng-controller="QuoteController as quote">
	<div class="option-frame frame-container mt-33">
		<div class="option-wrap pb-40 plr-40">
			<h4 class="headingline4 pt-40">Configuración</h4>
			<fieldset>
				<div class="item">
					<div class="option-content">
						<p class="phb ptb-20">Inversión</p>
						<div class="form-group">
							<div class="control-radio">
								<label class="custom-radio" ng-click="quote.defineInversion(0)">Naves Industriales (Pre-venta)
									<input type="radio" name="inversion-radio" checked="checked">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="control-radio" ng-click="quote.defineInversion(1)">
								<label class="custom-radio">Lotes Industriales
									<input type="radio" name="inversion-radio">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="control-radio" ng-click="quote.defineInversion(2)">
								<label class="custom-radio">Lotes Habitacionales
									<input type="radio" name="inversion-radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
					<hr>
				</div>
				<div class="item" ng-class="quote.showHabittaType">
					<div class="option-content">
						<p class="phb ptb-20">Tipo</p>
						<div class="form-group">
							<div class="control-radio">
								<label class="custom-radio" ng-click="quote.defineTipoHabitta(0)">Estándar
									<input type="radio" name="habitta-type-radio" checked="checked">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="control-radio" ng-click="quote.defineTipoHabitta(1)">
								<label class="custom-radio">Plus
									<input type="radio" name="habitta-type-radio">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="control-radio" ng-click="quote.defineTipoHabitta(2)">
								<label class="custom-radio">Premium
									<input type="radio" name="habitta-type-radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
					<hr>
				</div>
				<div class="item" ng-class="quote.hideOnHabitta">
					<div class="option-content">
						<p class="phb ptb-20">Precio</p>
						<div class="form-group">
							<div class="control-radio">
								<label class="custom-radio" ng-click="quote.definePrecioLanzamiento(false)">Estandar
									<input type="radio" name="precio-inversion-radio" checked="checked">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="control-radio" ng-click="quote.definePrecioLanzamiento(true)">
								<label class="custom-radio">Lanzamiento
									<input type="radio" name="precio-inversion-radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
					<hr>
				</div>
				<div class="item">
					<div class="pb-40 pt-20">
						<p class="phb ptb-20">Tamaño M&sup2;</p>
						<div>
							<input class="quote-input" type="number" autocomplete="off" name="tamanio" min="{{quote.costosXM2}}" max="1500" ng-model="quote.tamanio" ng-change="quote.updateQuoteHooking()">
						</div>
					</div>
					<hr>
				</div>
				<div class="item">
					<div class="pt-20">
						<p class="phb ptb-20">Mensualidades</p>
						<div>
							<input class="quote-input" type="number" autocomplete="off" name="plazo" min="1" max="180" ng-model="quote.plazo" ng-change="quote.updateQuoteHooking()">
							<!--input class="bttn" type="button" name="un-anio" value="+1 año" ng-click="quote.sumAnio(); quote.updateQuote()"-->
						</div>
					</div>
					<hr class="mt-40" ng-class="quote.hideOutputA">
				</div>
				<div class="item" ng-class="quote.hideOutputA">
					<div class="pt-20">
						<p class="ph ptb-20">Enganche</p>
						<div>
							<input class="quote-input" type="number" autocomplete="off" name="enganche" min="{{quote.engancheTotalMin}}" max="{{quote.engancheTotalMax}}" ng-model="quote.engancheActual" ng-change="quote.updateQuote()">
							<!--input class="bttn" type="button" name="un-anio" value="+1 año" ng-click="quote.sumAnio(); quote.updateQuote()"-->
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="quote-result frame-container mtb-33 pb-20">
			<h4 class="headingline4 pt-40 plr-40">Cotización <span style="float: right; font-size: 21px;">{{quote.today}}</span></h4>
			<div class="quote-result-wrap plr-40 plr-40 pt-20">
				<div class="quote-result-content pt-20 plr-40">
					<div class="row row-2">
						<p class="ph">Tamaño</p><p class="ph quote-result-model"><span>{{quote.tamanio}} M&sup2;</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Precio por M&sup2;</p><p class="ph quote-result-model"><span>${{quote.precioSelected.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Plan de pago</p><p class="ph quote-result-model"><span>{{quote.planPagoOutput}}</span></p>
					</div>
					<div class="row row-2">
						<p class="ph result-txt">Inversión</p><p class="ph quote-result-model result-txt"><span>${{quote.inversion.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<hr class="mt-20" ng-class="quote.hideOutputA">
				</div>
			</div>
			<div class="quote-result-wrap plr-40" ng-class="quote.hideOutputA">
				<div class="quote-result-content pt-20 plr-40">
					<div class="row row-2">
						<p class="ph">Plazo Total</p><p class="ph quote-result-model"><span>{{quote.plazo}} Meses</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Enganche <span>{{quote.engancheMin*100}}%</span></p><p class="ph quote-result-model"><span>${{quote.engancheActual.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Financiamiento</p><p class="ph quote-result-model result-txt"><span>${{(quote.credito).toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<hr class="mt-20">
				</div>
			</div>
			<div class="quote-result-wrap plr-40" ng-class="quote.hideOutputA">
				<div class="quote-result-content pt-20 plr-40">
					<div class="row row-2">
						<p class="ph">Plazo, sin interés</p><p class="ph quote-result-model"><span>{{quote.plazoA}} Meses</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Financiamiento, <span>{{quote.planesPago[0].interes*100}}%</span> de Interés</p><p class="ph quote-result-model"><span>${{quote.financiamientoPlazoA.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Cuota fija</p><p class="ph quote-result-model result-txt"><span>${{quote.totalCuotaFijaPlazoA.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<hr class="mt-20">
				</div>
			</div>
			<div class="quote-result-wrap plr-40" ng-class="quote.hideOutputB">
				<div class="quote-result-content pt-20 plr-40">
					<div class="row row-2">
						<p class="ph">Plazo, <span>{{quote.planesPago[1].interes*100}}%</span> de interés</p><p class="ph quote-result-model"><span>{{quote.plazoB}} Meses</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Financiamiento</p><p class="ph quote-result-model"><span>${{quote.creditoBNI.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Financiamiento, <span>{{quote.planesPago[1].interes*100}}%</span> de Interés</p><p class="ph quote-result-model"><span>${{quote.financiamientoPlazoB.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Cuota fija</p><p class="ph quote-result-model result-txt"><span>${{quote.totalCuotaFijaPlazoB.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<hr class="mt-20">
				</div>
			</div>
			<div class="quote-result-wrap plr-40" ng-class="quote.hideOutputC">
				<div class="quote-result-content pt-20 plr-40">
					<div class="row row-2">
						<p class="ph">Plazo, <span>{{quote.planesPago[2].interes*100}}%</span> de Interés</p><p class="ph quote-result-model"><span>{{quote.plazoC}} Meses</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Financiamiento</p><p class="ph quote-result-model"><span>${{quote.creditoCNI.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Financiamiento, <span>{{quote.planesPago[2].interes*100}}%</span> de Interés</p><p class="ph quote-result-model"><span>${{quote.financiamientoPlazoC.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Cuota fija</p><p class="ph quote-result-model result-txt"><span>${{quote.totalCuotaFijaPlazoC.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<hr class="mt-20">
				</div>
			</div>
			<div class="quote-result-wrap plr-40" ng-class="quote.hideOutputA">
				<div class="quote-result-content pt-20 plr-40">
					<div class="row row-2" ng-class="quote.hideOutputB">
						<p class="ph">Financiamiento final</p><p class="ph quote-result-model"><span>${{quote.financiamientoFinal.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2" ng-class="quote.hideOutputB">
						<p class="ph">Total de intereses</p><p class="ph quote-result-model"><span>${{quote.interesFinal.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph result-txt">Inversión final</p><p class="ph quote-result-model result-txt"><span>${{quote.inversionFinal.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<hr class="mt-20" ng-class="quote.hideOnHabitta">
				</div>
			</div>
			<div class="quote-result-wrap plr-40" ng-class="quote.hideOnHabitta">
				<div class="quote-result-content pt-20 plr-40">
					<div class="row row-2">
						<p class="ph">Venta de M&sup2; a {{quote.planesPago[0].plazoMax/12}} años</p><p class="ph quote-result-model"><span>${{quote.precioXM23Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Valor de Inversión a {{quote.planesPago[0].plazoMax/12}} años</p><p class="ph quote-result-model"><span>${{quote.valorInversion3Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph result-txt">Plusvalá inmediata a {{quote.planesPago[0].plazoMax/12}} años</p><p class="ph quote-result-model result-txt"><span>${{quote.plusvalia3Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<hr class="mt-20">
				</div>
			</div>
			<div class="quote-result-wrap plr-40" ng-class="quote.hideOnHabitta">
				<div class="quote-result-content pt-20 plr-40">
					<div class="row row-2">
						<p class="ph">Venta de M&sup2; a 10 años</p><p class="ph quote-result-model"><span>${{quote.precioXM210Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph">Valor de Inversión a 10 años</p><p class="ph quote-result-model"><span>${{quote.valorInversion10Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
					<div class="row row-2">
						<p class="ph result-txt">Plusvalá a 10 años</p><p class="ph quote-result-model result-txt"><span>${{quote.plusvalia10Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="tableToExport">
		<div class="quote-result frame-container mtb-33 pb-20" ng-class="quote.hideOutputA">
			<h4 class="headingline4 pt-40 plr-40">Plazo a {{quote.plazoA/12}} Años sin interés</h4>
			<table class="pt-20 plr-40" style="width: 100%;">
				<tr class="headlinet hrow">
					<th><p class="ph ptb-20">Periodo</p></th>
					<th><p class="ph ptb-20">Fecha</p></th>
					<th><p class="ph ptb-20">Crédito inicial</p></th>
					<th><p class="ph ptb-20">Cuota fija</p></th>
					<th><p class="ph ptb-20">Pagado</p></th>
					<th><p class="ph ptb-20">Interés</p></th>
					<th><p class="ph ptb-20">Abono a cápital</p></th>
					<th><p class="ph ptb-20">Crédito final</p></th>
				</tr>
				<tr ng-repeat="row in quote.cotizacionSIPlazoA">
					<td><p class="ptb-5" style="text-align: center;">{{row.periodo}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">{{row.fecha}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.creditoi.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.cuotaf.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.pagado.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.interes.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.abonoc.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.creditof.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
				</tr>
			</table>
		</div>
		<div class="quote-result frame-container mtb-33 pb-20" ng-class="quote.hideOutputB">
			<h4 class="headingline4 pt-40 plr-40">Plazo a {{quote.plazoB/12}} Años con {{quote.planesPago[1].interes*100}}% de interés</h4>
			<table class="pt-20 plr-40" style="width: 100%;">
				<tr class="headlinet hrow">
					<th><p class="ph ptb-20">Periodo</p></th>
					<th><p class="ph ptb-20">Fecha</p></th>
					<th><p class="ph ptb-20">Crédito inicial</p></th>
					<th><p class="ph ptb-20">Cuota fija</p></th>
					<th><p class="ph ptb-20">Pagado</p></th>
					<th><p class="ph ptb-20">Interés</p></th>
					<th><p class="ph ptb-20">Abono a cápital</p></th>
					<th><p class="ph ptb-20">Crédito final</p></th>
				</tr>
				<tr ng-repeat="row in quote.cotizacionSIPlazoB">
					<td><p class="ptb-5" style="text-align: center;">{{row.periodo}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">{{row.fecha}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.creditoi.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.cuotaf.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.pagado.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.interes.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.abonoc.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.creditof.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
				</tr>
			</table>
		</div>
		<div class="quote-result frame-container mtb-33 pb-20" ng-class="quote.hideOutputC">
			<h4 class="headingline4 pt-40 plr-40">Plazo de {{quote.plazoC/12}} Años con {{quote.planesPago[2].interes*100}}% de interés</h4>
			<table class="pt-20 plr-40" style="width: 100%;">
				<tr class="headlinet hrow">
					<th><p class="ph ptb-20">Periodo</p></th>
					<th><p class="ph ptb-20">Fecha</p></th>
					<th><p class="ph ptb-20">Crédito inicial</p></th>
					<th><p class="ph ptb-20">Cuota fija</p></th>
					<th><p class="ph ptb-20">Pagado</p></th>
					<th><p class="ph ptb-20">Interés</p></th>
					<th><p class="ph ptb-20">Abono a cápital</p></th>
					<th><p class="ph ptb-20">Crédito final</p></th>
				</tr>
				<tr ng-repeat="row in quote.cotizacionSIPlazoC">
					<td><p class="ptb-5" style="text-align: center;">{{row.periodo}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">{{row.fecha}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.creditoi.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.cuotaf.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.pagado.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.interes.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.abonoc.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
					<td><p class="ptb-5" style="text-align: center;">${{row.creditof.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</p><hr></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ptb-40" ng-click="quote.exportToExcel('#tableToExport')">
		<button class="to-excel-bttn">Exportar a Excel</button>{{quote.inversionTotal}}
	</div>
</div>