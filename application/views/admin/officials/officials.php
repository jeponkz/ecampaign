<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title"><i class="fa cblue fa-bookmark fa-lg"></i> <span class="vam">Officials</span>
	</h2>
	<div class="row dashboard-wrap clearfix"> <!-- Officials List -->
		<h3 class="section-title">
			<i class="fa fa-list"></i> Officials List
			<?php echo anchor('admin/officials/add', '<i class="fa fa-plus"></i>Add Official', array('class' => 'gray-btn'));?>
			<div class="fr">
				<form action="<?php echo base_url('admin/officials/vsearch'); ?>" class="searchform">
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
	</div>
	<div class="row official-list clearfix"><!-- Barangay List -->
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
						<td><a href="<?php echo base_url('admin/officials/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/officials/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
					</tr>
					<tr>
						<td>Kagawad</td>
						<td>Juan dela Cruz</td>
						<td><span class="total-num">1,000,000</span><span class="percentage fwb">100%</span></td>
						<td><span class="fwb">LP</span></td>
						<td><a href="<?php echo base_url('admin/officials/edit');?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/officials/delete');?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
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