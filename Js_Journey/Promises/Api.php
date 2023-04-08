<?php
    $con = mysqli_connect("localhost","root","ken@wako?","promises");
    if($con){
        $sql = "SELECT * FROM `promises`";
        $result = mysqli_query($con,$sql);
        if($result){
            header("Content-Type:JSON");
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $response[$i]['id'] = $row['id'];
                $response[$i]['name'] = $row['name'];
                $response[$i]['description'] = $row['description'];
                $response[$i]['date'] = $row['date'];
                $response[$i]['time'] = $row['time'];
                $response[$i]['status'] = $row['status'];
                $i++;

            }
            echo json_encode($response);

        }

    }
    else{
        echo "Connection Failed";
    }
?>