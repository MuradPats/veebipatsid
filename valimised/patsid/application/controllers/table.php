<?php

class table extends CI_Controller {
public function table(){
echo "hello noku1";
$this->load->model("get_db");
$data['results'] = $this->get_db->getAll2();

echo "hello noku";

echo "<table>
<tr>
                <th>Valimisnumber</th>
                <th>Nimi</th>		
                <th>Erakond</th>
                <th>Ringkond</th>
                <th>Haali</th>
</tr>";
foreach($results as $row){
                    echo "<tr>";
                    echo "<td>". $row->Valik . "</td>";
                    echo "<td>". $row->Name . "</td>";
                    echo "<td>". $row->Erakond . "</td>";
                    echo "<td>". $row->Ringkond . "</td>";
                    echo "<td>". $row->Haali . "</td>";
                    echo "</tr>";
                    
                }
echo "</table>";
}
 }

?>
