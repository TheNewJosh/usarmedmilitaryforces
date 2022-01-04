<?php
class common{
    function __construct(){}
    
    
    function insertUser($pdo){ 
        if($this->imageTemp){
            move_uploaded_file($this->imageTemp, "assets/img/solider/".$this->pics);
        }
        
        $stmt = $pdo->prepare("INSERT INTO `user` ( `name`, `rank`, `short`, `post_troop`, `mos`, `pics`) VALUES ( :name, :rank, :short, :post_troop, :mos, :pics)");

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':rank', $this->rank);
        $stmt->bindParam(':short', $this->short);
        $stmt->bindParam(':post_troop', $this->post_troop);
        $stmt->bindParam(':mos', $this->mos);
        $stmt->bindParam(':pics', $this->pics);

        if($stmt->execute()){
            return true;
        }
    }

    function updateUser($pdo){

        if($this->imageTemp){
            unlink("assets/img/solider/".$this->pics_h);
            move_uploaded_file($this->imageTemp, "assets/img/solider/".$this->pics);

            $stmt = $pdo->prepare("UPDATE `user` SET `name`= :name, `rank`= :rank, `short`= :short, `post_troop`= :post_troop, `mos`= :mos, `pics`= :pics WHERE id = :id");
            
            $stmt->bindParam(':pics', $this->pics);
        }else{
            $stmt = $pdo->prepare("UPDATE `user` SET `name`= :name, `rank`= :rank, `short`= :short, `post_troop`= :post_troop, `mos`= :mos WHERE id = :id");
        }

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':rank', $this->rank);
        $stmt->bindParam(':short', $this->short);
        $stmt->bindParam(':post_troop', $this->post_troop);
        $stmt->bindParam(':mos', $this->mos);
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()){
            return true;
        }
    }

    function getUserAll($pdo){
        $stmt = $pdo->prepare("SELECT * FROM user ORDER BY name ASC");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    function deleteUser($pdo){
        unlink("assets/img/solider/".$this->pics);
        $stmt = $pdo->prepare("DELETE FROM `user` WHERE id=".$this->id);
        if($stmt->execute()){
            return true;
        }
    }

    function getUserSearch($pdo,$dt){
        $stmt = $pdo->prepare("SELECT * FROM user WHERE name LIKE '$dt%' OR rank LIKE '$dt%' OR mos LIKE '$dt%' OR post_troop LIKE '$dt%' ORDER BY name ASC");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    function updatePassCode($pdo){
        $stmt = $pdo->prepare("UPDATE `passcode` SET `code`= :passcode");

        $stmt->bindParam(':passcode', $this->passcode);

        if($stmt->execute()){
            return true;
        }
    }

    function userLogin($pdo){
        $stmt = $pdo->prepare("SELECT * FROM passcode WHERE code = :passcode");

        $stmt->bindParam(':passcode', $this->passcode);

        if($stmt->execute()){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

}
?>