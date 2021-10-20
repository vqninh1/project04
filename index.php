<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Employees{
            private $id;
            private $fullName;
            private $position;
            private $emails;
            private $mobile;
            private $oid;

            //Phương thức: (Hàm)
            //Hàm tạo: khởi tọa giá trị khi mà bạn khởi tọa đối tượng
            public function Employees(){
                $this -> id = NULL;
                $this -> fullName = NULL;


            }

            public function Employees_1($uid,$uname){
                $this -> id = $uid;
                $this -> fullName = $uname;


            }
            public function __construct($uid,$uname,$position)
            {
                $this -> id = $uid;
                $this -> fullName = $uname;
                $this -> position = $position;
            }
            
            //Hàm getter và setter
            public function getFullName(){
                return $this -> fullName;
            }

            public function setFullName($name){
                $this -> fullName = $name;
            }

            //Khởi tạo các đối tượng:Thể hiện cụ thể của CLASS
            $emp_01 = new Employees('39','Vương Quang Ninh','Sinh Viên');
            echo $emp_01->getFullName();


            

        }
        
            
        


    ?>
</body>
</html>