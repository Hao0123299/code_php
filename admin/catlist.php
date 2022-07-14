<div class="grid_10">
	<div class="box round first grid">
		<h2>Danh sách danh mục</h2>
		<div class="block">
			<table class="data display datatable" id="example">
				<thead>
				<tr>
					<th>Số thứ tự</th>
					<th>Tên</th>
					<th>Hoạt động</th>
				</tr>
				</thead>
				<tbody>
				<tr class="odd gradeX">
					<td>01</td>
					<td>Internet</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				<tr class="even gradeC">
					<td>02</td>
					<td>Explorer</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				<tr class="odd gradeX">
					<td>03</td>
					<td>Internet</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				<tr class="even gradeC">
					<td>04</td>
					<td>Explorer</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				<tr class="odd gradeX">
					<td>05</td>
					<td>Internet</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				<tr class="even gradeC">
					<td>06</td>
					<td>Explorer</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				<tr class="odd gradeX">
					<td>07</td>
					<td>Internet</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				<tr class="even gradeC">
					<td>08</td>
					<td>Explorer</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		setupLeftMenu();
		
		$('.datatable').dataTable();
		setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php'; ?>

