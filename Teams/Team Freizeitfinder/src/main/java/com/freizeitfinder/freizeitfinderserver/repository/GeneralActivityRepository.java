package com.freizeitfinder.freizeitfinderserver.repository;

import com.freizeitfinder.freizeitfinderserver.model.Activity;
import com.freizeitfinder.freizeitfinderserver.model.GeneralActivity;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.Optional;

public interface GeneralActivityRepository extends JpaRepository<GeneralActivity, Long> {

}
