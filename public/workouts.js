if ($("#workout_recorder_page").length > 0) {
//   try {
//     $.ajax({
//         type: "GET",
//         url: "/workout/getWorkouts",
//         }).then((data) => {
//         console.log(data);
//         //create a new div for each workout
      
//     });
    
//   } catch (error) {
    
//   }

    $("#workout_name").on("change", function() {
        console.log($(this).val());
        try {
            $.ajax({
                type: "POST",
                url: "/workout/getWorkoutExercises",
                data: {workout_id: $(this).val()}

                }).then((jsonString) => {
                const data = JSON.parse(jsonString);

                exercise_table = $("#exercise_table");
                exercise_table.empty();
                data.forEach(exercise => {
                    exercise_table.append(`<tr class="exercise_row"><td class="exercise_name">${exercise.exercise_name}</td><td class="exercise_reps">${exercise.repetitions}</td><td class="exercise_sets">${exercise.sets}</td></tr>`);
                });
                // exercise_table.append(`<tr><td>${data.exercise_name}</td><td>${data.repetitions}</td><td>${data.sets}</td></tr>`);
                // //create a new div for each workout
            
            });
            
        } catch (error) {
            
        }
       
    });
    
}

$("#start_workout").on("click", function() {
    let workoutCounter = [];
    $(".exercise_row").each(function() {
        let $this = $(this);
        let exerciseName = $this.children(".exercise_name").text();
        let exerciseReps = $this.children(".exercise_reps").text();
        let exerciseSets = parseInt($this.children(".exercise_sets").text(), 10);

        console.log(exerciseName);
        console.log(exerciseReps);
        console.log(exerciseSets);

        for (let i = 0; i < exerciseSets; i++) {
            workoutCounter.push([exerciseName, exerciseReps]);
        }
    });

    let html = workoutCounter.map((exercise) => {
        return `
            <div class="row mt-2">
                <div class="col-4">
                    ${exercise[0]}
                </div>
                <div class="col-3">
                    <input type="number" class="form-control" name="reps" placeholder="${exercise[1]}">
                </div>
                <div class="col-3">
                    <input type="number" class="form-control" name="weight" placeholder="kg">
                </div>
            </div>`;
    }).join(''); // join the array to a single string

    $(".exercise_recorder_row").append(html);
});



