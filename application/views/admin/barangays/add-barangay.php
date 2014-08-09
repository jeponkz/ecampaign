<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title">
		<i class="fa cblue fa-bank fa-lg"></i> <span class="vam">Barangays</span>
		<div class="breadcrumbs">
			<?php echo anchor('admin/barangays/', 'Barangays');?>
			<i class="fa fa-angle-right"></i>
			<span class="current-page">Add Barangay</span>
		</div>
	</h2>
	<div class="row dashboard-wrap clearfix">
		<h3 class="section-title">
			<i class="fa fa-bank"></i> Add Barangay
			<?php echo anchor('admin/barangays/', '<i class="fa fa-angle-left fwb"></i>Cancel', array('class' => 'gray-btn dgray'));?>
		</h3>
		<form id="form-barangay" action="<?php echo base_url('admin/barangays/save'); ?>" class="clearfix city-edit-form" method="post">
			<div class="col one_half">
				<div class="section-wrap">
					<div class="inputfield">
						<label for="name">Name</label>
						<input type="text" value="" name="name">
					</div>
					<div class="inputfield">
						<label for="district">District</label>
						<input type="text" value="" name="district">
					</div>
					<div class="inputfield">
						<label for="date_founded">Date Founded</label>
						<input type="text" value="" class="datepicker" name="date_founded">
					</div>
					<div class="inputfield">
						<label for="land_area">Land Area</label>
						<input type="text" value="" name="land_area">
						<span>sq km</span>
					</div>
					<div class="inputfield">
						<label for="pp_population">Population</label>
						<input type="text" value="" name="pp_population">
					</div>
				</div>
			</div>

			<div class="col one_half">
				<div class="inputfield">
					<label for="location_map">Google Map Link</label>
					<input type="text" value="" class="long" name="location_map">
				</div>
				<div class="map-container">
					<img src="<?php echo base_url()?>images/maps.jpg" alt="">
				</div>
			</div>
			<!-- input type hidden for city id (cotabato) -->
			<input type="hidden" value="1" name="city_id">
			<div class="clear"></div>
			<div class="row">
				<div class="btnfield">
					<input type="submit" class="button save-btn" value="Save Barangay">
				</div>
			</div>
		</form>
	</div>
<?php $this->load->view('admin/footer');?>