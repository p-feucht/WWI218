package com.freizeitfinder.freizeitfinderserver.controller;

import com.freizeitfinder.freizeitfinderserver.model.Activity;
import com.freizeitfinder.freizeitfinderserver.model.GeneralActivity;
import com.freizeitfinder.freizeitfinderserver.repository.ActivityRepository;
import com.freizeitfinder.freizeitfinderserver.repository.GeneralActivityRepository;
import com.freizeitfinder.freizeitfinderserver.templates.ActivitySearchTemplate;
import com.freizeitfinder.freizeitfinderserver.templates.GeneralActivitySearchTemplate;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;
import java.util.List;

@RestController
@RequestMapping("/api/search")
public class SearchController {

    @Autowired
    GeneralActivityRepository generalActivityRepository ;

    @Autowired
    ActivityRepository activityRepository;

    @PostMapping("/generalActivity")
    public List<GeneralActivity>getGeneralActivityListBySearchCriteria(@ModelAttribute GeneralActivitySearchTemplate searchTemplate){
        System.out.println(searchTemplate.isOutside());
        EntityManagerFactory entityManagerFactory = Persistence.createEntityManagerFactory("agisdb");
        EntityManager entityManager = entityManagerFactory.createEntityManager();
        String query = "select g.* from activity a, general_activity g " +
                "where a.activity_id = g.id " +
                "and (g.alcohol = :alcohol " +
                "or g.inside = :inside " +
                "or g.game = :game " +
                "or g.outside = :outside " +
                "or g.inside = :inside " +
                "or g.sport = :sport " +
                "or g.name like('%'||:string||'%') " +
                "or g.description like ('%'||:string||'%') " +
                "or a.description like ('%'||:string||'%'))" +
                "or a.end_time = (:endTime) " +
                "or a.start_time = (:startTime) " +
                "or g.city_name = ('%'||:place||'%')";
        Query q = entityManager.createNativeQuery(query)
                .setParameter("alcohol", searchTemplate.isAlcohol())
                .setParameter("inside", searchTemplate.isInside())
                .setParameter("game", searchTemplate.isGames())
                .setParameter("outside", searchTemplate.isOutside())
                .setParameter("inside",searchTemplate.isInside())
                .setParameter("sport", searchTemplate.isSport())
                .setParameter("string", searchTemplate.getSearchString())
                .setParameter("endTime", searchTemplate.getTimeEnd())
                .setParameter("startTime", searchTemplate.getTimeStart())
                .setParameter("place", searchTemplate.getPlace());
        List<GeneralActivity> activities = q.getResultList();

        return activities;
    }

    @PostMapping("/activity")
    public List<Activity>getActivityListBySearchCriteria(@ModelAttribute ActivitySearchTemplate searchTemplate){
        System.out.println(searchTemplate.isOutside());
        EntityManagerFactory entityManagerFactory = Persistence.createEntityManagerFactory("agisdb");
        EntityManager entityManager = entityManagerFactory.createEntityManager();
        String query = "select a.* from activity a, general_activity g " +
                "where a.activity_id = g.id " +
                "and (g.alcohol = :alcohol " +
                "or g.inside = :inside " +
                "or g.game = :game " +
                "or g.outside = :outside " +
                "or g.inside = :inside " +
                "or g.sport = :sport " +
                "or g.name like('%'||:string||'%') " +
                "or g.description like ('%'||:string||'%') " +
                "or a.description like ('%'||:string||'%'))" +
                "or a.end_time = (:endTime) " +
                "or a.start_time = (:startTime) " +
                "or g.city_name = ('%'||:place||'%')";
        Query q = entityManager.createNativeQuery(query)
                .setParameter("alcohol", searchTemplate.isAlcohol())
                .setParameter("inside", searchTemplate.isInside())
                .setParameter("game", searchTemplate.isGames())
                .setParameter("outside", searchTemplate.isOutside())
                .setParameter("inside",searchTemplate.isInside())
                .setParameter("sport", searchTemplate.isSport())
                .setParameter("string", searchTemplate.getSearchString())
                .setParameter("endTime", searchTemplate.getTimeEnd())
                .setParameter("startTime", searchTemplate.getTimeStart())
                .setParameter("place", searchTemplate.getPlace());
        List<Activity> activities = q.getResultList();

        return activities;
    }
}
