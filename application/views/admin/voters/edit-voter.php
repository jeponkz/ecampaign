<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title">
		<i class="fa cblue fa-user fa-lg"></i> <span class="vam">Voters</span>
		<div class="breadcrumbs">
			<?php echo anchor('admin/voters/', 'Voters');?>
			<i class="fa fa-angle-right"></i>
			<span class="current-page">Add Voter</span>
		</div>
	</h2>
	<div class="row add-entry-wrap clearfix">
		<h3 class="section-title">
			<i class="fa fa-user"></i> <i class="fa fa-plus fa-action"></i> Add Voter
			<?php echo anchor('admin/voters', '<i class="fa fa-angle-left fwb"></i>Cancel', array('class' => 'gray-btn dgray'));?>
		</h3>
		<form action="<?php echo base_url('admin/voters/update'); ?>" class="clearfix" method="post" id="form-voters" enctype="multipart/form-data">
			<div class="row clearfix">
				<div class="section-wrap">
					<div class="display-pic">
						<input type="hidden" name="id" value="<?php echo $voters->ID ?>">
						<div id="imagePreview" <?php if($voters->image) echo 'style="background-image:url('.$voters->image.')"' ?> ></div>
						<a href="#" class="button btn-upload">Upload Image</a>
						<input type="file"  id="upload_photo" class="hidden" name="userfile" size="20" value="<?php echo $voters->image ?>" />
					</div>
					<div class="inputfield">
						<label for="voters_id">Voters ID</label>
						<input type="text" value="<?php echo $voters->voters_id; ?>" name="voters_id">
					</div>
					<div class="inputfield">
						<label for="surname">Surname</label>
						<input type="text" value="<?php echo $voters->surname; ?>" name="surname">
					</div>
					<div class="inputfield">
						<label for="first_name">First Name</label>
						<input type="text" value="<?php echo $voters->first_name; ?>" name="first_name">
					</div>
					<div class="inputfield">
						<label for="middle_name">Middle Name</label>
						<input type="text" value="<?php echo $voters->middle_name; ?>" name="middle_name">
					</div>
					<div class="inputfield">
						<label for="extension">Extension</label>
						<input type="text" name="extension"  value="<?php echo $voters->extension; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<table width="80%">
					<tr>
						<td width="50%" class="pb30">
							<div class="inputfield">
								<label for="in_favor_of">In favor of</label>
								<select name="in_favor_of" id="in-favor-of">
									<option value="administration" <?php if($voters->in_favor_of == "administration") echo "selected='selected'" ?>>Administration</option>
									<option value="opposition" <?php if($voters->in_favor_of == "opposition") echo "selected='selected'" ?>>Opposition</option>
									<option value="undecided" <?php if($voters->in_favor_of == "undecided") echo "selected='selected'" ?>>Undecided</option>
								</select>
							</div>
						</td>
						<td width="50%">
							<div class="inputfield">
								<label for="barangay_id">Barangay</label>
								<select name="barangay_id" id="">
									<?php foreach($barangays as $barangay): ?>
										<option value="<?php echo $barangay->ID ?>" <?php if($voters->barangay_id == $barangay->ID) echo 'selected="selected"'; ?>><?php echo $barangay->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="birth_date">Birthdate</label>
								<input type="text" value="<?php echo $voters->birth_date; ?>" name="birth_date" class="datepicker">
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="occupation">Occupation</label>
								<input type="text" value="<?php echo $voters->occupation; ?>" name="occupation">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="gender">Gender</label>
								<select name="gender" id="">
									<option value="male" <?php if($voters->gender == 'male') echo 'selected="selected"' ?>>Male</option>
									<option value="female" <?php if($voters->gender == 'female') echo 'selected="selected"' ?>>Female</option>
								</select>
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="educ_att">Educational Attainment</label>
								<input type="text" value="<?php echo $voters->educ_att; ?>" name="educ_att">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="age">Age</label>
								<input type="text" value="<?php echo $voters->age; ?>" name="age">
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="address">Address</label>
								<input type="text" value="<?php echo $voters->address; ?>" name="address">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="contact_no">Contact No.</label>
								<input type="text" value="<?php echo $voters->contact_no; ?>" name="contact_no">
							</div>
						</td>
						<td>
							<div class="inputfield">
								<label for="email">email</label>
								<input type="text" value="<?php echo $voters->email; ?>" name="email">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inputfield">
								<label for="religion">Religion</label>
								<input type="text" value="<?php echo $voters->religion; ?>" name="religion">
							</div>
						</td>
						
					</tr>
					<tr>
						<td colspan="2"> 
							<div class="inputfield">
								<label for="tribe">Tribe</label>
								<input type="text" value="<?php echo $voters->tribe; ?>" name="tribe">
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