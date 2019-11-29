package com.freizeitfinder.freizeitfinderserver.controller;

import com.freizeitfinder.freizeitfinderserver.Helper;
import com.freizeitfinder.freizeitfinderserver.model.Activity;
import com.freizeitfinder.freizeitfinderserver.model.Category;
import com.freizeitfinder.freizeitfinderserver.repository.ActivityRepository;
import com.freizeitfinder.freizeitfinderserver.repository.GeneralActivityRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.HashSet;
import java.util.List;
import java.util.Set;

@RestController
@RequestMapping("/api/search")
public class SearchController {

    @Autowired
    GeneralActivityRepository generalActivityRepository ;

    @Autowired
    ActivityRepository activityRepository;

    @GetMapping("/activity/{line}&{categories}&{ort}&{timeVon}&{timeBis}")
    public Set<Activity> getActivitiesBySearchCriteria(@PathVariable(value = "line") String line,
                                                       @PathVariable(value = "categories")String categories,
                                                       @PathVariable(value = "ort") String ort,
                                                       @PathVariable(value = "timeVon") String timeVon,
                                                       @PathVariable(value = "timeBis") String timeBis){
        List<Activity> activities = activityRepository.findAll();
        Set<Activity> toReturn = new HashSet<>();

        for (Activity activity : activities) {
            if(!("null".equalsIgnoreCase(line)||line.isEmpty())){
                if (activity.getDescription().contains(line)||
                        activity.getGeneralActivity().getDescription().contains(line)||
                        activity.getGeneralActivity().getName().contains(line)){
                    toReturn.add(activity);
                }
            }
            if (!("null".equalsIgnoreCase(categories)||categories.isEmpty())){
                loop:
                for (Category category:activity.getGeneralActivity().getCategories()) {
                    for (String extractedCategory :
                            Helper.extractCategories(categories)) {
                        if(category.getName_category().equalsIgnoreCase(extractedCategory)){
                            toReturn.add(activity);
                            break loop;
                        }
                    }
                }

            }
            if (!("null".equalsIgnoreCase(ort)||ort.isEmpty())){
                if(activity.getGeneralActivity().getCityName().contains(ort)){
                    toReturn.add(activity);
                }
            }
            if(!("null".equalsIgnoreCase(timeBis)||timeBis.isEmpty())){

            }
            if (!("null".equalsIgnoreCase(timeVon)||timeVon.isEmpty())){

            }
        }
        return toReturn;
    }
}
