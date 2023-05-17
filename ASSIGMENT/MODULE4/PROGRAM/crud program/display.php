<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <table class="table table-light">
        <thead class="table table-dark">
            <tr>
                <th>user_id</th>
                <th>first name</th>
                <th>last name</th>
                <th>address</th>
                <th>file</th>
                <th>email</th>
                <th>gen</th>
                <th>action</th>
          </tr>
       </thead>
       <tbody>
        <?php 
        if(!empty($user_arr))
        {
            foreach($user_arr as $data)
            {
                ?>
        <tr class="odd gradeX">
            <td><?php echo $data->user_id;?></td>
            <td><?php echo $data->fname;?></td>
            <td><?php echo $data->lname;?></td>
            <td><?php echo $data->address;?></td>
             <td><img src="file/user1/<?php echo $data->file;?>"width="177px" alt="images" height="112px"></td> 
             <td><?php echo $data->email;?></td>
             <td><?php echo $data->gen;?></td>
             <td>
                <a href="edit?edit_user_id=<?php echo $data->user_id;?>" class="btn btn-primary">EDIT</a>
                <a href="delete?del_user_id=<?php echo $data->user_id?>" class="btn btn-danger">Delete</a>
            </td>
      </tr>
      <?php
            }
        }
        ?>
</tbody>


    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>