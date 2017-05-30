<!--content area start-->
<div id="content" class="pmd-content inner-page">
<!--tab start-->
    <div class="container-fluid full-width-container value-added-detail-page">
		<div>
			<div class="pull-right table-title-top-action">
				<div class="pmd-textfield pull-left">
				  <input type="text" id="exampleInputAmount" class="form-control" placeholder="Search for...">
				</div>
				<a href="javascript:void(0);" class="btn btn-primary pmd-btn-raised add-btn pmd-ripple-effect pull-left">Search</a>
			</div>
			<!-- Title -->
			<h1 class="section-title" id="services">
				<span></span
			</h1><!-- End Title -->
			<!--breadcrum start-->
			<ol class="breadcrumb text-left">
			  <li><a href="index.html">Dashboard</a></li>
			  <li class="active">Pengguna / Data / <a type="button" class="btn btn-success" href="?page=pengguna&aksi=tambah">Tambah Pengguna</a></li>
			</ol><!--breadcrum end-->
		</div>
        
		<?php 
		$aksi=isseT($_GET['aksi']);
		if($aksi=="tambah"){ ?>
	
					<!-- Text fields example -->
					<div class="row">
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
								<form action="library.php" method="post">
									<!-- Regular Input -->
									<div class="form-group">
										<label for="regular1" class="control-label">Nama Pengguna</label>
										<input type="text" id="regular1" class="form-control" name="nama">
										</div>
										<!-- Regular Input -->
									<div class="form-group">
										<label for="regular1" class="control-label">Password Pengguna</label>
										<input type="text" id="regular1" class="form-control" name="katasandi">
										</div>
										<!-- Textarea -->
									<div class="form-group">
										<label class="control-label">Alamat Pengguna</label>
										<textarea required class="form-control" name="alamat"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="form-control" name="simpanpengguna" value="Simpan">
									</div>
								</form>
								</div>
							</div>
						</div>
					</div><!-- end Text fields example -->
		
		<?php } else { ?>
        <div class="table-wrap">
            <!-- Table -->
            <div class="table-responsive pmd-card pmd-z-depth" style="max-height:500px;" id="scrollable-table">
                <table class="table table-mc-red pmd-table table-fixed-header">
                    <thead class="header">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					include "config.php";
					$sql=mysql_query("select * from pengguna order by pengguna_id desc")or die(mysql_error());
					$no=1;
					while($row=mysql_fetch_array($sql)){
					?>
                        <tr>
                            <td data-title="Ticket No"><?php echo $no;?></td>
                            <td data-title="Browser Name"><?php echo $row['pengguna_nama'];?></td>
                            <td data-title="Month"><?php echo $row['pengguna_alamat'];?></td>
                            <td class="pmd-table-row-action">
								<a href="library.php?idpengguna=<?php echo $row['pengguna_id'];?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
                                    <i class="material-icons md-dark pmd-sm">delete</i>
                                </a>					
                            </td>
                        </tr>
					<?php $no++; } ?>
                </tbody>
            	</table>
            </div>
        
        </div>
		<!-- Card Footer -->
		<div class="pmd-card-footer">
		  <ul class="pmd-pagination pull-right list-inline">
			  <span>Rows per page:</span> <span class="dropdown pmd-dropdown">
			  <button class="btn pmd-ripple-effect pmd-btn-flat btn-link dropdown-toggle" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="false">10 <span class="caret"></span></button>
			  <ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu">
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">10</a></li>
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">20</a></li>
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">30</a></li>
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">40</a></li>
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">50</a></li>
			  </ul>
			  </span> <span>1-10 of 100</span> <a href="javascript:void(0);" aria-label="Previous"><i class="material-icons md-dark pmd-sm">keyboard_arrow_left</i></a> <a href="javascript:void(0);" aria-label="Next"><i class="material-icons md-dark pmd-sm">keyboard_arrow_right</i></a>
		  </ul>
		</div>
		
		<?php } ?>
	</div>
</div>
<!--tab start-->

<!--content area end-->