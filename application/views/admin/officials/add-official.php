<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title">
		<i class="fa cblue fa-bookmark fa-lg"></i> <span class="vam">Officials</span>
		<div class="breadcrumbs">
			<?php echo anchor('admin/officials/', 'Officials');?>
			<i class="fa fa-angle-right"></i>
			<span class="current-page">Add Offical</span>
		</div>
	</h2>
	<div class="row add-entry-wrap clearfix">
		<h3 class="section-title">
			<i class="fa fa-bookmark"></i> <i class="fa fa-plus fa-action"></i> Add Official
			<?php echo anchor('admin/officials', '<i class="fa fa-angle-left fwb"></i>Cancel', array('class' => 'gray-btn dgray'));?>
		</h3>
		<form action="<?php echo base_url('admin/dashboard/update'); ?>" class="clearfix city-edit-form" method="post">
			<div class="row clearfix">
				<div class="section-wrap">
					<div class="display-pic">
						<img src="<?php echo base_url('images/placeholder.png');?>" alt="">
						<input type="submit" class="button" value="Upload Image">
					</div>
					<div class="inputfield">
						<label for="surname">Surname</label>
						<input type="text" value="">
					</div>
					<div class="inputfield">
						<label for="firstname">First Name</label>
						<input type="text" value="">
					</div>
					<div class="inputfield">
						<label for="province">Middle Name</label>
						<input type="text" value="">
					</div>
					<div class="inputfield">
						<label for="extension">Extension</label>
						<select name="" id="">
							<option value="">Jr.</option>
							<option value="">Sr.</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<table width="80%">
					<tr>
						<td width="50%">
							<div class="inputfield">
								<label for="position">Position</label>
								<select name="" id="">
									<option value="">Select</option>
									<option value="">Sr.</option>
								</select>
							</div>
						</td>
						<td width="50%">
							<div class="inputfield">
								<label for="party">Party Affiliation</label>
								<select name="" id="">
									<option value="">Select</option>
									<option value="">Sr.</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td class="pb30">
							<div class="inputfield">
								<label for="votes_obtained">Votes Obtained</label>
								<input type="text" placeholder="No. of Votes">
							</div>
							<div class="inputfield">
								<label for="percentage">Percentage</label>
								<input type="text" placeholder="Percentage">
							</div>
						</td>
						<td>
							
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="birthdate">Birthdate</label>
								<div class="dd-wrap">
									<input type="text" value="" class="datepicker">
									<span class="dd-icon"><i class="fa fa-angle-down"></i></span>
								</div>
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="occupation">Occupation</label>
								<input type="text" value="">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="gender">Gender</label>
								<select name="" id="">
									<option value="">Select</option>
									<option value="">Sr.</option>
								</select>
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="educational_attainment">Educational Attainment</label>
								<input type="text" value="">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="age">Age</label>
								<input type="text" value="">
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="address">Address</label>
								<input type="text" value="">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="nationality">Nationality</label>
								<input type="text" value="">
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="contact_no">Contact No.</label>
								<input type="text" value="">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="religion">Religion</label>
								<input type="text" value="">
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="email">email</label>
								<input type="text" value="">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="tribe">Tribe</label>
								<input type="text" value="" >
							</div>
						</td>
						<td></td>
					</tr>
				</table>
			</div>

			<div class="clear"></div>
			<div class="row">
				<div class="btnfield">
					<input type="submit" class="button save-btn" value="Save Voter">
				</div>
			</div>
		</form>
	</div>
<?php $this->load->view('admin/footer');?>