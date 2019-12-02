package com.freizeitfinder.freizeitfinderserver.repository;

import com.freizeitfinder.freizeitfinderserver.model.Activity;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface ActivityRepository extends JpaRepository<Activity, Long> {
    Page<Activity> findByGeneralActivityId(Long activityId, Pageable pageable);
    Optional<Activity> findByIdAndGeneralActivityId(Long id, Long activityId);
}
