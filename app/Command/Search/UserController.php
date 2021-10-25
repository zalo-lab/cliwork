<?php

namespace App\Command\Search;

use Cliwork\CommandController;
use Cliwork\DB\MysqliConnector;

class UserController Extends CommandController{

    public function handle(){
        $db = new MysqliConnector;
        $result = $db->query("Select * from users");

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $name = $row['title']." ".$row['name'];
                $this->getPrinter()->display(sprintf("User Found: %s", $name));
            }
        } else {
            $name = "Not Found";
        }
        mysqli_free_result($result);

    }


}
