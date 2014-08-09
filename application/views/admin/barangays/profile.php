<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title"><i class="fa cblue fa-bank fa-lg"></i> <span class="vam">Barangays</span>
	<div class="breadcrumbs">
		<?php echo anchor('admin/dashboard/', 'Dashboard');?>
		<i class="fa fa-angle-right"></i>
		<span class="current-page">Rosary Heights XI</span>
	</div>
	</h2>
	<div class="barangay-links">
		<ul>
			<li><a href="#">Profiles</a></li>
			<li><a href="#">Barangay Officials</a></li>
			<li><a href="#">Voters</a></li>
		</ul>
	</div>
	<div class="row dashboard-wrap clearfix"> <!-- Barangay Profile -->
		<h3 class="section-title">
			<i class="fa fa-bank"></i> Barangay Profile 
			<?php echo anchor('admin/dashboard/edit', '<i class="fa fa-pencil"></i>Edit', array('class' => 'gray-btn'));?>
		</h3>
		<div class="col one_half">
			<div class="section-wrap">
				<h3 class="city-name">Rosary Heights XI</h3>
				<ul class="details-list">
					<li>District: None</li>
					<li>Date Founded: June 20, 1960</li>
				</ul>
				<ul class="details-list">
					<li>Population: 304,363</li>
					<li>Land Area: 30,000 sq km</li>
				</ul>
			</div>
			<div class="section-wrap">
				<h3 class="section-title"><i class="fa fa-flag"></i> Political Profile:</h3>
				<span class="city-mayor">Barangay : Juan dela Cruz</span>
				<ul class="details-list">
					<li>Registered voters: 124, 805</li>
					<li>Voter Turn-out: 108, 357 - 90%</li>
				</ul>
			</div>
		</div>

		<div class="col one_half mr0"> <!-- Barangay Map -->
			<h3 class="section-title"><i class="fa fa-compass"></i> Location Map</h3>
			<div class="map-container">
				<img src="<?php echo base_url()?>images/maps.jpg" alt="">
			</div>
		</div>

	</div>

	<div class="row official-list clearfix"><!-- Barangay Officials -->
		<h3 class="section-title">
			<i class="fa fa-bookmark"></i> Barangay Officials
			<?php echo anchor('admin/dashboard/edit', '<i class="fa fa-plus"></i>Add Officer', array('class' => 'gray-btn'));?>
		</h3>
		<div class="data-list">
			<table class="tblue">
				<thead>
					<tr>
						<th>Position</th>
						<th>Name</th>
						<th>Votes Obtained</th>
						<th>Party Affiliation</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Brgy. Captain</td>
						<td>Juan dela Cruz</td>
						<td><span class="total-num">1,000,000</span><span class="percentage fwb">100%</span></td>
						<td><span class="fwb">LP</span></td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
					<tr>
						<td>Kagawad</td>
						<td>Juan dela Cruz</td>
						<td><span class="total-num">1,000,000</span><span class="percentage fwb">100%</span></td>
						<td><span class="fwb">LP</span></td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row official-list clearfix"><!-- Functionalities -->
		<h3 class="section-title">
			<i class="fa fa-bookmark"></i> Functionalities
			<?php echo anchor('admin/dashboard/edit', '<i class="fa fa-plus"></i>Add Officer', array('class' => 'gray-btn'));?>
		</h3>
		<div class="data-list">
			<table class="torange">
				<thead>
					<tr>
						<th>Position</th>
						<th>Name</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Brgy. Captain</td>
						<td>Juan dela Cruz</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
					<tr>
						<td>Kagawad</td>
						<td>Juan dela Cruz</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row official-list clearfix"><!-- Purok Presidents -->
		<h3 class="section-title">
			<i class="fa fa-bookmark"></i> Purok Presidents
			<?php echo anchor('admin/dashboard/edit', '<i class="fa fa-plus"></i>Add Officer', array('class' => 'gray-btn'));?>
		</h3>
		<div class="data-list">
			<table class="torange">
				<thead>
					<tr>
						<th>Position</th>
						<th>Name</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Brgy. Captain</td>
						<td>Juan dela Cruz</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
					<tr>
						<td>Kagawad</td>
						<td>Juan dela Cruz</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row official-list clearfix"><!-- Voters -->
		<h3 class="section-title">
			<i class="fa fa-user"></i> Voters
			<?php echo anchor('admin/dashboard/edit', '<i class="fa fa-plus"></i>Add Officer', array('class' => 'gray-btn'));?>
			<form action="<?php echo base_url('admin/barangays/vsearch'); ?>" class="searchform">
				<input type="text" class="input-search light-bg" placeholder="Search">
				<div class="search-submit">
					<input type="submit" value="">
					<i class="fa fa-search"></i>
				</div>
			</form>
		</h3>
		<div class="data-list">
			<table class="tblue">
				<thead>
					<tr>
						<th>Voter's ID</th>
						<th>Name</th>
						<th>&nbsp;</th>
						<th>In favor of</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>0024</td>
						<td>Juan dela Cruz</td>
						<td>&nbsp;</td>
						<td><span class="favor yes">Admin</span></td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
					<tr>
						<td>0025</td>
						<td>Juan dela Cruz</td>
						<td>&nbsp;</td>
						<td><span class="favor no">Opposition</span></td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
					<tr>
						<td>0026</td>
						<td>Juan dela Cruz</td>
						<td>&nbsp;</td>
						<td><span class="favor un">Undecided</span></td>
						<td><a href="<?php echo base_url('admin/barangays/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="pagination">
			<a href="#" class="prev"><i class="fa fa-angle-left"></i>Previous</a>
			<a href="#">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#" class="next">Next<i class="fa fa-angle-right"></i></a>
		</div>
	</div>
<?php $this->load->view('admin/footer');?>