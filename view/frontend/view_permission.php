<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Phân quyền người dùng</div>
		<div class="panel-body">
		<form method="post" action="trang-chu?controller=permission&act=do_permission&id=<?php echo $pk_user_id;?>">
		<script type="text/javascript">
			function chk_checked(checkbox_name){
				if(document.getElementById(checkbox_name).checked == true)
					document.getElementById(checkbox_name).checked = false;
				else
					document.getElementById(checkbox_name).checked = true;
			}
		</script>
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width:50px"></th>
					<th>Tên menu</th>
					<th style="width:50px;">Add</th>
					<th style="width:50px;">Edit</th>
					<th style="width:50px;">Delete</th>
				</tr>
				<?php
					foreach($arr as $rows)
					{
				?>
				<tr>
					<td style="text-align:center;">
						<?php
							//check thong tin trong table tbl_permission
							$check = fetch_one("select pk_permission_id from tbl_permission where fk_user_id=$pk_user_id and fk_menu_admin_id=".$rows["pk_menu_admin_id"]);	
							//check add
							$check_add = fetch_one("select pk_permission_id from tbl_permission where fk_user_id=$pk_user_id and fk_menu_admin_id=".$rows["pk_menu_admin_id"]." and c_add=1");	
							//check edit
							$check_edit = fetch_one("select pk_permission_id from tbl_permission where fk_user_id=$pk_user_id and fk_menu_admin_id=".$rows["pk_menu_admin_id"]." and c_edit=1");					
							//check delete
							$check_delete = fetch_one("select pk_permission_id from tbl_permission where fk_user_id=$pk_user_id and fk_menu_admin_id=".$rows["pk_menu_admin_id"]." and c_delete=1");
						?>
						<input type="checkbox" name="menu[]" <?php echo isset($check["pk_permission_id"]) ? "checked":""; ?> value="<?php echo $rows["pk_menu_admin_id"]; ?>" id="chk_<?php echo $rows["pk_menu_admin_id"]; ?>">
					</td>
					<td onclick="chk_checked('chk_<?php echo $rows["pk_menu_admin_id"]; ?>')"><label for="chk_<?php echo $rows["pk_menu_admin_id"]; ?>"><?php echo $rows["c_name"]; ?></label></td>
					<td style="text-align:center;">
					<input type="checkbox" <?php echo isset($check_add["pk_permission_id"]) ? "checked":""; ?> name="add_<?php echo $rows["pk_menu_admin_id"]; ?>">
					</td>
					<td style="text-align:center;">
						<input type="checkbox" <?php echo isset($check_edit["pk_permission_id"]) ? "checked":""; ?> name="edit_<?php echo $rows["pk_menu_admin_id"]; ?>">
					</td>
					<td style="text-align:center;">
						<input type="checkbox" <?php echo isset($check_delete["pk_permission_id"]) ? "checked":""; ?> name="delete_<?php echo $rows["pk_menu_admin_id"]; ?>">
					</td>
				</tr>
				<?php } ?>
			</table>
			<input type="submit" value="Phân quyền">
		</form>
		</div>
	</div>
</div>