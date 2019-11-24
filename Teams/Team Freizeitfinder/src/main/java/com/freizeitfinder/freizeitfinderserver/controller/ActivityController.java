package com.freizeitfinder.freizeitfinderserver.controller;

import com.freizeitfinder.freizeitfinderserver.exception.ResourceNotFoundException;
import com.freizeitfinder.freizeitfinderserver.model.Activity;
import com.freizeitfinder.freizeitfinderserver.repository.ActivityRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;
import java.util.List;

@RestController
@RequestMapping("/api")
public class ActivityController {

    @Autowired
    ActivityRepository activityRepository;

    @GetMapping("/activities")
    public List<Activity> getAllActivities() {
        return activityRepository.findAll();
    }

    @PostMapping("/activities")
    public Activity createActivity(@Valid @RequestBody Activity activity) {
        return activityRepository.save(activity);
    }

    @GetMapping("/activities/{id}")
    public Activity getActivityById(@PathVariable(value = "id") Long activityId) {
        return activityRepository.findById(activityId)
                .orElseThrow(() -> new ResourceNotFoundException("Activity", "id", activityId));
    }

    @PutMapping("/activities/{id}")
    public Activity updateActivity(@PathVariable(value = "id") Long activityId,
                           @Valid @RequestBody Activity activityDetails) {

        Activity activity = activityRepository.findById(activityId)
                .orElseThrow(() -> new ResourceNotFoundException("Activity", "id", activityId));

        //TODO: use setters for activities(activityDetails)

        Activity updatedActivity = activityRepository.save(activity);
        return updatedActivity;
    }

    @DeleteMapping("/activities/{id}")
    public ResponseEntity<?> deleteActivity(@PathVariable(value = "id") Long activityId) {
        Activity activity = activityRepository.findById(activityId)
                .orElseThrow(() -> new ResourceNotFoundException("Activity", "id", activityId));

        activityRepository.delete(activity);

        return ResponseEntity.ok().build();
    }

}
