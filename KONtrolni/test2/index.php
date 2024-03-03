<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        interface IPerson {
    public function getName();
    public function setName($name);
    public function getID();
    public function setID($id);
}

class School {
    protected static $schoolName;
    
    public static function setSchoolName($name) {
        self::$schoolName = $name;
    }
    
    public static function getSchoolName() {
        return self::$schoolName;
    }
}

class Teacher implements IPerson {
    protected $name;
    protected $egn;
    protected $disciplines;
    
    public function __construct($name, $egn, $disciplines) {
        $this->name = $name;
        $this->egn = $egn;
        $this->disciplines = $disciplines;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getID() {
        return $this->egn;
    }
    
    public function setID($id) {
        $this->egn = $id;
    }
    
    public function getDisciplines() {
        return $this->disciplines;
    }
}

class Student implements IPerson {
    protected $name;
    protected $class;
    protected $id;
    
    public function __construct($name, $class, $id) {
        $this->name = $name;
        $this->class = $class;
        $this->id = $id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getID() {
        return $this->id;
    }
    
    public function setID($id) {
        $this->id = $id;
    }
    
    public function getClass() {
        return $this->class;
    }
}
Class Disciplines {
            protected $nameOfDisciplines;
            protected $countLessons;
            protected $countUPR;
            
            public function __construct($nameOfDisciplines, $countLessons, $countUPR) {
                $this->nameOfDisciplines = $nameOfDisciplines;
                $this->countLessons = $countLessons;
                $this->countUPR = $countUPR;
            }
            public function getNameOfDisciplines() {
                return $this->nameOfDisciplines;
            }

            public function getCountLessons() {
                return $this->countLessons;
            }

            public function getCountUPR() {
                return $this->countUPR;
            }

            public function setNameOfDisciplines($nameOfDisciplines): void {
                $this->nameOfDisciplines = $nameOfDisciplines;
            }

            public function setCountLessons($countLessons): void {
                $this->countLessons = $countLessons;
            }

            public function setCountUPR($countUPR): void {
                $this->countUPR = $countUPR;
            }

        
        
        }

School::setSchoolName("ОУ Христо Смирненски");

$teacher = new Teacher("Елена Иванова", "1111111", ["Математика", "Български език"]);
$student = new Student("Ростислав Демиров", "12", "21621570");
echo "Име на училището: " . School::getSchoolName() . "<br>";
echo "Име на преподавателя: " . $teacher->getName() . "<br>";
echo "Преподаваните дисциплини: " . implode(", ", $teacher->getDisciplines()) . "<br>";
echo "Име на ученика: " . $student->getName() . "<br>";
            
       
        ?>
    </body>
</html>
