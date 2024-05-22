<div id="workout_recorder_page">
    <h1>Workout Name:</h1>
    <div class="row">
        <div class="col-md-6">
            <select id="workout_name" class="form-select" style="width: 50%">
                <?php foreach($workouts as $workout): ?>
                    <option value="">Select a workout</option>
                    <option value="<?= $workout['workout_id'] ?>"><?= $workout['workout_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-6">
            <button id="start_workout" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#workoutModal">Start Workout</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Exercises</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Exercise</th>
                        <th>Reps</th>
                        <th>Sets</th>
                    </tr>
                </thead>
                <tbody id="exercise_table">
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h2>Workout Summary</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Exercise</th>
                        <th>Reps</th>
                        <th>Sets</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody id="summary_table">
                    <tr>
                        <td>Exercise 1</td>
                        <td>10</td>
                        <td>3</td>
                        <td>100</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!--Modal-->
    <div class="modal fade" id="workoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Record Workout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-4">
                    Exercise Name
                </div>
                <div class="col-2">
                    Reps
                </div>
                <div class="col-2">
                    Weight
                </div>
            </div>
            <div class="row mt-2 exercise_recorder_row">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save workout</button>
        </div>
        </div>
    </div>
    </div>
</div>