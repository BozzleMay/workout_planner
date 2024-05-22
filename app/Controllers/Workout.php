<?php

namespace App\Controllers;

class Workout extends BaseController
{
    public function index()
    {
        $workoutModel = new \App\Models\WorkoutModel();
        $workouts = $workoutModel->findAll();
        $data = [
            'workouts' => $workouts
        ];
    
        return    view('common/header')
                . view('workouts/workout_recorder', $data);
    }

    public function getWorkoutExercises()
    {   
        $workout_id = $this->request->getVar('workout_id');
        $workoutModel = new \App\Models\WorkoutModel();
        $workoutExercises = $workoutModel->getWorkoutExercises($workout_id);

        return json_encode($workoutExercises);
    }

  
}