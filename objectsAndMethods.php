<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
        class Person {
            
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            
            public function __construct($firstname, $lastname, $age){
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->age = $age;
            }
            
            public function meth1() {
                return "Hello, my name is ".$this->firstname." ".$this->lastname.". Nice to meet you! :-)";
            }
        }
            $teacher = new Person("boring", "12345", 12345);
            $student = new Person("Baktybek", "Tazhibaev", 28);
            echo $teacher->isAlive;
            echo $student->isAlive;
            echo $teacher->meth1();
            echo $student->meth1();
        ?>
      </p>
    </body>
</html>
