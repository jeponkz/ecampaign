<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title"><i class="fa cblue fa-bank fa-lg"></i> <span class="vam">Barangays</span>
	</h2>
	<div class="row dashboard-wrap clearfix"> <!-- Barangay Profile -->
		<h3 class="section-title">
			<i class="fa fa-list"></i> Barangay Lists
			<?php echo anchor('admin/barangays/add', '<i class="fa fa-plus"></i>Add Barangay', array('class' => 'gray-btn'));?>
			<div class="fr">
				<form action="<?php echo base_url('admin/barangays/vsearch'); ?>" class="searchform">
					<input type="text" class="input-search light-bg" placeholder="Search">
					<div class="search-submit">
						<input type="submit" value="">
						<i class="fa fa-search"></i>
					</div>
				</form>
				<select name="" id="" class="chosen">
					<option value="">Filter By</option>
					<option value="">Name</option>
					<option value="">Position</option>
					<option value="">Barangay</option>
				</select>
				
			</div>
		</h3>
		<div id="message" class="updated">
				<?php if ($message) : ?>
					<p><?php echo $message; ?></p>
				<?php endif; ?>
			</div>
	</div>
	<div class="row official-list clearfix"><!-- Barangay List -->
		<div class="data-list">
			<table class="tblue">
				<thead>
					<tr>
						<th>Barangay Name</th>
						<th>Population</th>
						<th>&nbsp;</th>
						<th>In favor of</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $row) : ?>
					<tr>
						<td><?php echo anchor('admin/barangays/profile?id='.$row->ID.'', $row->name, array('title' => 'View Barangay '.$row->name.' profile')); ?></td>
						<td><?php echo $row->pp_population; ?></td>
						<td>&nbsp;</td>
						<td><span class="favor yes">Admin</span></td>
						<td><a href="<?php echo base_url('admin/barangays/edit?id='.$row->ID);?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/barangays/delete?id='. $row->ID);?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
					<?php endforeach; ?>
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