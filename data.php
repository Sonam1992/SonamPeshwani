<?php
    $conn = mysqli_connect('uploaddatabase.cmi7k84twi7t.us-east-1.rds.amazonaws.com', 'nikhil', 'TFjune2022', 'data_loads');

    $result = mysqli_query($conn, "SELECT O_PHP_FILTERS.project_name, O_PHP_FILTERS.tower , O_SBU_MAPPING.sbu_identifier , O_PHP_FILTERS.display_name 
    FROM O_PROJECTS 
    JOIN O_PHP_FILTERS ON O_PROJECTS.Projec_shorts = O_PHP_FILTERS.project_code
    JOIN O_SBU_MAPPING ON O_PROJECTS.sbu_mapping_id = O_SBU_MAPPING.mapping_id 
    ORDER BY project_name,tower,sbu_identifier,display_name;");

    $data = array();
    while ($row = mysqli_fetch_array($result)) {
        array_push($data, $row);
        // $data[] = $row;   
    }


    // returning the response
    echo json_encode($data);
    exit();