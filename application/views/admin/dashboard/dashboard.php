<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title"><i class="fa cblue fa-dashboard fa-lg"></i> <span class="vam">Dashboard</span></h2>
	<div class="row dashboard-wrap clearfix">
		<h3 class="section-title">
			<i class="fa fa-bank"></i> City Profile 
			<?php echo anchor('admin/dashboard/edit?id='. $city->ID, '<i class="fa fa-pencil"></i>Edit', array('class' => 'gray-btn'));?>
		</h3>
		<div class="col one_half">
			<div class="section-wrap">
				<h3 class="city-name"><?php echo $city->name; ?></h3>
				<ul class="details-list">
					<li>Region: <?php echo $city->region; ?></li>
					<li>Province: <?php $province =  ($city->province_id == 0 ? 'None' : $city->province_text); echo $province; ?></li>
					<li>Date Founded: <?php echo date('F d, Y', strtotime($city->date_founded)); ?></li>
				</ul>
				<ul class="details-list">
					<li>Land Area: <?php echo $city->land_area; ?></li>
					<li>Climate: <?php echo $city->climate; ?></li>
				</ul>
			</div>
			<div class="section-wrap">
				<h3 class="section-title"><i class="fa fa-flag"></i> Political Profile:</h3>
				<span class="city-mayor">Mayor : <?php echo $city->pp_mayor; ?></span>
				<ul class="details-list">
					<li>Population: <?php echo $city->pp_population; ?></li>
					<li>Registered voters: <?php echo $city->pp_reg_voters; ?></li>
					<li>Voter Turn-out: <?php 
						$ans = ($city->pp_turn_out / $city->pp_reg_voters) * 100;
						echo $city->pp_turn_out . ' - '. intval($ans) . '%';
					 ?></li>
				</ul>
			</div>
		</div>

		<div class="col one_half mr0">
			<h3 class="section-title"><i class="fa fa-compass"></i> Location Map</h3>
			<div class="map-container">
				<img src="<?php echo base_url()?>images/maps.jpg" alt="">
			</div>
		</div>
	</div>
<?php $this->load->view('admin/footer');?>