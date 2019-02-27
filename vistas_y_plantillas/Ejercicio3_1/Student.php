<?php
class Student extends Model {

  static $students = [
    ['id'=>4056,'name'=>'Juan Perez ','direccion' => 'San Jose','carrera'=>'M.Sc.',
     'email'=>'juan.perez@univ.ac','phone'=>'8944556'], 
    ['id'=>3110,'name'=>'Ana Castro','direccion' => 'San Jose','carrera'=>'Ph.D',
     'email'=>'pedro.castro@univ.ac','phone'=>'8944550'],
    ['id'=>2856,'name'=>'Manuel Salas','direccion' => 'San Jose','carrera'=>'Lic.',
     'email'=>'manuel.salas@univ.ac','phone'=>'8944455'],
    ['id'=>1788,'name'=>'Carolina Mora','direccion' => 'San Jose','carrera'=>'M.Sc.',
     'email'=>'oscar.mora@univ.ac','phone'=>'8944675'],
    ['id'=>6547,'name'=>'Pablo Cortez','direccion' => 'San Jose','carrera'=>'Lic.',
     'email'=>'pablo.cortez@univ.ac','phone'=>'8944999'],
    ['id'=>6542,'name'=>'Maria Figueroa','direccion' => 'San Jose','carrera'=>'Lic.',
     'email'=>'pablo.cortez@univ.ac','phone'=>'8956929']
  ];

  public static function all() { 
    return self::$students; 
  }

  public static function find($id) {
    foreach (self::$students as $key => $stud)
      if ($stud['id'] == $id) return $stud;
    return [];
  }
}
?>
