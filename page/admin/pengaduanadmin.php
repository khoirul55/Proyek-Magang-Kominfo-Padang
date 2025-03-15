<?php
include"../../config.php";
$no = 1;
$qry_buku = mysqli_query($con,"SELECT * from tb_pengaduan");
?>		
<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">		
							<table style="margin-top:20px;">
								<tr>
								<th></th>
								<th><center>No</center></th>
								<th><center>Nama</center></th>
								<th><center>Email</center></th>
								<th><center>Subject</center></th>
								<th><center>Message</center></th>
                                <th><center>Aksi</center></th>
							</tr>
								<?php while($data = mysqli_fetch_array($qry_buku)) { ?>
								<tr>
								 <td></td>
								 <td><center><?php echo $no++ ?></center></td>
								 <td><center><?php echo $data['nama'] ?></center></td>
								 <td><center><?php echo $data['email'] ?></center></td>
								 <td><center><?php echo $data['subject'] ?></center></td>
                                 <td><center><?php echo $data['message'] ?></center></td>
								 <td><a href="#; ?>"><center><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a href="hapuspengaduan.php?id=<?php echo $data['id_pengaduan']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></center></a></td>
								</tr>
								<?php } ?>
							</table>
 						</div>
                    </div>
</div>