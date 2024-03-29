package com.freizeitfinder.freizeitfinderserver.controller;

import com.freizeitfinder.freizeitfinderserver.exception.ResourceNotFoundException;
import com.freizeitfinder.freizeitfinderserver.model.GeneralActivity;
import com.freizeitfinder.freizeitfinderserver.repository.GeneralActivityRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api")
public class GeneralActivityController {
    @Autowired
    GeneralActivityRepository generalActivityRepository;

    @GetMapping(path = "/generalActivities")
    public List<GeneralActivity> getAllGeneralActivities() {
        return generalActivityRepository.findAll();
    }

    @PostMapping(path = "/generalActivities")
    public GeneralActivity createGeneralActivity(@ModelAttribute GeneralActivity generalActivities) {
        return generalActivityRepository.save(generalActivities);
    }

    @GetMapping(path = "/generalActivities/{id}",  consumes = MediaType.TEXT_PLAIN_VALUE)
    public GeneralActivity getGeneralActivityById(@PathVariable(value = "id") Long generalActivityId) {
        return generalActivityRepository.findById(generalActivityId)
                .orElseThrow(() -> new ResourceNotFoundException("GeneralActivity", "id", generalActivityId));
    }
}
