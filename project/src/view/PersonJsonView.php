<?php

namespace view;

class PersonJsonView implements View
{
    public function show(array $data)
    {
        /*
        header('Content-Type: application/json');
        */

        if (isset($data['person'])) {
            $person = $data['person'];

            echo json_encode(['id' => $person->getId(), 'name' => $person->getName()]) . "<br>";


            echo '<form id="registerDate" method="post" action="app.php">';
            echo '<input id="name" required  type = "text" name = "subject1" value="' . $person->getName() . '" />' . "<br>";
            echo '<input id="id" required  type = "text" name = "subject1" value="' . $person->getId() . '" />' . "<br>";
            echo '<button type=submit> Update Database </button>';
            echo '</form>';
            /*
            echo "<input type=\"text\"> \n";
            echo "<input type=\"text\"> \n";
            echo '<textarea style="color:#FF0000;" name="message">Please Enter</textarea>';
            */

        } else {
            echo '{}';
        }
    }

    public function update($status = null)
    {
        echo $status;
    }


}
?>



