<?php
/**
 * Created by PhpStorm.
 * User: Jordan Smith
 * Date: 2/25/2019
 *
CREATE TABLE members (
member_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
fname VARCHAR(20) NOT NULL,
lname VARCHAR(20) NOT NULL,
age int(2) NOT NULL,
gender VARCHAR(6),
phone VARCHAR(10) NOT NULL,
email VARCHAR(50) NOT NULL,
state VARCHAR(20),
seeking VARCHAR(6),
bio VARCHAR(300),
premium TINYINT(1),
image VARCHAR(50),
interests VARCHAR(200)
);
 */

class Database
{
    function connect()
    {

        //connect to the database
        require '/home/jsmithgr/config.php';

        try
        {
            $cnxn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        } catch(PDOException $e)
        {
            echo $e->getMessage();
            return;
        }
        return $cnxn;
    }

    function insertMember($cnxn, $fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio,
                          $premium, $image, $interests)
    {
        //store the information into the database
        $sql = "INSERT INTO members (fname, lname, age, gender, phone, email, state, seeking, bio, 
            premium, image, interests)
            VALUES (:fname, :lname, :age, :gender, :phone, :email, :state, :seeking, :bio, 
            :premium, :image, :interests)";


        //prepare statement
        $statement = $cnxn->prepare($sql);

        //bind parameters
        $statement->bindValue(":fname", $fname, PDO::PARAM_STR);
        $statement->bindValue(":lname", $lname, PDO::PARAM_STR);
        $statement->bindValue(":age", $age, PDO::PARAM_STR);
        $statement->bindValue(":gender", $gender, PDO::PARAM_STR);
        $statement->bindValue(":phone", $phone, PDO::PARAM_STR);
        $statement->bindValue(":email", $email, PDO::PARAM_STR);
        $statement->bindValue(":state", $state, PDO::PARAM_STR);
        $statement->bindValue(":seeking", $seeking, PDO::PARAM_STR);
        $statement->bindValue(":bio", $bio, PDO::PARAM_STR);
        $statement->bindValue(":premium", $premium, PDO::PARAM_STR);
        $statement->bindValue(":image", $image, PDO::PARAM_STR);
        $statement->bindValue(":interests", $interests, PDO::PARAM_STR);

        $statement->execute();

    }

    function getMembers($cnxn)
    {
        $sql = "SELECT * FROM members ORDER BY lname";

        $statement = $cnxn->prepare($sql);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getMember($cnxn, $id)
    {
        $sql = "SELECT * FROM members WHERE member_id = :member_id";

        $statement = $cnxn->prepare($sql);

        $statement->bindValue(":member_id", $id, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

}