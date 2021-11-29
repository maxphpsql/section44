
<?php
echo(' Mysqli - POO ');
class User
{
    public $name;

    public static function getPerson($id)
    {
        $conn = new mysqli('localhost', 'root', 'root', 'restaurant');
        var_dump($conn);
        if ($result = $conn->query("SELECT * FROM Persons WHERE id = {$id} LIMIT 1")) {
            echo('ok c est connectted');
            print $result->fetch_object('Person');
         //var_dump($result);
            //$result->close();
        }
    }
}

?>

