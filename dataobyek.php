<div id="content" class="pmd-content inner-page">
<div class="table-wrap">
            <!-- Table -->
            <div class="table-responsive pmd-card pmd-z-depth" style="max-height:500px;" id="scrollable-table">
                <table class="table table-mc-red pmd-table table-fixed-header">
                    <thead class="header">
                        <tr>
                            <th>No.</th>
                            <th>Nama Obyek</th>
                            <th>Lat</th>
                            <th>Lng</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					include "config.php";
					$sql=mysql_query("select * from obyek order by obyek_id desc")or die(mysql_error());
					$no=1;
					while($row=mysql_fetch_array($sql)){
					?>
                        <tr>
                            <td data-title="Ticket No"><?php echo $no;?></td>
                            <td data-title="Browser Name"><?php echo $row['obyek_nama'];?></td>
                            <td data-title="Month"><?php echo $row['obyek_latitude'];?></td>
							<td data-title="Month"><?php echo $row['obyek_longtitude'];?></td>
                            <td class="pmd-table-row-action">
                                <a href="library.php?idobyek=<?php echo $row['obyek_id'];?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
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
</div>