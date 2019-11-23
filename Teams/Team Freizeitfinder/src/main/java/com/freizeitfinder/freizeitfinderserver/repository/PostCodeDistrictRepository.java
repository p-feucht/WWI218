package com.freizeitfinder.freizeitfinderserver.repository;

import com.freizeitfinder.freizeitfinderserver.model.PostCodeDistrict;
import org.springframework.data.jpa.repository.JpaRepository;

public interface PostCodeDistrictRepository extends JpaRepository<PostCodeDistrict, Long> {
}
