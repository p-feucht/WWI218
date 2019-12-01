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
        String query = "select * from general_activity " +
                "where name like ('%'||:string||'%') " +
                "or description like ('%'||:string||'%') " +
                "or city_name like ('%'||:place||'%') " +
                "or alcohol = :alcohol " +
                "or inside = :inside " +
                "or game = :game " +
                "or outside = :outside " +
                "or sport = :sport " +
                "or with_others = :societal";
        Query q = entityManager.createNativeQuery(query)
                .setParameter("alcohol", searchTemplate.isAlcohol())
                .setParameter("societal", searchTemplate.isSocietal())
                .setParameter("game", searchTemplate.isGames())
                .setParameter("outside", searchTemplate.isOutside())
                .setParameter("inside",searchTemplate.isInside())
                .setParameter("sport", searchTemplate.isSport())
                .setParameter("string", searchTemplate.getSearchString())
                .setParameter("place", searchTemplate.getPlace());
        return (List<GeneralActivity>) q.getResultList();
    }

    @PostMapping("/activity")
    public List<Activity>getActivityListBySearchCriteria(@ModelAttribute ActivitySearchTemplate searchTemplate){
        System.out.println(searchTemplate.isOutside());
        EntityManagerFactory entityManagerFactory = Persistence.createEntityManagerFactory("agisdb");
        EntityManager entityManager = entityManagerFactory.createEntityManager();
        String query = "select a.* from activity a, general_activity g " +
                "where a.activity_id = g.id " +
                "and (g.alcohol = :alcohol " +
                "or g.with_others = :societal " +
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
                .setParameter("societal", searchTemplate.isSocietal())
                .setParameter("game", searchTemplate.isGames())
                .setParameter("outside", searchTemplate.isOutside())
                .setParameter("inside",searchTemplate.isInside())
                .setParameter("sport", searchTemplate.isSport())
                .setParameter("string", searchTemplate.getSearchString())
                .setParameter("endTime", searchTemplate.getTimeEnd())
                .setParameter("startTime", searchTemplate.getTimeStart())
                .setParameter("place", searchTemplate.getPlace());
        return (List<Activity>) q.getResultList();
    }
}
