<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$this->load->model("get_db");
$data['results'] = $this->get_db->getAll();



echo "<table>
<tr>
<th>Id</th>
<th>Nimi</th>
<th>Erakond</th>
<th>Ringkond</th>
</tr>";
foreach($results as $row){
                    echo "<tr>";
                    echo "<td>". $row->Id . "</td>";
                    echo "<td>". $row->Name . "</td>";
                    echo "<td>". $row->Erakond . "</td>";
                    echo "<td>". $row->Ringkond . "</td>";
                    echo "</tr>";
                    
                }
echo "</table>";

?>
</body>
</html>