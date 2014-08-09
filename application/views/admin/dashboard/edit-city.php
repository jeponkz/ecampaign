<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title">
		<i class="fa cblue fa-dashboard fa-lg"></i> <span class="vam">Dashboard</span>
		<div class="breadcrumbs">
			<?php echo anchor('admin/dashboard/', 'Dashboard');?>
			<i class="fa fa-angle-right"></i>
			<span class="current-page">Edit City Profile</span>
		</div>
	</h2>
	<div class="row dashboard-wrap clearfix">
		<h3 class="section-title">
			<i class="fa fa-bank"></i> Edit City Profile 
			<?php echo anchor('admin/dashboard', '<i class="fa fa-angle-left fwb"></i>Cancel', array('class' => 'gray-btn dgray'));?>
		</h3>
		<?php if ($message != '') : ?>
			<div id="message" class="updated">
				<p><?php echo $message; ?></p>
			</div>
		<?php endif;?>
		<form action="<?php echo base_url('admin/dashboard/update?id=' . $city->ID); ?>" class="clearfix city-edit-form" method="post">
			<div class="col one_half">
				<div class="section-wrap">
					<div class="inputfield">
						<label for="name">Name</label>
						<input type="text" name="city_name" value="<?php echo $city->name; ?>">
					</div>
					<div class="inputfield">
						<label for="region">Region</label>
						<input type="text" name="city_region" value="<?php echo $city->region; ?>">
					</div>
					<div class="inputfield">
						<label for="province">Province</label>
						<input type="text" name="province" value="<?php echo $city->province_text; ?>">
					</div>
					<div class="inputfield">
						<label for="date_founded">Date Founded</label>
						<div class="dd-wrap">
							<input type="text" name="date_founded" value="<?php echo $city->date_founded; ?>" class="datepicker">
							<span class="dd-icon"><i class="fa fa-angle-down"></i></span>
						</div>
					</div>
					<div class="inputfield">
						<label for="land_area">Land Area</label>
						<input type="text" name="land_area" value="<?php echo $city->land_area; ?>">
						<span>sq km</span>
					</div>
					<div class="inputfield">
						<label for="population">Population</label>
						<input type="text" name="population" value="<?php echo $city->pp_population; ?>">
					</div>
					<div class="inputfield">
						<label for="climate">Climate</label>
						<input type="text" name="climate" value="<?php echo $city->climate; ?>">
					</div>
				</div>
			</div>

			<div class="col one_half">
				<div class="inputfield">
					<label for="climate">Google Map Link</label>
					<input type="text" name="location_map" value="<?php echo $city->location_map; ?>" class="long">
				</div>
				<div class="map-container">
					<img src="<?php echo base_url()?>images/maps.jpg" alt="">
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="btnfield">
					<input type="submit" class="button save-btn" value="Save Changes">
				</div>
			</div>
		</form>
	</div>
<?php $this->load->view('admin/footer');?>