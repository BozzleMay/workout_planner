<?php

 namespace App\Models;

 use CodeIgniter\Model;

 class WorkoutModel extends Model
 {
     protected $table = 'workouts';
     protected $primaryKey = 'workout_id';
     protected $allowedFields = ['workout_name', 'workout_type'];

     public function getWorkoutExercises($workout_id){
            $db = \Config\Database::connect();
            $builder = $db->table('workouts');
            $builder->select('workouts.workout_id, we.sets, we.repetitions, workout_type, exercises.exercise_name, exercises.exercise_id');
            $builder->join('workout_exercises we', 'workouts.workout_id = we.workout_id');
            $builder->join('exercises', 'we.exercise_id = exercises.exercise_id');
            $builder->where('workouts.workout_id', $workout_id);

            $query = $builder->get();
            return $query->getResultArray();
            
     }
 }