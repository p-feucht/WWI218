package com.freizeitfinder.freizeitfinderserver.controller;

import com.freizeitfinder.freizeitfinderserver.exception.ResourceNotFoundException;
import com.freizeitfinder.freizeitfinderserver.model.Activity;
import com.freizeitfinder.freizeitfinderserver.repository.ActivityRepository;
import org.springframework.beans.factory.annotation.Autowired;
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
    public Activity createActivity(@Valid @ModelAttribute Activity activity) {
        return activityRepository.save(activity);
    }

    @GetMapping("/activities/{id}")
    public Activity getActivityById(@PathVariable(value = "id") Long activityId) {
        return activityRepository.findById(activityId)
                .orElseThrow(() -> new ResourceNotFoundException("Activity", "id", activityId));
    }
/*
    @GetMapping("/activities/addAttendee/{id}")
    public Activity addAttendee(@PathVariable(value = "id")Long activityId){
        Activity a = activityRepository.findById(activityId)
                .orElseThrow(()->new ResourceNotFoundException("Activity", "id", activityId));
        int attendees = a.getAttendeesRightNow();
        attendees++;
        a.setAttendeesRightNow(attendees);
        activityRepository.save(a);
        return a;
    }
*/
}
