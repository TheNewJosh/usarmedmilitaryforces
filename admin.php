<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
  <link rel="icon" href="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png">
  <title>Dashboard</title>
  <?php 
    require_once ("components/core/aaa-db.php");

    ob_start();
    session_start();
    if(!isset($_SESSION['passcode'])){
        header("location: login.php?session=notset");
    }

    require_once ("components/core/aaa-class.php");
    $objcommon = new common();

    $dataUserAll = $objcommon->getUserAll($pdo);

    if(isset($_POST['submit_add'])){ 
      $name = $_POST['name'];
      $rank = $_POST['rank'];
      $short = $_POST['short'];
      $post_troop = $_POST['post_troop'];
      $mos = $_POST['mos'];
      $pics = $_FILES['pics']['name'];

      if($pics){
        $imageTemp = $_FILES['pics']['tmp_name'];
        $img = explode(".", $pics);
        $pics_name = "sldr_".$img[0]."".microtime(true).".".$img[1];
      }else{
        $imageTemp = "";
        $pics_name = "";
      }

      $objcommon->name = $name;
      $objcommon->rank = $rank;
      $objcommon->short = $short;
      $objcommon->post_troop = $post_troop;
      $objcommon->mos = $mos;
      $objcommon->imageTemp = $imageTemp;
      $objcommon->pics = $pics_name;
      
      if($objcommon->insertUser($pdo) == true){
            
        header("location: admin.php?msg=sucess");
      }else{
          $message_err = "Input Error";
      }
    }

    if(isset($_POST['submit_edit'])){ 
      $id = $_POST['id'];
      $name = $_POST['name'];
      $rank = $_POST['rank'];
      $short = $_POST['short'];
      $post_troop = $_POST['post_troop'];
      $mos = $_POST['mos'];
      $pics = $_FILES['pics']['name'];
      $pics_h = $_POST['pics_h'];

      if($pics){
        $imageTemp = $_FILES['pics']['tmp_name'];
        $img = explode(".", $pics);
        $pics_name = "sldr_".$img[0]."".microtime(true).".".$img[1];
      }else{
        $imageTemp = "";
        $pics_name = "";
      }

      $objcommon->name = $name;
      $objcommon->rank = $rank;
      $objcommon->short = $short;
      $objcommon->post_troop = $post_troop;
      $objcommon->mos = $mos;
      $objcommon->imageTemp = $imageTemp;
      $objcommon->pics = $pics_name;
      $objcommon->pics_h = $pics_h;
      $objcommon->id = $id;
      
      if($objcommon->updateUser($pdo) == true){
            
        header("location: admin.php?msg=sucess");
      }else{
          $message_err = "Input Error";
      }
    }

    if(isset($_POST['submit_editPC'])){ 
      $passcode = $_POST['passcode'];

      $objcommon->passcode = md5($passcode);
      
      if($objcommon->updatePassCode($pdo) == true){
            
        header("location: admin.php?msg=sucess");
      }else{
          $message_err = "Input Error";
      }
    }

    if(isset($_GET['action'])){
      $action = $_GET['action'];

      if($action == "delete"){
        $user = $_GET['user'];
        $pics = $_GET['pics'];

        $objcommon->id = $user;
        $objcommon->pics = $pics;
        if($objcommon->deleteUser($pdo) == true){
            
          header("location: admin.php?msg=sucessDel");
        }
      }
    }
  ?>
</head>
<body>

  <nav class="navbar fixed-top navbar-light bg-dark">
    <div class="container-fluid">
      <a href="index.php" target="_blank" class="navbar-brand text-light">Usarmedmilitaryforces</a>
        <ul class="list-inline d-flex">
          <li class="list-inline-item">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Solider</a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenterPC">Passcode</a>
          </li>
        </ul>
    </div>
  </nav>


  <div style=" margin-top:90px; padding:10 border: 2px solid black;">
    <table id="example" class="table table-striped table-bordered" style="width:100%;">
      <thead>
        <tr>
          <th scope="col">S/N</th>
          <th scope="col">Name</th>
          <th scope="col">Rank</th>
          <th scope="col">Short</th>
          <th scope="col">Post/Troop</th>
          <th scope="col">Mos</th>
          <th scope="col">Picture</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
      <?php for ($i=0; $i <count($dataUserAll) ; $i++){  ?>
          <tr>
              <td><?= $i+1 ?></td>
              <td><?= $dataUserAll[$i]['name'] ?></td>
              <td><?= $dataUserAll[$i]['rank'] ?></td>
              <td><?= $dataUserAll[$i]['short'] ?></td>
              <td><?= $dataUserAll[$i]['post_troop'] ?></td>
              <td><?= $dataUserAll[$i]['mos'] ?></td>
              <td><img src="assets/img/solider/<?= $dataUserAll[$i]['pics'] ?>" style="width:30px; height:30px;"></td>
              <td>
                <a href="#"
              data-id="<?= $dataUserAll[$i]['id'] ?>" 
              data-name="<?= $dataUserAll[$i]['name'] ?>" 
              data-rank="<?= $dataUserAll[$i]['rank'] ?>" 
              data-short="<?= $dataUserAll[$i]['short'] ?>" 
              data-post_troop="<?= $dataUserAll[$i]['post_troop'] ?>" 
              data-mos="<?= $dataUserAll[$i]['mos'] ?>" 
              data-pics="<?= $dataUserAll[$i]['pics'] ?>" 
              data-toggle="modal" class="edit-soilder" data-target="#exampleModalCenterSld">Edit</a> ||
              <a href="admin.php?action=delete&user=<?= $dataUserAll[$i]['id'] ?>&pics=<?= $dataUserAll[$i]['pics'] ?>" class="text-danger">Delete</a>
              </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="modal-content" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Solider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
          <label for="exampleInputRank">Rank</label>
          <input type="text" class="form-control" name="rank" id="exampleInputRank" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputShort">Short</label>
          <input type="text" class="form-control" name="short" id="exampleInputShort" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPostTroop">Post/Troop</label>
          <input type="text" class="form-control" name="post_troop" id="exampleInputPostTroop" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputMos">Mos</label>
          <input type="text" class="form-control" name="mos" id="exampleInputMos" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPics">Picture</label>
          <input type="file" class="form-control" name="pics" id="exampleInputPics" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit_add" class="btn btn-primary">Save changes</button>
      </div>
    </form>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenterSld" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="modal-content" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id">
      <input type="hidden" name="pics_h" id="pics_h">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Solider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
          <label for="exampleInputRank">Rank</label>
          <input type="text" class="form-control" name="rank" id="rank" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputShort">Short</label>
          <input type="text" class="form-control" name="short" id="short" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPostTroop">Post/Troop</label>
          <input type="text" class="form-control" name="post_troop" id="post_troop" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputMos">Mos</label>
          <input type="text" class="form-control" name="mos" id="mos" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPics">Picture</label>
          <input type="file" class="form-control" name="pics" id="exampleInputPics" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit_edit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenterPC" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="modal-content" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Pass Code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputName">Pass Code</label>
          <input type="text" class="form-control" name="passcode" aria-describedby="emailHelp" required>
        </div>
        <a href="components/action-logout.php" class="btn btn-danger">Logout</a>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit_editPC" class="btn btn-primary">Save changes</button>
      </div>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="application/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" type="application/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
<script>
  $(document).ready(function(){
        
        $(document).on('click', '.edit-soilder', function(){
          document.querySelector("#id").value = $(this).attr("data-id");
          document.querySelector("#name").value = $(this).attr("data-name");
          document.querySelector("#rank").value = $(this).attr("data-rank");
          document.querySelector("#short").value = $(this).attr("data-short");
          document.querySelector("#post_troop").value = $(this).attr("data-post_troop");
          document.querySelector("#mos").value = $(this).attr("data-mos");
          document.querySelector("#pics_h").value = $(this).attr("data-pics");
          }); 
      });
</script>
</body>
</html>