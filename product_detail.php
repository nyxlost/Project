<?php
include('h.php');
include('backend/condb.php');
$p_id = $_GET["id"];
?>

<!DOCTYPE html>
<head>
  <title>ระบบจองสินค้าหลุดจำนำ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
     <style>
        div.polaroid {
          width: 80%;
          background-color: white;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          margin-bottom: 25px;
        }

        div.container_di {
          text-align: center;
          padding: 10px 20px;
        }
      </style>
</head>
<body>
  
  <div class="container">
    <?php include('navbar3.php'); ?>
    <div class="row">
      <?php
      $sql = "SELECT * FROM tbl_product as p 
              INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
               AND p_id = $p_id ";
      $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
      $row = mysqli_fetch_array($result);
      ?>
      <div class="col-md-10">
        <div class="container" style="margin-top: 50px">
          <div class="row">
            <div class="col-md-6">
              <div class="polaroid">
                <?php echo"<img src='backend/p_img/".$row['p_img']."'width='100%'>";?>
                  <div class="container_di">
                    <p><?php echo $row["p_name"];?></p>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <h3><b><?php echo $row["p_name"];?></b></h3>
              <p>
                ประเภท <?php echo $row["type_name"];?>
              </p>
              <?php echo $row["p_detail"];?>
                 <p>
                 <p>
                ราคา <?php echo $row["p_price"];?> บาท
              </p> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">จอง</button>
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">จองสินค้า</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>คุณต้องการจองสินค้าชิ้นนี้หรือไม่</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ไม่</button>
        <button type="button" class="btn btn-primary">ใช่</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>