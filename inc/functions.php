 <?php
            
            $db = new PDO("mysql:host=localhost;dbname=tracking;port=8889", "root", "root");
            
            $query = $db->prepare(SELECT * FROM issues);
           
            $results = ($query->fetchALL(PDO::FETCH_ASSOC));

        ?>
      echo "<table class=\"pure-table\">";

      echo "<thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Report</th>
            <th>Submitted</th>
        </tr>
    </thead>";
        
    
        
        <?php
            foreach( $results as $row ) {
              echo "<tbody><tr><td>";
                echo $row['id'];
                echo "</td><td>";
                echo $row['name'];
                echo "</td><td>";
                echo $row['email'];
                echo "</td><td>";
                echo $row['report'];
                echo "</td><td>";
                echo $row['submitted'];
                echo "</td><td>";
            echo "</tr></tbody>";
            }
        ?>
        
    
  </table>