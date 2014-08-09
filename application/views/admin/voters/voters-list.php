<?php 
	ob_start();
	$this->load->view('admin/header');
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%",$title,$buffer);
	echo $buffer;
?>

	<h2 class="page-title"><i class="fa cblue fa-user fa-lg"></i> <span class="vam">Voters</span></h2>
	<div class="row dashboard-wrap clearfix">
		<h3 class="section-title">
			<i class="fa fa-list"></i> Voters List
			<?php echo anchor('admin/voters/add', '<i class="fa fa-plus"></i>Add Voter', array('class' => 'gray-btn'));?>
			<div class="fr">
				<form action="<?php echo base_url('admin/voters/vsearch'); ?>" class="searchform">
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
		<div class="row voters-list">
			<div class="data-list">
				<table class="tblue">
					<thead>
						<tr>
							<th>Voter's ID</th>
							<th>Name</th>
							<th>Address</th>
							<th>In favor of</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($all_voters as $voters): ?>
							<tr>
								<td><?php echo $voters->voters_id; ?></td>
								<td><?php echo $voters->first_name.' '.$voters->surname; ?></td>
								<td><?php echo $voters->address; ?></td>
								<td>
									<span class="favor <?php if ($voters->in_favor_of == "administration") echo "yes" ?>"><?php echo $voters->in_favor_of; ?></span>
								</td>
								<td><a href="<?php echo base_url('admin/voters/edit?id='.$voters->ID) ;?>" class="edit-link" title="Edit"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('admin/voters/delete?id='.$voters->ID );?>" class="del-link" title="Delete"><i class="fa fa-trash-o"></i></a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
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