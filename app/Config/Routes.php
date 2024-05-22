<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//workouts
$routes->get('workout', 'Workout::index');
$routes->get('workout/getWorkouts', 'Workout::getWorkouts');
$routes->post('workout/getWorkoutExercises', 'Workout::getWorkoutExercises');
