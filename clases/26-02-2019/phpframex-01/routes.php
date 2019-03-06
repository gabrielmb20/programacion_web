<?php
    require_once('models/Student.php');    
    require_once('models/Professor.php');
      
    Route::get('/', function() {
       return view('student',
         ['students'=>Student::all(),
          'title'=>'Students list']);
    });
    
    Route::get('/professor', function() {
       return view('professor',
         ['professors'=>Professor::all(),
          'title'=>'Professors list']);
    });
    
    Route::dispatch();
?>
