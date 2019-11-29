package com.freizeitfinder.freizeitfinderserver.controller;

import com.freizeitfinder.freizeitfinderserver.model.Activity;
import com.freizeitfinder.freizeitfinderserver.repository.ActivityRepository;
import com.freizeitfinder.freizeitfinderserver.repository.GeneralActivityRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.LinkedList;
import java.util.List;

@RestController
@RequestMapping("/api/search")
public class SearchController {

    @Autowired
    GeneralActivityRepository generalActivityRepository ;

    @Autowired
    ActivityRepository activityRepository;

    @GetMapping("/activity/{line}&{categories}&{ort}&{timeVon}&{timeBis}")
    public List<Activity> getActivitiesBySearchCriteria(@PathVariable(value = "line") String line,
                                                       @PathVariable(value = "categories")String categories,
                                                       @PathVariable(value = "ort") String ort,
                                                       @PathVariable(value = "timeVon") String timeVon,
                                                       @PathVariable(value = "timeBis") String timeBis){
        List<Activity> activities = activityRepository.findAll();
        List<Activity> toReturn = new LinkedList<>();

        for (Activity activity : activities) {
            if(!("null".equalsIgnoreCase(line)||line.isEmpty())){
                if (activity.getDescription().contains(line)||
                        activity.getGeneralActivity().getDescription().contains(line)||
                        activity.getGeneralActivity().getName().contains(line))toReturn.add(activity);
            }
        }
        return toReturn;


    }
}
