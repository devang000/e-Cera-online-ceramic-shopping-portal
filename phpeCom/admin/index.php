
<head>
<link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
</head>


<style>
	.c-dashboardInfo {
		margin-bottom: 15px;
	}

	.c-dashboardInfo .wrap {
		background: #ffffff;
		box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
		border-radius: 7px;
		text-align: center;
		position: relative;
		overflow: hidden;
		padding: 40px 25px 20px;
		height: 100%;
	}

	.c-dashboardInfo__title,
	.c-dashboardInfo__subInfo {
		color: #6c6c6c;
		font-size: 1.18em;
	}

	.c-dashboardInfo span {
		display: block;
	}

	.c-dashboardInfo__count {
		font-weight: 600;
		font-size: 2.5em;
		line-height: 64px;
		color: #323c43;
	}

	.c-dashboardInfo .wrap:after {
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 10px;
		content: "";
	}

	.c-dashboardInfo:nth-child(1) .wrap:after {
		background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
	}

	.c-dashboardInfo:nth-child(2) .wrap:after {
		background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
	}

	.c-dashboardInfo:nth-child(3) .wrap:after {
		background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
	}

	.c-dashboardInfo:nth-child(4) .wrap:after {
		background: linear-gradient(81.67deg, #ff647c 0%, #1f5dc5 100%);
	}

	.c-dashboardInfo__title svg {
		color: #d7d7d7;
		margin-left: 5px;
	}

	.MuiSvgIcon-root-19 {
		fill: currentColor;
		width: 1em;
		height: 1em;
		display: inline-block;
		font-size: 24px;
		transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
		user-select: none;
		flex-shrink: 0;
	}
</style>
<?php
require('top.inc.php');
?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Dashboard</h4>
					</div>
					<div id="root">
						<div class="container pt-5">
							<div class="row align-items-stretch">
								<div class="c-dashboardInfo col-lg-3 col-md-6">
									<div class="wrap">
										<h4
											class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">
											Total Products<svg class="MuiSvgIcon-root-19" focusable="false"
												viewBox="0 0 24 24" aria-hidden="true" role="presentation">
												<path fill="none" d="M0 0h24v24H0z"></path>
												<path
													d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
												</path>
											</svg></h4><span
											class="hind-font caption-12 c-dashboardInfo__count">500</span>
									</div>
								</div>
								<div class="c-dashboardInfo col-lg-3 col-md-6">
									<div class="wrap">
										<h4
											class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">
											Total Customers<svg class="MuiSvgIcon-root-19" focusable="false"
												viewBox="0 0 24 24" aria-hidden="true" role="presentation">
												<path fill="none" d="M0 0h24v24H0z"></path>
												<path
													d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
												</path>
											</svg></h4><span
											class="hind-font caption-12 c-dashboardInfo__count">50</span><span
											class="hind-font caption-12 c-dashboardInfo__subInfo"></span>
									</div>
								</div>
								<div class="c-dashboardInfo col-lg-3 col-md-6">
									<div class="wrap">
										<h4
											class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">
											Total Orders<svg class="MuiSvgIcon-root-19" focusable="false"
												viewBox="0 0 24 24" aria-hidden="true" role="presentation">
												<path fill="none" d="M0 0h24v24H0z"></path>
												<path
													d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
												</path>
											</svg></h4><span
											class="hind-font caption-12 c-dashboardInfo__count">1000</span>
									</div>
								</div>
								<div class="c-dashboardInfo col-lg-3 col-md-6">
									<div class="wrap">
										<h4
											class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">
											Repeat Customer<svg class="MuiSvgIcon-root-19" focusable="false"
												viewBox="0 0 24 24" aria-hidden="true" role="presentation">
												<path fill="none" d="M0 0h24v24H0z"></path>
												<path
													d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
												</path>
											</svg></h4><span
											class="hind-font caption-12 c-dashboardInfo__count">0.5%</span>
									</div>
								</div>
							</div>
							<br>
							<br>
							<?php

							$dataPoints = array(
								array("label" => "Sanitaryware", "y" => 64.02),
								array("label" => "Bathware", "y" => 12.55),
								array("label" => "ceramic crockery", "y" => 8.47),
								array("label" => "ceramic tiles", "y" => 6.08),
								array("label" => "ceramic gift articles", "y" => 4.29),
								array("label" => "Others", "y" => 4.59)
							)

								?>
							<!DOCTYPE HTML>
							<html>

							<head>
								<script>
									window.onload = function () {


										var chart = new CanvasJS.Chart("chartContainer", {
											animationEnabled: true,
											title: {
												text: "Statistics"
											},
											subtitles: [{
												text: "Product Categarywise"
											}],
											data: [{
												type: "pie",
												yValueFormatString: "#,##0.00\"%\"",
												indexLabel: "{label} ({y})",
												dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
											}]
										});
										chart.render();

									}
								</script>
							</head>

							<body>
								<div id="chartContainer" style="height: 370px; width: 100%;"></div>
								<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
							</body>

							</html>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <?php
require('footer.inc.php');
?> -->