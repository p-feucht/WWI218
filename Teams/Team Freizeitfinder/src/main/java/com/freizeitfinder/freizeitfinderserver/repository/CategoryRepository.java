package com.freizeitfinder.freizeitfinderserver.repository;

import com.freizeitfinder.freizeitfinderserver.model.Category;
import org.springframework.data.jpa.repository.JpaRepository;

public interface CategoryRepository extends JpaRepository<Category, Long> {
}
