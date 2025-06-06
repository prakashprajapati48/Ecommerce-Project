<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

<style>
    .dt-layout-row{
        display: flex;
        position: relative;
        /* top: 32rem; */
    }
</style>

<?php
    include '../data_connect.php';
    include 'navbar.php';
    // session_start();
        $usernames = $_SESSION['username'];
        $sql = "SELECT * FROM `ecomm` WHERE `username` LIKE '$usernames'";
        $result = mysqli_query($conn,$sql);

        $num_res = mysqli_num_rows($result);
        if($num_res > 0){
            echo '
            <div class="container">
            <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th width="10%">product_img</th>
                            <th>Product Item</th>
                            <th>category</th>
                            <th>No Of items</th>
                            <th>Payment Method</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>';
                    // <th>Username</th>
                    // <td>'.$row['username'].'</td>
                    for($i=1;$i<=$num_res;$i++){
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo' 
                    
                        <tr>
                            <td>'.$i++.'</td>
                            <td><img src='.$row['product_img'].' alt="" width="100%"></td>
                            <td>'.$row['product_name'].'</td>
                            <td>'.$row['category'].'</td>
                            <td>'.$row['no_items'].'</td>
                            <td>'.$row['payment_method'].'</td>
                            <td>'.$row['total_price'].'</td>
                            <td>'.$row['dt'].'</td>
                        </tr>
                        ';
                    }
                    
                    '
                        </tbody>
                        </table>
                        </div>
                        ';
                    }
                }
?>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable()
    } );
</script>