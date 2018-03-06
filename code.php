<?php
	include("shared.php");
	getHead();
	getNav();
?>
		<div class="container">
			<table id="code_table" class="table table-bordered responsive">
				<thead>
					<tr>
						<th>Code</th><th>Experience</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>JavaScript</td><td>5 years</td>
					</tr>
					<tr>
						<td>AJAX</td><td>4 years</td>
					</tr>
					<tr>
						<td>AngularJS</td><td>1 year</td>
					</tr>
					<tr>
						<td>JQuery</td><td>5 years</td>
					</tr>
					<tr>
						<td>SQL</td><td>5 years</td>
					</tr>
					<tr>
						<td>SSIS</td><td>5 years</td>
					</tr>
					<tr>
						<td>SSRS</td><td>5 years</td>
					</tr>
					<tr>
						<td>MSSQL</td><td>5 years</td>
					</tr>
					<tr>
						<td>MySQL</td><td>3 years</td>
					</tr>
					<tr>
						<td>PSQL</td><td>1 years</td>
					</tr>
					<tr>
						<td>PHP</td><td>5 years</td>
					</tr>
					<tr>
						<td>HTML</td><td>7 years</td>
					</tr>
					<tr>
						<td>CSS</td><td>7 years</td>
					</tr>
					<tr>
						<td>D3.js</td><td>1 years</td>
					</tr>
					<tr>
						<td>Bootstrap</td><td>5 years</td>
					</tr>
					<tr>
						<td>XML</td><td>4 years</td>
					</tr>
					<tr>
						<td>Visual Basic</td><td>2 years</td>
					</tr>
					<tr>
						<td>C++</td><td>2 years</td>
					</tr>
					<tr>
						<td>JSON</td><td>4 years</td>
					</tr>
					<tr>
						<td>GitHub</td><td>5 years</td>
					</tr>
					<tr>
						<td>JAVA</td><td>1 year</td>
					</tr>
					<tr>
						<td>Google Maps API</td><td>1 year</td>
					</tr>
					<tr>
						<td>.NET</td><td>1 year</td>
					</tr>
					<tr>
						<td>Jira</td><td>2 years</td>
					</tr>
					<tr>
						<td>FreshDesk</td><td>2 years</td>
					</tr>
					<tr>
						<td>DataTables</td><td>2 years</td>
					</tr>
					<tr>
						<td>Laravel</td><td>1 year</td>
					</tr>
					<tr>
						<td>BitBucket</td><td>1 year</td>
					</tr>
				</tbody>
			</table>		
		</div>
<?php
	getFooter();
?>
		<script>
			$(document).ready(function(){
				$('#code_table').DataTable({
					"order": [[ 1, "desc"]],
					"iDisplayLength": 10
				});

				var table = $("#code_table").DataTable();

				table.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
					var cell0 = table.cell({ row: rowIdx, column: 0 }).node();
					$(cell0).css("background-color", "#f5f5f5");
					$(cell0).css("font-size", "large");
					
					var cell1 = table.cell({ row: rowIdx, column: 1 }).node();
					$(cell1).css("background-color", "#f5f5f5");
					$(cell1).css("font-size", "large");
				});

				$("th").css("font-size", "large");

				$("input").css("background-color", "#f5f5f5");
				$("select").css("background-color", "#f5f5f5");
			});
		</script>
	</body>
</html>