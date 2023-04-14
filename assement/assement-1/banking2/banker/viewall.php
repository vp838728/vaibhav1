<?php 
include_once('heder.php');
?>

	
    
    <table class="table">
      <thead class="table-dark">
          <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>

        <?php
        if(!empty($view_arr))
        {
          foreach($view_arr as $d)
        {
          ?>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $d->name;?></td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
            <!-- <a href="#" class="btn btn-success">status</a> -->
            <a href="#" class="btn btn-warning">view</a>
          </td>
        </tr>.
        <?php
        }
      }
      ?>
      </tbody>
    </table>
	
	<footer>
		<p>&copy; 2023 Bank Management System</p>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>