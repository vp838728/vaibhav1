
<?php 
					$i = 1;
						$res = $conn->query("SELECT t.*,concat(a.lastname,', ',a.firstname, a.middlename) as `name`,u.accountno from `tranction` t inner join `useraccount` u on u.id = user_ID where t.user_ID = '".$_settings->userdata('id')."' order by unix_timestamp(t.date_created) desc ");
						while($row = $qry->fetch_assoc()):
					?>

                    <?php
                    endwhile;?>