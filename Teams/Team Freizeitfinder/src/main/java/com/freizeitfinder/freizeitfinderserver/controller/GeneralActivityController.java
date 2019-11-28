package com.freizeitfinder.freizeitfinderserver.controller;

import com.freizeitfinder.freizeitfinderserver.exception.ResourceNotFoundException;
import com.freizeitfinder.freizeitfinderserver.model.GeneralActivity;
import com.freizeitfinder.freizeitfinderserver.repository.GeneralActivityRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;
import java.util.List;

public class GeneralActivityController {
    @Autowired
    GeneralActivityRepository generalActivityRepository;

    @GetMapping("/generalActivities")
    public List<GeneralActivity> getAllGeneralActivities() {
        return generalActivityRepository.findAll();
    }

    @PostMapping("/generalActivities")
    public GeneralActivity createGeneralActivity(@Valid @RequestBody GeneralActivity generalActivities) {
        return generalActivityRepository.save(generalActivities);
    }

    @GetMapping("/generalActivities/{id}")
    public GeneralActivity getGeneralActivityById(@PathVariable(value = "id") Long generalActivityId) {
        return generalActivityRepository.findById(generalActivityId)
                .orElseThrow(() -> new ResourceNotFoundException("GeneralActivity", "id", generalActivityId));
    }

    @PutMapping("/generalActivities/{id}")
    public GeneralActivity updateGeneralActivity(@PathVariable(value = "id") Long generalActivityId,
                                   @Valid @RequestBody GeneralActivity activityDetails) {

        GeneralActivity generalActivities = generalActivityRepository.findById(generalActivityId)
                .orElseThrow(() -> new ResourceNotFoundException("GeneralActivity", "id", generalActivityId));

        //TODO: use setters for activities(activityDetails)

        GeneralActivity updatedActivity = generalActivityRepository.save(generalActivities);
        return updatedActivity;
    }

    @DeleteMapping("/generalActivities/{id}")
    public ResponseEntity<?> deleteGeneralActivity(@PathVariable(value = "id") Long generalActivityId) {
        GeneralActivity generalActivities = generalActivityRepository.findById(generalActivityId)
                .orElseThrow(() -> new ResourceNotFoundException("GeneralActivity", "id", generalActivityId));

        generalActivityRepository.delete(generalActivities);

        return ResponseEntity.ok().build();
    }
}
