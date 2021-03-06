<?php

namespace model;

class PDOPersonRepository implements PersonRepository
{
    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findPersonById($id )
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM person WHERE id=?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

            if (count($results) > 0) {
                return new Person($results[0]['id'], $results[0]['name']);
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function updatePersonById($id , $name)
    {
        try
        {

            $statement = $this->connection->prepare("UPDATE person set name=? WHERE id=?");
            $statement->bindParam(1, $name, \PDO::PARAM_STR);
            $statement->bindParam(2, $id, \PDO::PARAM_INT);

            $statement->execute();



                return "updated succefull" . $name;

        }
        catch (\Exception $exception)
        {
            return "failed to update";
        }

    }
}
?>


